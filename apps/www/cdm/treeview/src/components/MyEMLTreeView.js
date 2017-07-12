import React, {Component} from 'react';
import SortableTree from 'react-sortable-tree';
import axios from "axios";

export default class MyEMLTreeView extends Component {

  constructor(props) {
    super(props);

    this.tree = [];

    this.state = {
      treeData: [],
      loading: true,
    };
  }

  componentWillMount() {
    this.getTreeData().then((treeData) => {
      this.setState({
        treeData: treeData,
        loading: false,
      })
    });
  }

  getTreeData() {
    
    return axios(
      {
        method: 'get',
        url: this.props.apiUrl
      }
    )
    .then((json) => {
      if (200 === json.status && json.hasOwnProperty('data')) {
        if (json.data.hasOwnProperty('hydra:member')) {
          
          return this.buildTree(json.data['hydra:member']);
        }

        return [];
      }
      console.error('Fetched data didn\'t match expected content');
    })
    .catch((error) => {
      console.error(error);
    });
  }

  buildTree(data) {
    let tree = [];
    let eavNode;    
    for(const i in data) {
      const eavNode = data[i];
      console.log(eavNode);
      let node = {
        title: eavNode.nodeTitle
      };
      if (eavNode.hasOwnProperty('children') && 0 < eavNode.children.length) {
        node.children = this.buildTree(eavNode.children);
      }
      tree.push(node);
    };

    return tree;
  }

  render () {
    return (
      <div style={ {height: 400} }>
          { this.state.loading ? 
            <span>[LOADING ...]</span> : 
            <SortableTree 
              treeData={this.state.treeData} 
              onChange={treeData => this.setState({ treeData })} 
              canDrag={false}
              canDrop={false}
            />
          }
      </div>
    )
  }
}
