<!DOCTYPE html>
<html>

<head>
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
      <a href="DBI_insert_language.php" class="w3-bar-item w3-button">Auto Insert</a>
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

//tableinfo
$tablename="language";
$tableid="language_id";
$pkno=1;

if ($conn->connect_error)
{
	die("connection failed:");
}


$mysqlinput = "SELECT language_id, name,last_update FROM language";
$conclude = $conn->query($mysqlinput);

echo '<p style = "font-family:Impact;font-size:30px;">
         Language Table
      </p>';

echo '<table>
 	<tr>
   	<th>language_id</th>
   	<th>name</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["language_id"].
		'</td><td>'.$row["name"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editlanguage.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>'

?>
 
</body>
</html>