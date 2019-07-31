<?php 
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
?>

<?php $this->beginContent('@themes/carservx/layouts/main.php'); ?>

<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="all_services bg-gray">
			<ul>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'services-all']);?>">All Services</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'engine-diagnostics']);?>">Engine Diagnostics</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'lube-oil-and-filters']);?>">Lube Oil and Filters</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'belt-and-hoses']);?>">Belt and Hoses</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'air-conditioning']);?>">Air Conditioning</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'brake-repair']);?>">Brake repair</a></li>
				<li><a href="<?php echo Url::to(['/carservx-service/page', 'content'=>'tire-and-wheel-services']);?>">Tire and wheel Services</a></li>
			</ul>
		</div>

		<div class="about4-section m-b30 bg-gray p-a20">
			<div class="about4-content m-b30">
				<h2>GET 10% OFF TODAY</h2>
				<p>A Completely Safe and Advanced Cleaning Solution for both Petrol and Diesel Engines</p>
				<a href="#" class="site-button site-btn-effect">Read More</a>
			</div>

			<div class="wt-icon-box-wraper left bg-white p-a15 m-tb10">
				<a href="#" class="btn-block">
					<span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
					<strong class="text-uppercase text-black">Download .PDF</strong>
				</a>
			</div>
			<div class="wt-icon-box-wraper left bg-white p-a15 m-tb10">
				<a href="#" class="btn-block">
					<span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
					<strong class="text-uppercase text-black"> Download .DOC</strong>
				</a>
			</div>
			<div class="wt-icon-box-wraper left bg-white p-a15 m-t10">
				<a href="#" class="btn-block">
					<span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
					<strong class="text-uppercase text-black">Download .PPT</strong>
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="section-content">
			<div class="section-head text-left">
				<h2 class="m-b5 left"><?php echo $this->title;?></h2>
			</div>

			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>