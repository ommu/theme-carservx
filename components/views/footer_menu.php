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

<div class="col-lg-3 col-md-3 col-sm-4">
	<div class="widget widget_services inline-links">
		<h4 class="widget-title">links</h4>
		<ul>
			<?php foreach ($context->menus as $key => $val) {
				$url = !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : (is_array($val['url']) ? Url::to($val['url']) : Url::to([$val['url']]));?>
			<li><a href="<?php echo $url;?>" title="<?php echo $val['title'];?>"><?php echo $val['title'];?></a></li>
			<?php }?>
		</ul>
	</div>
</div>