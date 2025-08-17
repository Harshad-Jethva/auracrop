<?php

$severname = "localhost";
$username = "root";
$password="";
$database= "auracrop";

$conn = new mysqli($severname,$username,$password,$database);

if(!$conn){
    echo ("sorry we dont connected");
    
}
// else{
//     echo "connected successfully.... ";
// }

?>