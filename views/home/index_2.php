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
	'layout' => 'two',
]); ?>

<!-- ABOUT COMPANY -->
<div class="section-full bg-gray">

	<div class="container">

		<!-- IMAGE CAROUSEL START -->
		<div class="section-content clearfix">
			<div class="top-half-section">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic1.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-car"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Oil</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Change</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic2.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-brake-disc"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Break</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Repair</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic3.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-motor"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Engine</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Repair</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic4.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-wheel"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Wheel</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Change</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
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
<!-- ABOUT COMPANY END -->

<?php //begin.about us
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'one',
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'one',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget(); ?>

<?php //begin.contact
echo \themes\carservx\components\HomeContact::widget(); ?>

<!-- WHY CHOOSE SECTION START -->
<div class="section-full p-t80 p-b80 overlay-wraper bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-2.jpg)">
	<div class="overlay-main bg-gray opacity-09"></div>
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Why Choose us</h5>
			<h2 class="m-b5 center">Why Choose Us?</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<div class="section-content">
			<div class="wt-tabs tabs-default why-choose-tab">
				<ul class="nav nav-tabs nav-justified ">
					<li class="active">
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-service"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">We Provided</h4>
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
									<h4 class="wt-tilte m-b0">Who We Are</h4>
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
									<h4 class="wt-tilte m-b0">Our History</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-hand"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">Save Money</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#graphic-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-worker"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">Best Services</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#developement-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-shopping-cart"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">Our Store</h4>
								</div>
							</div>
						</a>
					</li>
				</ul>
				<div class="tab-content">

					<div id="web-design-7" class="tab-pane active">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Long Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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

<?php //begin.testimony
echo \themes\carservx\components\HomeTestimony::widget([
	'bgClass' => 'bg-gray',
	'withTeam' => false,
]); ?>

<?php //begin.team
echo \themes\carservx\components\HomeTeam::widget([
	'withTestimony' => false,
	'withBackground' => true,
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

<?php //begin.latest news (blog)
echo \themes\carservx\components\HomeLatestNews::widget([
	'isPotraitLayout' => false,
]); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'bgClass' => 'bg-gray',
	'navigation' => false,
]); ?>