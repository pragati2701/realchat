<?php 

# server name
$sName = "localhost";
# user name
$uName = "user1";
# password
$pass = "12345";

# database name
$db_name = "chatapp";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}