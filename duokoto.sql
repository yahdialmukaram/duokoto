-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2020 pada 14.47
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duokoto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `image`, `isi`, `tanggal`) VALUES
(46, 'malalo kusu nya duo kot malalo hujn', '47681b5b89d0103b90ee5e4f8a516b79.jpg', '<p>malalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujnmalalo kusu nya duo kot malalo&nbsp;hujn</p>\r\n', '2020-04-03 18:54:01'),
(55, 'corona di indosesia', 'e71db4fa0e3d1cce7c8675d0c46bee9e.PNG', '<p>ididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididiididiidiididi</p>\r\n', '2020-04-04 10:42:29'),
(56, 'sddd', '55551f0caec4023c258748d95964c02d.PNG', '<p>s</p>\r\n', '2020-04-04 10:43:35'),
(57, 'corona di indosesia', 'c344119645d5c53fe0ffbbc90ce4d0dd.PNG', '<p>jfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; j&nbsp;jfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; jjfkdjkjfkdsjlsdjkd jdkfjdkj jfkdjfkd jdkfj kdjfkdlfj dskl&nbsp; j</p>\r\n', '2020-04-04 10:44:33'),
(58, 'say alagi belajar', '4bd8164941a20e8158b542944ed1bccc.PNG', '<p>s</p>\r\n', '2020-04-04 10:45:37'),
(59, 'd', '1390a932586bfe876cc13b91c9c3a2b9.png', '<p>d</p>\r\n', '2020-04-04 12:01:17'),
(60, 'd', 'c8131ab9164adb750be8d16e4f111fd0.jpg', '<p>d</p>\r\n', '2020-04-04 12:01:48'),
(61, 'd', '02ba690c260c8884b7c0690e665fe84f.png', '<p>d</p>\r\n', '2020-04-04 12:01:57'),
(62, 'd', 'e2b872707d4df03d7f3ee933952ec210.jpg', '<p>d</p>\r\n', '2020-04-04 12:02:05'),
(66, 'corona di indosesia', '5e86f5a5486667ee51698babfd2b1307.png', '<p>corona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesia</p>\r\n', '2020-04-04 12:05:23'),
(67, 'corona di indosesia', '6ac17153ff5358677f6ad18f68fd4078.jpg', '<p>corona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesiacorona di indosesia</p>\r\n', '2020-04-04 12:06:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
