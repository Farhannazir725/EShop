-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE IF NOT EXISTS `cartdetail` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorydetails`
--

CREATE TABLE IF NOT EXISTS `categorydetails` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `catname` varchar(255) NOT NULL,
  `activestatus` int(1) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categorydetails`
--

INSERT INTO `categorydetails` (`sno`, `catname`, `activestatus`) VALUES
(1, 'Stationary', 0),
(2, 'Electronics', 0),
(3, 'Kides Section', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `userid` bigint(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Order Pending',
  `tamount` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`sno`, `cname`, `add`, `city`, `state`, `country`, `zipcode`, `contact`, `email`, `payment`, `userid`, `status`, `tamount`) VALUES
(1, 'Sunil Yadav', 'Gopi Bazar Anil kothari ke samne ', 'Jaipur ', 'Rajasthan ', 'India ', '234567', '987654345678', 'sunil@123.com', 'Paypal', 1, 'Order Pending', '13600'),
(2, 'Sunil Yadav', 'Gopi Bazar Anil kothari ke samne ', 'Jaipur ', 'Rajasthan ', 'India ', '234567', '987654345678', 'sunil@123.com', 'Paypal', 1, 'Order Pending', '13600');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE IF NOT EXISTS `orderproduct` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `totalamount` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Order ',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`sno`, `userid`, `pid`, `qty`, `price`, `totalamount`, `status`) VALUES
(1, 1, 4, 2, 400, 800, 'Order'),
(2, 1, 2, 2, 6000, 12000, 'Order'),
(3, 1, 4, 2, 400, 800, 'Order');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE IF NOT EXISTS `productlist` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `prodescrip` text NOT NULL,
  `qty` bigint(20) NOT NULL,
  `catagoryid` bigint(11) NOT NULL,
  `subcatagoryid` bigint(20) NOT NULL,
  `minqty` bigint(20) NOT NULL,
  `maxqty` bigint(20) NOT NULL,
  `activestatus` int(1) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`productid`, `productname`, `price`, `prodescrip`, `qty`, `catagoryid`, `subcatagoryid`, `minqty`, `maxqty`, `activestatus`, `pimage`) VALUES
(2, 'Micro Ovn Samsung 28L', 6000, 'Samsung product', 10, 2, 2, 5, 100, 0, 'images/1676640746oven.jpg'),
(4, 'Electric Lighter', 400, 'Kitchen Item', 10, 2, 2, 50, 100, 0, 'images/1676648996lighter.jfif'),
(5, 'Electric Stove', 1800, 'Electric Stove By Prestige', 1, 2, 2, 10, 100, 0, 'images/1676817682stove.jfif'),
(6, 'Shopner ', 20, 'Apsara Brand', 1, 1, 1, 10, 100, 0, 'images/1676817901shopner.jpg'),
(7, 'Ball Pen Apsara', 50, 'Apsara Brand', 50, 1, 1, 10, 1000, 0, 'images/1677150956stockregister_cdef87a5-8aed-4edd-bb89-3679034b36f0.jpg'),
(8, 'HB Pencil Apsara', 10, 'Apsara Brand', 100, 1, 1, 50, 1000, 0, 'images/1677151078download.jfif'),
(9, 'Natraj Penci', 12, 'Natraj Brand', 1000, 1, 3, 1000, 1000000, 0, 'images/1677151815n.jpg'),
(10, 'Eraser Natraj', 5, 'Natraj Brand', 100, 1, 3, 1000, 10000, 0, 'images/1677151846download.jfif'),
(11, 'Ac Voltas', 10000, 'Voltas Tata Brand', 10, 2, 4, 5, 20, 0, 'images/1677152017a.png'),
(12, 'Refrigerator Voltas', 5000, 'Vo', 1, 2, 4, 10, 100, 0, 'images/1677152059f.png'),
(13, 'Boy Shoes', 400, ' 1 To 3 Year Old Child ', 1, 3, 5, 10, 100, 0, 'images/1677318439s.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subcatname` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `activestatus` int(1) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`sno`, `subcatname`, `catid`, `activestatus`) VALUES
(1, 'Apsara', 1, 0),
(2, 'Kitchen', 2, 0),
(3, 'Natraj', 1, 0),
(4, 'Duct', 2, 0),
(5, 'Shoes', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `names`, `email`, `password`) VALUES
(1, 'Nazir', 'Nazir@123.com', 'Nazir@786'),
(5, 'Meraz Ansari', 'meraz@123.com', 'Meraz@786');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
