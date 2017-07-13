import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLDrupalConnector from "./components/MyEMLDrupalConnector";

const container = document.getElementById('myeml-drupal-connector');
const input = document.querySelector('#myeml-drupal-connector>input[type=hidden]');

const baseUrl = container.getAttribute('data-base-url');
const inputData = {
  value: input.getAttribute('value'),
  name: input.getAttribute('name'),
  id: input.getAttribute('id')
};

ReactDOM.render(<MyEMLDrupalConnector inputData={ inputData } baseUrl={ baseUrl } />, container);
