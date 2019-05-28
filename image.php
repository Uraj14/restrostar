<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title> Image Upload Test</title>
</head>
<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" value="1000000" name="MAX_FILE_SIZE"><br>
        <input type="file" name="uploadfile"><br>
        <input type="submit" name="submit" value="Upload"><br>
    </form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  $target_path="restImages/";
  $target_path=$target_path.basename($_FILES['uploadfile']['name']);
  if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target_path)){
    $conn = new mysqli("localhost","root","","restrostar");
    $sql = "INSERT into restaurant(restImage) values('$target_path')";
    if($conn->query($sql) == TRUE){
      echo "<br><br>";
    }else{
      echo "error:".$sql.$conn->error;
    }
    $sql2 = "SELECT restImage from restaurant order by restId desc limit 1";
    $result = $conn->query($sql2);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        $path=$row['restImage'];
        echo "<img src='$path' height='280' width'320'";
      }
    }
    $conn->close();
      }
    }

 ?>
