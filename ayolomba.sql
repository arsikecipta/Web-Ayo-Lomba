-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayolomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL,
  `nama_lomba` varchar(200) NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `deskripsi_lengkap` text NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `kontak_penyelenggara` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `kategori_lomba` varchar(200) NOT NULL,
  `url_lomba` varchar(200) NOT NULL,
  `periode_iklan` int(200) NOT NULL,
  `poster_lomba` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `nama_lomba`, `deskripsi_singkat`, `deskripsi_lengkap`, `penyelenggara`, `kontak_penyelenggara`, `email`, `kategori_lomba`, `url_lomba`, `periode_iklan`, `poster_lomba`, `status`) VALUES
(23, 'PPM Business Case Competition', 'Kompetisi yang diselenggarakan oleh PPM School of Management dengan nama Business Case Competition. Bagi kalian yang hobi dalam mengikuti event seperti ini segera saja ya melakukan pendaftaran, untuk lebih lengkapnya silahkan klik detail!', 'Perlu diketuai bahwa kompetisi ini ialah seputar melihat dan menelaah lebih dalam terkait dengan bisnis.\r\nAdapun tema yang diangkat dalam lomba ini adalah sebagai berikut : \"Creating Bull\'s Eye Marketing for Sasa Bumbu Komplit\"\r\nPeserta yang bisa melakukan pendaftaran dalam lomba ini adalah para mahasiswa ataupun mahasiswi yang ada di Indonesia, baik dari PTN ataupun PTS\r\nPerlombaan ini dibuka dengan Tim/Kelompok\r\nAdapun Tim atau kelompok dalam lomba ini maksimal terdiri dari 3 orang mahasiswa dari kampus yang sama, meskipun jurusan yang berbeda ya\r\nPeserta dalam lomba ini juga wajib membayar biaya pendaftaran\r\nsebesar 350K/Tim\r\nBatas Pendaftaran sampai dengan tanggal 1 April 2020\r\nPengunduhan Kasus (daring) dilakukan pada tanggal 3 April 2020\r\nPengumpulan Kasus dilakukan pada tanggal 12 Juni 2020\r\nPengumuman Finalis dalam lomba ini dilakukan pada tanggal 3 Juli 2020\r\nCompany Visits diselenggarakan pada tanggal 15 Juli 2020\r\nFinal dilakukan pada tanggal 16 Juli 2020	\r\nTotal hadiah yang diperebutkan dalam lomba ini ialah 36 Juta', 'PPM School of Management', '299294919', 'arsike@gmail.com', 'Bisnis', 'https://ppmschool.ac.id/id/bcc/', 1, 'lomba bisnis.png', 'publish'),
(24, 'Lomba Karya Tulis Ilmiah Nasional 2020', 'lomba karya tulis ilmiah nasional yang mana acara ini sendiri akan diselenggarakan di Politeknik Negeri Jember dengan nama LKTI 6th SAFE SIP NATIONAL COMPETITION 2020. Bagi kalian yang mau cari kompetisi terbaru barangkali ini sangatlah cocok ya. Yuk klik detail untuk tahu informasi lengkapnya! ', 'Tema besar yang menajdi fokus dalam lomba menulis ilmiah ini sendiri adalah\r\nPeran Inovator Muda dalam Pengembangan IPTEK Guna Menyongsong Indonesia Emas di Era Revolusi Industri 4.0\r\nPeserta yang bisa mendaftar dalam lomba ini adalah para Mahasiswa aktif (Diploma/S1) di Perguruan Tinggi Indonesia\r\nPerlombaan ini sendiri dibuka dalam 1 tim,\r\nDimana dalam satu tim terdiri dari 2-3 mahasiswa dari perguruan tinggi yang sama\r\nKarya yang dikirimkan adalah karya asli yang belum pernah dipublikasikan dan menjadi juara\r\nSetiap karya tulis yang dikirim wajib dibimbing oleh seorang dosen pembimbing,\r\nPengiriman abstrak dalam lomba ini gratis,\r\nKarya tulis bersifat orisinil,\r\nDimana untuk deadline dalam lomba dibuka pada tanggal 24 Januari sampai dengan tanggal 1 Maret 2020,\r\nHadiah yang akan diberikan dalam lomba ini totalnya adalah jutaan rupiah! yuk buruan daftar!', 'Politeknik Negri Jember', '082213997564', 'chike15@gmail.com', 'LKTI', 'https://bit.ly/6thSAFE2020', 2, 'lomba lkti2.png', 'publish'),
(25, 'Data Science Hackathon IFest#8', 'Halo Semuanya! IFest #8 UAJY mempersembahkan lomba yang paling ditunggu-tunggu oleh teman-teman universitas nih, yaitu:\r\nData Science Hackathon 2020 \r\nApa sih yang istimewa dari Data Science Hackathon 2020?\r\npenasaran? yuk klik detail untuk tahu selengkapnya!\r\n', 'Data Science Hackathon 2020 merupakan sebuah perlombaan yang mengasah kemampuan peserta untuk memecahkan masalah yang ada di kehidupan sehari-hari maupun bidang tertentu berdasarkan data set yang diberikan.\r\n\r\nCatat tanggal-tanggal pelaksanaan yang ada di bawah ini yaaa:\r\nPENDAFTARAN : 09 Desember 2019-21 Maret 2020, SELEKSI TAHAP 1 : 23 Maret 2020-29 Maret 2020, PENGUMUMAN SELEKSI TAHAP 1 : 2 April 2020, BABAK FINAL : 20 April 2020-21 April 2020,Beranggotakan 1-3 orang setiap tim,Biaya pendaftaran : Rp 150.000 / tim\r\nHadiah yang akan kalian dapatkan:\r\nJuara 1 : Rp 7.000.000 + sertifikat + piala\r\nJuara 2 : Rp 5.000.000 + sertifikat + piala\r\nJuara 3 : Rp 3.000.000 + sertifikat + piala\r\nTeman-teman akan mendapatkan fasilitas berupa:\r\nGala Dinner,\r\nSnack Bar,\r\nFree Wifi,Free Ticket Seminar Nasional IFest #8\r\nBuat kalian yang gak mau lewatin kesempatan ini bisa langsung mendaftar dengan mengklik tombol daftar!\r\n', 'Universitas Atma Jaya Yogyakarta', '081233556676', 'lalayey@yahoo.co.id', 'IT', 'https://ifest-uajy.com/', 1, 'lomba it.jpg', 'publish'),
(70, 'Lomba Essay Nasional  2020', 'Hallo temen-temen yang berbahagia, dalam postingan ini ya mimin akan kembali lagi nih  membagikan terkait dengan adanya kompetisi menulis essay tingkat nasional yang mana dalam  ajang agenda ini secara resmi diselenggarakan oleh HIMKA UNIKAL di Tahun 2020. ', 'Hallo temen-temen yang berbahagia, dalam postingan ini ya mimin akan kembali lagi nih \r\nmembagikan terkait dengan adanya kompetisi menulis essay tingkat nasional yang mana dalam \r\najang agenda ini secara resmi diselenggarakan oleh HIMKA UNIKAL di Tahun 2020. \r\n\r\nLOmba bersifat individu/tim dengan maksimal 2 orang\r\njuara Juara 1 =Piagam penghargaan+ Trophy + Uang tunai Rp 1.000.000\r\nJuara II = Piagam Penghargaan + Trophy + Uang tunai Rp 750.000\r\nJuara III =Piagam Penghargaan + Trophy + Uang tunai Rp 500.000\r\nFavorit : piagam penghargaan + Plakat + Merchandise Menarik\r\nSemua Finalis mendapat sertifikat finalis\r\nSemua Peserta mendapat e-certificate\r\n', 'HIMKA UNIKAL', '3928059720', 'budi@gmail.com', 'Essay', 'http://bit.ly/form_LEN_HIMKA2020', 1, 'essay 2020.png', 'declined'),
(75, 'Business Plan 2019', 'mba bisnis plan tingkat nasional yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Diponegoro dalam rangka meningkatkan iklim kewirausahaan masyarakat terutama di kalangan mahasiswa. ', 'lomba bisnis plan tingkat nasional yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Diponegoro dalam rangka meningkatkan iklim kewirausahaan masyarakat terutama di kalangan mahasiswa. ', 'BEM FT UNDIP', '0812362839203', 'rita@gmail.com', 'Bisnis', 'http://bit.ly/form_pendaftaran_lomba', 2, 'poster5.jpg', 'declined'),
(76, 'lala', 'aaaaaaaaaaaaddddddddddd', 'Dalam rangka memastikan kompetensi angkatan kerja muda di bidang Komunikasi, Kementerian Kominfo melalui Pusat Pengembangan Literasi dan Profesi SDM Komunikasi memfasilitasi kegiatan pelatihan dan sertifikasi angkatan kerja muda bidang Komunikasi. Pembuktian kompetensi SDM bidang Kominfo yang sesuai dengan SKKNI dilakukan dengan ujian sertifikasi yang diselenggarakan oleh Lembaga Sertifikasi Profesi (LSP) bidang Kominfo di Tempat Uji Kompetensi (TUK) yang menjadi mitra. Sertifikat kompetensi SKKNI dikeluarkan oleh Badan Nasional Sertifikasi Profesi (BNSP).', 'abc', '0812030291', 'rita@gmail.com', 'IT', 'https://youtube.com', 2, 'alur.jpg', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(200) NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jk`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `jabatan`) VALUES
(5, 'Arsike Cipta Pelangi', 'Perempuan', 'Tangerang', '15/10/1999', '082213997564', 'Front-End Developer'),
(6, 'Icca Mita Monica', 'Perempuan', 'Jakarta', '30/11/1999', '09387363546', 'Project Manager'),
(8, 'Kirana Dhiatama Ayunda', 'Perempuan', 'Bogor', '25/07/1999', '082453441671', 'UI/UX Designer'),
(10, 'Sabila Chanifah', 'Perempuan', 'Sragen', '10/04/1999', '082225084421', 'Back-End Developer'),
(11, 'Rezshal Hidayah', 'Laki-Laki', 'Bima', '09/05/1999', '0100290822', 'System Analyst'),
(12, 'Famyudha Merim Purba', 'Perempuan', 'Batam', '30/11/1999', '082225084421', 'System Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `email` varchar(200) NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`email`, `bukti_pembayaran`) VALUES
('chike15@gmail.com', 'bukti.jpg'),
('arsike@gmail.com', 'bukti.jpg'),
('', ''),
('lalayey@yahoo.co.id', 'bukti.jpg'),
('rita@gmail.com', 'buktirita.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `mobile_number`, `password`, `level`) VALUES
(2, 'sabilac@gmail.com', 'bilabil', '0100290822', '323232', 'admin'),
(5, 'sabilachanifah@gmail.com', 'hollanddd', '9387363546', '123123', 'user'),
(7, 'arsikecipta15@gmail.com', 'chikes', '082213997564', '010101', 'user'),
(8, 'yudan@gmail.com', 'yudanto', '0100290822', '1234', 'user'),
(9, 'Chike10@gmail.com', 'chike', '082213997564', '123123', 'admin'),
(11, 'lalayey@yahoo.co.id', 'lala', '92020394', '123456', 'user'),
(12, 'chike15@gmail.com', 'chike pelangi', '82392910292', '12345', 'user'),
(13, 'arsike@gmail.com', 'arsike', '2029308302', '12345', 'user'),
(15, 'budi@gmail.com', 'budiman', '8128289850', '12345', 'user'),
(16, 'ika@gmail.com', 'ika', '81272728992', '12345', 'user'),
(17, 'risa@gmail.com', 'risa', '81272829923', '12345', 'user'),
(20, 'rita@gmail.com', 'ritana', '08271929341', '123321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
