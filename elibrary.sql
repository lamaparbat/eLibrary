-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2022 at 03:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `src` varchar(150) NOT NULL,
  `date` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `src`, `date`) VALUES
(1, 'Parbat Lama', 'parbatlama75@gmail.com', 'hacker', '9843431122323', 'next.png', '2022-05-07 08:02:11'),
(2, 'Ram', 'ram@gmail.com', 'hacker', '98237263123', 'cat.webp', 'urrent_timestamp(');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `author` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `published` varchar(150) NOT NULL,
  `src` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rack_no` varchar(11) NOT NULL,
  `date` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `category`, `description`, `published`, `src`, `quantity`, `rack_no`, `date`) VALUES
(12, 'Basic Biology', 'Dr. Simon Clerk', 'Biology', '', '2017-02-26', '197777_1_ftc.jpeg', 2, '0', '2022-05-08 16:13:24'),
(20, 'Python Programming', 'Magnus Lie hetland', 'Computer Science', '', '2022-03-17', 'Cover.jpeg', 11, '0', '2022-05-08 16:13:24'),
(21, 'Quantam Physics', 'Steven Holzner', 'Physics', '', '2021-09-17', 'download.jpeg', 0, '0', '2022-05-08 16:13:24'),
(22, 'Social Science', 'Aesra', 'History', '', '2022-03-04', 'IJSS.jpeg', -2, '0', '2021-05-08 16:13:24'),
(30, 'React JS', 'Facebook', 'Programming', 'React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies.', '2022-05-07', 'react.jpg', 6, 'D-23', '2022-05-08 16:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `fined_users`
--

CREATE TABLE `fined_users` (
  `id` int(11) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `amount` int(11) NOT NULL,
  `exceed_day` int(11) NOT NULL,
  `date` varchar(150) NOT NULL,
  `src` text NOT NULL,
  `bookname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fined_users`
--

INSERT INTO `fined_users` (`id`, `user_email`, `amount`, `exceed_day`, `date`, `src`, `bookname`) VALUES
(25, 'rohan@gmail.com', 90, 0, '2022/05/08', 'backend/books_img/Cover.jpeg', 'Python Programming'),
(26, 'rohan@gmail.com', 90, 1, '2022/05/09', 'backend/books_img/Cover.jpeg', 'Python Programming'),
(27, 'uday123@gmail.com', 90, 1, '2022/05/09', 'backend/books_img/Cover.jpeg', 'Python Programming'),
(28, 'zyan@gmail.com', 50, 0, '2022/05/09', 'backend/books_img/197777_1_ftc.jpeg', 'Basic Biology');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE `issued` (
  `id` int(11) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `bookname` varchar(150) NOT NULL,
  `book_id` int(11) NOT NULL,
  `issued_date` varchar(150) NOT NULL,
  `deadline` varchar(150) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`id`, `user_email`, `bookname`, `book_id`, `issued_date`, `deadline`, `src`) VALUES
(29, 'rohan@gmail.com', 'Python Programming', 20, '2022/03/08', '2022/4/08', 'Cover.jpeg'),
(30, 'uday123@gmail.com', 'Python Programming', 20, '2022/04/08', '2022/5/08', 'Cover.jpeg'),
(35, 'uday123@gmail.com', 'Python Programming', 20, '2022/05/08', '2022/3/08', 'Cover.jpeg'),
(40, 'zyan@gmail.com', 'Quantam Physics', 21, '2022/05/09', '2022/6/09', 'backend/books_img/download.jpeg'),
(44, 'cristiano@gmail.com', 'React JS', 30, '2022/03/01', '2022/6/09', 'react.jpg'),
(45, 'cristiano@gmail.com', 'Basic Biology', 12, '2022/05/09', '2022/6/09', '197777_1_ftc.jpeg'),
(46, 'uday123@gmail.com', 'Basic Biology', 12, '2022/05/09', '2022/6/09', '197777_1_ftc.jpeg'),
(47, 'zyan@gmail.com', 'Basic Biology', 12, '2022/05/09', '2022/3/09', '197777_1_ftc.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `src` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `phone`, `src`, `date`) VALUES
(7, 'Zyan Malik', 'zyan@gmail.com', 'hacker', '9847221134', '277461918_1601787943531389_4358735825725138951_n.jpg', '2022/03/22'),
(9, 'Cristiano Ronaldo', 'cristiano@gmail.com', 'hacker', '98472121432', '279782523_566332828216220_7239623229599729730_n.jpg', '2022/03/22'),
(11, 'Jamal', 'jamal@gmail.com', 'hacker', '984372632323', 'hp.webp', '2022/04/04'),
(15, 'Hari Bahadur', 'hari@gmail.com', 'hacker', '98437236723', 'download.jpeg', '2022/04/26'),
(16, 'Kamal ', 'kamal@gmail.com', 'kamal', '9834773412', 'next.png', '2022/05/08');

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE `reserved` (
  `id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `book_id` int(11) NOT NULL,
  `bookname` text NOT NULL,
  `src` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`id`, `user_email`, `book_id`, `bookname`, `src`, `date`) VALUES
(29, 'rohan@gmail.com', 12, 'Basic Biology', 'backend/books_img/197777_1_ftc.jpeg', '2022/05/08'),
(30, 'kamal@gmail.com', 12, 'Basic Biology', 'backend/books_img/197777_1_ftc.jpeg', '2022/05/08'),
(32, 'rosan@gmail.com', 12, 'Basic Biology', 'backend/books_img/197777_1_ftc.jpeg', '2022/05/08');

-- --------------------------------------------------------

--
-- Table structure for table `returned`
--

CREATE TABLE `returned` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returned`
--

INSERT INTO `returned` (`id`, `username`, `user_email`, `bookname`, `book_id`, `date`, `src`) VALUES
(10, 'Parbat Lama', 'parbatlama70@gmail.com', 'Basic Biology', 12, '2022/03/26', '197777_1_ftc.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `src` varchar(150) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `src`, `date`) VALUES
(25, 'Uday kandel', 'uday123@gmail.com', 'hacker', '9834344522', 'cat.webp_6277b6abbf35d', '22/05/08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fined_users`
--
ALTER TABLE `fined_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued`
--
ALTER TABLE `issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserved`
--
ALTER TABLE `reserved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returned`
--
ALTER TABLE `returned`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `fined_users`
--
ALTER TABLE `fined_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `issued`
--
ALTER TABLE `issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reserved`
--
ALTER TABLE `reserved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `returned`
--
ALTER TABLE `returned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
