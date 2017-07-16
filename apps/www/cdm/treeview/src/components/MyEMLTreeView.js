import React, {Component} from 'react';
import SortableTree from 'react-sortable-tree';
import axios from 'axios';

export default class MyEMLTreeView extends Component {

  constructor(props) {
    super(props);

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
      let node = {
        title: eavNode.nodeTitle,
        expanded: true,
        id: eavNode.id
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
      <div style={ {height: 2000} }>
          { this.state.loading ? 
            <span>[LOADING ...]</span> : 
            <SortableTree 
              treeData={this.state.treeData} 
              onChange={treeData => this.setState({ treeData })}
              canDrag={false}
              generateNodeProps={row => ({
                buttons: [
                  <div className="btn-group btn-group-xs btn-group-nowrap">
                    <a href={'/app_dev.php/tree/Node/' + row.node.id + '/edit'} className="btn btn-primary" data-target-element="#tg_right">
                      <i className="fa fa-edit"></i>
                    </a>
                    <a href={'/app_dev.php/tree/Node/' + row.node.id + '/clone'} className="btn btn-default" data-target-element="#tg_right">
                      <i className="fa fa-clone"></i>
                    </a>
                    <a href={'/app_dev.php/tree/Node/' + row.node.id + '/delete'} className="btn btn-danger" data-target-element="#tg_right">
                      <i className="fa fa-remove"></i>
                    </a>
                  </div>
                ],
              })}
            />
          }
      </div>
    )
  }
}
