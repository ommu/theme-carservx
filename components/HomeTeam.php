<?php
namespace themes\carservx\components;

class HomeTeam extends \yii\base\Widget
{
	public $withTestimony = false;
	public $layout = 'one';
	public $bgClass = 'bg-white';
	public $withBackground = false;
	public $paddingTop = true;
	public $paddingBottom = true;

	public function run() {
		$render = 'home_team';

		if($this->withTestimony)
			$render = 'home_team_with_testimony';
		else {
			$render = 'home_team';
		}

		return $this->render($render);
	}
}