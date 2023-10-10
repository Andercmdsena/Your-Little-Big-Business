-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 18:40:14
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
-- Base de datos: `ylbb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` bigint(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_emprendedor` bigint(255) UNSIGNED NOT NULL,
  `Estado` varchar(200) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `categoria`, `foto`, `id_emprendedor`, `Estado`) VALUES
(8, 'celular2ewqewqe', 0, 'ewwqe', 'tecnologia', '../Uploads/usuarios/pexels-sebastian-coman-photography-3437689.jpg', 60, 'Pendiente'),
(9, 'ewqeqwewqewqeq', 0, 'eqwewqeqwe', 'hogar', '../Uploads/usuarios/pexels-pixabay-220453.jpg', 60, 'Pendiente'),
(13, 'celular', 300000, '2', 'libros', '../Uploads/usuarios/captura.PNG', 46, 'Agotado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id_emprendedor_productos` (`id_emprendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
