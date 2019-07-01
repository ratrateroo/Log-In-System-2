<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="styles/materialize.min.css"  media="screen,projection"/>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="img/Hex Logo 3.0.png" alt="logo">
            </a>

            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="#" >Portfolio</a></li>
                <li><a href="#" >About</a></li>
                <li><a href="#" >Contact</a></li>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Sign up</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>


           
        </nav>
    </header>