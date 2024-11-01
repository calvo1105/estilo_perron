-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-10-2024 a las 01:19:05
-- Versión del servidor: 5.7.39
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `EstiloPerron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_compra` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `fecha_compra` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_compra`, `id_usuario`, `id_producto`, `fecha_compra`, `estado`) VALUES
(56, 1, 2, '2024-10-14 18:47:07', 'comprado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Dog Chow para perros adultos de raza pequeña', 14700, 'Comida1.png'),
(2, 'Pelotas de diferentes colores para perro', 5000, 'Juguete1.png'),
(3, 'Correa retractil color negro', 25000, 'Correa1.png'),
(4, 'Dogourmet adultos sabor parrillada mixta 8kg', 50000, 'Comida2.png'),
(5, 'Hueso de juguete para perro', 10000, 'Juguete2.png'),
(6, 'Pechera y correa color naranja', 30000, 'Correa2.png'),
(7, 'Ringo croquetas 20kg', 120000, 'Comida3.png'),
(8, 'Lazo con Pelota', 10000, 'Juguete3.png'),
(9, 'Lazo color negro', 15000, 'Correa3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(10) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `hora_reserva` time(6) NOT NULL,
  `tipo_servicio` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `fecha_reserva`, `hora_reserva`, `tipo_servicio`, `estado`, `id_usuario`) VALUES
(14, '2024-10-09', '20:24:00.000000', 'paseo', 'cancelar', 29),
(15, '2024-10-09', '20:25:00.000000', 'paseo', 'cancelar', 29),
(16, '2024-10-09', '20:26:00.000000', 'paseo', 'cancelar', 29),
(17, '2024-10-09', '20:27:00.000000', 'paseo', 'atender', 29),
(18, '2024-10-09', '20:28:00.000000', 'paseo', 'atendido', 29),
(19, '2024-10-09', '20:30:00.000000', 'paseo', 'pendiente', 29),
(20, '2024-10-09', '20:31:00.000000', 'paseo', 'pendiente', 29),
(21, '2024-10-09', '20:32:00.000000', 'paseo', 'pendiente', 29),
(22, '2024-10-09', '20:33:00.000000', 'paseo', 'cancelar', 29),
(23, '2024-10-09', '20:35:00.000000', 'paseo', 'cancelar', 29),
(24, '2024-10-09', '20:36:00.000000', 'paseo', 'pendiente', 29),
(25, '2024-10-09', '20:37:00.000000', 'paseo', 'pendiente', 29),
(26, '2024-10-09', '20:38:00.000000', 'paseo', 'pendiente', 29),
(27, '2024-10-09', '20:39:00.000000', 'paseo', 'pendiente', 29),
(28, '2024-10-09', '20:40:00.000000', 'paseo', 'pendiente', 29),
(29, '2024-10-09', '20:41:00.000000', 'paseo', 'pendiente', 29),
(30, '2024-10-09', '20:42:00.000000', 'paseo', 'pendiente', 29),
(31, '2024-10-09', '22:50:00.000000', 'paseo', 'pendiente', 29),
(32, '2024-10-09', '22:50:00.000000', 'peluqueria', 'pendiente', 29),
(33, '2024-10-09', '22:01:00.000000', 'peluqueria', 'pendiente', 29),
(34, '2024-10-09', '22:02:00.000000', 'peluqueria', 'cancelado', 29),
(35, '2024-10-10', '14:23:00.000000', 'paseo', 'cancelar', 1),
(36, '2024-10-11', '19:00:00.000000', 'adiestramiento', 'cancelado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `estado`) VALUES
(1, 'Samuel', 'Velasquez', 'savelasquez@iegabo.edu.co', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'Samuel', 'Tomé', 'stome@iegabo.edu.co', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(29, 'Andres', 'Cano', 'acano@gmail', '81dc9bdb52d04dc20036dbd8313ed055', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `FKUsuario` (`id_usuario`),
  ADD KEY `FKProducto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `FKUsuario` (`id_usuario`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_compra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
