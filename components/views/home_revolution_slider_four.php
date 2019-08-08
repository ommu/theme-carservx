<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\carservx\assets\RevolutionSliderPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/js/rev-script-4.js', ['depends' => [ThemePluginAsset::className()]]);
$context = $this->context;
?>

<!-- SLIDER START -->
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="beforeafterslider1" data-source="gallery" style="background:#252525;padding:0px;">
	<!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
	<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
		<ul>
			<li data-index="rs-905" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/video2.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/vid-1.jpg" alt="" data-lazyload="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina="">
				<!-- LAYERS -->

				<!-- BACKGROUND VIDEO LAYER -->
				<!-- LAYER NR. 1 -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="rrzb_904-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
					{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
					{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
					]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 4;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 2 [ for video ] -->
				<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="<?php echo $themeAsset->baseUrl ?>/demo/images/vid-1.mp4" data-videopreload="auto" data-videoloop="loop" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false">
				</div>

				<!-- LAYER 2 button -->
				<div class="tp-caption rev-btn tp-resizeme" id="rrzb_904-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button site-btn-effect">Read More</a></div>

				<!-- LAYER 5 title-->
				<div class="tp-caption tp-resizeme slider-tag-line2 text-white" id="rrzb_904-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
					{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust our services </div>

				<!-- LAYER 6 tag line-->
				<div class="tp-caption tp-resizeme" id="rrzb_904-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['60','45','60','40']" data-lineheight="['70','60','70','50']" data-width="['700','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
					{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: normal;font-weight: 700; color: #ffffff; font-family: 'Fjalla One', sans-serif;">Let Your Problem Be Our Problem</div>

			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<!-- SLIDER END -->