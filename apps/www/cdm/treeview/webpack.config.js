var webpack = require('webpack');
var path = require('path');

var BUILD_DIR = path.resolve(__dirname, 'dist');
var APP_DIR = path.resolve(__dirname, 'src');

var config = {
  entry: APP_DIR + '/index.js',
  output: {
    path: BUILD_DIR,
    filename: 'treeview.js'
  },
  module : {
    loaders : [
      {
        test: /\.(js|jsx)$/,
        include: APP_DIR,
        use: 'babel-loader'
      }
    ]
  },
  devServer: {
    watchOptions: {
      ignored: /node_modules/
    }
  }
};

module.exports = config;
