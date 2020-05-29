<?php
session_start();
include_once("db.php");
include_once("header.php");
include_once("top-menu.php");
$matn=$_POST['matn'];
$peigiri=$_POST['peigiri'];

if ($matn==0){?>
<div class="row">
    <div class="col-md-12">
        <p class="matn">لطفا قیمت را با توجه محدودیت زمانی تعیین کنید</p><br><br><br>
        <p class="matn">  متن تخصصی </p><br><br><br>
        <form action="takhasosi-type-opration.php" method="POST" class="form-matn">
        <input type="hidden" name="matn" value="<?php echo $matn ?>">
        <input type="hidden" name="peigiri" value="<?php echo $peigiri ?>">
        یک روزه<input type="number"  name="dayy" value="" ><br>
        18ساعت<input type="number"  name="eghiteen" value="" class="space-matn"><br>
       12ساعت<input type="number"  name="twelve" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
        </form>
    </div>
<?php
}
else if  ($matn==1){?>
   <div class="row">
    <div class="col-md-12">
        <p class="matn">لطفا قیمت را با توجه محدودیت زمانی تعیین کنید</p><br><br><br>
        <p class="matn">متن تخصصی ویژه  </p><br><br><br>
        <form action="vizheh-type-opration.php" method="POST" class="form-matn">
        یک روزه<input type="number"  name="dayy" value="" ><br>
        18ساعت<input type="number"  name="eghiteen" value="" class="space-matn"><br>
       12ساعت<input type="number"  name="twelve" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
        </form>
    </div>
    <?php
    }
    else{?>
       <div class="row">
    <div class="col-md-12">
        <p class="matn">لطفا قیمت را با توجه محدودیت زمانی تعیین کنید</p><br><br><br>
        <p class="matn">متن عمومی </p><br><br><br>
        <form action="omoomi-type-opration.php" method="POST" class="form-matn">
        یک روزه<input type="number"  name="dayy" value="" ><br>
        18ساعت<input type="number"  name="eghiteen" value="" class="space-matn"><br>
       12ساعت<input type="number"  name="twelve" value="" class="space-matn"><br>
        <button type="submit" name="motoon-btn" value="">ثبت</button>
        </form>
    </div>
   <?php

    }
include_once("footer.php");
?>