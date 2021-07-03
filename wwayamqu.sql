-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 15.29
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwayamqu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'agrobis', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peoples`
--

CREATE TABLE `peoples` (
  `id` int(9) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `peoples`
--

INSERT INTO `peoples` (`id`, `nama`, `alamat`, `email`) VALUES
(1, 'Mr. Arthur Schiller', '52658 Hillard Isle Apt. 089', 'ilindgren@example.com'),
(2, 'Jaiden Beahan IV', '1717 Keeling Island Suite 758', 'rice.dina@example.com'),
(3, 'Conor Ebert', '7474 Pollich Unions Apt. 857', 'sipes.destiney@example.net'),
(4, 'Ludwig Pollich', '477 Sallie Mills Suite 409', 'luciano.jaskolski@example.org'),
(5, 'Kathryn Wilderman Jr.', '051 Hackett Locks', 'patrick37@example.com'),
(6, 'Jerod Abshire', '5095 Bahringer Haven', 'lbauch@example.net'),
(7, 'Samara Denesik II', '10285 Goldner Valley Suite 185', 'igerhold@example.org'),
(8, 'Miss Ayana Little', '53695 Octavia Gardens', 'halvorson.ilene@example.com'),
(9, 'Amelia Renner DVM', '989 Haylee Trafficway Apt. 622', 'susie95@example.net'),
(10, 'Dr. Chyna Krajcik', '5631 Zola Pass Apt. 131', 'xgleason@example.org'),
(11, 'Frederic Cassin', '4382 Ashtyn Fork Suite 776', 'caterina91@example.com'),
(12, 'Cale Stark DDS', '161 Izaiah Branch Apt. 839', 'hettinger.danny@example.net'),
(13, 'Estell Bechtelar', '7862 Carroll Harbor', 'alexandro04@example.net'),
(14, 'Prof. Domenick Koss', '34363 Gregory Vista', 'elnora.brakus@example.com'),
(15, 'Donald Walsh', '2597 Leuschke Heights', 'amorar@example.org'),
(16, 'Eldridge Sipes', '00926 Hagenes Crossroad', 'hammes.rosa@example.com'),
(17, 'Janiya Hintz', '854 Cleveland Locks', 'rosanna05@example.org'),
(18, 'Prof. Craig Lesch', '244 Jerome Groves Suite 386', 'vprohaska@example.org'),
(19, 'Keeley Pfannerstill', '5240 Leora Plain Suite 645', 'rhowell@example.com'),
(20, 'Lawrence McCullough', '301 Maurice Springs', 'albina.gutkowski@example.com'),
(21, 'Kaylie Schaefer', '9742 Jaskolski Street', 'fmann@example.net'),
(22, 'Prof. Damian VonRueden', '62715 Brionna Roads Suite 091', 'bernita04@example.com'),
(23, 'Bailey Botsford', '935 Ola Motorway Apt. 736', 'jrippin@example.com'),
(24, 'Janie Hammes', '29738 Tiffany Terrace', 'rachel.hagenes@example.com'),
(25, 'Viva Bartell', '9038 Wolff Lock Suite 320', 'hector.gulgowski@example.com'),
(26, 'Prof. Alfreda Fisher V', '8040 Labadie Field', 'mclaughlin.jordon@example.com'),
(27, 'Ericka Kautzer', '3762 Verna Mews Apt. 103', 'mittie57@example.net'),
(28, 'Weldon Nienow', '96859 Bogan Skyway Apt. 866', 'zaria.deckow@example.org'),
(29, 'Brooklyn Steuber', '315 Houston Wall Suite 129', 'twest@example.org'),
(30, 'Miss Maureen Reichert DDS', '5165 Javon Branch Apt. 265', 'bayer.hipolito@example.com'),
(31, 'Katheryn Hessel', '12897 O\'Reilly Islands', 'kattie47@example.org'),
(32, 'Marcos Crooks V', '40653 Johnson Burg Apt. 840', 'michel13@example.com'),
(33, 'Bridgette Gottlieb III', '3409 Green View Suite 870', 'lewis83@example.com'),
(34, 'Myron Kautzer', '570 Verona Port Suite 330', 'swaniawski.myron@example.org'),
(35, 'Brandy Eichmann DDS', '8012 Ebba Manors Suite 833', 'rmann@example.com'),
(36, 'Nelson Roob II', '298 Irma Island', 'rowan.koepp@example.com'),
(37, 'Dario Ullrich', '368 Lindgren Mountains', 'sstanton@example.com'),
(38, 'Shanie Conroy Jr.', '2829 Leannon Views Suite 899', 'johnson.maxie@example.com'),
(39, 'Brenden Pfeffer III', '632 Alexandre Burgs', 'jo50@example.net'),
(40, 'Adriel Rippin V', '21432 Oda River Suite 145', 'nolan.tremaine@example.com'),
(41, 'Wilfred Gusikowski', '44576 Wintheiser Lane', 'wauer@example.net'),
(42, 'Dr. Donato Corkery IV', '05077 Trystan Alley', 'jerde.aurelie@example.com'),
(43, 'Dr. Ariel Hilpert Sr.', '2265 Jaskolski Vista Apt. 850', 'bo\'conner@example.net'),
(44, 'Dr. Misael Rice', '032 Johnson Square Suite 555', 'olson.benton@example.net'),
(45, 'Antonetta Zemlak', '4613 Vidal Ranch', 'caitlyn09@example.com'),
(46, 'Henri Dietrich', '07646 Greenholt Way', 'weimann.nolan@example.org'),
(47, 'Lenore Streich DDS', '70503 Glover Route', 'heathcote.erica@example.com'),
(48, 'Eliseo Kilback', '248 Belle Roads', 'iva.leannon@example.com'),
(49, 'Armand Grimes III', '34814 Janis Crossroad Suite 760', 'franecki.beverly@example.org'),
(50, 'Toni Daugherty', '00225 Jared Coves Apt. 270', 'gking@example.net'),
(51, 'Keagan Pouros', '6298 Devyn Shoal', 'spencer.violet@example.com'),
(52, 'Alexandrine Romaguera', '655 Hettinger Fort Apt. 479', 'kendall.dicki@example.net'),
(53, 'Cassidy Kunde', '219 Kiley Ville', 'wgleason@example.com'),
(54, 'Mr. Doris Crooks Sr.', '0245 Graham Prairie Suite 653', 'natasha.daniel@example.net'),
(55, 'Dr. Geovanni Cartwright', '245 Nona Radial Suite 323', 'bernadette25@example.org'),
(56, 'Karley Homenick', '0978 Chaya Keys Suite 182', 'nward@example.com'),
(57, 'Cornelius Windler DVM', '95270 Bosco Freeway Suite 873', 'onie.rowe@example.net'),
(58, 'Joshua Howe', '57878 Crist Islands Suite 239', 'eichmann.june@example.com'),
(59, 'Ivy Murphy', '0408 Nicolas Spring', 'nia38@example.org'),
(60, 'Alexandria Lockman', '226 Marlee Unions Apt. 975', 'nward@example.net'),
(61, 'Mr. Pablo Dibbert', '765 Coy Fords Suite 474', 'name.herzog@example.net'),
(62, 'Dr. Verner Dooley', '082 Jane Ranch', 'leopoldo27@example.org'),
(63, 'Emmett Pfeffer', '332 Lue Crossing', 'eliezer20@example.com'),
(64, 'Miss Chaya Waters Sr.', '7927 Mekhi Tunnel Apt. 780', 'pkovacek@example.org'),
(65, 'Kaleb Waelchi', '6824 Haylee Street', 'bo.hettinger@example.net'),
(66, 'Rachel O\'Reilly', '23258 Arnoldo Rapid', 'vivian40@example.com'),
(67, 'Laverne Hirthe', '23662 Mraz Meadow Apt. 632', 'clifton.heller@example.com'),
(68, 'Hosea Schuster', '51226 Leora Alley Apt. 790', 'german.klocko@example.net'),
(69, 'Dr. Drew Lowe PhD', '767 Althea Oval Suite 731', 'turner59@example.net'),
(70, 'Ms. Alysa Goldner', '6034 Hintz Prairie', 'dameon.treutel@example.org'),
(71, 'Geovanny Beier IV', '38235 Laurianne Courts', 'bud.hoeger@example.org'),
(72, 'Toy Tillman II', '37883 Zieme Crossing Apt. 801', 'adell93@example.org'),
(73, 'Helena Johns', '323 Coralie Overpass', 'fredrick.hermann@example.com'),
(74, 'Ruth O\'Keefe', '06545 Ansel Mountains', 'frank.bahringer@example.net'),
(75, 'Estelle Marks', '40281 Natasha Lane Apt. 920', 'yschmeler@example.org'),
(76, 'Anderson Stiedemann', '059 Abshire Divide', 'herbert.prohaska@example.org'),
(77, 'Mrs. Mable Olson', '90488 Wilderman Locks Suite 647', 'o\'connell.queenie@example.org'),
(78, 'Anastacio Turcotte', '76892 Dietrich Circle Suite 669', 'eldora77@example.org'),
(79, 'Maynard Kuhlman', '27636 Lily Station Apt. 104', 'lori.nader@example.com'),
(80, 'Mr. Verner Kozey', '866 Branson Neck', 'ygoldner@example.org'),
(81, 'Dr. Murray Romaguera', '884 Zackery Corner', 'royal.monahan@example.net'),
(82, 'Mya Orn II', '5680 Aiyana Vista Suite 717', 'kailyn39@example.net'),
(83, 'Arnulfo Hudson', '0695 Johnson Alley Apt. 904', 'zetta04@example.org'),
(84, 'Dr. Rosalee Jenkins I', '8012 Erik Springs', 'uabernathy@example.org'),
(85, 'Ms. Elaina Nitzsche', '3264 Maritza View', 'annabelle.rowe@example.org'),
(86, 'Marian Daniel', '342 Wilma Ports', 'schuster.breanne@example.com'),
(87, 'Pink Pfeffer', '84613 Judy Lane Apt. 190', 'dolson@example.org'),
(88, 'Hector Rice', '561 Rosenbaum Glen', 'hlangosh@example.net'),
(89, 'Maida O\'Reilly V', '625 Ressie Isle', 'norris36@example.com'),
(90, 'Arnold Lindgren II', '276 Borer Coves Suite 407', 'wellington.rowe@example.net'),
(91, 'Miss Eileen Pfannerstill', '932 Anita Canyon Suite 265', 'tremblay.candice@example.com'),
(92, 'Prof. Ryley Morar Sr.', '1598 Carlee Spurs', 'laurianne66@example.org'),
(93, 'Prof. Maribel Leuschke', '967 Strosin Throughway Suite 383', 'dickinson.raheem@example.net'),
(94, 'Vergie Konopelski MD', '4825 Pollich Causeway', 'carson18@example.com'),
(95, 'Mrs. Clotilde Sporer', '4445 Christy Run', 'emmerich.hector@example.net'),
(96, 'Vivien Corwin', '418 Daniel Island', 'yharber@example.org'),
(97, 'Prof. Raven Mitchell', '08021 Casimer Fork', 'mathew02@example.com'),
(98, 'Keely Effertz', '23347 Hettinger Locks', 'xspinka@example.net'),
(99, 'Mr. Davion Grant', '87727 Grady Plaza', 'swaniawski.anya@example.org'),
(100, 'Peggie Nienow', '650 White Harbors Suite 759', 'monahan.deron@example.com'),
(101, 'Ms. Nelda McLaughlin', '77208 Bethel Pike Apt. 034', 'wyman.neoma@example.org'),
(102, 'Garth Runolfsdottir IV', '08065 Stark Place Apt. 435', 'quentin.herman@example.com'),
(103, 'Virginie Wisozk', '595 Howell Crossroad Suite 035', 'daniel.citlalli@example.net'),
(104, 'Dr. Deven Rolfson Sr.', '7893 Harris Plain Suite 733', 'cesar15@example.org'),
(105, 'Gregorio Casper', '30593 Kiehn Trail', 'armando93@example.net'),
(106, 'Duane Kreiger', '68954 Pouros Garden', 'gwolf@example.net'),
(107, 'Ms. Earlene Herzog', '15294 Hagenes Circle Suite 385', 'ubalistreri@example.net'),
(108, 'Vida Collins', '91576 King Locks Apt. 011', 'grover83@example.net'),
(109, 'Brycen Mayert', '287 Spinka Plain Apt. 892', 'mike04@example.org'),
(110, 'Dr. Valentine Macejkovic IV', '171 Hand Extension Apt. 687', 'geovanni90@example.net'),
(111, 'Lera Wehner', '16673 Goyette Freeway Apt. 210', 'emile.ward@example.net'),
(112, 'Earline Hickle DVM', '242 Erdman Inlet Suite 397', 'newton99@example.org'),
(113, 'Delta Bergnaum', '8981 Stokes Fords Suite 342', 'nwilderman@example.com'),
(114, 'Berneice Lind', '947 Augustus Stravenue Apt. 458', 'citlalli76@example.com'),
(115, 'Ms. Kayla Considine MD', '02395 Cassandre Glen', 'jaqueline.will@example.com'),
(116, 'Gudrun Mills V', '449 Leanne Tunnel', 'cullen.blick@example.net'),
(117, 'Mr. Hazle Satterfield', '23178 Tom Ferry', 'mwalsh@example.net'),
(118, 'Alexie Rodriguez', '882 Hills Stream Suite 377', 'ritchie.enola@example.net'),
(119, 'Obie Hettinger DDS', '8309 Monty Fork', 'duane24@example.net'),
(120, 'Cara Harvey', '101 Price Mall Apt. 642', 'metz.enola@example.net'),
(121, 'Elmira Bartell', '177 Jayden Gateway', 'torrey05@example.org'),
(122, 'Dr. Chaz Johns', '122 Klein Pines Suite 881', 'jamir.padberg@example.net'),
(123, 'Buddy Rosenbaum DDS', '520 Rice Springs Suite 974', 'donato.feil@example.com'),
(124, 'Ellen Welch', '26905 Mitchell Junctions', 'estella.cartwright@example.net'),
(125, 'Guy Weber', '6482 Grimes Club', 'turcotte.dorothea@example.com'),
(126, 'Tyrell Stokes', '532 Keebler Route Suite 093', 'dickens.hank@example.org'),
(127, 'Mrs. Jazmyn Streich', '355 Cummerata Streets Apt. 374', 'reichel.warren@example.net'),
(128, 'Prof. Jacinthe Gutmann', '95165 Renner Mountains Suite 474', 'libby.conroy@example.org'),
(129, 'Aric Greenholt Sr.', '00917 Jermain Haven', 'kunze.arturo@example.net'),
(130, 'Alden Wisoky', '3090 Koepp Grove', 'mraz.adrian@example.net'),
(131, 'Jefferey Wiza', '690 Jace Throughway', 'smitham.allie@example.net'),
(132, 'Icie Leannon III', '89548 Langworth Isle', 'prohaska.elbert@example.net'),
(133, 'Ryan Vandervort', '8504 Clovis Pike', 'yaltenwerth@example.org'),
(134, 'Dr. Cloyd Miller', '854 Pollich Knoll', 'bernier.bettye@example.com'),
(135, 'Jazlyn Kunze', '2736 Larson Vista', 'murl.casper@example.com'),
(136, 'Judy Kihn', '197 Stamm Trail', 'quigley.pauline@example.net'),
(137, 'Clare Crist', '286 Roberts Village Suite 636', 'esatterfield@example.org'),
(138, 'Destany Cassin', '042 Wuckert Valley', 'shyanne.sipes@example.org'),
(139, 'Ernestina Labadie DVM', '1409 John Forest', 'tillman.keenan@example.net'),
(140, 'Mrs. Ethelyn Bashirian I', '567 Powlowski Manors', 'caleb38@example.com'),
(141, 'Tavares Turner I', '4300 Suzanne Locks Suite 373', 'hayden.hagenes@example.net'),
(142, 'Kathleen Reinger', '03330 Wilkinson Ports Apt. 291', 'theo.kuhic@example.org'),
(143, 'Dr. Aaliyah Marvin V', '160 Gerhold Loop Apt. 010', 'kohler.aliyah@example.net'),
(144, 'Jeramie Bechtelar MD', '387 Cheyanne Vista Apt. 915', 'yveum@example.net'),
(145, 'Dakota Cartwright PhD', '49451 Katheryn Street Apt. 594', 'crist.warren@example.com'),
(146, 'Antwon Stark', '51025 Bernier Forges Suite 097', 'adelia.strosin@example.org'),
(147, 'Mafalda Kris', '5107 Monroe Locks Apt. 146', 'deja.orn@example.com'),
(148, 'Prof. Nina Renner Sr.', '462 Hahn Club', 'hannah.parisian@example.org'),
(149, 'Dr. Allan Schuster III', '607 Amani Islands', 'olittel@example.com'),
(150, 'Burdette Daniel', '867 Onie Ports', 'ruecker.patience@example.org'),
(151, 'Jeromy Collins', '33430 Rau Skyway Suite 520', 'parker.timmy@example.net'),
(152, 'Alfonso Schulist', '31957 Ashlee Estates Apt. 245', 'huels.antonina@example.net'),
(153, 'Mossie Mills MD', '9759 Shanny Pass Suite 767', 'kuphal.rosa@example.org'),
(154, 'Prof. Gideon Bernhard III', '5688 Alex Lane', 'delores30@example.com'),
(155, 'Prof. Kaden McDermott', '26498 Kohler Forks Suite 667', 'kblick@example.org'),
(156, 'Laurine Johns', '494 Hettinger Harbors', 'kendrick64@example.com'),
(157, 'Wilhelm Considine', '89495 Kutch Loaf', 'ubayer@example.com'),
(158, 'Daryl Nitzsche PhD', '94611 Dominique Mountains', 'kathryn10@example.org'),
(159, 'Melany Doyle', '35029 Kulas Valley', 'cupton@example.org'),
(160, 'Annalise Nitzsche IV', '01136 Damaris Key', 'thompson.elvie@example.com'),
(161, 'Laron Gusikowski', '68233 Justus Summit', 'amiller@example.org'),
(162, 'Darrick Towne III', '430 Bertrand Land Suite 341', 'klittel@example.org'),
(163, 'Americo Kris', '514 Cade Mission', 'grimes.elvera@example.com'),
(164, 'Rosanna Larson', '4293 Macejkovic Shoal Apt. 417', 'zelda35@example.net'),
(165, 'Terrell Mills III', '0454 Dooley Point', 'littel.owen@example.com'),
(166, 'Lea Dietrich', '65323 Izabella Green Suite 428', 'lockman.hans@example.net'),
(167, 'Austen Gorczany', '7568 Zemlak Roads Apt. 191', 'rozella79@example.net'),
(168, 'Prof. Nicholaus Carter DVM', '563 Stracke Estate', 'slarkin@example.org'),
(169, 'Prof. Jodie Mayert V', '449 Harvey Mews', 'raven25@example.com'),
(170, 'Ansley Armstrong Sr.', '01719 Horace Radial', 'einar.larkin@example.net'),
(171, 'Ms. Hillary Funk', '1699 Donato Parkways Apt. 430', 'gladyce10@example.net'),
(172, 'Dr. Rozella Thompson DVM', '260 Jacobi Terrace', 'elisha15@example.org'),
(173, 'Kallie Pollich', '147 Helena Ford', 'janelle12@example.net'),
(174, 'Willard Ziemann', '51775 Wilson Knolls', 'ziemann.efrain@example.net'),
(175, 'Rose Cruickshank DDS', '4459 Athena Gateway Apt. 548', 'okuneva.earline@example.org'),
(176, 'Micheal Fisher III', '99280 Pattie Fork', 'corbin84@example.org'),
(177, 'Ms. Myra Kunde', '9923 Mosciski Forks', 'eleazar29@example.net'),
(178, 'Jody Yost II', '5259 Mozelle Manor Suite 559', 'paucek.alfredo@example.org'),
(179, 'Magnolia Schultz', '55273 Marlon Plains Suite 910', 'olson.skylar@example.org'),
(180, 'Mrs. Rebecca McClure III', '4121 Upton Glens', 'trent57@example.net'),
(181, 'Margarett Marquardt', '62613 Kihn Route', 'matilde02@example.net'),
(182, 'Vada Emmerich', '210 Runolfsdottir Ways Apt. 111', 'alvina90@example.com'),
(183, 'Paris Huels', '598 Jody Junctions', 'sarah74@example.com'),
(184, 'Corrine Waelchi', '962 Pollich Motorway', 'molly.pfeffer@example.net'),
(185, 'Wiley Graham', '06873 Jacobs Mills Suite 955', 'pkautzer@example.org'),
(186, 'Jerome Hegmann', '5859 Hickle Mews', 'marc98@example.com'),
(187, 'Deondre Beier', '7766 Sam Point Apt. 681', 'gschuppe@example.net'),
(188, 'Mr. Rogers Roberts', '2573 Dean Cove', 'adrianna16@example.com'),
(189, 'Crystel Romaguera', '8095 Hudson Cove', 'gbechtelar@example.org'),
(190, 'Jedediah King', '667 Leuschke Corner', 'cole96@example.net'),
(191, 'Gertrude Reichel', '95861 Fadel Fords Apt. 621', 'adah20@example.com'),
(192, 'Ernest Nitzsche', '59121 Rice Rapids Suite 098', 'emmerich.earlene@example.org'),
(193, 'Jovany Adams', '23943 Krajcik Brook Suite 569', 'dortha33@example.com'),
(194, 'Dr. May Leffler', '534 Bart Curve', 'anita.nicolas@example.org'),
(195, 'London Prosacco', '959 Torrance Well', 'mallie.hodkiewicz@example.net'),
(196, 'Prof. Theodora Kreiger I', '54734 Schroeder Heights', 'runte.wyatt@example.com'),
(197, 'Amber Kling', '101 Greenfelder Landing', 'allison21@example.org'),
(198, 'Ethelyn Hettinger', '7838 Abshire Terrace Suite 499', 'ebba28@example.org'),
(199, 'Alyce Will', '17595 Anabel Inlet', 'krunolfsson@example.org'),
(200, 'Mr. Gerhard Hudson II', '34479 Ernser Street', 'rhiannon.block@example.net'),
(201, 'Retha Bruen', '7529 Emmanuelle Skyway', 'terrence.wyman@example.com'),
(202, 'Joshuah Renner', '020 Kris Avenue', 'weimann.bertram@example.com'),
(203, 'Fidel Emard PhD', '5276 Olson Fords Apt. 565', 'o\'keefe.lukas@example.net'),
(204, 'Mr. Conor Grady MD', '00462 Heather Parks', 'tressa32@example.org'),
(205, 'Mr. Llewellyn Welch', '681 Tod Ports Suite 915', 'littel.chauncey@example.com'),
(206, 'Walton Bailey', '6268 Runolfsdottir Ways Apt. 694', 'bernhard.gardner@example.net'),
(207, 'Laurianne Parker', '73583 Kevon Forks Apt. 078', 'nmcclure@example.org'),
(208, 'Amira Hammes', '07314 Quigley Tunnel', 'patricia.torphy@example.com'),
(209, 'Clair Botsford IV', '747 Aliya Canyon Apt. 842', 'jordy.graham@example.org'),
(210, 'Dan Stehr', '6728 Terry Fall', 'kziemann@example.org'),
(211, 'Prof. Lourdes Hagenes', '10680 Jadon Crossing', 'schoen.obie@example.com'),
(212, 'Rebeca Pollich DVM', '3017 Ledner Isle', 'douglas34@example.com'),
(213, 'Jerad Murphy', '03172 Vincenza Mountains Suite 445', 'ckohler@example.org'),
(214, 'Josefa Reichel Jr.', '225 Bernhard Glen Apt. 002', 'wunsch.ignatius@example.net'),
(215, 'Ahmad Harber', '020 Alison Bridge Suite 383', 'domenica43@example.net'),
(216, 'Muhammad Goodwin', '72664 Schmidt Pine Suite 731', 'howe.uriel@example.com'),
(217, 'Prof. Dylan Dach III', '10154 Halie Crescent Suite 452', 'casimer46@example.com'),
(218, 'Prof. Dolly Schaden IV', '212 Murazik Place', 'jada22@example.com'),
(219, 'Orion Dooley', '8248 Jolie Groves', 'chaz.eichmann@example.net'),
(220, 'Autumn Bruen', '60900 Kennedy Mountains', 'ro\'connell@example.org'),
(221, 'Zoe Zemlak', '246 Barrows Springs Apt. 625', 'borer.estel@example.org'),
(222, 'Mike Huels', '195 Laron Mount Suite 519', 'pfannerstill.helen@example.org'),
(223, 'Mia Dickinson', '6932 Oswald Ramp', 'awilliamson@example.net'),
(224, 'Schuyler Kohler', '7583 Johns Islands Suite 098', 'curtis.gleichner@example.net'),
(225, 'Ephraim Walter', '12891 Nyasia Union', 'valentine78@example.org'),
(226, 'Abe Zulauf PhD', '783 Fritsch Track Apt. 484', 'peggie98@example.net'),
(227, 'Mrs. Stacy Hintz', '40466 Rosie Parkways Suite 992', 'obogan@example.net'),
(228, 'Kenyatta Braun I', '006 Satterfield Lane', 'goodwin.gerry@example.org'),
(229, 'Alf Bradtke', '04474 Mitchell Plain', 'marcellus.terry@example.com'),
(230, 'Cielo Langosh DDS', '0567 Purdy Corner', 'lee49@example.net'),
(231, 'Ottis Howell', '8790 Harvey Flats Apt. 026', 'mayert.chanel@example.org'),
(232, 'Carole Macejkovic', '53241 Abbott Hollow Apt. 585', 'holden.gulgowski@example.net'),
(233, 'Mr. Trace Pollich', '5471 Katelin Center', 'arne65@example.net'),
(234, 'Emmanuelle Gleason', '108 Ottilie Terrace', 'acasper@example.org'),
(235, 'Mrs. Malika Pfannerstill DVM', '28902 Dietrich Stravenue Apt. 767', 'vladimir96@example.net'),
(236, 'Emmanuelle Kling', '527 Abbigail Crossroad', 'brown.halle@example.org'),
(237, 'Ms. Verda Zboncak DDS', '4582 Larkin Trace Apt. 816', 'sprice@example.com'),
(238, 'Marty McCullough', '034 Rowland View', 'ismael21@example.net'),
(239, 'Brook Schowalter', '5180 Jamal Track', 'orpha.tillman@example.com'),
(240, 'Ona Eichmann', '66205 Malvina Haven', 'orutherford@example.net'),
(241, 'Burdette Schulist', '00520 Balistreri Row', 'unader@example.net'),
(242, 'Miss Verlie Welch', '8331 Stanton Spurs', 'nienow.rusty@example.com'),
(243, 'Izaiah Lindgren', '88717 Von Camp', 'yazmin13@example.net'),
(244, 'Gonzalo Hauck', '4027 Olson Fields', 'gbauch@example.com'),
(245, 'Dr. Ethan Ferry Sr.', '95206 Lakin Corners', 'jo61@example.org'),
(246, 'Jalyn Von MD', '770 Raynor Place Suite 760', 'haven46@example.org'),
(247, 'Peter Lesch IV', '29819 Heaven Island Apt. 482', 'wellington.boehm@example.com'),
(248, 'Felix Morar I', '53734 Schiller Pass Apt. 914', 'betty.hansen@example.net'),
(249, 'Jameson Bogan', '17590 Madisen Forest Apt. 322', 'dillan56@example.org'),
(250, 'Alicia Schoen', '9981 Malachi Islands Suite 506', 'elmer.ritchie@example.net'),
(251, 'Dwight Ziemann', '559 Madelyn Fork', 'kiana.conn@example.org'),
(252, 'Mr. Emile Rosenbaum IV', '14860 Ibrahim Mews', 'electa32@example.com'),
(253, 'Dr. Declan Quitzon', '8749 Larkin Street Apt. 462', 'wallace37@example.com'),
(254, 'Dr. Hannah Glover', '180 Sadie Path', 'langosh.kristofer@example.org'),
(255, 'Hester Hintz', '18151 Upton Estate Apt. 992', 'glenda14@example.org'),
(256, 'Vidal Douglas', '81309 Block Glens Apt. 863', 'ghaag@example.com'),
(257, 'Dr. Coty Bogisich', '70643 Lourdes View Apt. 793', 'heller.tia@example.com'),
(258, 'Lucas Rath', '449 Flavio Pass', 'flavio34@example.com'),
(259, 'Dr. Albertha Wuckert II', '2188 Jast Hill', 'vivien49@example.com'),
(260, 'Ms. Aisha Stark Jr.', '9122 Konopelski Fall', 'ronny87@example.net'),
(261, 'Naomi Hammes', '252 Nedra Extensions Suite 908', 'skiles.myles@example.com'),
(262, 'Avery Cartwright', '2862 Cole Port Suite 414', 'carlee.padberg@example.com'),
(263, 'Daphne Paucek', '824 Wilkinson Trace', 'pstokes@example.com'),
(264, 'Esther Roob DDS', '845 Streich Views Suite 924', 'mylene82@example.org'),
(265, 'Miss Juana Gislason Jr.', '78361 Mraz Harbor', 'nat25@example.net'),
(266, 'Mohammad Langosh', '61854 Brown Stream Suite 838', 'june28@example.org'),
(267, 'Zander Lind', '11651 Bartoletti Club Apt. 546', 'ibartoletti@example.net'),
(268, 'Prof. Bret Koch MD', '42905 Ellen Trafficway', 'chris11@example.com'),
(269, 'Jennings Corwin', '114 Rosalia Estate', 'earline04@example.org'),
(270, 'Pearlie Tromp Sr.', '3686 Emile Mission', 'bonita.willms@example.org'),
(271, 'Woodrow Hane', '6545 Wendell Rue Suite 825', 'wunsch.lina@example.com'),
(272, 'Sydnie Koss', '340 Koss Trafficway', 'noble.bradtke@example.org'),
(273, 'Emmalee Hagenes', '433 Bode Plains', 'ibrahim48@example.com'),
(274, 'Dr. Marie Ward', '022 Sipes Vista', 'vschumm@example.org'),
(275, 'Mr. Horace Christiansen', '649 Catherine Gardens', 'scotty69@example.net'),
(276, 'Luz Aufderhar', '6931 Elias Inlet', 'felipa56@example.com'),
(277, 'Ms. Christa Bechtelar', '6299 Osinski Islands Suite 390', 'stan.upton@example.org'),
(278, 'Dr. Brielle Huels', '57398 Gracie Causeway Suite 840', 'reyes16@example.com'),
(279, 'Malinda Parker', '440 Kutch Mountain', 'hailee.nitzsche@example.net'),
(280, 'Karl O\'Reilly', '4472 Pablo Hollow Apt. 947', 'xkuhic@example.org'),
(281, 'Vella Koepp IV', '891 Wiegand Valley Suite 948', 'fkulas@example.com'),
(282, 'Marianne Bahringer V', '2766 Volkman Square Suite 072', 'dagmar98@example.org'),
(283, 'Isom Feest', '0521 Janelle Stravenue Suite 725', 'lauren22@example.org'),
(284, 'Benton Towne DVM', '441 Bradly Lake', 'grady.raegan@example.org'),
(285, 'Braxton Prosacco DDS', '45272 Adah Circle', 'hettinger.crystel@example.net'),
(286, 'Tiana Zboncak', '675 Langosh Springs Apt. 099', 'marina20@example.com'),
(287, 'Mrs. Alyce Aufderhar I', '77735 Dibbert Harbors Apt. 567', 'tchamplin@example.org'),
(288, 'Citlalli Wilderman', '103 Harvey Well Suite 357', 'elsa.smitham@example.net'),
(289, 'Helga Medhurst', '60541 Lillie Trace', 'aurelie.jast@example.org'),
(290, 'Miss Nola Bashirian III', '18982 Keebler Summit Suite 739', 'raquel.langworth@example.com'),
(291, 'Eveline Douglas', '250 Joe Village Apt. 789', 'hoppe.osbaldo@example.com'),
(292, 'Lonny Rogahn', '4198 Travis Turnpike Suite 956', 'melisa.stoltenberg@example.org'),
(293, 'Ms. Magdalen Brown', '277 Taryn Stravenue', 'samantha86@example.org'),
(294, 'Pete Koelpin', '5452 Reichert Hills Suite 937', 'hyman.zulauf@example.com'),
(295, 'Willa Lindgren', '5887 Moen Divide Suite 159', 'karl.huel@example.com'),
(296, 'Johanna Tremblay', '5422 Johnston Streets', 'graham.hulda@example.org'),
(297, 'Jessie Jenkins', '65391 Cruz Gateway Suite 968', 'hcasper@example.org'),
(298, 'Connie Abbott', '474 Kamron Knolls Suite 809', 'zelda.reichel@example.net'),
(299, 'Mr. Edwin Schultz', '9671 Wolf Estate', 'luciano16@example.net'),
(300, 'Marjolaine Streich', '588 Clay Plains', 'cdavis@example.org'),
(301, 'Jeramie Ondricka', '336 D\'Amore Row Apt. 264', 'labadie.blanche@example.net'),
(302, 'Erick Krajcik', '06979 Trudie Glen Apt. 150', 'gerhold.mohammed@example.org'),
(303, 'Arvel Beer', '918 Ova Points Suite 541', 'mann.barney@example.net'),
(304, 'Lonie Nolan', '55090 Zboncak Village Apt. 187', 'dicki.lurline@example.org'),
(305, 'Sterling Trantow', '33309 Marcelle Locks Apt. 475', 'luther.lebsack@example.net'),
(306, 'Miss Stacey Tromp', '9279 Evelyn Walk', 'rosie.glover@example.net'),
(307, 'Christa Schneider V', '8436 Juliet Springs Apt. 810', 'cindy52@example.com'),
(308, 'Lafayette Huel', '353 Oberbrunner Fall Suite 811', 'agustina06@example.com'),
(309, 'Frankie Schultz', '12091 Hellen Plains Suite 553', 'lowell.morissette@example.org'),
(310, 'Astrid Yundt', '48674 Walker Creek', 'zboncak.hanna@example.net'),
(311, 'Dianna McDermott', '6049 Alfonso Burgs', 'lgusikowski@example.com'),
(312, 'Joanne Jakubowski I', '38616 Rubie Stream', 'taurean46@example.org'),
(313, 'Marian Little', '82039 Nader View Apt. 349', 'schiller.peggie@example.org'),
(314, 'Richie Blick', '632 Joel Junctions', 'gauer@example.com'),
(315, 'Reinhold Stroman', '7211 Courtney Dam', 'crona.enola@example.org'),
(316, 'Piper Kassulke', '10541 O\'Hara Shores', 'bernhard.fred@example.org'),
(317, 'Sarai Larkin', '24506 Garnett River Apt. 313', 'regan.muller@example.org'),
(318, 'Dr. Isac Fadel DVM', '91803 Bashirian Mount Suite 735', 'vzboncak@example.com'),
(319, 'Felicity Kris', '12358 Saige Mews Suite 214', 'volkman.catalina@example.org'),
(320, 'Chyna Keebler', '50160 Raynor Islands Suite 244', 'myriam.kreiger@example.net'),
(321, 'Mrs. Shanel Streich PhD', '69791 River Ports', 'marquardt.jett@example.org'),
(322, 'Miss Celestine Glover', '141 Heaven Tunnel', 'donnell64@example.com'),
(323, 'Rosemary Flatley MD', '6735 Shanahan Circle Suite 854', 'zulauf.tyshawn@example.net'),
(324, 'Kevin Kihn', '70305 Marlin Drive Apt. 394', 'blanda.josefina@example.net'),
(325, 'Keon Jaskolski', '2581 Fred Pass Apt. 266', 'tatum63@example.net'),
(326, 'Royce Emard II', '05580 Alena Way Suite 458', 'kayli.dare@example.net'),
(327, 'Mr. Scot Mayert', '2918 Merl Turnpike', 'nora00@example.com'),
(328, 'Dillan Balistreri', '9094 Kub Island Suite 898', 'jovanny80@example.org'),
(329, 'Dr. Alysson O\'Keefe Sr.', '871 Rutherford Fork Suite 184', 'amparo.collier@example.net'),
(330, 'Rhett Lemke V', '999 Dena View Suite 360', 'reba01@example.com'),
(331, 'Dr. Devante Fritsch III', '47540 Jones Fork Suite 637', 'lframi@example.com'),
(332, 'Katelyn Oberbrunner', '3295 Dante Station Suite 638', 'bmitchell@example.com'),
(333, 'Angela Eichmann', '492 Shanel Loaf Apt. 870', 'clemens85@example.com'),
(334, 'Emile Cormier', '6256 Oceane Falls', 'gbashirian@example.org'),
(335, 'Timothy Bergnaum', '19680 Audie Valley', 'tyler96@example.net'),
(336, 'Emilia Keebler MD', '4128 Sawayn Row', 'hildegard21@example.com'),
(337, 'Clovis Wiegand', '08811 Sauer View Apt. 063', 'huels.dejah@example.org'),
(338, 'Pearlie Hintz', '507 Landen Corners Apt. 390', 'reynolds.ellie@example.net'),
(339, 'Rafaela Stracke', '78027 Glover Coves', 'kuhic.prudence@example.com'),
(340, 'Maximilian Ondricka', '8499 Hickle Well Suite 783', 'macejkovic.hubert@example.net'),
(341, 'Ramona Turcotte', '517 Mya Fall Apt. 266', 'mose72@example.com'),
(342, 'Mr. Wilhelm Gutmann', '1673 Webster Ridges', 'veum.estrella@example.org'),
(343, 'Bertrand Berge', '359 Elvera Valleys', 'deckow.katelyn@example.com'),
(344, 'Amanda Medhurst', '19121 Edward Lane', 'owen85@example.org'),
(345, 'Rebekah Klocko', '52907 Spinka Courts Apt. 308', 'fritz55@example.net'),
(346, 'River Dibbert', '95591 Robbie Harbors Apt. 311', 'cody46@example.com'),
(347, 'Prof. Quinn Thiel', '53408 Sawayn Lane', 'lilliana.raynor@example.org'),
(348, 'Terrance Friesen', '556 Irving Pines', 'jamaal.ritchie@example.org'),
(349, 'Etha Simonis', '955 Destiney Well Suite 092', 'rwehner@example.com'),
(350, 'Matteo Russel', '67195 Telly Islands Suite 043', 'ayundt@example.org'),
(351, 'Dr. Orlando Runte', '56887 Gregorio Hill Suite 176', 'koch.malinda@example.net'),
(352, 'Noble Schuppe', '222 Shaylee Curve', 'janie68@example.org'),
(353, 'Herman Klein', '569 Gislason Glen Suite 561', 'lucious.fisher@example.net'),
(354, 'Van Heaney', '8087 Gerhold Extensions Apt. 383', 'laurie.auer@example.org'),
(355, 'Ariane Barton DVM', '556 Nella Villages Apt. 095', 'szieme@example.net'),
(356, 'Veda Hammes', '200 Mariah Glen', 'cora45@example.org'),
(357, 'Prof. Darion Price', '30740 Mertz Coves', 'ischimmel@example.net'),
(358, 'Prof. Cydney Lebsack', '349 Dianna Junction', 'xjakubowski@example.com'),
(359, 'Maximus Larson', '9749 Daniel Views', 'smith.freida@example.net'),
(360, 'Bert Koss Sr.', '919 Bartoletti Estates Apt. 850', 'pdibbert@example.net'),
(361, 'Jeanette Bednar Jr.', '93088 Addie Radial', 'josue.schinner@example.net'),
(362, 'Dr. Adah Connelly I', '80489 Nia Fields', 'keon68@example.net'),
(363, 'Amani Thompson', '70599 Sammy Overpass Apt. 576', 'katrina.moen@example.net'),
(364, 'Mollie Terry', '528 Dietrich Plains Apt. 632', 'bvon@example.com'),
(365, 'Camryn Schmidt', '9970 Valentin Groves', 'molly14@example.com'),
(366, 'Lacey Goldner', '792 Runte Centers', 'corwin.jeffry@example.com'),
(367, 'Mr. Immanuel Feil', '6920 Victoria Meadows', 'camilla.borer@example.net'),
(368, 'Bonita Lockman', '445 Grover Manors', 'giovani26@example.com'),
(369, 'Calista Langosh', '835 Haag Stravenue', 'nora.legros@example.com'),
(370, 'Ebony Toy', '8370 Marcelo Hills', 'jarvis.becker@example.org'),
(371, 'Bernita Muller', '5679 David Lane', 'bins.wilhelm@example.com'),
(372, 'Dr. Tessie Hills Sr.', '634 Jessica Bridge', 'corwin.troy@example.net'),
(373, 'Reyes Gutkowski', '8529 Domenic Hill Apt. 278', 'rempel.arne@example.org'),
(374, 'Cristal Streich', '01043 Gottlieb Wall', 'dmiller@example.com'),
(375, 'Destiny Reinger', '8259 Gudrun Cliff Apt. 880', 'lurline.jacobson@example.com'),
(376, 'Jon McKenzie', '67702 Berge Vista Suite 730', 'jamison39@example.org'),
(377, 'Luciano Russel', '314 Heidenreich Court', 'gcarter@example.net'),
(378, 'Justyn Turner IV', '460 Reichel Drive Apt. 507', 'osvaldo.rogahn@example.org'),
(379, 'Wiley Gibson', '86788 Berniece Run', 'abeahan@example.com'),
(380, 'Shanelle Parisian IV', '03273 Ali Bridge Suite 098', 'ocrooks@example.com'),
(381, 'Enos Muller MD', '49153 Sydnee Fork Apt. 195', 'emmanuelle10@example.org'),
(382, 'Vita Jaskolski', '6106 Beier Trail Apt. 908', 'antonette.eichmann@example.org'),
(383, 'Dejon Cummings I', '157 Shanahan Cliffs', 'elyse.wiegand@example.org'),
(384, 'Lexie Reilly', '13241 Hudson Lock', 'barton.eden@example.com'),
(385, 'Mrs. Dovie Koepp PhD', '419 Nora Street Apt. 844', 'andreane.towne@example.org'),
(386, 'Loyal Schumm', '0046 Chanelle Ridge Suite 456', 'dashawn.conn@example.com'),
(387, 'Emmy Johnson DVM', '8418 Leuschke Club', 'presley63@example.org'),
(388, 'Bernhard Ferry', '6521 Grant Tunnel Suite 876', 'erempel@example.com'),
(389, 'Stefanie Batz', '9330 Romaguera Islands', 'lucie.kiehn@example.net'),
(390, 'Mr. Gene Braun II', '77870 Ceasar Hill', 'evangeline25@example.net'),
(391, 'Kirstin Kerluke', '67485 Rodriguez Ridges Suite 760', 'funk.brenden@example.net'),
(392, 'Rogelio Graham', '14002 Dickinson Park', 'keebler.london@example.com'),
(393, 'Miss Katharina Cruickshank I', '279 Gertrude Spurs', 'corbin66@example.com'),
(394, 'Mr. Kaleigh Ritchie Jr.', '540 Bogisich Inlet Suite 360', 'oliver99@example.org'),
(395, 'Lolita Effertz I', '387 Lang Via Suite 427', 'miracle50@example.net'),
(396, 'Jettie Jacobi', '2402 Cynthia Crossroad Suite 532', 'krajcik.malvina@example.net'),
(397, 'Taryn Heller V', '74036 Americo Curve Apt. 543', 'sydney.schiller@example.com'),
(398, 'Aniya Gottlieb MD', '83123 Rolfson Fall Apt. 612', 'cartwright.kelli@example.com'),
(399, 'Summer Heidenreich', '497 Bartoletti Prairie Suite 312', 'owisozk@example.com'),
(400, 'Tad Steuber', '43004 Lebsack Highway Apt. 823', 'istiedemann@example.net'),
(401, 'Yolanda Dibbert', '702 Kaleigh Inlet Apt. 910', 'roberts.jazlyn@example.net'),
(402, 'Miguel Padberg', '990 Elizabeth Streets', 'simeon.wisozk@example.com'),
(403, 'Mr. Coty Runte', '500 Crystel Courts Suite 476', 'trevor56@example.net'),
(404, 'Dr. Emie Pacocha DDS', '1121 Layne Garden Suite 303', 'xkoch@example.org'),
(405, 'Christ Goyette', '152 Kulas Trafficway Suite 376', 'umoore@example.com'),
(406, 'Norberto Towne', '5168 Warren Valley Suite 487', 'melyna.vonrueden@example.net'),
(407, 'Emerson Murphy I', '1068 Robb Garden', 'lon35@example.org'),
(408, 'Johanna Bauch DVM', '56255 Garret Prairie Apt. 674', 'norwood.heathcote@example.com'),
(409, 'Mrs. Maude Daugherty', '306 Sam Inlet', 'fo\'conner@example.com'),
(410, 'Darian Robel', '75448 Jeffry Meadow', 'dschmidt@example.net'),
(411, 'Madisen Roob', '24964 King Corners', 'moen.agustin@example.net'),
(412, 'Helena Sawayn', '9020 Marquardt Stream', 'tremaine64@example.org'),
(413, 'Clarabelle Johns MD', '02467 Rolando Flats', 'corwin.darryl@example.com'),
(414, 'Mrs. Shawna Lemke', '62010 Collier Ways', 'frederik36@example.net'),
(415, 'America King', '52740 Simonis Extension Apt. 924', 'crist.catherine@example.com'),
(416, 'Earlene Stamm', '4274 Yost Junctions Suite 353', 'gcorkery@example.net'),
(417, 'Myrtle Schowalter', '29394 Corwin Stravenue Suite 286', 'elisha60@example.org'),
(418, 'Prof. Kris Ryan', '619 Russel Islands', 'ebraun@example.org'),
(419, 'Devon Hansen', '63599 Bechtelar Ridge', 'bergnaum.krystal@example.net'),
(420, 'Ariane Nader', '553 Doyle Avenue', 'lucienne68@example.com'),
(421, 'Freeman Skiles', '3690 Haley Gateway Suite 356', 'jefferey.cronin@example.org'),
(422, 'Ophelia Keebler', '15787 Autumn Tunnel Suite 720', 'kylie70@example.net'),
(423, 'Tyson Terry II', '27553 Runolfsdottir Forks', 'harold23@example.org'),
(424, 'Ignatius Cummings', '33438 Therese Bypass', 'ulises97@example.org'),
(425, 'Jany Dickens', '58623 Amiya Drive Apt. 327', 'ccollins@example.com'),
(426, 'Prof. Robyn Klocko I', '11497 Funk Pike Apt. 877', 'stracke.unique@example.org'),
(427, 'Jade Kuhic', '4694 Fisher Square Apt. 070', 'wdibbert@example.org'),
(428, 'Connor Watsica', '594 Kelsi Mountains', 'gbeahan@example.org'),
(429, 'Aurelie Feest', '08768 Purdy Meadow', 'lawson00@example.com'),
(430, 'Tiana Keeling', '855 Torrance Fork Apt. 019', 'kuhlman.monique@example.net'),
(431, 'Charlotte Heidenreich', '42848 Peter Groves Apt. 392', 'obernier@example.net'),
(432, 'Ida Keebler Jr.', '15359 Keshawn Row', 'nschowalter@example.net'),
(433, 'Roscoe Schinner', '561 Alvah Fork Apt. 049', 'wehner.luis@example.org'),
(434, 'Miss Emmie Stiedemann PhD', '2380 Eldred Pine', 'kbarton@example.net'),
(435, 'Rae Padberg', '293 Josephine Terrace Apt. 774', 'aryanna79@example.net'),
(436, 'Ali Berge', '049 Graham Mountain', 'kassulke.coty@example.org'),
(437, 'Ms. Aiyana Flatley III', '3351 Ariane Circles Apt. 033', 'christa77@example.org'),
(438, 'Abagail Dietrich MD', '37352 Lang Plain Suite 561', 'keichmann@example.net'),
(439, 'Madison Murazik', '5022 Piper Garden', 'alberta.schroeder@example.org'),
(440, 'Jaron Pouros', '17133 Lucy Flats', 'bernie.dubuque@example.org'),
(441, 'Mr. Braxton Gerhold', '4393 Florencio Island Suite 610', 'bernard57@example.org'),
(442, 'Casimer Ryan', '611 Stracke Meadow', 'manderson@example.net'),
(443, 'Arnaldo Schmidt', '22965 Cummings Green', 'bgerlach@example.net'),
(444, 'Nellie Kshlerin', '8944 Lang Alley', 'batz.watson@example.net'),
(445, 'Raheem Jaskolski', '1603 Johnston Union', 'ruthie45@example.net'),
(446, 'Alexys Lynch', '5284 Kassulke Throughway Apt. 893', 'margarete16@example.net'),
(447, 'Mae Cartwright MD', '7310 Zoey Mission Suite 093', 'wgreen@example.net'),
(448, 'Joanie Rempel', '80955 Smith Rue', 'hermiston.carmelo@example.net'),
(449, 'Christy Welch', '8964 Grimes Ports Apt. 623', 'andres.dietrich@example.org'),
(450, 'Dr. Stone Blick', '218 Kaley Center', 'vortiz@example.net'),
(451, 'Dortha McLaughlin', '35898 Pfeffer Falls Apt. 562', 'qbauch@example.org'),
(452, 'Marcella Trantow Sr.', '877 Phyllis Isle', 'alice46@example.net'),
(453, 'Virginia Kovacek', '005 Sabrina Via', 'stoltenberg.sammie@example.com'),
(454, 'Isac Boyle PhD', '505 Brycen Glen', 'llockman@example.net'),
(455, 'Monserrat Reinger PhD', '82091 Ortiz Square Suite 809', 'barton.keyshawn@example.com'),
(456, 'Nikolas Koch', '098 Merl Prairie', 'mckenzie.sid@example.org'),
(457, 'Prof. Kevin McGlynn', '91244 Runolfsdottir Ways Apt. 418', 'heller.ettie@example.org'),
(458, 'Heath Harris', '8583 Maggio Flat', 'hassie57@example.org'),
(459, 'Cole Emmerich DDS', '381 Marvin Plains Apt. 992', 'marjorie.boehm@example.net'),
(460, 'Cordia Sporer', '723 Bryana Ports Suite 514', 'skye.boyer@example.com'),
(461, 'Frances Hartmann I', '255 Hessel Hills', 'hassan.larson@example.net'),
(462, 'Amina Wintheiser', '6927 Jenkins Crossing Apt. 900', 'madilyn27@example.net'),
(463, 'Warren Sipes Jr.', '05801 Alf Brooks', 'spinka.kiera@example.org'),
(464, 'Raquel Bednar', '444 Senger Stream Suite 401', 'gstokes@example.com'),
(465, 'Dalton Ortiz', '932 Heller Isle Apt. 280', 'oswaldo.hagenes@example.com'),
(466, 'Rosalind Cummings', '63141 Reichert View', 'macejkovic.sebastian@example.net'),
(467, 'Ms. Gloria Wintheiser III', '1521 Pollich Loop', 'grunolfsdottir@example.com'),
(468, 'Maximillia Kreiger DDS', '384 Ubaldo Gateway Apt. 178', 'johns.makayla@example.org'),
(469, 'Laverna Kreiger', '3498 Alessandra Falls Apt. 891', 'ehaley@example.net'),
(470, 'Jovany Konopelski', '149 Bogan Parkway', 'stephan.stracke@example.net'),
(471, 'Mr. Mitchel Kertzmann IV', '7867 Mathilde Mall Apt. 961', 'idell.hauck@example.org'),
(472, 'Prof. Mariela O\'Conner', '626 Hilpert Lodge Apt. 772', 'cronin.else@example.com'),
(473, 'Miss Elinore Langworth MD', '3185 Shields Stream', 'heidenreich.sally@example.net'),
(474, 'Brendan Rogahn', '076 Cassie Loaf', 'georgette.o\'hara@example.net'),
(475, 'Mr. Wade Powlowski V', '32592 Dare Ferry Apt. 398', 'christine.bogan@example.com'),
(476, 'Cale VonRueden MD', '052 Sean Lights Suite 477', 'jaqueline.adams@example.com'),
(477, 'Ms. Bonita Zboncak PhD', '448 Mckenna Cliffs', 'ldaugherty@example.com'),
(478, 'Silas Farrell III', '7660 Ritchie Ways Suite 482', 'jerome.lind@example.org'),
(479, 'Prof. Dakota Langworth MD', '90807 Rowe Squares', 'francesca84@example.com'),
(480, 'Gerald Jerde', '56442 Stark Flats Apt. 429', 'wiegand.lottie@example.com'),
(481, 'Mrs. Abbigail McLaughlin', '8664 Rohan Dam', 'veda33@example.org'),
(482, 'Ms. Jude Nitzsche', '384 Kale Stravenue Apt. 746', 'domenica54@example.net'),
(483, 'Sid Leuschke', '44809 Wilkinson Springs Suite 541', 'cristal.lakin@example.net'),
(484, 'Clement Boyer', '76002 Herminia Station', 'pmurazik@example.com'),
(485, 'Prof. Jaydon Daniel', '2030 Hackett Ramp', 'joel.stark@example.org'),
(486, 'Austyn Labadie', '04602 Stark Vista', 'jules43@example.org'),
(487, 'Mrs. Francisca Torp Sr.', '4238 Karianne Walks Apt. 666', 'jast.milton@example.net'),
(488, 'Douglas Brown', '7104 Mariano Road Apt. 540', 'oceane.runte@example.net'),
(489, 'Bert Mayer', '327 Huel Prairie', 'axel03@example.net'),
(490, 'Abagail Bergstrom', '2838 Green Lakes Suite 952', 'franecki.jaylin@example.net'),
(491, 'Murl Waelchi DVM', '0185 Rosalia Drives Suite 538', 'etrantow@example.org'),
(492, 'Jessica Robel', '8665 Santina Freeway Suite 316', 'michael.koss@example.org'),
(493, 'Stanford Wunsch', '58637 Summer Plaza Suite 919', 'genesis00@example.org'),
(494, 'Mrs. Reina Lind PhD', '253 Bill Fords', 'jasen98@example.net'),
(495, 'Gay Strosin', '4851 Lolita Expressway Apt. 182', 'jeramy.romaguera@example.com'),
(496, 'Lavinia Streich II', '351 Aubrey Isle', 'tristian24@example.org'),
(497, 'Mr. Kamryn Greenholt MD', '8775 Boyer Shore', 'annabel.kertzmann@example.net'),
(498, 'Reese Hoppe', '777 Lehner Run Suite 188', 'lemke.roberta@example.org'),
(499, 'Ms. June Rowe DDS', '042 Theresa Bypass', 'elisha.bradtke@example.org'),
(500, 'Reggie Kshlerin', '8562 Hickle Junction Apt. 395', 'littel.brenna@example.com'),
(501, 'Harmony Bergstrom', '02863 Melyssa Spring Apt. 105', 'margaretta36@example.org'),
(502, 'Waldo Roob Jr.', '5773 Runolfsson Cape Apt. 872', 'wisozk.mitchell@example.net'),
(503, 'Prof. Torrey Morar', '93932 Jacobson Ports Apt. 273', 'mallory44@example.net'),
(504, 'Ms. Zella Goyette V', '45209 Tromp Shores Suite 608', 'graham.dylan@example.org'),
(505, 'Pink Wilkinson', '854 Patsy Via', 'rmraz@example.net'),
(506, 'Dr. Narciso Cremin PhD', '596 Wyatt Brooks', 'heidenreich.abbigail@example.org'),
(507, 'Justyn Mohr', '836 Hintz Shoals', 'hconroy@example.org'),
(508, 'Reilly Tillman', '83529 Kuvalis Plaza', 'rohan.helene@example.net'),
(509, 'Mr. Reginald Greenfelder', '3531 Strosin Glens', 'aron66@example.org'),
(510, 'Stephania Boehm', '73650 Rohan Divide Apt. 733', 'dee.franecki@example.org'),
(511, 'Earlene Abbott', '2712 Lesch Alley Apt. 768', 'rtoy@example.net'),
(512, 'Reagan Deckow', '1719 Maxime Mills Suite 523', 'ferry.boyd@example.net'),
(513, 'Serena Strosin', '1611 Dean Village Suite 078', 'nellie.hansen@example.com'),
(514, 'Prof. Tiffany Pagac IV', '77796 Hoeger Vista Apt. 901', 'snikolaus@example.com'),
(515, 'Bessie Marquardt', '248 Paucek Trafficway Apt. 483', 'prudence.weber@example.org'),
(516, 'Cedrick Skiles', '540 Tamia Unions Apt. 224', 'gilda29@example.net'),
(517, 'Anika Watsica', '261 Jerde Forks Suite 800', 'dudley.bednar@example.com'),
(518, 'Brandt Botsford', '060 Klocko Heights Apt. 549', 'melvina18@example.com'),
(519, 'Mrs. Onie Moen', '4875 Abshire Point Apt. 473', 'adouglas@example.org'),
(520, 'Sophia Ferry', '46568 Tremblay Parks', 'ines.von@example.net'),
(521, 'Mayra O\'Keefe', '50347 Carole Manors Apt. 316', 'lzemlak@example.net'),
(522, 'Barton Dietrich III', '04142 Hills Ways Apt. 919', 'jones.everardo@example.net'),
(523, 'Rosalia Dickens', '95276 Goyette Square Apt. 622', 'ritchie.susan@example.com'),
(524, 'Armani Muller', '85820 Stiedemann Gardens Suite 274', 'elsa04@example.org'),
(525, 'Dr. Alexis Zemlak', '813 Gideon Row', 'gutmann.colten@example.org'),
(526, 'Juana Beier DDS', '19242 Shane Groves', 'preynolds@example.com'),
(527, 'Prof. Loyal Kertzmann', '28618 King Motorway', 'sherwood.hackett@example.net'),
(528, 'Kristin Zemlak', '65663 Isabella Tunnel Apt. 386', 'maximillia02@example.com'),
(529, 'Dr. Dagmar Miller III', '523 Schmeler Courts', 'jovany.pouros@example.net'),
(530, 'Mrs. Jannie Corkery', '88798 Grant Bypass Apt. 213', 'joana00@example.org'),
(531, 'Haskell Fritsch', '535 Kessler Ramp Suite 488', 'karen.blanda@example.net'),
(532, 'Dr. Javonte Toy', '09469 Lavon Unions Apt. 047', 'fernando.heaney@example.com'),
(533, 'Dr. Kieran Herzog', '054 Hyman Square Suite 113', 'marjorie65@example.com'),
(534, 'Theo Medhurst MD', '583 Lyla Dale', 'dortha.murray@example.net'),
(535, 'Una Nader', '784 Una Brook Suite 437', 'maggie.paucek@example.net'),
(536, 'Rosie Hammes', '26751 Gwen Rapid', 'remington54@example.org'),
(537, 'Mr. Nathanael Bergnaum', '24576 Eliza Burgs', 'solon77@example.net'),
(538, 'Ryder Trantow', '730 Serenity Common Suite 365', 'kuhlman.larue@example.com'),
(539, 'Dr. Lavern Gleason MD', '7904 Bernier Estates', 'amelia75@example.com'),
(540, 'Billy Stamm', '0698 Tillman Stravenue Suite 571', 'heller.rosa@example.org'),
(541, 'Erick Cremin', '2280 Jillian Centers Suite 346', 'uschmidt@example.net'),
(542, 'Ruth Glover', '480 Thaddeus Rest', 'marvin.howell@example.org'),
(543, 'Miss Myra Rempel', '518 Moen Flat', 'mtrantow@example.com'),
(544, 'Vladimir Lang', '577 Jakayla Corner Suite 102', 'heathcote.bridgette@example.net'),
(545, 'Ignatius Douglas', '71121 Jenkins Crossing', 'hreilly@example.net'),
(546, 'Lois Howell', '63655 Carroll Island', 'demarco.abbott@example.org'),
(547, 'Natasha Blanda', '26845 Feeney Station Suite 893', 'heloise82@example.com'),
(548, 'Dr. Alberta Gottlieb', '52667 Jaskolski Meadows Suite 920', 'nash60@example.com'),
(549, 'Prof. Bertram Wuckert', '97846 Gleason Track Apt. 310', 'o\'hara.anika@example.net'),
(550, 'Mr. Marcel Zboncak Jr.', '230 Daphnee Village Apt. 416', 'romaine.blick@example.org'),
(551, 'Claud Haley III', '52081 Steuber Village Apt. 516', 'usteuber@example.net'),
(552, 'Watson Weissnat', '296 Martina Pass', 'brandt95@example.net'),
(553, 'Megane Windler', '364 Gerry Views', 'jacobs.cali@example.org'),
(554, 'Sibyl Stracke Sr.', '5350 Earl Extensions Suite 825', 'modesto86@example.org'),
(555, 'Percival Thiel IV', '074 Orion Pines Suite 855', 'korbin.lowe@example.org'),
(556, 'Lester Von', '6599 Zaria Station', 'nicolette50@example.com'),
(557, 'Cleo Rath IV', '91581 Aida Trace Apt. 729', 'joannie78@example.net'),
(558, 'Braxton Hoppe', '060 Aufderhar Crest Apt. 844', 'fgoldner@example.net'),
(559, 'Kaleb Johnson', '6236 O\'Reilly Rapid Suite 660', 'chester.moore@example.net'),
(560, 'Mr. Wayne Nader', '1188 Beahan Hollow Apt. 130', 'albert.littel@example.net'),
(561, 'Prof. Shaylee Muller Jr.', '185 Lance Wells Apt. 854', 'zskiles@example.com'),
(562, 'Reuben Hagenes DVM', '427 Jenkins Union Apt. 563', 'mark45@example.org'),
(563, 'Fabiola Cruickshank', '240 Wolf Stravenue', 'gmiller@example.net'),
(564, 'Prof. Christine Anderson', '489 Ankunding Ville Suite 112', 'adele02@example.com'),
(565, 'Ms. Dianna Simonis DDS', '655 Madeline Crossroad Suite 726', 'alexanne.dach@example.com'),
(566, 'Prof. Dewayne Schuster Sr.', '859 Tad Motorway', 'ansley77@example.net'),
(567, 'Jerel Orn PhD', '727 Johnnie Wall', 'sigrid.romaguera@example.net'),
(568, 'Marina Murray', '411 Nikko Drive Apt. 625', 'berge.nico@example.org'),
(569, 'Prof. Reggie Ullrich V', '471 Daphne Lock', 'hillary51@example.org'),
(570, 'Miss Vergie Maggio IV', '597 King Parks Apt. 245', 'kautzer.tracey@example.com'),
(571, 'Ms. Gerry Goldner', '7882 Hackett Ferry Apt. 575', 'wiegand.griffin@example.org'),
(572, 'Haley Wolff', '2991 Mara Hill', 'kassulke.beaulah@example.org'),
(573, 'Prof. Jeramy Fahey Sr.', '33606 Medhurst Summit Suite 172', 'yrunte@example.com'),
(574, 'Mr. Sonny Weissnat MD', '661 Towne Roads', 'hammes.melody@example.net'),
(575, 'Richie Leffler', '940 Yasmine Mills Apt. 276', 'dkrajcik@example.com'),
(576, 'Gavin Schiller', '077 Reilly Vista', 'dawson.rau@example.com'),
(577, 'Chad Koch', '013 Neoma Ranch Apt. 336', 'monroe05@example.org'),
(578, 'Jennie Kunze', '9296 Kaelyn Prairie', 'towne.kris@example.net'),
(579, 'Rashawn Mosciski', '334 Gutmann Junctions Apt. 068', 'lavina09@example.com'),
(580, 'Dr. Micaela Prohaska DVM', '993 Willms Springs', 'huel.gregoria@example.net'),
(581, 'Angelita Koss', '800 Abdul Plaza', 'hokuneva@example.com'),
(582, 'Franz McClure', '752 Gibson Springs', 'tkulas@example.com'),
(583, 'Kelvin Grimes', '4093 Hackett Village Apt. 831', 'veum.lauretta@example.com'),
(584, 'Dasia Wisozk', '382 Princess Isle Apt. 034', 'marisol.hackett@example.net'),
(585, 'Gideon Hane', '275 Erdman Orchard Suite 875', 'zola78@example.net'),
(586, 'Krista Eichmann', '8854 Sanford Squares Apt. 913', 'fharris@example.net'),
(587, 'Prof. Sasha Stamm DDS', '98408 Bradtke Camp', 'josie.renner@example.org'),
(588, 'Dr. Kelton Haag DVM', '1852 Ashley Fields Apt. 300', 'zmills@example.net'),
(589, 'Ricardo Lowe I', '450 Stoltenberg Springs', 'herzog.stevie@example.com'),
(590, 'Prof. Berry Bogan III', '81044 Fay Keys Apt. 989', 'ktrantow@example.com'),
(591, 'Tobin McCullough', '57497 Rocky Route Apt. 837', 'williamson.dominic@example.com'),
(592, 'Dr. Mohamed Auer', '86095 Jaycee Street', 'ladarius17@example.com'),
(593, 'Ms. Demetris Mante', '723 Hansen Mill', 'anderson.deonte@example.net'),
(594, 'Carolanne Schmitt', '97132 Enid Trail', 'imcdermott@example.com'),
(595, 'Mr. Grady Schinner V', '6309 Hermiston Stream Apt. 857', 'lorenza.jenkins@example.com'),
(596, 'Verlie Maggio', '176 Erdman View', 'eulalia58@example.com'),
(597, 'Thad Kris', '831 Tiana Forks', 'eladio.collier@example.org'),
(598, 'Prof. Isaac Cruickshank', '490 Purdy Estates Apt. 226', 'murphy.amina@example.com'),
(599, 'Enid Steuber PhD', '059 Joannie Wells', 'pshanahan@example.org'),
(600, 'Mr. Ricky Reynolds', '960 Muller Ports', 'tfeil@example.org'),
(601, 'Celine Bosco', '67362 May Burg', 'garret.batz@example.org'),
(602, 'Dr. Micah Rippin IV', '7576 Peggie Viaduct Apt. 333', 'maia11@example.com'),
(603, 'Esperanza Cartwright', '5440 Kaylie Estate', 'salvatore98@example.net'),
(604, 'Prof. Sean Harvey II', '0737 Rippin Wall Suite 690', 'kkunze@example.com'),
(605, 'Benton Price', '8414 Edythe Wells Suite 444', 'connelly.emil@example.com'),
(606, 'Prof. Melvin O\'Connell', '6530 Lolita Unions Suite 574', 'narciso.kertzmann@example.com'),
(607, 'Jeffery Beier', '86144 Griffin Meadow', 'streich.helene@example.net'),
(608, 'Kurtis Daniel', '56128 Stokes Rapids', 'aliyah.larson@example.org'),
(609, 'Justine Mosciski V', '09612 Charlie Camp Apt. 138', 'aleffler@example.org'),
(610, 'Prof. Hudson Armstrong', '000 Eugene Club', 'ward.randal@example.com'),
(611, 'Theo Rosenbaum DDS', '599 Moises Locks', 'karianne96@example.net'),
(612, 'Claudie Reilly MD', '7965 Moore Falls', 'trantow.ova@example.com'),
(613, 'Cornell Senger', '649 Loyal Squares Apt. 982', 'maude83@example.com'),
(614, 'Rosemarie Parker', '498 Henderson Shore Apt. 933', 'mackenzie55@example.com'),
(615, 'Icie Wiza', '3478 Harold Valley', 'rowland.paucek@example.net'),
(616, 'Jacynthe Hyatt', '93571 Payton Corners', 'corkery.jazmyne@example.org'),
(617, 'Clotilde Herzog', '32108 Reece Expressway Suite 589', 'mlangworth@example.org'),
(618, 'Kenny Gerlach', '811 Brakus Square', 'wgutmann@example.org'),
(619, 'Kasey Bauch', '1112 Lowe Wall', 'jlubowitz@example.org'),
(620, 'Dr. Horace Cormier IV', '19970 Evelyn Drive Suite 390', 'freeman.zieme@example.net'),
(621, 'Vincent Bins', '48569 Gulgowski Stream Apt. 807', 'bradley.grimes@example.net'),
(622, 'Milo Bayer', '4401 Dayana Avenue', 'veum.tom@example.net'),
(623, 'Morton Block', '18865 Jayden Extension Apt. 895', 'chet76@example.net'),
(624, 'Rachelle Boehm', '1870 Schoen Springs', 'jacobi.samson@example.net'),
(625, 'Christa Trantow', '60407 Emmet Green', 'norbert.baumbach@example.com'),
(626, 'Prof. Rosina Langosh', '58718 Davin Street Apt. 532', 'ubashirian@example.net'),
(627, 'Prof. Maxime Homenick', '5721 Harris Fork Suite 767', 'marlee44@example.com'),
(628, 'Denis Heathcote', '179 Claire Station', 'rstoltenberg@example.org'),
(629, 'Ernie Connelly', '84189 Goldner Circles Suite 560', 'violet32@example.net'),
(630, 'Junior Becker', '37429 Boyle Locks', 'cremin.shanel@example.com'),
(631, 'Mr. Carol Kulas', '49457 Casper Meadows', 'mfahey@example.net'),
(632, 'Bartholome Aufderhar DVM', '4713 Merl Prairie Suite 125', 'koelpin.olen@example.org'),
(633, 'Mr. Tyrel Reinger DDS', '134 Prohaska Plains Suite 355', 'randall.gutmann@example.com'),
(634, 'Isom Stehr', '36487 Uriel Circle Suite 992', 'ernestine89@example.org'),
(635, 'Don Reinger', '29182 Porter Ramp Suite 863', 'waters.aurelie@example.net'),
(636, 'Melvin Nienow IV', '35889 Rogahn Squares', 'waldo.lockman@example.org'),
(637, 'Jessyca Kassulke III', '8421 Pattie Cape Suite 022', 'koelpin.elda@example.com'),
(638, 'Curt Jakubowski', '82675 Shaun Causeway', 'rmarks@example.org');
INSERT INTO `peoples` (`id`, `nama`, `alamat`, `email`) VALUES
(639, 'Albin Hessel', '365 Zboncak Pines Apt. 505', 'tsauer@example.com'),
(640, 'Kelton Hintz', '083 Jerde Trail', 'alessia88@example.org'),
(641, 'Clyde Leuschke II', '2875 Miller Harbor Suite 017', 'torrance72@example.org'),
(642, 'Ms. Elvera Becker Jr.', '89525 Rau Green', 'gino47@example.net'),
(643, 'Reese Collier', '13256 Ramona Port Apt. 996', 'vidal.nikolaus@example.net'),
(644, 'Estel Lockman', '73170 Abby Lock Suite 394', 'wehner.bernita@example.org'),
(645, 'Sedrick Bartoletti V', '38330 Marilyne Run Apt. 176', 'ukozey@example.net'),
(646, 'Cathy Grimes', '63102 Hilda Canyon Suite 786', 'damion47@example.com'),
(647, 'Mr. Melvin Champlin I', '8504 Krista Flat', 'adolphus38@example.com'),
(648, 'Deion Tromp', '86811 Rutherford Rapid', 'beatty.margaret@example.org'),
(649, 'Jacinto O\'Kon', '9015 Melany Spurs Apt. 664', 'fredy83@example.org'),
(650, 'Sonya Ruecker', '652 Hoppe Drives Suite 049', 'adolph96@example.org'),
(651, 'Dr. Sister Gibson DVM', '83319 Balistreri Road Apt. 390', 'wilton43@example.com'),
(652, 'Mrs. Cassandre Bogan DDS', '234 Aletha Mountain Suite 830', 'vcollier@example.net'),
(653, 'Maya Boyer', '825 Tillman Radial', 'roger.sanford@example.com'),
(654, 'Vada Blick', '549 Smitham Mount Apt. 257', 'karen.lynch@example.net'),
(655, 'Sadye Grant DVM', '3474 Jarrod Inlet', 'victor83@example.com'),
(656, 'Rosalind Daniel MD', '646 Reanna Trace', 'heathcote.florian@example.com'),
(657, 'Prof. Garrett Kling', '52706 Thompson Locks', 'dibbert.dejon@example.net'),
(658, 'Miss Viola Waelchi', '558 Kreiger Mission', 'tito76@example.org'),
(659, 'Dr. Romaine Wisozk', '383 Gerhard Cove', 'hayes.marc@example.net'),
(660, 'Pearl Schmitt', '3753 Halvorson Manor Apt. 913', 'una.balistreri@example.org'),
(661, 'Kyle Abernathy MD', '0535 Bergstrom Ferry', 'goyette.gillian@example.org'),
(662, 'Parker Bailey DDS', '2891 Toby Fort Apt. 019', 'german.blanda@example.com'),
(663, 'Dr. Summer Cremin DVM', '619 Matteo Summit', 'nadia47@example.com'),
(664, 'Bernita Conn IV', '52828 Mertz Dam', 'ezekiel08@example.com'),
(665, 'Kurt Daugherty', '909 O\'Reilly Falls Suite 947', 'kuhlman.danny@example.org'),
(666, 'Granville Maggio', '02057 Monica Cliff', 'janet87@example.net'),
(667, 'Mr. Donato Von', '0903 Klocko Crest', 'rwaters@example.com'),
(668, 'Rylan Huel', '82897 Brad Island', 'efranecki@example.org'),
(669, 'Mr. Norbert Mayer IV', '031 Ziemann Row Apt. 100', 'rubie06@example.com'),
(670, 'Madeline McCullough Jr.', '90935 Kling Drive Suite 223', 'pollich.tillman@example.com'),
(671, 'Retta Altenwerth', '2038 Dorcas Ridge Apt. 839', 'shanie.bahringer@example.net'),
(672, 'Mr. Griffin Weimann Sr.', '05688 Lynch Street Suite 076', 'pfeffer.winfield@example.com'),
(673, 'Jena Funk', '415 Marjolaine Vista', 'marion.toy@example.net'),
(674, 'Bernie Rutherford', '84037 Gleichner Island Apt. 201', 'kitty.doyle@example.org'),
(675, 'Julianne Zboncak', '0164 Fermin Islands Apt. 747', 'emory91@example.com'),
(676, 'Juvenal Kuhlman', '114 Bartholome Springs', 'mwunsch@example.org'),
(677, 'Genesis Rodriguez', '880 Russel Fords', 'cvon@example.com'),
(678, 'Prof. Erwin Collins Jr.', '783 Herzog Coves', 'streich.dewayne@example.com'),
(679, 'Prof. Tommie Williamson IV', '6431 Schamberger Canyon', 'golda65@example.net'),
(680, 'Tess Hudson', '48961 Giovanny Valleys', 'toy.bessie@example.org'),
(681, 'Rey Denesik DDS', '4353 Rachelle Ports Suite 266', 'vivien93@example.com'),
(682, 'Lester Graham DVM', '350 Maximilian Prairie Suite 877', 'jarrod.keebler@example.net'),
(683, 'Yvette Kshlerin', '586 Cummings Knoll Suite 278', 'rau.colleen@example.org'),
(684, 'Dr. Candice Roob', '02792 Marquis Trail Suite 140', 'ngutmann@example.net'),
(685, 'Prof. Korbin Hoeger', '6706 Gutmann Harbors', 'assunta.donnelly@example.net'),
(686, 'Dr. Mike Dickinson PhD', '80609 Dusty Mill', 'emile.boyle@example.org'),
(687, 'Kasey Wolf MD', '77578 Judson Garden', 'winnifred03@example.com'),
(688, 'Ms. Dayana Konopelski', '040 Theresa Field Apt. 240', 'scruickshank@example.net'),
(689, 'Fannie Langworth', '94671 Halie Spring Apt. 530', 'guillermo.hammes@example.com'),
(690, 'Prof. Paul Cormier', '727 Parker View', 'trenton91@example.net'),
(691, 'Mr. Ewell Carter II', '4654 Lauriane Key Suite 926', 'garnet78@example.com'),
(692, 'Kaela Rogahn', '15027 Al Fords Suite 233', 'mabelle18@example.com'),
(693, 'Dr. Mauricio Balistreri III', '4027 Sierra Court Suite 676', 'reichert.marguerite@example.com'),
(694, 'Mrs. Elisha Kris DVM', '6088 Jast Grove Apt. 388', 'kiel62@example.org'),
(695, 'Carole Barrows V', '71636 Schiller Summit', 'domenico.schuppe@example.org'),
(696, 'Mr. Jaden Kub', '73895 Alex Mountains', 'brendan.weimann@example.net'),
(697, 'Jalyn Thiel', '43401 Ava Radial', 'pkessler@example.org'),
(698, 'Prof. Larissa Jerde', '931 Darwin Islands Suite 787', 'matilde.satterfield@example.com'),
(699, 'Dr. Chyna Muller III', '1295 Brooke Streets', 'sonya.reichel@example.org'),
(700, 'Carmela Torp', '2782 Natalie Knolls', 'jeremie58@example.com'),
(701, 'Marquise Champlin', '5218 Moore Ridges Apt. 098', 'kurt.koepp@example.com'),
(702, 'Mac Mann', '5025 Vallie Prairie Suite 345', 'adeline.mante@example.net'),
(703, 'Marilyne Tillman', '185 Flavie Village Apt. 187', 'scottie.beatty@example.net'),
(704, 'Mae Ankunding', '22222 Torrance Greens Apt. 098', 'mitchel50@example.com'),
(705, 'Isaac Tromp', '036 Ottilie Islands Apt. 701', 'mcorkery@example.org'),
(706, 'Ms. Muriel Strosin', '003 Vivianne Rue', 'zcormier@example.org'),
(707, 'Dr. Esta Bergnaum Sr.', '30541 Satterfield Hill Suite 609', 'price.oda@example.org'),
(708, 'Marcelo Batz', '10085 Emile Heights Apt. 335', 'ward.renee@example.org'),
(709, 'Aurelio Hodkiewicz', '2320 Watson Loaf Suite 618', 'sarah12@example.net'),
(710, 'Andreane Heidenreich III', '58199 Marion Knolls', 'mattie86@example.org'),
(711, 'Mariam Grimes', '0688 Larkin Station Suite 235', 'yvonrueden@example.com'),
(712, 'Marjolaine Hudson', '788 Berge Lakes', 'meagan84@example.org'),
(713, 'Darrel Monahan DDS', '787 Erin Mountains Suite 890', 'stroman.eloisa@example.com'),
(714, 'Larue Breitenberg', '15901 Mann Village', 'vonrueden.bernie@example.org'),
(715, 'Taylor Turner', '9837 Murazik Neck', 'keebler.gina@example.net'),
(716, 'Prof. Roslyn Lowe', '880 Isabelle Rapids Apt. 715', 'wuckert.gwendolyn@example.com'),
(717, 'Theodora Barton', '8315 Emmie Cliff', 'julius.mohr@example.com'),
(718, 'Wilfrid Kris', '24633 Mireya Streets', 'maggio.donnell@example.com'),
(719, 'Claudie Farrell', '5197 Funk Orchard', 'patience31@example.com'),
(720, 'Shanelle Veum', '87059 Tillman Manor Apt. 378', 'roman60@example.net'),
(721, 'Antwan Gibson', '017 Kuhlman Meadow', 'jacobson.raquel@example.net'),
(722, 'Allen Nitzsche', '32131 Gutkowski Port', 'dblock@example.net'),
(723, 'Miss Eden Leffler', '46184 Kiehn Radial', 'keanu.king@example.net'),
(724, 'Demetrius Shanahan Sr.', '333 Demond Stravenue Apt. 322', 'tessie.kuhic@example.net'),
(725, 'Adolphus Cruickshank', '0252 Grimes Spurs Suite 760', 'hahn.bernice@example.com'),
(726, 'Carmella Beier', '7223 Hickle Fall Apt. 210', 'ashly.lueilwitz@example.net'),
(727, 'Jaydon Connelly', '5925 Cummings Forges', 'franecki.waldo@example.org'),
(728, 'Dewitt Tillman', '2918 Gusikowski Meadow Apt. 956', 'julia.stehr@example.org'),
(729, 'Florida Hane PhD', '6949 Marvin Lake Apt. 442', 'sadie99@example.net'),
(730, 'Torey Satterfield MD', '32596 Kling Lights', 'nolan.pansy@example.org'),
(731, 'Pedro Kozey', '53260 Carley Falls', 'krajcik.emilia@example.org'),
(732, 'Mr. Alfred Volkman IV', '80470 Bartell Flats', 'gibson.laney@example.net'),
(733, 'Mrs. Sasha Hoeger', '62222 Johnson Forest Apt. 294', 'iboyle@example.org'),
(734, 'Estell Hickle', '30882 Hoppe Way', 'volkman.maxine@example.org'),
(735, 'Mallory Kozey DDS', '88976 Anibal Centers', 'wrenner@example.net'),
(736, 'Lesley Armstrong', '70534 Crist Fork Apt. 845', 'zsmitham@example.com'),
(737, 'Mr. Newton Romaguera', '858 Macie Heights Apt. 722', 'amanda51@example.net'),
(738, 'Kallie Lang', '6410 Orville Rapid Apt. 216', 'hamill.shaylee@example.org'),
(739, 'Cale Schmitt', '40787 Avis Corner Apt. 562', 'zboncak.kaylee@example.net'),
(740, 'Chadd Littel', '42924 Conn Harbors', 'elnora10@example.com'),
(741, 'Dr. Kayden Hilpert IV', '57385 Wiegand Shoals', 'ibradtke@example.com'),
(742, 'Ms. Marielle Smith IV', '72827 Irwin Viaduct', 'ckuhlman@example.net'),
(743, 'Claude Rippin', '7088 Durgan Harbors', 'jamison.cremin@example.org'),
(744, 'Elvie Larkin', '51568 Kennedy Ferry Apt. 791', 'letha72@example.org'),
(745, 'Jarrell Buckridge', '86565 Predovic Dale Apt. 088', 'hansen.gaylord@example.com'),
(746, 'Rita Medhurst DVM', '261 Grimes Cliffs', 'lnitzsche@example.net'),
(747, 'Prof. Jettie Mosciski', '2447 Rohan Club Suite 978', 'barton.benny@example.net'),
(748, 'Antonietta Nienow', '42328 Connelly Walk', 'berneice.mosciski@example.net'),
(749, 'Mrs. Dulce Legros V', '890 Fidel Garden Suite 877', 'bjohnston@example.org'),
(750, 'Stella Mann III', '224 Lavonne Rue', 'jeffrey.beer@example.org'),
(751, 'Garrison Treutel IV', '0968 Schimmel Route Apt. 123', 'yreynolds@example.net'),
(752, 'Mr. Brad Hammes IV', '3954 Ada Views Apt. 718', 'wehner.hettie@example.org'),
(753, 'Deron Kreiger', '56445 Lavon Knolls', 'ana.doyle@example.net'),
(754, 'Kylee Dare II', '92280 Hickle Corners', 'kweissnat@example.net'),
(755, 'Jessyca Heller', '76928 Prohaska Fall Suite 982', 'alphonso61@example.net'),
(756, 'Isabelle Schuppe', '95763 Hyatt Plaza Apt. 979', 'virgie50@example.org'),
(757, 'Demarco Bahringer IV', '2481 Kovacek Motorway', 'retha.mosciski@example.com'),
(758, 'Alena Collier', '8962 Conor Loop Suite 708', 'godfrey.brakus@example.com'),
(759, 'Nickolas Funk I', '920 O\'Kon Rue', 'dbruen@example.org'),
(760, 'Ms. Cleora Sipes', '6832 Greenfelder Light Suite 715', 'kadin09@example.com'),
(761, 'Zella West DDS', '586 Hilll Shoal', 'mitchell.zaria@example.com'),
(762, 'Carley McKenzie', '0891 Gislason Villages', 'herzog.izaiah@example.com'),
(763, 'Arvilla Murphy', '1514 Craig Brooks', 'selina33@example.com'),
(764, 'Stacy Wyman', '21565 Weber Forks Apt. 876', 'abshire.charles@example.com'),
(765, 'Douglas Botsford', '719 Mohr Throughway', 'peyton11@example.net'),
(766, 'Delta Beahan', '376 Kelsie Road', 'abernathy.eloy@example.org'),
(767, 'Chaim Little', '419 Beahan Fields', 'krajcik.nyah@example.org'),
(768, 'Prof. Christop Runolfsson', '2192 Norene Plains', 'rosenbaum.emma@example.com'),
(769, 'Hellen Rodriguez', '380 Kuhn Fall Apt. 840', 'vernice87@example.com'),
(770, 'Mrs. Teagan Upton I', '97639 Treutel Island', 'gregoria69@example.com'),
(771, 'Timothy Hessel', '10713 Fadel Plaza Suite 522', 'marcelle.paucek@example.net'),
(772, 'Ian Wolff', '33707 Leopold Roads Suite 216', 'lakin.madonna@example.com'),
(773, 'Carlo Olson', '1476 Willms Port', 'trau@example.org'),
(774, 'Norma Borer', '380 Harris Trail Suite 310', 'darrion37@example.org'),
(775, 'Mrs. Erica White', '3446 Yasmeen Estates', 'aileen.predovic@example.org'),
(776, 'Dr. Ally Bayer II', '464 Dolores Stravenue Suite 488', 'ullrich.grayce@example.com'),
(777, 'Ulises Gleichner Jr.', '694 Lakin Pines', 'kaufderhar@example.net'),
(778, 'Prof. Tomas Murazik PhD', '33930 Valerie Junction Apt. 656', 'renner.anabelle@example.com'),
(779, 'Stella Conroy', '95745 Rempel Village Suite 443', 'casper.clint@example.net'),
(780, 'Baylee Medhurst', '98582 Kade Mount Apt. 842', 'jeanie.bogisich@example.com'),
(781, 'Kailyn Volkman', '99507 Kshlerin Unions Apt. 491', 'otha31@example.com'),
(782, 'Greta Balistreri', '667 Christiana Corner', 'dorn@example.com'),
(783, 'Kenny Nitzsche Sr.', '33616 Baumbach Island Suite 440', 'bwilliamson@example.net'),
(784, 'Erica Ankunding', '94704 Major Mountain Apt. 226', 'cpfannerstill@example.net'),
(785, 'Verna Nader', '162 Maxwell Street Suite 273', 'corine81@example.net'),
(786, 'Halie Padberg Sr.', '46899 Porter Glens', 'rhianna.stracke@example.net'),
(787, 'Vincenza Wyman', '3009 Torp Garden', 'ularkin@example.org'),
(788, 'Mr. Randi Watsica', '54868 Walter Mountain', 'irutherford@example.com'),
(789, 'Dr. Bryon D\'Amore MD', '5223 Wintheiser Squares', 'violet74@example.com'),
(790, 'Aurelio Medhurst', '36215 Anastasia Shoal Apt. 562', 'emmanuel16@example.net'),
(791, 'Mr. Darian Hilll', '9347 Feil Landing', 'camilla49@example.org'),
(792, 'Declan Cormier', '700 Brant Ferry', 'stanton.wilhelmine@example.net'),
(793, 'Dallin Watsica II', '893 Ortiz Isle', 'herminio94@example.org'),
(794, 'Kamille Kuphal', '4227 Cecilia Keys Apt. 306', 'amelia89@example.net'),
(795, 'Chauncey Blick', '60984 Boyer Landing Suite 724', 'stamm.jason@example.net'),
(796, 'Dr. Orland Homenick MD', '47301 Amani Fork Apt. 435', 'kirlin.juliana@example.com'),
(797, 'Mr. Gillian Smitham Sr.', '99737 Abernathy Pike', 'karina36@example.org'),
(798, 'Dr. Alden Effertz PhD', '99931 Hassie Village Apt. 998', 'mmante@example.net'),
(799, 'Prof. Bernadine Mann', '3579 Lyda River Suite 286', 'bkoelpin@example.net'),
(800, 'Micah Beatty', '9087 Goodwin Prairie', 'raymond.swift@example.org'),
(801, 'Luisa Zieme', '2056 Stevie Place Apt. 705', 'torphy.oswaldo@example.org'),
(802, 'Faye Hilpert', '64082 Huels Trace', 'sauer.hollis@example.org'),
(803, 'Prof. Pierre Roberts', '4610 Nikolaus Village Apt. 956', 'williamson.tyrell@example.org'),
(804, 'Velva Predovic', '661 Eloise Course', 'henderson.okuneva@example.org'),
(805, 'Prof. Charlie Toy IV', '9969 Torrey Key', 'hassie82@example.org'),
(806, 'Maxime Bashirian', '698 Mills Plaza Apt. 592', 'mazie.jones@example.com'),
(807, 'Mrs. Laila Ortiz Sr.', '424 Misael Mission Suite 462', 'beatty.karson@example.com'),
(808, 'Elise Osinski', '35990 Runolfsson Brook', 'kuhlman.giovanna@example.net'),
(809, 'Kaylin Luettgen', '99467 Lesch Passage Apt. 555', 'lking@example.com'),
(810, 'Katarina Howe', '744 Hauck Manors Apt. 437', 'nelson.ritchie@example.com'),
(811, 'Nora Reynolds', '29236 Enrique Fork Apt. 486', 'germaine.fadel@example.net'),
(812, 'Katlynn Bauch I', '68237 Alexandra Drive Suite 465', 'wilderman.ivah@example.com'),
(813, 'Prof. Edmund Welch', '429 Lavon Coves Suite 252', 'carol02@example.org'),
(814, 'Mrs. Carlee Muller', '29164 Bailey Square Suite 770', 'macie66@example.net'),
(815, 'Augustus Schowalter DDS', '41378 Gaylord Plain Suite 271', 'marquis53@example.com'),
(816, 'Rollin Tremblay', '591 Witting Square', 'xpagac@example.com'),
(817, 'Mr. Ephraim Larkin', '502 Rowe Mills', 'schneider.vladimir@example.net'),
(818, 'Zane Schimmel', '572 Isaac Crest', 'armand36@example.com'),
(819, 'Danielle Johns', '27841 Michael Lock', 'tierra.king@example.net'),
(820, 'Jalen Rice', '45209 Abernathy Ridge Suite 314', 'asa.corwin@example.org'),
(821, 'Curt Waelchi V', '36639 Labadie Drives Apt. 433', 'robel.jarrett@example.com'),
(822, 'Emil Wuckert', '946 Witting Harbors', 'bethany.schulist@example.net'),
(823, 'Jeramy Huel DDS', '61049 Bins Fork', 'fae73@example.net'),
(824, 'Prof. Arvid Parisian PhD', '7020 Luettgen Meadows', 'katharina.parker@example.net'),
(825, 'Adalberto Crist', '741 Stracke Oval Apt. 335', 'weimann.katrina@example.net'),
(826, 'Bethel Schumm', '315 Schmeler Mission', 'kassulke.sierra@example.org'),
(827, 'Mrs. Kenna Aufderhar I', '09809 Ibrahim Locks', 'gerry29@example.net'),
(828, 'Kristina Breitenberg', '286 Herzog Club Apt. 589', 'graham97@example.com'),
(829, 'Bettie Schamberger', '2637 Javon Ports Apt. 581', 'ratke.buster@example.com'),
(830, 'Mr. Evan O\'Kon', '0719 Jacobs Lodge Apt. 953', 'leonora48@example.org'),
(831, 'Esteban Marks', '516 Emmerich Spring', 'lilyan.eichmann@example.net'),
(832, 'Lindsey D\'Amore', '10651 Jast Haven Suite 417', 'zander90@example.com'),
(833, 'Ms. Josefa Walsh', '191 Jarred Lodge Suite 753', 'dorothea.harris@example.org'),
(834, 'Pierce Barrows', '06307 Lydia Way', 'juana49@example.net'),
(835, 'Jade Ruecker', '2321 Ewald Pass', 'nicole25@example.com'),
(836, 'Arnulfo Howe', '5464 Arlo Burg', 'nbraun@example.net'),
(837, 'Felipa Sporer', '5015 Hahn Spring', 'delilah.conroy@example.com'),
(838, 'Dr. Oswaldo Kuphal', '512 Devante Mews', 'lonny66@example.com'),
(839, 'Felipe Kemmer IV', '7678 Senger Ford Suite 112', 'hframi@example.org'),
(840, 'Darwin Rohan', '6792 Cleo Landing Apt. 472', 'grayce91@example.com'),
(841, 'Prof. Larissa Stanton II', '4206 Ewell Pine', 'wdavis@example.com'),
(842, 'Verner Feil', '235 Wiza Brook Apt. 728', 'ward.will@example.net'),
(843, 'Arnoldo Lakin', '723 Cartwright Crest', 'myrl.torphy@example.com'),
(844, 'Dr. Lauriane Altenwerth II', '30294 Evalyn Ville Suite 115', 'zmorissette@example.net'),
(845, 'Augustus Block MD', '91060 Krystel Mountains', 'rosalee78@example.com'),
(846, 'Prof. Everette Hane', '015 Dietrich Lane Suite 269', 'floy.keebler@example.com'),
(847, 'Golden Weissnat', '944 Ryan Prairie Suite 873', 'grobel@example.net'),
(848, 'Janice Anderson', '714 Ryan Forks Apt. 690', 'kulas.trisha@example.org'),
(849, 'Tamia Nikolaus DDS', '37665 Beier Light', 'helmer.nienow@example.com'),
(850, 'Kayley Kassulke', '94423 Dibbert Manor Suite 005', 'stracke.roberta@example.com'),
(851, 'Stewart Hintz', '9275 Gerry Trail Suite 855', 'jschaefer@example.com'),
(852, 'Rene Dare', '658 Rodrigo Crest', 'obrown@example.net'),
(853, 'Lemuel Schmitt V', '1216 Dustin Mount', 'dayna.wyman@example.net'),
(854, 'Miss Betty Labadie PhD', '72872 Gleason Squares', 'davonte.wolff@example.com'),
(855, 'Princess Schmitt', '7890 Beer Glen Suite 650', 'bulah.quigley@example.com'),
(856, 'Marietta Kuhic MD', '48209 Gavin Rapid', 'schumm.agustina@example.org'),
(857, 'Ms. Florine Senger', '12428 Lebsack Bypass', 'leuschke.elody@example.net'),
(858, 'Jammie Nienow', '2309 Bernhard Prairie Apt. 658', 'qferry@example.net'),
(859, 'Giles Jaskolski Jr.', '68925 Sawayn Loop Suite 409', 'bernard72@example.com'),
(860, 'Mrs. Melisa Shields', '1008 Braun Underpass', 'jennings48@example.com'),
(861, 'Chet Wunsch', '4380 Koepp Course', 'vvon@example.org'),
(862, 'Kariane Zemlak', '550 Marvin Port Apt. 513', 'davis.margie@example.net'),
(863, 'Mr. Christopher Flatley V', '81944 Rosario Pines Apt. 126', 'sawayn.elinore@example.net'),
(864, 'Samara Pacocha', '8666 Harmon Extension', 'gerda.kerluke@example.org'),
(865, 'Earline Kilback', '04521 Torp Wall', 'reichel.corine@example.net'),
(866, 'Jacques Rippin', '999 Huels Walks Apt. 889', 'marisa51@example.net'),
(867, 'Mr. Clinton Hettinger I', '02565 Katelyn Terrace', 'lorine30@example.org'),
(868, 'Karley Rutherford MD', '00718 Nola Forges', 'hilpert.tianna@example.net'),
(869, 'Estelle Hickle', '620 Keeling Inlet Apt. 006', 'zjakubowski@example.com'),
(870, 'Lavonne Johnston', '27534 Wilbert Route Apt. 131', 'kulas.wellington@example.com'),
(871, 'Stephany Carter', '94539 Grady Plain Apt. 415', 'nils72@example.org'),
(872, 'Ms. Chelsea Miller', '135 Skiles Pass', 'ocie.rutherford@example.org'),
(873, 'Madilyn Muller', '04760 Price Cape Suite 416', 'eduardo59@example.org'),
(874, 'Miss Bethel Miller I', '574 Jordon Run', 'denesik.aurelie@example.com'),
(875, 'Prof. Perry Orn DDS', '27161 McCullough Valley', 'nienow.elian@example.org'),
(876, 'Enola Smith', '44198 Parisian Mews', 'denis.doyle@example.org'),
(877, 'Jasper Howell', '36965 Julia Lodge Apt. 155', 'delores.sporer@example.com'),
(878, 'Darwin Goldner', '390 Cummings Burgs Apt. 468', 'gino.boyle@example.net'),
(879, 'Beulah Ryan', '4388 Santina Bypass Suite 650', 'josiane78@example.net'),
(880, 'Janet Hoeger', '671 Harris Lock Suite 245', 'bella.altenwerth@example.net'),
(881, 'Lester Schoen', '4042 Reanna Route Suite 920', 'otilia.boehm@example.org'),
(882, 'Arturo Ward', '92037 Schiller Haven Apt. 474', 'rippin.victor@example.com'),
(883, 'Bernice Moen', '268 Brown Circle Suite 466', 'shaun.o\'connell@example.org'),
(884, 'Dr. Judson Brekke', '714 Torphy Brook Apt. 866', 'cormier.julia@example.net'),
(885, 'Walker Lehner', '06074 Huel Street', 'hoeger.ora@example.net'),
(886, 'Haleigh Breitenberg', '132 Abby Flat Apt. 643', 'ikihn@example.net'),
(887, 'Miss Maximillia Walter I', '099 Beier Crossroad', 'mertie.rowe@example.net'),
(888, 'Hallie Mitchell', '21459 Ledner Underpass Suite 900', 'lreinger@example.org'),
(889, 'Dr. Willis Haag DVM', '4535 Toney Shore Apt. 331', 'hahn.rey@example.com'),
(890, 'Mr. Eusebio Watsica', '52263 Merle Manors Apt. 276', 'may.pacocha@example.org'),
(891, 'Clotilde Weissnat', '785 Pagac Unions', 'rkuhn@example.org'),
(892, 'Dr. Glenda Swaniawski DDS', '0592 Windler Hills Apt. 797', 'king.oswald@example.net'),
(893, 'Sigrid Koch V', '0470 Jackie Causeway', 'lauren.larson@example.org'),
(894, 'Maye Ziemann III', '676 Bergnaum Field Apt. 547', 'jacobs.dorcas@example.com'),
(895, 'Maud Jerde', '10767 Burley Parkways Apt. 696', 'nbernier@example.com'),
(896, 'Meggie Cummings I', '35609 Laurine Shoals', 'laverne76@example.org'),
(897, 'Zora Auer', '064 Herzog Walks', 'von.eusebio@example.com'),
(898, 'Prof. Tamia Kuhn', '9289 Johnathan Greens', 'nella56@example.org'),
(899, 'Skyla Raynor', '415 Tremaine Greens', 'leonel74@example.net'),
(900, 'Ed Wintheiser', '678 Waters Vista Apt. 409', 'morissette.victoria@example.org'),
(901, 'Lisette Zemlak', '30606 Kreiger Camp', 'goyette.nelda@example.net'),
(902, 'Jazmyne Witting', '474 Wintheiser Ports Suite 010', 'brock65@example.net'),
(903, 'Pete Mills', '6767 Yadira Burg Suite 720', 'ernser.rudolph@example.net'),
(904, 'Dr. Cristina Hayes', '69601 Rosie Corners', 'casper95@example.org'),
(905, 'Prof. Charles Hudson DDS', '991 Caitlyn Cape Apt. 581', 'pollich.dashawn@example.com'),
(906, 'Connie Mante IV', '769 Barton Light Suite 901', 'brennan.hauck@example.net'),
(907, 'Trisha Stroman DDS', '7545 Towne Extension', 'jacinthe01@example.com'),
(908, 'Vernie Grady', '19434 Alexandra Valley', 'jalon.collins@example.com'),
(909, 'Rocky Altenwerth', '1351 Predovic Roads', 'lorn@example.org'),
(910, 'Yasmine Glover', '71662 Langosh Ferry Apt. 348', 'hahn.glen@example.com'),
(911, 'Erna Wolff', '6524 Ronny Park Apt. 437', 'armstrong.ivy@example.com'),
(912, 'Pink Marks Sr.', '13580 Clementina Mount Suite 027', 'gleason.caesar@example.net'),
(913, 'Dereck Purdy', '410 Christina Mill', 'natalia.homenick@example.com'),
(914, 'Elisa Lehner', '3580 Zakary Valley Apt. 777', 'barrows.elliott@example.org'),
(915, 'Colten Eichmann', '2648 Reinhold Flat Apt. 302', 'karen.bosco@example.com'),
(916, 'Jaquelin Rippin', '647 Robel Squares Suite 730', 'benjamin.boehm@example.com'),
(917, 'Madisyn O\'Reilly', '4430 Cicero Prairie', 'kirlin.jeffry@example.org'),
(918, 'Eldon Nienow DDS', '8421 Jayden Cape', 'geo.johnson@example.org'),
(919, 'Zelda Gutmann', '70224 Alessia Squares Suite 284', 'rhianna09@example.org'),
(920, 'Mariela Kohler', '4587 Huels Vista', 'ypowlowski@example.org'),
(921, 'Jayme Dickens DVM', '016 Auer Summit', 'murray.fausto@example.com'),
(922, 'Reymundo O\'Kon', '0467 Emmanuelle Vista Suite 784', 'lucio88@example.com'),
(923, 'Rodger Crist', '40917 Klocko Crossing', 'helena.ritchie@example.com'),
(924, 'Romaine Schuppe', '530 Raina Parks Suite 782', 'mbeier@example.net'),
(925, 'Aniyah Abernathy', '081 Vandervort Ranch', 'wlubowitz@example.org'),
(926, 'Ms. Jeanie Thompson', '84892 Volkman Ridge Suite 603', 'emmy.auer@example.org'),
(927, 'Stefan Rippin', '17020 Gleichner Stream Suite 642', 'halle.ritchie@example.net'),
(928, 'Michaela Herman', '400 Louie Courts Suite 523', 'efahey@example.net'),
(929, 'Alysha Pouros DDS', '11584 Becker Tunnel Suite 532', 'crist.mustafa@example.net'),
(930, 'Mr. Jimmy Romaguera', '897 Monty Walks', 'cristal.greenholt@example.com'),
(931, 'Jasen Dickinson', '32502 Weber Landing', 'streich.trace@example.org'),
(932, 'Mozelle Lubowitz', '530 Eldora Extensions Apt. 797', 'cummings.dillan@example.com'),
(933, 'Ashley Schaefer', '5086 Walker Street Suite 218', 'prudence30@example.net'),
(934, 'Bettie Keebler', '37038 Aufderhar Lock Suite 182', 'fay.jermain@example.org'),
(935, 'Miss Telly Mertz', '2467 Bergnaum Estate', 'lessie.von@example.net'),
(936, 'Phyllis Nolan', '3235 Donavon Islands', 'hollis.toy@example.org'),
(937, 'Arnold Krajcik DVM', '06863 Cesar Plaza', 'zora.daniel@example.net'),
(938, 'Miss Frederique Macejkovic', '69447 Kilback Village Suite 044', 'kerluke.imogene@example.com'),
(939, 'Kelvin Gutmann', '97018 Cydney Tunnel', 'tiara49@example.com'),
(940, 'Estelle Bashirian I', '9058 Johnson Harbor Suite 837', 'rbayer@example.net'),
(941, 'Mr. Paul Mraz', '719 Seth Flats', 'pfannerstill.zaria@example.com'),
(942, 'Stephania Kautzer', '602 Will Spring Suite 267', 'vhayes@example.com'),
(943, 'Jade Haag', '311 O\'Kon Ranch Apt. 210', 'kaley.barton@example.com'),
(944, 'Reed Vandervort', '37017 Kenna Light Suite 295', 'jmuller@example.org'),
(945, 'Brenda Langosh', '574 Tre Roads Suite 482', 'dagmar19@example.org'),
(946, 'Mrs. Veda Kuhlman', '60542 Torp Shore Suite 965', 'cruickshank.stevie@example.org'),
(947, 'Scotty Johns', '0872 Chelsie Streets', 'bruen.deanna@example.com'),
(948, 'Ms. Jada Greenfelder Sr.', '14576 Ruecker Haven', 'georgiana50@example.org'),
(949, 'Mr. Soledad Ondricka', '2458 Amely Ramp Suite 850', 'buckridge.haskell@example.net'),
(950, 'Mr. Scotty Walsh II', '79900 Casper Land Apt. 519', 'enos65@example.net'),
(951, 'Prof. Deshaun Kassulke', '253 Aiden Track Suite 899', 'rempel.marley@example.net'),
(952, 'Bennie Anderson', '753 Spinka Vista', 'angus.weber@example.com'),
(953, 'Nakia Hilpert IV', '74454 Stroman Tunnel Apt. 178', 'brown.amos@example.org'),
(954, 'Jay Pfannerstill DDS', '38831 Schneider Land', 'kabshire@example.org'),
(955, 'Viola Graham', '18370 Bednar Brook Apt. 263', 'lea95@example.net'),
(956, 'Ms. Alvina Harvey DDS', '368 Keeling Highway Apt. 641', 'loren89@example.org'),
(957, 'Dewitt Ankunding', '448 Josh Passage Suite 217', 'carolanne.ritchie@example.net'),
(958, 'Mr. Moriah Klocko', '309 Electa Mission Suite 838', 'skub@example.net'),
(959, 'Russ Gusikowski', '469 Langworth Canyon Apt. 550', 'cassin.dixie@example.com'),
(960, 'Dr. Laury Waelchi I', '03547 Bernier Summit Suite 210', 'orion.murazik@example.com'),
(961, 'Prof. Westley Wisoky PhD', '718 Melisa Locks', 'sasha.rogahn@example.net'),
(962, 'Marco Bartoletti', '154 Walsh Bypass', 'juanita.hirthe@example.com'),
(963, 'Carolyne Marquardt MD', '096 Glennie Corner', 'jermain.mclaughlin@example.com'),
(964, 'Nathanial Kreiger', '5260 Sigrid Causeway Suite 576', 'douglas.alexandrine@example.org'),
(965, 'Vito Funk', '36072 Friesen Forge', 'epaucek@example.net'),
(966, 'Cale Wisozk', '399 Irving Harbors Suite 500', 'ebba88@example.net'),
(967, 'Gilbert Ernser', '232 Catharine Valley', 'dominic.reinger@example.com'),
(968, 'Prof. Sean Jacobs Jr.', '94018 Hessel Forest Suite 150', 'lilly.mcclure@example.org'),
(969, 'Eliza Kuhlman', '95233 Champlin Corners Apt. 170', 'santos.lesch@example.com'),
(970, 'Narciso Schneider', '51335 Braun Road', 'nico.schroeder@example.org'),
(971, 'Merritt Auer Sr.', '58026 Powlowski Lodge', 'rick.d\'amore@example.com'),
(972, 'Aaron Fay', '550 Lambert Stream', 'faye.hermann@example.com'),
(973, 'Prof. Donnie Moen III', '1058 Claud Prairie Suite 565', 'delfina29@example.org'),
(974, 'Lew White III', '0532 Nicolette Islands Apt. 462', 'mgorczany@example.net'),
(975, 'Noah Nienow', '520 Lilla Pass Suite 862', 'mireya.ratke@example.com'),
(976, 'Destinee Pacocha', '8528 Koepp Walks Apt. 934', 'wilkinson.peter@example.org'),
(977, 'Prof. Sylvan Rippin', '86208 Annabell Corners Apt. 226', 'forest.mclaughlin@example.com'),
(978, 'Newton Stokes', '05897 Kaylie Coves Apt. 622', 'murazik.judy@example.org'),
(979, 'Jarvis Walsh', '4579 Dach Dam Suite 279', 'jayme.lubowitz@example.net'),
(980, 'Dr. Wilma Kassulke', '69971 Osinski Plaza Apt. 889', 'gerard10@example.net'),
(981, 'Erna Rohan', '837 Lelia Light Apt. 297', 'amie.balistreri@example.org'),
(982, 'Prof. Lera Stanton', '710 Daniela Wall', 'westley.rippin@example.com'),
(983, 'Mellie Beer', '8297 Hermann Path Suite 791', 'antonina.rolfson@example.org'),
(984, 'Ines Barton', '4988 Mosciski Cape', 'viviane.gorczany@example.com'),
(985, 'Dr. Perry Leuschke', '4014 Consuelo Haven Suite 241', 'gabriella14@example.net'),
(986, 'Danielle Reilly', '15050 Cronin Land Apt. 564', 'hlubowitz@example.com'),
(987, 'Evans Heathcote', '6914 Conn Neck', 'tkub@example.net'),
(988, 'Boris Nicolas', '36486 Gulgowski Port Suite 916', 'kurtis.hammes@example.com'),
(989, 'Prof. Cheyenne Anderson', '65766 Monahan Flat Suite 671', 'jake.mraz@example.com'),
(990, 'Hudson Carroll', '74542 Keebler Branch', 'chadrick33@example.com'),
(991, 'Marianne Ritchie Jr.', '9753 Predovic Springs Apt. 646', 'jerde.gina@example.net'),
(992, 'Serenity Schultz IV', '05879 Zander Passage', 'felicia81@example.com'),
(993, 'Prof. Emilio Nikolaus', '62083 Bill Glen', 'hansen.michaela@example.com'),
(994, 'Karolann Lakin', '388 Mayer Pike', 'bframi@example.net'),
(995, 'Kennedi Rolfson', '43841 Zemlak Key', 'larkin.benedict@example.org'),
(996, 'Prof. Rowena Casper MD', '4482 Donny Knolls Apt. 303', 'asia.borer@example.org'),
(997, 'Katelyn Russel', '2758 Beer Station', 'fleta.aufderhar@example.com'),
(998, 'Mrs. Carli Frami', '38570 Monserrat Canyon Suite 274', 'mcdermott.marlin@example.org'),
(999, 'Danielle Boyle III', '16287 Gretchen Shores Suite 998', 'stehr.yazmin@example.org'),
(1000, 'Leanne Metz', '3301 Cremin Common Apt. 282', 'daniella.ankunding@example.org');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang_keluar`
--

