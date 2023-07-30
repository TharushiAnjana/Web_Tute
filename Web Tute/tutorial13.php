<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$con=mysqli_connect('localhost','root','','university');
if(!$con){
    die(mysqli_error($con));
}
$sql="insert into students(name,email,password)
values('$name','$email','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    echo"Inserted Successfully";
}else{
    die(mysqli_error($con));
}
?>