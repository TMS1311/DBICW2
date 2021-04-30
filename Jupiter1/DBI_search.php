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

<p style = "font-family:Impact;font-size:30px;">
         Search Form
      </p>
    <div class="container">
<form action="DBI_search.php" method="post">
	<div class="row">
        <div class="col-25">
      <label for="table">Table:</label>
    </div>
    <div class="col-75">
      <input type="text" id="table" name="table" placeholder="Your table...">
      </select>
    </div>
   </div>
  <div class="row">
    <div class="col-25">
      <label for="id">ID:</label>
    </div>
    <div class="col-75">
      <input type="number" id="id" name="id" placeholder="Your ID...">
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

$table = mysqli_real_escape_string($conn, $_REQUEST['table']);
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
	
	
	
//STORE SEARCH
 if(strcasecmp ($table, "store") == 0)
{
$mysqlinput = "SELECT * FROM store WHERE store_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="store";
$tableid="store_id";
$pkno=1;

echo '<h2>Store Table</h2>';

echo '<table>
 	<tr>
   	<th>store_id</th>
   	<th>manager_staff_id</th>
    <th>address_id</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';
	
if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["store_id"].
		'</td><td>'.$row["manager_staff_id"].
		'</td><td>'.$row["address_id"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editstore.php?id='.$row[$tableid].'">Edit</a></td></tr>';
		
	}
}

else
{
	echo "<br>no result<br>";
}

echo '</table>';

}

