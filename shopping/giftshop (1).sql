-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2025 at 08:18 AM
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
-- Database: `giftshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'Password@123'),
('admin2', 'Admin#7845');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pimage` varchar(50) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `pprice` varchar(50) DEFAULT NULL,
  `cemail` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pimage`, `pname`, `pprice`, `cemail`, `id`) VALUES
('p2.png', 'Mens Watch', '1500', 'vinay@gmail.com', 67),
('p2.png', 'Mens Watch', '1500', 'vinay@gmail.com', 68),
('p2.png', 'Mens Watch', '1500', 'vinay@gmail.com', 69),
('p2.png', 'Mens Watch', '1500', 'vinay@gmail.com', 70),
('p4.png', 'Red Flowers', '855', 'lokesh@gmail.com', 71),
('p2.png', 'Mens Watch', '1500', 'lokesh@gmail.com', 72),
('images (1).jpeg', 'Writing NotePad ', '899', 'joshi@gmail.com', 73),
('p8.png', 'Ring', '300', 'joshi@gmail.com', 74),
('p2.png', 'Mens Watch', '1500', 'joshi@gmail.com', 75),
('p1.png', 'Bangel', '750', 'joshi@gmail.com', 76),
('p2.png', 'Mens Watch', '1500', 'joshi@gmail.com', 77),
('p6.png', 'Flowers', '300', 'joshi@gmail.com', 78),
('p3.png', 'Teddy', '570', 'joshi@gmail.com', 79),
('p6.png', 'Flowers', '300', 'joshi@gmail.com', 80),
('p6.png', 'Flowers', '300', '', 81),
('p6.png', 'Flowers', '300', 'joshi@gmail.com', 82),
('images (1).jpeg', 'Writing NotePad ', '899', 'rithvik@gmail.com', 83),
('p4.png', 'Red Flowers', '855', 'sita@gmail.com', 84),
('p2.png', 'Mens Watch', '1500', 'radha@gmail.com', 85),
('images (1).jpeg', 'Writing NotePad ', '700', 'simran@gmail.com', 94),
('download (1).jpeg', 'Bouquet flowers mix', '1800', 'simran@gmail.com', 95),
('purse.png', 'vanity Bag', '3500', 'simran@gmail.com', 96);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryname`) VALUES
('clay'),
('minitoy'),
('things'),
('Fashion and Accessories'),
('Electronis and Gagets'),
('Home and Living'),
('Photo Frames and Albums'),
('Jewellery'),
('Home Accessories'),
('Doll'),
('Design'),
('Flowers'),
('Wanity Bags'),
('Vanity Bags'),
('Marrage Gifts'),
('Book pen');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(50) DEFAULT NULL,
  `Email Id` varchar(50) DEFAULT NULL,
  `Phone Number` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Customer Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Email Id`, `Phone Number`, `Password`, `Customer Id`) VALUES
('Abhi', 'abhi@gmail.com', '9845632145', 'Abhi*12345', 10),
('Vinay Kumar', 'vinay@gmail.com', '9845185692', 'Vinay*123', 11),
('Hema', 'hema@gmail.com', '6364572307', 'Hema*12345', 12),
('Karana', 'karana@gmail.com', '9856452115', 'Karan1234', 13),
('Karana', 'karana@gmail.com', '9856452115', 'Karan1234', 14),
('Amulya', 'amulya@gmail.com', '4589632145', 'Amul1235', 15),
('Amulya', 'amulya@gmail.com', '4589632145', 'Amul1235', 16),
('Joshi', 'joshi@gmail.com', '9651236548', 'Josh#12345', 17),
('Kesari', 'kesari@gmail.com', '7895623145', 'Kesari#12345', 18),
('Lokesh', 'lokesh@gmail.com', '9945153681', 'Lokesh#123', 19),
('Rithvik', 'rithvik@gmail.com', '7896541236', 'Rthvik#123', 20),
('Lokesh', 'lokesh@gmail.com', '7845123695', 'Lokesh@123', 21),
('Sita', 'sita@gmail.com', '7845123652', 'Sita@145', 22),
('Punda', 'punda@gmail.com', '9685452536', 'Punda#123', 23),
('Radha', 'radha@gmail.com', '8454152536', 'Radha#123', 24),
('Nanu', 'nanu@gmail.com', '9845632145', 'Nanu##13', 25),
('Lion', 'lion@gmail.com', '9845632145', 'Lion#12345', 26),
('Simran', 'simran@gmail.com', '8451525362', 'Simran#123', 27),
('Raj', 'raj@gmail.com', '7845128552', 'Raj#123456', 28);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `productname` varchar(50) DEFAULT NULL,
  `productcost` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cardtype` varchar(50) DEFAULT NULL,
  `cardnum` varchar(50) DEFAULT NULL,
  `cvv` varchar(50) DEFAULT NULL,
  `orderid` int(11) NOT NULL,
  `adminstatus` varchar(50) NOT NULL DEFAULT 'Pending',
  `pin` varchar(50) DEFAULT NULL,
  `customerstatus` varchar(50) NOT NULL DEFAULT 'Pending',
  `cemail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`productname`, `productcost`, `quantity`, `address`, `cardtype`, `cardnum`, `cvv`, `orderid`, `adminstatus`, `pin`, `customerstatus`, `cemail`) VALUES
('Ring', '300', '1', 'Dvg', 'Debit Card', '8745120', '212', 15, 'Shipped', '577222', 'Incorrect product', NULL),
('Mens Watch', '1500', '1', 'fdsf', 'Debit Card', '74168534', '122', 16, 'Delivered', '84532', 'Incorrect product', NULL),
('Teddy', '570', '5', 'dvg', 'Credit Card', '87645312.0', '564', 17, 'Packed', '845145', 'Incorrect product', NULL),
('Mens Watch', '1500', '1', 'fdsf', 'Debit Card', '875', '', 18, 'Shipped', '', 'Incorrect product', NULL),
('Mens Watch', '1500', '1', 'smg', 'Credit Card', '845', '123', 19, 'Shipped', '5777201', 'Incorrect product', NULL),
('Teddy', '570', '1', 'dsfsdsd', 'Debit Card', '175337543457', '458', 20, 'Pending', '577222', 'Pending', NULL),
('Mens Watch', '1500', '1', 'shuhgghgfhf', 'Debit Card', '858585858585', '123', 21, 'Shipped', '577888', 'Damaged', ''),
('Flowers', '300', '1', 'Blr', 'Debit Card', '856432.78465312', '125', 22, 'Cancelled', '5777201', 'Pending', 'avi@gmail.com'),
('Mens Watch', '1500', '1', 'smg', 'Debit Card', '879653120', '221', 23, 'Shipped', '845145', 'Damaged', 'abhi@gmail.com'),
('Flowers', '300', '1', 'blr', 'Debit Card', '7864532', '145', 24, 'Pending', '456232', 'Pending', 'abhi@gmail.com'),
('Flowers', '300', '2', 'Honnali', 'Debit Card', '7845412', '456', 25, 'Pending', '456232', 'Pending', 'joshi@gmail.com'),
('750', '1', 'Smg', 'Debit Card', '784512', '457', '44224245', 26, 'Pending', 'hema@gmail.com', 'Pending', ''),
('1500', '1', 'er', 'Debit Card', '784512', '785', '57720', 27, 'Pending', 'hema@gmail.com', 'Pending', ''),
('300', '1', 'gfd', 'Debit Card', '7845412', '452', '5777201', 28, 'Shipped', 'hema@gmail.com', 'Damaged', ''),
('300', '1', 'smg', 'Debit Card', '7845412', '125', '57720', 29, 'Pending', 'hema@gmail.com', 'Pending', ''),
('Ring', '300', '1', 'tgfd', 'Debit Card', '7845412', '123', 30, 'Pending', '577222', 'Pending', NULL),
('Red Flowers', '855', '1', 'blu', 'Debit Card', '784512', '125', 31, 'Shipped', '5777201', 'Incorrect product', 'joshi@gmail.com'),
('Ring', '300', '1', 'd', 'Debit Card', '7845412', '452', 32, 'Pending', '456232', 'Pending', 'joshi@gmail.com'),
('Bangel', '750', '50', 'jhj', 'Debit Card', '784512', '125', 33, 'Delivered', '845145', 'Damaged', 'joshi@gmail.com'),
('Red Flowers', '855', '1', 'honnali', 'Debit Card', '784512', '125', 34, 'Pending', '577222', 'Pending', 'joshi@gmail.com'),
('Mens Watch', '1500', '1', 'smg chwokie', 'Credit Card', '458213', '152', 35, 'Pending', '845145', 'Pending', 'kesari@gmail.com'),
('vanity Bag', '3500', '1', 'Smg ', 'Debit Card', '786412', '152', 36, 'Pending', '577222', 'Pending', 'lokesh@gmail.com'),
('Mens Watch', '1500', '1', '', 'Debit Card', '', '', 37, 'Pending', '', 'Pending', NULL),
('Flowers', '300', '1', 'hjkjhkhj', 'Debit Card', '54544', '7878787', 38, 'Pending', '5757', 'Pending', 'joshi@gmail.com'),
('Flowers', '300', '1', 'dff', 'Debit Card', 'dfs', 'f', 39, 'Pending', 'ffffffff', 'Pending', 'joshi@gmail.com'),
('Writing NotePad ', '899', '1', 'SMg', 'Debit Card', '786412', '456', 40, 'Pending', '5777201', 'Pending', 'rithvik@gmail.com'),
('Mens Watch', '1500', '1', 'dg', 'Debit Card', 'df', 'f', 41, 'Pending', 'fg', 'Pending', ''),
('Mens Watch', '1500', '1', 'smg', 'Debit Card', '784563120.', '123', 42, 'Pending', '577222', 'Pending', 'lokesh@gmail.com'),
('Bangel', '750', '1', 'smg', 'Debit Card', '7645328456312', '125', 43, 'Pending', '577222', 'Pending', 'sita@gmail.com'),
('Name Things', '549', '1', 'honalli', 'Debit Card', '8796451320.', '152', 44, 'Pending', '5777201', 'Pending', 'punda@gmail.com'),
('Mens Watch', '1500', '1', 'KHB shivamogga', 'Credit Card', '7845412', '174', 45, 'Pending', '577208', 'Pending', 'radha@gmail.com'),
('Ring', '300', '1', 'dcv', 'Debit Card', 'xczczxxz', 'cxzczx', 46, 'Shipped', 'xzc', 'Pending', 'simran@gmail.com'),
('Mens Watch', '1500', '2', 'fds', 'Debit Card', 'cvzx', 'fsz', 47, 'Delivered', 'fszxgz', 'Pending', 'simran@gmail.com'),
('Book Pen', '450', '1', 'dfd', 'Debit Card', '123456789123', '123', 48, 'Pending', '577205', 'Pending', 'raj@gmail.com'),
('Writing NotePad ', '700', '1', 'Gandinagar 4th cross shimogga', 'Credit Card', '123456781234', '785', 49, 'Pending', '577204', 'Pending', 'simran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `category` varchar(50) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `productprice` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `quantity` char(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `discount` int(5) DEFAULT NULL,
  `productid` int(10) DEFAULT NULL,
  `gst` float DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`category`, `productname`, `productprice`, `image`, `quantity`, `description`, `discount`, `productid`, `gst`, `id`) VALUES
('Photo Frames and Albums', 'Flowers', '350', 'p6.png', '55', 'img', NULL, NULL, NULL, 1),
('Electronis and Gagets', 'Mens Watch', '1500', 'p2.png', '250', 'Good quality', NULL, NULL, NULL, 2),
('Jewellery', 'Ring', '300', 'p8.png', '50', 'Pure quality', NULL, NULL, NULL, 3),
('Doll', 'Teddy', '570', 'p3.png', '300', 'Washable material', NULL, NULL, NULL, 4),
('Jewellery', 'Bangel', '750', 'p1.png', '300', 'Unique item', NULL, NULL, NULL, 5),
('Design', 'graphic photos', '450', 'logo.png', '50', 'bmbmbk', NULL, NULL, NULL, 6),
('Flowers', 'Red Flowers', '855', 'p4.png', '85', 'good', NULL, NULL, NULL, 7),
('Vanity Bags', 'vanity Bag', '3500', 'purse.png', '30', 'Pure lather more durable', NULL, NULL, NULL, 8),
('Marrage Gifts', 'Bouquet flowers mix', '1800', 'download (1).jpeg', '500', 'multi gift gather', NULL, NULL, NULL, 9),
('Book pen', 'Writing NotePad ', '700', 'images (1).jpeg', '150', 'smooth use easily write ', NULL, NULL, NULL, 10),
('Book pen', 'Book Pen', '450', 'images.jpeg', '55', 'Pure quality', NULL, NULL, NULL, 11),
('Home Accessories', 'Name Things', '549', 'show.webp', '85', 'accessorir', NULL, NULL, NULL, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pname_cemail` (`pname`,`cemail`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer Id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productname` (`productname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
