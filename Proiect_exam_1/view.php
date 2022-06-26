<?php
//include connection file
//include 'connection.php';
$con=mysqli_connect('localhost', 'root', 'phpissosecure', 'images') or die("Failed to connect: ". mysqli_error($con));
$sql="SELECT * FROM images WHERE ID='{$_GET['id']}'";
$query=  mysqli_query($con,$sql)or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
echo "Nume: ".$row["title"]."<br/>";
echo "Imagine: <img src=".$row['image']."><br/>";
?>
<a href="index.php">Back</a>
