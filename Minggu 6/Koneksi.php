<?php
$namaServer ="localhost";
$username ="root";
$password ="12345";
$namaDatabase ="database_kontak";

//Membuat Koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

//Cek Koneksi

if(!$conn){
    die("Koneksi Gagal: ".mysqli_connect_error());
}
echo "Koneksi Database Berhasil"
?>
