<?php

function answer($kode){
    if($kode=='m1'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m2' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m14'style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m2'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m3-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m3-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }


    if($kode=='m3-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m4-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m8-a' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m4-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m5-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s12' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m5-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m6-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m7-a' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m6-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s1' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s2' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m7-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s3' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s4' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }    
    if($kode=='m8-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m9-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m10-a' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m9-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s5' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s6' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m10-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m11-a' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m12-a' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m11-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s7' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s8' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m12-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s9' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m13-a' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m13-a'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s10' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s11' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }



    if($kode=='m3-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m4-b' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m8-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m4-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m5-b' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s24' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m5-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m6-b' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m7-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m6-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s13' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s14' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m7-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s15' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m16' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }    
    if($kode=='m8-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m9-b' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m10-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m9-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s17' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s18' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m10-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m11-b' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m12-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m11-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s19' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s20' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m12-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s21' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m13-b' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m13-b'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s22' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s23' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }


    if($kode=='m14'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m15' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m16' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m15'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s25' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s26' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }    
    if($kode=='m16'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m17' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m18' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m17'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s27' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s28' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m18'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='question.php?kode=m19' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s31' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }
    if($kode=='m19'){
        echo "
        <div class='pt-3' style='display: flex; align-items: center; justify-content: center;'>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s29' style='text-decoration: none;'>Ya</a></button>
            </div>
            <div class='px-2'>
                <button type='button' class='btn btn-lg btn-dark' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'><a class='text-white' href='solusi.php?kode=s30' style='text-decoration: none;'>Tidak</a></button>
            </div>
        </div>";
    }

}

function kesimpulan($jurusan){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$jurusan' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>- '.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='s1') {
        $jurusan = "Informatika";
        kesimpulan($jurusan);        
    }
    if ($kode=='s2') {
        $jurusan = "Sistem Informasi";
        kesimpulan($jurusan);
    }
    if ($kode=='s3') {
        $jurusan = "Arsitektur";
        kesimpulan($jurusan);
    }
    if ($kode=='s4') {
        $jurusan = "Desain Produk";
        kesimpulan($jurusan);
    }
    if ($kode=='s5') {
        $jurusan = "Akuntansi";
        kesimpulan($jurusan);
    }
    if ($kode=='s6') {
        $jurusan = "Manajemen";
        kesimpulan($jurusan);
    }
    if ($kode=='s7') {
        $jurusan = "Kedokteran";
        kesimpulan($jurusan);
    }
    if ($kode=='s8') {
        $jurusan = "Bioteknologi";
        kesimpulan($jurusan);
    }
    if ($kode=='s9') {
        $jurusan = "Teologi";
        kesimpulan($jurusan);
    }
    if ($kode=='s10') {
        $jurusan = "Pendidikan Bahasa Inggris";
        kesimpulan($jurusan);
    }
    if ($kode=='s11') {
        $jurusan = "x-1";
        kesimpulan($jurusan);
    }
     if ($kode=='s12') {
        $jurusan = "x-2";
        kesimpulan($jurusan);
    }
    if ($kode=='s13') {
        $jurusan = "Informatika (non IPA)";
        kesimpulan($jurusan);
    }
    if ($kode=='s14') {
        $jurusan = "Sistem Informasi (non IPA)";
        kesimpulan($jurusan);
    }
    if ($kode=='s15') {
        $jurusan = "Arsitektur (non IPA)";
        kesimpulan($jurusan);
    }
    if ($kode=='s16') {
        $jurusan = "Desain Produk (non IPA)";
        kesimpulan($jurusan);        
    }
    if ($kode=='s17') {
        $jurusan = "Akuntansi (non IPA)";
        kesimpulan($jurusan);
    } 
    if ($kode=='s18') {
        $jurusan = "Manajemen (non IPA)";
        kesimpulan($jurusan);
    }
    if ($kode=='s19') {
        $jurusan = "Kedokteran (non IPA)";
        kesimpulan($jurusan);
    }
    if ($kode=='s20') {
        $jurusan = "Bioteknologi (non IPA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s21') {
        $jurusan = "Teologi (non IPA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s22') {
        $jurusan = "Pendidikan Bahasa Inggris (non IPA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s23') {
        $jurusan = "x-3";
        kesimpulan($jurusan);
    }
     if ($kode=='s24') {
        $jurusan = "x-4";
        kesimpulan($jurusan);   
    }
     if ($kode=='s25') {
        $jurusan = "Arsitek (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s26') {
        $jurusan = "Desain Produk (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s27') {
        $jurusan = "Informatika (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s28') {
        $jurusan = "Sistem Informasi (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s29') {
        $jurusan = "Akutansi (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s30') {
        $jurusan = "Manajemen (non SMA)";
        kesimpulan($jurusan);
    }
     if ($kode=='s31') {
        $jurusan = "x-5";
        kesimpulan($jurusan);
    }
}


?>