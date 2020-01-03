<?php
require 'connection.php';
$pdo=openConnection();
$sql="DELETE FROM student WHERE id=".$_GET['id'];
try {
    echo $_GET['id'];
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    echo "profile deleted";
}
catch (Exception $e){
    echo "Error: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile deletion</title>
</head>
<body>
    <button><a href="index.html">Go back to the index</a></button>
</body>
</html>