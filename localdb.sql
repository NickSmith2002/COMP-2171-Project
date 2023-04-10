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
(1, 'Alexia', '876'),
(2, 'Kimberly', '876'),
(3, 'Leon', '876'),
(5, 'Khayla', 'passwordpasswordpassword'),
(6, 'Ash', 'passwordpasswordpassword');

INSERT INTO `Residents` (`First Name`, `Last Name`, `Middle Initial`, `Resident ID`, `Position`, `DOB`, `Nationality`, `Gender`, `Marital Status`, `Family Type`, `Home Address`, `Mailing Address`, `Email Address`, `Phone Number`, `ID Number`, `Contact Name`, `Contact Relationship`, `Contact Telephone`, `Contact Address`, `Contact Email`, `Level of Study`, `Year of Study`, `Programme Name`, `Faculty Name`, `Name of School`, `Room Number`) VALUES
('Alexia', 'Brooks', 'B.', 1, 'Standard Resident', '2022-11-16', 'Jamaican', 'Female', 'Single', 'Nuclear', 'somewhere', 'somewhere', 'AlexiaB@yahoo.com', '18764357890', 245677088, 'someone', 'Sister', 768905462, 'somewhere', 'someone@yahoo.com', 'Graduate', 'First Year', 'something', 'sci tech', 'uwi', 'L-001'),
('Kimberly', 'Laughton', 'C.', 2, 'Block Representative', '2002-10-23', 'German', 'Female', 'Married', 'Single', 'Somewhere\r\nSomewhere else\r\nSomewhere again', 'Somewhere\r\nSomewhere else\r\nSomewhere again', 'email@aafaffsafs.com', '18765549981', 215125125, 'Mary', 'Father', 1876000022, 'Somewhere\r\nSomewhere else\r\nSomewhere again', 'asasfasf@agawsgag.com', 'Undergraduate', '2', 'Medicine', 'Science and Technology', 'University of the West Indies', 'G-001'),
('Leon', 'Fray', 'C.', 3, 'Resident Advisor', '1993-03-03', 'Trinidadian', 'Male', 'Divorced', 'Nuclear', 'somewhere', 'somewhere', 'LeonCF@yahoo.com', '18765568907', 6754839, 'someone', 'brother', 876564790, 'somewhere', 'someone@yahoo.com', 'Undergraduate', 'second year', 'Computer Science', 'Sci Tech', 'Uwi', 'L-001'),
('Khayla', 'Malcolm', 'P.', 5, 'Resident Advisor', '2013-03-04', 'Jamaican', 'Female', 'Single', 'Nuclear', 'Somewhere', 'Somewhere', 'khayla.malcolm@email.com', '1254673245', 96759364, 'Karen Malcolm', 'Mother', 135136366, 'Somewhere', 'Somewhere', 'Undergraduate', '1', 'Chemistry', 'Science and Technology', 'University of Mexico', 'P-003'),
('Ash', 'Ketchum', 'P.', 6, 'Resident', '1999-03-10', 'Kanton', 'Male', 'Single', 'Single-parent', 'Pallet Town', 'Pallet Town', 'ash.ketchum@email.com', '957504733', 95476130, 'Pikachu', 'Pokemon', 1111, 'Ash\'s pokeball', 'pikachu@email.com', 'Undergraduate', '10', 'Pokemonology', 'Pokemon League', 'Pallet University', 'P-003');

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

INSERT INTO `Notices` (`id`, `author`, `post_date`, `title`, `date`, `time`, `location`, `description`) VALUES
(1, 5, '2023-03-22', ' Rat infestation issue', '0000-00-00', 'N/A', 'N/A', 'The place is infested with a lot of rats.'),
(2, 5, '2023-03-23', 'Washroom closure', '2023-03-22', '10:00 PM', 'Washroom', 'The washroom will be closed until March 23 for maintenance.'),
(3, 5, '2023-03-23', 'Applications for Accommodation are now open', '2023-03-15', '9:00 AM', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam eleifend elit, non consequat augue aliquam ut. Donec eget iaculis erat. Nulla at vestibulum nibh. Ut rhoncus volutpat urna eu viverra. Nullam interdum, justo id aliquet vulputate, urna sem mollis tortor, vel sagittis est orci non nunc. Morbi ultricies imperdiet ipsum, tempus tempor leo placerat ac. Mauris et ante egestas, ultrices lorem quis, aliquam quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla consectetur eleifend odio, vel viverra sapien pellentesque id. Etiam fringilla nisl a convallis pharetra. Donec et sem et lectus scelerisque consectetur. Nam nec maximus quam, ut aliquam mi.\r\nQuisque in dui ac turpis convallis tempor in sed urna. Curabitur rhoncus lacus vitae ullamcorper luctus. Aliquam pretium lacinia leo, eget dictum tellus ullamcorper vel. Aenean suscipit metus nibh, eget vestibulum tortor semper a. Nulla auctor sem sed sapien elementum pellentesque. Sed consectetur.');

