-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 13:17:17
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `nombreApellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `idPonente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folleto`
--

CREATE TABLE `folleto` (
  `idFolleto` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `idInscripcion` int(11) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idParticular` int(9) NOT NULL,
  `idEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

CREATE TABLE `particular` (
  `idParticular` int(11) NOT NULL,
  `nombreApellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `evento` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `particular`
--

INSERT INTO `particular` (`idParticular`, `nombreApellido`, `email`, `telefono`, `evento`) VALUES
(1, 'Juan', 'contacto@prueba.com', '658978564', 'opcion1'),
(2, 'Lionel Messi', 'messi@prueba.com', '65897889', 'opcion1opcion4'),
(3, 'Obama', 'obama@prueba.com', '788', 'opcion1opcion2opcion4'),
(4, 'Donal Trump', 'Donald@prueba.com', '0215478940', 'opcion1opcion2opcion3opcion4'),
(5, 'Karl Max', 'karl@prueba.com', '0215478940', 'opcion1'),
(6, 'Slavoj Zizek', 'Slavoj@prueba.com', '9895689494', 'opcion1opcion2opcion3opcion4'),
(7, 'Julio Daniel Azurduy', 'ju.azurduyt@aulanz.net', '568947223', 'opcion4'),
(8, 'Iker Soto', 'ik.sotot@aulanz.net', '231456789', 'opcion1opcion4'),
(9, 'Paco Sanz', 'paco@aulanz.net', '123698547', ''),
(10, 'Solomeo Paredes', 'solomeo@gmail.net', '123698547', 'opcion1opcion2'),
(11, 'Elver Galarga', 'elver@gmail.net', '789456123', 'opcion1opcion2opcion4'),
(12, 'Elva Ginazo', 'elva@gmail.net', '568947123', 'opcion1opcion2opcion4'),
(13, 'Charles Bukowski', 'elva@gmail.net', '568947123', 'opcion1opcion2opcion4'),
(14, 'Reben agrcia Marquez', 'ruben@gmail.net', '568947123', 'opcion1opcion2opcion4'),
(15, 'Charles Dickens', 'charles@gmail.net', '568947123', 'opcion1opcion2opcion3opcion4'),
(16, 'Manolo Garcia ', 'Manolo@gmail.net', '568947123', 'opcion3'),
(17, 'Friedrich Wilhelm Nietzsche ', 'fried@prueba,net', '568947123', 'opcion2'),
(18, 'Nombre Prueba Ultimo', 'nombre@pruba.com', '123698547', 'opcion1'),
(19, 'Nombre Prueba Priemro', 'ejbjifbjipbjvfbj', '658978564', 'opcion1'),
(20, 'Nombre Prueba Priemro', 'prueba@email.xom', '568947123', 'opcion1opcion2'),
(21, 'Nombre Prueba Priemro', 'prueba@email.xom', '568947123', 'opcion1opcion2'),
(22, 'Nombre Prueba Priemro', 'prueba@email.xom', '568947123', 'opcion1opcion2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente`
--

CREATE TABLE `ponente` (
  `idponente` varchar(100) NOT NULL,
  `nombreApellido` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idPonente` (`idPonente`);

--
-- Indices de la tabla `folleto`
--
ALTER TABLE `folleto`
  ADD PRIMARY KEY (`idFolleto`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`idInscripcion`),
  ADD KEY `idEvento` (`idEvento`),
  ADD KEY `dni` (`idParticular`);

--
-- Indices de la tabla `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`idParticular`);

--
-- Indices de la tabla `ponente`
--
ALTER TABLE `ponente`
  ADD PRIMARY KEY (`idponente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `folleto`
--
ALTER TABLE `folleto`
  MODIFY `idFolleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `idInscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `particular`
--
ALTER TABLE `particular`
  MODIFY `idParticular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
