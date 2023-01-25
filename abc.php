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
    $sql = "insert into nilai (Produktif, MTK, Indonesia, Informatika) value ('$prod', '$mtk', '$indo', '$infor')";

if(mysqli_query($server, $sql)) {
   echo "<br>pemyimpanan berhasil";
} else {
    echo "<br>penyimpanan gagal";
}
?>