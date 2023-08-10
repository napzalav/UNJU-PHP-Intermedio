-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2023 a las 03:42:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `m3tp9_alavilacesar_34621047`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_Movimientos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` float NOT NULL,
  `forma de pago` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `Persona_idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_Movimientos`, `fecha`, `monto`, `forma de pago`, `tipo`, `descripcion`, `Persona_idPersona`) VALUES
(5, '1812-08-02', 10.5, 'efectivo', 'egreso', 'compra de caballo por cumpleaños n34', 3),
(6, '1845-01-01', 100, 'cheque', 'egreso', 'compra de papel para escribir Civilización y Barbarie', 4),
(7, '1817-04-28', 1000, 'efectivo', 'ingreso', 'Victoria en la Batalla de Rosario de Lerma, se obtuvieron diversas especias y ganado', 1),
(8, '1816-03-03', 1750, 'transferencia', 'ingreso', 'ataque al general español La Hera cerca de Villar. Se recuperan fusiles, caballos, estandarte enemigo y rescate de su esposo', 2),
(9, '1812-01-01', 200, 'efectivo', 'egreso', 'compra de tela para confeccionar la Bandera Nacional e izarla el 27 de febrero de 1812 por primera vez, a orillas del río Paraná', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_Persona` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_Persona`, `nombre`, `rol`) VALUES
(1, 'Martin Miguel de Guemes', 'hijo'),
(2, 'Juana Azurduy', 'hija'),
(3, 'José de San Martin', 'padre'),
(4, 'Domingo Faustino Sarmiento', 'hijo'),
(5, 'Manuel Belgrano', 'tio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_Movimientos`),
  ADD KEY `personas_id_persona_movimientos` (`Persona_idPersona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_Persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_Movimientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_Persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `personas_id_persona_movimientos` FOREIGN KEY (`Persona_idPersona`) REFERENCES `persona` (`id_Persona`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
