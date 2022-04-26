-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2022 a las 14:23:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `memeologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_test_1`
--

CREATE TABLE `c_test_1` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_test_2`
--

CREATE TABLE `c_test_2` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_test_3`
--

CREATE TABLE `c_test_3` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_test_4`
--

CREATE TABLE `c_test_4` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_1`
--

CREATE TABLE `i_test_1` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_2`
--

CREATE TABLE `i_test_2` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_3`
--

CREATE TABLE `i_test_3` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_4`
--

CREATE TABLE `i_test_4` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_5`
--

CREATE TABLE `i_test_5` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i_test_6`
--

CREATE TABLE `i_test_6` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_test_1`
--

CREATE TABLE `m_test_1` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_test_2`
--

CREATE TABLE `m_test_2` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_test_3`
--

CREATE TABLE `m_test_3` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_test_4`
--

CREATE TABLE `m_test_4` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_test_1`
--

CREATE TABLE `p_test_1` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `p_test_1`
--

INSERT INTO `p_test_1` (`id_question`, `question`, `answer_1`, `answer_2`, `answer_3`, `correct`, `url`) VALUES
(1, '¿Qué frase va con este meme?', 'La vieja confiable', 'La anciana confiable', 'La buena red confiable', 'La vieja confiable', '../../assets/memes/PRINCIPIANTES/1/confiable.png\r\n'),
(2, '¿Qué frase va con este meme?', 'Esta todo muy bueno pero...', 'Muy rico todo pero...', 'Ha estado bien pero...', 'Muy rico todo pero...', '../../assets/memes/PRINCIPIANTES/1/muyrico.png'),
(3, '¿Qué frase va con este meme?', 'Yo te reconozco', 'Yo te conozco', 'Fua la revivis...', 'Yo te conozco', '../../assets/memes/PRINCIPIANTES/1/conozco.png\r\n'),
(4, '¿Cuál es la respuesta correcta de este meme?', 'Mi primo el Buzz Lightyear', 'El primo Buzz Lightyear', 'Todas las respuestas son correctas', 'Todas las respuestas son correctas', '../../assets/memes/PRINCIPIANTES/1/buzz.png'),
(5, '¿Qué frase va con este meme?', 'No wey como van a ser los mismos', 'No mames wey como van a ser los mismos', 'No manches wey como van a ser los mismos', 'No manches wey como van a ser los mismos', '../../assets/memes/PRINCIPIANTES/1/wey.png'),
(6, '¿Que frase dice aquí Thanos el rompe anos?', 'No puede ser...', 'Imposible...', 'No puede ser posible...', 'Imposible...', '../../assets/memes/PRINCIPIANTES/1/imposible.png'),
(7, '¿Qué frase dice aquí Thanos?', 'Eres mas imbecil de lo que supuse...', 'Eres mas tonto de lo que supuse...', 'Eres mas idiota de lo que supuse...', 'Eres mas tonto de lo que supuse...', '../../assets/memes/PRINCIPIANTES/1/tonto.png'),
(8, '¿Qué dice el cap en esta imagen?', 'Entendí esa referencia', 'Comprendí esa referencia', 'Ja, entendí esa referencia', 'Entendí esa referencia', '../../assets/memes/PRINCIPIANTES/1/referencia.png'),
(9, '¿De las tres opciones que frase es la correcta?', 'Tenemos', 'Nosotros', 'Nosotros tenemos', 'Tenemos', '../../assets/memes/PRINCIPIANTES/1/tenemos.png'),
(10, '¿Cómo es el nombre de este meme?', 'Ay si', 'Ah bueno, yo si', 'Ay no', 'Ay si', '../../assets/memes/PRINCIPIANTES/1/aysi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_test_2`
--

CREATE TABLE `p_test_2` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `p_test_2`
--

INSERT INTO `p_test_2` (`id_question`, `question`, `answer_1`, `answer_2`, `answer_3`, `correct`, `url`) VALUES
(1, '¿Qué frase va con este meme?', 'Espera piter, soi yo xd', 'Espera peter, soy yo xd', 'Espera peter, soy yo', 'Espera piter, soi yo xd', '../../assets/memes/PRINCIPIANTES/2/esperapiter.png'),
(2, '¿Qué frase dice aquí el doctor Octavio?', 'Hola piter xd', 'Hello peter xd', 'Hola peter', 'Hola peter', '../../assets/memes/PRINCIPIANTES/2/holapeter.png'),
(3, '¿Qué frase va con este meme?', 'K Bergha?', 'K vrga?', 'Khe vrga?', 'Khe vrga?', '../../assets/memes/PRINCIPIANTES/2/keverga.png'),
(4, '¿Qué frase va con este meme?', 'Que bueno el servicio xd', 'Que wen servicio jaja', 'Khe wen servizio xd ', 'Khe wen servizio xd', '../../assets/memes/PRINCIPIANTES/2/kwenservisio.png'),
(9, '¿Qué es lo que dice Luisito el que comunica?', 'Ara si se viene lo chido xd', 'Ahora si se viene lo chido xd', 'Ara se vendra lo chido xd', 'Ahora si se viene lo chido xd', '../../assets/memes/PRINCIPIANTES/2/lochido.png'),
(10, '¿Qué frase va con este meme?', 'Desde ese dia le cambió algo a lotso', 'Ese día algo cambió dentro de lotso', 'Desde aquel dia cambiaron a lotso', 'Ese día algo cambió dentro de lotso', '../../assets/memes/PRINCIPIANTES/2/lotso.png'),
(11, '¿Qué es lo que dice Patricio el que parte estrellas?', 'Nunca lo sabremos xd', 'Hum... Sospechoso xd', 'Te pillé esponja... xd', 'Nunca lo sabremos xd', '../../assets/memes/PRINCIPIANTES/2/nuncalosabremos.png'),
(12, '¿Qué frase va con este meme?', 'Me vas a obligar prro', 'Oblígame prro', 'Me obligaras prro?', 'Oblígame prro', '../../assets/memes/PRINCIPIANTES/2/perro.png'),
(13, '¿Qué frase va con este meme?', 'Se van a callar', 'Callenseee xd', 'Quieren callarse', 'Quieren callarse', '../../assets/memes/PRINCIPIANTES/2/quierencallarse.png'),
(19, '¿Qué dice Shrek aquí?', 'Vaya... eso explica muchas cosas...', 'Jaja... eso explica muchas cosas...', 'Burro... eso explica muchas cosas...', 'Vaya... eso explica muchas cosas...', '../../assets/memes/PRINCIPIANTES/2/vayaesoexplicamuchascosas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_test_3`
--

CREATE TABLE `p_test_3` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_test_4`
--

CREATE TABLE `p_test_4` (
  `id_question` int(11) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `answer_3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id_session` varchar(100) NOT NULL,
  `user` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id_session`, `user`) VALUES
('73t63qthn0f9apk1ktuuqevr75', 'admin'),
('a1hqc1hde3bgq1ovrci7eqb17m', 'Arkamob'),
('ekoqbign2858mbknfbghlc9cum', 'neilrc'),
('j5v14sl1bghgc8og6qvb4e3bo5', 'mario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titles`
--

CREATE TABLE `titles` (
  `id_title` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `titles`
--

INSERT INTO `titles` (`id_title`, `title`, `exp`) VALUES
(1, 'Noob', 100),
(2, 'Interesado', 250),
(3, 'Reconocido', 400),
(4, 'Baja mierda', 550),
(5, 'Listillo', 700),
(6, 'Joven sabio', 900),
(7, 'Sabiondo', 1200),
(8, 'Patriarca', 1500),
(9, 'Media mierda', 1900),
(10, 'Enterado', 2400),
(11, 'Profesional del meme', 2700),
(12, 'Shitposter', 3050),
(13, 'Alta mierda', 3400),
(14, 'Licenciado en memeología', 4000),
(15, 'Ingeniero en memeología', 5000),
(16, 'Doctor en memeología', 6050),
(17, 'Memeologo', 7100),
(18, 'Experto memeologo', 7100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `title` varchar(40) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `title`, `experience`) VALUES
(10, 'admin', '011c945f30ce2cbafc452f39840f025693339c42', 'Interesado', 298),
(12, 'alan', '011c945f30ce2cbafc452f39840f025693339c42', 'Ningun titulo', 0),
(13, 'Arkamob', '9d65c4a27a601e62a599f3059159476cd76933a4', 'Reconocido', 474),
(14, 'mario', '011c945f30ce2cbafc452f39840f025693339c42', 'No tienes ningun titulo', 28),
(15, 'neilrc', 'feb723d205aed863d83f163d434fc87df087d239', 'Noob', 115);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `c_test_1`
--
ALTER TABLE `c_test_1`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `c_test_2`
--
ALTER TABLE `c_test_2`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `c_test_3`
--
ALTER TABLE `c_test_3`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `c_test_4`
--
ALTER TABLE `c_test_4`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_1`
--
ALTER TABLE `i_test_1`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_2`
--
ALTER TABLE `i_test_2`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_3`
--
ALTER TABLE `i_test_3`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_4`
--
ALTER TABLE `i_test_4`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_5`
--
ALTER TABLE `i_test_5`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `i_test_6`
--
ALTER TABLE `i_test_6`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `m_test_1`
--
ALTER TABLE `m_test_1`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `m_test_2`
--
ALTER TABLE `m_test_2`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `m_test_3`
--
ALTER TABLE `m_test_3`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `m_test_4`
--
ALTER TABLE `m_test_4`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `p_test_2`
--
ALTER TABLE `p_test_2`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `p_test_3`
--
ALTER TABLE `p_test_3`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `p_test_4`
--
ALTER TABLE `p_test_4`
  ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`);

--
-- Indices de la tabla `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id_title`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `c_test_1`
--
ALTER TABLE `c_test_1`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `c_test_2`
--
ALTER TABLE `c_test_2`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `c_test_3`
--
ALTER TABLE `c_test_3`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `c_test_4`
--
ALTER TABLE `c_test_4`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_1`
--
ALTER TABLE `i_test_1`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_2`
--
ALTER TABLE `i_test_2`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_3`
--
ALTER TABLE `i_test_3`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_4`
--
ALTER TABLE `i_test_4`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_5`
--
ALTER TABLE `i_test_5`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `i_test_6`
--
ALTER TABLE `i_test_6`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_test_1`
--
ALTER TABLE `m_test_1`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_test_2`
--
ALTER TABLE `m_test_2`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_test_3`
--
ALTER TABLE `m_test_3`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_test_4`
--
ALTER TABLE `m_test_4`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_test_2`
--
ALTER TABLE `p_test_2`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `p_test_3`
--
ALTER TABLE `p_test_3`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_test_4`
--
ALTER TABLE `p_test_4`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titles`
--
ALTER TABLE `titles`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
