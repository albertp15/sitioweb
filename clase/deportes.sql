-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 04:33:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deportes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `asunto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `asunto`, `texto`) VALUES
(1, 'prueba@correo.com', 'prueba', 'dadajlkndaldnalkdnald\r\n'),
(2, 'cccccccccc@gmail.com', 'llllllll', 'kkkkkkkk'),
(3, 'dadadasdadf@gmail.com', 'adadasda', 'kkkkkkkk541f3af3'),
(4, 'adadada@gmasak.com', 'ccccc', 'asadadad'),
(5, 'adadada@gmasak.com', 'aaaaaa', 'aaaaaaaaaaaaaa'),
(6, 'vlvklkckla@gmail.com', 'dadlkadlak', 'cccccccccccc'),
(7, 'ddada@gmail.com', 'lccccccccccccccc', 'fdffffffffffffffff'),
(8, 'ccccccccc@gmail.com', 'nnnnnnnnnnnn', 'mmmmmmmmmmmmmmmmm'),
(9, 'aaaaaaaa@hgml.com', 'fkalkadladc', 'jjjjjjjjjjjjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deporte`
--

CREATE TABLE `deporte` (
  `id_deporte` int(11) UNSIGNED NOT NULL,
  `nombre_depor` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `deporte`
--

INSERT INTO `deporte` (`id_deporte`, `nombre_depor`) VALUES
(1, 'Futbol'),
(2, 'Baloncesto'),
(8, 'Beisbol'),
(9, 'Futbol Americano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `logotipo` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fundacion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mejor_jugador` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `logro` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estadio` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_deporte` int(11) NOT NULL,
  `id_ligas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `logotipo`, `fundacion`, `mejor_jugador`, `logro`, `estadio`, `id_deporte`, `id_ligas`) VALUES
(1, 'Bayern Munich', 'Imagenes/FC-Bayern-Munchen.png', '27 de febrero de 1900', 'Gerd Muller', '84 Titulos', 'Allianz Arena', 1, 1),
(2, 'Los Angeles Lakers', 'Imagenes/la-larkers.png', '1947', 'Kareem Abdul-Jabbar', '17 titulos', 'Crypto.com Arena', 2, 4),
(3, 'París Saint-Germain', 'Imagenes/psg.png', '12 de agosto de 1970', 'Kylian Mbappe', '47', 'Parque de los Príncipes', 1, 2),
(4, 'Kansas City Chiefs', 'Imagenes/kansas-city-chiefs.png', '1959 ', 'Patrick Mahomes', '3 titulos', 'Arrowhead Stadium', 9, 5),
(5, 'Bravos de Margarita', 'Imagenes/bravos-margarita.png', '12 de julio de 2007', 'Henry Blanco', '0 titulos', 'Nueva Esparta', 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `id_ligas` int(11) UNSIGNED NOT NULL,
  `ligas` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen_liga` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_deporte` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`id_ligas`, `ligas`, `imagen_liga`, `id_deporte`) VALUES
(1, 'Bundesliga Alemania', 'Imagenes/bundesliga.png', 1),
(2, 'Ligue 1 Francia', 'Imagenes/ligue-1.png', 1),
(3, 'LVBP', 'Imagenes/lvbp.png', 8),
(4, 'NBA', 'Imagenes/nba.png', 2),
(5, 'NFL', 'Imagenes/nfl.png', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `usuario`, `password`) VALUES
(0, 'admin', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `deporte`
--
ALTER TABLE `deporte`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`id_ligas`),
  ADD KEY `deporte_id_deporte_ligas` (`id_deporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `deporte`
--
ALTER TABLE `deporte`
  MODIFY `id_deporte` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id_ligas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD CONSTRAINT `deporte_id_deporte_ligas` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id_deporte`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
