<?php
include('db.php');
$revId = $_POST['revId'];
$restId = $_POST['restId'];
$revRating = $_POST['revRating'];
$sql = "delete from review where revId ='$revId'";
$result = $conn->query($sql);

$sql2 = "UPDATE restaurant SET `restStar`=restStar-$revRating,`restNoOfReviews`=restNoOfReviews-1 WHERE `restId`=$restId";
$result2 = $conn->query($sql2);

if($result == 1 && $result2 ==1)
header("Location: restProfile.php?restId=$restId");
 ?>
