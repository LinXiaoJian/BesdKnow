-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-03-23 13:14:56
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `besd_know`
--

-- --------------------------------------------------------

--
-- 表的结构 `know_bookmark`
--

CREATE TABLE IF NOT EXISTS `know_bookmark` (
  `bid` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `rid` int(20) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `know_cited`
--

CREATE TABLE IF NOT EXISTS `know_cited` (
  `cid` int(20) NOT NULL AUTO_INCREMENT,
  `rid` int(20) NOT NULL,
  `citations` int(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `know_repository`
--

CREATE TABLE IF NOT EXISTS `know_repository` (
  `rid` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `sort` varchar(20) NOT NULL,
  `contributor` varchar(20) NOT NULL,
  `version` int(5) NOT NULL,
  `state` varchar(20) NOT NULL,
  `requires` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `know_sessions`
--

CREATE TABLE IF NOT EXISTS `know_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `know_set`
--

CREATE TABLE IF NOT EXISTS `know_set` (
  `sid` int(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `know_user`
--

CREATE TABLE IF NOT EXISTS `know_user` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `auth` int(2) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `know_user`
--

INSERT INTO `know_user` (`uid`, `username`, `password`, `auth`) VALUES
(1, 'admin', 'admin', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
