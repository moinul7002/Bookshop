-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 01:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `created_at`, `updated_at`) VALUES
(1, 'MD Zafar Iqbal', '2018-07-02 01:19:10', '2018-07-02 01:19:10'),
(2, 'Humayan Ahmed', '2018-07-02 01:20:49', '2018-07-02 01:20:49'),
(3, 'Munir Hasan', '2018-07-02 01:20:56', '2018-07-02 01:20:56'),
(4, 'Chomok Hasan', '2018-07-02 01:21:13', '2018-07-02 01:21:13'),
(8, 'Abdul Hakim', '2018-07-02 08:54:42', '2018-07-02 08:54:42'),
(9, 'Abdush Shakoor', '2018-07-02 08:54:48', '2018-07-02 08:54:48'),
(10, 'Akhtaruzzaman Ilias', '2018-07-02 08:54:54', '2018-07-02 08:54:54'),
(11, 'Al Mahmud', '2018-07-02 08:55:00', '2018-07-02 08:55:00'),
(12, 'Anisul Hoque', '2018-07-02 08:55:05', '2018-07-02 08:55:05'),
(13, 'Aly Zaker', '2018-07-02 08:55:11', '2018-07-02 08:55:11'),
(14, 'Ahsan Habib', '2018-07-02 08:55:18', '2018-07-02 08:55:18'),
(15, 'Ahmed Sofa', '2018-07-02 08:55:23', '2018-07-02 08:55:23'),
(16, 'Begum Rokeya', '2018-07-02 08:55:30', '2018-07-02 08:55:30'),
(17, 'Dilwar Khan', '2018-07-02 08:55:37', '2018-07-02 08:55:37'),
(18, 'Farah Ghuznavi', '2018-07-02 08:55:52', '2018-07-02 08:55:52'),
(19, 'Hasan Azizul Huq', '2018-07-02 08:55:58', '2018-07-02 08:55:58'),
(20, 'Humayun Azad', '2018-07-02 08:56:03', '2018-07-02 08:56:03'),
(21, 'Humayun Kabir Dhali', '2018-07-02 08:56:09', '2018-07-02 08:56:09'),
(22, 'Jahanara Imam', '2018-07-02 08:56:17', '2018-07-02 08:56:17'),
(23, 'K. Anis Ahmed', '2018-07-02 08:56:23', '2018-07-02 08:56:23'),
(24, 'Kashem Bin Abu Bakar', '2018-07-02 08:56:30', '2018-07-02 08:56:30'),
(25, 'Mir Mosharraf Hossain', '2018-07-02 08:56:37', '2018-07-02 08:56:37'),
(26, 'Munir Chowdhury', '2018-07-02 08:56:43', '2018-07-02 08:56:43'),
(27, 'Nurul Momen', '2018-07-02 08:56:50', '2018-07-02 08:56:50'),
(28, 'Nirmalendu Goon', '2018-07-02 08:56:56', '2018-07-02 08:56:56'),
(29, 'Selina Hossain', '2018-07-02 08:57:06', '2018-07-02 08:57:06'),
(30, 'Sufia Kamal', '2018-07-02 08:57:14', '2018-07-02 08:57:14'),
(31, 'Taslima Nasrin', '2018-07-02 08:57:21', '2018-07-02 08:57:21'),
(33, 'Dan Brown', '2018-07-08 12:59:17', '2018-07-08 12:59:17'),
(34, 'Fredric Backman', '2018-07-08 13:08:08', '2018-07-08 13:08:08'),
(35, 'Roald Dahl', '2018-07-08 13:08:21', '2018-07-08 13:08:21'),
(36, 'Jostein Gaarder', '2018-07-08 13:08:48', '2018-07-08 13:12:22'),
(37, 'Yashavant Kanetkar', '2018-07-10 10:07:57', '2018-07-10 10:07:57'),
(38, 'Andrew S. Tanenbaum', '2018-07-10 10:11:08', '2018-07-10 10:11:08'),
(39, 'Douglas Comer', '2018-07-10 10:23:56', '2018-07-10 10:23:56'),
(40, 'Qurban A. Memon', '2018-07-10 10:26:07', '2018-07-10 10:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_of_the_month` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book.png',
  `publication` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_price` int(191) NOT NULL,
  `book_number` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_isbn`, `book_type`, `country`, `book_title`, `book_author`, `book_description`, `feature`, `book_of_the_month`, `year`, `book_image`, `publication`, `book_price`, `book_number`, `created_at`, `updated_at`) VALUES
