<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\Html;

class Footer extends \yii\base\Widget
{
	public $siteName = 'Your Company';

	public function init()
	{
		if(!Yii::$app->isDemoTheme()) {
			$copyright = unserialize(Yii::$app->setting->get(join('_', [Yii::$app->id, 'copyright'])));
			$this->siteName = Html::a($this->siteName, $copyright['url'] ? $copyright['url'] : ['/site/index'], ['title'=>$this->siteName, 'class'=>'text-primary']);
		}
	}

	public function run() {
		return $this->render('footer');
	}
}