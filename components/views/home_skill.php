<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\MagnificPopupPluginAsset::register($this);
\themes\carservx\assets\StellarPluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?> <?php echo $context->paddingBottom ? 'p-b50' : '';?> <?php echo $context->bgClass;?>">
	<div class="container">
		<div class="section-head text-center">
			<h2 class="m-b5 center">Our Skills</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="wt-box m-b30">
					<span class="progressText text-black">Tire and Wheel Services</span>
					<div class="progress wt-probar-1  m-b30">
						<div class="progress-bar bg-primary " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="85%"></span>
						</div>
					</div>

					<span class="progressText text-black">Lube, Oil and Filters</span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="75%"></span>
						</div>
					</div>

					<span class="progressText text-black">Belts and Hoses</span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="65%"></span>
						</div>
					</div>

					<span class="progressText text-black">Engine Diagnostics</span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="55%"></span>
						</div>
					</div>

					<span class="progressText text-black">Brake Repair</span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="45%"></span>
						</div>
					</div>

					<span class="progressText text-black">Air Conditioning</span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="65%"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="wt-box m-b30">
					<div class="overlay-wraper">
						<div class="overlay-main bg-black opacity-05"></div>
						<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt="">
						<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
							<i class="icon fa fa-play"></i>
							<span class="ripple"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>