<?php
namespace themes\carservx\components;

use Yii;

class HomeTestimonyAndTeam extends \yii\base\Widget
{
	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('home_testimony_and_team', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}