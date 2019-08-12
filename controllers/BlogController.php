<?php
/**
 * BlogController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Grid
 *	Listing
 *	Masonry
 *	Detail
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 30 July 2019, 05:02 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class BlogController extends Controller
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
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'blog';
	}

	/**
	 * Grid Action
	 */
	public function actionGrid()
	{
		$this->view->title = Yii::t('app', 'Blog Grid');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('grid');
	}

	/**
	 * Listing Action
	 */
	public function actionListing()
	{
		$this->view->title = Yii::t('app', 'Blog Listing');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('listing');
	}

	/**
	 * Masonry Action
	 */
	public function actionMasonry()
	{
		$this->view->title = Yii::t('app', 'Blog Masonry');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('masonry');
	}

	/**
	 * Detail Action
	 */
	public function actionDetail()
	{
		$this->view->sidebarShow = true;
		$this->view->title = Yii::t('app', 'Blog Detail');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('detail');
	}
}
