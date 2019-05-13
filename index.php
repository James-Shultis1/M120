<?php
if (session_status() == PHP_SESSION_NONE)
{
   session_start();
}

$_SESSION["CurPage"] = "index.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-16">
    <title>Hottest Books!</title>
    <link rel="stylesheet" href="CSS/CSS.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  </head>
  <body>
    <br><br><br><br>
    <?php include "Header.php";
  include "Menu.php";
  include "connection.php";
  include "Search.php";

  $Hunter = new Search();

  $where = "autor";
  $search = "%"."p"."%";
  $sql = $Hunter->GetSelectSQL($where, $search);
  echo $sql; ?>

    <div class="books">
      <?php $Hunter->SearchDB($sql, $conn); ?>
    </div>


    <br> <?php include "Footer.php"; ?>
  </body>
</html>
