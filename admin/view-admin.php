<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
$username=$_SESSION["username"];
$passwords=$_SESSION["passwords"];
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
        <table class="tablee-border">
    <tbody>
        <tr>
        <td width="150px">نام کاربری</td> 
        <td width="150px">رمز </td>
        </tr>
        <?php              
            $sql = "SELECT * FROM adminlist";
            $result = $conn->query($sql); 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?> <br>   
        <tr>
            <td> <?php echo $row["username"];?></td>                 
            <td> <?php echo $row["passwords"];?> <br> </td>
            <td> <a href=edit-profile.php?username=<?php echo $row["id"]?>>ویرایش</a></td>
            </tr> 
            <?php
                    }
           }    
            ?>              
</table>

        </div><!--left-side-->      
        <div class='col-md-2'></div>
        </div><!--row-main-box-->
<?php
include_once("footer.php");
?>











 



















