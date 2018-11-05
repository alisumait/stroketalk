<html>
<head>
    <title>StrokeTalk | Communicate.</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/enjoycss.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" type="text/css">
    <link async href="http://fonts.googleapis.com/css?family=Advent%20Pro" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" type="text/css">
    <script src='jquery.colorbox.js' type="text/javascript"></script>
	<script src='jquery-3.2.1.js' type="text/javascript"></script>
	<script src='jquery.colorbox-min.js' type="text/javascript"></script>
    </head>
    
<body>
    
    <header>
        
        <div class="logotext">
            
            <a href="index.php" style="color: black; text-decoration: none">
            <img src="pictures/brain.png"/>
            <h1>StrokeTalk</h1>
            </a>
        </div>
        
        <h3>Communicate easily.</h3>
        
    </header>
    
    <div class="page-wrap">
        <div class="error">       
            <?php
            require("php/login.php");
            ?>
        </div>
        
    <div class="left-main-content">
        <h2>Log in to your account</h2>
            <form method="post">
                <p>Username</p>
                <input class="enjoy-css-t" type="text" name="userlog">
                <br>
                <p>Password</p>
                <input class="enjoy-css-t" type="password" name="passlog">
                <br>
                <br>
                <input name="submitlog" class="enjoy-css" type="submit"  value="Sign in">
            </form>
    </div>
        
    <div class="right-main-content">
    
        <h2>Sign up</h2>
            <form method="post">
                <p>Username</p>
                <input name= "username" id="username" class="enjoy-css-t" type="text" value="<?php 
                do
                {echo isset($_POST['username']) ? $_POST['username'] : '';}
                while(false);
                ?>">
                <br>
                <p>Password</p>
                <input name="password" class="enjoy-css-t" type="password" id="password" value="<?php 
                do
                {echo isset($_POST['password']) ? $_POST['password'] : '';}
                while(false);
                ?>">
                <br>
                <p>Email</p>
                <input name="email" class="enjoy-css-t" type="email" id="email">
                <br>
                <br>
                <input name="submit" class="enjoy-css" type="submit"  value="Sign up">
            </form>
        
    </div>
        
        </div>
    
    <footer>
    Designed By Ali Sumait&copy; 2017
    </footer>
    
</body>

</html>