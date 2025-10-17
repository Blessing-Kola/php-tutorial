<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    if(empty($firstname) || empty($lastname)){
        exit();
    }

    echo "<h3>These are the data that the user submitted:</h3>";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;
}else{
    header("location: ../index.php");
}
