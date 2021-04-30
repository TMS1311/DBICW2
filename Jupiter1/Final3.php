<!DOCTYPE html>
<html>
<title>The Inevitable</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Group 4</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Tables">Tables <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_Category.php" class="w3-bar-item w3-button">Category Table</a>
      <a href="DBI_City.php" class="w3-bar-item w3-button">City Table</a>
      <a href="DBI_actor.php" class="w3-bar-item w3-button">Actor Table</a>
      <a href="DBI_address.php" class="w3-bar-item w3-button">Address Table</a>
      <a href="DBI_country.php" class="w3-bar-item w3-button">Country Table</a>
      <a href="DBI_customer.php" class="w3-bar-item w3-button">Customer Table</a>
      <a href="DBI_film.php" class="w3-bar-item w3-button">Film Table</a>
      <a href="DBI_film_actor.php" class="w3-bar-item w3-button">Film_Actor Table</a>
      <a href="DBI_film_category.php" class="w3-bar-item w3-button">Film_Category Table</a>
      <a href="DBI_film_rental.php" class="w3-bar-item w3-button">Film_Rental Table</a>
      <a href="DBI_inventory.php" class="w3-bar-item w3-button">Inventory Table</a>
      <a href="DBI_language.php" class="w3-bar-item w3-button">Language Table</a>
      <a href="DBI_payment.php" class="w3-bar-item w3-button">Payment Table</a>
      <a href="DBI_rental.php" class="w3-bar-item w3-button">Rental Table</a>
      <a href="DBI_staff.php" class="w3-bar-item w3-button">Staff Table</a>
      <a href="DBI_store.php" class="w3-bar-item w3-button">Store Table</a>
    </div>
  </div>
  <a href="DBI_update.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Update</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Tables">Insert <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_insertmanual.php" class="w3-bar-item w3-button">Manual Insert</a>
      <a href="DBI_insert_actor.php" class="w3-bar-item w3-button">Auto Insert</a>
    </div>
  </div>
  <a href="DBI_deletemanual.php" class="w3-bar-item w3-button">Delete</a>
  <a href="DBI_search.php" class="w3-bar-item w3-button">Search</a>

 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium" style="width:100%">
    <a href="#team" class="w3-bar-item w3-button">About Us</a>  
  <div class="w3-dropdown-hover">
  <button class="w3-button">Tables<i class="fa fa-caret-down"></i></button>
  <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_Category.php">Category Table</a>
      <a href="DBI_City.php">City Table</a>
      <a href="DBI_actor.php" >Actor Table</a>
      <a href="DBI_address.php">Address Table</a>
      <a href="DBI_country.php">Country Table</a>
      <a href="DBI_customer.php">Customer Table</a>
      <a href="DBI_film.php">Film Table</a>
      <a href="DBI_film_actor.php">Film_Actor Table</a>
      <a href="DBI_film_category.php">Film_Category Table</a>
      <a href="DBI_film_rental.php">Film_Rental Table</a>
      <a href="DBI_inventory.php">Inventory Table</a>
      <a href="DBI_language.php">Language Table</a>
      <a href="DBI_payment.php">Payment Table</a>
      <a href="DBI_rental.php">Rental Table</a>
      <a href="DBI_staff.php">Staff Table</a>
      <a href="DBI_store.php">Store Table</a>
  </div>
</div>
    <a href="DBI_update.php" class="w3-bar-item w3-button">Update</a>
	<div class="w3-dropdown-hover">
  <button class="w3-button">Insert<i class="fa fa-caret-down"></i></button>
  <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_insertmanual.php" class="w3-bar-item w3-button">Manual Insert</a>
      <a href="DBI_insert_actor.php" class="w3-bar-item w3-button">Auto Insert</a>
  </div>
</div>
    <a href="DBI_deletemanual.php" class="w3-bar-item w3-button">Delete</a>
    <a href="DBI_search.php" class="w3-bar-item w3-button">Search</a>
  </div>
</div>


<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="https://wallpaperaccess.com/full/959294.jpg" alt="Thanos" style="width:100%;max-height:50%;background-size:cover">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <div class="w3-button w3-xlarge w3-theme w3-hover-teal" >The Inevitable</div>
  </div>
</div>

<!-- Team Container -->

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>ABOUT US</h2>
<p>Our Team</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/837179989320925194/837180317747380244/IMG_20200207_132150.jpg" alt="Remus Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Remus Wong Jia Xuan</h3>
  <p>Group Leader</p>
</div>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/692232236161826866/837356062273306694/Screenshot_20210411-001715_Instagram.jpg" alt="Chow Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Chow Yuan Yu</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/691954553330991144/837356263872397382/image0.jpg" alt="Hanz Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Hanz Affiq</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/837179989320925194/837353922959638558/IMG_20191020_193104.jpg" alt="Hao Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Lee Zhi Hao</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/837179989320925194/837180949493973041/IMG-20210409-WA0021.jpg" alt="MS Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Tham Mun Sum</h3>
  <p>Team Member</p>
</div>

<div class="w3-quarter">
  <img src="https://cdn.discordapp.com/attachments/837179989320925194/837180659385761852/IMG_20191127_121635.jpg    " alt="Aq Picture" style="width:375px;height:498px" class="w3-circle w3-hover-opacity">
  <h3>Aqaalpreet Singh</h3>
  <p>Team Member</p>
</div>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<?php
$servername = "localhost";
$username = "hfymt3ju_user1";
$password = "Dbi_Coursework2";
$dbname = "hfymt3ju_cw2";

$conn = new mysqli($servername, $username, $password, $dbname);

//tableinfo
$tablename="actor";
$tableid="actor_id";
$pkno=1;


if ($conn->connect_error)
{
    die("connection failed:");
}

$mysqlinput = "SELECT * FROM actor";
$conclude = $conn->query($mysqlinput);
?>
</body>
</html>