<?php
include('db.php');
session_start();
$error='';
$count=0;

if (isset($_SESSION['login_user'])) {
  header("Location:index.php");}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password= $_POST['password'];

    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $sql = "SELECT * FROM user_details WHERE email='$email' AND password='$password'";

    $login_query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($login_query);
    $result = mysqli_fetch_array($login_query,MYSQLI_ASSOC);
    $_SESSION['fname']=$result['fname'];
    $_SESSION['lname']=$result['lastname'];
    $_SESSION['userid']=$result['cid'];
    $_SESSION['wrongreview']=0;

    if($count == 1){
      $_SESSION['login_user'] = $result['fname'].' '.$result['lastname'];
      header("Location: index.php");
    }
    else{
      header("Location: index.php");
      $_SESSION['fault']=1;

    }
  }


 ?>
