<?php
    $conn = new mysqli('localhost','root','','activityproject');

    if($conn->connect_errno){
        die("Connection failed" .$conn->connect_errno);
    }

    $conn->set_charset("utf8");


?>