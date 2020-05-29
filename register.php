<?php include_once( 'header.php');
 include_once( 'top-menu.php'); 
 ?>
<div class='row'><!--row-main-box-->
    <div class='col-md-2'></div>
    <div class='col-md-8 main-box'>
        <div class='row'> 
            <div class='col-md-3 right-side'>
				<div class="register">
					<a class='register-box3' href='register.php'>ثبت نام کنید</a><br>
				</div>	
				<div>
                	<p class='order-box3'>و سفارش آنلاین ثبت کنید</p>
                	<img  class=' vawe'src='image/wave.png'>
				</div>
				<div class='blue-box'>
					<p>فروش جزوات مکاتبه ای</p>
				</div><!--blue-box-->
				<div class="enter-system">
					<p class="text-enter-system">ورود به سیستم</p>
					<form action="login-opration.php" method="POST">
						<lable>شناسه کاربری(ایمیل)</lable>
						<input type="email" name="email" class="mg-top-input">
						<lable>گذرواژه</lable>
						<input type="password" name="password" class="mg-top-input"><br>
						<button type="submit" name="submit" class="btn-side-right">ورود</button>
						<a href="forgetpassword">فراموشی گذرواژه</a>
					</form>

				</div><!--enter-system-->
            </div><!--row-3-->
            <div class='col-md-8 left-side'>
				<div class="register-user">
					<p class='user-register'><b> ثبت نام کاربر</b></p>
				</div>
				<div class='yellow-box'>
					<ul class='uls'>
						<li>پر کردن قسمت های ستاره دار الزامی میباشد.</li>
						<li>لطفا در وارد کردن اطلاعات صحیح دقت نمایید تا بعدها دچار مشکل نشوید.</li>
						<li>بلافاصله بعد از ثبت نام میتوانید سفارش خودتان را به صورت آنلاین ثبت نمایید تا در مدت کمتر از 10 دقیقه به صورت رایگان برایتان قیمت گذاری شود.</li>
					<ul>
				</div><!--ul-->
				<div class="form-register">
				<form class="well form-horizontal" action="register-opration.php " method="post" id="contact_form">
					<fieldset>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">نام</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="name" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">نام خانوادگی</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="fname" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">شرکت</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="company" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">شماره موبایل</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="mobile" class="form-control" type="number">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">پست الکترونیکی</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input name="email" class="form-control" type="email">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">گذرواژه</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input name="password" class="form-control" type="password">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">رشته تحصیلی</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<input name="education" class="form-control" type="text">
								</div>
							</div>
						</div>
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">مقطع تحصیلی</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<input name="grade" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">طریقه آشنائی</label>
							<div class="col-md-4 selectContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<select name="familier" class="form-control selectpicker">
										<option value=''>گزینه ای را انتخاب کنید</option>
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
						<div class="form-group">
							<label class="col-md-4 control-label">معرف</label>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									<input name="Reagent" class="form-control" type="number">
								</div>
							</div>
                        </div>
                         <div class="form-group">
                            <input type='checkbox' name='rols' checked/> 
                            <lable  class='space'>شرایط و قوانین موسسه را مطالعه نموده و می پذیرم.<a>(دانلود شرایط و قوانین موسسه)</a>
                            </lable>
                        </div>
						
						<!-- Select Basic -->
						<!-- Success message -->
						<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								<button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspثبت نام <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
							</div>
						</div>
					</fieldset>
				</form>

				</div><!--form-->
                
            </div><!--row-into-8-->
        </div><!--row-8-->
    <div class='col-md-2'></div>
        </div><!--row-main-box-->
<?php
include_once('footer.php'); 
?>




			
				
				
			
