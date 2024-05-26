-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2024 at 03:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawebshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nieuwsbericht`
--

CREATE TABLE `nieuwsbericht` (
  `id` int NOT NULL,
  `titel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datePosted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(100) NOT NULL,
  `bericht` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `afbeelding` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nieuwsbericht`
--

INSERT INTO `nieuwsbericht` (`id`, `titel`, `datePosted`, `author`, `bericht`, `afbeelding`) VALUES
(29, 'Energieleveranciers kunnen in modelcontract geen terugleverkosten vragen', '2024-05-22 10:53:10', 'Afran Groenewoud & Eva Schouten', 'Energieleveranciers kunnen in de modelcontracten die zij verplicht moeten aanbieden, geen terugleverkosten in rekening brengen bij klanten met zonnepanelen. In deze contractsoort is die mogelijkheid niet opgenomen. Dat bevestigt toezichthouder ACM na vragen van NU.nl.\r\n\r\n\"Waarmee niet gezegd is dat dit de beste contractvorm is voor mensen met zonnepanelen\", benadrukt de woordvoerder van de ACM (Autoriteit Consument & Markt). \"Wij geven daar sowieso geen adviezen over. Iedere situatie is anders.\"\r\n\r\nIn de praktijk loopt het modelcontract, een standaardcontract voor de levering van energie tegen variabele tarieven met een onbepaalde duur, achter op de realiteit. \"De markt is nu heel erg in beweging\", zegt de woordvoerder. Zo zijn er steeds meer energieleveranciers die de terugleverkosten niet meer opnemen in alle tarieven, maar die alleen in rekening brengen bij mensen met zonnepanelen waarbij de kosten gemaakt worden.\r\n\r\n\"Nu staat ook in het hoofdlijnenakkoord dat de salderingsregeling toch komt te vervallen\", zegt de ACM-woordvoerder. \"Het is niet bekend hoe de toekomst eruitziet.\" Als het nodig is, worden de voorwaarden van het modelcontract aangepast. \"In overleg met alle betrokken partijen. maar dat is nu nog niet aan de orde.\"\r\n\r\nEnergieleveranciers mogen twee keer per jaar de tarieven die zij rekenen in de modelcontracten aanpassen. \"Dus daarin kunnen ze wel kosten doorberekenen.\" Hoewel die vlieger niet opgaat wanneer je meer opwekt dan je verbruikt, met dank aan de salderingsregeling.\r\n\r\nOverzichtelijker wordt het er sowieso niet op. \"Leveranciers hebben nu een veelheid aan contractvormen, wat het veel lastiger maakt om te vergelijken.\"', '../../assets/Images/energieleveranciers-kunnen-in-modelcontract-geen-terugleverkosten-vragen.avif'),
(30, 'How to make paper stars!', '2024-05-22 10:54:52', 'Julia Brouwer', 'Step 1. Get paper.\r\nStep 2. Fold paper.\r\nStep 3. Profit and weep with joy because of your newly made paper star.', '../../assets/Images/Schermafbeelding 2023-09-07 112533.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `productID` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(175) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `sale` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'no sale',
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Found',
  `age` int DEFAULT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo2` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'tinyImage2.jpg',
  `photo3` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'tinyImage3.jpg',
  `descriptions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'No description found'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productID`, `title`, `category`, `price`, `sale`, `duration`, `age`, `photo`, `photo2`, `photo3`, `descriptions`) VALUES
