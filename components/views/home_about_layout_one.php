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

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?> <?php echo $context->paddingBottom ? 'p-b50' : '';?> <?php echo $context->bgClass;?>">
	<div class="section-content">
		<div class="container">
			<?php //begin.title ?>
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Welcome Carservx</h5>
				<h2 class="m-b5 left ">We're a company of talented engineers & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<?php //end.title ?>
			<?php //begin.content ?>
			<div class="row">
				<?php 
				$count = count($context->content);
				$i = 0;
				foreach ($context->content as $key => $val) {
					$i++;?>
				<div class="col-md-4 <?php echo $i == $count ? 'col-sm-12' : 'col-sm-6';?>">
					<div class="wt-icon-box-wraper p-a30 m-b30 bdr-1 bdr-solid bdr-gray bounce-right-animation">
						<div class="relative icon-count-1">
							<span class="icon-count-number"><?php echo $val['id'];?></span>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25"><?php echo $val['title'];?></h4>
								<p><?php echo $val['intro'];?></p>
							</div>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="flaticon-<?php echo $val['icon'];?>"></i></span>
							</div>
							<div>
								<a href="<?php echo !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : Url::to([$val['url']]);?>" title="<?php echo $val['title'];?>" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
			<?php //end.content ?>
		</div>
	</div>
</div>