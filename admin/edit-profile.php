<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
//$username=$_GET["username"];
//اگر بخاهیم دو تا المان با هم مقایسه کنیم از چک کنیم یه مقدار تو دیتابیس هست یا نه از این دذستورات استفاده میکنیم//
$username=$_SESSION["username"];
$query = "SELECT * FROM adminlist WHERE username='$username' ";
$result = $conn->query($query); 
if ($result->num_rows > 0) {//سطری که یوزر با یوزر مساوی و پس با پس مساوی بود رو //
    while($row = $result->fetch_assoc()) {
          $age=$row["age"]; 
          $username_db=$row["username"]; 
          $id=$row["id"]; 

    }   
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
            <div class="row">
                <div class="col-md-12">
                    <p class="order-new">لطفا اطلاعات خود را کامل کنید و دکمه ثبت را بزنید </p>
                </div>
            </div><!--peigiri-tarjome-text-->
            <div class="row"><!--namaesh-sefareshat-->
                <div class="col-md-12">
                <?php  
               // $sql = "SELECT username FROM adminlist WHERE username='$username'";
                //$result = $conn->query($sql); 
                //if ($result->num_rows > 0) {
                //while($row = $result->fetch_assoc()) {                             
                ?> 
                 
                   
                <div class="form">
                    <form action="edit-profile-opration.php" method="POST">

                        <lable>نام کاربری</lable>
                        <input type="text" name="username" class="edit-profile" value="<?php 
                        echo $username_db;
                        ?>"><br>
                        <lable> رمز</lable>
                        <input type="password" name="passwords" class="edit-profile input-edit-profile" value="123456"><br>
                        <input type="text" name="passwords" class="edit-profile input-edit-profile"  value="<?php 
                        echo $age;
                        ?>"><br>
                         <input type="hidden" name="id" class="edit-profile input-edit-profile" value="<?php 
                        echo $id;
                        ?>"><br>
                        <button type="submit" name="submit-edit-profile" class="btn-edit-profile">ثبت</button>
                    </form>
                </div> 
               
                </div><!--div-12-->
            </div><!--row-namaesh-sefareshat-->
        </div><!--left-side-->      
        <div class='col-md-2'></div>
    </div><!--row-main-box-->
<?php
            // }
            //     }
include_once("footer.php");
?>
