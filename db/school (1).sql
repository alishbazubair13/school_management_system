

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;



--
-- table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234');



--
-- table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- insert table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(1, 'VIII', 'B'),
(2, 'III', 'C'),
(5, 'V', 'A'),
(6, 'III', 'B');

-- --------------------------------------------------------

--
-- table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `ENAME` varchar(150) NOT NULL,
  `ETYPE` varchar(150) NOT NULL,
  `EDATE` varchar(150) NOT NULL,
  `SESSION` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- insert table `exam`
--

INSERT INTO `exam` (`EID`, `ENAME`, `ETYPE`, `EDATE`, `SESSION`, `CLASS`, `SUB`) VALUES
(1, 'Term Exam', 'II-Term', '14-08-2018', 'FN', 'VIII', ''),
(3, 'Term Exam', 'II-Term', '10-09-2018', 'FN', 'III', 'English'),
(4, 'Term Exam', 'II-Term', '18-09-2018', 'AN', 'V', 'Maths'),
(5, 'Term Exam', 'III-Term', '19-11-2018', 'FN', 'VIII', 'Tamil');

-- --------------------------------------------------------

--
-- table `hclass`
--

CREATE TABLE IF NOT EXISTS `hclass` (
  `HID` int(11) NOT NULL AUTO_INCREMENT,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  PRIMARY KEY (`HID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
--  table `hclass`
--

INSERT INTO `hclass` (`HID`, `TID`, `CLA`, `SEC`, `SUB`) VALUES
(1, 1, 'VIII', 'A', 'English'),
(4, 4, 'III', 'B', 'English');

-- --------------------------------------------------------

--
--  table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `REGNO` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `MARK` varchar(150) NOT NULL,
  `TERM` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
--  table `mark`
--

INSERT INTO `mark` (`MID`, `REGNO`, `SUB`, `MARK`, `TERM`, `CLASS`) VALUES
(1, 'S101', 'Tamil', '95', 'I-Term', 'III'),
(2, 'S101', 'English', '65', 'II-Term', 'III');

-- --------------------------------------------------------

--
-- table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(150) NOT NULL,
  `SAL` varchar(150) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(3, 'Ali', '1234', 'MCA', '15000', '9875641230', 'ali@gmail.com', 'Salem', 'img/T2'),
(4, 'Sammer', '123', 'MBA', '15000', '9874561230', 'sammer@gmail.com', 'salem', 'staff/3.jpg'),
(5, 'numair', '1234', 'MCA', '20000', '', '', '', '');

-- --------------------------------------------------------

--
--table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RNO` varchar(150) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FNAME` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `PHO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` text NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL,
  `TID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- table `student`
--

INSERT INTO `student` (`ID`, `RNO`, `NAME`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`, `TID`) VALUES
(1, 'S101', 'alishba', 'zubair', '17-10-2003', 'Female', '9874561230', 'alishba@gmail.com', 'Salem', 'III', 'C', 'student/4.jpg', 1),
(3, 'S102', 'eraj', 'amir', '19-11-2002', 'Female', '8529634710', 'eraj@gmail.com', 'Salem', 'VIII', 'A', 'student/3.jpg', 4),
(4, 'S103', 'ajiya', 'haq', '17-03-2005', 'Male', '8794561230', 'ajiya@gmail.com', 'Salem', 'V', 'C', 'student/3.jpg', 4);


-- --------------------------------------------------------

--
-- table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `SNAME` varchar(150) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
--  table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(1, 'urdu'),
(2, 'English');




