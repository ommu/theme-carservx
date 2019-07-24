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

<div class="section-full <?php echo $context->bgClass;?>">
	<div class="team-half-top p-t80 bg-secondry bg-no-repeat bg-cover bg-center" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-map.png)">
		<div class="container">
			<div class="section-head text-white text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Expert Member</h5>
				<h2 class="m-b5 left">Our Team</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
		</div>
	</div>

	<div class="team-half-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Richard Wagner</a></h4>
							<p class="m-b0">Technician</p>
							<div class="team-social-center">
								<ul class="team-social-icon">
									<li>
										<a href="javascript:void(0);" class="fa fa-facebook"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-twitter"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-instagram"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Simpson Martin</a></h4>
							<p class="m-b0">Technician</p>
							<div class="team-social-center">
								<ul class="team-social-icon">
									<li>
										<a href="javascript:void(0);" class="fa fa-facebook"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-twitter"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-instagram"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic3.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Carley Rensberger</a></h4>
							<p class="m-b0">Technician</p>
							<div class="team-social-center">
								<ul class="team-social-icon">
									<li>
										<a href="javascript:void(0);" class="fa fa-facebook"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-twitter"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-instagram"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic4.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Tom Albert</a></h4>
							<p class="m-b0">Technician</p>
							<div class="team-social-center">
								<ul class="team-social-icon">
									<li>
										<a href="javascript:void(0);" class="fa fa-facebook"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-twitter"></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="fa fa-instagram"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>