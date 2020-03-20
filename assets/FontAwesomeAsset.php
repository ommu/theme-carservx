<?php
/**
 * FontAwesomeAsset
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\assets;

class FontAwesomeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/fortawesome/font-awesome';
	
	public $css = [
		'css/font-awesome.min.css',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}