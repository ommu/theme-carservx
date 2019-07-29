<?php
namespace themes\carservx\components;

class HomeAboutUs extends \yii\base\Widget
{
	public $layout = 'one';
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $content = [
		[
			'title' => 'International Standards',
			'intro' => 'It is a long established fact that a reader will be distracted by the readable contentof a page.',
			'icon' => 'certificate',
			'image' => 'demo/images/info/pic1.jpg',
			'url' => '/carservx-blog/detail',
		],
		[
			'title' => 'We love our client',
			'intro' => 'It is a long established fact that a reader will be distracted by the readable contentof a page.',
			'icon' => 'employee',
			'image' => 'demo/images/info/pic2.jpg',
			'url' => '/carservx-blog/detail',
		],
		[
			'title' => 'Only original parts',
			'intro' => 'It is a long established fact that a reader will be distracted by the readable contentof a page.',
			'icon' => 'car-parts',
			'image' => 'demo/images/info/pic3.jpg',
			'url' => '/carservx-blog/detail',
		],
	];

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