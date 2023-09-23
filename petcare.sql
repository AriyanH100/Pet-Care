-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 03:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`fname`, `lname`, `email`, `address`, `pnum`, `pid`, `type`, `gender`, `breed`, `details`, `image`) VALUES
('Saman', 'Sarker', 'saman@gmail.com', 'Monipuripara', '01512312310', 1, 'Dog', 'Male', '', 'Broken Limb', 0),
('Rohan', 'Khan', 'rohan@gmail.com', 'Lalmatia', '01222222222', 2, 'Dog', 'Female', 'Beagle', '', 0),
('Mansur', 'Mahi', 'mansur@gmail.com', 'Dhanmondi', '01836921475', 3, 'Cat', 'Male', '', 'Potty Trained', 0),
('Pira', 'Khan', 'pira@gmail.com', 'Shahbagh', '01635789654', 4, 'Cat', 'Female', '', '', 0),
('Simrin', 'Haque', 'simrin@gmail.com', 'Kathalbagan', '017896542398', 5, 'Rabbit', 'Male', '', '', 0),
('Johan', 'Kabir', 'johan@gmail.com', 'Mirpur', '01856974123', 6, 'Dog', 'Male', 'Labrador Retriever', '', 0),
('Rupok', 'Islam', 'rupok@gmail.com', 'Banglamotor', '01558782236', 7, 'Cat', 'Female', '', '', 0),
('Rogib', 'Afswer', 'rogib@gmail.com', 'Uttara', '01711236985', 8, 'Dog', 'Male', '', 'Newborn dog so must be handled carefully', 0);

-- --------------------------------------------------------

--
-- Table structure for table `foodloc`
--

