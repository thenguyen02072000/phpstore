-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2021 at 02:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role_id`, `status`) VALUES
(1, 'anhanpro2k@gmail.com', 'anhanpro01', 1, 1),
(2, 'gunney2162001@gmail.com', 'phpstore', 2, 1),
(3, 'anpro@gmail.com', '12345678a', 1, 1),
(4, 'anhanpro2k@gmail.com', 'anhanpro01', 1, 1),
(5, 'gunney147@gmail.com', 'Anhanpro0', 2, 1),
(6, 'anhanpro2k@gmail.com', 'anhanpro01', 1, 1),
(7, 'admin@gmail.com', '12345678a', 2, 1),
(8, 'manager@gmail.com', '12345678a', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Shirt'),
(2, 'Pants'),
(3, 'Sneaker'),
(5, 'T-Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `msg`) VALUES
(1, 'arsalanmughal41@yahoo.com', 'It is visible in DATABASE?'),
(2, 'anpro@gmail.com', 'Hello wrodl'),
(3, 'anhanpro2k@gmail.com', 'alo'),
(4, 'anhanpro2k@gmail.com', 'alo21'),
(5, '321', '321'),
(6, '231', '321'),
(7, '213', '231'),
(8, '', ''),
(9, '0333487982', '213'),
(10, 'anhanpro2k@gmail.com', 'alo');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `name`, `phonenumber`, `email`, `address`, `status`) VALUES
(1, 'anhanpro2k', '12345678a', 'Nguyễn Văn Thái', '0535562129', 'anpro@gmail.com', '17k/24 dương đình nghệ phường 13', 1),
(6, 'anhanpro2k2', 'anhanpro0', 'Trần Phước An', '0253561221', 'anhanpro2k2@gmail.com', '273 An Dương Vương, Q5 Tp. HCM', 1),
(7, 'anhanpro012', '12345678a', 'Trần Lê Anh Khôi', '0333487982', 'anhanpro012@gmail.com', 'Nghĩa Trang Liệt Sĩ Huyện An Minh', 1),
(8, 'customer1', '12345678a', 'Lê Văn Đạt', '0555568121', 'customer1@gmail.com', '20 Đường Số 11 Phường An Lạc, Quận Bình Tân', 1),
(9, 'customer2', '12345678a', 'Nguyễn Thị Nở', '0584208003', 'customer2@gmail.com', '207 Lê Đại Hành, Phường 13, Quận 11, Tp. HCM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `total` decimal(7,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `address`, `phonenumber`, `total`, `status`, `created_at`) VALUES
(13, 1, '17k/24 dương đình nghệ phường 13', '0333487982', '7600.00', 1, '2021-05-10 13:06:02'),
(14, 1, '17k/24 dương đình nghệ phường 13', '0333487982', '7600.00', 2, '2021-05-10 13:10:27'),
(15, 1, '207 Le Dai Hanh', '0333487982', '1225.50', 3, '2021-05-12 03:56:35'),
(16, 7, '17k/24 dương đình nghệ phường 13', '0333487982', '2000.00', 2, '2021-05-12 08:50:51'),
(17, 7, '203 duong so 11', '0333487982', '2000.00', 4, '2021-05-12 08:58:00'),
(18, 7, '17k/24 dương đình nghệ phường 13', '0333487982', '0.00', 3, '2021-05-12 09:00:59'),
(19, 1, '17k/24 dương đình nghệ phường 13', '0333487982', '219.31', 1, '2021-05-13 16:09:05'),
(21, 1, '17k/24 dương đình nghệ phường 13', '0333487982', '0.00', 2, '2021-05-13 16:10:11'),
(22, 8, '20 Đường Số 11 Phường An Lạc, Quận Bình Tân', '0333487982', '3501.73', 3, '2021-05-14 08:16:31'),
(23, 8, '20 Đường Số 11 Phường An Lạc, Quận Bình Tân', '0323456789', '822.80', 1, '2021-05-14 08:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(13, 2, 3, '1200.00'),
(13, 3, 2, '2000.00'),
(14, 2, 3, '1200.00'),
(14, 3, 2, '2000.00'),
(15, 2, 1, '1200.00'),
(15, 26, 1, '25.50'),
(16, 3, 1, '2000.00'),
(17, 3, 1, '2000.00'),
(19, 22, 2, '17.00'),
(19, 25, 1, '35.31'),
(19, 32, 2, '75.00'),
(22, 20, 9, '85.00'),
(22, 22, 5, '17.00'),
(22, 25, 8, '35.31'),
(22, 26, 5, '25.50'),
(22, 27, 10, '75.00'),
(22, 28, 9, '34.75'),
(22, 29, 7, '93.20'),
(22, 30, 10, '52.66'),
(23, 27, 3, '75.00'),
(23, 29, 4, '93.20'),
(23, 32, 3, '75.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `stockquantity` int(11) NOT NULL DEFAULT 100,
  `Status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `stockquantity`, `Status`) VALUES
