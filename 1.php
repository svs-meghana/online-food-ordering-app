<?php
$conn=new mysqli("localhost:3306","root","meghana","meghana");
echo"check";
if($conn->connect_error)
{
    die("connection-failed".$conn->connect_error);
}
 
  $sal="insert into test values(100);"; 

$res=$conn->query($sal);


    echo "value enterted successfully";

 ?>

