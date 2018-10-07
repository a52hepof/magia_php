-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 10:05 AM
-- Server version: 5.7.18
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magia`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_direcciones`
--

CREATE TABLE `hotel_direcciones` (
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
-- Dumping data for table `hotel_direcciones`
--

INSERT INTO `hotel_direcciones` (`id`, `id_hotel`, `direccion`, `numero`, `cpostal`, `barrio`, `ciudad`, `pais`, `fecha_registro`, `orden`, `estatus`) VALUES
(1, 1, 'Av de la gran plaza', '250', '1000', 'Bruxelles', 'Bruxelles', 'Belgique', '2018-09-28 00:22:48', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_hoteles`
--

CREATE TABLE `hotel_hoteles` (
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
-- Dumping data for table `hotel_hoteles`
--

INSERT INTO `hotel_hoteles` (`id`, `id_contacto`, `nombre`, `estrellas`, `habitaciones`, `tipo`, `sector`, `orden`, `estatus`) VALUES
(1, 1, 'Amigo', 1, 120, 'Familiar', 'Centro', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_mensajes`
--

CREATE TABLE `hotel_mensajes` (
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
-- Table structure for table `hotel_sectores`
--

CREATE TABLE `hotel_sectores` (
  `id` int(11) NOT NULL,
  `sector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel_sectores`
--

INSERT INTO `hotel_sectores` (`id`, `sector`, `orden`, `estatus`) VALUES
(1, 'Centro', 10, 1),
(2, 'Sur', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tipos`
--

CREATE TABLE `hotel_tipos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel_tipos`
--

INSERT INTO `hotel_tipos` (`id`, `tipo`, `orden`, `estatus`) VALUES
(1, 'Internacional', 10, 1),
(2, 'Familiar', 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_direcciones`
--
ALTER TABLE `hotel_direcciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `hotel_hoteles`
--
ALTER TABLE `hotel_hoteles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `sector` (`sector`);

--
-- Indexes for table `hotel_mensajes`
--
ALTER TABLE `hotel_mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_sectores`
--
ALTER TABLE `hotel_sectores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sector` (`sector`);

--
-- Indexes for table `hotel_tipos`
--
ALTER TABLE `hotel_tipos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_direcciones`
--
ALTER TABLE `hotel_direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotel_hoteles`
--
ALTER TABLE `hotel_hoteles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotel_mensajes`
--
ALTER TABLE `hotel_mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotel_sectores`
--
ALTER TABLE `hotel_sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hotel_tipos`
--
ALTER TABLE `hotel_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel_direcciones`
--
ALTER TABLE `hotel_direcciones`
  ADD CONSTRAINT `hotel_direcciones_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel_hoteles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hotel_hoteles`
--
ALTER TABLE `hotel_hoteles`
  ADD CONSTRAINT `hotel_hoteles_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `hotel_tipos` (`tipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_hoteles_ibfk_2` FOREIGN KEY (`sector`) REFERENCES `hotel_sectores` (`sector`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
