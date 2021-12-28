<?php
// Create database connection using config file
include_once('koneksi.php');
 
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM hasil ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>data sensor</title>
</head>

<h1 align="center"> Data Sensor </h1>


 
<body>

 
    <table width='80%' border=1>
 
    <tr>
        <th>No</th> 
		<th>Date</th> 
		<th>Total</th>
		
    </tr>
    <?php  
    while($hasil= mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$hasil['No']."</td>";
        echo "<td>".$hasil['Date']."</td>";    
		echo "<td>".$hasil['Total']."</td>"; 
       
      
    }
    ?>
    </table>
	
	<a href="home.php" class="message">Back</a> 
</body>

</html>