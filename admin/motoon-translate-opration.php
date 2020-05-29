<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once("top-menu.php");
$matn=$_GET['matn'];
$peigiri=$_GET['peigiri'];
$wordcount=$_GET["wordcount"];

$sql = "UPDATE ordertranslate SET  wordcount='$wordcount' WHERE  peigiri='$peigiri'";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "تعداد کلمات ثبت نگردید.";
}


if ($matn==0){?>
<div class="row">   
    <div class="col-md-12">
        <p class="matn"> متن تخصصی </p><br><br><br>
        <h3>لطفا محدودیت زمانی را  تعیین کنید</h3>
        <form action="takhasosi-translate-opration.php" method="POST" class="form-matn">
        <input type="hidden" name="matn" value="<?php echo $matn ?>">
        <input type="hidden" name="peigiri" value="<?php echo $peigiri ?>">
        <lable>عادی</lable>    
        <input type="text"  name="dayy" value="" class="space-matn"><br>
        <lable> نیمه فوری </lable>
        <input type="text"  name="eghiteen" value="" class="space-matn-12"><br>
        <lable>فوری </lable>
       <input type="text"  name="twelve" value="" class="space-matn-18"><br>
       <!--=======================================================================-->
       <h3>لطفا با توجه به تعداد کلمات و روزها،قیمت را مشخص کنید</h3>
       <lable>عادی</lable>
       <input type="text"  name="normal" value="" class="space-matn"><br>
       <lable> نیمه فوری </lable>
       <input type="text"  name="halfstant" value="" class="space-matn"><br>
       <lable>فوری </lable>
       <input type="text"  name="stant" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
        </form>
    </div>
<?php
}
else if  ($matn==1){?>
   <div class="row">
    <div class="col-md-12">
        <p class="matn">متن تخصصی ویژه </p><br><br><br>
        <h3>لطفا محدودیت زمانی را تعیین کنید</h3>
        <form action="vizheh-translate-opration.php" method="POST" class="form-matn">
        <input type="hidden" name="matn" value="<?php echo $matn ?>">
        <input type="hidden" name="peigiri" value="<?php echo $peigiri ?>">
        <lable>عادی</lable>    
        <input type="text"  name="dayy" value="" class="space-matn"><br>
        <lable> نیمه فوری </lable>
        <input type="text"  name="eghiteen" value="" class="space-matn-12"><br>
        <lable>فوری </lable>
       <input type="text"  name="twelve" value="" class="space-matn-18"><br>
         <!--=======================================================================-->
       <h3>لطفا با توجه به تعداد کلمات و روزها،قیمت را مشخص کنید</h3>
       <lable>عادی</lable>
       <input type="text"  name="normal" value="" class="space-matn"><br>
       <lable> نیمه فوری </lable>
       <input type="text"  name="halfstant" value="" class="space-matn"><br>
       <lable>فوری </lable>
       <input type="text"  name="stant" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
       
        </form>
    </div>
    <?php
    }
    else{?>
       <div class="row">
    <div class="col-md-12">
        
        <p class="matn">متن عمومی </p><br><br><br>
        <h3>لطفا محدودیت زمانی را تعیین کنید</h3>
        <form action="omoomi-translate-opration.php" method="POST" class="form-matn">
        <input type="hidden" name="matn" value="<?php echo $matn ?>">
        <input type="hidden" name="peigiri" value="<?php echo $peigiri ?>">
        <lable>عادی</lable>    
        <input type="text"  name="dayy" value="" class="space-matn"><br>
        <lable> نیمه فوری </lable>
        <input type="text"  name="eghiteen" value="" class="space-matn-12"><br>
        <lable>فوری </lable>
       <input type="text"  name="twelve" value="" class="space-matn-18"><br>
        <!--=======================================================================-->
        <h3>لطفا با توجه به تعداد کلمات و روزها،قیمت را مشخص کنید</h3>
       <lable>عادی</lable>
       <input type="text"  name="normal" value="" class="space-matn"><br>
       <lable> نیمه فوری </lable>
       <input type="text"  name="halfstant" value="" class="space-matn"><br>
       <lable>فوری </lable>
       <input type="text"  name="stant" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
       

        </form>
    </div>
   <?php

    }
include_once("footer.php");
?>