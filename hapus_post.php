<?php 
include 'koneksi.php';

$idpost=$_GET['p'];

$sql="delete from post where idpost='$idpost'";

if($db_connect->query($sql) == TRUE)
{
	header("location:tampilpost.php");
 }
 else{
	echo "error: " .$sql . "<br>" . $db_connect->error;
}
 ?>
