<?php
/**
 * HomeAboutUs
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;
use yii\helpers\StringHelper;
use yii\helpers\Inflector;
use ommu\core\models\CorePages;

class HomeAboutUs extends \yii\base\Widget
{
	use \ommu\traits\UtilityTrait;

	public $layout = 'one';
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $title;
	public $description;
	public $content= [];

	public $pageId;
	public $contentId = [];

	public function init()
	{
		if(!$this->title)
			$this->title = 'About Company#We\'re a company of talented engineers & mechanics';

		if(!$this->description)
			$this->description = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ';

		if(!$this->content) {
			$this->content = [
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
					->limit(3)
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
								't' => Inflector::slug($val->title->message),
								'id' => $val->page_id,
							],
						];
					}
					$this->content = $content;
				}
			}
		}

		$this->title = explode('#', $this->title);

		$render = 'home_about_layout_one';

		if($this->layout == 'one') {
			$this->bgClass = 'bg-gray';
			$render = 'home_about_layout_one';
		} else if($this->layout == 'two')
			$render = 'home_about_layout_two';
		else if($this->layout == 'three')
			$render = 'home_about_layout_three';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}