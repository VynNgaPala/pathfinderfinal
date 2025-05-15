-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 04:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pafinder`
--
CREATE DATABASE IF NOT EXISTS `pafinder` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pafinder`;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `jobs`
--

TRUNCATE TABLE `jobs`;
--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `title`, `description`, `location`, `salary`, `created_at`) VALUES
(1, 2, 'abc', 'cfd', 'east blue', '10000 beli', '2025-05-15 19:39:16'),
(2, 2, 'waaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', '200billion pesos', '2025-05-15 19:48:35'),
(3, 2, 'crew ni blackbeard', 'ako budoy', 'east blue', '10000 beli', '2025-05-15 21:11:03'),
(4, 2, 'wow nagana ', 'nagana sya', 'lamao', 'sanpablo11', '2025-05-15 21:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employer','client') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'delfin lorenz', 'lorenz@gmail.com', '$2y$10$RX7P1bz5lKFJGC7qTK3DLuY5PoW1unTZz6QndHBl26YxYJRRjnKAq', 'client', '2025-05-15 04:49:06'),
(2, 'lolrnez', 'lolrenz@gmail.com', '$2y$10$W/DOwXlOpvLl7alxU3JM.ORy8DTyi9uFRK.ZzezL/gJwqDK7o1Fce', 'employer', '2025-05-15 05:07:43'),
(3, 'lorenz2', 'start@gmail.com', '$2y$10$2zOynKd3QRRy/4H6PsFcmO97fJU1PAfOkFmzTn6pMIjsidBJ5i.X2', 'client', '2025-05-15 05:26:39'),
(4, 'lorenz trin', 'lmao@gmail.com', '$2y$10$zjNd.6ySmBwOyYuBkPMVnuunu5jYFJ3yZlBbDykZ28wT4I6hFIKri', 'admin', '2025-05-15 14:07:00'),
(8, 'waa', 'tungtung@gmail.com', '$2y$10$DTNwrScQSHXJ6Raby/Jxh./D4I4vEOjFKlwZrcLR2MgYkHfuUbV1a', 'admin', '2025-05-15 14:10:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
