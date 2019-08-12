<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 31 July 2019, 11:45 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
?>

<?php //begin.about us
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'one',
	'bgClass' => 'bg-gray',
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'three',
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'one',
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'two',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget(); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'four',
]); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'bgClass' => 'bg-gray',
	'navigation' => false,
]); ?>