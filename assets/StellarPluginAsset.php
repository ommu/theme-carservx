<?php
namespace themes\carservx\assets;

class StellarPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/stellar.js';

	public $js = [
		'jquery.stellar.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}