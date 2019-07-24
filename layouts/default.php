<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\carservx\assets\ThemePluginAsset;
use themes\carservx\assets\ThemeAsset;

$themeAsset = ThemePluginAsset::register($this);
$dir = Yii::$app->request->get('dir') ? Yii::$app->request->get('dir') : 'ltr';
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

if($this->subLayout == 'default' || $this->subLayout == 'skin1')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-1.css', ['depends' => [ThemeAsset::className()]]);
else if($this->subLayout == 'skin2')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-2.css', ['depends' => [ThemeAsset::className()]]);
else if($this->subLayout == 'skin3')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-3.css', ['depends' => [ThemeAsset::className()]]);
else if($this->subLayout == 'skin4')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-4.css', ['depends' => [ThemeAsset::className()]]);
else if($this->subLayout == 'skin5')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-5.css', ['depends' => [ThemeAsset::className()]]);
else if($this->subLayout == 'skin6')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-65.css', ['depends' => [ThemeAsset::className()]]);

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
	<?php //begin.header
	echo \themes\carservx\components\Header::widget(); ?>

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
					<?php //begin.footer address
					echo \themes\carservx\components\FooterAddress::widget(); ?>

					<?php //begin.footer menu
					echo \themes\carservx\components\FooterMenu::widget(); ?>

					<?php //begin.footer newsletter
					echo \themes\carservx\components\FooterNewsletter::widget(); ?>

				<!-- NEWSLETTER -->
				</div>
				<div class="m-b10">
					<div class="wt-divider"></div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="wt-footer-bot-left">
							<span class="copyrights-text">© 2019 Your Company. All Rights Reserved. 
							<?php if($isDemoTheme) {?>Designed By <span class="text-primary"> thewebmax.</span><?php }?>
							</span>
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
		<button class="scroltop"><span class="fa fa-angle-up relative" id="btn-vibrate"></span></button>
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
<div class="styleswitcher">
	<div class="switcher-btn-bx">
		<a class="switch-btn">
			<span class="fa fa-cog fa-spin"></span>
		</a>
	</div>
	
	<div class="styleswitcher-inner">
		<h6 class="switcher-title">Color Skin</h6>
		<ul class="color-skins">
			<li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="Default Theme (Red)"></a></li>
			<li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="Yellow Theme"></a></li>
			<li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="Sky Themee"></a></li>
			<li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="Orange Theme"></a></li>
			<li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="Green Theme"></a></li>
			<li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li>
		</ul>
	</div>
</div>
<?php }?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
