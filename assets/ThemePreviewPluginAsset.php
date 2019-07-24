<?php
namespace themes\carservx\assets;

class ThemePreviewPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';

	public $css = [
		"css/preview/style.css",
	];

	public $js = [
		"js/preview/custom.js",
	];

	public $depends = [
		'yii\web\JqueryAsset',
		"yii\bootstrap\BootstrapPluginAsset",
		"themes\carservx\assets\FontAwesomeAsset",
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
		'except' => [
			'assets/',
			'components/',
			'controllers/',
			'fonts/',
			'layouts/',
			'modules/',
			'site/',
			'views/',
		],
	];
}