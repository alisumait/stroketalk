<?php
    
global $db;
    $mysql_hostname = //Host Name;
    $mysql_username = //Login ID;
    $mysql_password = //Login Password;
    $mysql_database = //DB Name;
    
    $db     = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database)
    
    or die("Something is not working properly");

    mysqli_select_db ($db, $mysql_database) or die("Database is not found.");
    
    
?>