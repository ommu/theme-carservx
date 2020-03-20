<?php
/**
 * HomeRevolutionSlider
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
use yii\helpers\Inflector;
use ommu\article\models\Articles;

class HomeRevolutionSlider extends \yii\base\Widget
{
	use \ommu\traits\UtilityTrait;

	public $layout = 'one';
	public $overwriteContent = false;

	public $content= [];

	public function init()
	{
		if(!$this->content) {
			$this->content = [
				[
					'category' => 'Your Vehicle is',
					'title' => 'Satisfaction Guaranteed or Your Dent Back.',
					'intro' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.',
					'image' => 'demo/images/main-slider/slider1/slide1.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'category' => 'All vehicle problem',
					'title' => 'Top notch service is our main auto motive.',
					'intro' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.',
					'image' => 'demo/images/main-slider/slider1/slide2.jpg',
					'url' => '/carservx-blog/detail',
				],
				[
					'category' => 'Believe Our',
					'title' => 'Hands that understand Automobile Very well',
					'intro' => 'It is a long established fact that a reader will be distracted by the readable contentof a page.',
					'image' => 'demo/images/main-slider/slider1/slide3.jpg',
					'url' => '/carservx-blog/detail',
				],
			];

			if($this->layout === 'two') {
				ArrayHelper::setValue($this->content, '0.title', 'Save in our Hands');
				ArrayHelper::setValue($this->content, '1.title', 'We can solve');
				ArrayHelper::setValue($this->content, '2.title', 'Trusted services');
			}
		} else 
			$this->overwriteContent = true;
	}

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		if(!$isDemoTheme && !$this->overwriteContent) {
			$article = Articles::find()
				->alias('t')
				->select(['id','cat_id','title','body'])
				->headlined()
				->limit(3)
				->orderBy('t.id DESC')
				->all();

			if($article) {
				$content = [];
				foreach ($article as $key => $val) {
					$content[] = [
						'category' => $val->category->name_i,
						'title' => $val->title,
						'intro' => StringHelper::truncate(self::htmlHardDecode($val->body), 160),
						'image' => $val->cover ? join('/', [$val::getUploadPath(false), $val->id, $val->cover]) : 'default.png',
						'url' => [
							'article/view',
							't' => Inflector::slug($val->title),
							'id' => $val->id,
						],
					];
				}
				$this->content = $content;
			}
		}

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