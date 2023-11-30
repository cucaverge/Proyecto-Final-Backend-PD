-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 23:51:42
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
-- Base de datos: `proyecto_integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre_producto` text NOT NULL,
  `descripcion_producto` text NOT NULL,
  `imagen_producto` blob DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre_producto`, `descripcion_producto`, `imagen_producto`, `id_producto`, `stock_producto`, `precio_producto`) VALUES
('Oso', 'Oso marrón', 0x696d6167656e5f70726f647563746f2f70312e706e67, 161, 25, 10),
('Gato', 'Gato negro', 0x696d6167656e5f70726f647563746f2f6761746f2e706e67, 162, 23, 8),
('Pato', 'Pato amarillo', 0x696d6167656e5f70726f647563746f2f7061746f2e706e67, 163, 5, 13),
('Perro', 'Perro marrón', 0x696d6167656e5f70726f647563746f2f706572726f2e706e67, 164, 20, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
