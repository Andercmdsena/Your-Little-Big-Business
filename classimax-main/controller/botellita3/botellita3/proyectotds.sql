-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2023 a las 03:40:50
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
-- Base de datos: `proyectotds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id_almacen` int(11) NOT NULL,
  `nombre_alma` varchar(80) NOT NULL,
  `direccion_alma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE `bodega` (
  `id_bodega` int(11) NOT NULL,
  `id_producto_fk` int(11) DEFAULT NULL,
  `almacen_bod_fk` int(11) DEFAULT NULL,
  `movimiento_bod_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_movimiento`
--

CREATE TABLE `detalle_movimiento` (
  `id_detalle_mov` int(11) NOT NULL,
  `metodo_pago` varchar(200) NOT NULL,
  `fecha_mov` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'Frito Lay'),
(2, 'Colombina'),
(3, 'Postobón'),
(4, 'Nectar'),
(5, 'Bavaria'),
(6, 'Ramo'),
(7, 'Alpina'),
(8, 'Aguardiente'),
(9, 'Pony Malta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `id_movimiento` int(11) NOT NULL,
  `tipo_movimiento` varchar(80) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `hora_movimiento` time NOT NULL,
  `cantidad_movimiento` int(11) NOT NULL,
  `precio_movimiento` float NOT NULL,
  `producto_mov_fk` int(11) DEFAULT NULL,
  `users_mov_fk` int(11) DEFAULT NULL,
  `proveedores_mov_fk` int(11) DEFAULT NULL,
  `detalle_movimiento_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `prod_nombre` varchar(30) NOT NULL,
  `precio_unitario` float NOT NULL,
  `precio_compra` float NOT NULL,
  `fecha_fabricacion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `total_venta` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipo_producto_fk` int(11) DEFAULT NULL,
  `marca_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nit_empre` int(11) NOT NULL,
  `nom_empre` varchar(50) DEFAULT NULL,
  `nom_prov` varchar(50) DEFAULT NULL,
  `tel_prov` bigint(20) DEFAULT NULL,
  `logo_empre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`nit_empre`, `nom_empre`, `nom_prov`, `tel_prov`, `logo_empre`) VALUES
(456, 'Colombina', 'Marco Antonio', 12345, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_prod` int(11) NOT NULL,
  `nombre_prod` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_prod`, `nombre_prod`) VALUES
(1, 'Paquetes'),
(2, 'Cerveza'),
(3, 'Golosinas'),
(4, 'Licor'),
(5, 'Bebidas gaseosas'),
(6, 'Paquetes'),
(7, 'Cerveza'),
(8, 'Golosinas'),
(9, 'Licor'),
(10, 'Bebidas gaseosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `identificacion` int(25) NOT NULL,
  `tipoDoc` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` bigint(50) NOT NULL,
  `claveMd` varchar(200) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`identificacion`, `tipoDoc`, `nombres`, `apellidos`, `email`, `telefono`, `claveMd`, `rol`, `estado`, `foto`) VALUES
(123, 'CC', 'Lizhet Geraldy ', 'Rincon  ', 'lizhet.rincon1@misena.edu.co', 3209781153, 'eb62f6b9306db575c2d596b1279627a4', 'Administrador', 'Activo', '../upload/usuarios/llllll.jpeg'),
(456, 'CC', 'Jurany Alejandra', 'Cuervo Fontecha', 'jacuervo400@misena.edu.co', 3134458347, '250cf8b51c773f3f8dc8b4be867a9a02', 'Administrador', 'Activo', '../upload/usuarios/gatoacostado.jpg'),
(654, 'CC', 'Breidy ', 'Jaime ', 'breidy.9@misena.edu.co', 3222397564, 'd3b050a5560fd001b8aac1d96bb54f32', 'Administrador', 'Activo', '../upload/usuarios/diomedezbreidy.jpeg'),
(12345, 'CC', 'Nelson Enrique', 'Alarcon Reyes', 'nelson.alarcn@misena.edu.co', 3124214635, '827ccb0eea8a706c4c34a16891f84e7b', 'Administrador', 'Activo', '../upload/usuarios/gatonelson.jpg'),
(12468, 'CC', 'Luis Felipe', 'Restrepo Argüello', 'lfrestrepo004@gmail.com', 3212439492, '0d2922ee422da439d1304f3288bbd25b', 'Cliente', 'Activo', '../upload/usuarios/gatolindo.jpg'),
(56165, 'CC', 'Luisa Fernanda', 'Vega Zambrano', 'luisa.vega3@misena.edu.co', 3165425549, '63def57b4dee8d45cbe4bbafd388eb57', 'Administrador', 'Activo', '../upload/usuarios/Gatoluisa.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`id_bodega`),
  ADD KEY `id_producto_fk` (`id_producto_fk`),
  ADD KEY `almacen_bod_fk` (`almacen_bod_fk`),
  ADD KEY `movimiento_bod_fk` (`movimiento_bod_fk`);

--
-- Indices de la tabla `detalle_movimiento`
--
ALTER TABLE `detalle_movimiento`
  ADD PRIMARY KEY (`id_detalle_mov`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `users_mov_fk` (`users_mov_fk`),
  ADD KEY `proveedores_mov_fk` (`proveedores_mov_fk`),
  ADD KEY `detalle_movimiento_fk` (`detalle_movimiento_fk`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `tipo_producto_fk` (`tipo_producto_fk`),
  ADD KEY `marca_fk` (`marca_fk`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`nit_empre`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_prod`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id_almacen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
  MODIFY `id_bodega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_movimiento`
--
ALTER TABLE `detalle_movimiento`
  MODIFY `id_detalle_mov` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `nit_empre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542310321;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD CONSTRAINT `bodega_ibfk_1` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `bodega_ibfk_2` FOREIGN KEY (`almacen_bod_fk`) REFERENCES `almacen` (`id_almacen`),
  ADD CONSTRAINT `bodega_ibfk_3` FOREIGN KEY (`movimiento_bod_fk`) REFERENCES `movimiento` (`id_movimiento`);

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`users_mov_fk`) REFERENCES `users` (`identificacion`),
  ADD CONSTRAINT `movimiento_ibfk_2` FOREIGN KEY (`proveedores_mov_fk`) REFERENCES `proveedores` (`nit_empre`),
  ADD CONSTRAINT `movimiento_ibfk_3` FOREIGN KEY (`detalle_movimiento_fk`) REFERENCES `detalle_movimiento` (`id_detalle_mov`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`tipo_producto_fk`) REFERENCES `tipo_producto` (`id_tipo_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca_fk`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
