<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$imageUrl = $isDemoTheme ? $themeAsset->baseUrl : Url::to('@webpublic');
$context = $this->context;

$title = $intro = $context->title[0];
if(count($context->title) > 1) {
	$title = $context->title[0];
	$intro = $context->title[1];
} ?>

<div class="section-full small-device p-t80 p-b80 bg-gray">
	<div class="container">
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small"><?php echo $title;?></h5>
			<h2 class="m-b5 center"><?php echo $intro;?></h2>
			<p><?php echo $context->description;?></p>
		</div>
		<div class="section-content">
			<div class="wt-tabs vertical border tabs-default why-choose-tab bg-white p-a20">
				<ul class="nav nav-tabs ">
					<?php 
					$i = 0;
					foreach ($context->content as $key => $val) {
						$i++;?>
					<li <?php echo $i == 1 ? 'class="active"' : '';?>>
						<a data-toggle="tab" href="#choose-us-<?php echo $i;?>">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-<?php echo $val['icon'];?>"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0"><?php echo $val['title'];?></h5>
								</div>
							</div>
						</a>
					</li>
					<?php }?>
				</ul>
				<div class="tab-content">
					<?php 
					$i = 0;
					foreach ($context->content as $key => $val) {
						$i++;?>
					<div id="choose-us-<?php echo $i;?>" class="tab-pane <?php echo $i == 1 ? 'active' : '';?>">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte wt-tilte m-t0"><?php echo $val['intro'];?></h4>
										<?php echo $val['content'];?>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo join('/', [$imageUrl, $val['image']]); ?>" alt="<?php echo $val['title'];?>">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
