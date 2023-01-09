<?php
$nama = "David Armanda ";
$usia = "21 Tahun ";
$alamat = "Lumajang ";
$profil = " ";
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/nama':
        echo "Nama anda :".$nama;
        break;
    case '/usia':
        echo "Usia anda :".$usia;
        break;
    case '/alamat':
        echo "Alamat anda :".$alamat;
        break;
    case '/profil':
        echo "Biodata anda "; 
        echo "| Nama anda :".$nama; 
        echo "| Usia anda :".$usia; 
        echo "| Alamat anda :".$alamat;
        break;
    default:
        echo "Profil anda tidak tersedia";
        break;
}
?>