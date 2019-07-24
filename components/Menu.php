<?php
/**
 * Menu
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use rmrevin\yii\fontawesome\component\Icon;

class Menu extends \yii\widgets\Menu
{
	/**
	 * {@inheritdoc}
	 */
	public $isNavigation = true;

	/**
	 * {@inheritdoc}
	 */
	public $itemOptions = ['class'=>'sidebar-menu-item'];

	/**
	 * {@inheritdoc}
	 */
	public $linkTemplate = '<a class="sidebar-menu-button" href="{url}">{icon}{label}{badge}</a>';

	/**
	 * {@inheritdoc}
	 */
	public $labelTemplate = '{label}';

	/**
	 * {@inheritdoc}
	 */
	public $submenuTemplate = '<ul class="sidebar-submenu collapse">{items}</ul>';

	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		parent::init();
		if(empty($this->options))
			$this->options = ['class'=>'sidebar-menu'];
	}

	/**
	 * {@inheritdoc}
	 */
	protected function renderItem($item, $first=true)
	{
		$renderedItem = '';
		if (isset($item['url'])) {
			$template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

			if($item['url'][0] == 'current')
				unset($item['url'][0]);
			$url = Html::encode(Url::to($item['url']));
			// Jika key url isinya '#' maka replace href menjadi html id nama-label.
			if( (!is_array($item['url']) && substr($item['url'], -1) == '#') || 
				(is_array($item['url']) && ($item['url'][0] == '/#' || $item['url'][0] == '#')) ) {
				$url = 'javascript:void(0);';
			}

			$renderedItem = strtr($template, [
				'{url}' => $url,
				'{label}' => $item['label'],
			]);

		} else {
			$template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

			$renderedItem = strtr($template, [
				'{label}' => $item['label'],
			]);
		}

		if (isset($item['badge'])) {
			$badgeOptions = ArrayHelper::getValue($item, 'badgeOptions', []);
			Html::addCssClass($badgeOptions, 'label pull-right');
		} else {
			$badgeOptions = null;
		}
		$icons = explode('#', $item['icon']);

		return strtr(
			$renderedItem,
			[
				'{icon}' => isset($item['icon']) && $item['icon']
					? (preg_match("/^(materialdesign)+/", $item['icon']) 
						? Html::tag('span',$icons[1], ['class'=>'sidebar-menu-icon sidebar-menu-icon--left material-icons'])
						: new Icon(substr($item['icon'], 3), ArrayHelper::getValue($item, 'iconOptions', ['class'=>'sidebar-menu-icon sidebar-menu-icon--left'])))
					: '',
				'{badge}' => (
					isset($item['badge'])
						? Html::tag('small', $item['badge'], $badgeOptions)
						: ''
					) . (
					isset($item['items']) && count($item['items']) > 0
						? Html::tag('span', '', ['class'=>'ml-auto sidebar-menu-toggle-icon'])
						: ''
					),
			]
		);
	}
}