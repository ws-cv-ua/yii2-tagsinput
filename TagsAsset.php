<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.10.2019
 * Time: 20:45
 */

namespace wscvua\yii2tagsinput;

use yii\web\AssetBundle;

class TagsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ws-cv-ua/yii2-tagsinput/public';

    public $js = [
        'jquery.tagsinput-revisited.js'
    ];

    public $css = [
        'jquery.tagsinput-revisited.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];
}