<?php 
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php $this->beginContent('@themes/carservx/layouts/front_default.php'); ?>

<div class="section-full p-t80 p-b50">
	<div class="container">
		<?php echo $content; ?>
	</div>
</div>

<?php $this->endContent(); ?>