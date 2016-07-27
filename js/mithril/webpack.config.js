var webpack = require('webpack');

module.exports = {
  // webpackが読み込むファイルを指定します。
  entry: {
    app: "./source/scripts/entry.msx"
  },
  output: {
    path: './public/js',
    // publicPath は webpack-dev-server で自動コンパイルするために必要
    // (URLにおけるJSファイルへのパスを書く)
    publicPath: '/js/',
    filename: "[name].js"
  },
  module: {
      loaders: [
      { test: /\.msx/, loader: "msx-loader" }
      ]
  },
  //これもwebpack-dev-serverに関する設定
  devServer: {
    contentBase: 'public/'
  },
  resolve: {
    extensions: ['', '.js', '.css', '.msx']
  },
  plugins: [
    new webpack.ProvidePlugin({
      m: 'mithril'
    })
  ]
  };
