-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 10:03 AM
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
-- Table structure for table `eve_categorias`
--

CREATE TABLE `eve_categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eve_categorias`
--

INSERT INTO `eve_categorias` (`id`, `categoria`, `orden`) VALUES
(1, 'Conciertos', 10),
(2, 'Cine', 20),
(3, 'Teatro', 30);

-- --------------------------------------------------------

--
-- Table structure for table `eve_eventos`
--

CREATE TABLE `eve_eventos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `contacto` varchar(260) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `precio` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eve_eventos`
--

INSERT INTO `eve_eventos` (`id`, `id_categoria`, `id_lugar`, `contacto`, `titulo`, `descripcion`, `fecha_inicio`, `fecha_fin`, `precio`, `orden`, `estatus`) VALUES
(7, 1, 1, 'robincoello@hotmail.com', 'Concierto de chenoa', 'Este es la descripcion del concierto', '2017-01-02', '2017-01-03', 120, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eve_lugares`
--

CREATE TABLE `eve_lugares` (
  `id` int(11) NOT NULL,
  `lugar` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eve_lugares`
--

INSERT INTO `eve_lugares` (`id`, `lugar`, `orden`, `estatus`) VALUES
(1, 'Casa de arte', 20, 1),
(2, 'Casa de la cultura', 20, 0),
(3, 'Centro Cultural Abc', 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eve_categorias`
--
ALTER TABLE `eve_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eve_eventos`
--
ALTER TABLE `eve_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eve_lugares`
--
ALTER TABLE `eve_lugares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eve_categorias`
--
ALTER TABLE `eve_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eve_eventos`
--
ALTER TABLE `eve_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `eve_lugares`
--
ALTER TABLE `eve_lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
