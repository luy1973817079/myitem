-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 12 月 15 日 08:53
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myitem`
--

-- --------------------------------------------------------

--
-- 表的结构 `u_user`
--

CREATE TABLE IF NOT EXISTS `u_user` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_username` varchar(30) NOT NULL,
  `u_password` varchar(16) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_tel` varchar(15) NOT NULL,
  `u_area` varchar(50) NOT NULL,
  `u_sex` varchar(4) NOT NULL,
  `u_hobby` varchar(30) NOT NULL,
  `u_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `u_user`
--

INSERT INTO `u_user` (`u_id`, `u_username`, `u_password`, `u_email`, `u_tel`, `u_area`, `u_sex`, `u_hobby`, `u_reg_date`) VALUES
(1, 'admin', '123', 'admin@offcn.com', '15511112222', '河北', '男', '旅游|登山', '2017-10-26 06:17:10'),
(2, 'ujiuye', '123456', 'ujiuye@u.com', '15812341234', '山东', '女', '音乐|旅游|登山', '2017-10-26 06:18:18'),
(3, 'uweb', '123', '1111@qq.com', '15812341234', '河南', '女', '旅游|登山', '2017-10-26 06:34:27'),
(4, 'offcn', 'qqqqq', 'offcn@offcn.com', '15812341234', '山东', '男', '音乐|旅游', '2017-10-26 09:12:45'),
(5, 'offcnweb', '1212', 'offcnweb@offcn.com', '18588888888', '山东', '女', '音乐', '2017-10-26 11:42:49'),
(6, 'ujiuyeweb', '1111', 'ujiuye@u.com', '18588888888', '山东', '女', '旅游', '2017-10-26 11:43:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
