-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2021 at 02:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properti`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_contact` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `image`, `type`, `price`, `description`, `owner_name`, `owner_contact`, `created_at`, `updated_at`) VALUES
(1, 'property-1.jpg', 'Rumah', 1000000, 'Rumah bagus', 'Bagas', '+6212372522', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'property-2.jpg', 'Kostan', 500000, 'Kostan campur strategis', 'Pakde Mantap', '+6212342433', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'property-3.jpg', 'Villa', 500000000, 'Villa mewah daerah pusat kota', 'Bibah', '+6212323673', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'property-4.jpg', 'Apartemen', 30000000, 'Apartemen keren', 'Joo', '+6212374645', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'property-5.jpg', 'Rumah', 2000000, 'Rumah yang dikontrakan perbulan', 'Baba', '+621223763364', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'property-6.jpg', 'Rumah', 10000000, 'Rumah 2 lantai, 1 garasi, 2 kamar tidur, 1 kamar mandi', 'Gaga', '+62190708', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'property-7.jpg', 'Villa', 7000000, 'Villa pinggir pantai, cocok untuk liburan keluarga', 'Sat', '+6212556789', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'property-8.jpg', 'Coworking', 150000, 'Coworking space kerja sambil santai', 'May', '+6212956870', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'property-9.jpg', 'Kost', 900000, 'Kost khusus wanita daerah kampus', 'Maxwell', '+621232435667', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'property-10.jpg', 'Rumah', 300000, 'Kost khusus laki-laki dan murah!', 'Linus', '+62134356634', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
