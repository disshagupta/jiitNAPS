<?php 

require('check_session.php');
require('db_init_.php');

$emailid = $_SESSION["emailid"];
$title = $_GET["title"];
$grpmem = $_GET["grpmem"];
$desc = $_GET["desc"];
$github = $_GET["github"];
$website = $_GET["website"];
$type = $_GET["type"];

echo $emailid . $title .$grpmem . $desc. $github . $website . $type;

$table = "projects";

$sql_3= "INSERT INTO `minor_naps`.`projects` (`emailid`, `title`, `desc`, `grpmem`, `github`, `website`, `type`, `time`) VALUES ('$emailid', '$title', '$desc', '$grpmem', '$github', '$website', '$type', CURRENT_TIMESTAMP);";
$result=mysqli_query($conn, $sql_3);

if($result==1)
{
  header("location:projects.html");
  echo 1;
}

else {
    header("location:create_project.html");
    
}

?>