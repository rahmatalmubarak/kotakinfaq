
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>
<?php
// Create database connection using config file
include_once('koneksi.php');
 
// Fetch all users data from database


?>
<?php
// Create database connection using config file
include_once('koneksi.php');
 
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM tb_infaq ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>data infak</title>
</head>

<h1 align="center"> Data infak </h1>


 
<body>

 
    <table width='80%' border=1>
 
    <tr>
       
		<th>Nominal</th> 
		<th>Banyak</th>
        <th>Total</th>
        <th>Date</th>
		
    </tr>
    <?php  
    while($hasil= mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$hasil['nominal']."</td>";
        echo "<td>".$hasil['banyak']."</td>";    
		echo "<td>".$hasil['total']."</td>"; 
        echo "<td>".$hasil['date']."</td>"; 
       
      
    }
    ?>
    </table>
	
	<!-- <a href="home.php" class="message">Tampilkan Seluruh Data</a>  -->
</body>

</html>