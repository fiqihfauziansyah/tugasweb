<?php 
  session_start();
  $user = $_SESSION['username'];
  $level = $_SESSION['level'];
echo " Login Sebagai $user";
?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-widht">
	<title>Html"an</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>
  	<header>
  		<div class="container">
		  <div id="logo">
		  	<h1> UNSADA WEB DESAIN</h1>
		 </div>
		 <div align="right">
		 	<a href="login/login.php">login</a>
		 </div>
		</div> 
  	</header>

  	<section id="login">
	   	<div class="dropdown">
  		<button class="dropbtn">Dropdown</button>
  		 <div class="dropdown-content">
    		<a href="#">Link 1</a>
    		<a href="#">Link 2</a>
    		<a href="#">Link 3</a>
  		 </div>
		</div>

		<div class="dropdown">
  		<button class="dropbtn">Dropdown</button>
  		 <div class="dropdown-content">
    		<a href="#">Link 1</a>
    		<a href="#">Link 2</a>
    		<a href="#">Link 3</a>
  		 </div>
		</div>

		 
	</section>

	<div class=malasngoding-slider>
    <div class=isi-slider>
      <img src="img/gambar1.png" alt="Gambar 1">
      <img src="img/gambar2.png" alt="Gambar 2">
      <img src="img/gambar3.png" alt="Gambar 3">
    </div>
    </div>

	  	
	  </div>	
	</section>
	<div align="center">
		<?php 
include ('koneksi.php');
$post=0;
if (isset($_GET['post'])) 
$post=$_GET['post']; 
$sql="select a.*,b.namakategori
        from post a
        join kategori b on a.idkategori=b.idkategori
         where idpost='$post'";
$result=$db_connect -> query($sql);

echo "<table border=1>";
$no=0;
while ($row=$result->fetch_assoc()) {
$no=0;
$idpost=$row['idpost'];
$tanggal=$row['tanggalpost'];
$penulis=$row['penulis'];
$judul  =$row['judul'];
$kategori=$row['idkategori'];
$namakategori=$row['namakategori'];
$isi_full=$row['isi'];
$isi_sebagian=substr($row['isi'],1,100);

echo "
<tr>
  <td>
    <small>Tanggal dipost : $tanggal, penulis : $penulis judul : $judul</small>
  </td>
</tr>
<tr>
  <td>
    <small>kategori : $namakategori</small>
  </td>
</tr>
<tr>
  <td>$isi_full</td>
</tr>
<tr>
  <td>idpost: $idpost</td>
</tr>

";
}
echo "</table>";
echo "komentar pengunjung : <br>";
include ('comment_post.php');

echo "<a href=index.php>HOME</a>";
 ?>
 
	</div>
	<footer>
	  <p>UNSADA WEB DESAIN, copyright &copy; 2019</p>	
	    <p class="fl_right"><?php 
            include ("counter.php");
            echo "$kunjungan[0] kali kunjungan</p>";
            ?></p>

	</footer>
  </body>
</html>