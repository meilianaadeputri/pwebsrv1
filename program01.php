<?php
  $guestName = $_GET['guest'];
  $today = date('l');
  $todayDate = date("F j, Y");

  $backgroundColor = $_GET['color'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <title>Belajar <?php  ?></title>
 </head>
 <body bgcolor=<?= $backgroundColor ?>>
   <h1>Program 01</h1>
    today is: <?php echo $todayDate ?>
    <hr>
   <h2>Hello, <?= $guestName ?></h2>
   <h3>Happy <?= $today ?></h3>
 </body>
</html>
