<?php
namespace themes\carservx\components;

use Yii;

class HomeTestimony extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $withTeam = false;

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_testimony';

		if($this->withTeam)
			$render = 'home_testimony_with_team';
		else
			$render = 'home_testimony';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}