<?php
namespace themes\carservx\components;

class HomeAboutUs extends \yii\base\Widget
{
	public $layout = 'one';

	public function run() {
		$render = 'home_about_layout_one';

		if($this->layout == 'one')
			$render = 'home_about_layout_one';
		else if($this->layout == 'two')
			$render = 'home_about_layout_two';
		else if($this->layout == 'three')
			$render = 'home_about_layout_three';

		return $this->render($render);
	}
}