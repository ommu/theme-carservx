<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$context = $this->context;
?>

<footer class="site-footer footer-large footer-wide text-white <?php echo $context->withBackground ? 'bg-cover' : 'footer-dark';?>" <?php echo $context->withBackground ? 'style="background-image:url('.$themeAsset->baseUrl.'/demo/images/background/bg-3.jpg)"' : '';?>>
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
			</div>
			<div class="m-b10">
				<div class="wt-divider"></div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="wt-footer-bot-left">
						<span class="copyrights-text">&copy; <?php echo date("Y");?> <?php echo $context->siteName;?>. All Rights Reserved. 
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

	<button class="scroltop"><span class="fa fa-angle-up relative" id="btn-vibrate"></span></button>
</footer>