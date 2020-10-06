<?php
session_start();
$con=mysqli_connect('localhost','id14917959_abc','hashFunction@1','company');
//mysqli_select_db($con,'id14917959_abc');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST['transfer'];
?>
<html>
<head>
   <title>
   viewUser
    </title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

   <style>

      input[type=text] {
    width: 30%;
    padding: 12px 20px;
    margin-left:25px;
    box-sizing: border-box;
    border-color: #4CAF50;

   }
    </style>
    </head>

    <body>



      <header class="header_area">
          <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="#"><i class="far fa-id-card"> </i><b> CREDIT MANAGMENT SYSTEM</b>
              </a>



              <a class="navbar-brand" href="selectuser.php"><i class="fas fa-angle-double-right"></i> SELECT SENDER
              </a>

              <a class="navbar-brand" href="viewuser.php"><i class="fas fa-angle-double-right"></i> SELECT RECIPIENT
              </a>
              <a class="navbar-brand" href="transfer.php"><i class="fas fa-angle-double-right"></i> ENTER AMOUNT
              </a>

            </nav>
          </div>
        </header>



     <form action="checkcredit.php" method="post" >

          <br><br>
          <input type="text" name="transfer" placeholder="Enter Amount..."><br>
          <br>

          <input class="btn success but2  mr-4 text-uppercase" type="submit"style="margin-left:25px;">

        </form>


      </body>
      </html>
