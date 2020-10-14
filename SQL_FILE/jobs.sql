-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 03:19 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cat_desc` varchar(200) NOT NULL,
  `font` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_desc`, `font`, `created_at`, `updated_at`) VALUES
(1, 'developemnt', 'Holisticly target corporate core competencies after empowered markets. Collaboratively strategize quality metrics.', 'laptop', '2020-09-12 12:56:20', '2020-09-12 12:56:20'),
(2, 'arts', 'Holisticly target corporate core competencies after empowered markets. Collaboratively strategize quality metrics.', 'paint-brush', '2020-09-12 12:56:20', '2020-09-12 12:56:20'),
(3, 'marketing', 'Holisticly target corporate core competencies after empowered markets. Collaboratively strategize quality metrics.', 'shopping-cart', '2020-09-12 12:56:20', '2020-09-12 12:56:20');

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
(1, 10, 'hsn42476@gmail.com', 'fuck@fuck.com', '2020-10-12 08:46:04', '2020-10-12 08:46:04'),
(2, 12, 'hh252496@gmail.com', 'fuck@fuck.com', '2020-10-12 09:02:34', '2020-10-12 09:02:34'),
(3, 12, 'hh252496@gmail.com', 'fuck@fuck.com', '2020-10-12 09:04:47', '2020-10-12 09:04:47'),
(4, 12, 'hh252496@gmail.com', 'fuck@fuck.com', '2020-10-12 09:09:15', '2020-10-12 09:09:15'),
(5, 14, 'hsn42476@gmail.com', 'fuck@fuck.com', '2020-10-12 09:15:38', '2020-10-12 09:15:38'),
(6, 6, 'hsn42476@gmail.com', 'fuck@fuck.com', '2020-10-12 10:25:46', '2020-10-12 10:25:46'),
(7, 12, 'hh252496@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:27:31', '2020-10-12 10:27:31'),
(8, 12, 'hh252496@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:31:33', '2020-10-12 10:31:33'),
(9, 12, 'hh252496@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:35:10', '2020-10-12 10:35:10'),
(10, 12, 'hh252496@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:37:35', '2020-10-12 10:37:35'),
(11, 9, 'hh252496@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:40:21', '2020-10-12 10:40:21'),
(12, 8, 'moha1234566044@gmail.com', 'moha1234566044@gmail.com', '2020-10-12 10:52:41', '2020-10-12 10:52:41');

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
  `jobdesc` varchar(200) NOT NULL,
  `vacancy` int(2) NOT NULL,
  `ex` int(2) NOT NULL,
  `sal` int(3) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `respon` varchar(200) NOT NULL,
  `edu` text NOT NULL,
  `ben` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `email`, `jobtitle`, `location`, `region`, `jobtype`, `jobcategory`, `jobdesc`, `vacancy`, `ex`, `sal`, `gender`, `respon`, `edu`, `ben`, `image`, `companyname`, `website`, `linkedin`, `created_at`, `updated_at`) VALUES
