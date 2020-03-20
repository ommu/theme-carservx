<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 31 July 2019, 11:45 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Inflector;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
$content = Yii::$app->request->get('content');
$this->title = $content ? Inflector::camel2words($content) : $this->title;
?>

<div class="wt-box services-etc m-b30">
	<div class="wt-media m-b30">
		<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic3.jpg" alt="">
	</div>
	<div class="wt-info">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem </p>

		<blockquote class="m-a0">
			<i class="fa fa-quote-left font-20"></i>
			<p>Who do not know how to pursue pleasure rationally encounters consequences that are extremely painful nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
			</p>
			<div class="p-t15 text-uppercase">
				<strong>William Jomurray</strong>
				<span>Envato Author</span>
			</div>

		</blockquote>
	</div>
</div>
<div class="service-provide">
	<h4>Service Provide</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
	<div class="row">
		<div class="col-md-5">
			<div class="wt-media m-b30">
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic3.jpg" alt="">
			</div>
		</div>
		<div class="col-md-7">
			<ul class="list-angle-right">
				<li>Battery Cable replacement and speed up charging.</li>
				<li>ABS Control Module replacement and repair.</li>
				<li>Exhaust Muffler repair and free replacement.</li>
				<li>Fuel Filter replacement Seal full setup cleaned.</li>
				<li>Axle Shaft Seal full setup replacement and clean.</li>
			</ul>
		</div>
	</div>
</div>