<?php include_once("../config/dbcon.php"); ?>

<?php 
    if(isset($_POST['register_btn'])){
        print($name = $_POST['name']);
    }
?>