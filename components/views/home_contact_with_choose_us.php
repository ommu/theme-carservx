<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\MagnificPopupPluginAsset::register($this);
$imageUrl = $isDemoTheme ? $themeAsset->baseUrl : Url::to('@webpublic');
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="why-choose-right-content">
	<?php if($youtubeStatus) {?>
	<div class="why-choose-video-outer overlay-wraper bg-cover" style="background-image:url(<?php echo join('/', [$imageUrl, $context->image]); ?>)">
		<div class="overlay-main bg-black opacity-05"></div>
		<a href="https://www.youtube.com/watch?v=<?php echo $context->youtube;?>" class="mfp-video play-now">
			<i class="icon fa fa-play"></i>
			<span class="ripple"></span>
		</a>
	</div>
	<?php }?>

	<div class="want-to-talk-video">
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
				<h3 class="text-white"><?php echo $key;?>: <?php echo $val;?></h3>
				<?php } else {?>
				<h4 class="text-white"><?php echo $key;?>: <?php echo $val;?></h4>
		<?php 	}
			}
		}?>
		<p><?php echo $context->description;?></p>
		<div class="button-lr-line">
			<a href="#" class="site-button-secondry site-btn-effect">Book An Appointment</a>
		</div>
	</div>
</div>