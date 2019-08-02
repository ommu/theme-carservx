<?php
namespace themes\carservx\components;

class HomeSkill extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $content;

	public function init()
	{
		if(!$this->content) {
			$this->content = [
				'title' => 'Our Skills',
				'intro' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
				'image' => 'demo/images/gallery/pic2.jpg',
				'video' => 'https://www.youtube.com/watch?v=qfRw6x5dWdE',
				'skills' => [
					[
						'skill' => 'Tire and Wheel Services<',
						'percent' => '85',
					],
					[
						'skill' => 'Lube, Oil and Filters',
						'percent' => '75',
					],
					[
						'skill' => 'Belts and Hoses',
						'percent' => '65',
					],
					[
						'skill' => 'Engine Diagnostics',
						'percent' => '55',
					],
					[
						'skill' => 'Brake Repair',
						'percent' => '45',
					],
					[
						'skill' => 'Air Conditioning',
						'percent' => '35',
					],
				],
			];
		}
	}

	public function run()
	{
		return $this->render('home_skill');
	}
}