(2, 'air MAX 90 WHITE CHLOROPHYLL', '1202.00', 'uploads/', 'This is good sneaker', 3, 100, 0),
(3, 'Shirt Test', '2000.00', 'uploads/alo.png', '2143214321', 1, 100, 0),
(20, 'VRG GRL Beach Locals Button Front Shirt ', '85.00', 'uploads/DSC01284_800x800.jpeg', 'Cool & chic... From weekdays to weekends, this is an everyday number! Also available in Blue, Mint & Tan.', 1, 100, 1),
(22, 'Esprit Ruffle Shirt', '17.00', 'uploads/product-01.jpeg', '●  Flowing crêpe made of LENZING™ ECOVERO™ viscose\r\n● LENZING™ ECOVERO™: viscose fibres that have been obtained from sustainable wood and pulp and come from certified and controlled sources\r\n● V-neck at the front and back\r\n● Full-length placket plus faux horn buttons\r\n● Straight cut with side slits at the hem\r\n● LENZING™ ECOVERO™ is a trademark of Lenzing AG.', 1, 100, 1),
(25, 'Herschel supply', '35.31', 'uploads/product-02.jpeg', 'The highly versatile Strand Sprout tote can be worn over the shoulder or hung from a stroller with a unique buckle design. A folding easy-wipe change mat joins convenient internal and external storage options for diapers, wipes, bottles and much more.', 2, 100, 1),
(26, 'Only Check Trouser', '25.50', 'uploads/product-03.jpeg', 'Perfect for on-the-go parents, the timeless Settlement™ Sprout backpack includes highly functional details. This versatile design features integrated storage for diapers, wipes and toys, with an easy-access folding changing mat that stows in a custom compartment.\r\n\r\n', 5, 100, 1),
(27, 'Classic Trench Coat', '75.00', 'uploads/product-04.jpeg', 'Perfect for on-the-go parents, the timeless Settlement™ Sprout backpack includes highly functional details. This versatile design features integrated storage for diapers, wipes and toys, with an easy-access folding changing mat that stows in a custom compartment.', 1, 100, 1),
(28, 'Front Pocket Jumper', '34.75', 'uploads/product-05.jpeg', 'Perfect for on-the-go parents, the timeless Settlement™ Sprout backpack includes highly functional details. This versatile design features integrated storage for diapers, wipes and toys, with an easy-access folding changing mat that stows in a custom compartment.', 5, 100, 1),
(29, 'Vintage Inspired Classic', '93.20', 'uploads/product-06.jpeg', 'Signature striped fabric liner\r\nFolding easy-wipe changing mat with reinforced mesh wing pockets\r\nOptional hook-and-loop fastened changing mat storage divider\r\nFront storage pocket\r\nSlim shoulder straps with clip-fastened webbing adjusters\r\nClassic woven label', 3, 100, 1),
(30, 'Shirt in Stretch Cotton', '52.66', 'uploads/product-07.jpeg', 'Custom striped fabric liner\r\nPadded and fleece lined 15\" laptop sleeve\r\nAdjustable drawstring closure\r\nMagnetic strap closures with metal pin clips\r\nFront pocket with hidden zipper and key clip\r\nInternal media pocket\r\nContoured shoulder straps and air mesh back padding\r\nClassic woven label', 1, 100, 1),
(31, 'Pieces Metallic Printed', '18.96', 'uploads/product-08.jpeg', 'The Herschel Retreat™ backpack is a streamlined rendition of a timeless mountaineering style, featuring a drawcord cinch closure and a strap detailed top flap.', 5, 100, 1),
(32, 'Converse All Star Hi Plimsolls', '75.00', 'uploads/product-09.jpeg', 'The Herschel Retreat™ Mid-Volume backpack is a streamlined rendition of a classic mountaineering style, featuring a drawcord cinch closure and a strap detailed top flap.', 3, 100, 1),
(33, 'Femme T-Shirt In Stripe', '25.85', 'uploads/product-10.jpeg', 'A popular mountaineering silhouette, the Herschel Little America™ backpack elevates an iconic style with modern functionality.', 5, 100, 1),
(34, 'Herschel supply', '63.16', 'uploads/product-11.jpeg', 'Our signature backpack. Made modern for everyday journeys, the Herschel Little America Mid backpack is a sized-down take on our iconic mountaineering style.', 1, 100, 1),
(35, 'Herschel supply 2', '63.15', 'uploads/product-12.jpeg', 'The Herschel Retreat™ backpack is a streamlined rendition of a timeless mountaineering style, featuring a drawcord cinch closure and a strap detailed top flap.', 3, 100, 1),
(36, 'Square Neck Back', '29.64', 'uploads/product-16.jpeg', 'The Herschel Retreat™ Mid-Volume backpack is a streamlined rendition of a classic mountaineering style, featuring a drawcord cinch closure and a strap detailed top flap.', 2, 100, 1),
(37, 'Mini Silver Mesh Watch', '86.85', 'uploads/product-15.jpeg', 'A popular mountaineering silhouette, the Herschel Little America™ backpack elevates an iconic style with modern functionality.', 3, 100, 1),
(38, 'Pretty Little Thing', '54.79', 'uploads/product-14.jpeg', 'Our signature backpack. Made modern for everyday journeys, the Herschel Little America Mid backpack is a sized-down take on our iconic mountaineering style.', 5, 100, 1),
(39, 'T-Shirt with Sleeve', '18.49', 'uploads/product-13.jpeg', 'The Herschel Retreat™ backpack is a streamlined rendition of a timeless mountaineering style, featuring a drawcord cinch closure and a strap detailed top flap.', 5, 100, 1),
(40, 'a', '2.30', 'alo', 'alo', 5, 100, 1),
(41, ' River Island skinny suit trousers in navy check', '40.00', 'uploads/23725079-1-navy.jpeg', 'High-street favourite River Island has been a go-to for decades. Known for adding signature detailing to its designs, expect to see classic looks with an RI twist from our River Island at ASOS edit. Scroll fresh loungewear and everyday jeans and T-shirts, or suit up in sharp tailoring, from smart shirts and shoes to suit jackets and trousers – just name the occasion', 2, 100, 1),
(42, ' Topman tuxedo skinny fit single breasted suit jacket with notch lapels in black', '54.40', 'uploads/24114611-1-black.jpeg', 'Bringing you the latest in men’s fashion, Topman dresses you for every occasion in your social calendar with its range of clothing, shoes and accessories. Shop our Topman at ASOS edit and slot the brand’s signature denim and basic tees into your casualwear rotation, or opt for tailored shirts and trousers for days when jeans and a T-shirt don’t quite cut it.', 1, 100, 1),
(43, ' ASOS DESIGN 90s oversized check shirt in white and pink', '28.00', 'uploads/22765651-1-white.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1),
(44, ' ASOS DESIGN regular fit linen shirt with revere collar in stone', '22.00', 'uploads/22867955-1-stone.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.\r\n\r\n', 1, 100, 1),
(45, 'COLLUSION oversized jersey shirt in with cartoon print in purple ombre pique fabric', '20.00', 'uploads/20262343-1-green.jpeg', 'A new brand for the coming-of-age generation that refuses to compromise on principle or style, COLLUSION believes clothes that celebrate self-expression and inclusivity should be the norm. It’s no surprise then that it’s linked up with six inspirational creatives to shape its first collection, which includes denim, knitwear, jersey and loads more.', 1, 100, 1),
(46, ' Selected Homme oxford shirt with short sleeves in white', '28.00', 'uploads/22668278-1-black.jpeg', 'A new brand for the coming-of-age generation that refuses to compromise on principle or style, COLLUSION believes clothes that celebrate self-expression and inclusivity should be the norm. It’s no surprise then that it’s linked up with six inspirational creatives to shape its first collection, which includes denim, knitwear, jersey and loads more.', 1, 100, 1),
(47, 'Pull&Bear shirt in bandana print in black', '19.99', 'uploads/22747441-1-multi.jpeg', 'Champions of the casual capsule wardrobe, make Pull&Bear your new must-scroll brand. With a focus on laid-back Californian style, the brand mixes grunge, sports and streetwear references to build its collections. Expect sweatshirts, T-shirts and jeans in our Pull&Bear at ASOS edit, alongside a line of accessories, shirts and jackets. Ready-to-wear trends delivered straight to your wardrobe? Enough said.', 1, 100, 1),
(48, 'Pull&Bear shirt with paint print in white', '19.99', 'uploads/22792777-1-red.jpeg', 'Champions of the casual capsule wardrobe, make Pull&Bear your new must-scroll brand. With a focus on laid-back Californian style, the brand mixes grunge, sports and streetwear references to build its collections. Expect sweatshirts, T-shirts and jeans in our Pull&Bear at ASOS edit, alongside a line of accessories, shirts and jackets. Ready-to-wear trends delivered straight to your wardrobe? Enough said.', 1, 100, 1),
(49, 'ASOS DESIGN Co-ord regular revere shirt in lemon fruit print', '25.00', 'uploads/22868139-1-white.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1),
(50, 'Pull&Bear linen shirt with grandad collar in tan', '26.00', 'uploads/22928493-1-shiftingsand.jpeg', 'Champions of the casual capsule wardrobe, make Pull&Bear your new must-scroll brand. With a focus on laid-back Californian style, the brand mixes grunge, sports and streetwear references to build its collections. Expect sweatshirts, T-shirts and jeans in our Pull&Bear at ASOS edit, alongside a line of accessories, shirts and jackets. Ready-to-wear trends delivered straight to your wardrobe? Enough said.\r\n\r\nLOOK AFTER ME\r\nMachine wash according to instructions on care label\r\n\r\nABOUT ME\r\nLightweight linen\r\nStrong, breathable fabric\r\nDries faster than cotton\r\n\r\nMain: 100% Linen.\r\n', 1, 100, 1),
(51, 'Pull&Bear linen shirt with grandad collar in light grey', '26.00', 'uploads/22937563-1-paleblue.jpeg', 'Champions of the casual capsule wardrobe, make Pull&Bear your new must-scroll brand. With a focus on laid-back Californian style, the brand mixes grunge, sports and streetwear references to build its collections. Expect sweatshirts, T-shirts and jeans in our Pull&Bear at ASOS edit, alongside a line of accessories, shirts and jackets. Ready-to-wear trends delivered straight to your wardrobe? Enough said.', 1, 100, 1),
(52, 'ASOS DESIGN Van Gogh relaxed revere shirt with artist sketch print', '28.00', 'uploads/23062297-1-white.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1),
(53, 'ASOS DESIGN regular fit standard shirt in blue satin paisley print', '25.00', 'uploads/23151020-1-blue.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1),
(54, ' ASOS DESIGN regular revere floral monochrome print', '18.00', 'uploads/23337923-1-white.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.\r\n\r\n', 1, 100, 1),
(55, ' ASOS DESIGN regular revere floral monochrome print', '18.00', 'uploads/23404432-1-hickorystri.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1),
(56, ' Abercrombie & Fitch icon logo linen shirt in white', '52.00', 'uploads/23648724-1-beige.jpeg', 'The modern Abercrombie & Fitch is the next generation of effortless all-American style. The essence of laidback sophistication with an element of simplicity, A&F sets the standard for great taste. From classic campus experiences to collecting moments while travelling, A&F brings stories of adventure and discovery to life. Confident and engaging, the Abercrombie & Fitch legacy is rooted in a heritage of quality craftsmanship and focused on a future of creative ambition', 1, 100, 1),
(57, 'COLLUSION shorts & boxy shirt with embroidery co-ord in black', '25.00', 'uploads/23982448-1-purple.jpeg', 'A new brand for the coming-of-age generation that refuses to compromise on principle or style, COLLUSION believes clothes that celebrate self-expression and inclusivity should be the norm. It’s no surprise then that it’s linked up with six inspirational creatives to shape its first collection, which includes denim, knitwear, jersey and loads more.\r\n\r\n', 1, 100, 1),
(58, 'Reclaimed Vintage inspired animal co ord', '22.00', 'uploads/24024948-1-brightwhite.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.\r\n\r\n', 1, 100, 1),
(59, ' ASOS DESIGN relaxed fit satin shirt with revere collar in black texture', '25.00', 'uploads/24114611-1-black.jpeg', 'This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in Plus and Tall. Created by us, styled by you.', 1, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `detail`) VALUES
(1, 'Manager', 'manager all system'),
(2, 'Admin', 'Admin can manager user account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_id_role` (`role_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_Username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_id_customer` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `detail_id_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_id_category` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_admin_id_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_id_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `detail_id_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `detail_id_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_id_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
