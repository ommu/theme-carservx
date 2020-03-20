<?php
/**
 * ServiceController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *	Page
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 31 July 2019, 06:25 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class ServiceController extends Controller
{
	public static $backoffice = false;

	/**
	 * {@inheritdoc}
	 */
	public function init() 
	{
		parent::init();

		$this->view->theme('carservx');
		$this->layout = 'front_default';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getViewPath()
	{
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'service';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'All Services');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index');
	}

	/**
	 * Index Action
	 */
	public function actionPage()
	{
		$this->layout = 'service';
		$this->view->title = Yii::t('app', 'Pages');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('page');
	}
}
