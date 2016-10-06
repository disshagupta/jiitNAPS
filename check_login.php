<?php

session_start();

require ('db_init_.php');

$emailid=$_POST["emailid"];
$password=$_POST["password"];

$table="accounts";
$sql="SELECT * FROM $table WHERE emailid='$emailid' and `password` LIKE '$password' ";
$result1=mysqli_query($conn, $sql);

$table2="accounts_faculty";
$sql="SELECT * FROM $table2 WHERE emailid='$emailid' and `password` LIKE '$password' ";
$result2=mysqli_query($conn,$sql);
	// Mysql_num_row is counting table row
	
$count1=mysqli_num_rows($result1);//student
$count2=mysqli_num_rows($result2);//faculty

// check and route to student page
if($count1==1) 
{ $_SESSION["emailid"]= $emailid; 
	//>>>>>>>>>>>30	
$_SESSION["password"]= $password; 

header("location:main-page.html");

}

// check and route to faculty page
if($count2==1)
{$_SESSION["emailid"]= $emailid; 
	//>>>>>>>>>>>30	
$_SESSION["password"]= $password;
header("location:notices-faculty.html"); }
else{
echo"You Did Something Wrong.\n\n I can feel it"."<a href='login.html'><button>go back</button></a>";
}



?>

