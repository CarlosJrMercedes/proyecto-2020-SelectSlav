-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2020 a las 03:12:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

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
(1, 'ARCE', 1, 'por el zoologico', '2020-06-06 02:32:41', '0000-00-00 00:00:00', 1),
(2, 'INFRAMEN', 1, '20 AVENIDA NORTE Y 29 CALLE ORIENTE COLONIA ATLACATL', '2020-06-10 16:35:51', '0000-00-00 00:00:00', 1),
(3, 'Centro Escolar La Campanera', 3, 'REPARTO LA CAMPANERA FINAL AVENIDA EL LIMÓN  SOYAPANGO', '2020-06-10 16:37:54', '0000-00-00 00:00:00', 1),
(4, 'Centro Escolar 14 de Diciembre de 1948', 3, 'CALLE A TONACATEPEQUE LOTIFICACION ESPAÑA SOYAPANGO', '2020-06-10 16:41:08', '0000-00-00 00:00:00', 1),
(5, 'Centro Escolar Cantón Los Andes', 2, 'COLONIA LOS ANDES 5° CALLE ORIENTE #1', '2020-06-10 16:42:25', '0000-00-00 00:00:00', 1),
(6, 'Instituto Nacional de San Marcos', 2, 'URBANIZACION EL CARMEN AVENIDA COLONIAL PASAJE 4 SAN MARCOS', '2020-06-10 16:42:57', '0000-00-00 00:00:00', 1),
(7, 'INDES', 4, '18 AVENIDA NORTE Y CALLE A BENEFICIO 3 PUERTAS SANTA ANA', '2020-06-10 16:44:33', '0000-00-00 00:00:00', 1),
(8, 'Centro Escolar José Martí ', 4, '4 CALLE PONIENTE Y 4 AVENIDA NORTE BARRIO SAN JUAN', '2020-06-10 16:45:25', '0000-00-00 00:00:00', 1),
(9, 'Centro Escolar Cantón El Conacaste', 5, 'COLONIA SANTA JULIA KILOMETRO 56 CARRETERA PANAMERICANA', '2020-06-10 16:47:21', '0000-00-00 00:00:00', 1),
(10, 'Complejo Educativo Cantón El Tinteral', 5, 'CALLE A CASERIO SANTA MARTA Y CALLE A COLONIA AMERICA CASERIO EL TINTERAL', '2020-06-10 16:48:21', '0000-00-00 00:00:00', 1),
(11, 'Centro Escolar Colonia 15 de Septiembre', 6, 'COLONIA 15 DE SEPTIEMBRE  FINAL CALLE FRANCISCO GAVIDIA SAN MIGUEL', '2020-06-10 16:49:10', '0000-00-00 00:00:00', 1),
(12, 'Instituto Nacional Francisco Gavidia', 6, 'BARRIO LA CRUZ 14 CALLE ORIENTE Y 8a AVENIDA NORTE SAN MIGUEL', '2020-06-10 16:51:08', '0000-00-00 00:00:00', 1),
(13, 'Instituto Nacional de Chinameca', 7, '11 CALLE ORIENTE #21 BARRIO DOLORES, CHINAMECA', '2020-06-10 16:53:30', '0000-00-00 00:00:00', 1),
(14, 'Centro Escolar Cantón Los Planes Primero', 7, 'CALLE A CANTON PLANES TERCERO CASERIO PLANES PRIMERO CHINAMECA', '2020-06-10 16:55:09', '0000-00-00 00:00:00', 1),
(15, 'Centro Escolar Jardines de La Sabana', 8, 'FINAL CALLE LA SABANA Y AVENIDA D COLONIA JARDINES DE LA SABANA 2', '2020-06-10 16:56:38', '0000-00-00 00:00:00', 1),
(16, 'Complejo Educativo Walter A Soundy', 8, '9° CALLE ORIENTE Y 13 AVENIDA NORTE COLONIA SANTA MONICA', '2020-06-10 16:58:29', '0000-00-00 00:00:00', 1),
(17, 'Complejo Educativo Católico Santo Domingo', 9, 'CALLE PRINCIPAL BARRIO SANTO DOMINGO, CHILTIUPAN', '2020-06-10 16:59:28', '0000-00-00 00:00:00', 1),
(18, 'Centro Escolar Cantón El Zonte', 9, 'KILOMETRO 53 CARRETERA LITORAL HACIA SONSONATE LOTIFICACION ZONTEMAR', '2020-06-10 17:00:18', '0000-00-00 00:00:00', 1),
(19, 'Centro Escolar Walter Thilo Deininger', 10, 'CALLE PRINCIPAL CONTIGUO A EX-ALCALDIA MUNICIPAL ANTIGUO CUSCATLAN', '2020-06-10 17:01:33', '0000-00-00 00:00:00', 1),
(20, 'Parqueo Universidad Albert Einstein', 10, 'CALLE TEOTL, ANTIGUO CUSCATLAN', '2020-06-10 17:02:28', '0000-00-00 00:00:00', 1),
(21, 'Centro Escolar Cantón El Paraíso', 12, '4 KILOMETROS AL PONIENTE DE POLICIA NACIONAL CIVIL DE JIQUILISCO', '2020-06-10 17:03:48', '0000-00-00 00:00:00', 1),
(22, 'Centro Escolar Cantón El Castaño', 12, 'COLONIA ANGELA MONTANO CANTON EL CASTAÑO JURISDICCION DE JIQUILISCO', '2020-06-10 17:04:38', '0000-00-00 00:00:00', 1),
(23, 'Centro Escolar Cantón La Puerta', 11, 'CANTON LA PUERTA MERCEDES UMAÑA, USULUTAN', '2020-06-10 17:05:47', '0000-00-00 00:00:00', 1),
(24, 'Centro Escolar Caserío Colonia Las Flores', 11, 'CANTON SANTA ANITA CASERIO COLONIA LAS FLORES', '2020-06-10 17:06:25', '0000-00-00 00:00:00', 1),
(25, 'Complejo Educativo Cantón Las Lajas', 13, 'CALLE A CANTON SAN MARCELINO Y FINAL CALLE PRINCIPAL HACIENDA LAS LAJAS IZALCO', '2020-06-10 17:09:01', '0000-00-00 00:00:00', 1),
(26, 'Centro Escolar Cantón Cuyagualo', 13, 'CALLE A CANTON LAS LAJAS Y CALLE A CANTON CUYAGUALO CASERIO EL PROGRESO', '2020-06-10 17:09:38', '0000-00-00 00:00:00', 1),
(27, 'Instituto Nacional de Acajutla', 14, 'AVENIDA SENSUNAPAN Y CALLE ACAXUAL FRENTE COLONIA RASA 2 ACAJUTLA', '2020-06-10 17:10:22', '0000-00-00 00:00:00', 1),
(28, 'Casa Comunal Adesco IVU', 14, 'AVENIDA SENSUNAPAN COLONIA  IVU PASAJE A SOBRE CALZADA PRINCIPAL', '2020-06-10 17:11:01', '0000-00-00 00:00:00', 1),
(29, 'Centro Escolar Cantón Las Cañas', 15, 'CASERIO LA CEIBA CANTON LOS MOJONES SANTA ROSA DE LIMA DEPARTAMENTO LA UNION', '2020-06-10 17:12:10', '0000-00-00 00:00:00', 1),
(30, 'Centro Escolar Cantón El Algodón', 15, 'CANTON EL ALGODON SANTA ROSA DE LIMA', '2020-06-10 17:13:07', '0000-00-00 00:00:00', 1),
(31, 'Complejo Educativo Mario Gómez', 16, 'CALLE 15 DE SEPTIEMBRE AVENIDA MARIO GOMEZ BARRIO SAN ANTONIO CONCHAGUA', '2020-06-10 17:14:33', '0000-00-00 00:00:00', 1),
(32, 'Centro Escolar Colonia Buena Vista', 16, 'CANTON EL CIPRES CONCHAGUA', '2020-06-10 17:15:23', '0000-00-00 00:00:00', 1),
(33, 'Centro Escolar San Agustín', 17, '1° AVENIDA SUR BARRIO SAN JOSE ZACATECOLUCA', '2020-06-10 17:17:10', '0000-00-00 00:00:00', 1),
(34, 'Centro Escolar 16 de Agosto de 1996', 17, '4 KILOMETROS AL NORTE DEL HOSPITAL SANTA TERESA CALLE AL VOLCAN ZACATECOLUCA', '2020-06-10 17:18:31', '0000-00-00 00:00:00', 1),
(35, 'Centro Escolar Alberto Masferrer', 18, 'FINAL CALLE ALBERTO MASFERRER BARRIO SAN JOSE OLOCUILTA ', '2020-06-10 17:19:43', '0000-00-00 00:00:00', 1),
(36, 'Casa Comunal de Olocuilta', 18, 'HACIENDA SANTO TOMAS KILOMETRO 57 1/2 CARRETERA A SAN PEDRO NONUALCO', '2020-06-10 17:20:58', '0000-00-00 00:00:00', 1),
(37, 'Centro Escolar El Dorado', 19, 'CANTON SAN BARTOLO COLONIA REUBICACION NUCLEO #2 CALLE PRINCIPAL CHALATENANGO', '2020-06-10 17:22:49', '0000-00-00 00:00:00', 1),
(38, 'Centro Escolar Metropolitano', 19, 'FINAL 6° AVENIDA SUR BARRIO LA SIERPE CHALATENANGO', '2020-06-10 17:24:03', '0000-00-00 00:00:00', 1),
(39, 'Centro Escolar Abel de Jesus Alas', 20, 'BARRIO SANTA ANA FRENTE UNIDAD DE SALUD DE SAN FRANCISCO LEMPA', '2020-06-10 17:25:21', '0000-00-00 00:00:00', 1),
(40, 'Centro Escolar Eulogia Rivas', 21, '1a AVENIDA SUR DR JULIO ALEJANDRO MURRA SACA Y 2a CALLE PONIENTE MONSEÑOR OSCAR ARNULFO ROMERO #2 COJUTEPEQUE', '2020-06-10 17:30:49', '0000-00-00 00:00:00', 1),
(41, 'Centro Escolar Colonia Fátima', 21, '8 ° AV. NORTE, AV. JERUSALEN, CALLE PRINCIPAL COL. FATIMA', '2020-06-10 17:31:49', '0000-00-00 00:00:00', 1),
(42, 'Centro Escolar Caserío El Líbano', 22, 'CARRETERA SUCHITOTO - AGUILARES CANTON BUENA VISTA', '2020-06-10 17:33:21', '0000-00-00 00:00:00', 1),
(43, 'Centro Escolar Hacienda Colima', 22, 'COLONIA CANAAN KILOMETRO 46 1/2 CARRETERA TRONCAL DEL NORTE CANTON COLIMA', '2020-06-10 17:34:12', '0000-00-00 00:00:00', 1),
(44, 'Centro Escolar Cantón El Roble', 23, 'CANTON EL ROBLE COLONIA EL MANGUITO CALLE A CASERIO PLAN DE LA ARENA', '2020-06-10 17:35:31', '0000-00-00 00:00:00', 1),
(45, 'Centro Escolar Cantón Río Frío', 23, 'CALLE PRINCIPAL CANTON RIO FRIO CASERIO EL VALLE CANTON RIO FRIO', '2020-06-10 17:36:23', '0000-00-00 00:00:00', 1),
(46, 'Centro Escolar Palo Verde', 24, 'CALLE A CTON PALO VERDE Y LA LAGUNA VERDE LOT LA ESPERANZA', '2020-06-10 17:45:37', '0000-00-00 00:00:00', 1),
(47, 'Centro Escolar General Francisco Menendez', 24, '1RA AV NORTE BARRIO EL CALVARIO CONTIGUO AL PARQUE', '2020-06-10 17:46:54', '0000-00-00 00:00:00', 1),
(48, 'Instituto Nacional 14 de Julio de 1875', 25, 'CANTON EL TRIUNFO KILOMETRO 167 1/2 SALIDA A SAN MIGUEL', '2020-06-10 17:47:49', '0000-00-00 00:00:00', 1),
(49, 'Centro Escolar San Francisco Gotera', 25, 'BARRIO LA CRUZ FINAL 1a CALLE ORIENTE SAN FRANCISCO GOTERA', '2020-06-10 17:49:16', '0000-00-00 00:00:00', 1),
(50, 'Centro Escolar Cantón Flamenco', 26, 'CALLE RUTA MILITAR KILOMETRO 163 CERCA DE LA ERMITA', '2020-06-10 17:50:33', '0000-00-00 00:00:00', 1),
(51, 'Centro Escolar Cantón San Juan', 26, 'CANTON SAN JUAN JOCORO', '2020-06-10 17:52:31', '0000-00-00 00:00:00', 1),
(52, 'Centro Escolar Urbanización Flores', 27, 'URBANIZACION FLORES CANTON CHUCUYO SAN VICENTE', '2020-06-10 17:55:11', '0000-00-00 00:00:00', 1),
(53, 'Centro Escolar Caserío Río Frío', 27, 'KILOMETRO 81 1/2 CARRETERA PANAMERICANA', '2020-06-10 17:56:27', '0000-00-00 00:00:00', 1),
(54, 'Instituto Nacional de San José Verapaz', 28, '2° CALLE ORIENTE #26 BARRIO LAS MERCEDES VERAPAZ', '2020-06-10 17:58:17', '0000-00-00 00:00:00', 1),
(55, 'Centro Escolar Coronel Napoleón Alvarado', 28, 'CALLE PRINCIPAL 30 METROS AL PONIENTE DEL TEMPLO CATOLICO', '2020-06-10 17:59:14', '0000-00-00 00:00:00', 1),
(56, 'Centro Escolar José Antonio Larreynaga', 29, 'CASERIO LA PERLA CANTON ROJAS MUNICIPIO DE SENSUNTEPEQUE CABAÑAS', '2020-06-10 18:00:18', '0000-00-00 00:00:00', 1),
(57, 'Centro Escolar Fermín Velasco', 29, 'COLONIA NAZARENO 1a CALLE PONIENTE Y 10 AVENIDA NORTE', '2020-06-10 18:01:03', '0000-00-00 00:00:00', 1),
(58, 'Instituto Nacional de Ilobasco', 30, 'CALLE SALIDA A PRESA 5 DE NOVIEMBRE ILOBASCO DEPARTAMENTO DE CABAÑAS', '2020-06-10 18:02:02', '0000-00-00 00:00:00', 1),
(59, 'Centro Escolar Agustín Rivera', 30, 'CARRETERA A SENSUNTEPEQUE KILOMETRO 52 DESVIO A ILOBASCO', '2020-06-10 18:03:06', '0000-00-00 00:00:00', 1);

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
(1, 'Ahuachapán', '2020-06-06 01:10:39', '2020-06-10 16:31:31', 1),
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
(1, 'Junta N° 1', 1, '2020-06-07 02:04:51', '2020-06-10 18:26:14', 1),
(2, 'Junta N°2', 2, '2020-06-10 18:26:42', '2020-06-10 18:26:42', 1),
(3, 'Junta N°3', 3, '2020-06-10 18:28:11', '2020-06-10 18:28:11', 1),
(4, 'Junta N°4', 4, '2020-06-10 18:28:22', '2020-06-10 18:28:22', 1),
(5, 'Junta N°5', 5, '2020-06-10 18:28:58', '2020-06-10 18:32:25', 1),
(6, 'Junta N°6', 6, '2020-06-10 18:29:17', '2020-06-10 18:32:41', 1),
(7, 'Junta N°7', 7, '2020-06-10 18:31:11', '2020-06-10 18:32:54', 1),
(8, 'Junta N°8', 8, '2020-06-10 18:31:21', '2020-06-10 18:33:07', 1),
(9, 'Junta N°9', 9, '2020-06-10 18:31:30', '2020-06-10 18:33:24', 1),
(10, 'Junta N°10', 10, '2020-06-10 18:33:45', '2020-06-10 18:33:45', 1),
(11, 'Junta N°11', 11, '2020-06-10 18:33:55', '2020-06-10 18:33:55', 1),
(12, 'Junta N°12', 12, '2020-06-10 18:34:02', '2020-06-10 18:34:02', 1),
(13, 'Junta N°13', 13, '2020-06-10 18:38:45', '2020-06-10 18:38:45', 1),
(14, 'Junta N°14', 14, '2020-06-10 18:38:53', '2020-06-10 18:38:53', 1),
(15, 'Junta N°15', 15, '2020-06-10 18:39:02', '2020-06-10 18:39:02', 1),
(16, 'Junta N°16', 16, '2020-06-10 18:39:37', '2020-06-10 18:39:37', 1),
(17, 'Junta N°17', 17, '2020-06-10 18:39:55', '2020-06-10 18:39:55', 1),
(18, 'Junta N°18', 18, '2020-06-10 18:40:03', '2020-06-10 18:40:03', 1),
(19, 'Junta N°19', 19, '2020-06-10 18:40:12', '2020-06-10 18:40:12', 1),
(20, 'Junta N°20', 20, '2020-06-10 18:40:26', '2020-06-10 18:40:26', 1),
(21, 'Junta N°21', 21, '2020-06-10 18:40:38', '2020-06-10 18:40:38', 1),
(22, 'Junta N°22', 22, '2020-06-10 18:40:51', '2020-06-10 18:40:51', 1),
(23, 'Junta N°23', 23, '2020-06-10 18:41:02', '2020-06-10 18:41:02', 1),
(24, 'Junta N°24', 24, '2020-06-10 18:41:50', '2020-06-10 18:41:50', 1),
(25, 'Junta N°25', 25, '2020-06-10 18:42:03', '2020-06-10 18:42:03', 1),
(26, 'Junta N°26', 26, '2020-06-10 18:42:13', '2020-06-10 18:42:13', 1),
(27, 'Junta N°27', 27, '2020-06-10 18:42:25', '2020-06-10 18:42:25', 1),
(28, 'Junta N°28', 28, '2020-06-10 18:43:04', '2020-06-10 18:43:04', 1),
(29, 'Junta N°29', 29, '2020-06-10 18:43:15', '2020-06-10 18:43:15', 1),
(30, 'Junta N°30', 30, '2020-06-10 18:43:31', '2020-06-10 18:43:31', 1),
(31, 'Junta N°31', 31, '2020-06-10 18:43:44', '2020-06-10 18:43:44', 1),
(32, 'Junta N°32', 32, '2020-06-10 18:50:12', '2020-06-10 18:50:12', 1),
(33, 'Junta N°33', 33, '2020-06-10 18:50:25', '2020-06-10 18:50:25', 1),
(34, 'Junta N°34', 34, '2020-06-10 18:51:08', '2020-06-10 18:51:08', 1),
(35, 'Junta N°35', 35, '2020-06-10 18:51:21', '2020-06-10 18:51:21', 1),
(36, 'Junta N°36', 36, '2020-06-10 18:51:34', '2020-06-10 18:51:34', 1),
(37, 'Junta N°37', 37, '2020-06-10 18:54:49', '2020-06-10 18:54:49', 1),
(38, 'Junta N°38', 38, '2020-06-10 18:55:26', '2020-06-10 18:55:26', 1),
(39, 'Junta N°39', 39, '2020-06-10 18:55:40', '2020-06-10 18:55:40', 1),
(40, 'Junta N°40', 40, '2020-06-10 18:55:54', '2020-06-10 18:55:54', 1),
(41, 'Junta N°41', 41, '2020-06-10 18:56:08', '2020-06-10 18:56:08', 1),
(42, 'Junta N°42', 42, '2020-06-10 18:57:05', '2020-06-10 18:57:05', 1),
(43, 'Junta N°43', 43, '2020-06-10 18:57:20', '2020-06-10 18:57:20', 1),
(44, 'Junta N°44', 44, '2020-06-10 18:57:31', '2020-06-10 18:57:31', 1),
(45, 'Junta N°45', 45, '2020-06-10 18:57:50', '2020-06-10 18:57:50', 1),
(46, 'Junta N°46', 46, '2020-06-10 19:00:13', '2020-06-10 19:00:13', 1),
(47, 'Junta N°47', 47, '2020-06-10 19:00:28', '2020-06-10 19:00:28', 1),
(48, 'Junta N°48', 48, '2020-06-10 19:00:50', '2020-06-10 19:01:26', 1),
(49, 'Junta N°49', 49, '2020-06-10 19:02:33', '2020-06-10 19:02:33', 1),
(50, 'Junta N°50', 50, '2020-06-10 19:02:54', '2020-06-10 19:02:54', 1),
(51, 'Junta N°51', 51, '2020-06-10 19:03:12', '2020-06-10 19:03:12', 1),
(52, 'Junta N°52', 52, '2020-06-10 19:03:41', '2020-06-10 19:03:41', 1),
(53, 'Junta N°53', 53, '2020-06-10 19:03:51', '2020-06-10 19:03:51', 1),
(54, 'Junta N°54', 54, '2020-06-10 19:04:44', '2020-06-10 19:04:44', 1),
(55, 'Junta N°55', 55, '2020-06-10 19:04:55', '2020-06-10 19:04:55', 1),
(56, 'Junta N°56', 56, '2020-06-10 19:05:10', '2020-06-10 19:05:10', 1),
(57, 'Junta N°57', 57, '2020-06-10 19:06:04', '2020-06-10 19:06:04', 1),
(58, 'Junta N°58', 58, '2020-06-10 19:06:52', '2020-06-10 19:06:52', 1),
(59, 'Junta N°59', 59, '2020-06-10 19:07:03', '2020-06-10 19:07:03', 1);

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
(1, 'San Salvador', 10, '2020-06-06 01:23:54', '2020-06-06 01:40:09', 1),
(2, 'San Marcos', 10, '2020-06-10 12:14:08', '0000-00-00 00:00:00', 1),
(3, 'Soyapango', 10, '2020-06-10 13:02:23', '0000-00-00 00:00:00', 1),
(4, 'Santa Ana', 12, '2020-06-10 13:07:01', '0000-00-00 00:00:00', 1),
(5, 'Coatepeque', 12, '2020-06-10 13:07:30', '0000-00-00 00:00:00', 1),
(6, 'San Miguel', 9, '2020-06-10 13:10:00', '0000-00-00 00:00:00', 1),
(7, 'Chinameca', 9, '2020-06-10 13:10:35', '0000-00-00 00:00:00', 1),
(8, 'Santa Tecla', 5, '2020-06-10 13:10:53', '0000-00-00 00:00:00', 1),
(9, 'Chiltiupán', 5, '2020-06-10 13:11:22', '0000-00-00 00:00:00', 1),
(10, 'Antiguo Cuscatlán', 5, '2020-06-10 13:11:37', '0000-00-00 00:00:00', 1),
(11, 'Mercedes Umaña', 14, '2020-06-10 13:12:01', '0000-00-00 00:00:00', 1),
(12, 'Jiquilisco', 14, '2020-06-10 13:12:22', '0000-00-00 00:00:00', 1),
(13, 'Izalco', 13, '2020-06-10 13:12:46', '0000-00-00 00:00:00', 1),
(14, 'Acajutla', 13, '2020-06-10 13:13:09', '0000-00-00 00:00:00', 1),
(15, 'Santa Rosa de Lima', 7, '2020-06-10 13:13:36', '0000-00-00 00:00:00', 1),
(16, 'Conchagua', 7, '2020-06-10 13:13:55', '0000-00-00 00:00:00', 1),
(17, 'Zacatecoluca', 6, '2020-06-10 13:14:40', '0000-00-00 00:00:00', 1),
(18, 'Olocuilta', 6, '2020-06-10 13:14:51', '0000-00-00 00:00:00', 1),
(19, 'Chalatenango', 3, '2020-06-10 13:15:16', '0000-00-00 00:00:00', 1),
(20, 'San Francisco Lempa', 3, '2020-06-10 13:15:57', '0000-00-00 00:00:00', 1),
(21, 'Cojutepeque', 4, '2020-06-10 13:16:15', '0000-00-00 00:00:00', 1),
(22, 'Suchitoto', 4, '2020-06-10 13:16:26', '0000-00-00 00:00:00', 1),
(23, 'Ahuachapán', 1, '2020-06-10 13:16:47', '0000-00-00 00:00:00', 1),
(24, 'Apaneca', 1, '2020-06-10 13:17:06', '0000-00-00 00:00:00', 1),
(25, 'San Francisco Gotera', 8, '2020-06-10 13:17:34', '0000-00-00 00:00:00', 1),
(26, 'Jocoro', 8, '2020-06-10 13:17:45', '0000-00-00 00:00:00', 1),
(27, 'San Vicente', 11, '2020-06-10 16:29:42', '0000-00-00 00:00:00', 1),
(28, 'Verapaz', 11, '2020-06-10 16:30:09', '0000-00-00 00:00:00', 1),
(29, 'Sensuntepeque', 2, '2020-06-10 16:30:35', '0000-00-00 00:00:00', 1),
(30, 'Ilobasco', 2, '2020-06-10 16:30:44', '0000-00-00 00:00:00', 1);

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
(4, 'NUEVAS IDEAS', 'Nayib Bukele', 'img/NUEVAS IDEASNayib Bukelenuevas ideas.jpg', 'img/NUEVAS IDEASNayib Bukelenayib.jpg', '2020-06-08 03:31:06', '0000-00-00 00:00:00', 1),
(5, 'Partido de Concertación Nacional', 'PCN', 'img/Partido de Concertación NacionalPCNPCN-500.png', 'img/Partido de Concertación NacionalPCNPCN-500.png', '2020-06-10 18:14:27', '0000-00-00 00:00:00', 1),
(6, 'Democracia Salvadoreña', 'Democracia Salvadoreña ', 'img/DS-500.png', 'img/DS-500.png', '2020-06-10 18:17:52', '2020-06-10 19:09:20', 1);

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
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `junta_receptora`
--
ALTER TABLE `junta_receptora`
  MODIFY `id_junta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_munici` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
