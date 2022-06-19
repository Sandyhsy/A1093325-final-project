-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-19 04:57:48
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `sandystudioacc`
--

-- --------------------------------------------------------

--
-- 資料表結構 `accorder`
--

CREATE TABLE `accorder` (
  `name` varchar(10) NOT NULL,
  `product` varchar(20) NOT NULL,
  `many` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `accorder`
--

INSERT INTO `accorder` (`name`, `product`, `many`, `total_price`, `state`) VALUES
('Sandy', '霧金氣質不規則圓圈耳環', 2, 520, 0),
('測試', '金色線條透明半圓耳環', 1, 260, 2),
('測試', '韓劇男朋友同款橢圓套環耳環(銀)', 2, 360, 2),
('測試', '珍珠指間花戒指', 2, 550, 2),
('測試', '金屬線條耳環顯臉長款', 1, 165, 2),
('瑜', '簡約金屬珍珠戒指組4件組', 1, 160, 1),
('瑜', '簡約復古純色厚髮箍(白)', 2, 300, 1),
('瑜', '小金豆水滴耳環', 1, 350, 1),
('Test', '不對稱豹紋方形耳環', 2, 560, 0),
('Test', '韓國古典優雅鬱金香耳環', 1, 210, 0),
('Test', '韓系透明亞克力水晶珠戒指4件套(深咖啡)', 1, 180, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `accproduct`
--

CREATE TABLE `accproduct` (
  `num` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sell` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `accproduct`
--

INSERT INTO `accproduct` (`num`, `name`, `sell`, `sale`, `cost`, `material`, `stock`, `image`, `state`) VALUES
(1, '    個性圓圈方塊幾何耳環', 220, 160, 80, '    合金', 3, 'Photo_1654667693.jpg', 1),
(2, '三角黑白巧拼幾何耳環', 165, 115, 55, '合金', 4, 'Photo_1654667850.jpg', 1),
(3, '金屬線條耳環顯臉長款', 165, 115, 55, '合金', 4, 'Photo_1654668402.jpg', 1),
(4, '  個性時尚三角垂耳耳環', 290, 200, 100, '  合金', 3, 'Photo_1654668545.jpg', 1),
(5, '不對稱圓形組合耳環(粉)', 280, 225, 140, '合金', 3, 'Photo_1654686691.jpg', 1),
(6, '霧銀大C耳環(針)優雅款', 320, 210, 105, '合金', 3, 'Photo_1654686682.jpg', 1),
(7, '不對稱圓形組合耳環(綠)', 280, 225, 140, '合金', 2, 'Photo_1654686705.jpg', 1),
(8, '扭轉小C字鋼針耳環(鎳)', 250, 200, 100, '鋼', 5, 'Photo_1654668676.jpg', 1),
(9, '扭轉小C字鋼針耳環(霧銀)', 250, 150, 100, '鋼', 2, 'Photo_1654668692.jpg', 1),
(10, '扭轉小C字鋼針耳環(玫瑰金)', 250, 200, 100, '鋼', 2, 'Photo_1654668713.jpg', 1),
(11, '金色方形耳環', 150, 100, 45, '合金', 2, 'Photo_1654668730.jpg', 1),
(12, '不對稱豹紋方形耳環', 280, 220, 140, '合金', 4, 'Photo_1654668755.jpg', 1),
(13, '小姐姐氣質款垂三角耳環', 280, 200, 140, '合金', 5, 'Photo_1654668775.jpg', 1),
(14, '金色垂墜方塊組合耳環', 250, 200, 120, '合金', 2, 'Photo_1654668801.jpg', 1),
(15, '霧金氣質不規則圓圈耳環', 260, 100, 100, '合金', 3, 'Photo_1654668833.jpg', 1),
(16, '金屬木頭組合垂墜款耳環 金', 280, 220, 140, '合金', 2, 'Photo_1654668878.jpg', 1),
(17, '金色線條透明半圓耳環', 260, 150, 85, '合金', 2, 'Photo_1654672421.jpg', 1),
(18, '韓劇男朋友同款橢圓套環耳環(金)', 180, 120, 60, '925銀', 5, 'Photo_1654672460.jpg', 1),
(19, '韓劇男朋友同款橢圓套環耳環(銀)', 180, 120, 60, '925銀', 5, 'Photo_1654672477.jpg', 1),
(20, '歐美浮誇幾何木質長款耳環', 220, 130, 65, '合金', 5, 'Photo_1654672508.jpg', 1),
(21, '時尚貝殼三角耳環', 200, 100, 16, '合金', 5, 'Photo_1654672534.jpg', 1),
(22, '簡約款方形簍空珍珠長款耳環', 185, 110, 55, '合金', 2, 'Photo_1654672562.jpg', 1),
(23, '韓劇內在美925銀針個性圓圈', 165, 100, 55, '925銀', 3, 'Photo_1654672581.jpg', 1),
(24, '簡約百搭愛心垂墜耳環', 210, 140, 69, '合金', 5, 'Photo_1654672603.jpg', 1),
(25, '韓國清新海洋壓克力耳環', 200, 170, 77, '925銀', 2, 'Photo_1654672644.jpg', 1),
(26, '韓國復古方形壓克力耳環', 190, 162, 60, '925銀', 2, 'Photo_1654672670.jpg', 1),
(27, '韓國簡約線條壓克力耳環', 190, 162, 70, '925銀', 2, 'Photo_1654672681.jpg', 1),
(28, '韓國小巧珍珠硬幣耳環', 290, 247, 80, '925銀', 2, 'Photo_1654672704.jpg', 1),
(29, '韓國手繪戀愛中情侶耳環', 235, 200, 77, '925銀', 2, 'Photo_1654672728.jpg', 1),
(30, '韓國經典珍珠垂墜耳環', 285, 242, 80, '925銀', 2, 'Photo_1654672741.jpg', 1),
(31, '韓國古典優雅鬱金香耳環', 210, 179, 85, '925銀', 2, 'Photo_1654672754.jpg', 1),
(32, '個性字母牌鎖骨項鏈', 250, 213, 41, '鈦鋼', 1, 'Photo_1654672775.jpg', 1),
(33, '簡約淡水珍珠鎖骨練(鐘楚曦同款)', 250, 213, 90, '銅', 2, 'Photo_1654672793.jpg', 1),
(34, '正方貝殼輕奢項鏈', 185, 156, 62, '鈦鋼', 2, 'Photo_1654672808.jpg', 1),
(35, '優雅一字垂墜珍珠項鍊', 175, 149, 29, '淡水珍珠', 2, 'Photo_1654672822.jpg', 1),
(36, '復古愛心寬開口戒指', 210, 179, 129, '925銀', 2, 'Photo_1654672844.jpeg', 1),
(37, '韓國菱格戒指', 320, 272, 220, '925銀', 2, 'Photo_1654672865.jpg', 1),
(38, '韓國圓珠戒指', 200, 170, 106, '925銀', 2, 'Photo_1654672876.jpg', 1),
(39, '韓系透明亞克力水晶珠戒指4件套(深咖啡)', 180, 153, 38, '合金', 2, 'Photo_1654672896.jpg', 1),
(40, '韓系透明亞克力水晶珠戒指4件套(橘色)', 180, 153, 38, '合金', 2, 'Photo_1654672913.jpg', 1),
(41, '韓系透明亞克力水晶珠戒指4件套(米白色)', 180, 153, 38, '合金', 2, 'Photo_1654672923.jpg', 1),
(42, '抽拉式愛心鍊戒指', 175, 150, 72, '925銀', 2, 'Photo_1654672935.jpg', 1),
(43, '韓國壓克力透明石耳環(白)', 250, 200, 114, '925銀', 3, 'Photo_1654672972.jpg', 1),
(44, '韓國壓克力透明石耳環(藍)', 250, 200, 114, '925銀', 3, 'Photo_1654673047.jpg', 1),
(45, '韓國壓克力透明石耳環(咖啡)', 250, 200, 114, '925銀', 3, 'Photo_1654673061.jpg', 1),
(46, '韓國壓克力透明石耳環(黑)', 250, 200, 114, '925銀', 3, 'Photo_1654673078.jpg', 1),
(47, '正韓復古愛心項鍊(粉紫)', 250, 200, 130, '925銀', 3, 'Photo_1654673376.jpg', 1),
(48, '正韓復古愛心項鍊(粉)', 250, 200, 130, '925銀', 3, 'Photo_1654673390.jpg', 1),
(49, '正韓復古愛心項鍊(紅)', 250, 200, 130, '925銀', 3, 'Photo_1654673400.jpg', 1),
(50, '正韓復古愛心項鍊(寶寶藍)', 250, 200, 130, '925銀', 3, 'Photo_1654673413.jpg', 1),
(51, '鎖骨練組合', 250, 200, 140, '925銀', 1, 'Photo_1654673495.jpg', 1),
(52, '月光石愛心項鍊', 250, 200, 200, '925銀', 2, 'Photo_1654673517.jpg', 1),
(53, '珍珠指間花戒指', 275, 220, 129, '淡水珍珠', 5, 'Photo_1654673690.jpg', 1),
(54, '壓克力笑臉戒指', 180, 144, 51, '壓克力', 12, 'Photo_1654673800.jpg', 1),
(55, '簡約金屬珍珠戒指組4件組', 160, 128, 36, '淡水珍珠', 4, 'Photo_1654673819.jpg', 1),
(56, '波光粼粼素圈戒指4.8', 100, 80, 25, '合金', 3, 'Photo_1654673836.jpg', 1),
(57, '正韓嘎瑪水滴珍珠(銀)', 250, 200, 177, '925銀', 3, 'Photo_1654673866.jpg', 1),
(58, '正韓嘎瑪水滴珍珠(金)', 250, 200, 177, '925銀', 3, 'Photo_1654673876.jpg', 1),
(59, '正韓不規則暈染耳環(白)', 250, 200, 177, '925銀', 3, 'Photo_1654673898.jpg', 1),
(60, '正韓不規則暈染耳環(咖)', 250, 200, 177, '925銀', 3, 'Photo_1654673910.jpg', 1),
(61, '正韓扭轉髮帶', 235, 188, 130, '棉', 8, 'Photo_1654673969.jpg', 1),
(62, '復古珍珠糖葫蘆', 180, 144, 22, '合金', 3, 'Photo_1654673988.jpg', 1),
(63, '金樹葉小耳環', 100, 80, 25, '合金', 3, 'Photo_1654674007.jpg', 1),
(64, '流水珍珠耳環', 130, 104, 30, '合金', 3, 'Photo_1654674024.jpg', 1),
(65, '枝葉藤蔓小C圈', 130, 104, 27, '合金', 3, 'Photo_1654674042.jpg', 1),
(66, '霧面環環相扣耳環', 200, 160, 24, '合金', 3, 'Photo_1654674057.jpg', 1),
(67, '古典巴洛克鑲嵌耳環(紅橘)', 150, 120, 24, '合金', 3, 'Photo_1654674077.jpg', 1),
(68, '古典巴洛克鑲嵌耳環(深綠)', 150, 120, 24, '合金', 3, 'Photo_1654674093.jpg', 1),
(69, '束縛枷鎖個性粗鍊', 180, 144, 34, '合金', 3, 'Photo_1654674120.jpg', 1),
(70, 'whatever雙層項鍊', 200, 160, 47, '合金', 3, 'Photo_1654674133.jpg', 1),
(71, '簡約復古純色厚髮箍(白)', 150, 120, 36, '棉', 3, 'Photo_1654674148.jpeg', 1),
(72, '簡約復古純色厚髮箍(淺咖)', 150, 120, 36, '棉', 3, 'Photo_1654674165.jpeg', 1),
(73, '簡約復古純色厚髮箍(深咖)', 150, 120, 36, '棉', 3, 'Photo_1654674250.jpeg', 1),
(74, '正韓起伏波浪純銀戒指', 340, 272, 272, '925銀', 5, 'Photo_1654674260.jpg', 1),
(75, '正韓黑白格紋愛心項練', 300, 240, 178, '925銀', 3, 'Photo_1654674269.jpg', 1),
(76, '正韓黑白格紋愛心耳環', 250, 200, 115, '925銀', 3, 'Photo_1654674280.jpg', 1),
(77, '正韓S型流水垂墜耳環(銀)', 350, 280, 303, '925銀', 3, 'Photo_1654674298.jpg', 1),
(78, '正韓S型流水垂墜耳環(金)', 350, 280, 335, '925銀', 3, 'Photo_1654674309.jpg', 1),
(79, '小金豆水滴耳環', 350, 280, 303, '925銀', 3, 'Photo_1654674335.jpg', 1),
(80, '小銀豆水滴耳環', 340, 272, 272, '925銀', 3, 'Photo_1654674346.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `accuser`
--

CREATE TABLE `accuser` (
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `accuser`
--

INSERT INTO `accuser` (`name`, `email`, `password`) VALUES
('test', 'test@gmail.com', 'test123'),
('user', 'hungfish0118@gmail.com', '900318');

-- --------------------------------------------------------

--
-- 資料表結構 `accvip`
--

CREATE TABLE `accvip` (
  `name` varchar(10) NOT NULL,
  `birth` date NOT NULL,
  `tel` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `accvip`
--

INSERT INTO `accvip` (`name`, `birth`, `tel`, `address`, `mail`, `password`, `rank`, `point`) VALUES
('Sandy', '2001-03-18', 963809732, '高雄市楠梓區高雄大學路700號', 'sandy200568003@gmail.com', '123456', 1, 20),
('Test', '2021-07-10', 912345678, '高雄市楠梓區高雄大學路7號', 'a1093325@gmail.com', '20210710', 3, 5),
('測試', '2010-02-04', 911111111, '高雄大學', 'b@gmail.com', '45678', NULL, NULL),
('瑜', '0000-00-00', 912345678, '食品路272號', 'aaaaaa@gmail.com', '0912345678', NULL, 10);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `accorder`
--
ALTER TABLE `accorder`
  ADD KEY `foreign key` (`name`);

--
-- 資料表索引 `accproduct`
--
ALTER TABLE `accproduct`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `accuser`
--
ALTER TABLE `accuser`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `accvip`
--
ALTER TABLE `accvip`
  ADD PRIMARY KEY (`name`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `accorder`
--
ALTER TABLE `accorder`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`name`) REFERENCES `accvip` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
