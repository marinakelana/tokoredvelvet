<?php 
session_start();
$koneksi = new mysqli("localhost","root","","toko");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Admin : Register</h2>
               
                <h5>Daftarkan Dirimu Sebelum Login</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Admin Baru? Daftarkan Dirimu! </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
                    <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  > Username</i></span>
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  > Password</i></span>
                                            <input type="text" class="form-control" name="password" required>
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  > Nama Lengkap</i></span>
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>
                                     
                                     
                                     <button class="btn btn-primary" name="daftar">Daftar</button>
                                   
                                    Sudah Punya Akun ?  <a href="login.php" > Login Disini </a>

                                    </form>

                                    <?php

                        if (isset($_POST["daftar"]))
                        {
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $nama = $_POST["nama"];

                         $hasil= mysqli_query ($koneksi,"INSERT INTO admin (username,password,nama)  
                                VALUES('$username','$password','$nama_lengkap')");  
                            if ($hasil)
                            {
                                echo "<script>alert('Pendaftaran Sukses, Silahkan Login');</script>";
                                echo "<script>location='login.php';</script>";
                            }
                            else
                                {
                                echo "<script>alert('Pendaftaran Gagal, Username Sudah Digunakan');</script>";
                                echo "<script>location='daftar.php';</script>";
                                }
                        }
                ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
