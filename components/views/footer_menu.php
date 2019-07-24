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

<div class="col-lg-3 col-md-3 col-sm-4">
	<div class="widget widget_services inline-links">
		<h4 class="widget-title">links</h4>
		<ul>
			<li><a href="about-1.html">About</a></li>
			<li><a href="post-gallery.html">Gallery</a></li>
			<li><a href="news-grid.html">Blog</a></li>
			<li><a href="work-masonry.html">Faq</a></li>
			<li><a href="contact-1.html">Contact Us</a></li>
		</ul>
	</div>
</div>