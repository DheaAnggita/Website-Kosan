<?php 
session_start();
if( isset($_SESSION["login"]) ) {
    include 'headermember.php'; 
}
else {
    include 'header.php';
}
?>

<div class="banner">    	   
<img src="images/photos/bg.png"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Selamat Datang di Dhey's Kost</h1>
                <p class="animated fadeInUp">Terjangkau, Bersih, Nyaman</p>                
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ;?>