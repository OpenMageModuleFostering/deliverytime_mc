<?php
class Magecheckout_DeliveryTime_Model_Mysql4_Deliverytime_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('deliverytime/deliverytime');
    }
}