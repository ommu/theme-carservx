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

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
\themes\carservx\assets\ThemeHomePluginAsset::register($this);
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

<!-- WELCOME SECTION START -->
<div class="section-full p-t80 p-b50">
	<div class="section-content">
		<div class="container">
			<!-- TITLE START -->
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Welcome Carservx</h5>
				<h2 class="m-b5 left ">We're a company of talented engineers & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<!-- TITLE END -->

			<div class="row">
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 m-b30 bdr-1 bdr-solid bdr-gray bounce-right-animation">
						<div class="relative icon-count-1">
							<span class="icon-count-number">01</span>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">International Standards</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
							</div>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="flaticon-certificate "></i></span>
							</div>
							<div>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 m-b30 bdr-1 bdr-solid bdr-gray bounce-right-animation">
						<div class="relative icon-count-1">
							<span class="icon-count-number">02</span>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">We love our client</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
							</div>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="flaticon-employee "></i></span>
							</div>
							<div>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">

					<div class="wt-icon-box-wraper p-a30 m-b30 bdr-1 bdr-solid bdr-gray bounce-right-animation">
						<div class="relative icon-count-1">
							<span class="icon-count-number">03</span>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">Only original parts</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
							</div>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="flaticon-car-parts "></i></span>
							</div>
							<div>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- WELCOME  SECTION END -->

<!--  SECTION START -->
<div class="section-full  two-part-bg">
	<div class="section-content">
		<div class="container">
			<div class="mid-counter">
				<div class="row">

					<div class="col-md-4 col-sm-4">
						<div class="wt-icon-box-wraper left text-primary m-b30">
							<span class="icon-md">
								<i class="flaticon-spray"></i>
							</span>
							<div class="icon-content">
								<h2 class="counter m-b5 m-t0">125</h2>
								<h4 class="m-b0">Car Painted</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="wt-icon-box-wraper left text-primary m-b30">
							<span class="icon-md">
								<i class="flaticon-shift"></i>
							</span>
							<div class="icon-content">
								<h2 class="counter m-b5 m-t0">455</h2>
								<h4 class="m-b0">Gears Repaired</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="wt-icon-box-wraper left text-primary m-b30">
							<span class="icon-md">
								<i class="flaticon-worker"></i>
							</span>
							<div class="icon-content">
								<h2 class="counter m-b5 m-t0">210</h2>
								<h4 class="m-b0">Senior Engineers</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!--   SECTION END -->

<!-- SERVICES SECTION START -->
<div class="section-full small-device p-b80">
	<div class="section-content">
		<div class="services-half-section-top  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-map.png)">
			<div class="container">
				<!-- TITLE START -->
				<div class="section-head text-center text-white">
					<h5 class="text-primary text-uppercase wt-title-small">Our Services</h5>
					<h2 class="m-b5 center">We Provide professional Services</h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
				</div>
				<!-- TITLE END -->
			</div>
		</div>
		<div class="container">
			<div class="owl-carousel services_home owl-btn-bottom-center services-half-section-bottom">
				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Tires and Wheels</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Technical Repairs</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Electrical Works</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Tires and Wheels</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Technical Repairs</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>

				<div class="item">

					<div class="wt-box">
						<div class="wt-media">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt=""></a>
						</div>
						<div class="wt-info p-a30 bg-gray">
							<h4 class="wt-title m-t0"><a href="javascript:void(0);">Electrical Works</a></h4>
							<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
							<a href="javascript:void(0);" class="site-button  site-btn-effect">Read More</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SERVICES  SECTION END -->

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

<!-- OUR BLOG START -->
<div class="section-full  p-t80 p-b40 bg-gray">
	<div class="container">

		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Blogs</h5>
			<h2 class="m-b5 left">Our Latest News</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->

		<!-- IMAGE CAROUSEL START -->
		<div class="section-content">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">

							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic3.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">The Number of electric vehicles in the UK has doubled</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">

							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic4.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Do you service and repair all makes and models of vehicles</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/latest-blog/pic3.jpg" alt=""></a>
						</div>
						<div class="wt-post-info">

							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary">Ford News</li>
									<li class="post-author"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="" class="post-author-pic"> Post by <strong class="text-primary">Thomas deo</strong></li>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Why does my car need maintenance if it's running fine</h4>
							</div>
							<div class="wt-post-text">
								<p>Duis aute irure reprehender voluptate velits fugiat nulla pariatur exce doloe amet conse cteur adipisicing elit.</p>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<!-- OUR BLOG END -->

