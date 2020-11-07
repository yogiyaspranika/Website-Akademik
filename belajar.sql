-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 05:27 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileUpload`
--

CREATE TABLE `fileUpload` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `namaData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileUpload`
--

INSERT INTO `fileUpload` (`id`, `judul`, `namaData`) VALUES
(20, 'Aspek manusia dalam IMK', '5de7dc03daa8c.pdf'),
(21, 'Aspek Teknologi dalam IMK', '5de7dc720a892.pdf'),
(22, 'Model IMK', '5de7dc961b164.pdf'),
(23, 'Aspek Ergonomi dalam IMK', '5de7dcab57008.pdf'),
(25, 'IMK', '5de8ab05d50d5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa1`
--

CREATE TABLE `mahasiswa1` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa1`
--

INSERT INTO `mahasiswa1` (`id`, `nama`, `nik`, `email`, `jurusan`, `gambar`, `ket`) VALUES
(2, 'Bambang Pamungkas', '09011181621123', 'bambang34@gmail', 'Sistem Informasi', '5de79391e7b54.png', 'mahasisw'),
(9, 'rr', 'ew', 'dw@wde', 'dfd', '5de793a88eacb.png', 'fd'),
(34, 'dwdw', 'DW', 'bambang34@gmail.com', 'Sistem Informasi', 'fs.png', 'DW');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_mk` varchar(3) NOT NULL,
  `nilai` int(5) NOT NULL,
  `nim` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama`, `no_mk`, `nilai`, `nim`) VALUES
(116, 'pilra gustian', '1', 95, '09011181621124'),
(117, 'pilra gustian', '1', 95, '09011181621124'),
(118, 'fali', '1', 35, '123'),
(113, 'pilra gustian', '2', 5, '09011181621124'),
(115, 'pilra gustian', '2', 10, '09011181621124'),
(114, 'mimi fitria', '4', 5, '09011181621125');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `no_soal` int(8) NOT NULL,
  `pertanyaan` text NOT NULL,
  `op_a` varchar(250) NOT NULL,
  `op_b` varchar(250) NOT NULL,
  `op_c` varchar(250) NOT NULL,
  `op_d` varchar(250) NOT NULL,
  `kj` varchar(3) NOT NULL,
  `kj_jenis` int(8) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`no_soal`, `pertanyaan`, `op_a`, `op_b`, `op_c`, `op_d`, `kj`, `kj_jenis`, `aktif`) VALUES
(1, '   Mempunyai sebuah border, sebuah menu bar, dan sebuah status bar, dan mungkin juga mempunyai satu atau lebih  toolbar adalah :     ', 'a. Normal Primary', 'b. Primary Window', 'c.Window Commands', 'd. Dialog Commands', '', 2, 'Y'),
(2, ' Keuntungan menjadi anggota Mailling List, kecuali :  ', 'a. Dapat Bertanya suatu hal', 'b. Memberikan saran atas pertanyaan', 'c. Memberikan suatu informasi ', 'd. Mendapatkan website gratis', '', 2, 'Y'),
(3, ' Syarat agar komputer kita dapat koneksi dengan internet,kecuali :  ', 'a. Mempunyai modem', 'b. Memilih paket yang ditawarkan ISP', 'c. Memory komputer yang cukup', 'd. Adanya fasilitas Browser', 'c', 1, 'Y'),
(4, '   Disebut apakah informasi yang menjelaskan alasan mengapa suatu keputusan dalam suatu tahap perancangan / desain sistem komputer dibuat atau diambil, termasuk deskripsi struktural atau arsitektural dan deskripsi fungsi atau perilakunya?   ', 'a. Realitas design', 'b. Rasionalitas design', 'c. sitem design', 'd. design ', 'c', 1, 'Y'),
(5, 'Berikut ini adalah contoh implementasi perancangan  interface yang sesuai dengan konsep yang dirintis oleh Ben Shneiderman, kecuali ?', 'a. Adanya pointing dengan mouse ', 'b. Teknologi surface computing', 'c. Aplikasi Touch-screen', 'd. Teknologi Teleimmersion', 'd', 1, 'Y'),
(6, 'Pembuatan prototype suatu sistem merupakan implementasi dari konsep?', 'a.Deductive reasoning   ', 'b.  Abductive reasoning    ', 'c.Inductive reasoning\r\n', 'd.Trial and error', 'd', 1, 'Y'),
(7, 'Berikut ini adalah contoh penerapan beberapa gaya interaksi antara user\r\ndengan sistem, kecuali?', 'a.  Speech recognition', 'b. XML pada web-services', 'c. Tool box pada aplikasi grafis', 'd. Hyperlink di web', 'b', 1, 'Y'),
(8, 'Contoh langkah antisipasi untuk meminimalisir kesalahan (mistake) user dalam\r\nberinteraksi dengan sistem adalah dengan ?', 'a. Memberi jarak antar icon', 'b. Memilih ukuran toolbar yang nyaman untuk dilihat', 'c. Memilih kontras warna yang jelas pada button', 'd. Membuat manual dan help dari sistem', 'd', 1, 'Y'),
(9, 'Pada dasarnya seluruh warna yang ada bermula dari primer, yang disebut dengan warna primer adalah?', 'a. Merah,Hijau, Hitam ', 'b.  Merah, Hijau, Biru  ', 'c. Putih, Hitam, Merah', 'd. Hitam, Biru, merah', 'b', 1, 'Y'),
(10, 'Bidang ilmu yang berhubungan dengan pengukuran tubuh manusia disebut :\r\n   ', 'a. Antropometrik  ', 'b. Pencahayaan ', 'c. Suhu dan Kualitas Udara', 'd.  Gangguan Suara', 'a', 1, 'Y'),
(11, 'Digunakan untuk menampilkan sejumlah pilihan yang tidak akan terlihat sampai pengguna program  menekan tombol kontrol, adalah :\r\n                           \r\n                                                           \r\n    \r\n\r\n\r\n\r\n', 'a. Spin Box ', 'b. Check Box  ', 'c. Combo Box', 'd. Tombol Radio                   ', 'c', 1, 'Y'),
(12, 'Sebuah window mendapat focus karena diklik oleh user,disebut :\r\n                                         \r\n    ', 'a. Keyboard focus ', 'b. Point to focus ', 'c. Click to focus', 'd. Enter focus\r\n                                ', 'c', 1, 'Y'),
(13, 'Prinsip etika profesi dibawah ini yang benar, kecuali . . .\r\n                  \r\n                            ', 'a. Tanggung Jawab', 'b. Keadilan  ', 'c.  Otonomi', 'd. Berdiskusi', 'd', 2, 'Y'),
(14, 'Diartikan sebagai semangat atau dorongan bathin dalam diri seseorang untuk melakukan atau tidak melakukan sesuatu disebut . . .\r\n                              \r\n                                   ', 'a. Etika ', 'b. Moral', 'c.  Individual', 'd. Profesional', 'b', 2, 'Y'),
(15, 'Terdapat dua jenis bidang profesi yaitu …\r\n                    \r\n                   ', 'a. Profesi Khusus', 'b. Profesi Luhur ', 'c. A dan B Benar', 'd. A dan B Salah', 'c', 2, 'Y'),
(16, 'Apa Kependekan Dari Elektronik Data Proccesing…\r\n\r\n\r\n\r\n', 'a. EDP Auditing', 'b. DBA', 'c. EDP Colapse', 'd. ODAP', 'a', 2, 'Y'),
(17, 'Baik Cisco maupun Novell menawarkan sertifikasi networking / jaringan,\r\nnamun saat ini Cisco lebih diminati dibandingkan Novell. Yang setara dengan CCNA, di Novell adalah :\r\n                                                    \r\n                                                  ', 'a. CNA ', 'b. CNE', 'c. NAI', 'd. CNI', 'b', 2, 'Y'),
(18, 'Microsoft sebagai raksasa software komersil juga menawarkan sejumlah\r\nsertifikasi. Sertifikasi untuk seorang Technical Support adalah :\r\n                                                    \r\n                                                  \r\n', 'a. MCTS', 'b. MCITP', 'c. MCSA', 'd. MCDST', 'd', 2, 'Y'),
(19, 'Tugas Traner dalam profesi TI adalah  . . .\r\n\r\n\r\n\r\n', 'a. Melatih akuntansi pengeluaran perusahaan', 'b. Melatih Perhitungan laba rugi perusahaan', 'c. Melatih penerimaan masuk pegawai', 'd. Melatih keterampilan dalam berkerja dengan computer', 'd', 2, 'Y'),
(20, 'suatu proses kontrol pengujian terhadap infrastruktur teknologi informasi dimana berhubungan dengan masalah audit finansial dan audit internal\r\n\r\n\r\n\r\n', 'a. Audit IT', 'b. Manager', 'c. Programer', 'd. DBA', 'a', 2, 'Y'),
(21, 'Pada sistem pewarnaan, RGB(0, 0, 0),akan menghasilkan  warna, yaitu :', 'a. Merah', 'b.Hitam', 'c. Putih', 'd. Hijau', 'b', 3, 'Y'),
(22, 'Tombol radio terdiri dari dua bagian, yaitu :', 'a.Tombol Scrollbar dan Tombol Menu', 'b.Tombol pengendali dan Label sebagai atribut tombol ', 'c.Tombol button dan Tombol Scrollbar', 'd.Tombol pengendali an Tombol Menu', 'a', 3, 'Y'),
(23, 'Sebuah perangkat lunak / perangkat keras yang mengatur akses seseorang kedalam intranet disebut :', 'a.firewall', 'b.browser', 'c.ip address', 'd.telnet', 'b', 3, 'Y'),
(24, 'Melakukan konfirmasi ketika user ingin menghapus datanya atau melakukan aktivitas yang akan menimbulkan resiko adalah :', 'a.Preferences Window', 'b.Property Window', 'c.Confirmation Alerts', 'd.Authentication Alerts', 'c', 3, 'Y'),
(25, 'Merupakan letak dari objek gambar di monitor, disebut :', 'a.Program ', 'b.Animasi ', 'c.Windows ', 'd.Sistem Koordinat', 'd', 3, 'Y'),
(26, 'Web yang melibatkan kode-kode lain selain HTML seperti  PHP dan lain-lain disebut ', 'a.web blog', 'b.website', 'c.webpage', 'd.web statis', 'b', 3, 'Y'),
(27, 'Beberapa keuntungan penggunaan intranet bagi suatu  organisasi atau perusahaan antara lain, kecuali : ', 'a.Produktifitas kerja', 'b.Efisiensi waktu', 'c.Mahalnya biaya yang dikeluarkan', 'd.Meningkatkan kerjasama', 'c', 3, 'Y'),
(28, 'Sebuah situs yang menawarkan hubungan kepada  konsumen ke web lain dan atas jasa ini web yang menghubungkan ke web lain akan mendapatkan komisi, disebut : ', 'a.Agen Pembelanjaan', 'b.Penjual Bersindikat', 'c.Makelar Bisnis ke Bisnis', 'd.M-Commerce', 'd', 3, 'Y'),
(29, 'Salah satu tujuan perancangan sistem adalah dimungkinkannya sistem untuk dioperasikan di berbagai lingkungan hardware & software. Hal ini dalam tujuan rekayasa sistem / system engineering goal adalah termasuk:', 'a.standarisasi', 'b.konsistensi', 'c.integrasi', 'd.portabilitas', 'd', 3, 'Y'),
(30, 'Berikut ini contoh sistem yang kritis bagi kehidupan (life critical system) kecuali:', 'a.pembangkit listrik', 'b.reaktor nuklir', 'c.aplikasi perbankan', 'd.kendali lalu lintas udara', 'c', 3, 'Y'),
(31, 'Pada 4 level pendekatan dari Foley & Van Dam, level yang berhubungan dengan model mental / kognitif pemakai & metafora adalah:', 'a.conceptual level', 'b.semantic level', 'c.syntactic level', 'd.lexical level', 'a', 4, 'Y'),
(32, 'IMK adalah bagian dari ilmu komputer, namun juga menerima sumbangan dari ilmu lain salah satunya yang mempelajari tubuh manusia, yaitu:', 'a.ergonomis', 'b.antropometri', 'c.ekonomi', 'd.antropologi', 'b', 4, 'Y'),
(33, 'Dalam perencanaan sistem menu, struktur berikut adalah yang terbaik:', 'a.lebar (wide) & dangkal (shallow)', 'b.lebar (wide) & dalam (deep)', 'c.sempit (narrow) & dangkal (shallow)', 'd.sempit (narrow) & dalam (deep)', 'a', 4, 'Y'),
(34, 'Andaikan anda diminta untuk membuat program ujian online dengan pilihan ganda, jenis menu apa yang akan anda gunakan untuk mempresentasikan pilihan?', 'a.pop-up menu', 'b.list box (extended menu)', 'c.check box', 'd.radio button', 'd', 4, 'Y'),
(35, 'Salah satu menu adalah embedded links dalam dokumen hypertext. Organisasi semantik dari links dalam suatu situs web biasanya berbentuk:', 'a.single menu', 'b.network (acyclic / cyclic)', 'c.tree structure', 'd.extended menu', 'b', 4, 'Y'),
(36, 'Salah satu fasilitas yang ditampilkan pada sistem manipulasi langsung adalah WYSIWYG yang maksudnya adalah:', 'a.segala yang anda inginkan pasti anda dapatkan', 'b.yang anda lihat pada demo akan anda peroleh setelah membeli software ini', 'c.hasil cetakan akan sama seperti yang anda lihat pada layar', 'd.anda dapat memperoleh hasil yang luar biasa & berkualitas tinggi dengan menggunakan software ini', 'c', 4, 'Y'),
(37, 'kode warna abu-abu pada rgb adalah ...', 'a.#ffffff', 'b.#808080', 'c.#36ey3e', 'd.#775645', 'b', 4, 'Y'),
(38, 'untuk mengatur ukuran font 12 pada css bisa menggunakan perintah ...', 'a.font-size=\"12px\"', 'b.font-width=\"12px\"', 'c.font-ukuran=\"12px\"', 'd.font-height=\"12px\"', 'a', 4, 'Y'),
(39, 'Sehubungan dengan motivasi bagi faktor-faktor manusia dalam perancangan, manakah dari pernyataan-pernyataan berikut yang harus diperhatikan oleh perusahaan yang mengembangkan sistem pengendali lalu lintas udara:', 'a.biaya perlu ditekan agar rendah, meski kehandalan sedikit dikorbankan', 'b.waktu pelatihan yang lama tidak menjadi masalah asal kinerja pemakai cepat & bebas kesalahan', 'c.perancangan sistem sulit, perancang harus membuat sistem transparan sehingga pemakai mudah terserap dalam bidang2 tugasnya', 'd.kecepatan kinerja penting, tetapi kelelahan operator ditoleransi', 'b', 4, 'Y'),
(40, 'Berikut adalah karakteristik dari knowledge intermittent user, kecuali:', 'a.mengeri task concept & interface concept', 'b.memerlukan umpan balik yang informative', 'c.lebih membutuhkan online-help daripada online tutorial', 'd.lebih menyukai rancangan interface yang sederhada & pilihan2 yang lebih sedikit', 'd', 4, 'Y'),
(41, 'untuk mengganti jenis font pada css dapat menggunakan perintah . . .', 'a.font-align', 'b.font-family', 'c.font-style', 'd.font-size', 'b', 5, 'Y'),
(42, 'untuk membuat judul website pada bahasa html kita dapat menggunakan perintah', 'a.html', 'b.title', 'c.judul', 'd.header', 'b', 5, 'Y'),
(43, 'berapa banyak heading text pada html?', 'a. 3', 'b.5', 'c. 6', 'd. 4', 'c', 5, 'Y'),
(44, 'html adalah kepanjangan dari ...', 'a.hypert text markup language', 'b.hypert test markup language', 'c.hypert text market language', 'd.hypert text maron language', 'b', 5, 'Y'),
(45, 'agar website yang kita bangun bisa terhubung ke internet, kita membutuhkan ..', 'a.web hosting dan domain name', 'b.internet', 'c.file transfer protokol', 'd.dynamic name service', 'a', 5, 'Y'),
(46, 'untuk mempercantik tampilan halaman web kita bisa menggunakan ...', 'a.html', 'b.css', 'c.php', 'd.java', 'b', 5, 'Y'),
(47, 'untuk menghubungkan satu halaman website ke halaman yang lain pada html kita dapat menggunakan perintah ...', 'a.link', 'b.href', 'c.linked', 'd.div', 'b', 5, 'Y'),
(48, 'untuk menambahkan background pada bahasa html kita dapat menggunakan perintah ...', 'a.background: url()', 'b.cover: url()', 'c.images: url()', 'd.page: url', 'a', 5, 'Y'),
(49, 'kode warna biru pada rgb adalah ...', 'a.#0000ff', 'b.#6666ff', 'c.#454545', 'd.#873232', 'a', 5, 'Y'),
(50, 'untuk membuat database kita membutuhkan platform ...', 'a.phpmyadmin', 'b.localhost', 'c.database', 'd.ftp', 'a', 5, 'Y'),
(51, 'IMK adalah singkatan dari ...', 'a.Interaksi manusia komputer', 'b.ilmu menjalankan komputer', 'c.interaksi manusia komuter', 'd.ilmu manusia komputer', 'a', 1, 'Y'),
(52, 'php adalah singkatan dari ... ', 'a.pemberi harapan palsu', 'b.personal home page', 'c.person home page', 'd.pembelajaran home page', 'b', 1, 'Y'),
(53, 'seseorang yang mempunyai keahlian dalam membuat website adalah', 'a.web developer', 'b.web designer', 'c.web programming', 'd.web engiinering', 'a', 1, 'Y'),
(54, 'bagian website yang langsung berinteraksi dengan pengguna disebut ...', 'a.back-end', 'b.front-end', 'c.halaman web', 'd.home', 'b', 1, 'Y'),
(55, 'orang yang pertama kali menemukan html adalah ...', 'a.Tim Barnes lee', 'b.steve job', 'c.bill gates', 'd.norman kamaru', 'a', 1, 'Y'),
(56, 'pada html isi atau content ditulis pada bagian ...', 'a.body', 'b.head', 'c.footer', 'd.isi', 'a', 1, 'Y'),
(57, 'alamat yang kita gunakan untuk mengakses suatu website adalah ...', 'a.alamat web', 'b.domain name', 'c.address web', 'd.semua salah', 'b', 1, 'Y'),
(58, 'suatu jasa yang menyediakan sambungan internet di indonesia adalah ...', 'a.ISP', 'b.IPS', 'c.IIS', 'd.IRP', 'a', 1, 'Y'),
(59, 'untuk membuat paragraf pada html dapat menggunakan perintah ....', 'a. <p>', 'b. <pre>', 'c. <paragraf>', 'd. Space', 'a', 1, 'Y'),
(60, 'untuk menghubungkan website kita ke database bisa menggunakan bahasa ...', 'a.php', 'b.html', 'c.java', 'd.css', 'a', 1, 'Y'),
(61, '#**# merupakan karakter yang terdapat pada type data', 'a.text', 'b.password', 'c.radio', 'd.submit', 'b', 2, 'Y'),
(62, 'Type yang berfungsi untuk menerima masukan berupa teks dari pengguna adalah', 'a.Checkbox ', 'b.Submit', 'c.Text', 'd.File', 'c', 2, 'Y'),
(63, 'Atribute ACTION digunakan untuk', 'a. Menentukan nama form', 'b. Menetukan metode pengiriman yang dipakai', 'c. Menentukan alamat halaman web yang akan memproses masukan dariForm.', 'd. Menerima masukan berupa pilihan', 'c', 2, 'Y'),
(64, 'Sebutkan perintah untuk melakukan break pada pembuatan situs HTML!', 'a. HR', 'b. BR', 'c. LI', 'd. UL', 'b', 2, 'Y'),
(65, 'Perintah manakah yang dapat menggabungkan beberapa kolom menjadi satu?', 'a. BR', 'b. Colspan', 'c. Textarea', 'd. Rowspan', 'b', 2, 'Y'),
(66, 'Atribut yang digunakan untuk menentukan metode pengiriman yang dipakai\r\nadalah ', 'a. POST', 'b. SIZE', 'c. METHOD', 'd. MAXLENGTH', 'c', 2, 'Y'),
(67, 'Ragam dialog yang paling konvensional, perintah – perintah yang dioperasikan tergantung dari sistem computer yang di pakai dan berada dalam domain command language di sebut ?', 'a. Command line dialogue ', 'b. Form filling dialogue ', 'c. Natural language interface', 'd.Windowing sistem', 'a', 2, 'Y'),
(68, 'Perbedaan antara list box dengan combo box adalah ?', 'a. Pada list box pilihan langsung terlihat ', 'b.  Menampilkan sejumlah pilihan yang dapat dipilih ', 'c. Pada combo box pilihan terlihat jika menekan tombol', 'd. List box pilihan langsung tidak terlihat', 'c', 2, 'Y'),
(69, 'Letak monitor yang menyebabkan silau merupakan aspek ergonomik yang berhubungan dengan ?', 'a. Suara ', 'b. Pengukuran', 'c. Pencahayaan ', 'd. Kualitas udara', 'c', 2, 'Y'),
(70, 'Model aplikasi yang cederung menekankan style dibandingan dengan fitur aplikasi adalah?', 'a. Berbasis non dokumen ', 'b. Berbasis text', 'c. Berbasis dokumen ', 'd. GUI ', 'd', 2, 'Y'),
(71, 'Radio button dapat digunakan untuk menentukan ?', 'a. Riwayat pendidikan ', 'b. Hobby', 'c. Jenis kelamin', 'd. Alamat', 'c', 3, 'Y'),
(72, 'Fungsi yang digunakan untuk membentuk garis tetapi terputus – putus adalah ?', 'a. Dash', 'b. solid', 'c. dot', 'd. transparant', 'a', 3, 'Y'),
(73, 'Yang merupakan aspek – aspek dalam sistem computer adalah ?', 'a. Aspek psikologi ', 'b. Aspek manusia', 'c. Aspek sosiologi ', 'd. Aspek komunikasi', 'b', 3, 'Y'),
(74, 'Banyaknya cahaya yang dipantulkan oleh pemukaan objek biasa disebut dengan ?', 'a. kecerahan', 'b. lumimas', 'c. kontras', 'd. penglihatan', 'b', 3, 'Y'),
(75, 'Sistem koordinat pada pemrograman windows terdiri dari dua yaitu koordinat ?', 'a.  Fisik dan logika', 'b.  Fisik dan structural', 'c. Program dan fisik', 'd. Logika dan struktal', 'a', 3, 'Y'),
(76, 'Keyboard yang diciptakan oleh christoper latham sholes, 1870-an adalah jenis keyboard ?', 'a. klockenberg', 'b. qwerty', 'c. alphabetic', 'd. numeric', 'b', 3, 'Y'),
(77, 'Kondisi yang hanya memberikan kesan visual untuk manipulasi obyek pada prinsip desain antar muka sering disebut ?', 'a. Consistency', 'b. Explicit actions', 'c. Implied actions', 'd. Direct manipulation', 'c', 3, 'Y'),
(78, 'Terdapat 5 faktor yang diperlukan dalam perancangan tampilan berbasis grafis yaitu ?', 'a. Perancangan struktur diaglog', 'b. Perancangan penangan kesalahan', 'c. Urutan visual dan focus pengguna ', 'd. Urutan penyajian', 'c', 3, 'Y'),
(79, 'Penggunaan keyboard yang sesuai dengan bentuk lekuk tangan merupakan aspek ergonomic yang berhubungan dengan ?', 'a. pencahayaan', 'b. kebiasaan dalam bekerja', 'c. pengukuran', 'd. urutan penyajian', 'b', 3, 'Y'),
(80, 'Aspek pada sistem computer yang berhubungan dengan user di sebut ?', 'a. User interface', 'b. Brainware', 'c. Hardware', 'd. Software ', 'd', 3, 'Y'),
(81, 'Program yang biasa dipakai oleh pemakai untuk melakukan tugas – tugas, misalnya membuat dokumen, manipulasi photo dan membuat laporan disebut ?', 'a. Piranti bantu mesin', 'b. Piranti bantu aplikasi', 'c. Piranti bantu hardware', 'd.  Piranti bantu brainware', 'b', 4, 'Y'),
(82, 'Pada dasarnya seluruh warna yang ada bermula dari primer, yang di sebut dengan warna primer adalah ?', 'a. Merah, Hijau, Hitam', 'b. Merah, Hijau, Biru', 'c. Putih, Hitam, Merah', 'd. Putih, Hitam, Hijau', 'b', 4, 'Y'),
(83, 'Pada sistem pewarnaan RGB (0.0.0) akan menghasilkan warna yaitu ?', 'a. merah', 'b. hijau', 'c. kuning', 'd. biru', 'a', 4, 'Y'),
(84, 'Yang merupakan hardware input pada sistem computer adalah ?', 'a. mouse', 'b. hardsisk', 'Monitor', 'Ram', 'a', 4, 'Y'),
(85, 'Manusia akan lebih nyaman apabila tombola tau keyboard tidak berat proses penekanannya merupakan contoh factor brainware dalam merancang antarmuka yaitu aspek ?', 'a. pendengaran', 'b. sentuhan', 'c. penglihatan', 'd. pengendalian', 'b', 4, 'Y'),
(86, 'Faktor kenyamanan kerja yang mempunyai penagruh nyata dalam hal peningkatkan maupun penurunan efisiensi dan efektifitas kerja disebut?', 'a. Antropometrik', 'b. Ergonomic', 'c. Estetika ', 'd. Geometrik', 'b', 4, 'Y'),
(87, 'Dalam Pembutan HTML, Kita mengenal bahasa yang digunakan, kata <body>\r\nmenunjukkan:', 'a. Kepala dari HTML', 'b. Kaki dari HTML', 'c. Badan dari HTML', 'd. Header and Footer dari HTML', 'c', 4, 'Y'),
(88, 'Apa kepanjangan dari HTML?', 'a. Hyper text mail language', 'b. Hyper text mark up language', 'c. Hyper team master language', 'd. Hyper team mode language', 'b', 4, 'Y'),
(89, 'kegunaan form adalah…', 'a. memperoleh informasi pembelian secara online', 'b. untuk mencetak miring dalam pembuatan web', 'c. untuk melihat data-data yang tersedia', 'd. untuk melakukan hubungan local antar computer', 'a', 4, 'Y'),
(90, 'Saat membuat list, value DISC digunakan untuk?', 'a. Bullet Lingkaran', 'b. Bullet Titik', 'c. Bullet Segilima', 'd. Bullet Segitiga', 'b', 4, 'Y'),
(91, 'Yang dimaksud dengan halaman Web adalah', 'a. Halaman elektronik yang dibuka dengan email', 'b. Halaman online bisa di download', 'c. Halaman digital yang dibuka dengan web browser', 'd. Digital online yang terhubung dengan internet', 'c', 5, 'Y'),
(92, 'Tahun berapa web di buat?', 'a. 1993', 'b. 1999', 'c. 1998', 'd. 1991', 'd', 5, 'Y'),
(93, 'Browser bawaan dari windows adalah ?', 'a. Opera mini.', 'b. Mozila', 'c. Internet Explorer', 'd. Safari', 'c', 5, 'Y'),
(94, 'Apa kepanjangan WWW ?', 'a. World Wide Web', 'b. Web Wide World', 'c. World Web Wide', 'd. Web World Wide', 'a', 5, 'Y'),
(95, 'Apa Fungsi atribut “align” dalam HTML ?', 'a. Mengatur panjang ', 'b. Perataan tabel', 'c. Tebal garis tepi    ', 'd. mengatur lebar ', 'b', 5, 'Y'),
(96, 'Untuk menampilkan data pada setiap sel tabel data disebut ?', 'a. Table Data', 'b. Table Row', 'c. Tabel Biologi', 'd. Portable', 'a', 5, 'Y'),
(97, 'Ukuran Border dalam ….?', 'a. CM', 'b. Liter', 'c. Pixel', 'd. Mph', 'c', 5, 'Y'),
(98, 'apa fungsi dari <center> adalah.....', 'a. menampilkan informasi  ', 'b. rata tengah', 'c. mendefinisikan table ', 'd. mempertebal tulisan ', 'b', 5, 'Y'),
(99, 'Apa fungsi bg color dalam membuat table …', 'a. warna latar belakang table', 'b. warna latar belakang html', 'c. warna latar belakang teks', 'd. warna latar belakang monito', 'a', 5, 'Y'),
(100, 'tabel merupakan..', 'a. Tulisan berjalan', 'b. informasi dalam bentuk baris dan kolom', 'c. background', 'd. efek suara', 'b', 5, 'Y'),
(105, 'apa itu IMK?', 'interaksi Manusia komputer', 'interaksi Manusia interaksi', 'interaksi Manusia jjj', 'interaksi komputer manusia', 'a', 5, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `waktu` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `waktu`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(512) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `gambar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nim`, `email`, `password`, `jurusan`, `level`, `gambar`) VALUES
(30, 'pilra gustian', '09011181621124', 'pilragustia@gmail.com', '$2y$10$MAJN50qMJD3QLAirEIkHK.QLzC1c/wq5cDxLCC5yOcVOvuSSbaJ6W', 'Teknik Informatika', 'mahasiswa', '5de5e36d44084.png'),
(31, 'mimi fitri', '09011181621125', 'mimifitria@gmail.com', '$2y$10$KHDms/E2o7wgayvDRpj7y.QvYYVBfweFPAb55N2L4iRukwHNm4Nsi', 'Sistem Informasi', 'mahasiswa', '5de603f6e1ea4.png'),
(33, 'admin', '1', 'admin@gmail.com', '$2y$10$1vCPj.prx6TeQzY2wC3lSO7v8p5PbPBqHoL1fkBdlf2eLaFW5Ql/q', '-', 'dosen', '5de7c9122e484.png'),
(34, 'Ahmad Fali', '123', '123@gmail.com', '$2y$10$yQjymKj0fp61gR3MvmHLHezO015NC6Rw5tn6/BfWQnKiAk53WAMai', 'SIs', 'mahasiswa', '5de8ac1ad57ab.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileUpload`
--
ALTER TABLE `fileUpload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa1`
--
ALTER TABLE `mahasiswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`no_soal`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileUpload`
--
ALTER TABLE `fileUpload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mahasiswa1`
--
ALTER TABLE `mahasiswa1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `no_soal` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
