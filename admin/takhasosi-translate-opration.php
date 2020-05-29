<?php
session_start();
include_once("db.php");
$peigiri=$_POST['peigiri'];
$matn=$_POST['matn'];
$daytakhasos=$_POST['dayy'];
$eghiteentakhasos=$_POST['eghiteen'];
$twelvetakhasos=$_POST['twelve']; 
$normal=$_POST['normal'];
$halfstant=$_POST['halfstant'];
$stant=$_POST['stant'];
$sql = "INSERT INTO matntranslate (matn,peigiri,dayvizheh,eghiteenvizheh,twelvevizheh,daytakhasos,eghiteentakhasos,twelvetakhasos,dayomoomi,eghiteenomoomi,twelveomoomi,normal,halfstant,stant) VALUE ('$matn','$peigiri','0','0','0','$daytakhasos','$eghiteentakhasos','$twelvetakhasos','0','0','0','$normal','$halfstant','$stant')";
if($conn->query($sql) === TRUE) {
    header("Location: http://localhost:8080/php/project16-type/admin/payment.php?peigiri=".$peigiri);
    
} else {
    echo "اطلاعات درست نیست";
}
?>
