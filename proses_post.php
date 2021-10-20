<?php

$Nama = $_POST['Nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];
$namaikan=$_POST['namaikanl'];
$lokasitpi =$_POST['lokasitpi'];
$jumlahkg=$_POST['jumlahkg'];
$submit=$_POST['submit'];


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