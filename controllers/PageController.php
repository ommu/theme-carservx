<?php
/**
 * PageController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *	About
 *	Team
 *	Faq
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 29 July 2019, 19:35 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class PageController extends Controller
{
	public static $backoffice = false;

	/**
	 * {@inheritdoc}
	 */
	public function init() 
	{
		parent::init();

		$this->view->theme('carservx');
		$this->layout = 'main';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getViewPath()
	{
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'page';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		return $this->redirect(['about']);
	}

	/**
	 * About Action
	 */
	public function actionAbout()
	{
		$this->view->title = Yii::t('app', 'About Us');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('about');
	}

	/**
	 * Team Action
	 */
	public function actionTeam()
	{
		$this->view->title = Yii::t('app', 'Our Team');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('team');
	}

	/**
	 * Faq Action
	 */
	public function actionFaq()
	{
		$this->view->title = Yii::t('app', 'Faq');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('faq');
	}
}
