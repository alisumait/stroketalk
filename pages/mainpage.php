<html>
<head id="hea">
        <script>
        <?php
        session_start();
        if(!$_SESSION['userlog'])
        {header("Location:../index.php");}
        $_SESSION['userlog']=$myusername;
        require("../php/usersdb.php");
            require("../php/audios.php");
            require("../php/text.php");
            ?>
        </script>

        <title>StrokeTalk | Communicate.</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" class="css"  href="../css/stylemp.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:800" class="css" rel="stylesheet"> 
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" class="css" rel="stylesheet">
        <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" class="css" type="text/css">
        <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" class="css" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet prefetch" class="css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" type="text/css">
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src='jquery.colorbox.js' type="text/javascript" class="css"></script>
        <script src='jquery-3.2.1.js' type="text/javascript" class="css"></script>

        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        <script type='text/javascript' src='../javascript/jquery.ba-hashchange.min.js'></script>
        <script type='text/javascript' src='../javascript/dynamicpage.js'></script>
        <script src='../javascript/jquery.colorbox-min.js' type="text/javascript"></script>
        <script src="../javascript/util.js" class="css"></script>
            

        <a class='gallery' href='../pictures/Catpic.png'></a>
        <a class='gallery' href='../pictures/Mainpic.png'></a>
        <a class='gallery' href='../pictures/Editpic.png'></a>

    </head>
    
<body>

    <span id="page-wrap">

        <header>

        <script>
            $(document).ready(function(){
            $('#editing').click(function(event){
            window.open(
            'edit.php',
            '_blank' // <- This is what makes it open in a new window.
            );
            event.stopPropagation();
            });
            });
        </script>

        <script>
            $(document).ready(function(){
            $('#sub').click(function(event){
            $('a.gallery').colorbox({open:true , opacity:0.5 , rel:'group1'});
            event.stopPropagation();
            });
            });
        </script>
            

    <span class="logotext" id="home" onclick="location.href='mainpage.php'">

        <a href="../php/logout.php" id="logout">Log out</a>


        <img src="../pictures/whitelogo.png"/>
        <a id="sub">Check instruction</a>

        <img id="editing" src="../pictures/edit.png"/>
        
    </span>

</header>


<nav style= "display: inline" id="main-buttons">

    
<a href="food.php" id="div1" class="buttons">
<p class="cat">
<?php textOut(29); ?></p> </a>

<a href="action.php" id="div2" class="buttons">
<p class="cat">
<?php textOut(30); ?></p> </a>

<a href="emergency.php" id="div3" class="buttons">
<p class="cat">
<?php textOut(31); ?></p> </a>

<a href="other.php" id="div4" class="buttons">
<p class="cat">
<?php textOut(32); ?></p> </a>

    
</nav>
        
    </span>
    
</body>


</html>