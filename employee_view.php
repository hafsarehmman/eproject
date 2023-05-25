<?php

$con=mysqli_connect("localhost","id19757147_employee_volleyapidata","1q3ws-jsaknsasS","id19757147_employee_volleyapidata");

$result=array();
$result['data']=array();
$sql="select * from employee_users";

$output=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($output)){

    $index['id']=$row['0'];
    $index['name']=$row['1'];
    $index['email']=$row['2'];

    array_push($result['data'],$index);

}

$result['success']='1';
echo json_encode($result);
mysqli_close($con);
?>