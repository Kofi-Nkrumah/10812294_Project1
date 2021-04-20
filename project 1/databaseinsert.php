<?php

$con = mysqli_connect('localhost','root','','sankofa');

$txtSurname = $_POST['Surname'];
$txtFirstname = $_POST['firstname'];
$txtEmail = $_POST['email'];
$txtpassword = $_POST['password'];


$sql = "INSERT INTO 'members' ('Id','Surname','firstname','email','password') VALUES ('0','$txtSurname','$txtFirstname','$txtEmail','$txtpassword')";

$rs = mysqli_query($con,$sql);

?>