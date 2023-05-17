-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2022 a las 02:53:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agenciaviaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletin`
--

CREATE TABLE `boletin` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boletin`
--

INSERT INTO `boletin` (`id`, `correo`) VALUES
(5, '123@g.com'),
(6, '128218030821@g.com'),
(9, 'aa@gmail.com'),
(8, 'alexandercortes91@aragon.unam.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `cedulaViajero` char(10) NOT NULL,
  `codigoDestino` int(5) NOT NULL,
  `nombreDestino` char(50) NOT NULL,
  `datosDestino` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`cedulaViajero`, `codigoDestino`, `nombreDestino`, `datosDestino`) VALUES
('6-722-932', 508, 'Costa Rica', 'Aeropueto de Rio Hato'),
('8-962-683', 555, 'EEUU', 'San Francisco, California'),
('', 157, 'Mexico', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `cedulaViajero` char(10) NOT NULL,
  `codigoOrigen` int(5) NOT NULL,
  `nombreOrigen` char(50) NOT NULL,
  `datosOrigen` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`cedulaViajero`, `codigoOrigen`, `nombreOrigen`, `datosOrigen`) VALUES
('', 555, 'EUAA', ''),
('', 157, 'Mexico', ''),
('', 507, 'Panamá', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `cedViajero` char(10) NOT NULL,
  `codigoReservacion` int(10) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `estado` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`cedViajero`, `codigoReservacion`, `fecha`, `estado`) VALUES
('8-962-683', 789, '2019-11-03', 'Activo'),
('6-722-932', 3214, '2019-10-24', 'Cancelada'),
('19', 2736, '0000-00-00', 'cancelada'),
('19', 2082, '0000-00-00', 'activa'),
('19', 1891, '0000-00-00', 'activa'),
('19', 2289, '0000-00-00', 'activa'),
('19', 808, '0000-00-00', 'activa'),
('19', 1013, '0000-00-00', 'activa'),
('19', 272, '0000-00-00', 'cancelada'),
('19', 2117, '0000-00-00', 'activa'),
('19', 1565, '0000-00-00', 'activa'),
('19', 2544, '0000-00-00', 'activa'),
('19', 328, '0000-00-00', 'activa'),
('19', 2371, '0000-00-00', 'activa'),
('19', 2062, '0000-00-00', 'activa'),
('19', 1812, '0000-00-00', 'activa'),
('19', 564, '0000-00-00', 'activa'),
('19', 345, '0000-00-00', 'activa'),
('19', 881, '0000-00-00', 'cancelada'),
('19', 1948, '0000-00-00', 'activa'),
('19', 751, '0000-00-00', 'activa'),
('19', 2620, '0000-00-00', 'activa'),
('19', 2640, '0000-00-00', 'activa'),
('12', 1995, '0000-00-00', 'activa'),
('12', 2073, '', 'activa'),
('12', 1941, '', 'activa'),
('12', 1165, '', 'cancelada'),
('12', 1285, ' <br /><b>', 'activa'),
('qq', 2081, ' <br /><b>', 'activa'),
('qq', 416, '11/10/2022', 'activa'),
('qq', 1983, '11/9/2022', 'activa'),
('qq', 1317, '11/8/2022', 'activa'),
('19', 1919, '11/10/2022', 'activa'),
('19', 2185, '11/15/2022', 'activa'),
('19', 2091, '11/11/2022', 'cancelada'),
('19', 2029, '11/9/2022', 'cancelada'),
('19', 13111111, '11/17/2022', 'activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cedulaUser` varchar(50) NOT NULL,
  `username` char(15) NOT NULL,
  `passwor` char(10) NOT NULL,
  `nombre` char(50) NOT NULL,
  `codViaje` varchar(50) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `cedulaUser`, `username`, `passwor`, `nombre`, `codViaje`, `direccion`, `telefono`, `rol_id`) VALUES
