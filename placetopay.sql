-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-04-2019 a las 03:23:09
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `placetopay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `IdComprador` int(10) NOT NULL,
  `idPayment` int(11) NOT NULL,
  `IdCompra` int(10) NOT NULL AUTO_INCREMENT,
  `Estatus` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCompra`),
  KEY `IdComprador` (`IdComprador`),
  KEY `idPayment` (`idPayment`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IdComprador`, `idPayment`, `IdCompra`, `Estatus`) VALUES
(1, 1, 1, 'Aprobado'),
(4, 4, 2, 'Aprobado'),
(6, 5, 3, ''),
(7, 4, 4, ''),
(4, 3, 5, ''),
(2, 5, 6, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

DROP TABLE IF EXISTS `comprador`;
CREATE TABLE IF NOT EXISTS `comprador` (
  `IdComprador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` text NOT NULL,
  PRIMARY KEY (`IdComprador`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comprador`
--

INSERT INTO `comprador` (`IdComprador`, `Nombre`, `Email`, `Telefono`, `Direccion`) VALUE;
(4, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(5, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(6, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(7, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(8, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(9, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(10, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(11, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(12, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(13, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(14, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(15, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(16, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(17, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(18, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(19, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(20, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(21, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(22, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(23, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(24, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(25, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(26, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(27, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(28, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(29, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(30, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(31, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(32, 'Adrian Yepe', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(33, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(34, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(35, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(36, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(37, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela'),
(38, 'Adrian Yepez', 'adr27yepez@gmail.com', '04241700528', 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `idPayment` int(11) NOT NULL AUTO_INCREMENT,
  `Currency` varchar(10) NOT NULL,
  `Valor` int(10) NOT NULL,
  `IVA` int(10) NOT NULL,
  `Referencia` varchar(20) NOT NULL,
  `FechaExp` date NOT NULL,
  `AgenteNav` varchar(30) NOT NULL,
  PRIMARY KEY (`idPayment`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`idPayment`, `Currency`, `Valor`, `IVA`, `Referencia`, `FechaExp`, `AgenteNav`) VALUES
(1, 'USD', 1000, 160, 'adadsada', '2000-01-10', 'Firefox'),
(2, '$currency', 1000, 100, '$referencia', '2000-01-01', '$BROWSER'),
(3, 'USD', 1000, 160, '01010', '2019-02-21', 'Mozilla'),
(4, 'USD', 1000, 160, '01010', '2019-02-21', 'BROWSER'),
(5, 'USD', 1000, 160, '01010', '2019-02-21', '::1'),
(6, 'USD', 1000, 160, '01010', '2019-02-21', 'Firefox'),
(7, 'USD', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(8, 'USD', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(9, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(10, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(11, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(12, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(13, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(14, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(15, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(16, 'PSA', 200, 32, 'Dinero', '2019-04-25', 'Chrome'),
(17, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer'),
(18, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer'),
(19, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer'),
(20, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer'),
(21, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer'),
(22, 'Credits', 10000, 1600, 'Transfer', '2019-04-27', 'Explorer');

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
