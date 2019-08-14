<?php

class Magecheckout_DeliveryTime_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * index action
	 */
	public function saveDataAction()
	{
		if ($this->getRequest()->isPost()) {
			$date  = $this->getRequest()->getParam('date');
			$range = $this->getRequest()->getParam('range');
			$data  = array(
				'date'  => $date,
				'range' => $range,
			);
			Mage::getSingleton('core/session')->setData('delivery_time_current_data', $data);
		}

	}
}