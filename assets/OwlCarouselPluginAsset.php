<?php
namespace themes\carservx\assets;

class OwlCarouselPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/owl.carousel/dist';

	public $css = [
		'assets/owl.carousel.min.css',
	];

	public $js = [
		'owl.carousel.min.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}