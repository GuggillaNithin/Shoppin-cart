<?php
include "authguard.php";
$userid=$_SESSION['userid'];

$pid=$_GET['pid'];
include "../shared/connection.php";

$status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
if($status)
{
    echo "Added to cart successfully";
}
else{
    echo mysqli_error($conn);
}

?>