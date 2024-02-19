<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpauth";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
// sql to delete a record
$sql = "DELETE FROM patient_details WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location:index.php");
  exit;
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>