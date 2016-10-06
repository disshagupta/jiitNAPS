<?php 


require('db_init_.php');
 
$enrollno=$_POST["enrollno"];
$first=$_POST["first"];
$last=$_POST["last"];
$emailid=$_POST["emailid"]; // 
$dob=$_POST["dob"];
$phoneno=$_POST["phoneno"];
$year=$_POST["year"];
$batch=$_POST["batch"];
$password=$_POST["password"];
$type=$_POST["type"];
$depart=$_POST["depart"];
echo $enrollno."\n".$first."\n".$last."\n".$emailid."\n".$phoneno."\n".$dob."\n".$year."\n".$batch."\n".$password."\n".$type."\n".$depart."\n";

if ($type == "s")
{$sql_2= "INSERT INTO `minor_naps`.`accounts` (`enrollno`, `first`,`last`,`emailid`, `phoneno`, `dob`, `year`, `batch`, `password`, `time`) 
         VALUES ('$enrollno','$first','$last', '$emailid', '$phoneno', '$dob', '$year', '$batch', '$password', CURRENT_TIMESTAMP);";
echo "student";
$result=mysqli_query($conn, $sql_2);

if($result==1)
{
  header("location:homepage.html");
  echo 1;
}
}
else {
    $sql_2= "INSERT INTO `minor_naps`.`accounts_faculty` (`empno`, `first`,`last`,`emailid`, `phoneno`, `dob`, `department`, `password`, `time`) 
         VALUES ('$enrollno','$first','$last', '$emailid', '$phoneno', '$dob', '$depart', '$password', CURRENT_TIMESTAMP);";
echo "faculty";
        
$result=mysqli_query($conn, $sql_2);

if($result==1)
{
   header("homepage.html");
  echo 1;
}
}
?>