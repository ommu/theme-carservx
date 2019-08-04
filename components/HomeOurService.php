<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\StringHelper;
use ommu\core\models\CorePages;

class HomeOurService extends \yii\base\Widget
{
	use \ommu\traits\UtilityTrait;

	public $layout = 'one';

	public $title;
	public $description;
	public $content;

	public $pageId;
	public $contentId = [];

	public function init()
	{
		if(!$this->title)
			$this->title = 'Our Services#We Provide professional Services';

		if(!$this->description)
			$this->description = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.';

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

	public function getQuoteParams($quote)
	{
		$a = StringHelper::explode($quote, PHP_EOL);
		$params = [];
		foreach ($a as $val) {
			$b = StringHelper::explode($val, '#');
			$params[$b[0]] = count($b) > 1 ? $b[1] : $b[0];
		}

		return $params;
	}

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		if(!$isDemoTheme) {
			if($this->pageId) {
				$model = CorePages::find()
					->alias('t')
					->select(['name','desc','quote'])
					->andWhere(['t.page_id' => $this->pageId])
					->andWhere(['t.publish' => 1])
					->one();

				if($model) {
					$this->title = $model->title->message;
					$this->description = self::htmlHardDecode($model->description->message);

					$params = $this->getQuoteParams($model->quoteRltn->message);
					if($params['content'])
						$this->contentId = StringHelper::explode($params['content'], ',');
					if(!empty($params)) {
						foreach ($params as $key => $val) {
							if($key == 'content')
								continue;
							if($key != $val)
								$this->$key = $val;
						}
					}
				}
			}

			if(!empty($this->contentId)) {
				$model = CorePages::find()
					->alias('t')
					->select(['page_id','name','desc','quote','media'])
					->andWhere(['IN', 't.page_id', $this->contentId])
					->andWhere(['t.publish' => 1])
					->limit(6)
					->all();

				if($model) {
					$content = [];
					foreach ($model as $key => $val) {
						$params = $this->getQuoteParams($val->quoteRltn->message);
						$content[] = [
							'title' => $val->title->message,
							'intro' => StringHelper::truncate(self::htmlHardDecode($val->description->message), 100),
							'icon' => $params['icon'] ? $params['icon'] : 'car-parts',
							'image' => $val->media ? join('/', [$val::getUploadPath(false), $val->media]) : 'default.png',
							'url' => [
								'site/view',
								't' => $val->title->message,
								'id' => $val->page_id,
							],
						];
					}
					$this->content = $content;
				}
			}
		}

		$this->title = explode('#', $this->title);

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