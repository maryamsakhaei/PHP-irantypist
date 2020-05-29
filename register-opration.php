<?php
include_once("db.php");
include_once("header.php");
include_once("menu.php");
session_start();
 $name=$_POST["name"];
 $fname=$_POST["fname"]; 
 $company=$_POST["company"]; 
 $mobile=$_POST["mobile"]; 
 $email=$_POST["email"]; 
 $password=$_POST["password"]; 
 $education=$_POST["education"]; 
 $grade=$_POST["grade"]; 
 $familier=$_POST["familier"]; 
 $Reagent=$_POST["Reagent"]; 
//  //check for duplicates
//  $result = mysqli_query("SELECT * FROM  users WHERE email = '$email'") or exit(mysqli_error()); 
// $num_rows = mysqli_num_rows($result); //number of rows where duplicates exist
 //echo"ok";
if(!$name==null&&!$fname==null&&!$company==null&&!$mobile==null&&!$email==null&&!$password==null&&!$education==null&&!$grade==null&&!$familier==null){
   //echo"ok";
    $sql="INSERT INTO userlist (name,fname,company,mobile,email,password,education,grade,familier,Reagent)value ('$name','$fname','$company','$mobile','$email','$password','$education','$grade','$familier','$Reagent')";
    //echo"ok";
        if($conn->query($sql) === TRUE) {
       //echo"okkk";
            $_SESSION["name"] = $name;
			$_SESSION["fname"] = $fname;
			$_SESSION["email"] = $email;
			$_SESSION["password"] = $password;   
            header("Location: http://localhost:8080/php/project16-type/profile.php");  
        }else{
            echo"Enter correct data";
        } 
}else{
    echo"
    <div class='row'>
	<div class='col-md-2'></div>
	<div class='col-md-3 right-side'>
		<div class='purpel-register '>
			<a class='register-box3'>ثبت نام کنید</a>
			<br><br><br>
			<p class='order-box3'>و سفارش آنلاین ثبت کنید</p>
            <img class=' vawe' src='image/wave.png'><br>
			</div>
			<div class='blue-box'>
				<p>فروش جزوات مکاتبه ای</p>
			</div><!--blue-box-->
			<div class='text-center'>
	<div class='logo'>ورود به سیستم</div>
	<!-- Main Form -->
	<div class='login-form-1'>
		<form id='login-form' class='text-left'>
			<div class='login-form-main-message'></div>
			<div class='main-login-form'>
				<div class='login-group'>
					<div class='form-group'>
						<label for='lg_username' class='email-space'>شناسه کاربری(ایمیل)</label>
						<input type='text' class='form-control' id='lg_username' name='lg_username'>
					</div>
					<div class='form-group'>
						<label for='lg_password' class='password-space' >گذرواژه</label>
						<input type='password' class='form-control' id='lg_password' name='lg_password'>
					</div>
				</div>
				<button type='submit' class='login-button'>ورود</button>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
	</div><!--md3-->
	<div class='col-md-5 left-side'>
	<p class='user-register'><b> ثبت نام کاربر</b></p>
		<div class='error-register'>
			<ul class='uls'>
				<li>پست الکترونیکی شما قبلا ثبت شده است.</li>
								
			<ul>
		</div>
			<div class='yellow-box'>
				<ul  class='uls'>
					<li>پر کردن قسمت های ستاره دار الزامی میباشد.</li>
					<li>لطفا در وارد کردن اطلاعات صحیح دقت نمایید تا بعدها دچار مشکل نشوید.</li>
					<li>بلافاصله بعد از ثبت نام میتوانید سفارش خودتان را به صورت آنلاین ثبت نمایید تا در مدت کمتر از 10 دقیقه به صورت رایگان برایتان قیمت گذاری شود.</li>
				<ul>
			</div><!--yellow-box-->
		<form class='well form-horizontal' action='register-opration.php ' method='post' id='contact_form'>
					<fieldset>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>نام</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									<input name='name' class='form-control' type='text'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>نام خانوادگی</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									<input name='fname' class='form-control' type='text'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>شرکت</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									<input name='company' class='form-control' type='text'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>شماره موبایل</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span>
									<input name='mobile' class='form-control' type='number'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>پست الکترونیکی</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
									<input name='email' class='form-control' type='email'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>گذرواژه</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
									<input name='password' class='form-control' type='password'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>رشته تحصیلی</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
									<input name='education' class='form-control' type='text'>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>مقطع تحصیلی</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
									<input name='grade' class='form-control' type='text'>
								</div>
							</div>
						</div>
						<div class='form-group'>
							<label class='col-md-4 control-label'>طریقه آشنائی</label>
							<div class='col-md-4 selectContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
									<select name='familier' class='form-control selectpicker'>
										<option value=''>---گزینه ای را انتخاب کنید--</option>
										<option type='combobox' value='omran'>موتور جستجو</option>
										<option type='combobox' value='computer'>تبلیغات آنلاین</option>
										<option type='combobox' value='oil'>تبلیغات روزنامه</option>
										<option type='combobox' value='sanaye'>معرفی دوستان</option>
										<option type='combobox' value='sea'>هدیه تبلیغاتی</option>
										<option type='combobox' value='human'>دعوت نامه همکاری</option>
										<option type='combobox' value='faza'>تبلیغات مجلات</option>
										<option type='combobox' value='art'>سایر...</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>معرف</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
									<input name='Reagent' class='form-control' type='number'>
								</div>
							</div>
                        </div>
                        <!-- <div class='form-group'>
                            <input type='checkbox' name='rols' checked/> 
                            <lable  class='space'>شرایط و قوانین موسسه را مطالعه نموده و می پذیرم.<a>(دانلود شرایط و قوانین موسسه)</a>
                            </lable>
                        </div>
						 -->
						<!-- Select Basic -->
						<!-- Success message -->
						<div class='alert alert-success' role='alert' id='success_message'>Success <i class='glyphicon glyphicon-thumbs-up'></i> Success!.</div>
						<!-- Button -->
						<div class='form-group'>
							<label class='col-md-4 control-label'></label>
							<div class='col-md-4'>
								<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								<button type='submit' class='btn btn-warning'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspثبت نام <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
							</div>
						</div>
					</fieldset>
				</form>

	</div><!--8-->
</div><!--row-main-box-->
<div class='col-md-2'></div>
	
    ";
}  
 include_once("footer.php");
?>	     