<?php
namespace onix\assets;

use yii\web\AssetBundle as YiiAssetBundle;

class WaypointsAsset extends YiiAssetBundle
{
    public $sourcePath = '@bower/waypoints/lib';

    public $js = [
        'jquery.waypoints.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
