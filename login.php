<?php
   //include_once("db.php"); 
   include_once("header.php");   
   session_start(); 
   //اگر شخص از قبل ثبت نام کرده بود،مثلا صفحعه سوم بود یه دفعه میره صفحه login.
   //این شخص دیگه نیازی نیست بره فرم لاگین رو پر کنه،میگیم اگر اسمش در حافظه موقت بود .هدر بشه و بره صفحه مورد نظر
   if (isset($_SESSION['username'])){ 
     header("Location: http://localhost:8080/php/project16-type/profile.php");
   }
  ?>

<body> 
<div class="row">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-4">
		<div class="logins">
				<img  class="login"src="image/logo-login.png"><br>
		</div>
		<form action="login-opration.php" method="post">
 			 <div class="login-forms">
			<label for="username" class="text-form" ><b>username</b></label><br>
			<input type="email" name="username"  class= "place-bg-color"required><br>
			<label for="password" class="text-form"><b>password</b></label><br>
			<input type="password" name="password" class= "place-bg-color" required><br>
			<button type="submit" class="registerbtn" class= "place-bg-color"> Login</button>
		</form>
		</div>
	</div>
	
	<div class="col-md-4"></div>
</div>
 <?php
 include_once("footer.php");
 ?>	