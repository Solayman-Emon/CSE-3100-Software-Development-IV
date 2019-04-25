<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connection_Database</title>
  </head>
  <body>
    <?php
     $dbhost="localhost";
     $dbuser="root";
     $dbpass="";
     $db="sdlab";
     $connection=new mysqli($dbhost,$dbuser,$dbpass,$db);

     if($connection->connect_error){
       echo "Connection is Failed";
     }
     else {
       echo "<h1>DataBase Conected Successfully..<h1>";
     }

     ?>

  </body>
</html>
