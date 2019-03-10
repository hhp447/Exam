-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-20 02:53:58
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `experiment`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_name` varchar(15) NOT NULL DEFAULT '' COMMENT '管理员账号',
  `ad_passwd` varchar(15) NOT NULL DEFAULT '' COMMENT '管理员密码',
  PRIMARY KEY (`ad_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`ad_name`, `ad_passwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `bc_timu`
--

CREATE TABLE IF NOT EXISTS `bc_timu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ex_id` int(11) NOT NULL,
  `number` varchar(15) NOT NULL,
  `timu_id` tinyint(4) DEFAULT NULL,
  `code` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `bc_timu`
--

INSERT INTO `bc_timu` (`id`, `ex_id`, `number`, `timu_id`, `code`) VALUES
(4, 10, '10115021017', 10, 'a+b。  \n#include<stdio.h> main() { int a,b,c; \nprintf("please input a="); scanf("%d",&a); printf("please input b="); scanf("%d",&b); if(a*a+b*b>100) { \nc=(a*a+b*b)/100; printf("%d",c); } else \nprintf("%d\n",a+b); }'),
(5, 10, '10115021017', 11, 'a+b。 <br/>\n#include<stdio.h> <br/>\nmain() { <br/>\nint a,b,c; <br/>\nprintf("please input a="); <br/>\nscanf("%d",&a);<br/>\n printf("please input b="); <br/>\nscanf("%d",&b); <br/>\nif(a*a+b*b>100) { <br/>\nc=(a*a+b*b)/100; <br/>\nprintf("%d",c); <br/>\n} else <br/>\nprintf("%d\n",a+b); }<br/>\n<br/>'),
(6, 10, '10115021017', 12, 'a+b。 <br/>\n#include<stdio.h> <br/>\nmain() { <br/>\nint a,b,c; <br/>\nprintf("please input a="); <br/>\nscanf("%d",&a);<br/>\n printf("please input b="); <br/>\nscanf("%d",&b); <br/>\nif(a*a+b*b>100) { <br/>\nc=(a*a+b*b)/100; <br/>\nprintf("%d",c); <br/>\n} else <br/>\nprintf("%d\n",a+b); }<br/>\n<br/>'),
(7, 13, '10115021017', 25, 'a+b。 <br/>\n#include<stdio.h> <br/>\nmain() { <br/>\nint a,b,c; <br/>\nprintf("please input a="); <br/>\nscanf("%d",&a);<br/>\n printf("please input b="); <br/>\nscanf("%d",&b); <br/>\nif(a*a+b*b>100) { <br/>\nc=(a*a+b*b)/100; <br/>\nprintf("%d",c); <br/>\n} else <br/>\nprintf("%d\n",a+b); }<br/>\n<br/>'),
(8, 13, '10115021017', 26, 'a+b。 <br/>\n#include<stdio.h> <br/>\nmain() { <br/>\nint a,b,c; <br/>\nprintf("please input a="); <br/>\nscanf("%d",&a);<br/>\n printf("please input b="); <br/>\nscanf("%d",&b); <br/>\nif(a*a+b*b>100) { <br/>\nc=(a*a+b*b)/100; <br/>\nprintf("%d",c); <br/>\n} else <br/>\nprintf("%d\n",a+b); }<br/>\n<br/>');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `number` varchar(15) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `question_id`, `number`, `answer`, `time`) VALUES
(1, 1, '10115021017', '指针（Pointer）是编程语言中的一个对象', 1480678236),
(5, 1, '15116235421', '指针我我也不知道', 1480678236),
(2, 2, '15115021111', '实验六我也不怎么清楚，好像可以参考实验八做。。。', 1480678236),
(3, 3, '15115021414', '实验六就是利用算法找出最优解，再求出最大路径啊。。。', 1480648236),
(4, 4, '15115031214', '格斗姿势都不会，叫教练叫你吧。。。', 1480678299),
(6, 3, '15116235421', '实验六。。其实谁写了，记得分享出来啊。', 1480678299),
(7, 6, '10115021017', '我也不知道。。。', 1480928259),
(8, 6, '10115021017', '我也不知道..', 1480928259),
(9, 2, '10115021017', '真的假的。。。。', 1480928259),
(10, 9, '10115021017', '数据库实验很简单的啦，加油，有不懂再加我问我吧，我的QQ：4456766767', 1480929194),
(11, 2, '15116235421', '小明会做，你去问问他。\r\n', 1480933424),
(12, 7, '10115021017', '数据库开发就要多看书', 1480938899),
(13, 13, '10115021017', '李红加油。。。', 1480940695),
(14, 5, '01120', '裸考就裸考啦，怕什么', 1480941232),
(15, 8, '01120', '不难啊，只要你认真上课', 1480941802),
(16, 12, '10115021017', '好好好', 1482198609);

-- --------------------------------------------------------

--
-- 表的结构 `ex`
--

CREATE TABLE IF NOT EXISTS `ex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ex_name` varchar(50) NOT NULL,
  `ex_request` varchar(200) DEFAULT NULL,
  `author` varchar(15) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `ex_check` tinyint(4) NOT NULL DEFAULT '0',
  `must` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `ex`
--

INSERT INTO `ex` (`id`, `ex_name`, `ex_request`, `author`, `time`, `ex_check`, `must`) VALUES
(14, 'java课程设计', '基于java技术实现', '林丽平', 1482197125, 1, 1),
(13, '线上考试系统', '基于ASP.NET技术实现', '林丽平', 1482197054, 1, 0),
(12, 'C语言图书管理系统', '基于C语言实现，实现简单的增删查改图书', '林丽平', 1482196975, 1, 1),
(8, '数据库实验', '建立一个学生表，实现学生信息的增删查改。', '林书豪', 1481549833, 1, 1),
(9, 'php实验设计', '基于php建立一个图书管理系统，实现简单的借书还书功能。', '林书豪', 1481614848, 1, 1),
(10, 'C++文件的操作实验', '注意时间，考试时间为30分钟', '李华', 1481717762, 1, 0),
(15, 'C#继承实验', '实验时间为30分钟', '林丽平', 1482197169, 1, 1),
(16, 'C#文件的操作实验', '实验时间为30分钟', '林丽平', 1482197195, 1, 1),
(17, 'java的安装实验', '实验时间为50分钟', '林丽平', 1482197301, 1, 1),
(18, 'visual studio实现一个简单的小程序', '实验时间为50分钟，不能提前交卷', '林丽平', 1482197384, 1, 1),
(19, 'C#计算器实验', '实验时间为50分钟，不能提前交卷', '林丽平', 1482197409, 1, 1),
(20, 'php实现简单的留言本实验', '实验时间为50分钟，不能提前交卷', '林丽平', 1482197455, 1, 1),
(21, 'php实现简单的新闻发布系统', '实验时间为50分钟，不能提前交卷', '林丽平', 1482197491, 1, 0),
(22, '数据库概论', '熟练使用SQL语句', '林丽平', 1482197605, 1, 0),
(23, '数据结构实验', '实验时间为25分钟', '林丽平', 1482197641, 1, 0),
(24, '数据结构与算法实验', '实验时间为25分钟，不能提前交卷', '林丽平', 1482197659, 1, 0),
(25, '算法实验', '实验时间为55分钟，不能提前交卷', '林丽平', 1482197669, 1, 0),
(26, 'C#基本语法', '实验时间为55分钟，不能提前交卷', '林丽平', 1482197684, 1, 0),
(27, 'C#接口实验', '实验时间为55分钟，不能提前交卷', '林丽平', 1482197704, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ex_table`
--

