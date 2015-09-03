<?php
ini_set('display_errors', 1);
$link = mysqli_connect('', '', '', '');

if(!$link){
	echo mysqli_connect_error();
}else{
	echo "database ok";	
}