<?php 
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "penggajian";

    $connection = mysqli_connect($serverName, $userName, $password, $dbName);

    if(!$connection) {
        die('Connection Failed : ' . mysqli_connect_error());
    }
?>