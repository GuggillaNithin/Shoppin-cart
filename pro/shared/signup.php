<?php
$uname=$_POST["username"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$usertype=$_POST["usertype"];
if($pass1!=$pass2)
{
    echo "Password Missmatch";
    die;
}
if(empty($uname) || empty($usertype))
{
    echo "Username and Usertype cannot be empty";
}
if($upass1 != $upass2) {
    echo "Password mismatch";
    die;
}
$cipher_pass=md5($pass1);

$conn=new mysqli("localhost","root","","acme24",3307);
try
{
mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$cipher_pass','$usertype')");
echo "Registration success";
}
catch(Exception $e)
{
    echo "Error in inserting user $e";
}

?>
