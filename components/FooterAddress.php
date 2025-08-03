<?php
/**
 * FooterAddress
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2019 OMMU (www.ommu.id)
 * @created date 24 July 2019, 08:00 WIB
 * @link https://github.com/ommu/theme-carservx
 * 
 */

namespace themes\carservx\components;

use Yii;
use ommu\core\models\CoreZoneCity;
use ommu\core\models\CoreZoneProvince;
use ommu\core\models\CoreZoneCountry;

class FooterAddress extends \yii\base\Widget
{
	public $address;
	public $email;
	public $phone;

	public function init()
	{
		if(!$this->address)
			$this->address = '92 Princess Road, parkvenue,Greater London, NW18JR, United Kingdom';

		if(!$this->email)
			$this->email = 'carservxdemo@gmail.com';

		if(!$this->phone)
			$this->phone = '(+0091) 912-3456-073';
	}

	public function getAdressStatus($address): bool
	{
		if($address['place'] || $address['village'] || $address['city'] || $address['province'] || $address['country'] || $address['zipcode'])
			return true;

		return false;
	}

	public function getAdressMeta($address)
	{
		if($address['city'])
			$address['city'] = CoreZoneCity::getInfo($address['city'], 'city_name');
		if($address['province'])
			$address['province'] = CoreZoneProvince::getInfo($address['province'], 'province_name');
		if($address['country'])
			$address['country'] = CoreZoneCountry::getInfo($address['country'], 'country_name');

		return join(', ', $address);
	}

	public function run() 
	{
		$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

		if(!$isDemoTheme) {
			$office_address = unserialize(Yii::$app->meta->get(join('_', [Yii::$app->id, 'office_address'])));
			$office_contact = unserialize(Yii::$app->meta->get(join('_', [Yii::$app->id, 'office_contact'])));

			$this->address = $this->getAdressStatus($office_address) ? $this->getAdressMeta($office_address) : '';
			$this->email = $office_contact['email'] ? Yii::$app->formatter->asEmail($office_contact['email']) : '';
			$this->phone = $office_contact['phone'] ? $office_contact['phone'] : '';
		}

		return $this->render('footer_address', [
			'isDemoTheme' => $isDemoTheme,
		]);
	}
}