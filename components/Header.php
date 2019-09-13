<?php
/**
 * Header
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
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\BaseSetting;
use app\modules\rbac\components\MenuHelper;

class Header extends \yii\base\Widget
{
	use \ommu\traits\ThemeTrait;

	public $logo;
	public $menus = [];

	public function init()
	{
		$isDemoTheme = true;
		if(Yii::$app->isDemoTheme()) {
			$themeAsset = \themes\carservx\assets\ThemeAsset::register($this->getView());

			$subLayout = $this->view->getSubLayout();
			if($subLayout == 'default' || $subLayout == 'skin1')
				$logo = 'logo-dark.png';
			else if($subLayout == 'skin2')
				$logo = 'logo-2.png';
			else if($subLayout == 'skin3')
				$logo = 'logo-3.png';
			else if($subLayout == 'skin4')
				$logo = 'logo-4.png';
			else if($subLayout == 'skin5')
				$logo = 'logo-5.png';
			else if($subLayout == 'skin6')
				$logo = 'logo-6.png';

			$logoPath = join('/', [$themeAsset->baseUrl, 'demo/images', $logo]);

		} else {
			$isDemoTheme = false;
			$siteName = unserialize(Yii::$app->setting->get(join('_', [Yii::$app->id, 'name'])));
			$logo = Yii::$app->setting->get(join('_', [Yii::$app->id, 'logo']));
			if($siteName['long'])
				Yii::$app->name = $siteName['long'];
			
			$logoPath = join('/', [BaseSetting::getUploadPath(false, Yii::$app->id)]);
			$logoPath = Url::to(join('/', ['@webpublic', $logoPath, $logo]));
		}

		$this->logo = $isDemoTheme || (!$isDemoTheme && $logo) ? Html::img($logoPath, ['alt'=>Yii::$app->name]) : Yii::$app->name;

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

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('header', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}