<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?>">
	<?php if($youtubeStatus) {?>
	<div class="container">
		<div class="video-section-dark overlay-wraper">
			<div class="overlay-main bg-black opacity-05"></div>
			<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/video-pic.png" alt="">
			<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
				<i class="icon fa fa-play"></i>
				<span class="ripple"></span>
			</a>
		</div>
	</div>
	<?php }?>

	<div class="container-fluid bg-cover overlay-wraper bg-bottom-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
		<div class="overlay-main bg-white opacity-09"></div>
		<div class="row talk-section2-outer p-t80">
			<div class="col-md-4 talk-section-left2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-left.png" alt="">
				</div>
			</div>
			<div class="col-md-4 talk-section-mid2">
				<div class="want-to-talk text-center">
					<?php if($title != $intro) {?>
					<h5 class="text-primary text-uppercase wt-title-small"><?php echo $title;?></h5>
					<?php }?>
					<h2 class="m-b5"><?php echo $intro;?></h2>
					<?php $contact = $context->contact;
					if(!empty($contact)) {
						$i = 0;
						foreach ($contact as $key => $val) {
							$i++;
							if($i == 1) {?>
							<h2 class="text-primary talk-sepr-white"><?php echo $key;?>: <?php echo $val;?></h2>
							<?php } else {?>
							<h3 class="text-primary"><?php echo $key;?>: <?php echo $val;?></h3>
					<?php 	}
						}
					}?>
					<p><?php echo $context->description;?></p>
					<div class="button-lr-line">
						<a href="#" class="site-button site-btn-effect">Book An Appointment</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 talk-section-right2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-right.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>