<!DOCTYPE html>
<html>
<head id="hea">
   <script>
        <?php
        require("../php/audios.php");
        require("../php/text.php");
        ?>
    </script>
    <title>StrokeTalk | Communicate.</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" class="css"  href="../css/stylemp.css" type="text/css"/>
    <link rel="stylesheet" class="css"  href="../css/emergency.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:800" class="css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" class="css" rel="stylesheet">
    <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" class="css" type="text/css">
    <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" class="css" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet prefetch" class="css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" type="text/css">
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='../javascript/jquery.ba-hashchange.min.js'></script>
    <script type='text/javascript' src='../javascript/dynamicpage.js'></script>

    <script>
        $(document).ready(function(){
        $('#editing').click(function(event){
        event.stopPropagation();
        });
        });
    </script>
     
    </head>
     
<body>
    
    <span id="page-wrap">
    
     <header>
       
        <span class="logotext" onclick="location.href='mainpage.php'">
                
            <a href="../php/logout.php" id="logout">Log out</a>
        
            <img src="../pictures/whitelogo.png"/>
       
            <img id="editing" src="../pictures/edit.png"/>
            
        </span>
        
    </header>
        
    <nav style= "display: inline" id="main-buttons">
        
        <audio id="audio18" src="<?php audioOut(18); ?>" class="css"></audio>
        
        <audio id="audio19" src="<?php audioOut(19); ?>" class="css"></audio>
        
        <audio id="audio20" src="<?php audioOut(20); ?>" class="css"></audio>
        
        <audio id="audio21" src="<?php audioOut(21); ?>" class="css"></audio>
        
        
<a onclick="playa(audio18)" id="div1" class="buttons">
<p class="cat">
<?php textOut(18); ?>
</p>
</a>
        
<a  onclick="playa(audio19)" id="div2" class="buttons">
<p class="cat">
<?php textOut(19); ?>
</p>
</a>
        
<a onclick="playa(audio20)" id="div3" class="buttons">
<p class="cat">
<?php textOut(20); ?>
</p>
</a>
        
<a onclick="playa(audio21)" id="div4" class="buttons" style="background-color: #EE8BFF">
<p class="cat">
<?php textOut(21); ?>
</p>
</a>
        
    </nav>
        </span>
</body>

</html>