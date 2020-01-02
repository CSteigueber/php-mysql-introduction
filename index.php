<?php
function check_post(){
    switch (null){
        case $_POST["first_name"]:      return false; break;
        case $_POST["last_name"]:       return false; break;
        case $_POST["username"]:        return false; break;
        case $_POST["email"]:           return false; break;
        case $_POST["avatar"]:          return false; break;
        case $_POST["video"]:           return false; break;
        case $_POST["quote"]:           return false; break;
        case $_POST["quote_author"]:    return false; break;
        default:                        return true;
    }
}

require 'connection.php';
if (check_post()){
    $pdo=openConnection();
    $sql= "INSERT INTO students (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)";
    $sql.=" VALUES (".$_POST["first_name"].",".$_POST["last_name"].",".$_POST["username"].",".$_POST["gender"][0].",".$_POST["linkedin"].",".$_POST["github"].",".$_POST["email"].",".$_POST["language"][0].",".$_POST["avatar"].",".$_POST["video"].",".$_POST["quote"].",".$_POST["quote_author"].");";
    echo $sql;
    $pdo->query($sql);
    echo "YEEEHAAAAW!";
    if ($pdo!=0){
    }
    else{
        echo "Connection failed!";
    }
}
else{
    echo "Incorrect input";
}