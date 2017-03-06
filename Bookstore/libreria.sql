-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2017 a las 00:44:39
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categorias` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categorias`) VALUES
('Arte'),
('Fantasia'),
('Historia'),
('Informatica'),
('Musica'),
('Policiaca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `titulo` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`titulo`, `categoria`, `precio`) VALUES
('AC/DC', 'Musica', 16),
('Alejandro Magno', 'Historia', 13),
('Batalla de Inglaterr', 'Historia', 15),
('El Hobbit', 'Fantasia', 15),
('Flickan som lekte me', 'Policiaca', 13),
('Hunger Games', 'Fantasia', 17),
('II Guerra Mundial', 'Historia', 12),
('Juego de Tronos', 'Fantasia', 12),
('Julio Cesar', 'Historia', 13),
('Metro 2033', 'Fantasia', 17),
('Napoleon: Batallas', 'Historia', 14),
('Retratos S.XVII', 'Arte', 10),
('Troya', 'Historia', 14),
('Unknown Pleasures', 'Musica', 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categorias`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`titulo`),
  ADD KEY `fkey` (`categoria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`categorias`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
