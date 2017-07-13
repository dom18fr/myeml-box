import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLDrupalConnector from "./components/MyEMLDrupalConnector";

const container = document.getElementById('myeml-drupal-connector');
const input = document.querySelector('#myeml-drupal-connector input[type=hidden]');

const baseUrl = container.getAttribute('data-base-url');
const inputData = {
  value: input.getAttribute('value'),
  name: input.getAttribute('name'),
  id: input.getAttribute('id')
};

// Capture submit event to work on iframe content first then the submit will be performed anyway
window.onload = function (e) {
  getParent(container, 'form').addEventListener('submit', processSubmit);
}

function processSubmit(e) {
    e.preventDefault();

    const iframe = document.querySelector('#myeml-drupal-connector iframe#drupal-connector-iframe');
    if (null !== iframe) {
        container.dispatchEvent(new Event('parent-submit'));
    } else {
        e.target.submit();
    }

    return false;
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
