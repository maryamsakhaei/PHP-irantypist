<table>
        <?php  
                $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {                              
            ?> 
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            
            <td>
                <?php 
                if($matn==0) {
                    ?>

                    <p class="zaman-tahvil">زمان تحویل عادی</p>
                    <p class="kind-moton"> 
                         <?php
                         $daytakhasos=$row['daytakhasos'];
                         echo $daytakhasos;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                    <p class="kind-moton">
                        <?php
                         $eghiteentakhasos=$row['eghiteentakhasos'];
                         echo $eghiteentakhasos;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل فوری</p>
                    <p class="kind-moton">
                        <?php
                         $twelvetakhasos=$row['twelvetakhasos'];
                         echo $twelvetakhasos;
                         ?>
                     </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
            </tr>
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
                <td><input type="radio" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="radio" name="takhasosi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="radio" name="takhasosi" value="" class="checkboxx-space"></td>
            </tr>
    
            <tr>
                <td><p>متون عمومی </p></td>
                <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="hidden" name="omoomi" value="" class="checkboxx-space"></td>
            </tr>
            ?>
            <?php

                }
                ?>
               
        <?php

               }   
            }
            ?>
        </table>
        </div>
        <!--=======================================================================-->
         <!--=======================================================================-->
        <table>
        <?php  
                $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {                               
            ?> 
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            
            <td>
                <?php 
                if($matn==1) {
                    ?>

                    <p class="zaman-tahvil">زمان تحویل عادی</p>
                    <p class="kind-moton"> 
                         <?php
                         $dayvizheh=$row['$dayvizheh'];
                         echo $dayvizheh;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                    <p class="kind-moton">
                        <?php
                         $eghiteenvizheh=$row['eghiteenvizheh'];
                         echo $eghiteenvizheh;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل فوری</p>
                    <p class="kind-moton">
                        <?php
                         $twelvevizheh=$row['twelvevizheh'];
                         echo $twelvevizheh;
                         ?>
                     </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
            </tr>
            <tr>
                <form action="payment-translate.php" method="POST">
                <td> <p>متون تخصصی ویژه</p></td>
                <td><input type="radio" name="vizheh" value="" class="checkboxx-space"></td>
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
            ?>
            <?php

                }
                ?>
               
        <?php

               }   
            }
            ?>
        </table>
        </div>
        
        <!--=======================================================================-->
        <?php 
                if($matn==2) {
                    ?>
        <table>
        <?php  
                $sql = "SELECT * FROM matntranslate WHERE peigiri='$peigiri'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {                               
            ?> 
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            
            <td>
               

                    <p class="zaman-tahvil">زمان تحویل عادی</p>
                    <p class="kind-moton"> 
                         <?php
                         $dayomoomi=$row['$dayomoomi'];
                         echo $dayomoomi;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل نیمه فوری</p>
                    <p class="kind-moton">
                        <?php
                         $eghiteenomoomi=$row['eghiteenomoomi'];
                         echo $eghiteenvizheh;
                         ?>
                    </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <p class="zaman-tahvil">زمان تحویل فوری</p>
                    <p class="kind-moton">
                        <?php
                         $twelvevizheh=$row['twelvevizheh'];
                         echo $twelvevizheh;
                         ?>
                     </p>
                    <p class="kind-moton">از زمان پیش پرداخت</p>
                </td>
            </tr>
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
                <td> <input type="radio" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td><input type="radio" name="omoomi" value="" class="checkboxx-space"></td>
                <td></td>
                <td> <input type="radio" name="omoomi" value="" class="checkboxx-space"></td>
            </tr>
            ?>
            <?php

                }
                ?>
               
        <?php

               }   
            }
            ?>
        </table>
        
        