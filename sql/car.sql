-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2020 at 02:04 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(225) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) NOT NULL,
  `company` char(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `img`, `company`, `series`, `price`) VALUES
(37, 'mercedes-benz-g-class.jpg', 'Mercedes', 'Benz-D-Class', 'USD $100000'),
(39, '2019-mazda-cx-3.jpg', 'Mazda', 'Cx-3', 'USD $39999'),
(40, 'bronco.jpg', 'Ford', 'bronco', 'USD $200000'),
(54, 'maruti-suzuki-s-presso.jpg', 'Suzuki', 'Maruti S-Presso', 'USD$90000'),
(62, 'Alphard.jpg', 'Toyota', 'Alphard', 'USD$199999'),
(64, 'jd-power.jpg', 'Toyota', 'JD-Power', 'USD$42222'),
(65, 'varis-hybird.jpg', 'Toyota', 'Varis-Hybird', 'USD$39000'),
(66, 'demio.jpg', 'Mazda', 'Demio', 'USD$3000'),
(67, 'rx-8.jpg', 'Mazda', 'RX-8', 'USD$54000'),
(68, 'vision.jpg', 'Mazda', 'Vision', 'USD$360000'),
(69, 'mazda-suv-5.jpg', 'Mazda', 'Suv', 'USD$42222'),
(70, 'v1.jpg', 'Mazda', 'V1', 'USD$5000000'),
(71, 'Ditch.jpg', 'Ford', 'Ditch', 'USD $100000'),
(72, 'Lux.jpg', 'Ford', 'Lux', 'USD $200000'),
(73, 'EcoSport.jpg', 'Ford', 'Ecosport', 'USD $300000'),
(75, 'jimmy.jpeg', 'Suzuki', 'Jimny', 'USD $100000'),
(83, 'Benz.jpg', 'Mercedes', 'Benz', 'USD $200000'),
(85, 'Celerio.jpeg', 'Suzuki', 'Celerio', 'USD $23000'),
(86, 'suzuki-baleno.jpg', 'Suzuki', 'Baleno', 'USD$42222'),
(87, 'demio.jpg', 'Suzuki', 'Demio', 'USD $200000'),
(91, 'corolla se.png', 'Toyota', 'corolla.se', 'USD$300009'),
(93, 'fiesta.jpg', 'Ford', 'FIESTA', 'USD $155555'),
(95, 'glanza.jpg', 'Toyota', 'Glanza', 'USD$39999'),
(100, 'benz s.jpg', 'Mercedes', 'Benz-S', 'USD$300000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(225) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `name`, `email`, `mobile`, `message`) VALUES
(21, 'Nyan', 'nyan@gmail.com', 9250015864, 'Nice Web');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `carname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `carname`, `price`, `name`, `mobile`, `address`, `order_no`) VALUES
(14, ' Maruti S-Presso', 'USD $3000', 'aung', 9643278189, 'dslkfjfds', 'ord2204'),
(15, ' Maruti S-Presso', 'USD $3000', 'Aung', 12345, '5634', 'ord228'),
(16, ' Maruti S-Presso', 'USD $3000', 'aung', 2132432543, 'gfdxgsdf', 'ord425'),
(20, ' Maruti S-Presso', 'USD $3000', 'Nyan', 936723840, 'dsafdf', 'ord125'),
(22, 'Fortuner', 'USD $80000', 'admin', 92500, 'fsds', 'ord253'),
(23, 'Suzuki Jimny', 'USD$300000', 'Nyan Lin Htet', 9384390453, 'yangon', 'ord2336'),
(24, 'Mazda Cx-3', 'USD $30000', 'pyae', 98439043, 'yangon', 'ord3353'),
(25, 'Mazda Cx-3', 'USD $30000', 'Nyan', 943786835, 'yangon', 'ord3045'),
(26, 'Toyota Glanza', 'USD$49000', 'Nyan', 946328672, 'yangon', 'ord3072'),
(27, 'Mercedes MSL', 'USD$300000', 'Win', 923653783, 'yangon', 'ord1673'),
(28, 'Mazda Cx-3', 'USD $39999', 'Road', 93527181, 'yangon', 'ord2574'),
(29, 'Mazda Cx-3', 'USD $39999', 'Life', 932647672348, 'yangon', 'ord2394'),
(30, 'Ford FIESTA', 'USD $155555', 'Wayne', 9432867823, 'NewYork', 'ord2153');

-- --------------------------------------------------------

--
-- Table structure for table `popularcar`
--

CREATE TABLE IF NOT EXISTS `popularcar` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `popularcar`
--

INSERT INTO `popularcar` (`car_id`, `img`, `company`, `series`, `price`) VALUES
(20, 'Jimny.jpg', 'Suzuki', 'Jimny', 'USD$19999'),
(21, 'C6.jpg', 'Mazda', 'C6', 'USD $500000'),
(22, 'mercedes-benz-gle.jpg', 'Mercedes', 'Beleno-Gen', 'USD $300000'),
(28, 'benz s.jpg', 'Mercedes', 'Benz-S', 'USD$300000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `email`, `phone`, `password`, `address`) VALUES
(19, 'Nyan Lin Htet', 'nyan123@gmail.com', 95437893, '1234', 'yangon'),
(21, 'Winner', 'win@gmail.com', 97483939, '1234', 'yangon'),
(25, 'bruce', 'b@gmail.com', 9743923223, '1234', 'yangon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
