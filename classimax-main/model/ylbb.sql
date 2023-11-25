-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 17:36:12
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
(321, 'C.C', 'wqewqwqeewq', 'ewqwewqwqe', 'dsasad@esadfdsdsadassdewqwqewqe', 'weqwqewwq', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Administrador', 0, '../Uploads/usuarios/gtaV.jpg', '../Uploads/usuarios/', '../Uploads/usuarios/'),
(1023162918, '', 'Anderson Tovar', 'Tovar Sanchez', 'adtovar81@misena.edu.co', '3021413242354325', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 1, '../Uploads/usuariosjs.png', '../Uploads/usuarios', '../Uploads/usuarios'),
(218390214412, '', 'Edison Sebastian ', 'Ramirez Suarez', 'esramirez51@gmail.com', '43232543645', '01ceb8141c88907d05404162a17d9bcb', 'Administrador', 1, '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.10.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/'),
(321093120321, '', 'Samuel Sanchez', 'Diaz Martinez', '16samuel18@gamil.com', '43232543645', '6b50daa1c96088c65ec86940b565ae1a', 'Administrador', 0, '../Uploads/usuarios/WhatsApp Image 2023-08-22 at 8.18.46 PM.jpeg', '../Uploads/usuarios/', '../Uploads/usuarios/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` bigint(200) NOT NULL,
  `calificacion` int(200) NOT NULL,
  `comentarios` varchar(200) NOT NULL,
  `id_usuario` bigint(200) NOT NULL,
  `id_producto` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `calificacion`, `comentarios`, `id_usuario`, `id_producto`) VALUES
(1, 2, 'hola', 51, 34),
(2, 2, 'ads', 1021, 34),
(3, 3, 'dassd', 51, 34),
(4, 2, 'hola', 1023162918, 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` bigint(200) NOT NULL,
  `id_producto` bigint(200) NOT NULL,
  `id_usuario` bigint(200) NOT NULL,
  `cantidad` int(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_producto`, `id_usuario`, `cantidad`) VALUES
(21, 29, 53, 0),
(22, 22, 53, 0),
(24, 16, 54, 0),
(30, 22, 1023162918, 0),
(39, 29, 1023162918, 0),
(43, 16, 1023162918, 0),
(44, 25, 1023162918, 0),
(46, 29, 51, 0),
(47, 15, 51, 0),
(48, 16, 51, 0),
(49, 20, 51, 0),
(50, 15, 51, 0),
(51, 16, 51, 0),
(56, 35, 46, 0),
(57, 35, 46, 0),
(58, 34, 46, 0),
(60, 36, 52, 0),
(64, 33, 52, 0),
(73, 33, 51, 2),
(75, 34, 1023162918, 1),
(77, 34, 51, 1);

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
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `id` bigint(200) NOT NULL,
  `id_pedido` bigint(200) NOT NULL,
  `id_producto` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles_pedido`
--

INSERT INTO `detalles_pedido` (`id`, `id_pedido`, `id_producto`) VALUES
(759, 288, 33),
(760, 289, 33),
(761, 289, 36),
(762, 290, 33),
(763, 290, 36);

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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(200) NOT NULL,
  `id_usuario` varchar(200) NOT NULL,
  `id_emprendedor` varchar(200) NOT NULL,
  `fecha_pedido` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_usuario`, `id_emprendedor`, `fecha_pedido`) VALUES
(288, '51', '51', '2023-11-23 15:33:06'),
(289, '1023162918', '51', '2023-11-23 15:33:42'),
(290, '1023162918', '52', '2023-11-23 15:33:42');

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
  `Estado` bigint(200) NOT NULL DEFAULT 1,
  `Disponibilidad` varchar(200) NOT NULL DEFAULT '1',
  `categoria` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `descripcion`, `foto`, `foto2`, `foto3`, `id_emprendedor`, `Estado`, `Disponibilidad`, `categoria`) VALUES
