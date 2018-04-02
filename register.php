<?php

require 'php_connection.php';
//parameters in quotes " " are got from android at URLEncoder.encode
$name=$_POST["name"];
$age=$_POST["age"];
$salary=$_POST["salary"];
$username=$_POST["username"];
$password=$_POST["password"];
$mysql_query="insert into employeetable(name,age,salary,username,password) values('$name','$age',"
        . "'$salary','$username','$password')";

if($conn->query($mysql_query)==TRUE)
{
    echo 'Inserted data success';
}
 else {
    echo "Inserted data wasn't success";    
}

?>