<?php

//valorile definite
$user='admin';
$pass='1234';



if(
    (isset($_POST['username']))
    && (isset($_POST['password']))

){


    if(
        ($_POST['username'] == $user)
        && ($_POST['password'] == $pass)
    ){

        if( isset($_POST['rememberme']) ){

            //daca checkbox-ul remember me este checkuit

            setcookie('username', $_POST['username'], time() + 606024365);
            setcookie('password', md5($_POST['password']), time() + 606024365);
            echo "Remember me cookie set!";

        }

        else {

            //daca nu comentez astea mereu se face remember me automat

            //setcookie('username', $_POST['username'], false);
            //setcookie('password', md5($_POST['password']), false);
            echo "remember me cookie not set!";
        }

        header("Location: admin_page.php");
    }

    else{

        echo "username/password invalid";

    }

}

else {

    echo "You must suppy a username and password";

}

?>