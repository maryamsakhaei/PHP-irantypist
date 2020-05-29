<?php
session_start();
include_once("db.php");
$state=$_GET['state'];
$peigiri=$_GET['peigiri'];
$sql = "UPDATE ordertranslate SET state='$state' WHERE peigiri='$peigiri'";
if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost:8080/php/project16-type/admin/detail-translate.php?peigiri=".$peigiri);
    $_SESSION['state'] = $state;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
