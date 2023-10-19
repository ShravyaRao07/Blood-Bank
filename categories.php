<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<div class="container" >
       
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-header">
                        <h4 > Categories
                            <!--<a href="Addcategory.php" class="btn-btn-primary float-end"></a>-->
                        </h4>
                    </div>
                        <div class="card-body">
                           

                            <div class="table-responsive">
                                <div class="table">
                                    <div class="name">
                                        
                                            
                                            <p>NAME</p>
                                            
                                        
                                    
                                   
                                        <?php
                                        include('conn/connect.php');
                                        
                                            $category = "select * from category";
                                            $category_run = mysqli_query($conn, $category);
                                            if(mysqli_num_rows($category_run) > 0)
                                            {
                                                foreach($category_run as $item)
                                                {
                                        ?>
                                                
                                                
                                                    <a href="prod.php?id=<?php echo $item['category_id'];?>">
                                                    <h4><?= $item['category_name']?></h4>
                                                
                                                
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                
                                                    <h2>No Record Found</h2>
                                               
                                                <?php
                                            }
                                            ?>
                                        
                                        </a>
                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>