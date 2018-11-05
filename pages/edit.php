<!DOCTYPE html>
<html>
<head>
    <script>
    <?php
    require("../php/edit.php");
    require("../php/text.php");
    require("../php/audios.php");
    ?>
    </script>
    <title>Edit Content.</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/editstyle.css" type="text/css"/>
    <link rel="stylesheet" href="../css/enjoycss.css" type="text/css"/>
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



<h2>Edit contents of categories
<a type="button" href="editc.php" id="button" class="enjoy-css" style="text-decoration: none;" >Edit Categories</a>
</h2>


<form name="edit" method="post" class="form">


<!--------------      FIRST COLUMN BEGIN      --------------->
<div class="col-3">
    

<p><?php textOut(29); ?> One:
<input class="enjoy-css-t" type="text" name="food1" value="<?php textOut(1); ?>"></p>
<input class="aud" type='text' id="f1" name="f1" value="<?php audioOut(1); ?>" />


<p> <?php textOut(29); ?> Two:
<input class="enjoy-css-t" type="text" name="food2" value="<?php textOut(2); ?>"></p>
<input class="aud" type='text' name="f2" value="<?php audioOut(2); ?>" />


<p><?php textOut(29); ?> Three:
<input class="enjoy-css-t" type="text" name="food3" value="<?php textOut(3); ?>"></p>
<input class="aud" type='text' name="f3" value="<?php audioOut(3); ?>" />


<p><?php textOut(29); ?> Four:          
<input class="enjoy-css-t" type="text" name="food4" value="<?php textOut(4); ?>"></p>
<input class="aud" name="f4" value="<?php audioOut(4); ?>" />


<p><?php textOut(29); ?> Five:           
<input class="enjoy-css-t" type="text" name="food5" value="<?php textOut(5); ?>"></p>
<input class="aud" name="f5" value="<?php audioOut(5); ?>" />


<p><?php textOut(29); ?> Six:              
<input class="enjoy-css-t" type="text" name="food6" value="<?php textOut(6); ?>"></p>
<input class="aud" name="f6" value="<?php audioOut(6); ?>" />


<p><?php textOut(29); ?> Seven:       
<input class="enjoy-css-t" type="text" name="food7" value="<?php textOut(7); ?>"></p>
<input class="aud" name="f7" value="<?php audioOut(7); ?>" />

</div>

<!--------------      SECOND COLUMN BEGIN      --------------->

<div class="col-3">
    
    
<p><?php textOut(30); ?> One:          
<input class="enjoy-css-t" type="text" name="action1" value="<?php textOut(8); ?>"></p>
<input class="aud" type='text' name="a1" value="<?php audioOut(8); ?>" />

    
<p><?php textOut(30); ?> Two:          
<input class="enjoy-css-t" type="text" name="action2" value="<?php textOut(9); ?>"></p>
<input class="aud" type='text' name="a2" value="<?php audioOut(9); ?>" />

    
<p><?php textOut(30); ?> Three:       
<input class="enjoy-css-t" type="text" name="action3" value="<?php textOut(10); ?>"></p>
<input class="aud" type='text' name="a3" value="<?php audioOut(10); ?>" />

    
<p><?php textOut(30); ?> Four:          
<input class="enjoy-css-t" type="text" name="action4" value="<?php textOut(11); ?>"></p>
<input class="aud" type='text' name="a4" value="<?php audioOut(11); ?>" />

    
<p><?php textOut(30); ?> Five:           
<input class="enjoy-css-t" type="text" name="action5" value="<?php textOut(12); ?>"></p>
<input class="aud" type='text' name="a5" value="<?php audioOut(12); ?>" />

    
<p><?php textOut(30); ?> Six:              
<input class="enjoy-css-t" type="text" name="action6" value="<?php textOut(13); ?>"></p>
<input class="aud" type='text' name="a6" value="<?php audioOut(13); ?>" />

    
<p><?php textOut(30); ?> Seven:       
<input class="enjoy-css-t" type="text" name="action7" value="<?php textOut(14); ?>"></p>
<input class="aud" type='text' name="a7" value="<?php audioOut(14); ?>" />

