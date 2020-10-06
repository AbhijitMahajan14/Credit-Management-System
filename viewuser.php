<?php
session_start();
$con=mysqli_connect('localhost','id14917959_abc','hashFunction@1','company');
//mysqli_select_db($con,'id14917959_abc');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
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
    </head>
    <body>
      <style>
      .rdo{
        color: green;
      }
</style>




  <header class="header_area">
      <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#"><i class="far fa-id-card"> </i><b> CREDIT MANAGMENT SYSTEM</b>
          </a>


          <a class="navbar-brand" href="index.php"> HOME
          </a>

          <a class="navbar-brand" href="selectuser.php"><i class="fas fa-angle-double-right"></i>SENDER DETAILS
          </a>

          <a class="navbar-brand" href="viewuser.php"><i class="fas fa-angle-double-right"></i> SELECT RECIPIENT
          </a>

        </nav>
      </div>
    </header>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even){background-color: #f2f2f2}

      th {
        background-color: #4CAF50;
        color: white;
      }
      </style>


        <form action="transfer.php" method="post" style="position: relative; left: 4%;">
       <table>

           <?php
     while($row = $result->fetch_assoc()) { ?>


   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>" class="rdo"><?php echo $row["name"]; ?></td>

   </tr>
<?php }
  ?>



        </table>


                <br><input class="btn success but2  mr-4 text-uppercase" type="submit" value="credit">

        </form>
        </div>
    </body>
</html>
