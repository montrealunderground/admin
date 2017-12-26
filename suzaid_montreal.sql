-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 02:00 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suzaid_montreal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannerimages`
--

CREATE TABLE IF NOT EXISTS `bannerimages` (
  `id` int(11) NOT NULL,
  `imagename` varchar(100) COLLATE utf8_bin NOT NULL,
  `title` varchar(64) COLLATE utf8_bin NOT NULL,
  `title_fr` varchar(64) COLLATE utf8_bin NOT NULL,
  `title_cn` varchar(64) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bannerimages`
--

INSERT INTO `bannerimages` (`id`, `imagename`, `title`, `title_fr`, `title_cn`, `link`) VALUES
(1, 'home-banner1.jpg', 'Centre Eaton', 'Eaton Centre', '伊顿中心', 'https://www.facebook.com/barbieexpo/'),
(2, 'home-banner2.jpg', 'Centre Bell', 'Bell Centre', '中心贝尔', 'https://www.facebook.com/barbieexpo/'),
(3, 'home-banner3.jpg', 'Mat & Max', 'Mat & Max', '马特和马克斯', 'https://www.facebook.com/barbieexpo/'),
(4, 'home-banner4.jpg', 'Takara', 'Takara_fr', '塔卡拉', 'https://www.facebook.com/barbieexpo/'),
(5, 'home-banner5.jpg', 'Panizza', 'Panizza_fr', '披萨', 'https://www.facebook.com/barbieexpo/'),
(6, 'home-banner6.jpg', 'Sandouchon', 'Sandouchon_fr', '桑杜呃', 'https://www.facebook.com/barbieexpo/'),
(7, 'home-banner7.jpg', 'Biboss', 'Biboss', '比老板', 'https://www.facebook.com/barbieexpo/'),
(8, 'home-banner8.jpg', 'ZARA', 'ZARA', '扎拉', 'https://www.facebook.com/barbieexpo/'),
(9, 'home-banner9.jpg', 'Archambault', 'Archambault', 'Archambault', 'https://www.facebook.com/barbieexpo/'),
(10, 'home-banner10.jpg', 'Ambermax', 'Ambermax', '安伯玛', 'https://www.facebook.com/barbieexpo/'),
(11, 'bsfvns42u02yc6rs9si93jxwldqdtnjab1.png', 'Montreal Souterrain', 'Montreal Souterrain', '蒙特利尔地下', 'https://www.facebook.com/barbieexpo/');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('104afba29043d8883566faf986e56596', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493232628, ''),
('12b309a61779bf66adf44c680efcc7e0', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231835, ''),
('301bf4f6d6c94403ece79d394dd0fb93', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493268587, ''),
('38a4892b107074f11ec09812d858728e', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248316, ''),
('4732f7398dd3eba87a618a4779655fee', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248656, ''),
('4c5c4cae679f02edf564517f80bef243', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493236615, ''),
('5cabbd3bf9ab02012f1a74b1971746b2', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493269600, ''),
('5dcde0f65faf9d1e930663a652849d50', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493251304, ''),
('685aaa74f2d4f486d5a39b7c2bb2fa0a', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493247165, ''),
('689f2b3859366712b1005cb366e82ad8', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493251409, ''),
('6a918f64619e8b592f38036acdf3791b', '2.50.73.253', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493230879, ''),
('73a0942e69cdb00553a3536d7abaf246', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231787, ''),
('76d224d1edf233361a58c0847e233c57', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493236615, ''),
('79c6c6d87c3411400f714945ac2a01c3', '2.50.73.253', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493230879, ''),
('7ac76f1eed8af3d9b084ea45d89e4235', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493232628, ''),
('883a0311b217cbdb35b09d38b281a13f', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231835, ''),
('8b8d565584bae384e24598ddcff94c02', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493245895, ''),
('98c68b7115ab99fe2c2664687af01ae5', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493251302, ''),
('9d599495fc756c9e181a0d392bf72007', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493236615, ''),
('9d8a80cf703d1db7e38fb2552978b1da', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493251541, ''),
('a3a4f6bb18d32f6f41035564c5e7e725', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493247162, ''),
('ace9c2bae5d76c9aac1f63a097f02667', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231835, ''),
('c3ea448ea4ce226fddff6e8a9e9dbbbf', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493247165, ''),
('c6019411af5ca77f0ce8e353aaa244c5', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493251304, ''),
('c8ddcb5fd661275a929cd86bc3a0c595', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248654, ''),
('cb1e93dc6678d5d67b16ecb56f0f5aba', '2.50.73.253', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493230879, ''),
('cb2efcf5de12fcf8cebfe204b4298539', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493232628, ''),
('d62bf57386ac2db9244a0ab5b01b7efb', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248316, ''),
('db70101982f2db3224120af2dc499cf5', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231787, ''),
('de95058e8b6057b62b2f5e5f5794859a', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493236615, ''),
('e28ecae8e73b761b903acaf6dbe863fa', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248656, ''),
('e57d303ccbfc5bd0b8d619b4d1a62448', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231787, ''),
('ebbdc579452124ac6a2bd535b3bed9a6', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493248314, ''),
('f1ed2507b7199aaf214e28a9d4778ef4', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231835, ''),
('f4b61b1021da029c7c3ac5e33d2e3f9e', '70.81.209.105', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493231787, ''),
('f57f27be6b71ef8767eef80b17ffad5d', '2.50.73.253', 'Dalvik/2.1.0 (Linux; U; Android 7.0; SM-N920C Build/NRD90M)', 1493245532, ''),
('f6f061ae0f86d492815431022c343f87', '2.50.73.253', 'Montreal/1.4.1 (com.vortexapp.montreal; build:1.4.1; iOS 10.2.1) Alamofire/1.4.1', 1493230879, '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `userid` varchar(64) CHARACTER SET latin1 NOT NULL,
  `token` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pictureUrl` varchar(200) CHARACTER SET latin1 NOT NULL,
  `isfb` tinyint(1) NOT NULL DEFAULT '1',
  `undercoin` varchar(11) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `history` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `userid`, `token`, `pictureUrl`, `isfb`, `undercoin`, `history`) VALUES
(18, 'Najib Lutfi Aaqil', '210263952805241', 'EAADEsk0F1BcBACHaHrsbY4sAZAaLLDP9IzZBvq37TlR91Iu4eZBHzVwF6EM3kqWZAmT9vGFoFyVeLK1PBZAu3HogrWYqqILvYGK8t4SkY6nlFSMCQFhPZCgxXXvQI6jKvBiac67ezXi6agAGWrkWFd4z0S6ZBg9zjB75kY7pAEg8sHfUl7nm65Y1d6qZCu7jzOYUVYu', 'https://fb-s-b-a.akamaihd.net/h-ak-xfa1/v/t1.0-1/c15.0.50.50/p50x50/10354686_10150004552801856_220367501106153455_n.jpg?oh=df01630bb28d905025f6ed83bee71510&oe=5987FB2F&__gda__=1502561938_6fdaed9c5401c', 1, '90', ''),
(19, 'William A.', '194440377739974', 'EAADEsk0F1BcBAHw1nLzBFTOnK6iRQ3LbgajK3evTzZAn2AnyXYbIyd1cO6zb7ZB6aSxCyi8Q6HZAGEDmlFt3bJIWh7jJXIzHERzjrO4NobvmZBco7rroPtxZAbQIVnVnX2ABFgUZABPYdkdMVOvkGfufJQcHpL9ZB9p2u4JNkWgZBqT4x6wZCJ7zXTNFQyRZANMgNjt', 'https://graph.facebook.com/194440377739974/picture?height=512&width=512&migration_overrides=%7Boctober_2012%3Atrue%7D', 1, '3', ''),
(21, 'WilliamA', '108630000034515973600', '', 'https://lh6.googleusercontent.com/-1o-JwdVDfpg/AAAAAAAAAAI/AAAAAAAAAG0/T-JlozqZh0g/photo.jpg', 0, '3', ''),
(22, 'Leandra Hashem', '284288395362376', 'EAADEsk0F1BcBAC41VRQv8xp6yISHxxdLlGu5XV28ydZAurBvf2zoIBKzeJk7MIAwsy5RW8NjHstPtiFDDgyHZB0ujDaJJRvA9yLvHCOUXTfK5MAB7D3MI38tso5F9KYsvg1N3v6BpiqpowhlwDEyZB0L2KZBFbQnrIu0ntQ7bO1IHrw3mpNNj7qce5ycCErp6HNu7QS', 'https://graph.facebook.com/284288395362376/picture?height=512&width=512&migration_overrides=%7Boctober_2012%3Atrue%7D', 1, '120', ''),
(23, 'David A.', '208162433021436', 'EAADEsk0F1BcBAFZAkvqhWAkpPKTZAXjyhmaRLoNJtXpxcEIdXGfirZBHlAWyIOySfNPc1e7PW5Y8bZCqXEtIjtKCXXhht0uk8TZA8X0tXeGDUX2r2kLaZCqOvHKWH4WEBtv1VdgH5NjQEL5hJ534ArS0WSaQpwTRzN52opKH1OTOdQrxAjZAnq71TiJcfHpyKCp2YR1', 'https://graph.facebook.com/208162433021436/picture?height=512&width=512&migration_overrides=%7Boctober_2012%3Atrue%7D', 1, '0', ''),
(24, 'Elias Geha', '10158568282415597', 'EAADEsk0F1BcBALnJ4Jj9ueIjsuqlnY4jkDNJpW1MBm6y8cfftxxNj1W7zdZAnDWHliW95sbRh776mTREJ0xwQwTKOXr3GkdMelZCoHvfEYbaNM5kyBlHtfJIcI8DAJVZAECHZBKqwxsZBb0N7K9KoflZBZCcmIprKMYSwWJwLlJCnhJIGWF4eMDR3kBYbS8UpZAAr4v', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1000274_10154699569090597_4176536098650483047_n.jpg?oh=3bcf57b0585c49cc9fdbb584513e0c68&oe=59912F54', 1, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `devicetokens`
--

CREATE TABLE IF NOT EXISTS `devicetokens` (
  `id` int(11) NOT NULL,
  `devicetoken` varchar(200) NOT NULL,
  `devicetype` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devicetokens`
--

INSERT INTO `devicetokens` (`id`, `devicetoken`, `devicetype`) VALUES
(1, 'fGNTf7NUm_0:APA91bEEir-zlMEL5Uc0i5Zd8dxFrrCbLazWjGMnQ9RrlkAwthAIr2JM8AGiqqAU4ACBnT3JXaemNMfU2b7oU6rDhOgppAFKwYXAxpzoupXL_XuPFflUOXTe-OBavqAhm30CRkpF1Hf-', 'android'),
(14, '8D89A063C251D1C1CA647DAAE377C5A5E7ACA86BD1DBFA4658BC0DCF9DC860B3', 'iOS'),
(15, '1868BFFCF1DA529EAAF66F2DA070061337406210B229A15290EC9AB9616F7DD8', 'iOS'),
(16, '0F98080478CF64961EDE8675670FFA29DABF0D857848D320D2B92E465D612286', 'iOS'),
(17, '2D015606F5D5F1B8A9FDCDC63F1723E74139262FAA053C89291A1E0D4B7CF5BC', 'iOS'),
(18, 'F1C3F2F9976C7601D2CAB46A7F10D97D5FC384707FBD86D6AAF221211931BDB5', 'iOS'),
(19, '25A7A502396EE7041E2161FF99F9F5B2960061D1C05C43597FC8CF57EDB970FF', 'iOS'),
(20, 'cY8bwvd5d8Y:APA91bHHMhuaI7YtDceP5RhA533iKBLIRDVS8CRTwaEyP8EDrsv-KqTEt_a3zDPLVIJOLw6P2ffdeaqDG4c9LtAivCvIrC2MULTg4ZiBSgX-bNVFreGPeU-gu8NwOVFEFBZrt5liwv_x', 'android'),
(21, 'fsmiJo86YLM:APA91bGqB3QmiHMJOLCok0SRSeMAD8vAyRg7b2vk1OYEvyqahQ5ctxkjqhBzsnfJN1YQCLi6pqZrcZtkopE0HtATLbbIGiltYiqF5hFwYwHu-7V8A7BogORHgYYc1EfdwLYXJH7caDba', 'android'),
(22, 'A84C62C47D840C46B44A78BC217967461F9830EBECA293F1855DDAEFD7312F39', 'iOS'),
(23, 'eiCrl4StuUI:APA91bFNKOLbvsNBtzMu1k_sVOtF5hvsQV3d2jKxVzxfg0pAUhVM07yHrjb6-pgbIXE1JaNqiW_DeSt2f7Oimeo3Kem6c0e-GGvhL19NapbbnYONBkylZeSZiMe0wQAe0TqXRWi1dxiz', 'android'),
(24, 'F69C0656C733A2F629C933B98C0CD0733408F00708D66C9C6808FF1D858825E3', 'iOS'),
(25, 'ev2Ea_wZZag:APA91bEkEmNYADTewO3R2rDRtrVE8l9WKR-JBrwA8igzo_AmrceNiMYu_OuIG0HzubB4oVQGlccQAp4KfGFkuwbDGshRszF3Q2jXBDIPw2I7J1vUJGbkIjQF8bRdRk331ua3XbcmaK7G', 'android'),
(26, 'E3BB5D38353066C7155ADC01C1D3BED85F38D55693A5BB686717556456B9B0FC', 'iOS'),
(27, 'E12AF1131BC12BE067F9372572E9127E5337FEE24A9B554C5E90FC18CA45ACE4', 'iOS'),
(28, 'eIV1oDjhn60:APA91bFEnB2xHZ2NqOBmKIAK41ScnBHpFIpoDxpA3BOz27hyUBkv4m4UB4LbsYRoD1Way2a9FATCewND4TtmmO__delIUgoHVK0Nog9DuAOWowPvjDAfrwKM1EipU5a2ftpMsiU38YFR', 'android'),
(29, 'cSHtJy17JZQ:APA91bHT5XQwim78-VjbJutgMrig_njMGE-NX_IJWln4EudTVhnCg3tnhU4SPT6AXbocP55MIxc_Rv1qBYNW6M9ANtPPfJx63nXKer6Q8KGIiF4iGOvYiYISJsU2zMv0OhOxqr3P9-4w', 'android'),
(30, '7B108ED43A17506CC9EA96AC3A761F7FC959468D12CC083822D4A81F9FA43508', 'iOS'),
(31, 'djHYTA1QFmE:APA91bGBZRlARPJgWrNQke_YNZmifrdG9tJPGvc07jo1rGN-pJVpx_LF_2smmutGsNwdllb3PVfdytVM7-Hku8oBJKmdDus64HKm6TY7vdOfyTSwlpQr454Sw0k8Jpj4M4A2-Iy1bXoW', 'android'),
(32, 'eWWHzYbCloI:APA91bEdNl9ULiPXbvcVPxS2UY2IQF09gn5ge3S9NlWzGMkSjcfn_aGV56-G8dCOHnsokc3R1e50sqV76EwsJMNdw8nAK2wEkU-HZgaKzvBd2HAq44N-m7mcPvmgkv1rYs4INTPMtMbb', 'android'),
(33, 'eXD7z_leNtI:APA91bHnvxrjx-lujLd7w1fXOAwu4biVcUPqDiuYmfNH4AoNNfTXgawcIB7v8BqPTT3AwLWZ-vM1v8W_UsAT6PqHfRzkT-AWJbYDrHLgAsR-xYMUxBuBrjajY-iDkch8_whoZgTPnIIS', 'android'),
(34, 'd7hNETT5jXU:APA91bFMaaSQjqbZ1T3t3iL_OqlZtIMXcK6MtpN2SDNmxpvZ1MF4iqi_mVQiHYpvGgcggnSsT7pXk21Rg-DmcC4-t0ySdFI_AOnmrtRiA4KUzecwpB6JpxV9aYIrEy2yiVJ7trWJ8Knm', 'android'),
(35, 'cHab8c7OxP8:APA91bFuhVd0qKqnW7G6pzx0YoVk1CwNCicyKYuVLA4-k6L4dHqnOOHoip9jnRZgduwPvrHi2AmHs7N_7TJG8s-FC6o7gLoIUcafHd4qn15YV7iD0EKKLIduVIWiF8ahqlpjORVXNcBL', 'android'),
(36, 'B31906E12B56093F7F2657A0E6416EE18584C8B43944934067DB582B98EF31F9', 'iOS'),
(37, '6B1B260811450D70D9DAF492E1DC327440B0CFA54BE304AEF2FDE9F323F3FDA1', 'iOS'),
(38, '198B96C7D454777C5B1A40EF1D2C79422285E310702CD9A03B830C9FD5675B0E', 'iOS'),
(39, 'eT9vBRdT8MY:APA91bHTdf74bVmRu-FaA7QJx7HQ9a6kNCuk2d5sqSTAJHqdXzKGtjQwWDYotgS2x36pa4Xqw2Nbj036WociIkpvbc-uotJKuF7Kh9Hb0LBmshT7VCoVvfksfDVd5jXr5l2c1sChRY8N', 'android'),
(40, 'C57C9E91ABF52FE6EDB508C8D0DFAA540F5E365E1B6C232D6CA08B79CEFC2CE0', 'iOS'),
(41, '86DFDDB83A8A19E1118694AE638CD6231FEB1D2E30A363C8763379A83F3D0F9F', 'iOS'),
(42, 'fQTt2QcNkUQ:APA91bFmyIlm3Q5MchkvNbmBaSTAeAsbxfvRbzDYVz17xpB05dWCqR7ur0AgtXVpAqX8406VodgZbxHiQJehHNCrEZ0Yo4logHj2b-6nK1EsCn_eP6BK3FNyArw3h2nrOEmpyF0atrkr', 'android'),
(43, 'fyHcRq1iq7c:APA91bGEu548-pxYKA_sT0UDe9hDgZ8-UC5NLDNbG6yQ3-ok39ym_QbP0sXfk931Y4iHg0pskONiLDDMpDMkshVOEJyxVURHzblWwCqlhKDSelenTIT1I45sbbp8WFIBMU5YAKx80Qcd', 'android'),
(44, 'd0ggf5ylDg0:APA91bG3k0zXXA0VGIjl04WJm3z0KRH7sUo2zIUMMZJ21e5NucStRo7vLJba9VZjcs_W35XyOpA3BbCpdjyRE7koU4r6n48PpFtEwcbxlS0tex6XH9PcEp45Z1cLWrfTGXkhjYiFKP2Y', 'android'),
(45, 'cZD283uze-c:APA91bFqyrlpzlpOL5Lz0ccE2xWXBjYwY5Mhi4DOTSBhVIfiVSvmsxqBmpmMEd1J6pPrCvQpc5fpanKZCh1Ae2zlO-kbU1RUMb6C9KXkt47_ID3H46tO-a0z0u1-0NHzGta73o0lw1OE', 'android'),
(46, 'dYscjRACKqU:APA91bGhefCp4t-QRUe7g1Ai6bFrpSe6IiaG5rwn7K_Fo2ziS18fyi7BA-QceIM7kPuirJd1BBAOYqMKi95H1uFYo2koY61bekDQePbwRFNUnjkIZCuSlIB020zNAx6URX9wtL0FP-V7', 'android'),
(47, 'c5Hqj8hCgAM:APA91bEOvTgMf7XWvtuMlbsdq_lF4XRERdC1zEAFrksiE1NCKyjM_4CogXZntFBVHuT-cB9wusdWPhKikQyp4phehYOA07pH630XK3KH34-TOZKb0VZsUaM4hNJ7wj2H_92XEyI0qG-b', 'android');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `title_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `title_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(100) COLLATE utf8_bin NOT NULL,
  `subtitle_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `subtitle_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  `type_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `type_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `description_fr` mediumtext COLLATE utf8_bin NOT NULL,
  `description_cn` mediumtext COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL,
  `imagename` varchar(100) COLLATE utf8_bin NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `title_fr`, `title_cn`, `subtitle`, `subtitle_fr`, `subtitle_cn`, `type`, `type_fr`, `type_cn`, `description`, `description_fr`, `description_cn`, `contact`, `link`, `imagename`, `start_date`, `end_date`) VALUES
