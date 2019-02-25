-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-02-2019 a las 05:00:35
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoenelmedio`
--

CREATE TABLE `cargoenelmedio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargoenelmedio`
--

INSERT INTO `cargoenelmedio` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Blogera', ''),
(3, 'Colaboradora', ''),
(4, 'Columnista/Editorialista/Articulista', ''),
(5, 'Corresponsal', ''),
(6, 'Directora', ''),
(7, 'Fotoperiodista', ''),
(8, 'Locutora', ''),
(9, 'Presentadora', ''),
(10, 'Reportera', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id`, `nombre`) VALUES
(1, 'No'),
(2, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosagresor`
--

CREATE TABLE `datosagresor` (
  `id` int(11) NOT NULL,
  `id_datosincidente` int(11) NOT NULL DEFAULT '0',
  `id_sexo` int(11) NOT NULL DEFAULT '0',
  `id_tipoAgresor` int(11) NOT NULL DEFAULT '0',
  `id_nivel1` int(11) DEFAULT '1',
  `id_nivel2` int(11) DEFAULT '1',
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosagresor`
--

INSERT INTO `datosagresor` (`id`, `id_datosincidente`, `id_sexo`, `id_tipoAgresor`, `id_nivel1`, `id_nivel2`, `nombre`) VALUES
(1, 1, 2, 2, 2, 1, 'PEÑA NIETO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosincidente`
--

CREATE TABLE `datosincidente` (
  `id` int(11) NOT NULL,
  `id_datospersonales` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estatus` int(2) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `fechaIncidente` date NOT NULL,
  `id_estados` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `latitud` varchar(20) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `relatoriaDelHecho` text NOT NULL,
  `tipoDeViolenciaPsicologica` int(2) NOT NULL,
  `tipodeViolenciaFisica` int(2) NOT NULL,
  `tipoDeViolenciaPatrimonial` int(2) NOT NULL,
  `tipodeViolenciaEconomica` int(2) NOT NULL,
  `tipoDeViolenciaSexual` int(2) NOT NULL,
  `tipoDeViolenciaCibernetica` int(2) NOT NULL,
  `modalidadViolenciaFamiliar` int(2) NOT NULL,
  `modalidadViolenciaLaboral` int(2) NOT NULL,
  `modalidadViolenciaEnLaComunidad` int(2) NOT NULL,
  `modalidadViolenciaInstitucional` int(2) NOT NULL,
  `modalidadViolenciaFeminicida` int(2) NOT NULL,
  `modalidadDeViolenciaCibernetica` int(2) NOT NULL,
  `cimacHaceAcompanamientoAnteElMecanismo` int(2) NOT NULL,
  `queOtraOrganizacionLasAcompana` varchar(255) NOT NULL,
  `atencionMedicaRecibida` int(2) NOT NULL,
  `atencionPsicologicaRecibida` int(2) NOT NULL,
  `atencionJuridicaRecibida` int(2) NOT NULL,
  `ningunaAtencionRecibida` int(2) NOT NULL,
  `analisisDeContexto` text NOT NULL,
  `analisisDeRiesgo` text NOT NULL,
  `observaciones` text NOT NULL,
  `consecuenciaFueDespedida` int(2) NOT NULL,
  `consecuenciasBajoPerfil` int(2) NOT NULL,
  `consecuenciasDesplazamiento` int(2) NOT NULL,
  `id_consecuenciajudicializacion` int(2) DEFAULT '1',
  `beneficiariaDelMecanismoDeProtecion` int(2) NOT NULL,
  `carpetaDeInvestigacionEnAlgunaProcuraduria` int(2) NOT NULL,
  `quejaAnteComisionDeDerechosHumanos` int(2) NOT NULL,
  `id_renvi` int(11) NOT NULL,
  `numeroregistrorenavi` varchar(255) NOT NULL,
  `estasDeAcuedoConElMecanismoDeProteccion` int(2) NOT NULL,
  `esasMedidasTePermitenSeguirHaciendoTuTrabajo` int(2) NOT NULL,
  `porQue` text NOT NULL,
  `tenidoResultadosLaCarpetaDeInvestigacion` int(2) NOT NULL,
  `cuales` text NOT NULL,
  `queAHechoLaComisionDeDerechosHumanos` text NOT NULL,
  `id_motivodelasgresion` int(11) DEFAULT '1',
  `id_tipoDeInvestigacion` int(11) DEFAULT '1',
  `id_manifestacionesdeviolencia` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosincidente`
--

INSERT INTO `datosincidente` (`id`, `id_datospersonales`, `id_usuario`, `estatus`, `fechaRegistro`, `fechaIncidente`, `id_estados`, `municipio`, `localidad`, `latitud`, `longitud`, `relatoriaDelHecho`, `tipoDeViolenciaPsicologica`, `tipodeViolenciaFisica`, `tipoDeViolenciaPatrimonial`, `tipodeViolenciaEconomica`, `tipoDeViolenciaSexual`, `tipoDeViolenciaCibernetica`, `modalidadViolenciaFamiliar`, `modalidadViolenciaLaboral`, `modalidadViolenciaEnLaComunidad`, `modalidadViolenciaInstitucional`, `modalidadViolenciaFeminicida`, `modalidadDeViolenciaCibernetica`, `cimacHaceAcompanamientoAnteElMecanismo`, `queOtraOrganizacionLasAcompana`, `atencionMedicaRecibida`, `atencionPsicologicaRecibida`, `atencionJuridicaRecibida`, `ningunaAtencionRecibida`, `analisisDeContexto`, `analisisDeRiesgo`, `observaciones`, `consecuenciaFueDespedida`, `consecuenciasBajoPerfil`, `consecuenciasDesplazamiento`, `id_consecuenciajudicializacion`, `beneficiariaDelMecanismoDeProtecion`, `carpetaDeInvestigacionEnAlgunaProcuraduria`, `quejaAnteComisionDeDerechosHumanos`, `id_renvi`, `numeroregistrorenavi`, `estasDeAcuedoConElMecanismoDeProteccion`, `esasMedidasTePermitenSeguirHaciendoTuTrabajo`, `porQue`, `tenidoResultadosLaCarpetaDeInvestigacion`, `cuales`, `queAHechoLaComisionDeDerechosHumanos`, `id_motivodelasgresion`, `id_tipoDeInvestigacion`, `id_manifestacionesdeviolencia`) VALUES
(1, 2, 1, 1, '2019-02-25', '2019-02-24', 8, 'MAGDALEN CONTRERAS', 'SAN BERNABE', '12.1211212', '423423', 'relatoria de hecho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'otra', 1, 1, 1, 1, 'analisis de contexto', 'observaciones', 'observaciones', 1, 2, 1, 2, 2, 2, 2, 2, 'nomero renavi', 1, 1, 'por que', 1, '                   cuales resultados   ', '           la cndh', 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoslaborales`
--

CREATE TABLE `datoslaborales` (
  `id` int(11) NOT NULL,
  `Id_datospersonales` int(11) NOT NULL,
  `nombreDelMedio` varchar(255) NOT NULL,
  `id_tipodemedio` int(11) NOT NULL,
  `paracuantosmedioslabora` int(11) NOT NULL,
  `id_tipodecontrato` int(11) NOT NULL DEFAULT '1',
  `DireccionDelMedio` varchar(200) DEFAULT NULL,
  `id_cargoenelmedio` int(11) NOT NULL,
  `id_fuente` int(11) NOT NULL,
  `Links1` varchar(200) DEFAULT NULL,
  `Links2` varchar(200) DEFAULT NULL,
  `Links3` varchar(200) DEFAULT NULL,
  `Links4` varchar(200) DEFAULT NULL,
  `Links5` varchar(200) DEFAULT NULL,
  `AnosDeEjercerElPeriodismo` int(30) NOT NULL,
  `id_SexoDelJefeInmediato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datoslaborales`
--

INSERT INTO `datoslaborales` (`id`, `Id_datospersonales`, `nombreDelMedio`, `id_tipodemedio`, `paracuantosmedioslabora`, `id_tipodecontrato`, `DireccionDelMedio`, `id_cargoenelmedio`, `id_fuente`, `Links1`, `Links2`, `Links3`, `Links4`, `Links5`, `AnosDeEjercerElPeriodismo`, `id_SexoDelJefeInmediato`) VALUES
(1, 1, '', 4, 2, 3, 'Aristegui Noticias', 10, 12, '', '', '', '', '', 19, 3),
(2, 2, '', 5, 5, 4, 'Aristegui Noticias, El Heraldo de México, El Financiero, MVS Noticias, La Red de Radio Red ', 10, 14, '', '', '', '', '', 20, 2),
(3, 3, '', 5, 1, 1, 'Reforma', 10, 12, '', '', '', '', '', 0, 1),
(4, 4, '', 9, 0, 1, 'Telemax', 8, 3, '', '', '', '', '', 0, 1),
(5, 5, '', 4, 0, 1, ' BuzzFeed México y MásporMás', 10, 12, '', '', '', '', '', 0, 1),
(6, 6, '', 5, 0, 1, 'NTR Guadalajara', 10, 12, '', '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosmanifestacion`
--

CREATE TABLE `datosmanifestacion` (
  `id` int(11) NOT NULL,
  `id_datosincidente` int(11) NOT NULL,
  `id_tipodemanifestacion` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `id_estatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosmanifestacion`
--

INSERT INTO `datosmanifestacion` (`id`, `id_datosincidente`, `id_tipodemanifestacion`, `observaciones`, `id_estatus`) VALUES
(1, 1, 2, 'observaciones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosperiodistas`
--

CREATE TABLE `datosperiodistas` (
  `id` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidoPaterno` varchar(200) NOT NULL,
  `apellidoMaterno` varchar(200) DEFAULT NULL,
  `id_Edad` int(3) NOT NULL DEFAULT '0',
  `id_estados` int(11) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `id_tipodecasa` int(20) DEFAULT '1',
  `viveCon` varchar(50) DEFAULT NULL,
  `dependientesEconomicos` varchar(50) DEFAULT NULL,
  `hijos` int(11) DEFAULT '0',
  `id_estadocivil` int(11) NOT NULL DEFAULT '1',
  `comunidadIndigena` int(11) NOT NULL DEFAULT '0',
  `comunidadLGBTTTI` int(11) NOT NULL DEFAULT '0',
  `telefonoparticular` varchar(50) DEFAULT NULL,
  `telefonocelular` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telegram` varchar(50) DEFAULT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `snapchat` varchar(200) DEFAULT NULL,
  `otraredsocial` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `fechaultimamodificacion` date NOT NULL,
  `id_uduarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosperiodistas`
--

INSERT INTO `datosperiodistas` (`id`, `fechaRegistro`, `nombres`, `apellidoPaterno`, `apellidoMaterno`, `id_Edad`, `id_estados`, `municipio`, `localidad`, `id_tipodecasa`, `viveCon`, `dependientesEconomicos`, `hijos`, `id_estadocivil`, `comunidadIndigena`, `comunidadLGBTTTI`, `telefonoparticular`, `telefonocelular`, `email`, `telegram`, `skype`, `facebook`, `twitter`, `instagram`, `youtube`, `snapchat`, `otraredsocial`, `id_usuario`, `estatus`, `fechaultimamodificacion`, `id_uduarioModificacion`) VALUES
(1, '2019-02-07', 'ALBA ESTRELLA', 'PEDROZA', 'VÉLEZ', 6, 18, 'Cuernavaca', 'localidad periodista', 2, 'madre, padre', '0', 0, 2, 1, 1, '', '+52 1 777 227 9069', 'morelosestrella@gmail.com', '', '', '', '@ETUA29', '', '', '', '', 2, 1, '2019-02-22', 1),
(2, '2019-02-07', 'Claudia Karina', ' Gómez ', 'Cancino', 6, 19, '', 'localidad', 2, 'Madre, Padre e hijos', '4', 2, 2, 1, 1, '3111838166', '', '', '', '', '', '@Litgen79', '', '', '', '', 2, 1, '2019-02-25', 1),
(3, '2019-02-07', 'Sara ', 'Pablo ', 'Nava', 6, 8, '', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-02-07', 2),
(4, '2019-02-07', 'Alejandra ', 'León ', 'Barrios', 5, 27, 'Hermosillo', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-02-07', 2),
(5, '2019-02-07', 'Melissa ', 'Amezcua ', 'Bernal', 5, 8, '', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-02-07', 2),
(6, '2019-02-07', 'Sonia ', 'Serrano ', 'Iñiguez', 8, 15, 'Guadalajara', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-02-07', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edades`
--

CREATE TABLE `edades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edades`
--

INSERT INTO `edades` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, '15-20', ''),
(3, '21-25', ''),
(4, '26-30', ''),
(5, '31.35', ''),
(6, '36-40', ''),
(7, '41-45', ''),
(8, '46-50', ''),
(9, '51.55', ''),
(10, '56-60', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Soltera', ''),
(3, 'Casada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin Informacion', 'Valor Inicial'),
(2, 'Aguascalientes', ''),
(3, 'Baja California Norte', ''),
(4, 'Baja California Sur', ''),
(5, 'Campeche', ''),
(6, 'Chiapas', ''),
(7, 'Chihuahua', ''),
(8, 'Ciudad de México', ''),
(9, 'Coahuila', ''),
(10, 'Colima', ''),
(11, 'Durango', ''),
(12, 'Guanajuato', ''),
(13, 'Guerrero', ''),
(14, 'Hidalgo', ''),
(15, 'Jalisco', ''),
(16, 'Estado de México', ''),
(17, 'Michoacán', ''),
(18, 'Morelos', ''),
(19, 'Nayarit', ''),
(20, 'Nuevo León', ''),
(21, 'Oaxaca', ''),
(22, 'Puebla', ''),
(23, 'Querétaro', ''),
(24, 'Quintana Roo', ''),
(25, 'San Luis Potosí', ''),
(26, 'Sinaloa', ''),
(27, 'Sonora', ''),
(28, 'Tabasco', ''),
(29, 'Tamaulipas', ''),
(30, 'Tlaxcala', ''),
(31, 'Veracruz', ''),
(32, 'Yucatán', ''),
(33, 'Zacatecas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fuente`
--

INSERT INTO `fuente` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Ciencia', ''),
(3, 'Cultura', ''),
(4, 'Derechos humanos', ''),
(5, 'Economía', ''),
(6, 'Educativa', ''),
(7, 'Finanzas', ''),
(8, 'General', ''),
(9, 'Laboral', ''),
(10, 'Narcotráfico', ''),
(11, 'Policíaca', ''),
(12, 'Política', ''),
(13, 'Salud', ''),
(14, 'Sociedad', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `id_incidente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivodelasgresion`
--

CREATE TABLE `motivodelasgresion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `motivodelasgresion`
--

INSERT INTO `motivodelasgresion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin información', 'Valor inicial'),
(2, 'Cobertura', ''),
(3, 'nota', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel1agresor`
--

CREATE TABLE `nivel1agresor` (
  `id` int(11) NOT NULL,
  `id_tipoAgresor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel1agresor`
--

INSERT INTO `nivel1agresor` (`id`, `id_tipoAgresor`, `nombre`, `descripcion`) VALUES
(1, 0, 'Sin información', 'Valor inicial'),
(2, 2, 'PRI', ''),
(3, 2, 'PAN', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel2agresor`
--

CREATE TABLE `nivel2agresor` (
  `id` int(11) NOT NULL,
  `id_tipoAgresor` int(11) NOT NULL,
  `id_nivel1` int(11) NOT NULL DEFAULT '1',
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_estatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel2agresor`
--

INSERT INTO `nivel2agresor` (`id`, `id_tipoAgresor`, `id_nivel1`, `nombre`, `descripcion`, `id_estatus`) VALUES
(1, 1, 1, 'Sin información', 'Valor inicial', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nombre`) VALUES
(1, 'Sin informacion'),
(2, 'Federal'),
(3, 'Local');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilbajo`
--

CREATE TABLE `perfilbajo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfilbajo`
--

INSERT INTO `perfilbajo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'No', 'Valor inicial'),
(2, 'Escribe menos del tema', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Siin informacion', 'Valor inicial'),
(2, 'Hombre', ''),
(3, 'Mujer', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sino`
--

CREATE TABLE `sino` (
  `id` int(11) NOT NULL,
  `valor` int(2) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sino`
--

INSERT INTO `sino` (`id`, `valor`, `nombre`) VALUES
(1, 0, 'No'),
(2, 1, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoagresor`
--

CREATE TABLE `tipoagresor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoagresor`
--

INSERT INTO `tipoagresor` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin información', 'Valor inicial'),
(2, 'partidos politicos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecasa`
--

CREATE TABLE `tipodecasa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodecasa`
--

INSERT INTO `tipodecasa` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Propia', ''),
(3, 'Renta', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecontrato`
--

CREATE TABLE `tipodecontrato` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodecontrato`
--

INSERT INTO `tipodecontrato` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Base', ''),
(3, 'Freelance', ''),
(4, 'Honorarios', ''),
(5, 'Propio', ''),
(6, 'Solidario', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeinvestigacion`
--

CREATE TABLE `tipodeinvestigacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodeinvestigacion`
--

INSERT INTO `tipodeinvestigacion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin información', 'Valor inicial'),
(2, 'Crimen Organizado', ''),
(3, 'Politica', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodejudicializacion`
--

CREATE TABLE `tipodejudicializacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodejudicializacion`
--

INSERT INTO `tipodejudicializacion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Denuncia penal', ''),
(3, 'Denuncia daño moral', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodemanifestaciones`
--

CREATE TABLE `tipodemanifestaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodemanifestaciones`
--

INSERT INTO `tipodemanifestaciones` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin información', 'Valor inicial'),
(2, 'feminicida', 'feminicida'),
(3, 'fisica', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodemedio`
--

CREATE TABLE `tipodemedio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodemedio`
--

INSERT INTO `tipodemedio` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Agencia', ''),
(3, 'Blog', ''),
(4, 'Digital', ''),
(5, 'Impreso', ''),
(6, 'Medio alternativo', ''),
(7, 'Medio comunitario', ''),
(8, 'Radio', ''),
(9, 'Tv', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`, `id_rol`, `id_estado`) VALUES
(1, 'Miguel Angel Mendoza Enriquez', 'Kvo', '8183bd79604a11041752a265b9ceacfb7218cf1e', 1, 1),
(2, 'Adriana Ramirez Vanegas', 'ARV', 'cabdfa2be3e8d29b7f68a2dec57b53cb8bc2ebb2', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargoenelmedio`
--
ALTER TABLE `cargoenelmedio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosagresor`
--
ALTER TABLE `datosagresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosincidente`
--
ALTER TABLE `datosincidente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosmanifestacion`
--
ALTER TABLE `datosmanifestacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosperiodistas`
--
ALTER TABLE `datosperiodistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edades`
--
ALTER TABLE `edades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivodelasgresion`
--
ALTER TABLE `motivodelasgresion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel1agresor`
--
ALTER TABLE `nivel1agresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel2agresor`
--
ALTER TABLE `nivel2agresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilbajo`
--
ALTER TABLE `perfilbajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sino`
--
ALTER TABLE `sino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoagresor`
--
ALTER TABLE `tipoagresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodecasa`
--
ALTER TABLE `tipodecasa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodecontrato`
--
ALTER TABLE `tipodecontrato`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodeinvestigacion`
--
ALTER TABLE `tipodeinvestigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodejudicializacion`
--
ALTER TABLE `tipodejudicializacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodemanifestaciones`
--
ALTER TABLE `tipodemanifestaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodemedio`
--
ALTER TABLE `tipodemedio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargoenelmedio`
--
ALTER TABLE `cargoenelmedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datosagresor`
--
ALTER TABLE `datosagresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datosincidente`
--
ALTER TABLE `datosincidente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `datosmanifestacion`
--
ALTER TABLE `datosmanifestacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datosperiodistas`
--
ALTER TABLE `datosperiodistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `edades`
--
ALTER TABLE `edades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `fuente`
--
ALTER TABLE `fuente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motivodelasgresion`
--
ALTER TABLE `motivodelasgresion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nivel1agresor`
--
ALTER TABLE `nivel1agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nivel2agresor`
--
ALTER TABLE `nivel2agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfilbajo`
--
ALTER TABLE `perfilbajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sino`
--
ALTER TABLE `sino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipoagresor`
--
ALTER TABLE `tipoagresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodecasa`
--
ALTER TABLE `tipodecasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodecontrato`
--
ALTER TABLE `tipodecontrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipodeinvestigacion`
--
ALTER TABLE `tipodeinvestigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodejudicializacion`
--
ALTER TABLE `tipodejudicializacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodemanifestaciones`
--
ALTER TABLE `tipodemanifestaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodemedio`
--
ALTER TABLE `tipodemedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
