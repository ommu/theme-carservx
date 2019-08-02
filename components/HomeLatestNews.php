<?php
namespace themes\carservx\components;

class HomeLatestNews extends \yii\base\Widget
{
	public $isPotraitLayout = true;
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $content;

	public function init()
	{
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

	public function run() 
	{
		return $this->render('home_latest_news');
	}
}