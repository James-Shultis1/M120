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

    <div class="Details">
      <h1 id="titel">Title</h1>
      <img id="BigBook" src="rsc/cover.jpg" alt="this be a book">
      <div class="details">
        <br>
        <span>Author</span><br>
        <span>Genre</span><br>
        <span>Release Date</span><br>

        <span>ID</span>

      </div>
      <p id= description>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>

  </body>
</html>
