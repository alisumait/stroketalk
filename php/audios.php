<?php

function audioOut($num1) {
    
include("usersdb.php");
    
$sql = "SELECT `src` FROM audios WHERE `id` = $num1";

    if($result = mysqli_query($db, $sql)){
    
        if(mysqli_num_rows($result) > 0){
        
            while($row = mysqli_fetch_array($result)){
                echo "../audio/";
                echo $row['src'];
            }
        // Free result set
        mysqli_free_result($result);
        } 
        else{
        echo "No records matching your query were found.";
        }
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
        
}

?>