(32, 'Camisas', 50000, '1', '                    ofrecen estilo moderno y fresco para adolescentes y adultos jóvenes. Descubre una variedad de colores vibrantes, patrones a la moda y cortes contemporáneos que reflejan las últimas', '../Uploads/productos/pexels-polina-tankilevitch-3735641.jpg', '../Uploads/productos/pexels-dom-j-45982.jpg', '../Uploads/productos/pexels-francesco-paggiaro-2294342.jpg', 51, 1, '', 2),
(33, 'Juguetes para mascotas', 30000, '1', 'Explora nuestra colección de juguetes para mascotas en nuestra tienda, diseñados para entretener y satisfacer las necesidades de tus amigos peludos. Desde pelotas masticables hasta juguetes interactiv', '../Uploads/productos/pexels-arina-krasnikova-7726315.jpg', '../Uploads/productos/pexels-helena-jankovičová-kováčová-16395147.jpg', '../Uploads/productos/pexels-josh-sorenson-1739093.jpg', 51, 1, '1', 9),
(34, 'Comidas rapidas', 35000, '1', 'nuestra selección de deliciosas comidas rápidas en nuestra tienda. Desde sabrosas hamburguesas y crujientes papas fritas hasta opciones más ligeras como ensaladas frescas y wraps llenos de sabor', '../Uploads/productos/pexels-spencer-davis-4393021.jpg', '../Uploads/productos/pexels-audy-of-course-19034914.jpg', '../Uploads/productos/pexels-audy-of-course-19055025.jpg', 51, 1, '1', 6),
(35, 'Cuadernos', 25000, '1', 'Descubre la elegancia y funcionalidad en nuestros cuadernos de alta calidad. Con tapas duraderas y páginas resistentes, estos cuadernos son ideales para plasmar tus pensamientos, ideas y apuntes.', '../Uploads/productos/pexels-hermaion-205414.jpg', '../Uploads/productos/pexels-pixabay-159682.jpg', '../Uploads/productos/pexels-pixabay-159865.jpg', 51, 1, '1', 10),
(36, 'prueba', 21221212, '1', '321213qwew', '../Uploads/productos/calabaza.png', '../Uploads/productos/', '../Uploads/productos/', 52, 1, '1', 1);

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
(4, 'Limpieza', 50000, '1 hora', 16, 'Experimenta la comodidad y calidad con nuestro servicio de limpieza. Ofrecemos soluciones profesionales y personalizadas para mantener tu espacio impecable y libre de preocupaciones. Nuestro equipo al', '../Uploads/servicio/pexels-polina-tankilevitch-4440533.jpg', '../Uploads/productos/pexels-matilda-wormwood-4099471.jpg', '../Uploads/productos/pexels-karolina-grabowska-4239031.jpg', 51, 1, 1),
(5, 'Pintor', 5000, '4 horas', 14, 'Transforma tu espacio con nuestro servicio de pintura profesional. Nuestro equipo experto en pintura se encargará de dar vida a tus ideas, ofreciendo una amplia gama de colores y acabados de alta cali', '../Uploads/servicio/pexels-kaboompics-com-6368.jpg', '../Uploads/productos/pexels-malte-luk-1669754.jpg', '../Uploads/productos/pexels-cassidy-muir-2065971.jpg', 51, 1, 1),
(6, 'obrero', 60000, '8 horas', 19, 'Experimenta la excelencia en construcción con nuestro servicio especializado. Desde la planificación hasta la entrega, nuestro equipo profesional se encarga de cada detalle para hacer realidad tu proy', '../Uploads/servicio/pexels-thijs-van-der-weide-1094767.jpg', '../Uploads/productos/pexels-anamul-rezwan-1216589.jpg', '../Uploads/productos/pexels-bidvine-1249611.jpg', 51, 1, 1),
(7, 'jardinero', 50000, '6 horas', 15, 'Embellece tu entorno con nuestro servicio de jardinería especializado. Nos dedicamos a crear espacios verdes vibrantes y acogedores para tu tienda. Desde el diseño paisajístico hasta el mantenimiento ', '../Uploads/servicio/pexels-dương-bá-thành-3833591.jpg', '../Uploads/productos/pexels-karolina-grabowska-4207908.jpg', '../Uploads/productos/pexels-pixabay-162564.jpg', 51, 1, 1);

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
(56, 'dsa', 'sda', 'sd@sad', 0, '5f039b4ef0058a1d652f13d612375a5b', 'Emprendedor', '../Uploads/usuarios/dibujo.png', 2),
(60, 'dsasda', 'sda', 'dsasad@esadfdsdsa', 0, '59b466fd93164953e56bdd1358dc0044', 'Cliente', '../Uploads/usuarios/Grand_Theft_Auto_Online_Logo.svg.png', 1),
(62, 'dsasa', 'dsa', 'dsasad@esadfdsdsadasdassassd', 0, 'b060e34a5140d42baa7a6245f703d971', 'Cliente', '../Uploads/usuarios/Grand_Theft_Auto_Online_Logo.svg.png', 1);

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
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=764;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
