-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-04-2021 a las 02:23:28
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autores` int(11) NOT NULL,
  `nombre_autor` varchar(200) NOT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autores`, `nombre_autor`, `nacionalidad`) VALUES
(1, 'SUZANNE COLLINS', 'ESTADOUNIDENSE'),
(2, 'J. K. ROWLING', 'BRITÁNICO'),
(3, 'VERONICA ROTH', 'ESTADOUNIDENSE'),
(4, 'RAPPAPORT HELEN', 'BRITÁNICO'),
(5, 'GABRIEL GARCIA MARQUEZ', 'COLOMBIANO'),
(6, 'JAVIER MORO', 'ESPAÑOL'),
(7, 'JULIO CORTÁZAR', 'ARGENTINO'),
(8, 'JANE AUSTEN', 'BRITÁNICO'),
(9, 'DAN BROWN', 'ESTADOUNIDENSE'),
(10, 'HENRY JAMES', 'ESTADOUNIDENSE'),
(11, 'MARIO MENDOZA', 'COLOMBIANO'),
(12, 'STEPHEN KING', 'ESTADOUNIDENSE'),
(13, 'JOHN KATZENBACH', 'ESTADOUNIDENSE'),
(14, 'PATRICK SUSKIND', 'ALEMÁN'),
(15, 'RICHARD DUBELL', 'ALEMÁN'),
(16, 'JULIO VERNE', 'FRANCÉS'),
(17, 'BECCA FITZPATRICK', 'ESTADOUNIDENSE'),
(18, 'PAULETTE BOURGEOIS', 'CANADIENSE'),
(19, 'IAN FALCONER', 'ESTADOUNIDENSE'),
(20, 'CARL NORAC', 'BELGA'),
(21, 'NOBARA HAYAKAWA', 'JAPONES'),
(22, 'AMALIA LOW', 'COLOMBIANO'),
(23, 'J. R. R. TOLKIEN', 'SUDAFRICANO'),
(24, 'ARISTÓTELES', 'GRIEGO'),
(25, 'HERNAN FERNEY RODRIGUEZ GARCIA', 'COLOMBIANO'),
(26, 'ANGELA BEDOYA RUIZ', 'COLOMBIANO'),
(27, 'LAIDLER KEITH J.', 'BRITÁNICO'),
(28, 'ANDRÉS GUTIÉRREZ ROJAS', 'COLOMBIANO'),
(29, ' ALBERTO PEREZ IZQUIERDO', 'ESPAÑOL'),
(30, 'YUNUS A CENGEL', 'TURCO'),
(31, 'HELENA CURTIS', ''),
(32, 'GLADYS PINILLA BERMUDEZ', 'COLOMBIANO'),
(33, 'DAVID ARBOLEDAS', 'ESPAÑOL'),
(34, 'FERNANDO PESSOA ', 'PORTUGUES'),
(35, 'GUEN LAMRIMPA', 'TIBETANO'),
(36, 'YEHUDA BERG', 'iSRAELÍ'),
(37, 'FRANCESC TORRALBA', 'ESPAÑOL'),
(38, 'SMITH RODNEY', 'ESTADOUNIDENSE'),
(39, 'JOSÉ EUSTASIO RIVERA', 'COLOMBIANO'),
(40, 'YOSHIAKI SUKENO', 'JAPONES'),
(41, 'HIROMU ARAKAWA', 'JAPONES'),
(42, 'TITE KUBO', 'JAPONES'),
(43, 'HIRO MASHIMA', 'JAPONES'),
(44, 'SAYAKA', 'JAPONES'),
(45, 'KOOGI', 'COREANO'),
(46, 'ED BRISSON', 'ESTADOUNIDENSE'),
(47, 'DAN SLOTT', 'ESTADOUNIDENSE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ISBN` int(11) NOT NULL,
  `nombre_prod` varchar(100) NOT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `categoria` varchar(50) NOT NULL,
  `subcategoria` varchar(50) NOT NULL,
  `tema` varchar(50) DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `precio_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ISBN`, `nombre_prod`, `id_autor`, `categoria`, `subcategoria`, `tema`, `editorial`, `precio_prod`) VALUES
(13254856, 'VIDA SALUDABLE', NULL, 'REVISTAS', 'SALUD', NULL, NULL, 10000),
(16345345, 'BELLEZA MÍA', NULL, 'REVISTAS', 'SALUD', NULL, NULL, 10000),
(17876856, 'MUJER HOY', NULL, 'REVISTAS', 'SALUD', NULL, NULL, 10000),
(23545320, 'ESPN', NULL, 'REVISTAS', 'DEPORTES', NULL, NULL, 10000),
(23746548, 'SPORTRAINING', NULL, 'REVISTAS', 'DEPORTES', NULL, NULL, 10000),
(23785150, 'MATC', NULL, 'REVISTAS', 'DEPORTES', NULL, NULL, 10000),
(31348350, 'AUTOEXTRA', NULL, 'REVISTAS', 'VEHÍCULOS', NULL, NULL, 10000),
(31784710, 'AUTOBILD', NULL, 'REVISTAS', 'VEHÍCULOS', NULL, NULL, 10000),
(34515785, 'PUROMOTOR', NULL, 'REVISTAS', 'VEHÍCULOS', NULL, NULL, 10000),
(42123975, 'AIRE LIBRE', NULL, 'REVISTAS', 'VIAJES', NULL, NULL, 10000),
(43215765, 'TRAVELER', NULL, 'REVISTAS', 'VIAJES', NULL, NULL, 10000),
(49874520, 'VIVIR & VIAJAR', NULL, 'REVISTAS', 'VIAJES', NULL, NULL, 10000),
(64321323, 'PARENTS', NULL, 'REVISTAS', 'HOGAR', NULL, NULL, 10000),
(65412458, 'CASAVIVA', NULL, 'REVISTAS', 'HOGAR', NULL, NULL, 10000),
(68465213, 'CASA Y JARDIN', NULL, 'REVISTAS', 'HOGAR', NULL, NULL, 10000),
(91324568, 'RCQ', NULL, 'REVISTAS', 'CIENTIFICAS', NULL, NULL, 10000),
(94321327, 'SCIENCE', NULL, 'REVISTAS', 'CIENTIFICAS', NULL, NULL, 10000),
(97431321, 'INGETECNO', NULL, 'REVISTAS', 'CIENTIFICAS', NULL, NULL, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `id_sus` int(11) NOT NULL,
  `nombre_sus` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `celular_sus` int(11) DEFAULT NULL,
  `direccion_sus` varchar(100) NOT NULL,
  `email_sus` varchar(200) NOT NULL,
  `clave_sus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`id_sus`, `nombre_sus`, `apellido`, `celular_sus`, `direccion_sus`, `email_sus`, `clave_sus`) VALUES
(1234, 'antonia', 'restrepo', 1234, 'calle 80 #40-60', 'antonia@gmail.com', '12345678'),
(12345680, 'samuel', 'arango', 32435364, 'calle 80 #40-60', 'cosa@gmail.com', 'carola'),
(12345681, 'laura', 'serna', 24325235, 'calle 80 #40-60', 'ghdhfx@khgj.com', '1234567'),
(12345683, 'juliana', 'pulido', 3543534, 'calle 80 #40-60', 'ghdhfx@khgj.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autores`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  ADD PRIMARY KEY (`id_sus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  MODIFY `id_sus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345684;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
