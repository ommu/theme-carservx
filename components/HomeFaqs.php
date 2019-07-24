<?php
namespace themes\carservx\components;

class HomeFaqs extends \yii\base\Widget
{
	public $bgClass = 'bg-white';

	public function run() {
		return $this->render('home_faqs');
	}
}