(1, 'abce83e6-9ff1-435f-9189-0e93dcf14829', 'Stone Cold Killer - Dusttale Orginal', 'Original', '17.99', 'no sale', '3:08', 1, 'Stone Cold Killer - Dusttale Orginal.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A sharaX original. Created for the purpose of practicing more with using vocals in their music.'),
(2, '57327307-f429-423e-b79a-6026299923f9', 'V.I.P. - Dreamtale Original', 'Original', '17.99', 'no sale', '3:57', 2, 'V.I.P. - Dreamtale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A sharaX original. A try at phonk along with ethnic instrument elements, first aiming for agressive phonk, but settling for more of a \'chill phonky club vibe\'.'),
(3, 'd1167f65-0fe7-4166-a452-4849953271f0', 'Disbelief - Undertale Remix', 'Undertale AU', '14.99', 'no sale', '5:03', 3, 'Disbelief - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A undertale au remix. Gotten from the fan made disbelief track, this is more based off of the 3rd phase of the fan made battle, chosen from the parts they liked best.'),
(4, 'aac18fa2-52da-4ccc-87bb-5c8a541e4dc8', 'Infamous - Dusttale Original', 'Original', '16.99', 'no sale', '3:38', 4, 'Infamous - Dusttale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. Created whilst working on their frenchcore skills, but with SharaX\'s style.'),
(5, '425e6bec-8d30-491b-9e0a-92d3563a6a63', 'Defiance - Underfell Original', 'Original', '13.99', 'no sale', '4:14', 5, 'Defiance - Underfell Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. One with a special drop, with a little bit of Redlight\'s main melody mixed in.'),
(6, 'a2c4dea8-d91f-4fde-8d13-76421fac6792', 'Psychostasia - Errortale Original', 'Original', '13.99', 'no sale', '2:52', 6, 'Psychostasia - Errortale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. A similar track to electrostatic, but with a new melody, but still the same fun vibe!'),
(7, '6cf71701-9b8d-4735-86a3-35f32eae52e4', 'Attack of the Killer Queen - Deltarune Remix', 'Deltarune Remix', '10.99', 'no sale', '2:48', 7, 'Attack of the Killer Queen - Deltarune Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Deltarune Remix. SharaX\'s favourite Deltarune\'s battle theme, so of course they remixed it!'),
(8, '5a26fd65-ef05-431c-b42e-02f019f9123d', 'Obsession - Dusttale Original', 'Original', '14.99', '12.99', '3:10', 8, 'Obsession - Dusttale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. Vocals brought back for this track after a long time.'),
(9, '16d815a0-6fcf-4f96-8b3e-d78eedef7286', 'BIG SHOT - Deltarune Remix', 'Deltarune Remix', '11.99', '9.99', '3:17', 9, 'BIG SHOT - Deltarune Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Deltarune remix. Another one of SharaX\'s favourite characters alongside Queen. Made not shortly after Deltarune chapter 2 it\'s release.'),
(10, 'e2b9efa7-64b4-4958-89d3-25b3524bc4de', 'Hysterical - Deltarune Remix', 'Deltarune Remix', '10.99', 'no sale', '3:25', 10, 'Hysterical - Deltarune Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Deltarune remix. Quickly made within 3 hours for your listening fun!'),
(11, '355631ce-9ee6-45a5-b709-ac7c4d3773c3', 'Fun With Electrostatic - Errortale Remix', 'Undertale AU', '11.99', 'no sale', '3:05', 11, 'Fun With Electrostatic - Errortale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale au remix. A diffrent turn of Electrostatics melody.'),
(12, '968ef7e0-2a3a-433c-ace7-8cf6bc6294ea', 'Spear of a True Hero - Undertale Remix', 'Undertale Remix', '10.99', 'no sale', '3:57', 12, 'Spear of a True Hero - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A undertale remix. Quickly made within six hours for some fun after having not done a remix of \'Battle Against a True Hero\' for quite a while!'),
(13, '4e0d07a3-fb98-49dc-aef4-c14f038cbb21', 'Rewind - Undertale Original', 'Original', '13.99', 'no sale', '3:44', 13, 'Rewind - Undertale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. Originally took 6 hours to create, but 4 years to actually upload. But after a bit of a struggle, it\'s here!'),
(14, '9038e2da-0331-4c0e-8ca1-2db7e7756af2', 'Red Light - Underfell Original', 'Original', '13.99', 'no sale', '4:48', 14, 'Red Light - Underfell Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. A little original for Underfell, along with being good practice for using electric guitars in their work.'),
(15, 'b65b3234-6981-4c59-bf0f-43239474f0f9', 'Hello World - Aftertale Original', 'Original', '13.99', 'no sale', '3:13', 15, 'Hello World - Aftertale Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. Created in a total of 32 hours, based solely off of Xedramon\'s Fatal Error comic.'),
(16, '9f153ce0-9776-4884-9330-568c4680e21f', 'Pandemic - Underfresh Original', 'Original', '15.99', 'no sale', '3:14', 16, 'Pandemic - Underfresh Original.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A SharaX original. A popularly requested au, and created in a total of 27 hours!'),
(17, '492dc956-36b1-47c8-9248-fce79d79eccf', 'Dark Darker Yet Monster - Undertale Remix', 'Undertale Remix', '9.99', 'no sale', '5:09', 17, 'Dark Darker Yet Monster - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale remix. The 62nd track uploaded by SharaX, a last track to end 2017.'),
(18, '257cc213-051a-44e4-8fb0-06639b8f84ac', 'Tokyovania[Sans & Papyrus Vocals] - Undertale Remix', 'Undertale Remix', '14.99', 'no sale', '3:46', 18, 'Tokyovania[Sans & Papyrus Vocals] - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale remix. Created by mixing Megalovania and Tokyo Teddy Bear together.'),
(19, '79da8bfe-a88b-43f4-8647-9a15be961c4a', 'Megalotrousle - Undertale Remix', 'Undertale Remix', '9.99', 'no sale', '5:19', 19, 'Megalotrousle - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale Remix. A remix consisting of Bonetrousle and Megalovania, created by working non-stop for 2 weeks!'),
(20, '8124c7af-7cbf-45a4-9062-832e2005a0fa', 'Darker yet Darker - Undertale Remix', 'Undertale Remix', '9.99', 'no sale', '3:54', 20, 'Darker yet Darker - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale remix. A theme that had room for lots of creativity, but with the struggle of making the 15 second track into a 4 minute long one!'),
(21, '9ef0dffd-6c82-4647-8ba1-6876911a817d', 'Battle Against a True Hero - Undertale Remix', 'Undertale Remix', '9.99', 'no sale', '4:30', 21, 'Battle Against a True Hero - Undertale Remix.jpeg', 'tinyImage2.jpg', 'tinyImage3.jpg', 'A Undertale remix. A track with a more orchestral direction, picked over a remix of Spear of Justice.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nieuwsbericht`
--
ALTER TABLE `nieuwsbericht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `nieuwsbericht`
--
ALTER TABLE `nieuwsbericht`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
