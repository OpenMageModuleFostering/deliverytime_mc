<?php

/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * create deliverytime table
 */
$installer->run("

  DROP TABLE IF EXISTS {$installer->getTable('magecheckout_deliverytime')};
  CREATE TABLE {$installer->getTable('magecheckout_deliverytime')} (
  `deliverytime_id` int(11) unsigned NOT NULL auto_increment,
  `delivery_date` varchar(255) NOT NULL default '',
  `time_start` varchar(255) NOT NULL default '',
  `time_end` varchar(255) NOT NULL default '',
  `order_id` smallint(6) NOT NULL default '0',
  PRIMARY KEY (`deliverytime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();

