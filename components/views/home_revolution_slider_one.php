<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;
use themes\carservx\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\carservx\assets\RevolutionSliderPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/js/rev-script-1.js', ['depends' => [ThemePluginAsset::className()]]);
$imageUrl = $isDemoTheme ? $themeAsset->baseUrl : Url::to('@webpublic');
$context = $this->context;
?>

<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
	<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
		<ul>
			<?php 
			$i = 0;
			foreach ($context->content as $key => $val) {
				$i++;
				$url = ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : (is_array($val['url']) ? Url::to($val['url']) : Url::to([$val['url']]));  ?>
			<li data-index="rs-<?php echo $i;?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo join('/', [$imageUrl, $val['image']]); ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<?php //MAIN IMAGE; ?>
				<img src="<?php echo join('/', [$imageUrl, $val['image']]); ?>" alt="" data-lazyload="<?php echo join('/', [$imageUrl, $val['image']]); ?>" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<?php //LAYERS; ?>
				<?php //LAYER NR. 1 [ for overlay ]; ?>
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-<?php echo $i;?>-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<?php //LAYER NR. 4 [ for title ]; ?>
				<div class="tp-caption tp-resizeme" id="slide-<?php echo $i;?>-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['220','220','220','220']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['800','800','85%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div class="rev-slider-title-block" style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase"><?php echo StringHelper::truncate($val['title'], 40);?></span>
					</div>

				</div>

				<?php //LAYER NR. 5 [ for paragraph]; ?>
				<div class="tp-caption tp-resizeme" id="slide-<?php echo $i;?>-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['500','500','420','420']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['700','700','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;"><?php echo $val['intro'];?></span>
				</div>

				<?php //LAYER NR. 6 [ for see all service botton ];
				if($val['url']) {?>
					<div class="tp-caption tp-resizeme" id="slide-<?php echo $i;?>-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['620','620','530','540']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
					{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
					{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
					]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index:13; text-transform:uppercase;">
						<a href="<?php echo $url;?>" title="<?php echo $val['title'];?>" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
					</div>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
