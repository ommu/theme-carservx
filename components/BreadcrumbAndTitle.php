<?php
namespace themes\carservx\components;

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

	public function run() {
		return $this->render('breadcrumb_and_title');
	}
}