-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2018 at 12:23 AM
-- Server version: 5.7.18
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brussels-hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpostal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `barrio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`id`, `id_hotel`, `direccion`, `numero`, `cpostal`, `barrio`, `ciudad`, `pais`, `fecha_registro`, `orden`, `estatus`) VALUES
(1, 1, 'Av de la gran plaza', '250', '1000', 'Bruxelles', 'Bruxelles', 'Belgique', '2018-09-28 00:22:48', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoteles`
--

CREATE TABLE `hoteles` (
  `id` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estrellas` int(11) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoteles`
--

INSERT INTO `hoteles` (`id`, `id_contacto`, `nombre`, `estrellas`, `habitaciones`, `tipo`, `sector`, `orden`, `estatus`) VALUES
(1, 1, 'Amigo', 1, 120, 'Familiar', 'Centro', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `email_sender` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_reciver` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sujeto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sectores`
--

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL,
  `sector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sectores`
--

INSERT INTO `sectores` (`id`, `sector`, `orden`, `estatus`) VALUES
(1, 'Centro', 10, 1),
(2, 'Sur', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`, `orden`, `estatus`) VALUES
(1, 'Internacional', 10, 1),
(2, 'Familiar', 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `sector` (`sector`);

--
-- Indexes for table `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sector` (`sector`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hoteles`
--
ALTER TABLE `hoteles`
  ADD CONSTRAINT `hoteles_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`tipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoteles_ibfk_2` FOREIGN KEY (`sector`) REFERENCES `sectores` (`sector`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
