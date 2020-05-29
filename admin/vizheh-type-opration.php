<?php
session_start();
include_once("db.php");
$peigiri=$_POST['peigiri'];
$matn=$_POST['matn'];
$dayvizheh=$_POST['dayy'];
$eghiteenvizheh=$_POST['eghiteen'];
$eghiteenvizheh=$_POST['twelve'];
$sql = "INSERT INTO matntype (matn,peigiri,dayvizheh,eghiteenvizheh,twelvevizheh,daytakhasos,eghiteentakhasos,twelvetakhasos,dayomoomi,eghiteenomoomi,twelveomoomi) VALUE ('$matn','$peigiri','$dayvizheh','$eghiteenvizheh','$eghiteenvizheh','0','0','0','0','0','0')";
if($conn->query($sql) === TRUE) {
} else {
    echo "اطلاعات درست نیست";
}
?>