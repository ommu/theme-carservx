<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\OwlCarouselPluginAsset::register($this);
?>

<div class="col-md-6 col-sm-6 half-section-outer-right bg-cover overlay-wraper" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/offer.jpg);">
	<div class="overlay-main opacity-09 bg-primary"></div>
	<div class="half-section-right">
		<div class="section-head text-left text-white">
			<h5 class="text-primary text-uppercase wt-title-small">Out Best Team</h5>
			<h2 class="m-b5 left">Our Team</h2>
		</div>

		<div class="owl-carousel team-home-with-testimony owl-btn-bottom-left owl-btn-light">
			<div class="item">
				<div class="wt-team-six">
					<div class="wt-team-media wt-thum-bx wt-img-overlay1">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic1.jpg" alt="">
						<div class="overlay-bx">
							<div class="overlay-icon">
								<div class="wt-team-info text-center p-lr10 p-tb20">
									<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Richard Wagner</a></h4>
									<p class="m-b15">Technician</p>
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

			<div class="item">
				<div class="wt-team-six">
					<div class="wt-team-media wt-thum-bx wt-img-overlay1">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic2.jpg" alt="">
						<div class="overlay-bx">
							<div class="overlay-icon">
								<div class="wt-team-info text-center p-lr10 p-tb20">
									<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">James Strasser</a></h4>
									<p class="m-b15">Technician</p>
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

			<div class="item">
				<div class="wt-team-six">
					<div class="wt-team-media wt-thum-bx wt-img-overlay1">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic3.jpg" alt="">
						<div class="overlay-bx">
							<div class="overlay-icon">
								<div class="wt-team-info text-center p-lr10 p-tb20">
									<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Simpson Martin</a></h4>
									<p class="m-b15">Technician</p>
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

			<div class="item">
				<div class="wt-team-six">
					<div class="wt-team-media wt-thum-bx wt-img-overlay1">
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic4.jpg" alt="">
						<div class="overlay-bx">
							<div class="overlay-icon">
								<div class="wt-team-info text-center p-lr10 p-tb20">
									<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Tom Albert</a></h4>
									<p class="m-b15">Technician</p>
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
	</div>
</div>
