-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 12:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `houseno` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `username`, `firstname`, `lastname`, `phno`, `houseno`, `area`, `pincode`, `state`, `city`) VALUES
(136, '', 'vivek', 'jha', 8879816264, 'flat No 20 ,shivshanti complex', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(137, 'adityabelhekar@gmail.com', 'vivek', 'jha', 8879816264, 'flat no 303 a wing xyz complex', 'near station', '421503', 'Maharashtra', 'kalyan'),
(138, 'omjadhav@gmail.com', 'om', 'jadhav', 9370934335, 'flat No 20 ', 'near station', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(139, '', 'vipul', 'Belhekar', 9370934335, 'flat No 20 ', 'Neral station road', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(140, 'omjadhav@gmail.com', 'vipul', 'belhekar', 9370934335, 'flat No 20 ,shivshanti complex', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(141, '', 'Aditya', 'Belhekar', 8879816264, 'flat No 20 ', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(142, 'omjadhav@gmail.com', 'Aditya', 'belhekar', 8879816264, 'flat No 20 ,shivshanti complex', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(143, 'omjadhav@gmail.com', 'Aditya', 'belhekar', 8879816264, 'flat No 20 ,shivshanti complex', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(144, '', 'Aditya', 'belhekar', 8879816264, 'flat No 20 ,shivshanti complex', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(145, '', 'Aditya', 'Belhekar', 9370934335, 'flat no 404 ABC Society', 'bapa ka road', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(146, 'adityabelhekar@gmail.com', 'Aditya', 'Belhekar', 9370934335, '', '', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(147, '', 'Aditya', 'Belhekar', 766661789, 'Room no 304 govind dham complex', 'opp to sai krupa hospital', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(148, '', 'Aditya', 'Belhekar', 7666178903, 'Falt no 20 4th floor D wing shivshanti complex ', 'Near saikrupa hospital ', '421503', 'Maharashtra', 'badlapur'),
(149, '', 'vipul', 'belhekar', 9370934335, 'flat no 404 ABC Society', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(150, '', 'Aditya', 'Belhekar', 9370934335, 'flat No 20, shivshakti complex ', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(151, '', 'vipul', 'belhekar', 9370934335, 'flat No 20 ', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(152, '', 'vipul', 'belhekar', 9370934335, 'flat No 20 ', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(153, '', 'Aditya', 'Belhekar', 9370934335, 'flat No 20 ,shivshanti complex', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(154, '', 'vipul', 'Belhekar', 9370934335, 'flat No 20 ,shivshanti complex', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(155, '', 'om', 'Belhekar', 9370934335, 'flat No 20 ', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(156, '', 'Aditya', 'belhekar', 9370934335, 'flat No 20 ,shivshanti complex', 'manjarli', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(157, '', 'vipul', 'belhekar', 9370934335, 'flat No 20 ', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST'),
(158, '', 'vipul', 'belhekar', 9370934335, 'flat No 20 ,shivshanti complex', 'dejdb', '421503', 'Maharashtra', 'BADLAPUR WEST');

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `id` int(255) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `username` text NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_address`
--

CREATE TABLE `buyer_address` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `phno` int(255) NOT NULL,
  `houseno` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `direct_buy`
--

CREATE TABLE `direct_buy` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `p_quantity` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `MNO` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `birthhd` date NOT NULL,
  `mail` text NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`id`, `fname`, `LNAME`, `MNO`, `STATE`, `birthhd`, `mail`, `pass`) VALUES
(21, 'vivek', 'jha', '122334444', 'Chhattisgarh', '2002-06-30', 'vivekk@gmail.com', 'vivek'),
(34, 'pratik', ' shelar', '8888888888', 'Maharashtra', '2002-03-23', 'pratikshelar@gmail.com', 'pratik@23'),
(35, 'vipul', ' Belhekar', '9370934335', 'Maharashtra', '2021-05-20', 'vipulbelhekar20@gmail.com', 'vip');

-- --------------------------------------------------------

--
-- Table structure for table `f_login`
--

CREATE TABLE `f_login` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_cash_success`
--

CREATE TABLE `payment_cash_success` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_quantity` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `final_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_cash_success`
--

INSERT INTO `payment_cash_success` (`id`, `name`, `p_quantity`, `username`, `final_price`) VALUES
(1, 'apple', 1, 'omjadhav@gmail.com', 100),
(2, 'Kiwi', 1, 'omjadhav@gmail.com', 120),
(3, 'apple', 1, 'omjadhav@gmail.com', 100),
(4, 'Kiwi', 1, 'omjadhav@gmail.com', 120);

-- --------------------------------------------------------

--
-- Table structure for table `payment_success`
--

CREATE TABLE `payment_success` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_request_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_quantity` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `final_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_success`
--

INSERT INTO `payment_success` (`id`, `payment_id`, `payment_status`, `payment_request_id`, `name`, `p_quantity`, `username`, `final_price`) VALUES
(8, 'MOJO1418R05A10653756', 'Credit', '0e33a13e5ffb43baa78a66f38bea718f', 'wheat', '4', 'vivekk@gmail.com', '2000'),
(9, 'MOJO1418R05A10653756', 'Credit', '0e33a13e5ffb43baa78a66f38bea718f', 'wheat', '4', 'vivekk@gmail.com', '2000'),
(10, 'MOJO1419H05A47298337', 'Credit', '9f8b5d9e7cb74f8f80636e2b4533b28a', 'Kiwi', '3', 'adityabelhekar@gmail.com', '360'),
(11, 'MOJO1419H05A47298337', 'Credit', '9f8b5d9e7cb74f8f80636e2b4533b28a', 'marigold', '1', 'adityabelhekar@gmail.com', '350'),
(12, 'MOJO1421H05A53501817', 'Credit', '7900efebcbf24864be57879c609bfb01', 'apple', '1', 'vivekk@gmail.com', '100'),
(13, 'MOJO1421H05A53501817', 'Credit', '7900efebcbf24864be57879c609bfb01', 'Kiwi', '1', 'vivekk@gmail.com', '120'),
(14, 'MOJO1423005A18081124', 'Credit', '4ebf17f2f6f04f5d8207d1c67266c431', 'tomato', '1', 'adityabelhekar@gmail.com', '350'),
(15, 'MOJO1423005A18081124', 'Credit', '4ebf17f2f6f04f5d8207d1c67266c431', 'apple', '1', 'adityabelhekar@gmail.com', '100'),
(16, 'MOJO1423005A18081124', 'Credit', '4ebf17f2f6f04f5d8207d1c67266c431', 'capcicum', '1', 'adityabelhekar@gmail.com', '190'),
(17, 'MOJO1423O05A18081126', 'Credit', '1619baa2f7d4436591adf8f530d2c59c', 'apple', '1', 'vivekk@gmail.com', '100'),
(18, 'MOJO1424205A95962028', 'Credit', 'c7b59e8c181f46178ee3c2dc8afd5224', 'apple', '3', 'adityabelhekar@gmail.com', '300'),
(19, 'MOJO1424205A95962028', 'Credit', 'c7b59e8c181f46178ee3c2dc8afd5224', 'apple', '3', 'adityabelhekar@gmail.com', '300'),
(20, 'MOJO1424205A95962028', 'Credit', 'c7b59e8c181f46178ee3c2dc8afd5224', 'apple', '3', 'adityabelhekar@gmail.com', '300');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `progress` int(11) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `name`, `image`, `price`, `quantity`, `address`, `username`, `progress`, `seen`) VALUES
(33, 'fruit', 'mango', 'image/Fruits.jpg', 350, 12, 'vivek', 'admin', 2, 0),
(44, 'fruit', 'Kiwi', 'image/kiwi.jpg', 120, 150, 'Lodha', 'vivekk@gmail.com', 2, 0),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 35, 'sd', 'vivekk@gmail.com', 2, 0),
(46, 'fruit', 'banna', 'image/pexels-kio-1093038.jpg', 100, 20, 'wsd', 'vivekk@gmail.com', 2, 0),
(47, 'vegetable', 'capcicum', 'image/capcicim.jpg', 190, 120, 'qwsdf', 'pratikshelar@gmail.com', 2, 0),
(48, 'vegetable', 'peas', 'image/peas.jpg', 500, 12, 'aSZdxfcv', 'pratikshelar@gmail.com', 2, 0),
(49, 'vegetable', 'tomato', 'image/tomato.jpg', 350, 35, 'yui', 'pratikshelar@gmail.com', 2, 0),
(50, 'vegetable', 'conflower', 'image/conflower.jpg', 190, 12, 'sd', 'pratikshelar@gmail.com', 2, 0),
(51, 'grains', 'wheat', 'image/wheat1.jpg', 500, 13, 'qwsdf', 'pratikshelar@gmail.com', 2, 0),
(52, 'grains', 'rice', 'image/rice.jpg', 500, 12, 'aSZdxfcv', 'pratikshelar@gmail.com', 2, 0),
(53, 'grains', 'rice flex', 'image/rice-flex.jpg', 100, 120, 'yui', 'pratikshelar@gmail.com', 2, 0),
(54, 'grains', 'shorgum', 'image/sorghum.jpg', 500, 120, 'qwsdf', 'pratikshelar@gmail.com', 2, 0),
(55, 'flower', 'rose', 'image/rose.jpg', 500, 120, 'wsd', 'vivekk@gmail.com', 2, 0),
(56, 'flower', 'marigold', 'image/marigold.jpg', 350, 35, 'e', 'vivekk@gmail.com', 2, 0),
(57, 'flower', 'sunflower', 'image/sunflower.jpg', 500, 20, 'wsd', 'vivekk@gmail.com', 2, 0),
(58, 'flower', 'night queen', 'image/night.jpg', 100, 12, 'sd', 'vivekk@gmail.com', 2, 0),
(59, 'vegetable', 'ladyfinger', 'image/night.jpg', 500, 35, 'wsd', 'vivekk@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_final`
--

CREATE TABLE `product_final` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_final`
--

INSERT INTO `product_final` (`id`, `type`, `name`, `image`, `price`, `quantity`, `address`, `username`) VALUES
(43, 'fruit', 'apple', 'image/apple.jpg', 100, 93, 'shivshanti', 'vivekk@gmail.com'),
(44, 'fruit', 'Kiwi', 'image/kiwi.jpg', 120, 143, 'Lodha', 'vivekk@gmail.com'),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 33, 'sd', 'vivekk@gmail.com'),
(46, 'fruit', 'banna', 'image/pexels-kio-1093038.jpg', 100, 20, 'wsd', 'vivekk@gmail.com'),
(47, 'vegetable', 'capcicum', 'image/capcicim.jpg', 190, 107, 'qwsdf', 'pratikshelar@gmail.com'),
(48, 'vegetable', 'peas', 'image/peas.jpg', 500, 11, 'aSZdxfcv', 'pratikshelar@gmail.com'),
(49, 'vegetable', 'tomato', 'image/tomato.jpg', 350, 32, 'yui', 'pratikshelar@gmail.com'),
(50, 'vegetable', 'conflower', 'image/conflower.jpg', 190, 10, 'sd', 'pratikshelar@gmail.com'),
(51, 'grains', 'wheat', 'image/wheat1.jpg', 500, 9, 'qwsdf', 'pratikshelar@gmail.com'),
(52, 'grains', 'rice', 'image/rice.jpg', 500, 12, 'aSZdxfcv', 'pratikshelar@gmail.com'),
(53, 'grains', 'rice flex', 'image/rice-flex.jpg', 100, 120, 'yui', 'pratikshelar@gmail.com'),
(54, 'grains', 'shorgum', 'image/sorghum.jpg', 500, 120, 'qwsdf', 'pratikshelar@gmail.com'),
(55, 'flower', 'rose', 'image/rose.jpg', 500, 119, 'wsd', 'vivekk@gmail.com'),
(56, 'flower', 'marigold', 'image/marigold.jpg', 350, 24, 'e', 'vivekk@gmail.com'),
(57, 'flower', 'sunflower', 'image/sunflower.jpg', 500, 20, 'wsd', 'vivekk@gmail.com'),
(58, 'flower', 'night queen', 'image/night.jpg', 100, 11, 'sd', 'vivekk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `Fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `Fname`) VALUES
(1, 'Aditya');

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `MNO` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `birthhd` date NOT NULL,
  `mail` text NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`id`, `Fname`, `LNAME`, `MNO`, `STATE`, `birthhd`, `mail`, `pass`) VALUES
(1, 'Aditya', ' Belhekar', '123456123', 'Andhra Pradesh', '2002-12-20', 'adityabelhekar@gmail.com', 'vip'),
(2, 'om', ' jadhav', '7777777777', 'Goa', '2002-10-20', 'omjadhav@gmail.com', 'om123');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(255) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `type`, `name`, `image`, `price`, `quantity`, `username`) VALUES
(43, 'fruit', 'apple', 'image/apple.jpg', 100, 100, 'adityabelhekar@gmail.com'),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 35, 'vivekk@gmail.com'),
(47, 'vegetable', 'capcicum', 'image/capcicim.jpg', 190, 120, 'adityabelhekar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_address`
--
ALTER TABLE `buyer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_buy`
--
ALTER TABLE `direct_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cash_success`
--
ALTER TABLE `payment_cash_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_success`
--
ALTER TABLE `payment_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_final`
--
ALTER TABLE `product_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `buyer_address`
--
ALTER TABLE `buyer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direct_buy`
--
ALTER TABLE `direct_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment_cash_success`
--
ALTER TABLE `payment_cash_success`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_success`
--
ALTER TABLE `payment_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product_final`
--
ALTER TABLE `product_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
