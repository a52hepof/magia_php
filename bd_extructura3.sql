-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 05:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventos2`
--

-- --------------------------------------------------------




--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(50) COLLATE utf8_bin NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `empresa`, `estatus`) VALUES
(1, 'Casa de la cultura Ecuatoriana', 1),
(2, 'Casa Pichincha', 1),
(3, 'Casa de guayaquil', 1),
(4, 'Casa', 0);

-- --------------------------------------------------------
--
-- Table structure for table `_contenido`
--

CREATE TABLE `_contenido` (
  `id` int(11) NOT NULL,
  `frase` varchar(250) COLLATE utf8_bin NOT NULL,
  `contexto` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_contenido`
--

INSERT INTO `_contenido` (`id`, `frase`, `contexto`) VALUES
(4, 'Inicio', NULL),
(5, 'Casa', '');

-- --------------------------------------------------------

--
-- Table structure for table `_grupos`
--

CREATE TABLE `_grupos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_grupos`
--

INSERT INTO `_grupos` (`id`, `grupo`) VALUES
(12, 'administradores'),
(14, 'invitados'),
(11, 'root'),
(13, 'usuarios');

-- --------------------------------------------------------

--
-- Table structure for table `_idiomas`
--

CREATE TABLE `_idiomas` (
  `id` int(11) NOT NULL,
  `idioma` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_idiomas`
--

INSERT INTO `_idiomas` (`id`, `idioma`, `nombre`) VALUES
(1, 'es_ES', 'Español (España)'),
(2, 'es_EC', 'Español (Ecuador)'),
(3, 'fr_BE', 'Francés (Belgica)');

-- --------------------------------------------------------

--
-- Table structure for table `_menu`
--

CREATE TABLE `_menu` (
  `id` int(11) NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `padre` varchar(50) COLLATE utf8_bin NOT NULL,
  `label` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL,
  `icono` varchar(50) COLLATE utf8_bin NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `_paginas`
--

CREATE TABLE `_paginas` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



-- --------------------------------------------------------

--
-- Table structure for table `_permisos`
--

CREATE TABLE `_permisos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL,
  `permiso` varchar(4) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `_traducciones`
--

CREATE TABLE `_traducciones` (
  `id` int(11) NOT NULL,
  `frase` varchar(250) COLLATE utf8_bin NOT NULL,
  `idioma` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `traduccion` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `_usuarios`
--

CREATE TABLE `_usuarios` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_usuarios`
--

INSERT INTO `_usuarios` (`id`, `id_empresa`, `grupo`, `usuario`, `clave`, `estatus`) VALUES
(1, 1, 'root', 'root', 'root', 1),
(2, 1, 'administradores', 'admin', 'admin', 1),
(3, 1, 'usuarios', 'usuario', 'usuario', 1),
(4, 1, 'invitados', 'invitado', 'invitado', 1),
(7, 1, 'administradores', 'root', 'root', 0);

--
-- Indexes for dumped tables
--



--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_contenido`
--
ALTER TABLE `_contenido`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frase_UNIQUE` (`frase`,`contexto`);

--
-- Indexes for table `_grupos`
--
ALTER TABLE `_grupos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grupo_UNIQUE` (`grupo`);

--
-- Indexes for table `_idiomas`
--
ALTER TABLE `_idiomas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idioma` (`idioma`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `_menu`
--
ALTER TABLE `_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_paginas`
--
ALTER TABLE `_paginas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagina_UNIQUE` (`pagina`);

--
-- Indexes for table `_permisos`
--
ALTER TABLE `_permisos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grupo_pagina` (`grupo`,`pagina`),
  ADD KEY `fk_permisos_paginas_idx` (`pagina`),
  ADD KEY `fk_permisos_grupos_idx` (`grupo`);

--
-- Indexes for table `_traducciones`
--
ALTER TABLE `_traducciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frase` (`frase`,`idioma`) USING BTREE,
  ADD KEY `fk_traduccion_idioma_idx` (`idioma`);

--
-- Indexes for table `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_empresa` (`id_empresa`,`grupo`,`usuario`),
  ADD KEY `grupo` (`grupo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
--
-- AUTO_INCREMENT for table `_contenido`
--
ALTER TABLE `_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_grupos`
--
ALTER TABLE `_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `_idiomas`
--
ALTER TABLE `_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_menu`
--
ALTER TABLE `_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `_paginas`
--
ALTER TABLE `_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `_permisos`
--
ALTER TABLE `_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `_traducciones`
--
ALTER TABLE `_traducciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for table `_permisos`
--
ALTER TABLE `_permisos`
  ADD CONSTRAINT `fk_permisos_grupos` FOREIGN KEY (`grupo`) REFERENCES `_grupos` (`grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_permisos_paginas` FOREIGN KEY (`pagina`) REFERENCES `_paginas` (`pagina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `_traducciones`
--
ALTER TABLE `_traducciones`
  ADD CONSTRAINT `_traducciones_ibfk_1` FOREIGN KEY (`frase`) REFERENCES `_contenido` (`frase`),
  ADD CONSTRAINT `_traducciones_ibfk_2` FOREIGN KEY (`idioma`) REFERENCES `_idiomas` (`idioma`);

--
-- Constraints for table `_usuarios`
--
ALTER TABLE `_usuarios`
  ADD CONSTRAINT `_usuarios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `_usuarios_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `_grupos` (`grupo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
