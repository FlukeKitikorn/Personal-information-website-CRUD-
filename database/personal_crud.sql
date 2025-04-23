-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 08:00 PM
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
-- Database: `personal_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `l_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `time_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `age`, `phone`, `address`, `country`, `img`, `time_create`) VALUES
(24, 'Kittikorn', 'Khantasane', 21, '0912345678', 'Bangkok', 'Thailand', 'Upload/680925f1dba28_avatar.png', '2025-04-23 17:39:34'),
(25, 'Suchada', 'Phonchai', 22, '0811223344', 'Chiang Mai', 'Thailand', 'Upload/680925fbb6515_avatar2.png', '2025-04-23 17:39:34'),
(26, 'Takeshi', 'Yamamoto', 23, '0898765432', 'Osaka', 'Japan', 'Upload/680926061c925_avatar3.png', '2025-04-23 17:39:34'),
(27, 'Sara', 'Kim', 20, '0823344556', 'Seoul', 'South Korea', 'Upload/6809261136e40_avatar4.png', '2025-04-23 17:39:34'),
(28, 'John', 'Smith', 24, '0809988776', 'New York', 'USA', 'Upload/6809261c9367c_avatar5.png', '2025-04-23 17:39:34'),
(29, 'Anna', 'Lee', 19, '0832123456', 'Taipei', 'Taiwan', 'Upload/6809262e07bec_avatar.png', '2025-04-23 17:39:34'),
(30, 'Ahmed', 'Hassan', 25, '0844455667', 'Cairo', 'Egypt', 'Upload/6809263754e12_avatar2.png', '2025-04-23 17:39:34'),
(31, 'Maria', 'Lopez', 22, '0856677889', 'Barcelona', 'Spain', 'Upload/680926431a913_avatar3.png', '2025-04-23 17:39:34'),
(32, 'Emily', 'Brown', 21, '0867788990', 'London', 'UK', 'Upload/68092675b1531_avatar4.png', '2025-04-23 17:39:34'),
(33, 'Thanh', 'Nguyen', 23, '0878899001', 'Hanoi', 'Vietnam', 'Upload/6809268a3d967_admin.png', '2025-04-23 17:39:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
