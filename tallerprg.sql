-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 11:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tallerprg`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `email`, `fechanac`) VALUES
(1, 'Carlos ', 'carlos@soho.com ', '0000-00-00'),
(2, 'Jose', 'jose@soho.com', '0000-00-00'),
(3, 'Pedro', 'pedro@soho.com', '0000-00-00'),
(4, 'Juan', 'juan@soho.com', '0000-00-00'),
(5, '.Enrique', 'enrique@soho.com', '0000-00-00'),
(6, '.Esteban', 'esteban@soho.com', '0000-00-00'),
(9, '.lala3', '.laal@soho.com', '0000-00-00'),
(15, 'ada', 'dfasdfaf', '0000-00-00'),
(17, 'adf', 'asdf', '0000-00-00'),
(18, 'sfff', 'sgfsg', '0000-00-00'),
(19, 'sfgsg', 'sdfg', '0000-00-00'),
(21, 'ooooo', 'adfafaf', '0000-00-00'),
(22, 'lkjhlklklkjhlkjhlk', 'lllllll', '0000-00-00'),
(23, 'kkkk', 'lll', '0000-00-00'),
(24, 'llll', 'jjj', '0000-00-00'),
(25, 'kjÃ±lk', 'aaaa@gmail.com', '0000-00-00'),
(26, 'ddddd', 'kjhlkjh', '0000-00-00'),
(31, 'adfadsf', 'adfa', '0000-00-00'),
(32, 'jjjjaaa', 'adfadsf', '0000-00-00'),
(33, 'adf', 'asdf@yahoo.com.ar', '0000-00-00'),
(34, 'adfasdf', 'asdf@yo.com', '0000-00-00'),
(35, 'asdf', 'adedo', '0000-00-00'),
(36, 'kkkkkk', 'adaf', '0000-00-00'),
(37, 'ultimo1', 'ultimo1@gmail.com', '0000-00-00'),
(39, 'ultimo3', 'ultimo3@gmail.com', '0000-00-00'),
(41, 'ultimo2', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
