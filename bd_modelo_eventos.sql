-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 10:33 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `orden`) VALUES
(1, 'Conciertos', 10),
(2, 'Cine', 20),
(3, 'Teatro', 30);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
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
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `id_categoria`, `id_lugar`, `contacto`, `titulo`, `descripcion`, `fecha_inicio`, `fecha_fin`, `precio`, `orden`, `estatus`) VALUES
(7, 1, 1, 'robincoello@hotmail.com', 'Concierto de chenoa', 'Este es la descripcion del concierto', '2017-01-02', '2017-01-03', 120, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `lugar` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`id`, `lugar`, `orden`, `estatus`) VALUES
(1, 'Casa de arte', 20, 1),
(2, 'Casa de la cultura', 20, 0),
(3, 'Centro Cultural Abc', 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/******************************************************************/

INSERT INTO `_opciones` (`id`, `opcion`, `valor`, `grupo`) VALUES
(null, 'categorias_thead', '{\"id\":\"id\",\"categoria\":\"categoria\",\"orden\":\"orden\"}', 1000),
(null, 'eventos_thead', '{\"id\":\"id\",\"id_categoria\":\"id_categoria\",\"id_contacto\":\"id_contacto\",\"titulo\":\"titulo\",\"descripcion\":\"descripcion\",\"fecha_inicio\":\"fecha_inicio\",\"fecha_fin\":\"fecha_fin\",\"precio\":\"precio\",\"orden\":\"orden\",\"estatus\":\"estatus\"}', 0),
(null, 'lugares_thead', '{\"id\":\"id\",\"lugar\":\"lugar\",\"orden\":\"orden\",\"estatus\":\"estatus\"}', 0);

/******************************************************************/
INSERT INTO `_paginas` (`id`, `pagina`) VALUES
(null, 'categorias'),
(null, 'eventos'),
(null, 'lugares');

/******************************************************************/
INSERT INTO `_permisos` (`id`, `grupo`, `pagina`,`permiso` ) VALUES
(null, 'root','categorias','111'),
(null, 'root','eventos','111'),
(null, 'root','lugares','111');

/*******************************************************************/


INSERT INTO `_traducciones` (`id`, `frase`, `idioma`, `traduccion`) VALUES
(null, 'Categorias', 'en_GB', 'Categories'),
(null, 'categorias', 'en_GB', 'categories'),
(null, 'Categoria', 'en_GB', 'Category'),
(null, 'Categorias', 'es_ES', 'Categorias'),
(null, 'categorias', 'es_ES', 'categorias'),
(null, 'Categoria', 'es_ES', 'Categoria'),
(null, 'categoria', 'es_ES', 'categoria'),
(null, 'orden', 'es_ES', 'orden'),
(null, 'Eventos', 'es_ES', 'Eventos'),
(null, 'eventos', 'es_ES', 'eventos'),
(null, 'Id_categoria', 'es_ES', 'Id_categoria'),
(null, 'Id_contacto', 'es_ES', 'Id_contacto'),
(null, 'Titulo', 'es_ES', 'Titulo'),
(null, 'Fecha_inicio', 'es_ES', 'Fecha_inicio'),
(null, 'Fecha_fin', 'es_ES', 'Fecha_fin'),
(null, 'Precio', 'es_ES', 'Precio'),
(null, 'id_categoria', 'es_ES', 'id_categoria'),
(null, 'id_contacto', 'es_ES', 'id_contacto'),
(null, 'titulo', 'es_ES', 'titulo'),
(null, 'fecha_inicio', 'es_ES', 'fecha_inicio'),
(null, 'fecha_fin', 'es_ES', 'fecha_fin'),
(null, 'precio', 'es_ES', 'precio'),
(null, 'Fecha inicio', 'es_ES', 'Fecha inicio'),
(null, 'Fecha fin', 'es_ES', 'Fecha fin'),
(null, 'Lugares', 'es_ES', 'Lugares'),
(null, 'lugares', 'es_ES', 'lugares'),
(null, 'Lugar', 'es_ES', 'Lugar'),
(null, 'Id_lugar', 'es_ES', 'Id_lugar'),
(null, 'lugar', 'es_ES', 'lugar'),
(null, 'Lugares', 'en_GB', 'Places'),
(null, 'Eventos', 'en_GB', 'Events'),
(null, 'eventos', 'en_GB', 'events'),
(null, 'Id_categoria', 'en_GB', 'id_category'),
(null, 'Lugar', 'en_GB', 'Place'),
(null, 'Id_lugar', 'en_GB', 'id_place'),
(null, 'Titulo', 'en_GB', 'Title'),
(null, 'Fecha_inicio', 'en_GB', 'Start date'),
(null, 'Fecha_fin', 'en_GB', 'End date'),
(null, 'Precio', 'en_GB', 'Price'),
(null, 'id_categoria', 'en_GB', 'id_category'),
(null, 'titulo', 'en_GB', 'title'),
(null, 'fecha_inicio', 'en_GB', 'start date'),
(null, 'fecha_fin', 'en_GB', 'end date'),
(null, 'precio', 'en_GB', 'price'),
(null, 'orden', 'en_GB', 'order'),
(null, 'estatus', 'en_GB', 'status'),
(null, 'categoria', 'en_GB', 'category'),
(null, 'lugares', 'en_GB', 'places'),
(null, 'lugar', 'en_GB', 'place'),
(null, 'Fecha inicio', 'en_GB', 'Start date'),
(null, 'Fecha fin', 'en_GB', 'End date'),
(null, 'id_lugar', 'en_GB', 'id_place');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;