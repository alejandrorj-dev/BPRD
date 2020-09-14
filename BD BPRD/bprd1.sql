-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2014 a las 17:34:04
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bprd1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delincuente`
--

CREATE TABLE IF NOT EXISTS `delincuente` (
  `CC_delincuente` int(11) NOT NULL,
  `Primernombre_delin` varchar(45) NOT NULL,
  `Segundonombre_delin` varchar(45) DEFAULT NULL,
  `Primerape_delin` varchar(45) NOT NULL,
  `Segundoape_delin` varchar(45) DEFAULT NULL,
  `Seudonimno_delin` varchar(45) DEFAULT NULL,
  `Fechanac_delin` varchar(45) NOT NULL,
  `Paisnac_delin` varchar(45) NOT NULL,
  `Señales_delin` varchar(45) DEFAULT NULL,
  `Raza_delin` varchar(45) NOT NULL,
  `Direcactual_delin` varchar(45) DEFAULT NULL,
  `Foto_delin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CC_delincuente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais_delito`
--

CREATE TABLE IF NOT EXISTS `pais_delito` (
  `ID_pais` int(11) NOT NULL,
  `Nombre_pais` varchar(45) NOT NULL,
  `Estado_pais` varchar(45) NOT NULL,
  `Ciudad_pais` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prontuario`
--

CREATE TABLE IF NOT EXISTS `prontuario` (
  `ID_prontuario` int(11) NOT NULL,
  `Fecha_crimen_p` varchar(45) NOT NULL,
  `Descripcion_crimen_p` varchar(45) NOT NULL,
  `Cárcel_asign_p` varchar(45) NOT NULL,
  `Tiempo_pagado_p` varchar(45) NOT NULL,
  `Fechaentradacarcel_p` varchar(45) NOT NULL,
  `Fechasalidacarcel_p` varchar(45) NOT NULL,
  `Delincuente_CC_delincuente` int(11) NOT NULL,
  PRIMARY KEY (`ID_prontuario`,`Delincuente_CC_delincuente`),
  KEY `fk_Prontuario_Delincuente_idx` (`Delincuente_CC_delincuente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre1_usuario` varchar(50) NOT NULL,
  `nombre2_usuario` varchar(50) NOT NULL,
  `apellido1_usuario` varchar(50) NOT NULL,
  `apellido2_usuario` varchar(50) NOT NULL,
  `cuenta_usuario` varchar(50) NOT NULL,
  `clave_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre1_usuario`, `nombre2_usuario`, `apellido1_usuario`, `apellido2_usuario`, `cuenta_usuario`, `clave_usuario`) VALUES
(1, 'Danny', 'Mauricio', 'MontaÃ±o', 'Moreno', 'dannymauricio@bprd.com', '123455433'),
(2, 'Willam', 'Andres', 'Higuera', 'PanameÃ±o', 'williamandres@bprd.com', '1234');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prontuario`
--
ALTER TABLE `prontuario`
  ADD CONSTRAINT `fk_Prontuario_Delincuente` FOREIGN KEY (`Delincuente_CC_delincuente`) REFERENCES `delincuente` (`CC_delincuente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
