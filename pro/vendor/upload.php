<?php

include "authguard.php";
$file_name=$_FILES['pdtimg']['name'];
$source_path=$_FILES['pdtimg']['tmp_name'];
$dest_path="../shared/images/".$file_name;
echo $dest_path;
move_uploaded_file($source_path,$dest_path);
include "../shared/connection.php";
$query="Insert into product(name,prize,detail,impath,uploaded_by) 
values('$_POST[name]','$_POST[price]','$_POST[detail]','$dest_path',$_SESSION[userid])";
echo $query;
mysqli_query($conn,$query);
?>