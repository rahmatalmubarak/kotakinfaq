<?php 
	require 'koneksi.php';

	$result = mysqli_query($con, "select 
                             sum(nominal=1000) as jumlah1, 
                             sum(nominal=2000) as jumlah2, 
                              sum(nominal=5000) as jumlah3, 
                              sum(nominal=10000) as jumlah4, 
                              sum(nominal=20000) as jumlah5, 
                              sum(nominal=50000) as jumlah6, 
                              sum(nominal=100000) as jumlah7, 
                              sum(nominal) as total,
                              nominal, date from tb_infaq where day(date) = day(now()) 
                              ORDER BY id asc");
while($row = $result->fetch_array()){
        $data = array(
        	'nom' => $row['nominal'],
        	'jumlah1' => $row['jumlah1'],
        	'jumlah2' => $row['jumlah2'],
        	'jumlah3' => $row['jumlah3'],
        	'jumlah4' => $row['jumlah4'],
        	'jumlah5' => $row['jumlah5'],
        	'jumlah6' => $row['jumlah6'],
        	'jumlah7' => $row['jumlah7'],
        	'total' => $row['total'],
        	'date' => $row['date']
        	
        );
}

echo json_encode($data);
 ?>