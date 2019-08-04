<?php
namespace themes\carservx\components;

use Yii;

class HomeClient extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $navigation = true;

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('home_client', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}