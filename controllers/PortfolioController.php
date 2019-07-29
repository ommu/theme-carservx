<?php
/**
 * PortfolioController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *	Index2
 *	Index3
 *	Detail
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 30 July 2019, 01:17 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class PortfolioController extends Controller
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
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'portfolio';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'Portfolio 1');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_1');
	}

	/**
	 * Index2 Action
	 */
	public function actionIndex2()
	{
		$this->layout = 'front_default';
		$this->view->title = Yii::t('app', 'Portfolio 2');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_2');
	}

	/**
	 * Index3 Action
	 */
	public function actionIndex3()
	{
		$this->view->title = Yii::t('app', 'Portfolio 3');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index_3');
	}

	/**
	 * Detail Action
	 */
	public function actionDetail()
	{
		$this->view->title = Yii::t('app', 'Portfolio Detail');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('detail');
	}
}
