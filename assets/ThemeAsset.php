<?php
/**
 * ThemeAsset
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class ThemeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/carservx';
	
	public $css = [
		"css/loader.min.css",
		"css/style.css",
		"css/flaticon.min.css",
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