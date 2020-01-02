<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Insert</title>
</head>
Please fill in this form:
<body>
    <div class =d-flex>
        <form action="index.php" method="POST">
        First Name<input class="d-flex flex-row" type="text " name="first_name">
        Last Name<input class="d-flex flex-row" type="text " name="last_name">
        Username<input class="d-flex flex-row" type="text " name="username">
        Gender <select class="d-flex flex-row" name="gender[]" size="1" multiple>
                <option value="male">male</option>    
                <option value="female">female</option>    
                <option value="other">other</option>    
                </select>
        Linkedin<input class="d-flex flex-row" type="text " name="linkedin">
        Github<input class="d-flex flex-row" type="text " name="github">
        Email<input class="d-flex flex-row" type="text " name="email">
        Preferred Language <select class="d-flex flex-row" name="language[]" size="1" multiple>
                <option value="en">EN</option>    
                <option value="fr">FR</option>    
                <option value="nl">NL</option>    
                <option value="de">DE</option>    
                </select>
        Avatar<input class="d-flex flex-row" type="text " name="avatar">
        Video<input class="d-flex flex-row" type="text " name="video">
        Quote<input class="d-flex flex-row" type="text " name="quote">
        Quote Author<input class="d-flex flex-row" type="text " name="quote_author">
    
        <input class="d-flex flex-row" type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
<?php
require 'conection.php';