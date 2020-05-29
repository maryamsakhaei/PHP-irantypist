<?php
session_start();
include_once("db.php");
$peigiri=$_POST['peigiri'];
$matn=$_POST['matn'];//برای پی اچ پی هست//$matn نیز برای دیتابیس هست
$dayomoomi=$_POST['dayy'];
$eghiteenomoomi=$_POST['eghiteen'];
$twelveomoomi=$_POST['twelve'];
$sql = "INSERT INTO matntype (matn,peigiri,dayvizheh,eghiteenvizheh,twelvevizheh,daytakhasos,eghiteentakhasos,twelvetakhasos,dayomoomi,eghiteenomoomi,twelveomoomi) VALUE ('$matn','$peigiri','0','0','0','0','0','0','$dayomoomi','$eghiteenomoomi','$twelveomoomi')";
if($conn->query($sql) === TRUE) {
} else {
    echo "اطلاعات درست نیست";
}
?>