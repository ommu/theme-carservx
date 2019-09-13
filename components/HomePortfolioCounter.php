<?php
/**
 * HomePortfolioCounter
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

class HomePortfolioCounter extends \yii\base\Widget
{
	public $withBackground = false;
	public $bgClass = 'bg-white';
	public $paddingTop = true;
	public $paddingBottom = true;

	public $portfolios = [
		[
			'category' => 'Car Painted',
			'icon' => 'spray',
			'counter' => '125',
		],
		[
			'category' => 'Gears Repaired',
			'icon' => 'shift',
			'counter' => '455',
		],
		[
			'category' => 'Senior Engineers',
			'icon' => 'worker',
			'counter' => '210',
		],
		[
			'category' => 'Radiators Repaired',
			'icon' => 'radiator',
			'counter' => '99',
		],
	];

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_portfolio_counter';

		if($this->withBackground)
			$render = 'home_portfolio_counter_background';
		else
			$render = 'home_portfolio_counter';

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}