<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\BaseSetting;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

$siteName = unserialize(Yii::$app->setting->get(join('_', [Yii::$app->id, 'name'])));
if($siteName['long'])
	Yii::$app->name = $siteName['long'];

if($isDemoTheme) {
	if($this->subLayout == 'default' || $this->subLayout == 'skin1')
		$logo = 'logo-dark.png';
	else if($this->subLayout == 'skin2')
		$logo = 'logo-2.png';
	else if($this->subLayout == 'skin3')
		$logo = 'logo-3.png';
	else if($this->subLayout == 'skin4')
		$logo = 'logo-4.png';
	else if($this->subLayout == 'skin5')
		$logo = 'logo-5.png';
	else if($this->subLayout == 'skin6')
		$logo = 'logo-6.png';
} else
	$logo = Yii::$app->setting->get(join('_', [Yii::$app->id, 'logo']));
?>

<header class="site-header header-style-1 nav-wide">
	<div class="sticky-header main-bar-wraper">
		<div class="main-bar bg-white p-t10">
			<div class="container">
				<div class="logo-header">
					<div class="logo-header-inner logo-header-one">
						<?php $logoPath = join('/', [BaseSetting::getUploadPath(false, Yii::$app->id)]);
						$logoFullPath = Url::to(join('/', ['@webpublic', $logoPath, $logo]));
						if($isDemoTheme)
							$logoFullPath = join('/', [$themeAsset->baseUrl, 'demo/images', $logo]); ?>
						<a href="<?php echo $isDemoTheme ? Url::to(['/carservx-site/index']) : Url::to(['/site/index']);?>" title="<?php echo Yii::$app->name;?>">
							<?php echo $isDemoTheme || (!$isDemoTheme && $logo) ? Html::img($logoFullPath, ['alt'=>Yii::$app->name]) : Yii::$app->name; ?>
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