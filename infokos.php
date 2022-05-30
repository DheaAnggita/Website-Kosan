<?php 
session_start();
if( isset($_SESSION["login"]) ) {
  include 'headermember.php'; 
}
else{
  include 'header.php'; 
}
?>

<div class="container">
<h2>Info Kost</h2>
<div class="row">
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/pa1.png" class="img-responsive"><div class="info"><h3>Dhey's Kost Putra 1</h3><br><p>Jl. Lawu Raya No.V, RW.3, Kledokan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281 </p><a href="kostputra1.php" class="btn-lg btn-default">Lihat</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/pa2.png" class="img-responsive"><div class="info"><h3>Dhey's Kost Putra 2</h3><p> Gang Sewagati Candirejo Sardonoharjo Kecamatan Ngaglik Kabupaten Sleman Daerah Istimewa Yogyakarta 55581 <br><br> COMINGSOON</p></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/pi1.png" class="img-responsive"><div class="info"><h3>Dhey's Kost Putri 1</h3><p>Jl. Tambak Bayan No.4, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281 <br><br> COMINGSOON</p></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/pi2.png" class="img-responsive"><div class="info"><h3>Dhey's Kost Putri 2</h3><p> Pogung Baru B16, Pogung Kidul, Sinduadi, Mlati, Sleman Regency, Special Region of Yogyakarta 55284 <br><br> COMINGSOON</p></div></div></div>
</div>
</div>

<?php include 'footer.php';?>