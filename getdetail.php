<?php

session_start();
$con=mysqli_connect('localhost','root','company');
$q="select * from user";
$result=mysqli_query($con,$q);
$row_count=myaqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Details</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="header_area">
      <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#"><i class="far fa-id-card"> </i><b> CREDIT MANAGMENT SYSTEM</b>
          </a>
          <a class="navbar-brand" href="#"><b> > User Details</b>
          </a>

        </nav>
      </div>
    </header>
  </body>
</html>
