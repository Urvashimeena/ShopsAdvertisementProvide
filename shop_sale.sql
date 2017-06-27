-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 04:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
`shop_code` int(5) NOT NULL,
  `shopkeeper_name` varchar(50) COLLATE sjis_bin NOT NULL,
  `gender` varchar(10) COLLATE sjis_bin NOT NULL,
  `shopkeeper_image` varchar(40) COLLATE sjis_bin NOT NULL,
  `shop_name` varchar(50) COLLATE sjis_bin NOT NULL,
  `shop_type` varchar(20) COLLATE sjis_bin NOT NULL,
  `shop_address` varchar(70) COLLATE sjis_bin NOT NULL,
  `landmark` varchar(20) COLLATE sjis_bin NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `shop_image` varchar(50) COLLATE sjis_bin NOT NULL,
  `adhar_image` varchar(50) COLLATE sjis_bin NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `e_mail` varchar(30) COLLATE sjis_bin NOT NULL,
  `password` varchar(15) COLLATE sjis_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=sjis COLLATE=sjis_bin;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_code`, `shopkeeper_name`, `gender`, `shopkeeper_image`, `shop_name`, `shop_type`, `shop_address`, `landmark`, `mobile_number`, `shop_image`, `adhar_image`, `opening_time`, `closing_time`, `e_mail`, `password`, `date`) VALUES
(37, 'Abhishek Sharma', 'male', 'images.jpg', 'Tequila Restaurant', 'Restaurant', 'Opp Hint Institute, Bhuwana, Udaipur-Rajasthan - 313001, Near Parmanan', 'Bhuwana', 2147483647, 'everest-resort-bhuwana-udaipur-rajasthan-dmr0q.jpg', 'Aadhar Card.png', '10:00:00', '23:00:00', 'avishobhawat@gmail.com', 'abhishek', '2017-03-22'),
(38, 'mudit', 'male', 'images (1).jpg', 'Lal Bagh Restaurants', 'Restaurant', '65 Sardarpura, Mg College Road, Udaipur HO, Udaipur-Rajasthan - 313001', 'sardarpura', 2147483647, 'aa.jpg', 'Aadhar Card.png', '11:00:00', '03:00:00', 'mudit@gmail.com', 'mudit', '2017-05-17'),
(39, 'Omji Prakash', 'male', 'accountant.jpg', 'Om prakash Associate', 'Electronics', 'link role town hall udaipur 313001', 'town hall', 964999964, 'electr.JPG', 'Aadhar Card.png', '10:00:00', '19:00:00', 'om@gmail.com', 'omi', '2016-12-15'),
(40, 'Shefali Mishra', 'female', '120813-New-Manager-275x275.jpg', 'Vikas Nursing Home', 'Medical Store', 'kheda mata chawk, Badgaon, Udaipur-Rajasthan - 313011, opp. CHC hospit', 'Badgaon', 9462300442, 'default-chemists-134.jpg', 'Aadhar Card.png', '10:00:00', '18:00:00', 'shefalimsr1996@gmail.com', 'shefali', '2017-05-19'),
(41, 'Ankush Khatri', 'male', 'AS.jpg', 'Ankush Stationary', 'Stationary', 'hathipole', 'hathipole', 9785753886, '1.jpg', 'images.jpg', '08:00:00', '20:00:00', 'dhhrruvkhatri@gmail.com', 'ankush', '1996-06-13'),
(44, 'Arvind Singh', 'male', 'IMG-20170409-WA0011.jpg', 'Arvind book store', 'Book Store', '246,harsh nagar ', 'Rampura', 7791942858, 'SAM_1830.JPG', 'images.jpg', '10:00:00', '21:00:00', 'ankush.khatri1311@gmail.com', 'arvind', '1995-07-11'),
(45, 'Avinash Jain', 'male', 'IMG-20140224-WA0009.jpg', 'Avinash Stationary', 'Stationary', 'JagdishChowk', 'JagdishChowk', 8560970885, 'udaipur+city1.jpg', 'images.jpg', '07:00:00', '21:00:00', 'avishobhawat@live.com', 'avi', '1995-10-10'),
(46, 'Anki Khatri', 'male', 'IMG_20140110_155023.JPG', 'Ankush Namkeen', 'Others', '204 harsh nagar', 'Harsh nagar', 9785753886, 'hdcolourfu_dATqZeok.jpg', 'images.jpg', '11:00:00', '22:00:00', 'ankush.khatri1306@gmail.com', 'anksuh', '1996-06-13'),
(47, 'Deepesh', 'male', 'IMG_7244.JPG', 'Deepesh Kirana store', 'Kirana', '250 harsh nagar', 'Harsh nagar', 8769344023, 'TC-Lindsey-730x350.jpg', 'images.jpg', '06:00:00', '23:00:00', 'abhaysen786@gmail.com', 'dipu', '1995-12-29'),
(48, 'Abhimayu Meena', 'male', 'B612_20160119_182124.jpg', 'Abhimanyu Meena Kirana', 'Kirana', '246, Pahada', 'pahada', 7732861825, 'P_20160119_162420.jpg', 'images.jpg', '05:00:00', '12:00:00', 'mabhimanyu721@gmail.com', 'abhi', '1995-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `shop_add`
--

CREATE TABLE IF NOT EXISTS `shop_add` (
  `shop_code` int(11) NOT NULL,
  `shop_name` varchar(60) COLLATE sjis_bin NOT NULL,
  `product_name` varchar(30) COLLATE sjis_bin NOT NULL,
  `product_discription` varchar(60) COLLATE sjis_bin NOT NULL,
  `add_n` int(10) NOT NULL DEFAULT '0',
  `buy_n` int(10) NOT NULL DEFAULT '0',
  `get_n` int(10) NOT NULL DEFAULT '0',
  `shop_rs` varchar(20) COLLATE sjis_bin NOT NULL DEFAULT '0',
  `get_rs` varchar(20) COLLATE sjis_bin NOT NULL DEFAULT '0',
  `marked_price` varchar(20) COLLATE sjis_bin NOT NULL DEFAULT '0',
  `selling_price` varchar(20) COLLATE sjis_bin NOT NULL DEFAULT '0',
  `discount` decimal(30,1) DEFAULT NULL,
  `product_image` varchar(60) COLLATE sjis_bin NOT NULL,
  `p` int(4) NOT NULL,
`aa` bigint(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=sjis COLLATE=sjis_bin;

--
-- Dumping data for table `shop_add`
--

INSERT INTO `shop_add` (`shop_code`, `shop_name`, `product_name`, `product_discription`, `add_n`, `buy_n`, `get_n`, `shop_rs`, `get_rs`, `marked_price`, `selling_price`, `discount`, `product_image`, `p`, `aa`) VALUES
(39, 'Om prakash Associate', 'Asus Mobile', 'Zenfone 2 Laser', 0, 0, 0, '0', '0', '10000', '8000', '20.0', 'download (2).jpg', 2, 149),
(39, 'Om prakash Associate', 'Laptops', 'Any product you want to buy in laptops', 0, 0, 0, '80000', '10000', '0', '0', '12.5', 'download.jpg', 1, 150),
(39, 'Om prakash Associate', 'Nokia Mobile', 'Nokia 2700 classic', 0, 3, 1, '0', '0', '0', '0', '25.0', 'download (1).jpg', 3, 151),
(39, 'Om prakash Associate', 'Mobiles', 'Any Mobile of Brand I phone', 0, 0, 0, '100000', '20000', '0', '0', '20.0', 'apple-iphone6s-apple-iphone-6s-plus-1.jpg', 1, 152),
(39, 'Om prakash Associate', 'Asus Mobile', 'Asus Zenfone 5 (16gb)', 0, 0, 0, '0', '0', '10000', '7500', '25.0', 'asus.jpeg', 2, 153),
(39, 'Om prakash Associate', 'Micromax Mobile', 'range Between 2000 to 5000', 0, 3, 1, '0', '0', '0', '0', '25.0', '1 (2).jpg', 3, 155),
(41, 'Ankush Stationary', 'Pencil Box', 'Natraj Pencil box', 0, 0, 0, '10000', '200', '0', '0', '2.0', 'download.png', 1, 156),
(41, 'Ankush Stationary', 'Classmate Copy', 'A4 size copy ', 0, 0, 0, '0', '0', '100', '97', '3.0', '17.jpg', 2, 157),
(41, 'Ankush Stationary', 'Rubber', 'Rubber box of 50 pieces', 0, 4, 1, '0', '0', '0', '0', '20.0', 'natraj-rubber-250x250.jpg', 3, 158),
(41, 'Ankush Stationary', 'Any Product', 'stationary,colurs,chart papers etc', 0, 0, 0, '2000', '100', '0', '0', '5.0', 'download (3).jpg', 1, 159),
(41, 'Ankush Stationary', 'Pens', 'cello pens Box', 0, 0, 0, '0', '0', '200', '190', '5.0', 'download (4).jpg', 2, 160),
(44, 'Arvind book store', 'Books', 'Any type of Book', 0, 0, 0, '2000', '500', '0', '0', '25.0', 'Beautyful_Doll(2).jpg', 1, 162),
(44, 'Arvind book store', 'Ganpatiji Book', 'All pray of ganpatiji', 0, 0, 0, '0', '0', '100', '60', '40.0', '255344_116986171776342_1219144879_n.jpg', 2, 163),
(44, 'Arvind book store', 'Gitaar Tutorial Book', 'How to play a gitar by ankush(Any book)', 0, 2, 1, '0', '0', '0', '0', '33.3', 'guitar.jpg', 3, 164),
(44, 'Arvind book store', 'Cartoon ', 'Cartoon stories based on POGO Channels', 0, 0, 0, '1000', '300', '0', '0', '30.0', 'noddy1.jpg', 1, 165),
(44, 'Arvind book store', 'Book on Girl', 'Stories on girls that how they are ghost', 0, 0, 0, '0', '0', '200', '110', '45.0', 'amazing_b8lvxsry.jpg', 2, 166),
(44, 'Arvind book store', 'Book on Ankush Life', 'Stories of Ankush Khatri Life and the things happens', 0, 4, 3, '0', '0', '0', '0', '42.9', 'keep-calm-and-love-ankush-2.png', 3, 167),
(45, 'Avinash Stationary', 'Pen', 'Butterflow packet of 20pcs', 0, 0, 0, '1000', '200', '0', '0', '20.0', 'download (1).png', 1, 168),
(45, 'Avinash Stationary', 'Rubber', 'Natraj Rubber ', 0, 0, 0, '0', '0', '5', '3', '40.0', 'natraj-rubber-250x250.jpg', 2, 169),
(45, 'Avinash Stationary', 'Pencil Box', 'Natraj Pencil box(10pcs)', 0, 6, 3, '0', '0', '0', '0', '33.3', 'download.png', 3, 170),
(45, 'Avinash Stationary', 'Cello Pen ', 'Pen box of cello containing 10pcs', 0, 0, 0, '2000', '500', '0', '0', '25.0', 'download (4).jpg', 1, 171),
(45, 'Avinash Stationary', 'Classmate Copy', 'A4 size Copy for Students having 250 pages', 0, 0, 0, '0', '0', '120', '75', '37.5', '17.jpg', 2, 172),
(45, 'Avinash Stationary', 'Stationary Basket', 'Contains all pens and pencils you get free pencil box', 0, 5, 10, '0', '0', '0', '0', '66.7', 'download (3).jpg', 3, 173),
(46, 'Ankush Namkeen', 'Namkeen', 'all Namkeen', 0, 0, 0, '2000', '500', '0', '0', '25.0', 'download (5).jpg', 1, 174),
(46, 'Ankush Namkeen', 'Bikaji Bhujia', 'Packet of 1kg', 0, 0, 0, '0', '0', '180', '140', '22.2', 'download (6).jpg', 2, 175),
(46, 'Ankush Namkeen', 'Soya Sticks', 'Soya sticks home made packet of 2kg', 0, 2, 1, '0', '0', '0', '0', '33.3', 'soya-sticks.jpg', 3, 176),
(46, 'Ankush Namkeen', 'pea', 'pea', 0, 0, 0, '200', '100', '0', '0', '50.0', 'download (7).jpg', 1, 177),
(46, 'Ankush Namkeen', 'Mix namkeen', 'mix namkeen packet of 2kg', 0, 0, 0, '0', '0', '200', '100', '50.0', 'download (8).jpg', 2, 178),
(47, 'Deepesh Kirana store', 'All Product', 'all kirana thing', 0, 0, 0, '2000', '100', '0', '0', '5.0', 'TC-Lindsey-730x350.jpg', 1, 179),
(47, 'Deepesh Kirana store', 'Sampoo', 'Nyle sampoo Bottle of 1 litre', 0, 0, 0, '0', '0', '210', '140', '33.3', 'nyle.jpg', 2, 180),
(47, 'Deepesh Kirana store', 'Sampoo', 'Buy sampoo bottle(1 L) and get free Conditionar(250ml)', 0, 3, 2, '0', '0', '0', '0', '40.0', 'g.jpg', 3, 181),
(47, 'Deepesh Kirana store', 'Bourn vita', 'packet 2kg', 0, 0, 0, '0', '0', '450', '250', '44.4', 'download (9).jpg', 2, 182),
(47, 'Deepesh Kirana store', 'Bourn vita ', 'bourn vita little champs 1 kg', 0, 3, 2, '0', '0', '0', '0', '40.0', 'download (10).jpg', 3, 183),
(48, 'Abhimanyu Meena Kira', 'All Shampo', 'shampo of brand dove,nyle,panteen etc', 0, 0, 0, '2000', '500', '0', '0', '25.0', 'g.jpg', 1, 184),
(48, 'Abhimanyu Meena Kira', 'Hide and sick biscuits', 'packet of 3 ', 0, 0, 0, '0', '0', '120', '70', '41.7', 'parle-hide-seek-chocolate-chips-biscuits-1319848.jpg', 2, 185),
(48, 'Abhimanyu Meena Kira', 'Maggi', 'Maggi packet of Rs60', 0, 4, 2, '0', '0', '0', '0', '33.3', 'download (11).jpg', 3, 186),
(48, 'Abhimanyu Meena Kira', 'Everest masala', 'all everest product', 0, 0, 0, '1000', '200', '0', '0', '20.0', 'download (12).jpg', 1, 187),
(48, 'Abhimanyu Meena Kira', 'Bourn vita', 'bourn vita little champs 1 kg', 0, 200, 110, '0', '0', '0', '0', '35.5', 'download (10).jpg', 3, 188),
(38, 'Lal Bagh Restaurants', 'chowmin', 'chinese full plate only Rs 70', 0, 0, 0, '210', '30', '0', '0', '14.3', 'abhi.jpg', 1, 189),
(38, 'Lal Bagh Restaurants', 'pepsi', '200ml bottle', 0, 4, 2, '0', '0', '0', '0', NULL, 'images (2).jpg', 3, 191),
(41, 'Ankush Stationary', 'maggi', 'maggi packet s', 0, 0, 0, '2000', '100', '0', '0', '5.0', '51C48Rbwr9L._SX385_.jpg', 1, 194);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
 ADD PRIMARY KEY (`shop_code`);

--
-- Indexes for table `shop_add`
--
ALTER TABLE `shop_add`
 ADD PRIMARY KEY (`aa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
MODIFY `shop_code` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `shop_add`
--
ALTER TABLE `shop_add`
MODIFY `aa` bigint(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
