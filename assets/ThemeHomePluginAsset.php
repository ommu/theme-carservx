<?php
namespace themes\carservx\assets;

class ThemeHomePluginAsset extends \yii\web\AssetBundle
{
	public $depends = [
		"themes\carservx\assets\CounterupPluginAsset",
		"themes\carservx\assets\MagnificPopupPluginAsset",
		"themes\carservx\assets\OwlCarouselPluginAsset",
		'themes\carservx\assets\StellarPluginAsset',
	];
}