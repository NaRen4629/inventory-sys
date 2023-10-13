<!-- ?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_inventory", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> -->


<!-- ?php
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "db_capstone"; // Change this to your database name

// Create a connection to the database
$db = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?> -->
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_capstone";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

