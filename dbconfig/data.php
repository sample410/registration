<?php
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $emailid = $_POST['emailid'];
   $phonenumber = $_POST['phonenumber'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

//Database connection
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact(firstname, lastname, emailid, phonenumber, subject, message)
	values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssiss",$firstname, $lastname, $emailid, $phonenumber, $subject, $message);
	$stmt->execute();
	echo "Submitted Successfully.....";
	$stmt->close();
	$conn->close();
}
?>