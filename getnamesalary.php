<?php

require 'php_connection.php';
$getdata_query="select name,salary from employeetable;";
$result= mysqli_query($conn, $getdata_query);

if($result)
{
while($row= mysqli_fetch_array($getdata_query))
{
  $flag[]=$row;  
}
print(json_encode($flag));
}

?>