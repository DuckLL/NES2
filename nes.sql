-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 02 月 09 日 06:08
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
  `firstday` date NOT NULL,
  `backup1` varchar(30) NOT NULL,
  `backup2` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `config`
--

INSERT INTO `config` (`id`, `about`, `firstday`, `backup1`, `backup2`) VALUES
(1, 'Coming Soon~', '2015-02-23', '', '');

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
  `pass` int(11) NOT NULL,
  `backup1` varchar(30) NOT NULL,
  `backup2` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `event`
--

INSERT INTO `event` (`id`, `name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `submittime`, `pass`, `backup1`, `backup2`) VALUES
(21, '廖子慶', '蘭潭攝影社', '學生活動中心二樓（學生會前）', 0, 4, 'asdfja;lsdkjf;asldf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:11', 0, '', ''),
(22, '廖子慶', '蘭潭攝影社', '學生活動中心二樓（學生會前）', 0, 6, 'asdfja;lsdkjf;asldf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:28', 0, '', ''),
(23, 'Sometimes', '蘭潭攝影社', '電物系草皮', 0, 4, 'asdfasdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:46', 0, '', ''),
(24, 'ASDF', '蘭潭攝影社', '學生餐廳二樓', 0, 3, 'alsdkfja;lskdjf;aklsdjf;alksdjf;laskdjf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:14:17', 1, '', ''),
(25, '廖子慶', '蘭潭攝影社', '學生活動中心一樓', 0, 2, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:28:24', 0, '', ''),
(26, '廖子慶', '蘭潭攝影社', '學生餐廳二樓', 0, 0, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:29:30', 0, '', ''),
(27, '廖子慶', '蘭潭攝影社', '學生餐廳二樓', 0, 1, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:29:36', 0, '', ''),
(28, '廖子慶', '蘭潭攝影社', '學生餐廳二樓', 0, 0, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:29:41', 0, '', ''),
(29, '鴨子的逆襲', '蘭潭攝影社', '學生活動中心一樓', 0, 0, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:45:12', 0, '', ''),
(30, '廖子慶', '蘭潭攝影社', '學生活動中心一樓', 0, 0, 'a''sdfjq''wiejr''qiwejr''qiwejr''qiwejr''', 'KOSIR', '廖子慶', 'ASDF''''''', '蔡秉諺', '0900000000', 'duck', '2015-02-07 08:14:28', 0, '', '');

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
  `phone` varchar(30) NOT NULL,
  `backup1` varchar(30) NOT NULL,
  `backup2` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `name`, `school`, `email`, `phone`, `backup1`, `backup2`) VALUES
(6, 'admin', '66b65567cedbc743bda3417fb813b9ba', '管理員', '00000', '00@00', '00000', '', ''),
(7, 'duck', '63d6ad0c1e745ab14f44e07a090bfd32', '廖子慶', '1013045', 'aa334477@hotmail.com', '0978150802', '', ''),
(8, 'nes', '3dcb71a0299a249f498846fe3f19f9fb', '開發者', '000000', '00@00', '00000', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `backup1` varchar(30) NOT NULL,
  `bakup2` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`id`, `name`, `backup1`, `bakup2`) VALUES
(1, '學生活動中心一樓', '', ''),
(2, '學生活動中心一樓舞台', '', ''),
(3, '學生活動中心二樓', '', ''),
(4, '學生餐廳二樓', '', ''),
(5, '電物系草皮', '', ''),
(6, '舊福利社廣場+走道', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
