-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 01-08-2020 a las 22:42:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `ID` int(99) NOT NULL,
  `titulo` varchar(99) NOT NULL,
  `contenido` varchar(99) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`ID`, `titulo`, `contenido`, `fecha`, `nombre`) VALUES
(1, 'adasdad', 'asdsadad', '2020-07-31', 'william'),
(2, 'asdasdsa', 'dasdsad', '2020-07-31', 'jose'),
(3, 'asdsa', 'dadsada', '2020-07-31', 'william'),
(4, 'yo', '', '0000-00-00', ''),
(5, 'safds', 'sadsf', '0000-00-00', 'william'),
(6, 'jo', 'jp', '0000-00-00', 'william'),
(8, 'asdsad', 'sdsadsa', '0000-00-00', 'jose'),
(9, 'asda', 'sdadas', '0000-00-00', 'jose'),
(10, 'sadadsa', 'dasda', '0000-00-00', 'william');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(99) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `apellido` varchar(99) NOT NULL,
  `foto` varchar(99) NOT NULL,
  `correo` varchar(99) NOT NULL,
  `nombreU` varchar(99) NOT NULL,
  `contraseña` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `apellido`, `foto`, `correo`, `nombreU`, `contraseña`) VALUES
(1, 'william', 'quezada', 'sdadad', 'sadsadadsad', 'william', 'Chiquin12'),
(2, 'jose', 'sadasdad', '43952928_278165866152249_3052013007602188288_n.jpg', 'william22711@gmail.com', 'jose', 'Chiquin12'),
(3, 'santo', 'sadsadsa', 'image (1).jpg', 'william22711@gmail.com', 'santo', 'Chiquin12'),
(4, 'yo', 'yo', '', 'yo', 'yo', 'yo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
