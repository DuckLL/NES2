-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 03 月 03 日 18:49
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
(1, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style="font-family:comic sans ms,cursive"><strong><span style="font-size:48px">大型活動可以申請的日期是活動前<span style="color:#FF0000">12個禮拜</span></span></strong></span></li>\r\n	<li>\r\n	<h2><span style="font-family:comic sans ms,cursive"><strong><span style="font-size:48px">排列順序是<span style="background-color:#FFFFE0">依據申請時間排列 </span>&nbsp;</span></strong></span></h2>\r\n	</li>\r\n</ul>\r\n', '2015-02-23');

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
  `startdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `week` int(11) NOT NULL,
  `week2` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `leader` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `leader2` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL,
  `plan` varchar(300) NOT NULL,
  `applicant` varchar(30) NOT NULL,
  `submittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pass` int(11) NOT NULL,
  `withdraw` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `event`
--

INSERT INTO `event` (`id`, `name`, `group`, `place`, `other`, `startdate`, `finishdate`, `week`, `week2`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `plan`, `applicant`, `submittime`, `pass`, `withdraw`) VALUES
(103, '資工週', '資工系', '學活一樓＋學活一樓小舞台', 0, '2015-03-23', '2015-03-27', 4, 4, '<p>http://www<span style="color:#FFA500">.ncyu.edu.tw/csie</span><span style="font-size:72px"><span style="color:#FFA500">/http://</span>www.ncyu.edu.tw/csie/http:/<span style="background-color:#008000">/ww</span>w.ncyu.edu.tw/csie/</span></p>\r\n', '科', '廖子慶', '0978150802', '蘇', '0900000000', 'http://www.ncyu.edu.tw/csie/', 'csie', '2015-03-03 18:42:43', 0, ''),
(104, '電資小活動', '資工系', '學活一樓小舞台', 0, '2015-03-30', '2015-04-01', 5, 5, '', '科', '廖子慶', '0978150802', '蘇', '0900000000', 'http://www.ncyu.edu.tw/csie/', 'csie', '2015-03-03 18:47:22', 1, ''),
(105, 'Sometimes攝影展', '攝影社', '學活一樓', 0, '2015-03-09', '2015-03-20', 2, 3, '<p>http://student.ncyu.edu.tw/~club0031/#</p>\r\n\r\n<p>http://student.ncyu.edu.tw/~club0031/#</p>\r\n\r\n<p>http://student.ncyu.edu.tw/~club0031/#</p>\r\n', '科', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'http://student.ncyu.edu.tw/~club0031/#', 'duck', '2015-03-03 18:47:35', -1, '<p>指導老師錯誤</p>\r\n'),
(106, '攝影社服務學習', '攝影社', '電物系草皮', 0, '2015-03-12', '2015-03-13', 2, 2, '<p>顆顆</p>\r\n', '科', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'http://student.ncyu.edu.tw/~club0031/#', 'duck', '2015-03-03 18:47:02', 2, '');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `groups` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `school` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `groups`, `name`, `school`, `email`, `phone`) VALUES
(1, 'admin', '66b65567cedbc743bda3417fb813b9ba', '', '管理員', '1357924680', 'admin@mail.ncyu.edu.tw', '0000000000'),
(2, 'duck', '63d6ad0c1e745ab14f44e07a090bfd32', '攝影社', '廖子慶', '0000000', 'xxx@gmail.com', '0900000000'),
(6, 'csie', '23e85fa756cfb8ccd9a6b4b5a5952fef', '資工系', '蘇', '0000000', 'xxx@gmail.com', '0912345678');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`id`, `name`) VALUES
(10, '學活一樓'),
(11, '學活二樓'),
(12, '學活一樓小舞台'),
(13, '電物系草皮'),
(14, '舊福利社'),
(15, '學活一樓＋學活一樓小舞台'),
(16, '學活一樓＋學活二樓');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
