<?php
namespace themes\carservx\components;

class HomePortfolioCounter extends \yii\base\Widget
{
	public $paddingTop = true;
	public $withBackground = false;

	public function run() {
		$render = 'home_portfolio_counter';

		if($this->withBackground)
			$render = 'home_portfolio_counter_background';
		else
			$render = 'home_portfolio_counter';

		return $this->render($render);
	}
}