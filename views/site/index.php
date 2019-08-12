<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\SiteController
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 20 February 2019, 15:35 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePreviewPluginAsset::register($this);
?>

<!-- HOME PAGE SECTION START -->
<div class="section-full p-t80 bg-gray">
	<div class="container-fluid">
		<div class="container">
			<div class="section-head text-center">
				<h1 class="text-uppercase">4 Types of home Pages</h1>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-wrap mfp-gallery">
				<div class=" col-lg-6 col-md-6 col-sm-6 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/index1.jpg)">
							<a href="<?php echo Url::to(['/carservx-home/index']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Home-1</h3></div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
					<div class="p-a30 bg-white perspective-block ">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/index2.jpg)">
							<a href="<?php echo Url::to(['/carservx-home/index-2']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Home-2 </h3></div>
				</div>
				<div class=" col-lg-6 col-md-6 col-sm-6 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/index3.jpg)">
							<a href="<?php echo Url::to(['/carservx-home/index-3']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Home-3</h3></div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
					<div class="p-a30 bg-white perspective-block ">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/index4.jpg)">
							<a href="<?php echo Url::to(['/carservx-home/index-4']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Home-4 video section</h3></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--ALL PAGES SECTION START -->
<div class="section-full p-t80 bg-gray">
	<div class="container-fluid">
		<div class="container">
			<div class="section-head text-center">
				<h1 class="text-uppercase">Inner Pages</h1>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-wrap mfp-gallery">
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/about.jpg)">
							<a href="<?php echo Url::to(['/carservx-page/about']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>About us</h3></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block ">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/blog-grid.jpg)">
							<a href="<?php echo Url::to(['/carservx-blog/grid']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Blog Grid</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/blog-listing.jpg)">
							<a href="<?php echo Url::to(['/carservx-blog/listing']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Blog Listing</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/blog-masonary.jpg)">
							<a href="<?php echo Url::to(['/carservx-blog/masonry']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Blog Masonry</h3></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block ">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/Contact.jpg)">
							<a href="<?php echo Url::to(['/carservx-contact/index']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Contact Us</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/Portfolio_1.jpg)">
							<a href="<?php echo Url::to(['/carservx-portfolio/index']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Portfolio 1</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/Portfolio_2.jpg)">
							<a href="<?php echo Url::to(['/carservx-portfolio/index-2']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Portfolio 2</h3></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block ">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/portfolio_3.jpg)">
							<a href="<?php echo Url::to(['/carservx-portfolio/index-3']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Portfolio 3</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/Post-right-sidebar.jpg)">
							<a href="<?php echo Url::to(['/carservx-blog/detail']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Post right sidebar</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/faq.png)">
							<a href="<?php echo Url::to(['/carservx-page/faq']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>FAQ</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/Project_detail.jpg)">
							<a href="<?php echo Url::to(['/carservx-portfolio/detail']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Portfolio detail</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/service_detail.jpg)">
							<a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'engine-diagnostics']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Service detail</h3></div>
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-4 m-b30">
					<div class="p-a30 bg-white perspective-block">
						<div class="preview-box" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/pages/team.jpg)">
							<a href="<?php echo Url::to(['/carservx-page/team']);?>" target="_blank"></a>
						</div>
					</div>
					<div class="preview-name">
						<h3>Our Team</h3></div>
				</div>
			</div>
		</div>
	</div>
</div>