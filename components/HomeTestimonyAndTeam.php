<?php
/**
 * HomeTestimonyAndTeam
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;

class HomeTestimonyAndTeam extends \yii\base\Widget
{
	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		return $this->render('home_testimony_and_team', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}