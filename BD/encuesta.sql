-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2024 a las 18:13:08
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
  `escuela` varchar(45) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `grupo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombres`, `grado`, `escuela`, `turno`, `grupo`) VALUES
(258, 'Alexis Andres Rodriguez Castellanos', 2, 'Telesecundaria Rodolfo Lopez Torres', 'Vespertino', 'A'),
(259, 'KARINA', 2, 'Telesecundaria Rodolfo Lopez Torres', 'Vespertino', 'B'),
(260, 'Alexis Andres Rodriguez Castellanos', 2, 'Telesecundaria Rodolfo Lopez Torres', 'Vespertino', 'A'),
(261, 'Maria Asuncion', 2, 'Tecnologico de mexico', 'Vespertino', 'A'),
(262, 'RON ROCA', 1, 'CECYTE', 'Matutino', 'E'),
(263, 'Maria Asuncion', 3, 'CIIEA', 'Matutino', 'E'),
(264, 'Perla Rubi Hernandez Lopez', 3, 'universidad leuzagui', 'Matutino', 'C'),
(265, 'perla r', 2, 'leu', 'Matutino', 'D'),
(266, 'Alexis Andres Rodriguez Castellanos', 3, 'Telesecundaria Rodolfo Lopez Torres', 'Matutino', 'D'),
(267, 'Alexis Andres Rodriguez Castellanos', 1, 'Telesecundaria Rodolfo Lopez Torres', 'Matutino', 'D'),
(268, 'Alexis Andres Rodriguez Castellanos', 2, 'Telesecundaria Rodolfo Lopez Torres', 'Vespertino', 'D');

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
(1, '¿Prefieres leer un texto con imagenes para entender mejor la informacion?  ', 1),
(2, '¿Te ayuda mas si alguien te explica algo con sonidos o musica?  ', 1),
(3, '¿Te resulta mas facil aprender haciendo ejercicios fisicos?  ', 1),
(4, '¿Te distraes facilmente cuando hay muchas imagenes y graficos en una pagina?  ', 1),
(5, '¿Es mas facil para ti recordar informacion si la lees en voz alta?  ', 1),
(6, '¿Te gusta aprender tocando y manipulando objetos?  ', 1),
(7, '¿Te concentras mas en las imagenes cuando ves una película o video?  ', 1),
(8, '¿Prefieres que te expliquen las instrucciones de un juego en voz alta? ', 1),
(9, '¿Te ayuda mas mover objetos o dibujar para recordar la informacion cuando estudias?  ', 1),
(10, '¿Prefieres estudiar en un lugar con colores y decoraciones?', 1),
(11, '¿Te resulta mas facil aprender cantando una cancion relacionada con el tema?', 1),
(12, '¿Prefieres aprender construyendo algo con tus manos?', 1);

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
(1, '¿Prefieres estudiar usando diagramas y mapas conceptuales?', 0),
(2, '¿Prefieres escuchar una explicacion cuando aprendes algo nuevo?', 0),
(3, '¿Encuentras util practicar con experimentos o maquetas para aprender?', 0),
(4, '¿Te parece mas facil recordar informacion cuando la ves en una imagen?', 0),
(5, '¿Te resulta mas sencillo concentrarte cuando hay musica de fondo?\r\n', 0),
(6, '¿Te gusta moverte mientras aprendes, como caminar o mover las manos?', 0),
(7, '¿Te gusta usar colores y resaltar informacion importante cuando estudias?', 0),
(8, '¿Te resulta mas fácil comprender algo si alguien te lo explica?', 0),
(9, '¿Prefieres participar en actividades de grupo cuando estudias?', 0),
(10, '¿Te resulta mas sencillo entender un tema cuando esta acompañado de imagenes?', 0),
(11, '¿Te resulta mas facil recordar instrucciones cuando te las dicen en voz alta?', 0),
(12, '¿Te gusta aprender haciendo cosas, como en laboratorios o talleres?', 0);

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
(1, '¿Encuentras mas util ver videos para aprender?', 1),
(2, '¿Prefieres escuchar un podcast o una explicacion en audio cuando estudias?', 1),
(3, '¿Te ayuda mas tomar notas mientras estudias?', 1),
(4, '¿Te parecen esenciales los graficos y esquemas para entender un tema?', 1),
(5, '¿Te resulta mas facil recordar lo que oyes en una clase?', 1),
(6, '¿Prefieres participar en actividades practicas para aprender?', 1),
(7, '¿Prefieres tomar apuntes con dibujos y diagramas?', 1),
(8, '¿Prefieres repetir en voz alta lo que has aprendido cuando estudias para un examen?', 1),
(9, '¿Te parece util aprender con juegos o actividades físicas?', 1),
(10, '¿Te resulta mas facil recordar la informacion cuando la subrayas o resaltas?', 1),
(11, '¿Comprendes mejor un tema cuando lo escuchas en una conversacion?', 1),
(12, '¿Prefieres hacer modelos o proyectos practicos para aprender?', 1);

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
  `grupo` varchar(1) NOT NULL,
  `turno` varchar(12) NOT NULL,
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `preguntas1`
--
ALTER TABLE `preguntas1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `preguntas2`
--
ALTER TABLE `preguntas2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `respuestas_encuesta`
--
ALTER TABLE `respuestas_encuesta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=956;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
