var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.scripts([
      '../../../node_modules/bootstrap-less/js/*'
    ], 'public/js/bootstrap.js');
    mix.copy('node_modules/bootstrap-less/fonts', 'public/fonts');
    mix.copy('bower_components/jquery/dist', 'public/js');
    mix.copy('resources/assets/images/', 'public/images');
});
