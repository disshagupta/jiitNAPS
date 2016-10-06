

<!DOCTYPE html>
<html>
<body>
	</br> </br>
	<?php
	session_start();
if(isset($_SESSION['emailid']))
{// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 

header("location:logouted.html");
}

else 
{header("location:homepage.html");
}
?>
	
	
	
</body>
</html>