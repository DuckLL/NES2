-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 02 月 13 日 03:38
-- 伺服器版本: 5.6.22
-- PHP 版本： 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `nes`
--

-- --------------------------------------------------------

--
-- 資料表結構 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL,
  `about` varchar(3000) NOT NULL,
  `firstday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `config`
--

INSERT INTO `config` (`id`, `about`, `firstday`) VALUES
(1, '<ul>\r\n	<li><span style="font-family:comic sans ms,cursive"><strong><span style="font-size:48px">大型活動可以申請的日期是活動前<span style="color:#FF0000">12個禮拜</span></span></strong></span></li>\r\n	<li>\r\n	<h2><span style="font-family:comic sans ms,cursive"><strong><span style="font-size:48px">排列順序是<span style="background-color:#FFFFE0">依據申請時間排列 </span>&nbsp;<img alt="" src="http://upload.wikimedia.org/wikipedia/zh/6/67/NCYU.svg" style="height:300px; width:300px" /></span></strong></span></h2>\r\n	</li>\r\n</ul>\r\n', '2015-02-23');

-- --------------------------------------------------------

--
-- 資料表結構 `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `other` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `leader` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `leader2` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL,
  `applicant` varchar(30) NOT NULL,
  `submittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `event`
--

INSERT INTO `event` (`id`, `name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `submittime`, `pass`) VALUES
(49, '0', '蘭潭攝影社', '學生活動中心一樓', 0, 0, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(50, '1', '蘭潭攝影社', '學生活動中心一樓舞台', 0, 1, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 1),
(51, '2', '蘭潭攝影社', '學生活動中心二樓', 0, 2, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(52, '3', '蘭潭攝影社', '學生餐廳二樓', 0, 3, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(53, '4', '蘭潭攝影社', '電物系草皮', 0, 4, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(54, '5', '蘭潭攝影社', '舊福利社廣場+走道', 0, 5, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', -1),
(55, '6', '蘭潭攝影社', '學生活動中心一樓', 0, 6, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(56, '7', '蘭潭攝影社', '學生活動中心一樓舞台', 0, 7, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(57, '8', '蘭潭攝影社', '學生活動中心二樓', 0, 8, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(58, '9', '蘭潭攝影社', '學生餐廳二樓', 0, 9, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(59, '10', '蘭潭攝影社', '電物系草皮', 0, 10, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(60, '11', '蘭潭攝影社', '舊福利社廣場+走道', 0, 11, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(61, '12', '蘭潭攝影社', '學生活動中心一樓', 0, 12, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(62, '13', '蘭潭攝影社', '學生活動中心一樓舞台', 0, 13, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(63, '14', '蘭潭攝影社', '學生活動中心二樓', 0, 14, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(64, '15', '蘭潭攝影社', '學生餐廳二樓', 0, 15, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(65, '16', '蘭潭攝影社', '電物系草皮', 0, 16, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(66, '17', '蘭潭攝影社', '舊福利社廣場+走道', 0, 17, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', -1),
(67, '18', '蘭潭攝影社', '學生活動中心一樓', 0, 18, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(68, '19', '蘭潭攝影社', '學生活動中心一樓舞台', 0, 19, '<p>test</p>\r\n\r\n<p style="text-align: right;"><span style="font-size:20px"><span style="font-family:comic sans ms,cursive">test</span></span></p>\r\n\r\n<p><span class="marker">test</span></p>\r\n\r\n<h1 style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);"><span class="marker">test</span></h1>\r\n\r\n<p><span style="color:#00FF00"><span style="background-color:#A52A2A">test</span></span></p>\r\n', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:02:59', 0),
(69, 'test', '蘭潭攝影社', '學生活動中心一樓', 0, 0, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 1),
(70, 'test', '蘭潭攝影社', '學生活動中心二樓', 0, 4, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', -1),
(71, 'test', '蘭潭攝影社', '電物系草皮', 0, 16, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 0),
(72, 'test', '蘭潭攝影社', '學生活動中心一樓', 0, 16, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 0),
(73, 'test', '蘭潭攝影社', '學生活動中心二樓', 0, 4, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', -1),
(74, 'test', '蘭潭攝影社', '電物系草皮', 0, 0, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 1),
(75, 'test', '蘭潭攝影社', '學生活動中心一樓', 0, 4, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 0),
(76, 'test', '蘭潭攝影社', '學生活動中心二樓', 0, 16, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 0),
(77, 'test', '蘭潭攝影社', '電物系草皮', 0, 16, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', -1),
(78, 'test', '蘭潭攝影社', '學生活動中心一樓', 0, 4, '', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-13 03:04:55', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `school` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `name`, `school`, `email`, `phone`) VALUES
(1, 'admin', '66b65567cedbc743bda3417fb813b9ba', '管理員', '1357924680', 'admin@mail.ncyu.edu.tw', '0000000000'),
(2, 'duck', '63d6ad0c1e745ab14f44e07a090bfd32', '廖子慶', '1013045', 'aa334477@hotmail.com', '0978150802'),
(73, 'test0', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(74, 'test1', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(75, 'test2', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(76, 'test3', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(77, 'test4', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(78, 'test5', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(79, 'test6', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(80, 'test7', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(81, 'test8', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(82, 'test9', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(83, 'test10', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(84, 'test11', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(85, 'test12', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(86, 'test13', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(87, 'test14', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(88, 'test15', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(89, 'test16', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(90, 'test17', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(91, 'test18', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(92, 'test19', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(93, 'test20', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(94, 'test21', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(95, 'test22', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(96, 'test23', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(97, 'test24', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(98, 'test25', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(99, 'test26', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(100, 'test27', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(101, 'test28', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(102, 'test29', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(103, 'test30', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(104, 'test31', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(105, 'test32', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(106, 'test33', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(107, 'test34', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(108, 'test35', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(109, 'test36', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(110, 'test37', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(111, 'test38', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(112, 'test39', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(113, 'test40', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(114, 'test41', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(115, 'test42', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(116, 'test43', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(117, 'test44', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(118, 'test45', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(119, 'test46', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(120, 'test47', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(121, 'test48', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(122, 'test49', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(123, 'test50', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(124, 'test51', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(125, 'test52', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(126, 'test53', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(127, 'test54', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(128, 'test55', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(129, 'test56', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(130, 'test57', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(131, 'test58', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(132, 'test59', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(133, 'test60', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(134, 'test61', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(135, 'test62', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(136, 'test63', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(137, 'test64', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(138, 'test65', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(139, 'test66', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(140, 'test67', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(141, 'test68', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(142, 'test69', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(143, 'test70', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(144, 'test71', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(145, 'test72', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(146, 'test73', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(147, 'test74', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(148, 'test75', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(149, 'test76', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(150, 'test77', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(151, 'test78', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(152, 'test79', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(153, 'test80', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(154, 'test81', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(155, 'test82', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(156, 'test83', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(157, 'test84', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(158, 'test85', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(159, 'test86', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(160, 'test87', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(161, 'test88', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(162, 'test89', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(163, 'test90', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(164, 'test91', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(165, 'test92', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(166, 'test93', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(167, 'test94', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(168, 'test95', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(169, 'test96', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(170, 'test97', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(171, 'test98', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000'),
(172, 'test99', '54640093f5e4052d9aeda7f90b0b6324', 'test', '00000', '00@00', '0000000000');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`id`, `name`) VALUES
(1, '學生活動中心一樓'),
(2, '學生活動中心一樓舞台'),
(3, '學生活動中心二樓'),
(4, '學生餐廳二樓'),
(5, '電物系草皮'),
(6, '舊福利社廣場+走道');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=173;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
