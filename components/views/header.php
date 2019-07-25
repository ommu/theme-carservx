<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
$context = $this->context;
?>

<header class="site-header header-style-1 nav-wide">
	<div class="sticky-header main-bar-wraper">
		<div class="main-bar bg-white p-t10">
			<div class="container">
				<div class="logo-header">
					<div class="logo-header-inner logo-header-one">
						<a href="<?php echo $isDemoTheme ? Url::to(['/carservx-site/index']) : Url::to(['/site/index']);?>" title="<?php echo Yii::$app->name;?>">
							<?php echo $context->logo; ?>
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
					<?php echo \themes\carservx\components\Menu::widget([
						'options' => ['class'=>'nav navbar-nav'],
						'itemOptions' => [],
						'linkTemplate' => '<a href="{url}" title="{label}">{label}</a>',
						'submenuTemplate' => '<ul class="sub-menu">{items}</ul>',
						'items' => $this->context->menus,
					]); ?>
				</div>
			</div>
		</div>
	</div>
</header>