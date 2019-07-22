<?php
namespace themes\carservx\assets;

class SwitcherPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';

	public $css = [
		"css/switcher.css",
	];

	public $js = [
		'js/switcher.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
		'except' => [
			'assets/',
			'components/',
			'controllers/',
			'demo/',
			'fonts/',
			'images/',
			'layouts/',
			'modules/',
			'site/',
			'views/',
		],
	];
}