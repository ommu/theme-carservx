<?php
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