<?php
/**
 * Created by PhpStorm.
 * User: ChathuraDR
 * Date: 4/10/2017
 * Time: 12:00 PM
 */

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "githubtest";

// Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>


