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

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?> p-b40 <?php echo $context->bgClass;?>">
	<div class="container">
		<?php //begin.title ?>
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Blogs</h5>
			<h2 class="m-b5 left">Our Latest News</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<?php //end.title ?>
		<?php //begin.content ?>
		<div class="section-content">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic3.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">The Number of electric vehicles in the UK has doubled</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic4.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Do you service and repair all makes and models of vehicles</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic3.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Why does my car need maintenance if it's running fine</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php //end.content ?>
	</div>
</div>