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
?>

<div class="project-detail-outer">
	<div class="row">
		<div class="col-md-6">
			<div class="project-detail-pic m-b30">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic5.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="project-detail-pic m-b30">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="project-detail-pic m-b30">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic3.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="project-detail-pic m-b30">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="project-detail-containt">
		<div class="bg-white text-black">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<div class="product-block">
						<div class="row">
							<div class="col-md-6 col-sm-6 m-b30">
								<h4 class="m-b10">Date</h4>
								<p>April 20, 2019</p>
							</div>
							<div class="col-md-6 col-sm-6 m-b30">
								<h4 class="m-b10">Client</h4>
								<p>Branding NthPsd Company</p>
							</div>
							<div class="col-md-6 col-sm-6 m-b30">
								<h4 class="m-b10">Category</h4>
								<p>Repair, Engine</p>
							</div>
							<div class="col-md-6 col-sm-6 m-b30">
								<h4 class="m-b10">Creative Director</h4>
								<p>Lorem Ipsum doler</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-6">
					<h4>Project Information</h4>
					<p>Similique sunt in culpa qui officia deserunts mollitia sed animi, id est laborum et dolorum fuga at harum quidem rerum facilis est et expedita distinctio am libero lanbour tempore, cum soluta nobis este eligend.</p>
					<p>here are many variations of passages of available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
				</div>
			</div>

		</div>
	</div>

</div>