<?php
$conn = new mysqli("localhost","root","","restrostar");

if($conn->connect_error){
  die("connection error".$conn->connect_error);
}
 ?>
