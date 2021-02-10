<?php
include "db.php";
$sql=mysqli_query($con,"select * from `comments`");

while($rows=mysqli_fetch_array($sql)){
    echo "<p class='chat-bubble you bg-warning text-dark m-0'>".$rows['sentiment']."</p>";
    echo "<p class='cchat-bubble me bg-success text-light m-0'>".$rows['usercomment']."</p>";
   
}