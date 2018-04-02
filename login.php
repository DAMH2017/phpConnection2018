<?php

require 'php_connection.php';

$user_name=$_POST["user_name"];
$user_pass=$_POST["password"];
$mysql_query="select * from employeetable where username like '$user_name' and password like '$user_pass';";
$result= mysqli_query($conn, $mysql_query);

if(mysqli_num_rows($result)>0)
{
    $row= mysqli_fetch_assoc($result);
    $name=$row["name"];
    echo 'Login success, welcome '.$name;
}
 else {
    echo 'Login not success';    
}

?>