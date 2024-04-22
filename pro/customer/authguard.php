<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            .header{
                display: flex;
                justify-content: space-evenly;
                background-color: bisque;
            }
        </style>
    </head>
</html>

<?php
session_start();
if(!isset($_SESSION['login_status']))
{
   echo "Skipped Login.Login First";
   die;
}
if($_SESSION['login_status']==false)
{
   echo "Forbidden Login";
   die;
} 
if($_SESSION['usertype']!='customer')
{
    echo "Unauthorized Access";
    die;
}
echo "<div class='header'>
   <div>$_SESSION[userid]</div>
   <div>$_SESSION[username]</div>
   <div>$_SESSION[usertype]</div>
   <div> <a href='../shared/logout.php'>Logout</a> </div>
</div>";
 ?>