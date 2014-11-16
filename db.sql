CREATE DATABASE IF NOT EXISTS `fvtaxprep`;
USE `fvtaxprep`;

SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `Customers`;

CREATE TABLE `Customers` (
  `customer_id` varchar(40) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `cell` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE (`customer_id`)
);

insert into `Customers` values
(uuid(), 'James', 'Smith', '669 1st Ave. Oshkosh WI 54956', '920-998-1122', '920-774-2233', 'james.smith@gmail.com'),	
(uuid(), 'Jerry', 'Brown', '456 Pine St. Oshkosh WI 54956', '920-433-9999', '920-888-3775', 'jerry.brown@gmail.com'),	
(uuid(), 'Samantha', 'Kurt', '123 Main St. Oshkosh WI 54956', '920-123-6656', '920-999-3425', 'samantha.kurt@gmail.com');

DROP TABLE IF EXISTS `Employees`;

CREATE TABLE `Employees`(
  `employee_id` varchar(40) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE (`employee_id`)
);

insert into `Employees` values
('46432', 'Denise', 'Finch', '920-322-2134'),
('26466', 'Justin', 'Bright', '920-333-3214');


DROP TABLE IF EXISTS `Login`;

CREATE TABLE `Login`(
	`username` varchar(40) NOT NULL,
	`password` varchar(40) NOT NULL,
	`role` varchar(40) NOT NULL,
	PRIMARY KEY (`username`),
  UNIQUE (`username`)
);

insert into `Login` values
('finchd', 'password1', 'superadmin'),
('brightj', 'password2', 'admin'),
('smithj', 'password3', 'customer');

DROP TABLE IF EXISTS `Forms`;

CREATE TABLE `Forms`(
	`form_no` varchar(40) NOT NULL,
	`form_name` varchar (40) NOT NULL,
	`price` decimal(5,2) NOT NULL,
	PRIMARY KEY (`form_no`),
	UNIQUE(`form_no`)
);

Insert into `Forms` values
('1040', '1040 with 2 W-2s & State Return', 99),
('1020','Additional Schedules', 20),
('1000', 'W-2', 5),
('1010','H-EZ Rent Certificate', 25);


DROP TABLE IF EXISTS `Returns`;

CREATE TABLE `Returns`(
  `return_id` varchar(40) NOT NULL,
  `customer_id` varchar(40) NOT NULL,
  `employee_id` varchar(40) NOT NULL,
  `form_no` varchar(40) NOT NULL,
  `date` date,
  PRIMARY KEY (`return_id`),
  FOREIGN KEY (`customer_id`) REFERENCES Customers(`customer_id`),
  FOREIGN KEY (`employee_id`) REFERENCES Employees(`employee_id`),
  FOREIGN KEY (`form_no`) REFERENCES Forms(`form_no`)
);


DROP TABLE IF EXISTS `Appointments`;

CREATE TABLE `Appointments`(
	`appointment_id` varchar(40) NOT NULL,
	`customer_id` varchar(40) NOT NULL,
	`date` date,
	PRIMARY KEY (`appointment_id`),
	UNIQUE(`appointment_id`),
	FOREIGN KEY (`customer_id`) REFERENCES Customers(`customer_id`)
);

SET FOREIGN_KEY_CHECKS = 1;