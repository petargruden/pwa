-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(8, '18.05.2021.', 'Update test clanka', 'Real madrid attlettticcco', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(9, '18.05.2021.', 'REAL MADRID UPDATE', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(10, '18.05.2021.', 'REAL MADRID vs BARCELONA', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog2.png', 'Sport', 0),
(11, '18.05.2021.', 'Nogometna lopta', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, o', 'idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa idemo na povbjetu, odddddaaaa ', 'nog1.png', 'Sport', 0),
(12, '18.05.2021.', 'VELIKI Naslov je ovo', '                        Lorem ipsum dolor sit amet', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava1.png', 'Zabava', 1),
(13, '18.05.2021.', 'Naslov', '                        Lorem ipsum dolor sit amet', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava.jpg', 'Zabava', 0),
(14, '18.05.2021.', 'Party godine!!!', 'tvz party godine', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fuga nobis tempore quia, consequuntur dolorum, iusto at expedita laudantium, tenetur deserunt aperiam neque asperiores libero blanditiis inventore omnis est ullam!\r\n', 'zabava.jpg', 'Zabava', 0),
(15, '18.05.2021.', 'REAL MADRID vs BARCELONA', 'dadasd', 'vijestu su laznevijestu su laznevijestu su laznevijestu su lazne', '', 'Zabava', 1),
(16, '18.05.2021.', 'test za 4 limit', 'pokusaj ubacivanja testa 4 prikaza', 'pokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikazapokusaj ubacivanja testa 4 prikaza', 'zabava.jpg', 'Zabava', 0),
(17, '18.05.2021.', 'John D Carl', 'John D carl je god tarkova', 'aimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviranaimbot ima aktiviran', 'nog2.png', 'Zabava', 0),
(18, '18.05.2021.', 'Test 4 reda', 'kratki sadrzaj neki', 'lkajskjfghersuihasuoifj lkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifjlkajskjfghersuihasuoifj', 'zabava1.png', 'Zabava', 0),
(20, '24.05.2021.', '', '', '', '', 'Sport', 0),
(23, '24.05.2021.', '', '', '', '', 'Sport', 0),
(28, '24.05.2021.', 'FDSA', 'EDFSDFS', 'FDDSFDSFDS', '', 'Sport', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
