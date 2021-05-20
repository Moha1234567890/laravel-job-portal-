-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 09:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'moha@moha.com', '$2y$10$P6iPDzGNqyQzJw/QeRrUqew62uZdux4E7u8T9Q3brcPFZ1f5N1nju', NULL, '2020-12-14 09:20:46', '2020-12-14 09:20:46'),
(2, 'admin@admin.com', 'admin@admin.com', '$2y$10$uYn8UwPh.F/8N1ocdCicDuPLhHJiEziPDe9iYKbQQdQVKRJj99vPK', NULL, '2021-01-11 08:27:33', '2021-01-11 08:27:33'),
(3, 'fuck@fuck.com', 'fuck@fuck.com', '$2y$10$TFht8aUKG20oriO3dgYWn.nROiqeUTCxKcdUBGDsNDdtLY.fk80K2', NULL, '2021-01-14 13:31:14', '2021-01-14 13:31:14'),
(4, 'admin2@admin2.com', 'admin2@admin2.com', '$2y$10$qfftKore2lo9LocL/quZ4ubht2U8mUyB1P2kehEeQtsoJ69GeZRkq', NULL, '2021-02-04 11:04:02', '2021-02-04 11:04:02'),
(5, 'admin3@admin3.com', 'admin3@admin3.com', '$2y$10$244f52m4.5Xs/gT7WIlwmuCsxDARP2UJPHZvE6MEGqYyjSFOyK5lu', NULL, '2021-02-04 11:05:02', '2021-02-04 11:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cat_desc` text NOT NULL,
  `font` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_desc`, `font`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Development', 'Interactively integrate interoperable deliverables without best-of-breed models. Quickly engineer intuitive applications without.', 'star', 1, '2021-01-23 12:36:19', '2021-01-27 18:28:36'),
(21, 'Arts', 'Interactively integrate interoperable deliverables without best-of-breed models. Quickly engineer intuitive applications without.', 'shopping-cart', 1, '2021-01-23 12:38:10', '2021-01-29 08:24:20'),
(26, 'Desgin', 'Interactively integrate interoperable deliverables without best-of-breed models. Quickly engineer intuitive applications without.', 'microphone', 1, '2021-01-23 14:47:15', '2021-01-29 08:10:53'),
(28, 'Engineering', 'Interactively integrate interoperable deliverables without best-of-breed models. Quickly engineer intuitive applications without.', 'wifi', 1, '2021-01-23 12:50:03', '2021-02-01 13:00:42'),
(29, 'Marketing', 'Credibly administrate focused relationships for virtual systems. Proactively pursue 24/365 initiatives vis-a-vis.', 'bell', 1, '2021-02-01 13:44:17', '2021-02-04 08:39:39'),
(30, 'Teaching', 'Globally create extensive interfaces with equity invested technology. Collaboratively redefine alternative models.', 'ship', 0, '2021-02-04 09:22:33', '2021-02-04 11:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(12) NOT NULL,
  `job_id_email` int(4) NOT NULL,
  `to_user` varchar(200) NOT NULL,
  `from_user` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `job_id_email`, `to_user`, `from_user`, `created_at`, `updated_at`) VALUES
(258, 50, 'moha@moha.com', 'dill@dill.com', '2021-01-23 07:29:06', '2021-01-23 07:29:06'),
(260, 55, 'moha1234566044@gmail.com', 'dill@dill.com', '2021-01-23 07:36:30', '2021-01-23 07:36:30'),
(261, 55, 'moha@moha.com', 'moha1234566044@gmail.com', '2021-01-25 15:23:41', '2021-01-25 15:23:41'),
(262, 55, 'moha@moha.com', 'moha1234566044@gmail.com', '2021-01-25 15:23:41', '2021-01-25 15:23:41'),
(263, 55, 'moha@moha.com', 'moha1234566044@gmail.com', '2021-01-25 15:23:41', '2021-01-25 15:23:41'),
(264, 55, 'moha@moha.com', 'moha1234566044@gmail.com', '2021-01-25 15:23:41', '2021-01-25 15:23:41'),
(265, 60, 'hsn42476@gmail.com', 'moha1234566044@gmail.com', '2021-02-04 07:31:32', '2021-02-04 07:31:32'),
(266, 60, 'hsn42476@gmail.com', 'moha1234566044@gmail.com', '2021-02-04 07:31:32', '2021-02-04 07:31:32'),
(267, 69, 'moha1234566044@gmail.com', 'dill@dill.com', '2021-05-04 10:07:02', '2021-05-04 10:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `jobtype` varchar(200) NOT NULL,
  `jobcategory` varchar(200) NOT NULL,
  `jobdesc` text NOT NULL,
  `vacancy` int(2) NOT NULL,
  `ex` int(2) NOT NULL,
  `sal` int(3) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `respon` text NOT NULL,
  `edu` text NOT NULL,
  `ben` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `email`, `jobtitle`, `location`, `region`, `jobtype`, `jobcategory`, `jobdesc`, `vacancy`, `ex`, `sal`, `gender`, `respon`, `edu`, `ben`, `status`, `image`, `companyname`, `website`, `linkedin`, `month`, `created_at`, `updated_at`) VALUES
(50, 7, 'moha@moha.com', 'back end dev', 'sss', 'fayoum', 'full time', 'Development', '<pre>Appropriately transform enabled web services via e-business networks. Objectively iterate holistic convergence.</pre><div><br></div>', 44, 3, 66, 'male', '<div>Appropriately transform enabled web services via e-business networks. Objectively iterate holistic convergence.</div>', '<div>Appropriately transform enabled web services via e-business networks. Objectively iterate holistic convergence.</div>', '<div>Appropriately transform enabled web services via e-business networks. Objectively iterate holistic convergence.</div>', 1, 'company_logos/55PwM1IxVt8hMTNguMfgMtdx6bxT11kg9drIpmkn.png', 'microsoft', 'ikea.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Dec', '2020-02-01 08:19:29', '2021-02-01 08:46:47'),
(55, 1, 'moha@moha.com', 'ui dev', 'Germany', 'fayoum', 'full time', 'Desgin', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', 20, 3, 30, 'male', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', 0, 'company_logos/Bx0aANtuNExTf1d2YrXR8zE49KlZGmEUUpalYyqq.png', 'ccc', 'cccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'Dec', '2020-02-12 12:21:23', '2021-02-01 13:31:06'),
(60, 1, 'hsn42476@gmail.com', 'painter', 'egypt', 'xxx', 'full time', 'Arts', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', 20, 3, 30, 'male', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', 0, 'company_logos/lLpf46wpksfA2XN9WRv2W1IYRHck7CDmQiOvAS5J.png', 'microsoft', 'google.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Jen', '2021-01-14 14:07:23', '2021-02-01 13:01:15'),
(64, 7, 'moha1234566044@gmail.com', 'sss', 'egypt', 'fayoum', 'full time', 'Desgin', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', 20, 3, 30, 'male', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', 1, 'company_logos/qowedURvZMS8X1Ldps6m9yiMKnX0fy3E6gZNefoR.jpeg', 'ccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'Jen', '2021-02-01 07:37:58', '2021-02-01 13:01:09'),
(65, 1, 'moha1234566044@gmail.com', 'ux designer', 'xxx', 'xxx', 'full time', 'Engineering', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', 20, 3, 30, 'male', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', 1, 'company_logos/RPPjh874eeNzo3pngQVBbytIHiMStz1DCqGWhvB4.png', 'ccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'ikea.com', 'Feb', '2021-01-12 12:42:37', '2021-02-04 08:38:25'),
(67, 7, 'moha1234566044@gmail.com', 'xxx', 'egypt', 'xxx', 'full time', 'Marketing', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 20, 3, 66, 'male', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 0, 'company_logos/1a3UUjnl6woHLgwNCgd1Ap2McXBdvSQMm1TkH62L.png', 'ccc', 'ikea.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-01 13:03:27', '2021-02-01 13:03:27'),
(68, 7, 'moha@moha.com', 'sss', 'sss', 'fayoum', 'full time', 'Development', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 20, 3, 30, 'male', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 0, 'company_logos/DZHFz2r7FdJbkPnKaFPE5yVfqES9s7G2fall9Uti.png', 'microsoft', 'microsoft.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-01 13:18:57', '2021-02-01 13:18:57'),
(69, 7, 'moha1234566044@gmail.com', 'xxx', 'egypt', 'fayoum', 'full time', 'Desgin', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', 20, 3, 30, 'male', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', 0, 'company_logos/zkU2H3HhSsrcDIM8myqO5e07BWAxgnDqdCUYSiCH.png', 'microsoft', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-04 07:25:40', '2021-02-04 07:25:40'),
(70, 7, 'filled@filled.com', 'back end dev', 'egypt', 'fayoum', 'part time', 'Engineering', '<pre>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</pre><div><br></div>', 44, 3, 30, 'male', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', 1, 'company_logos/0R9NWCdaNp2faNm4BRGv503cb9bHU6Iaw8tlbPpf.png', 'microsoft', 'cccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-04 09:32:05', '2021-02-04 11:03:29'),
(71, 9, 'mFtjfEhFhK', 'sRuV1nMzvI', 'Ukm6pTiDVV', 'Hf2jl7woYh', 'full time', 'Development', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', 0, 0, 0, 'male', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', 0, 'company_logos/bvkY3wjZvJtkiQqsvLSFN054iw8mxh4qZoLNZBeH.jpeg', 'TM7noP7w8D', '866a9nxq3a', 'jg5RCtahVG', 'May', '2021-05-06 14:06:13', '2021-05-06 14:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `savedjobs`
--

CREATE TABLE `savedjobs` (
  `id` int(2) NOT NULL,
  `user_id` int(12) NOT NULL,
  `job_id` int(12) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedjobs`
--

INSERT INTO `savedjobs` (`id`, `user_id`, `job_id`, `pic`, `job_title`, `company_name`, `location`, `region`, `job_type`, `created_at`, `updated_at`) VALUES
(621, 7, 59, 'company_logos/QIW13UoZmGLMvcdpX9tuDAdZAVQ3BLXZuAxAfc78.png', 'sss', 'microsoft', 'sss', 'xxx', 'full time', '2021-01-18 08:54:32', '2021-01-18 08:54:32'),
(661, 7, 58, 'company_logos/RPPjh874eeNzo3pngQVBbytIHiMStz1DCqGWhvB4.png', 'ux designer', 'ccc', 'xxx', 'xxx', 'full time', '2021-01-20 07:07:54', '2021-01-20 07:07:54'),
(663, 9, 62, 'company_logos/z6CP95MPxV2KUkwJg17FXghXpFTTVsveJMBp5F7i.png', 'xxx', 'microsoft', 'egypt', 'fayoum', 'full time', '2021-01-22 15:22:17', '2021-01-22 15:22:17'),
(665, 9, 58, 'company_logos/RPPjh874eeNzo3pngQVBbytIHiMStz1DCqGWhvB4.png', 'ux designer', 'ccc', 'xxx', 'xxx', 'full time', '2021-01-22 16:01:42', '2021-01-22 16:01:42'),
(666, 9, 59, 'company_logos/QIW13UoZmGLMvcdpX9tuDAdZAVQ3BLXZuAxAfc78.png', 'sss', 'microsoft', 'sss', 'xxx', 'full time', '2021-01-22 16:01:48', '2021-01-22 16:01:48'),
(669, 7, 55, 'company_logos/Bx0aANtuNExTf1d2YrXR8zE49KlZGmEUUpalYyqq.png', 'ux designer', 'ccc', 'Germany', 'fayoum', 'full time', '2021-01-25 15:51:33', '2021-01-25 15:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(2) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'ux designer', '2021-01-17 10:42:25', '2021-01-17 10:42:25'),
(2, 'dev', '2021-01-17 10:54:16', '2021-01-17 10:54:16'),
(3, 'dev', '2021-01-17 10:54:36', '2021-01-17 10:54:36'),
(4, 'ux designer', '2021-01-17 11:16:57', '2021-01-17 11:16:57'),
(5, 'ux designer', '2021-01-17 11:17:11', '2021-01-17 11:17:11'),
(6, 'front end dev', '2021-01-17 11:17:36', '2021-01-17 11:17:36'),
(7, 'painter', '2021-01-17 12:07:28', '2021-01-17 12:07:28'),
(8, 'back end dev', '2021-01-17 12:08:02', '2021-01-17 12:08:02'),
(9, 'customer servant', '2021-01-17 12:10:03', '2021-01-17 12:10:03'),
(10, 'customer servant', '2021-01-17 12:11:12', '2021-01-17 12:11:12'),
(11, 'dev', '2021-01-18 06:23:25', '2021-01-18 06:23:25'),
(12, 'painter', '2021-01-18 06:23:59', '2021-01-18 06:23:59'),
(13, 'dev', '2021-01-20 10:07:15', '2021-01-20 10:07:15'),
(14, 'ux designer', '2021-01-20 10:07:51', '2021-01-20 10:07:51'),
(15, 'ux designer', '2021-01-20 10:12:42', '2021-01-20 10:12:42'),
(16, 'ux designer', '2021-01-20 10:12:50', '2021-01-20 10:12:50'),
(17, 'ux designer', '2021-01-20 10:13:36', '2021-01-20 10:13:36'),
(18, 'ux designer', '2021-01-20 10:13:58', '2021-01-20 10:13:58'),
(19, 'ux designer', '2021-01-20 10:14:13', '2021-01-20 10:14:13'),
(20, 'ux designer', '2021-01-20 10:15:31', '2021-01-20 10:15:31'),
(21, 'ux designer', '2021-01-20 10:31:34', '2021-01-20 10:31:34'),
(22, 'ux designer', '2021-01-20 10:31:40', '2021-01-20 10:31:40'),
(23, 'ux designer', '2021-01-20 10:39:07', '2021-01-20 10:39:07'),
(24, 'ux designer', '2021-01-20 10:39:39', '2021-01-20 10:39:39'),
(25, 'ux designer', '2021-01-20 10:43:05', '2021-01-20 10:43:05'),
(26, 'ux designer', '2021-01-20 10:43:37', '2021-01-20 10:43:37'),
(27, 'ux designer', '2021-01-20 10:45:15', '2021-01-20 10:45:15'),
(28, 'ux designer', '2021-01-20 10:45:51', '2021-01-20 10:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `job_title`, `location`, `facebook`, `linkedin`, `link`, `twitter`, `cv`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fuck@fuck.com', 'fuck@fuck.com', 3333333333333366, 'images/cflFYlJLEAwbFfQ4kyKiXP6KHsYovt0HefQBjj1H.png', 'web dev', NULL, NULL, 'ikea.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/KJUznyw9O6QLGKNMRsBvJifMPM9dDJDEuix8xKKc.txt', NULL, '$2y$10$GvsZ4rNSv8TcuMocdLLFS.F9avIhFiusPW4lzAQLxp9ZSvROLUZyy', NULL, '2020-09-02 12:46:13', '2020-10-12 08:24:16'),
(2, 'illl@ill,com', 'shit@222.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$FIu2q266QHquj0BVEph7seI.Y2DpU6HEbKUpIv4LwquML4pM71txO', NULL, '2020-09-06 10:28:32', '2020-09-06 10:28:32'),
(5, 'hsn42476@gmail.com', 'hsn42476@gmail.com', NULL, 'images/vXiSXjE6aoTV6MrOfUiQuWqfSLE3IprhmoAYEHeh.png', NULL, NULL, NULL, NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/8YvS6giUI2L9u7661GGsMzi0sdOjmRQsmCVSkbcZ.txt', NULL, '$2y$10$VEoPg8P16fLQsDWMBl0A.uQUmJWo5Cam2ve4fxLHi9O8Ree5Y95m2', NULL, '2020-09-15 08:19:31', '2020-10-08 13:46:50'),
(6, 'hh252496@gmail.com', 'hh252496@gmail.com', 33333, 'images/7mGOC7qz9Zu8I2VBrV5YaTLbsnorZsoixRhMsytK.png', NULL, 'egypt', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/pCwc47DU7stxpfJnPHhDY211pentLUfrrvfweKOD.txt', NULL, '$2y$10$JLnXhZxXmce8KI8KDWSb4uUbBtqhKvVCC/ralPF5V26ThSb3qi3Wu', NULL, '2020-09-15 08:47:32', '2020-10-08 08:27:39'),
(7, 'moha1234566044@gmail.com', 'moha1234566044@gmail.com', 3333333333333366, 'images/qjRg3cN5MhQKdoEd9xnTu4rG6GSwa4mxiluIQaYM.png', 'dev', 'egypt', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', NULL, 'cvs/dsNpOTwUGr9agABQzealrvc1hf2m5NCDEX9TVAyR.pdf', NULL, '$2y$10$c9eD2IrOTQRq5idFqmO4putbc/mbvWfE6FfwIg4q9IlDe2X2vPeNG', NULL, '2020-09-16 14:04:23', '2021-02-01 11:17:49'),
(8, 'hill@hill.com', 'hill@hill.com', NULL, 'images/cjHMgXT9MxBoMF81BPpCroaBqDwbhFC9WCjKg8XA.png', 'web dev', NULL, NULL, NULL, NULL, NULL, 'cvs/Qtr9MPVwxpYaCXLZbQt3dErhwmtXzu3sdusYP6q3.txt', NULL, '$2y$10$Pv20yAEz8o002qPImy2WIuGb5l44X5U4vxqi57ZAbWKu7QoF.sRDa', NULL, '2020-10-06 11:21:06', '2020-10-11 11:47:33'),
(9, 'dill@dill.com', 'dill@dill.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/eL0MzftmSsWbRhzHjTLL3ZtuiNanQRAOAEREPOJB.pdf', NULL, '$2y$10$FurE6InBP16ehz3uj3i//uD1FsgM3JzhAAJd0LpVJ3Z.TsDOKDLSC', NULL, '2021-01-22 10:11:27', '2021-01-23 08:09:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `savedjobs`
--
ALTER TABLE `savedjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savedjobs`
--
ALTER TABLE `savedjobs`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=670;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
