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

<div class="section-full p-b50 p-t80">
	<div class="section-content">
		<div class="container">
			<?php //begin.title ?>
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">About us</h5>
				<h2 class="m-b5 center">We're a company of talented engineers & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<?php //end.title ?>
		</div>
		<?php //begin.content ?>
		<div class="container-fluid">
			<div class="row no-col-gap">
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic1.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">01</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-certificate"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">International Standards</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic2.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">02</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-employee"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">We love our client</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic3.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">03</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-car-parts"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">Only original parts</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php //end.content ?>
	</div>
</div>