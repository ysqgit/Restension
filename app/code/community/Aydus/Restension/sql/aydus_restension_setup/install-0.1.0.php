<?php

/**
 * Install Restention tables
 *
 * @category   Aydus
 * @package    Aydus_Restension
 * @author     Aydus Consulting <davidt@aydus.com>
 */

$installer = $this;
$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS {$this->getTable('aydus_restension_shippingmethods')};
CREATE TABLE {$this->getTable('aydus_restension_shippingmethods')} (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(255) NOT NULL,
  `json` text NOT NULL default '',
  `date_created` datetime,
  PRIMARY KEY (`id`),
  UNIQUE KEY(`hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();