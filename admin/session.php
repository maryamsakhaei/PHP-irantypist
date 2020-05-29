<?php
session_start();
$state=$_GET["state"];
echo $_SESSION['state']=$state;

?>