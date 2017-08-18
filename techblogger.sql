-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 07:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techblogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `inserted_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category_id`, `user_id`, `title`, `content`, `inserted_ts`) VALUES
(1, 1, 1, 'Sumits first blog', 'Dorothy Leigh Sayers (/?s??rz/ sairz[1] (13 June 1893 – 17 December 1957) was a renowned English crime writer, poet, playwright, essayist, translator, and Christian humanist. She was also a student of classical and modern languages.\r\n\r\nShe is best known for her mysteries, a series of novels and short stories set between the First and Second World Wars that feature English aristocrat and amateur sleuth Lord Peter Wimsey, which remain popular to this day. However, Sayers herself considered her translation of Dante''s Divine Comedy to be her best work. She is also known for her plays, literary criticism, and essays.', '2016-04-23 20:21:28'),
(2, 5, 1, 'here is another one', 'sumit is here and how??!!', '2016-04-23 20:26:42'),
(3, 1, 5, 'mkl ijh huf ', 'fewbcajsdbvjasd snjvnasdjv jkasndvbasv njsdvnkasnvn sanbdvkasbv kasndvasv nksadvkadsfnkv', '2016-04-23 22:52:13'),
(4, 1, 9, '45', '<strong> hello</strong><h1>mko</h1>', '2016-04-23 23:18:34'),
(5, 6, 1, 'lenovo', 'k3 note', '2016-04-24 17:09:29'),
(6, 6, 1, 'lenovo', 'k3 note', '2016-04-24 17:09:48'),
(7, 6, 1, 'lenovo', 'k3 note', '2016-04-24 17:10:04'),
(8, 9, 11, 'Facebook', 'Facebook', '2016-04-24 17:13:30'),
(9, 9, 12, 'whatsapp', 'time waste', '2016-04-24 17:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Apps'),
(2, 'Computer'),
(3, 'Gadget'),
(4, 'Hardware'),
(5, 'Internet'),
(6, 'Mobile Games'),
(7, 'Programming'),
(8, 'Phones'),
(9, 'Social Media'),
(10, 'Software'),
(11, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'akshay', 'akku.anvekar@gmail.com', 'qw'),
(5, 'Sumit Anvekar', 'akku.anv8ekar@gmail.com', '5'),
(9, 'kl', 'kl@gm.com', 'kl'),
(10, 'rakesh', 'rakeshanvekar805s5@gmail.com', 'aksja'),
(11, 'sumit', 's.a@g.com', '123'),
(12, 'akshay', 'akshay.amca.14@acharya.ac.in', '67');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
