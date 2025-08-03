<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 30 July 2019, 05:02 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBe0RCo4fOUaDr412OzLvKt0KInk0CtUsw&callback=initMap', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/js/map.script.js', ['depends' => [ThemePluginAsset::className()]]);
$js = <<<JS
	var mapsLatitude = '48.8583698';
	var mapsLongitude = '2.2944833000000244';
JS;
$this->registerJs($js, \app\components\View::POS_HEAD);
?>

<div class="row">
	<div class="col-md-4 col-sm-6">
		<div class="contact-info  p-b50">
			<div class="contact-info-inner">
				<!-- TITLE START -->
				<div class="section-head text-left">
					<h2 class="m-b5">Contact Info</h2>
				</div>
				<!-- TITLE END -->
				<div class="wt-icon-box-wraper left p-b40">
					<div class="icon-xs"><i class="fa fa-phone text-primary"></i></div>
					<div class="icon-content">
						<h4 class="m-t0">Phone number</h4>
						<p>(+61) 0370 105 611</p>
					</div>
				</div>

				<div class="wt-icon-box-wraper left p-b40">
					<div class="icon-xs"><i class="fa fa-envelope text-primary"></i></div>
					<div class="icon-content">
						<h4 class="m-t0">Email address</h4>
						<p>carservx@gmail.com</p>
					</div>
				</div>

				<div class="wt-icon-box-wraper left">
					<div class="icon-xs"><i class="fa fa-map-marker text-primary"></i></div>
					<div class="icon-content">
						<h4 class="m-t0">Address info</h4>
						<p>55/11 Land Street, Modern New Yourk City, USA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-sm-6">
		<form class="contact-form cons-contact-form  p-b50" method="post" action="form-handler.php">
			<div class="contact-one">

				<!-- TITLE START -->
				<div class="section-head text-left">
					<h2 class="m-b5">Get In Touch</h2>
				</div>
				<!-- TITLE END -->

				<div class="form-group">
					<input name="username" type="text" required class="form-control" placeholder="Name">
				</div>

				<div class="form-group">
					<input name="email" type="text" class="form-control" required placeholder="Email">
				</div>

				<div class="form-group">
					<textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
				</div>

				<div class="text-left">
					<button name="submit" type="submit" value="Submit" class="site-button site-btn-effect button-lg">
						Submit
					</button>
				</div>

			</div>
		</form>
	</div>
</div>

<div class="gmap-outline m-b50">
	<div id="gmap_canvas2" class="google-map"></div>
</div>