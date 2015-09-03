<?php
//ini_set('display_errors', 1);
$link = mysqli_connect('us-cdbr-azure-east-b.cloudapp.net', 'b178002c03d52d', '6f9d6e3a', 'ibrdev');

if(!$link){
	echo mysqli_connect_error();
}else{
	echo "database ok";	
}

echo "<br>";

print_r($_SERVER);