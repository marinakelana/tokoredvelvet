<?php 
session_start();
$koneksi = new mysqli("localhost","root","","toko");
?>


<!DOCTYPE html>
<html>
<head>
      <title> RED VELVET BOOKSTORE </title>
      <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
  </head>
  <body style="background: url(rv.jpg);">

<?php include 'menu.php'; ?>
<center><h1>OUR PROMO! </h1></center>

          <<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                  <img src="HL/1.jpg" alt="..." width="1400px" height="400px">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="HL/2.jpg" alt="..." width="1400px" height="400px">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                <img src="HL/3.jpg" alt="..." width="1400px" height="400px">
                <div class="carousel-caption">
               </div>
              </div>
              </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              
        
      
    </div>
   </div>
    </div>
     </div>
      
      </div>

    </div>

  	<section class="konten">
  		<div class="container">
  			<h1> OUR PRODUCTS </h1>

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
			<?php while ($perproduk = $ambil->fetch_assoc()){ ?>
  				<div class="col-md-3">
  				<div class="thumbnail">
  					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="" class="img-responsive">
  					<div class="caption">
  						<h3><?php echo $perproduk ['nama_produk']; ?></h3>
  						<h4> Harga : Rp. <?php echo number_format($perproduk['harga_produk']); ?></h4>
  						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
              <a href= "detail.php?id=<?php echo $perproduk ["id_produk"]; ?> class="btn btn-default">Detail</a>
	</div>
</div>
</div>
<?php } ?>



  		</div>
  	</div>
  	</section>


<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../../assets/js/docs.min.js"></script>

  </body>
  </html>