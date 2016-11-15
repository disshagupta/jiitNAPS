<?php
// title , notice , to , from , subject . time
// var: flag1, flag2 ;
require('check_session.php');
require('db_init_.php');

$emailid = $_SESSION["emailid"];
$title = $_POST["title"];
$notice = $_POST["notice"];
if(empty($_POST["firstyear"])) {$firstyear="";} 
else 
{  $firstyear = "";
      foreach ($_POST['firstyear'] as $s)
     {
         $firstyear = $firstyear." , " .$s; // setting Selected Value
     }
}
if(empty($_POST["secondyear"])) {$secondyear="";} 
else 
{  $secondyear = "";
      foreach ($_POST['secondyear'] as $s)
     {
         $secondyear = $secondyear ." , ".$s; // setting Selected Value
     }

}
if(empty($_POST["thirdyear"])) {$thirdyear="";} 
else 
{  $thirdyear = "";
      foreach ($_POST['thirdyear'] as $s)
     {
         $thirdyear = $thirdyear .", ".$s; // setting Selected Value
     }
}
if(empty($_POST["fourthyear"])) {$fourthyear="";} 
else 
{  $fourthyear = "";
      foreach ($_POST['fourthyear'] as $s)
     {
         $fourthyear = $fourthyear ." , ".$s; // setting Selected Value
     }
}


$to = $firstyear.$secondyear.$thirdyear.$fourthyear;
$subject = $_POST["subject"];


echo $emailid . $title .$notice . $to. $subject ;

$table="accounts_faculty";
$sql_4="SELECT * FROM $table WHERE emailid='$emailid' ";  // sql query
$result4=$conn->query($sql_4);

$row4 = mysqli_fetch_row($result4);
$first = $row4[1];
$last = $row4[2];
$name = $first." ".$last;

echo $name ;
$count4=mysqli_num_rows($result4);//faculty
$result4->close();
if($count4 == 1) {$flag1 = 1;}
else             {$flag1 = 0;}


if($flag1 == 1)
{       
        
        
             //$table = "notices";
                $sql_5= "INSERT INTO `minor_naps`.`notices` (`title`, `notice`, `to`, `from`, `subject`, `time`)   
                 VALUES ('$title', '$notice', '$to', '$name', '$subject', CURRENT_TIMESTAMP);";                               // sql query
      
        $result5=$conn->query($sql_5);   // to be continued
//var_dump($result5);
        if($result5==1)
        {
            $flag2= 1;
       // header("location:main-page.php");
        echo 1;
        }

        else {
            $flag2 = 0;
           // header("location:create_notice.html");
           
            
        }
}
echo $flag1.",".$flag2;

?>