<?php


$x = mysqli_connect("localhost","root","","Admine_db") or die(mysqli_error($x));
if($x)
{
	echo "Database Connected Sucessfully....";
}
else
{
	echo "Failed";
}

?>



