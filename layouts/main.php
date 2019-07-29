<?php 
/**
 * @var string $content
 * @var $this app\components\View
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php $this->beginContent('@themes/carservx/layouts/default.php'); ?>

<?php //begin.breadcrumb and title
echo \themes\carservx\components\BreadcrumbAndTitle::widget(); ?>

<?php echo $content; ?>

<?php $this->endContent(); ?>