<?php
namespace themes\carservx\components;

class HomeOurService extends \yii\base\Widget
{
	public $layout = 'one';

	public function run() {
		$render = 'home_our_service_one';

		if($this->layout == 'one')
			$render = 'home_our_service_one';
		else if($this->layout == 'two')
			$render = 'home_our_service_two';
		else if($this->layout == 'three')
			$render = 'home_our_service_three';

		return $this->render($render);
	}
}