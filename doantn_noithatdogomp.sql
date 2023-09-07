-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 08:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doantn_noithatdogomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobanan`
--

CREATE TABLE `bobanan` (
  `id_bobanan` int(11) NOT NULL,
  `name_bobanan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_bobanan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price_bobanan` int(15) NOT NULL,
  `size_bobanan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `material_bobanan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobanan`
--

INSERT INTO `bobanan` (`id_bobanan`, `name_bobanan`, `img_bobanan`, `price_bobanan`, `size_bobanan`, `material_bobanan`) VALUES
(1, 'Bàn Ăn Tròn Mặt Xoay Gỗ Sồi 10 Ghế', 'images\\banhd\\bộ bàn ăn 1m6-10 ghế 9tr500.jpg', 9500000, '160', 'Gỗ Sồi Màu Nâu Ong'),
(2, 'Bàn Ăn Mặt Đá Trắng Vân 6 Ghế Bọc Nệm Vải Phong Cách Hiện Đại ', 'images\\banhd\\Ban mat da trang van 6 ghe boc nem vai.jpg', 6500000, '160x60', 'Gỗ Sồi Màu Nâu Óc Chó\r\nMặt Đá Vân Màu Trắng'),
(3, 'Bàn Ăn Mặt Đá Grace Bọc Da 6 Ghế', 'images\\banhd\\bàn ăn đá ghế grace 8tr.jpg', 8000000, '160x60', 'Gỗ CN Ghế Bọc Da Xám \r\nMặt Đá Grace'),
(4, 'Bàn Ăn Mặt Đá Vân Hiện Đại 6 Ghế Bọc Da Nâu Mật', 'images\\banhd\\nâu .jpg', 4500000, '110x70', 'Gỗ CN Ghế Bọc Da Màu Nâu Mật\r\nMặt Đá Grace'),
(5, 'Bàn Ăn Chữ Nhật Gỗ Sồi 8 Ghế Rất Đẹp', 'images\\banhd\\gỗ sồi kt 180x90 8 ghế 6tr5.jpg', 6500000, '180x90', 'Gỗ Sồi Nâu Mật\r\nMặt Kính'),
(6, 'Bộ Bàn Ăn Mặt Đá Lọt Gỗ Sồi Nga Hiện Đại', 'images\\banhd\\kt bàn 160-80 6 ghế  gỗ sồi 7tr500.jpg', 7500000, '160x80', 'Gỗ Sồi Nga\r\nMặt Đá Lọt Màu Đen'),
(7, 'Bộ Bàn Ăn Chữ Nhật Gỗ Sồi Mặt Đá Vân Lọt Tặng Kính Chống Nước', 'images\\banhd\\TN gỗ sồi mặt đá và có kính chống xước 160-80 6 ghế 8tr.jpg', 8000000, '160x80', 'Gỗ Sồi\r\nMặt Đá Vân Màu Tối'),
(8, 'Bàn Ăn Mặt Elip Trần Gỗ Hương Siêu Đẹp', 'images\\banhd\\bộ 1m-2m 8 ghế  22tr.jpg', 22000000, '100x200', 'Gỗ Hương Màu Nâu Sáng'),
(9, 'Bộ Bàn Ăn Mặt Đá Phù Hợp Với Chung Cư Nhỏ 4 Ghế', 'images\\banhd\\hd1.jpg', 4500000, '110x60', 'Gỗ CN Nâu Sáng Ghế Bọc Da Xám Tro\r\nMặt Đá Trắng Vân'),
(10, 'Bộ Bàn Ăn Chân Trụ Mặt Đá Trắng Ghế Bọc Vải Nhung Siêu Đẹp', 'images\\banhd\\hd4.jpg', 5500000, '160x70', 'Gỗ Gõ Ghế Bọc Vải Nhung Nâu\r\nMặt Đá Màu Trắng'),
(11, 'Bộ Bàn Ăn Mặt Đá Tròn Hiện Đại 6 Ghế ', 'images\\banhd\\hd3.jpg', 5500000, '120', 'Gỗ Sồi Nga Nâu Đậm\r\nGhế Bọc Da'),
(12, 'Bộ Bàn Ăn Chữ Nhật 6 Ghế Giảm Giá Sốc', 'images\\banhd\\hd2.jpg', 4500000, '160x70', 'Gỗ Sồi Nga \r\nGhế Bọc Da Nâu Sáng ');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id_cate` int(11) NOT NULL,
  `code_cate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã danh mục',
  `name_cate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên danh mục',
  `description_cate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Diễn giải',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id_cate`, `code_cate`, `name_cate`, `description_cate`, `created_at`, `updated_at`) VALUES
