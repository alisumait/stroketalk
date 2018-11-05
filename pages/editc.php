<!DOCTYPE html>
<html>
<head>
    <script>
        <?php
        require("../php/editc.php");
        require("../php/text.php");
        ?>
        </script>
    <title>StrokeTalk | Communicate.</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/enjoycss.css" type="text/css"/>
    <link rel="stylesheet" href="../css/editcstyle.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" type="text/css">
    <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" type="text/css">
    <script src='../javascript/jquery.colorbox.js'></script>
	<script src='../javascript/jquery-3.2.1.js'></script>
	<script src='../javascript/jquery.colorbox-min.js' type="text/javascript"></script>
    </head>
    
<body>
   
    <div class="page-wrap">
           
        <h2>Edit Categories</h2>
        
        <form name="edit" method="post" class="formc">
            
                
            <p>Category One:          
            <input class="enjoy-css-t space" type="text" name="cat1" value="<?php textOut(29); ?>"></p>
                
         <br>
            <p>Category Two:           
            <input class="enjoy-css-t space" type="text" name="cat2" value="<?php textOut(30); ?>"></p>
       
                    <br>
     
            <p>Category Three:       
            <input class="enjoy-css-t space" type="text" name="cat3" value="<?php textOut(31); ?>"></p>
             
                 <br>

            <p>Category Four:          
            <input class="enjoy-css-t space" type="text" name="cat4" value="<?php textOut(32); ?>"></p>
            

            
            <br> 
                <input name="submitlog" class="enjoy-css" id="submit" type="submit"  value="Submit">

        </form>
        

    </div>
     
    
    <footer>
    Designed By Ali Sumait&copy; 2017
    </footer>
    
</body>

</html>