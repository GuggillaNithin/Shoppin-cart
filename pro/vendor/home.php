<?php
include "authguard.php";
include "menu.html";
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    
 </head>
 <body>
    <!-- <h1>Vendor Welcomes You To Home Page</h1> -->
    <div class="d-flex justify-content-center align-items-center vh-100 p-5">
    <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
      <h3 class="text-center">Upload Product Here...</h3>
       <input name="name" class="form-control mt-2" type="text" placeholder="Product Name">
       <input name="price" class="form-control mt-2" type="text" placeholder="Product Price">
       <textarea name="detail" rows="5" class="form-control mt-2" placeholder="Product Description"></textarea>
       <input accept=".jpg,.png" name="pdtimg" class="form-control mt-2" type="file">
       <div class="text-center">
       <button class="btn btn-success mt-3">Upload</button>
</div>
    </form>
 </body>
 </html>