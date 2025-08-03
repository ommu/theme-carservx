<?php
/**
 * ThemeAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
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
		"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900",
		"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i",
		"https://fonts.googleapis.com/css?family=Fjalla+One",
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