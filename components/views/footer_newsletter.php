<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

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