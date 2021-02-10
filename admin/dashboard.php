<?php 
include_once "db.php";
if(!isset($_SESSION['userlog'])){
    header("location: index.php");
  }
 $sessid= $_SESSION['userlog'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php">Sentiment Detection Using Text</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
  <h3>Report</h3>
  <div class="row">
    <div class="col-md-4">
    <table class="table">
  <thead>
    <tr>   
      <th scope="col">No. Of Time Happy Users</th>
      <th scope="col">No. Of Time Sad Users</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<?php 
	$sql=mysqli_query($con,"SELECT * FROM `comments` WHERE `sentiment`='from server:happy'");
	$sql2=mysqli_query($con,"SELECT * FROM `comments` WHERE `sentiment`='from server:sad'");
	?>
      <td><?php echo mysqli_num_rows($sql); ?></td>
      <td><?php echo mysqli_num_rows($sql2); ?></td>
    </tr>
   
  </tbody>
</table>
    </div>
  </div>
</div>



</body>
</html>
