
<html>
 <body>
<table>
<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone number</th>
<th>Gender</th>
<th>Address</th>
<th>DOB</th>
<th>Blood Group</th>

</tr>

<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"medic");
if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}

$sql="SELECT `first`, `last`, mail,phn,gender,addd,dob,blood from pers ";
$result=$con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

       echo "<tr><td>".$row["first"]."</td>"."<td>".$row["last"]."</td>".
        "<td>".$row["mail"]."</td>"."<td>".$row["phn"]."</td>".
        "<td>".$row["gender"]."</td>"."<td>".$row["addd"]."</td>".
        "<td>".$row["dob"]."</td>"."<td>".$row["blood"]."</td></tr>";

    }
    echo"</table>";
}
else{
    echo "0 result";
}
$con->close();
?> 
</table>
 </body>
</html>