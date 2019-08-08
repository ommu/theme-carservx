<?php
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\carservx\assets\ThemeAsset::register($this);
\themes\carservx\assets\CounterupPluginAsset::register($this);
$context = $this->context;
?>

<div class="section-full two-part-bg">
	<div class="section-content">
		<div class="container">
			<div class="mid-counter">
				<div class="row">
					<?php 
					$i = 0;
					foreach ($context->portfolios as $key => $val) {
						$i++;
						if($i <= 3) {?>
					<div class="col-md-4 col-sm-4">
						<div class="wt-icon-box-wraper left text-primary m-b30">
							<span class="icon-md">
								<i class="flaticon-<?php echo $val['icon'];?>"></i>
							</span>
							<div class="icon-content">
								<h2 class="counter m-b5 m-t0"><?php echo $val['counter'];?></h2>
								<h4 class="m-b0"><?php echo $val['category'];?></h4>
							</div>
						</div>
					</div>
					<?php }
					}?>
				</div>
			</div>
		</div>
	</div>
</div>
