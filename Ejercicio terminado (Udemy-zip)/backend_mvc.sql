-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 23:14:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `backend_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `email`, `foto`, `password`, `estado`, `perfil`, `fecha`) VALUES
(35, 'michell34', 'michell34@gmail.com', 'vistas/img/perfil/753.jpg', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2020-08-20 17:42:20'),
(36, 'ever aguirre', 'ever@gmail.com', 'vistas/img/perfil/554.png', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2020-08-20 17:58:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `estado`, `fecha`) VALUES
(1, 'programacion', 'programacion', 1, '2020-06-22 16:32:48'),
(2, 'diseño', 'diseño', 1, '2020-06-22 16:32:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `tipo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `tipo`, `ruta`, `estado`, `titulo`, `detalle`, `precio`, `foto`, `descripcion`, `fecha`) VALUES
(17, 2, '', 'mesa', '1', 'mesa', 'dsadsa', '56', 'vistas/img/productos/default/default.jpg', 'ddsasda', '2020-06-23 00:26:31'),
(19, 1, '', 'taburete', '1', 'taburete', '3223', '67', 'vistas/img/productos/default/default.jpg', 'dsadsa', '2020-06-23 00:27:52'),
(20, 1, '', 'taburete', '1', 'taburete', '3223', '67', 'vistas/img/productos/default/default.jpg', 'dsadsa', '2020-06-23 00:27:55'),
(22, 1, '', 'taburete', '1', 'taburete', '3223', '67', 'vistas/img/productos/default/default.jpg', 'dsadsa', '2020-06-23 00:27:59'),
(23, 1, '', 'taburete', '1', 'taburete', '3223', '67', 'vistas/img/productos/default/default.jpg', 'dsadsa', '2020-06-23 00:27:59'),
(24, 1, '', 'taburete', '1', 'taburete', '3223', '67', 'vistas/img/productos/default/default.jpg', 'dsadsa', '2020-06-23 00:28:01'),
(27, 1, '', 'sanpador', '1', 'sanpador', 'sdfdfds', '60', 'vistas/img/productos/default/default.jpg', 'dsds', '2020-06-23 00:31:04'),
(29, 1, '', 'motor tutbo', '1', 'motor tutbo', 'ryen 5677', '45', 'vistas/img/productos/default/default.jpg', 'ldsadsa', '2020-08-20 16:26:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
(1, 'ever', 'everbtank@gmail.com', 'vistas/img/usuario/user.jpg', '123', '', '1', '2020-06-21 20:12:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
