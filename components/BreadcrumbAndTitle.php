<?php
/**
 * BreadcrumbAndTitle
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;

class BreadcrumbAndTitle extends \yii\base\Widget
{
	public $banners = [
		'demo/images/banner/1.jpg',
		'demo/images/banner/2.jpg',
		'demo/images/banner/3.jpg',
		'demo/images/banner/4.jpg',
		'demo/images/banner/5.jpg',
		'demo/images/banner/6.jpg',
	];

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('breadcrumb_and_title', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}