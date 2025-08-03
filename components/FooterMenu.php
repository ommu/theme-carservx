<?php
/**
 * FooterMenu
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;

class FooterMenu extends \yii\base\Widget
{
	public $menus = [
		[
			'title' => 'About',
			'url' => '/carservx-page/about',
		],
		[
			'title' => 'Gallery',
			'url' => '/carservx-portfolio/index',
		],
		[
			'title' => 'Blog',
			'url' => '/carservx-blog/grid',
		],
		[
			'title' => 'Faq',
			'url' => '/carservx-page/faq',
		],
		[
			'title' => 'Contact Us',
			'url' => '/carservx-contact/index',
		],
	];

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('footer_menu', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}