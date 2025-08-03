<?php
/**
 * CounterupPluginAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

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