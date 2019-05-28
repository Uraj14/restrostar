<?php
include('db.php');
session_start();


if($_SERVER["REQUEST_METHOD"]=="GET");

$rating = $_GET['rating'];
$comments = $_GET['comment'];
$rId =$_GET['restId'];
$cid = $_GET['cid'];
$recieptNo= $_GET['recieptNo'];

$verifyquery = "SELECT * FROM restreciept WHERE restId='$rId' AND recieptNo='$recieptNo'";
$verifyResult = $conn->query($verifyquery);
$count = mysqli_num_rows($verifyResult);

if($count == 1){
  $sql1 = "INSERT INTO `review` (`revId`, `restId`, `cid`, `rating`, `comment`,`recieptNo`) VALUES (NULL, $rId, $cid, '$rating', '$comments',$recieptNo)";
  $result1 = $conn->query($sql1);

  $sql2 = "UPDATE `restaurant` SET `restStar` = restStar+$rating,`restNoOfReviews` = restNoOfReviews+1 WHERE `restaurant`.`restId` = $rId";
  $result2 = $conn->query($sql2);

  if($result1 == 1 && $result2 ==1){
    header("Location: restprofile.php?restId=$rId");
  }
}else{
  session_start();
  $_SESSION['wrongreview'] == 1;
  header("Location: restprofile.php?restId=$rId");


}






 ?>
