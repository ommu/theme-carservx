<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\CounterupPluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="section-full">
	<div class="container">
		<div class="row <?php echo $context->paddingTop ? 'p-t80' : '';?> p-b50">
			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-spray"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0">125</h2>
						<h4 class="m-b0">Car Painted</h4>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-shift"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0">455</h2>
						<h4 class="m-b0">Gears Repaired</h4>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-worker"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0">210</h2>
						<h4 class="m-b0">Senior Engineers</h4>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-radiator"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0">125</h2>
						<h4 class="m-b0">Radiators Repaired</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>