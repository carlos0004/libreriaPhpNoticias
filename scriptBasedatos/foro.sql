-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 13:38:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`, `apellido`) VALUES
(1, 'Carlos ', 'Sánchez'),
(2, 'José Julio', 'Soldado'),
(3, 'José Antonio ', 'Beltrán'),
(4, 'Pedro', 'Sanz'),
(5, 'Mario', 'Soldado'),
(6, 'Carlos', 'Beltrán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `denominacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `denominacion`) VALUES
(1, 'Futbol'),
(2, 'Futbol Sala'),
(3, 'Moda'),
(4, 'Política'),
(5, 'Cine'),
(6, 'Animales'),
(7, 'Informática'),
(8, 'Electrónica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(1000) DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `contenido`, `descripcion`, `id_autor`, `id_categoria`) VALUES
(1, 'Delfín rosa, ¿mito o realidad?', 'La cifra es estremecedora: alrededor de un millón de especies, entre ellas algunas que se consideraban hasta ahora comunes, están el peligro de extinción, según el informe más reciente de la Plataforma Intergubernamental Científico-normativa sobre Diversidad Biológica y Servicios de los Ecosistemas (IPBES), organismo intergubernamental independiente de ciencia y política respaldado por la ONU. La deforestación, la contaminación, el cambio climático, la agricultura y pesca intensivas, y las actividades humanas amenazan los ecosistemas del planeta. Jirafas, loros, algas y robles, entre muchos otros, están amenazados. Son animales conocidos, pero una de las especies más singulares del planeta, como es el delfín rosa, también está en jaque, y poco sabemos de este mamífero. De hecho, quizás no lo hayas visto nunca. Ni en foto. Su nombre no es baladí y son de este color.', 'La población de este mamífero es estimada y se extinguirá en menos de 50 años, según revela un estud', 1, 6),
(2, '¿Qué cosas hacen felices a los perros?', 'La cifra es estremecedora: alrededor de un millón de especies, entre ellas algunas que se consideraban hasta ahora comunes, están el peligro de extinción, según el informe más reciente de la Plataforma Intergubernamental Científico-normativa sobre Diversidad Biológica y Servicios de los Ecosistemas (IPBES), organismo intergubernamental independiente de ciencia y política respaldado por la ONU. La deforestación, la contaminación, el cambio climático, la agricultura y pesca intensivas, y las actividades humanas amenazan los ecosistemas del planeta. Jirafas, loros, algas y robles, entre muchos otros, están amenazados. Son animales conocidos, pero una de las especies más singulares del planeta, como es el delfín rosa, también está en jaque, y poco sabemos de este mamífero. De hecho, quizás no lo hayas visto nunca. Ni en foto. Su nombre no es baladí y son de este color.', 'Los canes son grandes compañeros de vida para muchas personas. Por eso, es fundamental que se sienta', 2, 6),
(3, 'Unai Gómez cuenta como medio en el Athletic', 'La cifra es estremecedora: alrededor de un millón de especies, entre ellas algunas que se consideraban hasta ahora comunes, están el peligro de extinción, según el informe más reciente de la Plataforma Intergubernamental Científico-normativa sobre Diversidad Biológica y Servicios de los Ecosistemas (IPBES), organismo intergubernamental independiente de ciencia y política respaldado por la ONU. La deforestación, la contaminación, el cambio climático, la agricultura y pesca intensivas, y las actividades humanas amenazan los ecosistemas del planeta. Jirafas, loros, algas y robles, entre muchos otros, están amenazados. Son animales conocidos, pero una de las especies más singulares del planeta, como es el delfín rosa, también está en jaque, y poco sabemos de este mamífero. De hecho, quizás no lo hayas visto nunca. Ni en foto. Su nombre no es baladí y son de este color.', 'El joven cachorro ha disputado los dos últimos encuentros con el Bilbao Athletic como lateral zurdo ', 1, 1),
(4, 'El Athletic se queja ante LaLiga', 'La cifra es estremecedora: alrededor de un millón de especies, entre ellas algunas que se consideraban hasta ahora comunes, están el peligro de extinción, según el informe más reciente de la Plataforma Intergubernamental Científico-normativa sobre Diversidad Biológica y Servicios de los Ecosistemas (IPBES), organismo intergubernamental independiente de ciencia y política respaldado por la ONU. La deforestación, la contaminación, el cambio climático, la agricultura y pesca intensivas, y las actividades humanas amenazan los ecosistemas del planeta. Jirafas, loros, algas y robles, entre muchos otros, están amenazados. Son animales conocidos, pero una de las especies más singulares del planeta, como es el delfín rosa, también está en jaque, y poco sabemos de este mamífero. De hecho, quizás no lo hayas visto nunca. Ni en foto. Su nombre no es baladí y son de este color.', 'El club rojiblanco trasladó una queja formal a LaLiga ', 3, 1),
(5, 'Delfín rosa, ¿mito o realidad?', 'La cifra es estremecedora: alrededor de un millón de especies, entre ellas algunas que se consideraban hasta ahora comunes, están el peligro de extinción, según el informe más reciente de la Plataforma Intergubernamental Científico-normativa sobre Diversidad Biológica y Servicios de los Ecosistemas (IPBES), organismo intergubernamental independiente de ciencia y política respaldado por la ONU. La deforestación, la contaminación, el cambio climático, la agricultura y pesca intensivas, y las actividades humanas amenazan los ecosistemas del planeta. Jirafas, loros, algas y robles, entre muchos otros, están amenazados. Son animales conocidos, pero una de las especies más singulares del planeta, como es el delfín rosa, también está en jaque, y poco sabemos de este mamífero. De hecho, quizás no lo hayas visto nunca. Ni en foto. Su nombre no es baladí y son de este color.', 'La población de este mamífero es estimada y se extinguirá en menos de 50 años, según revela un estud', 1, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `c1` (`id_autor`),
  ADD KEY `c2` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `c1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE CASCADE,
  ADD CONSTRAINT `c2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;