//ACTOR SEARCH
 else if(strcasecmp ($table, "actor") == 0)
{
$mysqlinput = "SELECT * FROM actor WHERE actor_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="actor";
$tableid="actor_id";
$pkno=1;

echo '<h2>Actor Table</h2>';

echo '<table>
 	<tr>
   	<th>actor_id</th>
   	<th>first_name</th>
	<th>last_name</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo 
		'<tr><td>'.$row["actor_id"].
		'</td><td>'.$row["first_name"].
		'</td><td>'.$row["last_name"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid]. '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editactor.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//ADDRESS SEARCH
else if(strcasecmp ($table, "address") == 0)
{
$mysqlinput = "SELECT * FROM address WHERE address_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="address";
$tableid="address_id";
$pkno=1;

echo '<h2>Address Table</h2>';

echo '<table>
 	<tr>
   	<th>address_id</th>
   	<th>address</th>
	<th>district</th>
	<th>city_id</th>
	<th>postal_code</th>
	<th>phone</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["address_id"].
		'</td><td>'.$row["address"].
		'</td><td>'.$row["district"].
		'</td><td>'.$row["city_id"].
		'</td><td>'.$row["postal_code"].
		'</td><td>'.$row["phone"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid]. '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editaddress.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}
echo '</table>';
}


//CATEGORY SEARCH
else if(strcasecmp ($table, "category") == 0)
{
$mysqlinput = "SELECT * FROM category WHERE category_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="category";
$tableid="category_id";
$pkno=1;

echo '<h2>Category Table</h2>';

echo '<table>
 	<tr>
   	<th>category_id</th>
   	<th>name</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["category_id"].
		'</td><td>'.$row["name"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid]. '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editcategory.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//CITY SEARCH
else if(strcasecmp ($table, "city") == 0)
{
$mysqlinput = "SELECT * FROM city WHERE city_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="city";
$tableid="city_id";
$pkno=1;

echo '<h2>City Table</h2>';

echo '<table>
 	<tr>
   	<th>city_id</th>
   	<th>city</th>
	<th>country_id</th>
    <th>Last Update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["city_id"].
		'</td> <td>'.$row["city"].
		'</td> <td>'.$row["country_id"].
		'</td> <td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid]. '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editcity.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//COUNTRY SEARCH
else if(strcasecmp ($table, "country") == 0)
{
$mysqlinput = "SELECT * FROM country WHERE country_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="country";
$tableid="country_id";
$pkno=1;

echo '<h2>Country Table</h2>';

echo '<table>
 	<tr>
   	<th>country_id</th>
   	<th>country</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["country_id"].
		'</td><td>'.$row["country"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editcountry.php?id='.$row[$tableid].'">Edit</a></td></tr>';

	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//CUSTOMER SEARCH
else if(strcasecmp ($table, "customer") == 0)
{
$mysqlinput = "SELECT * FROM customer WHERE customer_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="customer";
$tableid="customer_id";
$pkno=1;

echo '<h2>Customer Table</h2>';

echo '<table>
 	<tr>
   	<th>customer_id</th>
   	<th>store_id</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>address_id</th>
    <th>active</th>  
    <th>create_date</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["customer_id"].
		'</td><td>'.$row["store_id"].
		'</td><td>'.$row["first_name"].
		'</td><td>'.$row["last_name"].
		'</td><td>'.$row["email"].
		'</td><td>'.$row["address_id"].
		'</td><td>'.$row["active"].
		'</td><td>'.$row["create_date"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editcustomer.php?id='.$row[$tableid].'">Edit</a></td></tr>';

	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//FILM SEARCH
else if(strcasecmp ($table, "film") == 0)
{
$mysqlinput = "SELECT * FROM film WHERE film_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="film";
$tableid="film_id";
$pkno=1;

echo '<h2>Film Table</h2>';

echo '<table>
 	<tr>
   	<th>film_id</th>
   	<th>title</th>
    <th>description</th>
	<th>release_year</th>
	<th>language_id</th>
	<th>length</th>
	<th>rating</th>
	<th>special_features</th>
    <th>last Update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["film_id"].
		'</td><td>'.$row["title"].
		'</td><td>'.$row["description"].
		'</td><td>'.$row["release_year"].
		'</td><td>'.$row["language_id"].
		'</td><td>'.$row["length"].
		'</td><td>'.$row["rating"].
		'</td><td>'.$row["special_features"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editfilm.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//FILM ACTOR SEARCH
else if(strcasecmp ($table, "film_actor") == 0)
{
$mysqlinput = "SELECT * FROM film_actor WHERE film_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="film_actor";
$tableid="film_id";
$tableid2="actor_id";
$pkno=2;

echo '<h2>Film_actor Table</h2>';

echo '<table>
 	<tr>
   	<th>actor_id</th>
   	<th>film_id</th>
    <th>last Update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["actor_id"].
		'</td><td>'.$row["film_id"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid]. '&tableid2='.$tableid2. '&id2='.$row[$tableid2]. '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editfilm_actor.php?id='.$row[$tableid]. '&id2='.$row[$tableid2].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//FILM CATEGORY
else if(strcasecmp ($table, "film_category") == 0)
{
$mysqlinput = "SELECT * FROM film_category WHERE film_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="film_category";
$tableid="film_id";
$pkno=1;

echo '<h2>Film_Category Table</h2>';

echo '<table>
 	<tr>
   	<th>film_id</th>
   	<th>category_id</th>
    <th>last_update</th>
	<th>DELETE</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["film_id"].
		'</td><td>'.$row["category_id"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td></tr>';
    }
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//FILM RENTAL SEARCH
else if(strcasecmp ($table, "film_rental") == 0)
{
$mysqlinput = "SELECT * FROM film_rental WHERE film_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="film_rental";
$tableid="film_id";
$pkno=1;

echo '<h2>Film_Rental Table</h2>';

echo '<table>
 	<tr>
   	<th>film_id</th>
   	<th>rental_duration</th>
    <th>rental_rate</th>
    <th>replacement_cost</th>
	<th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["film_id"].
		'</td><td>'.$row["rental_duration"].
		'</td><td>'.$row["rental_rate"].
		'</td><td>'.$row["replacement_cost"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editfilm_rental.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//INVENTORY SEARCH
else if(strcasecmp ($table, "inventory") == 0)
{
$mysqlinput = "SELECT * FROM inventory WHERE inventory_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="inventory";
$tableid="inventory_id";
$pkno=1;

echo '<h2>Inventory Table</h2>';

echo '<table>
 	<tr>
   	<th>inventory_id</th>
   	<th>film_id</th>
    <th>store_id</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["inventory_id"].
		'</td><td>'.$row["film_id"].
		'</td><td>'.$row["store_id"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editinventory.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//LANGUAGE SEARCH
else if(strcasecmp ($table, "language") == 0)
{
$mysqlinput = "SELECT * FROM language WHERE language_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="language";
$tableid="language_id";
$pkno=1;

echo '<h2>Language Table</h2>';

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

echo '</table>';
}

//PAYMENT SEARCH
else if(strcasecmp ($table, "payment") == 0)
{
$mysqlinput = "SELECT * FROM payment WHERE payment_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="payment";
$tableid="payment_id";
$pkno=1;

echo '<h2>Payment Table</h2>';

echo '<table>
 	<tr>
   	<th>payment_id</th>
   	<th>customer_id</th>
    <th>staff_id</th>
	<th>rental_id</th>
	<th>amount</th>
	<th>payment_date</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["payment_id"].
		'</td><td>'.$row["customer_id"].
		'</td><td>'.$row["staff_id"].
		'</td><td>'.$row["rental_id"].
		'</td><td>'.$row["amount"].
		'</td><td>'.$row["payment_date"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editpayment.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//RENTAL SEARCH
else if(strcasecmp ($table, "rental") == 0)
{
$mysqlinput = "SELECT * FROM rental WHERE rental_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="rental";
$tableid="rental_id";
$pkno=1;

echo '<h2>Rental Table</h2>';

echo '<table>
 	<tr>
   	<th>rental_id</th>
   	<th>rental_date</th>
    <th>inventory_id</th>
	<th>customer_id</th>
	<th>return_date</th>
	<th>staff_id</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["rental_id"].
		'</td><td>'.$row["rental_date"].
		'</td><td>'.$row["inventory_id"].
		'</td><td>'.$row["customer_id"].
		'</td><td>'.$row["return_date"].
		'</td><td>'.$row["staff_id"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editrental.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}

//STAFF SEARCH
else if(strcasecmp ($table, "staff") == 0)
{
$mysqlinput = "SELECT * FROM staff WHERE staff_id = $id";
$conclude = $conn->query($mysqlinput);

//tableinfo
$tablename="staff";
$tableid="staff_id";
$pkno=1;

echo '<h2>Staff</h2>';

echo '<table>
 	<tr>
   	<th>staff_id</th>
   	<th>first_name</th>
	<th>last_name</th>
	<th>address_id</th>
	<th>picture</th>
	<th>email</th>
	<th>store_id</th>
	<th>active</th>
	<th>username</th>
	<th>password</th>
    <th>last_update</th>
	<th>DELETE</th>
	<th>EDIT</th>
  	</tr>';

if ($conclude->num_rows > 0)
{
	while($row = $conclude->fetch_assoc())
	{
		echo '<tr><td>'.$row["staff_id"].
		'</td><td>'.$row["first_name"].
		'</td><td>'.$row["last_name"].
		'</td><td>'.$row["address_id"].
		'</td><td>'.$row["picture"].
		'</td><td>'.$row["email"].
		'</td><td>'.$row["store_id"].
		'</td><td>'.$row["active"].
		'</td><td>'.$row["username"].
		'</td><td>'.$row["password"].
		'</td><td>'.$row["last_update"].
		'</td><td><a href="DBI_delete.php?table='.$tablename.'&tableid='.$tableid.'&id='.$row[$tableid].  '&pkno='.$pkno. '">Delete</a></td>
		</td><td><a href="DBI_editstaff.php?id='.$row[$tableid].'">Edit</a></td></tr>';
	}
}
else
{
	echo "<br>no result<br>";
}

echo '</table>';
}


else
{
	echo "<br>Error Table Does Not Exist !";
}
}

?>

</body>
</html>




 