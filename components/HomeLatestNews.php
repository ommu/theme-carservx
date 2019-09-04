<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\StringHelper;
use yii\helpers\Inflector;
use ommu\core\models\CorePages;
use ommu\article\models\Articles;

class HomeLatestNews extends \yii\base\Widget
{
	use \ommu\traits\UtilityTrait;

	public $bgClass = 'bg-white';
	public $isPotraitLayout = true;
	public $paddingTop = true;
	public $paddingBottom = true;

	public $title;
	public $description;
	public $content= [];

	public $pageId;
	public $articleCategoryId = [];

	public function init()
	{
		if(!$this->title)
			$this->title = 'Blogs#Our Latest News';

		if(!$this->description)
			$this->description = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.';

		if(!$this->content) {
			$this->content = [
				[
					'category' => 'Ford News',
					'title' => 'The Number of electric vehicles in the UK has doubled',
					'intro' => 'Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.',
					'image' => 'demo/images/blog/latest-blog/pic1.jpg',
					'url' => '/carservx-blog/detail',
					'creationName' => 'Thomas Deo',
					'creationPhoto' => 'demo/images/testimony/pic3.jpg',
					'creationDate' => 'March 9, 2019',
				],
				[
					'category' => 'Ford News',
					'title' => 'Do you service and repair all makes and models of vehicles',
					'intro' => 'Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.',
					'image' => 'demo/images/blog/latest-blog/pic2.jpg',
					'url' => '/carservx-blog/detail',
					'creationName' => 'Thomas Deo',
					'creationPhoto' => 'demo/images/testimony/pic4.jpg',
					'creationDate' => 'March 9, 2019',
				],
				[
					'category' => 'Ford News',
					'title' => 'Why does my car need maintenance if it\'s running fine',
					'intro' => 'Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.',
					'image' => 'demo/images/blog/latest-blog/pic3.jpg',
					'url' => '/carservx-blog/detail',
					'creationName' => 'Thomas Deo',
					'creationPhoto' => 'demo/images/testimony/pic1.jpg',
					'creationDate' => 'March 9, 2019',
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
					if($params['isPotraitLayout'])
						$this->articleCategoryId = StringHelper::explode($params['category'], ',');
					if(array_key_exists('isPotraitLayout', $params))
						$this->isPotraitLayout = $params['isPotraitLayout'] ? true : false;
					if(!empty($params)) {
						foreach ($params as $key => $val) {
							if(in_array($key, ['category', 'isPotraitLayout']))
								continue;
							if($key != $val)
								$this->$key = $val;
						}
					}
				}
			}

			$article = Articles::find()
				->alias('t')
				->select(['id','cat_id','title','body','creation_date','creation_id'])
				->andWhere(['t.publish' => 1]);
			if(!empty($this->articleCategoryId))
				$article->andWhere(['IN', 't.cat_id', $this->articleCategoryId]);
			$limit = $this->isPotraitLayout ? 2 : 3;
			$article = $article->limit($limit)
				->orderBy('t.id DESC')
				->all();

			if($article) {
				$content = [];
				foreach ($article as $key => $val) {
					$content[] = [
						'category' => $val->category->name_i,
						'title' => $val->title,
						'intro' => StringHelper::truncate(self::htmlHardDecode($val->body), 115),
						'image' => $val->cover ? join('/', [$val::getUploadPath(false), $val->id, $val->cover]) : 'default.png',
						'url' => [
							'article/view',
							't' => Inflector::slug($val->title),
							'id' => $val->id,
						],
						'creationName' => isset($val->creation) ? $val->creation->displayname : 'Smart Auto CBU',
						'creationPhoto' => (isset($val->creation) && $val->creation->photos) ? join('/', [$val->creation::getUploadPath(false), $val->creation_id, $val->creation->photos]) : 'user_default.png',
						'creationDate' => Yii::$app->formatter->asDate($val->creation_date, 'long'),
					];
				}
				$this->content = $content;
			}
		}

		$this->title = explode('#', $this->title);
		
		return $this->render('home_latest_news', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}