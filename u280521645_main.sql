-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2022 at 01:55 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u280521645_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_rec`
--

CREATE TABLE `all_rec` (
  `rec_id` int(11) NOT NULL,
  `customer_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txn_type` int(5) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `paid_amount` bigint(20) NOT NULL,
  `txn_date` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txn_bye` int(10) NOT NULL,
  `txn_time` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_rec`
--

INSERT INTO `all_rec` (`rec_id`, `customer_name`, `customer_id`, `txn_type`, `total_amount`, `paid_amount`, `txn_date`, `txn_bye`, `txn_time`, `status`) VALUES
(1, 'Raja yadav', '2525', 1, 100, 0, '08/04/2022', 1, '07:06:50pm', '1'),
(2, 'Sujeet', '3556', 2, 500, 250, '08/04/2022', 1, '07:07:46pm', '1'),
(3, 'Sanjana', '3636', 1, 500, 0, '08/04/2022', 1, '07:08:12pm', '1'),
(5, 'Nigam', '786767', 2, 1000, 500, '08/04/2022', 1, '07:17:54pm', '1'),
(6, 'Sonu', '39775', 1, 28055, 0, '08/04/2022', 2, '07:20:14pm', '1'),
(7, 'Sujeetroy', '0772010310056', 2, 50000, 45000, '08/04/2022', 1, '07:36:26pm', '1'),
(8, 'ram sharma', '915284528545', 1, 4555, 0, '23/04/2022', 1, '03:19:20pm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` int(6) NOT NULL,
  `user_control` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`uid`, `user_name`, `user_email`, `user_pass`, `user_status`, `user_control`) VALUES
