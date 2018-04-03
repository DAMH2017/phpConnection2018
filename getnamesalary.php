<?php

require 'php_connection.php';
$xAxis=$_POST["xData"];
$yAxis=$_POST["yData"];
$getdata_query="select '.$xAxis.','.$yAxis.' from employeetable";
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