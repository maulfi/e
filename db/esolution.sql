-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 08:51 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_title` varchar(100) NOT NULL,
  `profit` double NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `planning_what_todo`
--

CREATE TABLE IF NOT EXISTS `planning_what_todo` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `must_do` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL,
  `createdate` int(11) NOT NULL,
  `methode` varchar(100) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` enum('Pulsa','Handphone','Aksesoris') NOT NULL,
  `operator_id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `nominal` int(11) NOT NULL,
  `price` double NOT NULL,
  `baseprice` double NOT NULL,
  `stock` int(11) NOT NULL,
  `multi_stock` int(11) NOT NULL,
  `chip_stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `jenis_barang`, `operator_id`, `nama_barang`, `description`, `nominal`, `price`, `baseprice`, `stock`, `multi_stock`, `chip_stock`, `created_at`, `updated_at`, `admin_id`, `status`) VALUES
(2, 'Pulsa', 1, 'IM3 10K', 'Pulsa IM3 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(1, 'Pulsa', 1, 'IM3 5K', 'Pulsa IM3 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(3, 'Pulsa', 1, 'IM3 25K', 'Pulsa IM3 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(4, 'Pulsa', 1, 'IM3 50K', 'Pulsa IM3 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(5, 'Pulsa', 1, 'IM3 100K', 'Pulsa IM3 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(7, 'Pulsa', 2, 'M 10K', 'Pulsa Mentari 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(8, 'Pulsa', 2, 'M 5K', 'Pulsa Mentari 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(9, 'Pulsa', 2, 'M 25K', 'Pulsa Mentari 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(10, 'Pulsa', 2, 'M 50K', 'Pulsa Mentari 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(11, 'Pulsa', 2, 'M 100K', 'Pulsa Mentari 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(12, 'Pulsa', 3, 'XL 5K', 'Pulsa XL 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(13, 'Pulsa', 3, 'XL 10K', 'Pulsa XL 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(14, 'Pulsa', 3, 'XL 25K', 'Pulsa XL 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(15, 'Pulsa', 3, 'XL 50K', 'Pulsa XL 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(16, 'Pulsa', 3, 'XL 100K', 'Pulsa XL 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(17, 'Pulsa', 4, 'T 5K', 'Pulsa Tri 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(18, 'Pulsa', 4, 'T 10K', 'Pulsa Tri 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(19, 'Pulsa', 4, 'T 25K', 'Pulsa Tri 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(20, 'Pulsa', 4, 'T 50K', 'Pulsa Tri 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(21, 'Pulsa', 4, 'T 100K', 'Pulsa Tri 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(22, 'Pulsa', 5, 'Ax 5K', 'Pulsa Axis 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(23, 'Pulsa', 5, 'Ax 10K', 'Pulsa Axis 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(24, 'Pulsa', 5, 'Ax 25K', 'Pulsa Axis 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(25, 'Pulsa', 5, 'Ax 50K', 'Pulsa Axis 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(26, 'Pulsa', 5, 'Ax 100K', 'Pulsa Axis 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(27, 'Pulsa', 6, 'S 5K', 'Pulsa SimPati 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(28, 'Pulsa', 6, 'S 10K', 'Pulsa SimPati 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(29, 'Pulsa', 6, 'S 25K', 'Pulsa SimPati 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(30, 'Pulsa', 6, 'S 50K', 'Pulsa SimPati 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(31, 'Pulsa', 6, 'S 100K', 'Pulsa SimPati 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(32, 'Pulsa', 7, 'As 5K', 'Pulsa AS 5 Ribu', 5, 6500, 5500, 0, 100000, 11, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(33, 'Pulsa', 7, 'As 10K', 'Pulsa AS 10 Ribu', 10, 11000, 10400, 0, 100000, 13, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(34, 'Pulsa', 7, 'As 25K', 'Pulsa AS 25 Ribu', 35, 26000, 25200, 0, 100000, 7, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(35, 'Pulsa', 7, 'As 50K', 'Pulsa AS 50 Ribu', 5, 52000, 50100, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(36, 'Pulsa', 7, 'As 100K', 'Pulsa AS 100 Ribu', 100, 102000, 99900, 0, 100000, 5, '2017-03-01 00:00:00', '2017-03-01 00:00:00', 2, 'Active'),
(37, 'Aksesoris', 0, 'Cashing Xiamoi Redmi', '-', 0, 50000, 30000, 0, 0, 0, '2017-03-21 16:31:13', '2017-03-28 16:20:17', 1, 'Active'),
(38, 'Aksesoris', 0, 'Cashing Nokia Bentuk Rusa', 'Bagus Barang nya', 0, 79000, 54000, 1, 0, 0, '2017-04-09 11:50:55', '2017-04-09 11:50:55', 1, 'Active'),
(39, 'Aksesoris', 0, 'Cashing Nokia Bentuk Rusa', 'Bagus Barang nya', 0, 79000, 54000, 1, 0, 0, '2017-04-09 11:51:08', '2017-04-09 11:51:08', 1, 'Active'),
(40, 'Handphone', 0, 'Nokia New 7810 Classic', 'Good Item', 0, 900000, 789000, 1, 0, 0, '2017-04-09 11:53:48', '2017-04-09 11:53:48', 1, 'Active'),
(41, 'Handphone', 0, 'Nokia New 7810 Classic', 'Good Item', 0, 900000, 789000, 1, 0, 0, '2017-04-09 11:54:04', '2017-04-09 11:54:04', 1, 'Active'),
(42, 'Pulsa', 0, 'Earphone Sony Z', 'earphone multiphone', 0, 200000, 100000, 3, 0, 0, '2017-04-14 23:47:34', '2017-04-14 23:47:34', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE IF NOT EXISTS `tbl_operator` (
  `operator_id` int(11) NOT NULL AUTO_INCREMENT,
  `operator_code` char(4) NOT NULL,
  `operator_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `createdate` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`operator_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`operator_id`, `operator_code`, `operator_name`, `description`, `createdate`, `status`) VALUES
(1, 'O1', 'IM3', 'IM3 From Indosat', '2017-03-01 00:00:00', 'Active'),
(2, 'O2', 'Mentari', 'Mentari From Indosat', '2017-03-01 00:00:00', 'Active'),
(3, 'O3', 'XL', 'XL AXIATA', '2017-03-19 00:00:00', 'Active'),
(5, 'O5', 'Ax', 'Axis', '0000-00-00 00:00:00', ''),
(4, 'O4', 'Tri', 'Tri Operator', '2017-03-19 00:00:00', 'Active'),
(6, 'O6', 'SimPati', 'Simpati by Telkomsel', '2017-03-19 00:00:00', 'Active'),
(7, 'O7', 'As', 'AS by Telkomsel', '2017-03-19 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_data`
--

CREATE TABLE IF NOT EXISTS `transaction_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` enum('Pulsa','Handphone','Aksesoris') NOT NULL,
  `jenis_pulsa` enum('multi','chip','-') NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `price` double NOT NULL,
  `base_price` double NOT NULL,
  `createdate` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaction_data`
--

INSERT INTO `transaction_data` (`id`, `jenis_barang`, `jenis_pulsa`, `no_handphone`, `qty`, `id_barang`, `price`, `base_price`, `createdate`, `status`, `user_id`) VALUES
(1, 'Pulsa', 'multi', '', 2, 2, 12000, 10300, '2017-03-28 06:33:24', 'Active', 2),
(2, 'Pulsa', 'chip', '', 1, 10, 11500, 10350, '2017-03-28 07:13:13', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_not_served`
--

CREATE TABLE IF NOT EXISTS `transaction_not_served` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` enum('Aksesoris','Pulsa','Handphone') NOT NULL,
  `reason` text NOT NULL,
  `qty` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `user_id` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaction_not_served`
--

INSERT INTO `transaction_not_served` (`id`, `jenis_barang`, `reason`, `qty`, `createdate`, `status`, `user_id`, `idbarang`) VALUES
(1, 'Aksesoris', 'Barang Belum Pernah Tersedia', 2, '2017-03-28 05:22:16', 'Active', 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_out`
--

CREATE TABLE IF NOT EXISTS `transaction_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengeluaran` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `total` double NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `transaction_out`
--

INSERT INTO `transaction_out` (`id`, `jenis_pengeluaran`, `title`, `description`, `total`, `date`, `status`, `user_id`) VALUES
(1, 'Makan', 'Sarapan Admin', '-', 9000, '2017-03-28 06:39:28', 'Active', 1),
(2, 'Lain-lain', 'Pengamen', '-', 1000, '2017-03-28 06:39:28', 'Active', 1),
(3, 'Makan', 'Makan Siang Admin', '-', 11000, '2017-03-28 12:20:11', 'Active', 1),
(4, 'Iuran', 'Iuran Sampah', '-', 5000, '2017-03-28 14:19:00', 'Active', 1),
(5, 'Lain-lain', 'WC', '-', 2000, '2017-03-28 15:08:22', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_control`
--

CREATE TABLE IF NOT EXISTS `user_access_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_access_control`
--

INSERT INTO `user_access_control` (`id`, `role`, `module_id`, `status`) VALUES
(1, 'admin', 1, 'Active'),
(2, 'admin', 2, 'Active'),
(3, 'admin', 3, 'Active'),
(4, 'uub', 4, 'Active'),
(5, 'admin', 5, 'Active'),
(6, 'admin', 6, 'Active'),
(7, 'admin', 7, 'Active'),
(8, 'admin', 8, 'Active'),
(9, 'bos', 8, 'Active'),
(10, 'admin', 9, 'Active'),
(11, 'admin', 10, 'Active'),
(12, 'admin', 11, 'Active'),
(13, 'admin', 12, 'Active'),
(14, 'admin', 13, 'Active'),
(15, 'admin', 14, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `insertdate` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`user_id`, `user_name`, `fullname`, `password`, `position`, `role`, `insertdate`) VALUES
(1, 'mutia@admin.com', 'Mutia Handayani', '25179a5e3a2a2727fbe6c58a0fdcd1fb', 'Manager', 'admin', '2017-01-01 00:00:00'),
(2, 'johndoe@admin.com', 'John Doe', '25179a5e3a2a2727fbe6c58a0fdcd1fb', 'Pegawai', 'pegawai', '2017-03-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE IF NOT EXISTS `user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `createdate` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE IF NOT EXISTS `user_module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `is_have_child` int(11) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `module_controllers` varchar(50) NOT NULL,
  `module_name` varchar(250) NOT NULL,
  `createdate` datetime NOT NULL,
  `position` char(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_module`
--

INSERT INTO `user_module` (`module_id`, `parent_id`, `is_have_child`, `icon`, `module_controllers`, `module_name`, `createdate`, `position`, `status`) VALUES
(1, 0, 0, '', 'report', 'Report', '2017-03-16 00:00:00', '1', 'Active'),
(2, 0, 0, '', 'transaction', 'Transaction', '2017-03-16 00:00:00', '2', 'Active'),
(3, 0, 0, '', '', 'Master Data', '2017-03-16 00:00:00', '3', 'Active'),
(4, 1, 0, 'fa-desktop', 'report', 'Overview', '2017-03-16 00:00:00', '11', 'Active'),
(5, 1, 0, 'fa-bar-chart-o', 'report', 'Performance', '2017-03-16 00:00:00', '12', 'Active'),
(6, 1, 0, 'fa-pencil-square-o', 'report', 'Plan', '2017-03-16 00:00:00', '13', 'Active'),
(7, 2, 1, 'fa-pencil', 'transaction', 'Transaction In', '2017-03-16 00:00:00', '21', 'Active'),
(8, 2, 0, 'fa-magic', 'transaction', 'Transaction Out', '2017-03-16 00:00:00', '22', 'Active'),
(9, 3, 0, 'fa-cogs', 'barang', 'Data Barang', '2017-03-16 00:00:00', '39', 'Active'),
(10, 3, 1, 'fa-pencil', 'user', 'User Management', '2017-03-16 00:00:00', '390', 'Active'),
(11, 7, 0, 'fa-file-text-o', 'transaction', 'Served Transaction', '2017-03-16 00:00:00', '21', 'Active'),
(12, 7, 0, 'fa-list-alt', 'transaction', 'Not Served Transaction', '2017-03-16 00:00:00', '21', 'Active'),
(13, 10, 0, 'fa-users', 'user', 'User Data', '2017-03-16 00:00:00', '390', 'Active'),
(14, 10, 0, 'fa-file-text-o', 'user', 'User Access Control', '2017-03-16 00:00:00', '390', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
