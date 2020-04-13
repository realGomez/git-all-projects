const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = {

    "mode": "development",

    // entry: './src/index.js',

    entry: {
         app: './src/index.js',
         print: './src/print.js'
    },
    // output: {
    //     filename: 'bundle.js',
    //     path: path.resolve(__dirname, 'dist')
    // },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    devtool: 'inline-source-map',
    devServer: {
         contentBase: './dist'
   },
    plugins: [
         new HtmlWebpackPlugin({
         title: 'Output Management'
     })
    ],
    module:{
        rules:[
            {
             test:/\.css$/,
              use:['style-loader','css-loader']
            },{
                test:/\.(png|svg|jpg|gif)$/,
                use:['file-loader']
            }

        ]
    }
};