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

<div class="section-full bg-change-section overlay-wraper" data-toggle="tab-hover">
	<div class="overlay-main bg-black opacity-06"></div>
	<?php //begin.background ?>
	<div class="bg-changer">
		<div class=" section-bg active" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-1.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-2.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-3.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-4.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-5.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-6.jpg)"></div>
	</div>
	<?php //end.background ?>
	<?php //begin.content ?>
	<div class="bg-change-content container-fluid">
		<div class="row">

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-plunger"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Oil Change</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">01</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Break Repair</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">02</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-wheel"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Wheels</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">03</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper  center  text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-automobile"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">General Service</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">04</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-battery"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Batteries</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">05</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper  center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-spray"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Painting</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">06</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<?php //end.content ?>
</div>