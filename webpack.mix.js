const mix = require('laravel-mix');



/************************************************ 
    
                    WEBSITE

************************************************/


mix.styles([
    'public/css/plugin/animate.min.css',
    'public/css/plugin/bootstrap.min.css',
    'public/css/plugin/themify.css',
    'public/css/page/general.css',
    'public/css/page/index.css',
], 'public/css/prod/index.min.css');

mix.scripts([
    'public/js/plugin/jquery.min.js',
    'public/js/plugin/sweetalert.min.js',
    'public/js/plugin/wow.min.js',
    'public/js/plugin/fontfile.js',
    'public/js/page/general.js',
], 'public/js/prod/index.min.js')







/*****************************************************

                 COMPONENT WEBPACK

*****************************************************/

mix.scripts(
    [
        "public/js/plugin/jquery.min.js",
        "public/js/plugin/popper.min.js",
        "public/js/plugin/bootstrap.min.js",
        "public/js/plugin/sweetalert.min.js",
        "public/js/plugin/toastify.js",
        "public/js/plugin/tooltipster.bundle.min.js",
    ],
    "public/js/prod/component/general.min.js"
);

mix.styles(
    [
        "public/css/plugin/themify/themify.css",
        "public/css/plugin/animate.min.css",
        "public/css/plugin/toastify.css",
        "public/css/plugin/bootstrap.min.css",
        "public/css/plugin/tooltipster.bundle.min.css",
        "public/css/plugin/fontawesome/fontawesome.css"
    ],
    "public/css/prod/component/general.min.css"
);
