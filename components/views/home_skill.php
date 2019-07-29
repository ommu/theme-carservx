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
$content = $context->content;
?>

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?> <?php echo $context->paddingBottom ? 'p-b50' : '';?> <?php echo $context->bgClass;?>">
	<div class="container">
		<div class="section-head text-center">
			<h2 class="m-b5 center"><?php echo $content['title'];?></h2>
			<p><?php echo $content['intro'];?></p>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="wt-box m-b30">
					<?php foreach ($content['skills'] as $key => $val) {?>
					<span class="progressText text-black"><?php echo $val['skill'];?></span>
					<div class="progress wt-probar-1 m-b30">
						<div class="progress-bar bg-primary " role="progressbar" aria-valuenow="<?php echo $val['percent'];?>" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltips" data-placement="top" title="<?php echo $val['percent'];?>%"></span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="wt-box m-b30">
					<div class="overlay-wraper">
						<div class="overlay-main bg-black opacity-05"></div>
						<img src="<?php echo join('/', [$themeAsset->baseUrl, $content['image']]); ?>" alt="">
						<a href="<?php echo $content['video'];?>" class="mfp-video play-now">
							<i class="icon fa fa-play"></i>
							<span class="ripple"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>