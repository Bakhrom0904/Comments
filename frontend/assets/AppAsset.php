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
        'css/site.css',
        "lib/font-awesome/css/font-awesome.css",
        "lib/Ionicons/css/ionicons.css",
        "lib/perfect-scrollbar/css/perfect-scrollbar.css",
        "lib/jquery-switchbutton/jquery.switchButton.css",
        "lib/rickshaw/rickshaw.min.css",
        "lib/chartist/chartist.css",
        "css/bracket.css",
    ];
    public $js = [
        "lib/popper.js/popper.js",
        "lib/bootstrap/bootstrap.js",
        "lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js",
        "lib/moment/moment.js",
        "lib/jquery-ui/jquery-ui.js",
        "lib/jquery-switchbutton/jquery.switchButton.js",
        "lib/peity/jquery.peity.js",
        "lib/chartist/chartist.js",
        "lib/jquery.sparkline.bower/jquery.sparkline.min.js",
        "lib/d3/d3.js",
        "lib/rickshaw/rickshaw.min.js",
        "js/bracket.js",
        "js/ResizeSensor.js",
        "js/dashboard.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
