
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


require 'total.php';
// // Fetch all users data from database
// $result = mysqli_query($con, "SELECT * FROM tb_infaq ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>data infak</title>
</head>

<h1 align="center"> Data Infak </h1>


 
<body>
    <form method="get" action="totalinfak.php">
        <label>Pilih Tanggal</label>
        <input type="date" name="tgl">
        <button type="submit" >Cari</button>
    </form>
    <table width='80%' border=1>
 
    <tr> 
        <th>#</th>
        <th>Tanggal</th>
		<th>Total</th> 

    </tr>
    <?php 
    $no = 1;
    while($row = $result->fetch_array()){
     ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['total']; ?></td>
    </tr>
    <?php } 
    $total =0;
    while($row = $result->fetch_array()){
    ?>
    <tr>
        <td><?php echo $total +=$row['total']; ?></td>
    </tr>
    <?php } ?>
    </table>
	
	<a href="index.php" class="message">Back</a> 
</body>

</html>