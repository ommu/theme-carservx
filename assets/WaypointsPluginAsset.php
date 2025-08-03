<?php
/**
 * WaypointsPluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class WaypointsPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/waypoints/lib';

	public $js = [
		'jquery.waypoints.min.js',
		'shortcuts/sticky.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}