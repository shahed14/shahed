-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 أغسطس 2023 الساعة 10:00
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affiliatemarketing`
--

-- --------------------------------------------------------

--
-- بنية الجدول `affiliate performance`
--

CREATE TABLE `affiliate performance` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `conversions` decimal(10,2) NOT NULL,
  `earnings` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `affiliate performance`
--

INSERT INTO `affiliate performance` (`id`, `affiliate_id`, `clicks`, `conversions`, `earnings`, `created_at`, `updated_at`) VALUES
(11, 2, 30, '10.00', 150, '2023-06-01 22:58:14', '0000-00-00 00:00:00'),
(12, 1, 50, '12.00', 200, '2023-06-07 22:58:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `affiliates`
--

CREATE TABLE `affiliates` (
  `id` int(11) NOT NULL,
  `affiliate_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `affiliate_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `affiliates`
--

INSERT INTO `affiliates` (`id`, `affiliate_name`, `email`, `country`, `ref_code`, `created_at`, `affiliate_points`) VALUES
(2, 'ahmad', 'ahmad@gmail.com', 'Gaza', '', '0000-00-00 00:00:00', 0),
(3, 'sara', 'sara@gmail.com', 'Gaza', '', '0000-00-00 00:00:00', 0),
(5, 'seham', 'seham@gmail.com', 'Gaza', '', '0000-00-00 00:00:00', 0),
(12, 'samy', 'samy@gmail.com', 'Gaza', '', '0000-00-00 00:00:00', 0),
(13, 'sahar', 'sahar@gmail.com', 'palestine', '', '2023-07-27 21:57:57', 10),
(14, 'mahammed', 'moh@gmail.com', 'palestine', '', '2023-07-27 22:07:31', 0),
(15, 'hamad', 'hamad@gmail.com', 'palestine', '', '2023-07-27 23:24:40', 0),
(16, 'amany', 'amany@gmail.com', 'palestine', '', '2023-07-28 00:15:54', 0),
(17, 'susan', 'sus@gmail.com', 'palestine', '', '2023-07-28 09:27:40', 0),
(25, 'duaa', 'duaa@gmail.com', 'palestine', '', '2023-07-28 10:54:27', 0),
(26, 'walaa', 'walaa@gmail.com', 'palestine', 'REFwalaa3476', '2023-07-28 11:04:24', 20),
(28, 'alaa', 'alaa@gmail.com', 'palestine', 'REFalaa3004', '2023-07-28 11:20:35', 50),
(29, 'aya', 'aya@gmail.com', 'palestine', 'REFaya4303', '2023-07-29 14:09:29', 0),
(30, 'samaa', 'samaa@gmail.com', 'Gaza', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `affiliate_payments`
--

CREATE TABLE `affiliate_payments` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `affiliate_payments`
--

INSERT INTO `affiliate_payments` (`id`, `affiliate_id`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-06-08', 100, '2023-06-10 23:07:08', '2023-06-10 23:07:08'),
(2, 2, '2023-06-20', 200, '2023-06-21 23:07:08', '2023-06-21 23:07:08');

-- --------------------------------------------------------

--
-- بنية الجدول `affiliate_products`
--

CREATE TABLE `affiliate_products` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `commission_percentage` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `affiliate_products`
--

INSERT INTO `affiliate_products` (`id`, `affiliate_id`, `product_id`, `commission_percentage`, `created_at`) VALUES
(1, 3, 18, '10.00', '2023-06-21 18:07:02');

-- --------------------------------------------------------

--
-- بنية الجدول `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(100) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `commission_rate` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `campaign`
--

INSERT INTO `campaign` (`id`, `campaign_name`, `affiliate_id`, `start_date`, `end_date`, `commission_rate`) VALUES
(1, 'summer sale', 1, '2023-06-01', '2023-06-30', '10.00'),
(2, 'Holiday promo', 2, '2023-06-15', '2023-06-20', '12.00');

-- --------------------------------------------------------

--
-- بنية الجدول `campaign performance`
--

CREATE TABLE `campaign performance` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `conversions` int(11) NOT NULL,
  `total_visitors` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `campaign performance`
--

INSERT INTO `campaign performance` (`id`, `campaign_id`, `affiliate_id`, `clicks`, `conversions`, `total_visitors`) VALUES
(1, 1, 2, 20, 10, '30.00'),
(2, 2, 1, 15, 8, '30.00');

-- --------------------------------------------------------

--
-- بنية الجدول `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(111, 'electrons'),
(112, 'home equipment'),
(114, 'pets&suppliments'),
(115, 'jewelery'),
(116, 'makeup');

-- --------------------------------------------------------

--
-- بنية الجدول `clicks`
--

CREATE TABLE `clicks` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `earnings` int(11) NOT NULL,
  `click_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `clicks`
