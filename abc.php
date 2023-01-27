<?php
   $server = mysqli_connect("localhost", "root", "", "udin");

   if ($server) {
       echo "berhasil";
   } else {
       echo "Koneksi gagal";
   }   

    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $rayon = $_POST["rayon"];
    $rombel = $_POST["rombel"];
    $prod = $_POST['prod'];
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $infor = $_POST['infor'];
    
    
    $sql = "insert into biodata (nama, nis, rayon, rombel) values ('$nama', '$nis', '$rayon', '$rombel')";
    // $sql1 = "insert into nilai (Produktif, MTK, Indonesia, Informatika) value ('$prod', '$mtk', '$indo', '$infor')";
    $query = mysqli_query($server, $sql);
    
    if ($query) {
        $sql2 = "INSERT INTO nilai (Produktif, MTK, Indonesia, Informatika) values ('$prod', '$mtk', '$indo', '$infor')";
        $hasil = mysqli_query($server, $sql2);
        echo "Berhasil terkirim";
    } else {
        echo "Gagal terkirim"; 
    }
?>
