-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2023 a las 22:53:00
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
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Identificacion` bigint(15) NOT NULL,
  `Tipo_de_dato` varchar(30) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Identificacion`, `Tipo_de_dato`, `Nombres`, `Apellidos`, `Email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `foto2`, `foto3`) VALUES
(1023162918, '', 'Anderson Tovar', 'Tovar Sanchez', 'adtovar81@misena.edu.co', '3021413242354325', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 'Activo', '../Uploads/usuariosjs.png', '../Uploads/usuarios', '../Uploads/usuarios'),
(218390214412, 'C.C', 'Edison Sebastian ', 'Ramirez Suarez', 'esramirez51@gmail.com', '43232543645', '01ceb8141c88907d05404162a17d9bcb', 'Administrador', 'Activo', '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.10.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/'),
(321093120321, 'C.C', 'Samuel Sanchez', 'Diaz Martinez', '16samuel18@gamil.com', '43232543645', '6b50daa1c96088c65ec86940b565ae1a', 'Administrador', 'Activo', '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.18.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` bigint(200) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(0, 'Bloqueado'),
(1, 'Activo'),
(2, 'Pendiente');

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
  `Estado` varchar(200) NOT NULL DEFAULT 'Activo',
  `Estado_producto` varchar(200) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `categoria`, `foto`, `id_emprendedor`, `Estado`, `Estado_producto`) VALUES
(8, 'celular2ewqewqe', 0, 'ewwqe', 'tecnologia', '../Uploads/usuarios/pexels-sebastian-coman-photography-3437689.jpg', 60, 'Pendiente', 'Activo'),
(9, 'ewqeqwewqewqeq', 0, 'eqwewqeqwe', 'hogar', '../Uploads/usuarios/pexels-pixabay-220453.jpg', 60, 'Pendiente', 'Activo'),
(13, 'celular', 300000, '2', 'libros', '../Uploads/usuarios/captura.PNG', 46, 'Pendiente', 'Pendiente'),
(14, 'dsa', 0, 'asd', 'tecnologia', '../Uploads/usuarios/', 46, 'Activo', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` bigint(255) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` bigint(200) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `Estado` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `Email`, `Telefono`, `clave`, `Rol`, `foto`, `Estado`) VALUES
(40, '2321321', '43243243', 'tovaranderson37@gmail.comhola', 433243265555, '5504dcedd363eb185d101b78a479017d', 'Cliente', '../Uploads/usuarios/Men.png', 1),
(43, 'Juan pedro', 'Avila', 'Juan37@gmail.com', 43232543645, '1156a524a775eedebba9bdccc4c1f1ee', 'Emprendedor', '../Uploads/usuarios/pexels-pixabay-220453.jpg', 0),
(46, 'Anderson', 'Tovar', 'andercmdsena@gmail.com', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor', '../Uploads/usuarios/solucion.PNG', 1),
(47, 'Anderson', 'Tovar Sanchezs', 'adtovar81@misena.edu.co13221312', 3213123321, '806dafd50ea8bb78ec042210b166be90', 'Cliente', '../Uploads/usuarios/', 1),
(48, 'Andersondasd', 'Tovar Sanchezs', 'adtovar81@misena.edu.codasdsa', 0, '0ab7bb53191d612689e8794f8fa94659', 'Emprendedor', '../Uploads/usuarios/', 1),
(49, 'qweqwqe', 'ewwqeqw', 'adtovar81@misena.edu.coqeweqw', 0, '58b3e9332ca44e4ef9692a700a31c26b', 'Emprendedor', '../Uploads/usuarios/', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id_emprendedor_productos` (`id_emprendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Estado` (`Estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
