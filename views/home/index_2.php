<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\HomeController
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 22 July 2019, 10:21 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
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

<?php //begin.choose us
echo \themes\carservx\components\HomeChooseUs::widget([
	'layout' => 'two',
]); ?>

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