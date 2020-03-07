-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2018 at 03:33 AM
-- Server version: 5.6.41
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earnupda_nwm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'support@newwebmaker.com', 'admin', '4c7a34d25eff9121c49658dbceadf694');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(12) UNSIGNED NOT NULL,
  `type` int(2) NOT NULL,
  `target_url` text NOT NULL,
  `ref_url` varchar(100) NOT NULL,
  `banner_url` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `period` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `price` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `type`, `target_url`, `ref_url`, `banner_url`, `email`, `start`, `end`, `status`, `period`, `payment`, `price`) VALUES
(129, 2, '', '', '', '', '0000-00-00', '2018-10-08', 'notpaid', '1', '0', '8'),
(130, 2, 'http://btcwait.com/?ref=ubee', '', 'https://redearn.com/images/125.gif', 'asimbashir677@gmail.com', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '8'),
(131, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '20'),
(132, 3, 'http://btcwait.com/?ref=ubee', '', 'https://redearn.com/images/125.gif', 'asimbashir677@gmail.com', '0000-00-00', '0000-00-00', 'notpaid', '2', '3', '19'),
(133, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '17'),
(134, 3, '', '', '', '', '2018-10-08', '2018-11-05', 'notpaid', '4', '3', '15'),
(135, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '13'),
(136, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '2', '0', '12'),
(137, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(138, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '7'),
(139, 3, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '8'),
(140, 4, 'http://btcwait.com/?ref=ubee', '', 'https://redearn.com/images/125.gif', 'asimbashir677@gmail.com', '2018-10-08', '2018-10-09', 'notpaid', '2', '0', '10'),
(141, 4, '', '', '', '', '0000-00-00', '2018-10-08', 'notpaid', '1', '0', '10'),
(142, 4, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '0', '10'),
(143, 4, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(144, 4, 'http://btcwait.com/?ref=ubee', '', 'https://investlister.com/images/banner_728.gif', 'admin@wbdservice.com', '2018-10-09', '2018-10-16', 'notpaid', '1', '0', '10'),
(145, 5, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '10'),
(146, 5, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(147, 5, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(148, 5, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(149, 5, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '10'),
(150, 0, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '6'),
(151, 6, 'http://earnupdates.com/', '', 'http://earnupdates.com/728.gif', 'admin@wbdservice.com', '0000-00-00', '0000-00-00', 'paid', '1', '3', '6'),
(156, 7, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '3', '3', '5'),
(157, 7, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '5'),
(158, 7, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '5'),
(161, 8, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '4'),
(162, 8, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '4'),
(163, 8, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '4'),
(164, 8, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '4'),
(165, 8, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '4'),
(123, 1, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '1', '3', '30'),
(124, 0, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '9'),
(125, 0, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '25'),
(126, 2, 'http://btcwait.com/?ref=ubee', '', 'https://redearn.com/images/125.gif', 'asimbashir677@gmail.com', '2018-10-08', '2018-10-29', 'notpaid', '3', '0', '8'),
(127, 2, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '8'),
(128, 2, '', '', '', '', '0000-00-00', '0000-00-00', 'notpaid', '', '', '8'),
(166, 2, 'http://btcwait.com/?ref=ubee', '', 'https://investlister.com/images/banner_728.gif', 'admin@wbdservice.com', '2018-10-09', '2018-10-16', 'notpaid', '1', '0', '888');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_price`) VALUES
(1, 'HOT PROGRAMS', '970'),
(2, 'TRUSTED PROGRAMS', '285'),
(3, 'NORMAL PROGRAMS', '120'),
(6, 'SCAM PROGRAMS', 'FREE');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `r_account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `title`, `account`, `r_account`, `password`) VALUES
(1, 'mysidepay', 'MSP', '22', 'MSP5216678', '@D$dgf56fh@SWE$F'),
(2, 'perfectmoney', 'NEM HYIP MONITOR', 'U16436544', 'U16436544', 'RF8KeV05bO3FE1CNvKILBEVKk'),
(3, 'PAYEER', 'NWM HYIP MONITOR', 'P84978216', 'P84978216', '1232456'),
(4, 'BITCOIN', 'NWM HYIP MONITOR', '18d3hxVXmVAdDMHp98GoGadHswDfSMTcCQ', '18d3hxVXmVAdDMHp98GoGadHswDfSMTcCQ', '34634564577'),
(5, 'ADVCASH', 'NWM HYIP MONITOR', 'U 7561 2282 7286', 'U 7561 2282 7286', '36345456');

-- --------------------------------------------------------

--
-- Table structure for table `hl_listings`
--

CREATE TABLE `hl_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `url` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `hyip_status` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `percents` varchar(255) DEFAULT NULL,
  `min_spend` varchar(255) DEFAULT NULL,
  `max_spend` varchar(255) DEFAULT NULL,
  `ref_com` varchar(255) DEFAULT NULL,
  `ref_url` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `started_date` date DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `withdraw_type` text NOT NULL,
  `min_withdraw` text NOT NULL,
  `msp` int(10) NOT NULL,
  `pm` int(10) NOT NULL,
  `btc` int(10) NOT NULL,
  `payeer` int(10) NOT NULL,
  `adv` int(10) NOT NULL,
  `pp` int(10) NOT NULL,
  `payza` int(10) NOT NULL,
  `net` int(10) NOT NULL,
  `skrill` int(10) NOT NULL,
  `ltc` int(10) NOT NULL,
  `btccash` int(10) NOT NULL,
  `doge` int(10) NOT NULL,
  `eth` int(10) NOT NULL,
  `comodo_ssl` int(10) NOT NULL,
  `evssl` int(10) NOT NULL,
  `ddos` int(10) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `our_investment` varchar(255) NOT NULL,
  `added` varchar(255) NOT NULL,
  `last_payout` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hl_listings`
--

INSERT INTO `hl_listings` (`id`, `group_id`, `name`, `url`, `status`, `hyip_status`, `percents`, `min_spend`, `max_spend`, `ref_com`, `ref_url`, `email`, `date_added`, `started_date`, `details`, `withdraw_type`, `min_withdraw`, `msp`, `pm`, `btc`, `payeer`, `adv`, `pp`, `payza`, `net`, `skrill`, `ltc`, `btccash`, `doge`, `eth`, `comodo_ssl`, `evssl`, `ddos`, `payment_status`, `our_investment`, `added`, `last_payout`) VALUES
(38, 1, 'earnupdates', 'http://earnupdates.com/', 1, 1, 'this is test plans', '10', 'unlimited', '10 %', '', 'admin@wbdservice.com', '2018-11-13 00:00:00', '2018-11-13', 'its hyip investment company', 'Instant', '0.1', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, '', '', '13-November-2018', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hl_statistics`
--

CREATE TABLE `hl_statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `amount` double(10,2) DEFAULT '0.00',
  `comment` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `simple_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `order_number` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `type`, `id`) VALUES
(126, '102', 'programs', 'https://www.btcwait.com/');

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `payout_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_url` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `support_email` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_url`, `site_title`, `site_name`, `keywords`, `description`, `support_email`, `skype`) VALUES
(1, 'https://earnupdates.com/', 'Hyip Monitor - Top Trusted HYIPs investment websites', 'NWM HYIP lISTER', 'hyip monitor script,nwm hyip monitor,nwm hyip lister,hyip monitoring website script,', 'NWM is a Hyip monitor  software for monitoring hyip websites.', 'newwebmaker.com@gmail.com', 'live:newwebmaker.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_listings`
--
ALTER TABLE `hl_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_statistics`
--
ALTER TABLE `hl_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`payout_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hl_listings`
--
ALTER TABLE `hl_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `hl_statistics`
--
ALTER TABLE `hl_statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `payout_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