CREATE TABLE `foodloc` (
  `name` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `loc` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodloc`
--

INSERT INTO `foodloc` (`name`, `phone`, `addr`, `loc`, `id`) VALUES
('Bunny Goods & Foods', '01738929919', '70 Rd No # 21, Dhaka 1212', 'banani', 2),
('Paws pet shop BD', '01874637273', '88 Rd No # 23, Dhaka 1212', 'banani', 3),
('Mew Mew Shop BD', '019738473827', 'In front of Banani Club Field, 27 Rd No 18, Dhaka 1212', 'banani', 4),
('Treat 4 tail', '01783984839', 'Plot No: 58, Block - B, Road No: 21, Banani, Dhaka, 1213', 'banani', 5),
('Rifat Enterprise', '01973828374', '166-170 Rd No. 8, Dhaka', 'bash', 6),
('Purs n grrz', '01973827382', 'Plot 218, 219 Rd No. 4, Dhaka 1229', 'bash', 7),
('Pet Bangla', '017839485839', 'House no: 88, 89/2 Rd No. 12A, Dhaka 1209', 'dmd', 8),
('SB Pet Shop', '01746374658', '1 Rd No. 11A, Dhaka 1209', 'dmd', 9),
('Pet food & Accessories', '018493967584', '43 Rd 10/A, Dhaka 1205', 'dmd', 10),
('Nahian Bird Store', '019748387284', 'Rd No. 11A, Dhaka 1205', 'dmd', 11),
('Pet Elements BD', '01973874838', 'House #22, Road #4/A, Block #C,Sector#15, Dhaka', 'uttara', 12),
('Pet Products BD', '01874837483', '30-35 Avenue 9, Dhaka 1230', 'uttara', 13),
('Bunny Foods ', '01984738273', '29 Tajmahal Rd, Dhaka', 'mdpr', 14),
('Tomoz Pet Care', '01983748392', '33/3, Tajmahal Road, Block-C, Mohammadpur, Dhaka 1207', 'mdpr', 15),
('Paws Pet shop', '01674839283', '32 Rd No 43, Dhaka 1212', 'gulshan', 16),
('Pet Bangla', '01974839283', '14 Road No 13C, Dhaka 1212', 'gulshan', 17),
('Encore pet food', '018647389480', 'F26, Rd No. 1, Dhaka 1216', 'mirpur', 18),
('Pet Food Corner', '01984738920', 'House 6, Block C Avenue 5, Dhaka 1216', 'mirpur', 19),
('Pet Elements BD', '01974839848', 'House No. 2, KA/10 Mymensingh Ln, Dhaka 1000', 'shahbagh', 20);

-- --------------------------------------------------------

--
-- Table structure for table `foodorderdetails`
--

CREATE TABLE `foodorderdetails` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorderdetails`
--

INSERT INTO `foodorderdetails` (`fname`, `lname`, `email`, `address`, `pnum`, `pmethod`, `pid`, `quantity`, `pet`, `approval`, `fid`) VALUES
('Ariyan', 'Hossain', 'ariyan.hossain@g.bracu.ac.bd', 'Poribagh', '01852810143', 'Paypal', '12', '1', 'dog', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groom`
--

CREATE TABLE `groom` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groom`
--

INSERT INTO `groom` (`id`, `type`, `price`, `pet`) VALUES
(1, 'Bathing', '500', 'dog'),
(2, 'Brushing', '250', 'dog'),
(3, 'Nail Trimming', '200', 'dog'),
(4, 'Ear Cleaning', '200', 'dog'),
(5, 'Haircut', '400', 'dog'),
(6, 'Flea treatment', '500', 'dog'),
(7, 'Bathing', '400', 'cat'),
(8, 'Brushing', '200', 'cat'),
(9, 'Nail Trimming', '200', 'cat'),
(10, 'Ear Cleaning', '200', 'cat'),
(11, 'Hair Cut', '300', 'cat'),
(12, 'Flea Treatment', '500', 'cat'),
(13, 'Dandruff Treatment', '250', 'dog'),
(15, 'Dandruff Treatment', '200', 'cat'),
(16, 'Sanitary Clips', '150', 'dog'),
(17, 'Sanitary Clips', '150', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `groomorderdetails`
--

CREATE TABLE `groomorderdetails` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groomorderdetails`
--

INSERT INTO `groomorderdetails` (`fname`, `lname`, `email`, `address`, `pnum`, `pmethod`, `pid`, `pet`, `approval`, `gid`) VALUES
('Rafa', 'Nowrin', 'rafa@gmail.com', 'Lalbagh', '01741091111', 'Paypal', '2', 'dog', 'Yes', 1),
('Johan', 'Kabir', 'johan@gmail.com', 'Mohammadpur', '01652810140', 'Paypal', '10', 'cat', 'Yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medloc`
--

CREATE TABLE `medloc` (
  `name` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `loc` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medloc`
--

INSERT INTO `medloc` (`name`, `phone`, `addr`, `loc`, `id`) VALUES
('tjyrtjtryj', 'dyjtyjtyj', 'dtyyjtdyjt', 'banani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medorderdetails`
--

CREATE TABLE `medorderdetails` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medorderdetails`
--

INSERT INTO `medorderdetails` (`fname`, `lname`, `email`, `address`, `pnum`, `pmethod`, `pid`, `quantity`, `pet`, `approval`, `mid`) VALUES
('Rafa', 'Nowrin', 'rafa@gmail.com', 'Lalbagh', '01741091111', 'Paypal', '20', '2', 'dog', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE `orderfood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`id`, `name`, `price`, `pet`, `stock`) VALUES
(8, 'Drools Powerbites Apple Flavour', '350 ', 'dog', 'Available'),
(9, 'Drools Powerbites Blueberry Flavour', '350', 'dog', 'Available'),
(10, 'Drools Powerbites Strawberry Flavour', '350', 'dog', 'Available'),
(11, 'Drools Powerbites Banana Flavour', '360', 'dog', 'Available'),
(12, 'Drools Absolute Calcuim Bone', '350', 'dog', 'Available'),
(13, 'Kennel Dog food White Chewy Bones', '219', 'dog', 'Available'),
(14, 'Goodies Dog Food Milky Bone', '599', 'dog', 'Available'),
(15, 'Goodies Dog Food Energy Treat Single Twist', '319', 'dog', 'Available'),
(16, 'Felicia No Grain Cat Food Can Chicken with Tuna', '130', 'cat', 'Available'),
(17, 'Jungle Adult Cat Food Salmon', '250', 'cat', 'Available'),
(18, 'Jungle Adult Cat Food Salmon', '600', 'cat', 'Available'),
(19, 'Jungle Cat Food Beef Can', '160', 'cat', 'Available'),
(20, 'Felicia No Grain Cat Food Can Salmon in Gravy', '130', 'cat', 'Available'),
(21, 'SmartHeart Cat Cann Food Finest Tuna Mouses with Goat Milk For Kitten\r\n\r\n', '135', 'cat', 'Available'),
(22, 'Purina Friskies Meaty Grills Adult Cat Food', '609', 'cat', 'Available'),
(23, 'Hikari Marine-S Fish Food', '399', 'fish', 'Available'),
(24, 'Hikari Marine-A Fish Food', '649', 'fish', 'Available'),
(25, 'Hikari Fancy Guppy Fish Food', '375', 'fish', 'Available'),
(26, 'Hikari Sinking Wafers Fish Food', '399', 'fish', 'Available'),
(27, 'Hikari Sinking Wafers Fish Food', '359', 'fish', 'Available'),
(28, 'Hikari Sinking Wafers Fish Food', '359', 'fish', 'Available'),
(29, 'Hikari Algae Wafers Fish Food', '349', 'fish', 'Available'),
(30, 'Hikari First Bites Fish Food', '259', 'fish', 'Available'),
(31, 'Gold Wings Egg Food', '200', 'bird', 'Available'),
(32, 'Gold Wings Premium Egg Food', '300', 'bird', 'Available'),
(33, 'Quality Gold Micro pellet Sachet', '70', 'bird', 'Available'),
(34, 'SmartHeart Mynah Bird Food', '119', 'bird', 'Available'),
(35, 'FruitBlend Flavour Bird Food', '430', 'bird', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `ordermed`
--

CREATE TABLE `ordermed` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermed`
--

INSERT INTO `ordermed` (`id`, `name`, `price`, `pet`, `stock`) VALUES
(1, 'PetVit Power Multivitamin tablets', '160', 'dog', 'Available'),
(2, 'GoHeal Spray', '250', 'dog', 'Available'),
(3, 'FurroLadia Allergy Immune Treats', '220', 'dog', 'Available'),
(4, 'Kennel Cough ', '250', 'dog', 'Available'),
(5, 'Kennel Cough', '300', 'cat', 'Available'),
(6, 'NexGuard Spectra Flea treatment', '400', 'dog', 'Available'),
(7, 'BraVecto Flea Treatment', '400', 'dog', 'Available'),
(8, 'SkyCal Calcium Tablets', '340', 'dog', 'Available'),
(9, 'ParaShield Plus', '330', 'dog', 'Available'),
(10, 'PetArmor Plus ', '650', 'dog', 'Available'),
(11, 'PetArmor Plus', '640', 'cat', 'Available'),
(12, 'Kick RAPE-CAT ', '440', 'cat', 'Available'),
(13, 'Revolution Plus ', '500', 'cat', 'Available'),
(14, 'Cat Star', '320', 'cat', 'Available'),
(15, 'Coco Kat Milk Replacer', '340', 'cat', 'Available'),
(16, 'BestLife4Pets Kidney Support', '740', 'cat', 'Available'),
(17, 'Rid-All General aid', '300', 'fish', 'Available'),
(18, 'Rid-All Anti-chlorine', '300', 'fish', 'Available'),
(19, 'Tropical capsules', '500', 'fish', 'Available'),
(20, 'Rid-All anti ich', '340', 'fish', 'Available'),
(21, '4in1 Tablets', '340', 'bird', 'Available'),
(22, 'Amoxicillin 10%', '740', 'bird', 'Available'),
(23, 'Johnson\'s Vit-min Drops', '550', 'bird', 'Available'),
(24, 'VatFarm Essential tablets', '450', 'bird', 'Available'),
(25, 'Amtyl Powder', '440', 'bird', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `fname`, `address`) VALUES
(1, 'admin', 'admin', 'Admin', 'Admin'),
(2, 'ariyan@gmail.com', '0000', 'Ariyan', 'Poribagh'),
(3, 'admin', '1234', 'wertwet', 'wetwetwe');

-- --------------------------------------------------------

--
-- Table structure for table `vetbook`
--

CREATE TABLE `vetbook` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `sdate` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `loc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vetbook`
--

INSERT INTO `vetbook` (`id`, `name`, `email`, `addr`, `sdate`, `phone`, `loc`) VALUES
(4, 'ergerger', 'ee@gmail.com', 'gegergerg', '2022-04-13', 'e45763734', 'Hannan(Banani)');

-- --------------------------------------------------------

--
-- Table structure for table `vetlocation`
--

CREATE TABLE `vetlocation` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vetlocation`
--

INSERT INTO `vetlocation` (`id`, `name`, `phone`, `address`, `location`) VALUES
(1, 'Hannan', '87427237273', 'uhfguehheughfuieghfguiheh', 'banani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `foodloc`
--
ALTER TABLE `foodloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorderdetails`
--
ALTER TABLE `foodorderdetails`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `groom`
--
ALTER TABLE `groom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groomorderdetails`
--
ALTER TABLE `groomorderdetails`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `medloc`
--
ALTER TABLE `medloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medorderdetails`
--
ALTER TABLE `medorderdetails`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordermed`
--
ALTER TABLE `ordermed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetbook`
--
ALTER TABLE `vetbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetlocation`
--
ALTER TABLE `vetlocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `foodloc`
--
ALTER TABLE `foodloc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `foodorderdetails`
--
ALTER TABLE `foodorderdetails`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groom`
--
ALTER TABLE `groom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `groomorderdetails`
--
ALTER TABLE `groomorderdetails`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medloc`
--
ALTER TABLE `medloc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medorderdetails`
--
ALTER TABLE `medorderdetails`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderfood`
--
ALTER TABLE `orderfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ordermed`
--
ALTER TABLE `ordermed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vetbook`
--
ALTER TABLE `vetbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vetlocation`
--
ALTER TABLE `vetlocation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
