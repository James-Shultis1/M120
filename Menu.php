<?php error_reporting(0) ?>
<nav role="navigation">
    <div id= "menuToggle">

        <!--
            this is used to make it clickable
        -->
        <input type="checkbox" id="CHBX1" onclick="checkd()" class="button"/>
        <input type="checkbox" id="CHBX2" onclick="uncheckd()" class="button"/>
        <!--
            this little guy makes the first button turn it on and the second turn it off
        -->

        <script>
            function checkd(){
                document.getElementById("CHBX1").checked = true;
                document.getElementById("CHBX2").checked = true;
            }
            function uncheckd(){
                document.getElementById("CHBX1").checked = false;
                document.getElementById("CHBX2").checked = false;
            }

        </script>


        <!--
            this if just the icon
        -->
        <span></span>
        <span></span>
        <span></span>

        <!--
            THis is the accual content of the menu
        -->

        <ul id="menu">
          <a href="Index.php"> <li> Hot</a><br>
          <a href="Books.php"> <li>Archive</li> </a>

          <?php
          include "connection.php";

          
           ?>

          <?php
          if($_SESSION["admin"] == true && $_SESSION["Logged_In"] == true)
          {
            echo "<a href="."admin.php"."> <li>Create</li> </a>";
          } ?>

    <div id="SocialMedia">
    <?php
    $cat = $_SESSION["Logged_In"];

    if ($_SESSION["Logged_In"] == FALSE){
        echo '<form id="Login" action="check_user.php" method="post">
                  <p><h2>Login</h2> <br>

                  Benutzername* <br> <input id= "login-usr" type="text" name="usr" max=30 required ><br>
                    Password* <br> <input id= "login-psw" type="password" name="psw" max=30 required ><br>
                    </>
                    <p class= "form-message"></p>
                  <input type="submit" id="coin_coin" value="Coin Coin">
                  </form>';
    }
    else {
      echo '<form id="Change_Password" action="change_password.php" method="post">
                <p><h4>Change Password</h4>


                  new Password* <br> <input id= "login-psw" type="password" name="psw" max=30 required ><br>


                  <p class= "form-message"></p>
                <input type="submit" id="coin_coin" value="Coin Coin" name="submit">
                </form>';
        echo "<br><a href="."LogOut.php"."> Log Out <br> ".$_SESSION["usr"]."</a>";

    }
    ?>

    </div>

        </ul>

    </div>

</nav>
