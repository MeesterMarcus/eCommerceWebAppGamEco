<?php

require "connect_to_mysql.php";  

$sqlCommand0 = "CREATE TABLE IF NOT EXISTS Person (
		 idPerson int(11) NOT NULL auto_increment,
		 FName varchar(255) NOT NULL,
		 LName varchar(255) NOT NULL,
         State varchar(45) NOT NULL,
         City varchar(45) NOT NULL,
         Zip int(11) NOT NULL,
         Street varchar(45),
         DOB date NULL,
		 		 PRIMARY KEY (idPerson)
		 		 ) ";
if (mysql_query($sqlCommand0)){ 
    echo "Your person table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: person table has not been created.";
}
	

$sqlCommand1 = 
"CREATE TABLE IF NOT EXISTS Customer (
  TransactionID INT NOT NULL,
  Day VARCHAR(45) NULL,
  Month VARCHAR(45) NULL,
  Time VARCHAR(45) NULL,
  Year INT NULL,
  Games_Serial INT NOT NULL,
  PRIMARY KEY (TransactionID)
)";

if (mysql_query($sqlCommand1)){ 
    echo "Your table customer has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: customer table has not been created.";
}


$sqlCommand2 = 
  "CREATE TABLE IF NOT EXISTS Games (
  Serial INT NOT NULL,
  Title VARCHAR(45) NULL,
  Price INT NULL,
  Genre VARCHAR(45) NULL,
  Developer VARCHAR(45) NULL,
  Platform VARCHAR(45) NULL,
  Available INT NULL,
  PRIMARY KEY (Serial))";

if (mysql_query($sqlCommand2)){ 
    echo "Your games table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: games table has not been created.";	
}

$sqlCommand3 = "CREATE TABLE IF NOT EXISTS Transaction (
  TransactionID INT NOT NULL,
  Day VARCHAR(45) NULL,
  Month VARCHAR(45) NULL,
  Time VARCHAR(45) NULL,
  Year INT NULL,
  Games_Serial INT NOT NULL,
  PRIMARY KEY (TransactionID),
    FOREIGN KEY (Games_Serial) REFERENCES Games(Serial)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";
if (mysql_query($sqlCommand3)){ 
    echo "Your games Transaction has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: games Transaction has not been created.";	
}
?>