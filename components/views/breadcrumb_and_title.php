<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$context = $this->context;

$rand_keys = array_rand($context->banners, 1);
$randomBanner = $context->banners[$rand_keys];
?>

<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo join('/', [$themeAsset->baseUrl, $randomBanner]); ?>);">
	<div class="overlay-main bg-black opacity-07"></div>
	<div class="container">
		<div class="wt-bnr-inr-entry">
			<div class="banner-title-outer">
				<div class="banner-title-name">
					<h2 class="text-white"><?php echo $this->title;?></h2>
				</div>
			</div>
			<div>
				<ul class="wt-breadcrumb breadcrumb-style-2">
					<li><a href="<?php echo $isDemoTheme ? Url::to(['/carservx-home/index']) : Url::to(['/site/index']);?>">Home</a></li>
					<li>FAQ</li>
				</ul>
			</div>
		</div>
	</div>
</div>