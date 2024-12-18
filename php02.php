<?php
/***/
?>
<!DOCTYPE html>
<html>
    <head>
        <body>
       
            <h1>1-100 <?php ; ?></h1>
            <?php 
            for ($i = 1 ; $i <= 100; $i++){
                if ($i%2 == 0 ){
                    echo "$i เป็นเลขคู่ <br>";
                }
                else{
                    echo "$i เป็นเลขคี่ <br>";
                }
            
    
            }
            ?>
        </body>
    </head>
</html>