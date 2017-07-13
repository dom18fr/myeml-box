import React, {Component} from 'react';

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
    this.createNew = this.createNew.bind(this);
    this.cancel = this.cancel.bind(this);
  }

  createNew() {
    this.setState({action: 'add'});
  }

  cancel() {
    this.setState({action: null});
  }

  render () {
    let iframeUrl = this.props.baseUrl;
    if ('edit' === this.state.action) {
      iframeUrl = [iframeUrl, this.state.drupalEntityType, this.state.drupalEntityId, 'edit'].join('/');
    }
    if ('add' === this.state.action) {
      iframeUrl = [iframeUrl, 'node', 'add'].join('/');
    }
    return (
        <div>
            <div className="btn-toolbar">
                { null === this.state.action ? <button type="button" className="btn btn-success btn-xs" onClick={this.createNew}>Create new</button> : null } 
                { null === this.state.action ? <button className="btn btn-default btn-xs">Create from existing</button> : null }
                { null === this.state.action ? <button className="btn btn-info btn-xs">Reuse existing</button> : null }
                { 'edit' === this.state.action ? <button className="btn btn-warning btn-xs">Unlink</button> : null }
                { 'edit' === this.state.action ? <button className="btn btn-danger btn-xs">Delete</button> : null }
                { 'add' === this.state.action ? <button className="btn btn-warning btn-xs" onClick={this.cancel}>Cancel</button> : null }
            </div>
            { 
                null === this.state.action ? 
                null : 
                <iframe 
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
