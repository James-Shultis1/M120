<?php
session_start();
?>

<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html;
charset=iso-8859-1">
    <title>Antiquities</title>
    <link rel="stylesheet" href="CSS/CSS.css">
  </head>
  <body>
    <?php include "Header.php";
    include "Menu.php";
    include "Footer.php"; ?>
    <div class="BigSearch">
      <form class="Search" action="Search.php" method="post">
        <input type="text" name="searchfield" value="" placeholder="Search">
        <select class="filter" name="filter">
          <option value="Author">Author</option>
          <option value="Title">Title</option>
          <option value="ID">ID</option>

        </select>
        <input class="Sub" type="submit" name="Submit" value="submit">
        </form>

      </form>
    </div>
    <div class="books">

  </body>
</html>
