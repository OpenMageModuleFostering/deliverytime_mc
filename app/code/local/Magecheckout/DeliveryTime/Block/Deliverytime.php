<?php

class Magecheckout_DeliveryTime_Block_Deliverytime extends Mage_Core_Block_Template
{
	public function getJsDateFormat()
	{
		$format = Mage::helper('deliverytime')->getDateFormat();
		if ($format === 'Y-m-d') {
			return 'yy-mm-dd';
		} elseif ($format === 'd-m-Y') {
			return 'dd-mm-yy';
		}

		return 'yy-mm-dd';
	}

	public function getShortJsDateFormat()
	{
		$format = Mage::helper('deliverytime')->getDateFormat();
		if ($format === 'Y-m-d') {
			return 'mm-dd';
		} elseif ($format === 'd-m-Y') {
			return 'dd-mm';
		}

		return 'mm-dd';
	}

	public function getWeekDays()
	{
		return Mage::helper('deliverytime')->getWeekDays();
	}

	public function getJsSpecifyDays()
	{
		$day     = Mage::helper('deliverytime')->getSpecifyDays();
		$array   = array_map('trim', explode(',', $day));
		$jsArray = json_encode($array);

		return $jsArray;
	}

	public function getRange()
	{
		return Mage::helper('deliverytime')->getRange();
	}

	public function getRangeByKey($key)
	{
		$range = Mage::helper('deliverytime')->getRange();
		if ($range)
			return $range[$key];

		return null;
	}

	public function getSessionData()
	{
		if (Mage::getSingleton('core/session')->getData('delivery_time_current_data'))
			return Mage::getSingleton('core/session')->getData('delivery_time_current_data');

		return null;
	}

	public function getRouteName()
	{
		$routeName = Mage::app()->getRequest()->getRouteName();

		return $routeName;
	}
}