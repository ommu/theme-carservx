<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\OwlCarouselPluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="section-full p-t80 p-b50 <?php echo $context->bgClass;?>">
	<div class="container">
		<?php //begin.title ?>
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Recently finished</h5>
			<h2 class="m-b5 left">Our Clients</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<?php //end.title ?>
		<?php //begin.content ?>
		<div class="section-content">
			<div class="section-content">
				<div class="section-content p-tb10 owl-btn-vertical-center">
					<div class="owl-carousel home-client-carousel<?php echo $context->navigation ? '-navigation' : '';?>">

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php //end.carousel ?>
	</div>
</div>