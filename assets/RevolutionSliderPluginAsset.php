<?php
/**
 * RevolutionSliderPluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

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