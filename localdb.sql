/*===================================== CREATING DATABASE AND SELECTING IT ======================*/
CREATE DATABASE georgealleyne;
USE georgealleyne;

/*======================= CREATING TABLES ===================================================*/
CREATE TABLE IF NOT EXISTS Applicants (
    `ApplicationID` INT NOT NULL PRIMARY KEY auto_increment,
    `Status` VARCHAR(20) NOT NULL DEFAULT ' ',
    `First Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Last Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Middle Initial` VARCHAR(5) NOT NULL DEFAULT ' ',
    `DOB` date DEFAULT NULL,
    `Nationality` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Gender` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Marital Status` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Family Type` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Home Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Mailing Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Email Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `ID Number` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Contact Name` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Contact Relationship` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Contact Telephone` VARCHAR(15) NOT NULL DEFAULT ' ',
    `Contact Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Contact Email` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Level of Study` VARCHAR(25) NOT NULL DEFAULT ' ',
    `Year of Study` VARCHAR(15) NOT NULL DEFAULT ' ',
    `Programme Name` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Faculty Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Name of School` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Room Type` VARCHAR(15) NOT NULL DEFAULT ' ',
    `Roommate Preference` VARCHAR(40) NOT NULL DEFAULT ' '
);

CREATE TABLE IF NOT EXISTS Residents (
    `First Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Last Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Middle Initial` VARCHAR(5) NOT NULL DEFAULT ' ',
    `ID` INT NOT NULL PRIMARY KEY auto_increment,
    `DOB` date DEFAULT NULL,
    `Nationality` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Gender` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Marital Status` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Family Type` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Home Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Mailing Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Email Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Phone Number` VARCHAR(15) DEFAULT ' ',
    `ID Number` VARCHAR(20) NOT NULL DEFAULT ' ',
    `Contact Name` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Contact Relationship` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Contact Telephone` VARCHAR(15) NOT NULL DEFAULT ' ',
    `Contact Address` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Contact Email` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Level of Study` VARCHAR(25) NOT NULL DEFAULT ' ',
    `Year of Study` VARCHAR(15) NOT NULL DEFAULT ' ',
    `Programme Name` VARCHAR(50) NOT NULL DEFAULT ' ',
    `Faculty Name` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Name of School` VARCHAR(100) NOT NULL DEFAULT ' ',
    `Room Type` VARCHAR(15) NOT NULL DEFAULT ' '
);

CREATE TABLE `Users` (
  `ID` INT NOT NULL PRIMARY KEY auto_increment,
  `Username` VARCHAR(15) NOT NULL DEFAULT ' ',
  `Password` VARCHAR(200) NOT NULL DEFAULT ' '
);

CREATE TABLE `Rooms` (
  `Room Number` VARCHAR(10) NOT NULL PRIMARY KEY DEFAULT ' ',
  `Room Type` VARCHAR(20) NOT NULL DEFAULT ' ',
  `Block` VARCHAR(15) NOT NULL DEFAULT ' ',
  `Availability Status` VARCHAR(15) NOT NULL DEFAULT ' ',
  `Resident ID #1` VARCHAR(4) NOT NULL DEFAULT ' ',
  `Resident ID #2` VARCHAR(4) NOT NULL DEFAULT ' '
);

CREATE TABLE `Notices` (
  `ID` int(11) NOT NULL PRIMARY KEY auto_increment,
  `Author` int(11) NOT NULL,
  `Post_date` date NOT NULL,
  `Title` VARCHAR(100) NOT NULL DEFAULT ' ',
  `Date` date NULL,
  `Time` VARCHAR(100) NOT NULL DEFAULT ' ',
  `Location` VARCHAR(100) NOT NULL DEFAULT ' ',
  `Description` VARCHAR(4000) NOT NULL DEFAULT ' '
);

/*===================== INSERTING VALUES IN TABLES=================================== */
INSERT INTO `Users` (`ID`, `Username`, `Password`) VALUES
(1, 'Nick', '876'),
(2, 'Briony', '876'),
(3, 'leon', '876'),
(7, 'Dennis', 'passwordpasswordpassword'),
(11, 'Mickyle', 'passwordpasswordpassword');

