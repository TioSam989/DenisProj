<?php

include_once('./conexao.php');
include_once('./funcs.php');
session_start();

$uid = $_GET['userid'];
clearCart($uid);

?>