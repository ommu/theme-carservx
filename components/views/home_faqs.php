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
<div class="section-full small-device p-t80 p-b80 <?php echo $context->bgClass;?>">
	<div class="section-content">
		<div class="row half-acc-section">
			<div class="col-md-6 half-acc-section-left clearfix">
				<div class="half-acc-section-left-content">
					<div class="car-mach-section">
						<div class="car-mach-content text-white">
							<strong class="car-mach-first">We Provide</strong>
							<strong class="car-mach-two">Trusted</strong>
							<strong class="car-mach-three">Services</strong>
							<strong class="car-mach-four">For You</strong>
						</div>
						<div class="car-mach-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/new.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 half-acc-section-right">

				<div class="half-acc-section-right-content">
					<h5 class="text-primary text-uppercase wt-title-small">What We Do</h5>
					<h2 class="m-t0">Satisfaction Guaranteed or Your Dent Back.</h2>
					<div class="wt-accordion" id="accordion5">
						<div class="panel wt-panel">
							<div class="acod-head acc-actives">
								<h4 class="acod-title bg-white">
										<a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
											<span class="indicator"><i class="fa"></i></span>
											When Should i Replace My Fuel Filter?
										</a>
									 </h4>
							</div>
							<div id="collapseOne5" class="acod-body collapse ">
								<div class="acod-content p-a15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believabl</div>
							</div>
						</div>
						<div class="panel wt-panel">
							<div class="acod-head">
								<h4 class="acod-title bg-white">
										<a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
										<span class="indicator"><i class="fa"></i></span>
										Must i get Air Conditioning Serviced? 
										</a>
									 </h4>
							</div>
							<div id="collapseTwo5" class="acod-body collapse">
								<div class="acod-content p-a15">Graphic design lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took.</div>
							</div>
						</div>
						<div class="panel wt-panel">
							<div class="acod-head">
								<h4 class="acod-title bg-white">
									<a data-toggle="collapse" href="#collapseThree5" class="collapsed" data-parent="#accordion5">
									<span class="indicator"><i class="fa"></i></span>
									How Long it Take To Repair My Vehicle?
									</a>
								 </h4>
							</div>
							<div id="collapseThree5" class="acod-body collapse in">
								<div class="acod-content p-a15">Developement lorem Ipsum is simply dummy text of the printing and type has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>