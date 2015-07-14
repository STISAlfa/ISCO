<?php

if(isset($_REQUEST['username'])){
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

$username = $_REQUEST['username'];
//$username = 'tes';


$query = $conn->query("SELECT * FROM user WHERE username ='$username'");
$result = $query->num_rows;
if ($result == 0){
$valid = 'true';}
else{
$valid = 'false';
}
echo $valid;
}
?>