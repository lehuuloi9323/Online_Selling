-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2023 at 01:41 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18478564_webtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `phone_number`, `email`, `username`, `password`) VALUES
(1, 'admin', 357559323, 'lehuuloi9323@gmail.com', 'admin', 'ae89db495d792a4f8f84fb8e937d0345'),
(2, 'admin2', 357559323, 'lehuuloi612@gmail.com', 'admin2', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE `tbl_catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`id`, `name`) VALUES
(1, 'giày'),
(2, 'dép'),
(3, 'áo thun'),
(4, 'áo khoác'),
(5, 'áo sơ mi'),
(6, 'quần dài'),
(7, 'quần short'),
(8, 'đồ lót'),
(9, 'váy'),
(10, 'đầm'),
(35, 'nón mũ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `sum_price` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` text NOT NULL,
  `phone_number` int(10) NOT NULL,
  `address` varchar(400) NOT NULL,
  `order_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `sum_price`, `name`, `email`, `phone_number`, `address`, `order_date`) VALUES
(94, 9, 246400, 'Thu Thảo', 'lehuuloi612@gmail.com', 357559323, '52 ấp hiệp hòa xã mỹ hiệp sơn hòn đất kiên giang', '2023-04-30 05:03:22.792689');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id_order_detail` int(3) NOT NULL,
  `id_product` varchar(100) NOT NULL,
  `id_oder` int(3) NOT NULL,
  `quaty` int(10) NOT NULL,
  `sum_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id_order_detail`, `id_product`, `id_oder`, `quaty`, `sum_order`) VALUES
(74, '73 ', 94, 1, 246400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(2) NOT NULL,
  `title` varchar(500) NOT NULL,
  `img_page` varchar(800) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `title`, `img_page`, `date_time`, `content`) VALUES
