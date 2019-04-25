<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('connection.php');
    if(!mysqli_select_db($connection,'sdlab')){
      echo "Database Not selected";
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $Institution=$_POST['Institution'];
    $message=$_POST['message'];
    $division=$_POST['division'];
    $sql="INSERT INTO message(Name,Email,Institution,Message,Division) VALUES('$name','$email','$Institution','$message','$division')";
    if(mysqli_query($connection,$sql)){
      echo "<h1>Thank you Very Much for messaging us.If necessary we will contact you ....</h1>";
    }
    else {
      echo "<h1>Sorry,Message is not Send..</h1>";
    }
    mysqli_close($connection);
     ?>
  </body>
</html>
