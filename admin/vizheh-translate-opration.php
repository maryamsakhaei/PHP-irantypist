<?php
session_start();
include_once("db.php");
$matn=$_POST['matn'];
$peigiri=$_POST['peigiri'];
$dayvizheh=$_POST['dayy'];
$eghiteenvizheh=$_POST['eghiteen'];
$twelvevizheh=$_POST['twelve'];
$normal=$_POST['normal'];
$halfstant=$_POST['halfstant'];
$stant=$_POST['stant'];
$sql = "INSERT INTO matntranslate (matn,peigiri,dayvizheh,eghiteenvizheh,twelvevizheh,	daytakhasos,eghiteentakhasos,twelvetakhasos,dayomoomi,eghiteenomoomi,twelveomoomi,normal,halfstant,stant) VALUE ('$matn','$peigiri','$dayvizheh','$eghiteenvizheh','$twelvevizheh','0','0','0','0','0','0','$normal','$halfstant','$stant')";
if($conn->query($sql) === TRUE) {
    header("Location: http://localhost:8080/php/project16-type/admin/payment.php?peigiri=".$peigiri);
} else {
    echo "اطلاعات درست نیست";
}
?>