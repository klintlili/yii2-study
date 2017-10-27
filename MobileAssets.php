<?php

namespace klintlili\mobileQuery;

use yii\base\View;
use yii\web\AssetBundle;

class MobileAssets extends AssetBundle
{
    public $sourcePath = '@klintlili/mobileQuery/web';
    public $css = [
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/base.js',
    ];

//    public $depends = [
//         'yii\web\YiiAsset',
//         'yii\bootstrap\BootstrapAsset',
//     ];

    public function init()
    {
        $this->jsOptions['position'] = \yii\web\View::POS_END;

    }
//    public $jsOptions = ['position' => \yii\web\View::POS_END];
}