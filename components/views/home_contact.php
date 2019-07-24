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

<div class="section-full">
	<div class="container">

		<div class="video-section-dark overlay-wraper">
			<div class="overlay-main bg-black opacity-05"></div>
			<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/video-pic.png" alt="">
			<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
				<i class="icon fa fa-play"></i>
				<span class="ripple"></span>
			</a>
		</div>

	</div>
	<div class="container-fluid bg-cover overlay-wraper bg-bottom-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
		<div class="overlay-main bg-white opacity-09"></div>
		<div class="row talk-section2-outer p-t80">
			<div class="col-md-4 talk-section-left2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-left.png" alt="">
				</div>
			</div>
			<div class="col-md-4 talk-section-mid2">
				<div class="want-to-talk text-center">
					<h2 class="m-b5">Want to talk?</h2>
					<h2 class="text-primary talk-sepr-white">Call:(123) 556 4321</h2>
					<p>Need a special repair service? we are happy to fulfil every request in order to exceed your expectations</p>
					<div class="button-lr-line">
						<a href="#" class="site-button site-btn-effect">Book An Appointment</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 talk-section-right2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-right.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>