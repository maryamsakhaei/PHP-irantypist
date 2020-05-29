<?php
  session_start();
   include_once("db.php");  
   include_once( "header.php");
   include_once( 'top-menu.php');   
   $email=$_POST["email"]; 
   $password=$_POST["password"]; 
    if(!$email==null&&!$password==null){
        if (isset($email)){
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $password;
          header("Location: http://localhost:8080/php/project16-type/profile.php");  
      }
      else{
        echo"
        <div class='row'><!--row-main-box-->
    <div class='col-md-2'></div>
    <div class='col-md-8 main-box'>
        <div class='row'> 
            <div class='col-md-3 right-side'>
				<div class='register'>
					<a class='register-box3' href='register.php'>ثبت نام کنید</a><br>
				</div>	
				<div>
                	<p class='order-box3'>و سفارش آنلاین ثبت کنید</p>
                	<img  class=' vawe'src='image/wave.png'>
				</div>
				<div class='blue-box'>
					<p>فروش جزوات مکاتبه ای</p>
        </div><!--blue-box-->
				<div class='enter-system'>
					<p class='text-enter-system'>ورود به سیستم</p>
					<form action='login-opration.php' method='POST'>
						<lable>شناسه کاربری(ایمیل)</lable>
						<input type='email' name='email' class='mg-top-input'>
						<lable>گذرواژه</lable>
						<input type='password' name='password' class='mg-top-input'>
						<button type='submit' name='submit' class='btn-side-right'>ورود</button>
						<a href='forgetpassword.php'>فراموشی گذرواژه</a>
					</form>

				</div><!--enter-system-->
            </div><!--row-3-->
            <div class='col-md-8 left-side'>
			<div class='error'>
				<form>
					<ul class='error-login'>
						<li>متاسفانه کاربری با مشخصات وارد شده پیدا نشده است!</li>
						<li>ممکن است ایمیل یا گذرواژه اشتباه باشد.</li>
					</ul>
				</form>
		  </div>
            </div><!--row-into-8-->
        </div><!--row-8-->
    <div class='col-md-2'></div>
        </div><!--row-main-box-->
        ";
      }
}
else{
    echo "your form is not fill ";    
  }
include_once( "footer.php");
?>