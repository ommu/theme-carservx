<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 29 July 2019, 19:35 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
?>

<?php //begin.team
echo \themes\carservx\components\HomeTeam::widget([
	'withTestimony' => false,
]); ?>

<?php //begin.testimony and team
echo \themes\carservx\components\HomeTestimonyAndTeam::widget(); ?>

<?php //begin.team
echo \themes\carservx\components\HomeTeam::widget([
	'withTestimony' => false,
	'layout' => 'two',
	'bgClass' => 'bg-gray',
]); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeSkill::widget([
]); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'navigation' => false,
	'bgClass' => 'bg-gray',
]); ?>