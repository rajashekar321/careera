
<?php

$username = "nyasha";
//enter your phpmyadmin username above
$password = "pajwjd";

//enter your phpmyadmin password above

$con=mysqli_connect("localhost",$username,$password,"career_guidance");
if(mysqli_connect_error($con))
{
	echo "Failed to connect MySQl:" . mysqli_connect_error();
}
?>