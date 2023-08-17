-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Waktu pembuatan: 02 Mar 2023 pada 01.50
-- Versi server: 10.3.27-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33542591_weeding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `asal` varchar(55) NOT NULL,
  `present` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `msg`
--

INSERT INTO `msg` (`id`, `name`, `msg`, `asal`, `present`, `date`) VALUES
(1, 'Rizki', 'Happy weeding brody , semoga menjadi keluarga sakinah, mawaddah, dan warrahmah.', 'Bekasi', 'Hadir', '2023-02-13 17:32:17'),
(3, 'Kancil', 'selamat menempuh hidup baru untuk iwan dan fitri semoga menjadi keluarga yang harmonis, penuh dengan kebahagiaan dan saling melengkapi ya! happy wedding', 'Tambun', 'Hadir', '2023-02-15 13:42:23'),
(4, 'Anonim', 'selamat menempuh hidup baru untuk wan dan fitri semoga menjadi keluarga mawadah warahmah Amin y robal Al-Amin..', '???', '???', '2023-02-23 02:13:15'),
(6, 'Rizal ', 'Selamat Menempuh Hidup Baru Iwan&Fitri Semoga Samawa AamiinðŸ¤²ðŸ»', 'Kp 2', 'Hadir', '2023-02-25 00:09:58'),
(7, 'Hana', 'Semoga menjadi keluarga yang samawa yaa\nBahagia sampai akhir hayat', 'Bekasi', 'Hadir', '2023-02-25 00:34:04'),
(8, 'Sania', 'Semoga sakinah mawadah warohmah ðŸ˜‡', 'Komplek depnaker', 'Hadir', '2023-02-25 00:43:42'),
(9, 'Diana', 'Happy wedding fifit & Ridwan semoga menjadi keluarga yang samawa ðŸ¤²ðŸ» bahagia dunia akhirat dan cepet di beri momongan amiin ðŸ¤²ðŸ»', 'Rawa panjang ', 'Hadir', '2023-02-25 00:44:39'),
(10, 'Teguh ', 'Semoga pernikahannya sakinah mawadah  warohmah', 'Majalengka', '???', '2023-02-25 01:17:47'),
(11, 'Farhana Utami', 'MasyaAllah, barakallah semoga dilancarkan sampai hari H. Selamat yaaaðŸ’“', 'Kp.poncol', '???', '2023-02-25 02:31:36'),
(12, 'Guntur', 'MasyaAllah Tabarakallah, Mudah mudahan lancar ga ada kendala apa apa Aamiin', 'Bekasi', '???', '2023-02-25 04:05:26'),
(13, 'Silvi', 'Happy Wedding fitri dan Suami semoga menjadi keluarga yang SAMAWAðŸ™ Mff ya ga bisa hadir ðŸ˜¥ðŸ™', 'Banten', 'Tidak Hadir', '2023-02-25 11:34:58'),
(14, 'Aliya', 'Masya Allah Tabarakallah Teh..Semoga Lancar Sampe Hari H Ya..Semoga Samawa Sampe Kakek Nenek AminnnðŸ¥°ðŸ¥°ðŸ¥°', 'Bekasi', '???', '2023-02-25 12:23:50'),
(15, 'Aisyah', 'Masyaallah tabarakallah, selamat ya pitâ¤ï¸, semoga lancar dan semoga menjadi keluarga yang SAMAWA,aamiinðŸ¤²', 'Cibarusah ', 'Hadir', '2023-02-25 13:45:11'),
(16, 'Farhan hamzah', 'Semoga jadi keluarga samawa ya pit aamiin ðŸ™ðŸ™', 'Pekayon', 'Hadir', '2023-02-26 04:53:34'),
(17, 'Mamettt', 'Semoga langgeng yaaa mbul , sakinah mawaddah waromah dunia akhirat.', 'Plante mars ', 'Hadir', '2023-02-26 06:46:29'),
(18, 'Tri Fathonah', 'Masyaallah, semoga lancar sampai hari H ya, semoga jadi keluarga yang sakinah mawaddah warohmah ðŸ™', 'Jaka setia', '???', '2023-02-26 08:27:19'),
(19, 'Fira ', 'Happy wedding ya semoga menjadi keluarga samawa aamiin dan lancar sampe hari Hâœ¨', 'Poncol bulak', 'Hadir', '2023-02-26 15:19:54'),
(20, 'Anonim', 'Alhamdullilah, Happy Wedding Ka Fitriii, Lancar2 sampai hari H yaaa .. â¤ï¸ðŸ¤©', '???', '???', '2023-02-27 14:47:06'),
(21, 'BirdLord24', 'Wowwwwwwwwwwww', 'Jakarta', 'Tidak Hadir', '2023-03-01 16:31:32'),
(22, 'Agnes & suami', 'Semoga lancar acara pernikahan nya adek kelas ku â˜º nd happy wedding yaaa! Sakinah mawaddah warahmah. Aamiin', 'Jakarta', 'Hadir', '2023-03-02 01:54:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
