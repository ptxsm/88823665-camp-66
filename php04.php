<?php

/***/
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle04.css" />

<body class="container text-center">
    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-subtle-3 text-center">
        <h1>เลขคู่ เลขคี่ <span class="badge text-bg-secondary">1-100</span></h1>
    </div>
    <br><br>
    <div >
        <div class='row'>
            <div class="col"></div>
            <div class="col">
                <form method="POST" action="http://localhost/88823665-camp-66/php04.php?">
                    <div class="form-floating"><input type="Number" class="form-control" id="floatingInput" placeholder="num" name="num">
                        <label for="floatingInput">Input Number</label>
                    </div>
            </div>
            <div class="col">
                <form method="POST" action="http://localhost/88823665-camp-66/php04.php?">
                    <div class="form-floating"><input type="Number" class="form-control" id="floatingInput" placeholder="num" name="num1">
                        <label for="floatingInput">Input Number</label>
                    </div>
            </div>
            <div class="col"></div>
        </div>
        <div class='row'>
            <div class="col"></div>
            <div class="col">
                <div class="d-grid gap-2"><input class="btn btn-primary" type="submit" value="Submit"></div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div> <br><br>
    <div class="row">
                <div class="col"></div>
                
    <?php
            if (isset($_POST['num']) && isset($_POST['num1'])) {
                $myvar = $_POST['num'];
                $myvar1 = $_POST['num1'];
                if ($myvar < $myvar1) {
                    $min = $myvar;
                    $max = $myvar1;
                } else {
                    $min = $myvar1;
                    $max = $myvar;
                }
    
                echo "<div class='col'><h1>เลขคู่</h1>";
                
                for ($i = $min; $i <= $max; $i++) {
                   
                    if ($i % 2 == 0) {

                        echo "<table class='table table-striped'><tr><td><div class='d-flex justify-content-center'> {$i}</div></td><tr></table>";
                    } 
                  
                }
                echo "</div>";
                echo "<div class='col'><h1  >เลขคี่</h1>";
                for ($i = $min; $i <= $max; $i++) {
                   
                    if ($i % 2 != 0) {
                        echo "<table class='table table-striped'><tr><td><div class='d-flex justify-content-center'> {$i}</div></td><tr></table>";
                    } 
                  
                }
                echo "</div>";
            }
            ?>
            
            <div class="col"></div></div>
</body>
</head>

</html>