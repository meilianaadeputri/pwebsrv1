<?php
ini_set('display_errors','1');
ini_set('display_startup_erros','1');
error_reporting(E_ALL);

require_once("Civitas.php");
require_once("Mhs.php");
require_once("Daftar_mahasiswa.php");

$mhs= new Mhs('51018023');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>SOLID</title>
   </head>
   <body>
     <h2><?= $mhs->getNama() ?></h2>
   </body>
 </html>
