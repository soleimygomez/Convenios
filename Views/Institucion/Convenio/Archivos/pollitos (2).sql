-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2020 a las 18:41:44
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pollitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(15) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(22) DEFAULT NULL,
  `identificacion` int(15) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `tipo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galpon`
--

CREATE TABLE `galpon` (
  `idCriadero` int(15) NOT NULL,
  `numeroAves` int(50) DEFAULT NULL,
  `lineaGenetica` varchar(15) DEFAULT NULL,
  `id_granjero` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galpon`
--

INSERT INTO `galpon` (`idCriadero`, `numeroAves`, `lineaGenetica`, `id_granjero`) VALUES
(1, 45, 'linea1', 123),
(3, 12, 'linea 1', 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `granja`
--

CREATE TABLE `granja` (
  `idGranja` int(15) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cantidadhectareas` int(45) DEFAULT NULL,
  `idAdministrador` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `granja`
--

INSERT INTO `granja` (`idGranja`, `nombre`, `direccion`, `telefono`, `cantidadhectareas`, `idAdministrador`) VALUES
(1, 'San pablo 1', 'AV 2', '53211', 44, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `granjero`
--

CREATE TABLE `granjero` (
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cedula` int(15) NOT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `tipo` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `granjero`
--

INSERT INTO `granjero` (`nombre`, `apellido`, `direccion`, `cedula`, `telefono`, `tipo`) VALUES
('ssss', 'sss', '1', 111, '111111', 1),
('yo', 'qqq', 'av 1', 123, '123', 2),
('aaa', 'aaa', 'sas', 1234, '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mortalidad`
--

CREATE TABLE `mortalidad` (
  `id` int(11) NOT NULL,
  `id_pollo` int(11) NOT NULL,
  `peso` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `causa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mortalidadd`
--

CREATE TABLE `mortalidadd` (
  `id_pollo` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `causa` varchar(45) NOT NULL,
  `linea_genetica` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mortalidadd`
--

INSERT INTO `mortalidadd` (`id_pollo`, `peso`, `fecha`, `causa`, `linea_genetica`) VALUES
(1, 43, '2019-12-13', 'muy feo', 'linea 1'),
(2, 43, '2019-12-01', 'muy feo', 'linea 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pollito`
--

CREATE TABLE `pollito` (
  `id_pollo` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `linea_genetica` varchar(45) NOT NULL,
  `galpon` int(11) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pollito`
--

INSERT INTO `pollito` (`id_pollo`, `peso`, `linea_genetica`, `galpon`, `fecha`) VALUES
(1, 43, 'linea 1', 1, '2019-12-13'),
(2, 43, 'linea 1', 1, '2019-12-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `tipo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `tipo`) VALUES
('1151301', '123', 2),
('1151498', 'jkj', 2),
('123', '123', 2),
('ggg', 'ggg', 2),
('hf', 'hgfhf', 2),
('qwe', 'sad', 2),
('sad', 'sa', 2),
('sadas', 'sad', 2),
('yesid', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `propietario` varchar(45) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa`, `modelo`, `propietario`, `documento`, `fecha`) VALUES
('123-eee', '2011', 'yo', '123', '2019-12-13'),
('uhh-xyz', '2016', 'yo', '123', '2019-11-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE `visitantes` (
  `nombre` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`nombre`, `cedula`, `fecha_ingreso`, `tipo`) VALUES
('Yo', '123', '2019-12-13', 'externo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `galpon`
--
ALTER TABLE `galpon`
  ADD PRIMARY KEY (`idCriadero`),
  ADD KEY `id_granjero` (`id_granjero`);

--
-- Indices de la tabla `granja`
--
ALTER TABLE `granja`
  ADD PRIMARY KEY (`idGranja`),
  ADD KEY `idAdministrador` (`idAdministrador`);

--
-- Indices de la tabla `granjero`
--
ALTER TABLE `granjero`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pollo` (`id_pollo`);

--
-- Indices de la tabla `mortalidadd`
--
ALTER TABLE `mortalidadd`
  ADD PRIMARY KEY (`id_pollo`);

--
-- Indices de la tabla `pollito`
--
ALTER TABLE `pollito`
  ADD PRIMARY KEY (`id_pollo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galpon`
--
ALTER TABLE `galpon`
  MODIFY `idCriadero` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `granja`
--
ALTER TABLE `granja`
  MODIFY `idGranja` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pollito`
--
ALTER TABLE `pollito`
  MODIFY `id_pollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `usuarios` (`tipo`);

--
-- Filtros para la tabla `galpon`
--
ALTER TABLE `galpon`
  ADD CONSTRAINT `galpon_ibfk_1` FOREIGN KEY (`id_granjero`) REFERENCES `granjero` (`cedula`);

--
-- Filtros para la tabla `granja`
--
ALTER TABLE `granja`
  ADD CONSTRAINT `granja_ibfk_1` FOREIGN KEY (`idAdministrador`) REFERENCES `administrador` (`id_administrador`);

--
-- Filtros para la tabla `granjero`
--
ALTER TABLE `granjero`
  ADD CONSTRAINT `granjero_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `usuarios` (`tipo`);

--
-- Filtros para la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`id_pollo`) REFERENCES `pollito` (`id_pollo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
