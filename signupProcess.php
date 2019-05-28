<?php
 include 'db.php';

function Validate($data){
  $data= trim($data);
  $data = stripslashes($data);
  $data=htmlspecialchars($data);

  return $data;
}



  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);


  $MobNo=Validate($_POST['MbNo']);

  $address=Validate($_POST['Place']);
  $city=Validate($_POST['City']);
  $state=Validate($_POST['State']);
  $pincode=Validate($_POST['PinCode']);


  $email=Validate($_POST['email']);

  $password=$_POST['password'];

    $query = "INSERT INTO user_details(fname,lastname,email,password,phno,address,city,state,pincode,flag) VALUES('".$firstName."','".$lastName."','".$email."','".$password."','".$MobNo."','".$address."','".$city."','".$state."','".$pincode."',0)";
  mysqli_query($conn,$query);
  //header("Location:sellerEnquiryForm.php");
redirect();


function redirect()
{
  header("Location:registerSuccess.php");
}

 ?>
