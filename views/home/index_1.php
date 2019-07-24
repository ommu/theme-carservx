<?php
/**
 * @var $this app\components\View
 * @var $this themes\carservx\controllers\HomeController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 22 July 2019, 10:21 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemeHomePluginAsset;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
ThemeHomePluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/js/rev-script-1.js', ['depends' => [ThemeHomePluginAsset::className()]]);
?>

<!-- SLIDER START -->
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
	<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
		<ul>

			<!-- SLIDE 1 -->
			<li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide1.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-901-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['220','220','220','220']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['800','800','85%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div class="rev-slider-title-block" style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Satisfaction Guaranteed or Your Dent Back.</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for paragraph] -->
				<div class="tp-caption  tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['500','500','420','420']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['700','700','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</span>
				</div>

				<!-- LAYER NR. 6 [ for see all service botton ] -->
				<div class="tp-caption tp-resizeme" id="slide-901-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['620','620','530','540']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index:13; text-transform:uppercase;">
					<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
				</div>
			</li>

			<!-- SLIDE 2 -->
			<li data-index="rs-902" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide2.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide2.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-902-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-902-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['220','220','220','220']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['800','800','85%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div class="rev-slider-title-block" style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Top notch service is our main auto motive.</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for paragraph] -->
				<div class="tp-caption  tp-resizeme" id="slide-902-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['500','500','420','420']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['700','700','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</span>
				</div>

				<!-- LAYER NR. 6 [ for see all service botton ] -->
				<div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['620','620','530','540']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index:13; text-transform:uppercase;">
					<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
				</div>
			</li>

			<!-- SLIDE 2 -->
			<li data-index="rs-903" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide3.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide3.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider1/slide3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-903-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-903-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['220','220','220','220']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['800','800','85%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div class="rev-slider-title-block" style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Hands that understand Automobile Very well</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for paragraph] -->
				<div class="tp-caption  tp-resizeme" id="slide-903-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['500','500','420','420']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['700','700','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</span>
				</div>

				<!-- LAYER NR. 6 [ for see all service botton ] -->
				<div class="tp-caption tp-resizeme" id="slide-903-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['620','620','530','540']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[60,60,60,60]" style="z-index:13; text-transform:uppercase;">
					<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
				</div>
			</li>

		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<!-- SLIDER END -->

<?php //begin.about us
echo \themes\carservx\components\HomeAboutUs::widget([
	'layout' => 'one',
]); ?>

<?php //begin.portfolio counter
echo \themes\carservx\components\HomePortfolioCounter::widget([
	'withBackground' => true,
]); ?>

<?php //begin.our services
echo \themes\carservx\components\HomeOurService::widget([
	'layout' => 'three',
]); ?>

<!-- WHY CHOOSE AND VIDEO SECTION START -->
<div class="section-full">
	<div class="row why-choose-video-section bg-white">
		<div class="col-lg-6 col-md-6 why-choose-left-section bg-no-repeat bg-bottom-left" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/pic-c-1bg.png);">
			<div class="why-choose-left-content">
				<!-- TITLE START -->
				<div class="section-head ">
					<h5 class="text-primary text-uppercase wt-title-small">Why Choose Us</h5>
					<h2 class="m-b5 center">Why people choose us</h2>
				</div>
				<!-- TITLE END -->
				<div class="section-content">
					<ol class="list-num-count  m-b0">
						<li>To facilitate even energy distribution so your vehicle's battery is properly charged.</li>
						<li>Avoid breaking down in your vehicle by maintaining its belts and hoses.</li>
						<li>Failing an emissions test is usually the fault of either the muffler or the exhaust system.</li>
						<li>The performance of the engine, alternator, and secondary electrical systems depend on the battery.</li>
						<li>Regular tire inspection and timely repair can help keep you driving safely.</li>
						<li>Experience a smooth, controlled ride with a properly functioning suspension system.</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 why-choose-right-section  bg-primary">
			<div class="why-choose-right-content">
				<div class="why-choose-video-outer overlay-wraper bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/video-pic.png)">
					<div class="overlay-main bg-black opacity-05"></div>
					<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
						<i class="icon fa fa-play"></i>
						<span class="ripple"></span>
					</a>
				</div>
				<div class="want-to-talk-video">
					<h2 class="m-b5">Want to talk?</h2>
					<h2 class="text-white">Call:(123) 556 4321</h2>
					<p>Need a special repair service? we are happy to fulfil every request in order to exceed your expectations</p>
					<div class="button-lr-line">
						<a href="#" class="site-button-secondry site-btn-effect">Book An Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- WHY CHOOSE AND VIDEO SECTION END -->

<?php //begin.latest news (blog)
echo \themes\carservx\components\HomeLatestNews::widget([
	'bgClass' => 'bg-gray',
	'isPotraitLayout' => true,
]); ?>

<?php //begin.testimony and team
echo \themes\carservx\components\HomeTestimonyAndTeam::widget(); ?>

<?php //begin.client with logo
echo \themes\carservx\components\HomeClient::widget([
	'bgClass' => 'bg-gray',
	'navigation' => true,
]); ?>

<?php //begin.faq
echo \themes\carservx\components\HomeFaqs::widget([
	'bgClass' => 'bg-gray',
]); ?>