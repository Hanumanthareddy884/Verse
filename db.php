<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'verse';
$username = 'root';
$password = '';

try {
  $db_conn = mysqli_connect($host, $username, $password, $dbname);
  if (!$db_conn) {
    throw new Exception('Unable to connect');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
