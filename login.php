<?php
$con=mysqli_connect("localhost","id19757147_employee_volleyapidata","1q3ws-jsaknsasS","id19757147_employee_volleyapidata");

$email=$_POST['email'];
$password=$_POST['password'];



$sql="select emp_email,emp_password from employee_users where emp_email='$email' and emp_password='$password'";

$query=mysqli_query($con,$sql);
if($query->num_rows>0){
    echo "success";
}
else{
    echo "failed";
}
?>