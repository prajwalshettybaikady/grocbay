ALTER TABLE `advertisement` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `data`;
ALTER TABLE `brands` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `parent_id`;
ALTER TABLE `customer` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `area`;
ALTER TABLE `customer_order` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `transactionId`;
ALTER TABLE `location` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `longitude`;
ALTER TABLE `membership` ADD `branch` VARCHAR(100) NOT NULL DEFAULT '999' AFTER `discounted_price`;
