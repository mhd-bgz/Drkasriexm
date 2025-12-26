SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `orders` (
`id` int(11) NOT NULL COMMENT 'chek it',
  `Full_Name` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Product_id` varchar(50) NOT NULL
