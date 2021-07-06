-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 08:07 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typist`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordertranslate`
--

CREATE TABLE `ordertranslate` (
  `id` int(255) NOT NULL,
  `zaban` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `zamineh` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `topic` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `erja` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `formula` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `safhe` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tasvir` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tables` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `chart` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `shape` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tozihat` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `dates` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `payk` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `files` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `peigiri` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `currentdate` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `state` varchar(2) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ordertranslate`
--

INSERT INTO `ordertranslate` (`id`, `zaban`, `zamineh`, `topic`, `erja`, `formula`, `safhe`, `tasvir`, `tables`, `chart`, `shape`, `tozihat`, `dates`, `payk`, `files`, `peigiri`, `email`, `currentdate`, `state`) VALUES
(1, '1', '2', 'xv', 'cfb', '', '1', '', '0', '', '', 'cnv', '2021-07-22T01:44', '7', 'caba62f2168e4c538b422f56e006a634.pdf', '790', 'maryamsakhaei66@yahoo.com', '2021/07/03', '1'),
(2, '0', '0', 'fnc', 'fcnfg', '', '', '', '0', '', '', 'cfncfn', '2021-07-31T22:10', '', 'New Document(49) 06-Mar-2021 22-43-11.pdf', '6762', 'maryamsakhaei66@yahoo.com', '2021/07/03', '1'),
(3, '1', '0', 'fnc', 'gvnvg', '', '', '2', '0', '', '', 'dfh', '2021-07-24T22:16', '', 'New Document(48) 06-Mar-2021 22-41-51.pdf', '3018', 'maryamsakhaei66@yahoo.com', '2021/07/03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ordertype`
--

CREATE TABLE `ordertype` (
  `id` int(255) NOT NULL,
  `zaban` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `zamineh` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `topic` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `erja` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `formula` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `safhe` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tasvir` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tables` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `chart` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `shape` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `tozihat` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `dates` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `payk` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `files` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `peigiri` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `currentdate` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `fname` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mobile` int(20) DEFAULT NULL,
  `company` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `education` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `grade` varchar(60) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `familier` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `Reagent` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `fname`, `email`, `mobile`, `company`, `password`, `education`, `grade`, `familier`, `Reagent`) VALUES
(1, 'maryam', ' sakhaei', 'maryamsakhaei66@yahoo.com', 2147483647, 'h', 'zxc', 'zxc', 'sfsg', 'human', '12'),
(2, 'maryam', ' sakhaei', 'maryamsakhaei66@yahoo.com', 2147483647, 'fdbdf', '123', 'gvmvg', 'vgmvg', 'oil', '123'),
(3, 'maryam', ' sakhaei', 'maryamsakhaei66@yahoo.com', 2147483647, 'freelancer', 'maria1366', 'computer', 'master', 'computer', '123'),
(4, 'maryam', ' sakhaei', 'maryamsakhaei66@yahoo.com', 2147483647, 'freelancer', 'maria1366', 'computer', 'master', 'oil', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordertranslate`
--
ALTER TABLE `ordertranslate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertype`
--
ALTER TABLE `ordertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertranslate`
--
ALTER TABLE `ordertranslate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordertype`
--
ALTER TABLE `ordertype`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