CREATE TABLE `tabel_barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nomor_keluar` varchar(255) NOT NULL,
  `stok_keluar` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_barang_keluar`
--

INSERT INTO `tabel_barang_keluar` (`id`, `id_barang`, `nomor_keluar`, `stok_keluar`, `id_kandang`, `created_at`) VALUES
(4, 18, 'OUT00001', '2', 43, '2021-05-25 09:10:34'),
(5, 21, 'OUT00002', '2', 43, '2021-05-25 10:40:07'),
(6, 18, 'OUT00003', '5', 43, '2021-05-25 10:43:59'),
(7, 4, 'OUT00004', '5', 43, '2021-05-25 10:44:40'),
(8, 21, 'OUT00005', '5', 43, '2021-05-25 11:04:15'),
(9, 17, 'OUT00006', '10', 43, '2021-05-25 11:05:08'),
(10, 21, 'OUT00007', '20', 44, '2021-05-25 11:07:18'),
(11, 21, 'OUT00008', '10', 43, '2021-05-25 11:13:42'),
(12, 21, 'OUT00009', '2', 43, '2021-05-25 11:14:21'),
(13, 21, 'OUT00010', '2', 43, '2021-05-26 08:54:43'),
(14, 21, 'OUT00011', '20', 45, '2021-05-31 07:19:15'),
(15, 21, 'OUT00012', '3', 43, '2021-06-01 08:08:37'),
(16, 21, 'OUT00013', '3', 43, '2021-06-01 08:29:19'),
(17, 2, 'OUT00014', '10', 43, '2021-06-01 08:30:31'),
(18, 2, 'OUT00015', '3', 43, '2021-06-01 13:10:11'),
(19, 17, 'OUT00016', '10', 43, '2021-06-01 13:12:58'),
(20, 22, 'OUT00017', '20', 43, '2021-06-03 05:21:52'),
(21, 4, 'OUT00018', '10', 43, '2021-06-03 13:14:54'),
(22, 18, 'OUT00019', '10', 43, '2021-06-03 13:15:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang_masuk`
--

