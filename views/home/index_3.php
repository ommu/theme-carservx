<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\HomeController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
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
	'layout' => 'three',
]); ?>

<!-- ABOUT COMPANY -->
<div class="section-full small-device bg-white">
	<!-- IMAGE CAROUSEL START -->
	<div class="section-content clearfix">
		<div class="container-fluid">
			<div class="row no-col-gap">
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-car"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Oil Change</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Brake Repair</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-motor"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Engine Repair</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-wheel"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Wheel Change</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ABOUT COMPANY END -->

<!-- WHY CHOOSE SECTION START -->
<div class="section-full small-device p-t80 p-b80 bg-gray">
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Why Choose</h5>
			<h2 class="m-b5 center">Why Choose Us?</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<div class="section-content">
			<div class="wt-tabs vertical border tabs-default why-choose-tab bg-white p-a20">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-service"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0">We offer</h5>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#graphic-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-secure-shield"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0">Who We Are</h5>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#developement-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-wrench"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0">Our History</h5>
								</div>
							</div>
						</a>
					</li>
				</ul>
				<div class="tab-content">

					<div id="web-design-7" class="tab-pane active">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte wt-tilte m-t0">Long Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>There are many variations</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="graphic-design-7" class="tab-pane">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte m-t0">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>There are many variations</li>
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic1.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="developement-7" class="tab-pane">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte wt-tilte m-t0">Long Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- WHY CHOOSE SECTION END -->

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'two',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget(); ?>

<?php //begin.contact
echo \themes\carservx\components\HomeContact::widget(); ?>

<?php //begin.testimony
echo \themes\carservx\components\HomeTestimony::widget([
	'bgClass' => 'bg-gray',
	'withTeam' => false,
]); ?>

<?php //begin.team
echo \themes\carservx\components\HomeTeam::widget([
	'bgClass' => 'bg-gray',
	'withTestimony' => false,
	'withBackground' => true,
]); ?>

<?php //begin.latest news (blog)
echo \themes\carservx\components\HomeLatestNews::widget([
	'isPotraitLayout' => true,
]); ?>

<!-- OFFER SECTION START -->
<div class="section-full">
	<div class="bg-secondry ">
		<div class="clearfix offer-outer-full">
			<div class="col-md-6 col-sm-6 offer-outer-full-left">
				<div class="offer-block-left text-white">
					<span>Our Latest Specials</span>
					<h2>Any Services of @300 or More</h2>
					<p>We value our client, that's why we want to give you this special discount in order for you to use it to make your car more safe and feel confident when on the road!</p>
					<a href="#" class="site-button-link white">Read More</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 offer-outer-full-right bg-cover overlay-wraper" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/offer.jpg);">
				<div class="overlay-main opacity-09 bg-primary"></div>
				<div class="offer-block-right">
					<span>Coupons From</span>
					<div class="offer-block-price"><span>35%</span><strong>Off Repairs</strong></div>
					<i class="flaticon-cut"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- OFFER SECTION END -->

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'navigation' => true,
]); ?>