<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <!-- Custom CSS file -->
  <link rel="stylesheet" href="style.css">
</head>
<body>


  <header class="header_area">
    <div class="main-menu">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><i class="far fa-id-card"> </i><b> CREDIT MANAGMENT SYSTEM</b>
        </a>
				<a class="navbar-brand" href="index.php"> HOME
				</a>
        <a class="navbar-brand" href="selectuser.php"><i class="fas fa-angle-double-right"></i>
SELECT SENDER
        </a>  </nav>
    </div>
  </header>

<form  action="userdetail.php" method="post">

    <table class="flat-table flat-table-1">


    <?php
session_start();
$con=mysqli_connect('localhost','id14917959_abc','hashFunction@1','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<style>
.list1{
border: 2px solid green;
text-align:upper;
width: 250px;
margin-left:25px;
height:50px;
}

</style>
<br>
  <select name="name" onchange="this.form.submit()" class="list1">
      <option > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SELECT USER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
   <?php
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>

        </select>

</div>
    </form>
</body>
</html>
