<html>

<body>	
	<?php
$con =mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("scube", $con);
 
$sql="INSERT INTO query (first_name,last_name,email,phone,address,city,state,comment)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[comment]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Thanks for contacting us, we will get back to you shortly."; 
  }

mysql_close($con)
?>



</body>	
</html>