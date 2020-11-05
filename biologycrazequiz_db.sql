-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 07:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biologycrazequiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `answer`, `ans_id`) VALUES
(1, 'it helps in coitus', 1),
(2, 'it helps in ejection of semen', 1),
(3, 'sperms produced in it are more efective', 1),
(4, 'spermatogenesis occurs at a tempreture lower than that of body', 1),
(5, 'inside body', 2),
(6, 'on side of kidney', 2),
(7, 'on either side of dorsal aorta', 2),
(8, 'in scrotal sacs', 2),
(9, 'Cryptorchidism', 3),
(10, 'Castration', 3),
(11, 'Impotency', 3),
(12, 'Paedogenesis', 3),
(13, 'Spermatic canal', 4),
(14, 'Inguinal canal', 4),
(15, 'Vaginia cavity', 4),
(16, 'Haversian canal', 4),
(17, 'Liver', 5),
(18, 'Kidney', 5),
(19, 'Testis', 5),
(20, 'Ovary', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(250) NOT NULL,
  `questions` varchar(250) NOT NULL,
  `ans_key` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `questions`, `ans_key`) VALUES
(1, 'In many mammals, testes remain outside body cavity in scrotal sacs because ..........', 4),
(2, 'Testes of rabbit occur ...........', 8),
(3, 'In mammals, failure of testis to descend into the scrotum is known as ..........', 9),
(4, 'Scrotal sacs of man and rabbit are connected with abdominal cavity by ..........', 14),
(5, 'Seminiferous tubules occur in ............', 19);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `result` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `result`) VALUES
(1, 'SAIKRISHNA PANDA', 2),
(2, 'SAIKRISHNA PANDA', 2),
(3, 'SAIKRISHNA PANDA', 2),
(4, 'SAIKRISHNA PANDA', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
