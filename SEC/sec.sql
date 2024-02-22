-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2024 a las 22:33:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anuncio` int(11) NOT NULL,
  `anuncio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `anuncio`) VALUES
(1, 'Anuncio de inversión'),
(2, 'Anuncio de expansión'),
(3, 'Primera Piedra'),
(4, 'Inauguración ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `año`
--

CREATE TABLE `año` (
  `id_año` int(11) NOT NULL,
  `año` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `año`
--

INSERT INTO `año` (`id_año`, `año`) VALUES
(1, '2024'),
(2, '2025'),
(3, '2026'),
(4, '2027'),
(5, '2028'),
(6, '2029');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `ciudad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`) VALUES
(1, 'Saltillo'),
(2, 'Ramos Arizpe'),
(3, 'General Cepeda'),
(4, 'Arteaga'),
(5, 'Parras De La Fuente'),
(6, 'Saltillo'),
(7, 'Torreón'),
(8, 'Matamoros'),
(9, 'San Pedro'),
(10, 'Fco. I. Madero'),
(11, 'Viesca'),
(12, 'Acuña'),
(13, 'Allende'),
(14, 'Guerrero'),
(15, 'Hidalgo'),
(16, 'Jimenez'),
(17, 'Morelos'),
(18, 'Nava'),
(19, 'Piedras Negras'),
(20, 'Villa Unión'),
(21, 'Zaragoza'),
(22, 'Múzquiz'),
(23, 'San Juan De Sabinas'),
(24, 'Sabinas'),
(25, 'Progreso'),
(26, 'Juárez'),
(27, 'Sierra Mojada'),
(28, 'Ocampo'),
(29, 'San Buenaventura'),
(30, 'Lamadrid'),
(31, 'Nadadores'),
(32, 'Escobedo'),
(33, 'Cuatro Ciénegas'),
(34, 'Sacramento'),
(35, 'Frontera'),
(36, 'Abasolo'),
(37, 'Monclova'),
(38, 'Castaños'),
(39, 'Candela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion`
--

CREATE TABLE `conexion` (
  `id_conexion` int(11) NOT NULL,
  `conexion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `conexion`
--

INSERT INTO `conexion` (`id_conexion`, `conexion`) VALUES
(1, 'Nearshoring'),
(2, 'Provedor de Tesla'),
(3, 'Provedor de Tesla y Nearshoring'),
(4, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `id_convenio` int(11) NOT NULL,
  `convenio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`id_convenio`, `convenio`) VALUES
(1, 'si'),
(2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_Departamento` int(11) NOT NULL,
  `Departamento` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_Departamento`, `Departamento`) VALUES
(1, 'Promocion'),
(2, 'Gestion'),
(3, 'Juridico'),
(4, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envioinfo`
--

CREATE TABLE `envioinfo` (
  `id_envioinfo` int(11) NOT NULL,
  `envioinfo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `envioinfo`
--

INSERT INTO `envioinfo` (`id_envioinfo`, `envioinfo`) VALUES
(1, 'si'),
(2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memo`
--

CREATE TABLE `memo` (
  `id_memo` int(11) NOT NULL,
  `memo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `memo`
--

INSERT INTO `memo` (`id_memo`, `memo`) VALUES
(1, 'Jessica Moncada'),
(2, 'Anacelia Rodulfo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nearshoring`
--

CREATE TABLE `nearshoring` (
  `id_nearshoring` int(11) NOT NULL,
  `nearshoring` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `nearshoring`
--

INSERT INTO `nearshoring` (`id_nearshoring`, `nearshoring`) VALUES
(1, 'proveedor de Tesla'),
(2, 'proveedor del Estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'Alemania'),
(2, 'Canadá'),
(3, 'China'),
(4, 'Corea'),
(5, 'Estados Unidos'),
(6, 'México'),
(7, 'Portugal'),
(8, 'Suecia'),
(9, 'Suiza'),
(10, 'Afganistán'),
(11, 'Albania'),
(12, 'Andorra'),
(13, 'Angola'),
(14, 'Antigua y Barbuda'),
(15, 'Arabia Saudita'),
(16, 'Argelia'),
(17, 'Argentina'),
(18, 'Armenia'),
(19, 'Australia'),
(20, 'Austria	'),
(21, 'Azerbaiyán'),
(22, 'Bahamas'),
(23, 'Bangladés'),
(24, 'Barbados'),
(25, 'Baréin'),
(26, 'Bélgica'),
(27, 'Belice'),
(28, 'Benín'),
(29, 'Bielorrusia'),
(30, 'Birmania'),
(31, 'Bolivia'),
(32, 'Bosnia-Herzegovina'),
(33, 'Botsuana'),
(34, 'Brasil'),
(35, 'Brunéi'),
(36, 'Bulgaria'),
(37, 'Burkina Faso'),
(38, 'Burundi'),
(39, 'Bután'),
(40, 'Cabo Verde'),
(41, 'Camboya'),
(42, 'Camerún'),
(43, 'Catar'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'Chipre'),
(47, 'Colombia'),
(48, 'Comoras'),
(49, 'Congo'),
(50, 'Costa de Marfil'),
(51, 'Costa Rica'),
(52, 'Croacia'),
(53, 'Cuba'),
(54, 'Dinamarca'),
(55, 'Dominica'),
(56, 'Ecuador'),
(57, 'Egipto'),
(58, 'El Salvador'),
(59, 'Emiratos Árabes Unidos'),
(60, 'Eritrea'),
(61, 'Eslovaquia'),
(62, 'Eslovenia'),
(63, 'España'),
(64, 'Estonia'),
(65, 'Esuatini'),
(66, 'Etiopía'),
(67, 'Filipinas'),
(68, 'Finlandia'),
(69, 'Fiyi'),
(70, 'Francia'),
(71, 'Gabón'),
(72, 'Gambia'),
(73, 'Georgia'),
(74, 'Ghana'),
(75, 'Granada'),
(76, 'Grecia'),
(77, 'Guatemala'),
(78, 'Guinea'),
(79, 'Guinea Ecuatorial'),
(80, 'Guinea-Bisáu'),
(81, 'Guyana'),
(82, 'Haití'),
(83, 'Honduras'),
(84, 'Hungría'),
(85, 'India'),
(86, 'Indonesia'),
(87, 'Inglaterra'),
(88, 'Irak'),
(89, 'Irán'),
(90, 'Irlanda'),
(91, 'Islandia'),
(92, 'Islas Marshall'),
(93, 'Islas Salomón'),
(94, 'Israel'),
(95, 'Italia'),
(96, 'Jamaica'),
(97, 'Japón'),
(98, 'Jordania'),
(99, 'Kazajistán'),
(100, 'Kenia'),
(101, 'Kirguistán'),
(102, 'Kiribati'),
(103, 'Kosovo'),
(104, 'Kuwait'),
(105, 'Laos'),
(106, 'Lesoto'),
(107, 'Letonia'),
(108, 'Líbano'),
(109, 'Liberia'),
(110, 'Libia'),
(111, 'Liechtenstein'),
(112, 'Lituania'),
(113, 'Luxemburgo'),
(114, 'Macedonia del Norte'),
(115, 'Madagascar'),
(116, 'Malasia'),
(117, 'Malaui'),
(118, 'Maldivas'),
(119, 'Malí'),
(120, 'Malta'),
(121, 'Marruecos'),
(122, 'Mauricio'),
(123, 'Mauritania'),
(124, 'Micronesia'),
(125, 'Moldavia'),
(126, 'Mónaco'),
(127, 'Mongolia'),
(128, 'Montenegro'),
(129, 'Mozambique'),
(130, 'Namibia'),
(131, 'Nauru'),
(132, 'Nepal'),
(133, 'Nicaragua'),
(134, 'Níger'),
(135, 'Nigeria'),
(136, 'Noruega'),
(137, 'Nueva Zelanda'),
(138, 'Omán'),
(139, 'Holanda'),
(140, 'Pakistán'),
(141, 'Palaos'),
(142, 'Palestina'),
(143, 'Panamá'),
(144, 'Papúa Nueva Guinea'),
(145, 'Paraguay'),
(146, 'Perú'),
(147, 'Polonia'),
(148, 'Reino Unido'),
(149, 'República Centroafricana'),
(150, 'República Checa'),
(151, 'República Democrática del Congo'),
(152, 'República Dominicana'),
(153, 'Ruanda'),
(154, 'Rumania'),
(155, 'Rusia'),
(156, 'Samoa'),
(157, 'San Cristóbal y Nieves'),
(158, 'San Marino'),
(159, 'San Vicente y las Granadinas'),
(160, 'Santa Lucía'),
(161, 'Santo Tomé y Príncipe'),
(162, 'Senegal'),
(163, 'Serbia'),
(164, 'Seychelles'),
(165, 'Sierra Leona'),
(166, 'Singapur'),
(167, 'Siria'),
(168, 'Somalia'),
(169, 'Sri Lanka'),
(170, 'Sudáfrica'),
(171, 'Sudán'),
(172, 'Sudán del Sur'),
(173, 'Surinam'),
(174, 'Tailandia'),
(175, 'Taiwán'),
(176, 'Tanzania'),
(177, 'Tayikistán'),
(178, 'Timor Oriental'),
(179, 'Togo'),
(180, 'Tonga'),
(181, 'Trinidad y Tobago'),
(182, 'Túnez'),
(183, 'Turkmenistán'),
(184, 'Turquía'),
(185, 'Tuvalu'),
(186, 'Ucrania'),
(187, 'Uganda'),
(188, 'Uruguay'),
(189, 'Uzbekistán'),
(190, 'Vanuatu'),
(191, 'Vaticano'),
(192, 'Venezuela'),
(193, 'Vietnam'),
(194, 'Yemen'),
(195, 'Yibuti'),
(196, 'Zambia'),
(197, 'Zimbabue'),
(1, 'Sureste'),
(2, 'Laguna'),
(3, 'Carbonífera'),
(4, 'Centro'),
(5, 'Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pgj`
--

CREATE TABLE `pgj` (
  `id_empresas` INT IDENTITY(1,1) NOT NULL,
  `fecha` date NOT NULL,
  `Nombre` varchar(75) NOT NULL,
  `pais` varchar(75) NOT NULL,
  `sector` varchar(75) NOT NULL,
  `empleos` int(1000) NOT NULL,
  `inversion` double(7,2) NOT NULL,
  `año` year(4) DEFAULT NULL,
  `region` varchar(75) NOT NULL,
  `ciudad` varchar(75) NOT NULL,
  `producto` varchar(75) NOT NULL,
  `tipo` varchar(75) NOT NULL,
  `nearshoring` varchar(75) NOT NULL,
  `anuncio` varchar(75) NOT NULL,
  `primerap` varchar(75) NOT NULL,
  `inaugruacion` varchar(75) NOT NULL,
  `proyecto` varchar(75) NOT NULL,
  `convenio` varchar(75) NOT NULL,
  `memo` varchar(75) NOT NULL,
  `fenvio` date NOT NULL,
  `envioinfo` varchar(75) NOT NULL,
  `acinfo` date NOT NULL,
  `fechaulact` date NOT NULL,
  `nombrereprel` varchar(200) NOT NULL,
  `numeroreprel` varchar(11) NOT NULL,
  `nombrecontacto` varchar(200) NOT NULL,
  `numerocontacto` varchar(11) NOT NULL,
  `estimulos` varchar(200) NOT NULL,
  `claseestimulos` varchar(200) NOT NULL,
  `comentarioag` varchar(1000) NOT NULL,
  `fechaconvenio` date NOT NULL,
  `comentarioaj` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pgj`
--

INSERT INTO `pgj` (`id_empresas`, `fecha`, `Nombre`, `pais`, `sector`, `empleos`, `inversion`, `año`, `region`, `ciudad`, `producto`, `tipo`, `nearshoring`, `anuncio`, `primerap`, `inaugruacion`, `proyecto`, `convenio`, `memo`, `fenvio`, `envioinfo`, `acinfo`, `fechaulact`, `nombrereprel`, `numeroreprel`, `nombrecontacto`, `numerocontacto`, `estimulos`, `claseestimulos`, `comentarioag`, `fechaconvenio`, `comentarioaj`) VALUES
(2, '2024-02-07', 'alsuper2', '11', '4', 123.00, 12314.00, '2001', '4', '', 'svdv', '2', '1', '2', 'sin evento', 'sin evento', '2', '1', '2', '2024-02-07', '1', '2024-02-07', '2024-02-07', 'ana Karen', '8441619692', 'leendy', '85598273948', 'si', 'rss', 'hola como estas', '2024-02-15', ''),
(3, '2024-02-08', 'dfbsfd', '19', '16', 99999.99, 99999.99, '2001', '2', '', 'rg vdf bf', '2', '2', '4', 'sin evento', 'sin evento', '2', '2', '2', '2024-02-08', '1', '2024-02-08', '2024-02-08', 'leendy', '8441619692', 'lendy', 'dir', 'sdfsdf', 'sdfdsf', 'dvñbsdñvbsdkjvjknc.ln vfhkj.zlbpvinldmfbhnjdbvlpd{adv\r\nadsvlsdjbvlakdblvadm ñb{dv\r\nadvnajdvbñadskbvjkD', '2024-02-08', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `proyecto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `proyecto`) VALUES
(1, 'Roberto Bernal'),
(2, 'Diego Escobar'),
(3, 'Julian Anzaldua'),
(4, 'Oscar Martínez '),
(5, 'Claudio Bres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `region` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `region`) VALUES
(1, 'Sureste'),
(2, 'Laguna'),
(3, 'Carbonífera'),
(4, 'Centro'),
(5, 'Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_Rol` int(11) NOT NULL,
  `Rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_Rol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Promocion'),
(3, 'Gestion'),
(4, 'Juridico'),
(5, 'SECANALINDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL,
  `sector` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `sector`) VALUES
(1, 'Fabricación de equipo de transporte'),
(2, 'Energías Renovables'),
(3, 'Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica'),
(4, 'Industria alimentaria '),
(5, 'Comercio'),
(6, 'Minería'),
(7, 'Fabricación de muebles, colchones y persianas'),
(8, 'Fabricación de maquinaria y equipo'),
(9, 'Industrias metálicas'),
(10, 'Servicios de salud y de asistencia social'),
(11, 'Industria del plástico y del hule'),
(12, 'Generación, transmisión, distribución y comercialización de energía eléctrica, \r\nsuministro de agua y de gas natural por ductos al consumidor final'),
(13, 'Fabricación de insumos textiles y prendas de vestir'),
(14, 'Transportes, correos y almacenamiento'),
(15, 'Servicios de apoyo a los negocios'),
(16, 'Industria del papel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'Nuevo'),
(2, 'Expansión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

  CREATE TABLE `trabajador` (
    `id_Trabajador` int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `Nombre` varchar(40) NOT NULL,
    `Paterno` varchar(40) NOT NULL,
    `Materno` varchar(40) NOT NULL,
    `Usuario` varchar(40) NOT NULL,
    `Password` varchar(40) NOT NULL,
    `Rol` varchar(40) NOT NULL,
    `Departamento` varchar(40) NOT NULL,
    `FechaDeRegistro` date NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id_Trabajador`, `Nombre`, `Paterno`, `Materno`, `Usuario`, `Password`, `Rol`, `Departamento`, `FechaDeRegistro`) VALUES
(14, 'Leendy', 'escamilla', 'escamilla', 'Leendyescamilla', '1212', '1', '1', '2020-04-01'),
(15, 'Leendy', 'escamilla', 'escamilla', 'Leendyescamilla2', '1212', '2', '1', '2020-04-01'),
(0, 'Ana', 'karen', 'karen', 'anakaren', '6363', '2', '1', '2024-01-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pgj`
--
ALTER TABLE `pgj`
  ADD PRIMARY KEY (`id_empresas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pgj`
--
ALTER TABLE `pgj`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
