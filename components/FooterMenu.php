<?php
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