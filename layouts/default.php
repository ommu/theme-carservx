<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
$dir = Yii::$app->request->get('dir') ? Yii::$app->request->get('dir') : 'ltr';
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

$this->beginPage();?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="<?php echo $dir;?>">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo Html::csrfMetaTags() ?>
	<title><?php echo Html::encode($this->pageTitle) ?></title>
	<?php $this->head(); ?>
	<script type="text/javascript">
		var themeAssetUrl = '<?php echo $themeAsset->baseUrl ?>';
	</script>
</head>

<body>
<?php $this->beginBody();?>

<div class="page-wraper">
	<?php //begin.header ?>
	<header class="site-header header-style-1  nav-wide">
		<div class="sticky-header main-bar-wraper">
			<div class="main-bar bg-white p-t10">
				<div class="container">
					<div class="logo-header">
						<div class="logo-header-inner logo-header-one">
							<a href="index.html">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/logo-dark.png" alt="" />
							</a>
						</div>
					</div>
					<!-- NAV Toggle Button -->
					<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- ETRA Nav -->
					<div class="extra-nav header-2-nav">
						<div class="extra-cell">
							<div class="search-wrap">
								<form>
									<div class="search-input-outer">
										<input type="text" placeholder="Search...">
									</div>
									<button type="button" class="site-search-btn"><i class="fa fa-search text-white m-l10"></i></button>
								</form>
							</div>
						</div>
					</div>
					<!-- ETRA Nav -->
					<div class="extra-nav header-2-nav">
						<div class="extra-cell">
							<div class="social-wrap">
								<div class="full-social-bg">
									<ul>
										<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
										<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
								<button type="button" class="site-share-btn"><i class="fa fa-share-alt text-white m-l10"></i></button>
							</div>
						</div>
					</div>
					<!-- MAIN Vav -->
					<div class="header-nav nav-animation navbar-collapse collapse">

						<ul class=" nav navbar-nav">
							<li class="active">
								<a href="javascript:;">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Home-1</a></li>
									<li><a href="index-2.html">Home-2</a></li>
									<li><a href="index-3.html">Home-3</a></li>
									<li><a href="index-4.html">Home-4</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Portfolio</a>
								<ul class="sub-menu">
									<li><a href="portfolio-1.html">Portfolio 1</a></li>
									<li><a href="portfolio-2.html">Portfolio 2</a></li>
									<li><a href="portfolio-3.html">Portfolio 3</a></li>
									<li><a href="project-detail.html">Project Detail</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Pages</a>
								<ul class="sub-menu">
									<li><a href="about-1.html">About us</a></li>
									<li><a href="our-team.html">Team</a></li>
									<li><a href="faq-1.html">Faq</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Srvices</a>
								<ul class="sub-menu">
									<li><a href="services-all.html">All Services</a></li>
									<li><a href="engine_diagnostics.html">Engine Diagnostics</a></li>
									<li><a href="lube_oil_and_filter.html">Lube Oil and Filters</a></li>
									<li><a href="belt_and_hoses.html">Belt and Hoses</a></li>
									<li><a href="air_conditioning.html">Air Conditioning</a></li>
									<li><a href="brake_repair.html">Brake repair</a></li>
									<li><a href="tire-and-wheel-services.html">Tire and wheel Services</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-listing.html">Blog Listing</a></li>
									<li><a href="blog-masonry.html">Blog Masonry</a></li>
									<li><a href="blog-right-sidebar.html">Blog Single</a></li>
								</ul>
							</li>
							<li><a href="contact-1.html">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php //end.header ?>

	<?php //begin.content ?>
	<div class="page-content">
		<?php echo $content;?>
	</div>
	<?php //end.content ?>

	<?php //begin.footer ?>
	<footer class="site-footer footer-large footer-wide text-white bg-cover" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/background/bg-3.jpg)">
		<!-- FOOTER BLOCKES START -->
		<div class="footer-top overlay-wraper ">
			<div class="overlay-main bg-secondry opacity-09"></div>
			<div class="container">
				<div class="row">
					<!-- ABOUT COMPANY -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="widget widget_address_outer m-b20">
							<h4 class="widget-title">Get In Touch</h4>
							<ul class="widget_address">
								<li><i class="fa fa-map-marker text-primary"></i>92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom</li>
								<li><i class="fa fa-envelope text-primary"></i>carservxdemo@gmail.com</li>
								<li><i class="fa fa-phone text-primary"></i>(+0091) 912-3456-073</li>
							</ul>
						</div>
					</div>

					<!-- TAGS -->
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

					<!-- USEFUL LINKS -->
					<div class="col-lg-5 col-md-5 col-sm-4">
						<div class="widget news-letter-footer">
							<h4 class="widget-title">Signup to Newsletter</h4>
							<p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
							<div class="newsletter-f-right text-center">
								<form role="search" method="post">
									<div class="input-group">
										<input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
										<span class="input-group-btn">
											<button type="submit" class="site-button site-btn-effect"><span>Submit</span></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- NEWSLETTER -->
				</div>
				<div class="m-b10">
					<div class="wt-divider"></div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="wt-footer-bot-left">
							<span class="copyrights-text">© 2019 Your Company. All Rights Reserved. Designed By <span class="text-primary"> thewebmax.</span></span>
						</div>
						<div class="wt-footer-bot-right">
							<ul class="copyrights-social pull-right">
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
		<!-- FOOTER COPYRIGHT -->

		<!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
	</footer>
	<?php //end.footer ?>
</div>

<?php //begin.loading ?>
<div class="loading-area">
	<div class="loading-box"></div>
	<div class="loading-pic">
		<div class="cssload-container">
			<ul class="cssload-flex-container">
				<li>
				<span class="cssload-loading"></span>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php //begin.modal ?>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				loading...
			</div>
		</div>
	</div>
</div>

<?php if($isDemoTheme) {?>
<?php }?>
<div class="styleswitcher">
	<div class="switcher-btn-bx">
		<a class="switch-btn">
			<span class="fa fa-cog fa-spin"></span>
		</a>
	</div>
	
	<div class="styleswitcher-inner">
		<h6 class="switcher-title">Color Skin</h6>
		<ul class="color-skins">
			<li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="default Theme"></a></li>
			<li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="pink Theme"></a></li>
			<li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="sky Theme"></a></li>
			<li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="green Theme"></a></li>
			<li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="red Theme"></a></li>
			<li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li>
		</ul>
	</div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
