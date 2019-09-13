<?php
/**
 * HomeTeam
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

class HomeTeam extends \yii\base\Widget
{
	public $withTestimony = false;
	public $layout = 'one';
	public $bgClass = 'bg-white';
	public $withBackground = false;
	public $paddingTop = true;
	public $paddingBottom = true;

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		$render = 'home_team';

		if($this->withTestimony)
			$render = 'home_team_with_testimony';
		else {
			$render = 'home_team';
		}

		return $this->render($render, [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}