<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<div class="col-lg-4 col-md-4 col-sm-4">
	<div class="widget widget_address_outer inline-links m-b20">
		<h4 class="widget-title"><?php echo Yii::t('app', 'Get In Touch');?></h4>
		<ul class="widget_address">
			<?php if($context->address) {?>
			<li><i class="fa fa-map-marker text-primary"></i><?php echo $context->address;?></li>
			<?php }
			if($context->email) {?>
			<li><i class="fa fa-envelope text-primary"></i><?php echo $context->email;?></li>
			<?php }
			if($context->phone) {?>
			<li><i class="fa fa-phone text-primary"></i><?php echo $context->phone;?></li>
			<?php }?>
		</ul>
	</div>
</div>