<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'kotak_infak';
$databaseUsername = 'nanda';
$databasePassword = '12345';
 
$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
  