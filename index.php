<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user']));
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
    <!-- My JavaScript file -->
    <script type="text/javascript" src="js/myscript.js"></script>

    <title>RestroStar</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
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
    <form class="form-inline my-2 my-lg-0" action="login.php" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Email" name="email" id='email' aria-label="Email">
      <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password" id='password' aria-label="Password">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Login" onclick="return validateLogin()">Login</button>
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


<!-- Jumbotrom -->
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-7 offset-md-5">
        <div class="jumbotron-content">
          <h2> RestroStar</h2>
          <p> Find the Best Restaurants in the city </p>
          <p> Best Food from Best Restaurants </p>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
  <div class="col-4" style="height:5px;background:#BC2100;margin-bottom:3px;"></div>

<!--Green Line Below the jummobtron -->
  <div class="col-4" style="height:5px;background:#3AC50D;margin-bottom:3px;"></div>

<!--Blue Line Below the jummobtron -->
  <div class="col-4" style="height:5px;background:#0D41C5;margin-bottom:3px;"></div>
</div>
</div><br>


<!-- Printing Random Restaurants-->
<?php
include('db.php');
$n =4; //random variable here we are printing 4 restaurants card randomly so $n =4;
$sql="SELECT * FROM restaurant order by RAND() limit $n";

 $result= $conn->query($sql);

 echo "<div class='container'>";
 echo "<div class=".'"row"'.">";


while($row = $result->fetch_assoc()){
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

<!-- Random Ends Here -->
<script type="text/javascript">
var email = document.getElementById('email');
var password = document.getElementById('password');

function validateLogin(){
  var x=email.value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
    email.style.border = "1px solid red";
    document.getElementById('email').style.color = "red";
    email.placeholder = "Enter a valid E-mail";
    email.focus();
    return false;
     }

  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password').style.color = "red";
    password.style.border = "1px solid red";
    password.placeholder = "Password is required";
    password.focus();
    return false;
  }

}

</script>

  </body>
</html>
