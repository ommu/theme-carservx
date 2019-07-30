<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 30 July 2019, 05:02 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
?>

<div class="news-listing ">
	<div class="blog-post blog-md date-style-1 blog-list-1 clearfix  m-b60 bg-white">
		<div class="wt-post-media wt-img-effect zoom-slow">
			<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum1.jpg" alt=""></a>
		</div>
		<div class="wt-post-info  bg-white">

			<div class="wt-post-meta ">
				<ul>
					<li class="post-category bg-primary">Ford News</li>
					<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
					<li class="post-date">March 9, 2019</li>
				</ul>
			</div>
			<div class="wt-post-title ">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h4 class="post-title">Can i Modify Once my request once its submitted</h4></a>
			</div>
			<div class="wt-post-text">
				<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
			</div>
			<div class="wt-post-readmore">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" class="text-primary site-button-link">Read More</a>
			</div>

		</div>
	</div>

	<div class="blog-post blog-md date-style-1  blog-list-1 clearfix  m-b60 bg-white">
		<div class="wt-post-media wt-img-effect zoom-slow">
			<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum2.jpg" alt=""></a>
		</div>
		<div class="wt-post-info  bg-white">

			<div class="wt-post-meta ">
				<ul>
					<li class="post-category bg-primary">Ford News</li>
					<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
					<li class="post-date">March 9, 2019</li>
				</ul>
			</div>
			<div class="wt-post-title ">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h4 class="post-title">Do you service and repair all makes and models of vehicles</h4></a>
			</div>
			<div class="wt-post-text">
				<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
			</div>
			<div class="wt-post-readmore">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" class="text-primary site-button-link">Read More</a>
			</div>

		</div>
	</div>

	<div class="blog-post blog-md date-style-1  blog-list-1 clearfix  m-b60 bg-white">
		<div class="wt-post-media wt-img-effect zoom-slow">
			<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum3.jpg" alt=""></a>
		</div>
		<div class="wt-post-info  bg-white">

			<div class="wt-post-meta ">
				<ul>
					<li class="post-category bg-primary">Ford News</li>
					<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
					<li class="post-date">March 9, 2019</li>
				</ul>
			</div>
			<div class="wt-post-title ">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h4 class="post-title">Why does my car need maintenance if it's running fine</h4></a>
			</div>
			<div class="wt-post-text">
				<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
			</div>
			<div class="wt-post-readmore">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" class="text-primary site-button-link">Read More</a>
			</div>

		</div>
	</div>

	<div class="blog-post blog-md date-style-1  blog-list-1 clearfix  m-b60 bg-white">
		<div class="wt-post-media wt-img-effect zoom-slow">
			<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum4.jpg" alt=""></a>
		</div>
		<div class="wt-post-info  bg-white">

			<div class="wt-post-meta ">
				<ul>
					<li class="post-category bg-primary">Ford News</li>
					<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
					<li class="post-date">March 9, 2019</li>
				</ul>
			</div>
			<div class="wt-post-title ">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h4 class="post-title">My car is running rough. Do I need a tune-up</h4></a>
			</div>
			<div class="wt-post-text">
				<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
			</div>
			<div class="wt-post-readmore">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" class="text-primary site-button-link">Read More</a>
			</div>

		</div>
	</div>

	<div class="blog-post blog-md date-style-1  blog-list-1 clearfix  m-b60 bg-white">
		<div class="wt-post-media wt-img-effect zoom-slow">
			<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/default/thum5.jpg" alt=""></a>
		</div>
		<div class="wt-post-info  bg-white">

			<div class="wt-post-meta ">
				<ul>
					<li class="post-category bg-primary">Ford News</li>
					<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
					<li class="post-date">March 9, 2019</li>
				</ul>
			</div>
			<div class="wt-post-title ">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h4 class="post-title">How long will it take to repair my vehicle</h4></a>
			</div>
			<div class="wt-post-text">
				<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
			</div>
			<div class="wt-post-readmore">
				<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" class="text-primary site-button-link">Read More</a>
			</div>

		</div>
	</div>
</div>

<ul class="pagination m-tb0">
	<li><a href="#">«</a></li>
	<li><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">»</a></li>
</ul>