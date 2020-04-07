
<?php

$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
$dbname=mysqli_select_db($con,"mynew");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$fname ="";
$lname ="";
$email='';
$pass='';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
}

$sql="insert into register(fname,lname,email,password) values ('$fname','$lname','$email','$pass')";
if(mysqli_query($con, $sql)){
    echo "<div class='jumbotron'>";
    echo "<h1><center>Welcome $fname $lname</center></h1>";
    echo "</div>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);


 ?>
