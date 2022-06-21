-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 12:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db_edoc`
--
CREATE DATABASE IF NOT EXISTS `my_db_edoc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_db_edoc`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc`
--

CREATE TABLE `tbl_doc` (
  `doc_id` int(11) NOT NULL,
  `ref_did` int(11) NOT NULL COMMENT 'รหัสประเภทหนังสือ',
  `doc_num` varchar(30) NOT NULL,
  `doc_name` varchar(300) NOT NULL,
  `doc_from` varchar(200) NOT NULL,
  `doc_date` date NOT NULL,
  `doc_to` varchar(200) NOT NULL,
  `doc_status` int(1) NOT NULL,
  `doc_file` varchar(100) NOT NULL,
  `ref_m_id` int(11) NOT NULL COMMENT 'รหัสสารบรรณ',
  `doc_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doc`
--

INSERT INTO `tbl_doc` (`doc_id`, `ref_did`, `doc_num`, `doc_name`, `doc_from`, `doc_date`, `doc_to`, `doc_status`, `doc_file`, `ref_m_id`, `doc_save`) VALUES
(1, 1, 'ศธ.2562/1111', 'ประชาสัมพันธ์', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 1, '9fb9e040bb9228574acc22927be19d04.pdf', 1, '2019-03-13 13:27:12'),
(2, 2, 'ศธ.2562/1112', 'ประชาสัมพันธ์222', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 2, '1cd87032a51b50974b05daff73466581.pdf', 1, '2019-03-13 13:27:12'),
(3, 4, 'h4343', 'tttttttt', 'rrrrrr', '2019-03-12', 'uuuuuuu', 1, '54266a7ddf39b5c635bbd8771520bf2f.pdf', 0, '2019-03-14 09:19:52'),
(4, 2, 'ศศ222', 'กกกกกกกก', 'ขขขขขข', '2019-03-10', 'สสสสสสส', 2, 'dd3191a0bf53039c4d08f0d207fcb9d3.pdf', 0, '2019-03-14 09:21:20'),
(5, 2, 'ศธ.34345354', 'ประชาสัมพันธ์', 'สนง. devbanban', '2019-03-13', 'หัวหน้า', 1, '0aa1a04f74b371cc09b8b6b7cbad9c26.pdf', 0, '2019-03-14 09:24:33'),
(6, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-03-18 06:19:42'),
(7, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-03-18 07:43:25'),
(8, 3, 'ศธ.2562/1111', 'ประชาสัมพันธ์', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 1, '9fb9e040bb9228574acc22927be19d04.pdf', 1, '2019-03-13 13:27:12'),
(9, 1, 'h4343', 'tttttttt', 'rrrrrr', '2019-03-12', 'uuuuuuu', 1, '54266a7ddf39b5c635bbd8771520bf2f.pdf', 0, '2019-03-14 09:19:52'),
(10, 2, 'ศธ.34345354', 'ประชาสัมพันธ์', 'สนง. devbanban', '2019-03-13', 'หัวหน้า', 1, '0aa1a04f74b371cc09b8b6b7cbad9c26.pdf', 0, '2019-03-14 09:24:33'),
(11, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-03-18 06:19:42'),
(12, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-03-18 07:43:25'),
(13, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-03-18 06:19:42'),
(14, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-03-18 06:19:42'),
(15, 2, 'ศธ.34345354', 'ประชาสัมพันธ์', 'สนง. devbanban', '2019-03-13', 'หัวหน้า', 1, '0aa1a04f74b371cc09b8b6b7cbad9c26.pdf', 0, '2019-03-14 09:24:33'),
(16, 2, 'ศธ.34345354', 'ประชาสัมพันธ์', 'สนง. devbanban', '2019-03-13', 'หัวหน้า', 1, '0aa1a04f74b371cc09b8b6b7cbad9c26.pdf', 0, '2019-03-14 09:24:33'),
(17, 2, 'ศศ222', 'กกกกกกกก', 'ขขขขขข', '2019-03-10', 'สสสสสสส', 2, 'dd3191a0bf53039c4d08f0d207fcb9d3.pdf', 0, '2019-03-14 09:21:20'),
(18, 4, 'h4343', 'tttttttt', 'rrrrrr', '2019-03-12', 'uuuuuuu', 1, '54266a7ddf39b5c635bbd8771520bf2f.pdf', 0, '2019-03-14 09:19:52'),
(19, 1, 'h4343', 'tttttttt', 'rrrrrr', '2019-03-12', 'uuuuuuu', 1, '54266a7ddf39b5c635bbd8771520bf2f.pdf', 0, '2019-03-14 09:19:52'),
(20, 1, 'ศธ.2562/1111', 'ประชาสัมพันธ์', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 1, '9fb9e040bb9228574acc22927be19d04.pdf', 1, '2019-03-13 13:27:12'),
(21, 2, 'ศธ.2562/1112', 'ประชาสัมพันธ์222', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 2, '1cd87032a51b50974b05daff73466581.pdf', 1, '2019-03-13 13:27:12'),
(22, 3, 'ศธ.2562/1111', 'ประชาสัมพันธ์', 'สำนักงาน', '2019-03-13', 'หัวหน้างาน', 1, '9fb9e040bb9228574acc22927be19d04.pdf', 1, '2019-03-13 13:27:12'),
(23, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2018-02-01 07:43:25'),
(24, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2018-02-05 07:43:25'),
(25, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-02-11 06:19:42'),
(26, 2, 'ddd', 'กกกกกกกก', 'ขขขขขขข', '2019-03-18', 'ฟฟฟฟฟฟ', 1, 'fe2da823191b8f93f254a5f6c16a7d9f.pdf', 0, '2019-02-11 06:19:42'),
(27, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2018-02-05 07:43:25'),
(28, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2018-02-01 07:43:25'),
(29, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-04-01 07:43:25'),
(30, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-04-01 07:43:25'),
(31, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-04-01 07:43:25'),
(32, 1, 'กก.3333', 'เชิญชวน...', 'สนง.....', '2019-03-11', 'ผอ.', 2, '43330fd8ba265d14144dad2e9db7aea0.pdf', 0, '2019-04-01 07:43:25'),
(33, 2, 'กก 333', 'ประชาสัมพันธ์ระบบ1', 'สนง. devbanban1', '2019-04-01', 'หัวหน้า1', 1, 'c4759ae7e0eb05571f60c2e7519dd1ad.pdf', 0, '2019-04-07 09:19:13'),
(34, 3, 'ข 333', 'ทดสอบระบบ', 'สนง. devbanban', '2019-04-07', 'หัวหน้า', 1, 'a5c9d0ea5d2fb58a719e7d51c5b15c11.pdf', 0, '2019-04-07 09:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc_type`
--

CREATE TABLE `tbl_doc_type` (
  `did` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doc_type`
--

INSERT INTO `tbl_doc_type` (`did`, `dname`) VALUES
(1, 'ประกาศ'),
(2, 'หนังสือทั่วๆไป'),
(3, 'หนังสือ'),
(4, 'วารสาร1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_id` int(11) NOT NULL,
  `ref_pid` int(11) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `m_username` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `m_password` varchar(50) COLLATE utf8_german2_ci NOT NULL,
  `m_fname` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `m_name` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `m_lname` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `m_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `ref_pid`, `m_username`, `m_password`, `m_fname`, `m_name`, `m_lname`, `m_datesave`) VALUES
(1, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'mr.', 'admin', 'root', '2019-03-24 10:43:38'),
(2, 2, 'boss', '05b1f356646c24bf1765f6f1b65aea3bde7247e1', 'mr.', 'bossA', 'B', '2019-03-24 10:43:38'),
(3, 3, 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', 'mr.', 'staffA', 'BB', '2019-03-24 10:43:38'),
(4, 4, 'e', '58e6b3a414a1e090dfc6029add0f3555ccba127f', 'mr.', 'emp12a', 'root12a', '2019-03-24 10:43:38'),
(5, 4, 'mm', 'b8d09b4d8580aacbd9efc4540a9b88d2feb9d7e5', 'นาย', 'mmmm', 'bbbbb', '2019-03-26 09:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL COMMENT 'ชื่อตำแหน่งงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตำแหน่งงาน';

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`pid`, `pname`) VALUES
(1, 'Admin'),
(2, 'Boss'),
(3, 'Staff'),
(4, 'EMP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doc`
--
ALTER TABLE `tbl_doc`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tbl_doc_type`
--
ALTER TABLE `tbl_doc_type`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doc`
--
ALTER TABLE `tbl_doc`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_doc_type`
--
ALTER TABLE `tbl_doc_type`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
