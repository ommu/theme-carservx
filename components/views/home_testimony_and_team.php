<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<div class="section-full small-device">
	<div class="bg-secondry ">
		<div class="clearfix half-section-outer">
			<?php //begin.testimony
			echo \themes\carservx\components\HomeTestimony::widget([
				'withTeam' => true,
			]); ?>

			<?php //begin.team
			echo \themes\carservx\components\HomeTeam::widget([
				'withTestimony' => true,
			]); ?>
		</div>
	</div>
</div>