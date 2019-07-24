<?php
namespace themes\carservx\components;

class HomeTestimony extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $withTeam = false;

	public function run() {
		$render = 'home_testimony';

		if($this->withTeam)
			$render = 'home_testimony_with_team';
		else
			$render = 'home_testimony';

		return $this->render($render);
	}
}