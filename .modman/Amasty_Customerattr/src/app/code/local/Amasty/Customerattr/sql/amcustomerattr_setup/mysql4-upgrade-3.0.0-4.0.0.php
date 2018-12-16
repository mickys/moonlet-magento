<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2016 Amasty (https://www.amasty.com)
 * @package Amasty_Customerattr
 */
$installer = $this;

$installer->startSetup();

$installer->run(
    "
    ALTER TABLE `{$this->getTable('customer/eav_attribute')}` ADD `used_in_order_grid` TINYINT( 1 ) UNSIGNED NOT NULL ;
"
);

$installer->endSetup(); 