<!-- TESTIMONIAL AND TEAM SECTION START -->
<div class="section-full small-device">
	<div class="bg-secondry ">
		<div class="clearfix half-section-outer">

			<div class="col-md-6 col-sm-6 half-section-outer-left">
				<div class="half-section-left ">
					<!-- TITLE START -->
					<div class="section-head text-left text-white">
						<h5 class="text-primary text-uppercase wt-title-small">Our Client Says</h5>
						<h2 class="m-b5 left">People What Say</h2>
					</div>
					<!-- TITLE END -->

					<div class="owl-carousel testimonial-home-2 owl-dots-bottom-right">
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-pic-block">
									<div class="testimonial-pic">
										<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
									</div>
								</div>
								<div class="testimonial-text clearfix text-white">
									<div class="testimonial-detail clearfix">
										<strong class="testimonial-name text-primary">Jhon Parker</strong>
										<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
									</div>
									<div class="testimonial-paragraph">
										<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-pic-block">
									<div class="testimonial-pic">
										<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
									</div>
								</div>
								<div class="testimonial-text clearfix text-white">
									<div class="testimonial-detail clearfix">
										<strong class="testimonial-name text-primary">Jhon Parker</strong>
										<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
									</div>
									<div class="testimonial-paragraph">
										<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-pic-block">
									<div class="testimonial-pic">
										<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic3.jpg" alt="">
									</div>
								</div>
								<div class="testimonial-text clearfix text-white">
									<div class="testimonial-detail clearfix">
										<strong class="testimonial-name text-primary">Jhon Parker</strong>
										<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
									</div>
									<div class="testimonial-paragraph">
										<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-6">
								<div class="testimonial-pic-block">
									<div class="testimonial-pic">
										<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic4.jpg" alt="">
									</div>
								</div>
								<div class="testimonial-text clearfix text-white">
									<div class="testimonial-detail clearfix">
										<strong class="testimonial-name text-primary">Jhon Parker</strong>
										<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
									</div>
									<div class="testimonial-paragraph">
										<p><span class="fa fa-quote-left"></span>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 half-section-outer-right bg-cover overlay-wraper" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/offer.jpg);">
				<div class="overlay-main opacity-09 bg-primary"></div>
				<div class="half-section-right">
					<!-- TITLE START -->
					<div class="section-head text-left text-white">
						<h5 class="text-primary text-uppercase wt-title-small">Out Best Team</h5>
						<h2 class="m-b5 left">Our Team</h2>
					</div>
					<!-- TITLE END -->

					<div class="owl-carousel team-home-2 owl-btn-bottom-left owl-btn-light">

						<div class="item">
							<div class="wt-team-six">
								<div class="wt-team-media wt-thum-bx wt-img-overlay1">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic1.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon">
											<div class="wt-team-info text-center p-lr10 p-tb20">
												<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Richard Wagner</a></h4>
												<p class="m-b15">Technician</p>
												<div class="team-social-center">
													<ul class="team-social-icon">
														<li>
															<a href="javascript:void(0);" class="fa fa-facebook"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-twitter"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-instagram"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="wt-team-six">
								<div class="wt-team-media wt-thum-bx wt-img-overlay1">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic2.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon">
											<div class="wt-team-info text-center p-lr10 p-tb20">
												<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">James Strasser</a></h4>
												<p class="m-b15">Technician</p>
												<div class="team-social-center">
													<ul class="team-social-icon">
														<li>
															<a href="javascript:void(0);" class="fa fa-facebook"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-twitter"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-instagram"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="wt-team-six">
								<div class="wt-team-media wt-thum-bx wt-img-overlay1">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic3.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon">
											<div class="wt-team-info text-center p-lr10 p-tb20">
												<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Simpson Martin</a></h4>
												<p class="m-b15">Technician</p>
												<div class="team-social-center">
													<ul class="team-social-icon">
														<li>
															<a href="javascript:void(0);" class="fa fa-facebook"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-twitter"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-instagram"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="wt-team-six">
								<div class="wt-team-media wt-thum-bx wt-img-overlay1">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic4.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon">
											<div class="wt-team-info text-center p-lr10 p-tb20">
												<h4 class="wt-team-title text-uppercase m-b15 "><a href="javascript:void(0);">Tom Albert</a></h4>
												<p class="m-b15">Technician</p>
												<div class="team-social-center">
													<ul class="team-social-icon">
														<li>
															<a href="javascript:void(0);" class="fa fa-facebook"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-twitter"></a>
														</li>
														<li>
															<a href="javascript:void(0);" class="fa fa-instagram"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- TESTIMONIAL AND TEAM  SECTION END -->

