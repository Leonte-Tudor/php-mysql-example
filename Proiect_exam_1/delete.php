<?php
//include connection file
//include "connection.php";
$con=mysqli_connect('localhost', 'root', 'phpissosecure', 'images') or die("Failed to connect: ". mysqli_error($con));


$sql1="SELECT * FROM images WHERE id='{$_GET['id']}'";
$query=mysqli_query($con, $sql1)or die(mysqli_error($con));

$row=mysqli_fetch_array($query);

unlink($row["image"]);

$sql2="DELETE FROM images WHERE id='{$_GET['id']}'";
$query=mysqli_query($con, $sql2)or die(mysqli_error($con));

header('location:index.php');



?>