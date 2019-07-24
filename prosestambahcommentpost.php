<?php 
session_start();
include('koneksi.php');
$nama			=$_POST['nama'];
$tanggal_comment=$_POST['tanggal_comment'];
$idpost			=$_POST['idpost'];
$comment 		=$_POST['comment'];

$sql="insert into comments(nama,tanggal_comment,idpost,comment)
	values ('$nama','$tanggal_comment','$idpost','$comment')";

	if ($db_connect->query($sql) === TRUE) {
	header("location: index.php");
}
	else{
	echo "error: " .$sql . "<br>" . $db_connect->error;
}

 ?>