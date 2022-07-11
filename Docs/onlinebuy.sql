-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2022 a las 00:55:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `onlinebuy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologias`
--

CREATE TABLE `tecnologias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(20,0) NOT NULL,
  `descripcion` text NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tecnologias`
--

INSERT INTO `tecnologias` (`id`, `nombre`, `precio`, `descripcion`, `image`) VALUES
(1, 'Laptop HP', '500', 'Elementos básicos. El PC portátil HP 550 entra con facilidad en cualquier presupuesto y le ayuda a mantenerse comunicado y productivo, de forma que es como transportar la oficina.', 'https://www.prado.com.sv/media/catalog/product/cache/95333050a0060ecff16fdd50ff46c307/l/a/laptop-hp-pavilion-x360-convertible-14-dy0003la-gris-171794_1_frontal.jpg'),
(2, 'Laptop DELL', '600', 'Elementos básicos. El PC portátil HP 550 entra con facilidad en cualquier presupuesto y le ayuda a mantenerse comunicado y productivo, de forma que es como transportar la oficina.', 'https://intercompras.com/images/product/HP_K4M58LT.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventadetalle`
--

CREATE TABLE `ventadetalle` (
  `id_ventaDetalle` int(11) NOT NULL,
  `id_Venta` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL,
  `precioUnitario` decimal(20,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventadetalle`
--

INSERT INTO `ventadetalle` (`id_ventaDetalle`, `id_Venta`, `id_Producto`, `precioUnitario`, `cantidad`) VALUES
(1, 6, 1, '500.00', 1),
(2, 6, 2, '600.00', 1),
(3, 7, 1, '500.00', 1),
(4, 7, 2, '600.00', 1),
(5, 8, 1, '500.00', 1),
(6, 8, 2, '600.00', 1),
(7, 9, 1, '500.00', 1),
(8, 9, 2, '600.00', 1),
(9, 10, 1, '500.00', 1),
(10, 10, 2, '600.00', 1),
(11, 11, 1, '500.00', 1),
(12, 11, 2, '600.00', 1),
(13, 12, 1, '500.00', 1),
(14, 12, 2, '600.00', 1),
(15, 13, 1, '500.00', 1),
(16, 13, 2, '600.00', 1),
(17, 14, 1, '500.00', 1),
(18, 14, 2, '600.00', 1),
(19, 15, 1, '500.00', 1),
(20, 15, 2, '600.00', 1),
(21, 16, 1, '500.00', 1),
(22, 16, 2, '600.00', 1),
(23, 17, 1, '500.00', 1),
(24, 17, 2, '600.00', 1),
(25, 18, 1, '500.00', 1),
(26, 18, 2, '600.00', 1),
(27, 19, 1, '500.00', 1),
(28, 19, 2, '600.00', 1),
(29, 20, 1, '500.00', 1),
(30, 20, 2, '600.00', 1),
(31, 21, 1, '500.00', 1),
(32, 21, 2, '600.00', 1),
(33, 22, 1, '500.00', 1),
(34, 22, 2, '600.00', 1),
(35, 23, 1, '500.00', 1),
(36, 23, 2, '600.00', 1),
(37, 24, 1, '500.00', 1),
(38, 24, 2, '600.00', 1),
(39, 25, 1, '500.00', 1),
(40, 25, 2, '600.00', 1),
(41, 26, 1, '500.00', 1),
(42, 26, 2, '600.00', 1),
(43, 27, 1, '500.00', 1),
(44, 27, 2, '600.00', 1),
(45, 28, 1, '500.00', 1),
(46, 29, 1, '500.00', 1),
(47, 30, 1, '500.00', 1),
(48, 30, 2, '600.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_Venta` int(11) NOT NULL,
  `claveTransaccion` varchar(250) NOT NULL,
  `paypalDatos` text NOT NULL,
  `fecha` datetime NOT NULL,
  `correo` varchar(5000) NOT NULL,
  `total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_Venta`, `claveTransaccion`, `paypalDatos`, `fecha`, `correo`, `total`, `status`) VALUES
(1, '1234567', '', '2021-08-04 15:08:50', 'marlonmuchin01@gmail.com', '600.00', 'Pendiente'),
(2, '1234567', '', '2021-08-04 15:08:50', 'marlonmuchin01@gmail.com', '600.00', 'Pendiente'),
(3, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 15:33:09', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(4, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:00:21', 'daniela00293@gmail.com', '1100.00', 'Pendiente'),
(5, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:03:13', 'marlonmuchin01@gmail.com', '500.00', 'Pendiente'),
(6, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:05:02', 'marlonmuchin01@gmail.com22', '1100.00', 'Pendiente'),
(7, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:20:25', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(8, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:39:04', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(9, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:39:38', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(10, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:40:37', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(11, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:41:08', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(12, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:42:23', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(13, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:43:02', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(14, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:43:16', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(15, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:43:28', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(16, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:43:46', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(17, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:44:16', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(18, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:45:05', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(19, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:45:24', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(20, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:45:28', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(21, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:45:40', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(22, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:45:58', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(23, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:48:24', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(24, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:49:19', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(25, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 16:49:31', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(26, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 17:03:40', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(27, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 18:43:21', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente'),
(28, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 18:44:11', 'marlonmuchin01@gmail.com', '500.00', 'Pendiente'),
(29, 'p87mptruvs5ufi3jsva4osed40', '', '2021-08-04 19:53:23', 'marlonmuchin01@gmail.com', '500.00', 'Pendiente'),
(30, '17vl81ogj6lm1cuplk2fa2qku2', '', '2022-07-11 16:51:39', 'marlonmuchin01@gmail.com', '1100.00', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tecnologias`
--
ALTER TABLE `tecnologias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventadetalle`
--
ALTER TABLE `ventadetalle`
  ADD PRIMARY KEY (`id_ventaDetalle`),
  ADD KEY `id_Venta` (`id_Venta`),
  ADD KEY `id_Producto` (`id_Producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_Venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tecnologias`
--
ALTER TABLE `tecnologias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventadetalle`
--
ALTER TABLE `ventadetalle`
  MODIFY `id_ventaDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventadetalle`
--
ALTER TABLE `ventadetalle`
  ADD CONSTRAINT `ventadetalle_ibfk_1` FOREIGN KEY (`id_Venta`) REFERENCES `ventas` (`id_Venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventadetalle_ibfk_2` FOREIGN KEY (`id_Producto`) REFERENCES `tecnologias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
