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
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-1.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);
else if($this->subLayout == 'skin2')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-2.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);
else if($this->subLayout == 'skin3')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-3.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);
else if($this->subLayout == 'skin4')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-4.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);
else if($this->subLayout == 'skin5')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-5.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);
else if($this->subLayout == 'skin6')
	$this->registerCssFile($themeAsset->baseUrl . '/css/skin/skin-65.css', ['depends' => [ThemeAsset::className()], 'class'=>'skin']);

$this->beginPage();?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="<?php echo $dir;?>">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo Html::csrfMetaTags() ?>
	<title><?php echo Html::encode($this->pageTitle) ?></title>
	<?php $this->head();
	$baseUrl = Yii::getAlias('@web');
$js = <<<JS
	const baseUrl = '{$baseUrl}';
	const themeAssetUrl = '{$themeAsset->baseUrl}';
	const version = '1';
if ('serviceWorker' in navigator) {
	window.addEventListener('load', function() {
		navigator.serviceWorker.register(baseUrl + '/service-worker.js?v='+version+'&bu='+baseUrl+'&tu='+themeAssetUrl);
	});
}
JS;
$this->registerJs($js, $this::POS_HEAD); ?>
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

	<?php //begin.footer
	echo \themes\carservx\components\Footer::widget(); ?>
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
