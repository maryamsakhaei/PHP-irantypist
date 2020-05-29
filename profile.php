<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
echo"
        <div class='row'><!--row-main-box-->
        <div class='col-md-2'></div>
        <div class='col-md-8 main-box'>
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
                    </div><!--object-->
                    
                <div class='col-md-8'>";
                echo $_SESSION["name"];
                echo"&nbsp";
                echo $_SESSION["fname"];
                echo"&nbsp";
                echo"<p class='welcome'>خوش آمدید! شما هم اکنون میتوانید سفارش خود را ثبت نمایید یا به پیگیری سفارش های خود بپردازید!</p>";
                echo"
                </div><!--row-into-8-->
        </div><!--row-8-->
        <div class='col-md-2'></div>
        </div><!--row-main-box-->
";
?>

