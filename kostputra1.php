<?php 
session_start();
if( isset($_SESSION["login"]) ) {
  include 'headermember.php'; 
}
else {
  include 'header.php';
}
?>

<div class="container">
    <h2>Dhey's Kost (Putra 1) </h2>
    <div>
          <?php include "fungsi.php";
            $SQL = mysqli_query($conn, "SELECT * FROM kamarpa1");
            if(isset($_SESSION['login'])) $iduser = $_SESSION['login'];
            else $iduser='';
            while($data=mysqli_fetch_array($SQL)) 
            {             
          ?>
            <div class="col-sm-6 wowload fadeInUp">
              <div class="rooms">
                <img src="images/upload/<?php echo $data['foto']; ?>" class="img-responsive">
                <div class="info">
                  <h3>Kamar <?php echo $data['nomorkamar']; ?> </h3>
                  <p>Fasilitas : <?php echo $data['fasilitas']; ?></p>
                  <p>Status : <?php echo $data['status']; ?> </p>
                  <h3>Rp.<?php echo $data['harga']; ?>/Tahun </h3>
                    <div style="display: flex;" >            
                   
                        <form action="booking.php" method="POST">
                          <input type="hidden" name="kamar" value="<?php echo $data['idkamar'];?>">
                          <button type="submit" name="pesan" class="btn btn-primary " style="margin-left:3px" 
                          <?php if(!isset($_SESSION['login']) OR $data['status']=='Tidak Tersedia'):?> disabled 
                          <?php endif; ?>>Pesan</button>
                        </form>
                     
                       
                        <form action="bayar.php" method="POST">
                          <input type="hidden" name="kamar" value="<?php echo $data['idkamar'];?>">
                          <button type="submit" class="btn btn-success" style="margin-left:3px"
                          <?php if(!isset($_SESSION['login']) OR $iduser!=$data['iduser']):?> disabled 
                          <?php endif; ?>>Pembayaran</button>               
                        </form>
                        <form action="keluhan.php" method="POST">
                          <input type="hidden" name="kamar" value="<?php echo $data['idkamar'];?>">
                          <button type="submit" name="keluhan" class="btn btn-warning" style="margin-left:3px"
                          <?php if(!isset($_SESSION['login']) OR $iduser!=$data['iduser']):?> disabled 
                          <?php endif; ?>>Keluhan</button>
                        </form>
                       
                    </div>
                </div>
              </div>
            </div>
          <?php }?>
    </div>
</div>

<div class="container">
  <h2>Fasilitas Bersama </h2>
  <div class="row">
    <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/fpa1 (1).jpg" class="img-responsive"><div class="info"><h3>Teras Luas</h3><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae ratione dolores quibusdam doloribus, consequatur culpa? Repellat vero amet sequi iure voluptas, voluptatibus adipisci, hic eligendi architecto, sit exercitationem explicabo!</p></div></div></div>
    <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/fpa1 (2).jpg" class="img-responsive"><div class="info"><h3>Parkir Motor</h3><p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos ab error non incidunt laboriosam tempore labore veritatis voluptatem nemo saepe, debitis officiis corporis molestias soluta officia nisi earum ducimus cum.</p></div></div></div>
    <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="images/photos/fpa1 (3).jpg" class="img-responsive"><div class="info"><h3>Tempat Santai</h3><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quae aperiam, laudantium quos sapiente accusantium eaque. Eaque ipsa quos, soluta doloremque quod obcaecati ab a et accusamus excepturi sint labore.</p></div></div></div>
  </div>
</div>

<?php include 'footer.php';?>