(6, 0, 'hsn42476@gmail.com', 'painter', 'dd', 'fayoum', 'part time', 'arts', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', 20, 3, 30, 'male', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'ccc', 'microsoft.com', 'microsoft', '2020-09-14 12:04:22', '2020-09-14 12:04:22'),
(7, 0, 'hsn42476@gmail.com', 'seo expert', 'dd', 'cairo', 'full time', 'marketing', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', 20, 3, 30, 'male', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', '<div>Synergistically leverage other\'s client-centric content whereas front-end content. Quickly expedite focused resources.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'xxxxx', 'ikea.com', '2020-09-14 12:05:47', '2020-09-14 12:05:47'),
(8, 0, 'moha1234566044@gmail.com', 'web dev', 'egypt', 'bns', 'part time', 'marketing', '<div>Dynamically envisioneer cross functional users for interdependent e-business. Rapidiously utilize ubiquitous portals.</div>', 20, 3, 30, 'all', '<div>Dynamically envisioneer cross functional users for interdependent e-business. Rapidiously utilize ubiquitous portals.</div>', '<div>Dynamically envisioneer cross functional users for interdependent e-business. Rapidiously utilize ubiquitous portals.</div>', '<div>Dynamically envisioneer cross functional users for interdependent e-business. Rapidiously utilize ubiquitous portals.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'ikea', 'ikea.com', 'ikea.com', '2020-09-15 08:18:27', '2020-09-15 08:18:27'),
(9, 0, 'hh252496@gmail.com', 'artist', 'dd', 'cairo', 'part time', 'arts', '<div>Dramatically utilize tactical sources through web-enabled expertise. Holisticly engage equity invested models.</div>', 20, 3, 30, 'female', '<div>Dramatically utilize tactical sources through web-enabled expertise. Holisticly engage equity invested models.</div>', '<div>Dramatically utilize tactical sources through web-enabled expertise. Holisticly engage equity invested models.</div>', '<div>Dramatically utilize tactical sources through web-enabled expertise. Holisticly engage equity invested models.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'microsoft.com', 'microsoft', '2020-09-15 08:50:27', '2020-09-15 08:50:27'),
(10, 0, 'hsn42476@gmail.com', 'back end dev', 'dd', 'fayoum', 'full time', 'marketing', '<div>Collaboratively drive 2.0 intellectual capital for backend technologies. Compellingly redefine performance based.</div>', 20, 3, 30, 'male', '<div>Collaboratively drive 2.0 intellectual capital for backend technologies. Compellingly redefine performance based.</div>', '<div>Collaboratively drive 2.0 intellectual capital for backend technologies. Compellingly redefine performance based.</div>', '<div>Collaboratively drive 2.0 intellectual capital for backend technologies. Compellingly redefine performance based.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'ccc', 'cccc', 'xxxx', '2020-09-16 14:02:11', '2020-09-16 14:02:11'),
(11, 0, 'hsn42476@gmail.com', 'front end dev', 'egypt', 'cairo', 'full time', 'developemnt', '<div>Seamlessly repurpose premium total linkage without installed base imperatives. Synergistically reinvent customer.</div>', 20, 3, 30, 'male', '<div>Seamlessly repurpose premium total linkage without installed base imperatives. Synergistically reinvent customer.</div>', '<div>Seamlessly repurpose premium total linkage without installed base imperatives. Synergistically reinvent customer.</div>', '<div>Seamlessly repurpose premium total linkage without installed base imperatives. Synergistically reinvent customer.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'microsoft.com', 'microsoft', '2020-10-01 06:37:32', '2020-10-01 06:37:32'),
(12, 0, 'hh252496@gmail.com', 'xxx', 'egypt', 'fayoum', 'part time', 'developemnt', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 20, 3, 30, 'male', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'microsoft.com', 'https://bootsnipp.com/user/snippets/7oz3l', '2020-10-08 20:48:08', '2020-10-08 20:48:08'),
(13, 0, 'hh252496@gmail.com', 'back end dev', 'egypt', 'fayoum', 'full time', 'developemnt', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 20, 3, 30, 'male', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'microsoft.com', 'https://bootsnipp.com/user/snippets/7oz3l', '2020-10-08 20:52:39', '2020-10-08 20:52:39'),
(14, 0, 'hsn42476@gmail.com', 'ui designer', 'USA', 'NYC', 'part time', 'developemnt', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 20, 7, 30, 'male', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'microsoft', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', '2020-10-09 08:40:11', '2020-10-09 08:40:11'),
(15, 7, 'hh252496@gmail.com', 'web dev', 'USA', 'los anglos', 'part time', 'arts', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 20, 3, 30, 'male', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'ccc', 'cccc', 'https://bootsnipp.com/user/snippets/7oz3l', '2020-10-09 09:02:28', '2020-10-09 09:02:28'),
(16, 7, 'moha1234566044@gmail.com', 'dev', 'USA', 'bns', 'full time', 'marketing', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 20, 7, 30, 'all', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'Seamlessly myocardinate turnkey markets for sustainable growth strategies. Professionally facilitate superior action.', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'ccc', 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', '2020-10-09 09:03:28', '2020-10-09 09:03:28'),
(17, 7, 'hh252496@gmail.com', 'ux designer', 'Germany', 'Berlin', 'full time', 'developemnt', '<pre>Seamlessly harness goal-oriented convergence vis-a-vis cross-unit alignments. Appropriately integrate distinctive opportunities via.</pre><div><br></div>', 20, 7, 66, 'male', '<div>Seamlessly harness goal-oriented convergence vis-a-vis cross-unit alignments. Appropriately integrate distinctive opportunities via.</div>', '<div>Seamlessly harness goal-oriented convergence vis-a-vis cross-unit alignments. Appropriately integrate distinctive opportunities via.</div>', '<div>Seamlessly harness goal-oriented convergence vis-a-vis cross-unit alignments. Appropriately integrate distinctive opportunities via.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'google', 'google.com', 'google.com', '2020-10-10 08:23:43', '2020-10-10 08:23:43'),
(18, 7, 'hh252496@gmail.com', 'xxx', 'egypt', 'ddd', 'full time', 'developemnt', '<div>Professionally leverage other\'s proactive deliverables through competitive systems. Progressively initiate client-centered partnerships.</div>', 20, 3, 30, 'male', '<div>Professionally leverage other\'s proactive deliverables through competitive systems. Progressively initiate client-centered partnerships.</div>', '<div>Professionally leverage other\'s proactive deliverables through competitive systems. Progressively initiate client-centered partnerships.</div>', '<div>Professionally leverage other\'s proactive deliverables through competitive systems. Progressively initiate client-centered partnerships.</div>', 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'google', 'microsoft.com', 'ikea.com', '2020-10-10 09:04:21', '2020-10-10 09:04:21'),
(19, 6, 'fuck@fuck.com', 'graphic designer ', 'egypt', 'alex', 'full time', 'arts', 'Energistically promote stand-alone functionalities via goal-oriented communities. Dramatically embrace orthogonal niche markets.', 2, 5, 99, 'male', 'Energistically promote stand-alone functionalities via goal-oriented communities. Dramatically embrace orthogonal niche markets.', 'Energistically promote stand-alone functionalities via goal-oriented communities. Dramatically embrace orthogonal niche markets.', 'Energistically promote stand-alone functionalities via goal-oriented communities. Dramatically embrace orthogonal niche markets.', 'company_logos/Y6vJrBY2WNvbDXutDlSo4KuytRT8E17rRTE0zXvs.png', 'apple', 'apple.com', 'apple.com', '2020-10-11 13:18:34', '2020-10-11 13:18:34');

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
(123, 8, 7, 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'seo expert', 'microsoft', 'dd', 'cairo', 'full time', '2020-10-11 11:09:17', '2020-10-11 11:09:17'),
(126, 8, 9, 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'artist', 'microsoft', 'dd', 'cairo', 'part time', '2020-10-11 11:36:20', '2020-10-11 11:36:20'),
(127, 8, 15, 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'web dev', 'ccc', 'USA', 'los anglos', 'part time', '2020-10-11 11:51:29', '2020-10-11 11:51:29'),
(129, 1, 12, 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'xxx', 'microsoft', 'egypt', 'fayoum', 'part time', '2020-10-11 12:13:02', '2020-10-11 12:13:02'),
(130, 1, 19, 'company_logos/Y6vJrBY2WNvbDXutDlSo4KuytRT8E17rRTE0zXvs.png', 'graphic designer', 'apple', 'egypt', 'alex', 'full time', '2020-10-12 08:12:52', '2020-10-12 08:12:52'),
(131, 1, 10, 'images/4XtMk7zc98VndCPIjfvBEECTXGYF7EMNH4QNAGtY.png', 'back end dev', 'ccc', 'dd', 'fayoum', 'full time', '2020-10-12 08:13:56', '2020-10-12 08:13:56');

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
(7, 'moha1234566044@gmail.com', 'moha1234566044@gmail.com', 3333333333333366, 'images/cczT7RCRRah4uef6GQlNNLrcgTEaigrOASebhPlU.png', 'ui designer', 'egypt', 'https://bootsnipp.com/user/snippets/7oz3l', NULL, 'https://bootsnipp.com/user/snippets/7oz3l', 'https://bootsnipp.com/user/snippets/7oz3l', 'cvs/6C1Hj8OCmOAKDyeP9rZiG87ZekMVQ9CBouvHHhud.txt', NULL, '$2y$10$c9eD2IrOTQRq5idFqmO4putbc/mbvWfE6FfwIg4q9IlDe2X2vPeNG', NULL, '2020-09-16 14:04:23', '2020-10-12 11:02:57'),
(8, 'hill@hill.com', 'hill@hill.com', NULL, 'images/cjHMgXT9MxBoMF81BPpCroaBqDwbhFC9WCjKg8XA.png', 'web dev', NULL, NULL, NULL, NULL, NULL, 'cvs/Qtr9MPVwxpYaCXLZbQt3dErhwmtXzu3sdusYP6q3.txt', NULL, '$2y$10$Pv20yAEz8o002qPImy2WIuGb5l44X5U4vxqi57ZAbWKu7QoF.sRDa', NULL, '2020-10-06 11:21:06', '2020-10-11 11:47:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savedjobs`
--
ALTER TABLE `savedjobs`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