(1, 'Giới thiệu', NULL, '2023-03-22 09:37:57.931823', 'Đây là trang demo nên không biết viết gì hơn :))\r\nHãy xem và nhận xét, khi nào biết viết thì sẽ update lại.Xin cảm ơn!!'),
(2, 'Liên Hệ', NULL, '2023-03-22 09:38:31.636872', 'Đây là trang liên hệ'),
(10, 'Nga phóng 8 tên lửa \"không thể cản phá\" vào thành phố cảng Odessa', 'https://icdn.dantri.com.vn/thumb_w/1020/2023/05/08/2023-05-08t000951z598539135rc2zt0a9wcwcrtrmadp3ukraine-crisis-attack-odesa-1683548883486.jpg', '2023-05-09 08:52:38.909639', '<h2>(D&acirc;n tr&iacute;) - Kh&ocirc;ng qu&acirc;n Ukraine cho biết Nga đ&atilde; sử dụng khoảng 8 t&ecirc;n lửa Kh-22 trong vụ tập k&iacute;ch Odessa v&agrave;o đ&ecirc;m qua.</h2>\r\n\r\n<p>Trong ph&aacute;t biểu được đưa ra h&ocirc;m 8/5, &ocirc;ng Yurii Ihnat, người ph&aacute;t ng&ocirc;n của Kh&ocirc;ng qu&acirc;n Ukraine c&aacute;o buộc qu&acirc;n đội Nga đ&atilde; ph&oacute;ng 8 t&ecirc;n lửa h&agrave;nh tr&igrave;nh chống hạm Kh-22 nhằm v&agrave;o th&agrave;nh phố cảng Odessa trong vụ tập k&iacute;ch diễn ra v&agrave;o đ&ecirc;m ng&agrave;y 7, rạng s&aacute;ng ng&agrave;y&nbsp;8/5.</p>\r\n\r\n<p>Theo &ocirc;ng Ihnat, c&aacute;c t&ecirc;n lửa tr&ecirc;n đ&atilde; được ph&oacute;ng đi từ m&aacute;y bay n&eacute;m bom chiến lược Tu-22M3 từ khu vực Mũi Tarkhankut ở b&aacute;n đảo Crimea. Một nh&agrave; kho của c&ocirc;ng ty thực phẩm, một khu nghỉ dưỡng ven bờ Biển Đen c&ugrave;ng nhiều t&agrave;i sản tại Odessa đ&atilde; bị&nbsp;đ&aacute;nh tr&uacute;ng v&agrave; g&acirc;y hư hỏng. Tuy nhi&ecirc;n, &ocirc;ng Ihnat khẳng định &quot;một số t&ecirc;n lửa Kh-22 đ&atilde; kh&ocirc;ng bay được tới mục ti&ecirc;u&quot;.</p>\r\n\r\n<p>Raduga Kh-22 l&agrave; loại t&ecirc;n lửa chống hạm cỡ lớn được ph&aacute;t triển từ thời Li&ecirc;n X&ocirc;. Với khối lượng gần 6 tấn, chiều d&agrave;i 11,6m, t&ecirc;n lửa n&agrave;y c&oacute; thể mang theo đầu đạn thường nặng 900kg hoặc một đầu đạn hạt nh&acirc;n với sức c&ocirc;ng ph&aacute; l&ecirc;n tới 1.000kT.</p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.dantri.com.vn/thumb_w/1020/2023/05/08/2023-05-08t000951z598539135rc2zt0a9wcwcrtrmadp3ukraine-crisis-attack-odesa-1683548883486.jpg\" /></p>\r\n\r\n<p>Sử dụng một động cơ nhi&ecirc;n liệu lỏng, Kh-22 c&oacute; thể bay với tốc độ tối đa 5.600km/h, gấp gần 5 lần tốc độ &acirc;m thanh. Tầm bắn của t&ecirc;n lửa n&agrave;y đạt khoảng 600km. Ngo&agrave;i ra, nhiều phi&ecirc;n bản cải tiến của Kh-22 cũng được trang bị hệ thống radar kết hợp định vị ti&ecirc;n tiến, cho ph&eacute;p n&oacute; di chuyển linh hoạt v&agrave; tấn c&ocirc;ng mục ti&ecirc;u một c&aacute;ch ch&iacute;nh x&aacute;c hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.dantri.com.vn/thumb_w/1020/2023/05/08/2023-05-08t064731z633443194rc26u0ad6dp1rtrmadp3ukraine-crisis-attack-odesa-1683549212107.jpg\" /></p>\r\n\r\n<p>Với uy lực v&agrave; t&iacute;nh năng vượt trội, Kh-22 được giới quan s&aacute;t&nbsp;<a href=\"https://dantri.com.vn/the-gioi/quan-su.htm\">qu&acirc;n sự</a>&nbsp;mệnh danh l&agrave; &quot;s&aacute;t thủ t&agrave;u s&acirc;n bay&quot;. Một số tờ b&aacute;o của phương T&acirc;y thậm ch&iacute; c&ograve;n mi&ecirc;u tả t&ecirc;n lửa n&agrave;y như l&agrave; &quot;một vũ kh&iacute; khủng khiếp ở mọi giới hạn&quot;.</p>\r\n\r\n<p>Qu&acirc;n đội Nga bắt đầu sử dụng t&ecirc;n lửa Kh-22 để tấn c&ocirc;ng Ukraine từ cuối năm 2022. H&ocirc;m 14/1, một t&ograve;a chung cư tại Dnipro đ&atilde; bị tr&uacute;ng t&ecirc;n lửa Kh-22 trong vụ kh&ocirc;ng k&iacute;ch của Nga. Vụ tập k&iacute;ch n&agrave;y đ&atilde; khiến &iacute;t nhất 40 người thiệt mạng v&agrave; hơn 70 người kh&aacute;c bị thương.</p>\r\n\r\n<p>Sau vụ tập k&iacute;ch tr&ecirc;n, Tư lệnh Kh&ocirc;ng qu&acirc;n Ukraine Nikolai Oleshuk thừa nhận rằng nước n&agrave;y kh&ocirc;ng sở hữu hệ thống ph&ograve;ng kh&ocirc;ng n&agrave;o c&oacute; khả năng đ&aacute;nh chặn v&agrave; bắn hạ t&ecirc;n lửa Kh-22 của Nga.</p>\r\n\r\n<p>&quot;Lực lượng vũ trang Ukraine kh&ocirc;ng c&oacute; thiết bị hỏa lực n&agrave;o c&oacute; khả năng bắn hạ loại t&ecirc;n lửa n&agrave;y. Kể từ khi qu&acirc;n đội Nga bắt đầu chiến dịch qu&acirc;n sự ở Ukraine, kh&ocirc;ng c&oacute; quả n&agrave;o bị ph&ograve;ng kh&ocirc;ng Ukraine bắn rơi&quot;, &ocirc;ng Oleshuk thừa nhận.</p>\r\n\r\n<p>Theo &ocirc;ng Oleshuk, hệ thống ph&aacute;t hiện mục ti&ecirc;u của Ukraine đủ &quot;nhạy&quot; để c&oacute; thể x&aacute;c định được Kh-22 th&ocirc;ng qua c&aacute;ch ph&oacute;ng, độ cao v&agrave; tốc độ bay, nhưng vấn đề l&agrave; đường bay của t&ecirc;n lửa c&oacute; thể bị lệch đi h&agrave;ng trăm m&eacute;t.</p>\r\n'),
(11, 'Ukraine tuyên bố bắn hạ tên lửa ', 'https://icdn.dantri.com.vn/thumb_w/1020/2023/05/08/2023-05-08t064731z633443194rc26u0ad6dp1rtrmadp3ukraine-crisis-attack-odesa-1683549212107.jpg', '2023-05-09 09:45:20.651425', '<h2>(D&acirc;n tr&iacute;) - Qu&acirc;n đội Ukraine c&oacute; thể đ&atilde; bắn rơi t&ecirc;n lửa si&ecirc;u thanh Kinzhal của Nga tr&ecirc;n bầu trời thủ đ&ocirc; Kiev h&ocirc;m 4/5</h2>\r\n\r\n<p>Trang&nbsp;<em>Defense Express</em>&nbsp;dẫn nguồn tin từ qu&acirc;n đội Ukraine, cho biết lực lượng ph&ograve;ng kh&ocirc;ng nước n&agrave;y đ&atilde; bắn hạ một t&ecirc;n lửa si&ecirc;u thanh Kinzhal của Nga tr&ecirc;n bầu trời thủ đ&ocirc; Kiev v&agrave;o khoảng 2h40 s&aacute;ng ng&agrave;y 4/5.</p>\r\n\r\n<p>Theo đ&oacute;, một đơn vị ph&ograve;ng kh&ocirc;ng Ukraine đ&atilde; ph&aacute;t hiện, theo d&otilde;i v&agrave; ph&oacute;ng hỏa lực v&agrave;o t&ecirc;n lửa Nga khi n&oacute; đang ở trong chu kỳ bay cuối c&ugrave;ng trước khi đ&aacute;nh tr&uacute;ng mục ti&ecirc;u.</p>\r\n\r\n<p>Một số h&igrave;nh ảnh về mảnh vỡ của t&ecirc;n lửa Kinzhal đ&atilde; được ghi nhận sau khi rơi xuống một s&acirc;n vận động tại Kiev. Nếu được x&aacute;c nhận, đ&acirc;y sẽ l&agrave; lần đầu ti&ecirc;n lực lượng ph&ograve;ng kh&ocirc;ng Ukraine bắn hạ th&agrave;nh c&ocirc;ng một t&ecirc;n lửa si&ecirc;u thanh được mệnh danh l&agrave; &quot;bất khả chiến bại&quot; của Nga.</p>\r\n\r\n<p>Bộ Quốc ph&ograve;ng Nga hiện chưa l&ecirc;n tiếng b&igrave;nh luận về th&ocirc;ng tin tr&ecirc;n.</p>\r\n\r\n<p>Kinzhal (&quot;dao găm&quot;) l&agrave; một loại t&ecirc;n lửa si&ecirc;u vượt &acirc;m của Nga. Truyền th&ocirc;ng Nga tuy&ecirc;n bố t&ecirc;n lửa Kinzhal c&oacute; tầm bắn khoảng 2.000km, tốc độ gấp 10 lần vận tốc &acirc;m thanh, khoảng hơn 12.000 km/h, khiến việc đ&aacute;nh chặn gần như l&agrave; kh&ocirc;ng thể. T&ecirc;n lửa c&oacute; thể mang theo đầu đạn th&ocirc;ng thường nặng 500kg, hoặc đầu đạn hạt nh&acirc;n với đương lượng nổ 100-500kt.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một trong 6 vũ kh&iacute; chiến lược được Tổng thống Nga Vladimir Putin c&ocirc;ng bố trong Th&ocirc;ng điệp Li&ecirc;n bang v&agrave;o năm 2018. Bộ Quốc ph&ograve;ng Nga đ&atilde; nhiều lần khẳng định t&ecirc;n lửa Kinzhal v&ocirc; h&igrave;nh v&agrave; được coi l&agrave; bất khả chiến bại với bất cứ hệ thống ph&ograve;ng kh&ocirc;ng n&agrave;o của đối phương.</p>\r\n\r\n<p>Ph&aacute;t biểu tại cuộc họp với c&aacute;c t&ugrave;y vi&ecirc;n&nbsp;<a href=\"https://dantri.com.vn/the-gioi/quan-su.htm\">qu&acirc;n sự</a>&nbsp;nước ngo&agrave;i hồi th&aacute;ng 12/2022, Đại tướng Valery Gerasimov của Nga nhấn mạnh: &quot;Hệ thống t&ecirc;n lửa Kinzhal đ&atilde; chứng minh hiệu quả cao v&agrave; khả năng bất khả x&acirc;m phạm đối với c&aacute;c hệ thống ph&ograve;ng kh&ocirc;ng được triển khai ở Ukraine&quot;.</p>\r\n\r\n<p>Nhận x&eacute;t về uy lực của t&ecirc;n lửa Kinzhal, c&aacute;c chuy&ecirc;n gia đến từ Trung t&acirc;m Nghi&ecirc;n cứu Chiến lược v&agrave; Quốc tế (CSIS) cho biết &quot;Nga đ&atilde; ph&aacute;t triển loại t&ecirc;n lửa độc đ&aacute;o n&agrave;y nhằm dễ d&agrave;ng tập k&iacute;ch c&aacute;c cơ sở hạ tầng quan trọng của đối phương. Tốc độ cao kết hợp với quỹ đạo bay kh&oacute; lường c&ugrave;ng khả năng cơ động vượt trội khiến cho việc đ&aacute;nh chặn t&ecirc;n lửa n&agrave;y gặp rất nhiều kh&oacute; khăn&quot;.</p>\r\n\r\n<p>V&agrave;o h&ocirc;m 8/3, sau trận tập k&iacute;ch của t&ecirc;n lửa Kinzhal được Nga tiến h&agrave;nh nhằm v&agrave;o l&atilde;nh thổ Ukraine, Đại t&aacute; Yurii Ihnat, người ph&aacute;t ng&ocirc;n của Kh&ocirc;ng qu&acirc;n Ukraine, đ&atilde; l&ecirc;n tiếng thừa nhận c&aacute;c tổ hợp ph&ograve;ng kh&ocirc;ng hiện c&oacute; trong bi&ecirc;n chế qu&acirc;n đội Ukraine kh&ocirc;ng c&oacute; khả năng đ&aacute;nh chặn loại t&ecirc;n lửa n&agrave;y.</p>\r\n\r\n<p>&quot;C&aacute;c tổ hợp ph&ograve;ng kh&ocirc;ng của ch&uacute;ng ta c&oacute; khả năng đ&aacute;nh chặn nhiều loại t&ecirc;n lửa h&agrave;nh tr&igrave;nh. Tuy nhi&ecirc;n, ch&uacute;ng ta kh&ocirc;ng thể chống lại được c&aacute;c t&ecirc;n lửa Kinzhal v&agrave; Kh-22 v&igrave; ch&uacute;ng bay theo quỹ đạo đạn đạo v&agrave; c&aacute;c tổ hợp ph&ograve;ng kh&ocirc;ng hiện tại của Ukraine kh&ocirc;ng c&oacute; đủ năng lực đ&aacute;nh chặn&quot;, &ocirc;ng Ihnat chia sẻ.</p>\r\n'),
(12, 'Nga tập kích tên lửa, san phẳng căn cứ huấn luyện vượt sông của Ukraine', 'https://icdn.dantri.com.vn/thumb_w/1020/2023/05/03/thiet-hai-nang-ne-cua-ukraine-sau-man-tap-kich-trong-dem-cua-ngadocx-1683100132285.png', '2023-05-09 08:57:11.280299', '<h2>(D&acirc;n tr&iacute;) - Qu&acirc;n đội Nga đ&atilde; tiến h&agrave;nh một vụ tập k&iacute;ch t&ecirc;n lửa nhằm v&agrave;o căn cứ huấn luyện của Ukraine tại th&agrave;nh phố miền Nam Zaporizhia.</h2>\r\n\r\n<p>Trả lời phỏng vấn h&atilde;ng th&ocirc;ng tấn&nbsp;<em>Tass</em>&nbsp;h&ocirc;m 3/5, &ocirc;ng Vladimir Rogov, quan chức th&acirc;n Nga tại miền Nam Ukraine, cho biết qu&acirc;n đội nước n&agrave;y đ&atilde; tiến h&agrave;nh tập k&iacute;ch t&ecirc;n lửa, qua đ&oacute; san phẳng một căn cứ huấn luyện của Ukraine tại tỉnh Zaporizhia.</p>\r\n\r\n<p>&quot;Qu&acirc;n đội Nga đ&atilde; tiến h&agrave;nh một cuộc tập k&iacute;ch nhằm v&agrave;o căn cứ của Ukraine ven s&ocirc;ng Mokraya Moskovla ở quận Shevchenkovsky ở Zaporizhia. Đ&acirc;y l&agrave; nơi m&agrave; c&aacute;c binh sĩ Ukraine đang tiến h&agrave;nh c&aacute;c b&agrave;i huấn luyện t&aacute;c chiến dưới sự gi&aacute;m s&aacute;t của chuy&ecirc;n gia nước ngo&agrave;i. Một t&ecirc;n lửa đ&atilde; đ&aacute;nh tr&uacute;ng căn cứ khi một b&agrave;i huấn luyện đang diễn ra&quot;, &ocirc;ng Rogov khẳng định.</p>\r\n\r\n<p>Trước đ&oacute;, &ocirc;ng Rogov cho hay Ukraine đ&atilde; đưa th&ecirc;m 3 lữ đo&agrave;n chiến thuật tới Zaporizhia để chuẩn bị cho kế hoạch phản c&ocirc;ng.</p>\r\n\r\n<p>&quot;Đối phương đ&atilde; điều động nhiều binh sĩ đến c&aacute;c mặt trận chiến lược Orekhov v&agrave; Gulyaypole ở Zaporizhia. Lữ đo&agrave;n đổ bộ đường kh&ocirc;ng số 46 c&ugrave;ng c&aacute;c Lữ đo&agrave;n ph&ograve;ng vệ l&atilde;nh thổ số 116 v&agrave; 118 l&agrave; những đơn vị đ&atilde; được huy động đến khu vực n&agrave;y. Đ&acirc;y l&agrave; lực lượng sẽ hỗ trợ 12.000 binh sĩ Ukraine hiện đang c&oacute; mặt tại Zaporizhia. Mục ti&ecirc;u của đối phương l&agrave; ho&agrave;n tất việc chuyển qu&acirc;n trong tuần n&agrave;y&quot;, &ocirc;ng Rogov n&oacute;i với h&atilde;ng th&ocirc;ng tấn&nbsp;<em>Tass</em>&nbsp;h&ocirc;m 26/4.</p>\r\n\r\n<p>Theo một số nguồn tin, căn cứ bị tập k&iacute;ch tr&ecirc;n l&agrave; địa điểm huấn luyện vượt s&ocirc;ng cho lực lượng tiếp viện Ukraine mới được điều động tới Zaporizhia.</p>\r\n\r\n<p>Cũng trong ng&agrave;y 3/5, qu&acirc;n đội Nga đ&atilde; đăng tải một đoạn video trong đ&oacute; ghi lại cảnh ph&aacute;o phản lực ph&oacute;ng loạt của lực lượng n&agrave;y tập k&iacute;ch một căn cứ của qu&acirc;n đội Ukraine tại khu vực Popasnyansky Vodokanal gần Zaporizhia.</p>\r\n\r\n<p>Theo&nbsp;<em>Avia-pro</em>, sau khi ph&aacute;t hiện ra vị tr&iacute; tập trung qu&acirc;n v&agrave; vũ kh&iacute; của Ukraine b&ecirc;n trong một nh&agrave; m&aacute;y nước, lực lượng ph&aacute;o binh thuộc Tập đo&agrave;n qu&acirc;n số 2 đ&atilde; khai hỏa, qua đ&oacute; đ&aacute;nh sập căn cứ n&agrave;y.</p>\r\n\r\n<p>Những h&igrave;nh ảnh thu được cho thấy căn cứ của qu&acirc;n đội Ukraine đ&atilde; ph&aacute;t nổ v&agrave; bốc ch&aacute;y dữ dội sau m&agrave;n tập k&iacute;ch của qu&acirc;n đội Nga.</p>\r\n\r\n<p>Zaporizhia l&agrave; một trong 4 tỉnh của Ukraine được Nga tuy&ecirc;n bố s&aacute;p nhập hồi th&aacute;ng 10 năm ngo&aacute;i. Tuy nhi&ecirc;n, qu&acirc;n đội Nga chưa kiểm so&aacute;t được to&agrave;n bộ l&atilde;nh thổ của tỉnh n&agrave;y, đặc biệt l&agrave; tại th&agrave;nh phố thủ phủ Zaporizhia c&ugrave;ng khu vực xung quanh nh&agrave; m&aacute;y điện hạt nh&acirc;n Zaporizhia.</p>\r\n\r\n<p>Thời gian gần đ&acirc;y, qu&acirc;n đội Ukraine đ&atilde; điều động một lực lượng binh sĩ v&agrave; trang thiết bị&nbsp;<a href=\"https://dantri.com.vn/the-gioi/quan-su.htm\">qu&acirc;n sự</a>&nbsp;về khu vực n&agrave;y nhằm sẵn s&agrave;ng cho c&aacute;c cuộc phản c&ocirc;ng gi&agrave;nh lại l&atilde;nh thổ. Theo c&aacute;c chuy&ecirc;n gia, việc qu&acirc;n đội Ukraine dồn qu&acirc;n xuống khu vực ph&iacute;a Nam đ&atilde; đặt lực lượng ph&ograve;ng thủ Nga tại b&aacute;n đảo Crimea trong trạng th&aacute;i cảnh gi&aacute;c cao độ.</p>\r\n'),
(13, 'Người phụ nữ có vòng 1 tự nhiên đẹp nhất Hàn Quốc mặc gì cũng “khó rời mắt”', 'https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/4-1608019628-411-width650height813-1683444973-181-width740height471.jpg', '2023-05-09 08:59:16.464801', '<p>Yuki Han (hay c&ograve;n gọi l&agrave; Han So Young,&nbsp;sinh năm 1983) được biết đến với vai tr&ograve;&nbsp;người mẫu,&nbsp;streamer nổi tiếng tại H&agrave;n Quốc.&nbsp;Hiện tại, c&ocirc;&nbsp;kh&ocirc;ng c&ograve;n tiếp tục c&ocirc;ng việc tr&ecirc;n v&agrave; đang ở Boston, Mỹ.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/4-1608019628-411-width650height813-1683444973-181-width740height471.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/image--3--1683444979-159-width740height474.jpg\" style=\"height:474px; width:740px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/6-1608019645-386-width650height813-1683444986-52-width740height474.jpg\" style=\"height:474px; width:740px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/2--2--1608019628-489-width650height813-1683445001-407-width740height477.jpg\" style=\"height:477px; width:740px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/fs1ei2fviaa98nw-1683445001-784-width740height480.jpg\" style=\"height:480px; width:740px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-05-07/fr_ez2uaqai0zlb-1683445001-827-width740height477.jpg\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(100) NOT NULL,
  `name` varchar(600) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(3) DEFAULT NULL,
  `img_product` varchar(400) NOT NULL,
  `list_img_product` varchar(800) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `creation_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `view` int(100) NOT NULL,
  `baner_trade_mark` varchar(800) DEFAULT NULL,
  `catalog_id` int(100) NOT NULL,
  `id_trade_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `discount`, `img_product`, `list_img_product`, `gender`, `creation_time`, `view`, `baner_trade_mark`, `catalog_id`, `id_trade_mark`) VALUES
