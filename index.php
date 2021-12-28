
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>
<?php
// Create database connection using config file
include_once('koneksi.php');
 
// Fetch all users data from database


?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script  type="text/javascript" src="jquery/jquery.min.js"> </script>
    

  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
        <h1 >Tugas akhir</h1>
        </div>
        <div class="header-right">
            
            
          <a href="logoutproses.php" class="login">Log Out</a>
        </div>
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container">
      <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h3 > Hasil Infaq </h3></h2>
        
           <ul>
             <table style="margin-left: 370px" >
               <thead>
                 <th>Nominal Uang</th>
                 <th>Banyak</th>
                 <th>Total</th>
               </thead>
               <tbody>
                  <tr>
                    <td id="nom1">1000</td>
                    <td id="jumlah1"></td>
                    <td id="total1"></td>
                  </tr>
                  <tr>
                    <td>2000</td>
                    <td id="jumlah2"></td>
                    <td id="total2"></td>
                  </tr>
                  <tr>
                    <td>5000</td>
                    <td id="jumlah3"></td>
                    <td id="total3"></td>
                  </tr>
                  <tr>
                    <td>10000</td>
                    <td id="jumlah4"></td>
                    <td id="total4"></td>
                  </tr>
                  <tr>
                    <td>20000</td>
                    <td id="jumlah5"></td>
                    <td id="total5"></td>
                  </tr>
                  <tr>
                    <td>50000</td>
                    <td id="jumlah6"></td>
                    <td id="total6"></td>
                  </tr>
                  <tr>
                    <td>100000</td>
                    <td id="jumlah7"></td>
                    <td id="total7"></td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td ></td>
                    <td id="totalsemua"></td>
                  </tr>
               </tbody>
             </table>
           </ul>
            <ul class="ul2">
                <li class="li2">
                <a href="totalinfak.php?cari=" class="message">Tampilkan Data Infak</a> 
                </li>

                <li class="li2">
                    <a href="data.php" class="message">Tampilkan Seluruh Data</a> 
                </li>
        
            </ul>
         
        </div>
      </div>
    </div>
   <!--  <footer>
            <ul>
                <li>
                    <span>	Rumusan Masalah</span>
                    1.	Bagaimana membangun monitoring pemeliharaan dan pemberian pakan otomatis pada bibit ikan komed berbasis iot dan web ?<br>
                    2.	Bagaimana hasil implementasi monitoring pemeliharaan dan pemberian pakan otomatis pada bibit ikan komed berbasis iot dan web?

                </li>
                <li>
                    <span>Tujuan</span>
                    1.	Membuat alat  monitoring pemeliharaan bibit ikan komed berbasis iot dan web<br>
                    2.	Melihat kinerja dari alat monitoring pemeliharaan bibit ikan komed berbasis iot dan web
  
                </li>
                <li>
                    <span>Batasan Masalah</span>
                    1.	Alat ini di rancang menggunakan komponen utama yaitu Arduino, sensor Ultrasonik, sensor Suhu dan sensor PH, NodeMCU , Motor DC, dan  Real Time Clock . <br>
                    2.	Menggunakan mikrokontroller Arduino sebagai pengolahan data dari sensor Ultrasonik, sensor Suhu dan sensor PH, NodeMCU , Motor DC, dan  Real Time Clock, dan data tersebut di tampilkan dalam web.<br>
                    3.	Penggunaan alat ini pada pemeliharaan bibit ikan komed.

                </li>

              
            </ul>
            
        </footer> -->
    </div>
  </body>
</html>

<script >
  function tampiluang(){
  $.ajax({
  url : "uang.php",
  success : function(data) {
  var json = data,
  obj = JSON.parse(json);

    document.getElementById("jumlah1").innerHTML = obj.jumlah1;
    document.getElementById("jumlah2").innerHTML = obj.jumlah2;
    document.getElementById("jumlah3").innerHTML = obj.jumlah3;
    document.getElementById("jumlah4").innerHTML = obj.jumlah4;
    document.getElementById("jumlah5").innerHTML = obj.jumlah5;
    document.getElementById("jumlah6").innerHTML = obj.jumlah6;
    document.getElementById("jumlah7").innerHTML = obj.jumlah7;
    document.getElementById("total1").innerHTML = obj.jumlah1 * 1000;
    document.getElementById("total2").innerHTML = obj.jumlah2 * 2000;
    document.getElementById("total3").innerHTML = obj.jumlah3 * 5000;
    document.getElementById("total4").innerHTML = obj.jumlah4 * 10000;
    document.getElementById("total5").innerHTML = obj.jumlah5 * 20000;
    document.getElementById("total6").innerHTML = obj.jumlah6 * 50000;
    document.getElementById("total7").innerHTML = obj.jumlah7 * 100000;
    document.getElementById("total7").innerHTML = obj.jumlah7 * 100000;
    document.getElementById("totalsemua").innerHTML = obj.total;

   
    console.log(obj.result);

}
});
}


setInterval( function(){
tampiluang();

}, 1000
  );
</script>
