-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2022 lúc 06:32 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `title`, `mo_ta`, `created_at`, `updated_at`) VALUES
(30, 'Đôi lời giới thiệu về shop 1', '<p><strong>PhuocHao Mobile là k&ecirc;nh mua sắm online uy tín hàng đ&acirc;̀u, cùng với đ&ocirc;̣i ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghi&ecirc;̣p, chúng t&ocirc;i cam k&ecirc;́t đem những sản ph&acirc;̉m t&ocirc;́t nh&acirc;́t, với giá cả phải chăng, uy tín và ch&acirc;́t lượng với dịch vụ t&ocirc;́t nh&acirc;́t đ&ecirc;́n với mọi người.</strong></p>', '2021-11-23 14:42:52', '2021-12-20 14:22:56'),
(32, 'Mục tiêu của chúng tôi.', '<p><strong>PhuocHao Mobile &ndash; Ch&acirc;́t Lượng &ndash; Uy Tín &ndash; Chuy&ecirc;n nghi&ecirc;̣p</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Ti&ecirc;́p tục trở thành shop bán lẻ hàng đ&acirc;̀u.</strong></li>\r\n	<li><strong>Mở r&ocirc;̣ng phạm vi bán hàng ra toàn qu&ocirc;́c.</strong></li>\r\n	<li><strong>Mang đ&ecirc;́n cho khách hàng sự y&ecirc;n t&acirc;m và hài lòng khi mua sắm tại nhà.</strong></li>\r\n	<li><strong>Kh&ocirc;ng ngừng t&igrave;m kiếm v&agrave; cập nhật c&aacute;c mẫu quần &aacute;o, c&aacute;c hot trend tr&ecirc;n thị trường để đ&aacute;p ứng nhu cầu của kh&aacute;ch h&agrave;ng.</strong></li>\r\n	<li><strong>Nơi cung c&acirc;́p th&ocirc;ng tin và tư v&acirc;́n sản ph&acirc;̉m t&ocirc;́t nh&acirc;́t cho khách hàng.</strong></li>\r\n	<li><strong>Đ&ocirc;́i tác ti&ecirc;̀m năng và uy tín của các nhà cung c&acirc;́p.</strong></li>\r\n</ul>', '2021-11-23 15:01:14', '2021-11-23 15:01:14'),
(33, 'Hình thức bán hàng.', '<ul>\r\n	<li><strong>Mọi sản phẩm đều được b&aacute;n qua k&ecirc;nh Online.</strong></li>\r\n	<li><strong>Đặt h&agrave;ng trực tuyến tr&ecirc;n&nbsp;<a href=\"https://www.facebook.com/VayXinh.ReDep.ThoiTrangCiao/\" target=\"_blank\">Fanpage Facebook của Shop chúng t&ocirc;i</a>.</strong></li>\r\n	<li><strong>Đưa sản phẩm l&ecirc;n website:&nbsp;</strong></li>\r\n</ul>', '2021-11-23 15:01:59', '2021-11-23 15:01:59'),
(34, 'Chúng tôi cam kết.', '<ul>\r\n	<li><strong>Giá cả phù hợp, tư v&acirc;́n nhi&ecirc;̣t tình.</strong></li>\r\n	<li><strong>Giao hàng nhanh chóng, mi&ecirc;̃n phí tr&ecirc;n toàn qu&ocirc;́c.</strong></li>\r\n	<li><strong>H&acirc;̣u mãi chu đáo.</strong></li>\r\n	<li><strong>Nhi&ecirc;̀u chương trình khuy&ecirc;́n mãi h&acirc;́p d&acirc;̃n.</strong></li>\r\n</ul>', '2021-11-23 15:02:43', '2021-11-23 15:02:43'),
(35, 'Hành trình phát triển PhuocHao Mobile', '<p><strong>Chúng t&ocirc;i ra đời tr&ecirc;n phương di&ecirc;̣n lắng nghe mong ước của những người phụ nữ, dựa tr&ecirc;n thực t&ecirc;́ nhi&ecirc;̀u người mong mu&ocirc;́n được mặc đẹp hơn, khoác l&ecirc;n người những b&ocirc;̣ cánh làm t&ocirc;n l&ecirc;n vẻ đẹp của bản th&acirc;n với m&ocirc;̣t mức giá phù hợp nh&acirc;́t.</strong></p>\r\n\r\n<p><strong>T&acirc;́t cả những sản ph&acirc;̉m của chúng t&ocirc;i được nh&acirc;̣p v&ecirc;̀ tr&ecirc;n ti&ecirc;u chí b&ecirc;̀n rẻ đẹp, c&ocirc;́ gắng t&ocirc;́t nh&acirc;́t đ&ecirc;̉ làm hài lòng mọi người, tr&ecirc;n phương di&ecirc;̣n g&acirc;̀n gũi hơn nhưng v&acirc;̃n giữ nguy&ecirc;n vẻ thanh lịch, t&ocirc;́i giản và sang trọng.</strong></p>\r\n\r\n<p><strong>Chi&ecirc;́n lực phát tri&ecirc;̉n của PhuocHao Mobile chúng t&ocirc;i là lu&ocirc;n lu&ocirc;n đ&ocirc;̉i mới, c&ocirc;́ gắng tìm tòi những cách thức phục vụ t&ocirc;́t nh&acirc;́t cho nhu c&acirc;̀u làm đẹp chính đáng của mọi người.</strong></p>', '2021-11-23 16:58:29', '2021-11-23 16:58:29'),
(36, 'Cơ sở vật chất.', '<ul>\r\n	<li><strong>Đội ngũ nh&acirc;n sự chuy&ecirc;n nghiệp, tận t&igrave;nh v&agrave; trung thực</strong></li>\r\n	<li><strong>Bộ phận Tư vấn v&agrave; chăm s&oacute;c kh&aacute;ch h&agrave;ng.</strong></li>\r\n	<li><strong>Bộ phận Nhận diện thương hiệu.</strong></li>\r\n	<li><strong>Bộ phận Video v&agrave; h&igrave;nh ảnh</strong></li>\r\n	<li><strong>Bộ phận Giao nhận</strong></li>\r\n	<li><strong>C&aacute;c bộ phận kh&aacute;c: H&agrave;nh ch&iacute;nh, Kế to&aacute;n &hellip;</strong></li>\r\n	<li><strong>Cơ sở vật chất&nbsp; đầy đủ v&agrave; hiện đại</strong></li>\r\n	<li><strong>Kho lưu giữ h&agrave;ng h&oacute;a, đặt ngay tại trung t&acirc;m th&agrave;nh phố.</strong></li>\r\n	<li><strong>Xe vận chuyển h&agrave;ng h&oacute;a v&agrave; sắp xếp h&agrave;ng h&oacute;a</strong></li>\r\n</ul>', '2021-11-23 17:00:33', '2021-11-23 17:00:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `date_order` date NOT NULL,
  `total` float NOT NULL,
  `payment` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(15, 22, '2022-01-11', 32900000, 'COD', 'Giao hàng trước 5h chiều', '2022-01-11 14:59:11', '2022-01-11 14:59:11'),
(16, 23, '2022-01-17', 4900000, 'COD', 'giao hàng khoảng 12h trưa', '2022-01-17 16:01:18', '2022-01-17 16:01:18'),
(17, 24, '2022-01-18', 290000000, 'COD', 'aa', '2022-01-18 12:38:42', '2022-01-18 12:38:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit_price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(26, 15, 70, 1, 29000000, '2022-01-11 14:59:11', '2022-01-11 14:59:11'),
(27, 15, 71, 1, 3900000, '2022-01-11 14:59:11', '2022-01-11 14:59:11'),
(28, 16, 72, 1, 4900000, '2022-01-17 16:01:18', '2022-01-17 16:01:18'),
(29, 17, 70, 10, 29000000, '2022-01-18 12:38:42', '2022-01-18 12:38:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `product` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `email`, `name`, `noi_dung`, `product`, `created_at`, `updated_at`) VALUES
(44, 'tuyen@gmail.com', 'Tuyến', 'Đây là bình luận của tui', 70, '2022-01-07 15:29:36', '2022-01-07 15:29:36'),
(45, 'nguyenphuochao123@gmail.com', 'Hảo', 'Comment', 72, '2022-01-17 16:13:35', '2022-01-17 16:13:35'),
(46, 'toan@gmail.com', 'Toàn', 'Sản phẩm này còn ở chi nhánh Long An ko ạ', 70, '2022-01-18 16:57:53', '2022-01-18 16:57:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Thanh Toàn', 'toan@gmail.com', 'Thời gian hoạt động của shop', 'Shop hoạt động vào mấy h đóng cửa á', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `trangthai` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `id_user`, `gender`, `note`, `trangthai`, `created_at`, `updated_at`) VALUES
(22, 7, 'nam', 'Giao hàng trước 5h chiều', 1, '2022-01-11 14:59:11', '2022-01-19 14:44:36'),
(23, 7, 'nam', 'giao hàng khoảng 12h trưa', 0, '2022-01-17 16:01:17', '2022-01-17 16:01:17'),
(24, 7, 'nam', 'aa', 0, '2022-01-18 12:38:42', '2022-01-18 12:38:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_pro` int(10) NOT NULL,
  `gift` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id`, `name`, `id_pro`, `gift`, `number`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(22, 'Khuyến mãi 1/1', 70, 'Tặng cáp sạc nhanh trị giá 450k', 150, '2022-01-01', '2022-01-30', '2022-01-07 15:31:01', '2022-01-07 15:31:20'),
(23, 'Khuyến mãi tết nguyên dán 2022', 71, 'Tặng tai nghe không dây trị giá 450k', 100, '2022-01-04', '2022-01-30', '2022-01-11 15:01:43', '2022-01-11 15:01:43'),
(24, 'Khuyến mãi tết nguyên dán 2022', 75, 'Tặng cáp sạc nhanh giá 250k', 100, '2022-01-18', '2022-01-31', '2022-01-17 20:38:27', '2022-01-17 20:38:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(512) NOT NULL,
  `image` varchar(50) NOT NULL,
  `news_detail` text NOT NULL,
  `tacgia` varchar(50) NOT NULL,
  `new` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `news_detail`, `tacgia`, `new`, `created_at`, `updated_at`) VALUES
(29, 'Nghe Đồn Là: Samsung Galaxy S22 Series lộ video mở hộp, dùng Snapdragon 8 Gen 1, có khe cắm bút S Pen như dòng Note', 'Sau khi dòng smartphone flagship Samsung Galaxy S21 được ra mắt thì những tin tức rò rỉ về dòng Galaxy S tiếp theo của Samsung đang bắt đầu nổi lên dần - đó chính là Galaxy S22. Vậy Galaxy S22 giá bao nhiêu? Khi nào Galaxy S22 ra mắt? Cấu hình Galaxy S22 ra sao?... Hãy cùng mình điểm qua một số thông tin rò rỉ để xem Samsung Galaxy S22 có gì mới và giải đáp những thắc mắc trên nhé.', 'galaxy-s22-unbox-2_1280x720-800-resize.jpg', '<p><strong>Sau khi d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;flagship&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s21\" target=\"_blank\">Samsung Galaxy S21</a>&nbsp;được ra mắt th&igrave; những tin tức r&ograve; rỉ về d&ograve;ng Galaxy S tiếp theo của&nbsp;<a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\">Samsung</a>&nbsp;đang bắt đầu nổi l&ecirc;n dần - đ&oacute; ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s22\" target=\"_blank\">Galaxy S22</a>. Vậy Galaxy S22 gi&aacute; bao nhi&ecirc;u? Khi n&agrave;o Galaxy S22 ra mắt? Cấu h&igrave;nh Galaxy S22 ra sao?... H&atilde;y c&ugrave;ng m&igrave;nh điểm qua một số th&ocirc;ng tin r&ograve; rỉ để xem&nbsp;<a href=\"http://www.thegioididong.com/tin-tuc/nghe-don-la-samsung-galaxy-s22-1336850\" target=\"_blank\">Samsung Galaxy S22 c&oacute; g&igrave; mới</a>&nbsp;v&agrave; giải đ&aacute;p những thắc mắc tr&ecirc;n nh&eacute;.</strong></p>\r\n\r\n<p><strong><em>Lưu &yacute;: Nội dung b&agrave;i viết sẽ thường xuy&ecirc;n được cập nhật cho đến khi Galaxy S22 ra mắt ch&iacute;nh thức. C&aacute;c bạn nhớ theo d&otilde;i b&agrave;i viết mỗi tuần nha!</em></strong></p>\r\n\r\n<p><strong>Xem th&ecirc;m:</strong></p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-galaxy-s22-ultra-1406895\" target=\"_blank\">Tr&ecirc;n tay Galaxy S22 Ultra: Si&ecirc;u phẩm đầu năm 2022 đ&acirc;y rồi!</a></strong></li>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/nghe-don-la-galaxy-note-21-1318532\" target=\"_blank\">Galaxy Note 22 c&oacute; g&igrave; mới: Thiết kế Note 22 Ultra Concept si&ecirc;u đẹp</a></strong></li>\r\n</ul>\r\n\r\n<h3><strong>Video mở hộp Galaxy S22 Series bị r&ograve; rỉ, thiết kế Galaxy S22 Ultra giống d&ograve;ng Note (cập nhật: 07/01)</strong></h3>\r\n\r\n<p><strong>Cụ thể th&igrave; v&agrave;o h&ocirc;m 06/01, k&ecirc;nh YouTube&nbsp;<a href=\"https://www.youtube.com/user/unboxtherapy\" target=\"_blank\">Unbox Therapy</a>&nbsp;đ&atilde; đăng tải một đoạn video mở hộp d&ograve;ng sản phẩm Galaxy S22 chưa ra mắt của&nbsp;Samsung. Tuy đoạn video hiện đ&atilde; bị x&oacute;a nhưng một người d&ugrave;ng kh&aacute;c đ&atilde; kịp lưu v&agrave; đăng tải lại. Đoạn video x&aacute;c nhận kh&aacute; nhiều th&ocirc;ng tin r&ograve; rỉ từ trước khi hai mẫu Galaxy S22 v&agrave; S22 Plus sẽ c&oacute; thiết kế b&oacute;ng bẩy, thiết kế cụm camera sau liền mạch với khung viền như d&ograve;ng tiền nhiệm.</strong></p>\r\n\r\n<p><strong><img alt=\"Video mở hộp Galaxy S22 series\" src=\"https://cdn.tgdd.vn/Files/2022/01/07/1409600/galaxy-s22-unbox-2_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>So s&aacute;nh ngoại h&igrave;nh của Galaxy S21 Ultra ở b&ecirc;n tr&aacute;i v&agrave; S22 Ultra (m&ocirc; h&igrave;nh) ở b&ecirc;n phải. Nguồn: Unbox Therapy.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.thegioididong.com/tin-tuc/nghe-don-la-samsung-galaxy-s22-1336850\" /></strong></p>\r\n\r\n<p><strong>Đoạn video mở hộp d&ograve;ng Galaxy S22 (m&ocirc; h&igrave;nh).</strong></p>\r\n\r\n<p><strong>C&oacute; một điểm m&agrave; m&igrave;nh rất th&iacute;ch ở thiết kế S22 Ultra đ&oacute; l&agrave; m&aacute;y sẽ sẽ đi k&egrave;m với một ngăn đựng b&uacute;t cảm ứng S Pen giống như d&ograve;ng Note, đ&acirc;y l&agrave; điều m&agrave; Galaxy S21 Ultra trước đ&oacute; kh&ocirc;ng hề c&oacute;.</strong></p>\r\n\r\n<p><strong><img alt=\"Video mở hộp Galaxy S22 series\" src=\"https://cdn.tgdd.vn/Files/2022/01/07/1409600/galaxy-s22-unbox-1_1280x718-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Thiết kế mặt lưng của Galaxy S22 Ultra (m&ocirc; h&igrave;nh). Nguồn: Unbox Therapy.</strong></p>\r\n\r\n<p><strong>Do Samsung c&oacute; thể khai tử d&ograve;ng Note trong tương lai n&ecirc;n m&igrave;nh nghĩ việc t&iacute;ch hợp b&uacute;t S Pen v&agrave;o mẫu cao cấp nhất của d&ograve;ng S l&agrave; ho&agrave;n to&agrave;n hợp l&yacute;. Người d&ugrave;ng cũng kh&ocirc;ng cần phải lo lắng về việc mua phụ kiện đi k&egrave;m cho Galaxy S22 Ultra trong tương lai nữa.</strong></p>\r\n\r\n<p><strong>B&agrave;i viết chi tiết:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/xuat-hien-video-mo-hop-galaxy-s22-series-1409600\" target=\"_blank\">Xuất hiện video mở hộp sớm d&ograve;ng Galaxy S22: Mẫu Ultra nổi bật nhất</a></strong></p>\r\n\r\n<h3><strong>Galaxy S22 Ultra m&agrave;u tr&agrave; xanh sẽ xuất hiện</strong></h3>\r\n\r\n<p><strong>Nếu c&aacute;c bạn c&ograve;n nhớ th&igrave; trang LetsGoDigital đ&atilde; từng đăng tải h&igrave;nh ảnh render&nbsp;Galaxy S22 Ultra với năm m&agrave;u gồm m&agrave;u đen, trắng, xanh đậm, đỏ v&agrave; hồng đậm. Mới đ&acirc;y nhất th&igrave; mẫu Galaxy S22 Ultra m&agrave;u tr&agrave; xanh cũng đ&atilde; được trang tin n&agrave;y đăng tải v&agrave; c&aacute; nh&acirc;n m&igrave;nh thật sự th&iacute;ch m&agrave;u sắc mới n&agrave;y.</strong></p>\r\n\r\n<p><strong><img alt=\"Hình ảnh render Galaxy S22 Ultra màu xanh lá\" src=\"https://cdn.tgdd.vn/Files/2022/01/04/1408941/galaxy-s22-ultra-green-3_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>H&igrave;nh ảnh render Galaxy S22 Ultra m&agrave;u xanh l&aacute;. Nguồn: LetsGoDigital.</strong></p>\r\n\r\n<p><strong><img alt=\"Hình ảnh render Galaxy S22 Ultra màu xanh lá\" src=\"https://cdn.tgdd.vn/Files/2022/01/04/1408941/galaxy-s22-ultra-green-2_1280x844-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>H&igrave;nh ảnh render Galaxy S22 Ultra m&agrave;u xanh l&aacute;. Nguồn: LetsGoDigital.</strong></p>\r\n\r\n<p><strong>Như c&aacute;c bạn c&oacute; thể thấy h&igrave;nh ảnh b&ecirc;n tr&ecirc;n, Galaxy S22 Ultra sẽ c&oacute; ngoại h&igrave;nh kh&aacute;c hơn nhiều so với thế hệ tiền nhiệm. Thiết kế tổng thể của Galaxy S22 Ultra trong h&igrave;nh ảnh render mang kiểu d&aacute;ng của d&ograve;ng Note với c&aacute;c cạnh vu&ocirc;ng vức nam t&iacute;nh, đi k&egrave;m b&uacute;t S Pen m&agrave;u đen c&oacute; thể được t&iacute;ch hợp trong th&acirc;n m&aacute;y.</strong></p>', 'admin', 1, '2022-01-07 15:14:46', '2022-01-18 17:09:38'),
(30, 'Đánh giá hiệu năng Samsung Galaxy S21 FE 5G: Exynos 2100 cho hiệu năng mượt mà, chơi Liên Quân, PUBG hơn 6 tiếng liên tục', 'Samsung Galaxy S21 FE 5G ra mắt vào ngày 4/1 vừa qua đã nhận được nhiều sự quan tâm từ người dùng công nghệ. Bên cạnh thiết kế kế trẻ trung, màn hình 120 Hz, camera xịn sò thì Samsung Galaxy S21 FE cấu hình mạnh mẽ với con chip Exynos 2100. Mời các bạn cùng mình đánh giá hiệu năng Galaxy S21 FE 5G để xem chiếc smartphone mới nhất đến từ nhà Samsung có hiệu năng mạnh đến mức nào nha!', 'galaxy-s21-fe-59_1280x720-800-resize.jpg', '<p><strong>Samsung Galaxy S21 FE 5G ra mắt v&agrave;o ng&agrave;y 4/1 vừa qua đ&atilde; nhận được nhiều sự quan t&acirc;m từ người d&ugrave;ng c&ocirc;ng nghệ. B&ecirc;n cạnh thiết kế kế trẻ trung, m&agrave;n h&igrave;nh 120 Hz, camera xịn s&ograve; th&igrave; <a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s21-fe\" target=\"_blank\">Samsung Galaxy S21 FE</a> cấu h&igrave;nh mạnh mẽ với con chip Exynos 2100. Mời c&aacute;c bạn c&ugrave;ng m&igrave;nh <a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-hieu-nang-galaxy-s21-fe-1409465\" target=\"_blank\">đ&aacute;nh gi&aacute; hiệu năng Galaxy S21 FE 5G</a> để xem chiếc <a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a> mới nhất đến từ nh&agrave; <a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\">Samsung</a> c&oacute; hiệu năng mạnh đến mức n&agrave;o nha!</strong></p>\r\n\r\n<p><strong><img alt=\"Samsung Galaxy S21 FE cấu hình trang bị con chip Exynos 2100\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409465/galaxy-s21-fe-59_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Samsung Galaxy S21 FE 5G cấu h&igrave;nh trang bị con chip Exynos 2100 hứa hẹn cho khả năng chiến game cực mượt.</strong></p>\r\n\r\n<p><strong>Xem th&ecirc;m:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/an-tuong-dau-tien-galaxy-s21-fe-1391983\" target=\"_blank\">Ấn tượng đầu ti&ecirc;n Galaxy S21 FE: Gi&aacute; từ 15.99 triệu, chip Exynos 2100</a></strong></li>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/tren-tay-galaxy-s21-fe-1408288\" target=\"_blank\">Tr&ecirc;n tay Galaxy S21 FE: Camera chụp sắc n&eacute;t, hiệu năng mạnh mẽ</a></strong></li>\r\n</ul>\r\n\r\n<h3><strong>Galaxy S21 FE 5G cấu h&igrave;nh mạnh mẽ với con chip Exynos 2100</strong></h3>\r\n\r\n<p><strong>M&igrave;nh sẽ t&oacute;m tắt lại th&ocirc;ng số cấu h&igrave;nh Samsung Galaxy S21 FE 5G cho c&aacute;c bạn dễ nắm bắt nha:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>M&agrave;n h&igrave;nh: K&iacute;ch thước 6.4 inch, tấm nền Dynamic AMOLED 2X, độ ph&acirc;n giải Full HD+, tần số qu&eacute;t 120 Hz.</strong></li>\r\n	<li><strong>Hệ điều h&agrave;nh: Android 12, giao diện One UI 4.0.</strong></li>\r\n	<li><strong>Camera sau: Ch&iacute;nh 12 MP, g&oacute;c si&ecirc;u rộng 12 MP, tele 8 MP.</strong></li>\r\n	<li><strong>Camera trước: Độ ph&acirc;n giải 32 MP.</strong></li>\r\n	<li><strong>Chip: Exynos 2100.</strong></li>\r\n	<li><strong>RAM: 6 GB hoặc 8 GB.</strong></li>\r\n	<li><strong>Bộ nhớ trong: 128 GB hoặc 256 GB.</strong></li>\r\n	<li><strong>Pin: 4.500 mAh, hỗ trợ sạc nhanh 25 W.</strong></li>\r\n</ul>\r\n\r\n<p><strong><img alt=\"Với Exynos 2100 thì Samsung Galaxy S21 FE có mang lại hiệu năng mạnh mẽ?\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409465/galaxy-s21-fe-46_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Samsung Galaxy S21 FE 5G được trang bị con chip Exynos 2100 mạnh mẽ như Galaxy S21 Series.</strong></p>\r\n\r\n<p><strong>Samsung Galaxy S21 FE 5G được trang bị con chip c&acirc;y nh&agrave; l&aacute; vườn của Samsung l&agrave; Exynos 2100. Nếu c&aacute;c bạn c&ograve;n nhớ th&igrave; con chip n&agrave;y đ&atilde; từng xuất hiện tr&ecirc;n d&ograve;ng Galaxy S21. Do đ&oacute;, m&igrave;nh tin rằng hiệu năng Galaxy S21 FE 5G chắc chắn sẽ&nbsp; đ&aacute;p ứng được rất tốt&nbsp;mọi t&aacute;c vụ sử dụng của người d&ugrave;ng. Để c&oacute; c&aacute;i nh&igrave;n chi tiết nhất về hiệu năng Galaxy S21 FE 5G th&igrave; c&aacute;c bạn h&atilde;y c&ugrave;ng m&igrave;nh đến với phần chấm điểm hiệu năng v&agrave; trải nghiệm chơi game ở b&ecirc;n dưới đ&acirc;y nha!</strong></p>\r\n\r\n<h3><strong>Chấm điểm hiệu năng Galaxy S21 FE 5G</strong></h3>\r\n\r\n<p><strong>Đầu ti&ecirc;n m&igrave;nh sẽ chấm điểm hiệu năng của Samsung Galaxy S21 FE 5G trước cho c&aacute;c bạn c&oacute; thể h&igrave;nh dung ra sức mạnh của chiếc m&aacute;y n&agrave;y được mi&ecirc;u tả bằng những con số sẽ như thế n&agrave;o, m&igrave;nh sẽ sử dụng c&aacute;c phần mềm như GeekBench 5, 3D Mark v&agrave; PC Mark để ghi lại điểm số của m&aacute;y.</strong></p>\r\n\r\n<p><strong><img alt=\"Exynos 2100 trên Galaxy S21 FE có cho điểm số hiệu năng ấn tượng?\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409465/galaxy-s21-fe-34_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Exynos 2100 tr&ecirc;n Galaxy S21 FE 5G c&oacute; cho điểm số hiệu năng ấn tượng?</strong></p>\r\n\r\n<p><strong>Điều kiện m&igrave;nh test sẽ như sau:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Pin của m&aacute;y phải từ 90 - 100%.</strong></li>\r\n	<li><strong>Kh&ocirc;ng vừa sạc pin vừa chấm điểm.</strong></li>\r\n	<li><strong>Chấm 3 lần li&ecirc;n tục v&agrave; lấy kết quả trung b&igrave;nh sau 3 lần chấm.</strong></li>\r\n</ul>\r\n\r\n<p><strong>Đầu ti&ecirc;n l&agrave; Geekbench 5, Galaxy S21 FE 5G của m&igrave;nh c&oacute; thể dễ d&agrave;ng đạt điểm số hiệu năng rất cao với 745 điểm đơn nh&acirc;n, 2.183 điểm đa nh&acirc;n v&agrave; 3.451 điểm 3D. C&ograve;n về phần PC Mark Galaxy S21 FE 5G đạt kết quả cũng nổi bật kh&ocirc;ng k&eacute;m với 14.234 điểm.&nbsp;</strong></p>\r\n\r\n<p><strong><img alt=\"Điểm Geekbench 5 và PC Mark của Galaxy S21 FE\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409465/galaxys21fegeekbenh5_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Điểm Geekbench 5 v&agrave; PC Mark của Galaxy S21 FE 5G.</strong></p>', 'admin', 0, '2022-01-07 15:16:39', '2022-01-18 15:26:17'),
(31, '3 cách tiết kiệm pin trên iPhone cực hay mà có thể bạn chưa biết, giúp cải thiện thời lượng pin vô cùng hiệu quả', 'iPhone là dòng điện thoại nổi tiếng đến từ tập đoàn công nghệ Apple. Nhắc đến iPhone, mọi người thường hay quan tâm đến vấn đề tuổi thọ pin trên điện thoại của mình.', 'hinhbia2_1280x720-800-resize.jpg', '<h1><strong>3 c&aacute;ch tiết kiệm pin tr&ecirc;n iPhone cực hay m&agrave; c&oacute; thể bạn chưa biết, gi&uacute;p cải thiện thời lượng pin v&ocirc; c&ugrave;ng hiệu quả</strong></h1>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/tin-tuc/profile/0\">Nguyễn Thụy Thanh Tr&uacute;c</a>&nbsp;7 giờ trước</strong></p>\r\n\r\n<p><strong><img alt=\"Tổng hợp những cách tiết kiệm pin cho iPhone\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409475/hinhbia2_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<h2><strong><a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;l&agrave; d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;nổi tiếng đến từ tập đo&agrave;n c&ocirc;ng nghệ&nbsp;<a href=\"https://www.topzone.vn/\" target=\"_blank\">Apple</a>. Nhắc đến iPhone, mọi người thường hay quan t&acirc;m đến vấn đề tuổi thọ pin tr&ecirc;n điện thoại của m&igrave;nh. Một số d&ograve;ng iPhone cao cấp hiện nay được trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh với tần số qu&eacute;t cao v&agrave; kết nối 5G, điều đ&oacute; c&agrave;ng l&agrave;m cho vấn đề tuổi thọ pin được quan t&acirc;m nhiều hơn. H&ocirc;m nay, trong b&agrave;i viết n&agrave;y m&igrave;nh sẽ hướng dẫn c&aacute;c bạn những&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cach-tiet-kiem-pin-tren-iphone-1409475\" target=\"_blank\">c&aacute;ch tiết kiệm pin tr&ecirc;n iPhone</a>&nbsp;m&agrave; c&oacute; thể bạn chưa biết.</strong></h2>\r\n\r\n<h3><strong>1. Tắt l&agrave;m mới ứng dụng trong nền</strong></h3>\r\n\r\n<p><strong>Khi tắt chế độ n&agrave;y c&oacute; nghĩa l&agrave; c&aacute;c ứng dụng như Facebook, Zalo,&hellip; sẽ kh&ocirc;ng tự động cập nhật dữ liệu trong nền cho đến khi bạn mở ứng dụng. Để tắt chế độ n&agrave;y bạn h&atilde;y v&agrave;o&nbsp;C&agrave;i đặt &gt; C&agrave;i đặt chung &gt; L&agrave;m mới ứng dụng trong nền &gt; Tắt.</strong></p>\r\n\r\n<p><strong><img alt=\"Tổng hợp những cách tiết kiệm pin cho iPhone\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409475/cach1_2560x2560-800-resize.jpg\" /></strong></p>\r\n\r\n<h3><strong>2. Bật t&iacute;nh năng tối ưu h&oacute;a sạc pin&nbsp;</strong></h3>\r\n\r\n<p><strong>Chế độ n&agrave;y sẽ gi&uacute;p bạn bảo vệ pin v&agrave; tự động ngắt bộ sạc khi đạt 80-85%. Để bật t&iacute;nh năng n&agrave;y bạn h&atilde;y v&agrave;o phần&nbsp;C&agrave;i đặt &gt; Pin &gt; T&igrave;nh trạng pin &gt; Bật t&ugrave;y chọn Sạc pin được tối ưu h&oacute;a.</strong></p>\r\n\r\n<p><strong><img alt=\"Tổng hợp những cách tiết kiệm pin cho iPhone\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409475/cach2_2560x2560-800-resize.jpg\" /></strong></p>\r\n\r\n<h3><strong>3. Tắt c&aacute;c hiệu ứng kh&ocirc;ng cần thiết&nbsp;</strong></h3>\r\n\r\n<p><strong>Ngo&agrave;i ra, bạn c&oacute; thể tắt bớt c&aacute;c hiệu ứng kh&ocirc;ng cần thiết để cải thiện tuổi thọ pin bằng c&aacute;ch v&agrave;o&nbsp;C&agrave;i đặt &gt; Trợ năng &gt; Chuyển động &gt; Tắt mục Giảm chuyển động.</strong></p>\r\n\r\n<p><strong><img alt=\"Tổng hợp những cách tiết kiệm pin cho iPhone\" src=\"https://cdn.tgdd.vn/Files/2022/01/06/1409475/cach3_2560x2560-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Bạn c&oacute; thấy b&agrave;i viết n&agrave;y hữu &iacute;ch? Nếu thấy hay, đừng qu&ecirc;n để lại cho m&igrave;nh 1 like v&agrave; share để ủng hộ m&igrave;nh ở c&aacute;c b&agrave;i viết sau nh&eacute;.</strong></p>\r\n\r\n<p><strong>iPhone vẫn lu&ocirc;n l&agrave; một trong những sự lựa chọn tốt nhất với cấu h&igrave;nh mạnh mẽ, chụp ảnh đẹp v&agrave; hệ điều h&agrave;nh cực kỳ mượt m&agrave;! Nhấn v&agrave;o n&uacute;t cam b&ecirc;n dưới để chọn mua ngay iPhone mới ch&iacute;nh h&atilde;ng tại TopZone nh&eacute;!</strong></p>\r\n\r\n<p><strong><a href=\"https://www.topzone.vn/iphone\" target=\"_blank\">MUA IPHONE CH&Iacute;NH H&Atilde;NG TẠI TOPZONE</a></strong></p>\r\n\r\n<p><strong>Xem th&ecirc;m:</strong></p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/cach-khac-phuc-ban-phim-iphone-bi-do-tren-ios-15-1408567\" target=\"_blank\">C&aacute;ch khắc phục b&agrave;n ph&iacute;m iPhone bị đơ tr&ecirc;n iOS 15 cực kỳ hiệu quả</a></strong></li>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/cach-mo-khoa-face-id-khong-can-vuot-1409304\" target=\"_blank\">C&aacute;ch mở kh&oacute;a Face ID kh&ocirc;ng cần vuốt m&agrave;n h&igrave;nh v&ocirc; c&ugrave;ng đơn giản cho bạn</a></strong></li>\r\n	<li><strong><a href=\"https://www.thegioididong.com/tin-tuc/meo-hay-cho-iphone-1408641\" target=\"_blank\">5 mẹo hay cho iPhone cực hữu &iacute;ch m&agrave; c&aacute;c iFan l&acirc;u năm chưa chắc đ&atilde; biết</a></strong></li>\r\n</ul>\r\n\r\n<p><strong>Bi&ecirc;n tập bởi Nguyễn Ngọc Huy</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;Kh&ocirc;ng h&agrave;i l&ograve;ng b&agrave;i viết</strong></p>\r\n\r\n<p><strong>44 lượt xem</strong></p>\r\n\r\n<p><a href=\"https://www.topzone.vn/\" onclick=\"jQuery.ajax({ url: \'https://www.thegioididong.com/bannertracking?bid=48834&amp;r=\'+ (new Date).getTime(), async: true, cache: false });\"><strong><img alt=\"Topzone\" src=\"https://cdn.tgdd.vn/2021/12/banner/Frame4878-600x160-2.jpg\" style=\"height:160px; width:600px\" /></strong></a></p>', 'admin', 1, '2022-01-07 15:23:48', '2022-01-07 15:23:48'),
(32, 'Nguồn tin độc quyền tiết lộ Galaxy M33 5G đã bắt đầu được sản xuất hàng loạt, có lẽ sắp ra mắt rồi đó SamFans', 'Galaxy M33 5G trước đây đã đạt được các chứng nhận từ cơ quan BIS số model SM-M336BU/DS, cũng như xuất hiện trên trang web đo điểm chuẩn Geekbench. Mới nhất, trang 91mobiles đã có được thông tin độc quyền trong ngành, cho biết Galaxy M33 5G đã bắt đầu được sản xuất hàng loạt.', 'galaxy-m33-5g-1-2_1280x720-800-resize.jpg', '<p><strong><img alt=\"Galaxy M33 5G đã bắt đầu được sản xuất, sắp ra mắt\" src=\"https://cdn.tgdd.vn/Files/2022/01/17/1411376/galaxy-m33-5g-1-2_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>H&igrave;nh ảnh minh họa</strong></p>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-m33-5g\" target=\"_blank\">Galaxy M33 5G</a>&nbsp;trước đ&acirc;y đ&atilde; đạt được c&aacute;c chứng nhận từ cơ quan BIS&nbsp;số model SM-M336BU/DS, cũng như xuất hiện tr&ecirc;n trang web đo điểm chuẩn Geekbench. Mới nhất, trang&nbsp;<a href=\"https://www.91mobiles.com/hub/samsung-galaxy-m33-5g-production-begins-india-exclusive/\" target=\"_blank\">91mobiles</a>&nbsp;đ&atilde; c&oacute; được th&ocirc;ng tin độc quyền trong ng&agrave;nh, cho biết&nbsp;Galaxy M33 5G đ&atilde; bắt đầu được sản xuất h&agrave;ng loạt.</strong></p>\r\n\r\n<p><strong>Cụ thể hơn, nguồn tin cho biết&nbsp;Galaxy M33 5G đ&atilde; được sản xuất h&agrave;ng loạt&nbsp;tại nh&agrave; m&aacute;y Greater Noida của&nbsp;<a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\">Samsung</a>. Th&ocirc;ng tin mới cũng đồng nghĩa thiết bị đ&atilde; sẵn s&agrave;ng ra mắt v&agrave; c&oacute; thể sẽ được tr&igrave;nh l&agrave;ng trong v&agrave;i tuần tới tại Ấn Độ.</strong></p>\r\n\r\n<p><strong><img alt=\"Galaxy M33 5G đã bắt đầu được sản xuất, sắp ra mắt\" src=\"https://cdn.tgdd.vn/Files/2022/01/17/1411376/galaxy-m33-5g-1-3_1280x672-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>H&igrave;nh ảnh render Galaxy M33 5G (ảnh: OnLeaks)</strong></p>\r\n\r\n<p><strong>Đ&aacute;ng tiếc cho đến thời điểm hiện tại, chi tiết cấu h&igrave;nh của Galaxy M33 5G vẫn chưa được tiết lộ. Theo th&ocirc;ng tin xuất hiện tr&ecirc;n Geekbench,&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;được x&aacute;c nhận chạy hệ điều h&agrave;nh Android 12 v&agrave; c&oacute; RAM 6 GB. Thiết bị cũng được cho sở hữu bộ vi xử l&yacute; Exynos 1200 chưa ra mắt, lần lượt đạt được 726 điểm trong b&agrave;i kiểm tra đơn l&otilde;i v&agrave; 1.830 trong b&agrave;i kiểm tra đa l&otilde;i.</strong></p>\r\n\r\n<p><strong>Galaxy M33 5G cũng đ&atilde; từng xuất hiện tr&ecirc;n trang web chứng nhận Safety Korea v&agrave;i tuần trước v&agrave; được tiết lộ sẽ c&oacute; pin 6.000 mAh &quot;si&ecirc;u to khổng lồ&quot;. Theo suy đo&aacute;n, chiếc điện thoại mới sẽ đi k&egrave;m với m&agrave;n h&igrave;nh AMOLED, cảm biến v&acirc;n tay trong m&agrave;n h&igrave;nh, bộ nhớ trong l&ecirc;n đến 256 GB, sạc nhanh 25 W.</strong></p>\r\n\r\n<p><strong>C&agrave;ng gần đến thời điểm ra mắt, c&agrave;ng nhiều th&ocirc;ng tin mới về&nbsp;Galaxy M33 5G sẽ được h&eacute; lộ.&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc\" target=\"_blank\">24h C&ocirc;ng nghệ</a>&nbsp;sẽ tiếp tục cập nhật nếu c&oacute; th&ecirc;m th&ocirc;ng tin.</strong></p>', 'admin', 0, '2022-01-18 15:12:51', '2022-01-18 15:14:17'),
(33, 'TOP 5 điện thoại RAM 6GB và bộ nhớ trong 128GB cho bạn trải nghiệm mượt mà, thoải mái lưu trữ, mức giá cực hời mua chỉ có lời!', 'Có lẽ, ai trong chúng ta đều nghe qua các thuật ngữ ROM hay RAM rồi phải không nhỉ? Nếu như trước đây bạn phải chi ra nhiều tiền để sở hữu những chiếc smartphone cao cấp để tận hưởng khả năng đa nhiệm và lưu trữ tuyệt vời với 6 GB RAM và ROM 128 GB, thì bây giờ đã khác. Cùng 24h Công nghệ điểm ngay TOP 5 điện thoại 6 GB RAM, bộ nhớ trong 128 GB ở phân khúc tầm trung cho bạn thoải mái trải nghiệm.', 'dienthoairam6gbrom128gb_1280x720-800-resize.png', '<p><strong><img alt=\"Điện thoại RAM 6 GB ROM 128 GB\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/dienthoairam6gbrom128gb_1280x720-800-resize.png\" /></strong></p>\r\n\r\n<p><strong>C&oacute; lẽ, ai trong ch&uacute;ng ta đều nghe qua c&aacute;c thuật ngữ ROM hay RAM rồi phải kh&ocirc;ng nhỉ? Nếu như trước đ&acirc;y bạn phải chi ra nhiều tiền để sở hữu những chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;cao cấp để tận hưởng khả năng đa nhiệm v&agrave; lưu trữ tuyệt vời với 6 GB RAM v&agrave; ROM 128 GB, th&igrave; b&acirc;y giờ đ&atilde; kh&aacute;c. C&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc\" target=\"_blank\">24h C&ocirc;ng nghệ</a>&nbsp;điểm ngay TOP 5&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/xem-truoc/1314792\" target=\"_blank\">điện thoại 6 GB RAM, bộ nhớ trong</a><a href=\"https://www.thegioididong.com/tin-tuc/smartphone-co-6-gb-ram-128-gb-bo-nho-trong-gia-tu-5-trieu-1314792\" target=\"_blank\">&nbsp;128</a><a href=\"https://www.thegioididong.com/tin-tuc/smartphone-co-6-gb-ram-128-gb-bo-nho-trong-gia-tu-5-trieu-1314792\" target=\"_blank\">&nbsp;GB</a>&nbsp;ở ph&acirc;n kh&uacute;c tầm trung cho bạn thoải m&aacute;i trải nghiệm.</strong></p>\r\n\r\n<p><strong>Bật m&iacute; cho bạn l&agrave; trong danh s&aacute;ch dưới đ&acirc;y c&oacute; tới 3 gương mặt đại diện nh&agrave; Samsung rồi đấy.</strong></p>\r\n\r\n<p><strong><em>*Danh s&aacute;ch được xếp theo thứ tự gi&aacute; b&aacute;n tăng dần cho bạn tiện theo d&otilde;i. Gi&aacute; c&aacute;c sản phẩm được cập nhật ng&agrave;y 18/01 v&agrave; c&oacute; thể thay đổi khi hết chương tr&igrave;nh khuyến m&atilde;i bạn nh&eacute;.</em></strong></p>\r\n\r\n<h3><strong>1.&nbsp;Samsung Galaxy A12 (2021)</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.thegioididong.com/tin-tuc/smartphone-co-6-gb-ram-128-gb-bo-nho-trong-1314792\" /></strong></p>\r\n\r\n<p><strong>Video đ&aacute;nh gi&aacute; Samsung Galaxy A12 thực hiện bởi k&ecirc;nh YouTube Thế Giới Di Động.</strong></p>\r\n\r\n<p><strong>Mở đầu danh s&aacute;ch điện thoại 6 GB RAM ng&agrave;y h&ocirc;m nay l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-a12-6gb-2021\" target=\"_blank\">Samsung Galaxy A12 (2021)</a>. Nh&igrave;n tổng thể m&aacute;y tr&ocirc;ng rất h&agrave;i h&ograve;a khi sở hữu thiết kế lớp vỏ nguy&ecirc;n khối với mặt lưng v&agrave; khung viền nhựa, nắp lưng nh&aacute;m chống trượt tốt.</strong></p>\r\n\r\n<p><strong><img alt=\"Samsung Galaxy A12 (2021)\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/samsunggalaxya121-17_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Mặt lưng của Galaxy A12 l&agrave; một trong những điểm nhấn đ&aacute;ng ch&uacute; &yacute; với họa tiết đường ch&eacute;o nổi.</strong></p>\r\n\r\n<p><strong>Galaxy A12 (2021) trang bị m&agrave;n h&igrave;nh lớn 6.5 inch tr&agrave;n viền, thiết kế Infinity-V với r&atilde;nh giọt nước si&ecirc;u nhỏ, tỷ lệ khung h&igrave;nh 20:9 cho bạn diện t&iacute;ch trải nghiệm lớn, đ&atilde; mắt trong từng nội dung xem, đặc biệt khi chiến game hay giải tr&iacute; với c&aacute;c bộ phim y&ecirc;u th&iacute;ch đấy.</strong></p>\r\n\r\n<p><strong><img alt=\"Samsung Galaxy A12 (2021)\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/galaxy-a12-32_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh c&oacute; độ ph&acirc;n giải HD+ mang đến chất lượng hiển thị cực ổn &aacute;p trong ph&acirc;n kh&uacute;c gi&aacute;.</strong></p>\r\n\r\n<p><strong>Được hỗ trợ sức mạnh từ chip Exynos 850 8 nh&acirc;n t&iacute;ch hợp GPU Mali-G52, chiếc smartphone n&agrave;y cung cấp trải nghiệm ổn định tr&ecirc;n c&aacute;c t&aacute;c vụ quen thuộc, giảm độ trễ khi chơi game v&agrave; cải thiện được hiệu suất đồ họa.</strong></p>\r\n\r\n<p><strong>M&aacute;y c&oacute; bộ nhớ RAM 6 GB v&agrave; bộ nhớ trong 128 GB đảm bảo tốc độ đa nhiệm mượt m&agrave;, chạy đồng thời nhiều ứng dụng hoặc chơi game trong nhiều giờ liền m&agrave; kh&ocirc;ng gặp t&igrave;nh trạng lag m&agrave;n h&igrave;nh, tăng hiệu suất sử dụng.</strong></p>\r\n\r\n<p><strong><img alt=\"Thông tin phần mềm của Galaxy A12\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/thongtinphanmemcuagalaxya12_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Th&ocirc;ng tin phần mềm của Galaxy A12.</strong></p>\r\n\r\n<p><strong>Vi&ecirc;n pin 5.000 mAh đảm bảo nguồn năng lượng cho một ng&agrave;y sử dụng điện thoại với tần suất cao theo nhu cầu giải tr&iacute;, l&agrave;m việc. Ngay cả khi thiết bị sắp cạn nguồn, bạn cũng kh&ocirc;ng qu&aacute; lo lắng v&igrave; đ&atilde; c&oacute; c&ocirc;ng nghệ sạc nhanh 15 W.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>2.&nbsp;Samsung Galaxy A22</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"https://www.thegioididong.com/tin-tuc/smartphone-co-6-gb-ram-128-gb-bo-nho-trong-1314792\" /></p>\r\n\r\n<p><strong>Video đ&aacute;nh gi&aacute; Samsung Galaxy A22 thực hiện bởi k&ecirc;nh YouTube Thế Giới Di Động.</strong></p>\r\n\r\n<p><strong>Tiếp tục danh s&aacute;ch vẫn l&agrave; một &#39;ứng cử vi&ecirc;n&#39; đến từ nh&agrave; Samsung:&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-a22-4g\" target=\"_blank\">Samsung Galaxy A22</a>, đ&acirc;y được xem l&agrave; chiếc điện thoại RAM 6 GB tốt nhất trong ph&acirc;n kh&uacute;c gi&aacute; dưới 6 triệu.&nbsp;</strong></p>\r\n\r\n<p><strong>Sở hữu m&agrave;n h&igrave;nh Super AMOLED rộng 6.4 inch, Samsung Galaxy A22 sẽ gi&uacute;p bạn trải nghiệm nh&igrave;n ngắm mọi thứ thoải m&aacute;i hơn trong giải tr&iacute; cũng như c&aacute;c thao t&aacute;c hằng ng&agrave;y. Hỗ trợ tần số qu&eacute;t m&agrave;n h&igrave;nh 90 Hz gi&uacute;p mọi thao t&aacute;c chạm tay của bạn đều được nhận diện v&agrave; xử l&yacute; một c&aacute;ch nhanh ch&oacute;ng</strong></p>\r\n\r\n<p><strong><img alt=\"Thiết kế Samsung Galaxy A22 bóng bẩy nhưng không kém phần cứng cáp\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/thietkesamsunggalaxya22bongbaynhungkhongkemphancungcap_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Thiết kế Samsung Galaxy A22 b&oacute;ng bẩy nhưng kh&ocirc;ng k&eacute;m phần cứng c&aacute;p.</strong></p>\r\n\r\n<p><strong>Một trong những điểm nổi bật ở Galaxy A22 l&agrave; d&agrave;n 4 camera sau với th&ocirc;ng số camera ch&iacute;nh 48 MP, c&ugrave;ng với sự hỗ trợ một số t&iacute;nh năng kh&aacute;c gi&uacute;p bạn chụp c&aacute;c chi tiết xung quanh cuộc sống một c&aacute;ch đẹp v&agrave; tự nhi&ecirc;n nhất.</strong></p>\r\n\r\n<p><strong><img alt=\"Galaxy Samsung A22\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/galaxysamsunga22_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Sức mạnh của Samsung galaxy A22 đến từ con chip MediaTek MT6769V 8 nh&acirc;n, đi k&egrave;m l&agrave; 6 GB RAM v&agrave; bộ nhớ trong 128 GB. Th&ocirc;ng số n&agrave;y sẽ gi&uacute;p m&aacute;y tăng tốc phần cứng tối đa mang đến hiệu năng v&ocirc; c&ugrave;ng ấn tượng v&agrave; khả năng xử l&yacute; đa nhiệm ổn định.&nbsp;</strong></p>\r\n\r\n<p><strong><img alt=\"Chơi game trên Samsung Galaxy A22\" src=\"https://cdn.tgdd.vn/Files/2020/12/19/1314792/choigametrensamsunggalaxya22_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Samsung Galaxy A22 sẽ duy tr&igrave; nguồn cảm hứng học tập, l&agrave;m việc v&agrave; giải tr&iacute; của bạn bằng vi&ecirc;n pin lớn dung lượng 5.000 mAh v&agrave; c&ocirc;ng nghệ sạc pin nhanh c&ocirc;ng suất tối đa 15 W.</strong></p>', 'admin', 1, '2022-01-18 15:15:33', '2022-01-18 15:16:33'),
(34, 'Sở hữu ngay Xiaomi với mức giá cực hấp dẫn: Điện thoại Xiaomi Mi 11 5G cũ giá hiện tại rất đáng để sắm cho năm mới', 'Bạn đang muốn sở hữu một siêu phẩm của nhà Xiaomi nhưng kinh phí không cho phép? Vậy chần chờ gì mà không tham khảo ngay giá Xiaomi Mi 11 5G cũ hiện tại đang siêu tốt và hấp dẫn chỉ có tại Thế Giới Di Động. Điện thoại cực xịn mà giá thì lại quá rẻ luôn đó. Hãy nhanh tay chốt hạ liền một em để diện đi chơi cùng bạn bè thôi nào.', 'thietkekhongten31_1280x720-800-resize.jpg', '<p><strong><img alt=\"xiaomi 11 5g\" src=\"https://cdn.tgdd.vn/Files/2022/01/17/1411374/thietkekhongten31_1280x720-800-resize.jpg\" /></strong></p>\r\n\r\n<p><strong>Bạn đang muốn sở hữu một si&ecirc;u phẩm của nh&agrave; Xiaomi nhưng kinh ph&iacute; kh&ocirc;ng cho ph&eacute;p? Vậy chần chờ g&igrave; m&agrave; kh&ocirc;ng tham khảo ngay&nbsp;<a href=\"http://www.thegioididong.com/tin-tuc/dien-thoai-xiaomi-11-5g-cu-gia-hien-tai-rat-dang-sam-1411374\" target=\"_blank\">gi&aacute; Xiaomi Mi 11 5G cũ hiện tại</a>&nbsp;đang si&ecirc;u tốt v&agrave; hấp dẫn chỉ c&oacute; tại&nbsp;<a href=\"https://www.thegioididong.com/\" target=\"_blank\">Thế Giới Di Động</a>. Điện thoại cực xịn m&agrave; gi&aacute; th&igrave; lại qu&aacute; rẻ lu&ocirc;n đ&oacute;. H&atilde;y nhanh tay chốt hạ liền một em để diện đi chơi c&ugrave;ng bạn b&egrave; th&ocirc;i n&agrave;o.</strong></p>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Gi&aacute; b&aacute;n c&oacute; thể thay đổi tuỳ theo t&igrave;nh trạng c&ograve;n m&aacute;y của si&ecirc;u thị.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ngo&agrave;i ra, nếu khu vực của bạn hết h&agrave;ng, bạn c&oacute; thể chuyển h&agrave;ng từ c&aacute;c khu vực c&ograve;n h&agrave;ng kh&aacute;c bằng c&aacute;ch chuyển khu vực sang&nbsp;Tỉnh/Th&agrave;nh phố&nbsp;gần bạn hoặc&nbsp;To&agrave;n quốc&nbsp;&gt; Chọn m&aacute;y ưng &yacute; &gt; Sau đ&oacute; sử dụng dịch vụ&nbsp;Chuyển về si&ecirc;u thị gần nhất&nbsp;(c&oacute; t&iacute;nh ph&iacute; chuyển h&agrave;ng).</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Xiaomi Mi 11 5G cũ giảm 20% gi&aacute; c&ograve;n lại chỉ từ 13.03 triệu đồng, rẻ hơn m&aacute;y mới đến 40%</strong></h3>\r\n\r\n<p><strong><img alt=\"giá xiaomi 11 5g cũ\" src=\"https://cdn.tgdd.vn/Files/2022/01/17/1411374/thietkekhongten36_800x1565.jpg\" /></strong></p>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/may-doi-tra/dien-thoai/xiaomi-mi-11-5g?pid=226264\" target=\"_blank\">XIAOMI 11 5G CŨ GI&Aacute; RẺ</a></strong></p>\r\n\r\n<p><strong>Điểm nổi bật của điện thoại Xiaomi 11 5G</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.thegioididong.com/tin-tuc/dien-thoai-xiaomi-11-5g-cu-gia-hien-tai-rat-dang-sam-1411374\" /></strong></p>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/dtdd/xiaomi-mi-11\" target=\"_blank\">Xiaomi Mi 11 5G</a>&nbsp;cho trải nghiệm hiệu năng h&agrave;ng đầu với vi xử l&yacute; Qualcomm Snapdragon 888. Thiết kế của m&aacute;y nổi bật với cụm 3 camera mặt sau được đặt trong m&ocirc;-đun h&igrave;nh vu&ocirc;ng, được ph&acirc;n tầng với 2 lớp k&iacute;nh tạo n&ecirc;n sự kh&aacute;c biệt. Kh&ocirc;ng những thế, bạn c&ograve;n sẽ được trải nghiệm đỉnh cao với m&agrave;n h&igrave;nh 120 Hz.</strong></p>\r\n\r\n<p><strong>B&ecirc;n cạnh đ&oacute;, Xiaomi Mi 11 5G c&ograve;n dẫn đầu về tốc độ xử l&yacute; AI khi trang bị bộ xử l&yacute; AI Engine thế hệ thứ 6 Hexagon 780 gi&uacute;p cho m&aacute;y c&oacute; thể xử l&yacute; h&igrave;nh ảnh, video diễn ra nhanh ch&oacute;ng hơn. V&agrave; được trang bị c&ocirc;ng nghệ sạc pin nhanh với c&ocirc;ng suất 55 W, gi&uacute;p cho m&aacute;y được sạc đầy chỉ trong 45 ph&uacute;t.&nbsp;</strong></p>', 'admin', 1, '2022-01-18 15:18:40', '2022-01-18 15:18:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `id_type` int(10) NOT NULL,
  `description` text NOT NULL,
  `parameter` text NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `number` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `trangthai` int(10) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `phukien` varchar(255) NOT NULL,
  `new` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `id_type`, `description`, `parameter`, `unit_price`, `promotion_price`, `number`, `image`, `tinhtrang`, `trangthai`, `baohanh`, `phukien`, `new`, `created_at`, `updated_at`) VALUES
(70, 'Iphone 13 Pro Max', 4, '<p><strong>iPhone 13 Pro Max&nbsp;xứng đ&aacute;ng l&agrave; một&nbsp;chiếc iPhone lớn nhất, mạnh mẽ nhất v&agrave; c&oacute; thời lượng pin d&agrave;i nhất từ trước đến nay sẽ cho bạn trải nghiệm tuyệt vời, từ những t&aacute;c vụ b&igrave;nh thường cho đến c&aacute;c ứng dụng chuy&ecirc;n nghiệp.</strong></p>\r\n\r\n<p><strong><img alt=\"iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-max-2.jpg\" /></strong></p>\r\n\r\n<h3><strong>Đắm ch&igrave;m trong kh&ocirc;ng gian m&agrave;n h&igrave;nh lớn cực đ&atilde;</strong></h3>\r\n\r\n<p><strong>D&ugrave; l&agrave; giải tr&iacute; khi xem phim, chơi game hay kiểm tra email, đọc t&agrave;i liệu th&igrave; m&agrave;n h&igrave;nh lớn tới 6,7 inch của&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-13-pro-max\">iPhone 13 Pro Max</a>&nbsp;cũng lu&ocirc;n cho trải nghiệm tuyệt vời nhất.</strong></p>\r\n\r\n<p><strong>Kh&ocirc;ng chỉ lớn, đ&acirc;y c&ograve;n l&agrave; m&agrave;n h&igrave;nh chất lượng h&agrave;ng đầu thế giới smartphone với tấm nền OLED tuyệt đẹp, c&ocirc;ng nghệ Super Retina XDR si&ecirc;u n&eacute;t v&agrave; độ s&aacute;ng tối đa đạt mức kh&oacute; tin, l&ecirc;n tới 1200 nits cho nội dung HDR. Trước mắt bạn l&agrave; một kh&ocirc;ng gian giải tr&iacute; m&atilde;n nh&atilde;n, một thiết bị di động l&yacute; tưởng để giải quyết nhanh c&ocirc;ng việc với m&agrave;n h&igrave;nh thực sự xuất sắc.</strong></p>\r\n\r\n<p><strong><img alt=\"màn hình iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-max-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Bước nhảy vọt về thời lượng pin</strong></h3>\r\n\r\n<p><strong>D&ograve;ng iPhone Pro Max lu&ocirc;n được người d&ugrave;ng y&ecirc;u th&iacute;ch nhờ thời lượng pin si&ecirc;u d&agrave;i, tuy nhi&ecirc;n iPhone 13 Pro Max c&ograve;n l&agrave;m được nhiều hơn thế. Dung lượng pin lớn hơn, m&agrave;n h&igrave;nh mới v&agrave; bộ vi xử l&yacute; Apple A15 Bionic tiết kiệm điện hơn gi&uacute;p iPhone 13 Pro Max trở th&agrave;nh chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/apple-iphone\">iPhone</a>&nbsp;c&oacute; thời lượng pin tốt nhất từ trước đến nay.</strong></p>\r\n\r\n<p><strong>So với iPhone 12 Pro Max, iPhone 13 Pro Max c&oacute; thời gian sử dụng d&agrave;i hơn 2,5 giờ. Bạn sẽ cảm nhận r&otilde; sự kh&aacute;c biệt khi sử dụng thực tế, thời lượng pin iPhone 13 Pro Max thậm ch&iacute; c&ograve;n c&oacute; thể k&eacute;o d&agrave;i đến ng&agrave;y thứ 3 với nhu cầu sử dụng th&ocirc;ng thường.</strong></p>\r\n\r\n<p><strong><img alt=\"pin iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-max-3.jpg\" /></strong></p>\r\n\r\n<h3><strong>Sang trọng, lịch l&atilde;m v&agrave; qu&yacute; ph&aacute;i</strong></h3>\r\n\r\n<p><strong>iPhone 13 Pro Max c&oacute; kiểu d&aacute;ng sang trọng, thời thượng v&agrave; sự tinh xảo đến từng đường n&eacute;t. Phần khung m&aacute;y cứng c&aacute;p l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ nằm giữa hai mặt k&iacute;nh cao cấp, trong đ&oacute; phần k&iacute;nh bảo vệ m&agrave;n h&igrave;nh c&oacute; chất liệu gốm si&ecirc;u cứng, iPhone 13 Pro Max vừa tuyệt đẹp, lại vừa v&ocirc; c&ugrave;ng bền bỉ.</strong></p>\r\n\r\n<p><strong>Hơn nữa, điện thoại c&ograve;n c&oacute; khả năng chống nước chuẩn IP68, cho ph&eacute;p bạn sử dụng m&agrave; kh&ocirc;ng sợ c&aacute;c nguy cơ như đổ nước hay gặp trời mưa. Sẽ c&oacute; 4 lựa chọn m&agrave;u sắc d&agrave;nh cho iPhone 13 Pro Max l&agrave; X&aacute;m, V&agrave;ng, Trắng v&agrave; Xanh Sierra, tất cả c&aacute;c m&agrave;u đều c&oacute; kh&iacute; chất ri&ecirc;ng biệt, đẳng cấp.</strong></p>\r\n\r\n<p><strong><img alt=\"thiết kế iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-max-4.jpg\" /></strong></p>\r\n\r\n<h3><strong>Sức mạnh của hệ thống camera Pro mới</strong></h3>\r\n\r\n<p><strong>Cả 3 camera tr&ecirc;n iPhone 13 Pro Max đều sử dụng cảm biến mới với chất lượng ống k&iacute;nh h&agrave;ng đầu hiện nay. Nổi bật nhất l&agrave; camera ch&iacute;nh c&oacute; khẩu độ l&ecirc;n tới f/1.5, k&iacute;ch thước điểm ảnh 1.9um, những con số kh&oacute; tin đối với một chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại di động</a>, cho h&igrave;nh ảnh v&agrave; video thiếu s&aacute;ng tốt hơn bao giờ hết.</strong></p>\r\n\r\n<p><strong>Camera g&oacute;c si&ecirc;u rộng cũng được n&acirc;ng cấp với khẩu độ f/1.8, cảm biến nhanh hơn, mang tới những bức ảnh g&oacute;c si&ecirc;u rộng tự nhi&ecirc;n v&agrave; ch&acirc;n thực. Cuối c&ugrave;ng l&agrave; camera Tele hỗ trợ zoom quang học 3x. Đặc biệt, hệ thống chống rung quang học k&eacute;p c&oacute; mặt tr&ecirc;n cả camera ch&iacute;nh v&agrave; camera Tele.</strong></p>\r\n\r\n<p><strong><img alt=\"camera iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-16.jpg\" /></strong></p>\r\n\r\n<h3><strong>Điện thoại đầu ti&ecirc;n tr&ecirc;n thế giới c&oacute; khả năng quay video macro</strong></h3>\r\n\r\n<p><strong>Camera g&oacute;c si&ecirc;u rộng của iPhone 13 Pro Max kh&ocirc;ng chỉ chụp được những h&igrave;nh ảnh khung h&igrave;nh rộng m&agrave; c&ograve;n c&oacute; khả năng lấy n&eacute;t ở khoảng c&aacute;ch chỉ 2cm, mang đến t&iacute;nh năng macro đầy th&uacute; vị. Bạn c&oacute; thể nh&igrave;n r&otilde; từng chi tiết nhỏ như nhụy hoa, c&ocirc;n tr&ugrave;ng, đồng xu, mặt đồng hồ,...</strong></p>\r\n\r\n<p><strong>Ấn tượng hơn nữa khi iPhone 13 Pro Max c&ograve;n c&oacute; thể quay video macro, để bạn c&oacute; những thước phim như chương tr&igrave;nh truyền h&igrave;nh Discovery, lưu lại cảnh thi&ecirc;n nhi&ecirc;n ở g&oacute;c nh&igrave;n gần nhất.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-7.jpg\" /></strong></p>\r\n\r\n<h3><strong>Chụp đ&ecirc;m s&aacute;ng r&otilde; như ban ng&agrave;y</strong></h3>\r\n\r\n<p><strong>iPhone 13 Pro Max hội tụ đủ những yếu tố để trở th&agrave;nh chiếc điện thoại chụp đ&ecirc;m xuất sắc nhất hiện nay. Khẩu độ v&agrave; k&iacute;ch thước cảm biến si&ecirc;u lớn; m&aacute;y qu&eacute;t LiDAR chuy&ecirc;n dụng đi c&ugrave;ng chip xử l&yacute; h&igrave;nh ảnh ISP mới t&iacute;ch hợp tr&ecirc;n Apple A15 Bionic v&agrave; thuật to&aacute;n phần mềm th&ocirc;ng minh gi&uacute;p thu s&aacute;ng tốt hơn tới 2,2 lần ở camera ch&iacute;nh, hơn 92% ở camera g&oacute;c si&ecirc;u rộng. Hơn nữa, tất cả c&aacute;c camera tr&ecirc;n iPhone 13 Pro Max đều c&oacute; chế độ chụp đ&ecirc;m, cho h&igrave;nh ảnh lu&ocirc;n r&otilde; n&eacute;t trong đ&ecirc;m tối.</strong></p>\r\n\r\n<p><strong><img alt=\"chụp đêm iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-camera-6.jpg\" /></strong></p>\r\n\r\n<h3><strong>Điều kỳ diệu từ camera Tele</strong></h3>\r\n\r\n<p><strong>Camera Tele chỉ c&oacute; mặt tr&ecirc;n d&ograve;ng iPhone Pro. Với iPhone 13 Pro Max, camera Tele c&oacute; thể zoom quang học 3x, ph&oacute;ng to h&igrave;nh ảnh v&agrave; video gấp 3 lần nhưng vẫn giữ nguy&ecirc;n chất lượng. Camera Tele c&ograve;n tham gia v&agrave;o t&iacute;nh năng chụp ảnh ch&acirc;n dung x&oacute;a ph&ocirc;ng, cho khả năng t&aacute;ch ph&ocirc;ng nền mượt m&agrave;, nổi bật chủ thể một c&aacute;ch tự nhi&ecirc;n, chế độ ch&acirc;n dung đ&ecirc;m độc đ&aacute;o. C&aacute;c hiệu ứng &aacute;nh s&aacute;ng chuẩn studio c&oacute; sẵn c&ograve;n l&agrave;m bức ảnh của bạn trở n&ecirc;n nghệ thuật hơn.</strong></p>\r\n\r\n<p><strong><img alt=\"camera tele iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-camera-5.jpg\" /></strong></p>\r\n\r\n<h3><strong>Chế độ quay video x&oacute;a ph&ocirc;ng điện ảnh Cinematic</strong></h3>\r\n\r\n<p><strong>Giờ đ&acirc;y bạn đ&atilde; c&oacute; thể s&aacute;ng tạo những thước phim chất lượng tương đương c&aacute;c bom tấn điện ảnh tr&ecirc;n chiếc&nbsp;điện thoại iPhone 13 Pro Max. Chế độ quay phim điện ảnh Cinemactic c&oacute; thể lấy n&eacute;t v&agrave;o chủ thể, đồng thời l&agrave;m mờ hậu cảnh v&agrave; những nh&acirc;n vật kh&aacute;c trong khung h&igrave;nh. Thậm ch&iacute; cả trong v&agrave; sau khi quay, bạn c&ograve;n c&oacute; thể đổi chủ thể lấy n&eacute;t một c&aacute;ch dễ d&agrave;ng. Hiệu ứng chiều s&acirc;u c&ugrave;ng h&igrave;nh ảnh nổi bật tạo th&agrave;nh những đoạn video đầy th&uacute; vị v&agrave; sống động.</strong></p>\r\n\r\n<p><strong><img alt=\"video điện ảnh iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-18.jpg\" /></strong></p>\r\n\r\n<h3><strong>Nhiếp ảnh chưa bao giờ dễ d&agrave;ng đến thế</strong></h3>\r\n\r\n<p><strong>Ngo&agrave;i việc chụp ảnh sắc n&eacute;t, iPhone 13 Pro Max c&ograve;n c&oacute; những c&ocirc;ng cụ chỉnh sửa ảnh đơn giản v&agrave; hiệu quả. Tr&ecirc;n điện thoại c&oacute; sẵn rất nhiều bộ lọc m&agrave;u, đơn giản bạn chỉ cần vuốt để xem trước v&agrave; &aacute;p dụng những bộ lọc m&agrave;u kh&aacute;c nhau để c&oacute; được bức ảnh đ&uacute;ng như &yacute; muốn. D&ugrave; l&agrave; chỉnh sửa đơn giản hay chuy&ecirc;n s&acirc;u, điện thoại&nbsp;cũng đ&aacute;p ứng một c&aacute;ch ho&agrave;n hảo để bạn tận hưởng cảm gi&aacute;c như l&agrave; một nhiếp ảnh gia chuy&ecirc;n nghiệp.</strong></p>\r\n\r\n<p><strong><img alt=\"selfie iPhone 13 Pro Max\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-13-pro-camera-1.jpg\" /></strong></p>', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>M&agrave;n h&igrave;nh</strong></td>\r\n			<td><strong>6.7&quot;, Super Retina XDR, OLED, 2778 x 1284 Pixel</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera sau</strong></td>\r\n			<td><strong>12.0 MP + 12.0 MP + 12.0 MP</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera Selfie</strong></td>\r\n			<td><strong>12.0 MP</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>RAM&nbsp;</strong></td>\r\n			<td><strong>6 GB</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bộ nhớ trong</strong></td>\r\n			<td><strong>128 GB</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>CPU</strong></td>\r\n			<td><strong>A15 Bionic</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>GPU</strong></td>\r\n			<td><strong>Apple GPU 5 nh&acirc;n</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Dung lượng pin</strong></td>\r\n			<td><strong>4352 mAh</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Thẻ sim</strong></td>\r\n			<td><strong>2, 1 eSIM, 1 Nano SIM</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Hệ điều h&agrave;nh</strong></td>\r\n			<td><strong>iOS 15</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td><strong>Trung Quốc</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Thời gian ra mắt</strong></td>\r\n			<td><strong>09/2021</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', 29000000, 0, 100, '1.jpg', 'máy mới', 1, '18 tháng', 'cáp sạc', 1, '2022-01-07 14:59:25', '2022-01-07 15:06:58'),
(71, 'LG G8X', 1, '<h3><strong>Thiết kế ổn, m&agrave;n h&igrave;nh đẹp</strong></h3>\r\n\r\n<p><strong><img alt=\"ảnh minh họa\" src=\"https://cdn.tgdd.vn/Files/2019/02/26/1151853/canhcong_800x533.jpg\" /></strong></p>\r\n\r\n<p><strong>LG G8 ThinQ c&oacute; thiết kế kh&aacute; giống&nbsp;<a href=\"https://www.thegioididong.com/dtdd/lg-g7-thinq\" target=\"_blank\">LG G7 ThinQ</a>&nbsp;năm ngo&aacute;i với bề ngo&agrave;i tr&ocirc;ng kh&ocirc;ng c&oacute; g&igrave; nổi bật, c&aacute;c cạnh điện thoại cong v&agrave; mỏng hơn với &ldquo;giọt nước&rdquo; ở ph&iacute;a tr&ecirc;n.</strong></p>\r\n\r\n<p><strong><img alt=\"ảnh minh họa\" src=\"https://cdn.tgdd.vn/Files/2019/02/26/1151853/g8matsau_800x533.jpg\" /></strong></p>\r\n\r\n<p><strong>Tuy vậy c&aacute;c thay đổi ở mặt sau r&otilde; r&agrave;ng hơn với camera k&eacute;p được căn chỉnh theo chiều ngang v&agrave; được phủ b&ecirc;n tr&ecirc;n bởi lớp k&iacute;nh Gorilla Glass 6. Chỉ c&oacute; đ&egrave;n flash l&agrave; hơi nh&ocirc; ra ngo&agrave;i, tuy vậy điện thoại tr&ocirc;ng rất thanh lịch. Ngo&agrave;i ra c&ograve;n c&oacute; cảm biến v&acirc;n tay ở b&ecirc;n dưới.</strong></p>\r\n\r\n<p><strong><img alt=\"ảnh minh họa\" src=\"https://cdn.tgdd.vn/Files/2019/02/26/1151853/mattruoc_800x533.jpg\" /></strong></p>\r\n\r\n<p><strong>Mặt trước điện thoại trang bị m&agrave;n h&igrave;nh OLED 6.1 inch được bảo vệ bởi Gorilla Glass 5 với độ ph&acirc;n giải Quad HD+(3.120 x 1.440), rất sắc n&eacute;t v&agrave; c&oacute; thể nh&igrave;n được ở ngo&agrave;i trời. M&agrave;n h&igrave;nh cũng hỗ trợ chuẩn HDR10 để khiến m&agrave;u sắc trở n&ecirc;n sống động hơn.</strong></p>\r\n\r\n<p><strong>Ở ph&iacute;a tr&ecirc;n m&agrave;n h&igrave;nh, loa đ&atilde; được thay thế bằng bộ rung &aacute;p điện, n&oacute; sẽ tạo ra &acirc;m thanh th&ocirc;ng qua m&agrave;n h&igrave;nh bằng một t&iacute;nh năng m&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-lg\" target=\"_blank\">LG</a>&nbsp;gọi l&agrave; &ldquo;&Acirc;m thanh pha l&ecirc; OLED&rdquo;. Ngo&agrave;i ra, LG G8 ThinQ vẫn được trang bị loa Boombox như LG G7 năm ngo&aacute;i.</strong></p>\r\n\r\n<p><strong><img alt=\"ảnh minh họa\" src=\"https://cdn.tgdd.vn/Files/2019/02/26/1151853/matnghieng_800x533.jpg\" /></strong></p>\r\n\r\n<p><strong>Chiếc điện thoại n&agrave;y vẫn c&oacute; giắc cắm tai nghe v&agrave; c&oacute; Hi-Fi Quad DAC hỗ trợ &acirc;m thanh DTS:X 3D. V&igrave; thế đ&acirc;y l&agrave; một trong những chiếc smartphone tốt nhất gi&agrave;nh cho những người th&iacute;ch thưởng thức &acirc;m thanh.</strong></p>\r\n\r\n<h3><strong>Sở hữu cấu h&igrave;nh mạnh</strong></h3>\r\n\r\n<p><strong>LG G8 ThinQ sở hữu cấu h&igrave;nh của một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;Andoird h&agrave;ng đầu trong năm 2019. Điện thoại sử dụng chip xử l&yacute; Snapdragon 855, RAM 6 GB v&agrave; c&oacute; dung lượng lưu trữ l&ecirc;n tới 128 GB (c&oacute; thể tăng th&ecirc;m nếu sử dụng thẻ nhớ microSD). Với cấu h&igrave;nh n&agrave;y th&igrave; G8 ThinQ c&oacute; thể đ&aacute;p ứng hầu như mọi t&aacute;c vụ người d&ugrave;ng mong muốn.</strong></p>\r\n\r\n<p><strong>Chiếc smartphone n&agrave;y chạy tr&ecirc;n hệ điều h&agrave;nh Android 9.0 Pie v&agrave; giao diện người d&ugrave;ng của n&oacute; cũng kh&ocirc;ng thay đổi nhiều so với G7.</strong></p>', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>M&agrave;n h&igrave;nh:</strong></td>\r\n			<td><strong>P-OLED, HDR10<br />\r\n			6.1 inches 2K+ (1440 x 3120 pixels), tỷ lệ 19.5:9<br />\r\n			Corning Gorilla Glass 5<br />\r\n			Always-on display</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Hệ điều h&agrave;nh:</strong></td>\r\n			<td><strong>Android 9.0 (Pie), c&oacute; thể n&acirc;ng l&ecirc;n Android 10, LG UX 9.0</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera sau:</strong></td>\r\n			<td><strong>12 MP, f/1.5, 27mm (ti&ecirc;u chuẩn), dual pixel PDAF, OIS<br />\r\n			16 MP, f/1.9, 16mm (g&oacute;c si&ecirc;u rộng), no AF<br />\r\n			12 MP, 52mm (ch&acirc;n dung), f/2.4, 2x optical zoom, dual pixel PDAF, OIS<br />\r\n			Quay phim: 4K@30/60fps, 1080p@30/60fps, 720p@240fps, HDR10.</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera trước:</strong></td>\r\n			<td><strong>8 MP, f/1.7, 26mm (g&oacute;c rộng), AF<br />\r\n			TOF 3D, f/1.4, (đo độ s&acirc;u)<br />\r\n			Quay phim: 1080p@60fps</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>CPU:</strong></td>\r\n			<td><strong>Qualcomm SM8150 Snapdragon 855 (7 nm)<br />\r\n			8 nh&acirc;n (1x2.84 GHz &amp; 3x2.42 GHz &amp; 4x1.78 GHz)<br />\r\n			GPU: Adreno 640</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>RAM:</strong></td>\r\n			<td><strong>6 GB</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bộ nhớ trong:</strong></td>\r\n			<td><strong>128 GB, UFS 2.1</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Thẻ SIM:</strong></td>\r\n			<td><strong>1 SIM hoặc 2 SIM</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Dung lượng pin:</strong></td>\r\n			<td><strong>Li-Po 3500 mAh<br />\r\n			Sạc nhanh 21W<br />\r\n			Quick Charge 3.0<br />\r\n			USB Power Delivery<br />\r\n			Sạc nhanh kh&ocirc;ng d&acirc;y 9W</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Thiết kế:</strong></td>\r\n			<td><strong>Thanh + Cảm ứng</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 4900000, 3900000, 100, 'LG_G7.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-07 15:03:37', '2022-01-07 15:03:37'),
(72, 'Samsung Galaxy A22', 2, '<h1><strong>Mua điện thoại Samsung Galaxy A22 ch&iacute;nh h&atilde;ng gi&aacute; tốt tại PhuocHao&nbsp;Mobile</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Galaxy A22 l&agrave; d&ograve;ng smartphone thuộc ph&acirc;n kh&uacute;c tầm trung mới ra mắt của Samsung. Với một mức gi&aacute; v&ocirc; c&ugrave;ng tốt, bạn đ&atilde; sở hữu cho m&igrave;nh một chiếc smartphone c&oacute; nhiều t&iacute;nh năng nổi bật. Đ&acirc;y chắc chắn sẽ l&agrave; sản phẩm đem đến trải nghiệm tuyệt vời cho người d&ugrave;ng.</strong></p>\r\n\r\n<h3 style=\"color:#333333; font-style:normal\"><strong>Thiết kế trẻ trung, m&agrave;n h&igrave;nh 90Hz tuyệt đỉnh</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vẻ ngo&agrave;i của Galaxy A22 mang đậm t&iacute;nh đặc trưng của d&ograve;ng c&aacute;c d&ograve;ng Galaxy gi&aacute; rẻ ra mắt trong thời gian gần đ&acirc;y của Samsung. M&aacute;y được ho&agrave;n thiện từ khung viền v&agrave; mặt lưng nhựa nguy&ecirc;n khối với trọng lượng 203g, với c&aacute;c g&oacute;c cạnh bo tr&ograve;n cho cảm gi&aacute;c cầm nắm chắc tay, thoải m&aacute;i.</strong></p>\r\n\r\n<p><strong><img src=\"https://hoanghamobile.com/Uploads/2021/06/25/a22.png\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ở mặt trước, Galaxy A22 LTE trang bị m&agrave;n h&igrave;nh giọt nước 6.4 inch, sử dụng tấm nền Super AMOLED c&oacute; độ ph&acirc;n giải HD+ k&egrave;m tần số qu&eacute;t 90Hz cho kh&ocirc;ng gian hiển thị lớn, m&agrave;u sắc tươi tắn. Ngo&agrave;i ra,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\">cảm biến v&acirc;n tay</a>&nbsp;được t&iacute;ch hợp v&agrave;o n&uacute;t nguồn ở cạnh b&ecirc;n cho dễ d&agrave;ng thao t&aacute;c chạm mở nhanh ch&oacute;ng, tiện lợi.</strong></p>\r\n\r\n<p><strong>Samsung đem tới cho người d&ugrave;ng c&aacute;c sắc m&agrave;u thời thượng bao gồm Xanh Mint, T&iacute;m Unicorn v&agrave; Đen Diamond để bạn thỏa th&iacute;ch chọn lựa theo c&aacute; t&iacute;nh ri&ecirc;ng của m&igrave;nh.</strong></p>\r\n\r\n<h3 style=\"color:#333333; font-style:normal\"><strong>Bộ 4 Camera t&iacute;ch hợp c&ocirc;ng nghệ chống rung quang học OIS</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Galaxy A22 LTE được trang bị bộ tứ camera được xếp th&agrave;nh h&igrave;nh &ocirc; vu&ocirc;ng ở ph&iacute;a mặt lưng m&aacute;y. Trong đ&oacute;, camera ch&iacute;nh đạt 48MP mang lại h&igrave;nh ảnh chất lượng cao, vừa sắc n&eacute;t ch&acirc;n thật trong mọi chế độ. Tiếp đến l&agrave; camera chụp g&oacute;c si&ecirc;u rộng 8MP cho ph&eacute;p mở rộng khung h&igrave;nh ấn tượng l&ecirc;n đến 123 độ, camera x&oacute;a ph&ocirc;ng 2M v&agrave; camera Macro với c&ocirc;ng nghệ chụp cận cảnh 2MP.</strong></p>\r\n\r\n<p><strong><img src=\"https://hoanghamobile.com/Uploads/2021/06/25/a22-2.png\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đ&aacute;ng ch&uacute; &yacute;, đ&acirc;y l&agrave; thiết bị ti&ecirc;n phong được t&iacute;ch hợp c&ocirc;ng nghệ chống rung quang học OIS, gi&uacute;p chụp ảnh quay phim mượt m&agrave;, giảm thiểu rung lắc hay nh&ograve;e h&igrave;nh ngay cả trong m&ocirc;i trường thiếu s&aacute;ng.&nbsp;</strong></p>\r\n\r\n<p><strong>Ngo&agrave;i ra, ở mặt trước, camera selfie được hỗ trợ l&ecirc;n tới 13MP, kết hợp c&ugrave;ng nhiều bộ lọc tự động c&oacute; sẵn tr&ecirc;n m&aacute;y, đem đến cho người d&ugrave;ng những bức h&igrave;nh tự sướng đẹp lung linh v&agrave; bắt n&eacute;t cực chuẩn.</strong></p>\r\n\r\n<h3 style=\"color:#333333; font-style:normal\"><strong>Hiệu năng mượt m&agrave;</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Về mặt cấu h&igrave;nh, Galaxy A22 LTE sẽ đi k&egrave;m con chip MediaTek G80 gi&uacute;p m&aacute;y vận h&agrave;nh trơn tru ở c&aacute;c t&aacute;c vụ xử l&yacute; hằng ng&agrave;y. C&ugrave;ng với đ&oacute; l&agrave; RAM 6GB k&egrave;m bộ nhớ 128GB cho khả năng đa nhiệm tương đối ổn định, c&ugrave;ng kh&ocirc;ng gian lưu trữ kho t&agrave;ng h&igrave;nh ảnh, video đủ lớn.</strong></p>\r\n\r\n<p><strong>Ngo&agrave;i ra, GPU Mali-G52 MP2 c&ograve;n mang đến khả năng xử l&yacute; đồ họa ấn tượng. Đồng thời đ&acirc;y cũng l&agrave; c&ocirc;ng cụ gi&uacute;p hỗ trợ, tối ưu hiệu suất v&agrave; tăng tốc độ phản hồi trong game để đem lại cho bạn trải nghiệm giải tr&iacute; mượt m&agrave;.</strong></p>\r\n\r\n<p><strong><img src=\"https://hoanghamobile.com/Uploads/2021/06/25/a22-3.png\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Galaxy A22 LTE sẽ chạy tr&ecirc;n hệ điều h&agrave;nh Android 11 v&agrave; c&oacute; giao diện One UI 3.1, t&iacute;ch hợp nhiều t&iacute;nh năng mới như hỗ trợ quay video từ tất cả c&aacute;c camera của điện thoại, sử dụng c&ugrave;ng l&uacute;c camera trước v&agrave; sau, chụp được nhiều khung h&igrave;nh hơn mỗi gi&acirc;y...&nbsp;</strong></p>\r\n\r\n<h3 style=\"color:#333333; font-style:normal\"><strong>Pin tr&acirc;u, hỗ trợ sạc nhanh 15W</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Samsung đ&atilde; trang bị cho chiếc điện thoại n&agrave;y một vi&ecirc;n pin dung lượng lớn 5000mAh. Kết hợp với m&agrave;n h&igrave;nh tiết kiệm pin, mang đến thời gian sử dụng k&eacute;o d&agrave;i một c&aacute;ch ấn tượng suốt cả ng&agrave;y d&agrave;i.&nbsp;</strong></p>\r\n\r\n<p><strong>B&ecirc;n cạnh đ&oacute;, sản phẩm cũng hỗ trợ sạc nhanh 15W đi k&egrave;m th&ocirc;ng qua cổng sạc Type-C si&ecirc;u tiện lợi, vừa r&uacute;t ngắn thời gian sạc, lại c&oacute; thể gi&uacute;p người d&ugrave;ng sử dụng l&acirc;u hơn.</strong></p>\r\n\r\n<p><strong>Mua Samsung Galaxy A22 ch&iacute;nh h&atilde;ng gi&aacute; tốt đến ngay PhuocHao Mobile!&nbsp;</strong></p>', '<p><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh:&nbsp;Super AMOLED</strong></p>\r\n\r\n<p><strong>Độ ph&acirc;n giải:&nbsp;HD+ (720 x 1600 Pixels), Ch&iacute;nh 48 MP &amp; Phụ 8 MP, 2 MP, 2 MP, 13 MP</strong></p>\r\n\r\n<p><strong>Hệ điều h&agrave;nh:&nbsp;Android 11</strong></p>\r\n\r\n<p><strong>Chip xử l&yacute; (CPU):&nbsp;MediaTek MT6769V 8 nh&acirc;n</strong></p>\r\n\r\n<p><strong>Bộ nhớ trong (ROM):&nbsp;128 GB</strong></p>\r\n\r\n<p><strong>RAM:&nbsp;6 GB</strong></p>\r\n\r\n<p><strong>Mạng di động:&nbsp;Hỗ trợ 4G</strong></p>\r\n\r\n<p><strong>Số khe sim:&nbsp;2 Nano SIM</strong></p>\r\n\r\n<p><strong>Dung lượng pin:&nbsp;5000 mAh</strong></p>', 5900000, 4900000, 150, 'samsung_a22.jpg', 'máy mới', 1, '18 tháng', 'cáp sạc', 1, '2022-01-07 15:10:38', '2022-01-07 15:11:09'),
(73, 'VSmart live 1', 3, '<p>Đ&acirc;y l&agrave; m&ocirc; tả</p>', '<p>Đ&acirc;y l&agrave; th&ocirc;ng số</p>', 4900000, 3900000, 100, 'tải xuống.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-08 14:47:48', '2022-01-08 14:47:48'),
(74, 'Samsung galaxy Z fold', 2, '<p>Đ&acirc;y l&agrave; m&ocirc; tả</p>', '<p>Đ&acirc;y l&agrave; th&ocirc;ng số</p>', 59000000, 0, 100, 'Galaxy Z.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:20:22', '2022-01-17 16:20:22'),
(75, 'Nokia 5', 6, '<p>Đ&acirc;y l&agrave; m&ocirc; tả</p>', '<p>Đ&acirc;y l&agrave; th&ocirc;ng số</p>', 7900000, 6900000, 100, 'nokia 7_2.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:21:28', '2022-01-17 16:21:28'),
(76, 'OPPO neo 9', 10, '<p>Đ&acirc;y l&agrave; m&ocirc; tả</p>', '<p>Đ&acirc;y l&agrave; th&ocirc;ng số</p>', 12000000, 9900000, 100, 'oppo_A15.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:22:47', '2022-01-17 16:23:06'),
(77, 'Iphone 12 Pro Max', 4, '<p>M&ocirc; tả</p>', '<p>Th&ocirc;ng số</p>', 18900000, 17900000, 100, 'iphone12.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:24:06', '2022-01-17 16:24:06'),
(78, 'Xiaomi redmi note 10 pro', 9, '<p>M&ocirc; tả</p>', '<p>Th&ocirc;ng số</p>', 6900000, 7900000, 100, '3.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:25:04', '2022-01-17 16:25:04'),
(79, 'Realme C3', 2, '<p>M&ocirc; tả</p>', '<p>Th&ocirc;ng số</p>', 4900000, 3900000, 100, 'realme-c21y-black-600x600.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-17 16:27:02', '2022-01-17 16:27:02'),
(80, 'Bphone 3', 22, '<p>M&ocirc; tả</p>', '<p>Th&ocirc;ng số</p>', 12900000, 0, 100, '4.jpg', 'máy mới', 1, '12 tháng', 'cáp sạc', 1, '2022-01-18 15:32:19', '2022-01-18 15:32:19'),
(81, 'Samsung galaxy S21 Utral', 2, '<p>M&ocirc; tả</p>', '<p>Th&ocirc;ng số</p>', 29000000, 23900000, 100, 'samsung_s20.jpg', 'máy mới', 1, '18 tháng', 'cáp sạc', 1, '2022-01-18 16:53:25', '2022-01-18 16:53:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `noidung`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Banner 1', 'Quảng cáo cho sản phẩm galaxy S21', 'http://localhost/laravel/chitiet/81', 'banner3.png', '2021-11-17 18:41:58', '2022-01-18 16:53:46'),
(3, 'Banner 3', 'Quảng cáo cho Iphone 13 pro max', 'http://localhost/laravel/chitiet/70', 'dat-iphone-13_1632546216.png.webp', '2021-11-17 18:42:39', '2022-01-18 16:52:06'),
(6, 'Banner 4', 'Tin tức công nghệ samsung galaxy A series', 'http://localhost/laravel/chi-tiet-tin-tuc/29', 'Aseri-830-300-830x300-1.png', '2021-11-26 09:16:18', '2022-01-19 14:21:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'LG', '2021-11-17 18:38:42', '2021-11-17 18:38:42'),
(2, 'Samsung', '2021-11-17 18:38:48', '2021-11-17 18:38:48'),
(3, 'Vsmart', '2021-11-18 08:20:05', '2021-11-18 08:20:05'),
(4, 'Iphone', '2021-11-18 08:20:10', '2021-11-18 08:20:10'),
(6, 'Nokia', '2021-11-18 08:20:23', '2021-11-18 08:20:23'),
(9, 'Xiaomi', '2021-12-29 18:39:33', '2021-12-29 18:39:33'),
(10, 'Oppo', '2022-01-17 16:22:54', '2022-01-17 16:22:54'),
(11, 'Realme', '2022-01-17 16:27:17', '2022-01-17 16:27:17'),
(12, 'HTC', '2022-01-17 20:40:00', '2022-01-17 20:50:53'),
(21, 'Sony', '2022-01-17 20:52:26', '2022-01-17 20:52:26'),
(22, 'Bphone', '2022-01-18 15:27:10', '2022-01-18 15:27:10'),
(23, 'Asus', '2022-01-19 14:22:39', '2022-01-19 14:22:39'),
(24, 'Vivo', '2022-01-19 14:22:44', '2022-01-19 14:22:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `quyen` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(10) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL,
  `code_active` varchar(255) DEFAULT NULL,
  `time_active` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `address`, `phone`, `quyen`, `password`, `active`, `remember_token`, `code`, `time_code`, `code_active`, `time_active`, `created_at`, `updated_at`) VALUES
(6, 'nguyenphuochao123@gmail.com', 'Nguyễn Phước Hảo', '301/5 phước tân hưng', '098383838', 1, '$2y$10$RjuSjjYDySvcRJedtgYiG.HEDCRcCl8.NR5SwWlVx5IOQ7sBPAUdy', 1, 'a7dNuipdYOgvC1w0cQTdRyUJtQYg4t744VWQaWpJqRONXozsMu2L7iJa18yn', '$2y$10$TmsUKgSW06/EAATTRHbwFOUyBwgka3N.teQ/bsLffYp3YnO2bpRB.', '2021-11-22 01:24:04', NULL, NULL, NULL, '2021-11-22 15:17:05'),
(7, 'nguyenphuochao456@gmail.com', 'Nguyễn Thanh Toàn', 'huyện Cà Mau', '0983736654', 0, '$2y$10$wgInUD4kx2CKPxDyYNsoK.5uDgCS39IHR7RmCc6bcvYQso9p6V1yi', 1, NULL, '$2y$10$1nUIv6IkesMNU9wx3mPIDupo.NokCUwt8LjS5S00yWRWX5SlVHwgq', '2021-11-22 01:35:35', '$2y$10$D83ELIjlOUZWnx6nNGi/I.aH7lM6ph3t0WH76ehkvhKYujCBAU/Ce', '2021-11-21 17:39:26', '2021-11-21 17:39:25', '2022-01-18 16:50:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `khuyen_mai_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
