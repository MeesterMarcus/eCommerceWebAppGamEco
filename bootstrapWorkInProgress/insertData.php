<?php

require "connect_to_mysql.php";


mysql_query("INSERT INTO `Person` (`idPerson`,`Fname`,`Lname`,`State`,`City`,`Zip`,`Street`,`DOB`)
VALUES (1,'Marcos','Gonzales','Texas','San Antonio',78216,'123 street',990909)");
/*
mysql_query("INSERT INTO `Person` (`idPerson`,`Fname`,`Lname`,`State`,`City`,`Zip`,`Street`,`DOB`)
VALUES (2,'Marcus','Lorenza','Texas','San Antonio',78216,'456 street',880808)");

mysql_query("INSERT INTO `Person` (`idPerson`,`Fname`,`Lname`,`State`,`City`,`Zip`,`Street`,`DOB`)
VALUES (3,'Marvin','Lopez','Texas','San Antonio',78216,'789 street',101010)");

mysql_query("INSERT INTO `Person` (`idPerson`,`Fname`,`Lname`,`State`,`City`,`Zip`,`Street`,`DOB`)
values (4,'Desiree','Johnson','Texas','San Antonio',78216,'101112 street',880808)");
*/

//PC Games
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 01234, 'Counter Strike: Global Offensive', 14.99, 'Shooter', 'Valve', 'PC', 5)");
/*
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 45678, `Diablo III`, 39.99, `ARPG`, `Blizzard`, `PC`, 4)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 13459, `Rome II Total War`, 49.99, `Strategy`, `Creative Assembly`, `PC`, 1)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 18345, `Middle Earth: Shadow of Mordor`, 59.99, `RPG`, `Monolith`, `PC`, 12)");

//Xbox Games
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 01934, `Battlefield 4`, 49.99, `Shooter`, `DICE`, `Xbox One`, 5)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 45978, `Call of Duty: Advanced Warfare`, 59.99, `Shooter`, `Activision`, `Xbox One`, 4)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 13959, `Destiny`, 59.99, `Shooter`, `Bungie`, `Xbox One`, 1)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 18945, `Dead Rising 3`, 39.99, `Action`, `Capcom`, `Xbox One`, 12)");

//Playstation Games
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 01734, `Assassin`s Creed IV: Black Flag, 39.99, `Adventure`, `Ubisoft`, `PS4`, 5)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 45778, `Alien Isolation`, 49.99, `Adventure`, `Creative Assembly`, `PS4`, 4)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 13759, `Batman Arkham Knight`, 59.99, `Action`, `Rocksteady`, `PS4`, 1)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 17345, `Bloodborne`, 59.99, `RPG`, `From Software`, `PS4`, 12)");

//Nintendo Games
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 00234, `Batman Arkham Origins`, 29.99, `Action`, `Warner Bros`, `Nintendo`, 5)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 45078, `Bayonetta`, 59.99, `Adventure`, `Platinum Games`, `Nintendo`, 4)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 13059, `Donkey Kong Country Tropical Freeze`, 49.99, `Platformer`, `Nintendo`, `Nintendo`, 1)");
mysql_query("INSERT INTO `Games` (`Serial`,`Title`, `Price`,`Genre`,`Developer`,`Platform`,`Available`)
Values( 18045, `Hyrule Warriors`, 59.99, `Action`, `Team Ninja`, `Nintendo`, 12)");
*/
?>