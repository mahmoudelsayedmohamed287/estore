<?php
session_start();

$_SESSION["flash"] = array();
$_SESSION["flash"]["message"] = "Welcom";
$_SESSION["flash"]["status"] = "error";



require_once 'app/bootstrap.php'; 
$home = new sqlStatment();
include "app/libaray/RoutingSystem.php";
new RoutingSystem();








?>






