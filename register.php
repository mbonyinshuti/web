<?php
include'config.php';


if(isset($_POST["signup"])){
$fname=$_POST["first"];
$lname=$_POST["last"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["pass"];



$sql="insert into users(First_name,Last_name,username,Email,Password) values('$fname','$lname','$username','$email','$password')";

if($conn->query($sql)===true){
  
    header("Location: index.php");
}
else if(mysqli_errno($conn) == 1062)
{
    echo "<script> alert('This email exists already!!!<br><br>  Try Again');</script>";
}
else{
    die("something went wrong: ".$conn->error);
}

}
	

?>