(17, 'Kappa Áo Thun Thể Thao Ngắn Tay Thời Trang Dành Cho Nam', 957500, 10, 'https://cf.shopee.vn/file/41813b616168a3c73d1ae04d0a8d132a', 'https://cf.shopee.vn/file/41813b616168a3c73d1ae04d0a8d132a,https://cf.shopee.vn/file/8c63a2568417084680cee7ceffb034f3,https://cf.shopee.vn/file/8f9f6d94a3f8ae616db8335c8ceaf099', 'Male', '2023-03-27 14:21:56.263383', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 3, 1),
(18, ' Áo Thun Nam Kappa Màu Trắng', 340000, 5, 'https://linhvnxk.com/wp-content/uploads/2021/02/ao-thun-nam-kappa-co-tron-16-400x533.jpg', 'https://linhvnxk.com/wp-content/uploads/2021/02/ao-thun-nam-kappa-co-tron-16-400x533.jpg,https://linhvnxk.com/wp-content/uploads/2021/02/ao-thun-nam-kappa-co-tron-6-400x533.jpg', 'Male', '2023-03-28 09:31:53.913744', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 3, 1),
(20, 'Áo Khoác Lông Vũ Kappa Màu Đen', 1200000, 15, 'https://linhvnxk.com/wp-content/uploads/2021/11/ao-khoac-long-vu-nam-kappa-9.jpg', 'https://linhvnxk.com/wp-content/uploads/2021/11/ao-khoac-long-vu-nam-kappa-9.jpg,https://linhvnxk.com/wp-content/uploads/2021/11/ao-khoac-long-vu-nam-kappa.jpg,https://linhvnxk.com/wp-content/uploads/2021/11/ao-khoac-long-vu-nam-kappa-8.jpg,https://linhvnxk.com/wp-content/uploads/2021/11/ao-khoac-long-vu-nam-kappa-7.jpg', 'all', '2023-03-28 09:31:38.759501', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 4, 1),
(21, 'Quần Lót Đùi Nam Thông Hơi Kappa', 120000, 18, 'https://linhvnxk.com/wp-content/uploads/2019/03/quan-lot-nam-hang-hieu-kappa-boxer-4.jpg,', 'https://linhvnxk.com/wp-content/uploads/2019/03/quan-lot-nam-hang-hieu-kappa-boxer-4.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/quan-lot-nam-hang-hieu-kappa-boxer-2-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/quan-lot-nam-hang-hieu-kappa-boxer-1-400x400.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/quan-lot-nam-hang-hieu-kappa-boxer-3-400x400.jpg', 'all', '2023-03-28 09:43:44.886071', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 8, 1),
(22, ' Áo Ba Lỗ Nam Thể Thao Xuất Khẩu (Tank Top)', 150000, 10, 'https://linhvnxk.com/wp-content/uploads/2019/03/ao-tank-top-nam-kappa-2.jpg', 'https://linhvnxk.com/wp-content/uploads/2019/03/ao-tank-top-nam-kappa-2.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/ao-tank-top-nam-kappa-11.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/ao-ba-lo-sat-sat-nach-nam-kappa-62-400x400.jpg,https://linhvnxk.com/wp-content/uploads/2019/03/ao-ba-lo-sat-sat-nach-nam-kappa-72-400x400.jpg', 'Male', '2023-03-28 09:57:10.439219', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 8, 1),
(23, 'Áo Thun Cao Cổ Dài Tay Hàng Hiệu Cao Cấp Hàn Quốc', 300000, 35, 'https://linhvnxk.com/wp-content/uploads/2019/08/ao-cao-co-kappa-xuat-han-mau-trang-1-500x650.jpg', 'https://linhvnxk.com/wp-content/uploads/2019/08/ao-cao-co-kappa-xuat-han-mau-trang-1-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/08/ao-cao-co-kappa-xuat-han-mau-trang-21-500x650.jpg', 'Male', '2023-03-28 10:18:50.523257', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 3, 1),
(24, 'Quần Short Thể Thao Nam Xuất Khẩu Kappa Màu Ghi', 250000, 15, 'https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-1-500x650.jpg', 'https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-1-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-4-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-3-500x650.jpg', 'Male', '2023-03-28 10:20:38.461074', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 7, 1),
(25, 'Quần Short Thể Thao Nam Xuất Khẩu Kappa Màu Đen', 250000, 25, 'https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-6-500x650.jpg', 'https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-6-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-5-500x650.jpg,https://linhvnxk.com/wp-content/uploads/2019/10/quan-sooc-nam-the-thao-kappa-3-500x650.jpg', 'Male', '2023-03-28 10:22:04.393310', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 7, 1),
(26, 'GIÀY SNEAKERS KAPPA NAM 341E24W', 500000, 15, 'https://muanhanh.vn/img/2022/11/hp/catalog-product--3-4/341e24w-a01-1_1_10.jpg', 'https://muanhanh.vn/img/2022/11/hp/catalog-product--3-4/341e24w-a01-1_1_10.jpg', 'Male', '2023-03-28 10:24:33.057396', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand', 1, 1),
(27, 'Ecko Unltd giày sneakers nam IS22-26515', 512000, 15, 'https://vn-test-11.slatic.net/p/4579f2e5bc3b872e2135d9bd7b68118b.jpg', 'https://vn-test-11.slatic.net/p/4579f2e5bc3b872e2135d9bd7b68118b.jpg,https://vn-test-11.slatic.net/p/ab2dcd5e6fdfd97fd828d543681158ab.jpg,https://vn-test-11.slatic.net/p/ce3560cf8c589a5a6ee1e8c0c1ef6ce1.jpg', 'Male', '2023-03-29 13:19:57.386916', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand', 1, 2),
(28, 'Ecko Unltd nam dép kẹp IS22-25507', 299000, 50, 'https://vn-test-11.slatic.net/p/239df04bd891db926ff3a8d2063a8173.jpg', 'https://vn-test-11.slatic.net/p/239df04bd891db926ff3a8d2063a8173.jpg,https://vn-test-11.slatic.net/p/0d5039b53170b3493efbacc2a66307ea.jpg', 'Male', '2023-03-29 13:23:11.360633', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand', 2, 2),
(29, 'Ecko Unltd nam giày đế cao su IS22-28504', 399000, 35, 'https://vn-test-11.slatic.net/p/03c5143f33ccdfd7f000c20a5ac5afe7.jpg', 'https://vn-test-11.slatic.net/p/03c5143f33ccdfd7f000c20a5ac5afe7.jpg,https://vn-test-11.slatic.net/p/a433971c855ed40e94f67c3a6b807def.jpg,https://vn-test-11.slatic.net/p/bde895ddaba4c85d00a5f455a9f2dacd.jpg', 'all', '2023-03-31 10:22:01.871919', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 1, 2),
(30, 'Ecko Unltd nữ quần jeans skinny fit IS22-35103', 599000, 25, 'https://vn-test-11.slatic.net/p/fa1f25f632a03e4b5a5855f105f771f2.jpg', 'https://vn-test-11.slatic.net/p/fa1f25f632a03e4b5a5855f105f771f2.jpg,https://vn-test-11.slatic.net/p/a286881b60f92c410f3044f4b2c2510a.jpg,https://vn-test-11.slatic.net/p/7751d4c11cf890c3c2430955c67b6de5.jpg', 'Female', '2023-03-29 13:25:32.715852', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand', 6, 2),
(31, 'Ecko Unltd giày thể thao nam IS22-24506', 499000, 12, 'https://vn-test-11.slatic.net/p/b7dd8128a304b9efbb4dffc073636c8c.jpg', 'https://vn-test-11.slatic.net/p/b7dd8128a304b9efbb4dffc073636c8c.jpg,https://vn-test-11.slatic.net/p/e3420ca8aa7bbd44b4f4026ed7490196.jpg,https://vn-test-11.slatic.net/p/f99f3572f4aec56387b47f2f86339a27.jpg', 'Male', '2023-03-29 13:27:22.333397', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand', 1, 2),
(32, 'Dép quai kẹp (xỏ ngón) Ecko full box', 319000, 12, 'https://vn-test-11.slatic.net/p/588c8be776819822462716b9e506c62b.jpg', 'https://vn-test-11.slatic.net/p/588c8be776819822462716b9e506c62b.jpg,https://vn-test-11.slatic.net/p/76280d3f7b393d2681b2082d168bc13c.jpg,https://vn-test-11.slatic.net/p/7371184f0b7f38528094c4b33bfd9ef6.jpg', 'all', '2023-03-29 13:28:27.408080', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand', 2, 2),
(33, 'Áo Khoác Kiểu Nam IS19 Ecko Unltd 07055', 2100000, 25, 'https://media3.scdn.vn/img4/2020/03_31/pOox5z7V8wpkTAn4emAF.jpg', 'https://media3.scdn.vn/img4/2020/03_31/pOox5z7V8wpkTAn4emAF.jpg,https://media3.scdn.vn/img4/2020/03_31/q2F51N3d67UKi13FiTPf.jpg,https://media3.scdn.vn/img4/2020/03_31/AV4BykM19Fbouh2YSEbG.jpg', 'Male', '2023-03-30 08:49:44.345444', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 4, 2),
(34, 'Áo Sơ Mi Nam Trắng ECKO UNLTD Siêu Chất Hàng Form Chuẩn Bao Đẹp', 300000, 25, 'https://vn-test-11.slatic.net/p/c5ab7684f29533cc12e45cc126f1daa8.jpg', 'https://vn-test-11.slatic.net/p/c5ab7684f29533cc12e45cc126f1daa8.jpg,https://vn-test-11.slatic.net/p/c0a365a8b448191fb2dc6db5febce6f2.jpg', 'Male', '2023-03-30 08:52:51.835966', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 5, 2),
(35, ' Áo khoác ECKO RED auth size S new without tag', 500000, 25, 'https://cf.shopee.vn/file/c52edb80314a62efc073e1a2312e078a_tn', 'https://cf.shopee.vn/file/c52edb80314a62efc073e1a2312e078a_tn,https://cf.shopee.vn/file/a2577e088f8517e7ecafbf8450d1e1ce_tn,https://cf.shopee.vn/file/dc267b0f851daf188614eaef1d6a3834_tn', 'all', '2023-03-30 08:55:44.700260', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 4, 2),
(36, 'Váy trắng tay nơ', 290000, 25, 'https://cf.shopee.vn/file/39e98b2c0e6261f2a22ef2a884b6f23e', 'https://cf.shopee.vn/file/39e98b2c0e6261f2a22ef2a884b6f23e_tn,https://cf.shopee.vn/file/25ed0e95102f8bba8d6cdc585880c341_tn,https://cf.shopee.vn/file/7b695371339f72a6c88d14ce8bd8d4cc_tn', 'Female', '2023-03-30 08:59:27.409717', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 10, 2),
(37, 'Đầm váy xanh form dài nơ vai', 300000, 25, 'https://cf.shopee.vn/file/06aa218bfce553f50d68c18e05bdb6d4_tn', 'https://cf.shopee.vn/file/06aa218bfce553f50d68c18e05bdb6d4_tn,https://cf.shopee.vn/file/80a42df4335975674c6db7a369ddc0c3_tn,https://cf.shopee.vn/file/702c2c1644d74b1130b264b431045e8a_tn,https://cf.shopee.vn/file/f33911136bc92307fbd1dbf0241f6e13_tn', 'Female', '2023-03-30 09:01:11.639111', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 9, 5),
(38, 'Đầm body tay dài thời trang XIXO cao cấp', 310000, 25, 'https://vn-test-11.slatic.net/p/c7dfa1dbb1e3cdb6b9e757579e246cdb.jpg', 'https://vn-test-11.slatic.net/p/c7dfa1dbb1e3cdb6b9e757579e246cdb.jpg,https://vn-test-11.slatic.net/p/51b7c4db716766f54a7fb8dea11ac36d.jpg', 'Female', '2023-03-30 09:02:49.324565', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 10, 5),
(39, 'Chân Váy Tầng 2 màu đen trắng', 200000, 10, 'https://cf.shopee.vn/file/7c3ff340b141fea14f0fcd99e5c06db7_tn', 'https://cf.shopee.vn/file/7c3ff340b141fea14f0fcd99e5c06db7_tn,https://cf.shopee.vn/file/05f0a5fe642ac4734e64d5af951ed176_tn', 'Female', '2023-03-30 09:04:16.745789', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 9, 5),
(40, 'Chân váy xoè kaki dior', 510000, 25, 'https://cf.shopee.vn/file/3ae46e4cac12fab57c2d0c19a0ec71f0_tn', 'https://cf.shopee.vn/file/3ae46e4cac12fab57c2d0c19a0ec71f0_tn,https://cf.shopee.vn/file/b9a10136e3db93fb8b87f1bd1718c32b_tn', 'Female', '2023-03-30 09:05:26.973582', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 9, 5),
(41, 'Giày Vans Chính Hãng Stape Cruze Comfycush Dress Blue 2020', 900000, 30, 'https://cf.shopee.vn/file/4d44b8357519c795b7a583e4e049464e_tn', 'https://cf.shopee.vn/file/4d44b8357519c795b7a583e4e049464e_tn,https://cf.shopee.vn/file/a3547e415b281b0dd1794cc2b921046c_tn,https://cf.shopee.vn/file/81cd5ee0b7e2450ebdac635ce79a0d11_tn,https://cf.shopee.vn/file/a0d723bd5938ff236899a5e9430e24c2_tn', 'all', '2023-03-30 09:07:20.293303', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 1, 4),
(42, 'Giày Vans Chính Hãng Stape Cruze Comfycush Dress Blue', 1100000, 20, 'https://cf.shopee.vn/file/418b4eb7c86d4b9b07cb4dea8963c225_tn', 'https://cf.shopee.vn/file/418b4eb7c86d4b9b07cb4dea8963c225_tn,https://cf.shopee.vn/file/3ac5eca2ac8d7f6d58750d47e6fed113_tn', 'all', '2023-03-30 09:08:46.948996', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 1, 4),
(43, 'Giày Van Bold Ni Stape Black', 300000, 30, 'https://cf.shopee.vn/file/vn-11134201-23020-xizksbhi8vnv1c_tn', 'https://cf.shopee.vn/file/vn-11134201-23020-xizksbhi8vnv1c_tnhttps://cf.shopee.vn/file/vn-11134201-23020-xizksbhi8vnv1c_tn,https://cf.shopee.vn/file/vn-11134201-23020-haitr8ii8vnv5b_tn,https://cf.shopee.vn/file/vn-11134201-23020-he27pbki8vnv0b_tn,https://cf.shopee.vn/file/vn-11134201-23020-vbjvd7ii8vnv3c', 'all', '2023-03-30 09:10:22.938524', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 1, 4),
(44, 'Dép quai ngang nữ và nam độn đế Ulzang, dép bánh mỳ siêu bền, k ngấm nước', 200000, 10, 'https://salt.tikicdn.com/cache/750x750/ts/product/bd/54/e9/009d108a8e51a88d81b1448517192d86.jpg.webp', 'https://salt.tikicdn.com/cache/750x750/ts/product/bd/54/e9/009d108a8e51a88d81b1448517192d86.jpg.webp,https://salt.tikicdn.com/cache/750x750/ts/product/19/7e/99/6c44ee42da3ebe518e6e8e4e83b55de8.jpg.webp', 'all', '2023-03-30 09:17:22.264361', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 2, 5),
(46, 'Dép quai ngang Butterfly one color đế dày', 210000, 15, 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230129_ohBuTlx44HrVkp9y.JPG', 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230129_ohBuTlx44HrVkp9y.JPG,https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230129_oY2hlVe6yEe1dTls.jpg', 'all', '2023-03-30 09:39:41.448735', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 2, 5),
(47, 'Dép quai ngang Three squares one color đế dày', 180000, 20, 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230317_ChVf8NDUp1.jpeg', 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230317_80inooKhWo.jpeg,https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230317_ChVf8NDUp1.jpeg', 'all', '2023-03-30 09:41:24.177273', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 2, 5),
(48, 'Dép quai ngang Cute duck miệng nổi đế dày - Mix', 150000, 5, 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230311_PhnvQzCRov.jpeg', 'https://img.cdn.vncdn.io/cdn-pos/cba2a3-7534/ps/20230311_PhnvQzCRov.jpeg', 'all', '2023-03-30 09:42:22.850118', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 2, 5),
(49, 'KAPPA Nón Lưỡi Trai K0AX8MB01', 790000, 30, 'https://cf.shopee.vn/file/9113c539c5b3fdc3b03e56026b313e69_tn', 'https://cf.shopee.vn/file/9113c539c5b3fdc3b03e56026b313e69_tn,https://cf.shopee.vn/file/02a084fefa7f259e93fe37273cde7a21_tn,https://cf.shopee.vn/file/86bdb396f3a17b6b56fa662776462b60_tn', 'all', '2023-03-30 09:45:24.604717', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 35, 1),
(50, 'Nón Lưỡi Trai Kappa Thời Trang Cá Tính', 150000, 10, 'https://cf.shopee.vn/file/4b0b5bdc79115b896b1a6a831beb5f20_tn', 'https://cf.shopee.vn/file/4b0b5bdc79115b896b1a6a831beb5f20_tn,https://cf.shopee.vn/file/316cfaee6547c7a224635199e7095f0a_tn,https://cf.shopee.vn/file/70ef913de5010f347ef0c0f3a7bb101e_tn', 'all', '2023-03-30 09:46:34.841635', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 35, 1),
(51, 'Nón Thủy Thủ Hot Trend', 150000, 30, 'https://cf.shopee.vn/file/42651b2232f0931a496fc1471d5a6378_tn', 'https://cf.shopee.vn/file/1230431e3af2de2347aececfbff52915,https://cf.shopee.vn/file/42651b2232f0931a496fc1471d5a6378_tn', 'all', '2023-03-31 10:26:06.315588', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 35, 5),
(52, 'GIÀY KAPPA #Real_Leathe_Upper cho nam', 1900000, 15, 'https://cf.shopee.vn/file/55c0ae4e3398c64ed29bef3bf542b58c_tn', 'https://cf.shopee.vn/file/55c0ae4e3398c64ed29bef3bf542b58c_tn,https://cf.shopee.vn/file/26bb5622dcd05722df78d06b00628232_tn', 'Male', '2023-03-31 10:31:45.519576', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 1, 1),
(53, '[Cao Cấp] Giày thể thao hiệu kappa', 500000, 10, 'https://cf.shopee.vn/file/ebc19978cc3a3b2065826d3d0a543846_tn', 'https://cf.shopee.vn/file/ebc19978cc3a3b2065826d3d0a543846_tn', 'all', '2023-03-31 10:32:45.714977', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 1, 1),
(54, 'Kappa Giày Sneaker Unisex 304I3C0', 900000, 20, 'https://cf.shopee.vn/file/be744f4677fd76a66d69c03b5dd457e6_tn', 'https://cf.shopee.vn/file/be744f4677fd76a66d69c03b5dd457e6_tn,https://cf.shopee.vn/file/010733b9323e5ed6b6659ca918a20a6a_tn,https://cf.shopee.vn/file/202ddb2b998372479fe01c8652968411_tn', 'all', '2023-03-31 10:33:50.141260', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 1, 1),
(56, 'ÁO THUN NAM FORM RỘNG TRẺ TRUNG', 300000, 20, 'https://thoitrangngaynay.com/upload/sanpham/ao-thun-nam-form-rong-tre-trung-849-1.jpg', 'https://thoitrangngaynay.com/upload/sanpham/ao-thun-nam-form-rong-tre-trung-849-1.jpg,https://thoitrangngaynay.com/upload/sanpham/small/ao-thun-nam-form-rong-tre-trung-849-2.jpg', 'Male', '2023-03-31 10:44:14.042366', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 3, 1),
(57, 'Áo Thun Nam Kappa Basic', 500000, 30, 'https://product.hstatic.net/1000233188/product/5_5dd21aa7845f46b28aa64a90a0348d8a_medium.png', 'https://product.hstatic.net/1000233188/product/5_5dd21aa7845f46b28aa64a90a0348d8a_medium.png,https://product.hstatic.net/1000233188/product/1_4e180e39d29a4a499a812a55c610bf3e_medium.png', 'Male', '2023-03-31 10:45:28.532186', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 3, 1),
(58, 'Vip Áo Thun Nam', 300000, 30, 'https://product.hstatic.net/1000233188/product/10_3893b0e540984908931c6fdd897db09a_medium.png', 'https://product.hstatic.net/1000233188/product/10_3893b0e540984908931c6fdd897db09a_medium.png,https://product.hstatic.net/1000233188/product/4_0023a82819fd4dbab480a298dd90e858_medium.png', 'Male', '2023-03-31 10:46:23.412598', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 3, 1),
(59, 'Áo Thun T -Shirt', 300000, 30, 'https://product.hstatic.net/1000233188/product/21_46fb41fcbd1d40c3bad0c858c3749c52_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/21_46fb41fcbd1d40c3bad0c858c3749c52_1024x1024.jpg,https://product.hstatic.net/1000233188/product/20_d375d87427534a7f99a7566cbb2c5256_1024x1024.jpg', 'all', '2023-03-31 10:47:41.065485', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 3, 2),
(60, 'Áo thun nam basic Cotton', 310000, 15, 'https://product.hstatic.net/1000233188/product/37_6ff85aed6d694ecdba5669c84329f0d0_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/37_6ff85aed6d694ecdba5669c84329f0d0_1024x1024.jpg', 'all', '2023-03-31 10:48:34.240211', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 3, 2),
(61, 'Áo Khoác Nữ ', 200000, 10, 'https://product.hstatic.net/1000233188/product/1_0a2611a12eff4f19acaf78293d4b1f44_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/1_0a2611a12eff4f19acaf78293d4b1f44_1024x1024.jpg,https://product.hstatic.net/1000233188/product/2_33b3bdbd9d7e4cc7bdb23720f4a0be3f_1024x1024.jpg,https://product.hstatic.net/1000233188/product/5_5020953a528b4b58a1b257058f7fa07b_1024x1024.jpg', 'Female', '2023-03-31 10:50:06.438126', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 4, 2),
(62, 'Áo Khoác Nữ Black Devil 10', 470000, 70, 'https://product.hstatic.net/1000233188/product/32_aec21379b08043f3a398c0488ca03c46_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/32_aec21379b08043f3a398c0488ca03c46_1024x1024.jpg,https://product.hstatic.net/1000233188/product/33_bee2b95d724646eead0a3eebe12fa484_1024x1024.jpg,https://product.hstatic.net/1000233188/product/thiet_ke_chua_co_ten__1__87b9067526d34595bfcaf7c332cd41ed_1024x1024.jpg', 'Female', '2023-03-31 10:51:31.380365', 1, 'public/img/thuong-hieu/web-tranh-superga-brand.jpg', 4, 3),
(63, 'Áo Khoác Nữ HOT 2023', 400000, 30, 'https://product.hstatic.net/1000233188/product/1_e5f9479a454440c78d1eaf638ce43fb7_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/1_e5f9479a454440c78d1eaf638ce43fb7_1024x1024.jpg', 'Female', '2023-03-31 10:52:36.888180', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 4, 4),
(64, 'Nón Devil Unique', 315000, 70, 'https://product.hstatic.net/1000233188/product/29_1a035d72a74b4d488485e2e4264fd29a_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/29_1a035d72a74b4d488485e2e4264fd29a_1024x1024.jpg,https://product.hstatic.net/1000233188/product/28_651cea999bd94441a28ed0d84c44e593_1024x1024.jpg', 'all', '2023-03-31 10:55:17.076990', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 35, 5),
(65, 'Nón Basic Classic', 100000, 20, 'https://product.hstatic.net/1000233188/product/18_3c214fdbc1d740d9b5df27fc5f7481d0_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/18_3c214fdbc1d740d9b5df27fc5f7481d0_1024x1024.jpg,https://product.hstatic.net/1000233188/product/19_8f46ec878d224bafbd5ea694b182ab27_1024x1024.jpg', 'all', '2023-03-31 10:57:18.194471', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 35, 4),
(66, 'Quần Short Nam', 300000, 15, 'https://product.hstatic.net/1000233188/product/1_e09ccca0b4c14cb8b9a149e9e8d0cf14_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/1_e09ccca0b4c14cb8b9a149e9e8d0cf14_1024x1024.jpg,https://product.hstatic.net/1000233188/product/quan_short_565e8396ecbe44b5b00d0cb0e955dece_1024x1024.jpg', 'Male', '2023-03-31 10:58:23.942672', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 7, 1),
(67, 'Quần Short Kaki Lưng Thun chất kaki co giãn', 400000, 30, 'https://product.hstatic.net/1000233188/product/7_9b030972edef440f9fc6d95b28d8a6b5_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/7_9b030972edef440f9fc6d95b28d8a6b5_1024x1024.jpg', 'Male', '2023-03-31 10:59:19.229095', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 7, 4),
(68, 'Quần Shorts Nam 21', 200000, 30, 'https://product.hstatic.net/1000233188/product/18_2ef1bbfda1dd4d54b85100851bd2418e_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/18_2ef1bbfda1dd4d54b85100851bd2418e_1024x1024.jpg,https://product.hstatic.net/1000233188/product/19_3dc0f46ca92c4cfabeaff7cc9b5084c7_1024x1024.jpg', 'Male', '2023-03-31 11:00:01.651395', 1, 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 7, 4),
(69, 'Quần Short Nam Kappa SPORT 21', 500000, 50, 'https://product.hstatic.net/1000233188/product/16_4aa1df3b30644e13a5c63563320abca8_1024x1024.jpg', 'https://product.hstatic.net/1000233188/product/16_4aa1df3b30644e13a5c63563320abca8_1024x1024.jpg,https://product.hstatic.net/1000233188/product/13_d7caeb27036644539a8a3108fdf051a5_1024x1024.jpg', 'Male', '2023-03-31 11:01:08.431122', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 7, 1),
(70, 'ÁO KHOÁC DÙ NỮ CÁ TÍNH HÀN QUỐC', 300000, 30, 'https://thoitrangngaynay.com/upload/sanpham/ao-khoac-du-nu-ca-tinh-han-quoc-834-1.jpg', 'https://thoitrangngaynay.com/upload/sanpham/ao-khoac-du-nu-ca-tinh-han-quoc-834-1.jpg', 'Female', '2023-03-31 11:04:48.783186', 1, 'public/img/thuong-hieu/web-tranh_ninu.jpg', 4, 5),
(71, 'Nón mũ lưỡi Start năng động', 1000000, 20, 'https://nonkim.com/wp-content/uploads/2020/03/chon-non-luoi-trai-nam-mat-dai-2.jpg', 'https://nonkim.com/wp-content/uploads/2020/03/chon-non-luoi-trai-nam-mat-dai-2.jpg', 'all', '2023-04-01 08:03:04.043854', 1, 'public/img/thuong-hieu/web-tranh-superga-brand.jpg', 35, 3),
(72, 'Nón Mũ dadhat MLB chữ B trắng 1077', 350000, 10, 'https://caper.vn/wp-content/uploads/2021/04/IMG_8716-1024x1024.jpg', 'https://caper.vn/wp-content/uploads/2021/04/IMG_8716-1024x1024.jpg', 'all', '2023-04-01 08:04:28.983360', 1, 'public/img/thuong-hieu/web-tranh-superga-brand.jpg', 35, 3),
(73, 'Nón Ballcap Golf EST 1997', 280000, 12, 'https://caper.vn/wp-content/uploads/2021/04/IMG_8644-1024x1024.jpg', 'https://caper.vn/wp-content/uploads/2021/04/IMG_8644-1024x1024.jpg,https://caper.vn/wp-content/uploads/2021/04/IMG_8645-scaled.jpg', 'all', '2023-04-01 08:05:54.225831', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 35, 2),
(74, 'Nón A-Frame NY hoa', 800000, 50, 'https://caper.vn/wp-content/uploads/2022/02/IMG_2888.jpg', 'https://caper.vn/wp-content/uploads/2022/02/IMG_2888.jpg', 'all', '2023-04-01 08:06:45.852764', 1, 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg', 35, 1),
(75, 'Nón Ballcap Balenciaga', 300000, 10, 'https://caper.vn/wp-content/uploads/2021/04/IMG_8630-scaled.jpg', 'https://caper.vn/wp-content/uploads/2021/04/IMG_8630-scaled.jpg,https://caper.vn/wp-content/uploads/2021/04/IMG_8628-scaled.jpg', 'all', '2023-04-01 08:07:52.094330', 1, 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg', 35, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trade_mark`
--

CREATE TABLE `tbl_trade_mark` (
  `id` int(2) NOT NULL,
  `name_trade_mark` varchar(60) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `banner_trade_mark` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_trade_mark`
--

INSERT INTO `tbl_trade_mark` (`id`, `name_trade_mark`, `logo`, `banner_trade_mark`) VALUES
(1, 'Kappa', 'public/img/thuong-hieu/kappa-removebg-preview.png', 'public/img/thuong-hieu/web-tranh-kappa-brand.jpg'),
(2, 'Ecko Unltd', 'public/img/thuong-hieu/eckounltd-removebg-preview.png\"', 'public/img/thuong-hieu/web-tranh-ecko-brand.jpg'),
(3, 'Super GA', 'public/img/thuong-hieu/Superga_Logo.png', 'public/img/thuong-hieu/web-tranh-superga-brand.jpg'),
(4, 'Staple', 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png', 'public/img/thuong-hieu/Staple-Logo-removebg-preview.png'),
(5, 'NUNU&NICK', 'public/img/thuong-hieu/logo-ninunick-fix-removebg-preview.png', 'public/img/thuong-hieu/web-tranh_ninu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(600) NOT NULL,
  `registration_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `email` varchar(300) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `gender`, `address`, `registration_date`, `email`, `phone_number`) VALUES
(1, 'Lê Hửu Lợi', 'lehuuloi9323', '01657559323', 'Male', '1144 Phạm Thế Hiển,P5, Q8, HCM', '0000-00-00 00:00:00.000000', 'lehuuloi9323@gmail.com', 357559323),
(9, 'Thu Thảo', 'thuthao2411', '123456789ThuThao', 'female', '52 ấp hiệp hòa xã mỹ hiệp sơn hòn đất kiên giang', '2023-04-30 05:00:29.982743', 'lehuuloi612@gmail.com', 357559323),
(10, 'admin', 'lehuuloi612', '01657559323Huuloi', 'male', '52 ấp hiệp hòa xã mỹ hiệp sơn hòn đất kiên giang', '2023-05-03 03:01:51.158433', 'lehuuloi9323@gmail.com', 357559323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_oder` (`id_oder`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_id` (`catalog_id`),
  ADD KEY `id_trade_mark` (`id_trade_mark`);

--
-- Indexes for table `tbl_trade_mark`
--
ALTER TABLE `tbl_trade_mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id_order_detail` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_trade_mark`
--
ALTER TABLE `tbl_trade_mark`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`id_oder`) REFERENCES `tbl_order` (`id_order`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `tbl_catalog` (`id`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`id_trade_mark`) REFERENCES `tbl_trade_mark` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
