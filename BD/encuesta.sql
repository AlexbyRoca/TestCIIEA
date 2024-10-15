-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2024 a las 22:08:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(5) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `grado` int(1) NOT NULL,
  `escuela` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombres`, `grado`, `escuela`) VALUES
(41, 'Andres', 1, 'gregorio beltran'),
(42, 'Andres', 1, 'gregorio beltran'),
(43, 'Andres', 1, 'gregorio beltran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pregunta` varchar(150) NOT NULL,
  `estatus` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `estatus`) VALUES
(1, '¿Prefieres leer un texto con imagenes para entender la informacion, o prefieres solo testo sin distracciones visuales? ', 1),
(2, 'Cuando alguien te explica algo, ¿prefieres que lo haga en silencio o te ayuda más si lo acompaña con sonidos o música?', 1),
(3, '¿Te resulta mas fácil aprender haciendo ejercicios fisicos o te concentras mejor si solo lees y escribes?', 1),
(4, '¿Te distraes facilmente cuando hay muchas imagenes y graficos en una pagina, o te ayuda a entender mejor la informacion?', 1),
(5, '¿Es más fácil para ti recordar información si la lees en voz alta o si solo la lees en silencio', 1),
(6, '¿Te gusta aprender tocando y manipulando objetos, o prefieres aprender solo mirando?', 1),
(7, '¿Cuándo ves una película o un video, te concentras más en las imágenes o en lo que dicen los personajes?', 1),
(8, '¿Cuando ves una pelIcula o un video, te concentras mAs en las imágenes o en lo que dicen los personajes?', 1),
(9, 'Si pudieras elegir, ¿preferirias que las instrucciones de un juego te las expliquen en voz alta o que esten escritas', 1),
(10, 'Cuando estudias, ¿el mover objetos te ayuda mas que dibujar para recordar la información?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas1`
--

CREATE TABLE `preguntas1` (
  `id` int(10) UNSIGNED NOT NULL,
  `pregunta1` varchar(150) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas1`
--

INSERT INTO `preguntas1` (`id`, `pregunta1`, `status`) VALUES
(1, '¿Prefieres estudiar usando diagramas y mapas conceptuales, o te parece que son una perdida de tiempo y prefieres solo leer?', 0),
(2, 'Si tienes que aprender algo nuevo, ¿prefieres escuchar una explicación o crees que te concentrarías mejor sin escuchar nada?', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas2`
--

CREATE TABLE `preguntas2` (
  `id` int(10) UNSIGNED NOT NULL,
  `pregunta2` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas2`
--

INSERT INTO `preguntas2` (`id`, `pregunta2`, `status`) VALUES
(1, '¿Encuentras mas util ver videos para aprender, o crees que es mejor leer un libro o apuntes?', 1),
(2, 'Cuando estudias, ¿prefieres escuchar un podcast o una explicación en audio, o sientes que eso te distrae?', 1),
(3, '¿Te ayuda mas tomar notas mientras estudias o prefieres recordar la información sin escribir nada?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_encuesta`
--

CREATE TABLE `respuestas_encuesta` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pregunta` int(2) NOT NULL,
  `respuesta` varchar(10) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `escuela` varchar(150) NOT NULL,
  `grado` int(1) NOT NULL,
  `observacion` text NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas1`
--
ALTER TABLE `preguntas1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas2`
--
ALTER TABLE `preguntas2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas_encuesta`
--
ALTER TABLE `respuestas_encuesta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `preguntas1`
--
ALTER TABLE `preguntas1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `preguntas2`
--
ALTER TABLE `preguntas2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `respuestas_encuesta`
--
ALTER TABLE `respuestas_encuesta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
