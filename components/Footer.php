<?php
/**
 * Footer
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

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

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('footer', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}