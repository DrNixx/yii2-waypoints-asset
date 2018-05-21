<?php
namespace onix\assets;

use yii\web\AssetBundle;

class WaypointsAsset extends AssetBundle
{
    public $sourcePath = '@bower/waypoints/lib';

    public $js = [
        'jquery.waypoints.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
