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
			<li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide1.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 3 [ Black Box ] -->
				<div class="tp-caption   tp-resizeme" id="slide-901-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['170','170','270','270']" data-fontsize="['22','22','30','50']" data-lineheight="['22','22','30','50']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				color:#fff;
				font-family: 'Fjalla One', sans-serif;
				letter-spacing:5px;">
					<div class="text-uppercase slider_title bdr-primary">Your Vehicle is</div>
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-901-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['230','230','350','380']" data-fontsize="['72','72','60','72']" data-lineheight="['86','86','66','66']" data-width="['600','600','600','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Save in our Hands</span>
					</div>

				</div>

				<!-- LAYER NR. 7 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-901-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' style="z-index: 4;">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide1-1.png" alt="" width="534" height="437" data-no-retina>
				</div>

				<!-- LAYER NR. 8 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-901-layer-6" data-x="['center','center','center','center']" data-hoffset="['20','20','20','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="['100%','100%','100%','100%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="image" data-responsive_offset="on" data-frames='[ 
				{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 3;">

					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide1-2.png" alt="">
				</div>

			</li>

			<!-- SLIDE 2 -->
			<li data-index="rs-902" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide2.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide2.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-902-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 3 [ Black Box ] -->
				<div class="tp-caption   tp-resizeme" id="slide-902-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['170','170','270','270']" data-fontsize="['22','22','30','50']" data-lineheight="['22','22','30','50']" data-width="['700','700','600','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				color:#fff;
				font-family: 'Fjalla One', sans-serif;
				letter-spacing:5px;">
					<div class="text-uppercase slider_title bdr-primary">All vehicle problem</div>
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-902-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['230','230','350','380']" data-fontsize="['72','72','60','72']" data-lineheight="['86','86','66','66']" data-width="['600','600','600','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">We can solve</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-902-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-100','-100','0','0']" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' style="z-index: 13;">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide2-1.png" alt="">
				</div>

				<!-- LAYER NR. 8 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-frames='[ 
				{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' style="z-index: 12;">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide2-2.png" alt="">
				</div>

			</li>

			<!-- SLIDE 3 -->
			<li data-index="rs-903" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide3.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide3.jpg" alt="" data-lazyload="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<!-- LAYER NR. 1 [ for overlay ] -->
				<div class="tp-caption tp-shape tp-shapewrapper " id="slide-903-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
				{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
				</div>

				<!-- LAYER NR. 3 [ Black Box ] -->
				<div class="tp-caption   tp-resizeme" id="slide-903-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['170','170','270','270']" data-fontsize="['22','22','30','50']" data-lineheight="['22','22','30','50']" data-width="['700','700','600','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				color:#fff;
				font-family: 'Fjalla One', sans-serif;
				letter-spacing:5px;">
					<div class="text-uppercase slider_title bdr-primary">Believe Our</div>
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-903-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['230','230','350','380']" data-fontsize="['72','72','60','72']" data-lineheight="['86','86','66','66']" data-width="['600','600','600','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase"> Trusted services</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-903-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','-100','0','0']" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' style="z-index: 13;">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide3-1.png" alt="">
				</div>

				<!-- LAYER NR. 8 [ for  pic ] -->
				<div class="tp-caption tp-resizeme" id="slide-903-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-frames='[ 
				{"from":"x:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' style="z-index: 12;">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/main-slider/slider3/slide3-2.png" alt="">
				</div>

			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<!-- SLIDER END -->

<!-- ABOUT COMPANY -->
<div class="section-full small-device bg-white">
	<!-- IMAGE CAROUSEL START -->
	<div class="section-content clearfix">
		<div class="container-fluid">
			<div class="row no-col-gap">
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-car"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Oil Change</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Brake Repair</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-motor"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Engine Repair</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="wt-icon-box-wraper p-tb30 p-lr10 left bg-white hover-box-style-2 bounce-right-animation">
						<div class="icon-xld text-primary">
							<span class="icon-cell"><i class="flaticon-wheel"></i></span>
						</div>
						<div class="icon-content text-black">
							<h3 class="wt-tilte text-uppercase m-b10">Wheel Change</h3>
							<p>There are many variations of passages of Lorem Ipsum available.</p>
							<a href="javascript:void(0);" class="site-button-link text-primary"><span>Read More</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ABOUT COMPANY END -->

<!-- WHY CHOOSE SECTION START -->
<div class="section-full small-device  p-t80 p-b80 bg-gray">
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Why Choose</h5>
			<h2 class="m-b5 center">Why Choose Us?</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<div class="section-content">
			<div class="wt-tabs vertical border tabs-default why-choose-tab bg-white p-a20">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-service"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0">We offer</h5>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#graphic-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-secure-shield"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte  m-b0">Who We Are</h5>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#developement-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-wrench"></i></span>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte m-b0">Our History</h5>
								</div>
							</div>
						</a>
					</li>
				</ul>
				<div class="tab-content">

					<div id="web-design-7" class="tab-pane active">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte wt-tilte m-t0">Long Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>There are many variations</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="graphic-design-7" class="tab-pane">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte m-t0">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>There are many variations</li>
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic1.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="developement-7" class="tab-pane">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte wt-tilte m-t0">Long Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>

										</ul>
									</div>
								</div>
								<div class="col-md-7 col-sm-12">
									<div class="wt-box">
										<div class="wt-media">
											<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic2.jpg" alt="">
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
<!-- WHY CHOOSE SECTION END -->

<!-- OUR SERVICES START -->
<div class="section-full bg-change-section overlay-wraper" data-toggle="tab-hover">
	<div class="overlay-main bg-black opacity-06"></div>
	<div class="bg-changer">
		<div class=" section-bg active" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-1.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-2.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-3.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-4.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-5.jpg)"></div>
		<div class="section-bg" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/bg-changes/bg-6.jpg)"></div>
	</div>
	<div class="bg-change-content container-fluid">
		<div class="row">

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-plunger"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Oil Change</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">01</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Break Repair</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">02</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-wheel"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Wheels</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">03</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper  center  text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-automobile"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">General Service</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">04</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-battery"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Batteries</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">05</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xs-100pc bgcall-block">
				<div class="bg-content-mid-outer">
					<div class="bg-content-mid">
						<div class="wt-icon-box-wraper  center   text-white">
							<div class="icon-lg m-b15">
								<span class="icon-cell"><i class="flaticon-spray"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b10">Car Painting</h4>
								<a href="Javascript:;" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
						<span class="bgcall-block-number">06</span>
						<div class="bg-overlay"></div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
<!-- OUR SERVICES END -->

<!-- COUNTER START -->
<div class="section-full">
	<div class="container">
		<div class="row  p-t80 p-b50">

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
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

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
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

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
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

			<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
				<div class="wt-icon-box-wraper left text-primary m-b30">
					<span class="icon-md">
						<i class="flaticon-radiator"></i>
					</span>
					<div class="icon-content">
						<h2 class="counter m-b5 m-t0">125</h2>
						<h4 class="m-b0">Radiators Repaired</h4>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- COUNTER TO TALK END -->

<!-- WANT TO TALK START -->
<div class="section-full">
	<div class="container">

		<div class="video-section-dark overlay-wraper">
			<div class="overlay-main bg-black opacity-05"></div>
			<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/video-pic.png" alt="">
			<a href="https://www.youtube.com/watch?v=qfRw6x5dWdE" class="mfp-video play-now">
				<i class="icon fa fa-play"></i>
				<span class="ripple"></span>
			</a>
		</div>

	</div>
	<div class="container-fluid bg-cover overlay-wraper bg-bottom-center bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
		<div class="overlay-main bg-white opacity-09"></div>
		<div class="row talk-section2-outer p-t80">
			<div class="col-md-4 talk-section-left2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-left.png" alt="">
				</div>
			</div>
			<div class="col-md-4 talk-section-mid2">
				<div class="want-to-talk  text-center">
					<h2 class="m-b5">Want to talk?</h2>
					<h2 class="text-primary talk-sepr-white">Call:(123) 556 4321</h2>
					<p>Need a special repair service? we are happy to fulfil every request in order to exceed your expectations</p>
					<div class="button-lr-line">
						<a href="#" class="site-button site-btn-effect">Book An Appointment</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 talk-section-right2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-right.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- WANT TO TALK END -->

<!-- TESTIMONIALS SECTION START -->
<div class="section-full  p-t80 p-b80 bg-gray">
	<div class="container">
		<div class="section-content">

			<!-- TITLE START -->
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Client Says</h5>
				<h2 class="m-b5 left">What Our Clients Say</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<!-- TITLE END -->

			<!-- TESTIMONIAL 4 START ON BACKGROUND -->
			<div class="section-content">
				<div class="owl-carousel testimonial-home">
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Jhon Parker</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Willimes Dom</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic1.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Jhon Parker</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5 bg-white bdr-1 bdr-solid bdr-white">
							<div class="testimonial-pic-block">
								<div class="testimonial-pic">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/testimony/pic2.jpg" alt="">
								</div>
							</div>
							<div class="testimonial-text clearfix ">
								<div class="testimonial-detail clearfix">
									<strong class="testimonial-name text-secondry">Willimes Dom</strong>
									<span class="testimonial-position p-t15">Loyal Customer For 2 Years</span>
								</div>
								<div class="testimonial-paragraph">
									<span class="fa fa-quote-left"></span>
									<p>There are many variations of passages of lorem Ipsum available,but the majority have suffered.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- TESTIMONIALS SECTION END -->

<!-- OUR TEAM START -->
<div class="section-full">

	<div class="team-half-top   p-t80  bg-secondry bg-no-repeat bg-cover bg-center" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-map.png)">
		<div class="container">
			<!-- TITLE START -->
			<div class="section-head text-white text-center">
				<h5 class="text-primary text-uppercase wt-title-small">Expert Member</h5>
				<h2 class="m-b5 left">Our Team</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<!-- TITLE END -->
		</div>
	</div>

	<div class="team-half-bottom">
		<div class="container">
			<!-- IMAGE CAROUSEL START -->
			<div class="row">

				<!-- COLUMNS 1 -->
				<div class="col-md-3 col-sm-6  col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media  img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Richard Wagner</a></h4>
							<p class="m-b0">Technician</p>
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
				<!-- COLUMNS 2 -->
				<div class="col-md-3 col-sm-6  col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media  img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Simpson Martin</a></h4>
							<p class="m-b0">Technician</p>
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
				<!-- COLUMNS 3 -->
				<div class="col-md-3 col-sm-6  col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media  img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic3.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Carley Rensberger</a></h4>
							<p class="m-b0">Technician</p>
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
				<!-- COLUMNS 4 -->
				<div class="col-md-3 col-sm-6  col-xs-6 col-xs-100pc">
					<div class="wt-team-one">
						<div class="wt-team-media  img-reflection">
							<a href="javascript:void(0);"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/our-team/pic4.jpg" alt=""></a>
						</div>
						<div class="wt-team-info text-center p-tb30">
							<h4 class="wt-team-title m-t0 text-secondry"><a href="javascript:void(0);">Tom Albert</a></h4>
							<p class="m-b0">Technician</p>
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
<!-- OUR TEAM END -->

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

<!-- OFFER SECTION START -->
<div class="section-full">
	<div class="bg-secondry ">
		<div class="clearfix offer-outer-full">
			<div class="col-md-6 col-sm-6 offer-outer-full-left">
				<div class="offer-block-left text-white">
					<span>Our Latest Specials</span>
					<h2>Any Services of @300 or More</h2>
					<p>We value our client, that's why we want to give you this special discount in order for you to use it to make your car more safe and feel confident when on the road!</p>
					<a href="#" class="site-button-link white">Read More</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 offer-outer-full-right bg-cover overlay-wraper" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/offer.jpg);">
				<div class="overlay-main opacity-09 bg-primary"></div>
				<div class="offer-block-right">
					<span>Coupons From</span>
					<div class="offer-block-price"><span>35%</span><strong>Off Repairs</strong></div>
					<i class="flaticon-cut"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- OFFER SECTION  END -->

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