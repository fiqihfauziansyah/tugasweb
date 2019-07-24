-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 09:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idcomment` int(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `tanggal_comment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idpost` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idcomment`, `nama`, `tanggal_comment`, `idpost`, `comment`) VALUES
(21, 'eri', '2019-07-23 17:00:00', 19, 'sjfdhhdsheadsjjdsfj'),
(22, 'yan', '2019-07-23 17:00:00', 19, 'aweasidsakjhdkjdzhieukjdsahsdkjaakdhk'),
(23, 'anto', '2019-07-23 17:00:00', 22, 'fddsiorweiofsdhfnwier83289rdskjfhsk'),
(24, 'tresno', '2019-07-23 17:00:00', 22, 'fsdfewr9rsifdhifr87r98sdif'),
(25, 'idih', '2019-07-23 17:00:00', 20, 'fwierisdfhkjsdfkweirfhsdhfos');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(10) NOT NULL,
  `namakategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(1, 'berita'),
(2, 'profil'),
(3, 'pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(10) NOT NULL,
  `tanggalpost` datetime NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `idkategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `tanggalpost`, `penulis`, `judul`, `isi`, `idkategori`) VALUES
(19, '2019-07-24 09:07:12', 'admin', 'berita', 'asdasjfghjasfgasjhdbcasjhdahjsdjhasdgjhagdsjcbjasdjhadsjwagjhdsgdjhasgdjhagdjahsgdjahsgdjhasgdjhagghsajgdajsdgjhasdgjhasdgjhasdgjhagdjhagdhjxbahsjdgjhasbxasjhgdjhasgdjhasjhdgjhasdgjahdgasgjadsjhasdjhasjhdjahdjs', '2'),
(20, '2019-07-24 09:07:30', 'admin', 'test', 'rrerrrrrrrrrrrrrrrrrrrrrrrr5555555555555555555554rrrrrrrrrrrrrr', '1'),
(21, '2019-07-24 09:07:06', 'admin', 'anda', 'fgdfhjghjjjjjjjjhyuyjhgjhgjhgjhgj67jgjh7gjhgg', '3'),
(22, '2019-07-24 09:07:32', 'admin', 'oii', 'njhgjhbnmvdfgstrfyy7ghgj', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`) VALUES
(123, 'fiqih', 'fiqih', 'user'),
(321, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idcomment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
