<?php

session_start();
$con=mysqli_connect('localhost','id14917959_abc','hashFunction@1','company');
$q="select * from user";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Details</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <style>

  body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }
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

  <header class="header_area">
      <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#"><i class="far fa-id-card"> </i><b> CREDIT MANAGMENT SYSTEM</b>
          </a>


          <a class="navbar-brand" href="index.php"> HOME
          </a>
          <a class="navbar-brand" href="getdeatil.php"><i class="fas fa-angle-double-right"></i> USER DETAILS
          </a>

        </nav>
      </div>
    </header>

<table>
 <thead>
  <th>Name</th>
  <th>Email</th>
  <th>Credit</th>

 <tbody>
   <tr>
     <?php

      $row=mysqli_fetch_array($result);
     ?>
     <td><?php echo  $row["name"]; ?></td>
     <td><?php echo  $row["email"]; ?></td>
     <td><?php echo  $row["credit"]; ?></td>


   </tr>
   <tr>
     <?php

     $row=mysqli_fetch_array($result);
     ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>


   </tr>
   <tr>
       <?php

       $row=mysqli_fetch_array($result);
       ?>
       <td><?php echo  $row["name"]; ?></td>
       <td><?php echo  $row["email"]; ?></td>
       <td><?php echo  $row["credit"]; ?></td>


     </tr>
   <tr>
    <?php

     $row=mysqli_fetch_array($result);
       ?>
       <td><?php echo  $row["name"]; ?></td>
       <td><?php echo  $row["email"]; ?></td>
       <td><?php echo  $row["credit"]; ?></td>


    </tr>
   <tr>
    <?php

     $row=mysqli_fetch_array($result);
       ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>


    </tr>
   <tr>
    <?php

     $row=mysqli_fetch_array($result);
           ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>


        </tr>
   <tr>
            <?php

         $row=mysqli_fetch_array($result);
               ?>
        <td><?php echo  $row["name"]; ?></td>
        <td><?php echo  $row["email"]; ?></td>
        <td><?php echo  $row["credit"]; ?></td>


            </tr>
   <tr>
            <?php

         $row=mysqli_fetch_array($result);
               ?>
        <td><?php echo  $row["name"]; ?></td>
        <td><?php echo  $row["email"]; ?></td>
        <td><?php echo  $row["credit"]; ?></td>


            </tr>
   <tr>
          <?php

       $row=mysqli_fetch_array($result);
             ?>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["credit"]; ?></td>


          </tr>
   <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>


        </tr>

</tbody>
</table>
</thead>
<br>

  <div class="d-flex flex-row flex-wrap">
    <button type="button" class="btn success but2 text-uppercase" onclick="window.open('index.php','_self')" style="margin-left:30px;">GO TO HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>



  </body>
</html>
