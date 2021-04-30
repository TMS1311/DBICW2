<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="DBI_css.css">
<link rel="stylesheet" href="new.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="test1.css">
</head>

<body>
<br>
 <!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Final3.php#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Group 4</a>
  <a href="Final3.php#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Tables <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_Category.php" class="w3-bar-item w3-button">Category Table</a>
	  <a href="DBI_city.php" class="w3-bar-item w3-button">City Table</a>
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
    <button class="w3-button" title="Notifications">Insert <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_insertmanual.php" class="w3-bar-item w3-button">Manual Insert</a>
      <a href="DBI_insert_Category.php" class="w3-bar-item w3-button">Auto Insert</a>
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
	 <div class="w3-dropdown-hover w3-hide-small">
	<button class="w3-button" title="Notifications">Insert <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="DBI_insertmanual.php" class="w3-bar-item w3-button">Manual Insert</a>
      <a href="DBI_insert_Category.php" class="w3-bar-item w3-button">Auto Insert</a>
    </div>
  </div>
    <a href="DBI_deletemanual.php" class="w3-bar-item w3-button">Delete</a>
    <a href="DBI_search.php" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<p style = "font-family:Impact;font-size:30px;">
         Insert Form for Film
      </p> 
      
<div class="container">
<form action="DBI_insert_film.php" method="post">
   <div class="row">
    <div class="col-25">
      <label for="filmid">Film ID:</label>
    </div>
    <div class="col-75">
      <input type="number" id="filmid" name="film_id" placeholder="Your film ID...">
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="title">Title:</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Your title...">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="description">Description:</label>
    </div>
    <div class="col-75">
      <input type="text" id="description" name="description" placeholder="Your description...">
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="releaseyear">Release Year:</label>
    </div>
    <div class="col-75">
      <input type="number" id="releaseyear" name="release_year" placeholder="Your release year...">
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="languageid">Language ID:</label>
    </div>
    <div class="col-75">
      <input type="number" id="languageid" name="language_id" placeholder="Your language id...">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="length">Length:</label>
    </div>
    <div class="col-75">
      <input type="number" id="length" name="length" placeholder="Your length...">
    </div>
  </div> 
    <div class="row">
    <div class="col-25">
      <label for="rating">Rating:</label>
    </div>
    <div class="col-75">
      <input type="text" id="rating" name="rating" placeholder="Your rating...">
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="specialfeatures">Special Features:</label>
    </div>
    <div class="col-75">
      <input type="text" id="specialfeatures" name="special_features" placeholder="Your special features...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lastupdate">Last_update:</label>
    </div>
    <div class="col-75">
      <input type="datetime" id="lastupdate" name="last_update" placeholder="YYYY/MM/DD HH:MM:SS">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

<?php
$servername = "localhost";
$username = "hfymt3ju_user1";
$password = "Dbi_Coursework2";
$dbname = "hfymt3ju_cw2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

if ($conn->connect_error)
{
	die("connection failed:");
}


$film_id = mysqli_real_escape_string($conn, $_REQUEST['film_id']);
$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$release_year = mysqli_real_escape_string($conn, $_REQUEST['release_year']);
$language_id = mysqli_real_escape_string($conn, $_REQUEST['language_id']);
$length = mysqli_real_escape_string($conn, $_REQUEST['length']);
$rating = mysqli_real_escape_string($conn, $_REQUEST['rating']);
$special_features = mysqli_real_escape_string($conn, $_REQUEST['special_features']);
$last_update = mysqli_real_escape_string($conn, $_REQUEST['last_update']);
 

$mysqlinput = "INSERT INTO film VALUES ('$film_id','$title','$description','$release_year','$language_id','$length','$rating','$special_features','$last_update')";

if($conn->query($mysqlinput) == TRUE)
{
 echo "Record added successfully";
}
else
{
 echo "Error: " . $mysqlinput . "<br>" . $conn->error;
}
}
?>

</body>
</html>
 