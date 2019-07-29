<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\CounterupPluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="section-full">
	<div class="container">
		<div class="row <?php echo $context->paddingTop ? 'p-t80' : '';?> <?php echo $context->paddingBottom ? 'p-b50' : '';?> <?php echo $context->bgClass;?>">
			<?php foreach ($context->portfolios as $key => $val) {?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-<?php echo $val['icon'];?>"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0"><?php echo $val['counter'];?></h2>
						<h4 class="m-b0"><?php echo $val['category'];?></h4>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>