<?php
$server="localhost";
$username="root";
$password="";
$database="customer_login";
$con=mysqli_connect($server,$username,$password,$database);
if($con)
{
    
}
else{
    echo "connection failed".mysqli_connect_error();
}


?>