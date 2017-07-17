-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 03:48 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pato`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualizaciones`
--

CREATE TABLE `actualizaciones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `requiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `ejecutar` text COLLATE utf8_unicode_ci NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) NOT NULL,
  `idioma` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_documento` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruc_prefijo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saludo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpostal` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notas` text COLLATE utf8_unicode_ci,
  `tipo` int(10) DEFAULT '0',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `es_contacto` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estrellas` int(11) DEFAULT '1',
  `estatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `idioma`, `tipo_documento`, `ruc_prefijo`, `numero_documento`, `empresa`, `contacto`, `saludo`, `direccion`, `cpostal`, `ciudad`, `provincia`, `pais`, `tel`, `fax`, `email`, `notas`, `tipo`, `fecha_registro`, `es_contacto`, `estrellas`, `estatus`) VALUES
(34, 'es_ES', '', '', '', 'ZFacturas.be', 'Robinson Coello S.', 'Mr.', '', '', 'Bruxelles', '', 'Belgique', '+32474624707', '', 'robincoello@hotmail.com', '', 0, '2017-06-21 08:50:22', '', 1, 1),
(57, 'es_ES', 'TVA', 'BE', '', 'Jiholabo', '', 'M.', '', '', '', 'null', 'Belgique', '', '', 'admin2@facturas.be', '', 0, '2017-06-27 03:27:41', '', 1, 1),
(58, '', 'TVA', 'BE', '', 'Jiholabo', 'Jose Luis', 'M.', '', '', '', 'null', 'Belgique', '', '', 'gerente@facturas.be', '', 0, '2017-06-27 03:39:40', NULL, 1, 1),
(59, 'es_ES', 'TVA', 'DE', '5252.52', 'Angela Merkel S.A.', 'Angela Merkel', 'M.', 'Av de la luz 21', '5252', 'Cologne', 'null', 'Alemagne', '', '', 'de@facturas.be', '', 0, '2017-06-27 12:02:29', NULL, 1, 1),
(1000, 'es_ES', 'TVA', 'BE', '', 'Jiholabo', 'Admin', 'M.', '', '', '', 'null', 'Belgique', '', '', 'admin@facturas.be', '', 0, '2017-06-27 03:26:21', '', 1, 1),
(1052, 'es_ES', 'TVA', 'BE', '123.123.123', 'Labo ABC', 'Luc Van Osta', 'M.', 'Rue de la constitution 15', '1070', 'Bruxelles', 'null', 'Belgique', '+32123456', '+32454566', 'luc@facturas.be', 'test', 0, '2017-06-27 03:12:49', '', 1, 1),
(1053, '', 'TVA', 'UK', '9865.32500', 'London Audio LC', 'Jhon Smith', 'M.', 'London street 251', 'N58W52', 'London', 'null', 'England', '+449898989898', '', 'london@facturas.be', '', 0, '2017-06-27 03:14:09', NULL, 1, 1),
(1054, 'es_ES', 'TVA', 'ES', '456.321.222', 'Madrid LABO SA', 'Anamaria Marcil', 'Sra.', 'Calle de la torre 25', '809650', 'Madrid', 'null', 'España', '+349856985', '', 'espana@facturas.be', '', 0, '2017-06-27 03:16:05', '', 1, 1),
(1055, 'es_ES', 'TVA', 'FR', '888.36.3', 'Francia Labo', 'Jean Pierre Merci', 'M.', 'Rue Eiffel 25', '558554', 'Paris', 'null', 'France', '+3352525225', '+336965452', 'france@facturas.be', '', 0, '2017-06-27 03:17:45', '', 1, 1),
(1056, 'en_GB', 'L\'horloge', 'L\'horloge', 'L\'horloge', 'L\'horloge', 'L\'horloge', 'L\'horloge', 'L\'horloge  l\'ecole', '\'', 'L\'horloge', 'null', 'L\'horloge', 'L\'horloge', 'L\'horloge', 'robincoello@hotmail.com.com', 'L\'horloge', 0, '2017-06-28 12:43:10', '', 1, 1),
(1057, 'es_ES', 'TVA', 'BE', 'demo', 'Demo SPRL', 'Demo DEmo', 'M.', 'Anveres', '2015', '', 'null', 'Belgique', '', '', 'demo@demo.com', '', 0, '2017-06-28 12:47:54', '', 1, 1),
(1058, 'es_ES', 'TVA', 'BE', '202020202020', 'ALGO SPRL', 'Andres Peralta', 'M.', 'Cale de la Concordia 25', '54221', 'Buenos Aires', 'null', 'Argentina', '', '', 'argentina@facturas.be', '', 0, '2017-06-28 16:36:57', NULL, 1, 1),
(1059, 'es_ES', 'TVA', 'BE', '', 'Audio Pato SA', 'Patricia Castro', 'M.', '', '', 'Anveres', 'null', 'Belgique', '', '', 'pato@latinos.be', '', 0, '2017-06-28 23:08:33', '', 1, 0),
(1060, 'fr_BE', 'TVA', 'BE', '000.000.000', 'Liege Audio SPRL', 'Marck Coumans', 'M.', 'Avenue de la reine 25', '4920', 'Liege', 'null', 'Belgique', '', '', 'liege@facturas.be', '', 0, '2017-06-30 12:58:26', NULL, 1, 1),
(1061, 'es_ES', 'TVA', 'BE', '33.222.111', 'Andres S.A.', 'Andres Van Osta', 'M.', 'Rue de la constitution 25', '1070', 'Bruxelles', 'null', 'Belgique', '', '', 'andres@facturas.be', '', 0, '2017-06-30 23:17:26', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `p` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `argumento` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(429, '', NULL),
(454, '#', NULL),
(378, '% Traducción', NULL),
(183, '+322123456', NULL),
(180, '000.111.222', NULL),
(420, '1', NULL),
(186, '1000', NULL),
(199, '123, sin ceros al inicio', NULL),
(221, '123.123.123', NULL),
(185, '123.456.789', NULL),
(284, 'A', NULL),
(272, 'Acceso no permitido', NULL),
(270, 'Acceso restrinjido', NULL),
(18, 'Accion', NULL),
(279, 'Acción', NULL),
(437, 'Activar', NULL),
(35, 'Activo', NULL),
(245, 'Activo, puede realizar pedidos', NULL),
(151, 'Al crear un nuevo grupo debe también configurar los permisos que este tendra en el sistema', NULL),
(135, 'Alto', NULL),
(85, 'Anti ruido', NULL),
(99, 'Anti-Bactérie', NULL),
(276, 'Area restinjida', NULL),
(286, 'Argumento', NULL),
(133, 'Atención', NULL),
(188, 'Av. Louise 265', NULL),
(134, 'Ayuda', NULL),
(179, 'BE', NULL),
(225, 'Belgique', NULL),
(36, 'Bloqueado', NULL),
(246, 'Bloqueado, No puede realizar pedidos', NULL),
(198, 'Bon', NULL),
(254, 'Bon n:', NULL),
(65, 'Bon n°', NULL),
(255, 'Bon n°:', NULL),
(419, 'Borar', NULL),
(262, 'Borrado', NULL),
(260, 'Borrar', NULL),
(187, 'Bruxelles', NULL),
(79, 'Bte', NULL),
(13, 'Buscar', NULL),
(398, 'Buscar un contacto', NULL),
(253, 'Busqueda detallada', NULL),
(283, 'C', NULL),
(358, 'Cambiar', NULL),
(6, 'Cambiar clave', NULL),
(357, 'Cambiar contacto', NULL),
(355, 'Cambiar de clave', NULL),
(395, 'Cambiar el grupo por:', NULL),
(394, 'Cambiar el grupo por:...', NULL),
(356, 'Cancelar', NULL),
(66, 'Centro auditivo', NULL),
(162, 'Ciudad', NULL),
(40, 'Clave', NULL),
(200, 'Clave Actual', NULL),
(370, 'Clave actual incorrecta', NULL),
(351, 'Claves nueva y repetición no son iguales', NULL),
(25, 'Contacto', NULL),
(396, 'Contactos', NULL),
(217, 'Contactos sin usuario', NULL),
(390, 'Codigo', NULL),
(116, 'Codo suave', NULL),
(110, 'Color derecha', NULL),
(106, 'Color izquierda', NULL),
(403, 'Columnas disponibles', NULL),
(89, 'Conduit seul', NULL),
(75, 'Construcción orejera', NULL),
(139, 'Contacte con el administrador', NULL),
(369, 'Contenido', NULL),
(15, 'Contexto', NULL),
(88, 'Coquille', NULL),
(113, 'Cordon', NULL),
(424, 'Correcciones', NULL),
(161, 'Cpostal', NULL),
(418, 'Crear', NULL),
(244, 'Cuenta bloqueada, no puede realizar pedidos', NULL),
(82, 'Custom Dume', NULL),
(224, 'Código postal', NULL),
(70, 'De n°', NULL),
(342, 'Demo', NULL),
(105, 'Derecha', NULL),
(438, 'Desactivar', NULL),
(27, 'Descripcion', NULL),
(64, 'Detalles', NULL),
(339, 'Detalles del pedido', NULL),
(160, 'Direccion', NULL),
(227, 'Dirección', NULL),
(84, 'Dormir', NULL),
(77, 'Dura', NULL),
(448, 'Dure', NULL),
(63, 'Editar', NULL),
(143, 'Editar _contenido', NULL),
(196, 'Editar _grupos', NULL),
(353, 'Editar _idiomas', NULL),
(62, 'Editar _menu', NULL),
(128, 'Editar _paginas', NULL),
(142, 'Editar _permisos', NULL),
(149, 'Editar _traducciones', NULL),
(237, 'Editar _usuarios', NULL),
(191, 'Editar contactos', NULL),
(414, 'Editar logs', NULL),
(153, 'Editar pedidos', NULL),
(392, 'Ejecutar', NULL),
(413, 'El contenido se genera automaticamnte, no puede agregar', NULL),
(265, 'El pedido esta en siendo tratado', NULL),
(266, 'El pedido esta en siendo tratado, ya no puede editarlo', NULL),
(26, 'Email', NULL),
(235, 'Email ya existe en la base de datos', NULL),
(24, 'Empresa', NULL),
(226, 'Empresa SPRL', NULL),
(258, 'En proceso', NULL),
(261, 'Enviado', NULL),
(259, 'Enviado a contacto', NULL),
(118, 'Enviar', NULL),
(90, 'Epaulement', NULL),
(376, 'Error', NULL),
(421, 'Error Licencia', NULL),
(176, 'Es contacto', NULL),
(169, 'Es_contacto', NULL),
(144, 'Esta acción puede comprometar la seguridad de su web, esta seguro?', NULL),
(30, 'Estatus', NULL),
(268, 'Estatus del pedidoBorrado', NULL),
(230, 'Este pedido no le pertenece', NULL),
(273, 'Estimado susana@gmail.com, ud no puede realizar la accion [ver] en la pagina [contactos]', NULL),
(275, 'Estimado usuario, ud no puede realizar esta acción en esta página.', NULL),
(274, 'Estimado usuario, ud no puede realizar la acción en esta página.', NULL),
(170, 'Estrellas', NULL),
(166, 'Fax', NULL),
(28, 'Fecha', NULL),
(175, 'Fecha registro', NULL),
(168, 'Fecha_registro', NULL),
(115, 'Fil nylon', NULL),
(256, 'Formato texto', NULL),
(14, 'Frase', NULL),
(74, 'Grave', NULL),
(20, 'Grupo', NULL),
(195, 'Grupos que el sistema tiene', NULL),
(387, 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\"></a></b> aca para actualizar su sistema', NULL),
(388, 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\">aca</a></b> para actualizar su sistema', NULL),
(386, 'Hay una nueva versión, click aca para actualizar su sistema', NULL),
(112, 'Hoka', NULL),
(343, 'Hola', NULL),
(192, 'ID', NULL),
(57, 'Icono', NULL),
(197, 'Id', NULL),
(288, 'Id_pedido', NULL),
(44, 'Idioma', NULL),
(145, 'Idiomas', NULL),
(117, 'Implante', NULL),
(426, 'Index', NULL),
(136, 'Info', NULL),
(8, 'Inicio', NULL),
(87, 'Invisible', NULL),
(92, 'Iros', NULL),
(345, 'Items', NULL),
(103, 'Izquierda', NULL),
(55, 'Label', NULL),
(205, 'Letras, números, signos [&é#§çà, etc]', NULL),
(204, 'Letras, números, signos[&é#§çà, etc]', NULL),
(72, 'Ligera', NULL),
(12, 'Lista', NULL),
(16, 'Lista de _contenido', NULL),
(21, 'Lista de _grupos', NULL),
(46, 'Lista de _idiomas', NULL),
(59, 'Lista de _menu', NULL),
(122, 'Lista de _paginas', NULL),
(50, 'Lista de _permisos', NULL),
(125, 'Lista de _traducciones', NULL),
(41, 'Lista de _usuarios', NULL),
(393, 'Lista de actualizaciones', NULL),
(171, 'Lista de contactos', NULL),
(289, 'Lista de logs', NULL),
(31, 'Lista de pedidos', NULL),
(209, 'Lista de usuarios', NULL),
(189, 'Login', NULL),
(7, 'Logout', NULL),
(415, 'Logs, no se puede editar', NULL),
(108, 'Marques', NULL),
(94, 'Materiales', NULL),
(73, 'Media', NULL),
(269, 'Mis pedidos', NULL),
(250, 'Mix', NULL),
(86, 'Modelos', NULL),
(109, 'Models', NULL),
(447, 'Molle', NULL),
(83, 'Natation', NULL),
(211, 'No', NULL),
(138, 'No disponible', NULL),
(239, 'No se puede agregar usuarios root', NULL),
(381, 'No tiene permiso para editar pedidos que no le pertenecen', NULL),
(427, 'No traducidas', NULL),
(219, 'No, crear uno', NULL),
(231, 'No, crear uno.', NULL),
(45, 'Nombre', NULL),
(67, 'Nombre del contacto', NULL),
(222, 'Nombres y apellidos', NULL),
(29, 'Notas', NULL),
(17, 'Nueva', NULL),
(359, 'Nueva Clave', NULL),
(201, 'Nueva clave', NULL),
(130, 'Nuevo', NULL),
(126, 'Nuevo _contenido', NULL),
(140, 'Nuevo _grupos', NULL),
(121, 'Nuevo _idiomas', NULL),
(60, 'Nuevo _menu', NULL),
(129, 'Nuevo _paginas', NULL),
(141, 'Nuevo _permisos', NULL),
(148, 'Nuevo _traducciones', NULL),
(42, 'Nuevo _usuarios', NULL),
(417, 'Nuevo actualizaciones', NULL),
(229, 'Nuevo contacto', NULL),
(177, 'Nuevo contactos', NULL),
(281, 'Nuevo logs', NULL),
(306, 'Nuevo pedido vía la web', NULL),
(33, 'Nuevo pedidos', NULL),
(210, 'Nuevo usuario', NULL),
(214, 'Nuevo usuario en el sistema', NULL),
(181, 'Numero TVA', NULL),
(178, 'Numero de tva', NULL),
(174, 'Numero documento', NULL),
(158, 'Numero_documento', NULL),
(182, 'Número TVA', NULL),
(252, 'Número no existe', NULL),
(137, 'Ok', NULL),
(238, 'Olvido el email', NULL),
(431, 'Olvido el nombre del grupo', NULL),
(408, 'Olvido el número de pedido', NULL),
(409, 'Olvido el número de pedido 34', NULL),
(236, 'Olvido email', NULL),
(352, 'Olvido su clave actual', NULL),
(453, 'Opcion', NULL),
(111, 'Opciones', NULL),
(430, 'Operación no realizada', NULL),
(58, 'Orden', NULL),
(93, 'Otro', NULL),
(100, 'Otro 1', NULL),
(101, 'Otro 2', NULL),
(282, 'P', NULL),
(54, 'Padre', NULL),
(48, 'Pagina', NULL),
(114, 'Pailletes', NULL),
(164, 'Pais', NULL),
(216, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>', NULL),
(218, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>, si el contacto ya tiene un login no aparecera en esta lista', NULL),
(215, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de contactos', NULL),
(68, 'Payant', NULL),
(228, 'País', NULL),
(446, 'Pedidda Auditiva', NULL),
(285, 'Pedido', NULL),
(379, 'Pedido no existe o no puede ser editado', NULL),
(247, 'Pedido no le pertenece', NULL),
(380, 'Pedido no le pertenece, o no tiene permiso para editarlo', NULL),
(407, 'Pedido no puede ser editado', NULL),
(232, 'Pedidos', NULL),
(251, 'Pedidos Editar', NULL),
(71, 'Perdida auditiva', NULL),
(49, 'Permiso', NULL),
(242, 'Por defecto se asignara el grupo centros a todo nuevo usuario', NULL),
(91, 'Prince de Crave', NULL),
(163, 'Provincia', NULL),
(278, 'Página', NULL),
(405, 'Páginas', NULL),
(107, 'RITE / SLIM TUBE', NULL),
(23, 'Ref', NULL),
(257, 'Registrado', NULL),
(37, 'Registrar', NULL),
(147, 'Registrar idioma', NULL),
(69, 'Remake', NULL),
(202, 'Repita', NULL),
(206, 'Repita aca la nueva clave', NULL),
(391, 'Requiere', NULL),
(208, 'Resultados de su busqueda', NULL),
(120, 'Resultados de su busqueda en ', NULL),
(451, 'Resultados de su busqueda: ', NULL),
(80, 'Rite', NULL),
(173, 'Ruc prefijo', NULL),
(157, 'Ruc_prefijo', NULL),
(95, 'Résine', NULL),
(159, 'Saludo', NULL),
(212, 'Si', NULL),
(193, 'Si no esta seguro, no modifique nada porfavor', NULL),
(233, 'Si un contacto ya tiene pedidos registrados, no se puede cambiar de email', NULL),
(96, 'Silicone', NULL),
(81, 'Slim Tube', NULL),
(443, 'Solo los pedidos con estatus Registrado pueden ser editados', NULL),
(442, 'Solo los pedidos con estatus Registradopueden ser editados', NULL),
(223, 'Sr. Sra. Srta. Dr. Dra. ...', NULL),
(203, 'Su clave actual', NULL),
(76, 'Suave', NULL),
(422, 'System code is incorrect', NULL),
(423, 'System code is incorrect (Licence error)', NULL),
(220, 'TVA', NULL),
(165, 'Tel', NULL),
(98, 'Thermosoft', NULL),
(97, 'Thermotec', NULL),
(213, 'Tiene login', NULL),
(167, 'Tipo', NULL),
(172, 'Tipo documento', NULL),
(156, 'Tipo_documento', NULL),
(78, 'Tipos', NULL),
(280, 'Todos', NULL),
(124, 'Traduccion', NULL),
(368, 'Traducción', NULL),
(377, 'Traducido', NULL),
(190, 'Tva', NULL),
(53, 'Ubicacion', NULL),
(412, 'Ubicación', NULL),
(344, 'Un nuevo pedido se a registrado en el sistema', NULL),
(194, 'Una mala manipulación puede comprometer la seguridad de su sistema', NULL),
(361, 'Una vez la clave cambiada, tendra que volver a conectarse con la nueva clave.', NULL),
(56, 'Url', NULL),
(404, 'Usado para ingresar al sistema', NULL),
(39, 'Usuario', NULL),
(241, 'Usuarios', NULL),
(346, 'Valor', NULL),
(102, 'Ventilación', NULL),
(104, 'Ventilation Droite', NULL),
(207, 'Ver', NULL),
(267, 'Ya no puede editar este pedido', NULL),
(11, '_contenido', NULL),
(19, '_grupos', NULL),
(43, '_idiomas', NULL),
(51, '_menu', NULL),
(452, '_opciones', NULL),
(52, '_paginas', NULL),
(47, '_permisos', NULL),
(123, '_traducciones', NULL),
(38, '_usuarios', NULL),
(292, 'a', NULL),
(362, 'aa', NULL),
(34, 'aaaa-mm-dd', NULL),
(402, 'acción', NULL),
(439, 'activar', NULL),
(389, 'actualizaciones', NULL),
(347, 'administradores', NULL),
(435, 'ana', NULL),
(331, 'anti_bacterie', NULL),
(320, 'anti_bruit', NULL),
(428, 'atraducir', NULL),
(363, 'bb', NULL),
(248, 'borrar', NULL),
(249, 'borrarr', NULL),
(314, 'bte', NULL),
(119, 'buscar', NULL),
(264, 'buscar_segun_estatus', NULL),
(291, 'c', NULL),
(132, 'cambiar_clave', NULL),
(360, 'cambiar_clave_otros', NULL),
(263, 'cambiar_estatus', NULL),
(375, 'cambiar_idioma', NULL),
(432, 'casa', NULL),
(384, 'centro', NULL),
(348, 'centros', NULL),
(400, 'ciudad', NULL),
(382, 'contacto', NULL),
(155, 'contactos', NULL),
(365, 'contactos_otros', NULL),
(323, 'conduit_seul', NULL),
(322, 'coquille', NULL),
(334, 'cordon', NULL),
(425, 'correccion', NULL),
(337, 'coude_soupe', NULL),
(304, 'couleur_droite', NULL),
(301, 'couleur_gauche', NULL),
(32, 'crear', NULL),
(317, 'custom_dume', NULL),
(440, 'demo', NULL),
(319, 'dormir', NULL),
(434, 'dos', NULL),
(298, 'du_numero', NULL),
(313, 'dure', NULL),
(61, 'editar', NULL),
(152, 'email', NULL),
(383, 'empresa', NULL),
(324, 'epaulemnent', NULL),
(234, 'esss', NULL),
(341, 'export_cvs', NULL),
(410, 'export_google', NULL),
(340, 'export_sql', NULL),
(441, 'factura', NULL),
(436, 'farmacia', NULL),
(336, 'fil_nylon', NULL),
(411, 'folder-open', NULL),
(349, 'gerente', NULL),
(311, 'grave', NULL),
(401, 'grupo', NULL),
(333, 'hoka', NULL),
(9, 'home', NULL),
(399, 'id', NULL),
(338, 'implant', NULL),
(10, 'index', NULL),
(184, 'info@mail.com', NULL),
(321, 'invisible', NULL),
(326, 'iros', NULL),
(309, 'legere', NULL),
(287, 'logs', NULL),
(416, 'logs, se crean automaticamante, no se puede crear', NULL),
(302, 'marques', NULL),
(332, 'mix', NULL),
(303, 'models', NULL),
(312, 'molle', NULL),
(310, 'moyenne', NULL),
(318, 'natation', NULL),
(450, 'notas', NULL),
(305, 'notes', NULL),
(354, 'ok', NULL),
(455, 'opcion', NULL),
(445, 'orejera', NULL),
(290, 'p', NULL),
(335, 'pailletes', NULL),
(307, 'payant', NULL),
(22, 'pedidos', NULL),
(297, 'pedidos_contacto', NULL),
(294, 'pedidos_email', NULL),
(296, 'pedidos_empresa', NULL),
(366, 'pedidos_estatus', NULL),
(295, 'pedidos_fecha', NULL),
(385, 'pedidos_id', NULL),
(406, 'pedidos_notas', NULL),
(367, 'pedidos_otros', NULL),
(293, 'pedidos_ref', NULL),
(449, 'perdida_auditiva', NULL),
(364, 'permisos', NULL),
(444, 'perte_auditive', NULL),
(325, 'prince_de_crave', NULL),
(308, 'remake', NULL),
(327, 'resine', NULL),
(315, 'rite', NULL),
(350, 'root', NULL),
(433, 'sex', NULL),
(328, 'silicone', NULL),
(277, 'sin permiso', NULL),
(316, 'slim_tube', NULL),
(240, 't_usuarios', NULL),
(330, 'thermosoft', NULL),
(329, 'thermotec', NULL),
(154, 'txt', NULL),
(131, 'users', NULL),
(456, 'valor', NULL),
(374, 'vendedores', NULL),
(300, 'ventilation_droite', NULL),
(299, 'ventilation_gauche', NULL),
(127, 'ver', NULL),
(146, 'xx_XX', NULL),
(397, 'Último ingreso', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_grupos`
--

