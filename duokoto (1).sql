-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 09.47
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
  `kategori` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `image`, `isi`, `kategori`, `tanggal`) VALUES
(68, 'corona di indosesia', '56dd59b6b7c722fd5fdee38289080f62.PNG', '<p>hari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya teman&nbsp;hari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya temanhari ini sangat darurat corona di seluruh dunia m jdi berhati2 lah anda ya teman</p>\r\n', 'berita', '2020-04-18 05:14:59'),
(69, 'malalo iu indah', 'db0872a2cd4fcf74964cc4bc54a6d79b.PNG', '<p>malalo iu indahmalalo iu indah&nbsp;malalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indahmalalo iu indah</p>\r\n', 'berita', '2020-04-18 05:15:06'),
(70, 'corona di indosesia f', '84433976d5b016c2f4d07b93776a29a2.PNG', '<p>css</p>\r\n', 'berita', '2020-04-18 05:15:08'),
(71, 'tes', '76101c0509fc940c8e542c8ce9cd0f60.PNG', '<p>tesaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdj</p>\r\n', 'berita', '2020-04-18 05:15:09'),
(73, 'hari sangat panas di indonesia dini hkami sngat kepanansan  ya allah ampuni akmi ayllah ', 'a393abd11d11a94b394dd77f963b8df1.PNG', '<p>xxxxxx</p>\r\n', 'berita', '2020-04-18 05:25:10'),
(75, 'hari sangat panas di indonesia dini hkami sngat kepanansan  ya allah ampuni akmi ayllah ', 'ebb5cca24b7a2c06b4f05116030fda09.PNG', '<p>aaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdjaaxb bxhsh hjs hdj hhjs hdj h hsj hdj</p>\r\n', 'berita', '2020-04-18 05:15:12'),
(76, 'dingin malalo', '953c9043fadaffee2797f39aee846e17.PNG', '<p>mallao ini sedang menggdakn erengkapa covid 10&nbsp;mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10</p>\r\n', 'berita', '2020-04-18 05:15:13'),
(77, 'corona di indosesia', 'd6be438243bd5ac19b6943638c7602c4.PNG', '<p>mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10mallao ini sedang menggdakn erengkapa covid 10</p>\r\n', 'berita', '2020-04-18 05:15:15'),
(78, 'malam ronda covid 19', '1ed937fa0be2af14c0d7ac700c2fca50.PNG', '<p>mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;mala yah dh hjd hjsdh&nbsp;</p>\r\n', 'berita', '2020-04-18 05:15:17'),
(79, 'corona di indosesia', '496a629540cf9a2ea27c384c3611c801.PNG', '<p>ada</p>\r\n', 'berita', '2020-04-18 05:13:43'),
(80, 'xx', '5163b3cd3f252a2699c010aecd103425.PNG', '<p>xxx</p>\r\n', 'olahraga', '2020-04-18 05:16:35'),
(81, 'dd', '1408ee2db7515327afd0e473c41d2055.PNG', '<p>ddd</p>\r\n', 'olahraga', '2020-04-18 05:16:58'),
(82, 'ffhari sangat panas di indonesia dini hkami sngat kepanansan  ya allah ampuni akmi ayllah ', 'b5618ee98c818b973c6a7b7115ec9a29.PNG', '<p>fff</p>\r\n', 'olahraga', '2020-04-18 05:25:30'),
(83, 'corona di indosesia', '2b2d8d6b3d110d2236bb3219c0d9666a.PNG', '<p>corona&nbsp;corona&nbsp;corona&nbsp;coronacorona&nbsp;coronacorona&nbsp;</p>\r\n\r\n<p>coronacorona&nbsp;coronacorona&nbsp;</p>\r\n\r\n<p>coronacorona&nbsp;coronacorona&nbsp;coronacorona</p>\r\n\r\n<p>coronacorona&nbsp;coronacorona&nbsp;coronacorona&nbsp;corona</p>\r\n', 'berita', '2020-04-18 05:44:05'),
(84, 'berita bari', '36bc4b7e56520c966cbbc71f561ecdc0.PNG', '<p>xxxx</p>\r\n', 'berita', '2020-04-18 08:17:46'),
(85, 'verita baru 1', 'b0e2f23b08aadb8a2e7fceb79c8e48ad.PNG', '<p>d</p>\r\n', 'berita', '2020-04-18 08:17:59'),
(86, 'verita baru 2', '79c9fcd297c026ab3b4b772a3a2bf2db.PNG', '<p>c</p>\r\n', 'berita', '2020-04-18 08:18:13'),
(87, 'berita baru 3', 'cb69682613b5e78a3e4abe0efca67f97.PNG', '<p>cc</p>\r\n', 'berita', '2020-04-18 08:18:27'),
(88, 'malam yag indah', '234922c1f4beed21619e5cd594b5286c.PNG', '<p>malam yag indahmalam yag indahmalam yag indah&nbsp;malam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n', 'berita', '2020-04-18 09:27:11'),
(89, 'corona di indosesia', '9b430e5eb272b30cf53a25c7c8bee40b.PNG', '<p>xxxx&nbsp;malam yag inindahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indah</p>\r\n', 'olahraga', '2020-04-18 09:32:05'),
(90, 'corona di indosesia malam', 'd658a88f36c0a0764f3f286f060386aa.PNG', '<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n\r\n<p>malam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indahmalam yag indah</p>\r\n', 'olahraga', '2020-04-18 09:32:35'),
(91, 'indonsia sensara', '7f196ff401d589d1d2d5547e52d9b0a0.PNG', '<p>indonsia sensara&nbsp;indonsia sensara&nbsp;indonsia sensarav</p>\r\n\r\n<p>indonsia sensaraindonsia sensaraindonsia sensaraindonsia sensara</p>\r\n\r\n<p>indonsia sensaraindonsia sensaraindonsia sensaraindonsia sensara</p>\r\n\r\n<p>indonsia sensaraindonsia sensaraindonsia sensaraindonsia sensara</p>\r\n\r\n<p>indonsia sensaraindonsia sensaraindonsia sensaraindonsia sensara</p>\r\n', 'berita', '2020-04-18 09:39:02'),
(92, 'panas bro', 'ce5bb3b1b60434ad3eba5795aafdc9af.PNG', '<p>panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;</p>\r\n', 'berita', '2020-04-19 04:13:47'),
(93, 'goro brsama', '649803f4fda90b7227a1f0dda0d1deb4.PNG', '<p>panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;panas nya mnta ampun&nbsp;</p>\r\n', 'olahraga', '2020-04-19 04:15:02'),
(94, 'bintang pada malam hari', '273ef3df6b4c2344027ed7060ec87ff6.jpg', '<p>ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;ini akn melakukan se adanya&nbsp;</p>\r\n', 'berita', '2020-04-20 21:00:02'),
(95, 'buah yyang segar akan mnyehatkan adnda ', 'bb09323ea5c4b828e399afdd799555cb.jpg', '<p>buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;buah yyang segar akan mnyehatkan adnda&nbsp;</p>\r\n', 'olahraga', '2020-04-20 21:12:23'),
(96, 'coba tanggal', '45a70db94200a67211daacb855027ae0.jpg', '<p>coba tanggalcoba tanggal&nbsp;coba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggalcoba tanggal</p>\r\n', 'berita', '2020-04-20 21:28:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `komen_id` int(11) NOT NULL,
  `komen_status` int(11) NOT NULL,
  `komen_nama` varchar(255) NOT NULL,
  `komen_email` varchar(255) NOT NULL,
  `komen_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `pengunjung` varchar(255) NOT NULL,
  `totalpengunjung` int(50) NOT NULL,
  `hits` int(50) NOT NULL,
  `totalhits` int(50) NOT NULL,
  `pengunjungonline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saran`
--

CREATE TABLE `tb_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_saran`
--

INSERT INTO `tb_saran` (`id`, `nama`, `email`, `no_hp`, `tanggal`, `pesan`) VALUES
(1, 'yshfi', 'yshigmail.com', 123456432, '0000-00-00', 'ini bagus'),
(2, 'nadia', 'nadoa@gmail.com', 999999999, '0000-00-00', 'ini belajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL,
  `create_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `create_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '12-04-2020 14:43:30'),
(2, 'yahdi', '58d432c74ad12fc7d0f30300771bec18', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`komen_id`);

--
-- Indeks untuk tabel `tb_saran`
--
ALTER TABLE `tb_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `komen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_saran`
--
ALTER TABLE `tb_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
