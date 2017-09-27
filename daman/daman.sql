-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 06:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daman`
--

-- --------------------------------------------------------

--
-- Table structure for table `damantable`
--

CREATE TABLE `damantable` (
  `id` int(11) NOT NULL,
  `surveyor1` varchar(200) NOT NULL,
  `surveyor2` varchar(200) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `nama_odp` varchar(250) NOT NULL,
  `qr_code_odp` varchar(25) NOT NULL,
  `nama_hd` varchar(250) NOT NULL,
  `ip_olt` varchar(25) NOT NULL,
  `hostname` varchar(25) NOT NULL,
  `port_olt` varchar(25) NOT NULL,
  `slot_port` varchar(25) NOT NULL,
  `kapasitas` int(2) NOT NULL,
  `port` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `qr_code_port` varchar(25) NOT NULL,
  `ncli` varchar(25) NOT NULL,
  `nama_pelanggan` varchar(250) NOT NULL,
  `ont_id` varchar(25) NOT NULL,
  `sn` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `no_inet` varchar(25) NOT NULL,
  `ket_stp_port` varchar(25) NOT NULL,
  `noted` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damantable`
--

INSERT INTO `damantable` (`id`, `surveyor1`, `surveyor2`, `tanggal`, `nama_odp`, `qr_code_odp`, `nama_hd`, `ip_olt`, `hostname`, `port_olt`, `slot_port`, `kapasitas`, `port`, `status`, `qr_code_port`, `ncli`, `nama_pelanggan`, `ont_id`, `sn`, `no_telp`, `no_inet`, `ket_stp_port`, `noted`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', ''),
(2, 'aidwniawn', 'noaidnoawin', '2017-09-20', 'andanoin', 'anidona', 'ALYA', 'aw,nd', 'andwk', 'adjowmp', 'naj', 8, 'ndawj', 'okc', 'okda', 'wda[p', 'damwl', 'njdaw', 'akdo', 'adwmo', 'adnj', 'lk', 'kop'),
(3, 'Hada', 'Sipayung', '2017-09-19', 'Odp1', 'Codeodp1', 'DEA GUSTA', '1.1.2.1', 'Host123', 'Port8080', 'Slot2', 8, 'Port1', 'Occupied', 'Tyxcphob12', 'Ncli1', 'Eko', 'Ontid', 'Zte37yub1', '27466189', '127891903', 'No stp', 'No need'),
(4, 'Mega', 'Sari', '2017-09-19', 'odp2', 'codeodp2', 'DEA GUSTA', '1.2.165.30', 'host234', 'port9090', 'slot1', 8, 'portla', 'portli', 'ecekjekiop', 'ncli234', 'Aris', 'jajjajaja', 'zyuie81gb1', '274112371', '128871930', 'no stp', 'noted'),
(5, 'adwuibaw', 'uiadwbiu', '2017-09-20', 'yuyu', 'ggyawgydgyaw', 'ALYA', 'adgwu', 'adguw', 'auwy', '88h', 16, 'ndaiwu', 'statusgege', 'uhyituyawpo', 'ncli', 'nice', 'poawpo', 'nawoiu', '274771188', '14228371957', 'no stp', 'code noted'),
(6, 'COBA FINAL', 'MANCAAAAYY', '2017-09-20', 'SHIKAAAAT', 'JDAUWB', 'NADAFIAH', 'DHAWUH', 'ADNUN', 'NAODWIN', 'NOANDW', 16, 'OKEOCE', 'COBA TERUS', 'JANGAN KENDOR', 'SIKAAAT', 'OKEDE', 'COBAAA', 'JANGAN KENDOOR', '27477182', '144627198', 'BISMILLAH', 'SEMOGA BISA'),
(7, 'hada123', 'spy123', '2017-09-19', 'nadunawui', 'niaduniwu', 'ALYA', '1.1.1.1', 'amdio', 'adnion', 'andwi', 16, 'admi', 'adwnuha', 'adhuwadauwah', 'jdai', 'adn', 'awdnj', 'o', 'oi', 'mi', 'oin', 'noi'),
(8, 'cobalagi', 'kenapabisagini', '2017-09-20', 'hadaspy', 'okeoke', 'ALYA', 'waduh', 'wkkw', 'ok', 'kwkw', 16, 'waw', 'wadu', 'h237gh1g8', 'buibf', 'b98agwb', 'hadw98h', '8uad9wh9', '27488187', '14426398', 'ikdnawi', 'mjadpwn'),
(9, 'hada', 'sipayung', '2017-09-20', 'odp1', 'qrcode2', 'ALYA', '8.8.8.8', 'hostname1', 'port1', 'slot1', 16, 'port1', 'OCCUPIED', 'qrcodeport1', 'ncli1', 'nama1', 'ont1', 'sn1', 'no1', 'no2', 'ket1', 'note1'),
(10, 'hada', 'sipayung', '2017-09-20', 'hadaspy', 'sipaayungs6717', 'ALYA', 'ipolt', 'hohhiub', 'hbjbyub', 'ybyb', 16, 'uhuhi', 'hiuhiuh', 'i7hi7hig', 'gigih', 'yybuyyuvuy', 'vuyguyg', 'ygygu', 'gyugu', 'g9guy', '7gujyg', '7guyg'),
(11, 'Eko', 'Saeful', '2017-09-20', 'ODP-KBU-FAU/012', 'TVDKSDSD', 'ESTU FAJAR', '172.22.203.92', 'D4 GPON KBU', '3/4/5', '1', 8, '3', 'comply', 'THSDJEN', '1322232', 'ESTU GANTENG', '32', '43233044387', '02747345833', '1423329933', 'need service', 'pindah port di uim menjad'),
(12, 'wacoo', 'gacoo', '2017-09-20', 'huhy', 'uyubuyut', 'ESTU FAJAR', '090909', '909090', '808008', '0808080', 8, 'omghello', 'akuterkejut', 'mantapjiwa', 'naiiiiiiss', 'arispinem', 'okeoce', 'sno', '2744417236', '144426713618', 'banyaaak', 'okesip'),
(13, 'adnawnui', 'naopwja', '2017-09-21', 'mdainwio', 'ndaiowno', 'NADAFIAH', 'jcmdnal', 'ndiao', '[djaw[o', 'ndpa9h', 16, '', '', '', '', '', '', '', '', '', '', ''),
(14, 'adnawnui', 'naopwja', '', 'mdainwio', 'ndaiowno', 'NADAFIAH', 'jcmdnal', 'ndiao', '[djaw[o', 'ndpa9h', 16, 'ulalaulaw', 'uawahwoka', 'awlindilwa', 'awlindilwa', 'nadiwal', 'andwnoa', 'anowinao', 'andwonawo', 'anoidwnaoi', 'a00jw', 'jadw90j'),
(15, 'Syuhada', 'Sipayung', '2017-09-21', 'ODP21', 'ODP/TLK212', 'DEA GUSTA', '8.8.8.8', 'HOST2', '8080', 'Slot 2', 8, '9099', 'OCCUPIED', 'ncli', 'ncli', 'CECILE', 'ONT90123', 'ZTEGC01CA3YZ', '274112371', '14778293810', 'NO STP', 'AVAILABLE'),
(16, 'hada', 'anu', '2017-09-22', 'ODP99', 'ywggdgiuu', 'DEA GUSTA', 'bui', 'bui', 'bubi', 'bibi', 8, 'uuh', 'uhiuhuiu', 'uhuihu', 'uhuihu', 'uhiihiu', 'uhuih', 'uhiuhi', 'hiuhiu', 'hiuhiuh', 'iuhiuhui', 'uihuih'),
(17, 'Indah', 'Pertiwi', '2016-09-09', 'TVTUUII', 'GHGHSASA', 'DEA GUSTA', '10.88.18.123', 'daman', '80', '16', 16, '80', 'Ada', 'UUUU', 'UUUU', 'Budi', 'OIUU', 'UUUUUUU', '888888888', '*******', 'Ada', '888'),
(18, 'Eko', 'Wahyu', '', 'TVTKJGJ', 'JHKJBKJ', 'NADAFIAH', '192.19.191.9', 'Daman', '90', '9', 8, '8', 'ada', 'ouhou', 'ouhou', 'aGUS', 'ihifbf8978', 'hdhbiehfibibih', '9999999', '9878479', 'Kosong', 'oohojhro'),
(19, 'Hayu', 'Hayu', '2017-09-22', 'ODPAAAAAAAAA', 'TVTSADGSAGDST', 'ALYA', '1', '2', '3', '4', 8, '9', 'isi', '7612732718312', '7612732718312', 'Siapa Ya', 'YA', '09128391323192', '02747654342', '8138123126', 'Haha', 'Ga ada'),
(20, 'hada', 'sipayung', '2017-09-20', 'odp234', 'qrcodeodp456', 'NADAFIAH', '1.2.3.5', 'hostnameaw', 'portmantap', 'slotcoba', 16, 'portoranglain', 'statusmantap', 'nclijos', 'nclijos', 'cecile', 'ontjiwaid', 'serialgg', '274172379', '1236719', 'ketmantap', 'notejuga'),
(21, 'Eko', 'Wahyu', '', 'TVTKJGJ', 'JHKJBKJ', 'NADAFIAH', '192.19.191.9', 'Daman', '90', '9', 8, '8', 'ada', 'ouhou', 'ouhou', 'aGUS', 'ihifbf8978', 'hdhbiehfibibih', '9999999', '9878479', 'Kosong', 'oohojhro'),
(22, 'KUCING', 'HITAM', '2017-09-22', 'JJJNJKNK', 'YUIYIUI', 'ALYA', 'UUHUH', 'IHUIHUIH', 'IUHIHI', 'HIUHIU', 8, 'JKJBJK', 'JBJB', 'JBJKB', 'JBJKB', 'JBJKB', 'JBKJB', 'KJBK', 'JBJK', 'BKJB', 'JKBKJ', 'KJBJKBKJ'),
(23, 'KUCING', 'HITAM', '2017-09-22', 'JJJNJKNK', 'YUIYIUI', 'ALYA', 'UUHUH', 'IHUIHUIH', 'IUHIHI', 'HIUHIU', 8, '8', 'ISi', '64372873472', '64372873472', 'Siapa Ya', 'Ok', '71238126321', '1723813216', '817239817231', 'Ga', 'Ga'),
(24, 'KUCING', 'HITAM', '2017-09-22', 'JJJNJKNK', 'YUIYIUI', 'ALYA', 'UUHUH', 'IHUIHUIH', 'IUHIHI', 'HIUHIU', 8, 'JFHHEHO', 'IHIOHIOH', 'OIIHOI', 'OIIHOI', 'IHI', 'UIU', 'UHUI', 'UHIUHU', 'UHIUH', 'UIHIUH', 'UHIUH'),
(25, 'hada', 'sipayung', '', 'odp234', 'qrcodeodp456', 'NADAFIAH', '1.2.3.5', 'hostnameaw', 'portmantap', 'slotcoba', 16, 'alwidioawnd', 'abduibaw', 'aiodwiuawbd', 'aiodwiuawbd', 'baoidbiub', 'bdaiuwbiu', 'bdaiowbiab', 'boadbwouab', 'abduobiub', 'abwobdaou', 'abdowbaou'),
(26, 'HAYA', 'HAYU', '2017-09-22', 'APA YAK', 'GA TAY', 'NINING AISYIYAH', 'UUHUH', 'IHUIHUIH', 'IUHIHI', 'HIUHIU', 8, '1', '2', '4', '4', '5', '6', '7', '7', '8', '9', '9'),
(27, 'KUCING', 'HITAM', '2017-09-22', 'JJJNJKNK', 'YUIYIUI', 'ALYA', 'UUHUH', 'IHUIHUIH', 'IUHIHI', 'HIUHIU', 8, 'RUHUHUFIUI', 'HUIU', 'UHUIHUI', 'UHUIHUI', 'HIUHI', 'HUHUI', 'UHIUH', 'UHIUH', 'IUHIUH', 'IUUHIUH', 'IUHIUH'),
(28, 'kucing', 'garong', '', 'odp234', 'kbdfkbdkfbk', 'DEA GUSTA', '1.2.3.5', 'hostnameaw', 'portmantap', 'slotcoba', 16, '8y9898', '98yiigig', 'iygigig', 'iygigig', 'iygiygigy', 'gigig', 'igigigig', 'iygigigy', 'igigig', 'igigigi', 'igiygi'),
(29, 'kucing', 'HITAM', '', 'odp234', 'kbdfkbdkfbk', 'DEA GUSTA', '1.2.3.5', 'hostnameaw', 'portmantap', 'slotcoba', 16, '903280921830h', 'h89dwh8h', '98h98adwh98wh', '98h98adwh98wh', 'h98dawh98haw', 'h98awdh89h', 'hdaw8ha89h', 'h8dawh89awh', '0hdaw89hwa89', 'hadwohoawh', 'hawdohah8'),
(30, 'halo', 'HITAM', '2017-09-13', 'odp234', 'kbdfkbdkfbk', 'DEA GUSTA', '1.2.3.5', 'hostnameaw', 'portmantap', 'slotcoba', 16, 'nbaj', 'hcah', 'lahsah', 'lahsah', 'aaj', 'sdhai', 'lsdlha', 'lha', 'lahsdaih', 'lhaslch', 'kalcha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `damantable`
--
ALTER TABLE `damantable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `damantable`
--
ALTER TABLE `damantable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
