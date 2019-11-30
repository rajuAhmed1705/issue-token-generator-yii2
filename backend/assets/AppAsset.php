<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.css',
        'css/style.css',
        'css/style-responsive.css',
    ];
    public $js = [
        //'lib/jquery/jquery.min.js',
        //'lib/bootstrap/js/bootstrap.min.js',
        //'lib/jquery.backstretch.min.js',
        //'lib/jquery.dcjqaccordion.2.7.js',
        ////'lib/jquery.scrollTo.min.js',
        //'lib/jquery.nicescroll.js',
        //'lib/common-scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
