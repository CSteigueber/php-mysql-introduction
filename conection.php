<?php
function openConnection() {
 // Try to figure out what these should be for you
 $dbhost    = "localhost";
 $dbuser    = "root";
 $dbpass    = "root";
 $db        = "becode";
 
 // Try to understand what happens here 
 echo "before";
 $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
echo "after";
//$pdo->query("INSERT INTO students (first_name) VALUES ('Stijn')"); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 // Why we do this here
 return $pdo;
}
