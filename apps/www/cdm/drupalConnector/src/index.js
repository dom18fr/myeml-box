import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLDrupalConnector from "./components/MyEMLDrupalConnector";

// @todo: get all relevant information about actual hidden field to render it thru react
const container = document.getElementById('myeml-drupal-connector');

ReactDOM.render(<MyEMLDrupalConnector />, container);