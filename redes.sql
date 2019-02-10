-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-02-2019 a las 04:14:37
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
-- Estructura de tabla para la tabla `agresor`
--

CREATE TABLE `agresor` (
  `id` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_tipoAgresor` int(11) NOT NULL,
  `id_nivel1` int(11) NOT NULL,
  `id_nivel2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agresor`
--

INSERT INTO `agresor` (`id`, `id_sexo`, `id_tipoAgresor`, `id_nivel1`, `id_nivel2`) VALUES
(1, 1, 2, 2, 0);

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
(2, 'Ciencia', 'dedicada a la ciencia'),
(3, 'Colaboradora', 'colabora de vez en cuando'),
(4, 'Columnista/Editorialista/Articulista', ''),
(5, 'Corresponsal', 'Trabajando a distancia'),
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
-- Estructura de tabla para la tabla `datosagresores`
--

CREATE TABLE `datosagresores` (
  `id` int(11) NOT NULL,
  `id_incidente` int(11) NOT NULL,
  `id_nivelesServidorPublico` int(11) NOT NULL,
  `id_servidorPublico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosIncidente`
--

CREATE TABLE `datosIncidente` (
  `id` int(11) NOT NULL,
  `id_datospersonales` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estatus` int(2) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `fechaIncidente` date NOT NULL,
  `id_estados` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `latitud` varchar(20) NOT NULL,
  `longitud` varchar(50) NOT NULL,
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
  `manifestacionesDeTipoAmenazas` int(2) NOT NULL,
  `manifestacionesDeTipoFeminicida` int(2) NOT NULL,
  `manifestacionesDeTipoDesaparcionesForzadas` int(2) NOT NULL,
  `manifestacionesDeTipoDetenciones` int(2) NOT NULL,
  `manifestacionesDeTipoDetencionesArbitrariasExtrajudicia` int(2) NOT NULL,
  `manifestacionesDeTipoDifamacionCalumniaInjuria` int(2) NOT NULL,
  `consecuenciaFueDespedida` int(2) NOT NULL,
  `consecuenciasBajoPerfil` int(2) NOT NULL,
  `consecuenciasDesplazamiento` int(2) NOT NULL,
  `id_consecuenciajudicializacion` int(2) NOT NULL,
  `atencionMedicaRecibida` int(2) NOT NULL,
  `atencionPsicologicaRecibida` int(2) NOT NULL,
  `atencionJuridicaRecibida` int(2) NOT NULL,
  `ningunaAtencionRecibida` int(2) NOT NULL,
  `agresionAnterior` varchar(200) NOT NULL,
  `beneficiariaDelMecanismoDeProtecion` int(2) NOT NULL,
  `carpetaDeInvestigacionEnAlgunaProcuraduria` int(2) NOT NULL,
  `quejaAnteComisionDeDerechosHumanos` int(2) NOT NULL,
  `estasDeAcuedoConElMecanismoDeProteccion` int(2) NOT NULL,
  `esasMedidasTePermitenSeguirHaciendoTuTrabajo` int(2) NOT NULL,
  `porQue` text NOT NULL,
  `tenidoResultadosLaCarpetaDeInvestigacion` int(2) NOT NULL,
  `cuales` text NOT NULL,
  `queAHechoLaComisionDeDerechosHumanos` text NOT NULL,
  `relatoriaDelHecho` text NOT NULL,
  `analisisDeContexto` text NOT NULL,
  `analisisDeRiesgo` text NOT NULL,
  `observaciones` text NOT NULL,
  `cimacHaceAcompanamientoAnteElMecanismo` int(2) NOT NULL,
  `queOtraOrganizacionLasAcompana` varchar(255) NOT NULL,
  `id_tipoDeInvestigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosIncidente`
--

INSERT INTO `datosIncidente` (`id`, `id_datospersonales`, `id_usuario`, `estatus`, `fechaRegistro`, `nombre`, `fechaIncidente`, `id_estados`, `municipio`, `localidad`, `latitud`, `longitud`, `tipoDeViolenciaPsicologica`, `tipodeViolenciaFisica`, `tipoDeViolenciaPatrimonial`, `tipodeViolenciaEconomica`, `tipoDeViolenciaSexual`, `tipoDeViolenciaCibernetica`, `modalidadViolenciaFamiliar`, `modalidadViolenciaLaboral`, `modalidadViolenciaEnLaComunidad`, `modalidadViolenciaInstitucional`, `modalidadViolenciaFeminicida`, `modalidadDeViolenciaCibernetica`, `manifestacionesDeTipoAmenazas`, `manifestacionesDeTipoFeminicida`, `manifestacionesDeTipoDesaparcionesForzadas`, `manifestacionesDeTipoDetenciones`, `manifestacionesDeTipoDetencionesArbitrariasExtrajudicia`, `manifestacionesDeTipoDifamacionCalumniaInjuria`, `consecuenciaFueDespedida`, `consecuenciasBajoPerfil`, `consecuenciasDesplazamiento`, `id_consecuenciajudicializacion`, `atencionMedicaRecibida`, `atencionPsicologicaRecibida`, `atencionJuridicaRecibida`, `ningunaAtencionRecibida`, `agresionAnterior`, `beneficiariaDelMecanismoDeProtecion`, `carpetaDeInvestigacionEnAlgunaProcuraduria`, `quejaAnteComisionDeDerechosHumanos`, `estasDeAcuedoConElMecanismoDeProteccion`, `esasMedidasTePermitenSeguirHaciendoTuTrabajo`, `porQue`, `tenidoResultadosLaCarpetaDeInvestigacion`, `cuales`, `queAHechoLaComisionDeDerechosHumanos`, `relatoriaDelHecho`, `analisisDeContexto`, `analisisDeRiesgo`, `observaciones`, `cimacHaceAcompanamientoAnteElMecanismo`, `queOtraOrganizacionLasAcompana`, `id_tipoDeInvestigacion`) VALUES
(1, 1, 1, 1, '2019-02-06', '', '0000-00-00', 2, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoslaborales`
--

CREATE TABLE `datoslaborales` (
  `id` int(11) NOT NULL,
  `Id_datospersonales` int(11) NOT NULL,
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

INSERT INTO `datoslaborales` (`id`, `Id_datospersonales`, `id_tipodemedio`, `paracuantosmedioslabora`, `id_tipodecontrato`, `DireccionDelMedio`, `id_cargoenelmedio`, `id_fuente`, `Links1`, `Links2`, `Links3`, `Links4`, `Links5`, `AnosDeEjercerElPeriodismo`, `id_SexoDelJefeInmediato`) VALUES
(1, 1, 3, 0, 1, '', 4, 5, '', '', '', '', '', 0, 1),
(2, 2, 7, 0, 1, '', 7, 12, '', '', '', '', '', 0, 1);

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
(1, '2019-02-06', 'Miguel Angel', 'Mendoza', '', 4, 6, '', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 1, 1, '2019-02-06', 1),
(2, '2019-02-06', 'prueba', 'apellido paterno', '', 2, 17, '', '', 1, '', '', 0, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 1, 1, '2019-02-06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edades`
--

CREATE TABLE `edades` (
  `id` int(11) NOT NULL,
  `parametro` varchar(40) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edades`
--

INSERT INTO `edades` (`id`, `parametro`, `descripcion`) VALUES
(1, 'Sin informacion', 'Valor inicial'),
(2, '20-25', 'de once a no se'),
(3, '26-30', 'once a doce'),
(4, '31-35', 'ventiuno a no se');

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
(2, 'Soltera', 'soltera'),
(3, 'Casada', 'casada dos veces');

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
(2, 'Ciencia', 'dedicada a la ciencia'),
(3, 'Cultura', 'cultura'),
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
(1, 'Sin informacion', ''),
(2, 'Nota', ''),
(3, 'Cobertura', ''),
(4, 'otra', 'Por otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel1Agresor`
--

CREATE TABLE `nivel1Agresor` (
  `id` int(11) NOT NULL,
  `id_tipoAgresor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel1Agresor`
--

INSERT INTO `nivel1Agresor` (`id`, `id_tipoAgresor`, `nombre`, `descripcion`) VALUES
(1, 0, 'Sin informacion', 'Valor inicial'),
(2, 5, 'Ejecutivo', 'sistema ejecutivo'),
(3, 5, 'Legislativo', ''),
(4, 5, 'Judicial', ''),
(5, 4, 'Pri', ''),
(6, 4, 'Pan', 'partido de accion nacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel2Agresor`
--

CREATE TABLE `nivel2Agresor` (
  `id` int(11) NOT NULL,
  `id_tipoAgresor` int(11) NOT NULL,
  `id_nivel1` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel2Agresor`
--

INSERT INTO `nivel2Agresor` (`id`, `id_tipoAgresor`, `id_nivel1`, `nombre`, `descripcion`) VALUES
(1, 0, 0, 'Sin informacion', 'Valor inicial'),
(2, 5, 2, 'Ejecutivo2', ''),
(3, 5, 4, 'Legislativo2', 'no lo se'),
(4, 5, 3, 'Judicial2', ''),
(5, 5, 2, 'Pri2', ''),
(6, 5, 2, 'Pan2', '');

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
(1, 'Federal'),
(2, 'Local');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilBajo`
--

CREATE TABLE `perfilBajo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfilBajo`
--

INSERT INTO `perfilBajo` (`id`, `nombre`) VALUES
(1, 'Cambió de tema'),
(2, 'Escribe menos del tema');

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
(2, 'Crimen Organizado', 'descripción del crimen organizado'),
(3, 'Seguridad Privada', 'Puercos'),
(4, 'Partido Politico', 'Ratas'),
(5, 'Servidor Publico', '');

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
(2, 'Propia', 'Soy la dueña'),
(3, 'Rentada', 'Me la prestaron');

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
(2, 'Base', 'base en sindicato'),
(3, 'Freelance', 'por su cuenta en proyectos'),
(4, 'Honorarios', 'por honorarios con retencion de impuestos'),
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
(1, 'Sin informacion', 'Valor inicial'),
(2, 'Movimientos Sociales', 'movimiento naranja'),
(3, 'Crimen Organizado', 'el pri');

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
(1, 'Denuncia penal', ''),
(2, 'Denuncia daño moral', '');

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
(2, 'Agencia', 'Agencia generadora de noticias'),
(3, 'Blog', ''),
(4, 'Digital', ''),
(5, 'Impreso', ''),
(6, 'Alternativo', 'Medio creado por el usuario'),
(7, 'Medio comunitario', 'Medio creado por la comunidad'),
(8, 'Radio', 'Frecuencia en concesión proporcionada por el estado'),
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
(1, 'Miguel Angel Mendoza Enriquez', 'Kvo', '8183bd79604a11041752a265b9ceacfb7218cf1e', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agresor`
--
ALTER TABLE `agresor`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `datosagresores`
--
ALTER TABLE `datosagresores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosIncidente`
--
ALTER TABLE `datosIncidente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
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
-- Indices de la tabla `nivel1Agresor`
--
ALTER TABLE `nivel1Agresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel2Agresor`
--
ALTER TABLE `nivel2Agresor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilBajo`
--
ALTER TABLE `perfilBajo`
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
-- AUTO_INCREMENT de la tabla `agresor`
--
ALTER TABLE `agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `datosagresores`
--
ALTER TABLE `datosagresores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datosIncidente`
--
ALTER TABLE `datosIncidente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datosperiodistas`
--
ALTER TABLE `datosperiodistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `edades`
--
ALTER TABLE `edades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nivel1Agresor`
--
ALTER TABLE `nivel1Agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `nivel2Agresor`
--
ALTER TABLE `nivel2Agresor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfilBajo`
--
ALTER TABLE `perfilBajo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodemedio`
--
ALTER TABLE `tipodemedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
