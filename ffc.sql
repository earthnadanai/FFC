-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2021 at 02:28 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffc`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id_conn` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `status_shop` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'รอการนำเนิดการ',
  `date_shop` date NOT NULL,
  `status_customer` varchar(240) NOT NULL,
  `date_customer` date NOT NULL,
  `id_set` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id_conn`, `id_customer`, `id_shop`, `status_shop`, `date_shop`, `status_customer`, `date_customer`, `id_set`) VALUES
(1, 4, 1, 'ยอมรับ', '2021-01-28', 'รับสินค้าแล้ว', '2021-01-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `nameProduct` varchar(250) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `id_size` int(10) NOT NULL,
  `name_size` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_order`, `id_customer`, `id_shop`, `nameProduct`, `image`, `price`, `date`, `id_size`, `name_size`) VALUES
(1, 1, 4, 1, 'ชุดสุดคุ้ม', 'icon-food.png', 800, '2021-01-28', 1, 'เล็ก');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_set` int(10) NOT NULL,
  `name_food` varchar(240) NOT NULL,
  `price` int(10) NOT NULL,
  `id_sizes` int(10) NOT NULL,
  `size` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id`, `id_shop`, `id_customer`, `id_set`, `name_food`, `price`, `id_sizes`, `size`, `date`) VALUES
