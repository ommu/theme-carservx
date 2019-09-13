<?php
/**
 * HomeSkill
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

class HomeSkill extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $content= [];

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
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('home_skill', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}