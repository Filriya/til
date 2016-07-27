
var path         = require('path');
var precss       = require('precss');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var autoprefixer = require('autoprefixer');

module.exports = {
  entry: {
    style: './src/scss/test.css'
  },
  output: {
    path: path.join(__dirname, 'public/css'),
    filename: '[name].css'
  },
  module: {
    loaders: [
    {
      test:   /\.css$/,
      loader: "style-loader!css-loader!postcss-loader"
    },
    {
      test: /\.png$/, loader: "file?name=public/[path][name].[ext]"
  
    }
    ]
  },
  plugins: [
    new ExtractTextPlugin("[name].css")
  ],
  postcss: function () {
    return [precss, autoprefixer];
  }
}

//var path = require('path')
//var ExtractTextPlugin = require('extract-text-webpack-plugin');
//var SpritesmithPlugin = require('webpack-spritesmith');
//
//module.exports = {
//  entry: {
//    style: './scss/main.scss'
//  },
//  output: {
//    path: path.join(__dirname, 'public/css'),
//    filename: '[name].css'
//  },
//  module: {
//    loaders: [
//    {
//      test: /\.scss$/,
//      loader: ExtractTextPlugin.extract("style-loader", "css-loader!sass-loader")
//    },
//    {
//      test: /\.png$/, 
//      loaders: [ 'file?name=i/[hash].[ext]' ]
//    }
//    ]
//  },
//  resolve: {
//    modulesDirectories: ["node_modules", "webpack-generated"]
//  },
//  plugins: [
//    new ExtractTextPlugin("[name].css"),
//    new SpritesmithPlugin({
//      src: {
//        cwd: path.resolve(__dirname, 'images/test'),
//        glob: '*.png'
//      },
//      target: {
//        image: path.resolve(__dirname, 'public/images/sprite.png'),
//        css: path.resolve(__dirname, 'webpack-generated/sprite.scss')
//      },
//      apiOptions: {
//        cssImageRef: "/public/images/sprite.png"
//      },
//      retina: {
//        classifier: '@2x',
//        targetImage: path.resolve(__dirname, 'public/images/sprite@2x.png'),
//        cssImageRef: "/images/sprite@2x.png"
//  
//      }
//    })
//  ]
//};
//
//    retinaImgName: 'sprite-' + rand + '@2x.png',
//    retinaImgPath: '/content/themes/secondpress/images/sprite-' + rand + '@2x.png',
//    retinaSrcFilter: '**/*@2x.png',
//
//    cssName: '_sprite_general_layout.scss',
//    cssOpts: {
//      functions: false
//    }
