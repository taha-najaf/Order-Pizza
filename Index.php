<?php
    include 'config/db_connect.php';

    //CBR =>C for create the query  B for build the query R for received data of query(اسد)
    $sql='SELECT * FROM pizzas';//C

    $result=mysqli_query($conn,$sql);//B

    $pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);//R

    mysqli_free_result($result);
    mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
 
    <?php include ("header.php");?>

    <h4 class="center grey-text">Pizzas</h4>

    <div class="container">
        <div class="row">
            <?php foreach ($pizzas as $pizza){?>
                <div class="col s6 md3">
                    <div class="card z-depth-3">
                        <img src="config/img/pizza2-1447860.svg" class="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                        <ul>
                            <?php foreach (explode(',',$pizza['ingredients'])as $ing){?>
                                <li><?php echo htmlspecialchars($ing); ?></li>
                                <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
                    </div>
                </div>
                </div> 
            <?php } ?>
        </div>
    </div>            
    <?php include ("footer.php");?> 
</html>
