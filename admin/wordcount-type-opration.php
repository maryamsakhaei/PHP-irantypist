<?php
session_start();
include_once("db.php");
   $wordcount=$_GET['wordcount'];
  $peigiri=$_GET['peigiri'];
 $sql = "UPDATE ordertype SET wordcount='$wordcount'  WHERE peigiri='$peigiri' ";
 echo "okk";
if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost:8080/php/project16-type/admin/detail-type.php?peigiri=".$peigiri);
    $_SESSION['wordcount'] = $wordcount;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
 ?>