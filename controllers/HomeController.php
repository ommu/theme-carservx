<?php
/**
 * HomeController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *	Index2
 *	Index3
 *	Index4
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 22 July 2019, 10:21 WIB
 * @link https://bitbucket.org/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class HomeController extends Controller
{
	public static $backoffice = false;

	/**
	 * {@inheritdoc}
	 */
	public function init() 
	{
		parent::init();

		$this->view->theme('carservx');
		$this->layout = 'default';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getViewPath()
	{
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'home';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'Home 1');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_1');
	}

	/**
	 * Index2 Action
	 */
	public function actionIndex2()
	{
		$this->view->title = Yii::t('app', 'Home 2');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_2');
	}

	/**
	 * Index3 Action
	 */
	public function actionIndex3()
	{
		$this->view->title = Yii::t('app', 'Home 3');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_3');
	}

	/**
	 * Index4 Action
	 */
	public function actionIndex4()
	{
		$this->view->title = Yii::t('app', 'Home 4');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_4');
	}
}