(5, 'Kinky Boots', 'Fr_Kinky Boots', '柔软的靴子', 'Places', 'Place des Arts', '地方', 'Music', 'Musicals', '音乐', 'Klinky Boots took home six 2013 Tony Awards.', 'fr_Klinky Boots took home six 2013 Tony Awards.', '柔软的靴子夺回了6项2013年托尼奖', '12345678', 'https://www.hotelscombined.com/Place/Montreals_Underground_City.htm', 'ddc9nakhso82nopsgz7uy0fnfitb6y9h6o.jpg', '2017-04-28 00:04:00', '2017-05-11 06:05:00'),
(6, 'Capitals vs. Canadiens', 'Fr_Capitals vs Canadiens', '首都与加拿大人', 'Hockey', 'En vedette', '曲棍球', 'Hockey', 'Hocky', '曲棍球', 'The Oilers striker talks about his partner', 'fr_L''attaquant des Oilers parle de son partenaire ', '关于他的搭档攻击油工会谈', '12345678', 'https://www.hotelscombined.com/Place/Montreals_Underground_City.htm', 'kk8y9chly0wc1cupuerm4gnegoa4vfgmfb.jpg', '2017-04-12 00:00:00', '2017-04-19 00:00:00'),
(7, 'Tristan', 'Tristan', '特里斯坦', 'Montreal Fashion', 'Montréal Mode', '蒙特利尔时装', 'LifeStyle', 'Mode de vie', '生活方式', 'Place Ville Marie\r\n1001. rue Ste-Catherine O\r\nPromenades de fa Catherdrale', 'Place Ville Marie\n1001. rue Ste-Catherine O\nPremenades de la Cathedrale', '将Ville Marie酒店 1001圣凯瑟琳街 大教堂散步发', '12345677', 'http://www.matandmax.com/us-en/', 'd5g1t91pnficl7gktzk9hvggmq45wkjmx9.jpg', '2017-04-22 00:04:00', '2017-05-15 00:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `globals`
--

CREATE TABLE IF NOT EXISTS `globals` (
  `id` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `globals`
--

INSERT INTO `globals` (`id`, `keyname`, `value`) VALUES
(1, 'socialsharingbonus', '3'),
(2, 'advideobonus', '10');

-- --------------------------------------------------------

--
-- Table structure for table `interstitialads`
--

CREATE TABLE IF NOT EXISTS `interstitialads` (
  `id` int(11) NOT NULL,
  `screenname` varchar(64) COLLATE utf8_bin NOT NULL,
  `value` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `interstitialads`
--

INSERT INTO `interstitialads` (`id`, `screenname`, `value`) VALUES
(12, 'HomeViewController', 0),
(13, 'MetroPlanViewController', 0),
(14, 'UndergroundViewController', 0),
(15, 'EventViewController', 0),
(16, 'PromotionViewController', 0),
(17, 'FacebookViewController', 0),
(18, 'FeedbackViewController', 0),
(19, 'ContactViewController', 0),
(20, 'ShareViewController', 0),
(21, 'ShoppingViewController', 0),
(22, 'PlacesViewController', 0),
(23, 'JobsViewController', 0),
(25, 'AllMallsViewController', 0),
(26, 'MallListViewController', 0),
(27, 'RentViewController', 0),
(28, 'RentFormViewController', 0),
(29, 'PlaceDetailViewController', 0),
(30, 'PlaceListViewController', 0),
(31, 'EventDetailViewController', 0),
(32, 'LocationViewController', 0),
(34, 'MetroViewController', 0),
(35, 'JobListViewController', 0),
(36, 'ServiceListViewController', 0),
(37, 'MallDetailsViewController', 0),
(38, 'ARListViewController', 0),
(39, 'HotelsViewController', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8_bin NOT NULL,
  `title_fr` varchar(64) COLLATE utf8_bin NOT NULL,
  `title_cn` varchar(64) COLLATE utf8_bin NOT NULL,
  `company` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` varchar(64) COLLATE utf8_bin NOT NULL,
  `type_fr` varchar(64) COLLATE utf8_bin NOT NULL,
  `type_cn` varchar(64) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `description_fr` mediumtext COLLATE utf8_bin NOT NULL,
  `description_cn` mediumtext COLLATE utf8_bin NOT NULL,
  `contact` varchar(64) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `title_fr`, `title_cn`, `company`, `type`, `type_fr`, `type_cn`, `description`, `description_fr`, `description_cn`, `contact`, `link`) VALUES
(3, 'Sales Associate', 'Associé commercial', '销售助理', 'Bijoux et plus', 'Part Time', 'À temps Partiel', '兼职', 'You are enthusiastic, courteous and you enjoy working with customers in a fast-paced environment? Always up for challenges, the Sales Associate offers a unique customer experience by always representing the brand image through his/her attitude and product knowledge. We are looking for positive and motivated candidates to join our team!', 'Vous êtes enthousiaste, courtois et vous aimez travailler avec des clients dans un environnement à un rythme rapide? Toujours prêt à relever des défis, le Sales Associate offre une expérience client unique en représentant toujours l''image de marque à travers son attitude et sa connaissance des produits. Nous recherchons des candidats positifs et motivés pour rejoindre notre équipe!', '你有热情，有礼貌，你喜欢在快节奏的环境中与客户合作吗？ 始终面临挑战，销售助理提供独特的客户体验，始终以他/她的态度和产品知识代表品牌形象。 我们正在寻找积极和积极的候选人加入我们的团队！', '12345678', 'https://www.centreeatondemontreal.com/en/careers/jobs-montreal/bijoux-et-plus/142/73eed000-1594-4c8d-94d5-a6a0656ce02e/'),
(4, 'Sales Associate', 'Associé commercial', '销售助理', 'Mat & Max', 'Full Time', 'À plein temps', '全职', 'You are enthusiastic, courteous and you enjoy working with customers in a fast-paced environment? Always up for challenges, the Sales Associate offers a unique customer experience by always representing the brand image through his/her attitude and product knowledge. We are looking for positive and motivated candidates to join our team!', 'Vous êtes enthousiaste, courtois et vous aimez travailler avec des clients dans un environnement à un rythme rapide? Toujours prêt à relever des défis, le Sales Associate offre une expérience client unique en représentant toujours l''image de marque à travers son attitude et sa connaissance des produits. Nous recherchons des candidats positifs et motivés pour rejoindre notre équipe!', '你有热情，有礼貌，你喜欢在快节奏的环境中与客户合作吗？ 始终面临挑战，销售助理提供独特的客户体验，始终以他/她的态度和产品知识代表品牌形象。 我们正在寻找积极和积极的候选人加入我们的团队！', '12345678', 'https://www.centreeatondemontreal.com/en/careers/jobs-montreal/mat-max/125/bceb70db-eb55-4106-a66a-5ce05fbbe885/');

-- --------------------------------------------------------

--
-- Table structure for table `mappositions`
--

CREATE TABLE IF NOT EXISTS `mappositions` (
  `id` int(11) NOT NULL,
  `mapposition` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mappositions`
--

INSERT INTO `mappositions` (`id`, `mapposition`) VALUES
(1, 'Text_MLucienLAllier'),
(2, 'Text_MPeel'),
(3, 'Text_MBonaventure'),
(4, 'Text_MMcGill'),
(5, 'Text_MSquareVictoria'),
(6, 'Text_MPlacedesArts'),
(7, 'Text_MPlacedArmes'),
(8, 'Text_MSaintLaurent'),
(9, 'Text_CentreBell'),
(10, 'Text_GareWindsor'),
(11, 'Text_PlaceduCanada'),
(12, 'Text_PlaceduCanada1'),
(13, 'Text_SquareDorchester'),
(14, 'Text_CoursMontRoyal'),
(15, 'Text_CarrIndAll'),
(16, 'Text_PlaceMtlTrust'),
(17, 'Text_Le1000'),
(18, 'Text_PlaceBonaventure'),
(19, 'Text_GareCentrale'),
(20, 'Text_PlaceVilleMarie'),
(21, 'Text_CentreEaton'),
(22, 'Text_PromenadeCathedrale'),
(23, 'Text_LaBaie'),
(24, 'Text_PlacePhillips'),
(25, 'Text_PlaceFrereAndre'),
(26, 'Text_PlaceVictoria'),
(27, 'Text_BanqueNationale'),
(28, 'Text_CDPQ'),
(29, 'Text_CentredeCommerceMondial'),
(30, 'Text_PalaisdesCongres'),
(31, 'Text_ComplexeGuyFavreau'),
(32, 'Text_ComplexeDesjardins'),
(33, 'Text_PlacedesArts'),
(34, 'Text_QuartierdesSpectacles');

-- --------------------------------------------------------

--
-- Table structure for table `metros`
--

CREATE TABLE IF NOT EXISTS `metros` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_cn` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `metros`
--

INSERT INTO `metros` (`id`, `name`, `name_fr`, `name_cn`) VALUES
(1, 'Peel', 'Peel', ''),
(2, 'McGill', 'McGill', ''),
(3, 'Place-des-Arts', 'Place-des-Arts', ''),
(4, 'Lucien-L''Allier', 'Lucien-L''Allier', ''),
(5, 'Bonaventure', 'Bonaventure', ''),
(6, 'Square-Victoria - OACI', 'Square-Victoria - OACI', ''),
(7, 'Place-d''Armes', 'Place-d''Armes', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `id` int(11) NOT NULL,
  `mallid` int(11) NOT NULL,
  `storeid` int(100) NOT NULL,
  `amount` varchar(64) COLLATE utf8_bin NOT NULL,
  `amount_fr` varchar(64) COLLATE utf8_bin NOT NULL,
  `amount_cn` varchar(64) COLLATE utf8_bin NOT NULL,
  `period` varchar(100) COLLATE utf8_bin NOT NULL,
  `period_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `period_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `description_fr` mediumtext COLLATE utf8_bin NOT NULL,
  `description_cn` mediumtext COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL,
  `imagename` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `mallid`, `storeid`, `amount`, `amount_fr`, `amount_cn`, `period`, `period_fr`, `period_cn`, `latitude`, `longitude`, `description`, `description_fr`, `description_cn`, `contact`, `link`, `imagename`) VALUES
(6, 12, 5, '50%+', '50%+', '50%+', 'Christmas Festival', 'Fête de Noël', '圣诞节', 45.546363, -73.754376, 'As its name suggests, this building has become a crossroads of activity and people. A symbol of both the past and the future, the building goes back many years and is now carrying on gracefully into the third millennium. The Carrefour Industrielle Alliance is located in the heart of Montreal’s pedestrian network, one of the biggest in Canada. ', 'Comme son nom l''indique, ce bâtiment est devenu un carrefour d''activités et de gens. Symbole du passé et du futur, l''édifice remonte à de nombreuses années et se poursuit gracieusement jusqu''au troisième millénaire. L''Alliance Carrefour Industrielle est située au cœur du réseau piétonnier de Montréal, l''un des plus importants au Canada.', 'As its name suggests, this building has become a crossroads of activity and people. A symbol of both the past and the future, the building goes back many years and is now carrying on gracefully into the third millennium. The Carrefour Industrielle Alliance is located in the heart of Montreal’s pedestrian network, one of the biggest in Canada. ', '12345678', 'http://www.matandmax.com/salons/en/carreers.html', 'o782jd2q59wq41edtbbekdgrznah251m.jpg'),
(7, 13, 12, '33%', '50%', '50%', 'March 30th', 'Fête de Pâques', '复活节', 45.500907, -73.575164, 'Easter Festival\nMarch 3th', 'Fête de Pâques', 'Easter Festival', '5147068582', 'http://www.google.com', '7g3peqxxas0ckqrgw6ryemv6xtce5dnk.jpg'),
(8, 12, 6, '30%', '30%', '30%', 'Easter', 'Pâques', '复活节', 45.5127334, -73.7305202, 'Easter festival discount, great opportunity', 'Pâques', 'Easter festival discount, great opportunity', '0559223432', 'http://www.google.com', 'dd3veos7ztiggkc4t8ogfjpqs1by53yq.png'),
(9, 13, 8, '40%', '40%', '40%', 'Shopping Festival', 'Festival des achats', '购物节', 45.512734, -73.7305206, 'Shopping Festival', 'Festival des achats', 'Shopping Festival', '0559224222', 'http://www.facebook.com', 'wdfeb3jfsgpqxq4ipwtzpduqijmvnrky.png'),
(10, 13, 8, '40%', '40%', '40%', 'Canadian', 'Canadien', '加拿大人', 45.500147, -73.57589, 'Canadian', 'Canadien', 'Canadian', '0559224222', 'http://www.facebook.com', 'wdfeb3jfsgpqxq4ipwtzpduqijmvnrky.png'),
(12, 12, 11, '20%', '20%', '20%', '1 week', '1 semaine', '1周', 45.5127336, -73.7305208, '20% off ', '1 semaine', '20% off ', '5147068582', 'http://www.google.com', 'gz87s6d62aprzoschvkxdwy4ij18olmk.jpg'),
(13, 12, 6, '30%~70%', '30%~70%', '30%~70%', '3 months', '3 mois', '3几个月', 45.5127337, -73.7305206, 'MEGASOLDE DE NOVEMBRE', '3 mois', 'MEGASOLDE DE NOVEMBRE', '12345678', 'http://www.matandmax.com/salons/en/carreers.html', 'wln95gpl598c38e035bkeqxnakkczk99.jpg'),
(14, 12, 6, '30%~70%', '30~70%', '30~70%', '3 months', '3 mois', '3几个月', 45.5127335, -73.7305207, 'dolce & gateaux', 'Lundi, Mardi Mercredi', 'dolce & gateaux', '12345678', 'http://www.matandmax.com/salons/en/carreers.html', 'hibaxtjwvf5hzkrdrko4ij4pa3j3k489.jpg'),
(15, 13, 10, '20%', '20%', '20%', 'April 3rd, 2017 to April 6th, 2017', 'Voir Avril 0,2017 Taha Avril òû 0,2017', '查看四月0.2017塔哈月瓯0.2017', 45.500237, -73.574624, 'SALON VISEZ DROIT 2017\nFrom April 3rd, 2017 to April 6th, 2017\n\nIn addition to the combined presence of various organizations concerned with justice, Salon VISEZ DROIT’s goal is to inform and educate the public about individual rights and obligations and to promote a better understanding of the legal system.\nMost popular without doubt are the free legal consultations. Want advice on writing a will, ways to collect debts, the steps to follow when starting up a company or arranging a merger? There’s never a shortage of questions. During last year’s event, nearly 1,000 free, private consultations were given by lawyers from the Bar of Montréal.\nBring your documents.', '123', 'SALON VISEZ DROIT 2017 From April 3rd, 2017 to April 6th, 2017  In addition to the combined presence of various organizations concerned with justice, Salon VISEZ DROIT’s goal is to inform and educate the public about individual rights and obligations and to promote a better understanding of the legal system. Most popular without doubt are the free legal consultations. Want advice on writing a will, ways to collect debts, the steps to follow when starting up a company or arranging a merger? There’s never a shortage of questions. During last year’s event, nearly 1,000 free, private consultations were given by lawyers from the Bar of Montréal. Bring your documents.', '5147068582', 'http://complexedesjardins.com/en/events/salon-visez-droit-2017', 'r1b0pyzvwb1r24a6hj7v6lb5qa2kfq6a.png'),
(16, 13, 5, '10~30%', '10~30%', '10~30%', 'Dubai1 ', 'Dubai1_fr', '迪拜', 25.16055, 55.209994, 'aaa', 'aaa', 'aaa', '12345678', 'http://www.matandmax.com/salons/en/carreers.html', '3518y9tdf5ylle1egy9s9pexgpwcrbvq.jpg'),
(17, 13, 6, '10~30%', '10~30%', '10~30%', '1 month1', '1 mois', '1几个月', 25.160565, 55.210001, '1', '1', '1', '12345678', 'http://www.matandmax.com/salons/en/carreers.html', 'n7crs6db0p3pe5l3n8kpsr3hi39druh8.jpg'),
(18, 12, 11, '10~30%', '10~30%', '10~30%', '1 mois', '1 mois', '1几个月', 25.160567, 55.210002, 'a', 'a', 'a', '12345678', 'https://www.facebook.com/barbieexpo/', '3wblumx8s6jhjq0fwyunafvyycqbdyec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(64) COLLATE utf8_bin NOT NULL,
  `type_fr` varchar(64) COLLATE utf8_bin NOT NULL,
  `type_cn` varchar(64) COLLATE utf8_bin NOT NULL,
  `contact` varchar(64) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `name_fr`, `name_cn`, `type`, `type_fr`, `type_cn`, `contact`, `link`) VALUES
(6, 'Centre Eaton', 'Eaton Centre', '伊顿中心', 'Parking', 'Parking', '停車處', '12345678', 'https://www.centreeatondemontreal.com/en/'),
(7, 'Centre Bell', 'Bell Centre', '中心贝尔', 'Free Wi-Fi', 'Wi-fi Gratuit', '免费Wi-Fi', '12345678', 'https://www.centreeatondemontreal.com/en/'),
(8, 'Mat & Max', 'Mat & Max', 'Mat & Max', 'Daily Lockers', 'Coffrets Quotidiens', '每日储物柜', '12345678', 'https://www.centreeatondemontreal.com/en/');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingmalls`
--

CREATE TABLE IF NOT EXISTS `shoppingmalls` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `logophoto_filename` varchar(100) COLLATE utf8_bin NOT NULL,
  `coverphoto_filename` varchar(100) COLLATE utf8_bin NOT NULL,
  `info` varchar(200) COLLATE utf8_bin NOT NULL,
  `info_fr` varchar(200) COLLATE utf8_bin NOT NULL,
  `info_cn` varchar(200) COLLATE utf8_bin NOT NULL,
  `workinghours` varchar(400) COLLATE utf8_bin NOT NULL,
  `workinghours_fr` varchar(400) COLLATE utf8_bin NOT NULL,
  `workinghours_cn` varchar(400) COLLATE utf8_bin NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `contact` varchar(200) COLLATE utf8_bin NOT NULL,
  `aboutus` mediumtext COLLATE utf8_bin NOT NULL,
  `aboutus_fr` mediumtext COLLATE utf8_bin NOT NULL,
  `aboutus_cn` mediumtext COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL,
  `mapposition` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `shoppingmalls`
--

INSERT INTO `shoppingmalls` (`id`, `name`, `name_fr`, `name_cn`, `logophoto_filename`, `coverphoto_filename`, `info`, `info_fr`, `info_cn`, `workinghours`, `workinghours_fr`, `workinghours_cn`, `latitude`, `longitude`, `contact`, `aboutus`, `aboutus_fr`, `aboutus_cn`, `link`, `mapposition`) VALUES
(1, 'Les Cours Mont-Royal', 'Les Cours Mont-Royal', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '{}', '', '', '', '', '', 0, 0, '#', '.', '', '', '#', 'Text_CoursMontRoyal'),
(2, 'Carrefour Industrielle-Alliance', 'Carrefour Industrielle-Alliance', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '\n', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(3, 'Place Montréal Trust', 'Place Montréal Trust', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(4, 'Centre Eaton', 'Centre Eaton', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(5, 'La Baie', 'La Baie', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(6, 'Les Promenades de la Cathédrale', 'Les Promenades de la Cathédrale', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(7, 'Complexe Les Ailes', 'Complexe Les Ailes', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(8, 'Place Ville Marie', 'Place Ville Marie', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(9, 'Place Bonaventure', 'Place Bonaventure', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(10, 'Le 1000 de La Gauchetière', 'Le 1000 de La Gauchetière', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(11, 'Place du Canada', 'Place du Canada', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(12, 'Centre Bell', 'Centre Bell', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(13, 'Tour Bell', 'Tour Bell', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(14, 'Tour Banque Nationale', 'Tour Banque Nationale', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(15, 'Centre de commerce mondial de Montréal', 'Centre de commerce mondial de Montréal', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(16, 'Tour de la Bourse (Place Victoria)', 'Tour de la Bourse (Place Victoria)', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(17, 'Palais des congrès de Montréal', 'Palais des congrès de Montréal', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(18, 'Complexe Guy-Favreau', 'Complexe Guy-Favreau', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(19, 'Complexe Desjardins', 'Complexe Desjardins', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(20, 'Place des Arts', 'Place des Arts', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(120, 'Centre Bell', 'Bell Centre', '中心贝尔', 'puerm4gnegoa4vfgmfbfpsc7t27lnvq.png', 'rtnf8al05d3ukawlk8y9chly0wc1cu.jpg', '{"Hocky":"120+","Restaurants":"5"}', '{"Hocky":"120+","Restaurants":"5"}', '{"Hocky":"120+","Restaurants":"5"}', 'Store Hours:\nMonday 10:00 - 18:00\nTue 10:00 - 18:00\nWed 10:00 - 18:00\nThu 10:00 - 21:00\nFri 10 am - 9 pm\nSat 10 am - 5 pm\nSunday 12:00 PM - 5:00 PM', 'Heures d''ouverture des magasins: \nLundi 10:00 - 18:00  \nMar 10:00 - 18:00  \nMer 10:00 - 18:00  \nJeu. 10:00 - 21:00  \nVen 10h00 - 21h00  \nSam 10 h - 17 h  \nDimanche 12:00 PM - 5:00 PM', '商店营业时间：\n星期一10:00至18:00\n星期二10:00 - 18:00\n星期三10:00 - 18:00\n星期二上午10:00 - 21:00\n周五上午10点至晚上9点\n周六上午10点 - 下午5点\n周日12:00 PM - 5:00 PM', 45.4960116, -73.5694355, '12345678', 'About Us\n\nSince its inauguration in 1996 as the Molson Center, the Bell Center remains the center of entertainment and business events in Montreal. Each year, the Montreal Canadiens'' house attracts more than one million spectators in their hockey games, while 650,000 people walk through the gates to attend over 120 shows, for a total of 1.5 million spectators. The Center Bell integrates state-of-the-art technology to provide the perfect environment for sound, comfort, catering and otherwise for any event, no matter how large. Whether attending a Canadiens game, a concert with a world-renowned artist or a family show, the Bell Center is clearly at the top of everyone''s list. In addition, the Bell Center is the ideal place for corporate meetings and receptions of any kind.', 'À propos de nous  Depuis son inauguration en 1996 sous le nom de Molson Centre, le Centre Bell demeure le centre des événements de divertissement et d''affaires à Montréal. Chaque année, la maison des Canadiens de Montréal attire plus d''un million de spectateurs dans leurs matchs de hockey, tandis que 650 000 personnes parcourent les portes pour assister à plus de 120 spectacles, pour un total de 1,5 million de spectateurs. Le Center Bell intègre des technologies de pointe pour assurer une ambiance parfaite en matière de son, de confort, de restauration et autrement pour n''importe quel événement, quelle que soit son ampleur. Que ce soit pour assister à un match des Canadiens, un concert avec un artiste de renommée mondiale ou un spectacle familial, le Centre Bell est clairement au sommet de la liste des lieux de quiconque. En outre, le Centre Bell est l''endroit idéal pour les réunions d''entreprise et les réceptions de tout genre.', '关于我们\n\n贝尔中心自1996年成立以来就是莫尔森中心，蒙特利尔仍然是娱乐和商业活动的中心。 每年，蒙特利尔加拿大人的房子在曲棍球比赛中吸引了超过一百万名观众，而有65万人在大门上走过120场表演，共有150万名观众。 中心贝尔集成了最先进的技术，为任何事件提供完美的环境，适合任何事件，无论多大。 无论参加加拿大人的游戏，与世界知名艺术家或家庭表演的音乐会，贝尔中心显然是所有人的榜首。 此外，贝尔中心是举办企业会议和招待会的理想场所。', 'https://www.centreeatondemontreal.com/en/careers/jobs-montreal/mat-max/125/bceb70db-eb55-4106-a66a-5', 'Text_CentreBell'),
(130, 'Carrefour', 'Carrefour_fr', '家乐福', '5nmpaxno7il65gcqkmy9tkh36e33fib.png', 'k9f6eg1jh7aejydlovnzoqzo24qijf.jpg', '{"Cinema":"1","Stores":"14","Fast food":"20"}', '{"Cinema":"1","Stores":"14","Fast food":"20"}', '{"Cinema":"1","Stores":"14","Fast food":"20"}', 'Stores Opening Hours\nMon 10:00 AM - 6:00 PM\nTue 10:00 AM - 6:00 PM\nWed 10:00 AM - 6:00 PM \nThu 10:00 AM - 9:00 PM \nFri 10:00 AM - 9:00 PM \nSat 10:00 AM - 5:00 PM \nSun 12:00 PM - 5:00 PM', 'Heures d''ouverture des magasins \r\nLundi 10:00 - 18:00 \r\nMar 10:00 - 18:00 \r\nMer 10:00 - 18:00 \r\nJeu. 10:00 - 21:00\r\nVen 10h00 - 21h00\r\nSam 10 h - 17 h \r\nDimanche 12:00 PM - 5:00 PM', '商店营业时间 星期一上午10:00 - 下午6:00 星期二上午10:00 - 下午6:00 周三上午10:00 - 下午6:00 星期二上午10点 - 晚上9点 周五上午10:00 - 晚上9:00 星期六上午10:00 - 下午5:00 太阳12:00 PM - 5:00 PM', 45.5009824, -73.5741599, 'Address: 977 Sainte-Catherine Street West Montreal, Quebec H3B 4W3', 'HISTORY\n\nThis 210,000 square feet building was constructed in 1929 and originally housed Simpson’s. After some years of neglect, it was renovated over a two-year period and in 1999, the Carrefour Industrielle Alliance was born. \nAs its name suggests, this building has become a crossroads of activity and people. A symbol of both the past and the future, the building goes back many years and is now carrying on gracefully into the third millennium. The Carrefour Industrielle Alliance is located in the heart of Montreal’s pedestrian network, one of the biggest in Canada. \nTwo major businesses anchor the Carrefour Industrielle Alliance’s commercial concept, La Maison Simons and Cineplex, accompanied by numerous restaurants and boutiques. ', 'HISTOIRE  Ce bâtiment de 210 000 pieds carrés a été construit en 1929 et a abrité à l''origine Simpson''s. Après quelques années de négligence, elle a été rénovée sur une période de deux ans et en 1999, l''Alliance Carrefour Industrielle est née. Comme son nom l''indique, ce bâtiment est devenu un carrefour d''activités et de gens. Symbole du passé et du futur, l''édifice remonte à de nombreuses années et se poursuit gracieusement jusqu''au troisième millénaire. L''Alliance Carrefour Industrielle est située au cœur du réseau piétonnier de Montréal, l''un des plus importants au Canada. Deux grandes entreprises ancrent le concept commercial du Carrefour Industrielle Alliance, La Maison Simons et Cineplex, accompagnés de nombreux restaurants et boutiques.', '历史  这个21万平方英尺的建筑是在1929年建成的，原来是辛普森的。 经过几年的忽视，它在两年间进行了翻新，而在1999年，家乐福工业联盟诞生了。 顾名思义，这座建筑已经成为活动和人民的十字路口。 过去和未来都是一个象征，建筑可以追溯到多年，现在正在顺利进入第三个千年。 家乐福工业联盟位于蒙特利尔的步行网络中心，是加拿大最大的步行网络之一。 两家主要业务主要是家乐福工业联盟的商业理念，La Maison Simons和Cineplex，以及众多餐厅和精品店。', 'http://www.matandmax.com/us-en/', 'Text_CarrIndAll'),
(140, 'Centre Eaton', 'Eaton Centre', '伊顿中心', 'zjx29nkkrxyfo93w2z1ptsz81yb9ade.png', 'nt1yetrmk07010kax79pi96rfn4tbo.jpg', '{"Museum":"1","Restaurant":"1","Fast food":"20+","Stores":"150+"}', '{"Museum":"1","Restaurant":"1","Fast food":"20+","Stores":"150+"}', '{"Museum":"1","Restaurant":"1","Fast food":"20+","Stores":"150+"}', 'Business hours\nMonday 10:00 - 21:00\nTue 10:00 - 21:00\nWed 10:00 - 21:00\nThu 10:00 - 21:00\nFri 10 am - 9 pm\nSat 10 am - 6 pm\nSun 11:00 -. 5 p.m.', 'Heures d''ouverture \r\nLundi 10:00 - 21:00 \r\nMar 10:00 - 21:00\r\nMer 10:00 - 21:00 \r\nJeu. 10:00 - 21:00 \r\nVen 10h00 - 21h00 \r\nSam 10 h - 18 h Dim. 11:00 - 17:00', '营业时间 星期一10:00 - 21:00 星期二10:00 - 21:00 星期三10:00 - 21:00 星期二上午10:00 - 21:00 周五上午10点至晚上9点 周六上午10点至下午6点 太阳11:00 - 。 下午5点', 45.5028117, -73.5736799, 'Address: 977 Sainte-Catherine Street West Montreal, Quebec H3B 4W3', 'LE CENTER D''EATON Located in the heart of Montreal, on Canada''s largest shopping street and the famous underground city, the Eaton Center has become the downtown core of the city. Each year, the Center welcomes 23 million visitors. The city''s first shopping center, the Montreal Eaton Center has 175 boutiques and restaurants, as well as the famous wax museum Grévin Montréal, spread over 5 floors. The center also boasts one of the largest food courts in North America, with free wireless Internet access. The Montréal Eaton Center is proud to be associated with Art Souterrain, the Sensation Mode Group and Destination Center-Ville Montréal, and is host to regular artistic and artistic events in the excitement and creativity that make Montreal such a fascinating city. Cultural activities. Community Involvement The Montreal Eaton Center is proud of its partnership with social organizations that play a major role in Montreal and Quebec society through their environmental efforts or social responsibility. For years we have been working on a variety of projects with Dans la Rue, the Starlight Children''s Foundation of Quebec, Terre du Québec, Allo la Terre and RecycFluo. The Montreal Eaton Center is owned by Ivanhoe Cambridge', 'LE CENTRE D''EATON  Situé au cœur de Montréal, sur la plus grande avenue commerçante du Canada, et porte de la célèbre cité souterraine, le Centre Eaton de Montréal est devenu, au fil des ans, le centre-ville du centre-ville. Chaque année, le Centre accueille 23 millions de visiteurs. Première ville commerçante de la ville, le Centre Eaton de Montréal compte 175 boutiques et restaurants, ainsi que le célèbre musée de cire Grévin Montréal, réparti sur 5 étages. Le centre dispose également de l''un des plus grands tribunaux alimentaires en Amérique du Nord, avec accès Internet sans fil gratuit. Implanté dans l''excitation et la créativité qui font de Montréal une ville aussi fascinante, le Centre Eaton de Montréal est fier d''être associé à Art Souterrain, au Groupe Sensation Mode et à Destination Centre-Ville Montréal et accueille régulièrement des événements artistiques et culturels.  Implication de la communauté  Le Centre Eaton de Montréal est fier de son partenariat avec des organismes sociaux qui jouent un rôle majeur dans la société montréalaise et québécoise par leurs efforts environnementaux ou leur responsabilité sociale. Nous travaillons depuis des années sur divers projets avec Dans la Rue, la Fondation des enfants Starlight Québec, Terre du Québec, Allo la Terre et RecycFluo. Le Centre Eaton de Montréal est la propriété d''Ivanhoé Cambridge', 'LE CENTER D''EATON位于蒙特利尔市中心的加拿大最大的购物街和着名的地下城市，伊顿中心已成为该市的核心区域。每年中心欢迎2300万游客。该城市的第一个购物中心，蒙特利尔伊顿中心拥有175间精品店和餐厅，以及着名的蜡像博物馆GrévinMontréal，分布在5层楼。该中心还拥有北美最大的美食广场之一，提供免费无线上网。蒙特利尔伊顿中心自豪地与Art Souterrain，Sensation Mode Group和Destination Centre-VilleMontréal联合举办，并在蒙特利尔这样一个迷人的城市的兴奋和创造力方面举办定期的艺术和艺术活动。文化活动。社区参与蒙特利尔伊顿中心以与通过其环境努力或社会责任在蒙特利尔和魁北克社会发挥重要作用的社会组织的合作感到自豪。多年来，我们一直在与丹斯拉鲁，魁北克星光儿童基金会，魁北克魁北克省，阿尔洛特雷和RecycFluo等一起开展各种项目。蒙特利尔伊顿中心由Ivanhoe剑桥拥有', 'https://www.centreeatondemontreal.com/en/', 'Text_CentreEaton'),
(160, 'COMPLEX DESJARDINS', 'Complexe Desjardins', '复杂DESJARDINS', 'idni3tqa1qxj363meot0mm9f54zx6hz.png', 'g51qamferzij5gtppgmjh1wykev4z6.jpg', '{"EVENTS PER YEAR":"200+","STORES":"100+","FAST FOOD":"30+","GROCERY STORE":"1","RESTAURANTS":"6"}', '{"EVENTS PER YEAR":"200+","STORES":"100+","FAST FOOD":"30+","GROCERY STORE":"1","RESTAURANTS":"6"}', '{"EVENTS PER YEAR":"200+","STORES":"100+","FAST FOOD":"30+","GROCERY STORE":"1","RESTAURANTS":"6"}', 'Opening Hours\nMon 9:30 AM - 6:00 PM\nTue 9:30 AM - 6:00 PM\nWed 9:30 AM - 6:00 PM \nThu 9:30 AM - 9:00 PM \nFri 9:30 AM - 9:00 PM \nSat 9:30 AM - 5:00 PM \nSun 12:00 PM - 5:00 PM', 'Heures d''ouverture Lun 9h30 - 18h00 Mar 9h30 - 18h00 Mer 9h30 - 18h00 Jeu. 9:30 - 21:00 Ven 9 h 30 à 21 h Sam 9 h 30 à 17 h Dim. 12:00 - 17:00', '营业时间 星期一上午9:30 - 下午6:00 星期二上午9:30 - 下午6:00 周三上午9:30 - 下午6:00 星期四上午9:30 - 晚上9:00 周五上午9:30 - 晚上9:00 上午9:30 - 下午5:00 太阳12:00 PM - 5:00 PM', 45.508162, -73.565227, '514 281 1870', 'GENERAL INFORMATION\n\nCovering a total area of approximately 4 million square feet, Complexe Desjardins is the largest building in the metropolitan area. It includes: \n3 office towers with a total of 99 floors; \n3 parking levels; \nA commercial gallery with 110 shops and restaurants, including a grocery store and one of the loveliest food courts in Montreal; \nAn immense public plaza in the very heart of the Complexe, where a wide variety of events are organized throughout the year; \nA complete Customer Service \nSeveral Desjardins Group institutions;\nNumerous governmental services, such as Revenu Québec, the CSST, a post office, etc.;\n15 ATM machines;\nHealth services including a clinic, a radiology centre, two dental clinics and an optician;\nFacilities for individuals with impaired mobility;\nDirect access to the luxury Hyatt Regency Montreal hotel.', 'INFORMATIONS GÉNÉRALES  D''une superficie totale d''environ 4 millions de pieds carrés, le Complexe Desjardins est le plus grand édifice de la région métropolitaine. Il comprend: 3 tours de bureaux avec un total de 99 étages; 3 niveaux de stationnement; Une galerie commerciale avec 110 boutiques et restaurants, y compris une épicerie et l''un des plus beaux restaurants de Montréal; Une immense place publique en plein cœur du Complexe, où une grande variété d''événements sont organisés tout au long de l''année; Un service à la clientèle complet Plusieurs institutions du Mouvement Desjardins; De nombreux services gouvernementaux tels que Revenu Québec, la CSST, un bureau de poste, etc .; 15 guichets automatiques; Services de santé comprenant une clinique, un centre de radiologie, deux cliniques dentaires et un opticien; Facilités pour personnes à mobilité réduite; Accès direct à l''hôtel de luxe Hyatt Regency Montréal.', '一般信息  Complexe Desjardins占地面积约400万平方英尺，是大都会区最大的建筑。 这包括： 3个办公楼共99层; 3个停车位; 一个拥有110间商店和餐馆的商业画廊，包括杂货店和蒙特利尔最可爱的美食广场之一; 在复杂的心脏地带，一个庞大的公共广场，全年举办各种各样的活动; 完整的客户服务 几家Desjardins集团机构; 许多政府服务，如RevenuQuébec，CSST，邮局等; 15台ATM机; 卫生服务包括诊所，放射科中心，两间牙医诊所和眼镜商; 为行动不便人士提供的设施; 直接进入豪华凯悦酒店蒙特利尔酒店。', 'http://complexedesjardins.com/', 'Text_ComplexeDesjardins');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `type_fr` varchar(50) COLLATE utf8_bin NOT NULL,
  `type_cn` varchar(50) COLLATE utf8_bin NOT NULL,
  `mallid` int(11) NOT NULL,
  `metroid` int(11) NOT NULL,
  `aboutus` text COLLATE utf8_bin NOT NULL,
  `aboutus_fr` text COLLATE utf8_bin NOT NULL,
  `aboutus_cn` text COLLATE utf8_bin NOT NULL,
  `contact` varchar(64) COLLATE utf8_bin NOT NULL,
  `facebook` varchar(100) COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `imagename` varchar(100) COLLATE utf8_bin NOT NULL,
  `coverphoto_filename` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `name_fr`, `name_cn`, `type`, `type_fr`, `type_cn`, `mallid`, `metroid`, `aboutus`, `aboutus_fr`, `aboutus_cn`, `contact`, `facebook`, `link`, `featured`, `imagename`, `coverphoto_filename`) VALUES
(5, 'Mat & Max', 'Mat & Max', 'Mat & Max', 'Beauty & Health', 'Beauté et santé', '美容院', 12, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/barbieexpo/', 'http://montrealundergroundcity.com/', 1, 'beautyhealth1.png', 'beautyhealth1.jpg'),
(6, 'Seacret', 'Seacret', 'Seacret', 'Beauty & Health', 'Beauté et santé', '美容院', 13, 4, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/barbieexpo/', 'http://montrealundergroundcity.com/', 0, 'beautyhealth2.png', 'beautyhealth2.jpg'),
(7, 'Ambermax', 'Ambermax', 'Ambermax', 'Boutique', 'Boutique', '精品店', 14, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/barbieexpo/', 'http://montrealundergroundcity.com/', 0, 'boutique1.png', 'boutique1.png'),
(8, 'Biboss', 'Biboss', 'Biboss', 'Boutique', 'Boutique', '精品店', 12, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/barbieexpo/', 'http://montrealundergroundcity.com/', 1, 'boutique2.png', 'boutique2.jpg'),
(9, 'Expo Barbie', 'Expo Barbie', 'Expo Barbie', 'Attraction', 'Attraction', '旅游景点', 13, 4, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/barbieexpo/?fref=ts/', 'http://montrealundergroundcity.com/', 1, 'attraction1.png', 'attraction1.jpg'),
(10, 'Cinema 3D IMAX', 'Cinema 3D IMAX', 'Cinema 3D IMAX', 'Attraction', 'Attraction', '旅游景点', 14, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/Carrefour-Industrielle-Alliance-463463220335512/', 'http://montrealundergroundcity.com/', 0, 'attraction2.png', 'attraction2.jpg'),
(11, 'Archambault', 'Arcahambault', 'Arcahambault', 'Boutique', 'Boutique', '精品店', 13, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '5142810367', 'https://www.facebook.com/barbieexpo/', 'https://www.facebook.com/barbieexpo/', 0, '9kb05xzghgi5r2rfbm564yfvcc85231y.png', 'boutique3.jpg'),
(12, 'Takara', 'Takara_fr', 'Takara_fr', 'Restaurant', 'Restaurant', '饭店', 12, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/takaravietnam/', 'http://montrealundergroundcity.com/', 1, 'resto1.png', 'resto1.jpg'),
(13, 'Pannizza', 'Pannizza', 'Pannizza', 'Restaurant', 'Restaurant', '饭店', 13, 4, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/takaravietnam/', 'http://montrealundergroundcity.com/', 0, 'resto2.png', 'resto2.png'),
(14, 'Sandouchon', 'Sandouchon', 'Sandouchon', 'Restaurant', 'Restaurant', '饭店', 14, 3, 'Vortexapp team creates high quality native iOS and Android apps to ensure app users get the best possible user experience. Compared to web apps, native apps provide superior design options and high speed. We will train you to keep your app content fresh via our non-technical content management system (CMS) ensuring users keep coming back for more.', 'L’équipe Vortexapp crée des applications de type iOS et Android de hautes qualités dans le but d’offrir aux usagers la meilleure expérience possible. À comparer aux applications web, les applications de type iOS et Android sont plus rapides et ont des options de design de haute gamme. Une petite formation vous sera offerte via notre système non technique de gestion du contenu (CMS) afin d’actualiser votre application pour que les usagers l''utilisent régulièrement.', 'Vortexapp团队创建高品质的iOS和Android应用程序，以确保应用用户获得最佳的用户体验。 与网络应用程序相比，本机应用程序提供卓越的设计选项和高速度。 我们将通过我们的非技术内容管理系统（CMS）培训您，使您的应用内容保持新鲜，从而确保用户不断回来。', '12345678', 'https://www.facebook.com/takaravietnam/', 'http://montrealundergroundcity.com/', 0, 'resto3.png', 'resto3.jpg'),
(23, 'Villa Madina', '', '', 'Boutique', 'Boutique', '精品店', 12, 3, 'Villa madina ', '', '', '5147068582', 'www.facebook.com', 'http://www.vilamadina.com', 0, 'lcpxgmilx6qgahtckd8ypj7oag9p1v16.png', 'd5afl0j9fitg3t94cwo3dhreyo3ghc.jpg'),
(24, 'OSCO!', 'OSCO!', '', 'Restaurant', 'Restaurant', '饭店', 16, 4, 'OSCO!\r\nFine cuisine italienne\r\n\r\nBouillabaisse aux homards, plats de risotto et grillades, grand choix de vins', '', '', '12345678', 'https://www.facebook.com/Carrefour-Industrielle-Alliance-463463220335512/', 'http://montrealundergroundcity.com/restaurants/osco/', 1, 'xxsll6xdybjjrcjc3p5idbdw49dinmeq.png', 'rff81tj1445gg7va4ckuw6zhz3wm9x.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `undercoinstore`
--

CREATE TABLE IF NOT EXISTS `undercoinstore` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_fr` varchar(100) COLLATE utf8_bin NOT NULL,
  `name_cn` varchar(100) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `imagename` varchar(200) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `undercoinstore`
--

INSERT INTO `undercoinstore` (`id`, `name`, `name_fr`, `name_cn`, `price`, `imagename`, `link`) VALUES
(1, 'Samsung TV', 'Samsung TV', '三星', 6000, 'samsungtv.jpg', 'http://www.samsung.com/us/'),
(2, 'Samsung Galaxy S7 edge', 'Samsung Galaxy S7 edge', '三星', 3000, 'galaxy.jpg', 'http://www.samsung.com/us/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannerimages`
--
ALTER TABLE `bannerimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devicetokens`
--
ALTER TABLE `devicetokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globals`
--
ALTER TABLE `globals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interstitialads`
--
ALTER TABLE `interstitialads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mappositions`
--
ALTER TABLE `mappositions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metros`
--
ALTER TABLE `metros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingmalls`
--
ALTER TABLE `shoppingmalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undercoinstore`
--
ALTER TABLE `undercoinstore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bannerimages`
--
ALTER TABLE `bannerimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `devicetokens`
--
ALTER TABLE `devicetokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `globals`
--
ALTER TABLE `globals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `interstitialads`
--
ALTER TABLE `interstitialads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mappositions`
--
ALTER TABLE `mappositions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `metros`
--
ALTER TABLE `metros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shoppingmalls`
--
ALTER TABLE `shoppingmalls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `undercoinstore`
--
ALTER TABLE `undercoinstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
