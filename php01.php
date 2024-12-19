<?php
/**แสดงสูตรคูณแม่ 2 */
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <body>
        
            <?php
            $myvar = 2; 
            ?>
            <div class="text-bg-primary p-3 text-center"><h1>สูตรคูณแม่ <?php echo $myvar; ?></h1></div>
            <?php 
            for ($i = 1 ; $i <= 12; $i++){
                $result = $myvar * $i;
                
            echo "$myvar * $i  = $result <br>";
            
            }
            ?>
        </body>
    </head>
</html>