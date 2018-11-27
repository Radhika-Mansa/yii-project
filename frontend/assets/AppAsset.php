<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'fonts/font-awesome.min.css',
        'fonts/simple-line-icons.css',
        'css/slicknav.css',
        'css/menu_sideslide.css',
        'css/slide-style.css',
        'css/nivo-lightbox.css',
        'css/animate.css',
        'css/main.css',
        'css/responsive.css',
        
    ];
    public $js = [
    'js/jquery-min.js',
    'js/popper.min.js',
    'js/bootstrap.min.js',
    'js/jquery.mixitup.js',
    'js/jquery.counterup.min.js',
    'js/waypoints.min.js',
    'js/wow.js',
    'js/jquery.nav.js',
    'js/jquery.easing.min.js',  
    'js/nivo-lightbox.js',
    'js/jquery.slicknav.js',
    'js/main.js',
    'js/form-validator.min.js',
    'js/contact-form-script.min.js',
    'js/map.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
 