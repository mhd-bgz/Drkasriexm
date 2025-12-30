SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `orders` (
`id` int(11) NOT NULL COMMENT 'chek it',
  `Full_Name` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `orders` (`id`, `Full_Name`, `Phone`, `Email`, `Product_id`) VALUES
(0, 'boukradoua', '0658254234', 'douaaboukraa2003@gmail.com', 'S-CHEESE');
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);
COMMIT;
