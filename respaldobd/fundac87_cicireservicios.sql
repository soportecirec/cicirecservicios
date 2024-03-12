-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
<<<<<<< Updated upstream
-- Tiempo de generación: 29-02-2024 a las 09:10:44
=======
-- Tiempo de generación: 05-03-2024 a las 11:32:59
>>>>>>> Stashed changes
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundac87_cicireservicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendaotras`
--

CREATE TABLE `agendaotras` (
  `id` int(11) NOT NULL,
  `nosesion` varchar(200) NOT NULL,
  `autorizacion` varchar(200) NOT NULL,
  `fechaagenda` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `creacionagenda` varchar(100) NOT NULL,
  `gestiono` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `bitacora` longtext NOT NULL,
  `estadoagenda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agendaotras`
--

INSERT INTO `agendaotras` (`id`, `nosesion`, `autorizacion`, `fechaagenda`, `documento`, `creacionagenda`, `gestiono`, `estado`, `bitacora`, `estadoagenda`) VALUES
<<<<<<< Updated upstream
(130, 'Sesión No1', '123456', '23-05-2021 02:02:17', '80114616', '', 'alex.nino@cirec.org', 'Asistio', 'Sin novedad', ''),
(131, 'Sesión No2', '123456', '23-05-2021 02:02:53', '80114616', '', 'alex.nino@cirec.org', 'No Asistio', 'sdasd', ''),
(132, 'Sesión No3', '123456', '23-05-2021 02:03:17', '80114616', '', 'alex.nino@cirec.org', 'Asistio', 'ssad', ''),
(138, '1', '12345', '16-06-2021 07:47:43', '1019075976', '', 'agente.cirec@cirec.org', 'Asistio', 'CALAMIDAD PERSONAL', ''),
(139, '1', '2910', '16-06-2021 07:53:08', '1019075976', '', 'agente.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(145, 'SesiÃ³n No. 1', '7845878', '24-06-2021 12:44:47', '789', '', 'lider.cirec@cirec.org', 'Asistio', 'SALUD', ''),
(146, 'SesiÃ³n No. 1', '7845878', '24-06-2021 12:44:53', '789', '', 'lider.cirec@cirec.org', 'No Asistio', 'TRANSPORTE', ''),
(147, 'SesiÃ³n No. 4', '7845878', '24-06-2021 12:45:00', '789', '', 'lider.cirec@cirec.org', 'Asistio', 'CRUCE CON CITA EXTERNA', ''),
(149, 'SesiÃ³n No. 1', '9999', '25-06-2021 07:01:09', '333966', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(150, 'SesiÃ³n No. 2', '9999', '25-06-2021 07:01:16', '333966', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(151, 'SesiÃ³n No. 1', '9999', '25-06-2021 07:01:25', '333966', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(152, 'SesiÃ³n No. 2', '2910', '25-06-2021 07:05:10', '1019075976', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(153, 'SesiÃ³n No. 1', '5656', '14-07-2021 04:29:19', '2910', '', 'agente.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(155, 'SesiÃ³n No. 1', '15545SSASDFS', '09-08-2021 04:13:57', '1022392399', '', 'agente.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(156, 'SesiÃ³n No. 1', '1256585', '21-07-2023 11:19:38', '4444', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(157, 'SesiÃ³n No. 1', '585945', '03-08-2023 08:43:58', '111111', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(158, 'SesiÃ³n No. 2', '585945', '03-08-2023 08:44:16', '111111', '', 'lider.cirec@cirec.org', 'No Asistio', 'TRANSPORTE', ''),
(159, 'SesiÃ³n No. 3', '585945', '03-08-2023 08:44:36', '111111', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(160, 'SesiÃ³n No. 1', '12522', '03-08-2023 10:12:41', '1019075976', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(162, 'SesiÃ³n No. 1', '8285', '03-08-2023 10:33:09', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(163, 'SesiÃ³n No. 2', '8285', '03-08-2023 10:33:22', '1023941774', '', 'lider.cirec@cirec.org', 'No Asistio', 'CALAMIDAD PERSONAL', ''),
(164, 'SesiÃ³n No. 3', '8285', '03-08-2023 10:33:57', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(167, 'SesiÃ³n No. 1', '7879965', '03-08-2023 10:44:19', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(168, 'SesiÃ³n No. 1', '7879965', '03-08-2023 10:44:44', '1023941774', '', 'lider.cirec@cirec.org', 'No Asistio', 'ORDEN PUBLICO', ''),
(169, 'SesiÃ³n No. 3', '7879965', '03-08-2023 10:45:25', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'ORDEN PUBLICO', ''),
(170, 'SesiÃ³n No. 4', '7879965', '03-08-2023 10:45:32', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'ORDEN PUBLICO', ''),
(171, 'SesiÃ³n No. 5', '7879965', '03-08-2023 10:45:38', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'ORDEN PUBLICO', ''),
(172, 'SesiÃ³n No. 6', '7879965', '03-08-2023 10:45:49', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'ORDEN PUBLICO', ''),
(173, 'SesiÃ³n No. 7', '7879965', '03-08-2023 10:45:54', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(174, 'SesiÃ³n No. 8', '7879965', '03-08-2023 10:46:01', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(175, 'SesiÃ³n No. 9', '7879965', '03-08-2023 10:46:11', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(176, 'SesiÃ³n No. 10', '7879965', '03-08-2023 10:46:17', '1023941774', '', 'lider.cirec@cirec.org', 'Asistio', 'CALAMIDAD PERSONAL', ''),
(177, 'SesiÃ³n No. 1', '333', '25-08-2023 03:27:13', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(178, 'SesiÃ³n No. 2', '333', '25-08-2023 03:27:57', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(179, 'SesiÃ³n No. 1', '99999', '29-08-2023 11:03:48', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(180, 'SesiÃ³n No. 1', '1111111', '18-09-2023 12:29:39', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(181, 'SesiÃ³n No. 2', '1111111', '18-09-2023 12:29:55', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(182, 'SesiÃ³n No. 3', '1111111', '18-09-2023 12:32:11', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(183, 'SesiÃ³n No. 4', '1111111', '18-09-2023 12:35:07', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(184, 'SesiÃ³n No. 5', '1111111', '18-09-2023 12:35:14', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(185, 'SesiÃ³n No. 1', '987654', '02-10-2023 03:54:05', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(186, 'SesiÃ³n No. 2', '987654', '02-10-2023 03:54:58', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(187, 'SesiÃ³n No. 1', '1111', '05-10-2023 02:57:12', '1018453370', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(188, 'SesiÃ³n No. 5', '223333', '22-02-2024 07:34:49', '333966', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(189, 'SesiÃ³n No. 5', '223333', '22-02-2024 10:32:57', '333966', '', 'lider.cirec@cirec.org', 'Asistio', 'ORDEN PUBLICO', ''),
(190, 'SesiÃ³n No. 4', '223333', '22-02-2024 10:46:51', '333966', '', 'lider.cirec@cirec.org', 'AsistiÃ³', 'CALAMIDAD PERSONAL', ''),
(191, 'SesiÃ³n No. 1', '589652', '22-02-2024 02:41:34', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(192, 'SesiÃ³n No. 2', '589652', '22-02-2024 02:41:51', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(193, 'SesiÃ³n No. 3', '589652', '22-02-2024 02:42:08', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(194, 'SesiÃ³n No. 4', '589652', '22-02-2024 02:42:17', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(195, 'SesiÃ³n No. 5', '589652', '22-02-2024 02:42:25', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(196, 'SesiÃ³n No. 6', '589652', '22-02-2024 02:42:32', '1002710209', '', 'lider.cirec@cirec.org', 'No Asistio', 'NO APLICA', ''),
(197, 'SesiÃ³n No. 7', '589652', '22-02-2024 02:43:14', '1002710209', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(198, 'SesiÃ³n No. 1', '420202', '27-02-2024 08:43:05', '27022024', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(199, 'SesiÃ³n No. 2', '420202', '27-02-2024 08:45:37', '27022024', '', 'lider.cirec@cirec.org', 'No Asistio', 'ORDEN PUBLICO', ''),
(200, 'SesiÃ³n No. 3', '420202', '27-02-2024 08:45:53', '27022024', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(201, 'SesiÃ³n No. 4', '420202', '27-02-2024 08:46:06', '27022024', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(202, 'SesiÃ³n No. 1', '809', '27-02-2024 09:14:20', '852123', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(203, 'SesiÃ³n No. 2', '809', '27-02-2024 09:18:29', '852123', '', 'lider.cirec@cirec.org', 'AsistiÃ³', 'CALAMIDAD PERSONAL', ''),
(204, 'SesiÃ³n No. 3', '809', '27-02-2024 09:38:49', '852123', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(205, 'SesiÃ³n No. 1', '852', '27-02-2024 10:36:42', '963369', '', 'lider.cirec@cirec.org', 'Asistio', 'NO APLICA', ''),
(207, 'SesiÃ³n No. 3', '852', '27-02-2024 10:38:51', '963369', '', 'lider.cirec@cirec.org', 'Asistio', 'TRANSPORTE', ''),
(209, 'SesiÃ³n No. 3', '852', '27-02-2024 10:52:57', '963369', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(210, 'SesiÃ³n No. 9', '852', '27-02-2024 10:53:11', '963369', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(211, 'SesiÃ³n No. 1', '753', '27-02-2024 04:43:21', '8787', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(212, 'SesiÃ³n No. 2', '753', '27-02-2024 04:43:33', '8787', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(213, 'SesiÃ³n No. 1', '753', '27-02-2024 06:02:00', '8787', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(214, 'SesiÃ³n No. 7', '753', '27-02-2024 06:02:20', '8787', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(215, 'SesiÃ³n No. 1', '2802', '28-02-2024 08:33:53', '1213456789', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(216, 'SesiÃ³n No. 1', '123456789', '28-02-2024 09:30:17', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(217, 'SesiÃ³n No. 2', '123456789', '28-02-2024 09:41:03', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(218, 'SesiÃ³n No. 1', '963', '28-02-2024 10:31:50', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(219, 'SesiÃ³n No. 1', '852369', '28-02-2024 11:08:41', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(220, 'SesiÃ³n No. 1', '878787', '28-02-2024 11:15:08', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(221, 'SesiÃ³n No. 2', '878787', '28-02-2024 11:15:20', '1002710208', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(223, 'SesiÃ³n No. 1', '6789', '28-02-2024 03:39:34', '88552222', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(224, 'SesiÃ³n No. 2', '6789', '28-02-2024 03:39:39', '88552222', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(225, 'SesiÃ³n No. 3', '6789', '28-02-2024 03:39:50', '88552222', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(226, 'SesiÃ³n No. 4', '6789', '28-02-2024 03:39:58', '88552222', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(227, 'SesiÃ³n No. 5', '6789', '28-02-2024 03:40:05', '88552222', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(228, 'SesiÃ³n No. 1', '96', '28-02-2024 03:53:52', '12365', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(229, 'SesiÃ³n No. 2', '96', '29-02-2024 06:53:56', '12365', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(230, 'SesiÃ³n No. 3', '96', '29-02-2024 06:54:02', '12365', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(231, 'SesiÃ³n No. 4', '96', '29-02-2024 06:54:10', '12365', '', 'lider.cirec@cirec.org', 'Asistio', '', ''),
(232, 'SesiÃ³n No. 1', '7878', '29-02-2024 07:25:39', '12365', '', 'agente.cirec@cirec.org', 'Asistio', '', '');
=======
(1, 'Sesion No. 1', '7878', '05-03-2024 09:37:22', '432', '', 'Sesion No. 5', 'Asistio', '', ''),
(2, 'Sesion No. 2', '7878', '05-03-2024 09:38:30', '432', '', 'Sesion No. 5', 'Asistio', '', ''),
(3, 'Sesion No. 3', '7878', '05-03-2024 09:39:25', '432', '', 'Sesion No. 5', 'Asistio', '', ''),
(4, 'Sesion No. 4', '7878', '05-03-2024 09:39:30', '432', '', 'Sesion No. 5', 'Asistio', '', ''),
(5, 'Sesion No. 5', '7878', '05-03-2024 09:39:52', '432', '', 'Sesion No. 5', 'Asistio', '', ''),
(6, 'Sesion No. 1', '228227210', '05-03-2024 10:08:07', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(7, 'Sesion No. 2', '228227210', '05-03-2024 10:08:14', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(8, 'Sesion No. 3', '228227210', '05-03-2024 10:08:39', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(9, 'Sesion No. 4', '228227210', '05-03-2024 10:08:43', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(10, 'Sesion No. 5', '228227210', '05-03-2024 10:08:47', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(11, 'Sesion No. 6', '228227210', '05-03-2024 10:08:52', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(12, 'Sesion No. 7', '228227210', '05-03-2024 10:09:00', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(13, 'Sesion No. 8', '228227210', '05-03-2024 10:09:09', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(14, 'Sesion No. 9', '228227210', '05-03-2024 10:09:22', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(15, 'Sesion No. 10', '228227210', '05-03-2024 10:09:26', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(16, 'Sesion No. 11', '228227210', '05-03-2024 10:09:29', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(17, 'Sesion No. 12', '228227210', '05-03-2024 10:09:33', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(18, 'Sesion No. 13', '228227210', '05-03-2024 10:09:40', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(19, 'Sesion No. 14', '228227210', '05-03-2024 10:09:56', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(20, 'Sesion No. 15', '228227210', '05-03-2024 10:10:01', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(21, 'Sesion No. 16', '228227210', '05-03-2024 10:10:05', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(22, 'Sesion No. 17', '228227210', '05-03-2024 10:10:19', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(23, 'Sesion No. 18', '228227210', '05-03-2024 10:10:33', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(24, 'Sesion No. 19', '228227210', '05-03-2024 10:10:37', '19104578', '', 'Sesion No. 20', 'Asistio', '', ''),
(25, 'Sesion No. 20', '228227210', '05-03-2024 10:10:41', '19104578', '', 'Sesion No. 20', 'Asistio', '', '');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_cargue`
--

