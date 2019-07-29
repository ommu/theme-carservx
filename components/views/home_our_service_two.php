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

<div class="section-full bg-change-section overlay-wraper" data-toggle="tab-hover">
	<div class="overlay-main bg-black opacity-06"></div>
	<?php //begin.background ?>
	<div class="bg-changer">
		<div class="section-bg active" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-1.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-2.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-3.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-4.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-5.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-6.jpg)"></div>
	</div>
	<?php //end.background ?>
	<?php //begin.content ?>
	<div class="bg-change-content container-fluid">
		<div class="row">
			<?php 
			$i = 0;
			foreach ($context->content as $key => $val) {
				$i++;
				$url = !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : Url::to([$val['url']]);?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-<?php echo $val['icon'];?>"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10"><?php echo $val['title'];?></h4>
								<a href="<?php echo $url;?>" title="<?php echo $val['title'];?>" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT);?></span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
	<?php //end.content ?>
</div>