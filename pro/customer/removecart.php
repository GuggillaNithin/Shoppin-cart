<?php
$cartid=$_GET['cartid'];
include "authguard.php";
include "../shared/connection.php";
$status=mysqli_query($conn,"delete from cart where cartd_id=$cartid");
if($status)
{
    echo "Cart item recovered";
    header("location:viewcart.php");

}
else{
    mysqli_error($conn);
}
?>
