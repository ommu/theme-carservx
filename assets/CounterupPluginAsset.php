<?php
namespace themes\carservx\assets;

class CounterupPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/counterup';

	public $js = [
		'jquery.counterup.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}