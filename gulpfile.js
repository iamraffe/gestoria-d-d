var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss');
    mix.version(['public/css/app.css']);

    //mix.scripts(["custom.js"], "public/js/all.js", "resources/assets/js");

    mix.scripts(["jquery.js", "bootstrap.js", "classie.js", "freelancer.js","jqBootstrapValidation.js", "cbpAnimatedHeader.js", "jqBootstrapValidation.js"], "public/js/libs.js", "resources/assets/js");
});
