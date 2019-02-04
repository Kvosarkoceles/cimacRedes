-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-02-2019 a las 04:13:13
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
(1, 'Blogera', '1'),
(2, 'Colaboradora', '2'),
(3, 'Columnista/Editorialista/Articulista\r\n', ''),
(4, 'Corresponsal', ''),
(5, 'Directora', ''),
(6, 'Fotoperiodista\r\n', ''),
(7, 'Locutora', ''),
(8, 'Presentadora', ''),
(9, 'Reportera', '');

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
  `consecuenciasCambioDeDomicilio` int(2) NOT NULL,
  `consecuenciasDesplazamiento` int(2) NOT NULL,
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
  `imagen1` varchar(255) NOT NULL,
  `imagen2` varchar(255) NOT NULL,
  `imagen3` varchar(255) NOT NULL,
  `imagen4` varchar(255) NOT NULL,
  `imagen5` varchar(255) NOT NULL,
  `textos1` varchar(255) NOT NULL,
  `textos2` varchar(255) NOT NULL,
  `textos3` varchar(255) NOT NULL,
  `textos4` varchar(255) NOT NULL,
  `textos5` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `link4` varchar(255) NOT NULL,
  `link5` varchar(255) NOT NULL,
  `analisisDeContexto` text NOT NULL,
  `analisisDeRiesgo` text NOT NULL,
  `observaciones` text NOT NULL,
  `cimacHaceAcompanamientoAnteElMecanismo` int(2) NOT NULL,
  `queOtraOrganizacionLasAcompana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosIncidente`
--

