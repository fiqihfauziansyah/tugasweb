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
      <img src="img/gambar1.jpg" alt="Gambar 1">
      <img src="img/gambar2.jpg" alt="Gambar 2">
      <img src="img/gambar3.jpg" alt="Gambar 3">
    </div>
    </div>

	  	
	  </div>	
	</section>
	<div align="center">
		<h2 class="title">Edit POST</h2>
        <?php 

include('koneksi.php');

$idpost=$_GET['p'];

$sql1="select * from post where idpost='$idpost'";
$result1=$db_connect->query($sql1);
while($row=$result1->fetch_assoc()){

$id=$row['idpost']; 
$tanggal=$row['tanggalpost'];
$penulis=$row['penulis']; 
$judul=$row['judul'];
$kategori=$row['idkategori']; 
$isi=$row['isi']; 
}
$user='';
if(isset($_SESSION['user'])) $user=$_SESSION['user']; else $user=$penulis;

$sql2='select * from kategori';
$result2=$db_connect->query($sql2);
?>

<!--form edit post -->

<form action="proseseditpost.php" method="post">
  <table border="1" width="100%">
    <tr>
      <td>Tangal</td><td>:</td>
      <td><input type="text" value="<?php echo date ('Y-m-d H:m:s'); ?>" name="tanggal"></td>
    </tr>
    <tr>
      <td>Penulis</td><td>:</td>
      <td><input type="text" value="<?php echo $user;?>" name="penulis"></td>
    </tr>
    <tr>
      <td>Judul</td><td>:</td>
      <td><input type="text" value="<?php echo $judul; ?> ">
        
      </td>
    </tr>
    <tr>
      <td>Kategori</td><td>:</td>
      <td><select name="idkategori">
        <?php 
        while($row=$result2->fetch_assoc()){
          $k   =$row['namakategori'];
          $idk =$row['idkategori'];
          echo "<option value=$idk>$k</option>";
        }

         ?>
        
      </select></td>
    </tr>
    <tr>
      <td>ISI</td><td>:</td>
      <td><textarea name="isi"><?php echo $isi; ?></textarea></td>
    </tr>
    <tr>
      <td align="center" colspan="3">
        <input type="hidden" name="idpost" value="<?php echo $idpost; ?>">
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