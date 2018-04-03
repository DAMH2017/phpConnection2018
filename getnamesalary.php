<?php

require 'php_connection.php';
$param1=$_POST["param1"];
$param1=$_POST["param2"];
$getdata_query="select name,salary from employeetable";
$getDataResult= mysqli_query($conn, $getdata_query);

if($getDataResult)
{
while($row= mysqli_fetch_array($getDataResult))
{
  $flag[]=$row;  
}
print(json_encode($flag));
}

?>