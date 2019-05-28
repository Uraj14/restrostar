<?php
include('db.php');
session_start();
$revId = $_GET['revId'];
$rId = $_GET['restId'];
$userId = $_GET['cid'];
$oldRating = $_GET['revRating'];

$rating = $_GET['rating'];
$comment = $_GET['comment'];
$sql = "UPDATE review SET restId='$rId',cid='$userId',rating='$rating',comment='$comment' WHERE revId ='$revId' ";
$result = $conn->query($sql);

$sql2 = "UPDATE `restaurant` SET `restStar` = restStar+($rating-$oldRating) WHERE `restaurant`.`restId` = '$rId'";
$result2 = $conn->query($sql2);


if($result==1 && $result2 ==1){
  header("Location: restProfile.php?restId=$rId");
}

 ?>
