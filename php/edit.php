<?php


include("usersdb.php");
$submitlog   = @$_POST['submitlog'];

    if($submitlog) {

        $sql = "UPDATE `audios` SET `src` = CASE

        WHEN id = 1 THEN '".$_POST['f1']."'
        WHEN id = 2 THEN '".$_POST['f2']."'
        WHEN id = 3 THEN '".$_POST['f3']."'
        WHEN id = 4 THEN '".$_POST['f4']."'
        WHEN id = 5 THEN '".$_POST['f5']."'
        WHEN id = 6 THEN '".$_POST['f6']."'
        WHEN id = 7 THEN '".$_POST['f7']."'
        WHEN id = 8 THEN '".$_POST['a1']."'
        WHEN id = 9 THEN '".$_POST['a2']."'
        WHEN id = 10 THEN '".$_POST['a3']."'
        WHEN id = 11 THEN '".$_POST['a4']."'
        WHEN id = 12 THEN '".$_POST['a5']."'
        WHEN id = 13 THEN '".$_POST['a6']."'
        WHEN id = 14 THEN '".$_POST['a7']."'
        WHEN id = 15 THEN '".$_POST['em1']."'
        WHEN id = 16 THEN '".$_POST['em2']."'
        WHEN id = 17 THEN '".$_POST['em3']."'
        WHEN id = 18 THEN '".$_POST['em4']."'
        WHEN id = 19 THEN '".$_POST['em5']."'
        WHEN id = 20 THEN '".$_POST['em6']."'
        WHEN id = 21 THEN '".$_POST['em7']."'
        WHEN id = 22 THEN '".$_POST['o1']."'
        WHEN id = 23 THEN '".$_POST['o2']."'
        WHEN id = 24 THEN '".$_POST['o3']."'
        WHEN id = 25 THEN '".$_POST['o4']."'
        WHEN id = 26 THEN '".$_POST['o5']."'
        WHEN id = 27 THEN '".$_POST['o6']."'
        WHEN id = 28 THEN '".$_POST['o7']."'

        END
          WHERE id  in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28)";

        $result = mysqli_query($db, $sql) 
        or die("cannot add audio");

}

   if($submitlog) {

        $sql = "UPDATE `categories` SET `text` = CASE


        WHEN id = 1 THEN '".$_POST['food1']."'
        WHEN id = 2 THEN '".$_POST['food2']."'
        WHEN id = 3 THEN '".$_POST['food3']."'
        WHEN id = 4 THEN '".$_POST['food4']."'
        WHEN id = 5 THEN '".$_POST['food5']."'
        WHEN id = 6 THEN '".$_POST['food6']."'
        WHEN id = 7 THEN '".$_POST['food7']."'
        WHEN id = 8 THEN '".$_POST['action1']."'
        WHEN id = 9 THEN '".$_POST['action2']."'
        WHEN id = 10 THEN '".$_POST['action3']."'
        WHEN id = 11 THEN '".$_POST['action4']."'
        WHEN id = 12 THEN '".$_POST['action5']."'
        WHEN id = 13 THEN '".$_POST['action6']."'
        WHEN id = 14 THEN '".$_POST['action7']."'
        WHEN id = 15 THEN '".$_POST['e1']."'
        WHEN id = 16 THEN '".$_POST['e2']."'
        WHEN id = 17 THEN '".$_POST['e3']."'
        WHEN id = 18 THEN '".$_POST['e4']."'
        WHEN id = 19 THEN '".$_POST['e5']."'
        WHEN id = 20 THEN '".$_POST['e6']."'
        WHEN id = 21 THEN '".$_POST['e7']."'
        WHEN id = 22 THEN '".$_POST['other1']."'
        WHEN id = 23 THEN '".$_POST['other2']."'
        WHEN id = 24 THEN '".$_POST['other3']."'
        WHEN id = 25 THEN '".$_POST['other4']."'
        WHEN id = 26 THEN '".$_POST['other5']."'
        WHEN id = 27 THEN '".$_POST['other6']."'
        WHEN id = 28 THEN '".$_POST['other7']."'

        END
          WHERE id  in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28)";

        $result = mysqli_query($db, $sql) 
        or die("cannot add text!");
   }
?>
