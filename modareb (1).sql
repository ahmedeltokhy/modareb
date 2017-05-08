-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 07:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modareb`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_ar` varchar(50) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `title_ar`, `number`, `icon`, `create_date`, `update_date`) VALUES
(1, 'satisfied clients', 'عملاء راضيين', 350, 'fa-users', '2017-04-14 14:51:03', '2017-05-06 19:39:08'),
(2, 'projects', 'مشاريع', 740, 'fa-briefcase', '2017-04-14 14:52:25', '2017-05-06 19:38:54'),
(3, 'contests', 'مسابقات', 360, 'fa-trophy', '2017-04-14 14:53:26', '2017-05-06 19:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `title_ar` varchar(50) NOT NULL,
  `content_ar` text NOT NULL,
  `field_ar` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `field` varchar(150) NOT NULL,
  `author_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `title_ar`, `content_ar`, `field_ar`, `content`, `image`, `field`, `author_id`, `create_date`, `update_date`) VALUES
(1, 'article No.1', 'مقال رقم 1', 'تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 تفاصيل مقال رقم 1 ', 'تدريب,تعليم', 'article No.1article No.1article No.1article No.1article No.1article No.1article No.1article No.1article No.1article No.1article No.1', 'desktop.jpg', 'Training, Education', 1, '2017-04-17 14:58:38', '2017-05-07 20:43:33'),
(2, 'article No. 2', 'مقال رقم 2', 'تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 تفاصيل مقال رقم 2 ', 'تدريب,تعليم', 'article No. 2article No. 2article No. 2article No. 2article No. 2article No. 2article No. 2article No. 2', 'desktop.jpg', 'Training, Education\n', 2, '2017-04-17 14:59:08', '2017-05-07 20:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Name_ar` varchar(150) NOT NULL,
  `about_ar` text NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `speciality_ar` varchar(200) NOT NULL,
  `About` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Picture` text NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Twitter` varchar(200) NOT NULL,
  `Youtube` varchar(200) NOT NULL,
  `Snapchat` varchar(200) NOT NULL,
  `Instagram` varchar(200) NOT NULL,
  `CV` text NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdateDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`ID`, `UserName`, `Password`, `Name`, `Name_ar`, `about_ar`, `speciality`, `speciality_ar`, `About`, `Email`, `Phone`, `Picture`, `Facebook`, `Twitter`, `Youtube`, `Snapchat`, `Instagram`, `CV`, `lat`, `lng`, `address`, `CreateDate`, `UpdateDate`) VALUES
