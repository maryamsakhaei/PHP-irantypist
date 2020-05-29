<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
$email=$_SESSION["email"];

echo $_POST['omoomi'];
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
                     <!--left-side-->
        <div class='col-md-8 left-side'>
            <div class="col-md-12 yellow-box">
                <ul>
                    <li class="payment-li">
                    شما میبایست مبلغ 2415 تومان را به عنوان پیش پراخت واریز نمایید.
                    </li>
                </ul>
            </div><!--yellow-box-->
            <div class="row">
                <div class="col-md-6">
                    <table class="payment-table">
                        <tr>
                            <td class="td-class">هزینه کل سفارش</td>
                            <td class="td-class"></td>
                        </tr>
                        <tr>
                            <td class="td-class">تخفیف0درصد</td>
                            <td class="td-class"></td>
                        </tr>
                        <tr>
                            <td class="td-class">پیش پرداخت	</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="td-class">مبلغ مانده</td>
                            <td></td>
                        </tr>
                    </table>
                    <h6>* مبلغ تخفیف بین پرداخت ها تقسیم میشوند.</h6>

                </div>
                <div class="col-md-6"></div>
            </div>

        
        </div><!--div-left-side--> 
        <div class='col-md-2'></div>
        </div><!--row-main-box-->
<?php
include_once("footer.php");
?>     