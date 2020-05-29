<?php
include_once("db.php");
// Set session variables
session_start();


if(isset($_SESSION["username"])){
    $id= $_SESSION['id'];
    $delete = "DELETE FROM adminlist WHERE id=$id";

    if ($conn->query($delete) === TRUE) {
        session_unset();
        // destroy the session
        session_destroy();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
else{
  echo "you can not remove user";
}


?>