
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <body class="contanier text-center">
            <?php $s = 1?>
            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-subtle-3 text-center"><h1>แม่สูตรคูณ <span class="badge text-bg-secondary">มหาสนุก</span></h1></div>     
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col"><form method="post"
                action="{{url('mycontroller')}}"> 
                @csrf
                    <div class="form-floating"><input type="Number" class="form-control" id="floatingInput" placeholder="num" name = "myinput">
                    <label for="floatingInput">Input Number</label>
                    </div>
                    <div class="d-grid gap-2"><input class="btn btn-primary" type="submit" value="Submit"></div></form>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                    <div class="col">
                    
                            <?php 
                            
                                if(isset($_POST['myinput'])){
                                    $s++;
                                    for ($i = 1 ; $i <= 12; $i++){
                                        $myvar = $_POST['myinput'];
                                        $result = $myvar * $i;
                                        if($i == 1){

                echo "</div>
                    <div class='col'>         
                        <table class='table table-hover '>
                            <tbody>";                              
                                            echo "<br><h2 > สูตรคูณแม่ $myinput </h2>  ";
                                            echo "<br>";
                                        }
                                        if ($i%2 == 0) {
                                            echo "<tr class='table-info '>";
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
                                    }
                                }
                            
                            ?>
                            </tbody>
                        </table>                   
                    </div>
                    <div class="col">
                        <?php
                        if ($s == 2) {
                            echo ""; 
                        }
                        
                        ?>
                    </div>
            </div>
            
        </body>
    </head>
</html>