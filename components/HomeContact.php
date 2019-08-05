<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
use ommu\core\models\CorePages;

class HomeContact extends \yii\base\Widget
{
	use \ommu\traits\UtilityTrait;

	public $darkLayout = false;
	public $paddingTop = true;
	public $withChooseUs = false;

	public $title;
	public $description;
	public $image;
	public $youtube;
	public $contact = [];

	public $pageId;

	public function init()
	{
		if(!$this->title)
			$this->title = 'Want to talk?';

		if(!$this->description)
			$this->description = 'Need a special repair service? we are happy to fulfil every request in order to exceed your expectations';

		if(!$this->image)
			$this->image = 'demo/images/video-pic.png';

		if(!$this->youtube)
			$this->youtube = 'qfRw6x5dWdE';

		if(empty($this->contact))
			$this->contact['office'] = '(123) 556 4321';
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
					$this->image = $model->media ? join('/', [$model::getUploadPath(false), $model->media]) : 'default.png';

					$params = $this->getQuoteParams($model->quoteRltn->message);
					if(array_key_exists('youtube', $params)) {
						$this->youtube = $params['youtube'];
						$this->paddingTop = $this->youtube ? true : false;
					}
					if(!empty($params)) {
						foreach ($params as $key => $val) {
							if($key == 'youtube')
								continue;
							if($key != $val)
								$this->$key = $val;
						}
					}
				}
			}

			$office_contact = unserialize(Yii::$app->meta->get(join('_', [Yii::$app->id, 'office_contact'])));
			if($office_contact['phone'])
				$this->contact['office'] = $office_contact['phone'];
			if($office_contact['fax'])
				$this->contact['fax'] = $office_contact['fax'];
			if($office_contact['hotline']) {
				$hotline = $this->getQuoteParams($office_contact['hotline']);
				$this->contact = ArrayHelper::merge($this->contact, array_flip($hotline));
			}
		}

		$this->title = explode('#', $this->title);

		$render = 'home_contact';

		if($this->withChooseUs)
			$render = 'home_contact_with_choose_us';
		else
			$render = 'home_contact';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
			'youtubeStatus' => $this->youtube ? true : false,
		]);
	}
}