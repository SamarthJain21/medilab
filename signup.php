
<?php
if(isset($_POST['first'])){

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}
if (isset($_POST['Gender'])) {
    $gender=$_POST['Gender'];
} else {
    $gender=NULL;
}
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$phn=$_POST['phone'];

$addr=$_POST['Address'];
$pin=$_POST['Pincode'];
$aadhar=$_POST['aadhar'];
$dob=$_POST['dob'];
$blood=$_POST['blood'];
$pass=$_POST['password'];

$cname=$_POST['cname'];
$cnum=$_POST['cnum'];
$cadd=$_POST['cadd'];

// $c1=$_POST['c1'];
// $c2=$_POST['c2'];
// $c3=$_POST['c3'];

// $c11=implode(',',$c1);
// $c21=implode(',',$c2);
// $c31=implode(',',$c3);



mysqli_select_db($con,'medic');
$s="select * from pers where mail = '$email'";
$result=mysqli_query($con,$s);
$numb=mysqli_num_rows($result);

if($numb==1){
    echo"username already taken";
}
else{

$sql="INSERT INTO `medic`. `pers` (`first`, `last`, `mail`,`pass`, `phn`, `gender`, `addd`, `pin`, `aadhar`, `dob`, `blood`) 
VALUES ('$first', '$last', '$email','$pass', '$phn', '$gender', '$addr', '$pin', '$aadhar', '$dob', '$blood');";


if($con->query($sql)!=true){
    

    echo "error: $sql <br> $con->error";
}

$sql1="INSERT INTO `medic`.`emergency` (`mail`, `name`, `phn`, `addr`) 
VALUES ('$email', '$cname', '$cnum', '$cadd');";

if($con->query($sql1)==true){
    echo "successfully inserted";
}
else{
    echo "error: $sql1 <br> $con->error";
}
 
    if(isset($_POST['c3']))
    $sql2="INSERT INTO `medic`.`history` (`mail`, `cb`, `dis`) 
        VALUES ('$email', 'c3', '$c31');";
        

    if(isset($_POST['c2']))
    $sql2="INSERT INTO `medic`.`history` (`mail`, `cb`, `dis`) 
        VALUES ('$email', 'c2', '$c21');";
        
        
    if(isset($_POST['c1']))
    $sql2="INSERT INTO `medic`. `history` (`mail`, `cb`, `dis`) 
        VALUES ('$email', 'c1', '$c11');";
             



// $sql2="INSERT INTO `history` (`mail`, `cb`, `dis`) 
// VALUES ('$mail', 'c1', '$c11');";
$con->close();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body background="images/">
    <div class="container">
    <h1 class="main_heading">Signup Form</h1>
    <hr>
    <h2>User Information</h2>
    <form action="" method="post">
        <fieldset>
            <legend><h3>Personal Details</h3></legend>
        <label for="name">Full Name - &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="name" placeholder="First" name="first">
        <input type="text" id="name" name="last" placeholder="Last"> 
        <br>
        <br>
        <label id="email">Email Address- &nbsp;</label>
        <input name="email" type="email" id="email" placeholder="abc@email.com">
        <section>
  <label for="password">Password</label>
  <button id="toggle-password" type="button" aria-label="Show password as plain text. Warning: this will display your password on the screen." style="position: relative;
    left: 400px;">Show password</button>
  <input id="password" name="password" type="password" autocomplete="current-password" aria-describedby="password-constraints" style="position: relative; top: 40px;right: 200px; width: 622px;" required>
  <div id="password-constraints" style="position: relative; top: 40px; margin-top: 10px;">At least eight characters, with at least one lowercase and one uppercase letter.</div>
</section>
<br>
        <br>
        <br>
        <label for="pno">Phone Number- &nbsp;</label>
        <input type="number" id="pno" name="phone">
        <br><br>
        <label>Gender - </label><br>
        <input type="radio" name="Gender" value="female">Female <br>
        <input type="radio" name="Gender" value="male">male<br>
        <input type="radio" name="Gender" value="others">others<br>
        <br>

        <label>Address-</label><br>
        <textarea rows="5" cols="40" placeholder="enter your address" name="Address"></textarea>
        <br><br>

        <label>Pincode -</label>
        <input type="number" placeholder="XXXXXX" name="Pincode" value="Pincode"><br><br>

        <label>Aadhar Number -</label>
        <input type="number" placeholder="XXXX  XXXX  XXXX  XXXX" name="aadhar"><br><br>

        <label>Date of Birth -</label>
            <input type="date" name="dob"><br><br>

        <label>Blood Group -</label>
        <select name="blood" >
            <option selected="">-select blood group</option>
            <option value="A+">A+</option>
            <option value="A+">B+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="AB-">AB-</option>
        </select>
     </fieldset><br>

     <fieldset>
         <legend style="margin-top: 100px; margin-bottom: 30px;font-size: 2rem;">Medical History</legend>
         <label></label>
         <input class="c3" name="c3[]" class="c" type="checkbox" value="Are you under a physician's care now?">Are you under a physician's care now?<br>
         <input class="c3" name="c3[]" type="checkbox" value="Have you ever been hospitalized or had a major operation? ">Have you ever been hospitalized or had a major operation? <br>
         <input class="c3" name="c3[]" type="checkbox" value="Have you ever had a serious head or neck injury?">Have you ever had a serious head or neck injury?<br>
         <input class="c3" name="c3[]" type="checkbox" value="Are you taking any medication, pills or drugs?">Are you taking any medication, pills or drugs?<br>
         <input class="c3" name="c3[]" type="checkbox" value="Do you use Tobaco">Do you use Tobaco<br>
         <input class="c3" name="c3[]" type="checkbox" value="Do you use controlled substances">Do you use controlled substances<br><br>

         <fieldset>
             <legend style="margin3top: 100px; margin-bottom: 30px; font-size: 2rem;">Are you allergic to any of the following</legend>
             <input class="c2" name="c2[]" cla3s="c" type="checkbox" value="Asprin">Asprin<br>
             <input class="c2" name="c2[]" class="c" type="checkbox"value="Penecilin">Penecilin<br>
             <input class="c2" name="c2[]" type="checkbox"value="Codeine">Codeine<br>
             <input class="c2" name="c2[]" type="checkbox"value="Local Anesthetics">Local Anesthetics<br>
             <input class="c2" name="c2[]" type="checkbox"value="Acrylic">Acrylic<br>
             <input class="c2" name="c2[]" type="checkbox"value="Metal">Metal<br>
             <input class="c2" name="c2[]" type="checkbox"value="Latex">Latex<br>
             <input class="c2" name="c2[]" type="checkbox"value="Sulfa">Sulfa Drugs<br>
             <input class="c2" name="c2[]" type="checkbox"value="others">others<br>
         </fieldset><br>

         <fieldset>
             <legend style="margin-top: 100px; margin-bottom: 30px;font-size: 2rem;">Do you have any of the following</legend>
             1.<input class="c1" name="c1[]" value="AIDS/HIV positive  " class="c" type="checkbox">AIDS/HIV positive &nbsp;<br>
             2.<input class="c1" name="c1[]" value="Alzheimers Disease " type="checkbox">Alzheimers Disease<br>
             3.<input class="c1" name="c1[]" value="Anemia " type="checkbox">Anemia<br>
             4.<input class="c1" name="c1[]" value="Anigma " type="checkbox">Anigma<br>
             5.<input class="c1" name="c1[]" value="Arthiritis " type="checkbox">Arthiritis<br>
             6.<input class="c1" name="c1[]" value="Artificial Heart Valve " type="checkbox">Artificial Heart Valve<br>
             7.<input class="c1" name="c1[]" value="Artificial Joint " type="checkbox">Artificial Joint<br>
             8.<input class="c1" name="c1[]" value="Asthama" type="checkbox">Asthama<br>
             9.<input class="c1" name="c1[]" value="Blood Disease" type="checkbox">Blood Disease<br>
            10.<input class="c1" name="c1[]" value="Blood Transfusion "  type="checkbox">Blood Transfusion<br>
            11.<input class="c1" name="c1[]" value="Blood Problem "  type="checkbox">Blood Problem<br>
            12.<input class="c1" name="c1[]" value="Bruise Easily "  type="checkbox">Bruise Easily<br>
            13.<input class="c1" name="c1[]" value="Cancer "  type="checkbox">Cancer<br>
            14.<input class="c1" name="c1[]" value="Chemotherapy "  type="checkbox">Chemotherapy<br>
            15.<input class="c1" name="c1[]" value="Chest Pains "  type="checkbox">Chest Pains<br>
            16.<input class="c1" name="c1[]" value="Cold Sores "  type="checkbox">Cold Sores<br>
            17.<input class="c1" name="c1[]" value="Cortisone Medicine "  type="checkbox">Cortisone Medicine<br>
            18.<input class="c1" name="c1[]" value="Diabetes "  type="checkbox">Diabetes<br>
            19.<input class="c1" name="c1[]" value="Drug Addiction "  type="checkbox">Drug Addiction<br>
            20.<input class="c1" name="c1[]" value="Easily Winded"  type="checkbox">Easily Winded<br>
            21.<input class="c1" name="c1[]" value="Excessive Bleeding"  type="checkbox">Excessive Bleeding<br>
            22.<input class="c1" name="c1[]" value="Excessive Thirst" type="checkbox"> Excessive Thirst<br>
            23.<input class="c1" name="c1[]" value="Frequent Cough" type="checkbox"> Frequent Cough<br>
            24.<input class="c1" name="c1[]" value="Frequent Diarrahea" type="checkbox"> Frequent Diarrahea<br>
             





         </fieldset>

     </fieldset>
     <br>
     <fieldset>
         <legend style="margin-top: 100px; margin-bottom: 30px;font-size: 2rem;">Emergency Contact</legend>
         <label>Contact Name:</label>
         <input type="text" style="position: relative; left: 10px;" name="cname"><br><br>
         <label>Contact Number</label>
         <input type="number" name="cnum" >
         <br><br>
         <label>Contact Address</label>
         <br>
         <textarea rows="5" cols="40" style="width: 522px; height: 77px; margin-top: 10px;" name="cadd"></textarea>
     </fieldset>
<br>
     <fieldset>
        <legend style="margin-top: 100px; margin-bottom: 30px;font-size: 2rem;">Attach Your Reports</legend>
        <input type="file" name="rep1"><br>
        <input type="file" name="rep2"><br>
        <input type="file" name="rep3"><br>
        <input type="file" name="rep4"><br>

   </fieldset>
   <br>
   <fieldset>
    <legend style="margin-top: 100px; margin-bottom: 30px;font-size: 2rem;">Attach Your Prescriptions</legend>
    <input type="file" name="file1"><br>
    <input type="file" name="file2"><br>
    <input type="file" name="file3"><br>
    <input type="file" name="file4"><br>

</fieldset>

     <input type="submit" style="width: 340px; height: 60px; margin-left: 350px; margin-top: 20px;     font-size: 1.7rem">
    </center>
    </form>
</div>
</body>
</html>