(1, 'PBG', 'Bàn Ghế Gỗ', 'Tất cả sản phẩm bàn ghế gỗ', '2023-02-10 12:14:00', NULL),
(2, 'PBA', 'Bộ Bàn Ăn', 'Tất cả sản phẩm bộ bàn ăn', '2023-02-10 12:14:30', NULL),
(3, 'PGN', 'Giường Ngủ', 'Tất cả sản phẩm giường ngủ', '2023-02-10 12:15:01', NULL),
(4, 'PKTV', 'Kệ Ti Vi', 'Tất cả sản phẩm kệ ti vi', '2023-02-10 12:15:30', NULL),
(5, 'PTQA', 'Tủ Quần Áo', 'Tất cả sản phẩm tủ quần áo', '2023-02-10 12:16:05', NULL),
(6, 'PTGD', 'Tủ Giày Dép', 'Tất cả sản phẩm tủ giày dép', '2023-02-10 12:16:35', NULL),
(7, 'PBTĐ', 'Bàn Trang Điểm', 'Tất cả sản phẩm bàn trang điểm', '2023-02-10 12:17:10', NULL),
(8, 'PPT', 'Phòng Thờ', 'Tất cả sẩn phẩm phòng thờ', '2023-02-10 12:17:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `username` varchar(100) NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(50) NOT NULL COMMENT 'Mật khẩu (mặc định: customer@123456)',
  `name_customer` varchar(100) NOT NULL COMMENT 'Tên khách hàng',
  `gender_customer` int(4) DEFAULT NULL COMMENT 'Giới tính: #0: Nam; #1: Nữ',
  `phone_customer` int(12) NOT NULL COMMENT 'Số điện thoại',
  `email_customer` varchar(100) NOT NULL COMMENT 'Email',
  `comments` varchar(500) DEFAULT NULL COMMENT 'Ghi chú của Khách Hàng cần Hỗ Trợ',
  `birthday_customer` datetime DEFAULT NULL COMMENT 'Ngày sinh',
  `avatar_customer` varchar(250) DEFAULT NULL COMMENT 'Ảnh đại diện',
  `shipped_address` varchar(500) DEFAULT NULL COMMENT 'Địa chỉ giao hàng',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày tạo ',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `username`, `password`, `name_customer`, `gender_customer`, `phone_customer`, `email_customer`, `comments`, `birthday_customer`, `avatar_customer`, `shipped_address`, `created_at`, `updated_at`) VALUES
(1, '_leeun22', '87654321', 'Lê Thị Hồng Nhung', 1, 364670166, 'nhunglee.221@gmail.com', NULL, '2001-01-22 00:00:00', 'images\\customer\\avatar_profile.png', 'Số nhà 48, TT.Đông Anh, Đông Anh, Hà Nội', '2023-03-17 23:43:16', NULL),
(2, 'giakhang16', '54565456', 'Hoàng Gia Khang', 0, 365554328, 'giakhang@gmail.com', NULL, '2001-05-07 00:00:00', 'images\\customer\\avatar_profile.png', 'Hà Đông', '2023-03-17 23:43:16', NULL),
(3, 'thuyninh27', '78587478', 'Phạm Thị Thùy Ninh', 1, 844030318, 'thuyninh@gmail.com', NULL, '2001-05-27 00:00:00', 'images\\customer\\avatar_profile.png', 'Vĩnh Tuy, P. Vĩnh Tuy, Quận Hai Bà Trưng, HN', '2023-03-19 00:35:03', NULL),
(4, 'lenhung22', '12345678', 'Lê Thị Hồng Nhung', NULL, 364528125, 'nhung123@gmail.com', NULL, NULL, 'images\\customer\\avatar_profile.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images_product`
--

CREATE TABLE `images_product` (
  `id_images` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'Hình ảnh sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_product`
--

INSERT INTO `images_product` (`id_images`, `id_product`, `image`) VALUES
(1, 43, 'images\\feature-product\\1.png'),
(2, 43, 'images\\feature-product\\1.1.jpg'),
(3, 43, 'images\\feature-product\\1.1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `list_product`
--

CREATE TABLE `list_product` (
  `id_list` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL COMMENT 'Thuộc vào danh mục',
  `code_list` varchar(50) NOT NULL COMMENT 'Mã chuyên mục sản phẩm',
  `name_list` varchar(100) NOT NULL COMMENT 'Tên chuyên mục',
  `description_list` varchar(100) DEFAULT NULL COMMENT 'Diễn giải',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_product`
--

INSERT INTO `list_product` (`id_list`, `id_cate`, `code_list`, `name_list`, `description_list`, `created_at`, `updated_at`) VALUES
(1, 1, 'SLG', 'Bộ salon gỗ', 'Tất cả những sản phẩm bộ salon gỗ', '2023-02-10 12:30:05', NULL),
(2, 1, 'SFG', 'Bộ sofa gỗ', 'Tất cả những sản phẩm bộ sofa gỗ', '2023-02-10 12:30:45', NULL),
(3, 1, 'BHTN', 'Bàn họp gỗ tự nhiên', 'Tất cả những sản phẩm bàn họp gỗ tự nhiên', '2023-02-10 12:45:15', NULL),
(4, 1, 'BHCN', 'Bàn họp gỗ công nghiệp', 'Tất cả những sản phẩm bàn họp gỗ công nghiệp', '2023-02-10 12:46:45', NULL),
(5, 2, 'BAHD', 'Bàn ăn hiện đại', 'Tất cả những sẩn phẩm bàn ăn hiện đại', '2023-02-10 12:47:05', NULL),
(6, 2, 'BACD', 'Bàn ăn cổ điển', 'Tất cả những sẩn phẩm bàn ăn cổ điển', '2023-02-10 12:47:35', NULL),
(7, 2, 'BA4', 'Bàn ăn 4 ghế', 'Tất cả những sẩn phẩm bàn ăn 4 ghế', '2023-02-10 12:48:15', NULL),
(8, 2, 'BA6', 'Bàn ăn 6 ghế', 'Tất cả những sẩn phẩm bàn ăn 6 ghế', '2023-02-10 12:48:45', NULL),
(9, 2, 'BA8', 'Bàn ăn 8 ghế', 'Tất cả những sẩn phẩm bàn ăn 8 ghế', '2023-02-10 12:49:03', NULL),
(10, 3, 'GNTN', 'Giường ngủ gỗ tự nhiên', 'Tất cả những sản phẩm giường ngủ gỗ tự nhiên', '2023-02-10 12:55:15', NULL),
(11, 3, 'GNCN', 'Giường ngủ gỗ công nghiệp', 'Tất cả những sản phẩm giường ngủ gỗ công nghiệp', '2023-02-10 12:55:35', NULL),
(12, 3, 'GNBN', 'Giường ngủ bọc nệm', 'Tất cả những sản phẩm giường ngủ bọc nệm', '2023-02-10 12:56:12', NULL),
(13, 4, 'KTVTN', 'Kệ ti vi gỗ tự nhiên', 'Tất cả những sản phẩm kệ ti vi gỗ tự nhiên', '2023-02-10 12:57:15', NULL),
(14, 4, 'KTVCN', 'Kệ ti vi gỗ công nghiệp', 'Tất cả những sản phẩm kệ ti vi gỗ công nghiệp', '2023-02-10 12:57:45', NULL),
(15, 5, 'TQATN', 'Tủ quần áo gỗ tự nhiên', 'Tất cả những sản phẩm tủ quần áo gỗ tự nhiên', '2023-02-10 12:58:03', NULL),
(16, 5, 'TQACN', 'Tủ quần áo gỗ công nghiệp', 'Tất cả những sản phẩm tủ quần áo gỗ công nghiệp', '2023-02-10 12:58:35', NULL),
(17, 6, 'TGDTN', 'Tủ giày dép gỗ tự nhiên', 'Tất cả những sản phẩm tủ giày dép gỗ tự nhiên', '2023-02-10 12:59:06', NULL),
(18, 6, 'TGDCN', 'Tủ giày dép gỗ công nghiệp', 'Tất cả những sản phẩm tủ giày dép gỗ công nghiệp', '2023-02-10 12:59:43', NULL),
(19, 7, 'BTDTN', 'Bàn trang điểm gỗ tự nhiên', 'Tất cả những sản phẩm bàn trang điểm gỗ tự nhiên', '2023-02-10 13:01:15', NULL),
(20, 7, 'BTDCN', 'Bàn trang điểm gỗ công nghiệp', 'Tất cả những sản phẩm bàn trang điểm gỗ công nghiệp', '2023-02-10 13:01:22', NULL),
(21, 8, 'TTG', 'Tủ thờ gỗ', 'Tất cả những sản phẩm tủ thờ gỗ', '2023-02-10 13:02:04', NULL),
(22, 8, 'AGG', 'Án gian gỗ', 'Tất cả những sản phẩm án gian gỗ', '2023-02-10 13:02:13', NULL),
(23, 8, 'STG', 'Sập thờ  gỗ', 'Tất cả những sản phẩm sập thờ gỗ', '2023-02-10 13:02:35', NULL),
(24, 8, 'BTTU', 'Bàn thờ treo tường', 'Tất cả những sản phẩm bàn thờ treo tường', '2023-02-10 13:03:05', NULL),
(25, 8, 'BTTA', 'Bàn thờ thần tài', 'Tất cả những sản phẩm bàn thờ thần tài', '2023-02-10 13:03:17', NULL),
(26, 8, 'HPCD', 'Hoành phi câu đối', 'Tất cả những sản phẩm hoành phi câu đối', '2023-02-10 13:03:23', NULL),
(27, 8, 'LBG', 'Lục bình gỗ', 'Tất cả những sản phẩm lục bình gỗ', '2023-02-10 13:03:50', NULL),
(28, 8, 'TAK', 'Tấm ám khói', 'Tất cả những sản phẩm tấm ám khói', '2023-02-10 13:03:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `hoten` varchar(200) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `hoten`, `matkhau`) VALUES
(1, 'admin', '654321'),
(2, 'lenhung', '66666666'),
(3, 'Thành viên A', '123456'),
(4, 'Thành viên B', '23445556'),
(5, 'Thành Viên C', '88888888');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `code_new` varchar(25) NOT NULL COMMENT 'Mã tin tức',
  `name_new` varchar(60) NOT NULL COMMENT 'Tên tin tức',
  `img_new` varchar(100) NOT NULL COMMENT 'Ảnh tin tức',
  `description_short` varchar(10000) DEFAULT NULL COMMENT 'Mô tả ngắn tin tức',
  `is_featured` bit(1) DEFAULT NULL COMMENT 'Có phải là Tin Tức nổi bật không? #1:Có; #0:Không',
  `is_new` bit(1) DEFAULT NULL COMMENT 'Có phải là Tin Tức mới không? #1:Có; #0:Không',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_new`, `code_new`, `name_new`, `img_new`, `description_short`, `is_featured`, `is_new`, `created_at`, `updated_at`) VALUES
(1, 'N1', 'Tổng hợp các mẫu bàn ghế gỗ được ưu chuộng nhất', 'images\\news\\N1.png', 'Bộ bàn ghế gỗ phòng khách giường như đã là một đồ dùng thiết yếu trong mỗi gia đình Việt Nam...', b'1', NULL, '2023-02-16 15:45:03', NULL),
(2, 'N2', 'Cách bảo quản và sử dụng đồ gỗ Nội thất luôn mới', 'images\\news\\N2.jpg', 'Lưu ý khi sử dụng và bảo quản đồ gỗ: Bạn cần tránh để đồ gỗ phải bị ngâm nước lâu, tránh...', b'1', NULL, '2023-02-16 15:45:38', NULL),
(3, 'N3', 'Nội thất phòng thờ và những điều bạn nên biết', 'images\\news\\N3.jpg', 'Đối với mỗi người Việt, không gian thờ cúng luôn là nơi trang trọng, uy nghiêm nhất. Vì vậy, trong quá trình thiết kế, bày trí nội thất phòng thờ yếu tố phong thủy...', b'1', NULL, '2023-02-16 15:46:17', NULL),
(4, 'N4', 'Những kiến thức cơ bản về gỗ hương đá', 'images\\news\\N4.jpg', 'Gỗ hương đá là một trong 5 loại gỗ thuộc họ gỗ hương gồm hương đỏ, hương đá, hương vân, hương Nam Phi, hương huyết...', b'1', NULL, '2023-02-16 15:46:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL COMMENT 'Mã đơn hàng',
  `id_customer` int(11) NOT NULL COMMENT 'Thuộc khách hàng',
  `fullname_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ tên khách hàng',
  `shipped_address` text NOT NULL COMMENT 'Địa chỉ giao hàng',
  `email_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email khách hàng',
  `phone_customer` int(12) NOT NULL COMMENT 'Sđt khách hàng',
  `discount_percent` int(11) DEFAULT NULL COMMENT '% chiết khấu của đơn hàng (Mã giảm giá)',
  `total_amount` int(13) NOT NULL COMMENT 'Tổng tiền đơn hàng',
  `id_payment_type` int(11) NOT NULL COMMENT 'Phương thức Thanh toán',
  `date_order` datetime NOT NULL COMMENT 'Ngày tạo đơn hàng',
  `note_order` text NOT NULL COMMENT 'Ghi chú đơn hàng',
  `shipped_date_order` datetime DEFAULT NULL COMMENT 'Ngày giao hàng',
  `payment_status` bit(1) NOT NULL COMMENT 'Trạng thái thanh toán. #0:Chưa TT, #1:Đã TT',
  `paid_date_order` datetime DEFAULT NULL COMMENT 'Ngày thanh toán đơn hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `fullname_customer`, `shipped_address`, `email_customer`, `phone_customer`, `discount_percent`, `total_amount`, `id_payment_type`, `date_order`, `note_order`, `shipped_date_order`, `payment_status`, `paid_date_order`) VALUES
(1, 1, 'Lê Thị Hồng Nhung', 'T.49, TT.Đông Anh, H.Đông Anh, TP.Hà Nội, Đông Anh, Hà Nội', 'nhunglee.221@gmail.com', 364670166, NULL, 74860000, 2, '2023-05-31 12:16:57', 'chú ý', NULL, b'0', NULL),
(2, 1, 'Lê Thị Hồng Nhung', 'T.49, TT.Đông Anh, H.Đông Anh, TP.Hà Nội, Đông Anh, Hà Nội', 'nhunglee.221@gmail.com', 364670166, NULL, 24550000, 1, '2023-05-31 12:20:49', 'chú ý', NULL, b'0', NULL),
(3, 1, 'Lê Thị Hồng Nhung', 'T.49, TT.Đông Anh, H.Đông Anh, TP.Hà Nội, Đông Anh, Hà Nội', 'nhunglee.221@gmail.com', 364670166, NULL, 12350000, 2, '2023-06-28 08:21:17', 'Hãy liên hệ với tôi trước khi giao hàng', NULL, b'0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `code_product` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `price_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_order`, `id_product`, `code_product`, `quantity_product`, `price_product`) VALUES
(1, 1, 38, 'STG1', 1, 42350000),
(2, 1, 11, 'BSFG5', 2, 16255000),
(3, 2, 15, 'BBAG3', 2, 8000000),
(4, 2, 2, 'BSFG2', 1, 8550000),
(5, 3, 1, 'BSFG1', 1, 12350000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id_payment_type` int(11) NOT NULL COMMENT 'Mã hình thức thanh toán',
  `name_payment_type` varchar(100) NOT NULL COMMENT 'Tên hình thức thanh toán	',
  `description_payment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id_payment_type`, `name_payment_type`, `description_payment`) VALUES
(1, 'Chuyển khoản', ''),
(2, 'Thanh toán khi nhận hàng', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `code_product` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã sản phẩm',
  `name_product` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên sản phẩm',
  `img_product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Hình ảnh sản phẩm',
  `price_product` int(11) NOT NULL COMMENT 'Giá niêm yết sản phẩm',
  `discount_percent` int(11) DEFAULT NULL COMMENT '% chiết khấu',
  `discount_amout` int(11) DEFAULT NULL COMMENT 'Giá sau khi chiết khấu (Giá đã giảm)	',
  `size_product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Kích thước sản phẩm',
  `material_product` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Chất liệu sản phẩm',
  `color_product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_product` varchar(1000) DEFAULT NULL COMMENT 'Mô tả sản phẩm',
  `is_featured` bit(1) DEFAULT NULL COMMENT 'Có phải là Sản phẩm nổi bật không? #1:Có; #0:Không',
  `is_new` bit(1) DEFAULT NULL COMMENT 'Có phải là Sản phẩm mới nhất không? #1:Có; #0:Không',
  `id_cate` int(11) DEFAULT NULL COMMENT 'Sản phẩm thuộc danh mục nào?',
  `id_list` int(11) DEFAULT NULL COMMENT 'Sản phẩm thuộc chuyên mục nào của danh mục?',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `code_product`, `name_product`, `img_product`, `price_product`, `discount_percent`, `discount_amout`, `size_product`, `material_product`, `color_product`, `des_product`, `is_featured`, `is_new`, `id_cate`, `id_list`, `created_at`, `updated_at`) VALUES
(1, 'BSFG1', 'Bộ Sofa Gỗ Sồi Đỏ Tự Nhiên 5 Món', 'images\\ban-ghe-go\\10.jpg', 12350000, NULL, NULL, 'D270 - R180 - C85 cm', 'Gỗ sồi đỏ', 'Màu nâu đỏ tự nhiên', 'Nguyên bộ 5 món, Nệm bọc da, Hộc tay vuông', NULL, NULL, 1, 2, '2023-02-15 13:05:03', NULL),
(2, 'BSFG2', 'Bộ Sofa Góc L Gỗ Sồi Màu Nâu Óc Chó 3 Món Bọc Da Cao Cấp', 'images\\ban-ghe-go\\18.jpg', 8550000, NULL, NULL, 'D320 - R180 - C100 cm', 'Gỗ sồi', 'Màu nâu óc chó', 'Bộ Sofa Góc L Gỗ Sồi Màu Nâu Óc Chó 3 Món Bọc Da Cao Cấp: <br>\r\n- Mẫu sofa gỗ thiết kế theo kiểu góc chữ L giúp tận dụng tối đa diện tích không gian phòng khách gia đình. Kiểu dáng sản phẩm được tối giản hóa với các đường nét vuông vức, góc cạnh đảm bảo tính ổn định tốt, tạo cảm giác vững chãi, chắc chắn, an tâm cho người sử dụng <br>\r\n- Được hoàn thiện từ gỗ sồi Nga tự nhiên với màu nâu đẹp ưa nhìn, kết hợp với những vân gỗ mộc độc đáo. Với khả năng bền màu theo thời gian, tuổi thọ tốt, giá thành khá phải chăng. Sản phẩm là lựa chọn lý tưởng với khách hàng yêu thích những dòng nội thất gỗ có mức giá và chất lượng ổn định. Mang lại giá trị thiết thực nhất, mang tới những trải nghiệm tích cực cho cuộc sống gia đình', NULL, NULL, 1, 2, '2023-02-15 13:06:13', NULL),
(3, 'BSFG3', 'Bộ Sofa Góc L Gỗ Sồi Màu Nâu Vàng 3 Món Nệm Da', 'images\\ban-ghe-go\\15.jpg', 8255000, NULL, NULL, 'D280 - R180 - C95 cm', 'Gỗ sồi nga', 'Màu nâu vàng', NULL, NULL, NULL, 1, 2, '2023-02-15 13:06:38', NULL),
(4, 'BSLG1', 'Bộ Bàn Ghế Tần Thủy Hoàng Gỗ Hương Đá Tay 12 8 Món Siêu Đẹp', 'images\\ban-ghe-go\\6.jpg', 53350000, NULL, NULL, 'D320 - R280 - C150 cm', 'Gỗ hương đá', 'Màu Tự Nhiên', 'Bộ Bàn Ghế Tần Thủy Hoàng Gỗ Hương Đá Tay 12 8 Món Siêu Đẹp: <br>\r\n- Được chế tác theo kiểu tay cột đôi, mặt khung tranh, đỉnh cuốn sừng trâu với lối thiết kế đậm chất cổ điển thời nhà Tần. Những đường cong đầy ấn tượng được xuất hiện ở mọi góc cạnh của sản phẩm kết hợp với các bản gỗ mộc dày dặn mang lại cảm giác bệ vệ và uy nghiêm như chính chiếc ghế rồng của vua chúa khi xưa <br> \r\n- Bộ bàn ghế phòng khách bao gồm 8 món: 1 băng dài, 4 ghế đơn, 2 đôn, 1 bàn trà. Tất cả đều được tạo dáng chân bo cong cùng phần cạnh thô dày vuông vức ', NULL, NULL, 1, 1, '2023-02-15 13:08:35', NULL),
(5, 'BSLG2', 'Bộ Bàn Ghế Hoàng Gia Gỗ Hướng Đá 6 Món Chạm Khắc Công Phu', 'images\\ban-ghe-go\\16.jpg', 75000000, NULL, NULL, 'D260 - R165 - C147 cm', 'Gỗ hương đá nam phi loại 1', 'Màu sắc tự nhiên', 'Bộ Bàn Ghế Hoàng Gia Gỗ Hướng Đá 6 Món Chạm Khắc Công Phu: <br>\r\n- Chương liền toàn bộ, chạm đục điêu nghệ <br>\r\n- Bộ bàn ghế gồm 6 món: 1 đoản dài, 2 ghế đơn, 2 đôn và 1 bàn trà <br>\r\n- Kích thước chi tiết sản phẩm: <br>\r\n+ Bàn: Dài 140cm, Ngang 40cm <br>\r\n+ Đoản: Sâu 63cm, Cao 147cm, Dài 260cm <br>\r\n+ Ghế đơn: Sâu 60cm, Ngang 103cm, Cao 135cm <br>\r\n+ Đôn cao: 40*70cm <br>\r\n+ Đôn thấp: 40*40cm', NULL, NULL, 1, 1, '2023-02-15 13:09:46', NULL),
(6, 'BSLG3', 'Bộ Tần Thủy Hoàng Gỗ Mun Đuôi Công Tay 12 6 Món Siêu Vip', 'images\\ban-ghe-go\\12.jpg', 49000000, NULL, NULL, 'D310 - R210 - C150 cm', 'Gỗ mun', 'Màu tự nhiên', 'Bộ Tần Thủy Hoàng Gỗ Mun Đuôi Công Tay 12 6 Món Siêu Vip: <br>\r\n- Bộ bàn ghế tần thủy hoàng gỗ mun đuôi công – ngồi lên bộ ghế tựa như mình đang là vua nước tần vậy ! gỗ vân nhiều, to tạo nên đường nét tinh xảo ! <br>\r\n– Thông tin chi tiết sản phẩm: <br>\r\n+ Kích thước : Tay 12 – Cột 12 <br>\r\n+ Chất Liệu : gỗ Mun đuôi công <br>\r\n+ Bộ 6 món  bao gồm: <br>\r\n1 Đoản dài: 255*60cm <br>\r\n2 Ghế: 110*60cm <br>\r\n1 Bàn: 145*75cm <br>\r\n1 Bàn nối: 75*45cm <br>\r\n1 Đôn: 40*40cm', NULL, NULL, 1, 1, '2023-02-15 13:10:50', NULL),
(7, 'BSLG4', 'Bộ Minh Quốc Đào 6 Món Cột 12 Gỗ Hương Đá Vip', 'images\\ban-ghe-go\\1.jpg', 34550000, NULL, NULL, 'D240 - R205 - C147 cm', 'Gỗ hương đá', 'Màu tự nhiên', '- Thông số chi tiết sản phẩm:\r\n+ Chất Liệu: Gỗ Hương Đá.\r\n+ Kích thước: 6 Món Cột 12.\r\n+ Bộ 6 món bao gồm:\r\n‣ 1 Đoản dài: 207*62cm\r\n‣ 2 Ghế: 87*62cm\r\n‣ 1 Bàn: 81*147cm\r\n‣ 1 đôn kẹp: 62*45cm\r\n‣ 1 đôn ngồi: 45*45cm', NULL, NULL, 1, 1, '2023-02-15 13:11:45', NULL),
(8, 'BSLG5', 'Bộ Bàn Ghế Gỗ Hương Đá 5 Món Siêu Đẹp', 'images\\ban-ghe-go\\7.jpg', 36000000, NULL, NULL, 'D240 - R170 - C110 cm', 'Gỗ gõ đỏ', 'Màu tự nhiên', 'Sản phẩm gồm 6 món:\r\n- 1 đoản dài\r\n- 2 ghế đơn\r\n- 2 đôn\r\n- 1 bàn trà', NULL, NULL, 1, 1, '2023-02-15 13:12:36', NULL),
(9, 'BSFG4', 'Bộ Sofa Góc L Gỗ Hương Đá 4 Món Phong Cách Hiện Đại', 'images\\ban-ghe-go\\2.jpg', 35000000, NULL, NULL, 'D230 - R200 - C85 cm', 'Gỗ hương đá', 'Màu tự nhiên', 'Bộ Sofa 4 Món gồm:\r\n- 1 Ghế L: 230cm x 200cm\r\n- 1 Bàn trà: 130cm x 65cm\r\n- 2 Đôn: 40cm x 40cm', NULL, NULL, 1, 2, '2023-02-15 13:13:15', NULL),
(10, 'BSFG5', 'Bộ Sofa Gỗ Sồi Nga Tay Hộp 5 Món ', 'images\\ban-ghe-go\\8.jpg', 10255000, NULL, NULL, 'D270 - R250 - C80 cm', 'Gỗ Sồi Nga', 'Màu tự nhiên', 'Bộ sofa gỗ sồi nga 5 món gồm:\r\n- 2 ghế dài\r\n- 1 ghế đơn\r\n- 1 đôn\r\n- 1 bàn trà', NULL, NULL, 1, 2, '2023-02-15 13:14:20', NULL),
(11, 'BSFG5', 'Bộ Sofa Gỗ Sồi Nâu Óc Chó Tay Hộp 4 Món Phong Cách Hiện Đại', 'images\\ban-ghe-go\\13.jpg', 16255000, NULL, NULL, 'D230 - R180 - C110 cm', 'Gỗ sồi ', 'Màu nâu óc chó', 'Bộ sofa gỗ sồi 4 món gồm:\r\n- 1 ghế băng dài 3 chỗ\r\n- 1 ghế băng dài 2 chỗ\r\n- 1 ghế đôn\r\n- 1 bàn trà', NULL, NULL, 1, 2, '2023-02-15 13:15:20', NULL),
(12, 'BBHG1', 'Bộ Bàn Họp Gỗ MDF Cao Cấp Ghế Bọc Da Màu Kem Trang Trọng', 'images\\ban-ghe-go\\21.jpg', 43550000, NULL, NULL, 'D450 - R360 - C95 cm', 'Gỗ MDF chống xước, chống nước cao cấp', 'Màu nâu cánh gián', '- Bộ bàn họp chữ nhật gỗ MDF cao cấp\r\n- Ghế bọc da xịn màu kem tôn vẻ lịch sự, trang trọng ', NULL, NULL, 1, 4, '2023-02-15 13:16:18', NULL),
(13, 'BBAG1', 'Bàn Ăn Tròn Mặt Xoay Gỗ Sồi 10 Ghế', 'images\\ban-an\\bộ bàn ăn 1m6-10 ghế 9tr500.jpg', 9500000, NULL, NULL, 'R130 - H100 cm', 'Gỗ sồi', 'Màu nâu ong', NULL, NULL, NULL, 2, 6, '2023-02-15 13:17:26', NULL),
(14, 'BBAG2', 'Bàn Ăn Mặt Đá Trắng Vân 6 Ghế Bọc Nệm Vải Phong Cách Hiện Đạ', 'images\\ban-an\\Ban mat da trang van 6 ghe boc nem vai.jpg', 6500000, NULL, NULL, 'D160 - R75 - C75 cm', 'Gỗ sồi, Mặt đá, Bọc nệm vải', 'Màu nâu óc chó', 'Bộ bàn ăn phong cách hiện đại 6 ghế: <br>\r\n- Khung gỗ sồi màu nâu óc chó <br>\r\n- Mặt bàn đá vân trắng <br>\r\n- Ghế bọc nệm vải màu xanh navi', NULL, NULL, 2, 5, '2023-02-15 13:18:15', NULL),
(15, 'BBAG3', 'Bàn Ăn Mặt Đá Grace Bọc Da 6 Ghế', 'images\\ban-an\\bàn ăn đá ghế grace 8tr.jpg', 8000000, NULL, NULL, 'D160 - R85 - C85 cm', 'Gỗ sồi, Mặt đá grace, Bọc da', 'Màu nâu óc chó', 'Bộ bàn ăn phong cách hiện đại 6 ghế:\r\n- Khung gỗ sồi màu nâu óc chó\r\n- Mặt bàn đá grace\r\n- Ghế bọc da màu xanh xám', NULL, NULL, 2, 5, '2023-02-15 13:19:37', NULL),
(16, 'BBAG4', 'Bàn Ăn Mặt Đá Vân Hiện Đại 6 Ghế Bọc Da Nâu Mật', 'images\\ban-an\\nâu.jpg', 4500000, NULL, NULL, 'D160 - R85 - C85 cm', 'Gỗ sồi, Mặt đá, Bọc da', 'Màu nâu óc chó', 'Bộ bàn ăn phong cách hiện đại 6 ghế:\r\n- Khung gỗ sồi màu nâu óc chó\r\n- Mặt bàn đá grace\r\n- Ghế bọc da màu nâu mật', NULL, NULL, 2, 5, '2023-02-15 13:20:05', NULL),
(17, 'BBAG5', 'Bàn Ăn Chữ Nhật Gỗ Xoan Mặt Kính Chữ Thập 8 Ghế', 'images\\ban-an\\gỗ sồi kt 180x90 8 ghế 6tr5.jpg', 4550000, NULL, NULL, 'D160 - R80 - C95 cm', 'Gỗ xoan', 'Màu tự nhiên', '', NULL, NULL, 2, 6, '2023-02-15 13:21:46', NULL),
(18, 'BBAG6', 'Bộ Bàn Ăn Mặt Đá Lọt Gỗ Sồi Nga Hiện Đại', 'images\\ban-an\\kt bàn 160-80 6 ghế  gỗ sồi 7tr500.jpg', 7500000, NULL, NULL, 'D160 - R80 -C95 cm', 'Gỗ sồi nga', '- Màu nâu óc chó\r\n- Mặt đá màu đen', '', NULL, NULL, 2, 5, '2023-02-15 13:22:14', NULL),
(19, 'BBAG7', 'Bộ Bàn Ăn Chữ Nhật Gỗ Sồi Mặt Đá Vân Lọt Tặng Kính Chống Nướ', 'images\\ban-an\\TN gỗ sồi mặt đá và có kính chống xước 160-80 6 ghế 8tr.jpg', 8000000, NULL, NULL, 'D160 - R80 - C95 cm', 'Gỗ sồi nga', '<br> - Màu nâu óc chó <br>\r\n- Mặt đá giả vân nổi 3D', '', NULL, NULL, 2, 5, '2023-02-15 13:23:28', NULL),
(20, 'BBAG8', 'Bàn Ăn Mặt Elip Trần Gỗ Hương Siêu Đẹp', 'images\\ban-an\\bộ 1m-2m 8 ghế  22tr.jpg', 22000000, NULL, NULL, 'D180 - R90 - C100 cm', 'Gỗ hương', 'Màu tự nhiên', '', NULL, NULL, 2, 6, '2023-02-15 13:24:37', NULL),
(21, 'BBAG9', 'Bộ Bàn Ăn Mặt Đá Phù Hợp Với Chung Cư Nhỏ 4 Ghế', 'images\\ban-an\\hd1.jpg', 3500000, NULL, NULL, 'D110 - R75 - C75 cm', 'Gỗ sồi mỹ, Mặt đá vân trắng, Ghế bọc da', 'Màu tự nhiên', 'Bộ bàn ăn phong cách hiện đại 4 ghế:\r\n- Khung gỗ sồi màu mộc tự nhiên\r\n- Mặt bàn đá vân trắng\r\n- Ghế bọc da màu xám tro', NULL, NULL, 2, 5, '2023-02-15 13:25:13', NULL),
(22, 'BBAG10', 'Bộ Bàn Ăn Chân Trụ Mặt Đá Trắng Ghế Bọc Vải Nhung 6 Ghế', 'images\\ban-an\\hd4.jpg', 9550000, NULL, NULL, 'D180 - R85 - C80 cm', 'Gỗ sồi mỹ, Mặt đá, Bọc vải nhung', 'Màu tự nhiên', 'Bộ bàn ăn phong cách hiện đại 6 ghế: <br>\r\n- Khung gỗ sồi mỹ màu mộc tự nhiên <br>\r\n- Mặt bàn đá trắng <br>\r\n- Ghế bọc da màu nâu', NULL, NULL, 2, 5, '2023-02-15 13:26:32', NULL),
(23, 'BBAG11', 'Bộ Bàn Ăn Mặt Đá Tròn Ceramic Hiện Đại 6 Ghế', 'images\\ban-an\\hd3.jpg', 4500000, NULL, NULL, 'R80 - H75 cm', 'Gỗ sồi, Mặt đá, Bọc da', 'Màu óc chó', 'Bộ bàn ăn phong cách hiện đại 6 ghế:\r\n- Khung gỗ sồi màu nâu óc chó\r\n- Mặt bàn đá ceramic\r\n- Ghế bọc da màu nâu sáng', NULL, NULL, 2, 5, '2023-02-15 13:27:09', NULL),
(24, 'BBAG12', 'Bộ Bàn Ăn Chữ Nhật 6 Ghế Phong Cách Hiện Đại', 'images\\ban-an\\hd2.jpg', 5500000, NULL, NULL, 'D180 - R75 - C80 cm', 'Gỗ sồi', 'Màu óc chó', 'Bộ bàn ăn phong cách hiện đại 6 ghế: <br>\r\n- Khung gỗ sồi màu nâu óc chó <br>\r\n- Mặt bàn đá trắng <br/>\r\n- Ghế bọc da màu nâu sáng', NULL, NULL, 2, 5, '2023-02-15 13:28:34', NULL),
(25, 'GNGTN1', 'Giường Ngủ Gỗ Óc Chó Đầu Bọc Nệm Siêu Đẹp', 'images\\giuong-ngu\\7.jpg', 8550000, NULL, NULL, 'D200 - R180 cm', 'Gỗ óc chó', 'Màu nâu óc chó', NULL, NULL, NULL, 3, 10, '2023-02-15 13:30:17', NULL),
(26, 'GNGTN2', 'Giường Ngủ Gỗ Sồi Đầu Bọc Nệm Tân Cổ Điển', 'images\\giuong-ngu\\9.jpg', 9500000, NULL, NULL, 'D200 - R180 cm', 'Gỗ sồi', 'Nâu óc chó', NULL, NULL, NULL, 3, 10, '2023-02-15 13:31:27', NULL),
(27, 'GNGCN1', 'Giường Ngủ Gỗ MDF Lõi Xanh Bọc Nệm Phong Cách Hiện Đại', 'images\\giuong-ngu\\2.jpg', 5450000, NULL, NULL, 'D220 -R200 cm', 'Gỗ MDF lõi xanh', 'Màu nâu óc chó', 'Chất liệu làm giường được hoàn thiện từ gỗ MDF lõi xanh chống ẩm, mặt phủ melamine chống trầy màu óc chó cực bền. Tuổi thọ cao, khả năng chống trầy xước, chống bay và phai màu cực tốt. Giữ cho sản phẩm luôn được bền đẹp theo năm tháng.', NULL, NULL, 3, 11, '2023-02-15 13:32:18', NULL),
(28, 'GNGCN2', 'Giường Ngủ MDF Tân Cổ Điển Đục Cánh Tiên ', 'images\\giuong-ngu\\5.jpg', 6200000, NULL, NULL, 'D220 - R200 cm', 'Gỗ MDF thái lõi xanh', 'Màu trắng', '', NULL, NULL, 3, 11, '2023-02-15 13:33:26', NULL),
(29, 'GNGCN3', 'Giường Ngủ MDF Vân Sồi Sọc Trắng Phong Cách Hiện Đại', 'images\\giuong-ngu\\1.jpg', 4850000, NULL, NULL, 'D220 - R200 cm', 'Gỗ MDF lõi xanh', 'Màu nâu óc chó', '', NULL, NULL, 3, 11, '2023-02-15 13:34:57', NULL),
(30, 'GNGCN4', 'Giường Ngủ MDF Vân Veneer Sọc Trắng Đẹp Rẻ', 'images\\giuong-ngu\\4.jpg', 4350000, NULL, NULL, 'D200 - R180 cm', 'Gỗ MDF lõi xanh', 'Màu nâu sáng', '', NULL, NULL, 3, 11, '2023-02-15 13:35:27', NULL),
(31, 'GNGTN3', 'Giường Ngủ Gỗ Óc Chó Phong Cách Tối Giản', 'images\\giuong-ngu\\10.jpg', 8750000, NULL, NULL, 'D200 - R180 cm', 'Gỗ óc chó', 'Màu nâu óc chó', '', NULL, NULL, 3, 10, '2023-02-15 13:36:52', NULL),
(32, 'GNGTN4', 'Giường Ngủ Gỗ Xà Cừ Vạt Phản Đẹp ', 'images\\giuong-ngu\\8.jpg', 5800000, NULL, NULL, 'D200 - R180 cm', 'Gỗ xà cừ', 'Màu tự nhiên', '', NULL, NULL, 3, 10, '2023-02-15 13:37:09', NULL),
(33, 'GNGTN5', 'Giường Ngủ Gỗ Xoan Đào Giát Phản ', 'images\\giuong-ngu\\6.jpg', 7680000, NULL, NULL, 'D180 - R160 cm', 'Gỗ xoan đào', 'Màu tự nhiên', '', NULL, NULL, 3, 10, '2023-02-15 13:38:17', NULL),
(34, 'BTTU1', 'Bàn Thờ Treo Tường Gỗ Sồi Phong Cách Hiện Đại', 'images\\phong-tho\\8.jpg', 1650000, NULL, NULL, 'D89 - R48 cm', 'Gỗ sồi', 'Màu nâu óc chó', NULL, NULL, NULL, 8, 24, '2023-02-15 13:40:05', NULL),
(35, 'BTTU2', 'Bàn Thờ Treo Tường Gỗ Sồi Nga Chân Chữ Thọ', 'images\\phong-tho\\9.jpg', 1400000, NULL, NULL, 'D61 - R48 cm', 'Gỗ sồi nga', 'Màu tự nhiên', NULL, NULL, NULL, 8, 24, '2023-02-15 13:41:25', NULL),
(36, 'TTG1', 'Tủ Thờ Gỗ Gõ Đỏ Chạm Trổ Tam Đa Hạc Tứ Linh', 'images\\phong-tho\\16.jpg', 13450000, NULL, NULL, 'D153 - R81 - C127 cm', 'Gỗ gõ đỏ', 'Màu tự nhiên', NULL, NULL, NULL, 8, 21, '2023-02-15 13:42:07', NULL),
(37, 'AGG1', 'Án Gian Gỗ Sồi Chạm Sen Siêu Đẹp', 'images\\phong-tho\\15.jpg', 12350000, NULL, NULL, 'D210 - R61 - C127 cm', 'Gỗ sồi', 'Màu nâu óc chó', NULL, NULL, NULL, 8, 22, '2023-02-15 13:43:26', NULL),
(38, 'STG1', 'Sập Thờ Gỗ Gõ Đỏ Chạm Rồng Nổi Chân Và Bàn Cơm Mẫu Chân 24', 'images\\phong-tho\\1.jpg', 42350000, NULL, NULL, 'D217 - R107 - C127 cm', 'Gỗ gõ đỏ', 'Màu tự nhiên', NULL, NULL, NULL, 8, 23, '2023-02-15 13:44:49', NULL),
(39, 'STG2', 'Sập Thờ Gỗ Gõ Đỏ Và Bàn Phụ Chạm Rồng Công Phu Chân 26', 'images\\phong-tho\\1.jpg', 56455000, NULL, NULL, 'D175 - R81 - C127 cm', 'Gỗ gõ đỏ', 'Màu tự nhiên', NULL, NULL, NULL, 8, 23, '2023-02-15 13:45:13', NULL),
(40, 'STG3', 'Sập Thờ Tứ Linh Gỗ Gõ Đỏ, Bàn Phụ Và Bộ Hoành Phi Câu Đối', 'images\\phong-tho\\3.jpg', 98000000, NULL, NULL, 'D217 - R107 - C127 cm', 'Gỗ gõ đỏ', 'Màu tự nhiên', 'SẬP THỜ CHẠM TAY 100% GỖ GÕ ĐỎ CAO CẤP CHÂN 24\r\n- Kích thước sập lớn: D127 - R107 - C127 cm\r\n- Kích thước bàn phụ: D97 - R67 - 67 cm', NULL, NULL, 8, 23, '2023-02-15 13:46:40', NULL),
(41, 'STG4', 'Bộ Sập Thờ Và Bàn Cơm Gỗ Gụ Chạm Rồng Chân 26', 'images\\phong-tho\\6.jpg', 35750000, NULL, NULL, 'D217 - R107 - C127 cm', 'Gỗ gụ', 'Màu tự nhiên', '', NULL, NULL, 8, 23, '2023-02-15 13:47:05', NULL),
(42, 'STG5', 'Sập Thờ Gỗ Hương Đỏ Và Bàn Phụ Dát Vàng Chân 24 Siêu Vip', 'images\\phong-tho\\14.jpg', 68000000, NULL, NULL, 'D217 - R107 - C127 cm', '', 'Màu tự nhiên', NULL, NULL, NULL, 8, 23, '2023-02-15 13:48:14', NULL),
(43, 'PFT1', 'Bộ Bàn Ăn Mặt Tròn Xoay 8 Ghế Phong Cách Hiện Đại', 'images\\feature-product\\1.png', 15850000, NULL, 14265000, 'R80 - H75 cm', 'Gỗ sồi', 'Màu nâu óc chó', 'Bộ bàn ăn tròn 8 ghế phong cách hiện đại: <br>\r\n- Khung gỗ sồi màu nâu óc chó <br>\r\n- Mặt bàn đá ceramic bo viền inox mạ PVD vàng cao cấp <br>\r\n- Ghế bọc da màu kem cao cấp', b'1', NULL, NULL, NULL, NULL, NULL),
(44, 'PFT2', 'Bộ Bàn Ăn Mặt Đá Tròn Xoay Chân Nón 6 Ghế Sang Trọng', 'images\\feature-product\\2.png', 14100000, NULL, 12972000, 'R65 - H75 cm', 'Gỗ mun', 'Màu tự nhiên', 'Bộ bàn ăn mặt đá tròn chân nón 6 Ghế <br>\r\n- Khung gỗ mun màu tự nhiên <br>\r\n- Mặt bàn tròn xoay được làm bằng đá Ceramic cao cấp chống ố, chống nước <br>\r\n- Chân bàn hình nón được trang trí bằng 2 ốp viền inox mạ PVD vàng cao cấp', b'1', NULL, NULL, NULL, '2023-02-15 13:49:15', NULL),
(45, 'PFT3', 'Bộ Bàn Ăn Gỗ Sồi Chân Vát Chéo Phong Cách Hiện Đại 6 Ghế', 'images\\feature-product\\3.jpg', 9560000, NULL, 9273200, 'D180 - R85 - C95 cm', 'Gỗ sồi', 'Màu nâu óc chó', '', b'1', NULL, NULL, NULL, '2023-02-15 13:50:07', NULL),
(46, 'PFT4', 'Giường Ngủ Gỗ Sồi Đầu Bọc Nệm Tân Cổ Điển', 'images\\feature-product\\4.png', 9500000, NULL, 9025000, 'D200 - R180 cm', 'Gỗ sồi', 'Màu nâu óc chó', NULL, b'1', NULL, NULL, NULL, '2023-02-15 13:51:16', NULL),
(47, 'PFT5', 'Bộ Sofa Chân Quỳ Gỗ Hương Đá Đóng Hộp 5 Món', 'images\\feature-product\\5.jpg', 36000000, NULL, 31680000, 'D280 - R210 - C72 cm', 'Gỗ hương đá', 'Màu tự nhiên', 'Bộ sofa gồm 5 món: <br>\r\n- 1 ghế đôi: D180 - R81 - C72 cm <br>\r\n- 1 ghế băng dài: D280 - R81 - C72 cm <br>\r\n- 1 bàn lớn: D157 - R75 - C48 cm <br>\r\n- 2 ghế phụ: D127 - R55 - C42 cm <br>\r\nChất liệu: gỗ hương đá tự nhiên nhập khẩu từ Nam Phi với ưu điểm tốt về độ bền, tính chống mối mọt tự nhiên tốt, khả năng chịu lực tốt, rất thích hợp với khí hậu nóng ẩm tại Việt Nam.', b'1', NULL, NULL, NULL, '2023-02-15 13:52:27', NULL),
(48, 'PFT6', 'Bộ Sofa Góc L Gỗ Sồi Màu Nâu Óc Chó 3 Món Bọc Da Cao Cấp', 'images\\feature-product\\6.png', 8550000, NULL, 7524000, 'D320 - R180 - C100 cm', 'Gỗ sồi', 'Màu nâu óc chó', '', b'1', NULL, NULL, NULL, '2023-02-15 13:53:05', NULL),
(49, 'PFT7', 'Bộ Bàn Ghế Hoàng Gia Gỗ Hướng Đá 6 Món Chạm Khắc Công Phu', 'images\\feature-product\\7.jpg', 75000000, NULL, 63750000, 'D260 - R165 - C147 cm', 'Gỗ hương đá nam phi loại 1', 'Màu sắc tự nhiên', 'Bộ Bàn Ghế Hoàng Gia Gỗ Hướng Đá 6 Món Chạm Khắc Công Phu <br>\r\n- Chương liền toàn bộ, chạm đục điêu nghệ <br>\r\n- Bộ bàn ghế gồm 6 món: 1 đoản dài, 2 ghế đơn, 2 đôn và 1 bàn trà <br>\r\n- Kích thước chi tiết sản phẩm: <br>\r\n+ Bàn: Dài 140cm, Ngang 40cm <br>\r\n+ Đoản: Sâu 63cm, Cao 147cm, Dài 260cm <br>\r\n+ Ghế đơn: Sâu 60cm, Ngang 103cm, Cao 135cm <br>\r\n+ Đôn cao: 40*70cm <br>\r\n+ Đôn thấp: 40*40cm', b'1', NULL, NULL, NULL, '2023-02-15 13:54:17', NULL),
(50, 'PFT8', 'Sập Thờ Gỗ Hương Đỏ Và Bàn Phụ Dát Vàng Chân 24 Siêu Vip', 'images\\feature-product\\8.jpg', 68000000, NULL, 62560000, 'D217 - R107 - C127 cm', 'Gỗ hương đỏ dát vàng', '', '', b'1', NULL, NULL, NULL, '2023-02-15 13:55:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id_sp` int(11) NOT NULL,
  `fullname` text CHARACTER SET utf8 NOT NULL,
  `phone` int(20) NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `comments` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id_sp`, `fullname`, `phone`, `email`, `comments`) VALUES
(1, 'Lê Thị Hồng Nhung', 364670166, 'nhunglee.221@gmail.com', 'tôi có ý kiến'),
(2, 'Lê Thị Hồng Nhung', 34255855, 'nhunglee.221@gmail.com', 'tôi có ý kiến'),
(3, 'Lê Thị Hồng Nhung', 34255855, 'nhunglee.221@gmail.com', 'tôi có ý kiến'),
(4, 'Lê Thị Hồng Nhung', 34255855, 'nhunglee.221@gmail.com', 'tôi có ý kiến'),
(5, 'lê thị hồng nhung', 34255855, 'nhunglee.221@gmail.com', 'tôi có ý kiến cần hỗ trợ'),
(6, 'Lê Thị Hồng Nhung', 364670166, 'lethihongnhungpit951@ecorp.edu', 'tôi có ý kiến '),
(18, 'Nhung', 0, 'nhunglee.221@gmail.com', 'Tôi có ý kiến'),
(20, 'Lê Thị Hồng Nhung', 364670166, 'nhunglee.221@gmail.com', 'Tôi có ý kiến'),
(21, 'Lê Thị Hồng Nhung', 364670166, 'nhunglee.221@gmail.com', 'Tôi cần hỗ trợ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobanan`
--
ALTER TABLE `bobanan`
  ADD PRIMARY KEY (`id_bobanan`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `images_product`
--
ALTER TABLE `images_product`
  ADD PRIMARY KEY (`id_images`),
  ADD KEY `images_fk_id_product` (`id_product`);

--
-- Indexes for table `list_product`
--
ALTER TABLE `list_product`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `list_fk_id category` (`id_cate`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `orders fk id_customer` (`id_customer`),
  ADD KEY `order fk id_payment_type` (`id_payment_type`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail fk id_product` (`id_product`),
  ADD KEY `order_detail fk id_order` (`id_order`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id_payment_type`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_fk_id_category` (`id_cate`),
  ADD KEY `product_fk_id_list` (`id_list`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobanan`
--
ALTER TABLE `bobanan`
  MODIFY `id_bobanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images_product`
--
ALTER TABLE `images_product`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_product`
--
ALTER TABLE `list_product`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id_payment_type` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hình thức thanh toán', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images_product`
--
ALTER TABLE `images_product`
  ADD CONSTRAINT `images_fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `list_product`
--
ALTER TABLE `list_product`
  ADD CONSTRAINT `list_fk_id category` FOREIGN KEY (`id_cate`) REFERENCES `category_product` (`id_cate`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order fk id_payment_type` FOREIGN KEY (`id_payment_type`) REFERENCES `payment_types` (`id_payment_type`),
  ADD CONSTRAINT `orders fk id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail fk id_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail fk id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_fk_id_category` FOREIGN KEY (`id_cate`) REFERENCES `category_product` (`id_cate`),
  ADD CONSTRAINT `product_fk_id_list` FOREIGN KEY (`id_list`) REFERENCES `list_product` (`id_list`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
