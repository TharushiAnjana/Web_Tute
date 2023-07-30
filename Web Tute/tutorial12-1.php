<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['username'];
$pwd=$_POST['password'];
$gen=$_POST['gender'];
$acdyear=$_POST['year'];
$mobile=$_POST['mobile'];

?>

<table border="1">
<tr><td>First Name</td><td><?php echo"$fname";?></td></tr>
<tr><td>Last Name</td><td><?php echo"$lname";?></td></tr>
<tr><td>Username</td><td><?php echo"$uname";?></td></tr>
<tr><td>Password</td><td><?php echo"$pwd";?></td></tr>
<tr><td>Gender</td><td><?php echo"$gen";?></td></tr>
<tr><td>Academic Year</td><td><?php echo"$acdyear";?></td></tr>
<tr><td>Phone No</td><td><?php echo"$mobile";?></td></tr>



</table>



