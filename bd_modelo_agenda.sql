-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 10:12 AM
-- Server version: 5.7.18
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a6`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda_agenda`
--

CREATE TABLE `agenda_agenda` (
  `id_agenda` int(10) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_bien` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `nota` text NOT NULL,
  `id_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_agenda`
--

INSERT INTO `agenda_agenda` (`id_agenda`, `id_personal`, `id_bien`, `id_contacto`, `fecha`, `hora`, `nota`, `id_estatus`) VALUES
(17, 100, 1, 103, '2018-10-06', '11:00:00', 'test', 1),
(18, 100, 1, 103, '2018-10-06', '12:00:00', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agenda_estatus`
--

CREATE TABLE `agenda_estatus` (
  `id` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_estatus`
--

INSERT INTO `agenda_estatus` (`id`, `id_estatus`, `estatus`) VALUES
(100, 1, 'Registrada'),
(101, 2, 'Asistio'),
(102, 3, 'No Asistio'),
(103, -1, 'Borrada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_agenda`
--
ALTER TABLE `agenda_agenda`
  ADD UNIQUE KEY `id_agenda` (`id_agenda`);

--
-- Indexes for table `agenda_estatus`
--
ALTER TABLE `agenda_estatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_estatus` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_agenda`
--
ALTER TABLE `agenda_agenda`
  MODIFY `id_agenda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `agenda_estatus`
--
ALTER TABLE `agenda_estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
