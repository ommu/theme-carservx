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

<?php //begin.about us two
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'one',
	'bgClass' => 'bg-gray',
]); ?>

<?php //begin.about us three
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'three',
	'paddingBottom' => false,
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget(); ?>

<?php //begin.about us one
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'two',
	'bgClass' => 'bg-gray',
]); ?>