(9, '1333-1133-3343', 'Action and Adventure', 'Bengali', 'Rasha', 'MD Zafar Iqbal', 'It is a book written by famous author Dr. Md. Zafar Iqbal', 'Discount Offer', 'YES', '2005', '1531069346.jpg', 'Prothoma', 250, 100, '2018-07-08 11:02:26', '2018-07-10 09:26:14'),
(10, '1233-1133-5781', 'Science fiction', 'Bengali', 'Biggani Sofdor Ali\"r Moha Moha Abishkar', 'MD Zafar Iqbal', 'Test', 'Most Searched Author', NULL, '2004', '1531069733.jpeg', 'Prothoma', 300, 70, '2018-07-08 11:08:53', '2018-07-10 09:26:21'),
(11, '1233-1133-8741', 'Action and Adventure', 'Bengali', 'Brishty\"r Thikana', 'MD Zafar Iqbal', 'Test', 'Normal', NULL, '2001', '1531069812.jpeg', 'Prothoma', 250, 20, '2018-07-08 11:10:12', '2018-07-10 09:26:27'),
(12, '1233-1133-2222', 'Drama', 'Bengali', 'Amar Bondhu Rashed', 'MD Zafar Iqbal', 'Test', 'Peoples Choice', NULL, '2003', '1531069887.jpeg', 'Momo Prokash', 280, 50, '2018-07-08 11:11:27', '2018-07-10 09:26:32'),
(13, '1233-1133-1111', 'Science fiction', 'Bengali', 'Keplar Tutubi', 'MD Zafar Iqbal', 'Test', 'Normal', NULL, '2009', '1531069954.jpeg', 'Muhammad Brothers', 300, 60, '2018-07-08 11:12:34', '2018-07-10 09:26:37'),
(14, '1233-1133-1212', 'Science', 'Bengali', 'Voy Kingba Valobasa', 'MD Zafar Iqbal', 'Test', 'Peoples Choice', 'YES', '2002', '1531070014.jpeg', 'Aajkal Prokashoni', 200, 30, '2018-07-08 11:13:34', '2018-07-10 09:26:42'),
(15, '1233-1133-1280', 'Horror', 'Bengali', 'Horror', 'MD Zafar Iqbal', 'Test', 'Normal', NULL, '2008', '1531070059.jpeg', 'Shikha Prokashoni', 250, 20, '2018-07-08 11:14:19', '2018-07-10 09:26:47'),
(16, '1233-1133-2452', 'Fantasy', 'Bengali', 'Rup-Rupali', 'MD Zafar Iqbal', 'Test', 'Peoples Choice', NULL, '2010', '1531070162.jpeg', 'Prothoma', 250, 30, '2018-07-08 11:16:02', '2018-07-10 09:26:53'),
(17, '1233-1133-5678', 'Children\'s', 'Bengali', 'Dipu Number 2', 'MD Zafar Iqbal', 'Test', 'Most Searched Author', NULL, '1998', '1531070209.jpeg', 'Momo Prokash', 300, 20, '2018-07-08 11:16:49', '2018-07-10 09:26:58'),
(18, '1233-1133-3478', 'Biographies', 'Bengali', 'Ami Topu', 'MD Zafar Iqbal', 'Test', 'Normal', 'YES', '1999', '1531070254.jpeg', 'Dibboprokash', 280, 0, '2018-07-08 11:17:34', '2018-09-24 12:23:39'),
(19, '1233-1133-1282', 'Mystery', 'Bengali', 'Rongin Choshma', 'MD Zafar Iqbal', 'Test', 'Normal', NULL, '2000', '1531070302.jpeg', 'Anannya', 300, 34, '2018-07-08 11:18:22', '2018-07-10 09:27:14'),
(20, '1033-1133-3343', 'Romantic', 'Bengali', 'Ei Megh RoudroChaya', 'Humayan Ahmed', 'test', 'Normal', NULL, '2004', '1531070881.jpeg', 'Anannya', 280, 30, '2018-07-08 11:28:01', '2018-07-10 09:27:22'),
(21, '9233-1133-3343', 'Mystery', 'Bengali', 'Ami Aj kothao Jabo Na', 'Humayan Ahmed', 'Test', 'Most Searched Author', NULL, '2006', '1531070948.jpeg', 'Prothoma', 300, 100, '2018-07-08 11:29:08', '2018-07-10 09:27:28'),
(22, '1993-1133-3343', 'Romantic', 'Bengali', 'Rodonvora Ei Boshonto', 'Humayan Ahmed', 'Test', 'Normal', NULL, '2007', '1531071058.jpeg', 'Aajkal Prokashoni', 300, 36, '2018-07-08 11:30:58', '2018-07-10 09:27:38'),
(23, '1233-1133-9999', 'Fantasy', 'Bengali', 'Ponchokonna', 'Humayan Ahmed', 'Test', 'Most Searched Author', NULL, '2006', '1531071154.jpeg', 'Aajkal Prokashoni', 240, 34, '2018-07-08 11:32:34', '2018-07-10 09:27:45'),
(24, '1233-4433-3343', 'Fantasy', 'Bengali', 'Ebong Himu', 'Humayan Ahmed', 'Test', 'Most Searched Author', NULL, '2008', '1531071225.jpeg', 'Adorn Publication', 320, 23, '2018-07-08 11:33:45', '2018-07-10 09:27:52'),
(25, '1233-2233-3343', 'Fantasy', 'Bengali', 'Himu\'r Ache Jol', 'Humayan Ahmed', 'Test', 'Peoples Choice', NULL, '2009', '1531071284.jpeg', 'Aajkal Prokashoni', 270, 12, '2018-07-08 11:34:44', '2018-07-10 09:27:58'),
(28, '1333-1199-3343', 'Romantic', 'Bengali', 'Noboni', 'Humayan Ahmed', 'Test', 'Normal', 'NO', '2010', '1531075392.jpeg', 'Aajkal Prokashoni', 300, 34, '2018-07-08 12:43:12', '2018-07-10 09:28:04'),
(29, '1333-1229-3343', 'Trilogy', 'American', 'Kothao Keu Nei', 'Humayan Ahmed', 'Test', 'Normal', 'NO', '2009', '1531075852.jpeg', 'Aajkal Prokashoni', 350, 12, '2018-07-08 12:50:52', '2018-07-10 09:28:13'),
(30, '1373-1199-3343', 'Romantic', 'Bengali', 'Megher Chaya', 'Humayan Ahmed', 'Test', 'Normal', 'NO', '2011', '1531076061.jpeg', 'Aajkal Prokashoni', 280, 10, '2018-07-08 12:54:21', '2018-07-10 09:28:20'),
(31, '1223-1133-3343', 'Thriller', 'American', 'The Lost Symbol', 'Dan Brown', 'Test', 'Normal', 'NO', '2012', '1531076417.jpeg', 'Prothoma', 500, 11, '2018-07-08 13:00:17', '2018-07-10 09:28:27'),
(32, '1377-1133-3343', 'Thriller', 'American', 'Inferno', 'Dan Brown', 'Test', 'Normal', 'NO', '2014', '1531076466.jpeg', 'Aajkal Prokashoni', 550, 12, '2018-07-08 13:01:06', '2018-07-10 09:28:33'),
(33, '1333-7733-3343', 'Thriller', 'American', 'The Da Vinci Code', 'Dan Brown', 'Test', 'Peoples Choice', 'NO', '2008', '1531076555.jpeg', 'Aajkal Prokashoni', 500, 14, '2018-07-08 13:02:35', '2018-07-10 09:28:39'),
(34, '1333-1133-9999', 'Thriller', 'American', 'Origin', 'Dan Brown', 'Test', 'Normal', 'NO', '2016', '1531076601.jpeg', 'Aajkal Prokashoni', 600, 34, '2018-07-08 13:03:21', '2018-07-10 09:28:47'),
(35, '1333-9933-3343', 'Action and Adventure', 'American', 'Deception Point', 'Dan Brown', 'Test', 'Normal', 'NO', '2009', '1531076722.jpeg', 'Aajkal Prokashoni', 660, 22, '2018-07-08 13:05:22', '2018-07-10 09:28:53'),
(36, '1333-1733-3343', 'Thriller', 'American', 'Digital Fortress', 'Dan Brown', 'Test', 'Most Searched Author', 'NO', '2014', '1531076769.jpeg', 'Aajkal Prokashoni', 400, 0, '2018-07-08 13:06:09', '2018-07-10 09:57:23'),
(37, '1333-1133-3314', 'Action and Adventure', 'American', 'The Lost Symbol', 'Dan Brown', 'Test', 'Normal', 'YES', '2011', '1531076814.jpeg', 'Aajkal Prokashoni', 700, 0, '2018-07-08 13:06:54', '2018-07-10 09:44:02'),
(38, '1333-1166-3343', 'Mystery', 'American', 'Sofie\'s World', 'Jostein Gaarder', 'Test', 'Peoples Choice', 'NO', '2007', '1531076984.jpeg', 'Book Club', 800, 0, '2018-07-08 13:09:44', '2018-07-14 04:47:47'),
(39, '1333-1155-3343', 'Travel', 'American', 'Bear Town', 'Fredric Backman', 'Test', 'Most Searched Author', 'NO', '2014', '1531077051.jpeg', 'Book Club', 500, 22, '2018-07-08 13:10:51', '2018-07-10 09:29:17'),
(40, '1333-6633-3343', 'Anthology', 'Italian', 'Matilda', 'Roald Dahl', 'Test', 'Normal', 'NO', '2005', '1531077256.jpeg', 'Book Club', 600, 33, '2018-07-08 13:14:16', '2018-07-10 09:29:24'),
(41, '1298-1133-3343', 'Action and Adventure', 'Bengali', 'Ekattorer Dinguli', 'Jahanara Imam', 'test file', 'Normal', 'NO', '2011', '1531236172.jpeg', 'Alamin Prokashoni', 240, 100, '2018-07-10 09:22:52', '2018-07-10 09:22:52'),
(42, '1233-1133-6643', 'Programming', 'American', 'Let Us C', 'Yashavant Kanetkar', 'test file', 'Engineering Books', 'NO', '2011', '1531238976.jpeg', 'Book Club', 400, 20, '2018-07-10 10:09:36', '2018-07-10 10:14:47'),
(43, '1233-9993-3343', 'Engineering', 'American', 'Computer Networks', 'Andrew S. Tanenbaum', 'test file', 'Engineering Books', 'NO', '2006', '1531239182.jpeg', 'Book Club', 700, 40, '2018-07-10 10:13:02', '2018-07-10 10:29:18'),
(44, '1883-1133-3343', 'Engineering', 'American', 'The Internet', 'Douglas Comer', 'test file', 'Engineering Books', 'NO', '2008', '1531239904.jpeg', 'Book Club', 700, 23, '2018-07-10 10:25:04', '2018-07-10 10:29:11'),
(45, '1553-1133-3343', 'Engineering', 'American', 'Distributed Networks', 'Qurban A. Memon', 'test file', 'Engineering Books', 'NO', '2010', '1531240076.jpeg', 'Asia Publications', 900, 12, '2018-07-10 10:27:56', '2018-07-10 10:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `book_countries`
--

CREATE TABLE `book_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_countries`
--

INSERT INTO `book_countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Bengali', '2018-07-07 05:11:27', '2018-07-07 05:11:27'),
(2, 'American', '2018-07-07 05:11:32', '2018-07-07 05:11:32'),
(3, 'Italian', '2018-07-08 13:13:19', '2018-07-08 13:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `cart__infos`
--

CREATE TABLE `cart__infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `order_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart__infos`
--

INSERT INTO `cart__infos` (`id`, `user_id`, `order_amount`, `order_info`, `received_info`, `verification_no`, `total_price`, `created_at`, `updated_at`) VALUES
(55, '1', 0, NULL, NULL, NULL, 0, '2018-07-14 04:49:39', '2018-08-13 08:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `cart__items`
--

CREATE TABLE `cart__items` (
  `id` int(10) UNSIGNED NOT NULL,
  `card_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(6, 'Thriller', '2018-07-02 00:54:27', '2018-07-02 00:54:27'),
(7, 'Romantic', '2018-07-02 00:54:33', '2018-07-02 00:54:33'),
(8, 'Science', '2018-07-02 00:54:39', '2018-07-02 00:54:39'),
(9, 'Programming', '2018-07-02 00:54:45', '2018-07-02 00:54:45'),
(10, 'Novel', '2018-07-02 00:55:04', '2018-07-02 00:55:04'),
(12, 'Science fiction', '2018-07-02 08:57:46', '2018-07-02 08:57:46'),
(13, 'Satire', '2018-07-02 08:57:52', '2018-07-02 08:57:52'),
(14, 'Drama', '2018-07-02 08:57:57', '2018-07-02 08:57:57'),
(15, 'Action and Adventure', '2018-07-02 08:58:02', '2018-07-02 08:58:02'),
(16, 'Mystery', '2018-07-02 08:58:09', '2018-07-02 08:58:09'),
(17, 'Horror', '2018-07-02 08:58:15', '2018-07-02 08:58:15'),
(18, 'Self help', '2018-07-02 08:58:28', '2018-07-02 08:58:28'),
(19, 'Health', '2018-07-02 08:58:34', '2018-07-02 08:58:34'),
(20, 'Guide', '2018-07-02 08:58:39', '2018-07-02 08:58:39'),
(21, 'Travel', '2018-07-02 08:58:44', '2018-07-02 08:58:44'),
(22, 'Children\'s', '2018-07-02 08:58:51', '2018-07-02 08:58:51'),
(23, 'Religion, Spirituality & New Age', '2018-07-02 08:58:57', '2018-07-02 08:58:57'),
(24, 'History', '2018-07-02 08:59:02', '2018-07-02 08:59:02'),
(25, 'Math', '2018-07-02 08:59:08', '2018-07-02 08:59:08'),
(26, 'Anthology', '2018-07-02 08:59:14', '2018-07-02 08:59:14'),
(27, 'Poetry', '2018-07-02 08:59:20', '2018-07-02 08:59:20'),
(28, 'Encyclopedias', '2018-07-02 08:59:26', '2018-07-02 08:59:26'),
(29, 'Dictionaries', '2018-07-02 08:59:32', '2018-07-02 08:59:32'),
(30, 'Comics', '2018-07-02 08:59:38', '2018-07-02 08:59:38'),
(31, 'Art', '2018-07-02 08:59:44', '2018-07-02 08:59:44'),
(32, 'Cookbooks', '2018-07-02 08:59:51', '2018-07-02 08:59:51'),
(33, 'Diaries', '2018-07-02 08:59:58', '2018-07-02 08:59:58'),
(34, 'Journals', '2018-07-02 09:00:05', '2018-07-02 09:00:05'),
(35, 'Prayer books', '2018-07-02 09:00:11', '2018-07-02 09:00:11'),
(36, 'Series', '2018-07-02 09:00:16', '2018-07-02 09:00:16'),
(37, 'Trilogy', '2018-07-02 09:00:21', '2018-07-02 09:00:21'),
(38, 'Biographies', '2018-07-02 09:00:26', '2018-07-02 09:00:26'),
(39, 'Autobiographies', '2018-07-02 09:00:31', '2018-07-02 09:00:31'),
(40, 'Fantasy', '2018-07-02 09:00:37', '2018-07-02 09:00:37'),
(41, 'test', '2018-07-08 09:04:48', '2018-07-08 09:04:48'),
(42, 'Engineering', '2018-07-10 10:11:39', '2018-07-10 10:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature`, `created_at`, `updated_at`) VALUES
(2, 'Peoples Choice', '2018-07-08 10:05:29', '2018-07-08 10:05:29'),
(3, 'Most Searched Author', '2018-07-08 10:05:38', '2018-07-08 10:05:56'),
(4, 'Discount Offer', '2018-07-08 10:06:09', '2018-07-08 10:06:09'),
(5, 'Normal', '2018-07-08 10:06:24', '2018-07-08 10:06:24'),
(6, 'Engineering Books', '2018-07-10 10:14:28', '2018-07-10 10:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_07_01_165609_create_publishers_table', 2),
(9, '2018_07_01_202028_create_authors_table', 3),
(10, '2018_07_02_054716_create_categories_table', 4),
(11, '2018_07_01_163819_create_books_table', 5),
(12, '2014_10_12_000000_create_users_table', 6),
(15, '2018_07_05_181917_create_order__histories_table', 7),
(16, '2018_07_05_181857_create_cart__infos_table', 8),
(17, '2018_07_05_181840_create_cart__items_table', 9),
(18, '2018_07_07_104613_create_book_countries_table', 10),
(19, '2018_07_08_154820_create_features_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `order__histories`
--

CREATE TABLE `order__histories` (
  `cart_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `publisher_name`, `created_at`, `updated_at`) VALUES
(1, 'Alamin Prokashoni', '2018-07-02 01:30:19', '2018-07-02 01:30:19'),
(8, 'Batighar Prokashoni', '2018-07-02 05:26:41', '2018-07-02 05:26:41'),
(9, 'Aajkal Prokashoni', '2018-07-02 08:51:33', '2018-07-02 08:51:33'),
(10, 'Adorn Publication', '2018-07-02 08:51:42', '2018-07-02 08:51:42'),
(11, 'Afsar Brothers', '2018-07-02 08:51:47', '2018-07-02 08:51:47'),
(12, 'Agamee Prakashani', '2018-07-02 08:51:59', '2018-07-02 08:51:59'),
(13, 'Ankur Prakashoni', '2018-07-02 08:52:06', '2018-07-02 08:52:06'),
(14, 'Anannya', '2018-07-02 08:52:11', '2018-07-02 08:52:11'),
(15, 'Asia Publications', '2018-07-02 08:52:19', '2018-07-02 08:52:19'),
(16, 'Bigganer Avizatra', '2018-07-02 08:52:29', '2018-07-02 08:52:29'),
(17, 'Book Club', '2018-07-02 08:52:35', '2018-07-02 08:52:35'),
(18, 'Dibboprokash', '2018-07-02 08:52:42', '2018-07-02 08:52:42'),
(19, 'Jagriti Prokashony', '2018-07-02 08:52:50', '2018-07-02 08:52:50'),
(20, 'Momo Prokash', '2018-07-02 08:52:58', '2018-07-02 08:52:58'),
(21, 'Mowla Brothers', '2018-07-02 08:53:04', '2018-07-02 08:53:04'),
(22, 'Muhammad Brothers', '2018-07-02 08:53:12', '2018-07-02 08:53:12'),
(23, 'Prothoma', '2018-07-02 08:54:03', '2018-07-02 08:54:03'),
(24, 'Shikha Prokashoni', '2018-07-02 08:54:11', '2018-07-02 08:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile.png',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `location`, `password`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aninda Sarker Rahul', 'rahul108sk@gmail.com', '01710465757', 'Chittagong', '$2y$10$I7wzdHFCKroTuFUxnvtQfODhKWR6vlFcmBY4jqoXUad6yEm8lJ5xa', '1530550402.jpg', 'admin', 'HYcQejse73NuRziU9kCzmn6fXmDnUoFEkeEj4TCHpCQvy4INjfdGrjyhEvDt', '2018-07-02 09:10:50', '2018-07-08 06:11:27'),
(6, 'Azizul Hakim', 'raihan@gmail.com', '01521488104', 'CTG', '$2y$10$JJRSe.dPn/PIbREp7ahV9e7q7d43G5OvYbbsKehvBw35QUrFfHWT.', 'profile.png', 'stuff', 'qLTQEbmzpJsQChzkUDPzgFk9akHGvmHKxdmyPcg61LxabpTtJdhjOf9o8Zol', '2018-07-08 04:01:26', '2018-07-08 10:43:45'),
(7, 'Eftekher Ahmed Aqib', 'aqib@gmail.com', '01521486005', 'ctg', '$2y$10$31A2r8suZap3i8In5kH8POoC7tTe0g0v4b.2ZbVMoSTKkLzj4BTkW', 'profile.png', 'stuff', 'RA3PnWcyjmpvNr6zNKK1sLTqKoXhbu5lrhxV6cfaPqktpxhgDYHXvhTqf2A6', '2018-07-08 06:37:44', '2018-07-08 10:43:40'),
(8, 'Golam Hafeez Siyam', 'mghsiyam96@gmail.com', '01521486471', 'CUET', '$2y$10$jFuf/okMC5Cbf2KSl6zY8O756d7ju9oXVed2VJ5gPOYopCD3J6QEC', '1531068804.jpg', 'admin', 'zW2baBkWWpjGqIP6sZzE3ndkzcPrCPmXktp0Hrq1QmquXHcurBdfc8qsgvRO', '2018-07-08 09:10:46', '2018-07-08 10:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_countries`
--
ALTER TABLE `book_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart__infos`
--
ALTER TABLE `cart__infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart__items`
--
ALTER TABLE `cart__items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `book_countries`
--
ALTER TABLE `book_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart__infos`
--
ALTER TABLE `cart__infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `cart__items`
--
ALTER TABLE `cart__items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
