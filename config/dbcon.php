<?php 
$host = "localhost";
$username ="root";
$password = "12345678";
$databases = "db_food_order";

$con = mysqli_connect("$host","$username","$password","$databases");

if(!$con){
    print("Database Not connect");
}
?>