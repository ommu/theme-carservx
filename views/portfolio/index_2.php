<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 30 July 2019, 01:17 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
\themes\carservx\assets\IsotopePluginAsset::register($this);
\themes\carservx\assets\MagnificPopupPluginAsset::register($this);
?>

<div class="section-full small-device p-t80 p-b50 bg-gray">
	<div class="container-fluid">
		<div class="filter-wrap p-b30 text-left">
			<ul class="masonry-filter link-style  text-uppercase">
				<li class="active"><a data-filter="*" href="javascript:void(0);">All</a></li>
				<li><a data-filter=".cat-1" href="javascript:void(0);">Oil Change</a></li>
				<li><a data-filter=".cat-2" href="javascript:void(0);">Automotive Filters</a></li>
				<li><a data-filter=".cat-3" href="javascript:void(0);">Air Conditioning</a></li>
				<li><a data-filter=".cat-4" href="javascript:void(0);">Wheel Alignment </a></li>
				<li><a data-filter=".cat-5" href="javascript:void(0);">Electical</a></li>
			</ul>
		</div>
		
		<div class="portfolio-wrap mfp-gallery work-grid row clearfix">
			<div class="masonry-item cat-1  col-md-3 col-sm-4 m-b30">
				<div class="wt-box  work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic1.jpg" alt="">
					</div>

					<div class="wt-info p-a20 text-white">
						<h4>Oil Change</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-2  col-md-3 col-sm-4 m-b30">
				<div class="wt-box  work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt="">
					</div>

					<div class="wt-info p-a20 text-white">
						<h4>Automotive Filters</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-3  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic4.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Air Conditioning</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-4  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic4.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Wheel Alignment </h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-5  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic5.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Electical</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-4  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Wheel Alignment </h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-3  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic7.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Air Conditioning</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-2  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic8.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Automotive Filters</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
			<div class="masonry-item cat-1  col-md-3 col-sm-4 m-b30">
				<div class="wt-box   work-hover-content">
					<div class="img-center-icon">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic9.jpg" alt="">
					</div>
					<div class="wt-info p-a20 text-white">
						<h4>Oil Change</h4>
						<p>Weekends don't count unless you spend them doing something.</p>
						<a hhref="<?php echo Url::to(['/carservx-portfolio/detail']);?>" class="site-button site-btn-effect">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>