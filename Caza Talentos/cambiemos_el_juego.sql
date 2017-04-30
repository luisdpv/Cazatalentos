-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 21:45:58
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cambiemos el juego`
--
CREATE DATABASE IF NOT EXISTS `cambiemos el juego` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `cambiemos el juego`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Email` text COLLATE utf8_spanish_ci NOT NULL, NOT REGEXP '[^A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,6}$'
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Usuario`, `Password`, `Email`, `Imagen`) VALUES
(1, 'usuario', '1', 'usuario1', '123', 'usuario1@hotmail.com', 'facelogo.png'),
(2, 'daniel', 'peralta', 'dani123', '123', 'usuario2@hotmail.com', 'facelogo.png'),
(4, 'ya', 'ya', 'ya', 'ya', 'usuario3@hotmail.com', 'usuario.png'),
(5, 'fa', 'fa', 'fa', 'fa', 'usuario4@hotmail.com', 'usuario.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
