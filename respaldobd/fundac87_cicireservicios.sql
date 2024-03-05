-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-03-2024 a las 08:48:26
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
(1, 'Sesion No. 1', '456789', '04-03-2024 12:48:11', '100245698', '', 'Sesion No. 4', 'Asistio', '', ''),
(2, 'Sesion No. 2', '456789', '04-03-2024 12:48:17', '100245698', '', 'Sesion No. 4', 'Asistio', '', ''),
(3, 'Sesion No. 3', '456789', '04-03-2024 12:48:23', '100245698', '', 'Sesion No. 4', 'Asistio', '', ''),
(4, 'Sesion No. 1', '41', '05-03-2024 07:23:02', '432', '', 'Sesion No. 4', 'Asistio', '', ''),
(5, 'Sesion No. 2', '41', '05-03-2024 07:23:15', '432', '', 'Sesion No. 4', 'Asistio', '', ''),
(6, 'Sesion No. 3', '41', '05-03-2024 07:23:20', '432', '', 'Sesion No. 4', 'Asistio', '', ''),
(7, 'Sesion No. 4', '41', '05-03-2024 07:23:24', '432', '', 'Sesion No. 4', 'Asistio', '', '');

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
(11, '432', '41', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Ramon perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'subido'),
(12, '54212', '51', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '2024-03-05', 'Martha Ramirez', '452212322', 'SEGUROS BOLIVAR ARL', '1-03-2024', 'CC', '', '', '', '12', '5', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'subido');

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
(1, '100245698', '456789', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-04', 'Salome Perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(2, 'documento', 'autorizacion23', 'Noimbreservicio', 'Codservicio', '2024-03-04', 'nombre', 'telefono', 'entidad', 'fechaautorizacion', 'tipodocumento', 'valorautorizado', 'identificador', 'especialidad', 'cantidadautorizada', 'cantidadprogramada', 'fechalimiteejecucion', 'estadogeneral', 'bitacoraasitio', 'bitacoranoasistio', 'fechacontacto', 'fechanocontacto', 'solicitudespecial', 'lider.cirec@cirec.org', 'sinsubir'),
(3, '432', '44', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-04', 'Ramon perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(4, '54212', '55', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '2024-03-04', 'Martha Ramirez', '452212322', 'SEGUROS BOLIVAR ARL', '1-03-2024', 'CC', '', '', '', '12', '5', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(11, '432', '41', 'TERAPIA FISICA INTEGRAL', '931001', '2024-03-05', 'Ramon perez', '3232775808', 'POSITIVA', '29-02-2024', 'CC', '', '', '', '8', '4', '', 'EN PROCESO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(12, '54212', '51', 'TERAPIA OCUPACIONAL INTEGRAL', '938303', '2024-03-05', 'Martha Ramirez', '452212322', 'SEGUROS BOLIVAR ARL', '1-03-2024', 'CC', '', '', '', '12', '5', '', 'AUTORIZADO', '', '', '', '', '', 'lider.cirec@cirec.org', 'sinsubir'),
(13, '100245698', '123', 'TERAPIA FISICA INTEGRAL', '931001', '05-03-2024', 'Salome Perez', '3232775808', 'POSITIVA', '2024-03-05', 'CC', '', '123', 'NULL', '5', '5', 'NULL', 'AUTORIZADO', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'lider.cirec@cirec.org', 'NULL '),
(14, '432', '7878', 'TERAPIA FISICA INTEGRAL', '931001', '05-03-2024', 'Ramon perez', '3232775808', 'POSITIVA', '2024-03-05', 'CC', '', '123', 'NULL', '10', '2', 'NULL', 'SUSPENDIDO', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'lider.cirec@cirec.org', 'NULL ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `app_cargue`
--
ALTER TABLE `app_cargue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