CREATE TABLE `app_cargue` (
  `id` int(11) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `autorizacion` varchar(100) NOT NULL,
  `codigoServicio` varchar(200) NOT NULL,
  `numCodServ` varchar(100) NOT NULL,
  `fechasolicitud` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `fechaautorizacion` varchar(200) NOT NULL,
  `tipodocumento` varchar(100) NOT NULL,
  `valorautorizado` varchar(100) NOT NULL,
  `identificador` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `cantidadautorizada` varchar(100) NOT NULL,
  `cantidadprogramada` varchar(100) NOT NULL,
  `fechalimiteejecucion` varchar(100) NOT NULL,
  `estadogeneral` varchar(100) NOT NULL,
  `bitacoraasitio` longtext NOT NULL,
  `bitacoranoasistio` longtext NOT NULL,
  `fechacontacto` varchar(200) NOT NULL,
  `fechanocontacto` varchar(200) NOT NULL,
  `solicitudespecial` longtext NOT NULL,
  `gestiono` varchar(300) NOT NULL,
  `estadocargue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `app_cargue`
--

INSERT INTO `app_cargue` (`id`, `documento`, `autorizacion`, `codigoServicio`, `numCodServ`, `fechasolicitud`, `nombre`, `telefono`, `entidad`, `fechaautorizacion`, `tipodocumento`, `valorautorizado`, `identificador`, `especialidad`, `cantidadautorizada`, `cantidadprogramada`, `fechalimiteejecucion`, `estadogeneral`, `bitacoraasitio`, `bitacoranoasistio`, `fechacontacto`, `fechanocontacto`, `solicitudespecial`, `gestiono`, `estadocargue`) VALUES
<<<<<<< Updated upstream
(13, 'documento', 'autorizacion', 'Noimbreservicio', 'Codservicio', 'fechasolicitud', 'nombre', 'telefono', 'entidad', 'fechaautorizacion', 'tipodocumento', 'valorautorizado', 'identificador', 'especialidad', 'cantidadautorizada', 'cantidadprogramada', 'fechalimiteejecucion', 'estadogeneral', 'bitacoraasitio', 'bitacoranoasistio', 'fechacontacto', 'fechanocontacto', 'solicitudespecial', 'lider.cirec@cirec.org', 'subido'),
(14, '432', '2', 'TERAPIA FISICA INTEGRAL', '931001', '29-02-2024', 'Salome perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'subido');
=======
(119, '19104578', '228227210', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Rodrigo Granda Escobar', '3232775808', 'POSITIVA', '31-01-2024', 'CC', '', '', '', '20', '20', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'subido');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_cargue_copia`
--

CREATE TABLE `app_cargue_copia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tipoDocumento` varchar(20) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `numAutorizacion` int(11) NOT NULL,
  `fechAutorizacion` varchar(250) NOT NULL,
  `entidad` varchar(250) NOT NULL,
  `codServicio` varchar(250) NOT NULL,
  `nomServicio` varchar(250) NOT NULL,
  `cantServicio` int(11) NOT NULL,
  `pagoUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estadocargue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_mensajes_prueba`
--

CREATE TABLE `app_mensajes_prueba` (
  `id` int(11) NOT NULL,
  `fechasolicitud` varchar(200) NOT NULL,
  `gestiono` varchar(200) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `tipodocumento` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estadocargue` varchar(100) NOT NULL,
  `estado_mensaje` varchar(100) NOT NULL,
  `fecha_cargue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacion_prueba`
--

CREATE TABLE `autorizacion_prueba` (
  `id` int(11) NOT NULL,
  `fechasolicitud` varchar(11) COLLATE ucs2_swedish_ci NOT NULL,
  `gestiono` varchar(60) COLLATE ucs2_swedish_ci NOT NULL,
  `entidad` varchar(30) COLLATE ucs2_swedish_ci NOT NULL,
  `tipodocumento` varchar(2) COLLATE ucs2_swedish_ci NOT NULL,
  `documento` varchar(20) COLLATE ucs2_swedish_ci NOT NULL,
  `nombre` varchar(150) COLLATE ucs2_swedish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) COLLATE ucs2_swedish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE ucs2_swedish_ci NOT NULL,
  `estado` varchar(10) COLLATE ucs2_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `autorizacion` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `bitacora` longtext NOT NULL,
  `gestiono` varchar(100) NOT NULL,
  `tiposeguimiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `autorizacion`, `fecha`, `bitacora`, `gestiono`, `tiposeguimiento`) VALUES
<<<<<<< Updated upstream
(1, '96', '28-02-2024 03:54:18', 'ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION', 'lider.cirec@cirec.org', 'Usuario Contactado');
=======
(1, '7878', '05-03-2024 09:44:48', 'ATIENDE FAMILIAR Y ENTIENDE LA INFORMACION', 'lider.cirec@cirec.org', 'Usuario Contactado');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nocontacto`
--

CREATE TABLE `nocontacto` (
  `id` int(11) NOT NULL,
  `autorizacion` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `bitacora` longtext NOT NULL,
  `gestiono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otrasespecialidades`
--

CREATE TABLE `otrasespecialidades` (
  `id` int(11) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `autorizacion` varchar(100) NOT NULL,
  `codigoServicio` varchar(200) NOT NULL,
  `numCodServ` varchar(100) DEFAULT NULL,
  `fechasolicitud` varchar(100) DEFAULT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `fechaautorizacion` varchar(200) DEFAULT NULL,
  `tipodocumento` varchar(100) DEFAULT NULL,
  `valorautorizado` varchar(100) DEFAULT NULL,
  `identificador` varchar(100) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `cantidadautorizada` varchar(100) DEFAULT NULL,
  `cantidadprogramada` varchar(100) DEFAULT NULL,
  `fechalimiteejecucion` varchar(100) DEFAULT NULL,
  `estadogeneral` varchar(100) DEFAULT NULL,
  `bitacoraasitio` longtext,
  `bitacoranoasistio` longtext,
  `fechacontacto` varchar(200) DEFAULT NULL,
  `fechanocontacto` varchar(200) DEFAULT NULL,
  `solicitudespecial` longtext,
  `gestiono` varchar(300) DEFAULT NULL,
  `estadocargue` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `otrasespecialidades`
--

INSERT INTO `otrasespecialidades` (`id`, `documento`, `autorizacion`, `codigoServicio`, `numCodServ`, `fechasolicitud`, `nombre`, `telefono`, `entidad`, `fechaautorizacion`, `tipodocumento`, `valorautorizado`, `identificador`, `especialidad`, `cantidadautorizada`, `cantidadprogramada`, `fechalimiteejecucion`, `estadogeneral`, `bitacoraasitio`, `bitacoranoasistio`, `fechacontacto`, `fechanocontacto`, `solicitudespecial`, `gestiono`, `estadocargue`) VALUES
<<<<<<< Updated upstream
(2, '12365', '96', 'TERAPIA FISICA INTEGRAL', '931001', '29-02-2024', 'Mateo Kawak', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'EN PROCESO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(3, '12365', '7878', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '28-02-2024', 'Mateo Kawak', '3232775808', 'POSITIVA', '2024-02-28', 'CC', '', '123', 'NULL', '20', '10', 'NULL', 'AUTORIZADO', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'lider.cirec@cirec.org', 'NULL '),
(5, 'documento', 'autorizacion', 'Noimbreservicio', 'Codservicio', 'fechasolicitud', 'nombre', 'telefono', 'entidad', 'fechaautorizacion', 'tipodocumento', 'valorautorizado', 'identificador', 'especialidad', 'cantidadautorizada', 'cantidadprogramada', 'fechalimiteejecucion', 'estadogeneral', 'bitacoraasitio', 'bitacoranoasistio', 'fechacontacto', 'fechanocontacto', 'solicitudespecial', 'lider.cirec@cirec.org', 'sinsubir'),
(6, '5555', '96', 'TERAPIA FISICA INTEGRAL', '931001', '29-02-2024', 'Salome perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(13, 'documento', 'autorizacion', 'Noimbreservicio', 'Codservicio', 'fechasolicitud', 'nombre', 'telefono', 'entidad', 'fechaautorizacion', 'tipodocumento', 'valorautorizado', 'identificador', 'especialidad', 'cantidadautorizada', 'cantidadprogramada', 'fechalimiteejecucion', 'estadogeneral', 'bitacoraasitio', 'bitacoranoasistio', 'fechacontacto', 'fechanocontacto', 'solicitudespecial', 'lider.cirec@cirec.org', 'sinsubir');
=======
(111, '432', '44', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Ramon perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(112, '54212', '55', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '2024-03-05', 'Martha Ramirez', '452212322', 'SEGUROS BOLIVAR ARL', '1-03-2024', 'CC', '', '', '', '12', '5', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(115, '432', '523', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Ramon perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(116, '54212', '874', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '2024-03-05', 'Martha Ramirez', '452212322', 'SEGUROS BOLIVAR ARL', '1-03-2024', 'CC', '', '', '', '12', '5', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(117, '432', '7878', 'TERAPIA FISICA INTEGRAL', '931001', '05-03-2024', 'Ramon perez', '3232775808', 'POSITIVA', '2024-03-05', 'CC', '', '123', 'NULL', '10', '5', 'NULL', 'EN PROCESO', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'lider.cirec@cirec.org', 'NULL '),
(119, '19104578', '228227210', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Rodrigo Granda Escobar', '3232775808', 'POSITIVA', '31-01-2024', 'CC', '', '', '', '20', '20', '', 'SEGUIMIENTO COMERCIAL', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `fechasolicitud` varchar(200) NOT NULL,
  `gestiono` varchar(200) NOT NULL,
  `entidad` varchar(200) NOT NULL,
  `tipodocumento` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estadocargue` varchar(100) DEFAULT NULL,
  `estado_mensaje` varchar(100) DEFAULT NULL,
  `fecha_cargue` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_activo`
--

CREATE TABLE `procesos_activo` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(250) NOT NULL,
  `tipoDocumento` varchar(20) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `numAutorizacion` int(11) NOT NULL,
  `fechAutorizacion` varchar(250) NOT NULL,
  `entidad` varchar(250) NOT NULL,
  `codServicio` varchar(250) NOT NULL,
  `nomServicio` varchar(250) NOT NULL,
  `cantServicio` int(11) NOT NULL,
  `pagoUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estadocargue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `codigoServicio` varchar(100) NOT NULL,
  `nombreServicio` varchar(150) NOT NULL,
  `Entidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `codigoServicio`, `nombreServicio`, `Entidad`) VALUES
(1, '890502', 'Participación en Junta Médica o equipo interdisciplinario por medicina especializada y caso (paciente) ', '   '),
(2, '931001', 'Terapia Fisica Integral', '   '),
(3, '938303', 'Terapia Ocupacional Integral', ' '),
(4, '937000', 'Terapia Fonoaudiológica Integral', '  '),
(5, '938688', 'Hora de rehabilitación terapeútica integral (aplica  para terapia rehabilitacion ocupacional y rehabilitación alta frecuencia que no necesita atención', ' '),
(6, '890208', 'Consulta de primera vez por psicología', ' '),
(7, '890308', 'Consulta de control y seguimiento por psicología', ' '),
(8, '944102', 'Psicoterapia Familiar por psicología', ' '),
(9, '890209', 'Consulta de primera vez por Trabajo Social', ' '),
(10, '890309', 'Consulta de control y seguimiento por Trabajo Social', ' '),
(11, '936600', 'Tratamiento manipulativo  osteopàtico para desplazar lìquidos de tejidos.', ' '),
(12, '938610', 'Atención integral de Rehabilitación (AIRe Básico 24 SS)', ' '),
(13, '938611', 'Atención integral de Rehabilitación (AIRe Intermedio 40 SS)', ' '),
(14, '938612', 'Atención integral de Rehabilitación (AIRe Alto 60 SS)', ' '),
(15, 'AIRE80', 'Atención integral de Rehabilitación (AIRe Intensivo 80 SS)', ' '),
(16, 'FUNARL', 'Programa de Rehabilitación Funcional ARL Mediana Complejidad', ' '),
(17, '13971', 'Atención integral de Osteoartrosis mono o poliarticular CICLO No. 1, 2 y 3', ' '),
(18, '13972', 'Atención integral de Enfermedades autoinmunes asociadas a colágeno CICLO No. 1', ' '),
(19, '139722', 'Atención integral de Enfermedades autoinmunes asociadas a colágeno CICLO No. 2', ' '),
(20, '139723', 'Atención integral de Enfermedades autoinmunes asociadas a colágeno CICLO No. 3', ' '),
(21, '13973', 'Atención integral de Patologías osteomusculoarticulares asociadas a Columna vertebral Ciclo No. 1', ' '),
(22, '139732', 'Atención integral de Patologías osteomusculoarticulares asociadas a Columna vertebral Ciclo No. 2', ' '),
(23, '139733', 'Atención integral de Patologías osteomusculoarticulares asociadas a Columna vertebral Ciclo No. 3', ' '),
(24, '13974', 'Atención integral de Dolor crónico no oncológico', ' '),
(25, '13975', 'Atención integral para el manejo de espasticidad', ' '),
(26, '13976', 'Atención integral de fibromialgia', ' '),
(27, '13977', 'Atención integral de patologías neurodegenerativas Ciclo 1 - Fase aguda', ' '),
(28, '139772', 'Atención integral de patologías neurodegenerativas Ciclo 2 - Fase reducción de Secuelas', ' '),
(29, '13978', 'Ai para Rehabilitación de la Marcha 24 ss', ' '),
(30, '13979', 'Ai para Rehabilitación de la Marcha 40 ss', ' '),
(31, '13980', 'Ai para Rehabilitación de la Marcha 60 ss', ' '),
(32, '13981', 'Ai para Rehabilitación de la Marcha 80 ss', ' '),
(33, '13982', 'Atención integral de Patologías osteomusculoarticulares Ciclo No. 1', ' '),
(34, '139822', 'Atención integral de Patologías osteomusculoarticulares Ciclo No. 2', ' '),
(35, '139823', 'Atención integral de Patologías osteomusculoarticulares Ciclo No. 3', ' '),
(36, 'AIPR24', 'Ai para Rehabilitación Protesica 24 SS', ' '),
(37, 'AIPR40', 'Ai para Rehabilitación Protesica 40 SS', ' '),
(38, '938660', 'Atención integral en Rehabilitación para eventos neurológicos recientes - intensidad leve (24 horas/mes)', ' '),
(39, '938661', 'Atención integral en Rehabilitación para eventos neurológicos recientes - intensidad moderada (40 horas/mes)', ' '),
(40, '938662', 'Atención integral en Rehabilitación para eventos neurológicos recientes - intensidad intermedia (60 horas/mes)', ' '),
(41, '938663', 'Atención integral en Rehabilitación para eventos neurológicos recientes - intensidad intensiva (80 horas/mes)', ' '),
(42, '890264', 'Consulta de primera vez por especialista en Medicina Física y Rehabilitación (Fisiatria)', ' '),
(43, '890364', 'Consulta de control por especialista en Medicina Física y Rehabilitación (Fisiatria)', ' '),
(44, '890280', 'Consulta de primera vez por especialista Ortopedia', ' '),
(45, '890380', 'Consulta de control por especialista Ortopedia', ' '),
(46, '890274', 'Consulta de primera vez por especialista Neurología', ' '),
(47, '890262', 'Consulta de primera vez por especialista Medicina del trabajo ', ' '),
(48, '992300', 'Inyección o infiltración de esteroide', ' '),
(49, '861411', 'Inyección de material miorelajante (Toxina botulinica)', ' '),
(50, 'JUNHID', 'Junta Hidroterapia', ' '),
(51, 'JMFS3F', 'Junta de fisiatría (3 fisiatras)', ' '),
(52, 'JME', 'Junta de Espasticidad', ' '),
(53, 'JIES3E', 'Junta de Especialistas (3 Especialistas)', ' '),
(54, 'JUNMOV', 'Junta de Movilidad ', ' '),
(55, '954629', 'Potenciales Evocados Auditivos', ' '),
(56, '952302', 'Potenciales Evocados Visuales', ' '),
(57, 'PESS2E', 'Potenciales Evocados Somato Sensoriales (2 Extr)', ' '),
(58, 'PESS4E', 'Potenciales Evocados Somato Sensoriales (4 Extr)', ' '),
(59, 'PESSDT', 'Potenciales Evocados Somato Sensoriales (Por dermatoma)', ' '),
(60, '930801', 'Electromiografia con electrodo de fibra única ', ' '),
(61, '891511', 'Prueba de Estimulo Repetitivo', ' '),
(62, '891514', 'Onda F (por nervio)', ' '),
(63, '891515', 'Reflejo H (por nervio)', ' '),
(64, '930820', 'Electromiografía facial', ' '),
(65, '930860', 'Electromiografia en cada Extremidad', ' '),
(66, '891509', 'Neuroconducción en cada Nervio', ' '),
(67, 'EDX2EX', 'Electromiografia (2 Extr)', ' '),
(68, 'NCD2EX', 'Neuroconducción (2 Extr)', ' '),
(69, 'EDX4EX', 'Electromiografia (4 Extr)', ' '),
(70, 'NCD4EX', 'Neuroconducción (4 Extr)', ' '),
(71, '891503', 'Reflejo trigémino facial unilateral', ' '),
(72, '53103', 'Bloqueo de plejo lumbosacro', ' '),
(73, '48402', 'Inyección articulación sacroiliaca', ' '),
(74, '839600', 'Inyección de sustancia terapeutica dentro de bursa', ' '),
(75, '48201', 'Inyección de anestésico en nervio periférico sod incluye: para analgesia o anestesia', ' '),
(76, '861401', 'Infiltracion punto Gatillo por punto', ' '),
(77, '933300', 'Terapia modalidades hidráulicas o hídricas ', ' '),
(78, 'VINHTA', 'Valoración Integral Hidroterapeutica', ' '),
(79, 'MAIHAG', 'Modelo Atención Integral Hidroterapeutica Agudo', ' '),
(80, 'MAIHSU', 'Modelo Atención Integral Hidroterapeutica Subagudo', ' '),
(81, 'MAIHCR', 'Modelo Atención Integral Hidroterapeutica Crónico', ' '),
(82, '940701', 'Administración [Aplicacion] de prueba Neuropsicologica (cualquier tipo) (cada una)', ' '),
(83, '944301', 'Terapia de Rehabilitación Cognitiva', ' '),
(84, 'VABMRL', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Raquis Lumbar', ' '),
(85, 'VABMMA', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Mano', ' '),
(86, 'VABMHM', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en hombro', ' '),
(87, 'VABMRC', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Raquis Cervical', ' '),
(88, 'VABMRO', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Rodilla', ' '),
(89, 'VABAMH', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en la Marcha', ' '),
(90, 'VABMBA', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Balance Articular', ' '),
(91, 'VABSVE', 'Junta de Valoración Biomecánica Funcional para Incapacidad Prologanda en Equilibrio', ' '),
(92, '938310', 'Entrenamiento Funcional en integración Laboral y Social', ' '),
(93, 'FUPROL', 'Programa de Rehabilitación Ocupacional y Laboral', ' '),
(94, '890505', 'Hogar de paso Cirec ', ' '),
(95, '930403', 'Estudio computarizado de la Marcha ', ' '),
(96, 'RPRO', 'Revisión de prótesis', ' '),
(97, 'RORT', 'Revisión de ortesis', ' '),
(98, 'DOMIIB', 'Domicilio - toma de medidas Bogotá', ' '),
(99, 'DOMIEF', 'Domicilio - toma de medidas fuera de Bogotá', ' '),
(100, 'F938673', 'CONSULTA VALORACIÓN POR EQUIPO INTERDISCIPLINARIO (JUNTA INICIAL)', 'Famisanar'),
(101, 'F938688', 'REHABILITACION 2 a 3 PACIENTES SIMULTANEAMENTE POR SESION (aplica para rehabilitacion ocupacional y otros diagnosticos NO plasticidad)', 'Famisanar'),
(102, 'F938696', 'i)  HORA DE REHABILITACION TERAPEUTICA INTEGRAL PARA MENORES DE 10 AÑOS', 'Famisanar'),
(103, 'F938697', 'ii)   HORA DE REHABILITACION TERAPEUTICA INTEGRAL PARA MAYORES DE 10 AÑOS', 'Famisanar'),
(104, '890264', 'i) CONSULTA DE PRIMERA VEZ POR ESPECIALISTA EN MEDICINA FISICA Y REHABILITACION', 'Famisanar'),
(105, '890364', 'ii) CONSULTA DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN MEDICINA FISICA Y REHABILITACION', 'Famisanar'),
(106, '940701', 'ADMINISTRACIÓN [APLICACION] DE PRUEBA NEUROPSICOLOGICA (CUALQUIER TIPO) (CADA UNA)', 'Famisanar'),
(107, 'F940702', 'REHABILITACION NEUROPSICOLOGICA SESION', 'Famisanar'),
(108, 'F940102', 'PRUEBA DE COEFICIENTE INTELECTUAL', 'Famisanar'),
(109, 'F890504', 'JUNTA MEDICA PARA EVALUACION DE TRATAMIENTO INTEGRAL DE REHABILITACION', 'Famisanar'),
(110, '890502', 'i) JUNTA DE EVALUACION INTERDISCIPLINARIA DE REHABILITACION (POR PROFESIONALES DE SALUD)', 'Nueva EPS'),
(111, '890215', 'ii) CONSULTA DE PRIMERA VEZ POR EQUIPO INTERDISCIPLINARIO', 'Nueva EPS'),
(112, '931001', 'TERAPIA FISICA INTEGRAL', 'Nueva EPS'),
(113, '938303', 'TERAPIA OCUPACIONAL INTEGRAL', 'Nueva EPS'),
(114, '937000', 'TERAPIA FONOAUDIOLOGICA INTEGRAL SOD §', 'Nueva EPS'),
(115, '890208', 'CONSULTA DE PRIMERA VEZ POR PSICOLOGIA', 'Nueva EPS'),
(116, '890308', 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR PSICOLOGIA', 'Nueva EPS'),
(117, '936600', 'TRATAMIENTO MANIPULATIVO OSTEOPATICO PARA DESPLAZAR LIQUIDOS DE TEJIDOS (BOMBA LINFATICA) SOD', 'Nueva EPS'),
(118, '938610', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA-DISCAPACIDAD TRANSITORIA LEVE', 'Nueva EPS'),
(119, '938611', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA-DISCAPACIDAD TRANSITORIA MODERADA', 'Nueva EPS'),
(120, '938612', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA / DISCAPACIDAD TRANSITORIA SEVERA', 'Nueva EPS'),
(121, '890264', 'i) CONSULTA DE PRIMERA VEZ POR ESPECIALISTA EN MEDICINA FISICA Y REHABILITACION', 'Nueva EPS'),
(122, '890364', 'ii) CONSULTA DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN MEDICINA FISICA Y REHABILITACION', 'Nueva EPS'),
(123, '890280', 'CONSULTA DE PRIMERA VEZ POR ESPECIALISTA EN ORTOPEDIA Y TRAUMATOLOGIA', 'Nueva EPS'),
(124, 'E890504', 'PARTICIPACION EN JUNTA MEDICA O EQUIPO INTERDISCIPLINARIO POR MEDICINA ESPECIALIZADA Y CASO (PACIENTE)', 'Nueva EPS'),
(125, '930820', 'ELECTROMIOGRAFIA EN CARA', 'Nueva EPS'),
(126, '930860', 'ELECTROMIOGRAFIA EN CADA EXTREMIDAD (UNO O MAS MUSCULOS)', 'Nueva EPS'),
(127, '891509', 'NEUROCONDUCCION (CADA NERVIO)', 'Nueva EPS'),
(128, '861411', 'INYECCION DE MATERIAL MIORELAJANTE (TOXINA BOTULINICA) +', 'Nueva EPS'),
(129, '933300', 'TERAPIA MODALIDADES HIDRAULICAS E HIDRICAS SOD', 'Nueva EPS'),
(130, 'E890292', 'CONSULTA ESPECIALIZADA POR NEUROPSICOLOGIA', 'Nueva EPS'),
(131, 'E938669', 'REHABILITACION NEUROPSICOLOGICA', 'Nueva EPS'),
(132, '938660', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA-DISCAPACIDAD DEFINITIVA LEVE', 'Nueva EPS'),
(133, '938661', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA-DISCAPACIDAD DEFINITIVA MODERADA', 'Nueva EPS'),
(134, '938662', 'REHABILITACION FUNCIONAL DE LA DEFICIENCIA-DISCAPACIDAD DEFINITIVA SEVERA', 'Nueva EPS'),
(135, '930300', 'EVALUACION PROTESICA EN EXTREMIDADES SOD', 'Nueva EPS'),
(136, '890102', 'ATENCION [VISITA] DOMICILIARIA. POR MEDICINA ESPECIALIZADA', 'Nueva EPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `nombres` varchar(100) NOT NULL,
  `tipodocumento` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `convenio` varchar(200) NOT NULL,
  `sintomas` varchar(100) NOT NULL,
  `contacto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `correo`, `password`, `created_at`, `nombres`, `tipodocumento`, `documento`, `telefono`, `direccion`, `convenio`, `sintomas`, `contacto`) VALUES
