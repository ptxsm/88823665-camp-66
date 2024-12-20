<?php
/***/
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle04.css" />    
        <body >
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-subtle-3 text-center">
  <h1>เลขคู่ เลขคี่  <span class="badge text-bg-secondary">1-100</span></h1></div> 
  <br><br>
            <div class="container text-center">
                <div class='row'>
                        <div class="col"><div class="btn-group"> <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            เลขคู่ </button><ul class="dropdown-menu"><li>
            <?php
            for ($i = 1 ; $i <= 100; $i++){
                if ($i%2 == 0 ){
                    echo "<a class='dropdown-item' href='#'> $i</a>";
                }
            }?></li></ul></div></div> 
            <div class="col"><div class="btn-group"> <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            เลขคี่ </button><ul class="dropdown-menu"><li>
            <?php
            for ($i = 1 ; $i <= 100; $i++){
                if ($i%2 != 0 ){
                    echo "<a class='dropdown-item' href='#'> $i</a>";
                }
            }?></li></ul></div></div>
            </div>
            </div>  <br><br> 
            <img src="what.jpg" class="rounded float-start" alt="C:\xampp\htdocs\88823665-camp-66\what.jpg">        
            <img src="whatToo.jpg" class="rounded float-end" alt="C:\xampp\htdocs\88823665-camp-66\whatToo.jpg">  
        </body>
    </head>
</html>