<!DOCTYPE html>
<html lang="id">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="website sistem pakar">
      <meta name="author" content="mr k">
      <link rel="icon" href="image/icon.png">

      <title>Sistem Pakar</title>

      <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
  </head>

  <body>
          <div class="m-5 card text-white bg-info mb-3">
            <h5 class="card-header">Hasil yang Kamu Dapatkan</h5>
            <div class="card-body text-left ukuran-20">
              <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">
                  <?php
                  include ('koneksi.php');
                  $kode='m01';
                  session_start();
                      
                      if(isset($_GET['kode'])){
                          $kode=$_GET['kode'];
                      }   
                  ?>
                  <p style="font-size: 25px;">Fakta yang Berhasil Didapatkan :</p>
                  <?php
                  include "fungsi.php";
                  solusi($kode);  
                  ?>
                  

                  <hr>
                  <?php
                  $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                  $data = mysqli_query($connect,$sql);
                  $row = mysqli_fetch_assoc($data);

                  if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                      echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                  }
                  
                  else{
                      echo "<p>Selamat ".$_SESSION['nama'].", Kamu Cocok Untuk Mengambil Jurusan : <strong style='color:green'>".$row['isi_solusi']."</strong></p>";
                  }
                  
                  ?>
              </form>
              <br>
              <div class="text-center">
              <div class='px-2'>
                  <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='hapus-session.php' style='text-decoration: none;'>Akhiri</a></button>
              </div>
              </div>
            </div>
          </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

  </body>
</html>