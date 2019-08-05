<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
use ommu\core\models\CorePages;

class HomeChooseUs extends \yii\base\Widget
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
	public $contactPageId;

	public function init()
	{
		if(!$this->title)
			$this->title = 'Why Choose us#Why people choose us?';

		if(!$this->description)
			$this->description = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.';

		if(!$this->content) {
			$this->content = [
				[
					'title' => 'We Provided',
					'intro' => 'To facilitate even energy distribution so your vehicle\'s battery is properly charged',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'service',
					'image' => 'demo/images/gallery/pic1.jpg',
				],
				[
					'title' => 'Who We Are',
					'intro' => 'Avoid breaking down in your vehicle by maintaining its belts and hoses',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'secure-shield',
					'image' => 'demo/images/gallery/pic2.jpg',
				],
				[
					'title' => 'Our History',
					'intro' => 'Failing an emissions test is usually the fault of either the muffler or the exhaust system',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'wrench',
					'image' => 'demo/images/gallery/pic3.jpg',
				],
				[
					'title' => 'Save Money',
					'intro' => 'The performance of the engine, alternator, and secondary electrical systems depend on the battery',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'hand',
					'image' => 'demo/images/gallery/pic4.jpg',
				],
				[
					'title' => 'Best Services',
					'intro' => 'Regular tire inspection and timely repair can help keep you driving safely',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'worker',
					'image' => 'demo/images/gallery/pic5.jpg',
				],
				[
					'title' => 'Our Store',
					'intro' => 'Experience a smooth, controlled ride with a properly functioning suspension system',
					'content' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
					<ul class="list-angle-right m-b0">
						<li>Our Technicians are highly qualified</li>
						<li>We supply the after market</li>
						<li>We only use new parts</li>
						<li>We can not be beaten on price</li>
					</ul>',
					'icon' => 'shopping-cart',
					'image' => 'demo/images/gallery/pic6.jpg',
				],
			];
		}
		if($this->layout == 'one')
			$this->content = array_values(ArrayHelper::map($this->content, 'title', 'intro'));
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
					if($params['layout'])
						$this->layout = $params['layout'];
					if($params['content'])
						$this->contentId = StringHelper::explode($params['content'], ',');
					if(!empty($params)) {
						foreach ($params as $key => $val) {
							if(in_array($key, ['layout','content']))
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
					->limit($this->layout == 'three' ? 3 : 6)
					->all();

				if($model) {
					$content = [];
					foreach ($model as $key => $val) {
						$params = $this->getQuoteParams($val->quoteRltn->message);
						$contentTitle = explode('#', $val->title->message);

						$title = $intro = $contentTitle[0];
						if(count($contentTitle) > 1) {
							$title = $contentTitle[0];
							$intro = $contentTitle[1];
						}
						if($this->layout == 'one')
							$content[] = $intro;
						else {
							$content[] = [
								'title' => $title,
								'intro' => $intro,
								'content' => $val->description->message,
								'icon' => $params['icon'] ? $params['icon'] : 'service',
								'image' => $val->media ? join('/', [$val::getUploadPath(false), $val->media]) : 'default.png',
							];
						}
					}
					$this->content = $content;
				}
			}
		}

		$this->title = explode('#', $this->title);

		$render = 'home_choose_us_one';

		if($this->layout == 'one')
			$render = 'home_choose_us_one';
		else if($this->layout == 'two')
			$render = 'home_choose_us_two';
		else if($this->layout == 'three')
			$render = 'home_choose_us_three';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}