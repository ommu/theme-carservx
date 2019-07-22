<?php
/**
 * HomeController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Dashboard
 *	Staff
 *	Analytic
 *	DigitalProduct
 *	EditAccount
 *	Invoice
 *	Login
 *	Pricing
 *	Profile
 *	Signup
 *	Story
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 22 July 2019, 10:21 WIB
 * @link https://github.com/ommu/theme-carservx
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
	 * Dashboard Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'Home 1');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_1');
	}

	/**
	 * Staff Action
	 */
	public function actionIndex2()
	{
		$this->view->title = Yii::t('app', 'Home 2');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_2');
	}

	/**
	 * Analytic Action
	 */
	public function actionIndex3()
	{
		$this->view->title = Yii::t('app', 'Home 3');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_3');
	}

	/**
	 * DigitalProduct Action
	 */
	public function actionIndex4()
	{
		$this->view->title = Yii::t('app', 'Home 4');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_4');
	}
}
