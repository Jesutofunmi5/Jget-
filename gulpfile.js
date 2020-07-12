var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass('app.scss', './public/css/app.css')
        .sass('default.theme.scss', './public/css/default.theme.css');
        
    mix.less('semantic.less', './public/vendor/semantic/semantic.css');
    
    mix.styles([
        'public/vendor/semantic/semantic.css',
        'public/css/default.theme.css',
        'resources/assets/semantic-ui-calendar/dist/calendar.min.css',
        'public/css/app.css'
    ], 'public/css/all.css', './');
    
    mix.scriptsIn('resources/assets/semantic/src/definitions/', './public/vendor/semantic/semantic.js');
    
    mix.scripts([
        'public/vendor/semantic/semantic.js',
        'resources/assets/semantic-ui-calendar/dist/calendar.min.js',
        'resources/assets/js/jSignature.min.js',
        // 'resources/assets/js/signature_pad.js',
        'resources/assets/js/custom.js'
    ], 'public/js/all.js', './');

    mix.scripts([
        'resources/assets/js/flashcanvas.js'
    ], 'public/js/flashcanvas.js', './');
    
    mix.version(['public/css/all.css', 'public/js/all.js', 'public/js/flashcanvas.js']);
    
    mix.copy('resources/assets/semantic/src/themes', './public/themes');
    
});
