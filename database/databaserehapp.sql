 -- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2024 a las 02:13:29
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `databaserehapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menssagesuser`
--

CREATE TABLE `menssagesuser` (
  `id` int(5) NOT NULL COMMENT 'id de usuario',
  `perfil` varchar(20) NOT NULL COMMENT '1:terapeutaMano,2:fisioterapeuta/kinesiolgo,3:paciente',
  `name` char(30) NOT NULL COMMENT 'nombre del solicitante',
  `lastname` char(30) NOT NULL COMMENT 'apellido del solicitante',
  `email` varchar(40) NOT NULL COMMENT 'correo ddel solicistante',
  `phonenumber` int(10) NOT NULL COMMENT 'numero de contacto',
  `menssage` varchar(2000) NOT NULL COMMENT 'mensaje a leer '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menssagesuser`
--

INSERT INTO `menssagesuser` (`id`, `perfil`, `name`, `lastname`, `email`, `phonenumber`, `menssage`) VALUES
(1, '1', 'dgds', 'sdgsdsd', 'sebaszzpinosa@gmial.com', 5656, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `susnewletter`
--

CREATE TABLE `susnewletter` (
  `id_USER` int(5) NOT NULL COMMENT 'ID unico',
  `email` varchar(40) NOT NULL COMMENT 'correo de suspcripcion',
  `suscription` tinyint(1) NOT NULL COMMENT '0 activo, 1 sinb suscripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `susnewletter`
--

INSERT INTO `susnewletter` (`id_USER`, `email`, `suscription`) VALUES
(5, 'miacol@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menssagesuser`
--
ALTER TABLE `menssagesuser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `susnewletter`
--
ALTER TABLE `susnewletter`
  ADD PRIMARY KEY (`id_USER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menssagesuser`
--
ALTER TABLE `menssagesuser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'id de usuario', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `susnewletter`
--
ALTER TABLE `susnewletter`
  MODIFY `id_USER` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID unico', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