--

INSERT INTO `clicks` (`id`, `affiliate_id`, `product_id`, `earnings`, `click_date`) VALUES
(1, 5, 2, 100, '2023-06-08'),
(2, 5, 2, 100, '2023-06-09'),
(3, 28, 1, 500, '2023-07-18'),
(4, 28, 2, 1000, '2023-07-20');

-- --------------------------------------------------------

--
-- بنية الجدول `conversions`
--

CREATE TABLE `conversions` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `earning_id` int(11) NOT NULL,
  `conversion_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `notifications`
--

INSERT INTO `notifications` (`id`, `affiliate_id`, `date`, `message`, `created_at`, `updated_at`) VALUES
(1, 5, '2023-06-02', 'New promotions available', '2023-06-15 14:22:12', '2023-06-15 14:22:12'),
(2, 28, '2023-07-15', 'Dear [alaa],\r\n\r\nCongratulations! You have successfully referred a new user who just made a purchase using your referral link.', '2023-07-15 09:44:24', '2023-07-16 09:44:24'),
(3, 28, '2023-07-21', 'You have earned 10 points for this successful referral. Keep up the good work!', '2023-07-21 09:44:24', '2023-07-21 09:44:24');

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `commission_rate` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `offers`
--

INSERT INTO `offers` (`id`, `name`, `description`, `commission_rate`, `start_date`, `end_date`, `campaign_id`, `category_id`) VALUES
(1, 'offer1', 'lazorde jewelery', '12.00', '2023-06-25', '2023-06-28', 2, 115),
(2, 'offer2', 'lots of home equipments with an excellent prices', '10.00', '2023-06-28', '2023-06-30', 1, 112),
(3, 'offer3', 'cat,dogs food', '11.00', '2023-06-01', '2023-06-05', 2, 114);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `order_date`, `status`, `user_id`, `affiliate_id`) VALUES
(1, 'shahedkord', '2023-06-15', 'processed', 2, 0),
(2, 'ahmad', '2023-06-10', 'shipped', 5, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `payments`
--

INSERT INTO `payments` (`id`, `affiliate_id`, `payment_date`, `payment_amount`) VALUES
(1, 5, '2023-06-10', 200),
(2, 5, '2023-06-11', 150),
(3, 28, '2023-07-16', 500),
(4, 28, '2023-07-21', 1000);

-- --------------------------------------------------------

--
-- بنية الجدول `payouts`
--

CREATE TABLE `payouts` (
  `id` int(11) NOT NULL,
  `affiliate_name` varchar(100) NOT NULL,
  `earnings` decimal(10,2) NOT NULL,
  `payout_arrangment` varchar(50) NOT NULL,
  `payout_method` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `payouts`
--

INSERT INTO `payouts` (`id`, `affiliate_name`, `earnings`, `payout_arrangment`, `payout_method`, `status`) VALUES
(1, '1001', '60.00', 'weekly', 'check', 'approved'),
(2, '1002', '100.00', 'weekly', 'bank transfer', 'pending'),
(3, 'sahar', '160.00', 'monthly', 'bank_transfer', 'approved');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category_id`) VALUES
(1, 'makeup set', 100, 'node pallet', 0),
(2, 'mabile', 700, 'samsung note10', 111),
(3, 'tv samsung ', 1000, 'samsung tv 2020', 111);

-- --------------------------------------------------------

--
-- بنية الجدول `referral_statistics`
--

CREATE TABLE `referral_statistics` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `referral_link` varchar(255) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `signups` int(11) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `referral_statistics`
--

INSERT INTO `referral_statistics` (`id`, `affiliate_id`, `referral_link`, `clicks`, `signups`, `created_at`) VALUES
(1, 28, 'http://localhost/lastSOOKY/eCommerceSite-php/product.php?id=97&affiliate_id=28&ref_code=REFalaa3004', 2, 2, '2023-07-28'),
(2, 28, 'http://localhost/lastSOOKY/eCommerceSite-php/product.php?id=97&affiliate_id=28&ref_code=REFalaa3004', 3, 2, '2023-07-26');

-- --------------------------------------------------------

--
-- بنية الجدول `referral_traffic`
--

CREATE TABLE `referral_traffic` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `traffic_source` varchar(100) NOT NULL,
  `number_of_visits` int(11) NOT NULL,
  `conversions` int(11) NOT NULL,
  `bounce_rate` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `referral_traffic`
--

