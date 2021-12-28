<?php
 
    //Variabel database
    /**
     * using mysqli_connect for database connection
     */
     
    $databaseHost = 'localhost';
    $databaseName = 'kotak_infak';
    $databaseUsername = 'nanda';
    $databasePassword = '12345';
     
    $con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
     
    if ($con!=false){
        echo "berhasil";
       } else {
       echo "gagal";}
      
      
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date('Y-m-d H:i:s');
    // Prepare the SQL statement
	$var1 = $_GET['nominal'];

    if ($var1 == "1000") {
        $isi = 1000;
    }
    
      
    $result = mysqli_query ($con,"INSERT INTO tb_infaq (nominal, date) VALUES ('$var1', '$waktu')");
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($con));
        }  
?>