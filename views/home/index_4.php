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
<div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="beforeafterslider1" data-source="gallery" style="background:#252525;padding:0px;">
	<!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
	<div id="rev_slider_346_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
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
				<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="media/video/vid-1.mp4" data-videopreload="auto" data-videoloop="loop" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false">
				</div>

				<!-- LAYER 2 button -->
				<div class="tp-caption rev-btn  tp-resizeme" id="rrzb_904-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button site-btn-effect">Read More</a></div>

				<!-- LAYER 5 title-->
				<div class="tp-caption   tp-resizeme slider-tag-line2 text-white" id="rrzb_904-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
					{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust our services </div>

				<!-- LAYER 6  tag line-->
				<div class="tp-caption   tp-resizeme" id="rrzb_904-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['60','45','60','40']" data-lineheight="['70','60','70','50']" data-width="['700','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
					{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: normal;font-weight: 700; color: #ffffff; font-family: 'Fjalla One', sans-serif;">Let Your Problem Be Our Problem</div>

			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<!-- SLIDER END -->

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

<!-- WELCOME SECTION START -->
<div class="section-full p-b50 p-t80">
	<div class="section-content">
		<div class="container">
			<!-- TITLE START -->
			<div class="section-head text-center">
				<h5 class="text-primary text-uppercase wt-title-small">About us</h5>
				<h2 class="m-b5 center">We're a company of talented engineers & mechanics</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			</div>
			<!-- TITLE END -->
		</div>
		<div class="container-fluid">
			<div class="row no-col-gap">
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper  m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic1.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">01</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-certificate"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">International Standards</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-6">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper  m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic2.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">02</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-employee"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">We love our client</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
								<a href="#" class="site-button site-btn-effect" data-hover="Read More">Read More</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 col-sm-12">

					<div class="wt-icon-box-wraper p-a30 text-white bg-no-repeat bg-cover overlay-wraper  m-b30 bg-dark-section-hover v-icon-effect" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/info/pic3.jpg);">
						<div class="overlay-main bg-black opacity-07"></div>
						<div class="relative icon-count-1">
							<span class="icon-count-number">03</span>
							<div class="icon-xl inline-icon m-b25">
								<span class="icon-cell"><i class="v-icon flaticon-car-parts"></i></span>
							</div>
							<div class="icon-content text-black">
								<h4 class="wt-tilte m-b25">Only original parts</h4>
								<p>It is a long established fact that a reader will be distracted by the readable contentof a page.</p>
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