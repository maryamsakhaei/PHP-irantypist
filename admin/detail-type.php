<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
$peigiri=$_GET["peigiri"];

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
                                <a href='view-type.php'>نمایش سفارش تایپ</a><br>
                            </div>
                          
                            <div class='order-translate'>
                                <a href='view-translate.php'> نمایش سفارش ترجمه</a><br>
                            </div>
                            <div class='peigiri-translate'>
                                <a  href='view-user.php'>لیست کاربران </a><br>
                            </div>
                            </div><!--profile-->
                    </div><!--div.side-right-->
                    <!--left-side-->
        <div class='col-md-8 left-side'>
            <div class="row"><!--peigiri-tarjome-text-->
                <div class="col-md-12">
                    <p class="order-new">مشخصات سفارش</p>
                </div>
            </div><!--peigiri-tarjome-text-->
            <div class="row">
            <div class="col-md-12">
            <table id="customers">
            <?php  
                $sql = "SELECT * FROM ordertype WHERE peigiri='$peigiri'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {                             
            ?> 
                <tr>
                    <td class="right-col">شماره سفارش</td>
                         <td><?php $peigiris=$row["peigiri"];
                          echo $peigiris ;?></td>

                    <td class="left-col">تاریخ ثبت سفارش</td>
                    <td><?php $row["currentdate"];?> </td>
                </tr>
                <tr>
                    <td class="right-col"> ساعت و زمان درخواستی</td>
                    <td><?php echo $row["dates"];?>  </td>
                    <td class="left-col"> زمینه </td>
                    <td><?php
                            $zamineh=$row["zamineh"];
                            if($zamineh==0){
                                echo"روانشناسی";
                            }elseif($zamineh==1){
                                echo"حقوق";
                            }
                            elseif($zamineh==2){
                                echo"پزشکی";
                            }
                            elseif($zamineh==3){
                                echo"کامپیوتر";
                            }
                            elseif($zamineh==4){
                                echo"هنر";
                            }
                            elseif($zamineh==5){
                                echo"مکانیک";
                            }
                            elseif($zamineh==6){
                                echo"عمران";
                            }
                            else{
                                    echo"صنایع";
                            }

                            ?>                                  
                    </td>
                </tr>
                <tr>
                    <td class="right-col"> زبان تایپ سفارش</td>
                    <td>
                         <?php 
                            $zaban=$row["zaban"];
                            if($zaban==0){
                                echo"فارسی";
                            }elseif($zaban==1){
                                echo"انگلیسی";
                            }
                            elseif($zaban==2){
                                echo"آلمانی";
                            }
                            elseif($zaban==3){
                                echo"روسی";
                            }
                            elseif($zaban==4){
                                echo"اسپانیایی";
                            }
                            elseif($zaban==5){
                                echo"کردی";
                            }
                            elseif($zaban==6){
                                echo"ترکی";
                            }
                            else{
                                    echo"عربی";
                            }
                            ?>
                                                                    
                    </td>
                    <td class="left-col"> موضوع سفارش </td>
                    <td><?php echo $row["topic"];?></td>
                                   
                    </td>
                </tr>
                <tr>
                    <td class="right-col">مطالب داخل جداول</td>
                    <td>
                         <?php 
                           $tables=$row["tables"];
                           if($tables="3"){
                               echo"دارد";
                           }
                           else{
                               echo"ندارد";
                           }
                           ?>
                           
                                                         
                    </td>
                </tr>
                <tr>
                    <td class="right-col"> ارسال از طریق پست</td>
                    <td>
                         <?php 
                            
                           $payk=$row["payk"];
                           if($payk="7"){
                               echo"دارد";
                           }
                           else{
                               echo"ندارد";
                           }
                           ?>                                 
                    </td>
                    <td class="left-col"> فایل سفارش</td>
                    <?php $files=$row["files"]?>
                    <td><a href="view.php" download=<?php $files ?>>فایل دانلود </a></td>
                   
                </tr>
                <tr>
                    <td class="right-col">توضیحات</td>
                    <td>
                         <?php 
                           
                           $tozihat=$row["tozihat"];
                           if ($tozihat==10){
                               echo $tozihat;
                           }
                           else{
                               echo"ندارد";
                           }
                           ?>                           
                    </td>
                    </tr>
                    <tr>
                    <td class="right-col"> وضعیت سفارش</td>
                    <td>
                    <form action="state-type-opration.php" method="GET">
                    <input type="hidden" name="peigiri" value="<?php echo $peigiri;?>">
                    <select name="state">
                        <option value="1">در انتظار بررسی</option>
                        <option value="2">قیمت گذاری شده</option>
                        <option value="3">در حال انجام کار</option>
                        <option value="4">آماده تحویل و تسویه حساب</option>
                        <option value="5">اتمام</option>
                        <option value="6">انصرافی</option>
                    </select>
                    <button type="submit">ذخیره</button>
                    </form>
                   </td>
                </tr>
                <?php
                    }
                        }    
                ?> 
            </table>
            </div><!--md6-->
            </div><!--row-table-->
            <table>
                <tr>
                     <td><p class="order-new">صورتحساب</p><br></td><br>
                     </tr>
                     <tr>
                     <td>
                     <form action="wordcount-type-opration.php" method="GET">
                     <input type="hidden" name="peigiri" value="<?php echo $peigiri;?>">
                     <P> تعداد کلمات شما</P>
                     <input type="number" name="wordcount" value="">
                     <button type="submit" name="wordcount-sub">ذخیره</button>
                     </form>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $wordcount=$row["wordcount"];
                    echo $wordcount;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="motoon-type-opration.php" method="GET">
                        <input type="hidden" name="peigiri" value="<?php echo $peigiri ?>" >
                            <select name="matn">
                                <option value="0">متون تخصصی ویژه</option>
                                <option value="1">متون تخصصی </option>
                                <option value="2"> متون عمومی</option>
                            </select>
                        <button type="submit">ذخیره</button>
                    </form>
                </div>
                </div><!--row-matn--->
        </div> <!--row-tedad-kalamat-->  
   
        
<?php
include_once("footer.php");
?>
               

          

               