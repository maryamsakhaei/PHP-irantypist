<?php
session_start();
include_once("db.php");
$peigiri=$_POST['peigiri'];
$matn=$_POST['matn'];
$daytakhasos=$_POST['dayy'];
$eghiteentakhasos=$_POST['eghiteen'];
$twelvetakhasos=$_POST['twelve'];
$sql = "INSERT INTO matntype (matn,peigiri,dayvizheh,eghiteenvizheh,twelvevizheh,daytakhasos,eghiteentakhasos,twelvetakhasos,dayomoomi,eghiteenomoomi,twelveomoomi) VALUE ('$matn','$peigiri','0','0','0','$daytakhasos','$eghiteentakhasos','$twelvetakhasos','0','0','0')";
if($conn->query($sql) === TRUE) {
    
} else {
    echo "اطلاعات درست نیست";
}
?>