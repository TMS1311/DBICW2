<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="test1.css">
<link rel="stylesheet" href="DBI_css.css">
<link rel="stylesheet" href="new.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a href="DBI_insert_actor.php" class="w3-bar-item w3-button">Auto Insert</a>
    </div>
  </div>
  <a href="DBI_deletemanual.php" class="w3-bar-item w3-button">Delete</a>
  <a href="DBI_search.php" class="w3-bar-item w3-button">Search</a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#" class="w3-bar-item w3-button">Home</a>
    <a href="#Tables" class="w3-bar-item w3-button">Tables</a>
    <a href="DBI_update.php" class="w3-bar-item w3-button">Update</a>
    <a href="#insert" class="w3-bar-item w3-button">Insert</a>
    <a href="DBI_deletemanual.php" class="w3-bar-item w3-button">Delete</a>
  </div>
</div>

<?php
$servername = "localhost";
$username = "hfymt3ju_user1";
$password = "Dbi_Coursework2";
$dbname = "hfymt3ju_cw2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("connection failed:");
}


 // get id through query string
$id = $_GET['id'];



$mysqlinput = "SELECT * FROM film WHERE film_id='$id'";
$conclude = $conn->query($mysqlinput);
$data = $conclude-> fetch_array(MYSQLI_BOTH);


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$film_id= $_POST['film_id'];
		$language_id= $_POST['language_id'];
		$title= $_POST['title'];
		$description= $_POST['description'];
		$release_year= $_POST['release_year'];
		$length= $_POST['length'];
		$rating= $_POST['rating'];
		$special_features= $_POST['special_features'];
		$last_update = $_POST['last_update'];
		$up = "UPDATE film SET film_id='$film_id',language_id='$language_id',title='$title', description='$description', release_year='$release_year',length='$length',rating='$rating',special_features='$special_features', last_update ='$last_update' WHERE film_id = '$id' ";   // update query
		$conclude2 = $conn->query($up);


		if($conclude2 === TRUE)
		{
			echo "<p>";
			echo "Update Successful";	
			echo "<br>UPDATE Statement Executed: " .$up;
			echo "<br>Number of rows affected: " .$conn-> affected_rows;
			echo "</p>";
	
		}
		else
		{
			echo "</p>Error updating record</p>"; // display error message if not delete
		}
	}


?>
 

<p style = "font-family:Impact;font-size:30px;">
         Edit Form for Film
      </p> 
      
<div class="container">
  <form method="POST">
   <div class="row">
    <div class="col-25">
      <label for="filmid">Film ID:</label>
    </div>
    <div class="col-75">
      <input type="number" id="filmid" value="<?php echo $data['film_id']?>" name="film_id" placeholder="Your film ID..." Required>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="title">Title:</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" value="<?php echo $data['title']?>" name="title" placeholder="Your title..." Required>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="description">Description:</label>
    </div>
    <div class="col-75">
      <input type="text" id="description" value="<?php echo $data['description']?>" name="description" placeholder="Your description..." Required>
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="releaseyear">Release Year:</label>
    </div>
    <div class="col-75">
      <input type="number" id="releaseyear" value="<?php echo $data['release_year']?>" name="release_year" placeholder="Your release year..." Required>
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="languageid">Language ID:</label>
    </div>
    <div class="col-75">
      <input type="number" id="languageid" value="<?php echo $data['language_id']?>" name="language_id" placeholder="Your language id..." Required>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="length">Length:</label>
    </div>
    <div class="col-75">
      <input type="number" id="length" value="<?php echo $data['length']?>" name="length" placeholder="Your length..." Required>
    </div>
  </div> 
    <div class="row">
    <div class="col-25">
      <label for="rating">Rating:</label>
    </div>
    <div class="col-75">
      <input type="text" id="rating" value="<?php echo $data['rating']?>" name="rating" placeholder="Your rating..." Required>
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="specialfeatures">Special Features:</label>
    </div>
    <div class="col-75">
      <input type="text" id="specialfeatures" value="<?php echo $data['special_features']?>" name="special_features" placeholder="Your special features..." Required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lastupdate">Last_update:</label>
    </div>
    <div class="col-75">
      <input type="datetime" id="lastupdate" value="<?php echo $data['last_update']?>" name="last_update" placeholder="YYYY/MM/DD HH:MM:SS" Required>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
 
 
</body>
</html>









