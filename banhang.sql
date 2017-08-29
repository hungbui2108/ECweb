-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2017 lúc 11:12 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(6, 'admin', 'admin', 'hungbui'),
(7, 'mod1', 'mod1', 'Nguyen Van Huy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `catalog_id`, `name`) VALUES
(1, 24, 'APPLE'),
(2, 24, 'SamSung'),
(3, 25, 'SamSung'),
(4, 25, 'APPLE'),
(5, 26, 'Dell'),
(6, 24, 'OPPO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(24, 'ĐIỆN THOẠI'),
(25, 'TABLET'),
(26, 'LAPTOP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(14) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `sold_qty` int(10) NOT NULL DEFAULT '0',
  `storage_qty` int(10) NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `modify_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `brand_id`, `name`, `price`, `content`, `sold_qty`, `storage_qty`, `image_link`, `image_list`, `modify_time`) VALUES
(16, 24, 1, 'IPHONE 7', 18790000, '<table align=\"center\" cellspacing=\"80px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-3.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Thiết kế sang trọng, c&aacute; t&iacute;nh</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 MN8X2 QT 32GB với thiết kế sang trọng, c&aacute; t&iacute;nh với to&agrave;n bộ vỏ v&agrave; khung viền được l&agrave;m bằng nh&ocirc;m nguy&ecirc;n khối. C&aacute;c chi tiết được l&agrave;m liền mạch, gi&uacute;p cho m&aacute;y chắc chắn, bền bỉ.&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-1.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>M&agrave;n h&igrave;nh Retina HD 4.7inch</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 với m&agrave;n h&igrave;nh Retina HD 4.7inch (1334x750pixels) cho khả năng hiển thị s&aacute;ng hơn, độ phủ m&agrave;u rộng hơn, đem lại trải nghiệm h&igrave;nh ảnh thật hơn bao giờ hết.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-plus-silver-128gb-2.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Hiệu năng vượt trội</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong><a href=\"https://www.trananh.vn/dien-thoai-di-dong/dien-thoai-apple-iphone-7-black-32gb-mn8x2-qt-pid193944cid338\">Apple iPhone 7 MN8X2 QT 32GB</a></strong>&nbsp;vận h&agrave;nh nhờ sức mạnh của chip xử l&yacute; A10 Fusion với cấu tr&uacute;c 4 nh&acirc;n (hai nh&acirc;n hiệu năng cao v&agrave; 2 nh&acirc;n tiết kiệm năng lượng). Bộ nhớ trong 32GB, RAM 2GB hoạt động tối ưu.&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/2.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Camera cải tiến vượt bậc</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 với camera ch&iacute;nh 12MP c&oacute; khẩu độ được cải tiến f/1.9, k&iacute;ch thước cảm biến cũng được n&acirc;ng l&ecirc;n 1/2,6&quot; gi&uacute;p cho thiết bị c&oacute; khả năng chụp h&igrave;nh trong điều kiện &aacute;nh s&aacute;ng yếu. Camera trước n&acirc;ng cấp 7MP.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-plus-1.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>N&uacute;t Home dạng tĩnh</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>N&uacute;t Home dạng tĩnh với khả năng cảm nhận lực nhấn của người d&ugrave;ng mở ra một trải nghiệm tương t&aacute;c ho&agrave;n to&agrave;n mới, người d&ugrave;ng sẽ kh&ocirc;ng c&ograve;n lo lắng với n&uacute;t Home vật l&yacute; dễ hỏng v&agrave; giảm dần độ nhạy theo thời gian.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-plus-14.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>&Acirc;m thanh tuyệt vời với loa k&eacute;p</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 MN8X2 QT 32GB c&ograve;n được trang bị hệ thống loa stereo k&eacute;p. Một loa sẽ được đặt ở đỉnh m&aacute;y trong khi loa c&ograve;n lại được bố tr&iacute; ở đu&ocirc;i m&aacute;y mang đến &acirc;m thanh sống động, ch&acirc;n thật nhất.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-5.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Tai nghe kh&ocirc;ng d&acirc;y AirPods</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Tai nghe AirPods kh&ocirc;ng d&acirc;y d&agrave;nh cho iPhone. Đối với những người trẻ năng động, AirPods l&agrave; một m&oacute;n qu&agrave; tuyệt vời m&agrave; Apple mang đến.&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-4.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Khả năng chống nước</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong><a href=\"https://www.trananh.vn/dien-thoai/dien-thoai-di-dong-cid338-pr0-br166\">Apple</a></strong>&nbsp;iPhone 7 trang bị ti&ecirc;u chuẩn IP67, đồng nghĩa với việc người d&ugrave;ng c&oacute; thể ng&acirc;m nước thiết bị trong tối đa 30 ph&uacute;t ở độ s&acirc;u 1 m&eacute;t.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/3463737.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Pin 1960mAh</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 sử dụng vi&ecirc;n pin c&oacute; dung lượng 1960mAh cho thời gian sử dụng cao hơn khoảng, hỗ trợ nghe nhạc, lướt web li&ecirc;n tục.</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2016/09/21/dien-thoai-apple-iphone-7-2.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Th&ecirc;m phi&ecirc;n bản m&agrave;u Jet Black mới&nbsp;</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Apple iPhone 7 c&ograve;n được Apple được bổ sung th&ecirc;m m&agrave;u Jet Black gi&uacute;p người d&ugrave;ng c&oacute; th&ecirc;m nhiều lựa chọn m&agrave;u sắc đa dạng hơn.&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<ul>\r\n</ul>\r\n', 2, 99, 'upload/image/iphone-7.jpg', '', '2017-05-05'),
(17, 24, 1, 'IPHONE 7 PLUS', 22290000, 'iphone 7 plus', 3, 97, 'upload/image/iphone-7-plus.png', '', '2017-04-08'),
(19, 24, 2, 'SamSung Galaxy S8', 17990000, '<table align=\"center\" cellspacing=\"80px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-den-1.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Thiết kế ấn tượng</strong></p>\r\n\r\n			<p><strong><a href=\"https://www.trananh.vn/dien-thoai-di-dong/dien-thoai-samsung-galaxy-s8--mau-den-pid195389cid338\">Điện thoại Samsung Galaxy S8 - M&agrave;u Đen</a></strong>&nbsp;sở hữu vẻ ngo&agrave;i đầy ấn tượng với thiết kế kh&ocirc;ng viền m&agrave;n h&igrave;nh si&ecirc;u mỏng kết hợp với bộ khung kim loại chắc chắn v&agrave; k&iacute;nh cong 3D sẽ tạo ra một vẻ ngo&agrave;i cứng c&aacute;p, sang trọng.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-2.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>M&agrave;n h&igrave;nh v&ocirc; cực</strong></p>\r\n\r\n			<p><strong>Samsung Galaxy S8</strong>&nbsp;trang bị m&agrave;n h&igrave;nh k&iacute;ch thước 5.8 inch với độ ph&acirc;n giải 2560x1440 pixels c&ugrave;ng c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED, thiết kế m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display đem đến h&igrave;nh ảnh sắc n&eacute;t, ch&acirc;n thực nhất.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-3.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Cấu h&igrave;nh mạnh mẽ</strong></p>\r\n\r\n			<p><strong>Samsung Galaxy S8</strong>&nbsp;được trang bị hai bộ vi xử lý mạnh mẽ nhất hiện nay l&agrave; Snapdragon 835 và Exynos 8895, RAM 4GB, bộ nhớ trong 64GB, hỗ trợ thẻ nhớ microSD để người d&ugrave;ng mở rộng kh&ocirc;ng gian lưu trữ mang lại hiệu năng mạnh mẽ, ổn định đ&aacute;p ứng những y&ecirc;u cầu khắt khe của người d&ugrave;ng.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-4.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Hệ thống camera sắc n&eacute;t</strong></p>\r\n\r\n			<p><strong><a href=\"https://www.trananh.vn/dien-thoai/dien-thoai-di-dong-cid338-pr0-br121\">Điện thoại Samsung</a></strong>&nbsp;được trang bị camera sau với độ ph&acirc;n giải l&ecirc;n đến 12MP, độ khẩu f/1.7 v&agrave; camera trước độ ph&acirc;n giải 8MP, độ khẩu f/1.7 kết hợp c&ugrave;ng nhiều t&iacute;nh năng chụp ảnh độc đ&aacute;o kh&aacute;c như tự động lấy n&eacute;t, nhận diện khu&ocirc;n mặt... sẽ đem đến cho bạn những bức ảnh vừa &yacute; nhất.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-5.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Khả năng bảo mật an to&agrave;n</strong></p>\r\n\r\n			<p><a href=\"https://www.trananh.vn/dien-thoai/dien-thoai-di-dong-cid338\"><strong>Điện thoại&nbsp;di động</strong></a>&nbsp;được trang bị đầy đủ 5 t&ugrave;y chọn bảo mật đỉnh cao nhất hiện nay bao gồm: mống mắt, v&acirc;n tay, nhận diện khu&ocirc;n mặt, mật khẩu v&agrave; mẫu h&igrave;nh gi&uacute;p bảo mật m&aacute;y an to&agrave;n hơn cho người d&ugrave;ng.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-6.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Chống nước, chống bụi vượt trội</strong></p>\r\n\r\n			<p><strong>Samsung Galaxy S8</strong>&nbsp;được trang bị&nbsp;t&iacute;nh năng chống nước v&agrave; chống bụi theo ti&ecirc;u chuẩn IP68 gi&uacute;p người d&ugrave;ng c&oacute; thể y&ecirc;n t&acirc;m sử dụng điện thoại trong m&ocirc;i trường ẩm ướt, nhiều bụi trong khoảng thời gian 30 ph&uacute;t.</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-7.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Dung lượng pin</strong></p>\r\n\r\n			<p><strong>Samsung Galaxy S8</strong>&nbsp;sở hữu vi&ecirc;n pin 3.000mAh c&ugrave;ng chuẩn kiểm tra pin 8 bước an to&agrave;n tuyệt đối cho bạn thoải m&aacute;i sử dụng cả ng&agrave;y d&agrave;i.&nbsp;</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><img alt=\"\" src=\"https://img.trananh.com.vn/trananh/2017/04/26/dien-thoai-samsung-galaxy-s8--mau-xanh-8.jpg\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>C&ocirc;ng nghệ sạc nhanh</strong></p>\r\n\r\n			<p><strong><a href=\"https://www.trananh.vn/dien-thoai-cid12\">Điện thoại</a></strong>&nbsp;có tính năng sạc nhanh Adaptive Fast Charging hỗ trợ sạc kh&ocirc;ng d&acirc;y cả chu&acirc;̉n WPC l&acirc;̃n PMA gi&uacute;p r&uacute;t ngắn thời gian cho mỗi lần sạc.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul><br />\r\n	<br />\r\n	&nbsp;\r\n</ul>\r\n', 0, 100, 'upload/image/samsung-galaxy-s8.png', '', '2017-05-05'),
(20, 24, 1, 'IPHONE 6S PLUS', 10990000, 'Iphone 6S PLUS', 0, 100, 'upload/image/iphone-6splus.jpg', '', '2017-04-25'),
(25, 25, 3, 'Samsung Galaxy Tab E 9.6', 4900000, 'Samsung Galaxy Tab E 9.6', 2, 199, 'upload/image/samsung-galaxy-tab-e-96.png', '', '2017-04-21'),
(24, 25, 4, 'iPad Pro 9.7 inch ', 14900000, 'ipad pro 9.7 inch', 1, 99, 'upload/image/ipad-pro.png', '', '2017-04-21'),
(26, 24, 2, 'Samsung Galaxy A9 Pro', 10990000, 'Samsung Galaxy A9 Pro', 0, 100, 'upload/image/samsung-galaxy-a9-pro-1-400x460.png', '', '2017-05-02'),
(28, 24, 1, 'iPhone 6s ', 10990000, 'iPhone 6s ', 0, 100, 'upload/image/iphone-6s-32gb-400x450-400x450.png', '', '2017-05-02'),
(29, 24, 2, 'Samsung Galaxy J7 Prime', 5990000, 'Samsung Galaxy J7 Prime', 0, 200, 'upload/image/samsung-galaxy-j7-prime-1-400x460.png', '', '2017-05-02'),
(30, 26, 5, 'Laptop Dell Inspiron 7460', 19490000, ' i5 7200U/4GB/128GB/500GB/2GB 940MX/Win10', 0, 100, 'upload/image/dell-inspiron-7460.png', '', '2017-05-02'),
(31, 26, 5, 'Dell Inspiron 5378', 18990000, 'i5 7200U/4GB/128GB/Win10', 0, 0, 'upload/image/dell-inspiron-5378.png', '', '2017-05-02'),
(32, 24, 6, 'OPPO F3 Plus', 10690000, 'OPPO F3 Plus', 0, 100, 'upload/image/oppo-f3-plus.png', '', '2017-05-02'),
(48, 25, 4, 'iPad Pro 9.7 inch ', 120000, '', 0, 100, 'upload/image/', '', '2017-05-13'),
(49, 24, 1, 'IPHONE 7 PLUS', 120000, '', 0, 111, 'upload/image/', '', '2017-05-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` int(20) NOT NULL,
  `created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `created`) VALUES
(7, b'0', 19, 'test', 'test@gmail.com', '0169754812\r\n', 22290000, '2017-04-10'),
(10, b'0', 20, 'hungbui2108', 'hungbui2108@gmail.com', '01652296029', 37780000, '2017-04-28'),
(11, b'0', 22, 'hac14cn', 'thuha@gmail.com', '09876483924', 56680000, '2017-05-02'),
(12, b'1', 20, 'hungbui2108', 'hungbui2108@gmail.com', '01652296029', 197590000, '2017-05-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trans_detail`
--

CREATE TABLE `trans_detail` (
  `id` bigint(255) NOT NULL,
  `transaction_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trans_detail`
--

INSERT INTO `trans_detail` (`id`, `transaction_id`, `product_id`, `qty`, `amount`) VALUES
(1, 7, 17, 1, 22290000),
(2, 10, 16, 1, 18790000),
(3, 10, 19, 1, 18990000),
(4, 11, 17, 1, 22290000),
(5, 11, 24, 1, 14900000),
(6, 11, 30, 1, 19490000),
(7, 12, 16, 1, 18790000),
(8, 12, 24, 12, 178800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(19, 'test', 'test@gmail.com', '0169754812', '195-HoTay-HaNoi', 'test'),
(20, 'hungbui2108', 'hungbui2108@gmail.com', '01652296029', '?an Ph??ng - Hà N?i', '123456789'),
(21, 'huyc14httt', 'huy123@gmail.com', '09876483922', 'Hà ?ông', '12345678'),
(22, 'hac14cn', 'thuha@gmail.com', '09876483924', 'Hà Nội', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `trans_detail`
--
ALTER TABLE `trans_detail`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
