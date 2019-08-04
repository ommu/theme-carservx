<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\OwlCarouselPluginAsset::register($this);
$imageUrl = $isDemoTheme ? $themeAsset->baseUrl : Url::to('@webpublic');
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="section-full small-device p-b80">
	<div class="section-content">
		<div class="services-half-section-top bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-map.png)">
			<div class="container">
				<?php //begin.title ?>
				<div class="section-head text-center text-white">
					<h5 class="text-primary text-uppercase wt-title-small"><?php echo $title;?></h5>
					<h2 class="m-b5 center"><?php echo $intro;?></h2>
					<p><?php echo $context->description;?></p>
				</div>
				<?php //end.title ?>
			</div>
		</div>
		<div class="container">
			<div class="owl-carousel services_home owl-btn-bottom-center services-half-section-bottom">
				<?php foreach ($context->content as $key => $val) {
					$url = !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : (is_array($val['url']) ? Url::to($val['url']) : Url::to([$val['url']]));?>
				<div class="item">
					<div class="wt-box">
						<div class="wt-media">
							<a href="<?php echo $url;?>" title="<?php echo $val['title'];?>"><img src="<?php echo join('/', [$imageUrl, $val['image']]); ?>" alt="<?php echo $val['title'];?>"></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="<?php echo $url;?>" title="<?php echo $val['title'];?>"><?php echo $val['title'];?></a></h4>
							<p><?php echo $val['intro'];?></p>
							<a href="<?php echo $url;?>" title="<?php echo $val['title'];?>" class="site-button site-btn-effect">Read More</a>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>