<?php
require 'connection.php';
$pdo=openConnection();
$sql="SELECT * FROM student";
//$sql='INSERT INTO student (first_name) VALUES (?)';
try {
    $statement=$pdo->prepare($sql);
    $statement->execute();
    $results=$statement->fetchAll();
}
catch (PDOException $e){
    echo "Error message: ".$e->getMessage();
}
echo "<table>";
foreach ($results as $value) {
    echo "<tr>";
    for ($i=0; $i<9;$i++){
        if ($i!=1){
            echo "<td>".$value[$i]."</td>";
        }
        else{
            echo "<td><a href='profile.php?id=".$value[0]."'>".$value[$i]."</a></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";