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
