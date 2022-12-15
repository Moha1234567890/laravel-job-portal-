-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 12:06 PM
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
  `cv_user` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `job_id_email`, `to_user`, `from_user`, `cv_user`, `user_id`, `user_name`, `created_at`, `updated_at`) VALUES
(267, 69, 'moha1234566044@gmail.com', 'dill@dill.com', 'cvs/TOL1SjHUrK4nylT58OU4UTxJ70gZ6hrftt4xX0wj.pdf', 0, '', '2021-05-04 10:07:02', '2021-05-04 10:07:02'),
(277, 75, 'whatis@what.com', 'aaff@hell.com', 'cvs/TOL1SjHUrK4nylT58OU4UTxJ70gZ6hrftt4xX0wj.pdf', 19, 'aaff@hell.com', '2021-07-31 14:48:07', '2021-07-31 14:48:07'),
(281, 74, 'whatis@what.com', 'dill@dill.com', 'cvs/TOL1SjHUrK4nylT58OU4UTxJ70gZ6hrftt4xX0wj.pdf', 9, 'dill@dill.com', '2021-08-01 09:56:06', '2021-08-01 09:56:06'),
(286, 60, 'hsn42476@gmail.com', 'dill@dill.com', 'cvs/TOL1SjHUrK4nylT58OU4UTxJ70gZ6hrftt4xX0wj.pdf', 9, 'dill@dill.com', '2021-08-01 10:18:44', '2021-08-01 10:18:44'),
(287, 75, 'whatis@what.com', 'dill@dill.com', 'cvs/7ZrPdzZFWeKQkyXAkxF7PWBOZSZ2K9T6wq0S7ZXK.pdf', 9, 'dill@dill.com', '2021-08-01 10:19:32', '2021-08-01 10:19:32'),
(288, 74, 'whatis@what.com', 'moha1234566044@gmail.com', 'cvs/4tdWkOMZf2u1DZgTIl9BF9fCU1T3F28wbbbrotg2.pdf', 7, 'moha1234566044@gmail.com', '2021-08-01 11:21:14', '2021-08-01 11:21:14'),
(289, 76, 'holdhem@hold.com', 'moha1234566044@gmail.com', 'cvs/bVF3sMeRrsq7irgU0MFqds7flx17LxoZiL3yn8tN.pdf', 7, 'moha1234566044@gmail.com', '2021-08-01 12:46:02', '2021-08-01 12:46:02');

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
(55, 1, 'moha@moha.com', 'Ui dev', 'Germany', 'fayoum', 'full time', 'Desgin', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', 20, 3, 30, 'male', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', '<div>Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.Authoritatively productivate emerging networks through user friendly e-commerce. Credibly maximize magnetic e-markets.</div>', 0, 'company_logos/Bx0aANtuNExTf1d2YrXR8zE49KlZGmEUUpalYyqq.png', 'ccc', 'cccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'Dec', '2020-02-12 12:21:23', '2021-02-01 13:31:06'),
(60, 1, 'hsn42476@gmail.com', 'painter', 'egypt', 'xxx', 'full time', 'Arts', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', 20, 3, 30, 'male', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', '<div>Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.Credibly plagiarize 24/365 leadership skills before long-term high-impact catalysts for change. Efficiently.</div>', 0, 'company_logos/lLpf46wpksfA2XN9WRv2W1IYRHck7CDmQiOvAS5J.png', 'microsoft', 'google.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Jen', '2021-01-14 14:07:23', '2021-02-01 13:01:15'),
(64, 7, 'moha1234566044@gmail.com', 'Ui dev', 'egypt', 'fayoum', 'full time', 'Desgin', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', 20, 3, 30, 'male', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', '<div>Collaboratively foster end-to-end channels before value-added sources. Progressively recaptiualize cross-unit applications via.</div>', 1, 'company_logos/qowedURvZMS8X1Ldps6m9yiMKnX0fy3E6gZNefoR.jpeg', 'ccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'Jen', '2021-02-01 07:37:58', '2021-02-01 13:01:09'),
(65, 1, 'moha1234566044@gmail.com', 'ux designer', 'xxx', 'xxx', 'full time', 'Engineering', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', 20, 3, 30, 'male', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', '<div>Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.Rapidiously formulate future-proof synergy vis-a-vis progressive initiatives. Phosfluorescently evolve state of the.</div>', 1, 'company_logos/RPPjh874eeNzo3pngQVBbytIHiMStz1DCqGWhvB4.png', 'ccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'ikea.com', 'Feb', '2021-01-12 12:42:37', '2021-02-04 08:38:25'),
(67, 7, 'moha1234566044@gmail.com', 'Ui dev', 'egypt', 'xxx', 'full time', 'Marketing', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 20, 3, 66, 'male', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 0, 'company_logos/1a3UUjnl6woHLgwNCgd1Ap2McXBdvSQMm1TkH62L.png', 'ccc', 'ikea.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-01 13:03:27', '2021-02-01 13:03:27'),
(68, 7, 'moha@moha.com', 'Ui dev', 'sss', 'fayoum', 'full time', 'Development', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 20, 3, 30, 'male', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', '<div>Completely actualize resource-leveling ideas whereas transparent human capital. Progressively e-enable unique models.</div>', 0, 'company_logos/DZHFz2r7FdJbkPnKaFPE5yVfqES9s7G2fall9Uti.png', 'microsoft', 'microsoft.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-01 13:18:57', '2021-02-01 13:18:57'),
(69, 7, 'moha1234566044@gmail.com', 'Ui dev', 'egypt', 'fayoum', 'full time', 'Desgin', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', 20, 3, 30, 'male', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', 0, 'company_logos/zkU2H3HhSsrcDIM8myqO5e07BWAxgnDqdCUYSiCH.png', 'microsoft', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-04 07:25:40', '2021-02-04 07:25:40'),
(70, 7, 'filled@filled.com', 'back end dev', 'egypt', 'fayoum', 'part time', 'Engineering', '<pre>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</pre><div><br></div>', 44, 3, 30, 'male', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', '<div>Seamlessly harness clicks-and-mortar schemas vis-a-vis standardized manufactured products. Intrinsicly engineer unique portals.</div>', 1, 'company_logos/0R9NWCdaNp2faNm4BRGv503cb9bHU6Iaw8tlbPpf.png', 'microsoft', 'cccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'Feb', '2021-02-04 09:32:05', '2021-02-04 11:03:29'),
(74, 22, 'whatis@what.com', 'Ui dev', 'B8oxCQQogn', 'Kh7IxyYYSU', 'full time', 'Development', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', 0, 0, 0, 'male', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', 0, 'company_logos/OiRR4rM9oMT1ftadDcx35ckyPQDiGe1SPxRXGMze.png', 'T6F0TwDqn1', '4MPYrCKhpU', 'jkxHjzOMVU', 'Jul', '2021-07-31 11:12:43', '2021-07-31 11:12:43'),
(75, 22, 'whatis@what.com', 'Ui dev', 'otPUFpP8cW', 'AKEvDSXRo5', 'full time', 'Development', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', 6, 0, 0, 'male', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', '<div>Interactively optimize exceptional alignments via competitive infrastructures. Dramatically morph plug-and-play e-services via diverse process improvements. Objectively transform value-added e-tailers after B2C internal or \"organic\" sources. Interactively provide access to performance based applications after cutting-edge niches. Completely integrate enterprise best practices vis-a-vis high standards in infomediaries.<br><br>Conveniently mesh cooperative.</div>', 0, 'company_logos/BFIibWLkPLcnhmqa7JJmHr1f5sP6iltrX8gnaSnj.png', 'fY6gcG6UFI', 'eJ1Hm7GWhg', '8BZTUgpq6s', 'Jul', '2021-07-31 11:13:31', '2021-07-31 11:13:31'),
(76, 27, 'holdhem@hold.com', 'Ui dev', 'joseuXOQqh', 'Bn9dQZTukq', 'full time', 'Development', '<div>Uniquely incubate viral core competencies through impactful deliverables. Distinctively provide access to client-centric networks via low-risk high-yield materials. Collaboratively develop progressive opportunities rather than cooperative value. Assertively innovate market-driven experiences and plug-and-play outsourcing. Proactively foster prospective information for B2B leadership.<br><br>Energistically empower state of the art processes for.</div>', 0, 2, 0, 'male', '<div>Uniquely incubate viral core competencies through impactful deliverables. Distinctively provide access to client-centric networks via low-risk high-yield materials. Collaboratively develop progressive opportunities rather than cooperative value. Assertively innovate market-driven experiences and plug-and-play outsourcing. Proactively foster prospective information for B2B leadership.<br><br>Energistically empower state of the art processes for.</div>', '<div>Uniquely incubate viral core competencies through impactful deliverables. Distinctively provide access to client-centric networks via low-risk high-yield materials. Collaboratively develop progressive opportunities rather than cooperative value. Assertively innovate market-driven experiences and plug-and-play outsourcing. Proactively foster prospective information for B2B leadership.<br><br>Energistically empower state of the art processes for.</div>', '<div>Uniquely incubate viral core competencies through impactful deliverables. Distinctively provide access to client-centric networks via low-risk high-yield materials. Collaboratively develop progressive opportunities rather than cooperative value. Assertively innovate market-driven experiences and plug-and-play outsourcing. Proactively foster prospective information for B2B leadership.<br><br>Energistically empower state of the art processes for.</div>', 0, 'company_logos/xOepcmCSAqKmy1ex1CWVgQjIgYXzpvt7A7iU0uYA.png', 'IECS6abC2y', 'MoKUzLL07X', '4gUeWhv99N', 'Aug', '2021-08-01 12:44:52', '2021-08-01 12:44:52');

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
  `job_desc` text NOT NULL,
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

INSERT INTO `savedjobs` (`id`, `user_id`, `job_id`, `pic`, `job_title`, `job_desc`, `company_name`, `location`, `region`, `job_type`, `created_at`, `updated_at`) VALUES
(671, 7, 70, 'company_logos/0R9NWCdaNp2faNm4BRGv503cb9bHU6Iaw8tlbPpf.png', 'back end dev', 'Proactively create interactive methodologies vis-a-vis best-of-breed models. Uniquely envisioneer orthogonal web-readiness without cross functional e-services. Continually recaptiualize fully tested \"outside the box\" thinking rather than turnkey collaboration and idea-sharing. Holisticly maximize emerging value with strategic architectures. Dramatically plagiarize low-risk high-yield deliverables via performance based mindshare.  Interactively plagiarize seamless.', 'microsoft', '\r\nEngineering\r\n', 'fayoum', 'part time', '2021-05-11 12:14:05', '2021-05-11 12:14:05'),
(673, 7, 71, 'company_logos/bvkY3wjZvJtkiQqsvLSFN054iw8mxh4qZoLNZBeH.jpeg', 'sRuV1nMzvI', 'Proactively create interactive methodologies vis-a-vis best-of-breed models. Uniquely envisioneer orthogonal web-readiness without cross functional e-services. Continually recaptiualize fully tested \"outside the box\" thinking rather than turnkey collaboration and idea-sharing. Holisticly maximize emerging value with strategic architectures. Dramatically plagiarize low-risk high-yield deliverables via performance based mindshare.  Interactively plagiarize seamless.', 'TM7noP7w8D', 'Ukm6pTiDVV', 'Hf2jl7woYh', 'full time', '2021-05-11 11:46:24', '2021-05-11 11:46:24'),
(675, 7, 69, 'company_logos/zkU2H3HhSsrcDIM8myqO5e07BWAxgnDqdCUYSiCH.png', 'xxx', '<div>Efficiently enable synergistic core competencies and adaptive functionalities. Authoritatively parallel task fully.</div>', 'microsoft', 'egypt', 'fayoum', 'full time', '2021-05-11 11:53:31', '2021-05-11 11:53:31'),
(676, 19, 71, 'company_logos/bvkY3wjZvJtkiQqsvLSFN054iw8mxh4qZoLNZBeH.jpeg', 'sRuV1nMzvI', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', 'TM7noP7w8D', 'Ukm6pTiDVV', 'Hf2jl7woYh', 'full time', '2021-07-06 09:43:00', '2021-07-06 09:43:00'),
(677, 21, 72, 'company_logos/kzUA37QXNV7o6DCz6ieUDsgnxYkUwAaSwV36EHa9.png', 'qBuzftDPxv', '<div>Completely visualize intuitive applications and resource sucking relationships. Conveniently incubate high standards in action items rather than extensible testing procedures. Globally leverage existing sustainable innovation before holistic collaboration and idea-sharing. Assertively whiteboard low-risk high-yield partnerships whereas enterprise-wide collaboration and idea-sharing. Energistically integrate resource sucking outsourcing after bricks-and-clicks paradigms.</div>', 'TXE3CpmsVu', 'F5OLfNwZKo', 'jFpd6VsGl4', 'full time', '2021-07-27 12:39:26', '2021-07-27 12:39:26'),
(678, 21, 71, 'company_logos/bvkY3wjZvJtkiQqsvLSFN054iw8mxh4qZoLNZBeH.jpeg', 'sRuV1nMzvI', '<div>Intrinsicly disseminate distinctive meta-services and leading-edge value. Completely coordinate alternative materials through client-centric deliverables. Quickly seize leveraged initiatives for vertical human capital. Appropriately strategize equity invested action items rather than technically sound methodologies. Proactively utilize resource maximizing technologies and cross-media action items.<br><br>Authoritatively parallel task customized relationships with.</div>', 'TM7noP7w8D', 'Ukm6pTiDVV', 'Hf2jl7woYh', 'full time', '2021-07-27 12:39:40', '2021-07-27 12:39:40'),
(679, 21, 73, 'company_logos/XERAPBMkTkspGlvckmWUZ2MqnRst8ecpyxFwmY2o.png', 'L7a0STlgrq', '<div>Intrinsicly exploit ethical infrastructures without exceptional solutions. Appropriately brand ubiquitous collaboration and idea-sharing rather than distributed scenarios. Compellingly incentivize web-enabled synergy whereas effective paradigms. Dynamically productize web-enabled alignments with B2B relationships. Collaboratively formulate proactive sources for long-term high-impact collaboration and idea-sharing.<br><br>Enthusiastically aggregate bleeding-edge strategic theme areas vis-a-vis.</div>', 'a1PphHhWgq', 'XwYYAMVnDp', '1W6mvXAHdL', 'full time', '2021-07-27 12:39:42', '2021-07-27 12:39:42');

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
(28, 'ux designer', '2021-01-20 10:45:51', '2021-01-20 10:45:51'),
(29, 'back end dev', '2021-05-11 11:25:03', '2021-05-11 11:25:03'),
(30, 'back end dev', '2021-05-11 11:26:48', '2021-05-11 11:26:48'),
(31, 'back end dev', '2021-05-11 11:27:55', '2021-05-11 11:27:55'),
(32, 'back end dev', '2021-05-11 11:28:12', '2021-05-11 11:28:12'),
(33, 'back end dev', '2021-05-11 11:28:44', '2021-05-11 11:28:44'),
(34, 'back end dev', '2021-05-11 11:29:18', '2021-05-11 11:29:18'),
(35, 'back end dev', '2021-05-11 11:31:19', '2021-05-11 11:31:19'),
(36, 'back end dev', '2021-05-11 11:31:35', '2021-05-11 11:31:35'),
(37, 'zzzzzzzzzzzz', '2021-08-01 10:41:46', '2021-08-01 10:41:46'),
(38, 'ui dev', '2021-08-02 10:18:33', '2021-08-02 10:18:33'),
(39, 'ui dev', '2021-08-02 10:19:36', '2021-08-02 10:19:36'),
(40, 'ui dev', '2021-08-02 10:24:43', '2021-08-02 10:24:43'),
(41, 'ui dev', '2021-08-02 10:26:52', '2021-08-02 10:26:52'),
(42, 'ui dev', '2021-08-02 12:04:09', '2021-08-02 12:04:09'),
(43, 'ui dev', '2021-08-02 12:09:18', '2021-08-02 12:09:18'),
(44, 'ui dev', '2021-08-02 12:36:40', '2021-08-02 12:36:40'),
(45, 'ui dev', '2021-08-02 12:37:15', '2021-08-02 12:37:15'),
(46, 'ui dev', '2021-08-02 12:38:28', '2021-08-02 12:38:28'),
(47, 'ui dev', '2021-08-02 12:38:52', '2021-08-02 12:38:52'),
(48, 'ui dev', '2021-08-02 12:39:00', '2021-08-02 12:39:00'),
(49, 'ui dev', '2021-08-02 12:42:58', '2021-08-02 12:42:58'),
(50, 'ui dev', '2021-08-02 12:43:32', '2021-08-02 12:43:32'),
(51, 'ui dev', '2021-08-02 12:44:38', '2021-08-02 12:44:38'),
(52, 'ui dev', '2021-08-02 12:45:52', '2021-08-02 12:45:52'),
(53, 'ui dev', '2021-08-02 12:46:08', '2021-08-02 12:46:08'),
(54, 'ux designer', '2021-08-02 12:46:57', '2021-08-02 12:46:57'),
(55, 'ux designer', '2021-08-02 12:47:14', '2021-08-02 12:47:14'),
(56, 'ux designer', '2021-08-02 12:47:48', '2021-08-02 12:47:48'),
(57, 'ux designer', '2021-08-02 12:48:31', '2021-08-02 12:48:31'),
(58, 'ux designer', '2021-08-02 12:50:26', '2021-08-02 12:50:26'),
(59, 'ux designer', '2021-08-02 12:50:52', '2021-08-02 12:50:52'),
(60, 'ux designer', '2021-08-02 12:51:58', '2021-08-02 12:51:58'),
(61, 'ux designer', '2021-08-02 12:52:32', '2021-08-02 12:52:32'),
(62, 'ux designer', '2021-08-02 12:52:48', '2021-08-02 12:52:48'),
(63, 'ux designer', '2021-08-02 12:53:22', '2021-08-02 12:53:22'),
(64, 'ux designer', '2021-08-02 12:53:58', '2021-08-02 12:53:58'),
(65, 'ux designer', '2021-08-02 12:54:44', '2021-08-02 12:54:44'),
(66, 'ui dev', '2021-08-02 13:14:54', '2021-08-02 13:14:54'),
(67, 'ui dev', '2021-08-02 13:15:36', '2021-08-02 13:15:36'),
(68, 'ui dev', '2021-08-02 13:16:20', '2021-08-02 13:16:20'),
(69, 'ui dev', '2021-08-02 13:16:27', '2021-08-02 13:16:27'),
(70, 'ui dev', '2021-08-02 13:18:00', '2021-08-02 13:18:00'),
(71, 'ui dev', '2021-08-02 13:19:16', '2021-08-02 13:19:16'),
(72, 'ui dev', '2021-08-02 13:19:52', '2021-08-02 13:19:52'),
(73, 'ui dev', '2021-08-02 13:20:50', '2021-08-02 13:20:50'),
(74, 'ui dev', '2021-08-02 13:22:25', '2021-08-02 13:22:25'),
(75, 'ui dev', '2021-08-02 13:23:02', '2021-08-02 13:23:02'),
(76, 'ui dev', '2021-08-02 13:24:04', '2021-08-02 13:24:04'),
(77, 'ui dev', '2021-08-02 13:24:07', '2021-08-02 13:24:07'),
(78, 'ui dev', '2021-08-02 13:24:20', '2021-08-02 13:24:20'),
(79, 'ui dev', '2021-08-02 13:24:24', '2021-08-02 13:24:24'),
(80, 'ui dev', '2021-08-02 13:25:31', '2021-08-02 13:25:31'),
(81, 'ui dev', '2021-08-02 13:26:06', '2021-08-02 13:26:06'),
(82, 'ui dev', '2021-08-02 13:28:14', '2021-08-02 13:28:14'),
(83, 'ui dev', '2021-08-02 13:28:19', '2021-08-02 13:28:19'),
(84, 'Ui dev', '2021-08-02 13:28:41', '2021-08-02 13:28:41'),
(85, 'Ui dev', '2021-08-02 13:28:52', '2021-08-02 13:28:52'),
(86, 'Ui dev', '2021-08-02 13:29:06', '2021-08-02 13:29:06'),
(87, 'Ui dev', '2021-08-02 13:29:22', '2021-08-02 13:29:22'),
(88, 'Ui dev', '2021-08-02 13:29:33', '2021-08-02 13:29:33'),
(89, 'Ui dev', '2021-08-02 13:29:46', '2021-08-02 13:29:46');

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
  `type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `job_title`, `location`, `facebook`, `linkedin`, `link`, `twitter`, `cv`, `type`, `user_desc`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fuck@fuck.com', 'fuck@fuck.com', 3333333333333366, 'images/cflFYlJLEAwbFfQ4kyKiXP6KHsYovt0HefQBjj1H.png', 'web dev', NULL, NULL, 'ikea.com', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/KJUznyw9O6QLGKNMRsBvJifMPM9dDJDEuix8xKKc.txt', '', NULL, NULL, '$2y$10$GvsZ4rNSv8TcuMocdLLFS.F9avIhFiusPW4lzAQLxp9ZSvROLUZyy', NULL, '2020-09-02 12:46:13', '2020-10-12 08:24:16'),
(2, 'illl@ill,com', 'shit@222.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$FIu2q266QHquj0BVEph7seI.Y2DpU6HEbKUpIv4LwquML4pM71txO', NULL, '2020-09-06 10:28:32', '2020-09-06 10:28:32'),
(5, 'hsn42476@gmail.com', 'hsn42476@gmail.com', NULL, 'images/vXiSXjE6aoTV6MrOfUiQuWqfSLE3IprhmoAYEHeh.png', NULL, NULL, NULL, NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/8YvS6giUI2L9u7661GGsMzi0sdOjmRQsmCVSkbcZ.txt', '', NULL, NULL, '$2y$10$VEoPg8P16fLQsDWMBl0A.uQUmJWo5Cam2ve4fxLHi9O8Ree5Y95m2', NULL, '2020-09-15 08:19:31', '2020-10-08 13:46:50'),
(6, 'hh252496@gmail.com', 'hh252496@gmail.com', 33333, 'images/7mGOC7qz9Zu8I2VBrV5YaTLbsnorZsoixRhMsytK.png', NULL, 'egypt', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/pCwc47DU7stxpfJnPHhDY211pentLUfrrvfweKOD.txt', '', NULL, NULL, '$2y$10$JLnXhZxXmce8KI8KDWSb4uUbBtqhKvVCC/ralPF5V26ThSb3qi3Wu', NULL, '2020-09-15 08:47:32', '2020-10-08 08:27:39'),
(7, 'moha1234566044@gmail.com', 'moha1234566044@gmail.com', 3333333333333366, 'images/qjRg3cN5MhQKdoEd9xnTu4rG6GSwa4mxiluIQaYM.png', 'dev', 'egypt', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', NULL, 'cvs/dsNpOTwUGr9agABQzealrvc1hf2m5NCDEX9TVAyR.pdf', '', NULL, NULL, '$2y$10$c9eD2IrOTQRq5idFqmO4putbc/mbvWfE6FfwIg4q9IlDe2X2vPeNG', NULL, '2020-09-16 14:04:23', '2021-02-01 11:17:49'),
(8, 'hill@hill.com', 'hill@hill.com', NULL, 'images/cjHMgXT9MxBoMF81BPpCroaBqDwbhFC9WCjKg8XA.png', 'web dev', NULL, NULL, NULL, NULL, NULL, 'cvs/Qtr9MPVwxpYaCXLZbQt3dErhwmtXzu3sdusYP6q3.txt', '', NULL, NULL, '$2y$10$Pv20yAEz8o002qPImy2WIuGb5l44X5U4vxqi57ZAbWKu7QoF.sRDa', NULL, '2020-10-06 11:21:06', '2020-10-11 11:47:33'),
(9, 'dill@dill.com', 'dill@dill.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', 'ux designer', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/eL0MzftmSsWbRhzHjTLL3ZtuiNanQRAOAEREPOJB.pdf', '', NULL, NULL, '$2y$10$FurE6InBP16ehz3uj3i//uD1FsgM3JzhAAJd0LpVJ3Z.TsDOKDLSC', NULL, '2021-01-22 10:11:27', '2021-05-11 09:05:50'),
(10, 'heel@heel.com', 'heel@heel.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$YJ8hDxE.mkJVXGonOv0xlOcwEJW08d2/3/B7DjWMmNrRHoiyayTCe', NULL, '2021-06-21 18:25:41', '2021-06-21 18:25:41'),
(11, 'good@good.com', 'good@good.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$3.geIGRQOkjWINqtL77CJ.z2eeGdvSSfNFPJv/4uB72DHm/1pNXw.', NULL, '2021-06-21 18:27:30', '2021-06-21 18:27:30'),
(12, 'ded@ded.com', 'ded@ded.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$z61d9LSuX05ZvZgie9jfseZU/kDtC6u9/hYQZ.tfj7EA1BJWoMOAi', NULL, '2021-06-21 18:30:38', '2021-06-21 18:30:38'),
(13, 'zz@zz.com', 'zz@zz.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$0TNLpogY9PcFcOQCdjrP0.Avt4Ov4PdBhazShqKYOXNRtN5rvDODK', NULL, '2021-06-21 18:34:16', '2021-06-21 18:34:16'),
(14, 'smack@d.com', 'smack@d.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$x/PH1D7B5em/bVgPt1SDgu5RuR3x9a/jWgDgROtP7OaNtROaMSKJy', NULL, '2021-06-21 18:40:40', '2021-06-21 18:40:40'),
(15, 'aa@aa.com', 'aa@aa.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$/CARXOjdoAj5l5Pgjklz4elCCH3mKdhhlMLG29rrHOcvU9NY6zh1G', NULL, '2021-06-21 18:53:40', '2021-06-21 18:53:40'),
(16, 'zzz@zz.com', 'zzz@zz.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$EM.0ywV9PsAVWFtmvJPV3.DUmq8/4jMS7eyK.WxOJmlt.N2JA5kPO', NULL, '2021-06-21 18:54:39', '2021-06-21 18:54:39'),
(17, 'read@r.com', 'read@r.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$bgi7uUXZYIeztc0hAoK6POY/t.DZ6/d2QSUkzmng6N7Va46off3Ge', NULL, '2021-06-21 19:04:29', '2021-06-21 19:04:29'),
(18, 'fore@fore.com', 'fore@fore.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$qjVz56bJFxQ10wTTavaCHuERkJ9/.Bettc3qeZivSwEP0HZWZqbHe', NULL, '2021-06-21 19:09:22', '2021-06-21 19:09:22'),
(19, 'aaff@hell.com', 'aaff@hell.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$ABLN.pVstFj0eGaLjv1lqeUTiaY7SBw8yAyv.AlbTIXWaZKIxNIFi', NULL, '2021-06-21 19:11:43', '2021-06-21 19:11:43'),
(20, 'Cate@c.com', 'Cate@c.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$9VvXu3yJ9gdgZrzdcDGOU.EEbVF9w53O7sOt.M/FSCh5klBoW.EU2', NULL, '2021-06-22 18:02:01', '2021-06-22 18:02:01'),
(21, 'tryme@try.com', 'tryme@try.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$xxctgOHaFr8wtYi3XYRkCejeYxZfXaxuqGPbvMObQ6U0hEtA1ABHa', NULL, '2021-07-06 10:10:30', '2021-07-06 10:10:30'),
(22, 'whatis@what.com', 'whatis@what.com', 8319232693, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', '6829956335', 'YTAXu2P2Ci', 'QfsQk95aqu', 'MwIYjhs8sn', 'JzcQSUTPjy', 'owjX3GIGTK', 'cvs/IVcNSgGkVja8uzvrEU3Qy6AyMiBTMnk9HBQ5jaT3.pdf', 'Company', 'Continually facilitate functional materials after quality experiences. Compellingly develop backward-compatible value and tactical process', NULL, '$2y$10$SoUswpZUExPDcrSXbB0mjubyxzWMW9Gb5OTF6wIrA0sBY70cRkJlC', NULL, '2021-07-08 12:57:00', '2021-07-26 09:38:25'),
(23, 'what@waht.com', 'what@waht.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$ZCnMTpjvlWEUapZJkO62IeR51Yus6YVOmNN6/pyrno2wKqlTUTT8S', NULL, '2021-07-08 15:25:19', '2021-07-08 15:25:19'),
(24, 'gearedup@gear.com', 'gearedup@gear.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$4V/SLuQFytxbTdvSDNk.EuF0NLxuuI7btxta7T/bTUHb3.5jMAHxq', NULL, '2021-07-08 18:37:15', '2021-07-08 18:37:15'),
(25, 'done@done.com', 'done@done.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$ED.m3MWgFd.H9qFC8Ju95OwXyiS4X.JqScSOJS/D.lHkN9WRSHC9K', NULL, '2021-07-09 15:20:18', '2021-07-09 15:20:18'),
(26, 'getback@getback.com', 'getback@getback.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$vehB8EI.Duz7D3TZDlZFnOYx8OHm8aHfuAbC7TrFGRPpB6HyhBJxe', NULL, '2021-07-22 10:09:58', '2021-07-22 10:09:58'),
(27, 'holdhem@hold.com', 'holdhem@hold.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', 'Ui dev', NULL, NULL, NULL, NULL, NULL, NULL, 'Company', 'Distinctively optimize seamless networks for customer directed alignments. Monotonectally facilitate diverse materials for cross-unit core competencies. Conveniently redefine robust e-commerce after multimedia based mindshare. Collaboratively aggregate excellent applications with team building infomediaries. Seamlessly underwhelm maintainable e-business rather than innovative strategic theme areas.\r\n\r\nCompetently generate stand-alone human capital after.', NULL, '$2y$10$ypFydpF3kYxsME2k2S/65u6lOjaXBVGvCvOjOS0FBVr5n9zBDXUta', NULL, '2021-07-23 10:37:40', '2021-08-02 12:54:37'),
(28, 'middleman@middl.com', 'middleman@middl.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jobseeker', 'Competently leverage existing multifunctional e-markets before covalent niche markets. Conveniently revolutionize bleeding-edge solutions rather than real-time applications. Assertively strategize turnkey experiences before resource sucking information. Seamlessly simplify emerging meta-services before real-time users. Monotonectally evolve enterprise content for resource-leveling alignments.\r\n\r\nQuickly architect progressive technologies rather than exceptional meta-services. Completely.', NULL, '$2y$10$tzf5uc8rc4a1fJZAvB5hquKLtyikYDyDAxWasyjKBSAhCH.guv.xy', NULL, '2021-07-23 13:33:07', '2021-07-23 13:45:09'),
(29, 'laramid@lara.com', 'laramid@lara.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Null', 'Null', NULL, '$2y$10$GdFgFng6AZuWrX5gTF5G2OQaHN80uZ8gLeVdSHHYdmcUZIcW4dcOy', NULL, '2021-07-23 13:51:55', '2021-07-23 14:08:11'),
(30, 'laracute@lara.com', 'laracute@lara.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '\r\n', NULL, '$2y$10$ek9k42cG5QdlEYqg3Z1VwOBFwFHkEtv.ndBsZ9kI.1dBaZwhP2xoq', NULL, '2021-07-23 14:10:24', '2021-07-23 14:11:10'),
(31, 'onelas@onlast.com', 'onelas@onlast.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '$2y$10$e2YsFUY9ljzUW5hnCJXccO1NvXu.xiWQPhq3Ss9VVAgPMKBKzqKPm', NULL, '2021-07-24 10:29:38', '2021-07-24 10:30:25'),
(32, 'tupac@tupac.com', 'tupac@tupac.com', NULL, 'images/J10xaOBaR4u0DiLLudWdK2FP2TXVg9wG3k2wNF9j.png', NULL, NULL, NULL, NULL, NULL, NULL, 'cvs/5j8lkITY8AFcXRCHVZxiV1KpjJmBaMoiSATYcY5w.pdf', 'Company', 'Efficiently administrate progressive collaboration and idea-sharing after go forward technologies. Holisticly engineer distinctive portals with multifunctional schemas. Conveniently extend enterprise processes whereas value-added channels. Collaboratively supply synergistic innovation vis-a-vis robust e-markets. Authoritatively customize enterprise-wide expertise vis-a-vis clicks-and-mortar interfaces.\r\n\r\nConveniently drive distributed intellectual capital for B2C mindshare. Dramatically disseminate.', NULL, '$2y$10$gD5.48tuMwgVECr1KKPCIOyOKwWzoVgPIYtI8XmL29XTeKIRSe0z.', NULL, '2021-07-24 10:39:44', '2021-07-24 12:27:38');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savedjobs`
--
ALTER TABLE `savedjobs`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=680;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
