-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2016 a las 21:45:44
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdmicrosise`
--
CREATE DATABASE IF NOT EXISTS `bdmicrosise` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `bdmicrosise`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `role`) VALUES
(1, 'admin', 'admin', 'Administrador Lic. Esdras Chuc', 'admin'),
(2, 'user', 'user', 'Usuario de prueba', 'user'),
(11, '2014010740', '2014010740', 'AGUAYO SCHULTZ DIANA LAURA', 'user'),
(12, '2014010757', '2014010757', 'AGUILAR ORTIZ JOSUE RICARDO', 'user'),
(13, '2014010743', '2014010743', 'ALVARADO DZUL GEOVANNY DE JESUS', 'user'),
(14, '2014010895', '2014010895', 'ANDRADE BRAVO OMAR', 'user'),
(15, '2014010739', '2014010739', 'CANCHE VERA LIDIA ESTHER', 'user'),
(16, '2014010767', '2014010767', 'CARBALLO CALDERON ROBIN ANGEL', 'user'),
(17, '2014010766', '2014010766', 'CASTILLO HERNANDEZ ELIEL JEROAN', 'user'),
(18, '2014010741', '2014010741', 'CITUL CERVANTES JESUS ADRIAN', 'user'),
(19, '2014010752', '2014010752', 'HUH PUC LUIS ENRIQUE', 'user'),
(20, '2014010845', '2014010845', 'KU FRIAS ALEJANDRA MADAI', 'user'),
(21, '2014010893', '2014010893', 'MARTINEZ GARCIA DIEGO GERARDO', 'user'),
(22, '2014010854', '2014010854', 'NOH CHI JONATHAN JOSUE', 'user'),
(23, '2014010733', '2014010733', 'PAT HOIL JOSE MISAEL', 'user'),
(24, '2014010742', '2014010742', 'PUC POOL ESMERALDA GUADALUPE', 'user'),
(25, '2014010774', '2014010774', 'RODRIGUEZ GARCIA BRAYAN ANTONIO', 'user'),
(26, '2014010735', '2014010735', 'ROSALES APARICIO GABRIEL', 'user'),
(27, '2014010771', '2014010771', 'SALAZAR CHIM MARCO ANTONIO', 'user'),
(28, '2014010750', '2014010750', 'SERRALTA CHACON ANTONY TOMAS', 'user'),
(29, '2014010862', '2014010862', 'UH GOMEZ JUAN CARLOS', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
