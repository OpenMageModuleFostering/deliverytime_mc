<?php

class Magecheckout_DeliveryTime_Model_Mysql4_Deliverytime extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('deliverytime/deliverytime', 'deliverytime_id');
    }
}