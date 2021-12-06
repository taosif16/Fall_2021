<?php
include('../model/db.php');

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"faculty",$_REQUEST['fname'],$_REQUEST['ri'],$_REQUEST['designation']);


if ($userQuery->num_rows > 0) 
{
    echo "<table><tr><th>ID</th><th>Name </th> <th>Department</th> <th>Interest</th><th>Designation</th></tr>";
    while($row = $userQuery->fetch_assoc())
    {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } 
  else
   {
    echo "0 results";
   }


$connection->CloseCon($conobj);



?>