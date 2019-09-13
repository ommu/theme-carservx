<?php
/**
 * ThemePluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

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