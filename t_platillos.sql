-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2017 a las 16:34:49
-- Versión del servidor: 5.5.10
-- Versión de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `t_platillos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_platillos`
--

CREATE TABLE IF NOT EXISTS `t_platillos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre`	text	utf8mb4_general_ci,	
  	`precio`	double,	
`imagen`	longblob	
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `t_platillos`
--