</div>

<!--------------      THIRD COLUMN BEGIN      --------------->

<div class="col-3">
    
    
<p><?php textOut(31); ?> One:          
<input class="enjoy-css-t" type="text" name="e1" value="<?php textOut(15); ?>"></p>
<input class="aud" type='text' name="em1" value="<?php audioOut(15); ?>" />

    
<p><?php textOut(31); ?> Two:          
<input class="enjoy-css-t" type="text" name="e2" value="<?php textOut(16); ?>"></p>
<input class="aud" type='text' name="em2" value="<?php audioOut(16); ?>" />

    
<p><?php textOut(31); ?> Three:       
<input class="enjoy-css-t" type="text" name="e3" value="<?php textOut(17); ?>"></p>
<input class="aud" type='text' name="em3" value="<?php audioOut(17); ?>" />

    
<p><?php textOut(31); ?> Four:          
<input class="enjoy-css-t" type="text" name="e4" value="<?php textOut(18); ?>"></p>
<input class="aud" type='text' name="em4" value="<?php audioOut(18); ?>" />

    
<p><?php textOut(31); ?> Five:           
<input class="enjoy-css-t" type="text" name="e5" value="<?php textOut(19); ?>"></p>
<input class="aud" type='text' name="em5" value="<?php audioOut(19); ?>" />

    
<p><?php textOut(31); ?> Six:               
<input class="enjoy-css-t" type="text" name="e6" value="<?php textOut(20); ?>"></p>
<input class="aud" type='text' name="em6" value="<?php audioOut(20); ?>" />


<p><?php textOut(31); ?> Seven:        
<input class="enjoy-css-t" type="text" name="e7" value="<?php textOut(21); ?>"></p>
<input class="aud" type='text' name="em7" value="<?php audioOut(21); ?>" />

    
</div>

<!--------------      FOURTH COLUMN BEGIN     --------------->

<div class="col-3">
    
    
<p><?php textOut(32); ?> One:          
<input class="enjoy-css-t" type="text" name="other1" value="<?php textOut(22); ?>"></p>
<input class="aud" type='text' name="o1" value="<?php audioOut(22); ?>" />

    
<p><?php textOut(32); ?> Two:          
<input class="enjoy-css-t" type="text" name="other2" value="<?php textOut(23); ?>"></p>
<input class="aud" type='text' name="o2" value="<?php audioOut(23); ?>" />

    
<p><?php textOut(32); ?> Three:       
<input class="enjoy-css-t" type="text" name="other3" value="<?php textOut(24); ?>"></p>
<input class="aud" type='text' name="o3" value="<?php audioOut(24); ?>" />

    
<p><?php textOut(32); ?> Four:          
<input class="enjoy-css-t" type="text" name="other4" value="<?php textOut(25); ?>"></p>
<input class="aud" type='text' name="o4" value="<?php audioOut(25); ?>" />

    
<p><?php textOut(32); ?> Five:            
<input class="enjoy-css-t" type="text" name="other5" value="<?php textOut(26); ?>"></p>
<input class="aud" type='text' name="o5" value="<?php audioOut(26); ?>" />

    
<p><?php textOut(32); ?> Six:               
<input class="enjoy-css-t" type="text" name="other6" value="<?php textOut(27); ?>"></p>
<input class="aud" type='text' name="o6" value="<?php audioOut(27); ?>" />

    
<p><?php textOut(32); ?> Seven:         
<input class="enjoy-css-t" type="text" name="other7" value="<?php textOut(28); ?>"></p>
<input class="aud" type='text' name="o7" value="<?php audioOut(28); ?>" />

    
</div>

<input name="submitlog" class="enjoy-css" id="submit" type="submit"  value="Submit">


<!--------------      FORM ENDING     --------------->


</form>
    

</div>

    <footer>
    Designed By Ali Sumait&copy; 2017
    </footer>
</body>

</html>