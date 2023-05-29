

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tbmahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`id`, `nim`, `nama`, `alamat`, `email`, `jurusan`) VALUES
(1, '2201010241', 'Kadek Arlandi Mahesa Gautama Putra', 'Tabanan', 'apaaja@gmail.com', 'TI-Manajemen Data dan Informasi'),


CREATE TABLE `tbusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passkey` varchar(255) NOT NULL,
  `iduser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;