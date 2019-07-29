<?php
namespace themes\carservx\components;

class HomeSkill extends \yii\base\Widget
{
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public function run() {
		return $this->render('home_skill');
	}
}