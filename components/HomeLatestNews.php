<?php
namespace themes\carservx\components;

class HomeLatestNews extends \yii\base\Widget
{
	public $paddingTop = true;
	public $bgClass = 'bg-white';
	public $isPotraitLayout = true;

	public function run() {
		$render = 'home_latest_news_portrait';

		if($this->isPotraitLayout)
			$render = 'home_latest_news_portrait';
		else
			$render = 'home_latest_news_landscape';

		return $this->render($render);
	}
}