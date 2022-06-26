<?php


//loginul predefenit
$user='admin';
$pass='1234';

$welcome_msg='';

$cookie_msg='';

if(
    (isset($_COOKIE['username']))
    && (isset($_COOKIE['password']))
){

    if(
        ($_COOKIE['username'] != $user) ||
        ($_COOKIE['password'] != md5($pass))
    ){

        echo "wrong cookie :(( ";

    }

    else {

        //daca totul este bine (a fost activat remember me-ul), il duce la pagina principala

        $welcome_msg= 'Welcome back ' .$_COOKIE['username'];
        $cookie_msg='Cookie-ul a fost setat!';

    }
}

else{

    // in cazul in care nu s-a activat remember me-ul se duce la index.php
    // nu asta vrem. Pur si simplu logheaza omu intr-o sesiune si gen aia e

    //header("Location: index.php");
    $welcome_msg= 'Welcome back '.$user;
    $cookie_msg='Nu ai optat pentru remember me!';

}


?>
<!DOCTYPE html>

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

            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li> <a href="user_gallery.php">Gallery</a> </li>
            <li><button class="log-in-button"><a href="login.php" class="log-in-text">Login</a></button></li>

        </ul>

    </div>




    <div class="center-stuff">

        <hr>
        <h1>Your page</h1>

        <hr>
        <p><?php echo $welcome_msg; ?></p>

        <hr><hr>

        <p><?php echo $cookie_msg; ?></p>

        <hr><hr>

        <button class="sign-up-button"><a href='logout.php'>logout</a></button>

        <hr>

        <button class="sign-up-button"><a href='admin_gallery.php'>Change up your database</a></button>




    </div>

    <hr>

    <div class="footer-container">

        <ul>

            <li><a href="#conditions">Termeni si Conditii</a></li>
            <li><a href="#something">Protectia datelor personale</a></li>

        </ul>

    </div>

</div><!-- main container -->

</body>

</html>
