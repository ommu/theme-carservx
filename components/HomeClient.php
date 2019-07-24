<?php
namespace themes\carservx\components;

class HomeClient extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $navigation = true;

	public function run() {
		return $this->render('home_client');
	}
}