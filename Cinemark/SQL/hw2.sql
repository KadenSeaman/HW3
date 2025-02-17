-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2024 at 03:22 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `release_year` varchar(50) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `runtime` varchar(50) DEFAULT NULL,
  `rating` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `title`, `description`, `director`, `release_year`, `budget`, `runtime`, `rating`, `genre`) VALUES
(1, 'Shawshank Redemption', 'Innocent person gets put in prison', 'Frank Darabont', '1994', '$25 million', '142 min', '9.3', 'Drama'),
(2, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'Francis Ford Coppola', '1972', '$6 million', '175 min', '9.2', 'Crime'),
(3, 'The Dark Knight', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 'Christopher Nolan', '2008', '$185 million', '152 min', '9.0', 'Action'),
(4, 'Pulp Fiction', 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', 'Quentin Tarantino', '1994', '$8 million', '154 min', '8.9', 'Crime'),
(5, 'Forrest Gump', 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 'Robert Zemeckis', '1994', '$55 million', '142 min', '8.8', 'Drama'),
(6, 'Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'Christopher Nolan', '2010', '$160 million', '148 min', '8.8', 'Sci-Fi'),
(7, 'The Matrix', 'A computer programmer discovers that reality as he knows it is a simulation created by machines to subjugate humanity.', 'The Wachowskis', '1999', '$63 million', '136 min', '8.7', 'Sci-Fi'),
(8, 'Goodfellas', 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate.', 'Martin Scorsese', '1990', '$25 million', '146 min', '8.7', 'Crime'),
(9, 'The Silence of the Lambs', 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.', 'Jonathan Demme', '1991', '$19 million', '118 min', '8.6', 'Thriller'),
(10, 'Schindler\'s List', 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.', 'Steven Spielberg', '1993', '$22 million', '195 min', '8.9', 'Biography'),
(11, 'The Lord of the Rings: The Return of the King', 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.', 'Peter Jackson', '2003', '$94 million', '201 min', '8.9', 'Fantasy'),
(12, 'Fight Club', 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.', 'David Fincher', '1999', '$63 million', '139 min', '8.8', 'Drama'),
(13, 'The Usual Suspects', 'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup.', 'Bryan Singer', '1995', '$6 million', '106 min', '8.5', 'Mystery'),
(14, 'The Lion King', 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.', 'Roger Allers, Rob Minkoff', '1994', '$45 million', '88 min', '8.5', 'Animation'),
(15, 'Spirited Away', 'During her family\'s move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches, and spirits, and where humans are changed into beasts.', 'Hayao Miyazaki', '2001', '$19 million', '125 min', '8.6', 'Animation'),
(16, 'Saving Private Ryan', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.', 'Steven Spielberg', '1998', '$70 million', '169 min', '8.6', 'War'),
(17, 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 'Christopher Nolan', '2014', '$165 million', '169 min', '8.6', 'Sci-Fi'),
(18, 'Whiplash', 'A promising young drummer enrolls at a cut-throat music conservatory where his dreams of greatness are mentored by an instructor who will stop at nothing to realize a student\'s potential.', 'Damien Chazelle', '2014', '$3.3 million', '106 min', '8.5', 'Drama'),
(19, 'The Departed', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.', 'Martin Scorsese', '2006', '$90 million', '151 min', '8.5', 'Crime'),
(20, 'The Prestige', 'After a tragic accident, two stage magicians engage in a battle to create the ultimate illusion while sacrificing everything they have to outwit each other.', 'Christopher Nolan', '2006', '$40 million', '130 min', '8.5', 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(1, 'johndoe', 'hashed_password_1', 'John', 'Doe', 'john.doe@email.com'),
(2, 'janesmit', 'hashed_password_2', 'Jane', 'Smith', 'jane.smith@email.com'),
(3, 'bobwilson', 'hashed_password_3', 'Bob', 'Wilson', 'bob.wilson@email.com'),
(4, 'alicejohn', 'hashed_password_4', 'Alice', 'Johnson', 'alice.johnson@email.com'),
(5, 'charlbrow', 'hashed_password_5', 'Charlie', 'Brown', 'charlie.brown@email.com'),
(6, 'emmadavis', 'hashed_password_6', 'Emma', 'Davis', 'emma.davis@email.com'),
(7, 'frankmil', 'hashed_password_7', 'Frank', 'Miller', 'frank.miller@email.com'),
(8, 'gracewill', 'hashed_password_8', 'Grace', 'Williams', 'grace.williams@email.com'),
(9, 'henrytay', 'hashed_password_9', 'Henry', 'Taylor', 'henry.taylor@email.com'),
(10, 'isabelan', 'hashed_password_10', 'Isabel', 'Anderson', 'isabel.anderson@email.com'),
(11, 'jackthom', 'hashed_password_11', 'Jack', 'Thomas', 'jack.thomas@email.com'),
(12, 'katemarti', 'hashed_password_12', 'Kate', 'Martin', 'kate.martin@email.com'),
(13, 'liamclar', 'hashed_password_13', 'Liam', 'Clark', 'liam.clark@email.com'),
(14, 'meganrod', 'hashed_password_14', 'Megan', 'Rodriguez', 'megan.rodriguez@email.com'),
(15, 'noahlee', 'hashed_password_15', 'Noah', 'Lee', 'noah.lee@email.com'),
(16, 'oliviawh', 'hashed_password_16', 'Olivia', 'White', 'olivia.white@email.com'),
(17, 'peterhar', 'hashed_password_17', 'Peter', 'Harris', 'peter.harris@email.com'),
(18, 'quinnkim', 'hashed_password_18', 'Quinn', 'Kim', NULL),
(19, 'rachelng', 'hashed_password_19', 'Rachel', 'Nguyen', NULL),
(20, 'samgreen', 'hashed_password_20', 'Sam', 'Green', 'sam.green@email.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
