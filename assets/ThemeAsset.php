<?php
namespace themes\carservx\assets;

class ThemeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';
	
	public $css = [
		"css/loader.min.css",
		"css/style.css",
		"css/flaticon.min.css",
		"css/skin/skin-1.css",
	];

	public $depends = [
		"yii\bootstrap\BootstrapAsset",
		"themes\carservx\assets\FontAwesomeAsset",
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
		'except' => [
			'assets/',
			'components/',
			'controllers/',
			'layouts/',
			'modules/',
			'site/',
			'views/',
		],
	];
}