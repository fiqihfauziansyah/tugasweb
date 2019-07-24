 <?php 
 session_start();
include "koneksi.php";

$idpost		=$_POST['idpost'];
$tanggal	=$_POST['tanggal'];
$penulis	=$_POST['penulis'];
$judul		=$_POST['judul'];
$idkategori	=$_POST['idkategori'];
$isi		=$_POST['isi'];
 
$sql="update post set tanggalpost='$tanggal',penulis='$penulis',judul='$judul', idkategori='$idkategori', isi='$isi' where idpost='$idpost' ";

if ($db_connect->query($sql) === TRUE) {
	header("location: tampilpost.php");
}	else{
	echo "error: " .$sql . "<br>" . $db_connect->error;
}

?>
