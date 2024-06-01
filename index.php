<html>
    <title>PHP PROJECT</title>
<?php 
    $host=getenv('MYSQL_HOST', true) ?: 'localhost';
    $db=getenv('MYSQL_DB', true) ?:'mysqldb';
    $username=getenv('MYSQL_USER', true) ?: 'root';
    $password=getenv('MYSQL_PASSWORD', true) ?: 'root';
    $port=getenv("MYSQL_PORT", true) ?: '8003';
    $conn=new mysqli($host,$db,$username,$password,$port);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connection is established";
?>
</html>
