-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2018 at 09:03 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` char(7) NOT NULL,
  `name` varchar(32) NOT NULL,
  `weight` tinyint(4) NOT NULL COMMENT 'Weight is for storing value that represent how many product can be produced per day per 1 person',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `weight`, `created`, `modified`) VALUES
('PROD000', 'Lain-lain', 0, '2018-11-02 15:13:30', '2018-11-02 15:13:30'),
('PROD001', 'Jeans Panjang', 3, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD002', 'Jeans Pendek', 3, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD003', 'Jeans Kargo', 2, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD004', 'Kemeja Batik', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD005', 'Kemeja', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD006', 'Batik Puring', 2, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD007', 'Batik Lengan Panjang', 2, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD008', 'Batik Lengan Pendek', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD009', 'Sopan / Formal', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD010', 'Cinos', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD011', 'Jaket', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD012', 'Seragam', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD013', 'Seragam SMP', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD014', 'Seragam SMA', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD015', 'Seragam PNS', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD016', 'PDL', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43'),
('PROD017', 'PDH', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43'),
('PROD018', 'Blues', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` char(36) NOT NULL,
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` varchar(16) NOT NULL,
  `project_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_due_date` date NOT NULL,
  `product_id` char(7) NOT NULL,
  `project_assignee` varchar(8) DEFAULT 'UNKNOWN',
  `project_status` enum('TODO','INPR','CNCL','OTHR','DONE') NOT NULL DEFAULT 'TODO',
  `deleted` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `customer_name`, `customer_phone`, `project_created`, `project_due_date`, `product_id`, `project_assignee`, `project_status`, `deleted`) VALUES
('6f985224-5f8c-4897-98a6-773fc186cda4', 'Ipul', '081723433212', '2018-11-02 08:56:55', '2018-11-11', 'PROD004', 'UNKNOWN', 'TODO', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `project_notes`
--

CREATE TABLE `project_notes` (
  `id` int(11) NOT NULL,
  `project_id` char(36) NOT NULL,
  `notes` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_notes`
--

INSERT INTO `project_notes` (`id`, `project_id`, `notes`) VALUES
(1, '6f985224-5f8c-4897-98a6-773fc186cda4', 'Isi catatan untuk pesanan di sini ya, klo merasa tidak perlu catatan, kosongkan saja.');

-- --------------------------------------------------------

--
-- Table structure for table `project_product_other`
--

CREATE TABLE `project_product_other` (
  `project_id` char(36) NOT NULL,
  `product_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_notes`
--
ALTER TABLE `project_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_notes`
--
ALTER TABLE `project_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