CREATE TABLE IF NOT EXISTS `ex_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '实验号',
  `ex_name` varchar(50) NOT NULL DEFAULT '' COMMENT '实验名称',
  `ex_content` varchar(500) NOT NULL DEFAULT '' COMMENT '实验内容',
  `ex_request` varchar(250) DEFAULT NULL COMMENT '实验要求',
  `author` varchar(20) DEFAULT NULL COMMENT '发布人',
  `time` int(10) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `ex_check` int(11) DEFAULT '0' COMMENT '是否审核',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `ex_table`
--

INSERT INTO `ex_table` (`id`, `ex_name`, `ex_content`, `ex_request`, `author`, `time`, `ex_check`) VALUES
(1, '二叉树的问题', ' 输入一棵二元查找树，将该二元查找树转换成一个排序的双向链表。\r\n要求不能创建任何新的结点，只调整指针的指向', '转换成双向链表', '李白', 1469364675, 1),
(3, 'Web网页设计', 'Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计Web网页设计', '自行设计前端与后端，要求简洁美观', '胜超', 1469791656, 1),
(4, '安卓程序设计实验', '安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验安卓程序设计实验', '自行设计与开发，不得抄袭。。', '水立方', 1469792094, 1),
(5, '嵌入式设计', '嵌入式设计嵌入式设计嵌入式设计嵌入式设计嵌入式设计嵌入式设计嵌入式设计嵌入式设计', '本月30号截止提交，请大家加紧时间完成。', '考神', 1469792420, 1),
(6, 'php实验设计', 'php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计php实验设计', '使用php语言进行开发', '林丽', 1469792484, 1),
(7, '路由刷华硕', '路由刷华硕路由刷华硕路由刷华硕路由刷华硕路由刷华硕路由刷华硕路由刷华硕路由刷华硕', '将斐讯路由器刷华硕固件', '李华', 1469792719, 1),
(8, '高等数学积分', '高等数学积分高等数学积分高等数学积分高等数学积分高等数学积分高等数学积分高等数学积分高等数学积分', '用二重积分计算', '胜超', 1469792892, 1),
(9, '离散数学', '离散数学离散数学离散数学离散数学离散数学离散数学离散数学离散数学离散数学', '求出他们的阶乘，用时不超过3分钟', '林丽', 1469796704, 1),
(11, '冒泡排序', '冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序冒泡排序', '要快要快要快要快要快要快要快要快', '林书豪', 1469797184, 1),
(12, '公共关系', '请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应请解释晕轮效应', '用30个字解释', '林丽', 1469853930, 1),
(13, 'Qt设计', 'Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计Qt设计', '界面美观，简洁，大方', '林书豪', 1469854694, 1),
(14, '前端设计', '前端设计前端设计前端设计前端设计前端设计前端设计前端设计前端设计前端设计前端设计前端设计', '......', '林书豪', 1469871002, 1);

-- --------------------------------------------------------

--
-- 表的结构 `ex_timu`
--

CREATE TABLE IF NOT EXISTS `ex_timu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ex_id` int(11) NOT NULL,
  `timu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=233 ;

