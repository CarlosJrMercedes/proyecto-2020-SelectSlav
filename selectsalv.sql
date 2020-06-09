-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 09-06-2020 a las 03:34:14
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
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_votacion`
--
drop database if exists selectSalv;
create database selectSalv;
use selectSalv;


CREATE TABLE `centro_votacion` (
  `id_centro` int(11) NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 NOT NULL,
  `id_munici` int(11) NOT NULL,
  `direccion` varchar(500) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centro_votacion`
--

INSERT INTO `centro_votacion` (`id_centro`, `nombre`, `id_munici`, `direccion`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'ARCE', 1, 'por el zoologico', '2020-06-06 02:32:41', '0000-00-00 00:00:00', 1);

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

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_dept`, `nombre`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'Ahuachapá', '2020-06-06 01:10:39', '2020-06-06 02:07:06', 1),
(2, 'Cabañas', '2020-06-06 01:10:50', '0000-00-00 00:00:00', 1),
(3, 'Chalatenango', '2020-06-06 01:11:00', '0000-00-00 00:00:00', 1),
(4, 'Cuscatlán', '2020-06-06 01:11:10', '0000-00-00 00:00:00', 1),
(5, 'La Libertad', '2020-06-06 01:11:23', '0000-00-00 00:00:00', 1),
(6, 'La Paz', '2020-06-06 01:11:33', '0000-00-00 00:00:00', 1),
(7, 'La Unión', '2020-06-06 01:11:45', '0000-00-00 00:00:00', 1),
(8, 'Morazán', '2020-06-06 01:11:58', '0000-00-00 00:00:00', 1),
(9, 'San Miguel', '2020-06-06 01:12:54', '0000-00-00 00:00:00', 1),
(10, 'San Salvador', '2020-06-06 01:13:05', '0000-00-00 00:00:00', 1),
(11, 'San Vicente', '2020-06-06 01:13:16', '0000-00-00 00:00:00', 1),
(12, 'Santa Ana', '2020-06-06 01:13:26', '0000-00-00 00:00:00', 1),
(13, 'Sonsonate', '2020-06-06 01:13:36', '0000-00-00 00:00:00', 1),
(14, 'Usulután', '2020-06-06 01:13:46', '0000-00-00 00:00:00', 1);

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

--
-- Volcado de datos para la tabla `junta_receptora`
--

INSERT INTO `junta_receptora` (`id_junta`, `nombre`, `id_centro`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'Junta Nª 8', 1, '2020-06-07 02:04:51', '2020-06-07 02:04:51', 1);

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

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_munici`, `nombre`, `id_dept`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'San Salvador', 10, '2020-06-06 01:23:54', '2020-06-06 01:40:09', 1);

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

--
-- Volcado de datos para la tabla `partido_politico`
--

INSERT INTO `partido_politico` (`id_partido`, `nombre_partido`, `nombre_candidato`, `foto_bandera_partido`, `foto_candidato`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'ARENA', 'Carlos Calleja', 'img/ARENACarlos Callejaarena.png', 'img/ARENACarlos Callejacc.jpg', '2020-06-06 01:15:18', '2020-06-06 01:16:34', 1),
(2, 'FMLN', 'Hugo Martinez', 'img/FMLNHugo Martinezfmln.png', 'img/FMLNHugo Martinezhugo.png', '2020-06-07 02:44:07', '0000-00-00 00:00:00', 1),
(3, 'PDC', 'PDC', 'img/PDCPDCpdc.jpg', 'img/PDCPDCpdc.jpg', '2020-06-08 03:30:36', '0000-00-00 00:00:00', 1),
(4, 'NUEVAS IDEAS', 'Nayib Bukele', 'img/NUEVAS IDEASNayib Bukelenuevas ideas.jpg', 'img/NUEVAS IDEASNayib Bukelenayib.jpg', '2020-06-08 03:31:06', '0000-00-00 00:00:00', 1);

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
(1, 'Carlos Nahum Mercedes Dominguez', 1, 'CarlosJr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef ', '2020-05-23 19:53:05', '2020-05-23 19:53:05', 1);

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
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`id_voto`, `dui_votante`, `id_munici`, `id_junta`, `id_partido`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, '00612284-2', 1, 1, 4, '2020-06-08 19:24:43', '0000-00-00 00:00:00', 1),
(2, '05598616-2', 1, 1, 4, '2020-06-08 19:26:12', '0000-00-00 00:00:00', 1);

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
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `junta_receptora`
--
ALTER TABLE `junta_receptora`
  MODIFY `id_junta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_munici` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_voto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
