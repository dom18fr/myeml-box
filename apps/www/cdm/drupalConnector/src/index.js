import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLDrupalConnector from "./components/MyEMLDrupalConnector";

const container = document.getElementById('myeml-drupal-connector');
const form = getParent(container, 'form');
const input = document.querySelector('#myeml-drupal-connector input[type=hidden]');

const baseUrl = container.getAttribute('data-base-url');
const inputData = {
  value: input.getAttribute('value'),
  name: input.getAttribute('name'),
  id: input.getAttribute('id')
};

// Capture submit event to work on iframe content first then the submit will be performed anyway
window.onload = function (e) {
  container.addEventListener('connector-update', onConnectorUpdate);
}

function processSubmit(e) {
    e.preventDefault();
    const iframe = document.querySelector('#myeml-drupal-connector iframe#drupal-connector-iframe');
    iframe.contentWindow.postMessage('parent-submit', baseUrl);
    // post message to iframe// getParent(container, 'form').addEventListener('submit', processSubmit);

    return false;
}

function postMessageListener() {
  // Here listen to message from iframe and retrigg form submit if needed
    if (null !== iframe) {
        container.dispatchEvent(new Event('parent-submit'));
    } else {
        e.target.submit();
    }
}

function onConnectorUpdate(event) { 
  if (null !== event.drupalConnector.action) {
    form.addEventListener('submit', processSubmit); 
  } else {
    form.removeEventListener('submit', processSubmit);
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

ReactDOM.render(<MyEMLDrupalConnector inputData={ inputData } baseUrl={ baseUrl } />, container);