--
-- 转存表中的数据 `ex_timu`
--

INSERT INTO `ex_timu` (`id`, `ex_id`, `timu_id`, `type_id`) VALUES
(1, 8, 2, 1),
(2, 8, 3, 1),
(3, 8, 4, 2),
(4, 8, 5, 2),
(5, 8, 8, 3),
(6, 8, 9, 3),
(7, 8, 10, 4),
(8, 8, 11, 4),
(9, 8, 12, 4),
(10, 9, 4, 2),
(11, 9, 5, 2),
(12, 9, 6, 2),
(13, 9, 7, 2),
(14, 9, 10, 4),
(15, 9, 11, 4),
(16, 9, 12, 4),
(17, 9, 13, 4),
(18, 10, 1, 1),
(19, 10, 2, 1),
(20, 10, 3, 1),
(21, 10, 14, 1),
(22, 10, 15, 1),
(23, 10, 4, 2),
(24, 10, 5, 2),
(25, 10, 6, 2),
(26, 10, 10, 4),
(27, 10, 11, 4),
(28, 10, 12, 4),
(29, 11, 2, 1),
(30, 11, 3, 1),
(31, 11, 14, 1),
(32, 11, 15, 1),
(33, 11, 4, 2),
(34, 11, 5, 2),
(35, 11, 6, 2),
(36, 11, 7, 2),
(37, 11, 8, 3),
(38, 11, 9, 3),
(39, 11, 10, 4),
(40, 11, 11, 4),
(41, 12, 2, 1),
(42, 12, 3, 1),
(43, 12, 15, 1),
(44, 12, 17, 1),
(45, 12, 4, 2),
(46, 12, 5, 2),
(47, 12, 6, 2),
(48, 12, 7, 2),
(49, 12, 8, 3),
(50, 12, 9, 3),
(51, 12, 12, 4),
(52, 12, 13, 4),
(53, 13, 1, 1),
(54, 13, 2, 1),
(55, 13, 14, 1),
(56, 13, 18, 1),
(57, 13, 4, 2),
(58, 13, 5, 2),
(59, 13, 21, 2),
(60, 13, 22, 2),
(61, 13, 23, 3),
(62, 13, 24, 3),
(63, 13, 25, 4),
(64, 13, 26, 4),
(65, 14, 1, 1),
(66, 14, 2, 1),
(67, 14, 14, 1),
(68, 14, 18, 1),
(69, 14, 4, 2),
(70, 14, 5, 2),
(71, 14, 21, 2),
(72, 14, 22, 2),
(73, 14, 23, 3),
(74, 14, 24, 3),
(75, 14, 25, 4),
(76, 14, 26, 4),
(77, 15, 1, 1),
(78, 15, 2, 1),
(79, 15, 14, 1),
(80, 15, 18, 1),
(81, 15, 4, 2),
(82, 15, 5, 2),
(83, 15, 21, 2),
(84, 15, 22, 2),
(85, 15, 23, 3),
(86, 15, 24, 3),
(87, 15, 25, 4),
(88, 15, 26, 4),
(89, 16, 1, 1),
(90, 16, 2, 1),
(91, 16, 14, 1),
(92, 16, 18, 1),
(93, 16, 4, 2),
(94, 16, 5, 2),
(95, 16, 21, 2),
(96, 16, 22, 2),
(97, 16, 23, 3),
(98, 16, 24, 3),
(99, 16, 25, 4),
(100, 16, 26, 4),
(101, 17, 1, 1),
(102, 17, 2, 1),
(103, 17, 14, 1),
(104, 17, 18, 1),
(105, 17, 4, 2),
(106, 17, 5, 2),
(107, 17, 21, 2),
(108, 17, 22, 2),
(109, 17, 23, 3),
(110, 17, 24, 3),
(111, 17, 25, 4),
(112, 17, 26, 4),
(113, 18, 1, 1),
(114, 18, 2, 1),
(115, 18, 14, 1),
(116, 18, 18, 1),
(117, 18, 4, 2),
(118, 18, 5, 2),
(119, 18, 21, 2),
(120, 18, 22, 2),
(121, 18, 23, 3),
(122, 18, 24, 3),
(123, 18, 25, 4),
(124, 18, 26, 4),
(125, 19, 1, 1),
(126, 19, 2, 1),
(127, 19, 14, 1),
(128, 19, 18, 1),
(129, 19, 4, 2),
(130, 19, 5, 2),
(131, 19, 21, 2),
(132, 19, 22, 2),
(133, 19, 23, 3),
(134, 19, 24, 3),
(135, 19, 25, 4),
(136, 19, 26, 4),
(137, 20, 1, 1),
(138, 20, 2, 1),
(139, 20, 14, 1),
(140, 20, 18, 1),
(141, 20, 4, 2),
(142, 20, 5, 2),
(143, 20, 21, 2),
(144, 20, 22, 2),
(145, 20, 23, 3),
(146, 20, 24, 3),
(147, 20, 25, 4),
(148, 20, 26, 4),
(149, 21, 1, 1),
(150, 21, 2, 1),
(151, 21, 14, 1),
(152, 21, 18, 1),
(153, 21, 4, 2),
(154, 21, 5, 2),
(155, 21, 21, 2),
(156, 21, 22, 2),
(157, 21, 23, 3),
(158, 21, 24, 3),
(159, 21, 25, 4),
(160, 21, 26, 4),
(161, 22, 14, 1),
(162, 22, 15, 1),
(163, 22, 16, 1),
(164, 22, 17, 1),
(165, 22, 19, 2),
(166, 22, 20, 2),
(167, 22, 21, 2),
(168, 22, 22, 2),
(169, 22, 9, 3),
(170, 22, 23, 3),
(171, 22, 12, 4),
(172, 22, 13, 4),
(173, 23, 14, 1),
(174, 23, 15, 1),
(175, 23, 16, 1),
(176, 23, 17, 1),
(177, 23, 19, 2),
(178, 23, 20, 2),
(179, 23, 21, 2),
(180, 23, 22, 2),
(181, 23, 9, 3),
(182, 23, 23, 3),
(183, 23, 12, 4),
(184, 23, 13, 4),
(185, 24, 14, 1),
(186, 24, 15, 1),
(187, 24, 16, 1),
(188, 24, 17, 1),
(189, 24, 19, 2),
(190, 24, 20, 2),
(191, 24, 21, 2),
(192, 24, 22, 2),
(193, 24, 9, 3),
(194, 24, 23, 3),
(195, 24, 12, 4),
(196, 24, 13, 4),
(197, 25, 14, 1),
(198, 25, 15, 1),
(199, 25, 16, 1),
(200, 25, 17, 1),
(201, 25, 19, 2),
(202, 25, 20, 2),
(203, 25, 21, 2),
(204, 25, 22, 2),
(205, 25, 9, 3),
(206, 25, 23, 3),
(207, 25, 12, 4),
(208, 25, 13, 4),
(209, 26, 14, 1),
(210, 26, 15, 1),
(211, 26, 16, 1),
(212, 26, 17, 1),
(213, 26, 19, 2),
(214, 26, 20, 2),
(215, 26, 21, 2),
(216, 26, 22, 2),
(217, 26, 9, 3),
(218, 26, 23, 3),
(219, 26, 12, 4),
(220, 26, 13, 4),
(221, 27, 14, 1),
(222, 27, 15, 1),
(223, 27, 16, 1),
(224, 27, 17, 1),
(225, 27, 19, 2),
(226, 27, 20, 2),
(227, 27, 21, 2),
(228, 27, 22, 2),
(229, 27, 9, 3),
(230, 27, 23, 3),
(231, 27, 12, 4),
(232, 27, 13, 4);

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL COMMENT '实验号',
  `number` varchar(15) NOT NULL COMMENT '学号',
  `code` varchar(500) DEFAULT NULL COMMENT '代码',
  `opinion` varchar(500) DEFAULT NULL COMMENT '意见或批注',
  `point` int(11) DEFAULT NULL COMMENT '选择，填空，程序题得分',
  `point_` int(11) DEFAULT NULL COMMENT '编程题得分',
  `teacher` varchar(10) DEFAULT NULL COMMENT '批改教师',
  `checked` tinyint(4) NOT NULL DEFAULT '0' COMMENT '学生是否考过，0/1表示',
  PRIMARY KEY (`id`,`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `grade`
--

INSERT INTO `grade` (`id`, `number`, `code`, `opinion`, `point`, `point_`, `teacher`, `checked`) VALUES
(13, '10115021017', NULL, '不错，但是上课容易分心，继续加油！', 45, 35, '林丽平', 1);

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`id`, `name`, `problem`, `time`) VALUES
(1, '黄林', '最近老师讲的指针我不太理解？可否简单的帮我讲一下？？ ', 1480616034),
(2, '薛小平', 'C#的实验六怎么写，求教！！！', 1480656086),
(3, '李红', 'C#的实验六怎么写，求教！！！', 1480656173),
(4, '刘娜', '请问大家，散打的标准格斗姿势是怎么样的？', 1480678236),
(5, '刘娜', '四级准备裸考了，要怎么过啊？求大神带。。。', 1480854583),
(6, '刘敏', '四级准备裸考了，要怎么过啊？求大神带。。。', 1480854593),
(7, '李红', '数据库开发。。。。。', 1480854879),
(8, '功夫王', '离散数学好难啊，，，求老司机带路。', 1480855106),
(9, '功夫王', 'MYSQL实验。。。。求教', 1480855829),
(10, '李红', '高数上册加油,不要挂科了。。。', 1480855829),
(11, '李红', '高数上册加油,不要挂科了。。。', 1480855829),
(12, '李红', '高数上册加油,不要挂科了。。。', 1480855829),
(13, '李红', '高数上册加油,不要挂科了。。。', 1480855829),
(14, '李红', '高数上册加油,不要挂科了。。。', 1480855829);

-- --------------------------------------------------------

--
-- 表的结构 `stu_information`
--

CREATE TABLE IF NOT EXISTS `stu_information` (
  `number` varchar(15) NOT NULL DEFAULT '' COMMENT '学号',
  `password` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT '密码',
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` varchar(5) DEFAULT NULL COMMENT '性别',
  `school` varchar(20) DEFAULT NULL COMMENT '学校',
  `institute` varchar(20) DEFAULT NULL COMMENT '学院',
  `major` varchar(20) DEFAULT NULL COMMENT '专业',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stu_information`
--

INSERT INTO `stu_information` (`number`, `password`, `name`, `sex`, `school`, `institute`, `major`, `email`) VALUES
('10115021017', '111', 'JACK', '男', '哈尔滨工业大学', '计算机系', '软件工程', '8888@qq.com'),
('15115021111', '00.00', '黄林', '男', '广东工业大学', '外语学院', '商务英语', '548523657@qq.com'),
('15115021316', '0021', '薛小平', '女', '惠大', '物电学院', '自动化专业1班', '233@qq.com'),
('14113021458', '000', '李红', '女', '武汉大学', '文学系', '汉语言专业', '55214@163.com'),
('15115021414', '00123', '刘敏', '女', '韶大', '文学系', '汉语言', '12155@163'),
('15115021416', '2356985hj', '刘娜', '女', '惠东中学', '英东食品学院', '金融专业', '8866@163.com'),
('15116235421', 'liu78456421', '李明刚', '男', '高级中学', '物电学院', '自动化专业2班', '854125698@qq.com'),
('15115031214', '0.215456254', '李永虎', '男', '惠州学院', '土木工程', '建筑设计', '21354654161@qq.com'),
('14002125632', '564356sv', '功夫王', '女', '仲恺学院', '计算机学院', '武术专业', '49854865@163'),
('01125', '5468', '李里屋', '男', '广州体院', '体育学院', '体育教育', '65441654@784');

--
-- 触发器 `stu_information`
--
DROP TRIGGER IF EXISTS `DEL`;
DELIMITER //
CREATE TRIGGER `DEL` AFTER DELETE ON `stu_information`
 FOR EACH ROW BEGIN
DELETE FROM grade WHERE NUMBER=OLD.NUMBER;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `tea_information`
--

CREATE TABLE IF NOT EXISTS `tea_information` (
  `number` varchar(15) NOT NULL DEFAULT '' COMMENT '教师号',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `sex` varchar(5) DEFAULT NULL COMMENT '性别',
  `school` varchar(20) DEFAULT NULL COMMENT '学校',
  `education` varchar(10) DEFAULT NULL COMMENT '学历',
  `group` varchar(15) DEFAULT NULL COMMENT '所属科组',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tea_information`
--

INSERT INTO `tea_information` (`number`, `password`, `name`, `sex`, `school`, `education`, `group`, `email`) VALUES
('01120', '111', '林书豪', '男', '哈佛大学', '博士', '篮球组', '6666@qq.com'),
('01122', '00.', '李华', '男', '华南师范大学', '博士', '数学组', '5421365689@qq.cpm'),
('01123', '00..', '林丽', '女', '广州大学', '本科', '管理组', '457856325@qq.com'),
('01124', '00..', '林丽平', '女', '惠州大学', '本科', '设计组', '759586445@qq.com'),
('01142', '1254263285', '考神', '男', '麻省理工', '研究生', '旅游组', '666666667@136.com'),
('01225', '13.0', '户刚刚', '女', '广州药学院', '博士', '设计组', '2135@163'),
('01129', '1230', '黄名声', '男', '赣州师范', '本科', '教育组', '134564@163'),
('01155', '123321', '流星', '女', '北大', '博士', '肥猪组', '490219317@qq.com'),
('01452', 'klvjnlfv', '胜超', '男', '广州大学', '硕士', '开发组', '454865@163'),
('01253', '5465', '水立方', '女', '韶关蛇院', '硕士', '研究组', '51546@163'),
('011234', 'buhgu', '开阔', '男', '韶关学院', '本科', '数学组', 'cbnsaicb@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `tiku`
--

CREATE TABLE IF NOT EXISTS `tiku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(4) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `selection_a` varchar(100) DEFAULT NULL,
  `selection_b` varchar(100) DEFAULT NULL,
  `selection_c` varchar(100) DEFAULT NULL,
  `selection_d` varchar(100) DEFAULT NULL,
  `answer` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `tiku`
--

INSERT INTO `tiku` (`id`, `type_id`, `question`, `selection_a`, `selection_b`, `selection_c`, `selection_d`, `answer`) VALUES
(1, 1, '一加一等于多少，即 1+1=() ?', '3', '2', '4', '6', 'B'),
(2, 1, '这样临时停放轿车有什么违法行为？', '在禁停路段停车', '在人行道上停车', '损坏车牌', '未放置实习标志', 'C'),
(3, 1, '（）是C语言的合法常量', '.45', '078', 'xy', '265e3.4', 'B'),
(4, 2, '一个C程序有且仅有一个________函数。', NULL, NULL, NULL, NULL, 'main()'),
(5, 2, '数组名表示数组在内存的________', NULL, NULL, NULL, NULL, '首地址'),
(6, 2, 'int a=3, *p=&a ; *p+2的值是_________.', NULL, NULL, NULL, NULL, '5'),
(7, 2, 'C语言描述“x和y都大于或等于z”的表达式是___________________.', NULL, NULL, NULL, NULL, 'x>=z && y>=z'),
(8, 3, 'int a =1 ; int b = 2; int c = a + b; c==______ ', NULL, NULL, NULL, NULL, '4'),
(9, 3, 'int v=4*3.14*r*r*r/3 a =145;int b=a*32; int c = a + b; c==______ ', NULL, NULL, NULL, NULL, '89'),
(10, 4, '编写程序：用递归算法实现函数：int  sum( int n ); 其功能是求 1+2+3+…+n 的值并返回。要求编写主函数main()去调用递归函数sum()。', NULL, NULL, NULL, NULL, NULL),
(11, 4, '编写程序：要求输入一个整数n，能够逐位取出正序或反序输出，用递归算法实现： \n函数： void  f1( int n );   功能是：将 n 逐位取出反序输出 函数： void  f2( int n );   功能是：将 n 逐位取出正序输出 \n算法提示：重复除以10取余数，直到商为0为止；若函数中先输出余数，后递归调用，则为反序输出；若函数中先递归调用，后输出余数，则为正序输出。', NULL, NULL, NULL, NULL, NULL),
(12, 4, '写一个竞猜游戏，用户必须猜一个秘密的数字，在每次猜完后程序会告诉用户他猜的数是太大了还是太小了，直到猜测正确，最后打印出猜测的次数。如果用户连续猜测同一个数字则只算一次。', NULL, NULL, NULL, NULL, NULL),
(13, 4, '实现下面的排序算法：选择排序，插入排序，归并排序，快速排序，臭皮匠排序（Stooge Sort）。具体的描述见Wikipedia', NULL, NULL, NULL, NULL, NULL),
(14, 1, '下列方法中错误的是（）', '主函数可以分为两个部分：主函数说明部分和主函数体', '主函数可以调用任何非主函数的其它函数。', '任何非主函数可以调用其它任何非主函数。', '程序可以从任何非主函数开始执行', 'D'),
(15, 1, '下列说法错误的是：（）', 'C程序运行步骤是编辑、编译、连接、执行', 'C语言的变量名必须用小写，常量用大写', 'C语言的三种基本结构是顺序、选择、循环', 'C程序一定由函数构成的。 ', 'B'),
(16, 1, '不是C语言提供的合法关键字是（）', 'switch', 'cher', 'case', 'default', 'B'),
(17, 1, '下面四个选项中，合法的标识符是：（  ）', 'auto', 'define', '6a', 'c', 'D'),
(18, 1, '一个程序的执行是从（）', '本程序的main函数开始，到main函数结束 ', '本程序文件的第一个函数开始，到本程序文件的最后一个函数结              束', '本程序的main函数开始，到本程序文件的最后一个函数结束。', '本程序文件的第一个函数开始，到main函数结束', 'A'),
(19, 2, '在C语言程序中，表达式5%2的结果是________', NULL, NULL, NULL, NULL, '1'),
(20, 2, '设x=2.7，a=8，y=4.9，算术表达式x+a%3*(int)(x+y)%5/3的值为________', NULL, NULL, NULL, NULL, '3.7'),
(21, 2, '若int x=2,y=3,z=4 则表达式x<z?y:z的结果是________', NULL, NULL, NULL, NULL, '3'),
(22, 2, '变量的指针，其含义是指该变量的________', NULL, NULL, NULL, NULL, '地址'),
(23, 3, '以下程序运行结果是________。 \r\n   main() \r\n{<br/> int a[2][3]={1,3,5,4,7,6},i,j,b=a[0][0]; <br/>  for(i=0;i<2;i++)  <br/>  for(j=0;j<3;j++)    <br/> if(b<a[i][j])   <br/>   b=a[i][j];<br/>   printf(“%d\\n”,b);<br/>  }', NULL, NULL, NULL, NULL, '7'),
(24, 3, '#include<string.h> <br/>  main() \r\n{<br/> char s[50]=”1234567”,*p=s; <br/>  int i; <br/> \r\n i=*(p+5)-*(p+2); <br/> \r\n printf(“%d\\n”,i*strlen(s)); <br/> }', NULL, NULL, NULL, NULL, '21'),
(25, 4, '题目：企业发放的奖金根据利润提成。利润(I)低于或等于10万元时，奖金可提10%；利润高\r\n　　　于10万元，低于20万元时，低于10万元的部分按10%提成，高于10万元的部分，可可提\r\n　　　成7.5%；20万到40万之间时，高于20万元的部分，可提成5%；40万到60万之间时高于\r\n　　　40万元的部分，可提成3%；60万到100万之间时，高于60万元的部分，可提成1.5%，高于\r\n　　　100万元时，超过100万元的部分按1%提成，从键盘输入当月利润I，求应发放奖金总数？\r\n1.程序分析：请利用数轴来分界，定位。注意定义时需把奖金定义成长整型。', NULL, NULL, NULL, NULL, NULL),
(26, 4, '题目：输入三个整数x,y,z，请把这三个数由小到大输出。\r\n1.程序分析：我们想办法把最小的数放到x上，先将x与y进行比较，如果x>y则将x与y的值进行交换，\r\n　　　　　　然后再用x与z进行比较，如果x>z则将x与z的值进行交换，这样能使x最小。', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `timu_type`
--

CREATE TABLE IF NOT EXISTS `timu_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `timu_type`
--

INSERT INTO `timu_type` (`id`, `type_name`) VALUES
(1, '选择题'),
(2, '填空题'),
(3, '程序运行结果题'),
(4, '编程题');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
