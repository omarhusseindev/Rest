const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: process.env.NODE_ENV,
  entry: {
    css: ['./src/index.scss'],
    js: ['./src/index.js'],
    validation: ['./src/validation.js']
  },
  output: {
    filename: '[name].js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          // fallback to style-loader in development
          process.env.NODE_ENV !== 'production'
            ? 'style-loader'
            : MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
  ],
};