<!-- CLIENT LOGO SECTION START -->
<div class="section-full p-t80 p-b50 bg-gray">
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Recently finished</h5>
			<h2 class="m-b5 left">Our Clients</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<div class="section-content">
			<!-- TESTIMONIAL 4 START ON BACKGROUND -->
			<div class="section-content">
				<div class="section-content p-tb10 owl-btn-vertical-center">
					<div class="owl-carousel home-client-carousel-2">

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w1.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w2.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w3.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w4.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w5.png" alt=""></a>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo client-logo-media">
									<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/client-logo/w6.png" alt=""></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- CLIENT LOGO  SECTION End -->

<!-- FAQ's  SECTION START -->
<div class="section-full small-device  p-t80 p-b80 bg-gray">
	<div class="section-content">
		<div class="row half-acc-section">
			<div class="col-md-6 half-acc-section-left clearfix">
				<div class="half-acc-section-left-content">
					<div class="car-mach-section">
						<div class="car-mach-content text-white">
							<strong class="car-mach-first">We Provide</strong>
							<strong class="car-mach-two">Trusted</strong>
							<strong class="car-mach-three">Services</strong>
							<strong class="car-mach-four">For You</strong>
						</div>
						<div class="car-mach-pic">
							<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/new.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 half-acc-section-right">

				<div class="half-acc-section-right-content">
					<h5 class="text-primary text-uppercase wt-title-small">What We Do</h5>
					<h2 class="m-t0">Satisfaction Guaranteed or Your Dent Back.</h2>
					<div class="wt-accordion" id="accordion5">
						<div class="panel wt-panel">
							<div class="acod-head acc-actives">
								<h4 class="acod-title bg-white">
										<a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
											<span class="indicator"><i class="fa"></i></span>
										   When Should i Replace My Fuel Filter?
										</a>
									 </h4>
							</div>
							<div id="collapseOne5" class="acod-body collapse ">
								<div class="acod-content p-a15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believabl</div>
							</div>
						</div>
						<div class="panel wt-panel">
							<div class="acod-head">
								<h4 class="acod-title bg-white">
										<a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
										<span class="indicator"><i class="fa"></i></span>
									   Must i get Air Conditioning Serviced? 
										</a>
									 </h4>
							</div>
							<div id="collapseTwo5" class="acod-body collapse">
								<div class="acod-content p-a15">Graphic design lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took.</div>
							</div>
						</div>
						<div class="panel wt-panel">
							<div class="acod-head">
								<h4 class="acod-title bg-white">
									<a data-toggle="collapse"  href="#collapseThree5" class="collapsed"  data-parent="#accordion5">
									<span class="indicator"><i class="fa"></i></span>
									How Long it Take To Repair My Vehicle?
									</a>
								 </h4>
							</div>
							<div id="collapseThree5" class="acod-body collapse in">
								<div class="acod-content p-a15">Developement lorem Ipsum is simply dummy text of the printing and type has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- FAQ's  SECTION END -->