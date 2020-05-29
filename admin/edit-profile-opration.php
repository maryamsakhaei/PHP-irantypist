<?php
 session_start();
 include_once("db.php");
 include_once("header.php");
 include_once('top-menu.php');

     $username=$_POST['username'];
     $passwords=$_POST['passwords']; 
     $id=$_POST['id']; 
    if(!$username==null&&!$passwords==null){
     
        if($passwords=123456){
          echo"okk1"; 
          
          $sql = "UPDATE `adminlist` SET `username` = '$username' WHERE `adminlist`.`id` = $id";
          if (mysqli_query($conn, $sql)) {
              echo"okk2";
            $_SESSION['username'] = $username;
            $_SESSION['passwords'] = $passwords;
            header("Location: http://localhost:8080/php/project16-type/admin/edit-success.php");
          }
        }
      else{
          $sql = "UPDATE `adminlist` SET `username` = '$username' AND `passwords` = '$passwords'  WHERE `adminlist`.`id` = $id";
          if (mysqli_query($conn, $sql)) {
              echo"okk3";
            $_SESSION['username'] = $username;
            $_SESSION['passwords'] = $passwords;
            header("Location: http://localhost:8080/php/project16-type/admin/edit-success.php");
          }
      }
    }

else{
    echo "فرم را با دقت بیشتری پر کنید";    
  }
include_once( "footer.php");
?>