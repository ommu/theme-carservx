<?php 
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemePluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<?php $this->beginContent('@themes/carservx/layouts/main.php'); ?>

<div class="row">
	<div class="col-md-8 col-sm-12">
		<?php echo $content; ?>
	</div>

	<div class="col-md-4 col-sm-12">
		<aside class="side-bar">
			<?php //begin.search ?>
			<?php if($isDemoTheme) {?>
			<div class="widget bg-white ">
				<h4 class="widget-title">Search</h4>
				<div class="search-bx">
					<form role="search" method="post">
						<div class="input-group">
							<input name="news-letter" type="text" class="form-control" placeholder="Write your text">
							<span class="input-group-btn">
								<button type="submit" class="site-button site-btn-effect"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<?php }?>

			<?php //begin.categories
			echo \themes\carservx\components\SidebarArticleCategory::widget(); ?>

			<?php //begin.recent post ?>
			<div class="widget bg-white  recent-posts-entry">
				<h4 class="widget-title">Recent Posts</h4>
				<div class="section-content">
					<div class="widget-post-bx">
						<div class="widget-post clearfix">
							<div class="wt-post-media">
								<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic1.jpg" alt=""></a>
							</div>
							<div class="wt-post-info">
								<div class="wt-post-header">
									<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h6 class="post-title">Is it time for a wheel alignment ?</h6></a>
								</div>
								<div class="wt-post-meta">
									<ul>
										<li class="post-author">25 March</li>
										<li class="post-comment"> 20 Comment</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="widget-post clearfix">
							<div class="wt-post-media">
								<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic2.jpg" alt=""></a>
							</div>
							<div class="wt-post-info">
								<div class="wt-post-header">
									<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h6 class="post-title"> Your car’s fluids should be checked</h6></a>
								</div>
								<div class="wt-post-meta">
									<ul>
										<li class="post-author">28 March</li>
										<li class="post-comment"> 15 Comment</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="widget-post clearfix">
							<div class="wt-post-media">
								<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><img src="<?php echo $themeAsset->baseUrl ?>/demo/images/blog/recent-blog/pic3.jpg" alt=""></a>
							</div>
							<div class="wt-post-info">
								<div class="wt-post-header">
									<a href="<?php echo Url::to(['/carservx-blog/detail']);?>"><h6 class="post-title"> Get a diagnostic test for your car</h6></a>
								</div>
								<div class="wt-post-meta">
									<ul>
										<li class="post-author">30 March</li>
										<li class="post-comment"> 11 Comment</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php //begin.tag ?>
			<?php if($isDemoTheme) {?>
			<div class="widget bg-white  widget_tag_cloud">
				<h4 class="widget-title">Tags</h4>
				<div class="tagcloud">
					<a href="javascript:void(0);">Trouble </a>
					<a href="javascript:void(0);">Programmers</a>
					<a href="javascript:void(0);">Never</a>
					<a href="javascript:void(0);">Tell</a>
					<a href="javascript:void(0);">Doing</a>
					<a href="javascript:void(0);">Person</a>
					<a href="javascript:void(0);">Inventors Tag</a>
					<a href="javascript:void(0);">Between </a>
					<a href="javascript:void(0);">Abilities</a>
					<a href="javascript:void(0);">Fault </a>
					<a href="javascript:void(0);">Gets </a>
					<a href="javascript:void(0);">Macho</a>
				</div>
			</div>
			<?php }?>
		</aside>
	</div>
</div>

<?php $this->endContent(); ?>