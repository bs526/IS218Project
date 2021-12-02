<?php
require("config.php");

try{
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn-query("CREATE TABLE `projecto`. ( `Email` VARCHAR NOT NULL , `User` TEXT NOT NULL , `First` TEXT NOT NULL , `Last` TEXT NOT NULL , `Password` VARCHAR(30) NOT NULL , UNIQUE (`Email`)) ENGINE = InnoDB;");
    echo "Connected successfully";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>