(41, 'lider.cirec@cirec.org', '$2y$10$VpeP3UP.WFQk7gBpKiCW3.PyHXOeIdWvYHKeIqqKxjcQAik1ruRmq', '2020-10-23 08:44:41', 'alex nino', 'CC', '80114616', '311449965', 'carrera 125 85 32', 'Paciente Particular', 'administrador', ''),
(74, 'agente.cirec@cirec.org', '$2y$10$VpeP3UP.WFQk7gBpKiCW3.PyHXOeIdWvYHKeIqqKxjcQAik1ruRmq', '2020-10-23 08:44:41', 'alex nino', 'CC', '80114616', '311449965', 'carrera 125 85 32', 'Paciente Particular', 'admisiones', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendaotras`
--
ALTER TABLE `agendaotras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `app_cargue`
--
ALTER TABLE `app_cargue`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `app_cargue_copia`
--
ALTER TABLE `app_cargue_copia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `app_mensajes_prueba`
--
ALTER TABLE `app_mensajes_prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autorizacion_prueba`
--
ALTER TABLE `autorizacion_prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nocontacto`
--
ALTER TABLE `nocontacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `otrasespecialidades`
--
ALTER TABLE `otrasespecialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesos_activo`
--
ALTER TABLE `procesos_activo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendaotras`
--
ALTER TABLE `agendaotras`
<<<<<<< Updated upstream
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT de la tabla `app_cargue`
--
ALTER TABLE `app_cargue`
<<<<<<< Updated upstream
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT de la tabla `app_cargue_copia`
--
ALTER TABLE `app_cargue_copia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `app_mensajes_prueba`
--
ALTER TABLE `app_mensajes_prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autorizacion_prueba`
--
ALTER TABLE `autorizacion_prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nocontacto`
--
ALTER TABLE `nocontacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otrasespecialidades`
--
ALTER TABLE `otrasespecialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
