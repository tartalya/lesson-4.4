<?php

$dbHost = 'kalopsia.ru';
$dbUser = 'netology';
$dbName = 'lesson44';
$dbPassword = "gfintn";

$cteateFirstTestTable = 'CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`estimation` float NOT NULL,
`budget` tinyint(4) NOT NULL DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$cteateSecondTestTable = 'CREATE TABLE IF NOT EXISTS `Phones` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`model` varchar(50) NOT NULL,
`price` float NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => true,
];



$link = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword, $opt);


$defTypes = array('INT', 'VARCHAR', 'TEXT', 'DATE', 'FLOAT', 'DOUBLE', 'BOOLEAN');