CREATE TABLE `tabel_barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nomor_masuk` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `stok_masuk` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_barang_masuk`
--

INSERT INTO `tabel_barang_masuk` (`id`, `id_barang`, `nomor_masuk`, `keterangan`, `tanggal_masuk`, `stok_masuk`, `penerima`, `total_harga`, `created_at`) VALUES
(12, 3, 'IN00001', 'tambahan 5 pcs', '2021-05-14T13:41', '5', 'Budi', 'Rp 95.000,00', '2021-05-14 05:41:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_cekharian`
--

CREATE TABLE `tabel_cekharian` (
  `id` int(11) NOT NULL,
  `tanggal_waktu_cek` datetime NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_kandang` varchar(100) NOT NULL,
  `kode_kandang` varchar(150) NOT NULL,
  `kode_blok` varchar(100) NOT NULL,
  `jumlah_ayam` varchar(100) NOT NULL,
  `umur_ayam` varchar(100) NOT NULL,
  `tanggal_ayam_masuk` date NOT NULL,
  `kondisi_ayam` varchar(100) NOT NULL,
  `jumlah_ayam_sakit` varchar(100) DEFAULT NULL,
  `gejala_sakit` varchar(100) DEFAULT NULL,
  `jam_pakan` time NOT NULL,
  `jam_ganti_minum` time NOT NULL,
  `jam_ganti_vitamin` time NOT NULL,
  `jumlah_pakan` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_cekharian`
--

INSERT INTO `tabel_cekharian` (`id`, `tanggal_waktu_cek`, `nama_petugas`, `alamat_kandang`, `kode_kandang`, `kode_blok`, `jumlah_ayam`, `umur_ayam`, `tanggal_ayam_masuk`, `kondisi_ayam`, `jumlah_ayam_sakit`, `gejala_sakit`, `jam_pakan`, `jam_ganti_minum`, `jam_ganti_vitamin`, `jumlah_pakan`, `latitude`, `longitude`, `file`, `slug`, `id_user`) VALUES
(11, '2021-03-27 19:05:29', 'asdasd', 'asd', '1234', '3213', '212', '12', '2020-02-02', 's', 'asd', 'as', '03:00:00', '03:00:00', '03:00:00', '12', '321', '123', 'https://www.ayamqu.web.id/Test/CekHarianFile/1613198088912.jpg', '', 46),
(12, '2021-03-27 19:05:29', 'asdasd', 'asd', '1234', '3213', '212', '12', '2020-02-02', 's', 'asd', 'as', '03:00:00', '03:00:00', '03:00:00', '12', '321', '123', 'https://www.ayamqu.web.id/Test/CekHarianFile/16137134163718.jpg', '', 46),
(13, '2021-03-27 19:05:29', 'asdasd', 'asd', '1234', '3213', '212', '12', '2020-02-02', 's', 'asd', 'as', '03:00:00', '03:00:00', '03:00:00', '12', '321', '123', 'https://www.ayamqu.web.id/Test/CekHarianFile/16137134163718.jpg', '', 46),
(14, '2021-03-27 19:05:29', 'asdasd', 'asd', '1234', '3213', '212', '12', '2020-02-02', 's', 'asd', 'as', '03:00:00', '03:00:00', '03:00:00', '12', '321', '123', 'https://www.ayamqu.web.id/Test/CekHarianFile/16137134163718.jpg', '', 46),
(15, '2021-03-27 19:05:29', 'asdasd', 'asd', '1234', '3213', '212', '12', '2020-02-02', 's', 'asd', 'as', '03:00:00', '03:00:00', '03:00:00', '12', '321', '123', 'https://www.ayamqu.web.id/Test/CekHarianFile/16137134163718.jpg', '', 46),
(16, '2021-03-28 13:50:40', 'Nurhilal Hamdi', 'asdassa', 'KDG1231', 'BLK31231', '123 Ekor', '13 Hari', '2020-02-02', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '00:00:00', '00:00:00', '00:00:00', '123 Kilogram', '-4.0128343', '119.6267022', 'https://www.ayamqu.web.id/Test/CekHarianFile/1616910629051.jpg', '', 46),
(17, '2021-03-28 22:42:43', 'Nurhilal Hamdi', 'asdas', 'KDG1231', 'BLK31231', '1231 Ekor', '4 Hari', '2020-02-01', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '00:00:00', '00:00:00', '00:00:00', '120 Kilogram', '-4.0128328', '119.6266987', 'https://www.ayamqu.web.id/Test/CekHarianFile/1616942552732.jpg', '', 46),
(18, '2021-03-30 10:47:34', 'nurhilal hamdi', 'Jl. Merpati', 'KDG0812', 'BLK0001', '200 Ekor', '11 Hari', '2020-02-02', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '01:00:00', '03:00:00', '04:00:00', '12 Kilogram', '-4.012824', '119.6267137', 'https://www.ayamqu.web.id/Test/CekHarianFile/1617072434024.jpg', '', 58),
(19, '2021-03-30 11:10:19', 'Andre', 'Jl. Merpati', 'KDG0001', 'BLK0002', '200 Ekor', '1 Hari', '2021-02-02', 'Sakit', '12 Ekor', 'berak kapur', '01:00:00', '02:00:00', '03:00:00', '12 Kilogram', '-4.0128284', '119.6267013', 'https://www.ayamqu.web.id/Test/CekHarianFile/1617073779623.jpg', '', 59),
(20, '2021-05-31 14:15:16', 'Nurhilal Hamdi', 'jl bunga', 'KDG000123', 'BLK999123', '600 Ekor', '13 Hari', '2021-02-02', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '01:00:00', '02:00:00', '03:00:00', '20 Kilogram', '-4.0128328', '119.6266744', 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/1622441704677.jpg', '', 46),
(21, '2021-05-31 15:23:10', 'Nurhilal Hamdi', 'Jl. Pejuang', 'KDG0008', 'BLK1008', '1000 Ekor', '1 Hari', '0000-00-00', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '01:00:00', '02:00:00', '02:00:00', '20 Kilogram', '-4.0128332', '119.6266761', 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/1622445775938.jpg', '', 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ceksampel`
--

CREATE TABLE `tabel_ceksampel` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_waktu_sampel` datetime NOT NULL,
  `kode_kandang` varchar(150) NOT NULL,
  `kode_blok` varchar(150) NOT NULL,
  `jumlah_ayam` varchar(150) NOT NULL,
  `umur_ayam` varchar(150) NOT NULL,
  `kondisi_ayam` varchar(150) NOT NULL,
  `bobot_rata_rata` varchar(150) NOT NULL,
  `jenis_ayam_sampel` varchar(150) NOT NULL,
  `bobot_ayam_sampel` varchar(150) NOT NULL,
  `jumlah_ayam_sampel` varchar(150) NOT NULL,
  `latitude` varchar(150) NOT NULL,
  `longitude` varchar(150) NOT NULL,
  `file` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kandang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ceksampel`
--

INSERT INTO `tabel_ceksampel` (`id`, `nama`, `tanggal_waktu_sampel`, `kode_kandang`, `kode_blok`, `jumlah_ayam`, `umur_ayam`, `kondisi_ayam`, `bobot_rata_rata`, `jenis_ayam_sampel`, `bobot_ayam_sampel`, `jumlah_ayam_sampel`, `latitude`, `longitude`, `file`, `id_user`, `id_kandang`) VALUES
(1, 'Nurhilal Hamdi', '2021-05-31 14:17:23', 'KDG00123', 'BLK00551', '200 Ekor', '4 Hari', 'sehat', '1.1666666 kg', 'Ayam Kecil', '35.0', '3', '-4.0128327', '119.6266745', 'http://localhost/ayam/www.ayamqu.web.id/Test/CekSampelFile/1622441815651.jpg', 46, 43),
(2, 'Nurhilal Hamdi', '2021-05-31 15:25:16', 'KDG0008', 'BLK1008', '1000 Ekor', '1 Hari', 'sehat', '1.12 kg', 'Ayam Kecil', '56.0', '5', '-4.0128303', '119.6266801', 'http://localhost/ayam/www.ayamqu.web.id/Test/CekSampelFile/1622445900049.jpg', 46, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_chickin`
--

CREATE TABLE `tabel_chickin` (
  `id_chickin` int(11) NOT NULL,
  `type_produk` varchar(255) CHARACTER SET latin1 NOT NULL,
  `populasi_masuk` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kondisi_chick_in` varchar(255) CHARACTER SET latin1 NOT NULL,
  `harga_satuan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `tanggal_chickin` date NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tabel_chickin`
--

INSERT INTO `tabel_chickin` (`id_chickin`, `type_produk`, `populasi_masuk`, `kondisi_chick_in`, `harga_satuan`, `jenis_produk`, `tanggal_chickin`, `id_kandang`, `periode`, `created_at`) VALUES
(3, 'DOC Sinta', '600', 'sehat', '12000', 'DOC Broiler Polos', '2021-04-28', 43, '1', '2021-04-27 14:21:51'),
(4, 'DOC Japfa', '1000s', 'sehat', '12000', 'DOC Broiler Super', '2021-05-31', 45, '1', '2021-05-31 15:16:30'),
(5, 'DOC Patriot', '1300', 'Sehat', '12000', 'DOC Broiler Super', '2021-06-03', 46, '2', '2021-06-03 13:04:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detil_kandang`
--

CREATE TABLE `tabel_detil_kandang` (
  `id_detil` int(11) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `id_chickin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_inventory`
--

CREATE TABLE `tabel_inventory` (
  `id` int(11) NOT NULL,
  `nomor_request` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_request` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `id_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_itemlain`
--

CREATE TABLE `tabel_itemlain` (
  `id_itemlain` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_itemlain` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_itemlain`
--

INSERT INTO `tabel_itemlain` (`id_itemlain`, `id_barang`, `stok_itemlain`, `id_kandang`, `created_at`) VALUES
(1, 24, '8', 43, '2021-05-22 17:00:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kandang`
--

CREATE TABLE `tabel_kandang` (
  `id_kandang` int(11) NOT NULL,
  `alamat_kandang` varchar(150) NOT NULL,
  `kode_Kandang` varchar(150) NOT NULL,
  `kode_blok` varchar(150) NOT NULL,
  `jenis_kandang` varchar(150) NOT NULL,
  `status_kandang` varchar(255) NOT NULL,
  `syarat_kesiapan_1` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_2` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_3` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_4` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_5` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_6` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_7` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_8` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_9` varchar(150) DEFAULT NULL,
  `syarat_kesiapan_10` varchar(150) DEFAULT NULL,
  `nilai_progress` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kandang`
--

INSERT INTO `tabel_kandang` (`id_kandang`, `alamat_kandang`, `kode_Kandang`, `kode_blok`, `jenis_kandang`, `status_kandang`, `syarat_kesiapan_1`, `syarat_kesiapan_2`, `syarat_kesiapan_3`, `syarat_kesiapan_4`, `syarat_kesiapan_5`, `syarat_kesiapan_6`, `syarat_kesiapan_7`, `syarat_kesiapan_8`, `syarat_kesiapan_9`, `syarat_kesiapan_10`, `nilai_progress`, `id_user`) VALUES
(43, 'Jl. Bunga', '00123', '00551', 'kandang Terbuka (Open House)', 'Aktif', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 84, 46),
(44, 'Jalan Ahmad Yani No.9, KOTA PAREPARE - UJUNG, SULAWESI SELATAN', '000442', '000535', 'Kandang Terbuka (Open House)', 'Tidak Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 46),
(45, 'Jl. Pejuang No.15, KOTA PAREPARE - UJUNG, SULAWESI SELATAN', '0008', '1008', 'Kandang Terbuka (Open House)', 'Aktif', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 100, 46),
(46, 'Jl. Urip, KOTA BANDUNG - CICAHEM, JAWA BARAT', '000292', '000223', 'Kandang Terbuka (Open House)', 'Tidak Aktif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Pakan'),
(2, 'Obat'),
(3, 'Vitamin'),
(4, 'Vaksin'),
(5, 'Peralatan Kandang Baru'),
(6, 'Item Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_medis`
--

CREATE TABLE `tabel_medis` (
  `id_medis` int(11) NOT NULL,
  `nama_medis` varchar(255) NOT NULL,
  `deskripsi_medis` varchar(1000) NOT NULL,
  `gejala_medis` varchar(1000) NOT NULL,
  `file_icon_medis` varchar(255) NOT NULL,
  `image_medis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tabel_medis`
--

INSERT INTO `tabel_medis` (`id_medis`, `nama_medis`, `deskripsi_medis`, `gejala_medis`, `file_icon_medis`, `image_medis`) VALUES
(1, 'Cacar', 'Penyakit cacar pada ayam atau Fowl Pox yang sering juga disebut sorehead, avian dhypteria atau adalah penyakit cacar yang menyerang unggas terutama ayam. Pada bentuk kering angka kesakitan dan angka kematian rendah (1-2)%, tetapi pada bentuk basah angka kematian bisa mencapai 5%. Cacar ayam (Fowl Pox) merupakan penyakit infeksi yang penularanya sangat lambat. Pada ayam petelur umumnya menginfeksi pada saat mulai bertelur. Pada ayam pedaging menyebabkan pertumbuhan terhambat.', 'Terdapat 2 bentuk Fowl Pox, bentuk kering dan bentuk basah. Mula – mula terbentuk papula kecil berwarna kelabu di daerah kulit yang tidak berbulu, misalnya kepala dan kaki. Beberapa radag bergabung dan terbentuklah radang yang besar sehinggga akhirnya akan membentuk keropeng besar. Bila keropeng dilepas maka akan terjadi pendarahan dari lapisan di bawahnya. Proses cacar di daerah mata sering terjadi. Pada cacar basah akan terlihat bercak berwarna kuning pada selaput lendir mata dan larynx. Dari bercak di atas akan terbentuk membran semu yang sering kali menyebabkan penyumbatan saluran hawa yang mengakibatkan penderita mati tercekik.', 'https://www.ayamqu.web.id/Test/Medis/cacar.png', 'https://www.ayamqu.web.id/Test/Medis/cacarayam.jpeg'),
(2, 'Koli', 'Kolibasilosis adalah penyakit infeksius pada unggas yang disebabkan oleh bakteri Escherichia coli patogen sebagai agen primer ataupun sekunder. Infeksi E. coli atau koliseptikemia ini dapat terjadi pada ayam pedaging dan petelur dari semua kelompok umur, serta unggas lainnya seperti kalkun dan itik . Tanda klinis kolibasilosis tidak spesifik dan dipengaruhi oleh umur ayam, lama infeksi, organ yang terserang dan adanya penyakit lain bersamanya. Pada ayam pedaging umur 4−8 minggu dan ayam petelur umur ±20 minggu dapat terjadi septikemia akut dan menimbulkan kematian, yang didahului dengan hilangnya nafsu makan, malas bergerak/inaktif dan mengantuk.', '- Kelesuan\n- Nafsu makan menurun\n- munculnya gangguan pernafasan berupa ngorok pada malam hari disertai pengeluaran eksudat dari hidung', 'https://www.ayamqu.web.id/Test/Medis/koli.png', 'https://www.ayamqu.web.id/Test/Medis/Kolibasilosis.jpg'),
(3, 'Kolera', 'Kolera (Berak Hijau) merupakan salah satu penyakit unggas yang bisa menyerang semua jenis unggas pada semua usia, bahkan untuk jenis ayam, angka morbiditas (potensi terserang) penyakit kolera ini bisa diatas 50% pada cuaca ekstrim. Potensi yang dihasilkan dari serangan kolera bisa jadi sangat merugikan peternak karena unggas yang terserang kolera bisa mati jika tidak segera diobati. Nama lain dari kolera adalah berak hijau. Penyakit menular ini menular dengan cepat baik melalui kontak langsung antara unggas maupun melalui air, udara, tanah, serta peralatan ternak yang sudah terkontaminasi', '- Menurunnya nafsu makan\n- Ayam tampak lesu dan mengantuk\n- Demam dengan ditandai suhu tubuh ayam meningkat \n- Terdengar suara ngorok kecil dari ayam karena adanya lendir di saluran pernafasan\n- Bulu rontok\n- Kotoran menjadi cair dengan warna kehijauan disertai cairan semacam lendir pada kotoran tersebut\n- Terjadi infeksi dikaki dan beberapa bagian tubuh tampak ruam\n- Unggas lumpuh dan sulit berdiri akibat infeksi di sendi\n- Tubuh ayam bergetar', 'https://www.ayamqu.web.id/Test/Medis/kolera.png', 'https://www.ayamqu.web.id/Test/Medis/kolera.jpg'),
(4, 'Snot', 'Snot (Coryza) biasanya terjadi saat pergantian musim atau pancaroba dan juga karena udara dalam kandang terlalu dingin/lembab. Penyakit ini disebabkan karena ayam terkena bakteri haemophilus galloinarum yang dapat menyerang semua usia ayam.', '- Ayam mengorok dan sukar bernafas\n- Keluar lendir dari hidung\n- Ayam akan bersin dan menggelengkan kepala untuk mengeluarkan lendir\n- Ayam terlihat mengantuk\n- Sayapnya terlihat menggantung\n- Nafsu makan menurun dan pertumbuhan lambat\n- Mengeluarkan cairan mata', 'https://www.ayamqu.web.id/Test/Medis/snot.png', 'https://www.ayamqu.web.id/Test/Medis/snot.jpg'),
(5, 'Gumboro', 'Gumboro (infectious Bursal Desease/IBD) adalah penyakit yang menyerang bursa fabricii (kelenjar bulat terletak diata kloaka). Penyebaran secara langsung terjadi melalui tinja yang mengandung virus. Sementara itu, penyebaran secara tidak langsung terjadi melalui makanan, minuman dan peralatan kandang yang tercemar', '- Tubuh ayam kering kekurangan cairan\n- Bulu bulu mengkerut terutam di area dubur ayam\n- Terjadi iritasi pada bagian dubur\n- Ayam duduk dengan membungkuk\n- Ayam lesu dan mengantuk\n- Mencret berlendir keputih-putihan dan bau\n- Ayam yang mati terkena gumboro bangkainya cepat membusuk', 'https://www.ayamqu.web.id/Test/Medis/gumboro.png', 'https://www.ayamqu.web.id/Test/Medis/gumboro.jpg'),
(6, 'Berak Kapur', 'Berak kapur (Pullorum/Berak putih/bacilary white) adalah penyakit yang mengakibatkan angka kematian tinggi pada ayam yang berumur 1-10 hari. Penyakit berak kapur ini disebabkan bakteri salmonella pullorum dan bakteri gram negatif yang dapat bertahan hidup lebih dari 1 tahun dalam tanah. Penyakit ini akan menular melalui kontak langsung unggas atau dari peralatan seperti kandang, litter dll yang sudah terkontaminasi', '- Feses berwarna putih seperti kapur\n- Feses menempel di bagian dubur berwarna keputihan\n- Kloaka yang terkena kotoran akan lengket dan kering\n- Jengger berwarna keunguan\n- Mata akan tertutup dan nafsu makan berkurang\n- Kondisi ayam akan lemah dan memiliki gerakan lambat\n- Kedua sayap menggantung dan terlihat kusam\n- Lumpuh karena atritis', 'https://www.ayamqu.web.id/Test/Medis/berakkapur.png', 'https://www.ayamqu.web.id/Test/Medis/berakkapur.jpg'),
(7, 'Berak Darah', 'Berak darah (koksidiosis) merupakan penyakit usus yang disebabkan oleh protozoa parasit Genus Eimeria. Eimeria berkembang biak di saluran  pencernaan dan menyebabkan kerusakan jaringan. Koksidiosis pada ayam berlokasi pada dua tempat yaitu di sekum dan di usus.', '- Ekstreta berdarah dan mencret\n- Nafsu makan kurang\n- Sayap terkulasi\n- Menggigil kedinginan\n- Bulu kusam\n- Fases mengandung darah dan merah', 'https://www.ayamqu.web.id/Test/Medis/berakdarah.png', 'https://www.ayamqu.web.id/Test/Medis/berakdarah.jpeg'),
(8, 'Flu Burung', 'Penyakit flu burung atau Avian influensa (AI) merupakan penyakit yang disebabkan oleh virus influensa Tipe A subtipe H5N1 dari family Orthomyxoviridae yang menyerang burung/unggas/ayam. Penyakit ini bersifat zonosis yang selain dapat menular dari unggas ke unggas lain dapat pula menular dari unggas ke manusia. Ayam yang terinfeksi mengeluarkan virus dari saluran pernapasan konjungtiva dan feses. Selain itu penularan juga dapat terjadi secara tidak langsung, misalnya melalui udara yang tercemar oleh material/debu yang mengandung virus influenza.', '- Terjadi pembengkakan di kepala dan gelambir pada unggas berwarna kebiru-biruan\n- Kurang nafsu makan dan depresi\n- Ayam mengalami diare\n- Ayam mendengkur dan kesulitan bernapas\n- Keluar air liur pada mulut ayam\n- muncul bintik-bintik pada ayam dan terutama di bagian dada dan kaki', 'https://www.ayamqu.web.id/Test/Medis/fluburung.png', 'https://www.ayamqu.web.id/Test/Medis/fluburung.jpg'),
(9, 'Heat Stress', 'Heat stress atau stress panas merupakan suatu keadaan dimana ternak mengalami stress akibat panas yang dihasilkan tubuh melebihi kapasitas kemampuan ternak untuk membuangnya ke lingkungan. Heat stress sering terjadi pada ternak khusunya ayam saat temperatur lingkungan lebih tinggi dari temperatur nyaman ayam (180-230 C). ayam merupakan jenis ternak yang tidak memiliki kelenjar keringat, sehingga panas yang dihasilkan tubuh akibat proses metabolisme tidak bisa dikeluarkan dengan optimal saat suhu lingkungan tinggi.', '- Berkurangnya aktivitas ayam\n- Panting\n- Menghindari kontak dengan ayam lain\n- Ayam cenderung diam\n- Nafsu makan menurun\n- Ayam banyak mengkonsumsi air', 'https://www.ayamqu.web.id/Test/Medis/heatstress.png', 'https://www.ayamqu.web.id/Test/Medis/heatstress.jpg'),
(10, 'Marek', 'Penyakit ini biasanya terjadi panda ayam yang belum dewasa atau berumur antara 2 sampai 5 bulan dengan angka kematian yang mencapai 80%. Penyakit Marek merupakan penyakit unggas yang menyerang sistem limfoid dan sistem saraf. Secara komersial, penyakit Marek merupakan penyakit penting. Karena, sifatnya yang proliferatif dan sangat menular. Dampak lain dari adanya penyakit ini adalah penurunan kualitas daging terutama pada peternakan ayam pedaging, serta  mengakibatkan terjadinya penurunan kualitas produksi, penurunan kualitas produksi tersebut terjadi karena penyakit marek menyebabkan kelainan pada kulit, sehingga kualitas daging ayam menjadi menurun.', '- Terdapat tumor pada saraf dan organ pencernaan\n- Terjadi pelunturan pada iris\n- Kelumpuhan, dehidrasi dan kebutaan\n- Pembesaran pada bagian saraf peripheral\n- Pembesaran pada folikel dengan warna kemerahan', 'https://www.ayamqu.web.id/Test/Medis/marek.png', 'https://www.ayamqu.web.id/Test/Medis/marek.jpg'),
(11, 'Malaria', 'Leucocytozoonosis (Malaria-like-Disease) merupakan penyakit protozoa yang menyerang darah dan sel jaringan organ dari ternak unggas. Leucocytozoonosis disebabkan oleh parasit protozoa dari genus Leucocytozoon sp. Penularan terjadi secara tidak langsung, memerlukan induk semang antara yaitu serangga dari genus Culiccides terutama C.arakawai', '- Ayam diare dan muntah darah\n- Leleran dari mulut ayam\n- Tinja berwarna kuning dan hijau\n- Ayam mengalami kelumpuhan\n- Ayam depresi dan anemia\n- Nafsu makan menurun\n- Produksi telur serta daya tetas menurun', 'https://www.ayamqu.web.id/Test/Medis/malaria.png', 'https://www.ayamqu.web.id/Test/Medis/malaria.jpg'),
(12, 'Kerdil', 'Penyakit kerdil ayam adalah gejala gangguan pertumbuhan pada ternak ayam dimana ayam mengalami kekerdilan dengan bentuk fisik yang tidak sempurna. Kekerdilan pada ternak ayam, terutama ayam broiler (ayam pedaging) merupakan salah satu kendala utama dalam usaha budidaya ternak unggas. Gangguan pertumbuhan pada ternak ayam (kekerdilan) ini memiliki banyak nama dan sebutan, yaitu Infectious Stanting Syndrome (ISS), Helicopter Disease, Pale Bird Syndrome dan Malabsorbtion Syndrome.  Penyebab utama penyakit kerdil ayam adalah infeksi virus Reovirus. Dan tidak tertutup kemungkinan virus lain seperti Rotavirus dan Parvovirus juga turut andil sebagai penyebab kekerdilan pada ternak ayam.', '- Pertumbuhan bulu yang abnormal pada bulu sayap primer\n- Feses berisi ransum yang tidak tercerna\n- Feses tertutup eksudat dan berwarna coklat kekuningan\n- Pada anak ayam berumur 2-4 hari terjadi lesu, malas bergerak dan sayap menggantung\n- Diare pada anak ayam berumur 4-7 hari\n- Bulu ayam tampak berdir dan tidak beraturan', 'https://www.ayamqu.web.id/Test/Medis/kerdil.png', 'https://www.ayamqu.web.id/Test/Medis/kerdil.jpg'),
(13, 'Busung', 'Asites pada ayam merupakan timbunan cairan limfe dalam ruang peritoneum (rongga dalam perut) yang menimbulkan abdomen (perut) ayam membesar. Asites menjadi kompleks akibat berbagai macam faktor, sehingga asites bukanlah suatu penyakit, melainkan gejala yang timbul akibat faktor pendukungnya. Faktor-faktor tersebut meliputi genetik, lingkungan, nutrisi dan manajemen. Asites sendiri memiliki sebutan lain, seperti pulmonary arterial hypertension (PAH) syndrome atau pulmonary hypertension syndrome (PHS).', '- Ayam kurang lincah dan malas bergerak\n- Perut ayam membesar\n- kepala menjadi kebiruan\n- Ayam menjadi gelisah\n- Ayam sulit bernafas\n- Bulu ayam kasar dan jengger mengerut\n- Kulit pada abdomen kemerahan\n- Dapa terjadi kematian mendadak', 'https://www.ayamqu.web.id/Test/Medis/busung.png', 'https://www.ayamqu.web.id/Test/Medis/busung.jpg'),
(14, 'Tetelo', 'Penyakit Newcastle (bahasa Inggris: Newcastle Disease, sering disingkat ND) adalah penyakit pada unggas yang fatal (mematikan). Di Indonesia penyakit ini juga populer sebagai tetelo, diambil dari nama dalam bahasa Jawa, thèthèlo Penyebabnya adalah serangan virus NDV, suatu virus RNA berkas tunggal dengan sekuens antisens negatif. Serangan pada ayam adalah yang paling dikenal, dengan gejala klinis seperti terkena pilek (hidung berair dan tersumbat), mengorok, sayap turun lemas (terkulai), kaki terseret, sampai kepala terkulai atau melipat. Pada unggas muda, serangan ini dapat segera berakhir dengan kematian, sedangkan pada unggas dewasa, kematian biasanya terjadi dua sampai tiga hari setelah gejala pertama kali terlihat.', '- Nafsu makan pada ayam menurun\n- Gangguan pernafasan pada ayam\n- Ayam terlihat lesu dan lemah\n- Excessive mocus pada bagian trakea\n- Produktivitas telur menurun\n- Feses berwarna hijau dan encer\n- Kornea mata terlihat keruh\n- Jengger berwarna biru dan sayap menurun\n- Ayam kejang-kejang dan leher terpuntir kebawah\n- Ayam mengalami bersin dan batuk', 'https://www.ayamqu.web.id/Test/Medis/tetelo.png', 'https://www.ayamqu.web.id/Test/Medis/tetelo.jpg'),
(15, 'Cacingan', 'Penyakit cacingan adalah suatu infeksi yang disebabkan oleh parasit atau cacing yang menggunakan usus ayam tanpa batasan usia. Adapun ayam yang terinfeksi cacing akan mengalami banyak sekali kondisi fisik yang tidak normal sehingga menghambat pertumbuhan dan lebih parah kematian.', '- Nafsu makan berkurang\n- Muka ayam terlihat pucat\n- Mata ayam lebih sering berbusa dan terlihat lesu\n- Bobot ayam berkurang\n- Feses yang dikeluarkan akan terdapat beberapa cacing.', 'https://www.ayamqu.web.id/Test/Medis/cacingan.png', 'https://www.ayamqu.web.id/Test/Medis/cacingan.jpg'),
(16, 'Enteritis (NE)', 'Penyakit Necrotic Enteritis (NE) disebabkan oleh agen penyakit yang secara normal hidup di saluran pencernaan ayam. Bakteri Clostridium perfringens merupakan bakteri gram positif yang hidup di caecum / usus buntu ayam dalam kondisi anaerob. Jika terjadi perubahan lingkungan dalam saluran pencernaan ayam yang menyebabkan terjadinya kondisi anaerob, bakteri Clostridium perfringens akan memperbanyak diri dan bergerak menuju ke saluran pencernaan atas. Selama perjalanan di saluran pencernaan tersebut, bakteri akan mengeluarkan toksin yang akan menyebabkan kerusakan mukosa usus, menghambat absorpsi nutrisi, kekurangan darah, toxemia dan kematian.', '- Depresi\n- Hilang nafsu makan\n- Diare\n- Feces coklat kehitaman, kadangkala dijumpai darah dalam feces\n- Peningkatan konsumsi air minum\n- Litter lembab\n- Pada nekropsi akan ditemui lesi yang secara umum terdapat di jejunum dan ileum\n- Peregangan usus sehingga tampak membesar dikarenakan gas yang dihasilkan oleh bakteri\n- Pembengkakan hati dengan foki nekrotik', 'https://www.ayamqu.web.id/Test/Medis/enteritis.png', 'https://www.ayamqu.web.id/Test/Medis/enteritis.jpg'),
(17, 'Hepatitis', 'Inclusion Body Hepatitis (IBH) merupakan penyakit yang menyerang ayam broiler berusia tiga hingga tujuh minggu. Penyakit ini menyebabkan gangguan pertumbuhan ayam, hepatomegaly, hepar berwarna pucat kekuningan dan rapuh, serta tampak benda inklusi intranuklear pada hepatosit. Inclusion Body Hepatitis disebabkan oleh infeksi virus Adenovirus Grup 1 spesies Fowl Adenovirus (FAdV).', '- Jenggel, pial, dan kulit ayam terlihat pucat\n- Otot dada dan kaki terlihat berdarah\n- Ayam tampak depresi dan lemah\n- Ayam mengalami gangguan pernapasan\n- Hati membengkak dan berwarna kuning kecoklatan, terdapat bercak pendarahan, ptechiae dan echymotic dibawah membran dan dalam parenchyma konsistennya lembek\n- Ginjal tampak pucat dan terjadi pendarahan\n- Limpa dan bursa fabrisius mengecil \n- Usus dan alat visceral juga terlihat kemerahan\n- Adanya aplasia dan anemia', 'https://www.ayamqu.web.id/Test/Medis/hepatitis.png', 'https://www.ayamqu.web.id/Test/Medis/hepatitis.jpg'),
(18, 'Kandidiasis', 'Kandidiasis merupakan penyakit jamur menular pada saluran pencernaan unggas yang ditandai dengan pertumbuhan yang terhambat atau kerdil. Kandidiasis disebabkan oleh Candida albican. Jamur ini mempunyai ukuran 5,5x3,5mm. Jamur tumbuh baik pada medium Saboroud agar menghasilkan koloni krem, dan putih setelah diinkubasi selama 24-48 jam pada suhu 37° C. Organisme menghasilkan asam dan gas pada dextrosa, levulosa, dan mannosa serta menghasilkan sedikit asam pada galaktosa dan sukrosa.', '- Penebalan pada dinding tembolok atau tembolok menggantung\n- Gangguan pada saluran pencernaan sehingga ayam menjadi kurus\n- Pembesaran dan luka pada kelenjar mukosa', 'https://www.ayamqu.web.id/Test/Medis/kandidiasis.png', 'https://www.ayamqu.web.id/Test/Medis/kandidiasis.jpeg'),
(19, 'Mikotoksikosis', 'Mikotoksikosis merupakan penyakit pada unggas yang akan muncul jika unggas tersebut mengkonsumsi pakan atau bahan pakan yang tercemar mikotoksin. Cemaran mikotoksin dalam pakan selain membahayakan kesehatan ternak juga dapat menimbulkan residu, misalnya aflatoksin dan metabolitnya dapat terdeposit pada daging, susu dan telur. Pada unggas, konsumsi pakan tercemar menyebabkan kerusakan hati, gangguan sistem kekebalan tubuh, produktivitas yang rendah hingga kematian yang tinggi dalam sebuah flok peternakan.', '- Sianosis/ kebiruan pada kulit di daerah kepala dan jengger berlanjut kematian.\n- Bernafas melalui mulut (panting) dengan frekuensi yang cukup sering, tapi tidak terdengar seperti ngorok\n- Penyerapan pakan menjadi rendah sehingga pencapaian pertumbuhan bobot badan pun tidak maksimal\n- Anak ayam yang baru chick in 3-5 hari di dalam kandang mengalami gejala kesulitan bernafas (dyspnea)', 'https://www.ayamqu.web.id/Test/Medis/mikotoksikosis.png', 'https://www.ayamqu.web.id/Test/Medis/mikotoksikosis.jpg'),
(20, 'ILT', 'Infeksi laryngotracheitis merupakan penyakit kontagius pada saluran pernapasan disebabkan oleh  Herpes virus, yang mampu hidup 8-10 hari pada leleran, lebih dari 70 hari di dalam karkas, kemudian dapat hidup lebih dari 80 hari pada eksudat(trakea atau saluran pernafasan) dalam kondisi alami. Penyakit ini berlangsung selama 2-6 minggu dalam flok, dan lebih lama dibandingkan penyakit respirasi vital lainnya.', '- Ayam mengalami sesak napas dan pneumonia\n- Penurunan produksi telur dan daging\n- Mortalitas mencapai 50%\n- Menjulurkan leher karena kesulitan bernafas\n- Adanya inflamasi yang mengelilingi membran mata', 'https://www.ayamqu.web.id/Test/Medis/ilt.png', 'https://www.ayamqu.web.id/Test/Medis/ilt.jpg'),
(21, 'CRD', 'Chronic Respiratory Desease (CRD) adalah penyakit menular menahun pada ayam yang disebabkan oleh Mycoplasma gallisepticum yang ditandai dengan sekresi hidung katar, kebengkakan muka, batuk dan terdengar suara ketika bernafas', '- Keluar cairan dari hidung\n- Susah bernafas\n- Ngorok dan bersin\n- Tidak aktif, diam seperti mati\n- Nafsu makan menurun\n- Pertumbuhan terhambat\n- Lemah dan kurus', 'https://www.ayamqu.web.id/Test/Medis/crd.png', 'https://www.ayamqu.web.id/Test/Medis/crd1.png'),
(22, 'Omphalitis', 'Omphalitis atau infeksi kantong kuning telur pada anak ayam merupakan salah satu bentuk infeksi lokal dari penyakit Collibacilosis. Jika pada kondisi ini dilakukan pemeriksaan bedah ayam (nekropsi), dapat ditemukan perubahan pada organ dalamnya seperti peradangan pada pusar, serta kuning telur tidak terserap sempurna yang akan menyebabkan material kuning telur menjadi keras. Dengan melihat beberapa perubahan spesifik ini, bisa dipastikan telah terjadi kasus Collibacilosis bentuk Omphalitis', '- Anak ayam terlihat lemah, mengantuk, perut kembung, dan tidak nafsu makan, bergerombol didekat pemanas\n- Abdomen terasa lembut, dan kantung kuning telur menggelembung\n- Bau busuk dari kuning telur\n- Sistem kekebalan ayam rendah\n- Diare\n- Kloaka berpasta ', 'https://www.ayamqu.web.id/Test/Medis/omphalitis.png', 'https://www.ayamqu.web.id/Test/Medis/omphalitis.jpg'),
(23, 'AE', 'Avian encephalomyelitis (AE) adalah suatu penyakit menular yang disebabkan oleh virus dan utamanya menyerang ayam-ayam muda. Tanda-tanda yang muncul biasanya ayam berjalan sempoyongan (ataksia), serta kepala dan lehernya gemetaran atau tremor sebagai akibat adanya infeksi di sistem saraf pusat (SSP). Maka dari itu, penyakit ini juga disebut dengan epidemic tremor. Penyakit AE disebabkan oleh Avian Encephalomyelitis Virus (AEV) yang tidak beramplop. Virus AE termasuk dalam genus Hepatovirus dan hanya memiliki satu serotipe. Virus AE juga memiliki 2 patotipe, yaitu strain lapang yang bersifat enterotropic (memperbanyak diri di saluran pencernaan) dan strain embryo-adapted yang bersifat neurotropic (mempengaruhi atau menyerang jaringan saraf). Dari kedua strain tersebut, strain lapang lah yang umum digunakan sebagai bibit (seed) vaksin AE. Selain menyerang ayam, AE juga menyerang kalkun, burung dara, dan puyuh pada umur muda. AE ditemukan menyerang di seluruh dunia dan untuk pertama kali ', '- Ayam terlihat sayu\n- Ataksia atu berjalan sempoyongan\n- Tremor\n- Ayam lumpuh hingga mati\n- Tidak terdapat gangguan saraf tapi 100% anak ayam akan tertular jika telur ditetaskan', 'https://www.ayamqu.web.id/Test/Medis/ae.png', 'https://www.ayamqu.web.id/Test/Medis/ae.jpg'),
(24, 'IB', 'Infectious bronchitis (IB) adalah penyakit yang disebabkan oleh chicken coronavirus. Penyebaran virus tersebut sangat tinggi dan terdapat di seluruh dunia, tidak terkecuali di Indonesia.  Virus ini memperbanyak diri di saluran respirasi, ginjal, dan oviduk pada ayam broiler maupun layer.  Dampak penyakit IB tersebut terhadap performa produksi berupa deplesi yang tinggi, Feed Conversion Ratio (FCR) yang mengalami peningkatan sehingga menghasilkan index performance (IP) yang kurang optimal. Untuk mengatasi permasalahan tersebut, diperlukan vaksin yang mampu melindungi ayam dari kerugian yang disebabkan oleh infeksi IB. Vaksin yang dibutuhkan harus efektif melindungi ayam dari berbagai strain virus IB dilapangan yang artinya perlindungannya harus broad spectrum.', '- Anak ayam berumur < 3 Mingggu : Kesulitan bernafas, batuk bersin dan mata berair\n- Ayam broiler : terlambatnya pertumbuhan bobot\n- Terdapat carian pada trakea, saluran dan sinus hidung\n- Adanya pembengkakan pada ginjal dan berwarna pucat', 'https://www.ayamqu.web.id/Test/Medis/IB.png', 'https://www.ayamqu.web.id/Test/Medis/ib.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_notifikasi_request`
--

CREATE TABLE `tabel_notifikasi_request` (
  `id` int(11) NOT NULL,
  `nomor_request` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_request` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal_request` varchar(255) NOT NULL,
  `id_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_notifikasi_request`
--

INSERT INTO `tabel_notifikasi_request` (`id`, `nomor_request`, `id_barang`, `jumlah_request`, `id_kandang`, `catatan`, `keterangan`, `tanggal_request`, `id_status`, `created_at`) VALUES
(31, 'REQ00001', 17, '2', 43, '', NULL, '2021-05-27 01:00', 1, '2021-05-26 17:00:19'),
(32, 'REQ00001', 21, '2', 43, '', NULL, '2021-05-27 01:00', 1, '2021-05-26 17:00:35'),
(33, 'REQ00001', 17, '22222', 43, '', NULL, '2021-05-27 01:08', 1, '2021-05-26 17:08:11'),
(34, 'REQ00002', 17, 'x', 43, '', NULL, '2021-05-27 01:09', 1, '2021-05-26 17:09:57'),
(35, 'REQ00003', 4, '2', 44, '', NULL, '2021-05-27 01:10', 1, '2021-05-26 17:10:38'),
(36, 'REQ00004', 21, '20', 45, '', 'barang masih diload', '2021-05-31 15:17', 3, '2021-05-31 07:19:15'),
(37, 'REQ00005', 21, '3', 43, '', '', '2021-06-01 16:07', 3, '2021-06-01 08:08:37'),
(38, 'REQ00006', 21, '3', 43, '', '', '2021-06-01 16:28', 3, '2021-06-01 08:29:19'),
(39, 'REQ00007', 2, '10', 43, '', '', '2021-06-01 16:30', 3, '2021-06-01 08:30:31'),
(40, 'REQ00008', 2, '3', 43, '', '', '2021-06-01 21:09', 3, '2021-06-01 13:10:12'),
(41, 'REQ00009', 17, '10', 43, '', '', '2021-06-01 21:12', 3, '2021-06-01 13:13:00'),
(42, 'REQ00010', 22, '20', 43, '', '', '2021-06-03 13:21', 3, '2021-06-03 05:21:52'),
(43, 'REQ00011', 4, '10', 43, '', '', '2021-06-03 21:14', 3, '2021-06-03 13:14:54'),
(44, 'REQ00012', 18, '10', 43, '', '', '2021-06-03 21:14', 3, '2021-06-03 13:15:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_obat`
--

CREATE TABLE `tabel_obat` (
  `id_obat` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_obat` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_obat`
--

INSERT INTO `tabel_obat` (`id_obat`, `id_barang`, `stok_obat`, `id_kandang`, `created_at`) VALUES
(1, 4, '10', 43, '2021-06-03 13:14:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pakan`
--

CREATE TABLE `tabel_pakan` (
  `id_pakan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_pakan` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tabel_pakan`
--

INSERT INTO `tabel_pakan` (`id_pakan`, `id_barang`, `stok_pakan`, `id_kandang`, `created_at`) VALUES
(6, 21, '3', 43, '2021-06-01 08:29:19'),
(7, 2, '13', 43, '2021-06-01 13:10:11'),
(8, 17, '10', 43, '2021-06-01 13:12:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengecekan_harian`
--

CREATE TABLE `tabel_pengecekan_harian` (
  `id` int(11) NOT NULL,
  `usia_ayam` varchar(255) NOT NULL,
  `ayam_mati` varchar(255) DEFAULT NULL,
  `ayam_sakit` varchar(255) DEFAULT NULL,
  `gejala_sakit` varchar(255) DEFAULT NULL,
  `berat_ayam` varchar(255) NOT NULL,
  `id_pakan` int(11) DEFAULT NULL,
  `jumlah_pakan` varchar(255) NOT NULL,
  `jumlah_pakan_ekor` varchar(255) NOT NULL,
  `jam_pemberian_pakan` time NOT NULL,
  `jam_pemberian_minum` time NOT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `jumlah_obat` varchar(255) NOT NULL,
  `id_vitamin` int(11) DEFAULT NULL,
  `jumlah_vitamin` varchar(255) NOT NULL,
  `jam_pemberian_vitamin` time NOT NULL,
  `id_vaksin` int(11) DEFAULT NULL,
  `jumlah_vaksin` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `id_chickin` int(11) NOT NULL,
  `tanggal_pengecekan` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pengecekan_harian`
--

INSERT INTO `tabel_pengecekan_harian` (`id`, `usia_ayam`, `ayam_mati`, `ayam_sakit`, `gejala_sakit`, `berat_ayam`, `id_pakan`, `jumlah_pakan`, `jumlah_pakan_ekor`, `jam_pemberian_pakan`, `jam_pemberian_minum`, `id_obat`, `jumlah_obat`, `id_vitamin`, `jumlah_vitamin`, `jam_pemberian_vitamin`, `id_vaksin`, `jumlah_vaksin`, `latitude`, `longitude`, `id_kandang`, `id_user`, `file`, `id_chickin`, `tanggal_pengecekan`, `created_at`) VALUES
(2, '1 Hari', '15', '3', 'cacar', '25', 6, '20', '13', '14:00:00', '14:00:00', 1, '2', 1, '3', '15:00:00', 1, '4', -4.0119515, 119.62737, 43, 46, 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/1622726237771.jpg', 3, '2021-06-03 21:17:27', '2021-06-03 13:17:32'),
(3, '2 Hari', '20', '5', 'cacar', '28', 6, '24', '15', '14:00:00', '14:00:00', 1, '5', 1, '10', '15:00:00', 1, '10', -4.0128363, 119.6267077, 43, 46, 'http://localhost/ayam/www.ayamqu.web.id/Test/CekHarianFile/1622726325287.jpg', 3, '2021-06-03 21:19:02', '2021-06-03 13:19:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_peralatan`
--

CREATE TABLE `tabel_peralatan` (
  `id_peralatan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_peralatan` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_produk_masuk`
--

CREATE TABLE `tabel_produk_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `nama_barang_masuk` varchar(255) NOT NULL,
  `deskripsi_barang_masuk` varchar(255) DEFAULT NULL,
  `satuan_barang_masuk` varchar(255) NOT NULL,
  `stok_barang_masuk` varchar(255) NOT NULL,
  `harga_beli_barang_masuk` varchar(255) NOT NULL,
  `harga_modal` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_produk_masuk`
--

INSERT INTO `tabel_produk_masuk` (`id_barang_masuk`, `nama_barang_masuk`, `deskripsi_barang_masuk`, `satuan_barang_masuk`, `stok_barang_masuk`, `harga_beli_barang_masuk`, `harga_modal`, `id_kategori`, `id_satuan`, `created_at`) VALUES
(19, 'Charoen Pokphand SUPER177', 'vitamin untuk meningkatkan imun ayam', '', '20', '1000000', '1200000', 4, 5, '2021-05-07 22:39:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_satuan`
--

CREATE TABLE `tabel_satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_satuan`
--

INSERT INTO `tabel_satuan` (`id_satuan`, `satuan`) VALUES
(1, 'Zak'),
(2, 'Kg'),
(3, 'Pcs'),
(4, 'Lusin'),
(5, 'Dus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_status`
--

INSERT INTO `tabel_status` (`id_status`, `status`) VALUES
(1, 'Request Sedang Diproses'),
(2, 'Request Ditangguhkan'),
(3, 'Request Diterima'),
(4, 'Request Ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_stok`
--

CREATE TABLE `tabel_stok` (
  `id_barang` int(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `modal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_stok`
--

INSERT INTO `tabel_stok` (`id_barang`, `kode`, `nama`, `stok`, `deskripsi`, `id_kategori`, `id_satuan`, `harga`, `modal`, `created_at`) VALUES
(1, 'BR00001', 'Charoen Pokphand Super V17', '1313', 'pakan ayam broiler untuk umur 17 hari keatas', 2, 4, '300000', '450000', '2021-05-22 15:20:53'),
(2, 'BR00002', 'tes', '1147', 'asdas', 1, 2, '3.331', '1.222', '2021-06-01 13:10:12'),
(3, 'BR00003', 'mmmm', '34', 'adas', 2, 3, '19000', '230000', '2021-05-22 15:21:16'),
(4, 'BR00004', 'contoh', '42', 'contoh aja', 2, 1, '100000', '120000', '2021-06-03 13:14:54'),
(17, 'BR00005', 'tes', '-27', 'as', 1, 1, '123122', '12222', '2021-06-01 13:13:07'),
(18, 'BR00006', 'Vitamin 1', '21', 'vitamin 1 ', 3, 5, '260000', '300000', '2021-06-03 13:15:08'),
(20, 'BR00007', 'vitamin 2', '55', 'vitamin 2', 3, 5, '600000', '1000000', '2021-05-22 15:13:09'),
(21, 'BR00008', 'pakan 1', '-22', 'pakan', 1, 1, '10000000', '2000000', '2021-06-01 08:29:19'),
(22, 'BR00009', 'vaksin 1', '32', 'vaksin 1', 4, 5, '330000', '400000', '2021-06-03 05:21:52'),
(23, 'BR00010', 'peralatan 1', '56', 'peralatan 1', 5, 3, '500000', '600000', '2021-05-22 17:01:41'),
(24, 'BR00011', 'item lain 1', '47', 'item lain 1', 6, 3, '600000', '700000', '2021-05-22 17:00:50'),
(25, 'BR00012', 'Vaksin Baru', '50', 'Vaksin Untuk ayam 1 hari', 4, 5, '200000', '300000', '2021-05-31 07:29:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telephone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama`, `username`, `alamat`, `email`, `no_telephone`, `password`, `status`) VALUES
(46, 'Nurhilal Hamdi', 'hilalhmdi__', 'Jl. Jaya', 'hamdihilal443@gmail.com', '081231231123', '17304026ec041b63447355f3f4c2fd99', 'Aktif'),
(47, 'bobi', 'bobi__', 'Jl. Merdeka Barat', 'bobi@gmail.com', '081231231231', '98252e41d96206772b51a9ae4147cf51', 'Aktif'),
(48, 'Arman', 'arman__', 'Jl. Merdeka Selatan', 'arman@gmail.com', '081231231232', '8bab041f34b697206580f2e61a406e0b', 'Aktif'),
(49, 'as', '@asdasd', 'jla', 'asdasd@gmail', '081238213889', '51e4a5611b485ee7d5dcd421c092563b', 'Aktif'),
(50, 'surya', 'surya__', 'Jl. Bangau', 'surya@gmail.com', '081238213889', 'd36974be92999534f7f8c83d5fe14216', 'Aktif'),
(51, 'surya', 'surya___', 'Jl.merdeka', 'surya@gmail.com', '081231312312', 'dd4aa81216693c93ac2693dbded0bad8', 'Aktif'),
(52, 'robi', 'robi__', 'jl.merdeka selatan', 'robi123@gmail.com', '081231233212', 'dcc58a6a146f6fe280a2c38df9647071', 'Aktif'),
(55, 'surya', 'surya1234', 'Jl. Bangau', 'surya@gmail.com', '081238213889', 'd36974be92999534f7f8c83d5fe14216', 'Aktif'),
(56, 'Ahmad', 'ahmad_bro', 'Jl. Soekarno', 'ahmad123@gmail.com', '019231312321', '29a0d283060b6e7386f3ff7f21f003d1', 'Aktif'),
(58, 'nurhilal hamdi', 'hilalhmdi123_', 'Jl. Merpati', 'hamdihilal443@gmail.com', '081988888222', '17304026ec041b63447355f3f4c2fd99', 'Aktif'),
(59, 'Andre', 'Andre123_', 'Jl. Merdeka', 'andre@gmail.com', '081111111111', 'df42550cace1acd6c175ac150ac59c9f', 'Aktif'),
(60, 'doni', 'doni__', 'Jl. Bunga', 'doni@gmail.com', '081232131312', '1446bea32d7d3e867dd1a325fed63731', 'Aktif'),
(61, 'hilal', 'hilal123', 'Jl. Cemara', 'hilal123@gmail.com', '123131312312', 'c24b4fa31d8ee6b658cadd70aef231f9', 'Aktif'),
(62, 'hamdi hilal', 'hamdi__', 'Jl. Pejuang', 'hamdihamdi@gmail.com', '082189290919', 'bbc366e3fe73f72c24a077737078ebd2', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_vaksin`
--

CREATE TABLE `tabel_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_vaksin` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_vaksin`
--

INSERT INTO `tabel_vaksin` (`id_vaksin`, `id_barang`, `stok_vaksin`, `id_kandang`, `created_at`) VALUES
(1, 22, '20', 43, '2021-06-03 05:21:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_vitamin`
--

CREATE TABLE `tabel_vitamin` (
  `id_vitamin` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_vitamin` varchar(255) NOT NULL,
  `id_kandang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_vitamin`
--

INSERT INTO `tabel_vitamin` (`id_vitamin`, `id_barang`, `stok_vitamin`, `id_kandang`, `created_at`) VALUES
(1, 18, '10', 43, '2021-06-03 13:15:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_tabel`
--

CREATE TABLE `upload_tabel` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `upload_tabel`
--

INSERT INTO `upload_tabel` (`id`, `nama`, `image`) VALUES
(1, 'hilal', 'unkno22wn.png'),
(2, 'hilal', 'unknown.png'),
(3, 'Nurhilal Hamdi', ''),
(4, 'bebe', '16167428312217.jpg'),
(5, 'ahmad', '1616859801391.jpg'),
(6, 'brobro', '1616859890326.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `tabel_barang_keluar`
--
ALTER TABLE `tabel_barang_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_barang_masuk`
--
ALTER TABLE `tabel_barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_chickin`
--
ALTER TABLE `tabel_chickin`
  ADD PRIMARY KEY (`id_chickin`),
  ADD KEY `id_kandang` (`id_kandang`) USING BTREE;

--
-- Indeks untuk tabel `tabel_detil_kandang`
--
ALTER TABLE `tabel_detil_kandang`
  ADD PRIMARY KEY (`id_detil`),
  ADD UNIQUE KEY `id_kandang` (`id_kandang`),
  ADD UNIQUE KEY `id_chickin` (`id_chickin`);

--
-- Indeks untuk tabel `tabel_inventory`
--
ALTER TABLE `tabel_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `tabel_itemlain`
--
ALTER TABLE `tabel_itemlain`
  ADD PRIMARY KEY (`id_itemlain`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_kandang`
--
ALTER TABLE `tabel_kandang`
  ADD PRIMARY KEY (`id_kandang`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tabel_medis`
--
ALTER TABLE `tabel_medis`
  ADD PRIMARY KEY (`id_medis`);

--
-- Indeks untuk tabel `tabel_notifikasi_request`
--
ALTER TABLE `tabel_notifikasi_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_kandang` (`id_kandang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `tabel_pakan`
--
ALTER TABLE `tabel_pakan`
  ADD PRIMARY KEY (`id_pakan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_pengecekan_harian`
--
ALTER TABLE `tabel_pengecekan_harian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pakan` (`id_pakan`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_vitamin` (`id_vitamin`),
  ADD KEY `id_vaksin` (`id_vaksin`),
  ADD KEY `id_kandang` (`id_kandang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_chickin` (`id_chickin`);

--
-- Indeks untuk tabel `tabel_peralatan`
--
ALTER TABLE `tabel_peralatan`
  ADD PRIMARY KEY (`id_peralatan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_produk_masuk`
--
ALTER TABLE `tabel_produk_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indeks untuk tabel `tabel_satuan`
--
ALTER TABLE `tabel_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tabel_stok`
--
ALTER TABLE `tabel_stok`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tabel_vaksin`
--
ALTER TABLE `tabel_vaksin`
  ADD PRIMARY KEY (`id_vaksin`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `tabel_vitamin`
--
ALTER TABLE `tabel_vitamin`
  ADD PRIMARY KEY (`id_vitamin`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kandang` (`id_kandang`);

--
-- Indeks untuk tabel `upload_tabel`
--
ALTER TABLE `upload_tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT untuk tabel `tabel_barang_keluar`
--
ALTER TABLE `tabel_barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tabel_barang_masuk`
--
ALTER TABLE `tabel_barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_chickin`
--
ALTER TABLE `tabel_chickin`
  MODIFY `id_chickin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_detil_kandang`
--
ALTER TABLE `tabel_detil_kandang`
  MODIFY `id_detil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_inventory`
--
ALTER TABLE `tabel_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_itemlain`
--
ALTER TABLE `tabel_itemlain`
  MODIFY `id_itemlain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_kandang`
--
ALTER TABLE `tabel_kandang`
  MODIFY `id_kandang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_medis`
--
ALTER TABLE `tabel_medis`
  MODIFY `id_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tabel_notifikasi_request`
--
ALTER TABLE `tabel_notifikasi_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_pakan`
--
ALTER TABLE `tabel_pakan`
  MODIFY `id_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_pengecekan_harian`
--
ALTER TABLE `tabel_pengecekan_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_peralatan`
--
ALTER TABLE `tabel_peralatan`
  MODIFY `id_peralatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_produk_masuk`
--
ALTER TABLE `tabel_produk_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tabel_satuan`
--
ALTER TABLE `tabel_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_status`
--
ALTER TABLE `tabel_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_stok`
--
ALTER TABLE `tabel_stok`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tabel_vaksin`
--
ALTER TABLE `tabel_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_vitamin`
--
ALTER TABLE `tabel_vitamin`
  MODIFY `id_vitamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `upload_tabel`
--
ALTER TABLE `upload_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_barang_keluar`
--
ALTER TABLE `tabel_barang_keluar`
  ADD CONSTRAINT `tabel_barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_barang_keluar_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_barang_masuk`
--
ALTER TABLE `tabel_barang_masuk`
  ADD CONSTRAINT `tabel_barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  ADD CONSTRAINT `tabel_cekharian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  ADD CONSTRAINT `tabel_ceksampel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_ceksampel_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_chickin`
--
ALTER TABLE `tabel_chickin`
  ADD CONSTRAINT `idkdg_fk` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_detil_kandang`
--
ALTER TABLE `tabel_detil_kandang`
  ADD CONSTRAINT `fk_idchickin` FOREIGN KEY (`id_chickin`) REFERENCES `tabel_chickin` (`id_chickin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idkandang` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_inventory`
--
ALTER TABLE `tabel_inventory`
  ADD CONSTRAINT `tabel_inventory_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_inventory_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_inventory_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tabel_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_itemlain`
--
ALTER TABLE `tabel_itemlain`
  ADD CONSTRAINT `tabel_itemlain_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_itemlain_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_kandang`
--
ALTER TABLE `tabel_kandang`
  ADD CONSTRAINT `tabel_kandang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_notifikasi_request`
--
ALTER TABLE `tabel_notifikasi_request`
  ADD CONSTRAINT `tabel_notifikasi_request_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_notifikasi_request_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_notifikasi_request_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tabel_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD CONSTRAINT `tabel_obat_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_obat_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_pakan`
--
ALTER TABLE `tabel_pakan`
  ADD CONSTRAINT `tabel_pakan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pakan_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_pengecekan_harian`
--
ALTER TABLE `tabel_pengecekan_harian`
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_1` FOREIGN KEY (`id_pakan`) REFERENCES `tabel_pakan` (`id_pakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tabel_obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_3` FOREIGN KEY (`id_vitamin`) REFERENCES `tabel_vitamin` (`id_vitamin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_4` FOREIGN KEY (`id_vaksin`) REFERENCES `tabel_vaksin` (`id_vaksin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_5` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_6` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_pengecekan_harian_ibfk_7` FOREIGN KEY (`id_chickin`) REFERENCES `tabel_chickin` (`id_chickin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_peralatan`
--
ALTER TABLE `tabel_peralatan`
  ADD CONSTRAINT `tabel_peralatan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_peralatan_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_produk_masuk`
--
ALTER TABLE `tabel_produk_masuk`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_satuan` FOREIGN KEY (`id_satuan`) REFERENCES `tabel_satuan` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_stok`
--
ALTER TABLE `tabel_stok`
  ADD CONSTRAINT `tabel_stok_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_stok_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `tabel_satuan` (`id_satuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_vaksin`
--
ALTER TABLE `tabel_vaksin`
  ADD CONSTRAINT `tabel_vaksin_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_vaksin_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_vitamin`
--
ALTER TABLE `tabel_vitamin`
  ADD CONSTRAINT `tabel_vitamin_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_stok` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_vitamin_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `tabel_kandang` (`id_kandang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
