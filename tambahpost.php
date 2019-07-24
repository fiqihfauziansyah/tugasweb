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
    <h2 class="title">tambahpost</h2>
        <?php 

include('koneksi.php');

// $user='';
// if(isset($_SESSION['user'])){
//  $user=$_SESSION['user'];
// }
  
$sql='select * from kategori';
$result=$db_connect->query($sql);
 ?>

 <form action="prosestambahpost.php" method="post">
  <table class="table1">
    <tr>
      <td>tanggal</td> <td>:</td>
     <td>
      <?php echo date('Y-m-d H:m:s'); ?>
      <input type="hidden" value="<?php echo date('Y-m-d H:m:s'); ?>" name="tanggal">
     </td>
    </tr>
    <tr>
      <td>penulis</td><td>:</td>
      <td>
        <?= $_SESSION['username']; ?>
        <input type="hidden" value="<?php echo $user; ?>" name="penulis">
      </td>
    </tr>
    <tr>
      <td>judul</td><td>:</td>
      <td>
        <input type="text" name="judul">
      </td>
    </tr>
    <tr>
      <td>kategori</td><td>:</td>
      <td>
        <select name="idkategori">
        <?php while($row=$result->fetch_assoc()){
            $k  =$row['namakategori'];
            $idk  =$row['idkategori'];
          echo "<option value=$idk>$k</option>";  
        } 
        ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>isi</td><td>:</td>
      <td><textarea name="isi"></textarea></td>
    </tr>
    <tr>
      <td align="center" colspan="3">
        <input type="submit">
      </td>
    </tr>
  </table>
 </form>

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