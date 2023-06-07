-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `id` int(11) NOT NULL,
  `title` varchar(3000) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`id`, `title`, `content`) VALUES
(1, 'new', '1'),
(2, 'The Growing Crisis: Exploring the Global Garbage Problem', 'cccnkasndasdnsdkasndlsadnsldan'),
(3, 'New 3', 'Afuhsaduyegfiuyewgfi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gtf_member`
--

CREATE TABLE `tbl_gtf_member` (
  `id` int(11) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gtf_member`
--

INSERT INTO `tbl_gtf_member` (`id`, `f_name`, `l_name`, `Email`, `phone_number`, `pwd`) VALUES
(1, 'Deelaka', 'Lakpura', 'deelaka.lakpura94@gmail.com', '+94752056898', '12345'),
(2, 'Deelaka', 'Lakpura', 'deelaka.lakpura84@gmail.com', '+94752056898', '12345'),
(3, 'Deelaka', 'Lakpura', 'deelaka.lakpura24@gmail.com', '+94752056898', '12345'),
(4, 'Deelaka', 'Lakpura', 'deelaka.lakpura24@gmail.com', '+94752056898', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admins`
--

CREATE TABLE `tb_admins` (
  `id` int(11) NOT NULL,
  `p_title` varchar(250) NOT NULL,
  `p_fname` varchar(250) NOT NULL,
  `p_lname` varchar(250) NOT NULL,
  `p_tel` varchar(250) NOT NULL,
  `p_add` varchar(250) NOT NULL,
  `p_age` varchar(250) NOT NULL,
  `p_nic` varchar(250) NOT NULL,
  `p_gender` varchar(250) NOT NULL,
  `p_date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admins`
--

INSERT INTO `tb_admins` (`id`, `p_title`, `p_fname`, `p_lname`, `p_tel`, `p_add`, `p_age`, `p_nic`, `p_gender`, `p_date`) VALUES
(1, 'Mr.', 'Deelaka', 'Lakpura', '+94752056898', 'c7/sf/01, government housing scheme, jalthara', '23', '432424', '1', '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reprotgarbage`
--

CREATE TABLE `tb_reprotgarbage` (
  `id` int(11) NOT NULL,
  `details` varchar(800) DEFAULT NULL,
  `lat` varchar(1000) DEFAULT NULL,
  `imagename` varchar(1250) DEFAULT NULL,
  `lang` varchar(300) DEFAULT NULL,
  `image_data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reprotgarbage`
--

INSERT INTO `tb_reprotgarbage` (`id`, `details`, `lat`, `imagename`, `lang`, `image_data`) VALUES
(4, 'new', '6.9107712', NULL, '79.8851072', 0x61622e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gtf_member`
--
ALTER TABLE `tbl_gtf_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reprotgarbage`
--
ALTER TABLE `tb_reprotgarbage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_gtf_member`
--
ALTER TABLE `tbl_gtf_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_reprotgarbage`
--
ALTER TABLE `tb_reprotgarbage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
