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
  		<button class="dropbtn"><a href="index.php">HOME</a></button>
		</div>

		<div class="dropdown">
  		<button class="dropbtn">PROFILE</button>
  		 <div class="dropdown-content">
    		<a href="#">About Us</a>
    		<a href="#">Galley</a>
    		<a href="#">Link 3</a>
  		 </div>
		</div>


    <div class="dropdown">
      <button class="dropbtn">MENU ADMIN</button>
       <div class="dropdown-content">
        <a href="tambahpost.php">Tambah Postingan</a>
        <a href="tampilpost.php">Tampil dan Edit Post</a>
        <a href="#">Link 3</a>
       </div>
    </div>
		 
	</section>

	<div class=malasngoding-slider>
    <div class=isi-slider>
      <img src="img/gambar1.jpg" alt="Gambar 1">
      <img src="img/gambar2.jpg" alt="Gambar 2">
      <img src="img/gambar3.jpg" alt="Gambar 3">
    </div>
    </div>

	  	
	  </div>	
	</section>
    <div align="center">
    <!-- tampil post -->
    <?php 

include('koneksi.php');

$sql  ="select * from post order by tanggalpost";
$result =$db_connect->query($sql);

echo "<table border=4 >";
echo "<tr>
    <th>No</th>
    <th>Id post</th>
    <th>Tanggal post</th>
    <th>Penulis</th>
    <th>judul</th>
    <th>Isi</th>
    <th>idkategori</th>
    <th>AKSI</th>
     </tr>";
$no=0;
while($row=$result->fetch_assoc())
{
$no++;
$idpost     =$row['idpost'];
$tanggalpost=$row['tanggalpost'];
$penulis  =$row['penulis'];
$judul      =$row['judul'];
$isi    =$row['isi'];
$idkategori =$row['idkategori'];
echo "<tr>
    <td>$no</td>
    <td>$idpost</td>
    <td>$tanggalpost</td>
    <td>$penulis</td>
    <td>$judul</td>
    <td>$isi</td>
    <td>$idkategori</td>
    <td>
      <a href='edit_post.php?p=$idpost'>Edit</a>
       - 
      <a href='hapus_post.php?p=$idpost'>Hapus</a> 
    </td>
    </tr>";
echo "</table";

} 
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