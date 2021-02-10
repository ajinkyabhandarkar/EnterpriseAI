<?php
include "db.php";
$userid=$_POST['userid'];
$sentiment=$_POST['sentiment'];
$usercomment=$_POST['usercomment'];

$updatetbl=mysqli_query($con,"INSERT INTO `comments`(`sentiment`, `userid`, `usercomment`) VALUES ('$sentiment','$userid', '$usercomment')");
