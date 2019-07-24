<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<div class="col-lg-4 col-md-4 col-sm-4">
	<div class="widget widget_address_outer m-b20">
		<h4 class="widget-title">Get In Touch</h4>
		<ul class="widget_address">
			<li><i class="fa fa-map-marker text-primary"></i>92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
			<li><i class="fa fa-envelope text-primary"></i>carservxdemo@gmail.com</li>
			<li><i class="fa fa-phone text-primary"></i>(+0091) 912-3456-073</li>
		</ul>
	</div>
</div>