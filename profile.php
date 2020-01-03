<?php
require 'connection.php';
$pdo=openConnection();
$sql="SELECT * FROM student WHERE id=".$_GET['id'];
$stmt=$pdo->prepare($sql);
$stmt->execute();
$res=$stmt->fetchAll();
echo "<table>";
foreach ($res as $value) {
    echo "<tr>";
    for ($i=0;$i<count($value);$i++){
        echo "<td>".$value[$i]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
   <button><a href="delete.php?id=<?php echo $_GET['id'];?>">Delete this profile!</a></button> 
   <button><a href="edit.php?id=<?php echo $_GET['id'];?>">Edit this profile!</a></button> 
</body>
</html>
