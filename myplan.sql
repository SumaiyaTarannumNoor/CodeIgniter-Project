-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 06:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicsalary`
--

CREATE TABLE `basicsalary` (
  `id` int(20) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basicsalary`
--

INSERT INTO `basicsalary` (`id`, `grade`, `salary`) VALUES
(1, 'Grade 20', '9000'),
(4, 'Grade 12', '16000'),
(5, 'Grade 5', '35000'),
(6, 'Grade 1', '100009');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `planDate` varchar(15) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `planDate`, `description`) VALUES
(1, 'title updated again', '2022-08-13', 'desdsfgdsc'),
(11, 'dfasdg', '2022-08-19', 'gdrfsgdfsg'),
(12, 'gh', '2022-08-02', 'vxsdfsdfs'),
(13, 'Hinata', '2020-01-14', 'RFEYWRTYERT '),
(14, 'f', '2022-08-12', 'd'),
(15, 'VFCDG', '2022-08-14', 'FDGD'),
(16, 'RTTRE', '2022-08-03', 'GFG'),
(17, 'gfg', '2022-08-14', 'bg'),
(18, 'sdf', '2022-08-02', 'asdaccxz'),
(19, 'hfgh', '2022-08-05', 'gncdgn'),
(20, 'ferfeggg', '2022-08-03', 'gwegd'),
(21, '7', '2022-08-01', '8'),
(22, 'gh', '2022-08-24', 'qewdfrwrgrghgfhjdtkjykhjg'),
(23, 'title', '2022-08-13', 'desdsfgdsc'),
(24, 'dfdfbhgfbh', '2022-08-09', 'gfhgfhgf'),
(25, 'fkjvndfkjn', '2022-08-10', 'dfbvgdfbvdf'),
(26, 'my hjjghj', '2022-08-09', 'It'),
(27, 'test', '2002-12-03', 'dewdjuwdjiwdjiw'),
(28, 'gtg ghfghfh', '2022-06-01', 'gsrtgfghnfghnghfmnxghmghm');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`) VALUES
(1, 'gh', 'made@gmail'),
(2, 'd', 'made@gmail'),
(3, 'h', 'made@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`id`, `name`, `email`, `password`) VALUES
(2, 'Sumaiya Tarannum', 's@gmail.com', '12345678'),
(8, 'Samiha Tarannum', 's1@gmail.com', '3234345546');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `Roll` int(5) NOT NULL,
  `ClassNam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `NAME`, `Roll`, `ClassNam`) VALUES
(2, 'Naruto', 1207, '6'),
(4, 'Naruto Uzumaki', 90, '06'),
(7, 'Naruto', 4, 'dsc'),
(9, 'gderg', 445, 'errfg'),
(18, 'Sakura', 1200, '6'),
(19, 'Sasuke Uchiha', 1206, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicsalary`
--
ALTER TABLE `basicsalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicsalary`
--
ALTER TABLE `basicsalary`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