(1, 'user', '123', 'Husam Jabr', 'حسام جبر', '<p> 	معلومات عن المدرب</p>', 'Technical Training', 'تدريب تقنى', 'information about trainer', 'user@user.com', '0550000000', 'ac2ab-default-user-image.png', '', '', '', '', '', 'ce4b0-ahmed-atyya-ali-cv-2017.pdf', '24.7135515', '46.6752959', 'الرياض السعودية', '2017-03-26 18:40:54', '2017-05-06 19:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `article_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `message`, `article_id`, `create_date`, `update_date`) VALUES
(32, 'asasa', 'sassasasasa@asdsa', 'asaassasasa', 1, '2017-04-30 20:44:54', '2017-04-30 20:44:54'),
(33, 'asasas', 'aaa.computerscience@gmail.com', 'sasasasaassa', 1, '2017-05-01 06:27:49', '2017-05-01 06:27:49'),
(34, 'test comment', 'aasdadss@sdasaddsa', 'test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 test message 1 ', 1, '2017-05-01 06:40:17', '2017-05-01 06:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `university_ar` varchar(100) NOT NULL,
  `address_ar` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `logo` text,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `title_ar`, `university_ar`, `address_ar`, `university`, `start_year`, `end_year`, `address`, `logo`, `create_date`, `update_date`) VALUES
(1, 'Bachelor of computer science and mathematics', 'بكالوروس العلوم قسم علوم الحاسب الآلى', 'جامعة الإسكندرية', 'الإسكندرية', 'Alexandria University', 2004, 2008, 'Alexandria', 'fos_logo.png', '2017-04-14 14:01:39', '2017-05-06 19:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `details_ar` text NOT NULL,
  `company_name_ar` varchar(50) NOT NULL,
  `address_ar` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `leave_date` date DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `title_ar`, `details_ar`, `company_name_ar`, `address_ar`, `details`, `company_name`, `address`, `start_date`, `leave_date`, `create_date`, `update_date`) VALUES
(1, 'Experience No. 1', 'خبرة رقم 1', 'تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 تفاصيل خبرة رقم 1 ', 'اسم شركة رقم 1', 'عنوان الشركة', 'Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 Detials\n Experience No. 1 ', 'Company No. 1 Name', 'Company Address', '2017-04-06', '0000-00-00', '2017-04-13 11:08:55', '2017-05-07 20:19:27'),
(2, 'Experience No. 2', 'خبرة رقم 2', 'تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 تفاصيل خبرة رقم 2 ', 'اسم شركة رقم 2', 'عنوان الشركة', 'Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 Details Experience No. 2 ', 'Company No. 2 Name', 'Company Address', '2027-04-06', '2027-04-26', '2017-04-13 11:09:44', '2017-05-07 20:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `cover_text_ar` varchar(150) NOT NULL,
  `inner_text_ar` text NOT NULL,
  `client_name_ar` varchar(100) NOT NULL,
  `cover_pic` text NOT NULL,
  `cover_text` varchar(150) NOT NULL,
  `inner_pic` text NOT NULL,
  `inner_text` text NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `completed_date` date NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `title_ar`, `cover_text_ar`, `inner_text_ar`, `client_name_ar`, `cover_pic`, `cover_text`, `inner_pic`, `inner_text`, `client_name`, `completed_date`, `create_date`, `update_date`) VALUES
(1, 'project No. 1', 'مشروع رقم 1', 'تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 ', 'تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 تفاصيل مشروع رقم 1 ', 'عميل رقم 1', 'bikini-small.jpg', 'Details project No. 1 Details project No. 1 ', 'woman-in-glasses.jpg', 'Details project No. 1 Details project No. 1 Details project No. 1 Details project No. 1 Details project No. 1 Details project No. 1 Details project No. 1 Details project No. 1 ', 'Client No. 1', '2017-01-25', '2017-04-16 16:58:11', '2017-05-06 22:25:56'),
(2, 'project No. 2', 'مشروع رقم 2', 'تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 ', 'تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 تفاصيل مشروع رقم 2 ', 'عميل رقم 2', 'bikini-small.jpg', ' Details project No. 2  Details project No. 2  Details project No. 2  Details project No. 2 ', 'woman-in-glasses.jpg', 'Details project No. 2 Details project No. 2 Details project No. 2 Details project No. 2 Details project No. 2 Details project No. 2 Details project No. 2 ', 'Client No. 2', '2027-02-25', '2017-04-16 16:58:41', '2017-05-06 22:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `title_ar` varchar(200) NOT NULL,
  `Description_ar` text NOT NULL,
  `Description` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `AuthorID` int(11) DEFAULT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Title`, `title_ar`, `Description_ar`, `Description`, `icon`, `AuthorID`, `createDate`, `updateDate`) VALUES
(1, 'Service No. 1', 'خدمة رقم 1', 'تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 تفاصيل خدمة رقم 1 ', 'Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 Details Service No. 1 ', 'fa-gears', 0, '2017-04-15 18:31:42', '2017-05-07 20:15:28'),
(3, 'Service No. 2', 'خدمة رقم 2', 'تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 تفاصيل خدمة رقم 2 ', 'Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 Details Service No. 2 ', 'fa-gears', NULL, '2017-04-15 18:33:31', '2017-05-07 20:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `degree` double NOT NULL,
  `type` enum('technical','language','aditional') NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `title_ar`, `degree`, `type`, `create_date`, `update_date`) VALUES
(1, 'technical 1', 'مهارة فنية 1', 95, 'technical', '2017-04-13 13:38:45', '2017-05-07 20:22:41'),
(2, 'Language 1', 'لغة 1', 60, 'language', '2017-04-13 13:39:16', '2017-05-07 20:22:49'),
(3, 'Additional 1', 'مهارة إضافية 1', 44, 'aditional', '2017-04-13 13:39:45', '2017-05-07 20:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `details_ar` text NOT NULL,
  `details` text NOT NULL,
  `pic` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `name_ar`, `details_ar`, `details`, `pic`, `create_date`, `update_date`) VALUES
(1, 'توصية 1', '', '', 'تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 تفاصيل 1 ', 'testimonials-ramona.png', '2017-04-15 18:01:32', '2017-04-15 18:07:48'),
(2, 'توصية 2', '', '', 'تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 تفاصيل 2 ', 'testimonials-ramona.png', '2017-04-15 18:02:16', '2017-04-15 18:07:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
