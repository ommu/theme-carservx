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

<div class="section-full <?php echo $context->paddingTop ? 'p-t80' : '';?> <?php echo $context->paddingBottom ? 'p-b40' : '';?> <?php echo $context->bgClass;?>">
	<div class="container">
		<?php //begin.title ?>
		<div class="section-head text-center">
			<h5 class="text-primary text-uppercase wt-title-small">Blogs</h5>
			<h2 class="m-b5 left">Our Latest News</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<?php //end.title ?>
		<?php //begin.content ?>
		<div class="section-content">
			<div class="row">
				<?php 
				$count = count($context->content);
				$i = 0;
				foreach ($context->content as $key => $val) {
					$i++;
				if($context->isPotraitLayout) {?>
				<div class="col-md-4 <?php echo $i == $count ? 'col-sm-12' : 'col-sm-6';?>">
					<div class="blog-post latest-blog-1 date-style-1">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo join('/', [$themeAsset->baseUrl, $val['image']]) ?>" alt="<?php echo $val['title'];?>"></a>
						</div>
						<div class="wt-post-info">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-category bg-primary"><?php echo $val['category'];?></li>
									<li class="post-author"><img src="<?php echo join('/', [$themeAsset->baseUrl, $val['creationPhoto']]) ?>" alt="" class="post-author-pic"> Post by <strong class="text-primary"><?php echo $val['creationName'];?></strong></li>
									<li class="post-date"><?php echo $val['creationDate'];?></li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title"><?php echo $val['title'];?></h4>
							</div>
							<div class="wt-post-text">
								<p><?php echo $val['intro'];?></p>
							</div>
							<div class="wt-post-readmore">
								<a href="<?php echo !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : Url::to([$val['url']]);?>" title="<?php echo $val['title'];?>" class="site-button-link text-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<?php } else {
					if($i <= 2) {?>
				<div class="col-md-6 col-sm-12">
					<div class="blog-post latest-blog-2 date-style-1 block-shadow">
						<div class="wt-post-media wt-img-effect zoom-slow">
							<a href="javascript:;"><img src="<?php echo join('/', [$themeAsset->baseUrl, ($isDemoTheme ? str_replace('latest-blog', 'recent-blog', $val['image']) : $val['image'])]) ?>" alt="<?php echo $val['title'];?>"></a>
						</div>
						<div class="wt-post-info bg-white">
							<div class="wt-post-meta ">
								<ul>
									<li class="post-date"><?php echo $val['creationDate'];?></li>
								</ul>
							</div>
							<div class="wt-post-title ">
								<h4 class="post-title"><?php echo $val['title'];?></h4>
							</div>
							<div class="wt-post-readmore">
								<a href="<?php echo !$val['url'] || ($val['url'] && $val['url'] == '#') ? 'javascript:void();' : Url::to([$val['url']]);?>" title="<?php echo $val['title'];?>" class="text-primary site-button-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<?php }
					}
				}?>
			</div>
		</div>
		<?php //end.content ?>
	</div>
</div>