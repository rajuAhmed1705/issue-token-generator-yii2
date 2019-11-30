-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 06:33 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `issue`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `user_id` varchar(64) COLLATE utf8_bin NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1574858442),
('developer', '3', 1574858530),
('developer', '8', 1574942732),
('project manager', '5', 1574929130),
('super admin', '1', 1574914886);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `rule_name` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `data` text COLLATE utf8_bin,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/admin/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1574858363, 1574858363),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/default/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/default/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/create', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/update', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/menu/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/create', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/update', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/permission/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/assign', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/create', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/delete', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/remove', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/update', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/role/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/assign', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/create', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/route/remove', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/create', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/update', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/rule/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/*', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/activate', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/delete', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/index', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/login', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/logout', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/signup', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/admin/user/view', 2, NULL, NULL, NULL, 1574858404, 1574858404),
('/assign/*', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/assign/create', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/assign/delete', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/assign/index', 2, NULL, NULL, NULL, 1574858480, 1574858480),
('/assign/issu-update', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/assign/update', 2, NULL, NULL, NULL, 1574858498, 1574858498),
('/assign/updatestatus', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/assign/view', 2, NULL, NULL, NULL, 1574914768, 1574914768),
('/debug/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/index', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/default/view', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/user/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/*', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/action', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/diff', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/index', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/preview', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/gii/default/view', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/issue/*', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/issue/create', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/issue/delete', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/issue/index', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/issue/update', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/issue/view', 2, NULL, NULL, NULL, 1574914773, 1574914773),
('/project/*', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/project/create', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/project/delete', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/project/index', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/project/update', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/project/view', 2, NULL, NULL, NULL, 1574914780, 1574914780),
('/site/*', 2, NULL, NULL, NULL, 1574941231, 1574941231),
('/site/about', 2, NULL, NULL, NULL, 1574914812, 1574914812),
('/site/captcha', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/contact', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/error', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/index', 2, NULL, NULL, NULL, 1574915312, 1574915312),
('/site/login', 2, NULL, NULL, NULL, 1574915302, 1574915302),
('/site/logout', 2, NULL, NULL, NULL, 1574915302, 1574915302),
('/site/request-password-reset', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/resend-verification-email', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/reset-password', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/site/signup', 2, NULL, NULL, NULL, 1574914812, 1574914812),
('/site/verify-email', 2, NULL, NULL, NULL, 1574941328, 1574941328),
('/user/*', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('/user/create', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('/user/delete', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('/user/index', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('/user/update', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('/user/view', 2, NULL, NULL, NULL, 1574914791, 1574914791),
('admin', 1, NULL, NULL, NULL, 1574858424, 1574858424),
('developer', 1, NULL, NULL, NULL, 1574858457, 1574858457),
('project manager', 1, 'Project manager can CRUD projects', NULL, NULL, 1574916196, 1574916196),
('super admin', 1, NULL, NULL, NULL, 1574914851, 1574914851);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/admin/*'),
('admin', '/admin/assignment/*'),
('admin', '/admin/assignment/assign'),
('admin', '/admin/assignment/index'),
('admin', '/admin/assignment/revoke'),
('admin', '/admin/assignment/view'),
('admin', '/admin/default/*'),
('admin', '/admin/default/index'),
('admin', '/admin/menu/*'),
('admin', '/admin/menu/create'),
('admin', '/admin/menu/delete'),
('admin', '/admin/menu/index'),
('admin', '/admin/menu/update'),
('admin', '/admin/menu/view'),
('admin', '/admin/permission/*'),
('admin', '/admin/permission/assign'),
('admin', '/admin/permission/create'),
('admin', '/admin/permission/delete'),
('admin', '/admin/permission/index'),
('admin', '/admin/permission/remove'),
('admin', '/admin/permission/update'),
('admin', '/admin/permission/view'),
('admin', '/admin/role/*'),
('admin', '/admin/role/assign'),
('admin', '/admin/role/create'),
('admin', '/admin/role/delete'),
('admin', '/admin/role/index'),
('admin', '/admin/role/remove'),
('admin', '/admin/role/update'),
('admin', '/admin/role/view'),
('admin', '/admin/route/*'),
('admin', '/admin/route/assign'),
('admin', '/admin/route/create'),
('admin', '/admin/route/index'),
('admin', '/admin/route/refresh'),
('admin', '/admin/route/remove'),
('admin', '/admin/rule/*'),
('admin', '/admin/rule/create'),
('admin', '/admin/rule/delete'),
('admin', '/admin/rule/index'),
('admin', '/admin/rule/update'),
('admin', '/admin/rule/view'),
('admin', '/admin/user/*'),
('admin', '/admin/user/activate'),
('admin', '/admin/user/change-password'),
('admin', '/admin/user/delete'),
('admin', '/admin/user/index'),
('admin', '/admin/user/login'),
('admin', '/admin/user/logout'),
('admin', '/admin/user/request-password-reset'),
('admin', '/admin/user/reset-password'),
('admin', '/admin/user/signup'),
('admin', '/admin/user/view'),
('admin', '/issue/delete'),
('admin', '/issue/index'),
('admin', '/issue/update'),
('admin', '/issue/view'),
('admin', '/site/*'),
('admin', '/site/about'),
('admin', '/site/captcha'),
('admin', '/site/contact'),
('admin', '/site/error'),
('admin', '/site/index'),
('admin', '/site/login'),
('admin', '/site/logout'),
('admin', '/site/request-password-reset'),
('admin', '/site/resend-verification-email'),
('admin', '/site/reset-password'),
('admin', '/site/signup'),
('admin', '/site/verify-email'),
('admin', '/user/*'),
('admin', '/user/create'),
('admin', '/user/delete'),
('admin', '/user/index'),
('admin', '/user/update'),
('admin', '/user/view'),
('developer', '/admin/user/login'),
('developer', '/assign/index'),
('developer', '/assign/issu-update'),
('developer', '/assign/update'),
('developer', '/issue/*'),
('developer', '/issue/update'),
('developer', '/project/index'),
('developer', '/site/about'),
('developer', '/site/index'),
('developer', '/site/login'),
('developer', '/site/logout'),
('developer', '/user/index'),
('project manager', '/project/*'),
('project manager', '/site/about'),
('project manager', '/site/index'),
('project manager', '/site/login'),
('project manager', '/site/logout'),
('project manager', '/site/signup'),
('super admin', '/admin/*'),
('super admin', '/admin/assignment/*'),
('super admin', '/admin/assignment/assign'),
('super admin', '/admin/assignment/index'),
('super admin', '/admin/assignment/revoke'),
('super admin', '/admin/assignment/view'),
('super admin', '/admin/default/*'),
('super admin', '/admin/default/index'),
('super admin', '/admin/menu/*'),
('super admin', '/admin/menu/create'),
('super admin', '/admin/menu/delete'),
('super admin', '/admin/menu/index'),
('super admin', '/admin/menu/update'),
('super admin', '/admin/menu/view'),
('super admin', '/admin/permission/*'),
('super admin', '/admin/permission/assign'),
('super admin', '/admin/permission/create'),
('super admin', '/admin/permission/delete'),
('super admin', '/admin/permission/index'),
('super admin', '/admin/permission/remove'),
('super admin', '/admin/permission/update'),
('super admin', '/admin/permission/view'),
('super admin', '/admin/role/*'),
('super admin', '/admin/role/assign'),
('super admin', '/admin/role/create'),
('super admin', '/admin/role/delete'),
('super admin', '/admin/role/index'),
('super admin', '/admin/role/remove'),
('super admin', '/admin/role/update'),
('super admin', '/admin/role/view'),
('super admin', '/admin/route/*'),
('super admin', '/admin/route/assign'),
('super admin', '/admin/route/create'),
('super admin', '/admin/route/index'),
('super admin', '/admin/route/refresh'),
('super admin', '/admin/route/remove'),
('super admin', '/admin/rule/*'),
('super admin', '/admin/rule/create'),
('super admin', '/admin/rule/delete'),
('super admin', '/admin/rule/index'),
('super admin', '/admin/rule/update'),
('super admin', '/admin/rule/view'),
('super admin', '/admin/user/*'),
('super admin', '/admin/user/activate'),
('super admin', '/admin/user/change-password'),
('super admin', '/admin/user/delete'),
('super admin', '/admin/user/index'),
('super admin', '/admin/user/login'),
('super admin', '/admin/user/logout'),
('super admin', '/admin/user/request-password-reset'),
('super admin', '/admin/user/reset-password'),
('super admin', '/admin/user/signup'),
('super admin', '/admin/user/view'),
('super admin', '/assign/*'),
('super admin', '/assign/create'),
('super admin', '/assign/delete'),
('super admin', '/assign/index'),
('super admin', '/assign/issu-update'),
('super admin', '/assign/update'),
('super admin', '/assign/updatestatus'),
('super admin', '/assign/view'),
('super admin', '/issue/*'),
('super admin', '/issue/create'),
('super admin', '/issue/delete'),
('super admin', '/issue/index'),
('super admin', '/issue/update'),
('super admin', '/issue/view'),
('super admin', '/project/*'),
('super admin', '/project/create'),
('super admin', '/project/delete'),
('super admin', '/project/index'),
('super admin', '/project/update'),
('super admin', '/project/view'),
('super admin', '/site/*'),
('super admin', '/site/about'),
('super admin', '/site/captcha'),
('super admin', '/site/contact'),
('super admin', '/site/error'),
('super admin', '/site/index'),
('super admin', '/site/login'),
('super admin', '/site/logout'),
('super admin', '/site/request-password-reset'),
('super admin', '/site/resend-verification-email'),
('super admin', '/site/reset-password'),
('super admin', '/site/signup'),
('super admin', '/site/verify-email'),
('super admin', '/user/*'),
('super admin', '/user/create'),
('super admin', '/user/delete'),
('super admin', '/user/index'),
('super admin', '/user/update'),
('super admin', '/user/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `issue_assign`
--

CREATE TABLE `issue_assign` (
  `id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `assign_dev` int(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `issue_assign`
--

INSERT INTO `issue_assign` (`id`, `issue_id`, `assign_dev`, `status`) VALUES
(4, 4, 3, 1),
(5, 4, 3, 1),
(6, 5, 3, 1),
(7, 8, 3, 1),
(8, 6, 3, 1),
(9, 7, 6, 2),
(10, 6, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `issue_table`
--

CREATE TABLE `issue_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone_no` int(20) NOT NULL,
  `project_id` int(11) NOT NULL,
  `issue_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `status` int(2) NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `issue_table`
--

INSERT INTO `issue_table` (`id`, `name`, `email`, `phone_no`, `project_id`, `issue_type`, `status`, `message`) VALUES
(4, 'raju', 'raju@gmail.com', 1771622411, 1, 'moderate', 1, 'not logging in'),
(5, 'raju', 'raju@gmail.com', 1771522411, 3, 'moderate', 1, 'web app does not work'),
(6, 'sufia kamal', 'sufia@gmail.com', 1111111, 2, 'moderate', 1, 'problem loading front end'),
(7, 'sufia kamal', 'sufia@gmail.com', 1111111, 2, 'moderate', 2, 'problem loading front end'),
(8, 'raju', 'raju@gmail.com', 1771622411, 1, 'moderate', 1, 'login data'),
(9, 'raju', '2', 1771622411, 1, 'serious', 2, 'index page does not load');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_bin NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1574664320),
('m130524_201442_init', 1574664328),
('m140602_111327_create_menu_table', 1574669681),
('m160312_050000_create_user', 1574669681),
('m190124_110200_add_verification_token_column_to_user_table', 1574664328);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `type`, `status`) VALUES
(1, 'employee attendance', 'web app', 'finished'),
(2, 'hadith', 'web app', 'running'),
(3, 'issue generator', 'web app', 'running'),
(4, 'assurance', 'web app', 'running');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, '', 'raju', 'ZhL8KEaY1Xh9sSk3slQTfIcJW3FOBDus', '$2y$13$3/g5HZxePyeVO5usvlQyWOe1UvokiEnGiZsw/.Y9KYkyJEqBO4MIm', NULL, 'raju@gmail.com', 10, 1574664367, 1574664367, 'KJUpkFkLI-2NO4swMc2twCA1qlvjib6e_1574664367'),
(3, 'raju ahmed', 'raju1', '788V6Fb0URMqX65b5IKDQ-908qkwiPe5', '$2y$13$gbhHjjAOT5WVizpT86OhguABkOatP6nrf7l3BIUsN157I8yje4H52', NULL, 'raju1@gmail.com', 10, 1574665554, 1574665554, 'jcHwPXgOF6eZO1QeXpugiGynHPOpi8p0_1574665554'),
(5, 'kobi guru', 'kobi', '_q0BSNXEdTTdFe2o6WpVk244n4WgzmSf', '$2y$13$5DXxU41VAcXRn8H8QqAUg.eLNd5rLZ8cTiS.YvMleuh9l0p6Xd/2m', NULL, 'kobi@gmail.com', 10, 1574685307, 1574685307, 'W2RyDyotya7RMZY9xoqPAjtQ1fLAToBj_1574685307'),
(6, 'jesse pinkman', 'jesse', 'JDHx_t30JX-rLMWyQqhSeJgWfvMaCshk', '$2y$13$hBYLNJgvYhFrKIdpaarWm.rL4jR6zpIZmxGDVirJIYy.1PBmlBOqS', NULL, 'jesse@gmail.com', 10, 1574688340, 1574688340, 'wz_3a07rJfCIyVGoW827dBqOK9AGA_Mi_1574688340'),
(8, 'walter white', 'walter', 'JKRMcLWOzMHa200HMY_OKbcbuSZku11h', '$2y$13$J69DUML7bf5ioJ5IAjoAEuZPTyTtGXPwAVMSV8DyqAa8huZlyh0m.', NULL, 'walter@gmail.com', 10, 1574741733, 1574741733, 'L_IeX12gW-UmUcitHRkkRo3Gw8Aa17zS_1574741733');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `issue_assign`
--
ALTER TABLE `issue_assign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_assign_ibfk_1` (`assign_dev`),
  ADD KEY `issue_assign_ibfk_2` (`issue_id`);

--
-- Indexes for table `issue_table`
--
ALTER TABLE `issue_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_assign`
--
ALTER TABLE `issue_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `issue_table`
--
ALTER TABLE `issue_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `issue_assign`
--
ALTER TABLE `issue_assign`
  ADD CONSTRAINT `issue_assign_ibfk_1` FOREIGN KEY (`assign_dev`) REFERENCES `user` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `issue_assign_ibfk_2` FOREIGN KEY (`issue_id`) REFERENCES `issue_table` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `issue_table`
--
ALTER TABLE `issue_table`
  ADD CONSTRAINT `issue_table_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
