<?php
/**แสดงสูตรคูณ */
?>
<!DOCTYPE html>
<html>
    <head>
        <body>
        <h1>แม่สูตรคูณ</h1>
        
            <form method="get" action="http://localhost/88823665-camp-66/php03.php?"> 
                <input type="text" name = "num">
                <button type="submit">summit</button>
            </form>
        
            <?php 
            if(isset($_GET['num'])){
                echo "สูตรคูณแม่ ";
                echo $_GET['num'];
                echo "<br>";
            for ($i = 1 ; $i <= 12; $i++){
                
                
                $myvar = $_GET['num'];
                $result = $myvar * $i;
            echo "$myvar * $i  = $result <br>";
            }
        }
            ?>
        </body>
    </head>
</html>