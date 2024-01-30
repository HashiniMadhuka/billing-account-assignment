-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `country` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `postal_code` text NOT NULL,
  `province` text NOT NULL,
  `name_on_card` text NOT NULL,
  `credit_card_number` bigint(16) NOT NULL,
  `expiration_date` date NOT NULL,
  `cvc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `country`, `address`, `city`, `postal_code`, `province`, `name_on_card`, `credit_card_number`, `expiration_date`, `cvc`) VALUES
(1, ' Sri Lanka ', ' Main Street, Galle', ' Galle', '  80000', '  Southern', ' BOC', 2147483647145875, '2024-02-01', 455),
(2, ' UK ', ' No.2 Wellawatta, Colombo 4', ' Wellawatta', '  00100', '  Western', ' Nations Trust Bank', 1236589745698254, '2024-01-25', 472),
(3, ' Sri Lanka ', ' Main Street, Wackwalla, Galle', ' Galle', '  80000', '  Southern', ' Ossie', 4561237891236547, '2024-01-24', 782),
(4, ' Sri Lanka ', ' Gonapinuwala, Hikkaduwa', ' Galle', '  80000', '  Southern', ' Hashini Madhuka', 4562358796541235, '2024-01-03', 123),
(5, ' Sri Lanka ', 'Malwana, Gampaha', ' Gampaha', '  5236852', '  Western', ' Kanchana Kariyawasam', 5869231475963258, '2024-01-03', 256),
(6, ' Canada ', 'No.99, Ginimellagaha West, Hikkaduwa', 'Hikkaduwa', '  456000', '  Southern', ' Janath Krishantha', 123412341234123, '2024-01-04', 289),
(7, ' Sri Lanka ', ' Dehiwala, Colombo 02.', ' Colombo', '  50000', '  Western', ' Sachini Maheshika', 4567894561234567, '2024-01-03', 456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
