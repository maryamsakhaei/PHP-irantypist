<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
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
                </div><!--div-6-->
            </div><!--row-namaesh-sefareshat-->
            <div class="row">
                 <div class="col-md-12 table"></div>
                 <table class="tablee-border">
                    <tbody><tr class="">
                                <td width="150px">شماره سفارش</td>
                                <td  width="150px">وضیعت</td>
                                <td width="190px">موضوع</td>
                                <td width="100px">امکانات</td>
                                </tr> 
                            <tr>
                            <?php 
                                $sql = "SELECT * FROM ordertranslate LIMIT 50 ";
                                $result = $conn->query($sql); 
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                            ?>
                            <td><?php echo $row["peigiri"];?></td>
                            <td> <?php
                              $state=$row["state"];
                              if($state==1){
                                echo "در انتظار بررسی";
                             }
                             if($state==2){
                                 echo "قیمت گذاری شده";
                              }
                              if($state==3){
                                 echo "در حال انجام کار";
                              }
                              if($state==4){
                                 echo "آماده تحویل و تسویه حساب";
                              }
                              if($state==5){
                                 echo "اتمام";
                              }
                              if($state==6){
                                 echo "انصرافی";
                              }
                            ?></td>
                            <td><?php echo $row["topic"];?></td>
                            <td><a href=detail-translate.php?peigiri=<?php echo $row["peigiri"]?>>[نمایش]</a></td>
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
               