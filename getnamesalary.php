<?php

require 'php_connection.php';
$getdata_query="select name,salary from employeetable;";

if($getdata_query)
{
while($row= mysqli_fetch_array($getdata_query))
{
  $flag[]=$row;  
}
print(json_encode($flag));
}

?>