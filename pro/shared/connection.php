<?php

$conn=new mysqli("localhost","root","","acme24",3307);
if($conn->connect_error)
{
    echo "SQL Connection Failed";
    die;
}
?>