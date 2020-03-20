<?php
/**
 * ThemeHomePluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class ThemeHomePluginAsset extends \yii\web\AssetBundle
{
	public $depends = [
		"themes\carservx\assets\RevolutionSliderPluginAsset",
		"themes\carservx\assets\CounterupPluginAsset",
		"themes\carservx\assets\MagnificPopupPluginAsset",
		"themes\carservx\assets\OwlCarouselPluginAsset",
	];
}