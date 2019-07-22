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

				<!-- LAYER NR. 3 [ Black Box ] -->
				<div class="tp-caption   tp-resizeme" id="slide-901-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['22','22','22','22']" data-lineheight="['22','22','22','22']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				color:#fff;
				font-family: 'Fjalla One', sans-serif;
				letter-spacing:5px;">
					<div class="text-uppercase slider_title bdr-primary">Your Vehicle is</div>
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-901-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['310','310','310','310']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['600','600','85%','85%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Save in our Hands</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for paragraph] -->
				<div class="tp-caption  tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['410','410','380','380']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['600','600','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</span>
				</div>

				<!-- LAYER NR. 6 [ for see all service botton ] -->
				<div class="tp-caption tp-resizeme" id="slide-901-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['520','520','500','480']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
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

				<!-- LAYER NR. 3 [ Black Box ] -->
				<div class="tp-caption   tp-resizeme" id="slide-902-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['22','22','22','22']" data-lineheight="['22','22','22','22']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				color:#fff;
				font-family: 'Fjalla One', sans-serif;
				letter-spacing:5px;">
					<div class="text-uppercase slider_title bdr-primary">Your Vehicle is</div>
				</div>

				<!-- LAYER NR. 4 [ for title ] -->
				<div class="tp-caption   tp-resizeme" id="slide-902-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['310','310','310','310']" data-fontsize="['72','72','38','28']" data-lineheight="['86','86','48','38']" data-width="['600','600','85%','85%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				white-space: normal; 
				font-weight: 400;
				color:#fff;
				border-width:0px;">
					<div style="font-family: 'Fjalla One', sans-serif;">
						<span class="text-white text-uppercase">Save in our Hands</span>
					</div>

				</div>

				<!-- LAYER NR. 5 [ for paragraph] -->
				<div class="tp-caption  tp-resizeme" id="slide-902-layer-5" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['410','410','380','380']" data-fontsize="['18','18','18','14']" data-lineheight="['30','30','30','22']" data-width="['600','600','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; 
				color:#fff;
				border-width:0px;">
					<span style="font-family: 'Poppins', sans-serif;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</span>
				</div>

				<!-- LAYER NR. 6 [ for see all service botton ] -->
				<div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['left','left','left','left']" data-hoffset="['50','50','30','30']" data-y="['top','top','top','top']" data-voffset="['520','520','500','480']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
				{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
				{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
				]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
					<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
				</div>
			</li>

		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<!-- SLIDER END -->

<!-- ABOUT COMPANY -->
<div class="section-full bg-gray">

	<div class="container">

		<!-- IMAGE CAROUSEL START -->
		<div class="section-content clearfix">
			<div class="top-half-section">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media  hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic1.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-car"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Oil</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Change</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media  hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic2.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-brake-disc"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Break</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Repair</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media  hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic3.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-motor"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Engine</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Repair</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="wt-box m-b30">
							<div class="wt-media  hover-box-style-1">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/portrait-half/pic4.jpg" alt="">
								<div class="hover-box-content">
									<div class="wt-icon-box-wraper p-a20 center bg-primary">
										<div class="icon-lg text-primary m-b15">
											<span class="icon-cell text-white"><i class="flaticon-wheel"></i></span>
										</div>
										<div class="icon-content">
											<h4 class="wt-tilte text-uppercase m-b10">Wheel</h4>
											<h3 class="wt-tilte text-uppercase m-b20">Change</h3>
											<p class="text-white">Caeservx is nisi aliquip ex con velit esse cillum dolore fugiatal excepteur sint occaecat.</p>
											<a href="javascript:void(0);" class="site-button-link text-white"><span>Read More</span></a>
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
<!-- ABOUT COMPANY END -->

<!-- WELCOME SECTION START -->
<div class="section-full small-device p-b50 bg-gray">
	<div class="section-content">
		<div class="container">
			<!-- TITLE START -->
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">About Company</h5>
				<h2 class="m-b5 left">We're a company of talented engineers <br> & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<!-- TITLE END -->
			<div class="row">
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">01</span>
							<div class="icon-xl inline-icon m-b25 text-primary">
								<span class="icon-cell"><i class="flaticon-certificate"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">International Standards</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">02</span>
							<div class="icon-xl inline-icon m-b25 text-primary">
								<span class="icon-cell"><i class="flaticon-employee"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">We love our client</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-4">

					<div class="wt-icon-box-wraper m-b50">
						<div class="relative icon-count-2 bg-white p-a30">
							<span class="icon-count-number">03</span>
							<div class="icon-xl inline-icon m-b25  text-primary">
								<span class="icon-cell"><i class="flaticon-car-parts"></i></span>
							</div>
							<div class="icon-content">
								<h4 class="wt-tilte m-b25">Only original parts</h4>
								<p>There are many variations of passag es of Lorem Ipsum available, but the majority have suffered.</p>
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

<!-- LATEST PRJECTS SLIDER START -->
<div class="section-full small-device best_services_tab_outer overlay-wraper bg-no-repeat bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-1.jpg);">
	<div class="overlay-main bg-secondry opacity-09"></div>
	<div class="container">
		<div class="wt-tabs tabs-default best_services_tab p-t80 p-b50">
			<div class="row">
				<div class="col-md-6 m-b30">
					<!-- TITLE START -->
					<div class="section-head">
						<h5 class="text-primary text-uppercase wt-title-small">Our Services</h5>
						<h2 class="m-b5 left">We Provide best Services</h2>
					</div>
					<!-- TITLE END -->
					<ul class="nav nav-tabs">

						<li class="active">
							<a data-toggle="tab" href="#service_tab_1">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-plunger"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Oil</h4>
										<h4 class="wt-tilte m-b20">Change</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_2">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-brake-disc"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Break</h4>
										<h4 class="wt-tilte m-b20">Repair</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_3">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-wheel"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Wheels</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_4">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-automobile"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">General</h4>
										<h4 class="wt-tilte m-b20">Service</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_5">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-battery"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Batteries</h4>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#service_tab_6">
								<div class="wt-icon-box-wraper p-a20 center bg-white">
									<div class="icon-md m-b15">
										<span class="icon-cell"><i class="flaticon-spray"></i></span>
									</div>
									<div class="icon-content">
										<h4 class="wt-tilte m-b10">Car</h4>
										<h4 class="wt-tilte m-b20">Painting</h4>
									</div>
								</div>
							</a>
						</li>

					</ul>
				</div>
				<div class="col-md-6 m-b30">
					<div class="tab-content">
						<div id="service_tab_1" class="tab-pane active">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic1.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Inspection</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_2" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic10.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Break Repair</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_3" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic6.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Wheels</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_4" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic8.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">General Service</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_5" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic4.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Batteries</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
						<div id="service_tab_6" class="tab-pane">
							<div class="wt-box">
								<div class="wt-thum-bx wt-img-effect zoom">
									<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/gallery/pic11.jpg" alt="">
								</div>
								<div class="wt-info text-white">
									<h4 class="wt-title m-t20 text-white">Car Painting</h4>
									<p>It is a long established fatct that a reader will be distracted by the readable contentof a page or randomised words</p>
									<a href="javascript:void(0);" class="site-button site-btn-effect">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- LATEST PRJECTS SLIDER END -->

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
	<div class="container-fluid bg-cover overlay-wraper" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-5.jpg);">
		<div class="overlay-main bg-secondry opacity-07"></div>
		<div class="row talk-section2-outer p-t80">
			<div class="col-md-4 talk-section-left2">
				<div class="wt-media">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/car-left.png" alt="">
				</div>
			</div>
			<div class="col-md-4 talk-section-mid2">
				<div class="want-to-talk  text-center">
					<h2 class="m-b5 text-white">Want to talk?</h2>
					<h2 class="text-primary talk-sepr-white">Call:(123) 556 4321</h2>
					<p class="text-white">Need a special repair service? we are happy to fulfil every request in order to exceed your expectations</p>
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

<!-- WHY CHOOSE SECTION START -->
<div class="section-full  p-t80 p-b80 overlay-wraper bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-2.jpg)">
	<div class="overlay-main bg-gray opacity-09"></div>
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Why Choose us</h5>
			<h2 class="m-b5 center">Why Choose Us?</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<div class="section-content">
			<div class="wt-tabs tabs-default why-choose-tab">
				<ul class="nav nav-tabs nav-justified ">
					<li class="active">
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-service"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">We Provided</h4>
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
									<h4 class="wt-tilte  m-b0">Who We Are</h4>
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
									<h4 class="wt-tilte m-b0">Our History</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#web-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-hand"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">Save Money</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#graphic-design-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-worker"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte  m-b0">Best Services</h4>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#developement-7">
							<div class="wt-icon-box-wraper center">
								<div class="icon-md text-primary m-b5">
									<span class="icon-cell text-primary"><i class="flaticon-shopping-cart"></i></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte m-b0">Our Store</h4>
								</div>
							</div>
						</a>
					</li>
				</ul>
				<div class="tab-content">

					<div id="web-design-7" class="tab-pane active">
						<div class="why-choose-tab-content">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Long Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
										<h4 class="wt-tilte">Term Warranties And Competitive Prices we repair anything from hardware.</h4>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
										<ul class="list-angle-right  m-b0">
											<li>Our Technicians are highly qualified</li>
											<li>We supply the after market</li>
											<li>We only use new parts</li>
											<li>We can not be beaten on price</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="wt-box m-b30">
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

<!-- OUR BLOG START -->
<div class="section-full small-device p-t80 p-b40 bg-white">
	<div class="container">
		<!-- TITLE START -->
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Latest Blog</h5>
			<h2 class="m-b5 center">Our Latest News</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<!-- TITLE END -->
		<!-- IMAGE CAROUSEL START -->
		<div class="section-content">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="blog-post latest-blog-2 date-style-1 block-shadow">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic1.jpg" alt=""></a>
						</div>
						<div class="wt-post-info  bg-white">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-date">March 9, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">The Number of electric vehicles in the UK has doubled</h4>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="text-primary site-button-link">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="blog-post latest-blog-2 date-style-1 block-shadow">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic2.jpg" alt=""></a>
						</div>
						<div class="wt-post-info  bg-white">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-date">March 20, 2019</li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title">Solar Cells For Electric Charge Appeared on sale</h4>
							</div>
							<div class="wt-post-readmore">
								<a href="Javascript:;" class="text-primary site-button-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- OUR BLOG END -->

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