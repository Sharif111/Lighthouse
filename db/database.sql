--
-- Table structure for table `tbperson`
--

CREATE TABLE IF NOT EXISTS `tbperson` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `name` varchar(255) NOT NULL COMMENT 'person name',
  `class` varchar(250) NOT NULL COMMENT 'person class',
  `day` int(10) NOT NULL COMMENT 'person day',
  `salary` double NOT NULL COMMENT 'person salary',
  `location` varchar(250) NOT NULL COMMENT 'person location',
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `tbperson`
--

INSERT INTO `tbperson` (`id`, `name`,`class`,`day`,`salary`,`location`) VALUES
(1, 'Nishan', 'Nine', 2,3000,'Malibag'),
(2, 'Nahid','Ten', 2,3000,'Mouchak'),
(3, 'Ashton','XI', 3,4000,'Gulshan'),
(4, 'Ajad','Five', 3,4000,'Rampura'),
(5, 'Borna','Eight', 3,4000,'Banasree'),
(6, 'Williamson','IX', 3,4000,'Bonani'),
(7, 'Anonna','Nine', 4,5000,'Malibag'),
(8, 'Rakin','Six', 4,5000,'Badda'),
(9, 'Nayem', 'Nine', 4,5000,'Mohanagar'),
(10, 'Sani', 'Seven', 5,6000,'Moghbajar'),
(11, 'Jeni','Nine', 5,6000,'Matikata'),
(12, 'Kabir', 'Nine', 5,6000,'Kuril'),
(13, 'Marshall', 'X', 6,7000,'Dhanmondi'),
(14, 'Siddik', 'Six', 6,7000,'Malibag'),
(15, 'Tatyana Fitzpatrick','Nine', 4,5000,'Mouchak' ),
(16, 'Michael Silva', 'Nine', 3,7000,'Malibag'),
(17, 'Paul Byrd', 'XII', 4,5000,'Gulshan'),
(18, 'Gloria Little','XI', 3,8000,'Boshundhara'),
(19, 'Bradley Greer', 'VII', 3,6000,'Badda'),
(20, 'Dai Rios', 'IX', 3,6000,'Malibag'),
(21, 'Jenette Caldwell', 'Nine', 4,5000,'Malibag'),
(22, 'Yuri Berry', 'Nine', 4,5000,'Malibag'),
(23, 'Caesar Vance', 'Nine', 4,5000,'Malibag'),
(24, 'Doris Wilder', 'Nine', 4,5000,'Malibag'),
(25, 'Angelica Ramos', 'Nine', 4,5000,'Malibag'),
(26, 'Gavin Joyce', 'Nine', 4,5000,'Malibag'),
(27, 'Jennifer Chang', 'Nine', 4,5000,'Malibag'),
(28, 'Brenden Wagner', 'Nine', 4,5000,'Malibag'),
(29, 'Fiona Green', 'Nine', 4,5000,'Malibag'),
(30, 'Shou Itou','Nine', 4,5000,'Malibag' );


