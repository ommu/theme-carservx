<?php
/**
 * ThemePreviewPluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class ThemePreviewPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';

	public $css = [
		"css/preview/style.css",
		"https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900",
		"https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic",
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
			'layouts/',
			'modules/',
			'site/',
			'views/',
		],
	];
}