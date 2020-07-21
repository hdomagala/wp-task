const path = require('path');
const glob = require('glob');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

// STYLES
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const PurgeCSSPlugin = require('purgecss-webpack-plugin');

// IMAGES
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;

const PATHS = {
    src: path.join(__dirname)
};

module.exports = (env, argv) => {
    const settings = {
        mode: 'development',
        entry: './_src/index.js',
        output: {
            path: path.resolve(__dirname, 'assets'),
        },
        module: {
            rules: [
                {
                    test: /\.s?css$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: {
                                url: false,
                                importLoaders: 1,
                                sourceMap: true
                            }
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                sourceMap: true
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true
                            }
                        },
                    ]
                },
                {
                    test: /\.m?js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                }
            ]
        },
        plugins: [
            new CleanWebpackPlugin(),
            new MiniCssExtractPlugin({
                filename: "main.css",
            }),
            new CopyWebpackPlugin({
                patterns: [
                    {from: '_src/images', to: 'images'},
                    {from: 'node_modules/@fortawesome/fontawesome-free/webfonts', to: 'fonts'},
                ]
            })
        ]
    };

    if (argv.mode === 'development') {
        settings.devtool = "inline-source-map"
    }

    if (argv.mode === 'production') {
        settings.plugins.push(
            new PurgeCSSPlugin({
                paths: glob.sync(`${PATHS.src}/**/*`,  { nodir: true }),
            })
        );
        settings.plugins.push(
            new ImageminPlugin({
                test: /\.(gif|jpe?g|png|svg)$/,
                gifsicle: {
                    interlaced: true,
                    optimizationLevel: 3,
                },
                jpegtran: {progressive: true},
                optipng: {optimizationLevel: 7},
            })
        );
    }

    return settings;
};
