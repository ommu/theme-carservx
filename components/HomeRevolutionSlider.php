<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\ArrayHelper;

class HomeRevolutionSlider extends \yii\base\Widget
{
	public $layout = 'one';

	public $content;

	public function init()
	{
		if(!$this->content) {
			$this->content = [
				[
					'title' => 'Satisfaction Guaranteed or Your Dent Back.',
					'intro' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.',
					'image' => 'demo/images/main-slider/slider1/slide1.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Top notch service is our main auto motive.',
					'intro' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.',
					'image' => 'demo/images/main-slider/slider1/slide2.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Hands that understand Automobile Very well',
					'intro' => 'It is a long established fact that a reader will be distracted by the readable contentof a page.',
					'image' => 'demo/images/main-slider/slider1/slide3.jpg',
					'url' => '/carservx-blog/detail',
				],
			];

			if($this->layout === 'two') {
				ArrayHelper::setValue($this->content, '0.title', 'Save in our Hands');
				ArrayHelper::setValue($this->content, '1.title', 'Save in our Hands');
				ArrayHelper::setValue($this->content, '2.title', 'Save in our Hands');
			}
		}
	}

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_revolution_slider_one';

		if($this->layout == 'one')
			$render = 'home_revolution_slider_one';
		else if($this->layout == 'two')
			$render = 'home_revolution_slider_two';
		else if($this->layout == 'three')
			$render = 'home_revolution_slider_three';
		else if($this->layout == 'four')
			$render = 'home_revolution_slider_four';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}