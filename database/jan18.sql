-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 04:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakenewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `Product_Id` int(11) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `Image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`Product_Id`, `product_cat`, `Price`, `Image`) VALUES
(26, 1, '5000', 'uploads/6538b00c2dd71_c1.jpg'),
(27, 1, '2500', 'uploads/6538b01d7541f_c2.jpg'),
(28, 2, '2500', 'uploads/6538b036506a3_c1.jpg'),
(29, 1, '2500', 'uploads/6538bb1ea8ca5_c3.jpeg'),
(30, 1, '5000', 'uploads/6538bb2ae52cf_c4.jpg'),
(31, 3, '5000', 'uploads/6538da977d47c_c1.jfif'),
(32, 1, '6000', 'uploads/656cbd877885b_c5.jpg'),
(33, 1, '5000', 'uploads/656cbda5e7452_c7.jpg'),
(34, 3, '15000', 'uploads/656cbe0b5b5bb_c4.jpg'),
(35, 3, '16500', 'uploads/656cbe2d125d9_c8.jfif'),
(36, 3, '25000', 'uploads/656cbe449e9d6_c6.jpg'),
(37, 3, '17500', 'uploads/656cbe6f7bce4_c5.jpg'),
(38, 3, '15500', 'uploads/656cbe8616cca_c7.png'),
(39, 5, '15000', 'uploads/656cbead390d1_c8.jfif'),
(40, 5, '16000', 'uploads/656cbec0c6aad_c3.jpg'),
(41, 5, '12500', 'uploads/656cbedc38b63_c5.jpg'),
(42, 5, '13000', 'uploads/656cbeeb2a9cb_c4.jpeg'),
(43, 5, '14500', 'uploads/656cbefbec1f3_c7.jpg'),
(44, 5, '13500', 'uploads/656cbf14007f7_c2.jpg'),
(45, 2, '10000', 'uploads/656cbfe047bdf_c2.jpeg'),
(46, 2, '12000', 'uploads/656cbff03d4bd_c5.jpg'),
(47, 2, '12500', 'uploads/656cbfff74203_c6.jpg'),
(48, 2, '13500', 'uploads/656cc01464315_c3.jpg'),
(49, 2, '7000', 'uploads/656cc022df106_c4.jpg'),
(50, 4, '9000', 'uploads/656cc0436b99e_c1.jpg'),
(51, 4, '5500', 'uploads/656cc064ce125_c8.jpg'),
(52, 4, '7000', 'uploads/656cc0744406f_c7.jpg'),
(53, 4, '10000', 'uploads/656cc086b09b1_c6.jpg'),
(54, 4, '9500', 'uploads/656cc09b17ba8_c2.jpg'),
(55, 4, '8500', 'uploads/656cc0adc50c3_c5.jpg'),
(56, 1, '4500', 'uploads/65701f26aeb7e_c4.jpg'),
(57, 3, '5000', 'uploads/657035b36611f_c1.jfif'),
(58, 5, '5600', 'uploads/65832de694531_c12.jpg'),
(59, 1, '6700', 'uploads/65833151392c0_c14.jpg'),
(60, 1, '5500', 'uploads/6583361aa1f14_c18.jpg'),
(61, 1, '5000', 'uploads/6583a134b9013_cake7.jpg'),
(62, 3, '6000', 'uploads/6583e89e52ec1_c16.jpg'),
(63, 2, '6800', 'uploads/6583eaa6e3ae5_cake13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Birthday'),
(2, 'Anniversary'),
(3, 'Wedding'),
(4, 'Christmas'),
(5, 'Engagement');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` int(11) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Customer_Name`, `Address`, `Email`, `Phone_Number`, `Registration_Date`, `Password`) VALUES
(7, 'sadini', 'laksewana', 'sadinirashmika@gmail.com', 123456789, '2023-09-21', 'qwer1234'),
(8, 'sadini', 'new town', 'sadinirashmika@gmail.com', 764561231, '2023-09-22', '1234tyuii'),
(9, 'sadini ', 'laksewana', 'hjk22@gmail', 764561231, '2023-09-30', '123cvbn'),
(13, 'user', 'abcd', 'user@gmail.com', 711234567, '2023-10-24', '1234'),
(14, 'chandi podirathna', 'kuruwita, rathnapura', 'chandi@gmail.com', 768908675, '2023-12-04', 'chandi'),
(15, 'menaka lakchani', 'matara', 'menaka@gmail.com', 763456789, '2023-12-12', 'menaka'),
(16, 'thameera gamage', 'rathnapura', 'thameera@gmail.com', 768976543, '2023-12-04', 'thameera'),
(17, 'nalani priyanthi', 'hakmana', 'nalani@gmail.com', 712345678, '2023-12-06', 'nalani'),
(18, 'sunil pathirana', 'kaluthara', 'sunil@gmail.com', 765678976, '2023-12-04', 'sunil'),
(19, 'medhani udeshika', 'newtown', 'medhani@gmail.com', 761234567, '2023-12-07', 'medhani'),
(20, 'piyumi perera', 'kaluthara', 'piyumi@gamil.com', 712345678, '2023-12-07', 'piyumi'),
(21, 'supipi', 'kaluthara', 'supipi@gamil.com', 768498765, '2023-12-06', '1234'),
(28, 'sawani', 'galle', 'sawani@gmail.com', 765676543, '2023-12-21', 'sawani'),
(29, 'amandi', 'galle', 'amandi@gmail.com', 765675654, '2023-12-21', 'ama'),
(30, 'sadaru', 'kandy', 'sadaru@gmail.com', 765678765, '2023-12-21', 'sadaru'),
(31, 'madara', 'matara', 'madara@gmail.com', 767654565, '2023-12-21', 'madara'),
(32, 'Anuradha', 'Kuliyapitiya', 'anuradhae@wyb.ac.lk', 718878045, '2023-12-21', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `custom_orders`
--

CREATE TABLE `custom_orders` (
  `Custom_Order_Id` int(11) NOT NULL,
  `Customer_Id` int(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Order_Date` date NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Delivery_Time` time NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Flavor` varchar(255) NOT NULL,
  `Weight` decimal(5,2) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Wish` text DEFAULT NULL,
  `price` varchar(50) NOT NULL DEFAULT 'Pending',
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `custom_orders`
--

INSERT INTO `custom_orders` (`Custom_Order_Id`, `Customer_Id`, `Address`, `Phone_Number`, `Order_Date`, `Delivery_Date`, `Delivery_Time`, `Category`, `Flavor`, `Weight`, `Image`, `Wish`, `price`, `status`) VALUES
(4, 13, 'abcd', '711234567', '2023-12-01', '2023-12-06', '18:09:00', 'Engagement', 'Chocalate', 2.00, '6569b77d515fa_cake29.jpg', 'Happy Birthday', '2500', 'Accepted'),
(5, 13, 'abcd', '711234567', '2023-12-03', '2023-12-07', '00:03:00', 'Anniversary', 'Eggless', 2.00, '656c054e34e0c_cake28.jpg', 'Happy Birthday', '5000', 'Accepted'),
(8, 14, 'kuruwita, rathnapura', '768908675', '2023-12-03', '2023-12-13', '12:29:00', 'Christmas', 'Fruit', 2.50, '656cb5de826cc_c6.jpg', 'Merry Christmas', '5500', 'Accepted'),
(9, 15, 'matara', '763456789', '2023-12-03', '2023-12-12', '13:45:00', 'Birthday', 'Butter', 1.50, '656cb70db10e1_c6.jpg', 'Happy Birthday Thara', '7000', 'Accepted'),
(10, 16, 'rathnapura', '768976543', '2023-12-03', '2023-12-20', '15:00:00', 'Anniversary', 'Chocalate', 2.00, '656cb7c49edc7_c2.jpeg', 'Happy Anniversary Love Birds', '8000', 'Accepted'),
(11, 17, 'hakmana', '712345678', '2023-12-03', '2023-12-07', '19:30:00', 'Wedding', 'Chocalate', 2.00, '656cb863c5f11_c3.jpg', 'Happy Wedded Life', '12500', 'Accepted'),
(12, 18, 'kaluthara', '765678976', '2023-12-03', '2023-12-08', '16:30:00', 'Birthday', 'Butter', 2.50, '656cb902c2522_c4.jpg', 'Happy Birthday Cutiee', '9000', 'Accepted'),
(13, 19, 'newtown', '761234567', '2023-12-03', '2023-12-09', '10:00:00', 'Engagement', 'Eggless', 1.50, '656cb98de674b_c6.jpg', 'Happy Engagement Day', '15000', 'Accepted'),
(14, 13, 'abcd', '711234567', '2023-12-06', '2023-12-08', '11:37:00', 'Anniversary', 'Eggless', 2.00, '65700fdaef939_cake20.jpg', 'happy  anniversary ', '6000', 'Accepted'),
(15, 13, 'abcd', '711234567', '2023-12-06', '2023-12-09', '12:41:00', 'Christmas', 'Chocalate', 2.00, '65701eab33b19_c3.jpg', 'Merry Christmas', '5000', 'Accepted'),
(16, 21, 'kaluthara', '768498765', '2023-12-06', '2023-12-08', '15:14:00', 'Anniversary', 'Fruit', 2.00, '657034614b770_c2.jpeg', 'asdsfgg', '6000', 'Accepted'),
(17, 23, 'matara', '765678546', '2023-12-20', '2023-12-25', '12:30:00', 'Wedding', 'Butter', 3.00, '65831ee31b41e_c6.jpg', 'Happy Wedded Life', '7000', 'Accepted'),
(22, 29, 'galle', '765675654', '2023-12-20', '2023-12-25', '14:50:00', 'Christmas', 'Butter', 2.00, '6583309471a1c_c8.jpg', 'Merry Christmas', '6000', 'Accepted'),
(23, 30, 'kandy', '765678765', '2023-12-20', '2023-12-24', '16:30:00', 'Christmas', 'Butter', 2.00, '6583356661fad_c6.jpg', 'Merry Christmas', '8000', 'Accepted'),
(24, 31, 'matara', '767654565', '2023-12-21', '2023-12-25', '10:50:00', 'Birthday', 'Butter', 2.00, '6583a07819ebc_c6.jpg', 'Happy Birthday', '4500', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `message` varchar(255) NOT NULL,
  `rating` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `name`, `email`, `message`, `rating`) VALUES
(1, 13, 'Pubudu ravindika', 'pubudu@gmail.com', 'I absolutely loved the cake! The ordering process was easy, the delivery was on time, and the cake looked and tasted amazing. Will definitely order again!', 3),
(3, 13, 'Chamoda sathsarani', 'chamoda@gmail.com', 'The cake itself was delicious, but I had a bit of confusion during the online ordering process. It would be helpful to have more clarity on the customization options. Overall, great cake!', 4),
(4, 13, 'Onali vihanga', 'onali@gmail.com', 'I\'m disappointed with the late delivery. The cake was supposed to arrive for a special occasion, and it arrived much later than expected. The taste was good, but the timing was crucial for me.', 2),
(5, 13, 'Kasun perera', 'kasun@gmail.com', 'The website is user-friendly, but I encountered a bug during the payment process. The payment didn\'t go through smoothly, and it took a couple of tries to complete the order. Please check for technical issues.', 3),
(6, 13, 'medhani ', 'medhani@gmail.com', 'sdffdfa', 5),
(7, 21, 'supipi', 'supipi@gamil.com', 'dhdggdjfjf', 4),
(8, 23, 'malith', 'malith@gmail.com', 'good. very tasty', 3),
(9, 25, 'dulani', 'dulani@gmail.com', 'very tasty', 4),
(10, 27, 'kasun', 'kasun@gmail.com', 'good', 4),
(11, 28, 'sawani', 'sawani@gmail.com', 'very tasty', 4),
(12, 29, 'amandi', 'amandi@gmail.com', 'I really like it.', 5),
(13, 30, 'sadaru', 'sadaru@gmail.com', 'I really love it. Thank you so much. ', 5),
(14, 31, 'madara', 'madara@gmail.com', 'I really love it', 5),
(15, 32, 'Anuradha', 'anuradhae@wyb.ac.lk', 'Delicious Cakes. Excellent Service.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_details`
--

