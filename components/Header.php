<?php
namespace themes\carservx\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\rbac\components\MenuHelper;

class Header extends \yii\base\Widget
{
	use \ommu\traits\ThemeTrait;

	public $menus = [];

	public function init()
	{
		$menus = [];
		if(!Yii::$app->isDemoTheme()) {
			$menus = ArrayHelper::merge(
				$menus,
				MenuHelper::getAssignedMenu(Yii::$app->user->id)
			);
		} else 
			$menus = $this->themeMenu('carservx');
		if(!is_array($menus))
			$menus = [];
		$this->menus = ArrayHelper::merge($this->menus, $menus);
	}

	public function run() {
		return $this->render('header');
	}
}