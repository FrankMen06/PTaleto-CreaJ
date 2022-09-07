-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2022 a las 04:02:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ptalento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formbarra`
--

CREATE TABLE `formbarra` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(13) NOT NULL,
  `especialidad` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formbasket`
--

CREATE TABLE `formbasket` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(13) NOT NULL,
  `especialidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formdanza`
--

CREATE TABLE `formdanza` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(10) NOT NULL,
  `especialidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formfut`
--

CREATE TABLE `formfut` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(13) NOT NULL,
  `especialidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formorqst`
--

CREATE TABLE `formorqst` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(13) NOT NULL,
  `especialidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formvoley`
--

CREATE TABLE `formvoley` (
  `correo` varchar(30) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `gradSec` varchar(5) NOT NULL,
  `colEsc` varchar(13) NOT NULL,
  `especialidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logadmin`
--

CREATE TABLE `logadmin` (
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logadmin`
--

INSERT INTO `logadmin` (`correo`, `contraseña`) VALUES
('admin1234@cdb.edu.sv', 'admin1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logestu`
--

CREATE TABLE `logestu` (
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logestu`
--

INSERT INTO `logestu` (`correo`, `contraseña`) VALUES
('estudiante20130435@cdb.edu.sv', '12345'),
('estudiante2020@cdb.edu.sv', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `co_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comentarios` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comentario_nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_comentarios`
--

INSERT INTO `tbl_comentarios` (`co_id`, `parent_id`, `comentarios`, `comentario_nombre`, `fecha`) VALUES
(25, 0, 'ESTO ES UNA PRUEBA DE COMENTARIO 😉', 'Cristian Quintanilla', '2022-08-21 11:56:09'),
(45, 0, 'Esto está muy genial 😍', 'Francisco', '2022-08-22 11:01:48'),
(50, 0, 'Buenas tardes XD\r\n', 'Daniel Sánchez', '2022-08-22 11:25:22'),
(52, 0, '0la a todos\r\n❤️', 'Mau', '2022-08-31 01:50:49'),
(55, 0, '¿Cómo se cuando me aceptarán?', 'Héctor Antonio', '2022-09-02 10:09:17'),
(56, 0, '⚽️', 'Edwin Sánchez', '2022-09-07 08:12:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formbarra`
--
ALTER TABLE `formbarra`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `formbasket`
--
ALTER TABLE `formbasket`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `formdanza`
--
ALTER TABLE `formdanza`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `formfut`
--
ALTER TABLE `formfut`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `formorqst`
--
ALTER TABLE `formorqst`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `formvoley`
--
ALTER TABLE `formvoley`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `logadmin`
--
ALTER TABLE `logadmin`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `logestu`
--
ALTER TABLE `logestu`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`co_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
