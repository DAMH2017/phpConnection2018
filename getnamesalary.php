<?php

require 'php_connection.php';
$param1=$_POST["xAxis"];
$param2=$_POST["yAxis"];
$getdata_query="select '$param1','$param2' from employeetable";
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