INSERT INTO `Applicants` (`ApplicationID`, `Status`, `First Name`, `Last Name`, `Middle Initial`, `DOB`, `Nationality`, `Gender`, `Marital Status`, `Family Type`, `Home Address`, `Mailing Address`, `Email Address`, `ID Number`, `Contact Name`, `Contact Relationship`, `Contact Telephone`, `Contact Address`, `Contact Email`, `Level of Study`, `Year of Study`, `Programme Name`, `Faculty Name`, `Name of School`, `Room Type`, `Roommate Preference`) VALUES
(1, 'Accepted', 'Randolph', 'Colleer', 'M.', '2002-11-05', 'Jamaican', 'Male', 'Married', 'Single-Parent', '22 Deanery Rd Kingston 3', '5 Wainwright Ave Kingston 8', 'mark.fray@email.com', '333333', 'Megan Fray', 'Mother', '1111111', '5 Wainwright Ave Kingston 8', 'meganfray@gmail.com', 'Undergraduate', '3', 'BSc Physics', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Mark'),
(2, 'Pending', 'Adelina', 'Vossing', 'M.', '1999-09-17', 'Cuban', 'Female', 'Single-Parent', 'Nuclear', '8 Surbiton Rd Kingston 10', '6 Ashenheim Rd East Kingston 11', 'adelinavossing@gmail.com', '429549', 'Melanie Reynolds', 'Aunt', '1877826947', '59 Half Way Tree Rd Kingston 10', 'melanieaye@gmail.com', 'Graduate', '2', 'BSc Computer Science', 'Science and Technology', 'University of Technology', 'Double', 'Ricardo'),
(3, 'Accepted', 'Harri', 'Donaway', 'R.', '2011-12-01', 'Japanese', 'Male', 'Single', 'Extended', '95-97 Constant Spring Rd', '6 Ashenheim Rd East Kingston 11', 'bduckitj@csmonitor.com', '010101', 'Magdeline Circle', 'Sister', '322-545-9088', '5 Wainwright Ave Kingston 8', 'rcorraoi@simplemachines.org', 'Undergraduate', '3', 'BSc Chemistry', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Bobby'),
(4, 'Pending', 'Teon', 'Morgan', 'J.', '2002-06-06', 'British', 'Male', 'Divorced', 'Extended', '75 Red Hills Rd', '75 Red Hills Rd', 'teonlovesanime@gmail.com', '020202', 'Ed Sheeran', 'Brother', '18763335555', '75 Red Hills Rd', 'edysheerio@gmail.com', 'Undergraduate', '3', 'BSc Computer Sciece', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Bobby'),
(12, 'Accepted', 'Ramon', 'Byfield', 'F.', '2002-08-01', 'Jamaican', 'Female', 'Married', 'Single-Parent', '5 Wainwright Ave Kingston 8', '5 Wainwright Ave Kingston 8', 'tennisgrimesbjork@email.com', '333333', 'Mia Goth', 'Mother', '123993', '5 Wainwright Ave Kingston 8', 'pearlx@gmail.com', 'Undergraduate', '2', 'BSc Biology', 'Science and Technology', 'University of the West Indies', 'Double', 'Nicholas'),
(13, 'Accepted', 'Carmelle', 'Snowling', 'F.', '2003-07-01', 'African', 'Female', 'Single', 'Nuclear', '7 Pepper Wood Circle', '7 Pepper Wood Circle', 'mwgant2@gmail.com', '394549', 'Frannie Croydon', 'Sister', '187993940987', '7 Pepper Wood Circle', 'megan22@gmail.com', 'Graduate', '1', 'Psychology', 'Social Science', 'University of Technology', 'Double', 'Ricardo'),
(17, 'Pending', 'Brady', 'Duncan', 'W.', '2003-12-09', 'Japanese', 'Male', 'Married', 'Single-Parent', 'Middle of Nowhere', 'Middle of Nowhere', 'insertemail@gmail.com', '010101', 'Megan Ayer', 'Sister', '18763334444', 'Middle of Nowhere', 'bobbette@gmail.com', 'Undergraduate', '3', 'BSc Chemistry', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Bobby'),
(5, 'Pending', 'Naruto', 'Uzumaki', 'N.', '2022-11-01', 'African', 'Male', 'Married', 'Extended', 'Middle of Nowhere', 'Middle of Nowhere', 'Middle of Nowhere', '020202', 'Bobbette Bob', 'Sister', '18763335555', 'Middle of Nowhere', 'bobbette@gmail.com', 'Undergraduate', '3', 'BSc Chemistry', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Bobby'),
(9, 'Accepted', 'Brady', 'Colleer', 'M.', '2002-11-05', 'Jamaican', 'Female', 'Divorce', 'Single-Parent', '5 Wainwright Ave Kingston 8', '5 Wainwright Ave Kingston 8', 'mark.fray@email.com', '333333', 'Kimberly Laughton', 'Mother', '1111111', '5 Wainwright Ave Kingston 8', 'kimberlyclaughton@gmail.com', 'Undergraduate', '2', 'BSc Computer Science', 'Science and Technology', 'University of the West Indies', 'Single-Parent', 'Randloph'),
(20, 'Accepted', 'Alexa', 'Bliss', 'E.', '1999-08-09', 'American', 'Female', 'Married', 'Nuclear', '5 Wainwright Ave Kingston 8', '5 Wainwright Ave Kingston 8', 'mark.fray@email.com', '333333', 'Kimberly Laughton', 'Mother', '1111111', '5 Wainwright Ave Kingston 8', 'kimberlyclaughton@gmail.com', 'Graduate', '3', 'BSc Law', 'Law', 'University of the West Indies', 'Double', 'Randloph')
;

INSERT INTO `Rooms` (`Room Number`, `Room Type`, `Block`, `Availability Status`, `Resident ID #1`, `Resident ID #2`) VALUES
('G-001', 'Double', 'Genus', 'Occupied', '1', '2'),
('G-002', 'Double', 'Genus', 'Available', null, null),
('G-003', 'Single', 'Genus', 'Available', null, null),
('G-004', 'Double', 'Genus', 'Available', null, null),
('G-005', 'Single', 'Genus', 'Available', null, null),
('G-006', 'Single', 'Genus', 'Available', null, null),
('G-007', 'Double', 'Genus', 'Available', null, null),
('G-008', 'Single', 'Genus', 'Available', null, null),
('G-009', 'Double', 'Genus', 'Available', null, null),
('G-010', 'Double', 'Genus', 'Available', null, null),
('L-001', 'Single', 'Lynx', 'Available', null, null),
('L-002', 'Double', 'Lynx', 'Available', null, null),
('L-003', 'Single', 'Lynx', 'Available', null, null),
('L-004', 'Double', 'Lynx', 'Available', null, null),
('L-005', 'Double', 'Lynx', 'Available', null, null),
('L-006', 'Single', 'Lynx', 'Available', null, null),
('L-007', 'Double', 'Lynx', 'Available', null, null),
('L-008', 'Double', 'Lynx', 'Available', null, null),
('L-009', 'Double', 'Lynx', 'Available', null, null),
('L-010', 'Double', 'Lynx', 'Available', null, null),
('P-001', 'Single', 'Pardus', 'Available', null, null),
('P-002', 'Double', 'Pardus', 'Available', null, null),
('P-003', 'Single', 'Pardus', 'Available', null, null),
('P-004', 'Double', 'Pardus', 'Available', null, null),
('P-005', 'Double', 'Pardus', 'Available', null, null),
('P-006', 'Double', 'Pardus', 'Available', null, null),
('P-007', 'Single', 'Pardus', 'Available', null, null),
('P-008', 'Single', 'Pardus', 'Available', null, null),
('P-009', 'Single', 'Pardus', 'Available', null, null),
('P-010', 'Single', 'Pardus', 'Available', null, null);
