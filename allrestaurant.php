<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user']));
include('db.php');

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Custom CSS file -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- jQuery file -->
    <script src="js/jQuery.js"></script>
    <!--Bootstrap js file -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>All-RestroStar</title>
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
<?php
$sql="SELECT * FROM restaurant";
 $conn= mysqli_connect("localhost","root","","restrostar");

 $result= $conn->query($sql);

 echo "<div class='container'>";
 echo "<div class=".'"row"'.">";

while($row = $result->fetch_assoc())
 {
   $rNo=$row['restId'];
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

  echo "<div class=".'"col-sm-3"'."style=".'"margin-bottom:10px; margin-top:10px"'.">";
  echo "<div class=".'"card h-100"'."style=".'"width:16rem"'.">";
  echo "<div class=".'"card-body"'.">";
  echo "<img class="."card-img-top"." src=".'"'.$rImage.'"'."alt=".'" "'.">";
  echo "<h5 class=".'"card-title"'.">";
  echo $rName; echo "</h5>";
  echo "<p class=".'"card-text"'.">";
  echo $rDesc."</p>";
  echo "<form action=".'"restprofile.php"'."method=".'"get"'.">";
  echo "<input type=".'"hidden"'." name=".'"restId"'." value=".$rNo.">";
   echo "<button class=".'"btn btn-outline-success my-2 my-sm-0"'." type=".'"submit"'." value=".'"Details"'.">"."Get Details";
   echo "</form>";
   echo "</div>";
   echo "</div>";
   echo "</div>";

 }
  echo "</div>";
 echo "</div>";
 ?>






</body>
</html>
