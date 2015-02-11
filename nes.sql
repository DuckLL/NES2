-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 02 月 11 日 06:55
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
(1, '<ul>\r\n	<li><span style="font-size:36px"><span style="font-family:courier new,courier,monospace">大型活動可以申請的日期是活動前12個禮拜</span></span></li>\r\n	<li><span style="font-size:36px"><span style="font-family:courier new,courier,monospace">排列順序是依據申請時間排列</span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '2015-02-23');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `event`
--

INSERT INTO `event` (`id`, `name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `submittime`, `pass`) VALUES
(21, '廖子慶', '蘭潭攝影社', '學生活動中心二樓（學生會前）', 0, 4, 'asdfja;lsdkjf;asldf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:11', 0),
(22, '廖子慶', '蘭潭攝影社', '學生活動中心二樓（學生會前）', 0, 6, 'asdfja;lsdkjf;asldf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:28', 0),
(23, 'Sometimes', '蘭潭攝影社', '電物系草皮', 0, 4, 'asdfasdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:09:46', 0),
(24, 'ASDF', '蘭潭攝影社', '學生餐廳二樓', 0, 3, 'alsdkfja;lskdjf;aklsdjf;alksdjf;laskdjf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:14:17', 1),
(25, '廖子慶', '蘭潭攝影社', '學生活動中心一樓', 0, 2, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:28:24', 0),
(27, '廖子慶', '蘭潭攝影社', '學生餐廳二樓', 0, 1, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:29:36', 0),
(28, '廖子慶', '蘭潭攝影社', '學生餐廳二樓', 0, 0, 'asdfasdf', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-07 07:29:41', 0),
(31, 'hahaha', '蘭潭攝影社', '學生活動中心一樓', 0, 0, '調查復興航空空難原因，士林地檢署昨天就訊事發當天值班的2位塔台人員，釐清飛機飛離跑道時的狀況，據了解，塔台人員供稱，飛機飛離跑道時一切正常，將飛機通訊轉接給台北近場台後，但近場台一直未能和飛機通訊，因此聯繫塔台，在這中間有雜訊，塔台未聽到駕駛員喊「Mayday」（求救），是事後調錄音才發現。\r\n針對大陸民航專家將參與大陸國台辦發言人馬曉光9日透露，8日晚間已有三名大陸民航專家抵達台灣，這也是兩岸人員首度共同參與空難事件調查。至於身分與職稱他不願透露。\r\n偵辦復興空難有無業務過失責任的士林地檢署，檢察官昨專程到民航局飛航服務總台，就訊事發當天值班的2位值班人員。\r\n根據了解，1名塔台人員因墜機事件衝擊太大，心情無法平復，單位主管發現此狀況，趕緊請心理諮商師輔導該員，並讓他休假幾天才回到崗位上，情況已好轉。\r\n2名塔台人員向檢方表示，失事的班機要飛離跑道時，飛行的高度和方向都正常，因此起飛後，程序上是要由台北近場台接手，塔台也隨即請飛機駕駛連繫近場台。\r\n但近場台人員一直未和飛機駕駛連繫上，又在衛星圖上發現該班機飛行軌跡不對，因此趕緊連繫塔台，塔台於是呼叫駕駛但始終都未獲回應，僅有雜訊，整個過程僅約3分多鐘，後來便接到飛機墜機消息，調閱通訊錄音檔，才聽到駕駛喊「Mayday」的求救聲。\r\n檢方認為，塔台人員所說和飛安會前幾天公布的黑盒子判讀資料大致吻合，檢方也表示，因飛機起飛約3分多鐘便失事，當時即使塔台聽到飛機駕駛喊Mayday的求救聲，應也無法挽救悲劇發生。\r\n另外，檢方昨也傳訊復興航空的機務人員，確認航務訊息及飛機維修紀錄和結構，近期將陸續訊問傷勢漸趨穩定的生還者，還原事發狀況，包括機組員中唯一倖存的空姐黃敬雅。', 'KOSIR', '廖子慶', '0978150802', '蔡秉諺', '0900000000', 'duck', '2015-02-10 09:40:50', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `name`, `school`, `email`, `phone`) VALUES
(6, 'admin', '66b65567cedbc743bda3417fb813b9ba', '管理員', '1357924680', 'admin@mail.ncyu.edu.tw', '0000000000'),
(7, 'duck', '63d6ad0c1e745ab14f44e07a090bfd32', '廖子慶', '1013045', 'aa334477@hotmail.com', '0978150802'),
(8, 'nes', '3dcb71a0299a249f498846fe3f19f9fb', '開發者', '000000', '00@00', '00000');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
