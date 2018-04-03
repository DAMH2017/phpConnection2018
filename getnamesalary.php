<?php

require 'php_connection.php';
$xAxis=$_POST["xAxis"];
$yAxis=$_POST["yAxis"];
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