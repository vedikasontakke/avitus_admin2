-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 08, 2023 at 05:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avitus`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(255) NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `option1` text DEFAULT NULL,
  `option2` text DEFAULT NULL,
  `option3` text DEFAULT NULL,
  `option4` text DEFAULT NULL,
  `additional` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_type`, `question`, `option1`, `option2`, `option3`, `option4`, `additional`) VALUES
(1, '', '                      heelo      ', '', '', '', '', ''),
(2, '', '                      heelo      ', NULL, NULL, NULL, NULL, NULL),
(3, '', '                            what is your name', NULL, NULL, NULL, NULL, 'no'),
(4, '', '                            what is your name', NULL, NULL, NULL, NULL, 'no'),
(5, '', '             where               ', NULL, NULL, NULL, NULL, 'no'),
(6, '', '             where               ', 'e', 'a', 'b', 'c', 'no'),
(7, '', '             where               ', 'e', 'a', 'b', 'c', 'no'),
(8, '', '                            ss', 'e', 'a', 'b', 'c', 'a'),
(9, '', '           a                 ', 'v', 'e', 'd', 'i', 'k'),
(10, '', '                          a  ', 'b', 'cd', 'd', 'e', 'a'),
(11, '1', '   question1                                     ', 'op1', 'op2', 'op3', 'op4', '                         none   '),
(12, '0', '   question2                                     ', '', '', '', '', '          no                  '),
(13, '2', ' question3                                       ', '', '', '', '', '              on              '),
(14, '1', '  question1                                      ', 'op1', 'op2', 'op3', 'op4', '                            none'),
(15, '0', 'hello                                        ', '', '', '', '', '                            '),
(16, '0', ' vv                                       ', '', '', '', '', '                            '),
(17, '1', '                                      que1  ', 'op1', 'op2', 'op3', 'op4', '                            no'),
(18, '1', '                        question0                ', 'op1', 'op2', 'op3', 'op4', '                            none'),
(19, '1', '                           demo             ', 'op1', 'op2', 'op3', 'op4', '                          no  '),
(20, '1', '               What is the type of nest ?                         ', 'op1', 'op2', 'op3', 'op4', '                            none'),
(32, 'Radio Button', 'whats your name dear ?', 'op1', 'op2', 'op3', 'op4', 'none'),
(33, 'Multiple Choice Question', 'whats your name dear ?', 'op1', 'op2', 'op3', 'op4', 'none'),
(34, 'Multiple Choice Question', 'whats your name dear ?', 'op1', 'op2', 'op3', 'op4', 'none'),
(35, 'Multiple Choice Question', 'whats your name?', 'op1', 'op2', 'op3', 'op4', 'none'),
(36, 'Radio Button', 'hello', 'op1', 'op2', 'op3', 'op4', 'none'),
(37, 'Radio Button', 'hii', 'op1', 'op2', 'op3', 'op4', 'none'),
(38, 'Radio Button', 'hello', 'op1', 'op2', 'op3', 'op4', 'none'),
(39, 'Radio Button', 'kalingad', 'op1', 'op2', 'op3', 'op4', ''),
(40, 'Brief Answer', 'hello', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(288) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', '', 'admin'),
(2, 'vedika', 'vedikasontakke2003@gmail.com', 'vedika123'),
(4, 'admin', 'admin@gmail.com', 'admin123'),
(5, 'vwd', 'vwd@gmail.com', '12345vwd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
