-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 06:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'Fashion Category', '1532145104.jpg', NULL, '2018-07-20 21:51:44', '2018-07-20 21:51:44'),
(2, 'Sunglass', NULL, '1532145185.jpg', 1, '2018-07-20 21:53:05', '2018-07-20 21:53:05'),
(3, 'Household', NULL, '1532145244.jpg', NULL, '2018-07-20 21:54:04', '2018-07-20 21:54:04'),
(4, 'Tree', NULL, '1560610660.jpg', NULL, '2019-06-15 08:57:40', '2019-06-15 08:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `posts_id`, `created_at`) VALUES
(16, 'very good sir', 10, 11, '2017-09-23 03:37:55'),
(17, 'cool man ..', 10, 13, '2017-09-23 03:38:06'),
(18, 'ya interesting', 3, 13, '2017-09-23 03:38:36'),
(19, 'damm good ogran', 3, 12, '2017-09-23 03:44:02'),
(20, 'john you are right :)', 10, 11, '2017-09-23 03:44:52'),
(21, 'beautiful anita', 10, 2, '2017-09-23 03:45:18'),
(22, 'kjedb mcs keabkbeqkbfq', 10, 13, '2017-09-23 04:14:27'),
(23, 'xv vbndfv bdv dfn', 10, 11, '2017-09-23 04:14:39'),
(24, 'xfcvcv xdv dngd', 10, 10, '2017-09-23 04:18:08'),
(25, 'fd vxndv xdgn', 10, 2, '2017-09-23 04:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES
(1, 1, 3),
(2, 10, 1),
(5, 3, 11),
(6, 3, 8),
(7, 3, 17),
(8, 10, 3),
(9, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) NOT NULL,
  `date_added` varchar(100) DEFAULT current_timestamp(),
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `username`, `email`, `password`, `country`, `phone`, `city`, `user_type`, `company_name`, `date_added`, `pic`) VALUES
(51, 'Nabila', 'nabila', 'nabila@gmail.com', '123456', 'Bangladesh', 1521259850, 'dhaka', NULL, 'xyz', NULL, NULL),
(65, 'Toma', 'sabina', 'a@gmail.com', '000000', 'bangladesh', 987654321, 'dhaka', NULL, 'abc', NULL, NULL),
(66, 'Toma', 'sabina', 'a@gmail.com', '000000', 'bangladesh', 987654321, 'dhaka', NULL, 'abc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_from`, `user_to`, `conversation_id`, `msg`, `status`) VALUES
(1, 1, 3, 1, 'hello, how are you anita', 1),
(2, 10, 1, 2, 'hello hardeep whats up ?', 1),
(3, 1, 10, 2, 'i am fine, you said', 1),
(4, 3, 1, 1, 'i am fine hardeep', 1),
(5, 1, 3, 1, 'what are doing anita ?', 1),
(6, 3, 1, 1, 'i am working and litte busy, talk to you later hardeep.', 1),
(7, 10, 1, 2, 'i am also fine hardeep', 1),
(12, 1, 3, 1, 'hi anita call me later', 1),
(13, 1, 10, 2, 'hi today', 1),
(14, 1, 10, 2, 'jbada, ,a e,fbewjb', 1),
(15, 1, 3, 1, 'hi again anita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifcations`
--

CREATE TABLE `notifcations` (
  `id` int(11) NOT NULL,
  `user_logged` int(11) NOT NULL,
  `user_hero` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `note` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifcations`
--

INSERT INTO `notifcations` (`id`, `user_logged`, `user_hero`, `status`, `note`, `updated_at`, `created_at`) VALUES
(4, 9, 8, 0, 'accepted your friend request', '2017-03-14 12:13:54', '2017-03-14 05:48:22'),
(5, 3, 8, 0, 'accepted your friend request', '2017-05-15 11:31:23', '2017-03-14 05:48:58'),
(6, 1, 8, 0, 'accepted your friend request', '2017-03-14 12:13:41', '2017-03-14 05:52:04'),
(7, 11, 1, 0, 'accepted your friend request', '2017-03-14 12:13:20', '2017-03-14 05:59:47'),
(8, 3, 1, 0, 'accepted your friend request', '2017-03-27 11:18:04', '2017-03-14 06:26:42'),
(9, 10, 1, 0, 'accepted your friend request', '2017-03-20 04:50:19', '2017-03-19 23:07:58'),
(10, 12, 13, 0, 'accepted your friend request', '2017-04-11 08:01:19', '2017-04-11 12:59:10'),
(11, 13, 12, 0, 'accepted your friend request', '2017-04-11 08:02:40', '2017-04-11 13:01:31'),
(12, 3, 17, 1, 'accepted your friend request', '2017-05-08 05:30:17', '2017-05-08 05:30:17'),
(13, 3, 21, 1, 'accepted your friend request', '2017-05-08 05:30:20', '2017-05-08 05:30:20'),
(14, 3, 12, 1, 'accepted your friend request', '2017-05-08 05:30:23', '2017-05-08 05:30:23'),
(15, 3, 22, 1, 'accepted your friend request', '2017-05-08 05:30:25', '2017-05-08 05:30:25'),
(16, 1, 17, 1, 'accepted your friend request', '2017-05-08 05:52:50', '2017-05-08 05:52:50'),
(17, 1, 12, 1, 'accepted your friend request', '2017-05-08 05:52:52', '2017-05-08 05:52:52'),
(18, 1, 21, 1, 'accepted your friend request', '2017-05-08 05:52:54', '2017-05-08 05:52:54'),
(19, 1, 22, 1, 'accepted your friend request', '2017-05-08 05:52:57', '2017-05-08 05:52:57'),
(20, 1, 14, 1, 'accepted your friend request', '2017-05-08 05:52:59', '2017-05-08 05:52:59'),
(21, 9, 1, 0, 'accepted your friend request', '2017-05-09 09:03:06', '2017-05-09 03:27:12'),
(22, 9, 11, 0, 'accepted your friend request', '2017-05-15 11:33:38', '2017-05-09 03:27:14'),
(23, 9, 12, 1, 'accepted your friend request', '2017-05-09 03:27:16', '2017-05-09 03:27:16'),
(24, 9, 22, 1, 'accepted your friend request', '2017-05-09 03:27:18', '2017-05-09 03:27:18'),
(25, 9, 17, 1, 'accepted your friend request', '2017-05-09 03:27:19', '2017-05-09 03:27:19'),
(26, 11, 12, 1, 'accepted your friend request', '2017-05-15 06:06:38', '2017-05-15 06:06:38'),
(27, 1, 3, 0, 'accepted your friend request', '2017-05-17 10:07:07', '2017-05-17 04:36:44'),
(28, 3, 10, 0, 'accepted your friend request', '2017-06-12 06:27:58', '2017-06-11 23:43:09'),
(29, 1, 10, 0, 'accepted your friend request', '2017-07-04 12:38:30', '2017-06-26 00:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'hardeepphp@yahoo.com', 'tfx96wfX11Pdng2bGM5xBFoIb6oWicTsJpbIFKvB', '2017-05-18 06:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Iphone 8', 'Iphone', 'Iphone-8', 1, 10000, 1, NULL, 1, '2018-02-21 18:00:00', '2018-02-21 18:00:00'),
(2, 2, 2, 'Samsung Galaxy 2', 'Samsung GalaxySamsung GalaxySamsung Galaxy\r\n\r\nSamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung Galaxy\r\n\r\nSamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung GalaxySamsung Galaxy', 'Samsung-Galaxy-2', 0, 300, 1, NULL, 1, '2018-02-21 18:00:00', '2018-08-28 01:12:03'),
(3, 2, 2, 'Sony Camera', 'Sony Camera', 'sony-camera', 20, 100, 0, NULL, 1, '2018-07-20 23:24:30', '2018-08-28 01:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `Phone_Number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `Phone`) VALUES
(1, 'mina', 'mina@gmail.com', 1754590240);

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`id`, `full_name`, `username`, `name`, `email`, `password`, `country`, `phone`, `city`, `company_name`, `user_type`, `date_added`) VALUES
(0, 'mishu', 'mishu', 'karim', 'm@gmail.com', '123456', 'bangladesh', 1746679378, 'dhaka', 'abc', 'admin', '0'),
(2, 'Rahim', 'rahim', 'rahim', 'rahim@gmail.com', '000000', 'bangladesh', 1746789345, 'dhaka', 'abc', 'user', '09-5-2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `Phone`) VALUES
(1, 'tasnim', 'tasnim', 't@gmail.com', 1754590240),
(2, 'anjum', 'mishu', 'a@gmail.com', 1754590247);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `address`, `type`, `city`, `country`, `company_name`) VALUES
(1, '', 'mishu', 'mishu@gmail.com', '123', '', 'test', '', '', ''),
(2, '', 'anjum', 'anjum@gmail.com', '456', '', 'text', '', '', ''),
(3, 'Anjum', 'anjum', 'anjum@gmail.com', '123456', 'Demra', 'Spacialist', 'Dhaka', 'Bangladesh', 'abc'),
(4, 'mina', 'mina', 'mina@gmail.com', '123456', 'Demra', 'user', 'Dhaka', 'Bangladesh', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `profile_img` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userId`, `username`, `password`, `type`, `name`, `dept`, `profile_img`, `cgpa`) VALUES
(31, 'Mishu', '123456', 'user', 'MISHU,ANJUM ARA', 'Manager', '1616837174.png', ''),
(33, 'anjum', '123456', 'admin', 'ANJUM ARA', 'Manager', '1616837771.png', ''),
(34, 'toma', '123456', 'user', 'Toma', 'CSE', '1616840359.png', ''),
(35, 'test', '0000009', 'user', 'Mila', 'CSE', '1617807001.png', '3.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifcations`
--
ALTER TABLE `notifcations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notifcations`
--
ALTER TABLE `notifcations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
