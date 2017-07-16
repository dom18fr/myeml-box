import React, { Component} from 'react';

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
      state.value = this.props.value;
    }

    this.state = state;
    this.onReceiveMessage = this.onReceiveMessage.bind(this);

    this.onCreateNew = this.onCreateNew.bind(this);
    this.onCancel = this.onCancel.bind(this);
    this.onUnlink = this.onUnlink.bind(this);
    this.onCreateFromExisting = this.onCreateFromExisting.bind(this);
    this.onReuseExisting = this.onReuseExisting.bind(this);
    this.onDelete = this.onDelete.bind(this);

    this.container = document.getElementById('myeml-drupal-connector');
  }

  componentDidMount() {
    this.notifyChange();
  }

  componentDidUpdate() {
    this.notifyChange();
  }

  notifyChange() {
    const event = new Event('connector-update');
    event.drupalConnector = {
      action: this.state.action
    };
    this.container.dispatchEvent(event);
    if (null !== this.state.action) {
      window.addEventListener('message', this.onReceiveMessage);
    } else {
      window.removeEventListener('message', this.onReceiveMessage); 
    }
  }
  
  onReceiveMessage(event) {
    let message = '';
    try {
      message = JSON.parse(event.data)
    } catch(error) {
      console.error(error);
    }
    console.log('CDM reveived message from CMS.');
    if ('object' === typeof(message)) {
      console.log('"' + message.op + '" operation performed in cms');
      if ('insert' === message.op) {
        this.setState(
          {
            action: 'submit',
            drupalEntityType: message.entity_type,
            drupalEntityId: message.entity_id,
            inputValue: message.entity_type + '--' + message.entity_id
          }
        );
      }
      if ('update' === message.op) {
        this.setState(
          {
            action: 'submit',
          }
        );
      }
      if ('delete' === message.op) {
        this.setState(
          {
            action: null,
            drupalEntityType: null,
            drupalEntityId: null,
            inputValue: ''
          }
        );
      }
      if ('select' === message.op) {
        console.log('select it !');
        this.setState(
          {
            action: 'edit',
            drupalEntityType: message.entity_type,
            drupalEntityId: message.entity_id,
            inputValue: message.entity_type + '--' + message.entity_id
          }
        );
      }
    }
  }

  onCreateNew() {
    this.setState({action: 'add'});
  }

  onCancel() {
    this.setState({action: null});
  }

  onUnlink() {
    this.setState(
      {
        action: null,
        drupalEntityType: null,
        drupalEntityId: null,
        inputValue: '',
      }
    );
  }

  onCreateFromExisting() {
    console.warn('action "Create from existing" is not implemented yet');
    alert('This action is not implemented yet.');
  }

  onReuseExisting() {
    this.setState(
      {
        action: 'reuse',
      }
    );
  }

  onDelete() {
    this.setState(
      {
        action: 'delete',
      }
    );
  }

  render () {
    let iframeUrl = this.props.baseUrl;
    if ('edit' === this.state.action) {
      iframeUrl = [
        iframeUrl,
        this.state.drupalEntityType,
        this.state.drupalEntityId,
        'edit'
      ].join('/') + '?token=' + Math.floor(Math.random() * 100000);
    }
    if ('add' === this.state.action) {
      iframeUrl = [
        iframeUrl,
        'node',
        'add',
        'page'
      ].join('/') + '?cdmNodeTitle=' + encodeURI(this.props.cdmNodeTitle) + '&token=' + Math.floor(Math.random() * 100000);
    }
    if ('delete' === this.state.action) {
      iframeUrl = [
        iframeUrl,
        this.state.drupalEntityType,
        this.state.drupalEntityId,
        'delete'
      ].join('/') + '?token=' + Math.floor(Math.random() * 100000);
    }
    if ('reuse' === this.state.action) {
      iframeUrl = [
        iframeUrl,
        'node-select',
      ].join('/') + '?token=' + Math.floor(Math.random() * 100000);
    }
    return (
        <div>
            <div className="btn-toolbar">
                { null === this.state.action ? <button type="button" className="btn btn-success btn-xs" onClick={this.onCreateNew}>Create new</button> : null }
                { null === this.state.action ? <button type="button" className="btn btn-default btn-xs" onClick={this.onCreateFromExisting}>Create from existing</button> : null }
                { null === this.state.action ? <button type="button" className="btn btn-info btn-xs" onClick={this.onReuseExisting}>Reuse existing</button> : null }
                { 'edit' === this.state.action ? <button type="button" className="btn btn-warning btn-xs" onClick={this.onUnlink}>Unlink</button> : null }
                { 'edit' === this.state.action ? <button type="button" className="btn btn-danger btn-xs" onClick={this.onDelete}>Delete</button> : null }
                { 'add' === this.state.action || 'reuse' === this.state.action ? <button type="button" className="btn btn-warning btn-xs" onClick={this.onCancel}>Cancel</button> : null }
            </div>
            {
                null === this.state.action ?
                null :
                'submit' === this.state.action ?
                <div>[Processing submit...]</div> :
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
