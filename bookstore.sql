-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2020 lúc 11:41 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `email`, `phone`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Duy', 'duyspecter@gmail.com', '0376433527');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `pub_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `description`, `price`, `img`, `status`, `pub_id`, `cat_id`) VALUES
('td02', 'Từ Điển Kinh Doanh Và Tiếp Thị Hiện Đại', '<p>Quyển s&aacute;ch &ldquo;Từ điển Kinh doanh &ndash; Tiếp thị Hiện đại&rdquo; (Modern Business &amp; Marketing Dictionary) của t&aacute;c giả Cung Kim Tiến (B&uacute;t danh Anh Tuấn) tr&igrave;nh b&agrave;y c&aacute;c thuật ngữ đang sử dụng thịnh h&agrave;nh trong giao dịch kinh doanh v&agrave; tiếp thị trong nước v&agrave; quốc tế. Đặc điểm của quyển s&aacute;ch l&agrave; c&aacute;c thuật ngữ được đặt trong c&aacute;c bối cảnh kh&aacute;c nhau, bằng c&aacute;ch dẫn c&aacute;c đoạn văn xuất hiện trong thực tiễn kinh doanh quốc tế, gi&uacute;p bạn đọc hiểu r&otilde; được &yacute; nghĩa v&agrave; c&aacute;ch sử dụng trong thực tiễn của c&aacute;c thuật ngữ chuy&ecirc;n biệt n&agrave;y, với c&aacute;c nội dung th&uacute; vị kh&aacute;c nhau. T&aacute;c giả đ&atilde; chọn lọc một c&aacute;ch c&ocirc;ng phu c&aacute;c đoạn văn đa dạng v&agrave; phong ph&uacute;, xuất hiện tr&ecirc;n c&aacute;c ấn phẩm quốc tế kh&aacute;c nhau, gi&uacute;p độc giả c&oacute; cơ hội thuận lợi trong giao tiếp, soạn thảo, hoặc tham gia c&aacute;c buổi họp li&ecirc;n quan đến kinh doanh, đảm nhiệm c&aacute;c nhiệm vụ về kinh doanh, quản l&yacute; v&agrave; tiếp thị trong c&aacute;c doanh nghiệp. Quyển s&aacute;ch n&agrave;y được kỳ vọng sẽ trợ gi&uacute;p hiệu quả để bạn đọc tiếp cận một lĩnh vực tri thức kinh doanh bằng Anh ngữ, l&agrave; bạn đồng h&agrave;nh tr&ecirc;n con đường sự nghiệp trong thời kỳ quốc tế h&oacute;a.</p>', 195000, '1724b418b9.gif', 1, 'vhtt', 'td'),
('td03', 'Đại Từ Điển Tiếng Việt (Bản mới 2010)', '<p>Th&ecirc;m y&ecirc;u tiếng Việt Từ l&acirc;u ch&uacute;ng ta đ&atilde; c&oacute; nhiều c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu về kho t&agrave;ng tiếng Việt, thế nhưng &ldquo;Đại từ điển tiếng Việt&rdquo; (NXB Đại học Quốc gia TPHCM - Nguyễn Như &Yacute; chủ bi&ecirc;n) vừa ra mắt bạn đọc l&agrave; c&ocirc;ng tr&igrave;nh đầy đặn v&agrave; đồ sộ nhất. Cuốn s&aacute;ch đ&atilde; bắt nhịp cầu cho những ai y&ecirc;u tiếng mẹ&hellip; Cầm tr&ecirc;n tay cuốn Đại từ điển d&agrave;y gần 2.000 trang mới cảm nhận hết t&acirc;m huyết của những người l&agrave;m s&aacute;ch. Cuốn từ điển n&agrave;y được in lần đầu ti&ecirc;n v&agrave;o năm 1999, đến nay, đ&aacute;p ứng nhu cầu của bạn đọc, c&aacute;c t&aacute;c giả đ&atilde; tiến h&agrave;nh nghi&ecirc;n cứu, bổ sung. Trong lần t&aacute;i bản n&agrave;y, ban bi&ecirc;n soạn đ&atilde; chọn v&agrave; đưa v&agrave;o s&aacute;ch những từ ngữ mới xuất hiện v&agrave; đ&atilde; được d&ugrave;ng rộng r&atilde;i trong đời sống v&agrave; tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng nhằm l&agrave;m tăng t&iacute;nh mới mẻ v&agrave; tiện &iacute;ch cho người sử dụng. Một trong những &yacute; tưởng chinh phục người đọc l&agrave; t&iacute;nh đa dạng của Đại từ điển tiếng Việt. Bởi n&oacute; kh&ocirc;ng chỉ đơn thuần l&agrave; sự tra cứu nghĩa c&aacute;c từ m&agrave; mở ra ch&acirc;n trời kiến thức mới. Việc đan xen những kiến thức cơ bản về văn h&oacute;a, văn minh Việt Nam v&agrave; thế giới, giới thiệu tổng quan v&agrave; hệ thống c&aacute;c hiện vật văn h&oacute;a như: Đơn vị đo lường của Việt Nam v&agrave; thế giới, đồng bạc Việt xưa v&agrave; nay, c&aacute;c loại trống đồng hiện c&oacute; ở Việt Nam, quốc kỳ c&aacute;c nước tr&ecirc;n thế giới&hellip; Đ&acirc;y l&agrave; những th&ocirc;ng tin bổ &iacute;ch đ&aacute;p ứng nhu cầu bổ sung kiến thức cơ bản của học sinh - sinh vi&ecirc;n v&agrave; c&aacute;c bạn trẻ Việt Nam.</p>', 450000, '48e5678e09.jpg', 1, 'hcm', 'td'),
('td04', 'từ điển y học sức khỏe bệnh lý Anh Anh Việt', '<p>Từ điển y học - sức khỏe bệnh l&yacute; Anh Anh Việt n&agrave;y được bi&ecirc;n soạn để đ&aacute;p ứng nhu cầu t&igrave;m hiểu, tra cướu v&agrave; dịch thuật c&aacute;c tư liệu y khoa bằng tiếng anh, cũng như tăng cường kiến thức về c&aacute;c bệnh thường gặp của c&aacute;c th&agrave;nh phần độc giả trong x&atilde; hội.</p>', 380000, '60fbd6ce32.jpg', 1, 'tn', 'td'),
('td05', 'Từ Điển Anh Việt - 75000 Từ', '<p>Từ điển mới ...</p>', 50000, '1b30cc5767.jpg', 1, 'hcm', 'td'),
('td06', 'Từ điển địa danh hành chính Nam Bộ', '<p>Từ điển địa danh h&agrave;nh ch&iacute;nh Nam Bộ do t&aacute;c giả Nguyễn Đ&igrave;nh Tư bi&ecirc;n soạn hết sức c&ocirc;ng phu, tổng hợp được nhiều tư liệu qu&yacute;, l&agrave; c&ocirc;ng cụ gi&uacute;p bạn đọc tra cứu một c&aacute;ch khoa học về địa danh h&agrave;nh ch&iacute;nh. Đ&acirc;y l&agrave; cuốn s&aacute;ch c&oacute; gi&aacute; trị kh&ocirc;ng chỉ bởi n&oacute; cung cấp một lượng mục từ kh&aacute; đồ sộ, m&agrave; c&ograve;n bởi t&aacute;c giả đ&atilde; d&agrave;nh rất nhiều c&ocirc;ng sức v&agrave; t&acirc;m huyết để sưu tầm, xử l&yacute; tư liệu về v&ugrave;ng đất c&oacute; bề d&agrave;y truyền thống lịch sử, nhưng cũng c&oacute; sự thay đổi nhiều v&agrave; phức tạp nhất về địa danh h&agrave;nh ch&iacute;nh</p>', 265000, 'a1cfb54685.jpg', 1, 'hcm', 'td'),
('td07', 'Từ điển HTML', '<p>Tổng hợp nội dung về HTML cơ bản . . .</p>', 120000, '216f868bdc.jpg', 1, 'gd', 'td'),
('td08', 'Từ Điển Tiếng Đức', '<p>Tập hợp 10000 từ tiếng Đức . . .</p>', 250000, '649022bbc3.jpg', 1, 'gd', 'td'),
('th01', '100 thủ thuật với Excel 2010', '<p>100 thủ thuật ứng với 100 b&agrave;i tập thực h&agrave;nh được hướng dẫn, giải th&iacute;ch theo bố cục chặt chẽ, c&aacute;ch tr&igrave;nh b&agrave;y r&otilde; r&agrave;ng, dễ sử dụng, bạn đọc c&oacute; thể tự m&igrave;nh xử l&yacute; những vấn đề nảy sinh trong qu&aacute; tr&igrave;nh thực h&agrave;nh đồng thời gi&uacute;p c&aacute;c bạn thao t&aacute;c nhanh tr&ecirc;n bảng t&iacute;nh.</p>', 54000, '2215d48698.gif', 0, 'hcm', 'th'),
('th02', 'Lập trình web bằng PHP 5.3 và cơ sở dữ liệu', '<p>Tiếp theo tập 1, tập 2 của cuốn s&aacute;ch \"Lập tr&igrave;nh Web bằng PHP 5.3 v&agrave; cơ sở dữ liệu MySQL 5.1\" bao gồm 10 chương v&agrave; ứng dụng đ&iacute;nh k&egrave;m lần lượt giới thiệu c&ugrave;ng bạn đọc c&aacute;c kiến thức li&ecirc;n quan đến Session, Cookie, giỏ h&agrave;ng trực tuyến, t&igrave;m kiếm v&agrave; ph&acirc;n trang dữ liệu, lập tr&igrave;nh hướng đối tượng v&agrave; sử dụng Zend Framework. Chương 8 tr&igrave;nh b&agrave;y kiến thức cơ bản của kịch bản tr&igrave;nh chủ PHP v&agrave; cơ sở dữ liệu MySQL. Sang chương 9, bạn tiếp tục t&igrave;m hiểu c&aacute;ch thiết kế trang Web cho ph&eacute;p người sử dụng t&igrave;m kiếm v&agrave; ph&acirc;n trang dữ liệu tr&igrave;nh b&agrave;y với nhiều h&igrave;nh thức kh&aacute;c nhau. Để x&acirc;y dựng ứng dụng thương mại điện tử ho&agrave;n chỉnh v&agrave; mang t&iacute;nh chuy&ecirc;n nghiệp cao, bạn tiếp tục t&igrave;m hiểu c&aacute;ch sử dụng h&agrave;m Session v&agrave; Cookie trong chương 10 để lưu trữ th&ocirc;ng tin của người sử dụng nhằm v&agrave;o mục đ&iacute;ch quản l&yacute; t&agrave;i nguy&ecirc;n của Website. Mọi ứng dụng thương mại điện tử đều cung cấp chương giỏ h&agrave;ng trực tuyến, bạn cũng được t&igrave;m hiểu c&aacute;ch x&acirc;y dựng giỏ h&agrave;ng bằng c&aacute;ch sử dụng Session lẫn Cookie trong chương 11. Khi c&oacute; nhu cầu tr&igrave;nh b&agrave;y h&igrave;nh ảnh, đồ thị v&agrave; &acirc;m thanh lẫn phim ảnh, bạn t&igrave;m hiểu c&aacute;ch sử dụng m&atilde; PHP trong chương 12. Tiếp theo, bạn c&oacute; thể t&igrave;m hiểu c&uacute; ph&aacute;p của kịch bản PHP trong chương 13 v&agrave; học c&aacute;ch lập tr&igrave;nh hướng đối tượng v&agrave; sử dụng lớp n&agrave;y v&agrave;o ứng dụng trong chương 14. Chương 15 gi&uacute;p bạn sử dụng kịch bản tr&igrave;nh kh&aacute;ch Java Script để thay đổi g&oacute;c nh&igrave;n v&agrave; ứng xử của thẻ HTML trong trang Web. Sang chương 16, bạn kh&aacute;m ph&aacute; thư viện m&atilde; nguồn mở Zend viết bằng PHP d&ugrave;ng cho c&aacute;c loại cơ sở dữ liệu v&agrave; học c&aacute;ch sử dụng c&aacute;c lớp trong thư viện n&agrave;y v&agrave;o ứng dụng b&aacute;n h&agrave;ng trực tuyến trong chương 17.</p>', 76000, '8646226b29.jpg', 0, 'hcm', 'th'),
('th03', 'Lập trình web bằng PHP 5.3 và cơ sở dữ liệu MySQL 5.1 (Tập1)', '<p>Tập 1 của cuốn s&aacute;ch \"Lập tr&igrave;nh Web bằng PHP 5.3 v&agrave; cơ sở dữ liệu MySQL 5.1\" bao gồm 7 chương v&agrave; ứng dụng đ&iacute;nh k&egrave;m. Chương 1 cung cấp cho bạn kiến thức từ chức năng của Website, c&agrave;i đặt g&oacute;i WamSever 2.0 v&agrave; cấu h&igrave;nh để c&oacute; thể vận h&agrave;nh ứng dụng Web bằng PHP, MySQL v&agrave; Apache Web Sever. Sang chương 2, bạn tiếp tục t&igrave;m hiểu c&aacute;ch tạo Website v&agrave; thiết kế cấu tr&uacute;c d&ugrave;ng cho doanh nghiệp bằng hệ quản trị nội dung m&atilde; nguồn mở Joomla. Nhằm thỏa m&atilde;n nội dung tr&igrave;nh b&agrave;y, bạn tiếp tục t&igrave;m hiểu c&aacute;ch thiết kế trang Web tĩnh hay động bằng m&atilde; tự sinh PHP với phần mềm Dreamweaver CS trong chương 3 v&agrave; thẻ HTML trong chương 4. Tiếp theo, bạn c&oacute; thể t&igrave;m hiểu c&uacute; ph&aacute;p của kịch bản PHP trong chương 5 v&agrave; học c&aacute;ch sử dụng ứng dụng PhpMyAdmin để quản trị cơ sở dữ liệu MySQL trong chương 6. Sang chương 7 bạn t&igrave;m hiểu ph&aacute;t biểu SQL của cơ sở dữ liệu MySQL d&ugrave;ng để x&acirc;y dựng ứng dụng b&aacute;n h&agrave;ng trực tuyến.</p>', 76000, 'b39b21aeff.jpg', 1, 'hcm', 'th'),
('th04', 'Làm Quen Với Internet', '<p>Ng&agrave;y nay với sự ph&aacute;t triển kh&ocirc;ng ngừng của kinh tế n&oacute;i chung v&agrave; ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin n&oacute;i ri&ecirc;ng, ch&uacute;ng ta c&oacute; thể dễ d&agrave;ng tiếp x&uacute;c v&agrave; l&agrave;m quen với m&aacute;y vi t&iacute;nh. Tuy nhi&ecirc;n đ&acirc;y l&agrave; một lĩnh vực mới lại chưa được phổ cập ở mọi cấp học n&ecirc;n c&aacute;c em sẽ c&oacute; cảm gi&aacute;c bỡ ngỡ, thiếu tự tin khi lần đầu l&agrave;m quen với chiếc m&aacute;y t&iacute;nh đa năng. Mỗi b&agrave;i học trong cuốn s&aacute;ch l&agrave; một b&agrave;i thực h&agrave;nh, được thực hiện qua từng bước cơ bản với h&igrave;nh ảnh minh họa trực quan v&agrave; những lời giải th&iacute;ch chi tiết.</p>', 31000, '6e9348dbf8.jpg', 1, 'hcm', 'th'),
('th05', 'Từng Bước Làm Quen Với Máy Tính', '<p>Mục Lục: B&agrave;i 1: M&aacute;y t&iacute;nh điện tử v&agrave; hệ điều h&agrave;nh B&agrave;i 2: Hệ điều h&agrave;nh Window XP B&agrave;i 3: L&agrave;m việc với m&aacute;y t&iacute;nh qua desktop B&agrave;i 4: Tệp tin v&agrave; thư mục B&agrave;i 5: Sử dụng Window Explorer B&agrave;i 6: Một số thao t&aacute;c cần biết Phụ lục &ndash; Những tổ hợp ph&iacute;m tắt</p>', 31000, '2c06fdb2b8.jpg', 0, 'vhtt', 'th'),
('th06', 'Quản Trị Windows Server 2008 - Tập 2', '<p>Kế thừa những ưu điểm vượt trội v&agrave; sự th&agrave;nh c&ocirc;ng của Windows Server 2003 c&ugrave;ng những phi&ecirc;n bản Windows trước đ&oacute;, h&atilde;ng Microsoft tiếp tục cho ra đời một phi&ecirc;n bản hệ điều h&agrave;nh d&agrave;nh cho m&aacute;y chủ mới, Windows Server 2008. Phi&ecirc;n bản n&agrave;y đem đến cho người d&ugrave;ng sự nhanh ch&oacute;ng trong c&agrave;i đặt; sự tiện lợi trong quản trị hệ thống, tương t&aacute;c với c&aacute;c th&agrave;nh phần v&agrave; dịch vụ v&igrave; được tập trung v&agrave;i một c&ocirc;ng cụ duy nhất &ndash; Server Manager, những cải tiến đ&aacute;ng ch&uacute; &yacute; tr&ecirc;n Windows Firewall; c&ocirc;ng nghệ ảo ho&aacute;&hellip; Windows Server 2008 c&ograve;n cung cấp cho người sử dụng c&aacute;ch thức c&agrave;i đặt Server Core, bao gồm những th&agrave;nh phần cơ bản nhất của Windows Server v&agrave; giao diện d&ograve;ng lệnh. Với kiểu c&agrave;i đặt n&agrave;y, giao diện đồ hoạ quen thuộc của Windows c&ugrave;ng những dịch vụ kh&ocirc;ng cần thiết sẽ kh&ocirc;ng được c&agrave;i đặt l&ecirc;n hệ thống. Nhờ đ&oacute; n&acirc;ng cao độ bảo mật v&agrave; n&acirc;ng cấp hệ thống.</p>', 62000, '460de956de.jpg', 1, 'hcm', 'th'),
('th07', 'Kỹ Thuật Lập Trình C - Cơ Sở Và Nâng Cao', '<p>Cuốn s&aacute;ch n&agrave;y gồm những nội dung ch&iacute;nh sau: # Chương 1: C&aacute;c kh&aacute;i niệm cơ bản # Chương 2: Hằng biến v&agrave; mảng # Chương 3: Biểu thức # Chương 4: V&agrave;o ra # Chương 5: C&aacute;c to&aacute;n tử điều khiển # Chương 6: H&agrave;m v&agrave; cấu tr&uacute;c chương tr&igrave;nh # Chương 7: Cấu tr&uacute;c # Chương 8: Quản l&yacute; m&agrave;n h&igrave;nh v&agrave; cửa sổ # Chương 9: Đồ họa # Chương 10: Thao t&aacute;c tr&ecirc;n c&aacute;c tập tin # Chương 11: Lưu trữ dữ liệu v&agrave; tổ chức bộ nhớ chương tr&igrave;nh # Chương 12: C&aacute;c chỉ thị tiền xử l&yacute; # Chương 13: Sử dụng ngắt trong C # Chương 14: Truy nhập trực tiếp v&agrave;o bộ nhớ # Chương 15: H&agrave;m xử ngắt v&agrave; chương tr&igrave;nh thường tr&uacute; # Chương 16: &Acirc;m thanh, &acirc;m nhạc # Chương 17: Lập tr&igrave;nh theo thời gian, theo sự kiện v&agrave; tr&ograve; chơi # Chương 18: Giao diện giữa C v&agrave; Assembler # Phụ lục 1: Quy tắc xuống d&ograve;ng v&agrave; sử dụng c&aacute;c khoảng trống khi viết chương tr&igrave;nh # Phụ lục 2: T&oacute;m tắt c&aacute;c h&agrave;m chuẩn của Turbo C # Phụ lục 3: Bảng m&atilde; ASCII # Phụ lục 4: C&agrave;i đặt Turbo C v&agrave;o đĩa cứng # Phụ lục 5: Hướng dẫn sử dụng m&ocirc;i trường kết hợp Turbo C # Phụ lục 6: Hệ soạn thảo của Turbo C # Phụ lục 7: D&ugrave;ng menu project dịch chương tr&igrave;nh tr&ecirc;n nhiều tệp # Phụ lục 8: Dịch chương tr&igrave;nh theo chế độ d&ograve;ng lệnh TCC # Phụ lục 9: Sửa đổi c&uacute; ph&aacute;p v&agrave; gỡ rối chương tr&igrave;nh # Phụ lục 10: C&aacute;c m&ocirc; h&igrave;nh bộ nhớ # Phụ lục 11: Danh s&aacute;ch c&aacute;c h&agrave;m của Turbo C theo thứ tự ABC # Phụ lục 12: H&agrave;m với đối số bất định trong C # Phụ lục 13: Một số chương tr&igrave;nh hữu &iacute;ch</p>', 72000, '2bbd0624f0.jpg', 0, 'tn', 'th'),
('th08', 'Giáo Trình Học Nhanh SQL Server 2008 - Tập 2', '<p>Bộ s&aacute;ch &ldquo;Gi&aacute;o tr&igrave;nh học nhanh SQL Server 2008&rdquo; được bi&ecirc;n soạn d&agrave;nh cho c&aacute;c nh&agrave; ph&aacute;t triển v&agrave; c&aacute;c nh&agrave; quản trị cơ sở dữ liệu, những người đang c&ocirc;ng t&aacute;c trong lĩnh vực quản l&yacute; dữ liệu doanh nghiệp v&agrave; cho tất cả những ai quan t&acirc;m đến SQL Server 2008. Với c&aacute;ch thiết kế v&agrave; bố cục r&otilde; r&agrave;ng theo từng chủ điểm cụ thể, bộ s&aacute;ch tập trung tr&igrave;nh b&agrave;y những t&iacute;nh năng ch&iacute;nh của SQL Server 2008 nhằm mục đ&iacute;ch gi&uacute;p bạn đọc tăng cường kiến thức đồng thời n&acirc;ng cao kỹ năng sử dụng sản phẩm mới rất tuyệt vời n&agrave;y. Bộ s&aacute;ch được chia th&agrave;nh 2 tập với bốn phần ch&iacute;nh sau đ&acirc;y:</p>', 81000, '1152cf0eed.jpg', 1, 'hcm', 'th'),
('th09', '160 Vấn Đề Cần Nên Biết Khi Sử Dụng Đồ Họa Máy Vi Tính', '<p>\"160 Vấn Đề Cần N&ecirc;n Biết Khi Sử Dụng Đồ Họa M&aacute;y Vi T&iacute;nh\" bao gồm những vấn đề cơ bản v&agrave; thiết yếu m&agrave; những người đang học hay l&agrave;m đồ họa m&aacute;y vi t&iacute;nh thường quan t&acirc;m t&igrave;m hiểu nhằm l&agrave;m việc hiệu quả hơn với c&aacute;c chương tr&igrave;nh phần mềm như Photoshop, CorelDRAW v&agrave; Illustrator. S&aacute;ch gồm 3 phần, được thiết kế v&agrave; bố cục theo từng vấn đề cụ thể từ cơ bản đến chuy&ecirc;n nghiệp như t&ugrave;y biến Photoshop cho c&aacute;c dự &aacute;n m&agrave; bạn thực hiện, chỉnh sửa c&aacute;c bức ảnh ch&acirc;n dung, tạo n&ecirc;n điều kỳ diệu với những hiệu ứng số đặc biệt, tr&igrave;nh b&agrave;y h&igrave;nh ảnh một c&aacute;ch chuy&ecirc;n nghiệp, tạo c&aacute;c thiết kế v&agrave; viết lời truyện tranh trong CorelDRAW, v&agrave; &aacute;p dụng c&aacute;c hiệu ứng với Illustrator. S&aacute;ch được tr&igrave;nh b&agrave;y ngắn gọn, r&otilde; r&agrave;ng k&egrave;m h&igrave;nh ảnh minh họa. Ngo&agrave;i ra s&aacute;ch c&ograve;n bao gồm nhiều thủ thuật v&agrave; lưu &yacute; hữu &iacute;ch.</p>', 85000, 'fe4ec8b2bc.jpg', 1, 'tn', 'th'),
('th10', 'Giáo Trình Học Nhanh SQL Server 2008 - Tập 1', '<p>Bộ s&aacute;ch &ldquo;Gi&aacute;o tr&igrave;nh học nhanh SQL Server 2008&rdquo; được bi&ecirc;n soạn d&agrave;nh cho c&aacute;c nh&agrave; ph&aacute;t triển v&agrave; c&aacute;c nh&agrave; quản trị cơ sở dữ liệu, những người đang c&ocirc;ng t&aacute;c trong lĩnh vực quản l&yacute; dữ liệu doanh nghiệp v&agrave; cho tất cả những ai quan t&acirc;m đến SQL Server 2008. Với c&aacute;ch thiết kế v&agrave; bố cục r&otilde; r&agrave;ng theo từng chủ điểm cụ thể, bộ s&aacute;ch tập trung tr&igrave;nh b&agrave;y những t&iacute;nh năng ch&iacute;nh của SQL Server 2008 nhằm mục đ&iacute;ch gi&uacute;p bạn đọc tăng cường kiến thức đồng thời n&acirc;ng cao kỹ năng sử dụng sản phẩm mới rất tuyệt vời n&agrave;y.</p>', 69000, '4cfcb3e0bd.jpg', 0, 'tn', 'th'),
('th11', 'Microsoft Word 2007 - Căn Bản Và Thủ Thuật', '<p>Microsoft Word 2007 n&oacute;i ri&ecirc;ng v&agrave; Microsoft Office 2007 n&oacute;i chung c&oacute; nhiều đổi mới. Microsoft chẳng những cung cấp cho người d&ugrave;ng giao diện đẹp mắt m&agrave; c&ograve;n c&oacute; nhiều tiện &iacute;ch v&agrave; trực quan hơn so với c&aacute;c phi&ecirc;n bản trước đ&acirc;y. Thay cho thanh menu v&agrave; c&aacute;c thanh dụng cụ l&agrave; một hệ thống Ribbon bao gồm c&aacute;c thẻ, c&aacute;c nh&oacute;m, trong từng menu lại c&oacute; c&aacute;c menu phụ v&agrave; c&aacute;c lệnh. Khi bạn trỏ chuột v&agrave;o biểu tượng n&agrave;o của hệ thống n&agrave;y sẽ hiển thị ScreenTip cho biết chức năng v&agrave; c&ocirc;ng dụng của ch&uacute;ng. Chẳng những thế, Word c&ograve;n thể hiện tức thời hiệu quả của từng lệnh để bạn xem, trước khi chọn ch&uacute;ng. Trong quyển s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i tr&igrave;nh b&agrave;y t&oacute;m tắt l&yacute; thuyết căn bản về soạn thảo, chỉnh sửa, định dạng văn bản v&agrave; một số thủ thuật m&agrave; bất cứ ai l&agrave;m c&ocirc;ng t&aacute;c văn ph&ograve;ng đều phải sử dụng. Nội dung s&aacute;ch gồm 6 b&agrave;i: 1-Thủ thuật tổng qu&aacute;t, 2-Soạn thảo v&agrave; chỉnh sửa văn bản, 3-Định dạng văn bản, 4-WordArt v&agrave; xử l&yacute; h&igrave;nh ảnh, 5-Li&ecirc;n kết v&agrave; Web, 6-Bảo mật &amp; in ấn văn bản,. Từ b&agrave;i 2 đến b&agrave;i 4, trước khi tr&igrave;nh b&agrave;y thủ thuật, ch&uacute;ng t&ocirc;i t&oacute;m tắt l&yacute; thuyết giống như gi&aacute;o tr&igrave;nh Word 2007 để bạn thực h&agrave;nh</p>', 69000, 'a474eea8fc.jpg', 0, 'gd', 'th'),
('th12', 'Kế Toán Doanh Nghiệp Với ACCESS', '<p>S&aacute;ch mới...</p>', 76000, '974cfa20bc.jpg', 1, 'gd', 'th'),
('th13', 'Giáo Trình C++ & Lập Trình Hướng Đối Tượng', '<p>Cuốn s&aacute;ch gồm 12 chương v&agrave; 7 phụ lục: Chương 1 hướng dẫn c&aacute;ch l&agrave;m việc với phần mềm TC++ 3.0 để thử nghiệm c&aacute;c chương tr&igrave;nh, tr&igrave;nh b&agrave;y sơ lược về c&aacute;c phương ph&aacute;p lập tr&igrave;nh v&agrave; giới thiệu một số mở rộng đơn giản của C. Chương 2 tr&igrave;nh b&agrave;y c&aacute;c khả năng mới trong việc x&acirc;y dựng v&agrave; sử dụng h&agrave;m trong C++ như biến tham chiếu, đối c&oacute; kiểu tham chiếu, đối c&oacute; gi&aacute; trị mặc định, h&agrave;m trực tuyến, h&agrave;m tr&ugrave;ng t&ecirc;n, h&agrave;m to&aacute;n tử. Chương 3 n&oacute;i về một kh&aacute;i niệm trung t&acirc;m của lập tr&igrave;nh hướng đối tượng l&agrave; lớp gồm: Định nghĩa lớp, khai b&aacute;o c&aacute;c biến, mảng đối tượng ( kiểu lớp ), phương ph&aacute;p, d&ugrave;ng con trỏ this trong phương thức, phạm vi truy xuất của c&aacute;c th&agrave;nh phần, c&aacute;c phương thức to&aacute;n tử. Chương 4 tr&igrave;nh b&agrave;y c&aacute;c vấn đề tạo dựng, sao ch&eacute;p, huỷ bỏ c&aacute;c đối tượng v&agrave; c&aacute;c vấn đề kh&aacute;c c&oacute; li&ecirc;n quan như: H&agrave;m tạo, h&agrave;m tạo sao ch&eacute;p, h&agrave;m huỷ, to&aacute;n tử g&aacute;n, cấp ph&aacute;t bộ nhớ cho đối tượng, h&agrave;m bạn, lớp bạn. Chương 5 tr&igrave;nh b&agrave;y một kh&aacute;i niệm quan trong tạo n&ecirc;n khả năng mạnh của lập tr&igrave;nh hướng đối tượng trong việc ph&aacute;t triển, mở rộng phầm mềm, đ&oacute; l&agrave; khả năng thừa kế củaw c&aacute;c lớp. Chương 6 tr&igrave;nh b&agrave;y một kh&aacute;i niệm quan trọng kh&aacute;c cho ph&eacute;p xử l&yacute; c&aacute;c vấn đề kh&aacute;c nhau, c&aacute;c thực thể kh&aacute;c nhau, c&aacute;c thuật to&aacute;n kh&aacute;c nhau theo c&ugrave;ng một lược đồ thống nhất, đ&oacute; l&agrave; t&iacute;nh tướng ứng bội v&agrave; phương thức ảo. C&aacute;c c&ocirc;ng cụ n&agrave;y cho ph&eacute;p dễ d&agrave;ng tổ chức chương tr&igrave;nh quản l&yacute; nhiều dạng đối tượng kh&aacute;c nhau. Chương 7 tr&igrave;nh b&agrave;y c&aacute;c thao t&aacute;c tr&ecirc;n tệp như: tạo một tệp mới, ghi dữ liệu từ bộ nhớ l&ecirc;n tệp, đọc dữ liệu từ tệp v&agrave;o bộ nhớ... Chương 8 n&oacute;i về việc tổ chức v&agrave;o/ ra trong C++.C++ đưa v&agrave;o một kh&aacute;i niệm mới gọi l&agrave; c&aacute;c d&ograve;ng tin ( Stream ), C&aacute;c thao t&aacute;c v&agrave;o/ra sẽ thực hiện trao đổi dữ liệu giữa c&aacute;c bộ nhớ với d&ograve;ng tin: V&agrave;o l&agrave; chuyển dữ liệu từ d&ograve;ng nhập v&agrave;o bộ nhớ, ra l&agrave; chuyển dữ liệu từ bộ nhớ l&ecirc;n d&ograve;ng xuất. Để nhập xuất dữ liệu tr&ecirc;n một thiết bị cụ thể n&agrave;o, ta chỉ cần gắn d&ograve;ng nhập xuất với thiết bị đ&oacute;. Việc tổ chức v&agrave;o ra theo c&aacute;ch như vậy l&agrave; rất khoa học v&agrave; tiện lợi v&igrave; n&oacute; c&oacute; t&iacute;nh độc lập thiết bị. Chương 9 tr&igrave;nh b&agrave;y c&aacute;c h&agrave;m đồ hoạ sử dụng trong C v&agrave; C++. C&aacute;c h&agrave;m n&agrave;y được sử dụng rải r&aacute;c trong to&agrave;n bộ cuốn s&aacute;ch để x&acirc;y dựng c&aacute;c đối tượng đồ hoạ. Chương 10 tr&igrave;nh b&agrave;y c&aacute;c h&agrave;m truy xuất trực tiếp v&agrave;o bộ nhớ của m&aacute;y t&iacute;nh, trong đ&oacute; c&oacute; bộ nhớ m&agrave;n h&igrave;nh. C&aacute;c h&agrave;m n&agrave;y sẽ được sử dụng trong chương 11 để x&acirc;y dựng c&aacute;c lớp menu v&agrave; cửa sổ. Chương 11 giới thiệu 5 chương tr&igrave;nh tương đối ho&agrave;n chỉnh nhằm minh hoạ th&ecirc;m khả năng v&agrave; kỹ thuật lập tr&igrave;nh hướng đối tượng tr&ecirc;n C++. Chương 12 tr&igrave;nh b&agrave;y th&ecirc;m một số chương tr&igrave;nh đối tượng tr&ecirc;n C++. Đ&acirc;y l&agrave; c&aacute;c chương tr&igrave;nh tương đối phức tạp, hữu &iacute;ch v&agrave; sử dụng c&aacute;c c&ocirc;ng cụ mạnh của C++.</p>', 78000, '4e00059291.gif', 1, 'gd', 'th'),
('th14', 'Các Thủ Thuật Trong HTML Và Thiết Kế Web', '<p>Cuốn s&aacute;ch n&agrave;y sẽ cung cấp c&aacute;c th&ocirc;ng tin cần thiết để đẩy nhanh tốc độ thiết kế Web th&ocirc;ng qua việc thực h&agrave;nh với c&aacute;c mẫu của nhiều chuy&ecirc;n gia thiết kế Web. Cuốn s&aacute;ch tập trung v&agrave;o c&aacute;c chi tiết để tạo ra c&aacute;c Web site tốt th&ocirc;ng qua nhiều c&aacute;ch tiếp cận hiện đại để giải quyết c&aacute;c th&aacute;ch thức li&ecirc;n quan đến việc tạo Web site. Thay v&igrave; đi v&agrave;o từng ng&ocirc;n ngữ v&agrave; c&ocirc;ng nghệ cụ thể, c&aacute;c b&agrave;i học trong cuốn s&aacute;ch n&agrave;y được ph&acirc;n chia th&agrave;nh c&aacute;c \"thủ thuật\" nhằm gi&uacute;p bạn: # Ngay lập tức cải thiện được Web site của m&igrave;nh # X&acirc;y dựng Web site mới thật sinh động, tương th&iacute;ch với nhiều m&ocirc;i trường kh&aacute;c nhau # Quản l&yacute; việc thiết kế lại # Đưa Web site từ khởi đầu đến th&agrave;nh c&ocirc;ng</p>', 89000, '26bd668c86.jpg', 0, 'gd', 'th'),
('th15', 'Tạo Website Hấp Dẫn Với HTML, XHTML Và CSS', '<p>Ng&agrave;y nay, việc ứng dụng ph&aacute;t triển Website hấp dẫn kh&ocirc;ng c&ograve;n g&oacute;i gọn bằng HTLM, cho d&ugrave; bạn đang x&acirc;y dựng một Website thương mại phức tạp hoặc chỉ đơn thuần l&agrave; tạo ra một Website nhỏ cho bản th&acirc;n. Với cuốn s&aacute;ch \"Tạo Website Hấp Dẫn Với HTML, XHTML V&agrave; CSS\" n&agrave;y sẽ c&ugrave;ng bạn kh&aacute;m ph&aacute; c&aacute;c sắc th&aacute;i của XHTML v&agrave; CSS theo c&aacute;ch gi&uacute;p bạn nắm được c&aacute;c vấn đề. S&aacute;ch bao gồm nhiều th&ocirc;ng tin mới cập nhật về XHTML, CSS, JavaScript... Cuốn s&aacute;ch n&agrave;y kh&ocirc;ng những gi&uacute;p bạn tiết kiệm được thời gian học tập m&agrave; c&ograve;n th&iacute;ch hợp với những ai muốn t&ograve; m&ograve; tạo một Website, v&igrave; s&aacute;ch cung cấp nhiều gợi &yacute;, hướng dẫn r&otilde; r&agrave;ng trong việc chuẩn bị xuất bản những trang Web đầu ti&ecirc;n ngay sau khi bạn đọc qua v&agrave;i chương.</p>', 79000, '32a17c046e.jpg', 1, 'gd', 'th'),
('th16', 'Tuyển Tập Thủ Thuật Javascript - Tập 1', '<p>\"Tuyển Tập Thủ Thuật Javascript\" gồm 2 tập, l&agrave; một tuyển tập c&aacute;c giải ph&aacute;p cho những vấn đề phổ biến nhất trong JavaScript. N&oacute; chứa đựng c&aacute;c thủ thuật, gợi &yacute; v&agrave; kỹ thuật tương th&iacute;ch chuẩn, đ&atilde; được thử nghiệm v&agrave; bạn c&oacute; thể t&ugrave;y biến để sử dụng trong c&aacute;c tr&igrave;nh duyệt kh&aacute;c nhau.</p>', 66000, '8cf9fda637.jpg', 1, 'gd', 'th'),
('th17', 'Thiết Kế Web Với CSS', '<p>Từ khi được giới thiệu năm 1996, bảng kiểu xếp tầng (CSS) đ&atilde; l&agrave;m thay đổi đ&aacute;ng kể thiết kế Web. Hiện nay, phần lớn trang Web đều sử dụng CSS v&agrave; nhiều nh&agrave; thiết kế đ&atilde; x&acirc;y dựng c&aacute;c bố cục trang ho&agrave;n to&agrave;n dựa tr&ecirc;n CSS. Để thực hiện điều n&agrave;y một c&aacute;ch th&agrave;nh c&ocirc;ng, đ&ograve;i hỏi ch&uacute;ng ta phải hiểu biết kỹ về nội dung hoạt động của CSS. S&aacute;ch Thiết Kế Web Với CSS cung cấp cho bạn những vấn đề cần thiết để sử dụng CSS.</p>', 82000, 'd57eab350f.jpg', 1, 'gd', 'th');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `book_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ses_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cat_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
('gk', 'Giáo Khoa'),
('khkt', 'Kỹ Thuật'),
('kt', 'Kinh Tế'),
('Ls', 'Lịch sử '),
('nn', 'Ngoại Ngữ'),
('pl', 'Pháp Luật'),
('td', 'Từ Điển'),
('th', 'Tin Học'),
('tt', 'Thể Thao Du Lịch'),
('vh', 'Văn Học'),
('vhxh', 'Văn Hóa Xã Hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'tiêu đề',
  `img` varchar(50) DEFAULT NULL COMMENT 'path file hình',
  `short_content` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung ngắn',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung',
  `hot` int(1) NOT NULL DEFAULT 0 COMMENT 'tin hot=1, thường: != 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `short_content`, `content`, `hot`) VALUES
(1, 'qqq', 'q', 'q', 'q', 0),
(2, 'ww', 'w', 'w', 'w', 1),
(3, 'ee', 'e', 'e', 'e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pub_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`) VALUES
('gd', 'Giáo dục'),
('hcm', 'Tổng Hợp Hồ Chí Minh'),
('hnv', 'Hội Nhà Văn'),
('kd', 'Kim Đồng'),
('pn', 'Phụ Nữ'),
('tn', 'Thanh Niên'),
('vh', 'Văn Học'),
('vhtt', 'Văn Hóa Thông Tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `address`, `phone`, `city`, `country`) VALUES
(1, 'duyspecter@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lê Duy', '90/40 Âu Dương Lân', '0376435527', 'TP.HCM', 'Việt Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `manxb` (`pub_id`,`cat_id`),
  ADD KEY `maloai` (`cat_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
