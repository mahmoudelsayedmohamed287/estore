-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema estore
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema estore
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `estore` DEFAULT CHARACTER SET utf8 ;
USE `estore` ;

-- -----------------------------------------------------
-- Table `estore`.`setting`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`setting` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logo` VARCHAR(45) NULL,
  `tittle` VARCHAR(45) NULL,
  `abouts` TEXT NULL,
  `newsletter_email` VARCHAR(45) NULL,
  `insta_logins` VARCHAR(45) NULL,
  `footer` VARCHAR(45) NULL,
  `facebook` VARCHAR(45) NULL,
  `twitter` VARCHAR(45) NULL,
  `instagram` VARCHAR(45) NULL,
  `youtube` VARCHAR(45) NULL,
  `currency` DECIMAL NULL,
  `email_address` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `favicon` VARCHAR(45) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `link` VARCHAR(45) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`menu_children`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`menu_children` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `parent_id` INT NULL ,
  `title` VARCHAR(45) NULL,
  `link` VARCHAR(45) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  `menu_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menu_children_menu_idx` (`menu_id` ASC),
  CONSTRAINT `fk_menu_children_menu`
    FOREIGN KEY (`menu_id`)
    REFERENCES `estore`.`menu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`jumbtron`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`jumbtron` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`features`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`features` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `icon` VARCHAR(45) NULL,
  `notes` TEXT ,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`blog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`blog` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `by` INT NULL,
  `timestamp-1` TIMESTAMP NULL,
  `views` INT NULL,
  `title` VARCHAR(45) NULL,
  `main_image` VARCHAR(45) NULL,
  `content` TEXT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `timestamp` TIMESTAMP NULL,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `review` INT NULL,
  `rating` FLOAT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`deals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`deals` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`latest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`latest` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`stock`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`stock` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `quantity` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `price_before` DECIMAL NULL,
  `price_after` DECIMAL NULL,
  `category_id` INT NULL,
  `description` TEXT NULL,
  `specs` VARCHAR(45) NULL,
  `brand_id` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  `jumbtron_id` INT NOT NULL,
  `latest_id` INT NOT NULL,
  `deals_id` INT NOT NULL,
  `stock_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_jumbtron1_idx` (`jumbtron_id` ASC),
  INDEX `fk_products_latest1_idx` (`latest_id` ASC),
  INDEX `fk_products_deals1_idx` (`deals_id` ASC) ,
  INDEX `fk_products_stock1_idx` (`stock_id` ASC) ,
  CONSTRAINT `fk_products_jumbtron1`
    FOREIGN KEY (`jumbtron_id`)
    REFERENCES `estore`.`jumbtron` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_latest1`
    FOREIGN KEY (`latest_id`)
    REFERENCES `estore`.`latest` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_deals1`
    FOREIGN KEY (`deals_id`)
    REFERENCES `estore`.`deals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_stock1`
    FOREIGN KEY (`stock_id`)
    REFERENCES `estore`.`stock` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`APIs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`APIs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `desc` TEXT NULL,
  `key_1` VARCHAR(100) NULL,
  `key_2` VARCHAR(100) NULL,
  `key_3` VARCHAR(100) NULL,
  `key_4` VARCHAR(100) NULL,
  `key_5` VARCHAR(100) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`blog_comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`blog_comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `by_name` VARCHAR(45) NULL,
  `by_email` VARCHAR(45) NULL,
  `subject` VARCHAR(45) NULL,
  `timestamp` TIMESTAMP NULL,
  `comment` TEXT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `timestamp` TIMESTAMP NULL,
  `shipping` VARCHAR(45) NULL,
  `cust_id` INT NULL,
  `discount` FLOAT NULL,
  `extras` FLOAT NULL,
  `total` DECIMAL NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`address` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cust_id` INT NULL,
  `type` VARCHAR(45) NULL,
  `address_1` VARCHAR(45) NULL,
  `address_2` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `extra` VARCHAR(45) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  `customers_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_address_customers1_idx` (`customers_id` ASC),
  CONSTRAINT `fk_address_customers1`
    FOREIGN KEY (`customers_id`)
    REFERENCES `estore`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`brands` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `image` VARCHAR(45) NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`order_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`order_products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NULL,
  `product_price` DECIMAL NULL,
  `quantity` INT NULL,
  `order_id` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`wishlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`wishlist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cust_id` INT NULL,
  `product_id` INT NULL,
  `timestamp` TIMESTAMP NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`order_tracking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`order_tracking` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order_id` INT NULL,
  `timestamp` TIMESTAMP NULL,
  `status` INT NULL,
  `notes` TEXT NULL,
  `created_by` INT NULL,
  `created_on` TIMESTAMP NULL,
  `updated_by` INT NULL,
  `updated_on` TIMESTAMP NULL,
  `orders_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_order_tracking_orders1_idx` (`orders_id` ASC),
  CONSTRAINT `fk_order_tracking_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `estore`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`products_has_reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`products_has_reviews` (
  `products_id` INT NOT NULL,
  `reviews_id` INT NOT NULL,
  PRIMARY KEY (`products_id`, `reviews_id`),
  INDEX `fk_products_has_reviews_reviews1_idx` (`reviews_id` ASC) ,
  INDEX `fk_products_has_reviews_products1_idx` (`products_id` ASC) ,
  CONSTRAINT `fk_products_has_reviews_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `estore`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_reviews_reviews1`
    FOREIGN KEY (`reviews_id`)
    REFERENCES `estore`.`reviews` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`customers_has_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`customers_has_orders` (
  `customers_id` INT NOT NULL,
  `orders_id` INT NOT NULL,
  PRIMARY KEY (`customers_id`, `orders_id`),
  INDEX `fk_customers_has_orders_orders1_idx` (`orders_id` ASC) ,
  INDEX `fk_customers_has_orders_customers1_idx` (`customers_id` ASC) ,
  CONSTRAINT `fk_customers_has_orders_customers1`
    FOREIGN KEY (`customers_id`)
    REFERENCES `estore`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customers_has_orders_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `estore`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`products_has_wishlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`products_has_wishlist` (
  `products_id` INT NOT NULL,
  `wishlist_id` INT NOT NULL,
  PRIMARY KEY (`products_id`, `wishlist_id`),
  INDEX `fk_products_has_wishlist_wishlist1_idx` (`wishlist_id` ASC) ,
  INDEX `fk_products_has_wishlist_products1_idx` (`products_id` ASC) ,
  CONSTRAINT `fk_products_has_wishlist_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `estore`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_wishlist_wishlist1`
    FOREIGN KEY (`wishlist_id`)
    REFERENCES `estore`.`wishlist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`customers_has_wishlist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`customers_has_wishlist` (
  `customers_id` INT NOT NULL,
  `wishlist_id` INT NOT NULL,
  PRIMARY KEY (`customers_id`, `wishlist_id`),
  INDEX `fk_customers_has_wishlist_wishlist1_idx` (`wishlist_id` ASC) ,
  INDEX `fk_customers_has_wishlist_customers1_idx` (`customers_id` ASC) ,
  CONSTRAINT `fk_customers_has_wishlist_customers1`
    FOREIGN KEY (`customers_id`)
    REFERENCES `estore`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customers_has_wishlist_wishlist1`
    FOREIGN KEY (`wishlist_id`)
    REFERENCES `estore`.`wishlist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`order_products_has_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`order_products_has_orders` (
  `order_products_id` INT NOT NULL,
  `orders_id` INT NOT NULL,
  PRIMARY KEY (`order_products_id`, `orders_id`),
  INDEX `fk_order_products_has_orders_orders1_idx` (`orders_id` ASC) ,
  INDEX `fk_order_products_has_orders_order_products1_idx` (`order_products_id` ASC) ,
  CONSTRAINT `fk_order_products_has_orders_order_products1`
    FOREIGN KEY (`order_products_id`)
    REFERENCES `estore`.`order_products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_products_has_orders_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `estore`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estore`.`products_has_order_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estore`.`products_has_order_products` (
  `products_id` INT NOT NULL,
  `order_products_id` INT NOT NULL,
  PRIMARY KEY (`products_id`, `order_products_id`),
  INDEX `fk_products_has_order_products_order_products1_idx` (`order_products_id` ASC) ,
  INDEX `fk_products_has_order_products_products1_idx` (`products_id` ASC) ,
  CONSTRAINT `fk_products_has_order_products_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `estore`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_order_products_order_products1`
    FOREIGN KEY (`order_products_id`)
    REFERENCES `estore`.`order_products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