INSERT INTO `referral_traffic` (`id`, `affiliate_id`, `traffic_source`, `number_of_visits`, `conversions`, `bounce_rate`) VALUES
(1, 1, 'social media', 500, 50, '0.10'),
(2, 2, 'Organic Search', 1000, 100, '0.25'),
(3, 1, 'paid Ads', 750, 75, '0.13');

-- --------------------------------------------------------

--
-- بنية الجدول `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `order_date` date NOT NULL,
  `commission` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `sales`
--

INSERT INTO `sales` (`id`, `affiliate_id`, `product_id`, `campaign_id`, `start_date`, `end_date`, `order_date`, `commission`, `quantity`, `revenue`) VALUES
(111, 2, 15, 1, '2023-06-03', '2023-06-15', '2023-06-08', '10', 5, 300),
(112, 1, 18, 2, '2023-06-15', '2023-06-30', '2023-06-20', '15', 10, 800);

-- --------------------------------------------------------

--
-- بنية الجدول `support_resources`
--

CREATE TABLE `support_resources` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `support_resources`
--

INSERT INTO `support_resources` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'affiliate_guide', 'http://example.com/guide', '2023-06-01 23:08:55', '2023-06-01 23:08:55'),
(2, 'FAQ', 'http://example.com/faq', '2023-06-02 23:08:55', '2023-06-02 23:08:55');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `ref_code` varchar(255) NOT NULL DEFAULT 'C0D217',
  `user_code` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `role` varchar(50) NOT NULL DEFAULT 'affiliate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `ref_code`, `user_code`, `role`) VALUES
(1, 'shahed', 'shahed@gmail.com', 1111, 'C0D217', 'current_timestamp()', 'admin'),
(2, 'ahmad', 'ahmad@gmail.com', 2222, 'C0D217', '2023-06-26 20:05:33', 'affiliate'),
(30, 'samy', 'samy@gmail.com', 9876, 'C0D217', '2023-06-29 14:19:27', 'affiliate'),
(31, 'ali', 'ali@gmail.com', 2147483647, 'C0D217', '2023-07-13 18:51:18', 'admin'),
(32, 'sahar', 'sahar@gmail.com', 0, 'REFsahar3527', 'USERsahar2228', 'affiliate'),
(33, 'mahammed', 'moh@gmail.com', 33333336, 'REFmahammed9306', 'USERmahammed3543', 'affiliate'),
(34, 'hamad', 'hamad@gmail.com', 0, 'REFhamad1104', 'USERhamad3746', 'affiliate'),
(35, 'amany', 'amany@gmail.com', 0, 'REFamany6766', 'USERamany5354', 'affiliate'),
(36, 'susan', 'sus@gmail.com', 0, 'REFsusan1149', 'USERsusan7552', 'affiliate'),
(43, 'walaa', 'walaa@gmail.com', 0, 'REFwalaa7061', 'USER0043', 'affiliate'),
(46, 'alaa', 'alaa@gmail.com', 0, 'REFalaa3004', 'USER0046', 'affiliate'),
(47, 'aya', 'aya@gmail.com', 12345678, 'REFaya4303', 'USER0047', 'affiliate'),
(48, 'samaa', 'samaa@gmail.com', 2147483647, 'C0D217', '2023-07-31 16:46:45', 'affiliate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliate_products`
--
ALTER TABLE `affiliate_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `conversions`
--
ALTER TABLE `conversions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `earning_id` (`earning_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_statistics`
--
ALTER TABLE `referral_statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliate_id` (`affiliate_id`);

--
-- Indexes for table `support_resources`
--
ALTER TABLE `support_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `affiliate_products`
--
ALTER TABLE `affiliate_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conversions`
--
ALTER TABLE `conversions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `referral_statistics`
--
ALTER TABLE `referral_statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_resources`
--
ALTER TABLE `support_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `affiliate_products`
--
ALTER TABLE `affiliate_products`
  ADD CONSTRAINT `affiliate_products_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`),
  ADD CONSTRAINT `affiliate_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- القيود للجدول `clicks`
--
ALTER TABLE `clicks`
  ADD CONSTRAINT `clicks_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`),
  ADD CONSTRAINT `clicks_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- القيود للجدول `conversions`
--
ALTER TABLE `conversions`
  ADD CONSTRAINT `conversions_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`),
  ADD CONSTRAINT `conversions_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `conversions_ibfk_3` FOREIGN KEY (`earning_id`) REFERENCES `earnings` (`id`);

--
-- القيود للجدول `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`);

--
-- القيود للجدول `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`id`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- القيود للجدول `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`);

--
-- القيود للجدول `referral_statistics`
--
ALTER TABLE `referral_statistics`
  ADD CONSTRAINT `referral_statistics_ibfk_1` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliates` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
