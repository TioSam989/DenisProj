<?php
if (isset($_POST['Sim'])){

    session_start();
    unset($_SESSION["admin"]);
    unset($_SESSION["user"]);
    header("Location:login.php");

} else {

    header("Location:paineladmin.php");

}
    
?>