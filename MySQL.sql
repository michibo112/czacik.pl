-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 17 Lip 2013, 12:14
-- Wersja serwera: 5.1.66
-- Wersja PHP: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `czat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `alias`
--

CREATE TABLE IF NOT EXISTS `alias` (
  `alias` varchar(255) NOT NULL,
  `full` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `time` int(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `motd`
--

CREATE TABLE IF NOT EXISTS `motd` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `nick` varchar(20) NOT NULL,
  `nr` int(255) NOT NULL,
  `online` tinyint(4) NOT NULL,
  `staff` int(10) NOT NULL DEFAULT '0',
  `banned` int(11) NOT NULL DEFAULT '0',
  `register_time` int(255) NOT NULL,
  `ban_reason` text NOT NULL,
  `echo` int(11) NOT NULL DEFAULT '1',
  `opis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
