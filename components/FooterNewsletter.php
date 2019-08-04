<?php
namespace themes\carservx\components;

use Yii;

class FooterNewsletter extends \yii\base\Widget
{
	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('footer_newsletter', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}