(1, '6-722-932', 'admin', 'admin', 'Administrador', '1001', NULL, NULL, 2),
(19, '12', 'alex', 'alex', 'Javier', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', 'Francisco I MAdero', '553829|9', 2),
(22, '12918392', 'alex', 'alex', 'Javier Alexander', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', 'Francisco I MAdero', '553829|9', 2),
(23, 'qq', 'qq', 'qq', 'qq', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', 'aaa', 'a', 2),
(24, '111111', '11', '11', '111111', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', NULL, NULL, 2),
(31, 'adminis', 'adminis', 'adminis', 'adminis', '7307', NULL, NULL, 1),
(32, 'javier', 'javier', 'javier', 'Javier Alexander', '7307', NULL, NULL, 1),
(33, 'alolo', 'alolo', 'alolo', 'alolo', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', NULL, NULL, 2),
(34, 'alololo', 'alololo', 'alololo', 'alololo', '<br />\r\n<b>Warning</b>:  Undefined variable $codVi', 'q', 'q', 2),
(38, '1230', '1230', '1230', '1230', '', NULL, NULL, 2),
(40, '4', '4', '4', '4', '', NULL, NULL, 2),
(41, 'Hola Rameros', 'Hola pirujo', 'Hola Ramer', 'Hola Rameros', '', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje1`
--

CREATE TABLE `viaje1` (
  `codigoViaje` int(10) NOT NULL,
  `numAsientos` int(5) NOT NULL,
  `costoViaje` float NOT NULL,
  `fechaSalida` varchar(20) NOT NULL,
  `fechaRegreso` varchar(20) NOT NULL,
  `horaViaje` time NOT NULL,
  `codigo_Origen` int(5) NOT NULL,
  `codigo_Destino` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaje1`
--

INSERT INTO `viaje1` (`codigoViaje`, `numAsientos`, `costoViaje`, `fechaSalida`, `fechaRegreso`, `horaViaje`, `codigo_Origen`, `codigo_Destino`) VALUES
(4277, 1, 2526.01, '0000-00-00', '0000-00-00', '09:44:00', 5077, 555),
(996, 1, 361.152, '0000-00-00', '0000-00-00', '06:00:00', 5077, 508);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje2`
--

CREATE TABLE `viaje2` (
  `codigo_Viaje` int(10) NOT NULL,
  `num_Asientos` int(5) NOT NULL,
  `costo_Viaje` float NOT NULL,
  `fecha_Salida` varchar(20) NOT NULL,
  `fecha_Regreso` varchar(20) NOT NULL,
  `hora_Viaje` time NOT NULL,
  `cod_Origen` int(5) NOT NULL,
  `cod_Destino` int(5) NOT NULL,
  `ced_Viajero` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaje2`
--

INSERT INTO `viaje2` (`codigo_Viaje`, `num_Asientos`, `costo_Viaje`, `fecha_Salida`, `fecha_Regreso`, `hora_Viaje`, `cod_Origen`, `cod_Destino`, `ced_Viajero`) VALUES
(4277, 1, 2526.01, '0000-00-00', '0000-00-00', '09:44:00', 5077, 555, '12'),
(996, 1, 361.152, '0000-00-00', '0000-00-00', '06:00:00', 5077, 508, '12'),
(2593, 1, 438.102, '0000-00-00', '0000-00-00', '11:05:00', 507, 508, '19'),
(9655, 1, 1674.52, '0000-00-00', '0000-00-00', '06:00:00', 507, 508, '19'),
(147, 5, 721.278, '0000-00-00', '0000-00-00', '09:44:00', 507, 508, '19'),
(1643, 1, 2094.07, '12/1/2022', '11/15/2022', '06:00:00', 5077, 508, 'qq'),
(7489, 1, 1005.48, '11/25/2022', '11/30/2022', '06:00:00', 555, 157, '19'),
(9918, 1, 2524.99, '11/18/2022', '11/9/2022', '06:00:00', 555, 508, '19'),
(3731, 4, 1494.88, '12/20/2022', '12/27/2022', '23:37:00', 507, 508, '19'),
(5964, 7, 359, '12/6/2022', '12/8/2022', '11:05:00', 157, 555, '19'),
(5474, 1, 2055.59, '11/3/2022', '12/31/2022', '20:29:00', 555, 555, '19'),
(7268, 6, 1207.6, '11/17/2022', '12/27/2022', '11:05:00', 507, 555, 'qq'),
(6539, 1, 2896.4, '11/25/2022', '11/9/2022', '11:05:00', 0, 555, 'alololo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajero`
--

CREATE TABLE `viajero` (
  `cedula` char(10) NOT NULL,
  `nombre` char(50) NOT NULL,
  `direccion` char(50) NOT NULL,
  `telefono` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajero`
--

INSERT INTO `viajero` (`cedula`, `nombre`, `direccion`, `telefono`) VALUES
('6-722-932', 'Guillermo Navarro', 'Chitre, Ave. Centenario', '8892127482'),
('8-962-683', 'Fernanda Ramírez', 'Calle José Pepe Burgos', '5568493129');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `codigoViaje` int(10) NOT NULL,
  `numAsientos` int(5) NOT NULL,
  `costo` float NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cedulaViajero` char(10) NOT NULL,
  `codigo_Orgien` int(5) NOT NULL,
  `codigoDestino` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`codigoViaje`, `numAsientos`, `costo`, `fecha`, `hora`, `cedulaViajero`, `codigo_Orgien`, `codigoDestino`) VALUES
(1001, 2, 956.99, '2019-11-30', '15:05:00', '8-962-683', 507, 555),
(1002, 1, 1.852, '2019-10-24', '10:56:00', '6-722-932', 507, 508),
(1001, 2, 956.99, '2019-11-30', '15:05:00', '8-962-683', 507, 555),
(1002, 1, 1.852, '2019-10-24', '10:56:00', '6-722-932', 507, 508),
(1001, 2, 956.99, '2019-11-30', '15:05:00', '8-962-683', 507, 555),
(1002, 1, 1.852, '2019-10-24', '10:56:00', '6-722-932', 507, 508);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletin`
--
ALTER TABLE `boletin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletin`
--
ALTER TABLE `boletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
