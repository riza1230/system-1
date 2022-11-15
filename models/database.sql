CREATE DATABASE com;
use com;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `school_ID` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `ethnicity` varchar(10) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `yearlevel` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `province` varchar(45) NOT NULL,
  `municipality` varchar(45) NOT NULL,
  `barangay` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `privilage` varchar(10) DEFAULT 'student',
  `code` text NOT NULL
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

