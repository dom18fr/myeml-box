import React, { Component} from 'react';
import ReactDOM from 'react-dom';

export default class MyEMLDrupalConnector extends Component {

  constructor(props) {
    super(props);
    
    let state = {
      drupalEntityType: null,
      drupalEntityId: null,
      action: null,
      inputValue: null !== this.props.inputData.value ? this.props.inputData.value : ''
    };

    if (null !== this.props.inputData.value) {
      const splittedValue = this.props.inputData.value.split('--');
      state.drupalEntityType = 'undefined' !== typeof(splittedValue[0]) ? splittedValue[0] : null;
      state.drupalEntityId = 'undefined' !== typeof(splittedValue[1]) ? splittedValue[1] : null;
      state.action = 'edit';
    }

    this.state = state;
    this.onCreateNew = this.onCreateNew.bind(this);
    this.onCancel = this.onCancel.bind(this);
    this.onParentSubmit = this.onParentSubmit.bind(this);
  }

  onCreateNew() {
    this.setState({action: 'add'});
  }

  onCancel() {
    this.setState({action: null});
  }

  onParentSubmit(event) {
    console.log(event);
  }

  componentDidMount() {
    document
        .getElementById('myeml-drupal-connector')
        .addEventListener('parent-submit', this.onParentSubmit);
  }

  componentWillUnmount() {
    document
        .removeEventListener("parent-submit", this.onParentSubmit);
  }

  render () {
    let iframeUrl = this.props.baseUrl;
    if ('edit' === this.state.action) {
      iframeUrl = [
        iframeUrl, 
        this.state.drupalEntityType, 
        this.state.drupalEntityId, 
        'edit'
      ].join('/');
    }
    if ('add' === this.state.action) {
      iframeUrl = [
        iframeUrl, 
        'node', 
        'add'
      ].join('/');
    }
    return (
        <div>
            <div className="btn-toolbar">
                { null === this.state.action ? <button type="button" className="btn btn-success btn-xs" onClick={this.onCreateNew}>Create new</button> : null } 
                { null === this.state.action ? <button className="btn btn-default btn-xs">Create from existing</button> : null }
                { null === this.state.action ? <button className="btn btn-info btn-xs">Reuse existing</button> : null }
                { 'edit' === this.state.action ? <button className="btn btn-warning btn-xs">Unlink</button> : null }
                { 'edit' === this.state.action ? <button className="btn btn-danger btn-xs">Delete</button> : null }
                { 'add' === this.state.action ? <button className="btn btn-warning btn-xs" onClick={this.onCancel}>Cancel</button> : null }
            </div>
            { 
                null === this.state.action ? 
                null : 
                <iframe 
                    id="drupal-connector-iframe"
                    src={ iframeUrl } 
                    style={{ width: '100%', height: '800px' }}
                /> 
            }
            <input 
                type="hidden"
                name={this.props.inputData.name}
                id={this.props.inputData.id}
                value={this.state.inputValue}
            />
      </div>
    )
  }
}
