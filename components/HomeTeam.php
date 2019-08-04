<?php
namespace themes\carservx\components;

use Yii;

class HomeTeam extends \yii\base\Widget
{
	public $withTestimony = false;
	public $layout = 'one';
	public $bgClass = 'bg-white';
	public $withBackground = false;
	public $paddingTop = true;
	public $paddingBottom = true;

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_team';

		if($this->withTestimony)
			$render = 'home_team_with_testimony';
		else {
			$render = 'home_team';
		}

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}