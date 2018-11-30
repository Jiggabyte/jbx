-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 01:13 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creditsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(255) NOT NULL,
  `application_no` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `title` text COLLATE utf8_bin,
  `names` text COLLATE utf8_bin,
  `username` text COLLATE utf8_bin,
  `age` text COLLATE utf8_bin,
  `gender` text COLLATE utf8_bin,
  `phone` text COLLATE utf8_bin,
  `address` text COLLATE utf8_bin,
  `employ_status` text COLLATE utf8_bin,
  `employ_no` text COLLATE utf8_bin,
  `organization` text COLLATE utf8_bin,
  `commence` text COLLATE utf8_bin,
  `bvn` text COLLATE utf8_bin,
  `sales` text COLLATE utf8_bin,
  `created` text COLLATE utf8_bin,
  `updated` text COLLATE utf8_bin,
  `amount` text COLLATE utf8_bin,
  `dura` text COLLATE utf8_bin,
  `payment` text COLLATE utf8_bin,
  `status` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `application_no`, `title`, `names`, `username`, `age`, `gender`, `phone`, `address`, `employ_status`, `employ_no`, `organization`, `commence`, `bvn`, `sales`, `created`, `updated`, `amount`, `dura`, `payment`, `status`) VALUES
(1, 'b43858ff54075539cddb54721a1a7ff0', 'Chief.', 'Sixtus Onumajuru', 'jigga.e10@gmail.com', '04/01/1982', 'Choose Gender', '8076567781', '18 Poly Chukwueke', 'Contract', '267868698789', 'Jigga Byte', '12/03/1990', '798797909', '45300', NULL, NULL, '770000', '7', 'unpaid', 'pending'),
(2, '079c0f2435b13746bb3ff01066029415', 'Chief.', 'Sixtus Onumajuru', 'jigga.e10@gmail.com', '04/01/1982', 'Choose Gender', '8076567781', '18 Poly Chukwueke', 'Contract', '267868698789', 'Jigga Byte', '12/03/1990', '798797909', '45300', NULL, NULL, '770000', '7', 'unpaid', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` smallint(11) UNSIGNED NOT NULL,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `title`, `summary`, `content`) VALUES
(1, '2018-03-01', 'Diabetes Mellitus', 'Diabetes is a disorder of carbohydrate and fat metabolism ...', '<p><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Reviewed by Dr. Chris Emodi</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Diabetes is a disorder of carbohydrate metabolism in which glucose in the body doesn&rsquo;t enter the body cells to produce energy, due to lack, insufficient or inactive insulin in the body. The accumulation of glucose leads to its rise in blood and appearance in urine. Insulin is a hormone (biologic chemical) produced by the pancreas that controls sugar in the body.</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><strong><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Types of Diabetes</span></strong></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">There are three major types:</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">1. Type 1 diabetes (insulin dependent) there is absolute insulin lack. It occurs more in childhood and adolescence but can occur at any age. Onset is acute (sudden, developing over a period of few days to weeks).</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">2. Type 2 (Non insulin dependent or maturity onset) Insulin produced is either very little or ineffective. It accounts for the majority of cases, 90-95%. Usually occurs after the age of 40, but can develop anytime in the adult. Onset is gradual, developing over a period of years. It is developed as a result of genetic and environmental factors.</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">3. Gestational diabetes (Pregnancy induced) this is associated with pregnancy and disappears within 6 weeks of delivery, but may reappear in later life.&nbsp;</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><strong><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Major risk factors to diabetes</span></strong></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">The factors that contribute to its development include:-</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&nbsp;</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Family history</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Older age: more than 45 years</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Obesity</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Physical inactivity</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Women with history of gestational diabetes</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;History of impaired glucose tolerance or fasting glucose.&nbsp;</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><strong><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Signs and Symptoms</span></strong></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Increased urination (Polyuria) Excessive thirst (Polydipsia) Excessive eating (Polyphagia) Weight loss despite good appetite Itching of the vulva in women Invasion by ants of urine recently passed Foot ulcer&nbsp; Weakness and tiredness There may be no symptoms as some patients are picked up by chance during routine investigation</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><strong><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Management and Control</span></strong></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Diabetes mellitus is not cured but controlled. Treatment aims at maintaining glucose level within normal range without too many swings (high or low). Some are controlled by diets only while others may require drug therapy. Diet high in fruits and vegetables, low fat and graduated complex carbohydrates. Avoid refined sugars like table sugar, \'sweets, biscuits, etc. Report signs/symptoms to the doctor; adhere to medical advice as regards drugs and food. Check fasting blood sugar regularly, Stop smoking and much alcohol. Reduce weight, frequent exercise.</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><strong><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Complications</span></strong></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">They result sudden rise to very high levels or poor control over a long time</span></p>\r\n<p style="font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;"><span style="font-size: 14.0pt; font-family: \'Georgia\',\'serif\'; color: black;">Visual impairment which may lead to blindness, negative effect on nerves to various parts of the body; Foot decay Cataracts eye lens does not allow light to pass through, Renal failure Coma and death.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` text COLLATE utf8_bin,
  `username` text COLLATE utf8_bin,
  `password` text COLLATE utf8_bin,
  `email` text COLLATE utf8_bin,
  `imager` text COLLATE utf8_bin,
  `created` text COLLATE utf8_bin,
  `block` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `age` text COLLATE utf8_bin,
  `gender` text COLLATE utf8_bin,
  `location` text COLLATE utf8_bin,
  `level` text COLLATE utf8_bin,
  `hashor` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `imager`, `created`, `block`, `active`, `age`, `gender`, `location`, `level`, `hashor`) VALUES
(1, 'Sixtus Onumajuru', 'jigga.e10@gmail.com', '4e73b276447c1111ac7bdea2da4c2d79', NULL, NULL, '2018-10-17 18:40:49', 0, 1, NULL, '', NULL, 'admin', '1e1b54d3897ba5faaba2fbdffa331956'),
(2, 'Sixtus Onumajuru', 'root', '4e73b276447c1111ac7bdea2da4c2d79', NULL, NULL, '2018-10-18 07:43:48', 0, 1, NULL, '', NULL, NULL, 'ed318dac42d634c4504b47de78500335'),
(3, 'Sixtus Onumajuru', 'jigga_e10@hotmail.com', '4e73b276447c1111ac7bdea2da4c2d79', NULL, NULL, '2018-10-18 07:44:55', 0, 1, NULL, '', NULL, NULL, 'd6389532492c734c13114c6f9bc1ee7c'),
(4, 'Sixtus Onumajuru', 'jigga.e10@gmail.comkj', '4e73b276447c1111ac7bdea2da4c2d79', NULL, NULL, '2018-10-18 12:33:06', 0, 1, NULL, '', NULL, NULL, '05428c2fe84ec1092a38b232e0457c43'),
(5, 'Sixtus Onumajuru', 'onumajuru_su@yahoo.comoi', 'f4499780c2df278fcbb738d33add1784', NULL, NULL, '2018-10-18 12:38:14', 0, 1, NULL, '', NULL, NULL, 'a6471bf43cd37d4521f42e74e535ea96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
