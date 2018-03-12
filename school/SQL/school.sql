-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 12:27 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `abt_id` int(11) NOT NULL,
  `abt_topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`abt_id`, `abt_topic`) VALUES
(1, 'Al Amin Jamia Was established at 1987 to have a goal to provide a very good education system. Bangladesh is rissing very smothly in the IT sector. For, that reasone we provide thecnical suppport to the student. We want to create a student who is not only an inteligence but also very well in manner.'),
(2, 'Al Amin Jamia Islamia High School was built to spread moral education with the co-operation of the Sub-divisional officer and social elites.  In course of time, the school is gradually going on towards the top position of the prosperity.  Dynamic management,young, old, experience and skilled teachers altogether are determined to make a glorious school. Education must be reflected on the society to make a worthy citizen of the country. I hope that this worthy citizen must lead the future nation. I would like to offer a lot of thanks to the honorable managing committee, teachers, guardians, students and the massive people of Islampur...:)');

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `ac_name` varchar(100) NOT NULL,
  `ac_date` varchar(30) NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`ac_id`, `ac_name`, `ac_date`) VALUES
(2, '   S.S.C Exam', 'February,16-2016.'),
(4, 'Mid Tream-2106', 'February,19-2016'),
(5, 'Mid Term_2-2016', 'June,06-2016'),
(6, ' Semeter Final', 'August,7-2017'),
(8, '  Pretes Exams', '6th September, 2017'),
(9, '   JSC Test Exam', '25th October, 2015');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `user`, `pass`) VALUES
(1, 'root', 'neub');

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE IF NOT EXISTS `bot` (
  `bot_id` int(255) NOT NULL AUTO_INCREMENT,
  `bot_name` varchar(255) NOT NULL,
  `bot_des` varchar(255) NOT NULL,
  `bot_mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`bot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`bot_id`, `bot_name`, `bot_des`, `bot_mobile`) VALUES
(19, 'Dr. Abdul Kuddus', 'Cairman', '+8801711-123456'),
(20, 'Mr. Jasim Uddin Sharker ', 'Secretary', '+8801911-123456'),
(21, 'Mr. Shahin Mia', 'Vice Chairman', '+8807174-123456'),
(22, 'Mr. Kobir Uddin', 'Member', '+8801715-123456'),
(23, 'Mrs. Selina Sultana', 'Member', '+8801712-123456'),
(25, 'Mr. Imdadul haque Khaled', 'Member', '+8801712-123456'),
(26, 'Mr. Ahmed Dider Rahat', 'Member', '+8801920-135759'),
(28, 'Mr. Shamim Hussain Mulla', 'Member', '+8801711-000090'),
(29, 'Mr. Moyna Mia', 'Member', '+8801711-444555'),
(37, 'Mr. Sheik Md. Sultan', 'Member', '01789-123499'),
(40, 'Mr. Kobir Ahmed Chowdhury', 'Member', '+88018220-95112');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `cnt_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`cnt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cnt_id`, `cnt_number`, `email`, `website`) VALUES
(1, '0821-760001', 'alaminjamia@gmail.com', 'www.alaminjamia.edu.bd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `description`) VALUES
(8, 'Sommanona', '14617736661461773666798.jpg', 'The principal received an award from the critic for great achivement in the preveous results.'),
(13, 'Prayer', '146177425714617742571922.jpg', 'The students and teachers are prayaring for the up comming public exam.'),
(19, 'girls section', '146207800414620780048304.jpg', 'We open our new building for the girls section.'),
(20, 'Prayer2', '146207810714620781079823.jpg', 'Teacher and students are praying for the upcomming SSC exam');

-- --------------------------------------------------------

--
-- Table structure for table `notice_achive`
--

CREATE TABLE IF NOT EXISTS `notice_achive` (
  `na_id` int(11) NOT NULL AUTO_INCREMENT,
  `na_topic` text NOT NULL,
  `na_option` enum('achivement','notice','','') NOT NULL,
  PRIMARY KEY (`na_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `notice_achive`
--

INSERT INTO `notice_achive` (`na_id`, `na_topic`, `na_option`) VALUES
(8, 'Our School will be close the addmission process in 26 January 2016.', 'notice'),
(10, 'All the student are advised to admitted in the new class by paying your all duies.', 'notice'),
(11, 'The Anual Sports week stars from 25 January 2016. All The Student are advised to attend the programe.', 'notice'),
(12, 'All the S.S.C cendidates are strongly advised to collect their admit card from the addmission office.', 'notice'),
(13, 'All the student are advised to test their blood group in the office hour in the school common room.', 'notice'),
(14, 'The Anual cultural week stars from 25 November 2016. All The Student are advised to attend the programe.', 'notice'),
(15, '1st in Sylhet Board in 2009 SSC exam.', 'achivement'),
(16, 'First in 2011 S.S.C. Exam 2015', 'achivement'),
(17, '1st in Sylhet Board in 2010 SSC exam.', 'achivement'),
(18, '1st in Sylhet Board in 2015 SSC exam.', 'achivement'),
(19, '1st in Nation Debeat Campionship 2015.', 'achivement'),
(20, '2nd in Nation Debeat Campionship 2014.', 'achivement'),
(21, '1st in Sylhet Board in 2013 JSC exam.', 'achivement');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `re_title` varchar(256) NOT NULL,
  `file` varchar(256) NOT NULL,
  `re_description` text NOT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`re_id`, `re_title`, `file`, `re_description`) VALUES
(1, 'results1', 'results1.docx', 'mid term result');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `te_id` int(11) NOT NULL AUTO_INCREMENT,
  `te_name` varchar(255) NOT NULL,
  `te_des` varchar(255) NOT NULL,
  `te_mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`te_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`te_id`, `te_name`, `te_des`, `te_mobile`) VALUES
(1, 'Mr. Jasim Uddin Sharker', 'Principles', '+8801911-123456'),
(3, 'Mr. Abdur Rahim', 'Assistant Teacher', '+8801611-123456'),
(4, 'Mr. Samsul Mia', 'Assistant Teacher', '+8801711-123456'),
(5, 'Mr. Sorif Uddin', 'Assistant Teacher', '+8801717-123456'),
(6, 'Mrs. Runa Liala', 'Assistant Teacher', '+880177-123456'),
(7, 'Mrs. Bilkis Begum Sabana', 'Assistant Teacher (IT)', '+8801715-321239'),
(8, 'Mr. Abdus Subhan Sorif', 'Junior Teacher', '+8801711-321588'),
(9, 'Mrs. Soniya Khatun', ' Junior Teacher', ' +8801511-12345'),
(11, 'Mrs. Bushra Akters', 'Junior Teachers', '+8801517-12345s'),
(12, 'Mr. Abdullah Bin Khalid', 'Junior Teacher', '+8801918-123490'),
(13, 'Ms. Rimi Beguam', 'Junior Teacher', '+8801756541234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
