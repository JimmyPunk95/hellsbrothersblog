-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2024 a las 03:25:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brothers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `fechaNac` date NOT NULL,
  `fechaReg` datetime NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `apellido`, `plataforma`, `nickname`, `email`, `password`, `ciudad`, `pais`, `estado`, `fechaNac`, `fechaReg`, `activo`) VALUES
(1, 'Armando', 'Cortes DÃ­az ', 'Xbox One', 'HB PeRezZzoZo', 'ihateperezozo@live.com', '$2y$10$VWscY/Fwbsc5jhvc.MMDlepLvzg1hQQ3tx5W56i/UWZN3Pa4oD0Ju', 'Perote', 'MÃ©xico', 'Veracruz', '1992-03-01', '2020-08-16 16:57:01', 0),
(2, 'Alexander', 'HernÃ¡ndez ', 'Xbox One', 'HB Zoucka', 'zoucka04@gmail.com', '$2y$10$MMuXP2WiK6mV8YYEthxD8.wiC/JzTn6.mdQfi6MYWQLQ4kAShSN4y', 'Mexico', 'MÃ©xico', 'MÃ©xico', '1997-08-25', '2020-08-17 18:22:57', 0),
(3, 'Francisco', 'Cortes', 'Xbox One', 'HB Paco YT', 'frank_09870106@hotmail.con', '$2y$10$qcHWTWo2uu4MfhkKaMgPleUWDpxQ4S3elrsO57pdCdvfUnedSQkZC', 'C.D.M.X', 'MÃ©xico', 'Ciudad de MÃ©xico', '2000-08-01', '2020-08-18 17:57:07', 0),
(4, 'Juan Jair', 'AvendaÃ±o SÃ¡nchez', 'Xbox One', 'HB JimmyPunk', 'jimmy.punk@hotmail.com', '$2y$10$Or0AdGZTqrP/A3GuT60NSOiiS52KFlRbm8c6wcIx24s.bUUflOtx.', 'Xalapa', 'MÃ©xico', 'Veracruz', '1995-03-27', '2020-08-19 18:23:34', 0),
(5, 'Cristian ', 'Granillo', 'Play Station', 'HB-FRANY-__-', 'cristiansgm10@hotmail.com', '$2y$10$jgi/OSkDLZl9l3bDgWtI4.Au3mHaSodoET7ac9ODWBViuqFB6zqxO', 'CDMX', 'MÃ©xico', 'Ciudad de MÃ©xico', '1999-09-30', '2020-08-20 02:10:15', 0),
(6, 'Jesus', 'AvendaÃ±o', 'Xbox One', 'HB Centavo', 'jesus-11mk@homail.com', '$2y$10$59nWLnYqARVjr8GQt9LCq.G6s1p0L3NT4HTz2KAVBPaF7tsI5wVCi', 'Xalapa', 'MÃ©xico', 'Veracruz', '2000-06-21', '2020-08-22 14:54:02', 0),
(7, 'JosÃ© Manuel', 'GarcÃ­a Olmos ', 'Xbox One', 'HB iHero', 'souka_peresozo@hotmail.com', '$2y$10$03SmOX3D83FY2ukm5.IX/OSlPmRal9HOy6gVmnwgEu.IW3cZVK4.e', 'Perote', 'MÃ©xico', 'Veracruz', '2002-05-01', '2020-08-23 18:34:03', 0),
(8, 'Edmundo ', 'Toledo Mesa', 'PC', 'HB mundo', 'edmundotoledomesa@live.com.mx', '$2y$10$XHSTz7ttI5K6dP4YCHE60O3AXxswmdBqDFqLl32lKzLWzIpkP69Nq', 'Estanzuela ', 'MÃ©xico', 'Veracruz', '1995-02-23', '2020-08-23 21:40:44', 0),
(9, 'David ', 'AvendaÃ±o contreras', 'Xbox One', 'HB DAVIID', 'daviid-rs@hotmail.com', '$2y$10$f0L94dt9bQWTHJqIhqs6ze4RwbuU7NYJPMrU1Ss9UYboUQQt81KeS', 'Xalapa', 'MÃ©xico', 'Veracruz', '2020-08-16', '2020-08-29 16:59:07', 0),
(10, 'Angel', 'Flores Miranda ', 'Xbox One', 'HB angel2706', 'hbangelflo27@gmail.com', '$2y$10$n.7n7HEIlCKnA33x8xFOQeVmQsxQivKoKRGaEz6wEWYJ/p/EbIBe2', 'Perote', 'MÃ©xico', 'Veracruz', '2006-08-27', '2020-08-31 16:32:24', 0),
(11, 'JosuÃ© ', 'Herrera', 'Xbox One', 'HB Kaiser', 'josue800herrera@hotmail.com', '$2y$10$92PQ.apun/fIb9Lsozdfl.aB2GbEXNtq1QGjH3kLLHBZrYPcIMUci', 'Puerto Vallarta', 'MÃ©xico', 'Jalisco', '2005-01-26', '2020-09-01 16:41:01', 0),
(12, 'Dahiron Ignacio ', 'Laiz zarate ', 'Xbox One', 'DAHIRON MAN ', 'calibre_dahiron@outlook.com', '$2y$10$SyZL9TthV7zKXLGaVYx2m.jJy0L7M3e8SJNLGntYLzq9Am0bEQit2', 'Xalapa ', 'MÃ©xico', 'Veracruz', '1993-02-02', '2020-09-01 17:02:27', 0),
(13, 'Carlos', 'Montoya', 'PC', 'HB Carlous', 'supercarlous2005@gmail.com', '$2y$10$tgItzjg8dRxtkx5f62Qh7e/2mgUqlVrmMdlQWjqolC4owiVn5J9HG', 'Vallarta', 'MÃ©xico', 'Jalisco', '2005-03-20', '2020-09-01 17:08:38', 0),
(14, 'Eduardo ', 'Rosales', 'Play Station', 'HB_PapimessiYT', 'Messi6eduardoYT@gmail.com', '$2y$10$YnExILE1xs9i.B/ncLRLYe4vo9wnKDepePKx9FfVzsirNGisckuj6', 'MÃ©xico ', 'MÃ©xico', 'Veracruz', '2004-10-03', '2020-09-01 17:44:01', 0),
(15, 'Juan', 'Sánchez', 'Móvil', 'HB Juan', 'juan@gmail.com', '$2y$10$zl8pSvAiVrbJaSyy/yUzL.8znBQx7LrEz7A354sx8HyD4NOx2ekEu', 'Xalapa', 'México', 'Veracruz', '1999-02-22', '2020-09-11 12:10:15', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `id` int(11) NOT NULL,
  `miembro_id` int(11) NOT NULL,
  `presentacion` text CHARACTER SET utf8,
  `fecha` datetime NOT NULL,
  `activa` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`id`, `miembro_id`, `presentacion`, `fecha`, `activa`) VALUES
(1, 1, 'Homies actualmente juego Halo 3 (la armo mÃ¡s que en fortnite jaja) pero cuando gusten ahÃ­ los espero para las retas ya sea de Halo o Fortnite! ', '2020-08-16 18:30:55', 0),
(2, 3, '<a href=\"http://tiktok.com/@hb_francisco\">http://tiktok.com/@hb_francisco</a > ', '2020-08-18 18:10:35', 0),
(4, 12, 'Un miembro mÃ¡s de HB, gamer de corazÃ³n y actualmente jugando fortnite y warzone a tope visita mi\r\nCanal  en youtube \r\nhttps://www.youtube.com/channel/UCUQ4IaPct1u9SecIsOeec9A\r\n\r\nEl que se muriÃ³ se muriÃ³. ', '2020-09-01 18:04:42', 0),
(5, 4, ' ', '2020-09-03 16:42:57', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `miembro_id` (`miembro_id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD CONSTRAINT `presentacion_ibfk_1` FOREIGN KEY (`miembro_id`) REFERENCES `miembros` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
