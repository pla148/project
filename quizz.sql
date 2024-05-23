-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 09:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbquizz`
--

CREATE TABLE `tbquizz` (
  `id` int(3) NOT NULL,
  `ques` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbquizz`
--

INSERT INTO `tbquizz` (`id`, `ques`, `img`, `ans1`, `ans2`, `ans3`, `ans4`) VALUES
(1, 'What color is your skintone?', 'ques1.gif', 'The skin is pink or pink, feeling fresh, warm', 'The skin is white or pinkish-white, with a yellowish tinge', 'Skin color is yellowish white or slightly dark skin', 'Light pink skin tone'),
(2, 'What color is your eye color?', 'ques2.gif', 'Bright brown with black light, the pupil glitters and has brightness', 'Dark brown or black eyes, the pupils feel quiet, warm', 'Brown with red and pink, the eyes make a gentle impression', 'Brown with red, the distinction between white and black is clear, the eyes create a sense of consist'),
(3, 'What color is your undertone skin color? (Observe the vein in the wrist)', 'ques3.gif', 'Blood vessels are light green', 'Blood vessels are blue and purple', 'Blood vessels are green with purple', 'Blood vessels are blue or purple'),
(4, 'When you get sunburned, how does your skin change?', 'ques4.gif', 'The skin is prone to sunburn but quickly recovers and releases the sun after a short time.', 'The skin is easy to catch the sun, but it is difficult to recover, darkens for a long time.', 'The skin is red when the sun is caught but it is difficult to burn in the sun', 'Red skin flushes when exposed to the sun and burns easily'),
(5, 'What lipstick color do people often praise you for when you use?', 'ques5.gif', 'Light, natural peach lipstick.', 'Pink-orange or red lipstick with bright orange.', 'Pink red lipstick', 'Lotus pink lipstick'),
(6, 'Which lipstick color makes your skin dull, people often comment that it is not suitable for you?', 'ques6.gif', 'Dark lipstick colors such as wine red, cherry red', 'Pink lipstick', 'Orange pink', 'Light orange, nude lipstick colors'),
(7, 'When you wear neutral colors like beige or gray, what will you look like?', 'ques7.gif', 'The face looks brighter and more vibrant when dressed in beige', 'There is not much difference, beige or gray clothes look quite simple', 'Gray outfits help to enhance the skin and stand out more than beige', 'The gray outfit makes the facial line look bolder and more prominent'),
(8, 'How do you look brighter, more skin-respecting when you wear clothes?', 'ques8.gif', 'How do you look brighter, more skin-respecting when you wear clothes?', 'The outfit has bright, natural colors', 'The outfit has a slightly deep color', 'The outfit is bold'),
(9, 'How do you like to wear accessories and jewelry in color?', 'ques9.gif', 'Sparkling gold jewelry items', 'Dark gold jewelry, matte gold or light bronze', 'Jewelry in silver, light platinum', 'Shiny silver or platinum jewelry'),
(10, 'How do people around you usually comment on your appearance?', 'ques10.gif', ' Clear, lovely appearance, brings a feeling of freshness, younger than the age', 'Appearance brings a feeling of calm, mature but still natural', 'The appearance at friendly is elegant, pleasant, dignified', 'The appearance looks sharp, personality and attractive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbquizz`
--
ALTER TABLE `tbquizz`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
