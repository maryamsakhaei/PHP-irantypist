<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once("top-menu.php");
if(isset($_SESSION["email"])){
    echo "
    ";
}
else{
    echo "شما اجازه دسترسی ندارد!";
}
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
                    <p class="order-new">نمایش سفارشات ترجمه</p>
                </div>
            </div><!--peigiri-tarjome-text-->
            <div class="row"><!--namaesh-sefareshat-->
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action='translate-opration.php ' method='POST' >
								<div class='Container'>
                                <select class="inputs-box">
                                    <option value="0">تمام سفارشات</option>
                                    <option value="1">در انتظار بررسی</option>
                                    <option value="2">قیمت گذاری شده</option>
                                    <option value="3">در حال انجام کار  </option>
                                    <option value="4">  آماده تحویل و تسویه حساب</option>
                                    <option value="5">اتمام </option>
                                    <option value="6">انصرافی </option>
                                </select>
                                </div>
                        <button type="submit" class="btn-translate-peigiri">نمایش</button> 
                    </form> 
                </div><!--div-6-->
            </div><!--row-namaesh-sefareshat-->
            <div class="row">
                 <div class="col-md-12 table"></div>
                 <table class="tablee-border">
                    <tbody>
                    <tr>
                    <td width="150px">نام</td> 
                    <td width="150px">نام خانوادگی</td>
                    </tr>
                    <?php              
                        $sql = "SELECT * FROM userlist";
                         $result = $conn->query($sql); 
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?> <br>   
                            <tr>
                                <td> <?php echo $row["name"];?></td>                 
                                 <td> <?php echo $row["fname"];?> <br> </td>
                                </tr>
                    <?php
                            }
                        }    
                    ?>              
        
                            </table>
                        </div>   
                </div><!--row-table-->
                

        </div><!--left-side-->      
        <div class='col-md-2'></div>
        </div><!--row-main-box-->
<?php
include_once("footer.php");
?>
               