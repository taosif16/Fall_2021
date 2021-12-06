<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }

 function Search($conn,$table,$fname,$ri,$designation)
 {
$result = $conn->query(" SELECT * FROM $table WHERE Name='$fname' OR Interest='$ri' OR Designation='$designation' ");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>