<?php
namespace themes\carservx\assets;

class MagnificPopupPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/magnific-popup/dist';

	public $css = [
		'magnific-popup.css',
	];

	public $js = [
		'jquery.magnific-popup.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}