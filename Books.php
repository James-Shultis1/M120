<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Antiquities</title>
    <link rel="stylesheet" href="CSS/CSS.css">
  </head>
  <body>
    <?php include "Header.php";
    // include "Menu.php"; ?>
    <div class="books">
      <div class="bookCont" id="b1">

      </div>
      <div class="bookCont" id="b2">

      </div>
      <div class="bookCont" id="b3">

      </div>
      <div class="bookCont" id="b4">

      </div>
      <div class="bookCont" id="b5">

      </div>
      <div class="bookCont" id="b6">

      </div>
      <div class="bookCont" id="b7">

      </div>
      <div class="bookCont" id="b8">

      </div>
      <div class="bookCont" id="b9">

      </div>
      <div class="bookCont" id="b10">

      </div>
      <div class="bookCont" id="b11">

      </div>
      <div class="bookCont" id="b12">

      </div>
      <div class="bookCont" id="b13">

      </div>
      <div class="bookCont" id="b14">

      </div>
      <div class="bookCont" id="b15">

      </div>
      <div class="bookCont" id="b16">

      </div>
      <div class="bookCont" id="b17">

      </div>
      <div class="bookCont" id="b18">

      </div>
      <div class="bookCont" id="b19">

      </div>
      <div class="bookCont" id="b20">

      </div>
      <div class="bookCont" id="b21">

      </div>
    </div>

    <?php
    // This part was taken from Marcelo's previous project. It was adapted to fit the requirements
    // of the new exam and we did NOT just copy and paste this code,
    // we copied it, completely analysed it made some changes and we fully understand the code. we
    // left the old comments in there, so when we say "I" that's Marcelo exlaining it.
    // Source: https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html

    include "connection.php";
            // First we check if the Page Number is known to us, which in the beginning it will obviously not be, so in case we don't know it, we'll just give it
            // the value 1.
            if (isset($_GET['PageNr']))
            {
                $PageNr = $_GET['PageNr'];
            }
            else
            {
                $PageNr = 1;
            }

            // Here we set how many Articles we want to show per page and we also set the offset for the SQL. The offset will be the number of the page we're at
            // minus 1 multiplied the number of articles per page. This is done like this because the number of the offset will be 1 below the number the SQL will
            // start pulling results from and if we're on page one for example, we only want Articles 1-5, so 1 - 1 * 5 = 0, which means the offset will be 0 and
            // the SQL will pull the first 5 results, without skipping any. On page 2 that would be 2 - 1 * 5 = 5, so we would skip the first 5.
            $ArticlesPerPage = 20;
            $Offset = ($PageNr-1) * $ArticlesPerPage;

            // So here we want to know the amount of articles in order to save it into a variable totalrow.
            $sql = "SELECT COUNT(*) FROM buecher";
            $result = mysqli_query($conn, $sql);
            $TotalRows = mysqli_fetch_array($result)[0];
            // To find out how many pages we need we calculate the total amount of rows devided by the amount of articles per page, simple. However
            // this can end up in fractions of numbers, so to prevent that, we use ceil() which rounds up those fractions.
            $TotalPages = ceil($TotalRows / $ArticlesPerPage);

            // Here we finally put the use of offset into practice. The mysqli query is used to fetch the results.
            $sql = "SELECT * FROM buecher LIMIT $Offset, $ArticlesPerPage";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {// Nice and tidy like they are in the Home Page, the same way.?>

              Note to self: Add in Layout of the books!

                <?php
            }

            // Here we use the lists and links to create the pagination code. The links function similarly to the chapter links, but instead we're using our
            // own variable, which defines which page we're on. I also added in a little extra from myself to display the actual pages around the one the user
            // is currently on. These are also clickable and function the same way.
            ?>
            <div id="PageNavDiv">
                <Nav>
                    <ul class="pagination">
                        <li <?php if($PageNr <= 1){ echo 'class="Disabled"'; } ?>>
                            <a class='NotActive' href="?PageNr=1">First</a>
                        </li>
                        <li <?php if($PageNr <= 1){ echo 'class="Disabled"'; } ?>>
                            <a class='NotActive' href="<?php if($PageNr <= 1){ echo '#'; } else { echo "?PageNr=".($PageNr - 1); } ?>">Prev</a>
                        </li>

                        <?php for($Page = 1; $Page <= $TotalPages; $Page++)
                        {
                            if ($Page == $PageNr - 2 || $Page == $PageNr - 1 || $Page == $PageNr || $Page == $PageNr + 1 || $Page == $PageNr + 2)
                                {?>
                                    <li>
                                    <?php echo "<a "; if ($Page == $PageNr){ echo 'id="Active"';} else { echo "class='NotActive'";} echo " href='?PageNr=".$Page."'>".$Page."</a>";
                                    ?> </li> <?php
                                }
                        }?>

                        <li <?php if($PageNr >= $TotalPages){ echo 'class="Disabled"'; } ?>>
                            <a class='NotActive' href="<?php if($PageNr >= $TotalPages){ echo '#'; } else { echo "?PageNr=".($PageNr + 1); } ?>">Next</a>
                        </li>
                        <li <?php if($PageNr >= $TotalPages){ echo 'class="Disabled"'; } ?>>
                            <a class='NotActive' href="?PageNr=<?php echo $TotalPages; ?>">Last</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <?php
            // Connection is no longer needed so we obviously close it.
            $conn->close();
            ?>

            <!-- This is the same as with the menu covering up the title, but here it's the pagination covering the news article, so a little space is needed. -->
        <br><br><br>

        </body>
    </html>


    <br>
    <?php include "Footer.php"; ?>
  </body>
</html>
