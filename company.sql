

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `credit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`name`, `email`, `credit`) VALUES
('Abhijit', 'Abhijit@gmail.com', '1000'),
('Suyog', 'Suyog@gmail.com', '1000'),
('Ruhshikesh', 'Ruhshikesh@gmail.com', '1000'),
('Abhishek', 'Abhishek@gmail.com', '1000'),
('Ahmed', 'Ahmed@gmail.com', '1000'),
('Aditya', 'Aditya@gmail.com', '10000'),
('Rohit', 'Rohit@gmail.com', '1000'),
('Mayur', 'Mayur@gmail.com', '1000'),
('shubham', 'shubham@gmail.com', '1000'),
('Akash', 'Akash@gmail.com', '1000');


ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;
