<?php
/**แสดงสูตรคูณแม่ 2 */
?>
<!DOCTYPE html>
<html>
    <head>
        <body>
            <?php
            $myvar = 2; 
            ?>
            <h1>สูตรคูณแม่ <?php echo $myvar; ?></h1>
            <?php 
            for ($i = 1 ; $i <= 12; $i++){
                
                $result = $myvar * $i;
                
            echo "$myvar * $i  = $result <br>";
            
            }
            ?>
        </body>
    </head>
</html>