(1, 1, 4, 1, 'ชุดสุดคุ้ม', 800, 1, 'เล็ก', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `id_cuss` int(10) NOT NULL,
  `id_shops` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_con` int(10) NOT NULL,
  `P_img_cus` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total` int(10) NOT NULL,
  `nameBang` varchar(250) NOT NULL,
  `date_cus` date NOT NULL,
  `P_img_shop` varchar(240) NOT NULL,
  `date_shop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `id_cuss`, `id_shops`, `id_order`, `id_con`, `P_img_cus`, `total`, `nameBang`, `date_cus`, `P_img_shop`, `date_shop`) VALUES
(1, 4, 1, 1, 1, '4.jpg', 800, 'SCB', '2021-01-25', '-', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_sett` int(10) NOT NULL,
  `id_shops` int(10) NOT NULL,
  `name_set` varchar(240) NOT NULL,
  `img_product` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'icon-food.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_sett`, `id_shops`, `name_set`, `img_product`) VALUES
(1, 1, 'ชุดสุดคุ้ม', 'icon-food.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_set`
--

CREATE TABLE `product_set` (
  `id` int(10) NOT NULL,
  `id_set` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `nameProduct` varchar(240) NOT NULL,
  `p_img` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'icon-food.png',
  `info` varchar(250) NOT NULL,
  `type` varchar(240) NOT NULL,
  `id_size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_set`
--

INSERT INTO `product_set` (`id`, `id_set`, `id_shop`, `nameProduct`, `p_img`, `info`, `type`, `id_size`) VALUES
(1, 1, 1, 'ต้มยำปลา', 'icon-food.png', 'ต้มยำปลาช่อนสูตรเด็ดทางร้าน', 'ต้ม', 1),
(2, 1, 1, 'ต้มยำไก่', 'icon-food.png', 'ต้มยำไก่สุดแซบ', 'ต้ม', 1),
(3, 1, 1, 'หูฉลามน้ำแดง', 'icon-food.png', 'หูฉลาม100ปี', 'ต้ม', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) NOT NULL,
  `id_sizes` int(10) NOT NULL,
  `name_size` varchar(240) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `id_sizes`, `name_size`, `price`) VALUES
(1, 1, 'เล็ก', 800),
(2, 1, 'กลาง', 1000),
(3, 1, 'ใหญ่', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id_shop` int(10) NOT NULL,
  `id_cus` int(10) NOT NULL,
  `nameShop` varchar(250) NOT NULL,
  `status_work` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ยังไม่เปิด',
  `img_status` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'gray.png',
  `img_shop` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Shop-icon.png	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id_shop`, `id_cus`, `nameShop`, `status_work`, `img_status`, `img_shop`) VALUES
(1, 3, 'Hot pot', 'เปิดแล้ว', 'green.png	', 'Shop-icon.png	'),
(2, 7, 'DuenDuen\r\n', 'ยังไม่เปิด	', 'gray.png	', 'Shop-icon.png	');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `N_status` varchar(240) NOT NULL,
  `id_status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `N_status`, `id_status`) VALUES
(1, 'Admin', '1'),
(2, 'Customer', '2'),
(3, 'Shop', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(240) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `id_card_number` varchar(13) NOT NULL,
  `img_id_card_number` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'dc.png',
  `tell` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `img` varchar(240) NOT NULL DEFAULT 'defined.png',
  `numhome` varchar(240) NOT NULL,
  `province` varchar(240) NOT NULL,
  `district` varchar(250) NOT NULL,
  `parish` varchar(240) NOT NULL,
  `latitude` varchar(240) NOT NULL,
  `longitude` varchar(240) NOT NULL,
  `Waiting_status` varchar(240) NOT NULL DEFAULT 'รอการนำเนิดการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `id_card_number`, `img_id_card_number`, `tell`, `status`, `img`, `numhome`, `province`, `district`, `parish`, `latitude`, `longitude`, `Waiting_status`) VALUES
(2, 'Admin', '12345678', 'Admin@gmail.com', 'Admin', '', '', '', '-', '1', 'defined.png', '', '', '', '', '', '', 'รอการนำเนิดการ'),
(3, 'shop', '123456789', 'shop@gmail.com', 'shop', 'ping', '2222222222222', '750x422_872701_1585149004.png', '0222222222', '3', 'defined.png', '11/41', 'ds', 'ds', 'ds', '2424.454', '5454.545552545', 'ยืนยันตนเรียนร้อย'),
(4, 'customer', '12345678', 'Customer@gmail.com', 'Customer', 'eiei', '4444444444444', 'dc.png', '0222222222', '2', 'defined.png', '99/5858', 'dd', 'dd', 'dd', '12.2131231', '213123.123123', 'รอการนำเนิดการ'),
(5, 'rede', '12345678', 'rede@gmail.com', 'rede', 'tutu', '5555555555555', 'dc.png', '0222222222', '2', 'defined.png', '56/555', 'das', 'ds', 'dsd', '121.516565', '541561566.4514', 'รอการนำเนิดการ'),
(6, 'earth', '12345678', 'eorthlove555@hotmail.com', 'nadanai', 'kurairat', '1234567891011', 'dc.png', '0951126224', '2', 'defined.png', '99/20', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '13.665261581012041', '100.29008040156188', 'รอการนำเนิดการ'),
(7, 'duen', '12345678', 'duen@gmail.com', 'CHEEVACHANOK ', 'SANARACH', '1234567891111', 'dc.png', '0944199076', '3', 'defined.png', '99/3', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '13.665261581012041', '100.29008040156188', 'รอการนำเนิดการ'),
(10, 'phu', '12345678', 'phurirhat007@gmail.com', 'phurirhat', 'rakkhong', '4567891234567', 'dc.png', '0888888888', '2', 'defined.png', '17', 'นครปฐม', 'เมือง', 'สะกระเทียม', '15.155456454564', '1256.16541656465489', 'รอการนำเนิดการ'),
(14, 'jab', '12345678', 'jablanjer@hotmail.com', 'adisak', 'jaruwong', '4444444444445', 'dc.png', '0615236402', '2', 'defined.png', '99/20', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '13.665261581012041', '100.29008040156188', 'รอการนำเนิดการ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`id_conn`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_set` (`id_set`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_size` (`id_size`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_set` (`id_set`),
  ADD KEY `id_sizes` (`id_sizes`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_cuss`),
  ADD KEY `id_shop` (`id_shops`),
  ADD KEY `payment_ibfk_4` (`id_con`),
  ADD KEY `payment_ibfk_3` (`id_order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_sett`),
  ADD KEY `id_shop` (`id_shops`);

--
-- Indexes for table `product_set`
--
ALTER TABLE `product_set`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_set` (`id_set`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_size` (`id_size`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sizes` (`id_sizes`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id_shop`),
  ADD KEY `id` (`id_cus`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id_conn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_sett` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_set`
--
ALTER TABLE `product_set`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id_shop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `confirmation_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `confirmation_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `confirmation_ibfk_3` FOREIGN KEY (`id_set`) REFERENCES `product` (`id_sett`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `product` (`id_sett`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`id_size`) REFERENCES `product_size` (`id_sizes`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD CONSTRAINT `orderhistory_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderhistory_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderhistory_ibfk_3` FOREIGN KEY (`id_set`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderhistory_ibfk_4` FOREIGN KEY (`id_sizes`) REFERENCES `product_size` (`id_sizes`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_cuss`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_shops`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `orderhistory` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_4` FOREIGN KEY (`id_con`) REFERENCES `confirmation` (`id_conn`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_shops`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_sett`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_set`
--
ALTER TABLE `product_set`
  ADD CONSTRAINT `product_set_ibfk_1` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_set_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `product_size` (`id_sizes`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_set_ibfk_3` FOREIGN KEY (`id_set`) REFERENCES `product_size` (`id_sizes`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
