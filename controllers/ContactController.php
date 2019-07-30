<?php
/**
 * ContactController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 31 July 2019, 06:25 WIB
 * @link https://github.com/ommu/theme-carservx
 *
 */

namespace themes\carservx\controllers;

use Yii;
use app\components\Controller;

class ContactController extends Controller
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
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'contact';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'Contact Us');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index');
	}
}
