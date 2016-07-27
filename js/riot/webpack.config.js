module.exports = {
  // webpackが読み込むファイルを指定します。
  entry: {
    app: "./src/main.js"
  },
  output: {
    path: './public/js',
    publicPath: '/js/',
    filename: "[name].js"
  },
  module: {
    loaders: [
    ]
  },
  //これもwebpack-dev-serverに関する設定
  devServer: {
    contentBase: 'public/'
  },
  resolve: {
    extensions: ['', '.js', '.css']
  }
};
