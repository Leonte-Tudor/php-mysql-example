<!DOCTYPE html>
<?php

//Valori predefinite pentru username si password

$user = 'admin';

$pass='1234';



//daca cookie-ul pentru username si passowrd este setat
//daca username-ul inregistrat in cookie-uri e egal cu username predefinit
//daca password-ul inregistrat in cookie-uri e egal cu passwordul predefinit

if( isset($_COOKIE['username'])
&& isset($_COOKIE['password'])
&& ($_COOKIE['username'] == $user)
&& ($_COOKIE['password'] == md5($pass))
){

//redirect catre o alta pagina daca se intrunesc toate conditiile
    header("Location: admin_page.php");
//header("Location: process_login.php");

}

else{


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <meta charset="UTF-8">
    <title> Your page</title>
    <!--- <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"> -->
</head>
<body>
<div class="main-container">

    <div class="nav-container">

        <ul>

            <li><a href="index.php">~$Home</a></li>
            <li><a href="about.php">~$About</a></li>
            <li><a href="contact.php">~$Contact</a></li>
            <li> <a href="user_gallery.php">~$Gallery</a> </li>
            <li><button class="log-in-button"><a href="login.php" class="log-in-text">~$Login</a></button></li>

        </ul>

    </div>

    <hr><hr><hr>


    <div class="center-stuff">

        <div class="login-center">

            <h1>Log In</h1>

            <hr>

            <form name="login" action="login_proccessing.php" method="post">

                <label>Username:</label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <br><br>

                <label>Password:</label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <br><br>


                <div><label>Remember me:</label> <input type="checkbox" name="rememberme" value="1"></div>

                <br>

                <input class="log-in-button" type="submit" name="submit" value="Login">



        </div>

    </div>




</div><!-- main container -->

</body>

</html>
<?php
}
?>