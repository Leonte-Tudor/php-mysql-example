<?php
//require_once "connection.php";
$con=mysqli_connect('localhost', 'root', 'phpissosecure', 'images') or die("Failed to connect: ". mysqli_error($con));
$msg="";
if(isset($_POST['upload'])){
    $target="./images/". md5(uniqid(time())). basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $sql="INSERT INTO images(title, image)VALUES('$text','$target')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:index.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}