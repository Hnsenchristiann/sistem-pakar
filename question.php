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
            <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; border-radius: 20px; padding: 50px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="bg-info mt-16">
                <section class="text-white">
                    <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">
                    <?php
                        include ('koneksi.php');
                        $kode='m1';
                        session_start();
                        echo "<h5 class='pb-3'>Pililah Jawaban yang Sesuai Dengan Minat dan Bakat Anda, Jawab dengan Jujur !</h2>";
                            
                            if(isset($_GET['kode'])){
                                $kode=$_GET['kode'];
                            }

                            $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                            $data = mysqli_query($connect,$sql);
                            $row = mysqli_fetch_assoc($data);     
                        ?>
                    
                        <hr style="border-top: 1px solid gray;" />
                        <div style="font-size: 20px;" class="text-center">
                            <?php echo $row['isi_pertanyaan']; ?>
                        </div>
                        <?php 
                            include "fungsi.php";
                            answer($kode);                    
                        ?>
                    </form>
                </section>
            </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
        
    </body>
</html>