(1, 'Raj', 'rajrock7254@gmail.com', '56782', 1, 1),
(2, 'Sujeet', 'sujeet725496@gmail.com', '12344', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `note_input_box`
--

CREATE TABLE `note_input_box` (
  `box_id` int(11) NOT NULL,
  `box_title` varchar(200) NOT NULL,
  `box_textarea` text DEFAULT NULL,
  `box_user_id` int(100) NOT NULL,
  `box_label` int(100) NOT NULL,
  `box_created_date` varchar(26) CHARACTER SET utf8 NOT NULL,
  `box_created_ip` varchar(106) CHARACTER SET utf8 NOT NULL,
  `box_created_device` text CHARACTER SET utf8 NOT NULL,
  `box_enable_share` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note_input_box`
--

INSERT INTO `note_input_box` (`box_id`, `box_title`, `box_textarea`, `box_user_id`, `box_label`, `box_created_date`, `box_created_ip`, `box_created_device`, `box_enable_share`) VALUES
(3, '85525/87', '65785', 3, 1, '06-03-2022 10:58:18am', '2401:4900:3b16:3e3d:f977:689d:62af:b324', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36/8mqLkJuL-86', 1),
(4, '85//34ikio9', '/8/88/488/89', 3, 7, '06-03-2022 11:01:29am', '2401:4900:3b16:3e3d:f977:689d:62af:b324', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36/8mqXoXuL-32', 1),
(5, 'Hey brother', 'Lakshmi kro ms hmm kg asks tk of fly Ch kg did', 4, 2, '06-03-2022 11:07:21am', '2401:4900:3621:d797:daad:d1cb:d799:aae', 'Mozilla/5.0 (Linux; Android 9; CPH1931) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36', 1),
(6, 'My first time ', 'Hello 🤗🤗🤩', 5, 1, '06-03-2022 11:10:41am', '2401:4900:3b16:3e3d:f418:87b3:5679:f4b4', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36', 1),
(7, 'Hello 🤩🤗🤗🤩 I am ', 'Sujeet ji ka hai kya huaa na me to ', 5, 7, '06-03-2022 11:13:42am', '2401:4900:3b16:3e3d:f418:87b3:5679:f4b4', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36', 1),
(8, 'styh', ' 😅 😂 🤣 gtyutif', 3, 6, '06-03-2022 11:14:45am', '2401:4900:3b16:3e3d:f977:689d:62af:b324', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36/8mqAoGuL-19', 1),
(9, 'Sj', '', 6, 8, '06-03-2022 02:57:50pm', '157.35.0.38', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36', 1),
(10, 'Hi , Gautam 💖💖💖 shayam', 'Hello 🤩🤩🤗 Mr. Gautam 💖💖💖 and give feedback for the nexvgxt \r\n\r\n\r\nweek y hai na ki e kare the last year of birth and time is the ms of you are in php and the best eye 👁️ is a part time and other day and all of the day and time is the same as you are awesome thanks for your help with you in the group with you in the group\r\n\r\n of people they don\'t do that 💓😃🧅😃💓💻⌚👏👏⌚💓👊🤲👊✊👉🖖 me and India is helping to 🍎🍏🍏 ', 1, 1, '06-03-2022 03:26:32pm', '157.35.0.38', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36', 1),
(11, 'Hgfff', '', 1, 1, '06-03-2022 05:48:54pm', '157.35.0.84', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36', 1),
(12, 'My schedule ', '👋 hello, that was my schedule to help us', 9, 2, '27-03-2022 05:37:54pm', '157.42.213.209', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.66 Mobile Safari/537.36', 1),
(13, 'Fairy ', 'Today I\'m going to fair to see how is fair', 9, 5, '27-03-2022 05:39:01pm', '157.42.213.209', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.66 Mobile Safari/537.36', 1),
(14, 'Shyam ke saath aaj mela ja rha hu', 'Aaj me shyam ke saath maila ja rha hu gumne , q ki Aaj mere paas time hai..', 9, 11, '27-03-2022 05:40:01pm', '157.42.213.209', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.66 Mobile Safari/537.36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note_lable`
--

CREATE TABLE `note_lable` (
  `box_lable_id` int(11) NOT NULL,
  `box_lable_name` varchar(15) NOT NULL,
  `box_lable_created_date` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note_lable`
--

INSERT INTO `note_lable` (`box_lable_id`, `box_lable_name`, `box_lable_created_date`) VALUES
(1, 'Home', '12'),
(2, 'School', '12'),
(3, 'Payment ', '06-03-2022'),
(4, 'Recharge ', '06-03-2022'),
(5, 'Family', '06-03-2022'),
(6, 'Market', '06-03-2022'),
(7, 'Application', '06-03-2022'),
(8, 'Website', '06-03-2022'),
(9, 'Csc', '06-03-2022'),
(10, 'Money', '06-03-2022'),
(11, 'Other', '06-03-2022');

-- --------------------------------------------------------

--
-- Table structure for table `note_share`
--

CREATE TABLE `note_share` (
  `ns_auto_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `note_id` bigint(20) NOT NULL,
  `ns_who_shared` int(50) NOT NULL,
  `sharing_enable` int(5) NOT NULL,
  `shared_date` varchar(30) NOT NULL,
  `ns_ip` varchar(166) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note_share`
--

INSERT INTO `note_share` (`ns_auto_id`, `user_id`, `note_id`, `ns_who_shared`, `sharing_enable`, `shared_date`, `ns_ip`) VALUES
(1, 1, 4, 3, 1, '06-03-2022 11:02:15am', '2401:4900:3b16:3e3d:f977:689d:62af:b324'),
(2, 3, 5, 4, 1, '06-03-2022 11:08:46am', '2401:4900:3621:d797:8b16:d778:f1e8:5bcc'),
(3, 3, 6, 5, 1, '06-03-2022 11:10:52am', '2401:4900:3b16:3e3d:f418:87b3:5679:f4b4'),
(4, 3, 7, 5, 1, '06-03-2022 11:13:49am', '2401:4900:3b16:3e3d:f418:87b3:5679:f4b4'),
(5, 4, 8, 3, 1, '06-03-2022 11:15:09am', '2401:4900:3b16:3e3d:f977:689d:62af:b324'),
(6, 5, 8, 3, 1, '06-03-2022 11:16:08am', '2401:4900:3b16:3e3d:f977:689d:62af:b324'),
(7, 3, 10, 1, 1, '06-03-2022 03:27:29pm', '157.35.0.38'),
(8, 4, 10, 1, 1, '06-03-2022 03:27:57pm', '157.35.0.38');

-- --------------------------------------------------------

--
-- Table structure for table `note_user`
--

CREATE TABLE `note_user` (
  `uid` int(11) NOT NULL,
  `u_photo` varchar(255) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `umail` varchar(50) NOT NULL,
  `ustatus` int(9) NOT NULL,
  `ulogin` int(11) NOT NULL COMMENT '1 or 0 mean 1 login ok',
  `uregdate` varchar(27) NOT NULL,
  `uip` varchar(50) NOT NULL,
  `ucountry` varchar(20) NOT NULL,
  `udevice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note_user`
--

INSERT INTO `note_user` (`uid`, `u_photo`, `uname`, `umail`, `ustatus`, `ulogin`, `uregdate`, `uip`, `ucountry`, `udevice`) VALUES
(1, 'def.jpeg', 'Unknown', 'sujeetji7296@gmail.com', 1, 1, '06-03-2022 08:51:12am', '157.35.6.79', 'IN', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36'),
(2, 'def.jpeg', 'Unknown', 'Gautamkumartpdbg425@gmail.com', 0, 1, '06-03-2022 10:53:15am', '2401:4900:3b16:3e3d:f977:689d:62af:b324', 'IN', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36/8mqLqMuL-37'),
(3, 'IMG_20191026_092647_595.jpg', 'Gautam', 'successcyberpointbhr@gmail.com', 1, 1, '06-03-2022 10:55:56am', '2401:4900:3b16:3e3d:f977:689d:62af:b324', 'IN', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36/8mqTxTuL-47'),
(4, 'Snapchat-2029967161.jpg', 'Sk raj', 'kumarsharmashyam911@gmail.com', 1, 1, '06-03-2022 11:05:37am', '2401:4900:3621:d797:daad:d1cb:d799:aae', 'IN', 'Mozilla/5.0 (Linux; Android 9; CPH1931) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36'),
(5, 'IMG20220305154303-removebg-preview.png', 'Sujeet Kumar Sharma', 'rajrock7254@gmail.com', 1, 1, '06-03-2022 11:10:01am', '2401:4900:3b16:3e3d:f418:87b3:5679:f4b4', 'IN', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36'),
(6, 'def.jpeg', 'Unknown', 'sujeet756283@gmail.com', 0, 1, '06-03-2022 02:55:34pm', '157.35.0.38', 'IN', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36'),
(7, 'def.jpeg', 'Unknown', 'sujeet725496@gmail.com', 0, 1, '06-03-2022 03:12:09pm', '157.35.0.38', 'IN', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.106 Mobile Safari/537.36'),
(8, 'def.jpeg', 'Unknown', 'sujeet7254@gmail.com', 0, 1, '15-03-2022 12:02:06pm', '157.35.55.225', 'IN', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36'),
(9, 'def.jpeg', 'Unknown', 'rahulxya@gmail.com', 1, 1, '27-03-2022 05:36:55pm', '157.42.213.209', 'IN', 'Mozilla/5.0 (Linux; Android 10; RMX1827) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.66 Mobile Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_rec`
--
ALTER TABLE `all_rec`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `note_input_box`
--
ALTER TABLE `note_input_box`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `note_lable`
--
ALTER TABLE `note_lable`
  ADD PRIMARY KEY (`box_lable_id`);

--
-- Indexes for table `note_share`
--
ALTER TABLE `note_share`
  ADD PRIMARY KEY (`ns_auto_id`);

--
-- Indexes for table `note_user`
--
ALTER TABLE `note_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_rec`
--
ALTER TABLE `all_rec`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `note_input_box`
--
ALTER TABLE `note_input_box`
  MODIFY `box_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `note_lable`
--
ALTER TABLE `note_lable`
  MODIFY `box_lable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `note_share`
--
ALTER TABLE `note_share`
  MODIFY `ns_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `note_user`
--
ALTER TABLE `note_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
