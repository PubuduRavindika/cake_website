-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `Product_Id` int(11) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `Image` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`Product_Id`, `product_cat`, `Price`, `Image`) VALUES
(26, 1, '5000', 'uploads/6538b00c2dd71_c1.jpg'),
(27, 1, '2500', 'uploads/6538b01d7541f_c2.jpg'),
(28, 2, '2500', 'uploads/6538b036506a3_c1.jpg'),
(29, 1, '2500', 'uploads/6538bb1ea8ca5_c3.jpeg'),
(30, 1, '5000', 'uploads/6538bb2ae52cf_c4.jpg'),
(31, 3, '5000', 'uploads/6538da977d47c_c1.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Customer_Name`, `Address`, `Email`, `Phone_Number`, `Registration_Date`, `Password`) VALUES
(7, 'sadini', 'laksewana', 'sadinirashmika@gmail.com', 123456789, '2023-09-21', 'qwer1234'),
(8, 'sadini', 'new town', 'sadinirashmika@gmail.com', 764561231, '2023-09-22', '1234tyuii'),
(9, 'sadini ', 'laksewana', 'hjk22@gmail', 764561231, '2023-09-30', '123cvbn'),
(13, 'user', 'abcd', 'user@gmail.com', 711234567, '2023-10-24', '1234');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_orders`
--

INSERT INTO `custom_orders` (`Custom_Order_Id`, `Customer_Id`, `Address`, `Phone_Number`, `Order_Date`, `Delivery_Date`, `Delivery_Time`, `Category`, `Flavor`, `Weight`, `Image`, `Wish`, `price`, `status`) VALUES
(4, 13, 'abcd', '711234567', '2023-12-01', '2023-12-06', '18:09:00', 'Engagement', 'Chocalate', '2.00', '6569b77d515fa_cake29.jpg', 'Happy Birthday', '2500', 'Accepted'),
(5, 13, 'abcd', '711234567', '2023-12-03', '2023-12-07', '00:03:00', 'Anniversary', 'Eggless', '2.00', '656c054e34e0c_cake28.jpg', 'Happy Birthday', '5000', 'Accepted'),
(6, 13, 'abcd', '711234567', '2023-12-03', '2023-12-07', '00:23:00', 'Christmas', 'Chocalate', '2.00', '656c09c1c465f_cake29.jpg', 'Happy Birthday', '1000', 'Accepted'),
(7, 13, 'abcd', '711234567', '2023-12-03', '2023-12-07', '11:42:00', 'Wedding', 'Eggless', '2.00', '656c0e44f1303_cake29.jpg', 'Happy Birthday', '1000', 'Accepted');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `name`, `email`, `message`, `rating`) VALUES
(1, 13, 'Pubudu ravindika', 'test@gmail.com', 'wddwdwd', 3),
(3, 13, 'Chamoda sathsarani', 'user@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, explicabo dolor, a ipsam accusantium repellendus, ratione accusamus est odio eos tempora. Placeat incidunt corrupti id. Rerum aliquam corrupti repellendus sed!', 4),
(4, 13, 'Onali vihanga', 'user@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, explicabo dolor, a ipsam accusantium repellendus, ratione accusamus est odio eos tempora. Placeat incidunt corrupti id. Rerum aliquam corrupti repellendus sed!', 2),
(5, 13, 'Kasun perera', 'test@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, explicabo dolor, a ipsam accusantium repellendus, ratione accusamus est odio eos tempora. Placeat incidunt corrupti id. Rerum aliquam corrupti repellendus sed!', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
-- Error reading structure for table cake.orders: #1932 - Table 'cake.orders' doesn't exist in engine
-- Error reading data for table cake.orders: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cake`.`orders`' at line 1

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_new`
--

INSERT INTO `order_new` (`Order_Id`, `Product_Id`, `Customer_Id`, `Delivery_Date`, `Delivery_Time`, `Category`, `Address`, `Flavor`, `Phone_Number`, `Weight`, `Image`, `Order_Date`, `price`, `Wish`, `status`) VALUES
(10, 26, 13, '2023-12-06', '18:13:00', 'Birthday', 'abcd', 'Eggless', '711234567', '2.00', 'uploads/6538b00c2dd71_c1.jpg', '2023-12-02', 10000, 'Happy Birthday', 'Accepted'),
(11, 29, 13, '2023-12-06', '20:24:00', 'Birthday', 'abcd', 'Chocalate', '711234567', '2.00', 'uploads/6538bb1ea8ca5_c3.jpeg', '2023-12-02', 5000, 'Happy Birthday', 'Accepted');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_Id`, `Supplier_Name`, `Phone_Number`, `Email`, `Address`) VALUES
(1, 'sarath', 764561231, 'sadinirashmika@gmail.com', 'laksewana'),
(2, 'sunil', 5679, 'asdf@qwer', 'new town');

-- --------------------------------------------------------

--
-- Table structure for table `used_inventory`
--

CREATE TABLE `used_inventory` (
  `Id` int(11) NOT NULL,
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(255) NOT NULL,
  `Reduced_Quantity` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `custom_orders`
--
ALTER TABLE `custom_orders`
  MODIFY `Custom_Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `Supplier_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Order_Id`);

--
-- Constraints for table `payment_cus`
--
ALTER TABLE `payment_cus`
  ADD CONSTRAINT `payment_cus_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Customer_Id`),
  ADD CONSTRAINT `payment_cus_ibfk_2` FOREIGN KEY (`Order_Id`) REFERENCES `order` (`Order_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
