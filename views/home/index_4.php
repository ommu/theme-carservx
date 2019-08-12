<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\HomeController
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 22 July 2019, 10:21 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
\themes\carservx\assets\ThemeHomePluginAsset::register($this);
?>

<?php //begin.revolution slider
echo \themes\carservx\components\HomeRevolutionSlider::widget([
	'layout' => 'four',
]); ?>

<?php //begin.choose us
echo \themes\carservx\components\HomeChooseUs::widget([
	'layout' => 'three',
]); ?>

<?php //begin.about us
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'three',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget([
	'paddingTop' => false,
]); ?>

<?php //begin.contact
echo \themes\carservx\components\HomeContact::widget(); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'three',
]); ?>

<?php //begin.latest news (blog)
echo \themes\carservx\components\HomeLatestNews::widget([
	'bgClass' => 'bg-gray',
	'isPotraitLayout' => false,
]); ?>

<?php //begin.testimony and team
echo \themes\carservx\components\HomeTestimonyAndTeam::widget(); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'bgClass' => 'bg-gray',
	'navigation' => false,
]); ?>