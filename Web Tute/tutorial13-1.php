<?php
$con=mysqli_connect('localhost','root','','university');
if(!$con){
    die(mysqli_error($con));
}
$sql="select * from students";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
<table border="1">
    <thead><th>Id</th><th>Name</th><th>Email</th><th>Password</th></thead>
    <?php echo"
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[password]</td>
    </tr>";?>
</table>



<?php
    }
}
?>