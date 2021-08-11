-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2021 at 01:42 PM
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
  `status_customer` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'รอการนำเนิดการ	',
  `date_customer` date NOT NULL,
  `id_sett` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id_conn`, `id_customer`, `id_shop`, `status_shop`, `date_shop`, `status_customer`, `date_customer`, `id_sett`) VALUES
(1, 4, 1, 'ยอมรับ', '2021-01-28', 'รับสินค้าแล้ว', '2021-01-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_o` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `nameProduct` varchar(250) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `name_size` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_o`, `id_order`, `id_customer`, `id_shop`, `nameProduct`, `image`, `price`, `date`, `name_size`) VALUES
(1, 1, 4, 1, 'ชุดสุดคุ้ม', 'icon-food.png', 800, '2021-01-28', 'เล็ก');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id_ostory` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_set` int(10) NOT NULL,
  `name_food` varchar(240) NOT NULL,
  `price` int(10) NOT NULL,
  `size` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id_ostory`, `id_shop`, `id_customer`, `id_set`, `name_food`, `price`, `size`, `date`) VALUES
(1, 1, 4, 1, 'ชุดสุดคุ้ม', 800, 'เล็ก', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_p` int(10) NOT NULL,
  `id_cuss` int(10) NOT NULL,
  `id_shopsp` int(10) NOT NULL,
  `id_orderhistory` int(10) NOT NULL,
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

INSERT INTO `payment` (`id_p`, `id_cuss`, `id_shopsp`, `id_orderhistory`, `id_con`, `P_img_cus`, `total`, `nameBang`, `date_cus`, `P_img_shop`, `date_shop`) VALUES
(1, 4, 1, 1, 1, '4.jpg', 800, 'SCB', '2021-01-25', '-', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(10) NOT NULL,
  `id_pro_shop` int(10) NOT NULL,
  `img_pro` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'icon-food.png',
  `type` varchar(250) NOT NULL,
  `nameProduct` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `info` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `id_pro_shop`, `img_pro`, `type`, `nameProduct`, `info`) VALUES
(1, 1, '700643c2cc2b0dc9d851dffc89cc3717.jpg', 'ต้ม', 'ต้มยำ', 'สูตรเด็ด'),
(2, 1, 'd378424a1a5fe632d518b0ecd60a10b9.jpg', 'ทอด', 'หมูทอด', 'สุดๆเลย'),
(4, 2, 'icon-food.png', 'ผัด', 'ผัดผักบุ้ง', 'ลุยไปเก็บในสวน'),
(5, 1, '5790e1a87b1aa746d97f3fd5cae382b2.jpg', 'ต้ม', 'ต้มจืด', 'ต้มจืดเพิ่อสุขภาพ\r\n'),
(6, 2, 'b6d981ccac4e4d731de263ab317d3c64.jpg', 'ต้ม', 'ต้มจืด', 'อร่อย'),
(9, 1, '51b0695489ac32040bcd397e953aa918.jpg', 'ของหวาน', 'บัวลอย', 'อร่อย');

-- --------------------------------------------------------

--
-- Table structure for table `product_id`
--

CREATE TABLE `product_id` (
  `Pro_id` int(10) NOT NULL,
  `Pro_id_set` int(10) NOT NULL,
  `Pro_id_pro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_id`
--

INSERT INTO `product_id` (`Pro_id`, `Pro_id_set`, `Pro_id_pro`) VALUES
(2, 2, 5),
(4, 3, 4),
(8, 1, 1),
(9, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_set`
--

CREATE TABLE `product_set` (
  `id_set` int(10) NOT NULL,
  `id_set_shop` int(10) NOT NULL,
  `name_set` varchar(250) NOT NULL,
  `price` int(10) NOT NULL,
  `size` varchar(50) NOT NULL,
  `img_set` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'food2.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_set`
--

INSERT INTO `product_set` (`id_set`, `id_set_shop`, `name_set`, `price`, `size`, `img_set`) VALUES
(1, 1, 'ชุดสุดคุ้ม', 800, 'กลาง', '-'),
(2, 1, 'ชุดสุดคุ้ม', 500, 'เล็ก', '-'),
(3, 2, 'อาหารพื้นบ้าน', 500, 'กลาง', '-');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id_shops` int(10) NOT NULL,
  `id_cus` int(10) NOT NULL,
  `nameShop` varchar(250) NOT NULL,
  `status_work` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ยังไม่เปิด',
  `img_status` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'gray.png',
  `img_shop` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Shop-icon.png	',
  `number_bank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id_shops`, `id_cus`, `nameShop`, `status_work`, `img_status`, `img_shop`, `number_bank`) VALUES
(1, 3, 'Hot pot', 'เปิดแล้ว', 'green.png	', 'Shop-icon.png	', 'xxxxxxxxxx'),
(2, 7, 'DuenDuen\r\n', 'ยังไม่เปิด	', 'gray.png	', 'Shop-icon.png	', 'xxxxxxxxxx'),
(4, 11, 'ร้านบ้านจ๊าบ', 'ยังไม่เปิด	', 'gray.png', '247dfe226ebe94bb77b4ae56228b9b00.jpg', '1234567891');

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
  `id_card_number` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '-',
  `img_id_card_number` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'dc.png',
  `tell` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `img` varchar(240) NOT NULL DEFAULT 'defined.png',
  `numhome` varchar(240) NOT NULL,
  `province` varchar(240) NOT NULL,
  `district` varchar(250) NOT NULL,
  `parish` varchar(240) NOT NULL,
  `latitude` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '-',
  `longitude` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '-',
  `Waiting_status` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'รอ',
  `have_shop` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ไม่มี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `id_card_number`, `img_id_card_number`, `tell`, `status`, `img`, `numhome`, `province`, `district`, `parish`, `latitude`, `longitude`, `Waiting_status`, `have_shop`) VALUES
(2, 'Admin', '25d55ad283aa400af464c76d713c07ad', 'Admin@gmail.com', 'Admin', '-', '-', '-', '-', '1', 'defined.png', '-', '-', '-', '-', '-', '-', 'รอ', 'ไม่มี'),
(3, 'shop', '25f9e794323b453885f5181f1b624d0b', 'shop@gmail.com', 'shop', 'ping', '2222222222222', 'c0d0f0f5fdd5b1994ce65f4cb5199087.png', '0222222222', '3', 'defined.png', '11/41', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '2424.454', '5454.545552545', 'อนุมัติ', 'มี'),
(4, 'customer', '25d55ad283aa400af464c76d713c07ad', 'Customer@gmail.com', 'Customer', 'eiei', '-', 'dc.png', '0222222222', '2', 'defined.png', '99/5858', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '-', '-', 'รอ', 'ไม่มี'),
(6, 'earth', '25d55ad283aa400af464c76d713c07ad', 'eorthlove555@hotmail.com', 'nadanai', 'kurairat', '-', 'dc.png', '0951126224', '2', 'defined.png', '99/20', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '-', '-', 'รอ', 'ไม่มี'),
(7, 'duen', '25d55ad283aa400af464c76d713c07ad', 'duen@gmail.com', 'CHEEVACHANOK ', 'SANARACH', '1234567891111', 'dc.png', '0944199076', '3', 'defined.png', '99/3', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '13.665261581012041', '100.29008040156188', 'อนุมัติ', 'มี'),
(8, 'fulk', '25d55ad283aa400af464c76d713c07ad', '614259036@webmail.npru.ac.th', 'เดชาชาญ', 'บัวแสง', '-', 'dc.png', '0888888888', '2', 'defined.png', '17', 'นครปฐม', 'เมือง', 'สะกระเทียม', '-', '-', 'รอ', 'ไม่มี'),
(9, 'phu', '25d55ad283aa400af464c76d713c07ad', '614259023@webmail.npru.ac.th', 'ภูริภัทร', 'รักคง', '-', 'dc.png', '0888888888', '2', 'defined.png', '17', 'นครปฐม', 'เมือง', 'สะกระเทียม', '-', '-', 'รอ', 'ไม่มี'),
(10, 'Nadech', '25d55ad283aa400af464c76d713c07ad', 'Nadech@gmail.com', 'ณเดชน์', 'คูกิมิยะ', '1234567891112', '750x422_872701_1585149004.png', '0343279065', '3', 'defined.png', '1', 'ขอนแก่น', 'อำเภอเมืองขอนแก่น', 'เมือง', '13.665261581012041', '1256.16541656465489', 'รอ', 'ไม่มี'),
(11, 'Jab', '25d55ad283aa400af464c76d713c07ad', 'godjab@gmail.com', 'อดิศักคิ์', 'จารุวงค์', '1234567891114', '4de92e9b68603c5ddc9b33ff699f659b.jpg', '0222222222', '3', 'defined.png', '25/20', 'สมุทสาคร', 'กระทุ่มแบน', 'ท่าไม้', '13.665261581012041', '1256.16541656465489', 'รอการนำเนิดการ', 'มี'),
(12, 'godjab', '25d55ad283aa400af464c76d713c07ad', 'jablanjer@hotmail.com', 'adisak', 'jaruwong', '-', 'dc.png', '0888888888', '2', 'defined.png', '99/20', 'สมุทรสาคร', 'กระทุ่มแบน', 'สวนหลวง', '-', '-', 'รอ', 'ไม่มี'),
(13, 'tree', '25d55ad283aa400af464c76d713c07ad', 'tree@gmail.com', 'ทรีรเดช', 'นาฤดี', '1234567891116', 'dc.png', '0343279065', '3', 'defined.png', '1', 'กาฬสินธุ์', 'เมือง', 'เมือง', '13.665261581012041', '1256.16541656465489', 'รอ', 'ไม่มี');

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
  ADD KEY `id_set` (`id_sett`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_o`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id_ostory`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_set` (`id_set`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_customer` (`id_cuss`),
  ADD KEY `id_shop` (`id_shopsp`),
  ADD KEY `payment_ibfk_4` (`id_con`),
  ADD KEY `payment_ibfk_3` (`id_orderhistory`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_pro-cus` (`id_pro_shop`);

--
-- Indexes for table `product_id`
--
ALTER TABLE `product_id`
  ADD PRIMARY KEY (`Pro_id`),
  ADD KEY `Pro_id_set` (`Pro_id_set`),
  ADD KEY `Pro_id_pro` (`Pro_id_pro`);

--
-- Indexes for table `product_set`
--
ALTER TABLE `product_set`
  ADD PRIMARY KEY (`id_set`),
  ADD KEY `id_set_shop` (`id_set_shop`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id_shops`),
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
  MODIFY `id_o` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id_ostory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_id`
--
ALTER TABLE `product_id`
  MODIFY `Pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_set`
--
ALTER TABLE `product_set`
  MODIFY `id_set` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id_shops` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `confirmation_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `confirmation_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `confirmation_ibfk_3` FOREIGN KEY (`id_sett`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD CONSTRAINT `orderhistory_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderhistory_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderhistory_ibfk_3` FOREIGN KEY (`id_set`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_cuss`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_shopsp`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`id_orderhistory`) REFERENCES `orderhistory` (`id_ostory`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_4` FOREIGN KEY (`id_con`) REFERENCES `confirmation` (`id_conn`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_pro_shop`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_id`
--
ALTER TABLE `product_id`
  ADD CONSTRAINT `product_id_ibfk_1` FOREIGN KEY (`Pro_id_pro`) REFERENCES `product` (`id_pro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_id_ibfk_2` FOREIGN KEY (`Pro_id_set`) REFERENCES `product_set` (`id_set`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_set`
--
ALTER TABLE `product_set`
  ADD CONSTRAINT `product_set_ibfk_1` FOREIGN KEY (`id_set_shop`) REFERENCES `shop` (`id_shops`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
