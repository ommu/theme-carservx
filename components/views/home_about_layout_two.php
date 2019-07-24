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

<div class="section-full small-device p-b50 bg-gray">
	<div class="section-content">
		<div class="container">
			<?php //begin.title ?>
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">About Company</h5>
				<h2 class="m-b5 left">We're a company of talented engineers <br> & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<?php //end.title ?>
			<?php //begin.content ?>
			<div class="row">
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">01</span>
							<div class="icon-xl inline-icon m-b25 text-primary">
								<span class="icon-cell"><i class="flaticon-certificate"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">International Standards</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">02</span>
							<div class="icon-xl inline-icon m-b25 text-primary">
								<span class="icon-cell"><i class="flaticon-employee"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">We love our client</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">03</span>
							<div class="icon-xl inline-icon m-b25  text-primary">
								<span class="icon-cell"><i class="flaticon-car-parts"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">Only original parts</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<?php //end.content ?>
		</div>
	</div>
</div>