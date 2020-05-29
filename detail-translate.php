<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once('top-menu.php');
$peigiri=$_GET["peigiri"];
$matn=$_GET["matn"];
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
                                <a href='profile-home'>پروفایل کاربری</a><br>
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
            <div class="row"><!--peigiri-tarjome-text-->
                <div class="col-md-12">
                    <p class="order-new">مشخصات سفارش</p>
                </div>
            </div><!--peigiri-tarjome-text-->
            <div class="row">
            <div class="col-md-12">
            <table id="customers">
            <?php  
                $sql = "SELECT * FROM ordertranslate WHERE peigiri='$peigiri'";
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
                    <td class="right-col"> زبان ترجمه سفارش</td>
                    <td>
                         <?php 
                            $zaban=$row["zaban"];
                            if($zaban==0){
                                echo" فارسی به انگلیسی";
                            }elseif($zaban==1){
                                echo"فارسی به فرانسه";
                            }
                            elseif($zaban==2){
                                echo"انگلیسی به فارسی";
                            }
                            elseif($zaban==3){
                                echo"فارسی به اسپانیائی";
                            }
                            elseif($zaban="4"){
                                echo"فارسی به عربی";
                            }
                            elseif($zaban="5"){
                                echo"عربی به فارسی";
                            }
                            elseif($zaban="6"){
                                echo"فارسی به روسی";
                            }
                            else{
                                    echo"روسی به فارسی";
                            }
                            ?>                                         
                    </td>
                    <td class="left-col"> موضوع سفارش </td>
                    <td>
                         <?php 
                           $topic=$row["topic"];
                           if($topic==11){
                               echo $topic;
                           }
                           else{
                               echo"ندارد";
                           }
                           ?>                                  
                    </td>
                </tr>
                <tr>
                    <td class="right-col">مطالب داخل جداول</td>
                    <td>
                         <?php 
                           $tables=$row["tables"];
                           if($tables==3){
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
                           if($payk==7){
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
                    <?php
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

                    }
                        }    
                ?> 
                </td>
               </tr>

                <?php
            $zaban=$row["zaban"];
               echo $zaban;
                     ?>
                     </td>
               </tr>

            </table>
            <form>
                    <button type="submit" class="viwe-btn">انصراف سفارش</button>
                </form>
            </div>
            </div>
            <?php 
            if($state==2){
             ?>
            <div class="row">
                <div class="col-md-12"><p class="order-new">صورتحساب</p></div>
             </div> <!--row-sorathesab-->      
             <div class="row">
                <p class="borders">  تعداد کلمات فایل سفارش شما
                <?php  
                $sql = "SELECT * FROM ordertranslate WHERE peigiri='$peigiri'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                     while($row = $result->fetch_assoc()){
                         $wordcount=$row["wordcount"];
                            echo $wordcount;
                }
                     }                          
            ?> 
                     میباشد<br><br>
               لطفا کیفیت و زمان ترجمه خود را انتخاب کنید تا بتوانید سفارش را تکمیل کنید </p>
             </div>  <!--row-tedad-kalamat-->       

        <div class="row"><!--row-taein-gheymat-->
        <div class="col-md-12">
        <table>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            
            <td>
                <!--================choose day by user=============================-->
            <?php 
        if($matn==1){?><!--takhasosi-->
                <p class="zaman-tahvil">زمان تحویل عادی</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $daytakhasos=$row['daytakhasos'];
                        echo $daytakhasos; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $eghiteentakhasos=$row['eghiteentakhasos'];
                        echo $eghiteentakhasos; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل فوری</p>
                <p class="kind-moton"> 
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $twelvetakhasos=$row['twelvetakhasos'];
                        echo $twelvetakhasos; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
             <!--================choose day vizheh by user=============================-->
            <?php
        }//if
        
        else if($matn==1){?>
        <!--vizheh-->
        <p class="zaman-tahvil">زمان تحویل عادی</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $dayvizheh=$row['dayvizheh'];
                        echo $dayvizheh; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $eghiteenvizheh=$row['eghiteenvizheh'];
                        echo $eghiteenvizheh; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل فوری</p>
                <p class="kind-moton"> 
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $twelvevizheh=$row['twelvevizheh'];
                        echo $twelvevizheh; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
             <!--================choose day omoomii by user=============================-->
            <?php
        }
        else{?>
        <!--omoomii-->
        <p class="zaman-tahvil">زمان تحویل عادی</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $dayomoomi=$row['dayomoomi'];
                        echo $dayomoomi; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                <p class="kind-moton">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $eghiteenomoomi=$row['eghiteenomoomi'];
                        echo $eghiteenomoomi; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <p class="zaman-tahvil">زمان تحویل فوری</p>
                <p class="kind-moton"> 
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $twelveomoomi=$row['twelveomoomi'];
                        echo $twelveomoomi; 
                    }
                }
                    ?>
                </p>
                <p class="kind-moton">از زمان پیش پرداخت</p>
            </td>
        <?php
        }
        ?>

        </tr>
        <!--================choose price by user=============================-->
        <?php 
        if($matn==1){?>
         <!--takhasosi-->
         <tr>
            <form action="payment-translate.php" method="POST">
            <td> <p>متون تخصصی ویژه</p></td>
            <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>
            <td></td>
            <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>  
            <td></td>
            <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>
        </tr>
        <tr>
            <td><p>متون تخصصی </p></td>
            <td><input type="radio" name="takhasosi" value="" class="checkboxx-space">
            <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $normal=$row['normal'];
                        echo $normal; 
                    }
                }
                    ?>
                    </td>
            <td></td> 
            <td><input type="radio" name="takhasosi" value="" class="checkboxx-space">
            <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $halfstant=$row['halfstant'];
                        echo $halfstant; 
                    }
                }
                    ?>
            </td>
            <td></td>
            <td> <input type="radio" name="takhasosi" value="" class="checkboxx-space">
            <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $stant=$row['stant'];
                        echo $stant; 
                    }
                }
                    ?>
            </td>
            <td> </td>
        </tr>

        <tr>
            <td><p>متون عمومی </p></td>
            <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
            <td></td>
            <td><input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
            <td></td>
            <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
        </tr>
     
