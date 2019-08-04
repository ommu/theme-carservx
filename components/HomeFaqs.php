<?php
namespace themes\carservx\components;

use Yii;

class HomeFaqs extends \yii\base\Widget
{
	public $bgClass = 'bg-white';

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('home_faqs', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}