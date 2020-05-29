<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once("top-menu.php");
 $zaban=$_POST["language"];
 $zamineh=$_POST["zamineh"];
 $topic=$_POST["topic"]; 
 $erja=$_POST["erja"];
 $formula=$_POST["formula"]; 
 $safhe=$_POST["safhe"];
 @$tasvir=$_POST["tasvir"]; 
 $tables=$_POST["tables"]; 
if(!isset($tables)){
    $tables=0;
}
 $chart=$_POST["chart"]; 
 $shape=$_POST["shape"]; 
 $tozihat=$_POST["tozihat"]; 
 $dates=$_POST["dates"]; 
 $payk=$_POST["payk"]; 
 $files=$_POST["files"]; 
 $peigiri=rand("0000","9999");  
 $currentdate=date("Y/m/d");
 $email=$_SESSION["email"];
 $state=1;
// $undertable=$_POST["undertable"];
 //echo"ok";
//if(!$zaban==null&&!$zamineh==null&&!$topic==null&&!$dates==null){
 
    $sql="INSERT INTO ordertranslate (zaban,zamineh,topic,erja,formula,safhe,tasvir,tables,chart,shape,tozihat,dates,payk,files,peigiri,email,currentdate,state) value ('$zaban','$zamineh','$topic','$erja','$formula','$safhe','$tasvir','$tables','$chart','$shape','$tozihat','$dates','$payk','$files','$peigiri','$email','$currentdate','$state')";
   if($conn->query($sql) === TRUE) {
    $_SESSION["peigiri"]=$peigiri;

      ?>

      <body>
        <div class='row'><!--row-main-box-->
            <div class='col-md-2'></div>
            <div class='col-md-8 main-box'><!--row-into box--> 
                 <div class='row'> 
                    <div class='col-md-3 right-side'>
                            <div class='blue-box'>
                                <p>فروش جزوات مکاتبه ای</p>
                            </div><!--blue-box-->
                            <div class='sharzh-profile'>
                                <p>موجودی حساب:0ریال</p>
                                <a class='mojodi-hesab'>مدیریت موجودی حساب</a>
                            </div><!--sharzh-->
                            <div class='object'>
                                <a>امکانات کاربری</a>
                            </div><!--object-->
                            <div class='profile'>
                                <a href='profile-home.php'>پروفایل کاربری</a><br>
                            <div class='order-type'>
                                <a href='order-type.php'>  ثبت سفارش تایپ</a><br>
                            </div>
                            <div class='peygiri-type'>
                                <a href='type-peigiri.php'> پیگیری سفارش تایپ</a><br>
                            </div>
                            <div class='order-translate'>
                                <a href='translate-order.php'> ثبت سفارش ترجمه</a><br>
                            </div>
                            <div class='peigiri-translate'>
                                <a href='translate-peigiri.php'> پیگیری سفارش ترجمه</a><br>
                            </div>
                            </div><!--profile-->
                    </div><!--div.side-right-->
                    <div class='col-md-9 left-side'>
                        <div class='order'>
                            <p class='order-new'>  ثبت سفارش ترجمه </p>
                        </div><!--order--->
                        <div class='green-box'>
                            <ul  class='uls'>
                                <li> کاربر گرامی سفارش ترجمه شما ثبت شدو به زودی توسط اپراتور بررسی  میشود و پیش فاکتوررا صادر می نماید</li>
                                <li>لطفا در وارد کردن اطلاعات صحیح دقت نمایید تا بعدها دچار مشکل نشوید.</li>
                                <li>شماره سفارش شما:<?php
                                echo $peigiri;?>
                                </li>
                            <ul>
                        </div><!--green-box-->
                        <div class='yellow-box'>
                            <ul  class='uls'>
                                <li>پر کردن قسمت های ستاره دار الزامی میباشد.</li>
                                <li>لطفا در وارد کردن اطلاعات صحیح دقت نمایید تا بعدها دچار مشکل نشوید.</li>
                                <li>یکی از فیلد های دارای ستاره سبز را باید تکمیل نمایید.</li>
                            <ul>
                        </div><!--yellow-box-->
                        <div class='form-register'>
				<form class='well form-horizontal'id='contact_form'>
                    <fieldset>
                        
						<div class='form-group'>
							<label class='col-md-4 control-label'>زبان</label>
							<div class='col-md-4 selectContainer'>
								<div class='input-group'>
                                <select name='language' class='form-control language'>
                                <option value=''>--انتخاب کنید--</option>
                                <option type='combobox' value='0'>فارسی به انگلیسی</option>
                                <option type='combobox' value='1'> فارسی به فرانسه</option>
                                <option type='combobox' value='2'> انگلیسی به فارسی</option>
                                <option type='combobox' value='3'> فارسی به هلندی</option>
                                <option type='combobox' value='4'>فارسی به عربی </option>
                                <option type='combobox' value='5'> عربی به فارسی </option>
                                <option type='combobox' value='6'> فارسی به روسی </option>
                                <option type='combobox' value='7'>روسی به فارسی</option>
                                </select>
								</div>
							</div>
						</div>
                        <!-- Text input-->
                        <div class='form-group'>
							<label class='col-md-4 control-label'>زمینه</label>
							<div class='col-md-4 selectContainer'>
								<div class='input-group'>
                                <select name='zamineh' class='form-control language'>
                                <option value=''>--انتخاب کنید--</option>
                                <option type='combobox' value='0'>روانشناسی</option>
                                <option type='combobox' value='1'> حقوق</option>
                                <option type='combobox' value='2'> پزشکی</option>
                                <option type='combobox' value='3'> کامپیوتر</option>
                                <option type='combobox' value='4'>هنر </option>
                                <option type='combobox' value='5'> مکانیک </option>
                                <option type='combobox' value='6'>عمران </option>
                                <option type='combobox' value='7'>صنایع</option>
                                </select>
								</div>
							</div>
						</div>
                        <!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'> موضوع </label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> 
									<input name='topic' class='form-control' type='text' value=''>
								</div>
							</div>
                        </div>
						<!-- Text input-->
						<div class='form-group'>
							<label class='col-md-4 control-label'>ارجاع به تایپیست</label>
							<div class='col-md-4 inputGroupContainer'>
								<div class='input-group'> 
									<input name='erja' class='form-control' type='text'>
								</div>
							</div>
                        </div>
                        <!--chekbox-->
                                    <div class='form-order-type'>
                                    <form>
                                    <lable>فرمول نویسی</lable>
                                        <input type='checkbox' name='formul' value='0'class='checkbox-space-formul' value='0'><br>
                                        <lable> صفحه آرایی</lable>
                                        <input type='checkbox' name='safhe' value='1' class='checkbox-space-page' ><br>
                                        <lable>تصویرگری </lable>
                                        <input type='checkbox'name='tasvir' value='2' class='checkbox-space-tasvir'><br>
                                        <lable> رسم جدول</lable>
                                        <input type='checkbox' value='3'name='table'class='checkbox-space-table'><br>
                                        <lable>  رسم نمودار</lable>
                                        <input type='checkbox' name='chart' value='4'class='checkbox-space-chart'><br>
                                        <lable> رسم شکل</lable>
                                        <input type='checkbox' name='shape' value='5'class='checkbox-space-shape' ><br>
                                        <lable>توضیحات به تایپیست یا صفحه آرا</lable>
                                        <input type='textarea' class='txt-area' name='tozihat' value='' ><br>
                                        <lable class='date-space'>  تاریخ و ساعت درخواستی</lable>
                                        <input class='date' type='datetime-local' name='date' value='6'><img class='calender' src='image/calender.PNG'><br>
                                        <lable>ارسال از طریق پیک یا پست</lable>
                                        <input type='checkbox'value='7' name='payk'class='checkbox-space-post'><br>
                                        فایل سفارش:<input type='file'value='8' name='file'><br>
                                        <lable class='font'>نام فایل سفارش انگلیسی باشد</lable>
                                        <!-- <lable> ترجمه زیر جدول</lable> -->
                                        <!-- <input type='checkbox' value='9'name='undertable'class='checkbox-space-table'><br> -->
                                    </form>    
                                    </div>
                                    </table>
                                <!--end-chekbox-->

                                <div class='form-group'>
                                <label class='col-md-4 control-label'></label>
                                <div class='col-md-4'>
                                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <button type='submit' class='btn-order btn-warning-order'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspثبت سفارش <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                        </div><!--form-->
                    </div><!--div.side-left-->
                 </div><!--row-8-main-->
            </div><!--row-into box-->  
            <div class='col-md-2'></div>
        </div><!--row-main-box-->
          
           
           
    <?php        
        // }else{
        //     echo"Enter correct data";
        // } 
}else{
    echo"completly worng";
}
    include_once("footer.php");
    ?>











  