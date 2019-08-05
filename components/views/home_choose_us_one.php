<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="section-full">
	<div class="row why-choose-video-section bg-white">
		<div class="col-lg-6 col-md-6 why-choose-left-section bg-no-repeat bg-bottom-left" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/pic-c-1bg.png);">
			<div class="why-choose-left-content">
				<div class="section-head ">
					<h5 class="text-primary text-uppercase wt-title-small"><?php echo $title;?></h5>
					<h2 class="m-b5 center"><?php echo $intro;?></h2>
				</div>
				<div class="section-content">
					<?php 
					$content = $context->content;
					if(!empty($content)) {?>
					<ol class="list-num-count m-b0">
						<?php foreach ($content as $val) {?>
							<li><?php echo $val;?></li>
						<?php }?>
					</ol>
					<?php }?>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 why-choose-right-section bg-primary">
			<?php //begin.contact
			$contact = [
				'withChooseUs' => true,
			];
			if($context->contactPageId)
				$contact = ArrayHelper::merge(
					$contact, [
						'pageId'=>$context->contactPageId,
					]);
			echo \themes\carservx\components\HomeContact::widget($contact); ?>
		</div>
	</div>
</div>
