<?php
namespace themes\carservx\assets;

class RevolutionSliderPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx/revolution';

	public $css = [
		'css/settings.css',
		'css/navigation.css',
	];

	public $js = [
		'js/jquery.themepunch.tools.min.js',
		'js/jquery.themepunch.revolution.min.js',
		'js/revolution-plugin.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}