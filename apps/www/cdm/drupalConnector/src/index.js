import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLDrupalConnector from "./components/MyEMLDrupalConnector";

const container = document.getElementById('myeml-drupal-connector');
container.addEventListener('connector-update', onConnectorUpdate);

const form = getParent(container, 'form');
const input = document.querySelector('#myeml-drupal-connector input[type=hidden]');

const baseUrl = container.getAttribute('data-base-url');
const cdmNodeTitle = container.getAttribute('data-cdm-node-title');
const inputData = {
  value: input.getAttribute('value'),
  name: input.getAttribute('name'),
  id: input.getAttribute('id')
};

function processSubmit(e) {
  e.preventDefault();
  console.log('submit cactched, let\'s transmit to cms');
  const iframe = document.querySelector('#myeml-drupal-connector iframe#drupal-connector-iframe');
  iframe.contentWindow.postMessage('parent-submit', baseUrl);

  return false;
}

function onConnectorUpdate(event) {
  if (null === event.drupalConnector.action) {
    console.log('No action, Remove listenr on form submit');
    form.removeEventListener('submit', processSubmit);
  } else if ('submit' === event.drupalConnector.action) {      
      console.log('Current action is submit, Remove listenr on form submit');
      form.removeEventListener('submit', processSubmit);
      form.submit();
  } else {
    console.log('Bind listenr on form submit');
    form.addEventListener('submit', processSubmit); 
  }
}

function getParent(el, selector) {
  var retval = null;
  while (el) {
    if (el.matches(selector)) {
      retval = el;
      break
    }
    el = el.parentElement;
  }

  return retval;
}

ReactDOM.render(<MyEMLDrupalConnector inputData={ inputData } baseUrl={ baseUrl } cdmNodeTitle={ cdmNodeTitle } />, container);