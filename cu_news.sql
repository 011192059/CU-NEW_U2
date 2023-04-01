-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 04:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cu_news`
--
DROP DATABASE IF EXISTS cu_news;
CREATE DATABASE cu_news;
USE cu_news;
-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(100) NOT NULL,
  `content` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
(1, ''),
(2, 'taru'),
(3, 'vivo'),
(4, 'চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ’ চট্টগ্রাম বিশ্ববিদ্যালয় (চবি) ক্যাম্পাসের প্রবীণতম প্রগতিশীল সাংস্কৃতিক সংগঠন। লোগোতে থাকা কলম, মুষ্টিবদ্ধ হাত আর মুখ নির্দেশ করছে মুক্তজ্ঞান চর্চা, অন্যায়ের প্রতিবাদ ও সত্য উচ্চারণের। শাশ্বত সুন্দেরর অনিবার্য অভ্যুত্থান কবিতা” এই স্লোগানকে ধারণ করে, ২০০০ সালের ৭ সেপ্টেম্বর আবৃত্তি মঞ্চের যাত্রা শুরু হয়। নানা প্রতিকূলতার মধ্যদিয়ে এই প্রতিনিধিত্বশীল সংগঠনটি নিয়মিত তৈরি করছে একদল শুদ্ধ মানুষ। যারা মাতৃভাষা চর্চায় নিরন্তর সাধনা করে, কবিতা ভালোবাসে, আবৃত্তি করে, পড়ে এবং মুক্তজ্ঞান চর্চা করে।\r\n\r\n  আমরা আবৃত্তির মাধ্যমে শুদ্ধ সংস্কৃতির চর্চা করি। আমরা বিশ্বাস করি- যা কিছু সুন্দর, যা কিছু শাশ্বত, তার প্রকাশ কবিতার মাধ্যমে সম্ভব। কবিতা শুধু সৌন্দর্য প্রকাশেই সীমাবদ্ধ নয়, কবিতা প্রতিবাদের হাতিয়ার। সমাজের সকল কলুষতার বিরুদ্ধে কবিতা আমাদের কণ্ঠস্বরকে করে জোরালো, ভাষাকে করে সুতীক্ষ্ণ। এভাবেই পতিত মানবতায় কবিতা আবাদের লক্ষ্যে এগিয়ে চলেছে \"চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চের ২২ বছরের বর্ণিল পথচলা।');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Taru', '7890'),
('Tanu', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
