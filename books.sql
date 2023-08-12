-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Nov 2019 pada 23.35
-- Versi server: 5.7.19
-- Versi PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` text(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `halaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `gambar`, `judul`, `penulis`, `isbn`, `ringkasan`, `stok`, `harga`, `tahun`, `edisi`, `penerbit`, `halaman`, `kategori`,`created_at`, `updated_at`) VALUES
(1, 'buku_1.jpg', 'Atomic Habits', 'James Clear', '5234142', 'No matter your goals, Atomic Habits offers a proven framework for improving--every day. James Clear, one of the world leading experts on habit formation, 
reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', '18', '79000', '2018', '4th', 'PT Bekasi', '500', 'Slice of Life','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(2, 'buku_2.jpg', 'Ego is the enemy', 'Ryan Holiday', '1781257019', 'As in The Obstacle is the Way, Ryan Holiday delivers practical and inspiring philosophy, this time exploring 
a powerful concept that runs back centuries, across borders and schools of thought: ego.Ego is our biggest enemy. Early in our careers, it can prevent us from learning and developing our talents. 
When we taste success, ego can blind us to our own faults, alienate us from others and lead to our downfall. In failure, ego is devastating and makes recovery all the more difficult.'
, '99', '109000', '2016', '4th', 'Profile Books Ltd', '226', 'Business & Economics - Responsibility and Business Ethics','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(3, 'buku_3.png', 'The Art of Public Speaking: The Original Tool for Improving Public Oration', 'James Clear', '5234142', 'Do you have trouble getting up in front of an audience? Are you struggling to get your point across? Public 
speaking can be nerve-wracking, especially if you’re a naturally nervous person or if you’re underprepared. 
Originally published in 1915, The Art of Public Speaking has been the go-to guide for those who want 
to better their speaking abilities for more than a century.', '23', '99000', '2018', '1st', 'Clydesdale Press', '512', 'Self-Help, Relationships & Lifestyle - The Art of Communication','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(4, 'buku_4.jpg', 'The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life', 
'Mark Manson', '0062457713', 
'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be 
"positive" all the time so that we can truly become better, happier people.', 
'1002', '129000', '2019', '2', 'Harper', '224', 'Self-Help, Relationships & Lifestyle - Personal Growth','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(5, 'buku_5.jpg', 'The Alchemist : A Fable About Following Your Dream', 'Paulo Coelho', '0722532938', 
'Every few decades a book is published that changes the lives of its readers forever. This is such a book  
a beautiful parable about learning to listen to your heart, 
read the omens strewn along life’s path and, above all, follow your dreams.', 
'873', '50000', '1999', '2', 'New Ed', '192', 'Fiction','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(6, 'buku_6.jpg', '101 Essays That Will Change the Way You Think', 'Brianna Wiest', '1945796065', 
'No matter your goals, Atomic Habits offers a proven framework for improving--every day.', 
'3242', '58000', '2016', '1st', 'Thought Catalog Books', '445', 'Self-Help, Relationships & Lifestyle - Self Help','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(7, 'buku_1.jpg', 'Atomic Habits', 'James Clear', '5234142', 'No matter your goals, Atomic Habits offers a proven framework for improving--every day. James Clear, one of the world leading experts on habit formation, 
reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', '18', '79000', '2018', '4th', 'PT Bekasi', '500', 'Slice of Life','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(8, 'buku_2.jpg', 'Ego is the enemy', 'Ryan Holiday', '1781257019', 'As in The Obstacle is the Way, Ryan Holiday delivers practical and inspiring philosophy, this time exploring 
a powerful concept that runs back centuries, across borders and schools of thought: ego.Ego is our biggest enemy. Early in our careers, it can prevent us from learning and developing our talents. 
When we taste success, ego can blind us to our own faults, alienate us from others and lead to our downfall. In failure, ego is devastating and makes recovery all the more difficult.'
, '99', '109000', '2016', '4th', 'Profile Books Ltd', '226', 'Business & Economics - Responsibility and Business Ethics','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(9, 'buku_3.png', 'The Art of Public Speaking: The Original Tool for Improving Public Oration', 'James Clear', '5234142', 'Do you have trouble getting up in front of an audience? Are you struggling to get your point across? Public 
speaking can be nerve-wracking, especially if you’re a naturally nervous person or if you’re underprepared. 
Originally published in 1915, The Art of Public Speaking has been the go-to guide for those who want 
to better their speaking abilities for more than a century.', '23', '99000', '2018', '1st', 'Clydesdale Press', '512', 'Self-Help, Relationships & Lifestyle - The Art of Communication','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(10, 'buku_4.jpg', 'The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life', 
'Mark Manson', '0062457713', 
'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be 
"positive" all the time so that we can truly become better, happier people.', 
'1002', '129000', '2019', '2', 'Harper', '224', 'Self-Help, Relationships & Lifestyle - Personal Growth','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(11, 'buku_5.jpg', 'The Alchemist : A Fable About Following Your Dream', 'Paulo Coelho', '0722532938', 
'Every few decades a book is published that changes the lives of its readers forever. This is such a book  
a beautiful parable about learning to listen to your heart, 
read the omens strewn along life’s path and, above all, follow your dreams.', 
'873', '50000', '1999', '2', 'New Ed', '192', 'Fiction','2022-06-01 20:12:12', '2022-06-01 20:12:12'),
(12, 'buku_6.jpg', '101 Essays That Will Change the Way You Think', 'Brianna Wiest', '1945796065', 
'No matter your goals, Atomic Habits offers a proven framework for improving--every day.', 
'3242', '58000', '2016', '1st', 'Thought Catalog Books', '445', 'Self-Help, Relationships & Lifestyle - Self Help','2022-06-01 20:12:12', '2022-06-01 20:12:12');


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
