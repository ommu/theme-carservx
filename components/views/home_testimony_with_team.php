<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\OwlCarouselPluginAsset::register($this);
?>

<div class="col-md-6 col-sm-6 half-section-outer-left">
	<div class="half-section-left ">
		<div class="section-head text-left text-white">
			<h5 class="text-primary text-uppercase wt-title-small">Our Client Says</h5>
			<h2 class="m-b5 left">People What Say</h2>
		</div>

		<div class="owl-carousel testimonial-home-with-team owl-dots-bottom-right">
			<div class="item">
				<div class="testimonial-6">
					<div class="testimonial-pic-block">
						<div class="testimonial-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
						</div>
					</div>
					<div class="testimonial-text clearfix text-white">
						<div class="testimonial-detail clearfix">
							<strong class="testimonial-name text-primary">Jhon Parker</strong>
							<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
						</div>
						<div class="testimonial-paragraph">
							<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testimonial-6">
					<div class="testimonial-pic-block">
						<div class="testimonial-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
						</div>
					</div>
					<div class="testimonial-text clearfix text-white">
						<div class="testimonial-detail clearfix">
							<strong class="testimonial-name text-primary">Jhon Parker</strong>
							<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
						</div>
						<div class="testimonial-paragraph">
							<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testimonial-6">
					<div class="testimonial-pic-block">
						<div class="testimonial-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic3.jpg" alt="">
						</div>
					</div>
					<div class="testimonial-text clearfix text-white">
						<div class="testimonial-detail clearfix">
							<strong class="testimonial-name text-primary">Jhon Parker</strong>
							<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
						</div>
						<div class="testimonial-paragraph">
							<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="testimonial-6">
					<div class="testimonial-pic-block">
						<div class="testimonial-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic4.jpg" alt="">
						</div>
					</div>
					<div class="testimonial-text clearfix text-white">
						<div class="testimonial-detail clearfix">
							<strong class="testimonial-name text-primary">Jhon Parker</strong>
							<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
						</div>
						<div class="testimonial-paragraph">
							<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
