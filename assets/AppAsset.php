<?php
/**
 * @link http://github
 * @copyright Copyright (c) 2017 JackLee
 * @license MIT
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author HoangPhuc <adv.globalmedia2@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
