 <?php 
session_start();
include "koneksi.php";

$tanggalpost=date("Y-m-d H:m:s");
$penulis	=$_SESSION['username'];
$judul		=$_POST['judul'];
$idkategori	=$_POST['idkategori'];
$isi		=$_POST['isi'];
 
$sql="insert into post(tanggalpost,penulis,judul,idkategori,isi)
	values ('$tanggalpost','$penulis','$judul','$idkategori','$isi')";

if ($db_connect->query($sql) === TRUE) {
	header("location: tampilpost.php");
}
	else{
	echo "error: " .$sql . "<br>" . $db_connect->error;
}

?>
