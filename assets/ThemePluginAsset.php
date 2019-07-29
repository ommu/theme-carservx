<?php
namespace themes\carservx\assets;

class ThemePluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';

	public $js = [
		"js/custom.js",
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'themes\carservx\assets\ThemeAsset',
		"yii\bootstrap\BootstrapPluginAsset",
		'themes\carservx\assets\WaypointsPluginAsset',
		'themes\carservx\assets\SwitcherPluginAsset',
		'themes\carservx\assets\StellarPluginAsset',
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