<?php
    $mysqli = new mysqli("localhost","root","","db_sumbit"); //host, username, password, dbname
    //check conenction 
    if ($mysqli->connect_errno){ //procedural and object oriented php 
        echo "Failed to conenct!";
        exit();
    }
?>