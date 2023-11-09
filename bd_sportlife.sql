-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 05:26:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sportlife`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comprador`
--

CREATE TABLE `tbl_comprador` (
  `idcomprador` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(100) DEFAULT NULL,
  `cp` int(100) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `tarjeta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_comprador`
--

INSERT INTO `tbl_comprador` (`idcomprador`, `nombre`, `apellido`, `direccion`, `telefono`, `cp`, `correo`, `tarjeta`) VALUES
(17, 'a', 'aa', 'aaa', 22, 12, 'aaaa', 101);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_comprador`
--
ALTER TABLE `tbl_comprador`
  ADD PRIMARY KEY (`idcomprador`),
  ADD UNIQUE KEY `idcomprador` (`idcomprador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_comprador`
--
ALTER TABLE `tbl_comprador`
  MODIFY `idcomprador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
