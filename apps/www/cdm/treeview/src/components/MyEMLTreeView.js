import React, {Component} from 'react';
import SortableTree from 'react-sortable-tree';
import axios from "axios";

export default class MyEMLTreeView extends Component {

  constructor(props) {
    super(props);

    this.state = {
      treeData: [],
      loading: true,
    };
  }

  componentWillMount() {
    this.getTreeData().then((json) => {
      console.log(json)
      this.setState({
        treeData: [
          { 
            title: 'Chicken', 
            children: [ 
              { 
                title: 'Egg' 
              }
            ] 
          }
        ],
        loading: false
      })
    });
  }

  getTreeData() {
    return axios(
      {
        method: 'get',
        url: '/app_dev.php/api/nodes'
      }
    )
    .catch((error) => {
      error.log('Error when fetching data');
    });
  }

  render () {
    return (
      <div style={ {height: 400} }>
          { this.state.loading ? 
            <span>[LOADING ...]</span> : 
            <SortableTree treeData={this.state.treeData} onChange={treeData => this.setState({ treeData })} />
          }
      </div>
    )
  }
}
