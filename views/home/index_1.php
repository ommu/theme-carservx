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
	'layout' => 'one',
]); ?>

<?php //begin.about us
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'two',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget([
	'withBackground' => true,
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'three',
]); ?>

<!-- WHY CHOOSE AND VIDEO SECTION START -->
<div class="section-full">
	<div class="row why-choose-video-section bg-white">
		<div class="col-lg-6 col-md-6 why-choose-left-section bg-no-repeat bg-bottom-left" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/pic-c-1bg.png);">
			<div class="why-choose-left-content">
				<!-- TITLE START -->
				<div class="section-head ">
					<h5 class="text-primary text-uppercase wt-title-small">Why Choose Us</h5>
					<h2 class="m-b5 center">Why people choose us</h2>
				</div>
				<!-- TITLE END -->
				<div class="section-content">
					<ol class="list-num-count m-b0">
						<li>To facilitate even energy distribution so your vehicle's battery is properly charged.</li>
						<li>Avoid breaking down in your vehicle by maintaining its belts and hoses.</li>
						<li>Failing an emissions test is usually the fault of either the muffler or the exhaust system.</li>
						<li>The performance of the engine, alternator, and secondary electrical systems depend on the battery.</li>
						<li>Regular tire inspection and timely repair can help keep you driving safely.</li>
						<li>Experience a smooth, controlled ride with a properly functioning suspension system.</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 why-choose-right-section bg-primary">
			<div class="why-choose-right-content">
				<div class="why-choose-video-outer overlay-wraper bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/video-pic.png)">
					<div class="overlay-main bg-black opacity-05"></div>
					<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
						<i class="icon fa fa-play"></i>
						<span class="ripple"></span>
					</a>
				</div>
				<div class="want-to-talk-video">
					<h2 class="m-b5">Want to talk?</h2>
					<h2 class="text-white">Call:(123) 556 4321</h2>
					<p>Need a special repair service? we are happy to fulfil every request in order to exceed your expectations</p>
					<div class="button-lr-line">
						<a href="#" class="site-button-secondry site-btn-effect">Book An Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- WHY CHOOSE AND VIDEO SECTION END -->

<?php //begin.latest news (blog)
echo \themes\carservx\components\HomeLatestNews::widget([
	'bgClass' => 'bg-gray',
	'isPotraitLayout' => true,
]); ?>

<?php //begin.testimony and team
echo \themes\carservx\components\HomeTestimonyAndTeam::widget(); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'bgClass' => 'bg-gray',
	'navigation' => true,
]); ?>

<?php //begin.faq
echo \themes\carservx\components\HomeFaqs::widget([
	'bgClass' => 'bg-gray',
]); ?>