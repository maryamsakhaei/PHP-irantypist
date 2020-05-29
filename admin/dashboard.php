<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
if ( ! empty ( $_SESSION["username"])){
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
                                <a href='edit-profile.php'>پروفایل کاربری</a><br>
                                <div class='peigiri-translate'>
                                <a  href='view-admin.php' > مشاهده اطلاعات کاربری</a><br>
                            </div>
                            <div class='order-type'>
                                <a href='view-type.php'>  نمایش سفارش تایپ</a><br>
                            </div>
                            
                            <div class='order-translate'>
                                <a href='view-translate.php'> نمایش سفارش ترجمه</a><br>
                            </div>
                            <div class='peigiri-translate'>
                                <a  href='view-user.php' >لیست کاربران</a><br>
                            </div>
                            </div><!--profile-->
                    </div><!--div.side-right-->
                    <!--left-side-->
        <div class='col-md-8 left-side'>
            <div class="row"><!--peigiri-tarjome-text-->
                <div class="col-md-12">
                    <p class="order-new"> به این صفحه خوش آمدید&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                </div>
            </div><!--peigiri-tarjome-text-->
            <div class="row"><!--namaesh-sefareshat-->
                <div class="col-md-12">
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شما میتوانید از منوی سمت راست درخواست مورد نظر را انتخاب و اجرا کنید</p><br></br>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;برای ویرایش اطلاعات کاربری روی لینک زیر<a href='edit-profile.php?username=<?echo $row["username"];?>'>کلیک</a> کنید</p>
                 
                </div><!--div-6-->
            </div><!--row-namaesh-sefareshat-->
            
                   

        </div><!--left-side-->      
      <div class='col-md-2'></div>
        </div><!--row-main-box-->
        <?php
    }
else{
    echo"شما باید مجددا وارد سامانه بشید";
}  
include_once("footer.php");
?>
               