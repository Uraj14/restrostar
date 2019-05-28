<!DOCTYPE html>
<?php
include('db.php');
session_start();
if(!isset($_SESSION['login_user']));


if(isset($_GET['restId'])){
  $rId = $_GET['restId'];
  $sql = "SELECT * FROM restaurant WHERE restId='$rId'";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()){
    $rName = $row['restName'];
    $rMobile =$row['restMobile'];
    $rEmail = $row['restEmail'];
    $rPlace = $row['restPlace'];
    $rCity = $row['restCity'];
    $rState = $row['restState'];
    $rPincode =$row['restPincode'];
    $rCuisine =$row['restCuisine'];
    $rImage = $row['restImage'];
    $rDesc =$row['restDesc'];
    $rStar = $row['restStar'];
    $rNoReviews = $row['restNoOfReviews'];

    $rating = round($rStar/$rNoReviews,2);


  }
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!--Custom CSS file -->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
    <!-- jQuery file -->
    <script src="js/jQuery.js"></script>
    <!--Bootstrap js file -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <title><?php echo $rName;?>-Restrostar</title>

  </head>
  <body>
    <!--Nav Bar Starts Here-->
    <div class="top-bar"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">RestroStar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="allrestaurant.php">Restaurants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="toprated.php">Top Rated</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cuisine.php">Cuisines</a>
      </li>
    </ul>
    <?php
    if(!isset($_SESSION['login_user'])){ ?>
    <form class="form-inline my-2 my-lg-0" action="login.php" method="post" onsubmit="return validateLogin()">
      <input class="form-control mr-sm-2" type="text" placeholder="Email" name="email" id='email' aria-label="Email">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password" id='password' aria-label="Password">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Login">Login</button>
    </form>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="signup.php"><div class="register">Register</div></a>
      </li>
  </ul>
<?php } ?>

<?php if(isset($_SESSION['login_user'])){?>

  <ul class="navbar-nav mr-auto">

  <li class="nav-item">
    <a class="nav-link" href="#"><?php echo 'Welcome '.$_SESSION['login_user']; ?></a>
  </li>

  <form class="form-inline my-2 my-lg-0" action="logout.php" method="post" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Logout">Logout</button>
  </form>

</ul>

<?php } ?>

  </div>
</nav>

<!--End of Nav Bar -->

<br>
<div class="restc">
  <br>
<div class="container">


<?php

echo "<div class=".'"card-img-top"'." style=".'"text-align:center"'.">";
echo "<img src=".'"'.$rImage.'"'." alt=".'"something"'.">";
echo "<h1 style="." style=".'"text-align:center"'.">";
echo $rName;
echo "</h1>";
echo "<h5 class='rating' style='text-align:center'>";
echo "<b>Average Restaurant Rating :</b>".$rating;
echo "<h5 class='rating' style='text-align:center'>";
echo "<br>Reviews</h5>";
echo "<br><br>";


$sql2 = "SELECT * FROM review WHERE restId='$rId'";
$result2 = $conn->query($sql2);


while($row = $result2->fetch_assoc()){
  $revId = $row['revId'];
  $revCust = $row['cid'];
  $revRating = $row['rating'];
  $revComment = $row['comment'];


  //to get the customer details i.e the reviewer
  $sql3 = "SELECT * FROM user_details WHERE cid='$revCust'";
  $result3 = $conn->query($sql3);
  $row = $result3->fetch_assoc();
  $custName = $row['fname'];
  $custEmail =$row['email'];
  $custId = $row['cid'];

  //bootstrap media to print in this format
  if($_SESSION['userid'] == $custId){
    echo "<div class='media'>";
    echo "<img src='images/review.png' alt='Review' style='width: 30px'> ";
    echo "<div class='media-body'>";
    echo  "<p style='text-align:left;  '>\t By : $custName ($custEmail)</p>";
    echo  "<p style='text-align:left'>\tRated :- $revRating Stars</p>";
    echo "<p style='text-align:left'><b>Comments</b>:-      $revComment";
    echo "</p>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<form class = 'form-inline' method = 'post' action = 'editform.php'>";
    echo "<input type = 'hidden' name ='revId' value='$revId'>";
    echo "<input type = 'hidden' name ='restId' value='$rId'>";
    echo "<input type= 'submit' value ='Edit Review'>";
    echo "</form>";
    echo "<pre>  </pre>";
    echo "<form class = 'form-inline' method = 'post' action = 'delete.php'>";
    echo "<input type = 'hidden' name ='revRating' value='$revRating'>";
    echo "<input type = 'hidden' name ='revId' value='$revId'>";
    echo "<input type = 'hidden' name ='restId' value='$rId'>";
    echo "<input type= 'submit' value ='Delete Review'>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
  }
  else{
  echo "<div class='media'>";
  echo "<img src='images/review.png' alt='Review' style='width: 30px'> ";
  echo "<div class='media-body'>";
  echo  "<p style='text-align:left;  '>\t By : $custName ($custEmail)</p>";
  echo  "<p style='text-align:left'>\tRated :- $revRating Stars</p>";
  echo "<p style='text-align:left'><b>Comments</b>:-      $revComment";
  echo "</p>";
  echo "</div>";
  echo "</div>";
  echo "<br>";
}


}
echo "</div>";
echo "</div>";
if(isset($_SESSION['login_user'])){
  $userId = $_SESSION['userid'];
  echo "<h5><pre>   <b>Do you want to share your experience? Publish Your Review now.<b></pre>  </h5>";
  echo "<form class='form' name='reviewform' method='get' action='postReview.php'>";
  echo "<pre>";
  echo "     On Scale of 1-5, How was it?  ";
  echo "<select name='rating'>";
      echo "<option value='1'>1</option>";
      echo "<option value='2'>2</option>";
      echo "<option value='3'>3</option>";
      echo "<option value='4'>4</option>";
      echo "<option value='5'>5</option>";
  echo "</select><br>";
  echo "</pre>";
  echo "<pre>     Please Write about your experience.  <br>     ";
  echo "<textarea rows='4' cols='100' name='comment' placeholder='Enter Your Comments'>";
  echo "</textarea>";
  echo "<pre>      Enter the Reciept Number: <input type='text' name='recieptNo' placeholder='Your Reciept No.'></input></pre>";
  echo "</pre>";
  echo "<input type=hidden name='restId' value=$rId></input>";
  echo "<input type=hidden name='cid' value=$userId></input>";
  echo "<pre>      <input type=submit name='submit' value='Submit Review'></input></pre>";
  echo "</form>";
}



 ?>

 <?php
/* if(isset($_SESSION['wrongreview'])){ ?>
   <script>
   alert("Please Don't Spam The Review System and Review only If you have Visited the Restaurant");
   </script>

<?php
session_start();
unset($_SESSION[wrongreview]);
} */?>
</div>
</div>


</body>
</html>