<!--================choose price  vizheh by user=============================-->
        <?php
        }//if
        else if($matn==1){?>
        <!--vizheh-->
        <tr>
                <form action="payment-translate.php" method="POST">
                <td> <p>متون تخصصی ویژه</p></td>
                <td><input type="radio" name="vizheh" value="" class="checkboxx-space">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $normal=$row['normal'];
                        echo $normal; 
                    }
                }
                    ?>
                    </td>
            <td></td> 
            <td><input type="radio" name="takhasosi" value="" class="checkboxx-space">
            <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $halfstant=$row['halfstant'];
                        echo $halfstant; 
                    }
                }
                    ?>
            </td>
            <td></td>
            <td> <input type="radio" name="takhasosi" value="" class="checkboxx-space">
            <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $stant=$row['stant'];
                        echo $stant; 
                    }
                }
                    ?>
            </td>
            </td>
                <td></td>
                <td><input type="radio" name="vizheh" value="" class="checkboxx-space"></td>  
                <td></td>
                <td><input type="radio" name="vizheh" value="" class="checkboxx-space"></td>
            </tr>
            <tr>
                <td><p>متون تخصصی </p></td>
                <td><input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
            </tr>
    
            <tr>
                <td><p>متون عمومی </p></td>
                <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
            </tr>
            
<!--================choose price  omoomii by user=============================-->
        <?php
        }
        else{?>
        <!--omoomii-->
         <tr>
                <form action="payment-translate.php" method="POST">
                <td> <p>متون تخصصی ویژه</p></td>
                <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>  
                <td></td>
                <td><input type="hidden" name="vizheh" value="" class="checkboxx-space"></td>
            </tr>
            <tr>
                <td><p>متون تخصصی </p></td>
                <td><input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="hidden" name="takhasosi" value="" class="checkboxx-space"></td>
            </tr>
    
            <tr>
                <td><p>متون عمومی </p></td>
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $normal=$row['normal'];
                        echo $normal; 
                   ?>
                <td> <input type="radio" name="omoomi" value="<?php
                echo $normal; ?>0" class="checkboxx-space">
                
                    </td>
                    <?php
                }
            }
                ?>
               <!--first-radio button-->
                <td></td>
                <td><input type="radio" name="omoomi" value="" class="checkboxx-space">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $halfstant=$row['halfstant'];
                        echo $halfstant; 
                    }
                }
                    ?>
            
                </td>
                <td></td>
                <td> <input type="radio" name="omoomi" value="" class="checkboxx-space">
                <?php  
                    $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $stant=$row['stant'];
                        echo $stant; 
                    }
                }
                    ?>
                </td>
            </tr>
           
        <?php
        }
            
        ?>

     
        </table>
        </div>
        <div class="row">
            <div class="col-md-2">
                <br>  <br>  <br>  <br> <br>
                <p>*</p>
            </div>
            <div class="col-md-10">
                <p class="yellow-box-sorathesab">تمامی قیمت ها به تومان میباشد.
                    لطفا توجه فرمایید: ترجمه فایل شما پس از پرداخت مبلغ 60 درصد از مبلغ کل شروع خواهد شد (برای مشاهده پیش پرداخت ابتدا حالت مورد نظر خودتان را انتخاب نموده و سپس تکمیل سفارش را کلیک نمایید). فاکتور شما بر اساس عمومی یا تخصصی بودن همین سفارش صادر شده است. متون تخصصی ویژه مربوط به ترجمه مقالات برای چاپ در ژورنال ها، چاپ کتاب، کاتالوگ و موارد خاص دیگر می باشد. در صورتی که فکر می کنید زمان تحویل دیگری می خواهید، با موسسه تماس بگیرید یا از طریق پشتیبانی درخواست خود را مطرح بفرمایید. ترجمه متون عمومی 3 روز، تخصصی 5 روز و تخصصی ویژه 12 روز گارانتی دارند. اطلاعات تماس در پایین سایت موجود می باشند.
                </p>
            </div>
        </div>
        <button type="submit" name="btn" value="" class="detail-btn">تکمیل سفارش</button>
    </form>
        </div><!--row-taein-gheymat-->
            </div><!--md6-->
         </div><!--row-table-->
        
        </div><!--div-left-side-->      
        <div class='col-md-2'></div>
        </div><!--row-main-box-->
<?php
}
include_once("footer.php");
?>

              