<?php
session_start();
$_SESSION['login_status']=false;
$uname=$_POST['username'];
$upass=$_POST['password'];
$cipher_pass=md5($upass);
$conn=new mysqli("localhost","root","","acme24",3307);
$sql_result=mysqli_query($conn,"select * from user where username='$uname' and password='$cipher_pass'");
// print_r($sql_result);

if(mysqli_num_rows($sql_result)==0)
{
    echo "<h1> Login Invalid</h1>";
    die;
}
else{
    echo "<h1>Login Success</h1>";
    $_SESSION['login_status']=true;
    $dbrow=mysqli_fetch_assoc($sql_result);
    print_r($dbrow);
    $_SESSION['usertype']=$dbrow['usertype'];
    $_SESSION['username']=$dbrow['username'];
    $_SESSION['userid']=$dbrow['userid'];

    if($dbrow['usertype']=="vendor")
    {
    header("C:\Users\nithi\OneDrive\Desktop\pro\vendor\home.php");
    }
    else if($dbrow['usertype']=="customer")
    {
        header("C:\Users\nithi\OneDrive\Desktop\pro\customer\home.php");
    }
}
?>