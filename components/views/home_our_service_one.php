<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Inflector;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$imageUrl = $isDemoTheme ? $themeAsset->baseUrl : Url::to('@webpublic');
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="section-full small-device best_services_tab_outer overlay-wraper bg-no-repeat bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
	<div class="overlay-main bg-secondry opacity-09"></div>
	<div class="container">
		<div class="wt-tabs tabs-default best_services_tab p-t80 p-b50">
			<div class="row">
				<div class="col-md-6 m-b30">
					<?php //begin.title ?>
					<div class="section-head">
						<h5 class="text-primary text-uppercase wt-title-small"><?php echo $title;?></h5>
						<h2 class="m-b5 left"><?php echo $intro;?></h2>
					</div>
					<?php //end.title ?>

					<?php //begin.tab ?>
					<ul class="nav nav-tabs">
						<?php 
						$i = 0;
						foreach ($context->content as $key => $val) {
							$i++;?>
						<li class="<?php echo $i == 1 ? 'active' : '';?>">
							<a data-toggle="tab" href="#<?php echo Inflector::slug(Inflector::singularize($val['title']));?>">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-<?php echo $val['icon'];?>"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b20"><?php echo implode('<br/>', explode(' ', $val['title']));?></h4>
									</div>
								</div>
							</a>
						</li>
						<?php }?>
					</ul>
					<?php //end.tab ?>
				</div>

				<?php //begin.content ?>
				<div class="col-md-6 m-b30">
					<div class="tab-content">
						<?php 
						$i = 0;
						foreach ($context->content as $key => $val) {
							$i++;
							$url = !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : (is_array($val['url']) ? Url::to($val['url']) : Url::to([$val['url']]));?>
						<div id="<?php echo Inflector::slug(Inflector::singularize($val['title']));?>" class="tab-pane <?php echo $i == 1 ? 'active' : '';?>">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo join('/', [$imageUrl, $val['image']]); ?>" alt="<?php echo $val['title'];?>">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white"><?php echo $val['title'];?></h4>
									<p><?php echo $val['intro'];?></p>
									<a href="<?php echo $url;?>" title="<?php echo $val['title'];?>" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<?php //end.content ?>
			</div>
		</div>
	</div>
</div>