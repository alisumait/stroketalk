<?php

include("usersdb.php");
$submitlog   = @$_POST['submitlog'];

   if($submitlog) {

        $sql = "UPDATE `categories` SET `text` = CASE


        WHEN id = 29 THEN '".$_POST['cat1']."'
        WHEN id = 30 THEN '".$_POST['cat2']."'
        WHEN id = 31 THEN '".$_POST['cat3']."'
        WHEN id = 32 THEN '".$_POST['cat4']."'

        END
        WHERE id  in (29,30,31,32)";

        $result = mysqli_query($db, $sql) 
        or die("cannot add text");

}

?>