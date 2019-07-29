<?php
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