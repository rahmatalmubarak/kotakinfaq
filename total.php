<?php 
	require 'koneksi.php';

  if(($_GET['tgl'])){
    $tanggal = $_GET['tgl'];

	$result = mysqli_query($con, "select 
                              sum(nominal) as total,
                              LEFT(date, 10) as date from tb_infaq 
                              where LEFT(date, 10) = '$tanggal'
                              GROUP BY day(date)
                              ORDER BY id asc");
}else {
  $result = mysqli_query($con, "select 
                              sum(nominal) as total,
                               LEFT(date, 10) as date from tb_infaq
                              GROUP BY YEARWEEK(date)");
}

 ?>