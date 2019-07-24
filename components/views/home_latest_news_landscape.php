<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="section-full small-device <?php echo $context->paddingTop ? 'p-t80' : '';?> p-b40 <?php echo $context->bgClass;?>">
	<div class="container">
		<?php //begin.title ?>
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Latest Blog</h5>
			<h2 class="m-b5 center">Our Latest News</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<?php //end.title ?>
		<?php //begin.content ?>
		<div class="section-content">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="blog-post latest-blog-2 date-style-1 block-shadow">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-post-info bg-white">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">The Number of electric vehicles in the UK has doubled</h4>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="text-primary site-button-link">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="blog-post latest-blog-2 date-style-1 block-shadow">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-post-info bg-white">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-date">March 20, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Solar Cells For Electric Charge Appeared on sale</h4>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="text-primary site-button-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php //end.content ?>
	</div>
</div>