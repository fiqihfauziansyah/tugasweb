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
  		<button class="dropbtn" ><a href="index.php">HOME</a></button>
  		 </div>
		</div>

		<div class="dropdown">
  		<button class="dropbtn">PROFILE</button>
  		 <div class="dropdown-content">
    		<a href="aboutus.php">About Us</a>
    		<a href="gallery.php">Gallery</a>
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
    <?php 
            include ('konten_post.php');
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