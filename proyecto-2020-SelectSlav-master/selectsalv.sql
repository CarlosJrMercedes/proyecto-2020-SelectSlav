-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 26-05-2020 a las 02:03:13
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `selectsalv`
drop database if exists selectsalv;
create database selectsalv;
use selectsalv;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_votacion`
--

CREATE TABLE `centro_votacion` (
  `id_centro` int(11) NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 NOT NULL,
  `id_munici` int(11) NOT NULL,
  `direccion` varchar(500) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_dept` int(11) NOT NULL,
  `nombre` varchar(65) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta_receptora`
--

CREATE TABLE `junta_receptora` (
  `id_junta` int(11) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL,
  `id_centro` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_munici` int(11) NOT NULL,
  `nombre` varchar(65) CHARACTER SET utf8 NOT NULL,
  `id_dept` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido_politico`
--

CREATE TABLE `partido_politico` (
  `id_partido` int(11) NOT NULL,
  `nombre_partido` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nombre_candidato` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto_bandera_partido` varchar(200) CHARACTER SET utf8 NOT NULL,
  `foto_candidato` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(25) CHARACTER SET utf8 NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`, `estado`) VALUES
(1, 'administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(200) CHARACTER SET utf8 NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(25) CHARACTER SET utf8 NOT NULL,
  `contrasenia` varchar(500) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `id_rol`, `usuario`, `contrasenia`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'Carlos Nahum Mercedes Dominguez', 1, 'CarlosJr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef ', '2020-05-23 19:53:05', '2020-05-23 19:53:05', 1),
(2, 'Jeny Odalis', 1, 'odalis', '123', '2020-05-23 19:53:05', '2020-05-25 17:27:03', 1),
(3, 'Nahu', 1, 'asd', 'asd', '2020-05-25 17:05:16', '0000-00-00 00:00:00', 1),
(4, 'Nahu', 1, 'asd', 'asd', '2020-05-25 17:06:15', '0000-00-00 00:00:00', 1),
(5, 'Mercedes', 1, 'mer', '123', '2020-05-25 17:08:53', '2020-05-25 17:46:58', 1),
(6, 'Carlos', 1, 'cjr', '123', '2020-05-25 17:10:40', '2020-05-25 17:10:40', 1),
(7, 'Carlos', 1, 'cjr', '123', '2020-05-25 17:10:52', '2020-05-25 17:10:52', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `id_voto` int(11) NOT NULL,
  `dui_votante` varchar(25) CHARACTER SET utf8 NOT NULL,
  `id_munici` int(11) NOT NULL,
  `id_junta` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro_votacion`
--
ALTER TABLE `centro_votacion`
  ADD PRIMARY KEY (`id_centro`),
  ADD KEY `id_munici` (`id_munici`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indices de la tabla `junta_receptora`
--
ALTER TABLE `junta_receptora`
  ADD PRIMARY KEY (`id_junta`),
  ADD KEY `id_centro` (`id_centro`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_munici`),
  ADD KEY `id_dept` (`id_dept`);

--
-- Indices de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id_voto`),
  ADD KEY `id_munici` (`id_munici`),
  ADD KEY `id_junta` (`id_junta`),
  ADD KEY `id_partido` (`id_partido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro_votacion`
--
ALTER TABLE `centro_votacion`
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `junta_receptora`
--
ALTER TABLE `junta_receptora`
  MODIFY `id_junta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_munici` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
  MODIFY `id_voto` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `centro_votacion`
--
ALTER TABLE `centro_votacion`
  ADD CONSTRAINT `centro_votacion_ibfk_1` FOREIGN KEY (`id_munici`) REFERENCES `municipios` (`id_munici`);

--
-- Filtros para la tabla `junta_receptora`
--
ALTER TABLE `junta_receptora`
  ADD CONSTRAINT `junta_receptora_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centro_votacion` (`id_centro`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`id_dept`) REFERENCES `departamentos` (`id_dept`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`id_munici`) REFERENCES `municipios` (`id_munici`),
  ADD CONSTRAINT `votos_ibfk_2` FOREIGN KEY (`id_junta`) REFERENCES `junta_receptora` (`id_junta`),
  ADD CONSTRAINT `votos_ibfk_3` FOREIGN KEY (`id_partido`) REFERENCES `partido_politico` (`id_partido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
