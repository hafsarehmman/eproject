<?php
$con=mysqli_connect("localhost","id19757147_employee_volleyapidata","1q3ws-jsaknsasS","id19757147_employee_volleyapidata");
$username=$_POST['u_name'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="insert into employee_users(emp_name,emp_email,emp_password) values('$username','$email','$password')";
$query=mysqli_query($con,$sql);
if($query){
    echo"data addded successfully";
}
else{
    echo "data addded unsuccessfully";
}
?>