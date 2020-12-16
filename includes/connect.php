<<<<<<< HEAD

<?php
$servername = "localhost";
$username = "root";
$password = "";
$xe1trang=6;


try {
  $conn = new PDO("mysql:host=$servername;dbname=motorcyclestore", $username, $password);
  // set the PDO error mode to exception
  $conn -> query('set names utf8');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<div hidden>Connection successfully!!! </div>";
} catch(PDOException $e) {
  echo "<div hidden>Connection failed: ". $e->getMessage().'</div>' ;
}
?>
=======
<!-- CONNECT -->

<?php
>>>>>>> parent of 2c4500f... up Order & Account
