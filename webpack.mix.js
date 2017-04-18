const { mix } = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin'); // 实时刷新插件
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .webpackConfig({ // 实时刷新配置
     plugins: [
        new BrowserSyncPlugin({
            files: [
                'app/**/*',
                'public/**/*',
                'resources/views/**/*',
                'routes/**/*'
            ]
        })
    ]
  });

  const PATH = 'packages/nanacms/admin/'
  mix.js(PATH + 'resources/assets/js/app.js', '../' + PATH + 'public/public/js')
     .sass(PATH + 'resources/assets/sass/app.scss', '../' + PATH + 'public/css')
     .webpackConfig({
       plugins: [
          new BrowserSyncPlugin({
              files: [
                  PATH + 'app/**/*',
                  PATH + 'public/**/*',
                  PATH + 'resources/views/**/*'
              ]
          })
      ]
    });
