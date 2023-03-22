<?php
require('dbconnection.php');
$msg ='';
if(isset($_POST['submit'])){

  

$stmt = $conn->prepare("INSERT INTO employee_tb (first_name,last_name , email_id , emp_password ,phone_number) 
                        VALUES (:first_name,:last_name, :email_id, :emp_password, :phone_number)");
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email_id', $email);
$stmt->bindParam(':emp_password', $password);
$stmt->bindParam(':phone_number', $phone_number);


// set parameters and execute
$first_name =$_POST['fname'];
$last_name =$_POST['lname'];
$email =$_POST['email'];
$password =$_POST['password'];
$phone_number =$_POST['phonenumber'];

$stmt->execute();

$msg = "New record created successfully";

}

?>