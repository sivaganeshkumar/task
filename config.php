<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id2436507_madhu');
define('DB_PASSWORD', 'ammumadhu');
define('DB_DATABASE', 'id2436507_cc');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>