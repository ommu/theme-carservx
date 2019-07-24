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
$context = $this->context;
?>

<div class="section-full p-t80 p-b80 <?php echo $context->bgClass;?>">
	<div class="container">
		<div class="section-content">
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Client Says</h5>
				<h2 class="m-b5 left">What Our Clients Say</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>

			<div class="section-content">
				<div class="owl-carousel testimonial-home">
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Jhon Parker</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Willimes Dom</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Jhon Parker</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Willimes Dom</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>