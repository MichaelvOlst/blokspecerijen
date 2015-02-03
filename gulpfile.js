var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.
        sass('app.scss')
        .scripts(
        [
            'js/app.js'
        ],
        'resources/assets',
        'public/js/app.min.js'
    )
    ;

});
