<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemePreviewPluginAsset;

$themeAsset = ThemePreviewPluginAsset::register($this);

$this->beginPage();?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="ltr">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo Html::csrfMetaTags() ?>
	<title><?php echo Html::encode($this->pageTitle) ?></title>
	<?php $this->head(); ?>
	<script type="text/javascript">
		var themeAssetUrl = '<?php echo $themeAsset->baseUrl; ?>';
	</script>
</head>

<body id="bg">
<?php $this->beginBody();?>

<div class="page-wraper">
	<?php //begin.content ?>
	<div class="page-content">

		<?php //begin.inner page banner ?>
		<div class="wt-bnr-inr overlay-wraper bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/banner/top-banner.jpg);">
			<div class="overlay-main bg-black opacity-08"></div>
			<div class="container">
				<div class="wt-bnr-inr-entry">
					<div class="banner-title-outer text-center">
						<div class="banner-title-name">
							<h2 class="text-white text-uppercase letter-spacing-5 font-22">Car Service and Car Repair</h2>
							<div class="text-center preview-intro p-tb10 text-white ">
								<h1>
									<span>Carservx is</span>
									<span class="typewrite text-white font-weight-300" data-period="2000" data-type='[ "Clean and Professional Template. " , "Fully Features theme.", "using HTML5 and CSS3." ," a Fully Responsive (Desktop, tablet, mobile)."]'></span>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php //end.inner page banner ?>

		<?php echo $content; ?>

		<?php //begin.all feature ?>
		<div class="section-full p-tb80 overlay-wraper bg-cover bg-no-repeat" style="background-image:url(<?php echo $themeAsset->baseUrl ?>/demo/images/banner/bg-2.jpg)">
			<div class="overlay-main bg-white opacity-08"></div>
			<div class="container">
				<div class="section-head text-center">
					<h1 class="text-uppercase">Ultimate features</h1>
				</div>
				<div class="row equal-wraper">

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/parallax.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Parallax Effects</h5>
								<p>You can create awesome pages with smooth parallax effects.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/clean-design.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Clean & Modern Design  </h5>
								<p>Templates is available with our package & in nice design.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/background.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Custom Backgrounds</h5>
								<p>You can change the background accordingly.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/responsive.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Responsive & retina ready </h5>
								<p>Adjust to fit the size of screen, whether its mobile, tablet or desktop.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/blog.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Blog layout options  </h5>
								<p>Modern and unique blog layouts including classic and masonary.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/css3.png" alt="">
							</div>
							<div class="icon-content bg-white equal-col">
								<h5 class="wt-tilte text-uppercase text-black">Css3 Effects</h5>
								<p>CSS3 awesome effects using in our packeges.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/HTML5.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Html5 included</h5>
								<p>Our design has been made according to HTML5.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/bootstrap.png" alt="">
							</div>
							<div class="icon-content ">
								<h5 class="wt-tilte text-uppercase text-black">Bootstrap</h5>
								<p>The project and framework should always be referred to as Bootstrap.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
						<div class="wt-icon-box-wraper bx-style-1 p-a20 center  equal-col bg-white">
							<div class="icon-md m-b15">
								<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/features/revolution.png" alt="">
							</div>
							<div class="icon-content bg-white">
								<h5 class="wt-tilte text-uppercase text-black">Revolution slider included</h5>
								<p>Touch sensitive, responsive, with tons of transition & parallax effects.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php //end.all feature ?>

		<?php //begin.footer ?>
		<div class="preview-footer bg-black-light">
			<div class="container p-t60 text-center ">
				<div class="wt-box text-white">
					<img src="<?php echo $themeAsset->baseUrl ?>/demo/images/logo.png">
					<div class="p-tb30">© 2019 Your Company. All Rights Reserved. Designed By Thewebmax</div>
				</div>
			</div>
		</div>
		<?php //end.footer ?>
	</div>

	<?php //begin.scrol up ?>
	<button class="scroltop"><i class=" fa fa-arrow-up"></i></button>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
