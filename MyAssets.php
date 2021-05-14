<?php
/**
 * Date: 17.01.14
 * Time: 1:06
 */

namespace mihaildev\ckeditor;

use yii\web\AssetBundle;

class MyAssets extends AssetBundle{
        public $sourcePath = '@mihaildev/ckeditor/my_assets';

    public $js = [
		'js.js',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}