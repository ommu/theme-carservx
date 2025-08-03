<?php
/**
 * BreadcrumbAndTitle
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
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