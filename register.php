<?php
include("connect.php");

if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$pass=$_POST["pass"];
	$cpass=$_POST["cpass"];
	$optional=$_POST["optional"];
	
if(!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($cpass)){
	
	if($pass == $cpass){
		$don="INSERT INTO register(name,email,phone,password,cpassword,optional)VALUES('$name','$email','$phone','$pass','$cpass','$optional')";
	    $sql=mysqli_query($connection,$don);
		$message="registration successful";
	
	}else{
		$message="password doesnt match";
	}
		
}else{
	$message="All Fields Required";
}
	
	
}


?>