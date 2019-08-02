<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\Html;

class Footer extends \yii\base\Widget
{
	public $withBackground = true;

	public $siteName = 'Your Company';

	public function init()
	{
		if($this->view->context->action instanceof \yii\web\ErrorAction)
			$this->withBackground = false;

		if(!Yii::$app->isDemoTheme()) {
			$copyright = unserialize(Yii::$app->setting->get(join('_', [Yii::$app->id, 'copyright'])));
			$this->siteName = Html::a($copyright['name'], $copyright['url'] ? $copyright['url'] : ['/site/index'], ['title'=>$copyright['name'], 'class'=>'text-primary']);
		}
	}

	public function run() {
		return $this->render('footer');
	}
}