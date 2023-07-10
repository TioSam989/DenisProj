<?php
    session_start();
if (isset($_POST['Sim'])){

    unset($_SESSION["admin"]);
    unset($_SESSION["user"]);
    header("Location:login.php");

} else {

    unset($_SESSION["user"]);
    header("Location:login.php");


}
    
?>