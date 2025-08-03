<?php
/**
 * @var $this yii\web\View
 * @var $name string
 * @var $message string
 * @var $exception Exception
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2018 OMMU (www.ommu.id)
 * @created date 3 January 2018, 16:02 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>

<?php //begin.revolution slider
echo \themes\carservx\components\HomeRevolutionSlider::widget([
	'layout' => 'one',
	'content' => [
		[
			'title' => $exception->statusCode.'<br/>'.nl2br(Html::encode($exception->getName())),
			'intro' => nl2br(Html::encode($message)),
			'image' => 'images/error-bg.jpg',
			'url' => [
				'/report/site/add',
				'url' => Yii::$app->request->absoluteUrl, 
				'message' => $name.' '.nl2br(Html::encode($message)),
			],
		],
	],
]); ?>