CREATE TABLE `_grupos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_grupos`
--

INSERT INTO `_grupos` (`id`, `grupo`, `orden`) VALUES
(11, 'root', 40),
(12, 'administradores', 20),
(13, 'centros', 10),
(14, 'gerente', 30);

-- --------------------------------------------------------

--
-- Table structure for table `_idiomas`
--

CREATE TABLE `_idiomas` (
  `id` int(11) NOT NULL,
  `idioma` varchar(7) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_idiomas`
--

INSERT INTO `_idiomas` (`id`, `idioma`, `nombre`, `activo`, `orden`) VALUES
(1, 'es_ES', 'Español', 1, 40),
(3, 'fr_BE', 'Francés (Belgica)', 1, 10),
(4, 'nl_BE', 'Neerlandés (Bélgica)', 1, 20),
(5, 'en_GB', 'Inglés', 1, 30),
(7, 'it_IT', 'Italiano', 0, 40),
(8, 'de_DE', 'Alemán', 0, 50);

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
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_menu`
--

INSERT INTO `_menu` (`id`, `ubicacion`, `padre`, `label`, `url`, `icono`, `orden`) VALUES
(49, 'top', 'config', '_contenido', '?p=_contenido&c=index', 'book', 0),
(50, 'top', 'config', '_grupos', '?p=_grupos&c=index', 'list-alt', 0),
(51, 'top', 'config', '_idiomas', '?p=_idiomas&c=index', 'globe', 0),
(52, 'top', 'config', '_menu', '?p=_menu&c=index', 'th-list', 0),
(53, 'top', 'config', '_paginas', '?p=_paginas&c=index', 'duplicate', 0),
(54, 'top', 'config', '_permisos', '?p=_permisos&c=index', 'tasks', 0),
(55, 'top', 'config', '_traducciones', '?p=_traducciones&c=index', 'wrench', 0),
(56, 'top', 'config', '_usuarios', '?p=_usuarios&c=index', 'user', 30),
(59, 'top', 'gestion', 'contactos', '?p=contactos&c=index', 'briefcase', 20),
(61, 'top', 'config', 'logs', '?p=logs&c=index', 'duplicate', 0),
(62, 'top', 'config', '_opciones', '?p=_opciones&c=index', 'folder-close', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_opciones`
--

CREATE TABLE `_opciones` (
  `id` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `valor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_opciones`
--

INSERT INTO `_opciones` (`id`, `opcion`, `valor`) VALUES
(12, '_opciones_thead', '{\"id\":\"id\",\"opcion\":\"opcion\",\"valor\":\"valor\"}');

-- --------------------------------------------------------

--
-- Table structure for table `_paginas`
--

CREATE TABLE `_paginas` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_paginas`
--

INSERT INTO `_paginas` (`id`, `pagina`) VALUES
(53, '_contenido'),
(54, '_grupos'),
(55, '_idiomas'),
(56, '_menu'),
(76, '_opciones'),
(57, '_paginas'),
(58, '_permisos'),
(59, '_traducciones'),
(60, '_usuarios'),
(74, 'actualizaciones'),
(63, 'cambiar_clave'),
(72, 'cambiar_clave_otros'),
(73, 'cambiar_idioma'),
(62, 'contactos'),
(64, 'contactos_otros'),
(65, 'home'),
(70, 'logs'),
(61, 'pedidos'),
(69, 'pedidos_estatus'),
(66, 'pedidos_otros'),
(68, 't_usuarios');

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

--
-- Dumping data for table `_permisos`
--

INSERT INTO `_permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES
(164, 'root', '_contenido', '1111'),
(165, 'administradores', '_contenido', '0000'),
(167, 'centros', '_contenido', '0000'),
(168, 'root', '_grupos', '1111'),
(169, 'administradores', '_grupos', '0000'),
(171, 'centros', '_grupos', '0000'),
(172, 'root', '_idiomas', '1111'),
(173, 'administradores', '_idiomas', '0000'),
(175, 'centros', '_idiomas', '0000'),
(176, 'root', '_menu', '1111'),
(177, 'administradores', '_menu', '0000'),
(179, 'centros', '_menu', '0000'),
(180, 'root', '_paginas', '1111'),
(181, 'administradores', '_paginas', '0000'),
(183, 'centros', '_paginas', '0000'),
(184, 'root', '_permisos', '1111'),
(185, 'administradores', '_permisos', '0000'),
(187, 'centros', '_permisos', '0000'),
(188, 'root', '_traducciones', '1111'),
(189, 'administradores', '_traducciones', '0000'),
(191, 'centros', '_traducciones', '0000'),
(192, 'root', '_usuarios', '1111'),
(193, 'administradores', '_usuarios', '0000'),
(195, 'centros', '_usuarios', '0000'),
(196, 'root', 'pedidos', '1111'),
(197, 'administradores', 'pedidos', '1110'),
(199, 'centros', 'pedidos', '1110'),
(200, 'root', 'contactos', '1111'),
(201, 'administradores', 'contactos', '1110'),
(202, 'centros', 'cambiar_clave', '1110'),
(203, 'administradores', 'cambiar_clave', '1110'),
(204, 'root', 'cambiar_clave', '1111'),
(205, 'centros', 'home', '1000'),
(206, 'root', 'pedidos_otros', '1111'),
(207, 'administradores', 'pedidos_otros', '1110'),
(208, 'centros', 'pedidos_otros', '0000'),
(209, 'root', 'home', '1111'),
(210, 'administradores', 'contactos_otros', '1110'),
(211, 'root', 'contactos_otros', '1111'),
(213, 'centros', 'contactos_otros', '0000'),
(214, 'centros', 'contactos', '0000'),
(215, 'root', 't_usuarios', '1111'),
(216, 'administradores', 't_usuarios', '1110'),
(217, 'centros', 'pedidos_estatus', '0000'),
(218, 'administradores', 'pedidos_estatus', '1110'),
(219, 'root', 'pedidos_estatus', '1111'),
(220, 'gerente', 'pedidos_estatus', '1111'),
(221, 'root', 'logs', '1111'),
(222, 'administradores', 'logs', '1110'),
(223, 'root', 'cambiar_clave_otros', '1111'),
(224, 'administradores', 'home', '1110'),
(225, 'gerente', 'home', '1110'),
(226, 'gerente', '_contenido', '1000'),
(227, 'gerente', '_grupos', '1110'),
(230, 'gerente', '_idiomas', '1111'),
(231, 'gerente', '_menu', '0000'),
(232, 'root', 'cambiar_idioma', '1111'),
(233, 'gerente', 'cambiar_idioma', '1110'),
(234, 'centros', 'cambiar_idioma', '1110'),
(235, 'administradores', 'cambiar_idioma', '1110'),
(238, 'administradores', 'cambiar_clave_otros', '1110'),
(239, 'centros', 'cambiar_clave_otros', '0000'),
(240, 'gerente', 'cambiar_clave_otros', '0000'),
(241, 'root', 'actualizaciones', '1111'),
(242, 'administradores', 'actualizaciones', '1110'),
(244, 'root', '_opciones', '1111'),
(245, 'administradores', '_opciones', '1110');

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

--
-- Dumping data for table `_traducciones`
--

INSERT INTO `_traducciones` (`id`, `frase`, `idioma`, `traduccion`) VALUES
(8, 'Cambiar clave', 'es_ES', 'Cambiar clave'),
(9, 'Logout', 'es_ES', 'Logout'),
(10, 'Inicio', 'es_ES', 'Inicio'),
(11, 'home', 'es_ES', 'home'),
(12, 'index', 'es_ES', 'index'),
(13, '_contenido', 'es_ES', 'contenido'),
(14, 'Lista', 'es_ES', 'Lista'),
(15, 'Buscar', 'es_ES', 'Buscar'),
(16, 'Frase', 'es_ES', 'Frase'),
(17, 'Contexto', 'es_ES', 'Contexto'),
(18, 'Lista de _contenido', 'es_ES', 'Lista de _contenido'),
(19, 'Nueva', 'es_ES', 'Nueva'),
(20, 'Accion', 'es_ES', 'Acción'),
(21, '_grupos', 'es_ES', '_grupos'),
(22, 'Grupo', 'es_ES', 'Grupo'),
(23, 'Lista de _grupos', 'es_ES', 'Lista de _grupos'),
(24, 'pedidos', 'es_ES', 'pedidos'),
(25, 'Ref', 'es_ES', 'Ref'),
(26, 'Empresa', 'es_ES', 'Empresa'),
(27, 'Contacto', 'es_ES', 'Contacto'),
(28, 'Email', 'es_ES', 'Email'),
(29, 'Descripcion', 'es_ES', 'Descripcion'),
(30, 'Fecha', 'es_ES', 'Fecha'),
(31, 'Notas', 'es_ES', 'Notas'),
(32, 'Estatus', 'es_ES', 'Estatus'),
(33, 'Lista de pedidos', 'es_ES', 'Lista de pedidos'),
(34, 'crear', 'es_ES', 'crear'),
(35, 'Nuevo pedidos', 'es_ES', 'Nuevo pedidos'),
(36, 'aaaa-mm-dd', 'es_ES', 'aaaa-mm-dd'),
(37, 'Activo', 'es_ES', 'Activo'),
(38, 'Bloqueado', 'es_ES', 'Bloqueado'),
(39, 'Registrar', 'es_ES', 'Registrar'),
(40, '_usuarios', 'es_ES', '_usuarios'),
(41, 'Usuario', 'es_ES', 'Usuario'),
(42, 'Clave', 'es_ES', 'Clave'),
(43, 'Lista de _usuarios', 'es_ES', 'Lista de _usuarios'),
(44, 'Nuevo _usuarios', 'es_ES', 'Nuevo _usuarios'),
(45, '_idiomas', 'es_ES', '_idiomas'),
(46, 'Idioma', 'es_ES', 'Idioma'),
(47, 'Nombre', 'es_ES', 'Nombre'),
(48, 'Lista de _idiomas', 'es_ES', 'Lista de _idiomas'),
(49, '_permisos', 'es_ES', '_permisos'),
(50, 'Pagina', 'es_ES', 'Pagina'),
(51, 'Permiso', 'es_ES', 'Permiso'),
(52, 'Lista de _permisos', 'es_ES', 'Lista de _permisos'),
(53, '_menu', 'es_ES', '_menu'),
(54, '_paginas', 'es_ES', '_paginas'),
(55, 'Ubicacion', 'es_ES', 'Ubicacion'),
(56, 'Padre', 'es_ES', 'Padre'),
(57, 'Label', 'es_ES', 'Label'),
(58, 'Url', 'es_ES', 'Url'),
(59, 'Icono', 'es_ES', 'Icono'),
(60, 'Orden', 'es_ES', 'Orden'),
(61, 'Lista de _menu', 'es_ES', 'Lista de _menu'),
(62, 'Nuevo _menu', 'es_ES', 'Nuevo _menu'),
(63, 'editar', 'es_ES', 'editar'),
(64, 'Editar _menu', 'es_ES', 'Editar _menu'),
(65, 'Editar', 'es_ES', 'Editar'),
(66, 'Detalles', 'es_ES', 'Detalles'),
(67, 'Bon n°', 'es_ES', 'Bon n°'),
(68, 'Centro auditivo', 'es_ES', 'Centro auditivo'),
(69, 'Nombre del contacto', 'es_ES', 'Nombre del contacto'),
(70, 'Payant', 'es_ES', 'Payant'),
(71, 'Remake', 'es_ES', 'Remake'),
(72, 'De n°', 'es_ES', 'De n°'),
(73, 'Perdida auditiva', 'es_ES', 'Perdida auditiva'),
(74, 'Ligera', 'es_ES', 'Ligera'),
(75, 'Media', 'es_ES', 'Media'),
(76, 'Grave', 'es_ES', 'Grave'),
(77, 'Construcción orejera', 'es_ES', 'Construcción orejera'),
(78, 'Suave', 'es_ES', 'Suave'),
(79, 'Dura', 'es_ES', 'Dura'),
(80, 'Tipos', 'es_ES', 'Tipos'),
(81, 'Bte', 'es_ES', 'Bte'),
(82, 'Rite', 'es_ES', 'Rite'),
(83, 'Slim Tube', 'es_ES', 'Slim Tube'),
(84, 'Custom Dume', 'es_ES', 'Custom Dume'),
(85, 'Natation', 'es_ES', 'Natation'),
(86, 'Dormir', 'es_ES', 'Dormir'),
(87, 'Anti ruido', 'es_ES', 'Anti ruido'),
(88, 'Modelos', 'es_ES', 'Modelos'),
(89, 'Invisible', 'es_ES', 'Invisible'),
(90, 'Coquille', 'es_ES', 'Coquille'),
(91, 'Conduit seul', 'es_ES', 'Conduit seul'),
(92, 'Epaulement', 'es_ES', 'Epaulement'),
(93, 'Prince de Crave', 'es_ES', 'Prince de Crave'),
(94, 'Iros', 'es_ES', 'Iros'),
(95, 'Otro', 'es_ES', 'Otro'),
(96, 'Materiales', 'es_ES', 'Materiales'),
(97, 'Résine', 'es_ES', 'Résine'),
(98, 'Silicone', 'es_ES', 'Silicone'),
(99, 'Thermotec', 'es_ES', 'Thermotec'),
(100, 'Thermosoft', 'es_ES', 'Thermosoft'),
(101, 'Anti-Bactérie', 'es_ES', 'Anti-Bactérie'),
(102, 'Otro 1', 'es_ES', 'Otro 1'),
(103, 'Otro 2', 'es_ES', 'Otro 2'),
(104, 'Ventilación', 'es_ES', 'Ventilación'),
(105, 'Izquierda', 'es_ES', 'Izquierda'),
(106, 'Ventilation Droite', 'es_ES', 'Ventilation Droite'),
(107, 'Derecha', 'es_ES', 'Derecha'),
(108, 'Color izquierda', 'es_ES', 'Color izquierda'),
(109, 'RITE / SLIM TUBE', 'es_ES', 'RITE / SLIM TUBE'),
(110, 'Marques', 'es_ES', 'Marques'),
(111, 'Models', 'es_ES', 'Models'),
(112, 'Color derecha', 'es_ES', 'Color derecha'),
(113, 'Opciones', 'es_ES', 'Opciones'),
(114, 'Hoka', 'es_ES', 'Hoka'),
(115, 'Cordon', 'es_ES', 'Cordon'),
(116, 'Pailletes', 'es_ES', 'Pailletes'),
(117, 'Fil nylon', 'es_ES', 'Fil nylon'),
(118, 'Codo suave', 'es_ES', 'Codo suave'),
(119, 'Implante', 'es_ES', 'Implante'),
(120, 'Enviar', 'es_ES', 'Enviar'),
(121, 'buscar', 'es_ES', 'buscar'),
(122, 'Resultados de su busqueda en ', 'es_ES', 'Resultados de su busqueda en '),
(123, 'Nuevo _idiomas', 'es_ES', 'Nuevo _idiomas'),
(124, 'Lista de _paginas', 'es_ES', 'Lista de _paginas'),
(125, '_traducciones', 'es_ES', '_traducciones'),
(126, 'Traduccion', 'es_ES', 'Traduccion'),
(127, 'Lista de _traducciones', 'es_ES', 'Lista de _traducciones'),
(128, 'Nuevo _contenido', 'es_ES', 'Nuevo _contenido'),
(129, 'ver', 'es_ES', 'ver'),
(130, 'Editar _paginas', 'es_ES', 'Editar _paginas'),
(131, 'Nuevo _paginas', 'es_ES', 'Nuevo _paginas'),
(132, 'Nuevo', 'es_ES', 'Nuevo'),
(133, 'users', 'es_ES', 'users'),
(134, 'cambiar_clave', 'es_ES', 'cambiar_clave'),
(135, 'Atención', 'es_ES', 'Atención'),
(136, 'Ayuda', 'es_ES', 'Ayuda'),
(137, 'Alto', 'es_ES', 'Alto'),
(138, 'Info', 'es_ES', 'Info'),
(139, 'Ok', 'es_ES', 'Ok'),
(140, 'No disponible', 'es_ES', 'No disponible'),
(141, 'Contacte con el administrador', 'es_ES', 'Contacte con el administrador'),
(142, 'Nuevo _grupos', 'es_ES', 'Nuevo _grupos'),
(143, 'Nuevo _permisos', 'es_ES', 'Nuevo _permisos'),
(144, 'Editar _permisos', 'es_ES', 'Editar _permisos'),
(145, 'Editar _contenido', 'es_ES', 'Editar _contenido'),
(146, 'Esta acción puede comprometar la seguridad de su web, esta seguro?', 'es_ES', 'Esta acción puede comprometar la seguridad de su web, esta seguro?'),
(147, 'Idiomas', 'es_ES', 'Idiomas'),
(148, 'xx_XX', 'es_ES', 'xx_XX'),
(149, 'Registrar idioma', 'es_ES', 'Registrar idioma'),
(150, 'Nuevo _traducciones', 'es_ES', 'Nuevo _traducciones'),
(151, 'Editar _traducciones', 'es_ES', 'Editar _traducciones'),
(153, 'Al crear un nuevo grupo debe también configurar los permisos que este tendra en el sistema', 'es_ES', 'Al crear un nuevo grupo debe también configurar los permisos que este tendra en el sistema'),
(154, 'email', 'es_ES', 'email'),
(155, 'Editar pedidos', 'es_ES', 'Editar pedidos'),
(156, 'txt', 'es_ES', 'txt'),
(157, 'contactos', 'es_ES', 'contactos'),
(158, 'Tipo_documento', 'es_ES', 'Tipo_documento'),
(159, 'Ruc_prefijo', 'es_ES', 'Ruc_prefijo'),
(160, 'Numero_documento', 'es_ES', 'Numero_documento'),
(161, 'Saludo', 'es_ES', 'Saludo'),
(162, 'Direccion', 'es_ES', 'Direccion'),
(163, 'Cpostal', 'es_ES', 'Cpostal'),
(164, 'Ciudad', 'es_ES', 'Ciudad'),
(165, 'Provincia', 'es_ES', 'Provincia'),
(166, 'Pais', 'es_ES', 'Pais'),
(167, 'Tel', 'es_ES', 'Tel'),
(168, 'Fax', 'es_ES', 'Fax'),
(169, 'Tipo', 'es_ES', 'Tipo'),
(170, 'Fecha_registro', 'es_ES', 'Fecha_registro'),
(171, 'Es_contacto', 'es_ES', 'Es_contacto'),
(172, 'Estrellas', 'es_ES', 'Estrellas'),
(173, 'Lista de contactos', 'es_ES', 'Lista de contactos'),
(174, 'Tipo documento', 'es_ES', 'Tipo documento'),
(175, 'Ruc prefijo', 'es_ES', 'Ruc prefijo'),
(176, 'Numero documento', 'es_ES', 'Numero documento'),
(177, 'Fecha registro', 'es_ES', 'Fecha registro'),
(178, 'Es contacto', 'es_ES', 'Es contacto'),
(179, 'Nuevo contactos', 'es_ES', 'Nuevo contactos'),
(180, 'Numero de tva', 'es_ES', 'Numero de tva'),
(181, 'BE', 'es_ES', 'BE'),
(182, '000.111.222', 'es_ES', '000.111.222'),
(183, 'Numero TVA', 'es_ES', 'Numero TVA'),
(184, 'Número TVA', 'es_ES', 'Número TVA'),
(185, '+322123456', 'es_ES', '+322123456'),
(186, 'info@mail.com', 'es_ES', 'info@mail.com'),
(187, '123.456.789', 'es_ES', '123.456.789'),
(188, '1000', 'es_ES', '1000'),
(189, 'Bruxelles', 'es_ES', 'Bruxelles'),
(190, 'Av. Louise 265', 'es_ES', 'Av. Louise 265'),
(191, 'Login', 'es_ES', 'Login'),
(192, 'Tva', 'es_ES', 'Tva'),
(193, 'Editar contactos', 'es_ES', 'Editar contactos'),
(194, 'ID', 'es_ES', 'ID'),
(195, 'Si no esta seguro, no modifique nada porfavor', 'es_ES', 'Si no esta seguro, no modifique nada porfavor'),
(196, 'Una mala manipulación puede comprometer la seguridad de su sistema', 'es_ES', 'Una mala manipulación puede comprometer la seguridad de su sistema'),
(197, 'Grupos que el sistema tiene', 'es_ES', 'Grupos que el sistema tiene'),
(198, 'Editar _grupos', 'es_ES', 'Editar _grupos'),
(199, 'Id', 'es_ES', 'Id'),
(200, 'Bon', 'es_ES', 'Bon'),
(201, '123, sin ceros al inicio', 'es_ES', '123, sin ceros al inicio'),
(202, 'Clave Actual', 'es_ES', 'Clave Actual'),
(203, 'Nueva clave', 'es_ES', 'Nueva clave'),
(204, 'Repita', 'es_ES', 'Repita'),
(205, 'Su clave actual', 'es_ES', 'Su clave actual'),
(206, 'Letras, números, signos[&é#§çà, etc]', 'es_ES', 'Letras, números, signos[&é#§çà, etc]'),
(207, 'Letras, números, signos [&é#§çà, etc]', 'es_ES', 'Letras, números, signos [&é#§çà, etc]'),
(208, 'Repita aca la nueva clave', 'es_ES', 'Repita aca la nueva clave'),
(209, 'Ver', 'es_ES', 'Ver'),
(210, 'Resultados de su busqueda', 'es_ES', 'Resultados de su busqueda'),
(211, 'Lista de usuarios', 'es_ES', 'Lista de usuarios'),
(212, 'Nuevo usuario', 'es_ES', 'Nuevo usuario'),
(213, 'No', 'es_ES', 'No'),
(214, 'Si', 'es_ES', 'Si'),
(215, 'Tiene login', 'es_ES', 'Tiene login'),
(216, 'Nuevo usuario en el sistema', 'es_ES', 'Nuevo usuario en el sistema'),
(217, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de contactos', 'es_ES', 'Para que un usuario tenga un login, debe estar registrado primero en la lista de contactos'),
(218, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>', 'es_ES', 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>'),
(219, 'Contactos sin usuario', 'es_ES', 'Contactos sin usuario'),
(220, 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>, si el contacto ya tiene un login no aparecera en esta lista', 'es_ES', 'Para que un usuario tenga un login, debe estar registrado primero en la lista de <a href=\"index.php?p=contactos&c=index\">contactos</a>, si el contacto ya tiene un login no aparecera en esta lista'),
(221, 'No, crear uno', 'es_ES', 'No, crear uno'),
(222, 'TVA', 'es_ES', 'TVA'),
(223, '123.123.123', 'es_ES', '123.123.123'),
(224, 'Nombres y apellidos', 'es_ES', 'Nombres y apellidos'),
(225, 'Sr. Sra. Srta. Dr. Dra. ...', 'es_ES', 'Sr. Sra. Srta. Dr. Dra. ...'),
(226, 'Código postal', 'es_ES', 'Código postal'),
(227, 'Belgique', 'es_ES', 'Belgique'),
(228, 'Empresa SPRL', 'es_ES', 'Empresa SPRL'),
(229, 'Dirección', 'es_ES', 'Dirección'),
(230, 'País', 'es_ES', 'País'),
(231, 'Nuevo contacto', 'es_ES', 'Nuevo contacto'),
(232, 'Este pedido no le pertenece', 'es_ES', 'Este pedido no le pertenece'),
(233, 'No, crear uno.', 'es_ES', 'No, crear uno.'),
(234, 'Pedidos', 'es_ES', 'Pedidos'),
(235, 'Si un contacto ya tiene pedidos registrados, no se puede cambiar de email', 'es_ES', 'Si un contacto ya tiene pedidos registrados, no se puede cambiar de email'),
(236, 'esss', 'es_ES', 'esss'),
(237, 'Email ya existe en la base de datos', 'es_ES', 'Email ya existe en la base de datos'),
(238, 'Olvido email', 'es_ES', 'Olvido email'),
(239, 'Editar _usuarios', 'es_ES', 'Editar _usuarios'),
(240, 'Olvido el email', 'es_ES', 'Olvido el email'),
(241, 'No se puede agregar usuarios root', 'es_ES', 'No se puede agregar usuarios root'),
(242, 't_usuarios', 'es_ES', 't_usuarios'),
(243, 'Usuarios', 'es_ES', 'Usuarios'),
(244, 'Por defecto se asignara el grupo centros a todo nuevo usuario', 'es_ES', 'Por defecto se asignara el grupo centros a todo nuevo usuario'),
(246, 'Cuenta bloqueada, no puede realizar pedidos', 'es_ES', 'Cuenta bloqueada, no puede realizar pedidos'),
(247, 'Activo, puede realizar pedidos', 'es_ES', 'Activo, puede realizar pedidos'),
(248, 'Bloqueado, No puede realizar pedidos', 'es_ES', 'Bloqueado, No puede realizar pedidos'),
(249, 'Pedido no le pertenece', 'es_ES', 'Pedido no le pertenece'),
(250, 'borrar', 'es_ES', 'borrar'),
(251, 'borrarr', 'es_ES', 'borrarr'),
(252, 'Mix', 'es_ES', 'Mix'),
(253, 'Pedidos Editar', 'es_ES', 'Pedidos Editar'),
(254, 'Número no existe', 'es_ES', 'Número no existe'),
(255, 'Busqueda detallada', 'es_ES', 'Busqueda detallada'),
(256, 'Bon n:', 'es_ES', 'Bon n:'),
(257, 'Bon n°:', 'es_ES', 'Bon n°:'),
(258, 'Formato texto', 'es_ES', 'Formato texto'),
(259, 'Registrado', 'es_ES', 'Registrado'),
(260, 'En proceso', 'es_ES', 'En proceso'),
(261, 'Enviado a contacto', 'es_ES', 'Enviado a contacto'),
(262, 'Borrar', 'es_ES', 'Borrar'),
(263, 'Enviado', 'es_ES', 'Enviado'),
(264, 'Borrado', 'es_ES', 'Borrado'),
(265, 'cambiar_estatus', 'es_ES', 'cambiar_estatus'),
(266, 'buscar_segun_estatus', 'es_ES', 'buscar_segun_estatus'),
(267, 'El pedido esta en siendo tratado', 'es_ES', 'El pedido esta en siendo tratado'),
(268, 'El pedido esta en siendo tratado, ya no puede editarlo', 'es_ES', 'El pedido esta en siendo tratado, ya no puede editarlo'),
(269, 'Ya no puede editar este pedido', 'es_ES', 'Ya no puede editar este pedido'),
(270, 'Estatus del pedidoBorrado', 'es_ES', 'Estatus del pedidoBorrado'),
(271, 'Mis pedidos', 'es_ES', 'Mis pedidos'),
(283, 'sin permiso', 'es_ES', 'sin permiso'),
(284, 'Página', 'es_ES', 'Página'),
(285, 'Acción', 'es_ES', 'Acción'),
(286, 'Todos', 'es_ES', 'Todos'),
(287, 'Nuevo logs', 'es_ES', 'Nuevo logs'),
(288, 'P', 'es_ES', 'P'),
(289, 'C', 'es_ES', 'C'),
(290, 'A', 'es_ES', 'A'),
(291, 'Pedido', 'es_ES', 'Pedido'),
(292, 'Argumento', 'es_ES', 'Argumento'),
(293, 'logs', 'es_ES', 'logs'),
(294, 'Id_pedido', 'es_ES', 'Id_pedido'),
(295, 'Lista de logs', 'es_ES', 'Lista de logs'),
(296, 'p', 'es_ES', 'p'),
(297, 'c', 'es_ES', 'c'),
(298, 'a', 'es_ES', 'a'),
(299, 'pedidos_ref', 'es_ES', 'Referencia'),
(300, 'pedidos_email', 'es_ES', 'Email'),
(301, 'pedidos_fecha', 'es_ES', 'Fecha del pedido'),
(302, 'pedidos_empresa', 'es_ES', 'Empresa'),
(303, 'pedidos_contacto', 'es_ES', 'Nombre del contacto'),
(304, 'du_numero', 'es_ES', 'De número'),
(305, 'ventilation_gauche', 'es_ES', 'Ventilación izq.'),
(306, 'ventilation_droite', 'es_ES', 'Ventilación der.'),
(307, 'couleur_gauche', 'es_ES', 'Color Izq.'),
(308, 'marques', 'es_ES', 'Marcas'),
(309, 'models', 'es_ES', 'Modelos'),
(310, 'couleur_droite', 'es_ES', 'Color Der.'),
(311, 'notes', 'es_ES', 'Notas'),
(312, 'Nuevo pedido vía la web', 'es_ES', 'Nuevo pedido vía la web'),
(313, 'payant', 'es_ES', 'payant'),
(314, 'remake', 'es_ES', 'remake'),
(315, 'legere', 'es_ES', 'legere'),
(316, 'moyenne', 'es_ES', 'moyenne'),
(317, 'grave', 'es_ES', 'grave'),
(318, 'molle', 'es_ES', 'molle'),
(319, 'dure', 'es_ES', 'dure'),
(320, 'bte', 'es_ES', 'bte'),
(321, 'rite', 'es_ES', 'rite'),
(322, 'slim_tube', 'es_ES', 'slim_tube'),
(323, 'custom_dume', 'es_ES', 'custom_dume'),
(324, 'natation', 'es_ES', 'natation'),
(325, 'dormir', 'es_ES', 'dormir'),
(326, 'anti_bruit', 'es_ES', 'anti_bruit'),
(327, 'invisible', 'es_ES', 'invisible'),
(328, 'coquille', 'es_ES', 'coquille'),
(329, 'conduit_seul', 'es_ES', 'conduit_seul'),
(330, 'epaulemnent', 'es_ES', 'epaulemnent'),
(331, 'prince_de_crave', 'es_ES', 'prince_de_crave'),
(332, 'iros', 'es_ES', 'iros'),
(333, 'resine', 'es_ES', 'resine'),
(334, 'silicone', 'es_ES', 'silicone'),
(335, 'thermotec', 'es_ES', 'thermotec'),
(336, 'thermosoft', 'es_ES', 'thermosoft'),
(337, 'anti_bacterie', 'es_ES', 'anti_bacterie'),
(338, 'mix', 'es_ES', 'mix'),
(339, 'hoka', 'es_ES', 'hoka'),
(340, 'cordon', 'es_ES', 'cordon'),
(341, 'pailletes', 'es_ES', 'pailletes'),
(342, 'fil_nylon', 'es_ES', 'fil_nylon'),
(343, 'coude_soupe', 'es_ES', 'coude_soupe'),
(344, 'implant', 'es_ES', 'implant'),
(675, 'export_cvs', 'es_ES', 'export_cvs'),
(1003, 'export_sql', 'es_ES', 'export_sql'),
(1005, 'Demo', 'es_ES', 'Demo'),
(1006, 'Detalles del pedido', 'es_ES', 'Detalles del pedido'),
(1007, 'Hola', 'es_ES', 'Hola'),
(1008, 'Un nuevo pedido se a registrado en el sistema', 'es_ES', 'Un nuevo pedido se a registrado en el sistema'),
(1009, 'Items', 'es_ES', 'Items'),
(1010, 'Valor', 'es_ES', 'Valor'),
(1011, 'administradores', 'es_ES', 'administradores'),
(1012, 'centros', 'es_ES', 'centros'),
(1013, 'gerente', 'es_ES', 'gerente'),
(1014, 'root', 'es_ES', 'root'),
(1015, 'Claves nueva y repetición no son iguales', 'es_ES', 'Claves nueva y repetición no son iguales'),
(1016, 'Olvido su clave actual', 'es_ES', 'Olvido su clave actual'),
(1017, 'Editar _idiomas', 'es_ES', 'Editar _idiomas'),
(1018, 'ok', 'es_ES', 'ok'),
(1019, 'Cambiar de clave', 'es_ES', 'Cambiar de clave'),
(1020, 'Cancelar', 'es_ES', 'Cancelar'),
(1021, 'Cambiar contacto', 'es_ES', 'Cambiar contacto'),
(1026, 'Cambiar', 'es_ES', 'Cambiar'),
(1027, 'Nueva Clave', 'es_ES', 'Nueva Clave'),
(1028, 'cambiar_clave_otros', 'es_ES', 'cambiar_clave_otros'),
(1031, 'Una vez la clave cambiada, tendra que volver a conectarse con la nueva clave.', 'es_ES', 'Una vez la clave cambiada, tendra que volver a conectarse con la nueva clave.'),
(1032, 'aa', 'es_ES', 'aa'),
(1033, 'bb', 'es_ES', 'bb'),
(1034, 'permisos', 'es_ES', 'permisos'),
(1035, 'contactos_otros', 'es_ES', 'contactos_otros'),
(1036, 'pedidos_estatus', 'es_ES', 'pedidos_estatus'),
(1037, 'pedidos_otros', 'es_ES', 'pedidos_otros'),
(1038, 'Traducción', 'es_ES', 'Traducción'),
(1040, 'Contenido', 'es_ES', 'Contenido'),
(1235, 'Clave actual incorrecta', 'es_ES', 'Clave actual incorrecta'),
(1239, 'vendedores', 'es_ES', 'vendedores'),
(1240, 'cambiar_idioma', 'es_ES', 'cambiar_idioma'),
(1241, 'Error', 'es_ES', 'Error'),
(1287, 'Traducido', 'es_ES', 'Traducido'),
(1288, '% Traducción', 'es_ES', '% Traducción'),
(1371, 'Pedido no existe o no puede ser editado', 'es_ES', 'Pedido no existe o no puede ser editado'),
(1372, 'Pedido no le pertenece, o no tiene permiso para editarlo', 'es_ES', 'Pedido no le pertenece, o no tiene permiso para editarlo'),
(1373, 'No tiene permiso para editar pedidos que no le pertenecen', 'es_ES', 'No tiene permiso para editar pedidos que no le pertenecen'),
(1378, 'contacto', 'es_ES', 'contacto'),
(1379, 'empresa', 'es_ES', 'empresa'),
(1380, 'centro', 'es_ES', 'centro'),
(1381, 'pedidos_id', 'es_ES', 'pedidos_id'),
(1382, 'Hay una nueva versión, click aca para actualizar su sistema', 'es_ES', 'Hay una nueva versión, click aca para actualizar su sistema'),
(1383, 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\"></a></b> aca para actualizar su sistema', 'es_ES', 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\"></a></b> aca para actualizar su sistema'),
(1384, 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\">aca</a></b> para actualizar su sistema', 'es_ES', 'Hay una nueva versión, <b><a href=\"index.php?p=actualizaciones\">aca</a></b> para actualizar su sistema'),
(1385, 'actualizaciones', 'es_ES', 'actualizaciones'),
(1386, 'Codigo', 'es_ES', 'Codigo'),
(1387, 'Requiere', 'es_ES', 'Requiere'),
(1388, 'Ejecutar', 'es_ES', 'Ejecutar'),
(1389, 'Lista de actualizaciones', 'es_ES', 'Lista de actualizaciones'),
(1391, 'Cambiar el grupo por:...', 'es_ES', 'Cambiar el grupo por:...'),
(1392, 'Cambiar el grupo por:', 'es_ES', 'Cambiar el grupo por:'),
(1393, 'Contactos', 'es_ES', 'Contactos'),
(1394, 'Último ingreso', 'es_ES', 'Último ingreso'),
(1395, 'Buscar un contacto', 'es_ES', 'Buscar un contacto'),
(1396, 'id', 'es_ES', 'id'),
(1397, 'ciudad', 'es_ES', 'ciudad'),
(1398, 'grupo', 'es_ES', 'group'),
(1399, 'acción', 'es_ES', 'acción'),
(1400, 'Columnas disponibles', 'es_ES', 'Columnas disponibles'),
(1401, 'Usado para ingresar al sistema', 'es_ES', 'Usado para ingresar al sistema'),
(1402, 'Páginas', 'es_ES', 'Páginas'),
(1403, 'pedidos_notas', 'es_ES', 'Pedidos_notas'),
(1404, 'Pedido no puede ser editado', 'es_ES', 'Pedido no puede ser editado'),
(1405, 'Olvido el número de pedido', 'es_ES', 'Olvido el número de pedido'),
(1408, 'export_google', 'es_ES', 'export_google'),
(1409, 'folder-open', 'es_ES', 'folder-open'),
(1410, 'Ubicación', 'es_ES', 'Ubicación'),
(1411, 'El contenido se genera automaticamnte, no puede agregar', 'es_ES', 'El contenido se genera automaticamnte, no puede agregar'),
(1444, 'Editar logs', 'es_ES', 'Editar logs'),
(1445, 'Logs, no se puede editar', 'es_ES', 'Logs, no se puede editar'),
(1446, 'logs, se crean automaticamante, no se puede crear', 'es_ES', 'logs, se crean automaticamante, no se puede crear'),
(1447, 'Nuevo actualizaciones', 'es_ES', 'Nuevo actualizaciones'),
(1448, 'Crear', 'es_ES', 'Crear'),
(1449, 'Borar', 'es_ES', 'Borar'),
(1450, '1', 'es_ES', '1'),
(1460, 'Error Licencia', 'es_ES', 'Error Licencia'),
(1461, 'System code is incorrect', 'es_ES', 'System code is incorrect'),
(1462, 'System code is incorrect (Licence error)', 'es_ES', 'System code is incorrect (Licence error)'),
(4170, '+322123456', 'en_GB', '+322123456'),
(4174, '+322123456', 'fr_BE', '+322123456'),
(4175, '+322123456', 'nl_BE', '+322123456'),
(4176, 'Correcciones', 'es_ES', 'Correcciones'),
(4177, 'correccion', 'es_ES', 'correccion'),
(4178, 'Index', 'es_ES', 'Index'),
(4179, 'No traducidas', 'es_ES', 'No traducidas'),
(4180, 'atraducir', 'es_ES', 'atraducir'),
(4181, '% Traducción', 'en_GB', '% Translation'),
(4182, '% Traducción', 'fr_BE', '% traduction'),
(4183, '% Traducción', 'nl_BE', '% Translation'),
(4184, '1', 'fr_BE', '1'),
(4185, '1', 'en_GB', '1'),
(4186, '1', 'nl_BE', '1'),
(4187, '1000', 'fr_BE', '1000'),
(4188, '1000', 'en_GB', '1000'),
(4189, '1000', 'nl_BE', '1000'),
(4190, 'A', 'fr_BE', 'A'),
(4191, 'A', 'en_GB', 'A'),
(4192, 'A', 'nl_BE', 'A'),
(4193, '000.111.222', 'fr_BE', '000.111.222'),
(4194, '000.111.222', 'en_GB', '000.111.222'),
(4195, '000.111.222', 'nl_BE', '000.111.222'),
(4196, '123, sin ceros al inicio', 'en_GB', '123, no leading zeros'),
(4197, 'Inicio', 'en_GB', '---'),
(4198, 'Idiomas', 'en_GB', '---'),
(4199, 'Cambiar clave', 'en_GB', '---'),
(4200, 'Logout', 'en_GB', '---'),
(4201, 'pedidos', 'en_GB', '---'),
(4202, 'index', 'en_GB', '---'),
(4203, 'Pedidos', 'en_GB', '---'),
(4204, 'Lista', 'en_GB', '---'),
(4205, 'Busqueda detallada', 'en_GB', '---'),
(4206, 'Id', 'en_GB', '---'),
(4207, 'Ref', 'en_GB', '---'),
(4208, 'Empresa', 'en_GB', '---'),
(4209, 'Contacto', 'en_GB', '---'),
(4210, 'Email', 'en_GB', '---'),
(4211, 'Fecha', 'en_GB', '---'),
(4212, 'Notas', 'en_GB', '---'),
(4213, 'Estatus', 'en_GB', '---'),
(4214, 'Buscar', 'en_GB', '---'),
(4215, 'Nuevo', 'en_GB', '---'),
(4216, 'Bon n°:', 'en_GB', '---'),
(4217, 'Todos', 'en_GB', '---'),
(4218, 'Registrado', 'en_GB', '---'),
(4219, 'En proceso', 'en_GB', '---'),
(4220, 'Enviado', 'en_GB', '---'),
(4221, 'Borrado', 'en_GB', '---'),
(4222, 'Bon n°', 'en_GB', '---'),
(4223, 'Ver', 'en_GB', '---'),
(4224, 'Editar', 'en_GB', '---'),
(4225, '_contenido', 'en_GB', '---'),
(4226, 'Lista de _contenido', 'en_GB', '---'),
(4227, 'Nueva', 'en_GB', '---'),
(4228, 'Index', 'en_GB', '---'),
(4229, 'Correcciones', 'en_GB', '---'),
(4230, 'No traducidas', 'en_GB', '---'),
(4231, 'Frase', 'en_GB', '---'),
(4232, 'Contexto', 'en_GB', '---'),
(4233, 'Accion', 'en_GB', '---'),
(4234, 'cambiar_idioma', 'en_GB', '---'),
(4235, 'Inicio', 'fr_BE', '---'),
(4236, 'Idiomas', 'fr_BE', '---'),
(4237, 'Cambiar clave', 'fr_BE', '---'),
(4238, 'Logout', 'fr_BE', '---'),
(4239, 'pedidos', 'fr_BE', '---'),
(4240, 'index', 'fr_BE', '---'),
(4241, 'Pedidos', 'fr_BE', '---'),
(4242, 'Lista', 'fr_BE', '---'),
(4243, 'Busqueda detallada', 'fr_BE', '---'),
(4244, 'Id', 'fr_BE', '---'),
(4245, '123, sin ceros al inicio', 'fr_BE', '---'),
(4246, 'Ref', 'fr_BE', '---'),
(4247, 'Empresa', 'fr_BE', '---'),
(4248, 'Contacto', 'fr_BE', '---'),
(4249, 'Email', 'fr_BE', '---'),
(4250, 'Fecha', 'fr_BE', '---'),
(4251, 'Notas', 'fr_BE', '---'),
(4252, 'Estatus', 'fr_BE', '---'),
(4253, 'Buscar', 'fr_BE', '---'),
(4254, 'Nuevo', 'fr_BE', '---'),
(4255, 'Bon n°:', 'fr_BE', '---'),
(4256, 'Todos', 'fr_BE', '---'),
(4257, 'Registrado', 'fr_BE', '---'),
(4258, 'En proceso', 'fr_BE', '---'),
(4259, 'Enviado', 'fr_BE', '---'),
(4260, 'Borrado', 'fr_BE', '---'),
(4261, 'Bon n°', 'fr_BE', '---'),
(4262, 'Ver', 'fr_BE', '---'),
(4263, 'Editar', 'fr_BE', '---'),
(4264, '_idiomas', 'fr_BE', '---'),
(4265, 'Lista de _idiomas', 'fr_BE', '---'),
(4266, 'Nueva', 'fr_BE', '---'),
(4267, 'Idioma', 'fr_BE', '---'),
(4268, 'Nombre', 'fr_BE', '---'),
(4269, 'Traducido', 'fr_BE', '---'),
(4270, 'Accion', 'fr_BE', '---'),
(4271, 'cambiar_idioma', 'fr_BE', '---'),
(4272, '', 'es_ES', ''),
(4273, 'Operación no realizada', 'es_ES', 'Operación no realizada'),
(4274, 'Olvido el nombre del grupo', 'es_ES', 'Olvido el nombre del grupo'),
(4275, 'casa', 'es_ES', 'casa'),
(4276, 'sex', 'es_ES', 'sex'),
(4277, 'dos', 'es_ES', 'dos'),
(4278, 'ana', 'es_ES', 'ana'),
(4279, 'farmacia', 'es_ES', 'farmacia'),
(4280, 'Activar', 'es_ES', 'Activar'),
(4281, 'Desactivar', 'es_ES', 'Desactivar'),
(4282, 'activar', 'es_ES', 'activar'),
(4283, 'Inicio', 'it_IT', '---'),
(4284, 'Idiomas', 'it_IT', '---'),
(4285, 'Cambiar clave', 'it_IT', '---'),
(4286, 'Logout', 'it_IT', '---'),
(4287, 'pedidos', 'it_IT', '---'),
(4288, 'index', 'it_IT', '---'),
(4289, 'Pedidos', 'it_IT', '---'),
(4290, 'Lista', 'it_IT', '---'),
(4291, 'Busqueda detallada', 'it_IT', '---'),
(4292, 'Id', 'it_IT', '---'),
(4293, '123, sin ceros al inicio', 'it_IT', '---'),
(4294, 'Ref', 'it_IT', '---'),
(4295, 'Empresa', 'it_IT', '---'),
(4296, 'Contacto', 'it_IT', '---'),
(4297, 'Email', 'it_IT', '---'),
(4298, 'Fecha', 'it_IT', '---'),
(4299, 'Notas', 'it_IT', '---'),
(4300, 'Estatus', 'it_IT', '---'),
(4301, 'Buscar', 'it_IT', '---'),
(4302, 'Nuevo', 'it_IT', '---'),
(4303, 'Bon n°:', 'it_IT', '---'),
(4304, 'Todos', 'it_IT', '---'),
(4305, 'Registrado', 'it_IT', '---'),
(4306, 'En proceso', 'it_IT', '---'),
(4307, 'Enviado', 'it_IT', '---'),
(4308, 'Borrado', 'it_IT', '---'),
(4309, 'Bon n°', 'it_IT', '---'),
(4310, 'Ver', 'it_IT', '---'),
(4311, 'Editar', 'it_IT', '---'),
(4312, '_idiomas', 'it_IT', '---'),
(4313, 'Lista de _idiomas', 'it_IT', '---'),
(4314, 'Nueva', 'it_IT', '---'),
(4315, 'Idioma', 'it_IT', '---'),
(4316, 'Nombre', 'it_IT', '---'),
(4317, 'Traducido', 'it_IT', '---'),
(4318, '% Traducción', 'it_IT', '---'),
(4319, 'Activo', 'it_IT', '---'),
(4320, 'Accion', 'it_IT', '---'),
(4321, 'Desactivar', 'it_IT', '---'),
(4322, 'activar', 'it_IT', '---'),
(4323, 'Activar', 'it_IT', '---'),
(4324, 'cambiar_idioma', 'it_IT', '---'),
(4325, '_idiomas', 'en_GB', '---'),
(4326, 'Lista de _idiomas', 'en_GB', '---'),
(4327, 'Idioma', 'en_GB', '---'),
(4328, 'Nombre', 'en_GB', '---'),
(4329, 'Traducido', 'en_GB', '---'),
(4330, 'Activo', 'en_GB', '---'),
(4331, 'Desactivar', 'en_GB', '---'),
(4332, 'demo', 'es_ES', 'demo'),
(4333, 'factura', 'es_ES', 'factura'),
(4335, 'Solo los pedidos con estatus Registrado pueden ser editados', 'es_ES', 'Solo los pedidos con estatus Registrado pueden ser editados'),
(4336, 'Inicio', 'nl_BE', '---'),
(4337, 'Idiomas', 'nl_BE', '---'),
(4338, 'Cambiar clave', 'nl_BE', '---'),
(4339, 'Logout', 'nl_BE', '---'),
(4340, 'pedidos', 'nl_BE', '---'),
(4341, 'index', 'nl_BE', '---'),
(4342, 'Pedidos', 'nl_BE', '---'),
(4343, 'Lista', 'nl_BE', '---'),
(4344, 'Busqueda detallada', 'nl_BE', '---'),
(4345, 'Id', 'nl_BE', '---'),
(4346, '123, sin ceros al inicio', 'nl_BE', '---'),
(4347, 'Ref', 'nl_BE', '---'),
(4348, 'Empresa', 'nl_BE', '---'),
(4349, 'Contacto', 'nl_BE', '---'),
(4350, 'Email', 'nl_BE', '---'),
(4351, 'Fecha', 'nl_BE', '---'),
(4352, 'Notas', 'nl_BE', '---'),
(4353, 'Estatus', 'nl_BE', '---'),
(4354, 'Buscar', 'nl_BE', '---'),
(4355, 'Nuevo', 'nl_BE', '---'),
(4356, 'Bon n°:', 'nl_BE', '---'),
(4357, 'Todos', 'nl_BE', '---'),
(4358, 'Registrado', 'nl_BE', '---'),
(4359, 'En proceso', 'nl_BE', '---'),
(4360, 'Enviado', 'nl_BE', '---'),
(4361, 'Borrado', 'nl_BE', '---'),
(4362, 'Bon n°', 'nl_BE', '---'),
(4363, 'Ver', 'nl_BE', '---'),
(4364, 'Editar', 'nl_BE', '---'),
(4365, 'cambiar_idioma', 'nl_BE', '---'),
(4366, 'perte_auditive', 'es_ES', 'perte_auditive'),
(4367, 'orejera', 'es_ES', 'orejera'),
(4368, 'Pedidda Auditiva', 'es_ES', 'Pedidda Auditiva'),
(4369, 'Molle', 'es_ES', 'Molle'),
(4370, 'Dure', 'es_ES', 'Dure'),
(4371, 'perdida_auditiva', 'es_ES', 'perdida auditiva'),
(4382, 'notas', 'es_ES', 'notas'),
(4383, '_contenido', 'fr_BE', '---'),
(4384, 'Lista de _contenido', 'fr_BE', '---'),
(4385, 'Index', 'fr_BE', '---'),
(4386, 'Correcciones', 'fr_BE', '---'),
(4387, 'No traducidas', 'fr_BE', '---'),
(4388, 'Frase', 'fr_BE', '---'),
(4389, 'Contexto', 'fr_BE', '---'),
(4390, 'Resultados de su busqueda: ', 'es_ES', 'Resultados de su busqueda: '),
(4391, 'home', 'fr_BE', '---'),
(4392, '_opciones', 'es_ES', '_opciones'),
(4393, 'Opcion', 'es_ES', 'Opcion'),
(4394, '#', 'es_ES', '#'),
(4395, 'opcion', 'es_ES', 'opcion'),
(4396, 'valor', 'es_ES', 'valor');

-- --------------------------------------------------------

--
-- Table structure for table `_usuarios`
--

CREATE TABLE `_usuarios` (
  `id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(260) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `_usuarios`
--

INSERT INTO `_usuarios` (`id`, `grupo`, `usuario`, `clave`, `estatus`) VALUES
(26, 'root', 'robincoello@hotmail.com', '$2y$12$.NFgCpyKemWZfgJiEUndLe48Uz4R5KKFckOuF0uF9R/Pnd0WxVWx2', 1),
(43, 'centros', 'luc@facturas.be', '$2y$12$4Tu7qIvoC8RoMNiTzA4YMei6l4bXTNpJhBQEmhNnqTE0WtfirB55y', 1),
(44, 'centros', 'london@facturas.be', '$2y$12$2KUMAAg0G0QkbSjQwOQcOOEsaFand8kXn1ki6Fadryhq86bKnL.52', 1),
(45, 'centros', 'espana@facturas.be', '$2y$12/8JkaQMwc53hc7DWx7ALi/rvC', 1),
(46, 'centros', 'france@facturas.be', '$2y$12$a02SPwwyy.9a5QJZMKlWC.0b0I1CltmF4/Hc3TLd1aji2287PQAVq', 1),
(47, 'administradores', 'admin@facturas.be', '$2y$12$xM4B5dm1AKvcv7wNiYvxDe6UoiKR9HYVw/ajK.juDgTDFseaUSHam', 1),
(48, 'administradores', 'admin2@facturas.be', '$2y$12$7OD1YxQI2YxGfV89Odi5M./.PyCC7NJdbV0myfbfzs7W/2mh0i/Hu', 1),
(49, 'gerente', 'gerente@facturas.be', '$2y$12.O70fXFMpur1lQL/GqJYIRPmC2ChGZFLcHbK5ZOWi', 1),
(50, 'centros', 'de@facturas.be', '$2y$12/xsQV.I7Ih7ummlQz2jTmItUldng9dwRTbQTVanlMiu', 1),
(51, 'gerente', 'robincoello@hotmail.com.com', '$2y$12/SMsywIuRuG93g/IBzKUiHlD97sFzq8MlMk2d0tzS', 1),
(53, 'centros', 'demo@demo.com', '$2y$12$8DYvcT1UsHzBLANQOQMe.uARhObQkNCNId9lbGkMT68QUKWt1Vhs6', 1),
(54, 'centros', 'argentina@facturas.be', '$2y$12$1ES8CvRZf4jAXAo01MfVuO.SYG48fzzhQ9EkyFY0vmioV7Svvur0K', 1),
(55, 'centros', 'pato@latinos.be', '$2y$12$GP2yku1oi0UJ9kWUnoRnteayWU61EeA6QUKNeoB975IwXNzwOnU3a', 1),
(56, 'centros', 'liege@facturas.be', '$2y$12$MHtfJMg3/2C4Ft6tSxE/I.ZG5uKSAr528BNtoo1fvPUpMG/yyLBOy', 1),
(57, 'centros', 'andres@facturas.be', '$2y$12$DJH8FbKPZCLW4GKf0YW.rup3tN3jpV2MOwGeu1DOqOEClknM9T1QG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualizaciones`
--
ALTER TABLE `actualizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD UNIQUE KEY `id_contacto` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- Indexes for table `_opciones`
--
ALTER TABLE `_opciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opcion` (`opcion`);

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
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `grupo` (`grupo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualizaciones`
--
ALTER TABLE `actualizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_contenido`
--
ALTER TABLE `_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- AUTO_INCREMENT for table `_grupos`
--
ALTER TABLE `_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `_idiomas`
--
ALTER TABLE `_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `_menu`
--
ALTER TABLE `_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `_opciones`
--
ALTER TABLE `_opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `_paginas`
--
ALTER TABLE `_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `_permisos`
--
ALTER TABLE `_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `_traducciones`
--
ALTER TABLE `_traducciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4397;
--
-- AUTO_INCREMENT for table `_usuarios`
--
ALTER TABLE `_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `_usuarios_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `_grupos` (`grupo`),
  ADD CONSTRAINT `_usuarios_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `contactos` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;