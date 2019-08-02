<?php
namespace themes\carservx\components;

class HomeRevolutionSlider extends \yii\base\Widget
{
	public $layout = 'one';

	public function run() {
		$render = 'home_revolution_slider_one';

		if($this->layout == 'one')
			$render = 'home_revolution_slider_one';
		else if($this->layout == 'two')
			$render = 'home_revolution_slider_two';
		else if($this->layout == 'three')
			$render = 'home_revolution_slider_three';
		else if($this->layout == 'four')
			$render = 'home_revolution_slider_four';

		return $this->render($render);
	}
}