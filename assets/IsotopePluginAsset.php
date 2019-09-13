<?php
/**
 * IsotopePluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class IsotopePluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/isotope-layout/dist';

	public $js = [
		'isotope.pkgd.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}