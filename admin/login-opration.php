<?php
   include_once("db.php");  
   include_once( "header.php");
   session_start();  
   $username=$_POST['username'];
   $passwords =$_POST['passwords']; 
  //  $ramz=md5($passwords);
  //  $ramz=md5($ramz)."m66";
  //  $ramz=md5($ramz)."32";
     if(!$username==null&&!$passwords==null){
      $query = "SELECT * FROM adminlist WHERE username='$username' and passwords='$passwords'";
       $result = mysqli_query($conn,$query) or die(mysql_error());
       $rows = mysqli_num_rows($result);
      if($rows==1){
          $_SESSION['username'] = $username;
          header("Location: http://localhost:8080/php/project16-type/admin/dashboard.php");
      }
      else{
        include_once("header.php");
        echo"<div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 massage-box2'>
        <p class='massage-text2'>در وارد کردن رمز بیشتر دقت کنید!!!  </p>
        </div>
        <div class='col-md-3'></div>
        </div>
        ";
      }
}
else{
    echo "your form is not fill ";    
  }


include_once( "footer.php");
?>