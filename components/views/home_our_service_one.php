<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<div class="section-full small-device best_services_tab_outer overlay-wraper bg-no-repeat bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
	<div class="overlay-main bg-secondry opacity-09"></div>
	<div class="container">
		<div class="wt-tabs tabs-default best_services_tab p-t80 p-b50">
			<div class="row">
				<div class="col-md-6 m-b30">
					<?php //begin.title ?>
					<div class="section-head">
						<h5 class="text-primary text-uppercase wt-title-small">Our Services</h5>
						<h2 class="m-b5 left">We Provide best Services</h2>
					</div>
					<?php //end.title ?>
					<?php //begin.tab ?>
					<ul class="nav nav-tabs">

						<li class="active">
							<a data-toggle="tab" href="#service_tab_1">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-plunger"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Oil</h4>
										<h4 class="wt-tilte m-b20">Change</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_2">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Break</h4>
										<h4 class="wt-tilte m-b20">Repair</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_3">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-wheel"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Wheels</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_4">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-automobile"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">General</h4>
										<h4 class="wt-tilte m-b20">Service</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_5">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-battery"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Batteries</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_6">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-spray"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Painting</h4>
									</div>
								</div>
							</a>
						</li>

					</ul>
					<?php //end.tab ?>
				</div>
				<?php //begin.content ?>
				<div class="col-md-6 m-b30">
					<div class="tab-content">
						<div id="service_tab_1" class="tab-pane active">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic1.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Inspection</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_2" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic10.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Break Repair</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_3" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Wheels</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_4" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic8.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">General Service</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_5" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic4.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Batteries</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_6" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Painting</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php //end.content ?>
			</div>
		</div>
	</div>
</div>