-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 16:31:24
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socialg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `idgallery` int(11) NOT NULL,
  `namegallery` varchar(10) NOT NULL,
  `pathgallery` varchar(30) NOT NULL,
  `descgallery` varchar(135) NOT NULL,
  `dategallery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`idgallery`, `namegallery`, `pathgallery`, `descgallery`, `dategallery`) VALUES
(10, 'Imagen n1', 'images/imagen1.jpg', 'Descripcion de la foto jaja', '2019-10-02'),
(11, 'Imagen 2', 'images/imagen2.jpg', 'laoeja ka 34 ^^', '2019-10-02'),
(12, 'Imaen 31', 'images/imagen3.jpg', 'wajej aj asd', '2019-10-02'),
(13, 'Jahe aj ae', 'images/imgeaj4.jpg', 'adadsjf wndesnjf 38Â·(', '2019-10-02'),
(14, 'JAJAj aje ', 'images/testa.jpg', 'aKA jaejr s', '2019-10-02'),
(16, 'asdasd', 'images/Vayne (2).jpg', 'asada', '2019-10-02'),
(17, 'Testing343', 'images/AAImagenA.jpg', 'Testing2', '2019-10-07'),
(18, 'Testing343', 'images/Imagen X.jpg', 'Testing2', '2019-10-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idgallery`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idgallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
