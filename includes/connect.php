<<<<<<< HEAD
<<<<<<< HEAD

<?php
$servername = "localhost";
$username = "root";
$password = "";
$xe1trang=6;

//$usernameSever = "id11075134_letrinhan";
//$passwordSever = "4MF@n(J6+}&XZH5F";

try {
    // Connect on Sever:
  //$conn = new PDO("mysql:host=$servername;dbname=id11075134_motorcyclestore", $usernameSever, $passwordSever);

  $conn = new PDO("mysql:host=$servername;dbname=motor", $username, $password);
  // set the PDO error mode to exception
  $conn -> query('set names utf8');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<div hidden>Connection successfully!!! </div>";
} catch(PDOException $e) {
  echo "<div hidden>Connection failed: ". $e->getMessage().'</div>' ;
}
?>
=======
>>>>>>> parent of f5c06c6... update source hoàn chỉnh (10-12-2020)
=======
<!-- CONNECT -->

<?php
>>>>>>> parent of 1e91508... view login logut, addproduct, add admin
