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
    <div class="wrapper row2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <div id="about-us" class="clear">
      <div class="three_quarter first">
        <!-- ####################################################################################################### -->
        <section id="about-intro" class="clear">
          <blockquote>
            <p><span>&ldquo;</span> In odio. Mauris feugiat. Nunc posuere, felis sit amet faucibus convallis, tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Vivamus accumsan. Donec molestie pede vel urna curabitur eget sem ornare felis.</p>
          </blockquote>
          <p class="right">&quot;Vivamus accumsan / Company Director&quot;</p>
          <div class="panorama"><img class="imgholder" src="img/fiki.jpg" alt=""></div>
          <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </section>
        <!-- ####################################################################################################### -->
        <section id="skillset" class="clear">
          <h1>Indonectetus facilis</h1>
          <article class="clear">
            <div class="fl_left"><img src="images/demo/125x125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              
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