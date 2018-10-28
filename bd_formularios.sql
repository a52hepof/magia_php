-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2018 at 11:08 PM
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
-- Table structure for table `base_datos`
--

CREATE TABLE `base_datos` (
  `id` int(11) NOT NULL,
  `servidor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `base_datos` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `base_datos`
--

INSERT INTO `base_datos` (`id`, `servidor`, `usuario`, `clave`, `base_datos`) VALUES
(1, 'localhost', 'root', 'root', 'magia'),
(2, 'localhost', 'root', 'root', 'demo'),
(3, 'localhost', 'root', '', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `formularios`
--

CREATE TABLE `formularios` (
  `id` int(11) NOT NULL,
  `id_tabla` int(11) NOT NULL,
  `vceb` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `campo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `formularios`
--

INSERT INTO `formularios` (`id`, `id_tabla`, `vceb`, `campo`, `tipo`) VALUES
(1, 1, 'v', 'Nombre', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `id_base_datos` int(11) NOT NULL,
  `raiz` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gestion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `controlador` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modelos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vista` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reg` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rutas`
--

INSERT INTO `rutas` (`id`, `id_base_datos`, `raiz`, `gestion`, `controlador`, `modelos`, `vista`, `reg`) VALUES
(1, 1, '/var/www/html/magia', '/var/www/html/magia/gestion', '/var/www/html/magia/gestion/controaldor', '/var/www/html/magia/gestion/modelos', '/var/www/html/magia/gestion/vista', '/var/www/html/magia/gestion/reg'),
(2, 1, '/var/www/html/magia', '/var/www/html/magia/gestion', '/var/www/html/magia/gestion/controaldor', '/var/www/html/magia/gestion/modelos', '/var/www/html/magia/gestion/vista', '/var/www/html/magia/gestion/reg');

-- --------------------------------------------------------

--
-- Table structure for table `tablas`
--

CREATE TABLE `tablas` (
  `id` int(11) NOT NULL,
  `base_datos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `largo` int(11) NOT NULL,
  `defecto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `iso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `atributos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nulo` int(1) NOT NULL,
  `primaria` int(1) NOT NULL,
  `a_i` int(1) NOT NULL,
  `comentarios` text COLLATE utf8_unicode_ci NOT NULL,
  `clase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identificador` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `marga_agua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` text COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(1) NOT NULL,
  `solo_lectura` int(1) NOT NULL,
  `obligatorio` int(1) NOT NULL,
  `orden` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tablas`
--

INSERT INTO `tablas` (`id`, `base_datos`, `nombre`, `tipo`, `largo`, `defecto`, `iso`, `atributos`, `nulo`, `primaria`, `a_i`, `comentarios`, `clase`, `label`, `id_tipo`, `nombres`, `identificador`, `marga_agua`, `valor`, `activo`, `solo_lectura`, `obligatorio`, `orden`, `estatus`) VALUES
(1, 'demo', 'nombres', 'texto', 50, 'robin', 'iso_latin_8', 'atri, atri, atri, ', 0, 0, 0, 'este es un test', 'form-control', 'Nombres', 1, 'Nombres en plural', 'nombres', 'Ponga aca su nombre', '$valor', 1, 0, 1, 10, 1),
(2, 'demo', 'apelidos', 'texto', 50, 'Coello', 'iso_latin-o', 'atri, atri, atri', 1, 0, 0, 'test', 'form-control', 'Apellidos', 1, 'nombre', 'nombres', 'Ponga su apelldo', '$valores', 0, 0, 0, 20, 1),
(3, 'demo', 'tel', 'texto', 50, '', '', '', 0, 0, 0, '', 'form-control', 'Teléfono', 1, 'tel', 'tel', 'Ponga su telefono aca', '$tel', 0, 0, 1, 50, 1);

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
(1, 'text', 1, 1),
(2, 'date', 1, 1),
(3, 'textarea', 30, 1),
(4, 'select', 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base_datos`
--
ALTER TABLE `base_datos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `base_datos` (`base_datos`),
  ADD UNIQUE KEY `base_datos_2` (`base_datos`);

--
-- Indexes for table `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tabla` (`id_tabla`);

--
-- Indexes for table `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `base_datos` (`base_datos`);

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
-- AUTO_INCREMENT for table `base_datos`
--
ALTER TABLE `base_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tablas`
--
ALTER TABLE `tablas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `formularios`
--
ALTER TABLE `formularios`
  ADD CONSTRAINT `formularios_ibfk_1` FOREIGN KEY (`id_tabla`) REFERENCES `tablas` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tablas`
--
ALTER TABLE `tablas`
  ADD CONSTRAINT `tablas_ibfk_1` FOREIGN KEY (`base_datos`) REFERENCES `base_datos` (`base_datos`) ON UPDATE CASCADE;




--
-- Dumping data for table `_menu`
--

INSERT INTO `_menu` (`id`, `ubicacion`, `padre`, `label`, `url`, `icono`, `orden`) VALUES

(null, 'top', 'magia', 'base_datos', '?p=base_datos&c=index', 'folder-close', 0),
(null, 'top', 'magia', 'rutas', '?p=rutas&c=index', 'folder-close', 0),
(null, 'top', 'magia', 'tablas', '?p=tablas&c=index', 'folder-close', 0),
(null, 'top', 'magia', 'tipos', '?p=tipos&c=index', 'folder-close', 0),
(null, 'top', 'magia', 'formularios', '?p=formularios&c=index', 'folder-close', 0),
(null, 'top', 'magia', 'Magia', '?p=magia', 'book', 0);


--
-- Dumping data for table `_paginas`
--

INSERT INTO `_paginas` (`id`, `pagina`) VALUES
(null, 'base_datos'),
(null, 'formularios'),
(null, 'rutas'),
(null, 'tablas'),
(null, 'tipos');


INSERT INTO `_permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES
(null, 'root', 'base_datos', '1111'),
(null, 'root', 'rutas', '1111'),
(null, 'root', 'tablas', '1111'),
(null, 'root', 'tipos', '1111'),
(null, 'root', 'formularios', '1111');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
