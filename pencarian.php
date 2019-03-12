<?php
$koneksi = new mysqli("localhost","root","","toko");
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%keyword%' OR deskripsi_produk LIKE '%keyword%'");
while ($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

echo "<pre>";
print_r($semuadata);
echo "</pre>"

?>

<!DOCTYPE html>
<html>
<head>
      <title>Pencarian</title>
      <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
  </head>
  <body>
  <?php include "menu.php"; ?>
  <h3>Hasil Pencarian</h3>
</body>
</html>