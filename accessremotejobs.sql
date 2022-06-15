-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 11:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accessremotejobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_views`
--

CREATE TABLE `job_views` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `user_ip` text NOT NULL,
  `country` int(11) NOT NULL,
  `date_clicked` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posted_jobs`
--

CREATE TABLE `posted_jobs` (
  `id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `job_category` text NOT NULL,
  `application_link` text NOT NULL,
  `role_open_mode` text NOT NULL,
  `job_description` text NOT NULL,
  `job_type` text NOT NULL,
  `salary_range` text NOT NULL,
  `start_date` datetime NOT NULL,
  `application_deadline` date NOT NULL,
  `estimated_period` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `email` text DEFAULT NULL,
  `company_location` text NOT NULL,
  `company_logo` text NOT NULL,
  `company_website` text NOT NULL,
  `region` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT current_timestamp(),
  `currency` text DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `ref_number` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `posted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posted_jobs`
--

INSERT INTO `posted_jobs` (`id`, `job_title`, `job_category`, `application_link`, `role_open_mode`, `job_description`, `job_type`, `salary_range`, `start_date`, `application_deadline`, `estimated_period`, `company_name`, `email`, `company_location`, `company_logo`, `company_website`, `region`, `date_posted`, `currency`, `amount`, `ref_number`, `status`, `transaction_id`, `posted`) VALUES
(1, 'IT Manager', 'Information Technology', 'https://osabox.com/jobs', '1', '<p>The job requires the following conditions&nbsp;</p><ol><li>Bachelors degree in Computer Science</li><li>Masters will be an advantage</li></ol>', 'Full Time', 'Grade 9 - ZMW 350 K per annum', '2022-06-13 00:00:00', '2022-07-19', 36, 'Axis Medical Center', 'mulscoding@gmail.com', 'Lusaka, Great East Road.', 'logo.jpeg', 'https://example.com', 'World Wide', '2022-06-13 20:42:08', 'USD', '108.00', 'AccessRemoteJobs-mulscoding@gmail.com1', 'successful', '3483237', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_views`
--
ALTER TABLE `job_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posted_jobs`
--
ALTER TABLE `posted_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_views`
--
ALTER TABLE `job_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posted_jobs`
--
ALTER TABLE `posted_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
