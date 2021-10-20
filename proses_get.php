<?php

$Nama = $_GET['Nama'];
$email=$_GET['email'];
$alamat=$_GET['alamat'];
$hp=$_GET['hp'];
$namaikan=$_GET['namaikanl'];
$lokasitpi = $_GET['lokasitpi'];
$jumlahkg=$_GET['jumlahkg'];
$submit=$_GET['submit'];


echo "<h1> !! REKAP PESANAN ANDA !! </h1> <br> <br>"; 

echo "Nama Anda            :"$Nama "<br>";
echo "Email Anda           :"$email "<br>";
echo "Alamat Anda          :"$alamat "<br>";
echo "Nomor Handphone Anda :"$hp "<br>";
echo "<<p> Pesanan Anda </p> <br> <br>"; 
echo "Nama Ikan            :"$namaikan"<br>";
echo "Lokasi TPI           :" $lokasitpi "<br>";
echo "Jumlah Pesanan       :"$jumlahkg "<br>";
?>