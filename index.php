<html>
    <title>PHP PROJECT</title>
<?php 
    $host=getenv('MYSQL_HOST', true) ?: 'localhost';
    $db=getenv('MYSQL_DATABASE', true) ?:'mysqldb';
    $username=getenv('MYSQL_USER', true) ?: 'admin';
    $password=getenv('MYSQL_PASSWORD', true) ?: '123';
    $port=getenv("MYSQL_PORT", true) ?: '9001';
    $conn=new mysqli($host,$db,$username,$password,$port);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connection is established";
?>
</html>
