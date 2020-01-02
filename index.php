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

require 'conection.php';
if (check_post()){
    echo "nice";
    if (openConnection()){
        $sql= "INSERT INTO students (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author";
        
    }
    else{
        echo "Connection failed!";
    }
}
else{
    echo "Incorrect input";
}