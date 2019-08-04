<?php
namespace themes\carservx\components;

use Yii;

class HomeOurService extends \yii\base\Widget
{
	public $layout = 'one';

	public $content;

	public function init()
	{
		if(!$this->content) {
			$this->content = [
				[
					'title' => 'Oil Change',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'plunger',
					'image' => 'demo/images/gallery/pic1.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Break Repair',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'brake-disc',
					'image' => 'demo/images/gallery/pic10.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Car Wheels',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'wheel',
					'image' => 'demo/images/gallery/pic6.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'General Service',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'automobile',
					'image' => 'demo/images/gallery/pic8.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Car Batteries',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'battery',
					'image' => 'demo/images/gallery/pic4.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'title' => 'Car Painting',
					'intro' => 'There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.',
					'icon' => 'spray',
					'image' => 'demo/images/gallery/pic11.jpg',
					'url' => '/carservx-blog/detail',
				],
			];
		}
	}

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_our_service_one';

		if($this->layout == 'one')
			$render = 'home_our_service_one';
		else if($this->layout == 'two')
			$render = 'home_our_service_two';
		else if($this->layout == 'three')
			$render = 'home_our_service_three';
		else if($this->layout == 'four')
			$render = 'home_our_service_four';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}