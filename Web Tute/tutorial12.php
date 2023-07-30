<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registarion Form</title>
</head>
<body>
   <form action="tutorial12-1.php" method="post" class="container">

   <table>
        <thead>Registarion Form</thead>
<tr><td>First Name:</td><td><input type="text" name="fname" autocomplete="off"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lname" autocomplete="off"></td></tr>
<tr><td>Username:</td><td><input type="text" name="username" autocomplete="off"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" autocomplete="off"></td></tr>
<tr><td>Gender:</td><td><input type="checkbox" name="gender" value="male">Male <br><input type="checkbox" name="gender" value="female">Female</td></tr>
<tr><td>Academic Year:</td><td><select name="year" ><option value="First_Yr">1St Year</option>
<option value="Second_yr">2nd Year</option>
<option value="Third _Yr">3rd Year</option>
<option value="Forth_Yr">4th Year</option></select></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" autocomplete="off"></td></tr>
<tr><td>Phone No:</td><td><input type="text" name="mobile" autocomplete="off"></td></tr> 

<tr><td><input type="submit" name="submit"></td></tr>

    </table>


   </form>
   
</body>
</html>