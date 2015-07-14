<?php

if(isset($_REQUEST['email'])){
$servername = "localhost";
$username = "root";
$password = "";
$db = 'isco';

    $conn = new mysqli($servername, $username, $password, $db);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";    


header('Content-type: application/json');

$email = $_REQUEST['email'];
//$username = 'tes';


$query = $conn->query("SELECT * FROM user WHERE email ='$email'");
$result = $query->num_rows;
if ($result == 0){
$valid = 'true';}
else{
$valid = 'false';
}
echo $valid;
}
?>