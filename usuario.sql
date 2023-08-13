-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2023 a las 03:05:36
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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` bigint(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `Rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Email`, `clave`, `Rol`) VALUES
(1, '', '', ''),
(2, 'adsds', 'assda', ''),
(3, 'tovaranderson37@gmail.com', 'assda', ''),
(4, 'ds', 'dsf', ''),
(5, 'andercmdsena@gmail.com', 'sad', ''),
(6, 'tovaranderson37@gmail.comsa', 'asdsa', ''),
(7, 'tovaranderson3sda7@gmail.comsa', 'asdsa', ''),
(8, 'andercmdsena@gmail.aaaa', 'assda', ''),
(9, 'adtovar81@misena.edu.co', '1234', ''),
(10, 'adtovar81@misena.edu.cod', '1234er', ''),
(11, 'tovaranderson37@gmail.compen', '7815696ecbf1c96e6894b779456d330e', ''),
(12, 'tovaranderson37@gmail.comdasfd', '202cb962ac59075b964b07152d234b70', ''),
(13, 'andersena@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(14, 'tovaranderson37@gmail.comdasdas', '202cb962ac59075b964b07152d234b70', ''),
(15, 'tovaranderson37@gmail.comeee', '202cb962ac59075b964b07152d234b70', 'Emprendedor'),
(16, 'andercmdsena@gmail.comm', '202cb962ac59075b964b07152d234b70', 'Emprendedor'),
(17, 'jcpinilla51@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor'),
(18, 'tovaranderson37@gmail.coms', '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor'),
(19, 'tovaranderson37@gmail.comoso', '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor'),
(20, 'ander1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
