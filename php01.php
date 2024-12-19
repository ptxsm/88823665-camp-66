<?php
/**แสดงสูตรคูณแม่ 2 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="mystyle01.css" />
        <body>
            <?php
            $myvar = 2; 
            ?>
            <div class="p-3 mb-2 bg-danger-subtle text-danger-emphasis text-center"><h1 >สูตรคูณแม่ <?php echo $myvar; ?></h1></div>
            
            <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <table class="table table-hover ">
                    <tbody>
                        <?php 
                        for ($i = 1 ; $i <= 12; $i++){
                            $result = $myvar * $i;
                            if ($i%2 == 0) {
                                echo "<tr class='table-danger '>";
                                echo "<th scope='row'> $myvar </th>"; 
                                echo "<td '> X </td>";
                                echo "<td> $i </td>";
                                echo "<td>  =  </td>";
                                echo "<td>  $result  </td>";
                                echo "</tr>";
                            } else {
                                echo "<tr >";
                                echo "<th scope='row'> $myvar </th>"; 
                                echo "<td '> X </td>";
                                echo "<td> $i </td>";
                                echo "<td>  =  </td>";
                                echo "<td>  $result  </td>";
                                echo "</tr>";
                            }
                            }?>
                    </tbody>
                    </table>                   
                </div>
                <div class="col"></div>
            </div>
            </div>         



            
        </body>
    </head>
</html>