INSERT INTO `datosIncidente` (`id`, `id_datospersonales`, `id_usuario`, `estatus`, `fechaRegistro`, `nombre`, `fechaIncidente`, `id_estados`, `municipio`, `localidad`, `latitud`, `longitud`, `tipoDeViolenciaPsicologica`, `tipodeViolenciaFisica`, `tipoDeViolenciaPatrimonial`, `tipodeViolenciaEconomica`, `tipoDeViolenciaSexual`, `tipoDeViolenciaCibernetica`, `modalidadViolenciaFamiliar`, `modalidadViolenciaLaboral`, `modalidadViolenciaEnLaComunidad`, `modalidadViolenciaInstitucional`, `modalidadViolenciaFeminicida`, `modalidadDeViolenciaCibernetica`, `manifestacionesDeTipoAmenazas`, `manifestacionesDeTipoFeminicida`, `manifestacionesDeTipoDesaparcionesForzadas`, `manifestacionesDeTipoDetenciones`, `manifestacionesDeTipoDetencionesArbitrariasExtrajudicia`, `manifestacionesDeTipoDifamacionCalumniaInjuria`, `consecuenciaFueDespedida`, `consecuenciasBajoPerfil`, `consecuenciasCambioDeDomicilio`, `consecuenciasDesplazamiento`, `atencionMedicaRecibida`, `atencionPsicologicaRecibida`, `atencionJuridicaRecibida`, `ningunaAtencionRecibida`, `agresionAnterior`, `beneficiariaDelMecanismoDeProtecion`, `carpetaDeInvestigacionEnAlgunaProcuraduria`, `quejaAnteComisionDeDerechosHumanos`, `estasDeAcuedoConElMecanismoDeProteccion`, `esasMedidasTePermitenSeguirHaciendoTuTrabajo`, `porQue`, `tenidoResultadosLaCarpetaDeInvestigacion`, `cuales`, `queAHechoLaComisionDeDerechosHumanos`, `relatoriaDelHecho`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `textos1`, `textos2`, `textos3`, `textos4`, `textos5`, `link1`, `link2`, `link3`, `link4`, `link5`, `analisisDeContexto`, `analisisDeRiesgo`, `observaciones`, `cimacHaceAcompanamientoAnteElMecanismo`, `queOtraOrganizacionLasAcompana`) VALUES
(1, 1, 1, 1, '2019-02-01', '', '2019-02-14', 5, 'municipio', 'localidad', '', '', 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 2, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, 1, 1, 'La Revolución mexicana fue un conflicto armado que se inició en México el 20 de noviembre de 1910. Los antecedentes del conflicto se remontan a la situación de México bajo la dictadura conocida como el porfiriato. Porfirio Díaz ejerció el poder en el país de manera dictatorial desde 1876 hasta 1911. Durante estos 35 años México experimentó un notable crecimiento económico y tuvo estabilidad política, pero estos logros se realizaron con altos costos económicos y sociales, que pagaron los estratos menos favorecidos de la sociedad y la oposición política al régimen de Díaz. Durante la primera década del siglo XX estallaron varias crisis en diversas esferas de la vida nacional, que reflejaban el creciente descontento de algunos sectores con el porfiriato.  Cuando Díaz aseguró en una entrevista que se retiraría al finalizar su mandato sin buscar la reelección, la situación política comenzó a agitarse. La oposición al Gobierno cobró relevancia ante la postura manifestada por Díaz. En ese contexto, Francisco I. Madero realizó diversas giras en el país con miras a formar un partido político que eligiera a sus candidatos en una asamblea nacional y compitiera en las elecciones. Díaz lanzó una nueva candidatura a la presidencia y Madero fue arrestado en San Luis Potosí por sedición. Durante su estancia en la cárcel se llevaron a cabo las elecciones que dieron el triunfo a Díaz.  Madero logró escapar de la prisión estatal y huyó a los Estados Unidos. Desde San Antonio (Texas), el 20 de noviembre de 1910, proclamó el Plan de San Luis, que llamaba a tomar las armas contra el Gobierno de Díaz. El conflicto armado se inició en el norte del país y posteriormente se expandió a otras partes del territorio nacional. Una vez que los sublevados ocuparon Ciudad Juárez (Chihuahua), Porfirio Díaz presentó su renuncia y se exilió en Francia.  En 1911 se realizaron nuevas elecciones en las cuales resultó electo Madero. Desde el comienzo de su mandato tuvo diferencias con otros líderes revolucionarios, que provocaron el levantamiento de Emiliano Zapata y Pascual Orozco contra el Gobierno maderista. En 1913 un movimiento contrarrevolucionario, encabezado por Félix Díaz, Bernardo Reyes y Victoriano Huerta, dio un golpe de Estado. El levantamiento militar, conocido como Decena Trágica, terminó con el asesinato de Madero, su hermano Gustavo y el vicepresidente Pino Suárez. Huerta asumió la presidencia, lo que ocasionó la reacción de varios jefes revolucionarios como Venustiano Carranza y Francisco Pancho Villa. Tras poco más de un año de lucha, y después de la ocupación estadounidense de Veracruz, Huerta renunció a la presidencia y huyó del país.  A partir de ese suceso se profundizaron las diferencias entre las facciones que habían luchado contra Huerta, lo que desencadenó nuevos conflictos. Carranza, jefe de la Revolución de acuerdo con el Plan de Guadalupe, convocó a todas las fuerzas a la Convención de Aguascalientes para nombrar un líder único. En esa reunión Eulalio Gutiérrez fue designado presidente del país, pero las hostilidades reiniciaron cuando Carranza desconoció el acuerdo. Después de derrotar a la Convención, los constitucionalistas pudieron iniciar trabajos para la redacción de una nueva Constitución y llevar a Carranza a la presidencia en 1917. La lucha entre facciones estaba lejos de concluir. En el reacomodo de las fuerzas fueron asesinados los principales jefes revolucionarios: Zapata en 1919, Carranza en 1920, Villa en 1923, y Obregón en 1928.  Actualmente no existe un consenso sobre cuándo terminó el proceso revolucionario. Algunas fuentes lo sitúan en 1917, con la proclamación de la Constitución mexicana,1?2?3? algunas otras en 1920 con la presidencia de Adolfo de la Huerta4? o en 1924 con la de Plutarco Elías Calles.5? Incluso hay algunas que aseguran que el proceso se extendió hasta los años 1940.6?', 1, 'y se exilió en Francia.  En 1911 se realizaron nuevas elecciones en las cuales resultó electo Madero. Desde el comienzo de su mandato tuvo diferencias con otros líderes revolucionarios, que provocaron el levantamiento de Emiliano Zapata y Pascual Orozco contra el Gobierno maderista. En 1913 un movimiento contrarrevolucionario, encabezado por Félix Díaz, Bernardo Reyes y Victoriano Huerta, dio un golpe de Estado. El levantamiento militar, conocido como Decena Trágica, terminó con el asesinato de Madero, su hermano Gustavo y el vicepresidente Pino Suárez. Huerta asumió la presidencia, lo que ocasionó la reacción de varios jefes revolucionarios como Venustiano Carranza y Francisco Pancho Villa. Tras poco más de un año de lucha, y después de la ocupación estadounidense de Veracruz, Huerta renunció a la presidencia y huyó del país.  A partir de ese suceso se profundizaron las diferencias entre las facciones que habían luchado contra Huerta, lo que desencadenó nuevos conflictos. Carranza, jefe de la Revolución de acuerdo con el Plan de Guadalupe, convocó a todas las fuerzas a la Convención de Aguascalientes para nombrar un líder único. En esa reuni', ' dependía del salario rural. Además, las tiendas de raya consistían en una práctica común en estos lugares, en los que se otorgaban los salarios de los trabajadores en mercancía. Mediante este sistema se lograba que los trabajadores alcanzaran tal cantidad de crédito, que quedaban endeudados de por vida.22? Este sistema, junto con prácticas que eran cotidianas como la contratación por engaño o la adjudicación de una deuda inexistente, es conocido como «enganche», sistema que involucraba elementos coercitivos, extraeconómicos y extralegales.23? La penosa situación de muchos campesinos y grupos indígenas en vísperas de la revolución fue ampliamente denunciado en el libro México bárbaro de J. K. Turner.  Las leyes de la nación raras veces se aplicaban dentro de las haciendas, donde los trabajadores eran vistos como esclavos u objetos de propiedad, existiendo prácticamente una especie de feudalismo.24? En el campo además actuaba el llamado Cuerpo de Rurales, el cual era un grupo policíaco encargado de «resguardar la paz», generalmente a través de métodos brutales. Otra práctica de este grupo era la leva, o reclutamiento obligatorio.25?', 'urante el gobierno de Díaz Mori existían numerosos latifundios, y el 80 % de la población mexicana dependía del salario rural. Además, las tiendas de raya consistían en una práctica común en estos lugares, en los que se otorgaban los salarios de los trabajadores en mercancía. Mediante este sistema se lograba que los trabajadores alcanzaran tal cantidad de crédito, que quedaban endeudados de por vida.22? Este sistema, junto con prácticas que eran cotidianas como la contratación por engaño o la adjudicación de una deuda inexistente, es conocido como «enganche», sistema que involucraba elementos coercitivos, extraeconómicos y extralegales.23? La penosa situación de muchos campesinos y grupos indígenas en vísperas de la revolución fue ampliamente denunciado en el libro México bárbaro de J. K. Turner.  Las leyes de la nación raras veces se aplicaban dentro de las haciendas, donde los trabajadores eran vistos como esclavos u objetos de propiedad, existiendo prácticamente una especie de feudalismo.24? En el campo además actuaba el llamado Cuerpo de Rurales, el cual era un grupo policíaco encargado de «resguardar la paz», generalmente a través de métodos brutales. Otra práctica de este grupo era la leva, o reclutamiento obligatorio.25?', '', '', '', '', '', '', '', '', '', '', 'http://192.168.0.10/cimacredes/app/registros/info/2', 'link2', 'link3', 'link 4', 'link 5', '', '', '', 0, ''),
(2, 1, 1, 1, '2019-02-03', '', '2019-02-06', 1, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'http://192.168.0.10/cimacredes/app/registros/info/1', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(3, 1, 1, 1, '2019-02-03', '', '2019-02-01', 2, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoslaborales`
--

CREATE TABLE `datoslaborales` (
  `id` int(11) NOT NULL,
  `Id_datospersonales` int(11) NOT NULL,
  `id_tipodemedio` int(11) NOT NULL,
  `paracuantosmedioslabora` int(11) NOT NULL,
  `id_tipodecontrato` int(11) NOT NULL,
  `DireccionDelMedio` varchar(200) DEFAULT NULL,
  `id_cargoenelmedio` int(11) NOT NULL,
  `id_fuente` int(11) NOT NULL,
  `Links1` varchar(200) DEFAULT NULL,
  `Links2` varchar(200) DEFAULT NULL,
  `Links3` varchar(200) DEFAULT NULL,
  `Links4` varchar(200) DEFAULT NULL,
  `Links5` varchar(200) DEFAULT NULL,
  `AnosDeEjercerElPeriodismo` int(30) NOT NULL,
  `id_SexoDelJefeInmediato` int(11) NOT NULL,
  `cuantasreporterasyreporteroshayenelmedio` int(11) NOT NULL,
  `cuantasreporterashayenelmedio` int(11) NOT NULL,
  `cuantasreporterasyreporteroshayenlafuente` int(11) NOT NULL,
  `cuantasreporterashayenlafuente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datoslaborales`
--

INSERT INTO `datoslaborales` (`id`, `Id_datospersonales`, `id_tipodemedio`, `paracuantosmedioslabora`, `id_tipodecontrato`, `DireccionDelMedio`, `id_cargoenelmedio`, `id_fuente`, `Links1`, `Links2`, `Links3`, `Links4`, `Links5`, `AnosDeEjercerElPeriodismo`, `id_SexoDelJefeInmediato`, `cuantasreporterasyreporteroshayenelmedio`, `cuantasreporterashayenelmedio`, `cuantasreporterasyreporteroshayenlafuente`, `cuantasreporterashayenlafuente`) VALUES
(1, 1, 2, 1, 3, '', 2, 10, '', '', '', '', '', 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosperiodistas`
--

CREATE TABLE `datosperiodistas` (
  `id` int(11) NOT NULL,
  `fechaRegistro` date DEFAULT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidoPaterno` varchar(200) DEFAULT NULL,
  `apellidoMaterno` varchar(200) DEFAULT NULL,
  `id_Edad` int(3) DEFAULT '0',
  `id_estados` int(11) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `id_tipodecasa` int(20) DEFAULT NULL,
  `viveCon` varchar(50) NOT NULL,
  `dependientesEconomicos` varchar(50) NOT NULL,
  `id_estadocivil` int(11) NOT NULL,
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
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosperiodistas`
--

INSERT INTO `datosperiodistas` (`id`, `fechaRegistro`, `nombres`, `apellidoPaterno`, `apellidoMaterno`, `id_Edad`, `id_estados`, `municipio`, `localidad`, `id_tipodecasa`, `viveCon`, `dependientesEconomicos`, `id_estadocivil`, `comunidadIndigena`, `comunidadLGBTTTI`, `telefonoparticular`, `telefonocelular`, `email`, `telegram`, `skype`, `facebook`, `twitter`, `instagram`, `youtube`, `snapchat`, `otraredsocial`, `id_usuario`, `estatus`) VALUES
(1, '2019-02-01', 'Miguel Angel', 'mendoza', 'Enriquez', 1, 15, 'municipio', 'localidad', 1, 'vive con', 'dependientes', 2, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 1, 1);

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
(1, '15-20', ''),
(2, '21-25', '');

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
(1, 'Soltera', ''),
(2, 'Casada', ''),
(3, 'Otra', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California Norte'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Chiapas'),
(6, 'Chihuahua'),
(7, 'Ciudad de México'),
(8, 'Coahuila'),
(9, 'Colima'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'Estado de México'),
(16, 'Michoacán'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fuente`
--

INSERT INTO `fuente` (`id`, `nombre`) VALUES
(1, 'Ciencia'),
(2, 'Cultura'),
(3, 'Derechos Humanos\r\n'),
(4, 'Economía'),
(5, 'Educativa'),
(6, 'Finanzas'),
(7, 'General'),
(8, 'Laboral\r\n'),
(9, 'Narcotráfico'),
(10, 'Policíaca'),
(11, 'Política'),
(12, 'Salud'),
(13, 'Sociedad'),
(14, 'Otra');

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
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

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
-- Estructura de tabla para la tabla `tipodecasa`
--

CREATE TABLE `tipodecasa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodecasa`
--

INSERT INTO `tipodecasa` (`id`, `nombre`) VALUES
(1, 'Propia'),
(2, 'Rentada'),
(3, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecontrato`
--

CREATE TABLE `tipodecontrato` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodecontrato`
--

INSERT INTO `tipodecontrato` (`id`, `nombre`) VALUES
(1, 'Base'),
(2, 'Freelance'),
(3, 'Honorarios'),
(4, 'Propio'),
(5, 'Solidario'),
(6, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodemedio`
--

CREATE TABLE `tipodemedio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodemedio`
--

INSERT INTO `tipodemedio` (`id`, `nombre`) VALUES
(1, 'Agencia'),
(2, 'Blog'),
(3, 'Digital'),
(4, 'Impreso'),
(5, 'Medio alternativo'),
(6, 'Medio comunitario'),
(7, 'Radio'),
(8, 'Tv');

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
(1, 'Miguel Angel Mendoza Enriquez', 'kvo', '11f6ad8ec52a2984abaafd7c3b516503785c2072', 1, 1),
(2, 'María Magdalena', 'Mary', '11f6ad8ec52a2984abaafd7c3b516503785c2072', 1, 1);

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
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilBajo`
--
ALTER TABLE `perfilBajo`
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
-- AUTO_INCREMENT de la tabla `datosIncidente`
--
ALTER TABLE `datosIncidente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datosperiodistas`
--
ALTER TABLE `datosperiodistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfilBajo`
--
ALTER TABLE `perfilBajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