CREATE TABLE `inventory_details` (
  `Stock_Id` int(11) NOT NULL,
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(255) NOT NULL,
  `Available_Qty` int(11) NOT NULL,
  `Last_Stock_Received_Date` date NOT NULL,
  `Supplier_Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_new`
--

CREATE TABLE `order_new` (
  `Order_Id` int(100) NOT NULL,
  `Product_Id` int(100) NOT NULL,
  `Customer_Id` int(100) NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Delivery_Time` time NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Flavor` varchar(100) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Weight` decimal(5,2) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Order_Date` date NOT NULL,
  `price` int(100) NOT NULL,
  `Wish` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_new`
--

INSERT INTO `order_new` (`Order_Id`, `Product_Id`, `Customer_Id`, `Delivery_Date`, `Delivery_Time`, `Category`, `Address`, `Flavor`, `Phone_Number`, `Weight`, `Image`, `Order_Date`, `price`, `Wish`, `status`) VALUES
(10, 26, 13, '2023-12-06', '18:13:00', 'Birthday', 'abcd', 'Eggless', '711234567', 2.00, 'uploads/6538b00c2dd71_c1.jpg', '2023-12-02', 10000, 'Happy Birthday', 'Accepted'),
(11, 29, 13, '2023-12-06', '20:24:00', 'Birthday', 'abcd', 'Chocalate', '711234567', 2.00, 'uploads/6538bb1ea8ca5_c3.jpeg', '2023-12-02', 5000, 'Happy Birthday', 'Accepted'),
(12, 30, 19, '2023-12-08', '13:30:00', 'Birthday', 'newtown', 'Chocalate', '761234567', 1.50, 'uploads/6538bb2ae52cf_c4.jpg', '2023-12-03', 7500, 'Happy Birthday Maya', 'Accepted'),
(13, 54, 20, '2023-12-26', '14:30:00', 'Christmas', 'kaluthara', 'Butter', '712345678', 1.00, 'uploads/656cc09b17ba8_c2.jpg', '2023-12-03', 9500, 'Merry Christmas', 'Accepted'),
(14, 51, 13, '2023-12-09', '11:41:00', 'Christmas', 'abcd', 'Fruit', '711234567', 2.00, 'uploads/656cc064ce125_c8.jpg', '2023-12-06', 11000, 'Merry Christmas', 'Pending'),
(15, 33, 13, '2023-12-08', '12:38:00', 'Birthday', 'abcd', 'Chocalate', '711234567', 2.00, 'uploads/656cbda5e7452_c7.jpg', '2023-12-06', 10000, 'fssgs', 'Accepted'),
(16, 26, 21, '2023-12-08', '15:12:00', 'Birthday', 'kaluthara', 'Eggless', '768498765', 1.50, 'uploads/6538b00c2dd71_c1.jpg', '2023-12-06', 7500, 'sfghjkkg', 'Accepted'),
(17, 51, 21, '2023-12-24', '15:25:00', 'Christmas', 'kaluthara', 'Fruit', '768498765', 2.50, 'uploads/656cc064ce125_c8.jpg', '2023-12-06', 13750, '', 'Accepted'),
(18, 46, 23, '2023-12-24', '12:30:00', 'Anniversary', 'matara', 'Chocalate', '765678546', 2.00, 'uploads/656cbff03d4bd_c5.jpg', '2023-12-20', 24000, 'Happy Anniversary', 'Accepted'),
(19, 30, 24, '2023-12-24', '12:30:00', 'Birthday', 'kuliyapitiya', 'Chocalate', '767656786', 2.00, 'uploads/6538bb2ae52cf_c4.jpg', '2023-12-20', 10000, 'Happy Birthday', 'Accepted'),
(20, 30, 25, '2023-12-24', '12:30:00', 'Birthday', 'matara', 'Chocalate', '767654534', 2.00, 'uploads/6538bb2ae52cf_c4.jpg', '2023-12-20', 10000, 'Happy Birthday ', 'Accepted'),
(21, 27, 27, '2023-12-23', '16:30:00', 'Birthday', 'matara', 'Chocalate', '767897654', 3.00, 'uploads/6538b01d7541f_c2.jpg', '2023-12-20', 7500, 'Happy Birthday', 'Accepted'),
(23, 34, 29, '2023-12-23', '23:49:00', 'Wedding', 'galle', 'Chocalate', '765675654', 2.00, 'uploads/656cbe0b5b5bb_c4.jpg', '2023-12-20', 30000, 'Happy Wedded Life', 'Accepted'),
(24, 30, 30, '2023-12-24', '14:30:00', 'Birthday', 'kandy', 'Chocalate', '765678765', 1.00, 'uploads/6538bb2ae52cf_c4.jpg', '2023-12-20', 5000, 'Happy Birthday ', 'Accepted'),
(25, 39, 31, '2023-12-24', '10:30:00', 'Engagement', 'matara', 'Chocalate', '767654565', 1.00, 'uploads/656cbead390d1_c8.jfif', '2023-12-21', 15000, 'Happy Engagement Day', 'Accepted'),
(26, 27, 13, '2023-12-24', '14:55:00', 'Birthday', 'abcd', 'Chocalate', '711234567', 4.00, 'uploads/6538b01d7541f_c2.jpg', '2023-12-21', 10000, 'Happy Birthday', 'Accepted'),
(27, 27, 13, '2023-12-25', '13:02:00', 'Birthday', 'abcd', 'Eggless', '711234567', 4.00, 'uploads/6538b01d7541f_c2.jpg', '2023-12-21', 10000, 'Happy Birthday', 'Accepted'),
(28, 34, 13, '2023-12-25', '16:13:00', 'Wedding', 'abcd', 'Chocalate', '711234567', 2.00, 'uploads/656cbe0b5b5bb_c4.jpg', '2023-12-21', 30000, 'Happy Wedded Life', 'Accepted'),
(29, 26, 13, '2023-12-24', '16:22:00', 'Birthday', 'abcd', 'Chocalate', '711234567', 2.00, 'uploads/6538b00c2dd71_c1.jpg', '2023-12-21', 10000, 'Happy Birthday', 'Accepted'),
(30, 33, 32, '2023-12-25', '16:45:00', 'Birthday', 'Kuliyapitiya', 'Eggless', '718878045', 2.00, 'uploads/656cbda5e7452_c7.jpg', '2023-12-21', 10000, 'Happy Birthday Nangi', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cus`
--

CREATE TABLE `payment_cus` (
  `PayCus_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_cus`
--

INSERT INTO `payment_cus` (`PayCus_Id`, `Customer_Id`, `Order_Id`, `Payment_Date`, `Amount`) VALUES
(6, 8, 9, '2023-09-23', 7220),
(7, 8, 9, '2023-10-25', 7220);

-- --------------------------------------------------------

--
-- Table structure for table `payment_sup`
--

CREATE TABLE `payment_sup` (
  `PaySup_Id` int(11) NOT NULL,
  `Supplier_Id` int(11) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_sup`
--

INSERT INTO `payment_sup` (`PaySup_Id`, `Supplier_Id`, `Payment_Date`, `Amount`) VALUES
(3, 4, '2023-09-23', 5100),
(4, 7, '2023-09-29', 1234),
(5, 3, '2023-09-23', 520);

-- --------------------------------------------------------

--
-- Table structure for table `purchased_inventory`
--

CREATE TABLE `purchased_inventory` (
  `Material_Id` int(11) NOT NULL,
  `Supplier_Id` int(11) NOT NULL,
  `Material_Name` varchar(255) NOT NULL,
  `Stock_Quantity` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchased_inventory`
--

INSERT INTO `purchased_inventory` (`Material_Id`, `Supplier_Id`, `Material_Name`, `Stock_Quantity`) VALUES
(1, 2, 'sugar', '400'),
(2, 2, 'sugar', '400'),
(3, 4, 'chocolate powder', '500 kg'),
(4, 5, 'chocolate powder', '120g');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_Id` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Review_Id`, `Rating`, `Comment`) VALUES
(1, 0, 'asfdghghgffnn'),
(2, 0, 'dfsfbcvbnvnjhjjjfhfgbgcbcv'),
(3, 0, 'ffsdgfdhgffjhj'),
(4, 0, 'cvmbkcjijididjidjgidf'),
(5, 0, ''),
(6, 0, 'bhnm');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Sales_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Sales_Id`, `Order_Id`, `Category`, `Weight`, `Price`) VALUES
(1, 5, 'Engagement', '3kg', 'Engagement'),
(2, 3, 'Christmas', '2kg', 'Christmas');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_Id` int(11) NOT NULL,
  `Supplier_Name` varchar(255) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_Id`, `Supplier_Name`, `Phone_Number`, `Email`, `Address`, `ingredients`) VALUES
(6, 'supplier', 764561231, 'asdf@qwer', 'No.12, Newtown,Rathnapura', 'Chocolate'),
(7, 'namal', 765678765, 'namal@gmail.com', 'kuliyapitiya', 'butter'),
(8, 'perera', 767897654, 'perera@gmail.com', 'matara', 'sugar'),
(9, 'fernando', 768765432, 'fernando@gmail.com', 'kandy', 'eggs');

-- --------------------------------------------------------

--
-- Table structure for table `used_inventory`
--

CREATE TABLE `used_inventory` (
  `Id` int(11) NOT NULL,
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(255) NOT NULL,
  `Reduced_Quantity` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `used_inventory`
--

INSERT INTO `used_inventory` (`Id`, `Material_Id`, `Material_Name`, `Reduced_Quantity`) VALUES
(1, 3, 'chocolate powder', '400g'),
(2, 4, 'sugar', '400g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_item`
--
ALTER TABLE `add_item`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `custom_orders`
--
ALTER TABLE `custom_orders`
  ADD PRIMARY KEY (`Custom_Order_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `inventory_details`
--
ALTER TABLE `inventory_details`
  ADD PRIMARY KEY (`Stock_Id`),
  ADD KEY `Material_Id` (`Material_Id`),
  ADD KEY `Supplier_Id` (`Supplier_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_Id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `order_new`
--
ALTER TABLE `order_new`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `payment_cus`
--
ALTER TABLE `payment_cus`
  ADD PRIMARY KEY (`PayCus_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `payment_sup`
--
ALTER TABLE `payment_sup`
  ADD PRIMARY KEY (`PaySup_Id`);

--
-- Indexes for table `purchased_inventory`
--
ALTER TABLE `purchased_inventory`
  ADD PRIMARY KEY (`Material_Id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_Id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Sales_Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `used_inventory`
--
ALTER TABLE `used_inventory`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_item`
--
ALTER TABLE `add_item`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `custom_orders`
--
ALTER TABLE `custom_orders`
  MODIFY `Custom_Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inventory_details`
--
ALTER TABLE `inventory_details`
  MODIFY `Stock_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_new`
--
ALTER TABLE `order_new`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment_cus`
--
ALTER TABLE `payment_cus`
  MODIFY `PayCus_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment_sup`
--
ALTER TABLE `payment_sup`
  MODIFY `PaySup_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchased_inventory`
--
ALTER TABLE `purchased_inventory`
  MODIFY `Material_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Sales_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `used_inventory`
--
ALTER TABLE `used_inventory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory_details`
--
ALTER TABLE `inventory_details`
  ADD CONSTRAINT `inventory_details_ibfk_1` FOREIGN KEY (`Material_Id`) REFERENCES `purchased_inventory` (`Material_Id`),
  ADD CONSTRAINT `inventory_details_ibfk_2` FOREIGN KEY (`Supplier_Id`) REFERENCES `supplier` (`Supplier_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
