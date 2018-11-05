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
        <link rel="stylesheet" class="css"  href="../css/stylemp2.css" type="text/css"/>
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

</head>

<body>

<span id="page-wrap">

    <header>
    

<!-----  FUNCTION TO PREVENT CLICK EVENT ON EDIT TO PROPAGATE  ----->
    
<script type="application/javascript"> 
    $(document).ready(function(){
    $('#editing').click(function(event){
    event.stopPropagation();});
    });
</script>
    
<!---------------------------------------------------------------->
    
    
<span class="logotext" onclick="location.href='mainpage.html'">

    <a href="../php/logout.php" id="logout">Log out</a>
    <img src="../pictures/whitelogo.png"/>
    <img id="editing" src="../pictures/edit.png"/>
      
</span>

    </header>
    
    
<nav style= "display: inline" id="main-buttons">

    <audio id="audio1" src="<?php audioOut(1); ?>" class="css"></audio>

    <audio id="audio2" src="<?php audioOut(2); ?>" class="css"></audio>

    <audio id="audio3" src="<?php audioOut(3); ?>" class="css"></audio>


<a onclick="playa(audio1)" id="div1" class="buttons">
<p class="cat">
<?php textOut(1); ?>
</p>
</a>
    
<a onclick="playa(audio2)" id="div2" class="buttons">
<p class="cat">
<?php textOut(2); ?>
</p>
</a>
    
<a onclick="playa(audio3)" id="div3" class="buttons">
<p class="cat">
<?php textOut(3); ?>
</p>
</a>
    
    
<a href="food2.php" id="div4" class="buttons">
<p class="cat">More..</p> </a>

</nav>
    
</span>
     
</body>

</html>