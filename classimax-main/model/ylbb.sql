-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 01:59:52
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
  `estado` bigint(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Identificacion`, `Tipo_de_dato`, `Nombres`, `Apellidos`, `Email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `foto2`, `foto3`) VALUES
(1023162918, '', 'Anderson Tovar', 'Tovar Sanchez', 'adtovar81@misena.edu.co', '3021413242354325', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 1, '../Uploads/usuariosjs.png', '../Uploads/usuarios', '../Uploads/usuarios'),
(218390214412, '', 'Edison Sebastian ', 'Ramirez Suarez', 'esramirez51@gmail.com', '43232543645', '01ceb8141c88907d05404162a17d9bcb', 'Administrador', 1, '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.10.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/'),
(321093120321, '', 'Samuel Sanchez', 'Diaz Martinez', '16samuel18@gamil.com', '43232543645', '6b50daa1c96088c65ec86940b565ae1a', 'Administrador', 0, '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.18.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` bigint(200) NOT NULL,
  `id_producto` bigint(200) NOT NULL,
  `id_usuario` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_producto`, `id_usuario`) VALUES
(21, 29, 53),
(22, 22, 53),
(24, 16, 54),
(30, 22, 1023162918),
(39, 29, 1023162918),
(43, 16, 1023162918),
(44, 25, 1023162918),
(46, 29, 51),
(47, 15, 51),
(48, 16, 51),
(49, 20, 51),
(50, 15, 51),
(51, 16, 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` bigint(200) NOT NULL,
  `categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Tecnologia'),
(2, 'Moda'),
(3, 'Salud y belleza'),
(4, 'Deportes'),
(5, 'Bebes y juegos'),
(6, 'Alimentos y bebidas'),
(7, 'Oficina'),
(8, 'Muebles y decoracion'),
(9, 'Mascotas'),
(10, 'Libros y medios'),
(11, 'Carpintería'),
(12, 'Fontanería'),
(13, 'Electricidad'),
(14, 'Pintura'),
(15, 'Jardinería'),
(16, 'Limpieza'),
(17, 'Reparación de electrodomésticos'),
(18, 'Cerrajería'),
(19, 'Construcción'),
(20, 'Mantenimiento general');

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
  `descripcion` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL,
  `id_emprendedor` bigint(255) NOT NULL,
  `Estado` bigint(200) NOT NULL,
  `Disponibilidad` varchar(200) NOT NULL DEFAULT 'Activo',
  `categoria` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `descripcion`, `foto`, `foto2`, `foto3`, `id_emprendedor`, `Estado`, `Disponibilidad`, `categoria`) VALUES
(15, 'Computador', 500000, '3', 'Descubre la potencia en su máxima expresión con nuestra última oferta: la PC Con un rendimiento extraordinario y un diseño elegante, esta computadora está diseñada para satisfacer todas tus necesidade', '../Uploads/usuarios/pexels-xxss-is-back-777001.jpg', '', '', 46, 1, '1', 1),
(16, 'monitor                                                                                                                                                                                                 ', 12000, '3', 'Descubre la claridad y la inmersión visual con nuestro monitor [Nombre del Modelo]. Con una pantalla vibrante y de alta resolución, este monitor redefine tu experiencia visual. Ya sea para trabajo o e', '../Uploads/usuarios/pexels-designecologist-1779487.jpg', '', '', 46, 1, '1', 2),
(17, 'tablet de dibujo', 600000, '1', 'Explora tu creatividad sin límites con nuestra tablet para dibujar. Diseñada para artistas digitales, esta tablet combina precisión y sensibilidad en cada trazo. La pantalla táctil de alta resolución ', '../Uploads/usuarios/pexels-sasha-kim-9414330.jpg', '', '', 46, 1, '1', 1),
(18, 'Microfono', 150000000, '1', 'Haz que tu voz destaque con nuestro micrófono Tonor Q9. Diseñado para capturar cada matiz y tono, este micrófono ofrece una calidad de sonido excepcional.', '../Uploads/usuarios/small_tonor-q9-kit-box.jpg', '', '', 46, 1, '1', 3),
(20, 'trapeador', 20000, '1', 'Eleva la limpieza de tu hogar con nuestro trapero Kaseio. Diseñado para hacer frente a cualquier tipo de suciedad, este trapero combina eficacia y durabilidad.', '../Uploads/usuarios/pexels-pixabay-48889.jpg', '', '', 51, 1, '1', 2),
(21, 'sofa cama', 3000000, '2', '                                                                                                                      Optimiza tu espacio con nuestro sofá cama convertible Elieser. Este elegante muebl', '../Uploads/usuarios/pexels-rachel-claire-4857775.jpg', '', '', 51, 1, '1', 8),
(22, 'audiculares ', 100000, '4', 'Sumérgete en un mundo de sonido excepcional con nuestros auriculares Samsung. Diseñados para ofrecer una experiencia auditiva inigualable', '../Uploads/usuarios/pexels-soulful-pizza-3780681.jpg', '', '', 52, 1, '1', 2),
(23, 'portatil', 500000, '2', 'Domina el mundo digital con nuestro portátil gamer de alta potencia: Intelperl. Equipado con un procesador de última generación y una tarjeta gráfica potente, este portátil lleva tus experiencias de j', '../Uploads/usuarios/pexels-cottonbro-studio-4065876.jpg', '', '', 52, 1, '1', 1),
(24, 'Cuchillos de cocina', 60000, '4', 'Descubre la precisión culinaria con nuestro set de cuchillos ultracaroi. Diseñados para cortes impecables y durabilidad excepcional, estos cuchillos son la herramienta esencial en tu cocina. ', '../Uploads/usuarios/pexels-lukas-952366.jpg', '', '', 52, 1, '1', 2),
(25, 'Juego de platos', 100000, '1', 'Crea momentos memorables en la mesa con nuestro juego de platos Leonel. Con un diseño elegante y versátil, estos platos son la elección perfecta para cualquier ocasión. ', '../Uploads/usuarios/pexels-jamie-he-563067.jpg', '', '', 52, 1, '1', 2),
(31, 'prueba', 21221212, '1', 'wqe', '../Uploads/productos/dibujo-2.png', '../Uploads/productos/', '../Uploads/productos/', 51, 1, '1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` bigint(255) NOT NULL,
  `id_vendedor` bigint(255) NOT NULL,
  `id_producto` bigint(255) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` bigint(200) NOT NULL,
  `duracion` varchar(200) NOT NULL,
  `categoria` bigint(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL,
  `id_emprendedor` bigint(200) NOT NULL,
  `Estado` int(200) NOT NULL DEFAULT 1,
  `Disponibilidad` int(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `precio`, `duracion`, `categoria`, `descripcion`, `foto`, `foto2`, `foto3`, `id_emprendedor`, `Estado`, `Disponibilidad`) VALUES
(1, 'Fontanero a domicilio', 300000, '2', 12, 'Fontanero y ruso\r\n                \r\n                \r\n                ', '../Uploads/productos/habilidades.jpeg', '../Uploads/productos/Captura linuxxxx.PNG', '../Uploads/productos/6448709.jpg', 51, 1, 1),
(2, 'PINTURA', 0, 'rewrwe', 14, '                                                rewrew\r\n                \r\n                \r\n                ', '../Uploads/productos/SS23.PNG', '../Uploads/productos/Captura linuxxxx.PNG', '../Uploads/productos/estacion de autobuses.jpg', 51, 1, 1),
(3, 'prueba categoria', 0, 'ewq', 3, '                eqweqw\r\n                ', '../Uploads/productos/caracteristicas.jpeg', '../Uploads/productos/6448709.jpg', '../Uploads/productos/estacion de autobuses.jpg', 51, 1, 1);

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
  `Estado` bigint(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `Email`, `Telefono`, `clave`, `Rol`, `foto`, `Estado`) VALUES
(46, 'Anderson', 'Tovar', 'andercmdsena@gmail.com', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor', '../Uploads/usuarios/solucion.PNG', 1),
(51, 'Sam Jose', 'Dias', '16samuel18@gmail.coma', 123, '202cb962ac59075b964b07152d234b70', 'Emprendedor', '../Uploads/usuarios/dibujo.png', 1),
(52, 'Checho', 'Patiño Putrilla', 'miguel1@hotmail.coma', 1234, '81dc9bdb52d04dc20036dbd8313ed055', 'Emprendedor', '../Uploads/usuarios/83e43f8e49a87cf144f1a4a2e9f03b67d2e1e02c_00.jpg', 1),
(53, 'Pedro ', 'Sanchez', '16samuel18@gmail.come', 123, '202cb962ac59075b964b07152d234b70', 'Cliente', '../Uploads/usuarios/80 proto.png', 1),
(54, 'dsa', 'tovar', '16samuel18@gmail.comi', 213213123213321, 'c20ad4d76fe97759aa27a0c99bff6710', 'Cliente', '', 1),
(55, 'dsa', 'eewqewq', 'andercmdsena@gmail.comeqweqw', 213213123213, 'c20ad4d76fe97759aa27a0c99bff6710', 'Cliente', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Identificacion`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

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
  ADD KEY `usuario_id_emprendedor_productos` (`id_emprendedor`),
  ADD KEY `Estado` (`Estado`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `Disponibilidad` (`Disponibilidad`),
  ADD KEY `Disponibilidad_2` (`Disponibilidad`),
  ADD KEY `Estado` (`Estado`);

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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_emprendedor`) REFERENCES `usuario` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`Estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
