-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 02:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `libsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `bag_id` int(11) NOT NULL,
  `type` int(1) NOT NULL COMMENT 'admin=1, user=2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `bag_id`, `type`) VALUES
(1, 'nmk', '$2y$10$A7f/KqG5LploFZFm1Hj20OZg/OdZUsbQ1UizMt/z.ottVdMGEBlYy', 'Nyam', 'suren', 'IMG_7601.JPG', '2018-05-03', 0, 1),
(2, 'nyam', '12345', 'Ganchimeg', 'Nyamsuren', '', '2019-03-11', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `awsan`
--

CREATE TABLE `awsan` (
  `id` int(11) NOT NULL,
  `irgen_id` int(11) NOT NULL,
  `olgolt_id` int(11) NOT NULL,
  `date_borrow` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `sum_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `sum_id`, `code`) VALUES
(1, 1, '1-р баг'),
(2, 1, '2-р баг'),
(3, 1, '3-р баг'),
(4, 1, '4-р баг'),
(5, 1, '5-р баг'),
(6, 1, '6-р баг'),
(7, 1, '7-р баг');

-- --------------------------------------------------------

--
-- Table structure for table `butsah`
--

CREATE TABLE `butsah` (
  `id` int(11) NOT NULL,
  `irgen_id` int(11) NOT NULL,
  `olgolt_id` int(11) NOT NULL,
  `date_return` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `irgen`
--

CREATE TABLE `irgen` (
  `id` int(11) NOT NULL,
  `bag_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `rd` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `olgolt_id` int(11) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `irgen`
--

INSERT INTO `irgen` (`id`, `bag_id`, `photo`, `rd`, `firstname`, `lastname`, `olgolt_id`, `publish_date`) VALUES
(1, 3, '', 'ТА98070720', 'Ганчимэг', 'Нямсүрэн', 1, '2019-04-09'),
(2, 2, '', 'ТА96033018', 'Болд', 'Энхдалай', 2, '2019-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `olgolt`
--

CREATE TABLE `olgolt` (
  `id` int(11) NOT NULL,
  `torol_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `barimt` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `olgolt`
--

INSERT INTO `olgolt` (`id`, `torol_id`, `title`, `barimt`) VALUES
(1, 2, 'Асаргаа', 'Өргөдөл, Цээж зураг, Иргэний үнэмлэх хуулбарын хамт, Багийн засаг даргын тодорхойлолт, Эмчийн тодорхойлолт'),
(2, 1, 'Хөнгөлөлт тусламж', 'Өргөдөл, Цээж зураг, Иргэний үнэмлэх хуулбарын хамт, Нийгмийн даатгалын сангаас тэтгэвэр авах эрх үүсээгүй тухай аймгийн нийгмийн даатгалын хэлтсийн тодорхойлолт, Багийн засаг даргын тодорхойлолт'),
(3, 1, 'Алдар цолтой ахмад настан', 'Өргөдөл, Цээж зураг, Иргэний үнэмлэх хуулбарын хамт, Багийн засаг даргын тодорхойлолт, Алдар цолны үнэмлэх, хуулбарын хамт'),
(5, 2, 'Нийгмийн халамжийн тэтгэвэр', 'Өргөдөл, Цээж зураг, Алдар цолны үнэмлэх, хуулбарын хамт'),
(6, 2, 'Нийгмийн халамжийн тэтгэмж', 'Өргөдөл, Цээж зураг, Иргэний үнэмлэх хуулбарын хамт');

-- --------------------------------------------------------

--
-- Table structure for table `sum`
--

CREATE TABLE `sum` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sum`
--

INSERT INTO `sum` (`id`, `name`) VALUES
(1, 'Дархан'),
(2, 'Орхон'),
(3, 'Шарын гол'),
(4, 'Хонгор');

-- --------------------------------------------------------

--
-- Table structure for table `torol`
--

CREATE TABLE `torol` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `torol`
--

INSERT INTO `torol` (`id`, `name`) VALUES
(1, 'Ахмад настны нийгмийн халамж үйлчилгээ'),
(2, 'Зорилтот бүлгэд чиглэсэн тэтгэвэр, тэтгэмж'),
(3, 'Олон нийтийн оролцоонд түшиглэсэн халамжийн үйлчилгээ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `photo` text NOT NULL,
  `created_on` date NOT NULL,
  `bag_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `photo`, `created_on`, `bag_id`) VALUES
(1, 'Ганчимэг', 'Нямсүрэн', 'nyamsuren', '1234', '', '2019-03-25', 1),
(2, 'Болд', 'Энхдалай', 'dalai', '123', '', '2019-03-27', 2),
(3, 'Эрдэнэ', 'Саруул', 'saruul', '12345', '', '2019-03-27', 7),
(4, 'Баатарзоpигт', 'Ариунболд', 'ariuka', '12345', '', '2019-04-03', 5),
(5, 'Лувсаншарав', 'Лхагвасүрэн', 'lhagwa', 'lhagwa', '', '2019-04-04', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awsan`
--
ALTER TABLE `awsan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `butsah`
--
ALTER TABLE `butsah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `irgen`
--
ALTER TABLE `irgen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olgolt`
--
ALTER TABLE `olgolt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sum`
--
ALTER TABLE `sum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `torol`
--
ALTER TABLE `torol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `awsan`
--
ALTER TABLE `awsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `butsah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `irgen`
--
ALTER TABLE `irgen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `olgolt`
--
ALTER TABLE `olgolt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sum`
--
ALTER TABLE `sum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `torol`
--
ALTER TABLE `torol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

