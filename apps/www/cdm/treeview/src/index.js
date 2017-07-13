import React from 'react';
import ReactDOM from 'react-dom';
import MyEMLTreeView from "./components/MyEMLTreeView";

const container = document.getElementById('myeml-treeview');
const apiUrl = container.getAttribute('data-api-url');

ReactDOM.render(<MyEMLTreeView apiUrl={ apiUrl } />, container);