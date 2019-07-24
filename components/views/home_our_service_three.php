<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\OwlCarouselPluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<div class="section-full small-device p-b80">
	<div class="section-content">
		<div class="services-half-section-top  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-map.png)">
			<div class="container">
				<?php //begin.title ?>
				<div class="section-head text-center text-white">
					<h5 class="text-primary text-uppercase wt-title-small">Our Services</h5>
					<h2 class="m-b5 center">We Provide professional Services</h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
				</div>
				<?php //end.title ?>
			</div>
		</div>
		<div class="container">
			<div class="owl-carousel services_home owl-btn-bottom-center services-half-section-bottom">
				<?php //begin.content ?>
				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Tires and Wheels</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Technical Repairs</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Electrical Works</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Tires and Wheels</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Technical Repairs</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Electrical Works</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>
				<?php //end.content ?>
			</div>
		</div>
	</div>
</div>